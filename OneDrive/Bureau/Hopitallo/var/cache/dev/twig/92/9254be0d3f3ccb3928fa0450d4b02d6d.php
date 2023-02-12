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

/* home/hopital_urgence.html.twig */
class __TwigTemplate_ae5c1b2beeecf00d4dc9f10e01c2d79c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'nav' => [$this, 'block_nav'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/hopital_urgence.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/hopital_urgence.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/hopital_urgence.html.twig", 1);
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

        echo " Hopitallo-Hopitaux";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        echo "  
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto py-0\">
                        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"nav-item nav-link \">Home</a>
                        <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hopital");
        echo "\"  class=\"nav-item nav-link \">Hopitaux</a>
                      
                        <a href=\"hopital_urgence.html\" class=\"nav-item nav-link active\">Urgence</a>
                   
                        <a href=\"event.html\" class=\"nav-item nav-link\">Evenement</a>
                        <a href=\"profil.html\" class=\"nav-item nav-link\">Profil</a>
                    </div>
                </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 
 <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Medical Packages</h5>
                <h1 class=\"display-4\">Our Urgence available</h1>
            </div>
            <div class=\"owl-carousel price-carousel position-relative\" style=\"padding: 0 45px 45px 45px;\">
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src=\"img/price-1.jpg\" alt=\"\">
                     
                    </div>
                    <div class=\"text-center py-5\">
                        <h1>Hopital Ariana </h1>
                        <p>Adresse : 40, rue de ariana</p>
                        <p>Tel : 01 49 81 21 11</p>
                        <p>Directeur/Directrice : Khalil said</p>
                        <p>Telephone Service</p>
                        <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("urgence");
        echo "\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
                    </div>
                </div>
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src=\"img/price-2.jpg\" alt=\"\">
                      
                    </div>
                    <div class=\"text-center py-5\">
                        <h1>Hopital Ariana </h1>
                        <p>Adresse : 40, rue de ariana</p>
                        <p>Tel : 01 49 81 21 11</p>
                        <p>Directeur/Directrice : Khalil said</p>
                        <p>Telephone Service</p>
                        <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("urgence");
        echo "\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
                    </div>
                </div>
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src=\"img/price-3.jpg\" alt=\"\">
                      
                    </div>
                    <div class=\"text-center py-5\">
                        <h1>Hopital Ariana </h1>
                        <p>Adresse : 40, rue de ariana</p>
                        <p>Tel : 01 49 81 21 11</p>
                        <p>Directeur/Directrice : Khalil said</p>
                        <p>Telephone Service</p>
                        <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("urgence");
        echo "\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
                    </div>
                </div>
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src=\"img/price-4.jpg\" alt=\"\">
                     
                    </div>
                    <div class=\"text-center py-5\">
                        <h1>Hopital Ariana </h1>
                        <p>Adresse : 40, rue de ariana</p>
                        <p>Tel : 01 49 81 21 11</p>
                        <p>Directeur/Directrice : Khalil said</p>
                        <p>Telephone Service</p>
                        <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("urgence");
        echo "\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/hopital_urgence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 81,  180 => 67,  163 => 53,  146 => 39,  116 => 20,  97 => 9,  93 => 8,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Hopitallo-Hopitaux{% endblock %} 

 {% block nav %}  
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto py-0\">
                        <a href=\"{{path('app_home')}}\" class=\"nav-item nav-link \">Home</a>
                        <a href=\"{{path('hopital')}}\"  class=\"nav-item nav-link \">Hopitaux</a>
                      
                        <a href=\"hopital_urgence.html\" class=\"nav-item nav-link active\">Urgence</a>
                   
                        <a href=\"event.html\" class=\"nav-item nav-link\">Evenement</a>
                        <a href=\"profil.html\" class=\"nav-item nav-link\">Profil</a>
                    </div>
                </div>
                {% endblock %}  


{% block body %} 
 <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Medical Packages</h5>
                <h1 class=\"display-4\">Our Urgence available</h1>
            </div>
            <div class=\"owl-carousel price-carousel position-relative\" style=\"padding: 0 45px 45px 45px;\">
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src=\"img/price-1.jpg\" alt=\"\">
                     
                    </div>
                    <div class=\"text-center py-5\">
                        <h1>Hopital Ariana </h1>
                        <p>Adresse : 40, rue de ariana</p>
                        <p>Tel : 01 49 81 21 11</p>
                        <p>Directeur/Directrice : Khalil said</p>
                        <p>Telephone Service</p>
                        <a href=\"{{path('urgence')}}\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
                    </div>
                </div>
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src=\"img/price-2.jpg\" alt=\"\">
                      
                    </div>
                    <div class=\"text-center py-5\">
                        <h1>Hopital Ariana </h1>
                        <p>Adresse : 40, rue de ariana</p>
                        <p>Tel : 01 49 81 21 11</p>
                        <p>Directeur/Directrice : Khalil said</p>
                        <p>Telephone Service</p>
                        <a href=\"{{path('urgence')}}\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
                    </div>
                </div>
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src=\"img/price-3.jpg\" alt=\"\">
                      
                    </div>
                    <div class=\"text-center py-5\">
                        <h1>Hopital Ariana </h1>
                        <p>Adresse : 40, rue de ariana</p>
                        <p>Tel : 01 49 81 21 11</p>
                        <p>Directeur/Directrice : Khalil said</p>
                        <p>Telephone Service</p>
                        <a href=\"{{path('urgence')}}\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
                    </div>
                </div>
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src=\"img/price-4.jpg\" alt=\"\">
                     
                    </div>
                    <div class=\"text-center py-5\">
                        <h1>Hopital Ariana </h1>
                        <p>Adresse : 40, rue de ariana</p>
                        <p>Tel : 01 49 81 21 11</p>
                        <p>Directeur/Directrice : Khalil said</p>
                        <p>Telephone Service</p>
                        <a href=\"{{path('urgence')}}\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %} ", "home/hopital_urgence.html.twig", "C:\\Users\\mouha\\OneDrive\\Bureau\\Hopitallo\\templates\\home\\hopital_urgence.html.twig");
    }
}
