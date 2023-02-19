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

/* event/index.html.twig */
class __TwigTemplate_b67af3fe73f8cf8895972b50e3ff0045 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/index.html.twig", 1);
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

        echo " Hopitallo-Evenement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
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
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"nav-item nav-link \">Home</a>
                        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hopital");
        echo "\"  class=\"nav-item nav-link \">Hopitaux</a>
                      
                        <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hopital_urgence");
        echo "\" class=\"nav-item nav-link \">Urgence</a>
                   
                        <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event");
        echo "\" class=\"nav-item nav-link active\">Evenement</a>
                        <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
        echo "\" class=\"nav-item nav-link\">Profil</a>
                        <a href=\"\" class=\"nav-item nav-link\">Deconnecter</a>
                    </div>
                </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
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
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Evenement</h5>
                <h1 class=\"display-4\">Our Latest Medical Event Posts</h1>
            </div>
            <div class=\"row g-5\">
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 31
            echo "                <div class=\"col-xl-4 col-lg-6\" style=\"width: 30% ; height:10%;\">
                    <div class=\"bg-light rounded overflow-hidden\">
                        <img class=\"img-fluid w-100\" style=\"width: 100px ; height:300px;\"  src=\"uploads/events/";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "photo", [], "any", false, false, false, 33), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "nomE", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
                        <div class=\"p-4\">
                            <a class=\"h3 d-block mb-3\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "nomE", [], "any", false, false, false, 35), "html", null, true);
            echo "</a>
                            <p class=\"m-0\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 36), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"d-flex justify-content-between border-top p-4\">
                           
                            <div class=\"d-flex align-items-center\"style=\"text-align:center;\">

                             ";
            // line 43
            echo "                                <small class=\"ms-3\"><i class=\"fa fa-users text-primary me-1\"   aria-hidden=\"true\"></i>
                                ";
            // line 44
            $context["participant"] = twig_get_attribute($this->env, $this->source, (isset($context["participantRepository"]) || array_key_exists("participantRepository", $context) ? $context["participantRepository"] : (function () { throw new RuntimeError('Variable "participantRepository" does not exist.', 44, $this->source); })()), "countParticipantsForEvent", [0 => $context["event"]], "method", false, false, false, 44);
            // line 45
            echo "                                ";
            if ((isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new RuntimeError('Variable "participant" does not exist.', 45, $this->source); })())) {
                // line 46
                echo "                                                      <p>";
                echo twig_escape_filter($this->env, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new RuntimeError('Variable "participant" does not exist.', 46, $this->source); })()), "html", null, true);
                echo "</p>
                                                      ";
            } else {
                // line 47
                echo " 
                                                      <p>0</p>
                                 ";
            }
            // line 50
            echo "                                </small>

                                    <div class=\"d-flex mt-auto border-top p-4\" 
                                    style=\"margin-left:50px\">
                                     ";
            // line 54
            $context["user"] = ["id" => 4];
            echo " ";
            // line 55
            echo "                                     ";
            $context["participant"] = twig_get_attribute($this->env, $this->source, (isset($context["participantRepository"]) || array_key_exists("participantRepository", $context) ? $context["participantRepository"] : (function () { throw new RuntimeError('Variable "participantRepository" does not exist.', 55, $this->source); })()), "findOneBy", [0 => ["event" => $context["event"], "user" => (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })())]], "method", false, false, false, 55);
            // line 56
            echo "                                        ";
            if ((isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new RuntimeError('Variable "participant" does not exist.', 56, $this->source); })())) {
                // line 57
                echo "                                                      <p> déjà participé </p>
                                        ";
            } else {
                // line 59
                echo "                                         <a class=\"btn btn-primary btn-confirm\"href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_add_participant", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 59), "idu" => 4]), "html", null, true);
                echo "\">Participer</a>
                                        ";
            }
            // line 61
            echo "
                                     </div>
                            </div>
                        </div>
                    </div>
                </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
                <!-- pour btn -->
                
               ";
        // line 118
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "event/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 118,  230 => 67,  219 => 61,  213 => 59,  209 => 57,  206 => 56,  203 => 55,  200 => 54,  194 => 50,  189 => 47,  183 => 46,  180 => 45,  178 => 44,  175 => 43,  166 => 36,  160 => 35,  153 => 33,  149 => 31,  145 => 30,  126 => 22,  111 => 15,  107 => 14,  102 => 12,  97 => 10,  93 => 9,  79 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Hopitallo-Evenement{% endblock %} 


 {% block nav %}  
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto py-0\">
                        <a href=\"{{path('app_home')}}\" class=\"nav-item nav-link \">Home</a>
                        <a href=\"{{path('hopital')}}\"  class=\"nav-item nav-link \">Hopitaux</a>
                      
                        <a href=\"{{path('hopital_urgence')}}\" class=\"nav-item nav-link \">Urgence</a>
                   
                        <a href=\"{{path('event')}}\" class=\"nav-item nav-link active\">Evenement</a>
                        <a href=\"{{path('profil')}}\" class=\"nav-item nav-link\">Profil</a>
                        <a href=\"\" class=\"nav-item nav-link\">Deconnecter</a>
                    </div>
                </div>
                {% endblock %}  


