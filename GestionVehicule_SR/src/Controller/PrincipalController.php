<?php

namespace App\Controller;
use App\Entity\Utilisation;
use App\Entity\Vehicule;
use App\Entity\Destination;
use App\Entity\Historique;
use App\Entity\Service;
use App\Entity\Personne;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\HttpFoundation\Request;
use Acme\DemoBundle\Form\Type\FieldsetType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PrincipalController extends AbstractController
{
    /**
     * @Route("/principal", name="principal")
     */
    public function index(): Response
    {
        return $this->render('principal/index.html.twig', [
            'controller_name' => 'PrincipalController',
        ]);
    }
    /**
     * @Route("/affecterVehicule/{id}/{idvehicule}", name="affecterVehicule")
     */
    public function affecterVehicule($id,$idvehicule)
    {
        $repository=$this->getDoctrine()->getRepository(Utilisation::class);       
        $uneUtilisation = new Utilisation;
        $uneUtilisation = $repository->find($id);
        if (isset($uneUtilisation)){
            $uneUtilisation->setEtat("En cours");
            $vehicule = self::searchVehiculeId($idvehicule);
            $uneUtilisation->setVehicule($vehicule);
            self::addHistorique($uneUtilisation->getDatedemande(),$uneUtilisation->getDatedebut(),$uneUtilisation->getDatefin(),$uneUtilisation->getEtat(),$uneUtilisation->getCommentaire(),$idvehicule);
            $em=$this->getDoctrine()->getManager();
            $em->persist($uneUtilisation);
            $em->flush();
        }
        
        return $this->render('principal/affecterVehicule.html.twig',[
            'controller_name' => 'PrincipalController',
            'utilisation'=>$uneUtilisation,
            ]);
    }
    // ...
    public function searchVehiculeId($idvehicule)
    {
        $repository=$this->getDoctrine()->getRepository(Vehicule::class);       
        $unVehicule = new Vehicule;
        $unVehicule = $repository->find($idvehicule);
        $unVehicule->getId($idvehicule);
        return $unVehicule;
    }
    public function addHistorique($datedemande,$datedebut,$datefin,$etat,$commentaire,$vehicule){ 
        $unHistorique = new Historique;
        $unHistorique->setDatedemande($datedemande);
        $unHistorique->setDatedebut($datedebut);
        $unHistorique->setDatefin($datefin);
        $unHistorique->setEtat($etat);
        $unHistorique->setCommentaire($commentaire);
        $unHistorique->setVehiculeId($vehicule);
        $em=$this->getDoctrine()->getManager();
        $em->persist($unHistorique);
        $em->flush();
    }

	/**
     * @Route("/gestiondemandes", name="gestiondemandes")
     */
    public function gestiondemandes(): Response
    {

        $repository=$this->getDoctrine()->getRepository(Utilisation::class);
        $lesUtilisations=$repository->findAll();
        $repository2=$this->getDoctrine()->getRepository(Vehicule::class);
        $lesVehicules=$repository2->findAll();
        $repository3=$this->getDoctrine()->getRepository(Destination::class);
        $lesDestinations=$repository3->findAll();
        return $this->render('principal/gestiondemandes.html.twig', [
            'controller_name' => 'PrincipalController',
            'utilisations'=>$lesUtilisations,
            'vehicules'=>$lesVehicules,
            'destinations'=>$lesDestinations,
        ]);
    }

    /**
     * @Route("/supprimer/{id}", name="supprimer")
     */
    public function supprimer($id)
    {
        $repository=$this->getDoctrine()->getRepository(Utilisation::class);
        $uneUtilisation=$repository->find($id);
        if (isset($uneUtilisation)) {
            $em=$this->getDoctrine()->getManager();
            $em->remove($uneUtilisation);
            $em->flush();
        }
        return $this->render('principal/supprimer.html.twig',[
            'controller_name' => 'PrincipalController',
            'utilisations'=>$uneUtilisation,
        ]);

    }

    /**
     * @Route("/historique", name="historique")
     */
    public function historique(): Response
    {

        $repository=$this->getDoctrine()->getRepository(Historique::class);
        $lesUtilisations=$repository->findAll();
        $repository2=$this->getDoctrine()->getRepository(Vehicule::class);
        $lesVehicules=$repository2->findAll();
        $repository3=$this->getDoctrine()->getRepository(Destination::class);
        $lesDestinations=$repository3->findAll();
        return $this->render('principal/historique.html.twig', [
            'controller_name' => 'PrincipalController',
            'utilisations'=>$lesUtilisations,
            'vehicules'=>$lesVehicules,
            'destinations'=>$lesDestinations,
        ]);
    }
    
    /**
     * @Route("/demande", name="demande")
     */
    public function demande(Request $request)
    {

        $em=$this->getDoctrine()->getManager();
        $utilisation=new Utilisation;
        //$repository=$this->getDoctrine()->getRepository(Destination::class);
        //$lesDestinations=$repository->findAll();
        $form = $this->createFormBuilder($utilisation)
            ->add('datedemande',DateType::class,array('label'=>'Date de la demande :', 'disabled' => true , 'data' => new \DateTime("now")))
            ->add('datedebut',DateType::class,array(
                'widget' => 'choice',
                'years' => range(date('Y'), date('Y')+5), 'label'=>'Date de début :'))
            ->add('datefin',DateType::class,array('label'=>'Date de fin :', 'years' => range(date('Y'), date('Y')+5)))
            ->add('etat',TextType::class,array('label'=>'Etat de la demande : ','disabled' => true, 'data' =>'En attente'))
            ->add('save',SubmitType::class,array('label'=> 'Enregistrer la demande'))
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $utilisation=$form->getData();
            $this->date = new \DateTime('now');
            $utilisation->setDatedemande($this->date);
            $utilisation->setEtat('En attente');
            $em=$this->getDoctrine()->getManager();
            $em->persist($utilisation);
            $em->flush();
            return $this->redirectToRoute('principal');
            
        }
        return $this->render('principal/demande.html.twig',array(
            'form' => $form->createView(),
        ));
    }
}
