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

/* home/index.html.twig */
class __TwigTemplate_ac95f1df76e61b461672b4fdfb00cd59 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Food Culture Street";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<style>
#carouselExampleControls{height:10%!important}
.marketing .col-lg-4 {margin-top: 4em; margin-bottom:2em; margin-left: 5em}
.formatImg{height: 285px}
.col{padding-left: 50px!important;}
.card-body{height: 200px!important}
</style>

";
        // line 15
        echo "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
<!-- JavaScript Bundle with Popper -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
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
<main style=\"padding: 5em 7em 5em 7em\">

    ";
        // line 34
        echo "

    ";
        // line 37
        echo "
        <div class=\"row row-cols-1 row-cols-md-3 g-4 marketing\" >
        <div class=\"col\">
        <a style=\"text-decoration:none; color: black;\" class=\"\" href=\"product/show\">
            <div class=\"card\" style=\"width: 18rem;\">
            <img class=\"formatImg\" src=\"https://static.wixstatic.com/media/4329d6_e23118a84342463a903de6968d07a282~mv2.png/v1/fill/w_616,h_822,al_c,usm_0.66_1.00_0.01,enc_auto/mi%20cuit.png\" class=\"card-img-top\" alt=\"...\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">NOS PRODUITS</h5>
                <p class=\"card-text\">Venez découvrir nos produits et vous laisser tenter par une pause gourmande avec des produits de saison, de qualité et locaux !</p>
            </div>
            </div>
            </a>
        </div>
        <div class=\"col\">
            <a style=\"text-decoration:none; color: black;\" class=\"\" href=\"product/show\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <img src=\"https://static.wixstatic.com/media/4329d6_314ffbf513504890b36bf0ef964c7ae7~mv2.jpg/v1/fill/w_430,h_432,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/Lambda-brewing-project-beer-biere-artisanale-achat-toulouse-brasserie-locale-gamme-cloudpi.jpg\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">NOS BOISSONS</h5>
                        <p class=\"card-text\">Venez décourir une bière brassé localement dans Toulouse par une ultra motivé et passionné dans une micro brasserie.</p>
                    </div>
                </div>
            </a>
        </div>

        ";
        // line 63
        echo "        <div class=\"col\">
            <a style=\"text-decoration:none; color: black;\" class=\"\" href=\"product/show\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <img class=\"formatImg\" src=\"https://static.wixstatic.com/media/4329d6_5d603a96e30144c5b6885b5c1aa7ae81~mv2.png/v1/crop/x_277,y_0,w_1931,h_2731/fill/w_804,h_1140,al_c,usm_0.66_1.00_0.01,enc_auto/brunch.png\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">NOTRE BRUNCH</h5>
                        <p class=\"card-text\">Venez décourir notre brunch pour démarer votre week-end d'un bon pied. N'ayez qu'une chose en tête, vous détendre! On s'occupe du reste</p>
                    </div>
                </div>
            </a>
        </div>
        ";
        // line 75
        echo "        </div>


</main>

  <footer class=\"text-muted py-5\">
  <div class=\"container\">
    <p class=\"mb-1\"></p>
    <p class=\"mb-0\">New to Bootstrap? <a href=\"/\">Visit the homepage</a> or read our <a href=\"/docs/5.1/getting-started/introduction/\">getting started guide</a>.</p>
  </div>
</footer>

";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 75,  119 => 63,  92 => 37,  88 => 34,  68 => 15,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/Users/paulmarechal/Sites/tests/www/sorbonne/Symfony/Ecommerce/templates/home/index.html.twig");
    }
}