{% block body %} 
 <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Evenement</h5>
                <h1 class=\"display-4\">Our Latest Medical Event Posts</h1>
            </div>
            <div class=\"row g-5\">
            {% for event in events %}
                <div class=\"col-xl-4 col-lg-6\" style=\"width: 30% ; height:10%;\">
                    <div class=\"bg-light rounded overflow-hidden\">
                        <img class=\"img-fluid w-100\" style=\"width: 100px ; height:300px;\"  src=\"uploads/events/{{ event.photo }}\" alt=\"{{ event.nomE }}\">
                        <div class=\"p-4\">
                            <a class=\"h3 d-block mb-3\" href=\"{{ path('app_event_show', {'id': event.id}) }}\">{{ event.nomE }}</a>
                            <p class=\"m-0\">{{ event.description }}</p>
                        </div>
                        <div class=\"d-flex justify-content-between border-top p-4\">
                           
                            <div class=\"d-flex align-items-center\"style=\"text-align:center;\">

                             {# nb participant #}
                                <small class=\"ms-3\"><i class=\"fa fa-users text-primary me-1\"   aria-hidden=\"true\"></i>
                                {% set participant = participantRepository.countParticipantsForEvent(event)%}
                                {% if participant %}
                                                      <p>{{participant}}</p>
                                                      {% else %} 
                                                      <p>0</p>
                                 {% endif %}
                                </small>

                                    <div class=\"d-flex mt-auto border-top p-4\" 
                                    style=\"margin-left:50px\">
                                     {% set user = {'id': 4} %} {# Utilisateur statique avec ID 4 #}
                                     {% set participant = participantRepository.findOneBy({'event': event, 'user': user}) %}
                                        {% if participant %}
                                                      <p> déjà participé </p>
                                        {% else %}
                                         <a class=\"btn btn-primary btn-confirm\"href=\"{{ path('event_add_participant', {id: event.id,idu:4}) }}\">Participer</a>
                                        {% endif %}

                                     </div>
                            </div>
                        </div>
                    </div>
                </div>{% endfor %}

                <!-- pour btn -->
                
               {#} <div class=\"col-xl-4 col-lg-6\">
                    <div class=\"bg-light rounded overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"img/blog-2.jpg\" alt=\"\">
                        <div class=\"p-4\">
                            <a class=\"h3 d-block mb-3\" href=\"\">Dolor clita vero elitr sea stet dolor justo  diam</a>
                            <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class=\"d-flex justify-content-between border-top p-4\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle me-2\" src=\"img/user.jpg\" width=\"25\" height=\"25\" alt=\"\">
                                <small>John Doe</small>
                            </div>
                            <div class=\"d-flex align-items-center\">
                                <small class=\"ms-3\"><i class=\"far fa-eye text-primary me-1\"></i>12345</small>
                                <small class=\"ms-3\"><i class=\"far fa-comment text-primary me-1\"></i>123</small>
                                <div class=\"d-flex mt-auto border-top p-4\">
                                    <a class=\"btn btn-primary \" href=\"{{path('rendezvous')}}\">Participer</a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-6\">
                    <div class=\"bg-light rounded overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"img/blog-3.jpg\" alt=\"\">
                        <div class=\"p-4\">
                            <a class=\"h3 d-block mb-3\" href=\"\">Dolor clita vero elitr sea stet dolor justo  diam</a>
                            <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class=\"d-flex justify-content-between border-top p-4\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle me-2\" src=\"img/user.jpg\" width=\"25\" height=\"25\" alt=\"\">
                                <small>John Doe</small>
                            </div>
                            <div class=\"d-flex align-items-center\">
                                <small class=\"ms-3\"><i class=\"far fa-eye text-primary me-1\"></i>12345</small>
                                <small class=\"ms-3\"><i class=\"far fa-comment text-primary me-1\"></i>123</small>
                                <div class=\"d-flex mt-auto border-top p-4\">
                                    <a class=\"btn btn-primary \" href=\"{{path('rendezvous')}}\">Participer</a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>#}
            </div>
        </div>
    </div>
{% endblock %} ", "event/index.html.twig", "C:\\Users\\mouha\\OneDrive\\Bureau\\Hopitallo\\templates\\event\\index.html.twig");
    }
}
