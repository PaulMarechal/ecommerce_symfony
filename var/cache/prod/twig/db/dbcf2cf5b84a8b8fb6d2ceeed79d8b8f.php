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

/* cart/index.html.twig */
class __TwigTemplate_501761bf6b6ddd6fea8bc8a345f5475a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Panier";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">

<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .table{width: 90%; margin-left: 5%; margin-top: 1em;}
    .titrePanier{text-align: center; }

</style>

<header class=\"d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom\">
    <a href=\"/home\" class=\"d-flex align-items-center mb-2 md-0 me-md-auto text-dark text-decoration-none\">
        <img style=\"margin-left: 20px; margin-right: 20px;\" class=\"bd-placeholder-img rounded-circle\" width=\"50\" height=\"50\" src=\"https://scontent-cdt1-1.xx.fbcdn.net/v/t1.6435-9/150198245_401599697624263_6382796652237736084_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=_v5Vmsjmg7cAX-6KpUq&_nc_ht=scontent-cdt1-1.xx&oh=00_AT8wNPnd6vDTAfJMvQUZglwUdhGGNoo5kkeoirmGFEL_7w&oe=6239907A\" alt=\"Logo food culture street\">   
        <span class=\"fs-4\">Food Culture Street</span>
      </a>

      <ul class=\"nav nav-pills\">
        <li class=\"nav-item\"><a href=\"/home\" class=\"nav-link active\" aria-current=\"page\">Home</a></li>
        <li class=\"nav-item\"><a href=\"/product/show\" class=\"nav-link\">Tous les produits</a></li>
        <li class=\"nav-item\"><a href=\"/logout\" class=\"nav-link\">Déconnexion</a></li>
      </ul>
</header>

</section>

<table class=\"table mr-2 ml-2\">
<h3 class=\"titrePanier\">Panier</h3>
    <thead>
        <tr>
            <th>Produit</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th class=\"text-end\">Total</th>
            <th class=\"text-end\">Actions</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataPanier"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            echo " 
            <tr>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 46), "prix", [], "any", false, false, false, 46), "html", null, true);
            echo " €</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td class=\"text-end\">";
            // line 48
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 48) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 48), "prix", [], "any", false, false, false, 48)), "html", null, true);
            echo " €</td>
                <td class=\"text-end\">
                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">
                        -
                    </a>
                    <a class=\"btn btn-success\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\">
                        +
                    </a>
                    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                        Supprimer
                    </a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 62
            echo "            <tr>
                <td colspan=\"5\" class=\"text-center\">Votre Panier est vide</td>
            </tr>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </tbody>
    <tfoot>
        <tr>
            <td colspan=\"3\">Total</td>
            <td class=\"text-end\">";
        // line 71
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo " €</td>
            <td><a style=\"margin-left:40%;\" href=\"/adress\" class=\"btn btn-success\">Valider</a></td>
        </tr>
    </tfoot>
</table>
";
    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 71,  155 => 67,  145 => 62,  134 => 56,  128 => 53,  122 => 50,  117 => 48,  113 => 47,  109 => 46,  105 => 45,  97 => 43,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cart/index.html.twig", "/Users/paulmarechal/Sites/tests/www/sorbonne/Symfony/Ecommerce/templates/cart/index.html.twig");
    }
}
