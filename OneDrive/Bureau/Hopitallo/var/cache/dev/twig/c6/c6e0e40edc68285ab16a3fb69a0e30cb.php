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

/* home/medecin.html.twig */
class __TwigTemplate_2d0fa86cd11a855dc34e27fb0ac9d2bd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/medecin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/medecin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/medecin.html.twig", 1);
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

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 

 <!-- Search Start -->
 <div class=\"container-fluid pt-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Find A Doctor</h5>
                <h1 class=\"display-4 mb-4\">Find A Healthcare Professionals</h1>
                <h5 class=\"fw-normal\">Duo ipsum erat stet dolor sea ut nonumy tempor. Tempor duo lorem eos sit sed ipsum takimata ipsum sit est. Ipsum ea voluptua ipsum sit justo</h5>
            </div>
            <div class=\"mx-auto\" style=\"width: 100%; max-width: 600px;\">
                <div class=\"input-group\">
                    <select class=\"form-select border-primary w-25\" style=\"height: 60px;\">
                        <option selected>Department</option>
                        <option value=\"1\">Department 1</option>
                        <option value=\"2\">Department 2</option>
                        <option value=\"3\">Department 3</option>
                    </select>
                    <input type=\"text\" class=\"form-control border-primary w-50\" placeholder=\"Keyword\">
                    <button class=\"btn btn-dark border-0 w-25\">Search</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Search End -->


    <!-- Search Result Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-lg-6 team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"img/team-1.jpg\" style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                             <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-primary \" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rdv");
        echo "\">Prendre un rendz-vous</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"img/team-2.jpg\" style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                             <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-primary \" href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rdv");
        echo "\">Prendre un rendz-vous</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"img/team-3.jpg\" style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                             <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-primary \" href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rdv");
        echo "\">Prendre un rendz-vous</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"img/team-1.jpg\" style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                             <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-primary \" href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rdv");
        echo "\">Prendre un rendz-vous</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"img/team-2.jpg\" style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                             <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-primary \" href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rdv");
        echo "\">Prendre un rendz-vous</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"img/team-3.jpg\" style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                             <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-primary \" href=\"rendezvous.html\">Prendre un rendz-vous</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 text-center\">
                    <button class=\"btn btn-primary py-3 px-5\">Load More</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Result End -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/medecin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 134,  233 => 116,  212 => 98,  191 => 80,  170 => 62,  116 => 19,  97 => 9,  93 => 8,  79 => 5,  60 => 3,  37 => 1,);
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

 <!-- Search Start -->
 <div class=\"container-fluid pt-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Find A Doctor</h5>
                <h1 class=\"display-4 mb-4\">Find A Healthcare Professionals</h1>
                <h5 class=\"fw-normal\">Duo ipsum erat stet dolor sea ut nonumy tempor. Tempor duo lorem eos sit sed ipsum takimata ipsum sit est. Ipsum ea voluptua ipsum sit justo</h5>
            </div>
            <div class=\"mx-auto\" style=\"width: 100%; max-width: 600px;\">
                <div class=\"input-group\">
                    <select class=\"form-select border-primary w-25\" style=\"height: 60px;\">
                        <option selected>Department</option>
                        <option value=\"1\">Department 1</option>
                        <option value=\"2\">Department 2</option>
                        <option value=\"3\">Department 3</option>
                    </select>
                    <input type=\"text\" class=\"form-control border-primary w-50\" placeholder=\"Keyword\">
                    <button class=\"btn btn-dark border-0 w-25\">Search</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Search End -->


    <!-- Search Result Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-lg-6 team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"img/team-1.jpg\" style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                             <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-primary \" href=\"{{path('rdv')}}\">Prendre un rendz-vous</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"img/team-2.jpg\" style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                             <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-primary \" href=\"{{path('rdv')}}\">Prendre un rendz-vous</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"img/team-3.jpg\" style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                             <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-primary \" href=\"{{path('rdv')}}\">Prendre un rendz-vous</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"img/team-1.jpg\" style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                             <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-primary \" href=\"{{path('rdv')}}\">Prendre un rendz-vous</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"img/team-2.jpg\" style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                             <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-primary \" href=\"{{path('rdv')}}\">Prendre un rendz-vous</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"img/team-3.jpg\" style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                             <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-primary \" href=\"rendezvous.html\">Prendre un rendz-vous</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 text-center\">
                    <button class=\"btn btn-primary py-3 px-5\">Load More</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Result End -->

{% endblock %}  ", "home/medecin.html.twig", "C:\\Users\\mouha\\OneDrive\\Bureau\\Hopitallo\\templates\\home\\medecin.html.twig");
    }
}
