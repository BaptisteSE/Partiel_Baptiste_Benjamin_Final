<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* principal/historique.html.twig */
class __TwigTemplate_8563a606a69de7a1a536b047f8c91e4d98891e1cdf73075342caadcab6651a9f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "principal/historique.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "principal/historique.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "principal/historique.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello PrincipalController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<center><h1><u>Affichage de l'historique</u></hi></center>

   


<h2>Voici la liste des demandes acceptées :</h2>
    Nombre des demandes dans l'historique : ";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["utilisations"]) || array_key_exists("utilisations", $context) ? $context["utilisations"] : (function () { throw new RuntimeError('Variable "utilisations" does not exist.', 13, $this->source); })())), "html", null, true);
        echo "</br></br>
    <table class=\"table table-hover\">
        <thead class=\"thead-dark\">
            <tr>
                <th>Numéro de demande</th>
                <th>Date de demande</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Etat</th>
                <th>commentaire</th>
                <th>Destination</th>
                <th>Véhicule</th>

            </tr>
        </thead>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisations"]) || array_key_exists("utilisations", $context) ? $context["utilisations"] : (function () { throw new RuntimeError('Variable "utilisations" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["utilisation"]) {
            // line 29
            echo "        <thead class=\"thead-light\">
            ";
            // line 30
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["utilisation"], "etat", [], "any", false, false, false, 30), "En cours"))) {
                // line 31
                echo "            <tr>
                <th>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisation"], "id", [], "any", false, false, false, 32), "html", null, true);
                echo "</th><th>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisation"], "datedemande", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true);
                echo "</th><th>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisation"], "datedebut", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true);
                echo "</th><th>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisation"], "datefin", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true);
                echo "</th>
                <th>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisation"], "etat", [], "any", false, false, false, 33), "html", null, true);
                echo "</th>
                ";
                // line 34
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["utilisation"], "commentaire", [], "any", false, false, false, 34), null))) {
                    // line 35
                    echo "                    <th>Pas de commentaire</th>
                ";
                } else {
                    // line 37
                    echo "                    <th>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisation"], "commentaire", [], "any", false, false, false, 37), "html", null, true);
                    echo "</th>
                ";
                }
                // line 39
                echo "                ";
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["utilisation"], "getDestinationId", [], "method", false, false, false, 39), null))) {
                    // line 40
                    echo "                    <th>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["utilisation"], "getDestinationId", [], "method", false, false, false, 40), "getDestination", [], "method", false, false, false, 40), "html", null, true);
                    echo "</th>                   
                ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 41
$context["utilisation"], "getDestinationId", [], "method", false, false, false, 41), null))) {
                    // line 42
                    echo "                    <th>Pas de destination</th>
                ";
                }
                // line 44
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 44, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
                    // line 45
                    echo "                        ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["utilisation"], "getVehiculeId", [], "method", false, false, false, 45), twig_get_attribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 45)))) {
                        // line 46
                        echo "                        <th>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "immatriculation", [], "any", false, false, false, 46), "html", null, true);
                        echo "</th>
                        ";
                    }
                    // line 48
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicule'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                
            ";
            }
            // line 51
            echo "        </thead>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "            Pas de demande trouvé.
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    
    </table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "principal/historique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 55,  198 => 53,  192 => 51,  188 => 49,  182 => 48,  176 => 46,  173 => 45,  168 => 44,  164 => 42,  162 => 41,  157 => 40,  154 => 39,  148 => 37,  144 => 35,  142 => 34,  138 => 33,  128 => 32,  125 => 31,  123 => 30,  120 => 29,  115 => 28,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PrincipalController!{% endblock %}

{% block body %}

<center><h1><u>Affichage de l'historique</u></hi></center>

   


<h2>Voici la liste des demandes acceptées :</h2>
    Nombre des demandes dans l'historique : {{utilisations|length}}</br></br>
    <table class=\"table table-hover\">
        <thead class=\"thead-dark\">
            <tr>
                <th>Numéro de demande</th>
                <th>Date de demande</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Etat</th>
                <th>commentaire</th>
                <th>Destination</th>
                <th>Véhicule</th>

            </tr>
        </thead>
        {% for utilisation in utilisations %}
        <thead class=\"thead-light\">
            {% if utilisation.etat == 'En cours'%}
            <tr>
                <th>{{utilisation.id}}</th><th>{{utilisation.datedemande|date('Y-m-d')}}</th><th>{{utilisation.datedebut|date('Y-m-d')}}</th><th>{{utilisation.datefin|date('Y-m-d')}}</th>
                <th>{{utilisation.etat}}</th>
                {% if utilisation.commentaire == null %}
                    <th>Pas de commentaire</th>
                {% else %}
                    <th>{{utilisation.commentaire}}</th>
                {% endif %}
                {% if utilisation.getDestinationId() != null %}
                    <th>{{utilisation.getDestinationId().getDestination()}}</th>                   
                {% elseif utilisation.getDestinationId() == null %}
                    <th>Pas de destination</th>
                {% endif %}
                {% for vehicule in vehicules %}
                        {% if utilisation.getVehiculeId() == vehicule.id %}
                        <th>{{vehicule.immatriculation}}</th>
                        {% endif %}
                    {% endfor %}
                
            {% endif %}
        </thead>
        {% else %}
            Pas de demande trouvé.
        {% endfor %}
    
    </table>


{% endblock %}", "principal/historique.html.twig", "C:\\Users\\sio2020\\Desktop\\PPE SYMFONY\\NEW2\\Partiel-Baptiste-Benjamin\\GestionVehicule_SR\\templates\\principal\\historique.html.twig");
    }
}
