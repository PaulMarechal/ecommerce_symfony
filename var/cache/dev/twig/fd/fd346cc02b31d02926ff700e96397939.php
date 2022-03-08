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

/* registration/register.html.twig */
class __TwigTemplate_6b3bb18c25dd266c39450f8f67d2004a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Register";
        
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
        echo "<style>
    input#registration_form_email{margin-left: 2.4em;}
    input#registration_form_plainPassword{margin-left: 0.4em;}
    input#registration_form_agreeTerms{margin-left: 0.3em;}
</style>
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
<!-- JavaScript Bundle with Popper -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>

<header class=\"d-flex flex-wrap justify-content-center pt-3 pb-1 border-bottom\" style=\"position:fixed; z-index: 99; background-color: #ffffff; left: 0; right: 0;\">
      <a href=\"/home\" class=\"d-flex align-items-center mb-2 md-0 me-md-auto text-dark text-decoration-none\">
        <img style=\"margin-left: 20px; margin-right: 20px;\" class=\"bd-placeholder-img rounded-circle\" width=\"50\" height=\"50\" src=\"https://scontent-cdt1-1.xx.fbcdn.net/v/t1.6435-9/150198245_401599697624263_6382796652237736084_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=_v5Vmsjmg7cAX-6KpUq&_nc_ht=scontent-cdt1-1.xx&oh=00_AT8wNPnd6vDTAfJMvQUZglwUdhGGNoo5kkeoirmGFEL_7w&oe=6239907A\" alt=\"Logo food culture street\">   
        <span class=\"fs-4\">Food Culture Street</span>
      </a>

      <ul class=\"nav nav-pills\">
        <form method=\"post\" role=\"form\">
            ";
        // line 32
        echo "
            <ul class=\"nav nav-pills\">
                <li class=\"nav-item\" style=\"margin-right:1em\"><input type=\"email\" placeholder=\"email@gmail.com\" value=\"\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus style=\"margin-right: 1em\"></li>
                <li class=\"nav-item\" style=\"margin-right:1em\"><input type=\"password\" placeholder=\"mot de pase\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required></li>
                <li class=\"nav-item\" style=\"margin-right:1em\"><button class=\"btn btn-primary\" type=\"submit\">Sign in</button></li>
                <li class=\"nav-item\" style=\"margin-right:1em\"><a class=\"btn btn-primary\" href=\"/register\">Register</a></li>
            </ul>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
        </form>
      </ul>
</header>
<main>


<section class=\"vh-100\" style=\"background-color: #eee;\">
  <div class=\"container h-100\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col-lg-12 col-xl-11\">
        <div class=\"card text-black\" style=\"border-radius: 25px;\">
          <div class=\"card-body p-md-5\">
            <div class=\"row justify-content-center\">
              <div class=\"col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1\">
              
                ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), 'form_start');
        echo "
                <p class=\"text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4\">Sign up</p>

                <form class=\"mx-1 mx-md-4\">

                  <div class=\"d-flex flex-row align-items-center mb-4\">
                    <i class=\"fas fa-envelope fa-lg me-3 fa-fw\"></i>
                    <div class=\"form-outline flex-fill mb-0\">
                      ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "email", [], "any", false, false, false, 64), 'row');
        echo " 
                    </div>
                  </div>

                  <div class=\"d-flex flex-row align-items-center mb-4\">
                    <i class=\"fas fa-lock fa-lg me-3 fa-fw\"></i>
                    <div class=\"form-outline flex-fill mb-0\">
                      ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "plainPassword", [], "any", false, false, false, 71), 'row', ["label" => "Password"]);
        echo "
                    </div>
                  </div>

                  <div class=\"form-check d-flex justify-content-left mb-5\">
                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), "agreeTerms", [], "any", false, false, false, 76), 'row');
        echo "
                  </div>

                  <div class=\"d-flex justify-content-center mx-4 mb-3 mb-lg-4\">
                    <button type=\"submit\" class=\"btn btn-primary btn-lg\">Register</button>
                  </div>
                ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 82, $this->source); })()), 'form_end');
        echo "
                </form>

              </div>
              <div class=\"col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2\">

                <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp\" class=\"img-fluid\" alt=\"Sample image\">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 82,  165 => 76,  157 => 71,  147 => 64,  136 => 56,  117 => 40,  107 => 32,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
