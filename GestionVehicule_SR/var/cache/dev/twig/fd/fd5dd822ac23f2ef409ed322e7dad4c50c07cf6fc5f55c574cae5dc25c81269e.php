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

/* principal/gestiondemandes.html.twig */
class __TwigTemplate_7c4b647b873a9ecd073cf31713e53f6aab846b18261d525e4392389fd09fbf91 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "principal/gestiondemandes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "principal/gestiondemandes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "principal/gestiondemandes.html.twig", 1);
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
<center><h1><u>Gestion des demandes</u></hi></center>

   


<h2>Voici la liste des demandes en attente :</h2>
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
                <th>Affecter sa demande à un véhicule (Accepter)</th>
                <th>Refuser la demande</th>
            </tr>
        </thead>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisations"]) || array_key_exists("utilisations", $context) ? $context["utilisations"] : (function () { throw new RuntimeError('Variable "utilisations" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["utilisation"]) {
            // line 28
            echo "        <thead class=\"thead-light\">
            ";
            // line 29
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["utilisation"], "etat", [], "any", false, false, false, 29), "En attente"))) {
                // line 30
                echo "            <tr>
                <th>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisation"], "id", [], "any", false, false, false, 31), "html", null, true);
                echo "</th><th>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisation"], "datedemande", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true);
                echo "</th><th>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisation"], "datedebut", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true);
                echo "</th><th>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisation"], "datefin", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true);
                echo "</th>
                <th>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisation"], "etat", [], "any", false, false, false, 32), "html", null, true);
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
                echo "                

                ";
                // line 41
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["utilisation"], "getDestination", [], "method", false, false, false, 41), null))) {
                    // line 42
                    echo "                    <th>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["utilisation"], "getDestination", [], "method", false, false, false, 42), "getDestination", [], "method", false, false, false, 42), "html", null, true);
                    echo "</th>                   
                ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 43
$context["utilisation"], "getDestination", [], "method", false, false, false, 43), null))) {
                    // line 44
                    echo "                    <th>Pas de destination</th>
                ";
                }
                // line 46
                echo "
                <th>
                    
                    ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 49, $this->source); })()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
                    // line 50
                    echo "                        ";
                    if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["utilisation"], "getVehicule", [], "method", false, false, false, 50), twig_get_attribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 50)))) {
                        // line 51
                        echo "                        <a href=\"\\affecterVehicule/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisation"], "id", [], "any", false, false, false, 51), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 51), "html", null, true);
                        echo "\" type=\"button\" value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisation"], "id", [], "any", false, false, false, 51), "html", null, true);
                        echo "\" class=\"btn btn-outline-success\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "immatriculation", [], "any", false, false, false, 51), "html", null, true);
                        echo "</a>
                        ";
                    }
                    // line 53
                    echo "                        ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 54
                    echo "                        Pas de véhicule disponible
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicule'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "                    
                    
                </th>

                <th>
                    <a type=\"button\"  class=\"btn btn btn-outline-danger\">Refuser </a>
                </th>
                
            </tr>
            ";
            }
            // line 66
            echo "        </thead>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            echo "            Pas de demande trouvé.
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    
    </table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "principal/gestiondemandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 70,  223 => 68,  217 => 66,  205 => 56,  198 => 54,  193 => 53,  181 => 51,  178 => 50,  173 => 49,  168 => 46,  164 => 44,  162 => 43,  157 => 42,  155 => 41,  151 => 39,  145 => 37,  141 => 35,  139 => 34,  134 => 32,  124 => 31,  121 => 30,  119 => 29,  116 => 28,  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PrincipalController!{% endblock %}

{% block body %}

<center><h1><u>Gestion des demandes</u></hi></center>

   


<h2>Voici la liste des demandes en attente :</h2>
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
                <th>Affecter sa demande à un véhicule (Accepter)</th>
                <th>Refuser la demande</th>
            </tr>
        </thead>
        {% for utilisation in utilisations %}
        <thead class=\"thead-light\">
            {% if utilisation.etat == 'En attente'%}
            <tr>
                <th>{{utilisation.id}}</th><th>{{utilisation.datedemande|date('Y-m-d')}}</th><th>{{utilisation.datedebut|date('Y-m-d')}}</th><th>{{utilisation.datefin|date('Y-m-d')}}</th>
                <th>{{utilisation.etat}}</th>

                {% if utilisation.commentaire == null %}
                    <th>Pas de commentaire</th>
                {% else %}
                    <th>{{utilisation.commentaire}}</th>
                {% endif %}
                

                {% if utilisation.getDestination() != null %}
                    <th>{{utilisation.getDestination().getDestination()}}</th>                   
                {% elseif utilisation.getDestination() == null %}
                    <th>Pas de destination</th>
                {% endif %}

                <th>
                    
                    {% for vehicule in vehicules %}
                        {% if utilisation.getVehicule() != vehicule.id %}
                        <a href=\"\\affecterVehicule/{{utilisation.id}}/{{vehicule.id}}\" type=\"button\" value=\"{{utilisation.id}}\" class=\"btn btn-outline-success\">{{vehicule.immatriculation}}</a>
                        {% endif %}
                        {% else %}
                        Pas de véhicule disponible
                    {% endfor %}
                    
                    
                </th>

                <th>
                    <a type=\"button\"  class=\"btn btn btn-outline-danger\">Refuser </a>
                </th>
                
            </tr>
            {% endif %}
        </thead>
        {% else %}
            Pas de demande trouvé.
        {% endfor %}
    
    </table>


{% endblock %}
", "principal/gestiondemandes.html.twig", "C:\\Users\\sio2020\\Desktop\\PPE SYMFONY\\Partiel-Baptiste-Benjamin\\GestionVehicule_SR\\templates\\principal\\gestiondemandes.html.twig");
    }
}
