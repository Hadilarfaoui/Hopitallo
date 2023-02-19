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

/* admin_event/index.html.twig */
class __TwigTemplate_e89329fe1a4f83b3ea9d376dbf25fbee extends Template
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
        return "base_Admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_event/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_event/index.html.twig"));

        $this->parent = $this->loadTemplate("base_Admin.html.twig", "admin_event/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Event index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3\">
                            <h6 class=\"m-0 font-weight-bold text-primary\"  style=\"text-align:center\">Event index</h6>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
    <div>
    <a style=\" display: inline-block;
  padding: 10px 20px;
  background-color: #4e73df;
  color: white;
  margin-top:15px;
  text-decoration: none;
  border-radius: 5px;\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_event_new");
        echo "\">Create new</a>
    </br>
    </br>
    </div>
    <table  class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom_e</th>
                <th>Photo</th>
                <th>Localisation</th>
                <th>Type</th>
                <th>Description</th>
                <th>Date_event</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 38
            echo "            <tr>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "nomE", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td><img style=\"width: 50px;\" src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/events/" . twig_get_attribute($this->env, $this->source, $context["event"], "photo", [], "any", false, false, false, 41))), "html", null, true);
            echo "\" ></td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "localisation", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            ((twig_get_attribute($this->env, $this->source, $context["event"], "dateEvent", [], "any", false, false, false, 45)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "dateEvent", [], "any", false, false, false, 45), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a style=\" display: inline-block;
  padding: 10px 20px;
  background-color: #4e73df;
  color: white;
  margin-top:15px;
  text-decoration: none;
  border-radius: 5px;\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_participant_index1", ["ide" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\">Participant</a>
                    <a style=\" display: inline-block;
  padding: 10px 20px;
  background-color: #4e73df;
  color: white;
  margin-top:15px;
  text-decoration: none;
  border-radius: 5px;\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_event_show", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">show</a>
                    <a style=\" display: inline-block;
  padding: 10px 20px;
  background-color: #4e73df;
  color: white;
  margin-top:15px;
  text-decoration: none;
  border-radius: 5px;\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_event_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "        </tbody>
    </table>
    </div></div>

    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin_event/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 75,  196 => 71,  187 => 67,  177 => 60,  167 => 53,  156 => 45,  152 => 44,  148 => 43,  144 => 42,  140 => 41,  136 => 40,  132 => 39,  129 => 38,  124 => 37,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_Admin.html.twig' %}

{% block title %}Event index{% endblock %}

{% block body %}
<div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3\">
                            <h6 class=\"m-0 font-weight-bold text-primary\"  style=\"text-align:center\">Event index</h6>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
    <div>
    <a style=\" display: inline-block;
  padding: 10px 20px;
  background-color: #4e73df;
  color: white;
  margin-top:15px;
  text-decoration: none;
  border-radius: 5px;\" href=\"{{ path('app_admin_event_new') }}\">Create new</a>
    </br>
    </br>
    </div>
    <table  class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom_e</th>
                <th>Photo</th>
                <th>Localisation</th>
                <th>Type</th>
                <th>Description</th>
                <th>Date_event</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for event in events %}
            <tr>
                <td>{{ event.id }}</td>
                <td>{{ event.nomE }}</td>
                <td><img style=\"width: 50px;\" src=\"{{ asset('uploads/events/'~event.photo) }}\" ></td>
                <td>{{ event.localisation }}</td>
                <td>{{ event.type }}</td>
                <td>{{ event.description }}</td>
                <td>{{ event.dateEvent ? event.dateEvent|date('Y-m-d') : '' }}</td>
                <td>
                    <a style=\" display: inline-block;
  padding: 10px 20px;
  background-color: #4e73df;
  color: white;
  margin-top:15px;
  text-decoration: none;
  border-radius: 5px;\" href=\"{{ path('app_admin_participant_index1', {'ide': event.id}) }}\">Participant</a>
                    <a style=\" display: inline-block;
  padding: 10px 20px;
  background-color: #4e73df;
  color: white;
  margin-top:15px;
  text-decoration: none;
  border-radius: 5px;\" href=\"{{ path('app_admin_event_show', {'id': event.id}) }}\">show</a>
                    <a style=\" display: inline-block;
  padding: 10px 20px;
  background-color: #4e73df;
  color: white;
  margin-top:15px;
  text-decoration: none;
  border-radius: 5px;\" href=\"{{ path('app_admin_event_edit', {'id': event.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    </div></div>

    
{% endblock %}
", "admin_event/index.html.twig", "C:\\Users\\mouha\\OneDrive\\Bureau\\Hopitallo\\templates\\admin_event\\index.html.twig");
    }
}