<style>
    input#registration_form_email{margin-left: 2.4em;}
    input#registration_form_plainPassword{margin-left: 0.4em;}
    input#registration_form_agreeTerms{margin-left: 0.3em;}
</style>
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
<!-- JavaScript Bundle with Popper -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>

<header class=\"d-flex flex-wrap justify-content-center pt-3 pb-1 border-bottom\" style=\"position:fixed; z-index: 99; background-color: #ffffff; left: 0; right: 0;\">
      <a href=\"/home\" class=\"d-flex align-items-center mb-2 md-0 me-md-auto text-dark text-decoration-none\">
        <img style=\"margin-left: 20px; margin-right: 20px;\" class=\"bd-placeholder-img rounded-circle\" width=\"50\" height=\"50\" src=\"https://scontent-cdt1-1.xx.fbcdn.net/v/t1.6435-9/150198245_401599697624263_6382796652237736084_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=_v5Vmsjmg7cAX-6KpUq&_nc_ht=scontent-cdt1-1.xx&oh=00_AT8wNPnd6vDTAfJMvQUZglwUdhGGNoo5kkeoirmGFEL_7w&oe=6239907A\" alt=\"Logo food culture street\">   
        <span class=\"fs-4\">Food Culture Street</span>
      </a>

      <ul class=\"nav nav-pills\">
        <form method=\"post\" role=\"form\">
            {# {% if error %}
                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}

            {% if app.user %}
                <div class=\"mb-3\">
                    You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                </div>
            {% endif %} #}

            <ul class=\"nav nav-pills\">
                <li class=\"nav-item\" style=\"margin-right:1em\"><input type=\"email\" placeholder=\"email@gmail.com\" value=\"\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus style=\"margin-right: 1em\"></li>
                <li class=\"nav-item\" style=\"margin-right:1em\"><input type=\"password\" placeholder=\"mot de pase\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required></li>
                <li class=\"nav-item\" style=\"margin-right:1em\"><button class=\"btn btn-primary\" type=\"submit\">Sign in</button></li>
                <li class=\"nav-item\" style=\"margin-right:1em\"><a class=\"btn btn-primary\" href=\"/register\">Register</a></li>
            </ul>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
        </form>
      </ul>
</header>
<main>


<section class=\"vh-100\" style=\"background-color: #eee;\">
  <div class=\"container h-100\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col-lg-12 col-xl-11\">
        <div class=\"card text-black\" style=\"border-radius: 25px;\">
          <div class=\"card-body p-md-5\">
            <div class=\"row justify-content-center\">
              <div class=\"col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1\">
              
                {{ form_start(registrationForm) }}
                <p class=\"text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4\">Sign up</p>

                <form class=\"mx-1 mx-md-4\">

                  <div class=\"d-flex flex-row align-items-center mb-4\">
                    <i class=\"fas fa-envelope fa-lg me-3 fa-fw\"></i>
                    <div class=\"form-outline flex-fill mb-0\">
                      {{ form_row(registrationForm.email) }} 
                    </div>
                  </div>

                  <div class=\"d-flex flex-row align-items-center mb-4\">
                    <i class=\"fas fa-lock fa-lg me-3 fa-fw\"></i>
                    <div class=\"form-outline flex-fill mb-0\">
                      {{ form_row(registrationForm.plainPassword, {label: 'Password'}) }}
                    </div>
                  </div>

                  <div class=\"form-check d-flex justify-content-left mb-5\">
                    {{ form_row(registrationForm.agreeTerms) }}
                  </div>

                  <div class=\"d-flex justify-content-center mx-4 mb-3 mb-lg-4\">
                    <button type=\"submit\" class=\"btn btn-primary btn-lg\">Register</button>
                  </div>
                {{ form_end(registrationForm) }}
                </form>

              </div>
              <div class=\"col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2\">

                <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp\" class=\"img-fluid\" alt=\"Sample image\">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</main>
{% endblock %}
", "registration/register.html.twig", "/Users/paulmarechal/Sites/tests/www/sorbonne/Symfony/Ecommerce/templates/registration/register.html.twig");
    }
}
