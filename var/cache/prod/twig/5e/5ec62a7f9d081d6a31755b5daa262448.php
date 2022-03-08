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

/* security/login.html.twig */
class __TwigTemplate_e1a8059e01710959d4d547f8dff53ca5 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
#carouselExampleControls{height:10%!important}
.marketing .col-lg-4 {margin-bottom: 1.5rem; text-align: center; margin-top: 4em; margin-bottom:2em}

";
        // line 11
        echo "
/* Override UGG site */
#main {width: 100%; padding:0;}
.content-asset p {margin:0 auto;}
.breadcrumb {display:none;}

/* Helpers */
/**************************/
.margin-top-10 {padding-top:10px;}
.margin-top-50 {padding-top:50px;}
.margin-bot-10 {padding-bottom:10px;}

/* Typography */
/**************************/
#parallax-world-of-ugg h1 {font-family:'Oswald', sans-serif; font-size:24px; font-weight:lighter; text-transform: uppercase; color:black; padding:0; margin:0;}
#parallax-world-of-ugg p {font-family:'Source Sans Pro', sans-serif; font-weight:lighter; font-size:14px; line-height:24px;}
.first-character {font-weight:400; float: left; font-size: 84px; line-height: 64px; padding-top: 4px; padding-right: 8px; padding-left: 3px; font-family: 'Source Sans Pro', sans-serif;}

