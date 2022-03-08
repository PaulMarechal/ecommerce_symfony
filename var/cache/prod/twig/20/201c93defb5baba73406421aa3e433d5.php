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

/* user_adress/index.html.twig */
class __TwigTemplate_3a58a68ffb8d3eb6b1dd6410c2eccee6 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user_adress/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "FCS";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<style>
    *{font-weight: lighter;}
    .example-wrapper { margin: 1em auto; max-width: 1200px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .titreAdress{margin-bottom:1em; font-weight: lighter;}
</style>
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
<!-- JavaScript Bundle with Popper -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">

<header class=\"d-flex flex-wrap justify-content-center py-3 border-bottom\">
      <a href=\"/home\" class=\"d-flex align-items-center mb-2 md-0 me-md-auto text-dark text-decoration-none\">
        <img style=\"margin-left: 20px; margin-right: 20px;\" class=\"bd-placeholder-img rounded-circle\" width=\"50\" height=\"50\" src=\"https://scontent-cdt1-1.xx.fbcdn.net/v/t1.6435-9/150198245_401599697624263_6382796652237736084_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=_v5Vmsjmg7cAX-6KpUq&_nc_ht=scontent-cdt1-1.xx&oh=00_AT8wNPnd6vDTAfJMvQUZglwUdhGGNoo5kkeoirmGFEL_7w&oe=6239907A\" alt=\"Logo food culture street\">   
        <span class=\"fs-4\">Food Culture Street</span>
      </a>

      <ul class=\"nav nav-pills\">
        <li class=\"nav-item\"><a href=\"/home\" class=\"nav-link active\" aria-current=\"page\">Home</a></li>
        <li class=\"nav-item\"><a href=\"/product/show\" class=\"nav-link\">Tous les produits</a></li>
        <li class=\"nav-item\"><a href=\"/cart\" class=\"nav-link\">Panier</a></li>
        <li class=\"nav-item\"><a href=\"/logout\" class=\"nav-link\">Déconnexion</a></li>
      </ul>
</header>
<div class=\"example-wrapper\">
    <h3 class=\"titreAdress\">Merci de valider votre adresse :</h3>

        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["adress_form"] ?? null), 'form_start');
        echo "
            <div class=\"my-custom-class-for-errors\">
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["adress_form"] ?? null), 'errors');
        echo "
            </div>

            <div class=\"row\">
                <div class=\"col\">
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adress_form"] ?? null), "date", [], "any", false, false, false, 40), 'row');
        echo "
                </div>
                <div class=\"col\" id=\"some-custom-id\">
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adress_form"] ?? null), "adress", [], "any", false, false, false, 43), 'row');
        echo "
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adress_form"] ?? null), "adress2", [], "any", false, false, false, 44), 'row');
        echo "
                </div>
                <div class=\"col\" id=\"some-custom-id\">
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adress_form"] ?? null), "city", [], "any", false, false, false, 47), 'row');
        echo "
                </div>
                <div class=\"col\" id=\"some-custom-id\">
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adress_form"] ?? null), "state", [], "any", false, false, false, 50), 'row');
        echo "
                </div>
                <div class=\"col\" id=\"some-custom-id\">
                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adress_form"] ?? null), "zip", [], "any", false, false, false, 53), 'row');
        echo "
                </div>
                <div style=\"display:none\" class=\"col\" id=\"some-custom-id\">
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adress_form"] ?? null), "idUser", [], "any", false, false, false, 56), 'row');
        echo "
                </div>
                <div style=\"display:none\" class=\"col\" id=\"some-custom-id\">
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adress_form"] ?? null), "products", [], "any", false, false, false, 59), 'row');
        echo "
                </div>
            </div>
        ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["adress_form"] ?? null), 'form_end');
        echo "

    <style>
        input#adress_form_idUser{display: none}
        input#adress_form_products{display:none}
    </style>
";
    }

    public function getTemplateName()
    {
        return "user_adress/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 62,  140 => 59,  134 => 56,  128 => 53,  122 => 50,  116 => 47,  110 => 44,  106 => 43,  100 => 40,  92 => 35,  87 => 33,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user_adress/index.html.twig", "/Users/paulmarechal/Sites/tests/www/sorbonne/Symfony/Ecommerce/templates/user_adress/index.html.twig");
    }
}
