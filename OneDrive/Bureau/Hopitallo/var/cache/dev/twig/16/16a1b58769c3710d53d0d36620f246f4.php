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

/* home/hopital_details.html.twig */
class __TwigTemplate_eedafaa5f256f00bed248d2962087848 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/hopital_details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/hopital_details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/hopital_details.html.twig", 1);
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
        echo "\"  class=\"nav-item nav-link active\">Hopitaux</a>
                        <a href=\"hopital_urgence.html\" class=\"nav-item nav-link\">Urgence</a>
                        <a href=\"event.html\" class=\"nav-item nav-link\">Evenement</a>
                        <a href=\"profil.html\" class=\"nav-item nav-link\">Profil</a>
                    </div>
                </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 
 <div class=\"container py-5\">
        <div class=\"row g-5\">
            <div class=\"col-lg-8\">
                <!-- Blog Detail Start -->
                <div class=\"mb-5\">
                    <img class=\"img-fluid w-100 rounded mb-5\" src=\"img/blog-2.jpg\" alt=\"\">
                    <h1 class=\"mb-4\">Diam dolor est labore duo ipsum clita sed et lorem tempor sanctus lorem kasd duo</h1>
                
                 
                </div>
                <!-- Blog Detail End -->

            </div>


            
            <!-- Sidebar Start -->
            <div class=\"col-lg-4\">
                <!-- Search Form Start -->
                <div class=\"mb-5\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control p-3\" placeholder=\"Keyword\">
                        <button class=\"btn btn-primary px-3\"><i class=\"fa fa-search\"></i></button>
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class=\"mb-5\">
                    <h4 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 mb-4\">Categories</h4>
                    <div class=\"d-flex flex-column justify-content-start\">
                        <a class=\"h5 bg-light rounded py-2 px-3 mb-2\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medecin");
        echo "\"><i class=\"fa fa-angle-right me-2\"></i>Web Design</a>
                        <a class=\"h5 bg-light rounded py-2 px-3 mb-2\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medecin");
        echo "\"><i class=\"fa fa-angle-right me-2\"></i>Web Development</a>
                        <a class=\"h5 bg-light rounded py-2 px-3 mb-2\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medecin");
        echo "\"><i class=\"fa fa-angle-right me-2\"></i>Web Development</a>
                        <a class=\"h5 bg-light rounded py-2 px-3 mb-2\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medecin");
        echo "\"><i class=\"fa fa-angle-right me-2\"></i>Keyword Research</a>
                        <a class=\"h5 bg-light rounded py-2 px-3 mb-2\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medecin");
        echo "\"><i class=\"fa fa-angle-right me-2\"></i>Email Marketing</a>
                    </div>
                </div>
                <!-- Category End -->

             


                <!-- Plain Text Start -->
                <div>
                    <h4 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 mb-4\">Plain Text</h4>
                    <div class=\"bg-light rounded text-center\" style=\"padding: 30px;\">
                        <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet diam</p>
                        <a href=\"\" class=\"btn btn-primary py-2 px-4\">Read More</a>
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/hopital_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 52,  169 => 51,  165 => 50,  161 => 49,  157 => 48,  114 => 16,  97 => 9,  93 => 8,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Hopitallo-Hopitaux{% endblock %} 

 {% block nav %}  
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto py-0\">
                        <a href=\"{{path('app_home')}}\" class=\"nav-item nav-link \">Home</a>
                      <a href=\"{{path('hopital')}}\"  class=\"nav-item nav-link active\">Hopitaux</a>
                        <a href=\"hopital_urgence.html\" class=\"nav-item nav-link\">Urgence</a>
                        <a href=\"event.html\" class=\"nav-item nav-link\">Evenement</a>
                        <a href=\"profil.html\" class=\"nav-item nav-link\">Profil</a>
                    </div>
                </div>
                {% endblock %}  
{% block body %} 
 <div class=\"container py-5\">
        <div class=\"row g-5\">
            <div class=\"col-lg-8\">
                <!-- Blog Detail Start -->
                <div class=\"mb-5\">
                    <img class=\"img-fluid w-100 rounded mb-5\" src=\"img/blog-2.jpg\" alt=\"\">
                    <h1 class=\"mb-4\">Diam dolor est labore duo ipsum clita sed et lorem tempor sanctus lorem kasd duo</h1>
                
                 
                </div>
                <!-- Blog Detail End -->

            </div>


            
            <!-- Sidebar Start -->
            <div class=\"col-lg-4\">
                <!-- Search Form Start -->
                <div class=\"mb-5\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control p-3\" placeholder=\"Keyword\">
                        <button class=\"btn btn-primary px-3\"><i class=\"fa fa-search\"></i></button>
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class=\"mb-5\">
                    <h4 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 mb-4\">Categories</h4>
                    <div class=\"d-flex flex-column justify-content-start\">
                        <a class=\"h5 bg-light rounded py-2 px-3 mb-2\" href=\"{{path('medecin')}}\"><i class=\"fa fa-angle-right me-2\"></i>Web Design</a>
                        <a class=\"h5 bg-light rounded py-2 px-3 mb-2\" href=\"{{path('medecin')}}\"><i class=\"fa fa-angle-right me-2\"></i>Web Development</a>
                        <a class=\"h5 bg-light rounded py-2 px-3 mb-2\" href=\"{{path('medecin')}}\"><i class=\"fa fa-angle-right me-2\"></i>Web Development</a>
                        <a class=\"h5 bg-light rounded py-2 px-3 mb-2\" href=\"{{path('medecin')}}\"><i class=\"fa fa-angle-right me-2\"></i>Keyword Research</a>
                        <a class=\"h5 bg-light rounded py-2 px-3 mb-2\" href=\"{{path('medecin')}}\"><i class=\"fa fa-angle-right me-2\"></i>Email Marketing</a>
                    </div>
                </div>
                <!-- Category End -->

             


                <!-- Plain Text Start -->
                <div>
                    <h4 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 mb-4\">Plain Text</h4>
                    <div class=\"bg-light rounded text-center\" style=\"padding: 30px;\">
                        <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet diam</p>
                        <a href=\"\" class=\"btn btn-primary py-2 px-4\">Read More</a>
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>


{% endblock %} 

", "home/hopital_details.html.twig", "C:\\Users\\AMINE\\Hopitallo\\templates\\home\\hopital_details.html.twig");
    }
}