.sc {color: #3b8595;}

/* Section - Title */
/**************************/
#parallax-world-of-ugg .title {background: white; padding: 60px; margin:0 auto; text-align:center;}
#parallax-world-of-ugg .title h1 {font-size:35px; letter-spacing:8px;}

/* Section - Block */
/**************************/
#parallax-world-of-ugg .block {background: white; padding: 60px; width:820px; margin:0 auto; text-align:justify;}
#parallax-world-of-ugg .block-gray {background: #f2f2f2;padding: 60px;}
#parallax-world-of-ugg .section-overlay-mask {position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: black; opacity: 0.70;}

/* Section - Parallax */
/**************************/
#parallax-world-of-ugg .parallax-one {padding-top: 200px; padding-bottom: 500px; overflow: hidden; position: relative; width: 100%; background-image: url(https://static.wixstatic.com/media/4329d6_467125a548c0439bb039f24b383c94f9~mv2.jpeg/v1/fill/w_1952,h_1536,al_c,q_90/4329d6_467125a548c0439bb039f24b383c94f9~mv2.webp); background-attachment: fixed; background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; background-repeat: no-repeat; background-position: top center;}
/* Extras */
/**************************/
#parallax-world-of-ugg .line-break {border-bottom:1px solid black; width: 150px; margin:0 auto;}

/* Media Queries */
/**************************/
@media screen and (max-width: 959px) and (min-width: 768px) {
  #parallax-world-of-ugg .block {padding: 40px; width:620px;}
}
@media screen and (max-width: 767px) {
  #parallax-world-of-ugg .block {padding: 30px; width:420px;}
  #parallax-world-of-ugg h2 {font-size:30px;}
  #parallax-world-of-ugg .block {padding: 30px;}
  #parallax-world-of-ugg .parallax-one, #parallax-world-of-ugg .parallax-two, #parallax-world-of-ugg .parallax-three {padding-top:100px; padding-bottom:100px;}
}
@media screen and (max-width: 479px) {
  #parallax-world-of-ugg .block {padding: 30px 15px; width:290px;}

}

*{font-weight: lighter;}
";
        // line 67
        echo "</style>

";
        // line 70
        echo "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
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
        // line 90
        echo "
            <ul class=\"nav nav-pills\">
                <li class=\"nav-item\" style=\"margin-right:1em\"><input type=\"email\" placeholder=\"email@gmail.com\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus style=\"margin-right: 1em\"></li>
                <li class=\"nav-item\" style=\"margin-right:1em\"><input type=\"password\" placeholder=\"mot de pase\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required></li>
                <li class=\"nav-item\" style=\"margin-right:1em\"><button class=\"btn btn-primary\" type=\"submit\">Sign in</button></li>
                <li class=\"nav-item\" style=\"margin-right:1em\"><a class=\"btn btn-primary\" href=\"/register\">Register</a></li>
            </ul>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
        </form>
      </ul>
</header>
<main>


<div id=\"parallax-world-of-ugg\">

<section>
    <div class=\"parallax-one\">
    </div>
</section>


<section>
  <div class=\"block\">
  <h4>Un rêve personnel devenu une véritable aventure collective</h4>
    <p><span class=\"first-character sc\">F</span>ood Culture Street, avant même la réalisation du projet à toujours été un rêve pour notre chef Fanny Chantoin Sanchez. Au fil de ses rencontres, nous avons pu monter une équipe et ensemble nous avons donné vie à FCS, la street kitchen moderne avec le charme du transport vintage. Pour se faire, nous avons transformé un petit triporteur de Piaggio en cuisine roulante, pour être toujours au plus près de vous. </p>
    <p class=\"line-break margin-top-10 mb-4\"></p>

    <h4>Un concept Innovant</h4> 
    <p style=\"text-align: justify;\" class=\"lead\"><span class=\"first-character sc\">C</span>uisine élaborée, servie rapidement et travaillée de manière raisonnée. Food Culture Street est un concept qui réconcilie street-food avec bien manger avev des produits de saison, de petits producteurs de la région et préparés devant vous. On ne vous cache rien! </p>
    <p class=\"line-break margin-top-10 mb-4\"></p>
    <h4 class=\"margin-top-10\">Le brunch du dimanche !</h4>
  <p class=\"margin-top-10\"><span class=\"first-character sc\">S</span>avourez le moment, nous avons plus d'une gourmandise dans notre sac ! Tous les dimanches de 10h à 14h, commencez votre journée avec une formule brunch généreuse à 18 euros. Au menu, des croissants, des pancakes avec sirop d’érable ou confiture maison, des oeufs brouillés, des sandwichs (jambon blanc, tomate fermière, coeur de laitue) ou veggie, un yoghurt gourmand, un muffin, un verre de jus d’orange ou de bière beach please (berlinerweisse mangue/passion) et du thé ou du café. 

  </div>
  
</p>
</section>

";
        // line 131
        echo "

<!-- images rondes -->
<div class=\"container marketing\">

    <!-- Three columns of text below the carousel -->
    <div class=\"row mt-3\">
      <div class=\"col-lg-4\">
        <img class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" src=\"https://static.wixstatic.com/media/4329d6_314ffbf513504890b36bf0ef964c7ae7~mv2.jpg/v1/fill/w_430,h_432,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/Lambda-brewing-project-beer-biere-artisanale-achat-toulouse-brasserie-locale-gamme-cloudpi.jpg\" alt=\"Grapefruit slice atop a pile of other slices\">   
        <h2>Lambda Brewing Project</h2>
        <p>Brasserie Toulousaine</p>
        <p><a class=\"btn btn-secondary\" href=\"#\">En savoir plus</a></p>
      </div><!-- /.col-lg-4 -->
      <div class=\"col-lg-4\">
        <img class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" src=\"https://static.wixstatic.com/media/11062b_b15550aece214f9ea0576881995c254a~mv2.jpg/v1/fill/w_430,h_432,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/11062b_b15550aece214f9ea0576881995c254a~mv2.jpg\" alt=\"Grapefruit slice atop a pile of other slices\">   
    
        <h2>Fournil de l'artisan des 7 Deniers</h2>
        <p>Artisan boulanger pâtissier</p>
        <p><a class=\"btn btn-secondary\" href=\"#\">En savoir plus</a></p>
      </div><!-- /.col-lg-4 -->
      <div class=\"col-lg-4\">
        <img class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" src=\"https://static.wixstatic.com/media/11062b_f3886a928d38457da258454ce2217a53~mv2.jpeg/v1/fill/w_418,h_432,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/fromage%20fait%20maison.jpeg\" alt=\"Grapefruit slice atop a pile of other slices\">   

        <h2>Le montagnole fromages fermiers</h2>
        <p>Fromages de petits producteurs proche de Toulouse</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class=\"featurette-divider\">

    <div class=\"row featurette\">
      <div class=\"col-md-7\" style=\"padding: 20px 70px 0 70px\">
        <h2 class=\"featurette-heading\">VECTEUR D'UNE CUISINE<span class=\"text-muted\"></br>PLUS RESPONSABLE</span></h2>
        <p style=\"text-align: justify;\" class=\"margin-top-10\">Chez FCS, nous avons à cœur de véhiculer une cuisine dont les produits sont sourcés, locaux et de saison. Tout en apportant une touche de modernité à la cuisine traditionnelle, on ne sacrifie pas moins l’importance de vous offrir des repas sains et équilibrés. Notre philosophie ? </br><h5 class=\"margin-top-50\" style=\"margin-top: 2em; text-align: center;\"><b>“Manger local. Être informés de nouveaux produits par nos partenaires clés et ainsi devenir acteur d’une consommation plus responsable”.</b></h5></p>
        
      </div>
      <div class=\"col-md-5\">
        <img class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" src=\"https://static.wixstatic.com/media/4329d6_27236b5a1e5e48e383ef7f03a9fc7d7e~mv2.png/v1/fill/w_856,h_1142,al_c,usm_0.66_1.00_0.01,enc_auto/image_2021-10-17_220958.png\" alt=\"\">   

        
      </div>
    </div>

    <div class=\"row featurette\">
      <div class=\"col-md-7 order-md-2\">
        <h2 class=\"featurette-heading\">FAIT<span class=\"text-muted\"></br>MAISON</span></h2>
        ";
        // line 181
        echo "        <p style=\"text-align: justify;\">De la haute cuisine à des prix abordables. Notre carte va vous faire saliver ! Pour seulement 8 euros, que ce soit version salade ou sandwich, régalez-vous avec (pour n’en citer qu’un) <b>“Le 12h50 : effiloché de boeuf bourguignon”</b> qui contient un <i>confit d’oignon flambé au whisky, des pickles carottes, des champignons de Paris snackés, de la roquette, une sauce bourguignonne, des brisures de cacahuètes torréfié et du persil</i>. Vous pouvez les accompagner de pommes de terre rôties au thym ou de coleslaw. Et pour 4,50 euros une ribambelle de desserts (<b>Tacos façon tatin</b>, <b>financier chocolat pécan</b>…). Tous nos produits sont bien entendu préparés sur place dans le respect des normes et du client.</p>

      </div>
      <div class=\"col-md-5 order-md-1\">
        ";
        // line 186
        echo "        <img class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" src=\"https://static.wixstatic.com/media/4329d6_222972eb79bc4214af01ab30eb710097~mv2.jpg/v1/fill/w_1198,h_898,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/70740955_2542765909107311_1465156525990346752_n.jpg\" alt=\"\">   

      </div>
    </div>

    <hr class=\"featurette-divider\">

    <!-- /END THE FEATURETTES -->

  </div>
</main>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 186,  237 => 181,  186 => 131,  151 => 98,  142 => 92,  138 => 90,  125 => 70,  121 => 67,  64 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/Users/paulmarechal/Sites/tests/www/sorbonne/Symfony/Ecommerce/templates/security/login.html.twig");
    }
}
