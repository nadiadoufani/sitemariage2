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
class __TwigTemplate_f9335042aae5f8ab0c9e567dc72f3bfd2cd70b3572085a61dbf9834d96886211 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<body>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, \">

       <body>


          
      
        <div class=\"slide\" >
       
            <!-- First slide -->
            <div class=\"banner1\">
              <img class=\"image\" src=\"https://cdn.pixabay.com/photo/2016/06/06/08/05/video-media-production-1439008__340.jpg\"/>
             
            </div>
        
            <!-- Second slide -->
            <div class=\"banner2\">
              <img class=\"image\"src=\"https://cdn.pixabay.com/photo/2020/02/07/13/08/wedding-4827128__340.jpg\"/>
              
            </div>
        
            <!-- Third slide -->
            <div class=\"banner3\">
              <img class=\"image\" src=\"https://cdn.pixabay.com/photo/2015/02/06/12/47/wedding-626020__340.jpg\">
            </div>
        
            <!-- Fourth slide -->
            <div class=\"banner4\">
              <img class=\"image\" src=\"https://cdn.pixabay.com/photo/2017/10/29/14/44/wedding-2899892__340.jpg\"/>
              
            </div>
          
        </div>   
</div>  
        
        
        
      
        
        
        <br>
        <div style=\"margin-top:600px;text-align: center;color:grey;\">
\t<h1>Les meilleurs prestataires pour organisez votre mariage!!</h1>
\t
</div>

<!--/.content-->

<div class=\"content white\"style=\"background-image:url('https://cdn.pixabay.com/photo/2016/07/13/03/47/background-1513621__340.jpg');width: 100%;background-repeat:no-repeat;background-size:cover;\">
\t
\t<div class=\"accordion-container\">
\t\t<a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("traiteurs");
        echo "\" class=\"accordion-toggle\">Traiteurs <span class=\"toggle-icon\"><i class=\"fa fa-plus-circle\"></i></span></a>
\t\t<div class=\"accordion-content\">
\t\t\t<img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgtraiteurs/4b72b37e8b797b4466b8c2a3b67a4d1f107d565a.jpeg"), "html", null, true);
        echo "\" />
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
\t\t\t
\t\t</div>
\t\t<!--/.accordion-content-->
\t</div>
\t<!--/.accordion-container-->
\t<div class=\"accordion-container\">
\t\t<a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("photographe");
        echo "\" class=\"accordion-toggle\">Photographes<span class=\"toggle-icon\"><i class=\"fa fa-plus-circle\"></i></span></a>
\t\t<div class=\"accordion-content\">
\t\t\t<img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgphotographes/4dcfe5280c7e6f2ac53e9ed49ba20f725a0e7845.jpeg"), "html", null, true);
        echo "\" />
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
\t\t
\t\t</div>
\t\t<!--/.accordion-content-->
\t</div>
\t<!--/.accordion-container-->
\t<div class=\"accordion-container\">
\t\t<a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salle_de_mariage");
        echo "\" class=\"accordion-toggle\">Les salles de mariage <span class=\"toggle-icon\"><i class=\"fa fa-plus-circle\"></i></span></a>
\t\t<div class=\"accordion-content\">
\t\t\t<img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgsalles/1f603f1d9b2fb82e95ead52e96705bc1.jpg"), "html", null, true);
        echo "\" />
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
\t\t\t
\t\t</div>
\t\t<!--/.accordion-content-->
\t</div>
  <!--/.accordion-container-->
\t<div class=\"accordion-container\">
\t\t<a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("musique_de_mariage");
        echo "\" class=\"accordion-toggle\">Les musiques de mariage <span class=\"toggle-icon\"><i class=\"fa fa-plus-circle\"></i></span></a>
\t\t<div class=\"accordion-content\">
\t\t\t<img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgmusiques/1c142dea8609f3130cc848bce8a397f1.jpg"), "html", null, true);
        echo "\" />
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
\t\t\t
\t\t</div>
\t\t<!--/.accordion-content-->
\t</div>
  \t<!--/.accordion-container-->
\t<div class=\"accordion-container\">
\t\t<a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_de_noce");
        echo "\" class=\"accordion-toggle\">Voyage de noce <span class=\"toggle-icon\"><i class=\"fa fa-plus-circle\"></i></span></a>
\t\t<div class=\"accordion-content\">
\t\t\t<img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgvoyages/e916d6672cd31e4a6a3a03e83023fd2d.jpg"), "html", null, true);
        echo "\" />
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

\t\t</div>
\t\t<!--/.accordion-content-->
\t</div>
\t<!--/.accordion-container-->
\t<div class=\"accordion-container\">
\t\t<a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("centre_de_beaute");
        echo "\" class=\"accordion-toggle\">Les centres de beautés <span class=\"toggle-icon\"><i class=\"fa fa-plus-circle\"></i></span></a>
\t\t<div class=\"accordion-content\">
\t\t\t<img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcentre/a47ac509697db96e999653abf2e917e02ec67830.jpeg"), "html", null, true);
        echo "\" />
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
\t\t\t
\t\t</div>
\t\t<!--/.accordion-content-->
\t</div>
\t<!--/.accordion-container-->
\t<div class=\"accordion-container\">
\t\t<a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("costume");
        echo "\" class=\"accordion-toggle\">Les costumes mariés <span class=\"toggle-icon\"><i class=\"fa fa-plus-circle\"></i></span></a>
\t\t<div class=\"accordion-content\">
\t\t\t<img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcostume/1e721df6c01b1ba7928fdc18d2817e590eb8cfcd.jpeg"), "html", null, true);
        echo "\" />
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
\t\t\t
\t\t</div>
\t\t<!--/.accordion-content-->
\t</div>
\t<!--/.accordion-container-->
</div>


<!-------------------- JS -------------------->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\" type=\"text/javascript\"></script>

</script>
</div>
    
    
<br>
        <div style=\"margin-top:70px;text-align: center;color:grey;\">
\t<h1>Vrais mariages</h1>
  <p>Inspirez-vous des mariages d'autres couples et s'ils vous plaisent contactez les prestataires qui les ont organisés.</p>
\t
</div>

<div>
    
 <img src=\"https://cdn.pixabay.com/photo/2020/03/12/10/21/bunting-4924629_960_720.png\" style=\"width: 100%;;\";\" alt=\"\">
</div>
 <div class=\"contenu_carou_auto\">
<div class=\"caroussel-image\">
<img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgpublicite/t30_2199551.jpg"), "html", null, true);
        echo "\" alt>
<img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgpublicite/t30_2188427.jpg"), "html", null, true);
        echo "\" alt>
<img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgpublicite/t20_2200199.jpg"), "html", null, true);
        echo "\" alt>
<img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgpublicite/t10_2123163.jpg"), "html", null, true);
        echo "\" alt>
<img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgpublicite/df1232fb11a3e96017c68af66dd7ea58.jpg"), "html", null, true);
        echo "\" alt>
<img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgpublicite/2a73a70bbf93b35072333e1ac3a8a8ab.jpg"), "html", null, true);
        echo "\" alt>
<img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgpublicite/3c155d1ed4f4014b67b20f44e99089fd.jpg"), "html", null, true);
        echo "\" alt>

<img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgpublicite/0dd6c7751e0f5dcd68fee50111352b0c.jpg"), "html", null, true);
        echo "\" alt>
</div>
</div>

    <section class=\"top\">
      <div class=\"title\">
        <h3> Pour organiser votre mariage</h3>
        <h1>Happy Mariage</h1>
      </div>
    </section>
    <section class=\"page\">
      <div class=\"parallax1\"></div>
      <div class=\"paragraph first\">
        <p><span>P</span>
     <br>L’Espace Lila Baya au RDC pouvant accueillir 300 personnes à l’intérieur. La mise en place de l'espace,
     <br> pour la signature du contrat de mariage, inclue 100 chaises en style théâtre. Pour votre réception de mariage, un grand espace
     <br> (espace couvert) est disponible pour partager les vœux de vos invités et célébrer votre réception de mariage dans un endroit enchanteur.</p>
      </div>
      <div class=\"parallax2\">
        <div class=\"overlay\"></div>
        <h2>Heni collection<br><span style=\"color:cornflowerblue;\">30%</span></h2>
      </div>
      <div class=\"paragraph second\">
        <p><span>N</span>
        <br> nos 10 idées de voyages, qui vous séduiront autant les unes que les autres. Envie de farniente,
        <br> d’aventure, de culture ou de nature ? Suivez-nous, faites le tour du monde avec ces voyages 
        <br>somptueux et, pour les plus chanceuses, transformez le rêve en réalité…</p>
      </div>
      <div class=\"parallax3\"></div>
      <div class=\"paragraph third\">
        <p><span>F</span>aisant suite à leur belle journée de mariage, le voyage de noces est,
        <br> pour tout couple de jeunes mariés, un moment privilégié de détente et d’évasion à deux.
        <br> Mais parmi toutes ces destinations possibles, comment choisir son type de</p>
      </div>
    </section>
    <div>
    
      <img src=\"https://cdn.pixabay.com/photo/2020/03/12/10/21/bunting-4924629_960_720.png\" style=\"width: 100%;;\";\" alt=\"\">
     </div>

    <div>
      <div style=\" margin: 0px;
   text-align: center;\">
   <a class=\"btn-blink1\" href=\"\">les Nouveautés!</a>
  </div>
      <h6 style=\" margin-top: 10px;\"> Forfait de Mariage</h6>
      <p style=\"text-align: center;\">
      Si vous voulez faire de votre mariage inoubliable en ayant un look idéal,
      <br> notre centre est là pour répondre à tous vos besoins.
       
  </p>
      </div>
  
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link href=\"https://fonts.googleapis.com/css2?family=Almendra+SC&display=swap\" rel=\"stylesheet\">
 
  
  
  <div class=\"wrapi\">
  ";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicite"]) || array_key_exists("publicite", $context) ? $context["publicite"] : (function () { throw new RuntimeError('Variable "publicite" does not exist.', 218, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 219
            echo "  <a href=\"#\" class=\"ng\" title=\"\"><div> <img src=\"/imgpublicite/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 219), "html", null, true);
            echo "\" style=\"height:600px;width:400px;\"></div><span><h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 219), "html", null, true);
            echo "</h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 219), "html", null, true);
            echo " dt</span></a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        echo "  </div>



  <a href=\"";
        // line 225
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\"><div class=\"btn-blink1\" style=\" margin-top: 50px;
  text-align: center;margin-left: 400px;\">au lieu de <span style=\"font: size 0.15em;
    color: #e21941;
    text-decoration: line-through;text-align: center;\">5300 dt</span> 5000 dt </div></a>

  
    


<div class=\"wrapi\" style=\"
  width: 1200px;
  \">
  ";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicite1"]) || array_key_exists("publicite1", $context) ? $context["publicite1"] : (function () { throw new RuntimeError('Variable "publicite1" does not exist.', 237, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 238
            echo "  <a href=\"#\" class=\"ng\" title=\"\"><div> <img src=\"/imgpublicite1/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 238), "html", null, true);
            echo "\" style=\"height:600px;width:400px;\"></div><span><h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 238), "html", null, true);
            echo "</h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 238), "html", null, true);
            echo " dt</span></a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "  </div>
       
  <a href=\"";
        // line 242
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\"><div class=\"btn-blink1\" style=\"
text-align: center;margin-left: 400px;\">au lieu de <span style=\"font: size 0.15em;
  color: #e21941;text-decoration: line-through;
  text-align: center;\">4200 dt</span> 3900 dt </div> </a>
  
   <div class=\"wrapi\" style=\"
  width: 1200px;
  \">
  ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicite3"]) || array_key_exists("publicite3", $context) ? $context["publicite3"] : (function () { throw new RuntimeError('Variable "publicite3" does not exist.', 250, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 251
            echo "  <a href=\"#\" class=\"ng\" title=\"\"><div> <img src=\"/imgpublicite3/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 251), "html", null, true);
            echo "\" style=\"height:600px;width:400px;\"></div><span><h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 251), "html", null, true);
            echo "</h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 251), "html", null, true);
            echo " dt</span></a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "  </div>
       
<a href=\"";
        // line 255
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\"><div class=\"btn-blink1\" style=\" 
text-align: center;margin-left: 400px;\">au lieu de <span style=\"font: size 0.15em;
  color: #e21941;text-decoration: line-through;
  text-align: center;\">3900 dt</span> 3500 dt </div></a>
  
                   
 
            
</body>
<style>
 :root {
  --bc: #efeeee;
  --white: #ffffff;
\t--black: #000000;
  --red: #da2c4d;
\t--teal: #20c997;
\t--cyan: #17a2b8;
\t--primary: #f9c6cf;
\t--font-family-sans-serif: -apple-system,BlinkMacSystemFont,\"Segoe UI\",Roboto,\"Helvetica Neue\",Arial,\"Noto Sans\",sans-serif,\"Apple Color Emoji\",\"Segoe UI Emoji\",\"Segoe UI Symbol\",\"Noto Color Emoji\";
}
* {
\tbox-sizing: border-box;
}
body{
 
 background-image:url(\"http://alijafarian.com/demos/responsive-jquery-accordions/images/texture_old_map.png\");
}

html{
\tmargin: 0;
  width: 100%;
  min-height: 100vh;
\toverflow-x: hidden;
\tfont-family: var(--font-family-sans-serif);
  scroll-behavior: smooth;
\t-webkit-font-smoothing: antialiased;
  background-color: var(--bc);
}
/* Classes */
.top {
  padding: 2em;
  margin: 0 auto;
  background-color: white;
  text-align: center;
}
.title {
  color: var(--black);
}
.title h1 {
  margin: 0;
  padding: 0;
  font-size: 35px;
  font-weight: 400;
  font-family: 'Oswald', sans-serif;
  letter-spacing: 8px;
  text-transform: uppercase;
}
.title h3 {
  font-size: 14px; 
  font-weight: 400; 
  font-family: 'Oswald', sans-serif;
  text-transform: uppercase; 
  letter-spacing: 8px;
  line-height: 0;
}
/* Parallax */
.parallax1 {
  position: relative;
  background-image: url(\"https://cdn.pixabay.com/photo/2016/03/27/20/54/wedding-reception-1284245__340.jpg\");
  min-height: 50vh; 
  position: relative;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parallax2 {
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  background-image: url(\"https://cdn.pixabay.com/photo/2016/11/22/22/25/groom-1850932__340.jpg\");
  min-height: 50vh; 
  position: relative;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.overlay {
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .4);
  position: absolute;
}
.parallax2 h2 {
  font-size: 5em;
  font-weight: 300;
  text-transform: uppercase;
  color: var(--white);
  z-index: 1;
}
.parallax3 {
  position: relative;
  background-image: url(\"https://cdn.pixabay.com/photo/2014/07/31/23/29/wedding-cake-407170__340.jpg\");
  min-height: 50vh; 
  position: relative;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
/* Paragraph */
.paragraph {
  margin: 3em 0;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.paragraph p {
  width: 60%;
  font-size: 1.05em;
  line-height: 1.45em;
  letter-spacing: .1em;
  color: rgb(64, 64, 64);
}
.first span {
  font-size: 4em;
  color: var(--red);
  float: left;
  font-weight: 400;
  line-height: 55px;
  padding: .05em .2em 0 0;
}
.second span {
  font-size: 4em;
  color: var(--teal);
  float: left;
  font-weight: 400;
  line-height: 55px;
  padding: .05em .2em 0 0;
}
.third span {
  font-size: 4em;
  color: var(--cyan);
  float: left;
  font-weight: 400;
  line-height: 55px;
  padding: .05em .2em 0 0;
}
/* Selection */
::selection {
  color: var(--white);
  background: rgba(161, 181, 201, .8);
}
/* SCROLLBAR */
::-webkit-scrollbar-track {
      background-color: #F5F5F5;
}
::-webkit-scrollbar {
      width: 12px;
      background-color: #F5F5F5;
}
::-webkit-scrollbar-thumb {
      background-color: rgba(161, 181, 201, .8);
}
*{box-sizing : border-box}

img{max-width:100%}

.contenu_carou_auto{

margin:2rem auto;
width:420px;
height:279px;
perspective:8000px
\t
\t}
\t\t
.caroussel-image{
\t
animation:rotation 24s infinite alternate linear;\t
transform-style:preserve-3d;
position:relative;\t

}

.caroussel-image img{
\t
position: absolute;
top:0;
left: 0;
\t
\t
\t}


\t\t
.caroussel-image img{
\t
filter:drop-shadow(0 12px 5px hsla(0,0%,0%,.4));
width:400px;
height:266px;
left:10px;
outline:1px solid transparent;
backface-visibility:hidden
\t
\t}
\t\t
.caroussel-image img:nth-child(1){
\t
transform:translate3d(0,0,495px)
\t\t
\t\t}
\t\t
.caroussel-image img:nth-child(2){
\t
transform:rotateY(45deg) translateZ(495px)
\t
\t\t}
\t\t
.caroussel-image img:nth-child(3){
\t
\ttransform:rotateY(90deg) translateZ(495px)
\t
\t}
\t
.caroussel-image img:nth-child(4){
\t
\ttransform:rotateY(135deg) translateZ(495px)
\t
\t}
\t
.caroussel-image img:nth-child(5){
\t
\ttransform:rotateY(180deg) translateZ(495px)
\t
\t}
\t
.caroussel-image img:nth-child(6){
\t
\ttransform:rotateY(225deg) translateZ(495px)
\t
\t}
\t
.caroussel-image img:nth-child(7){
\t
\ttransform:rotateY(270deg) translateZ(495px)
\t
\t}
\t
.caroussel-image img:nth-child(8){
\t
\ttransform:rotateY(315deg) translateZ(495px)
\t
\t}

\t

\t
@keyframes rotation{
from{transform:rotatey(0)}
to{transform:rotatey(0.5turn)}}
\t
/*****fin carrousel 3d automatique*****/
* {
\t\tmargin: 0;
\t\tpadding: 0;
\t\tfont-family: 'Oswald', sans-serif;
\t}
\t
\tbody {
\t\tbackground: url(http://alijafarian.com/demos/responsive-jquery-accordions/images/texture_old_map.png);
\t}
\t
\t.content {
\t\twidth: 60%;
\t\tmargin: 50px auto;
\t\tpadding: 20px;
    
\t}
\t.content h1 {
\t\tfont-weight: 400;
\t\ttext-transform: uppercase;
\t\tmargin: 0;
\t}
\t.content h2 {
\t\tfont-weight: 400;
\t\ttext-transform: uppercase;
\t\tcolor: #333;
\t\tmargin: 0 0 20px;
\t}
\t.content p {
\t\tfont-size: 1em;
\t\tfont-weight: 300;
\t\tline-height: 1.5em;
\t\tmargin: 0 0 20px;
\t}
\t.content p:last-child {
\t\tmargin: 0;
\t}
\t.content a.button {
\t\tdisplay: inline-block;
\t\tpadding: 10px 20px;
\t\tbackground: #ff0;
\t\tcolor: #000;
\t\ttext-decoration: none;
\t}
\t.content a.button:hover {
\t\tbackground: #000;
\t\tcolor: #ff0;
\t}
\t.content.title {
\t\tposition: relative;
\t\tbackground: none;
\t\tborder: 2px dashed #333;
\t}
\t.content.title h1 span.demo {
\t\tdisplay: inline-block;
\t\tfont-size: .5em;
\t\tpadding: 5px 10px;
\t\tbackground: #000;
\t\tcolor: #fff;
\t\tvertical-align: top;
\t\tmargin: 7px 0 0;
\t}
\t.content.title .back-to-article {
\t\tposition: absolute;
\t\tbottom: -20px;
\t\tleft: 20px;
\t}
\t.content.title .back-to-article a {
\t\tpadding: 10px 20px;
\t\tbackground: #f60;
\t\tcolor: #fff;
\t\ttext-decoration: none;
\t}
\t.content.title .back-to-article a:hover {
\t\tbackground: #f90;
\t}
\t.content.title .back-to-article a i {
\t\tmargin-left: 5px;
\t}
\t.content.white {
\t\tbackground: #fff;
\t\tbox-shadow: 0 0 10px #999;
\t}
\t.content.black {
\t\tbackground: #000;
\t}
\t.content.black p {
\t\tcolor: #999;
\t}
\t.content.black p a {
\t\tcolor: #08c;
\t}
\t
\t.accordion-container {
\t\twidth: 100%;
\t\tmargin: 0 0 20px;
\t\tclear: both;
\t}
\t.accordion-toggle {
\t\tposition: relative;
\t\tdisplay: block;
\t\tpadding: 20px;
\t\tfont-size: 1.5em;
\t\tfont-weight: 300;
\t\tbackground: #999;
\t\tcolor: #fff;
\t\ttext-decoration: none;
\t}
\t.accordion-toggle.open {
\t\tbackground: #333;
\t\tcolor: #fff;
\t}
\t.accordion-toggle:hover {
\t\tbackground: #666;
\t}
\t.accordion-toggle span.toggle-icon {
\t\tposition: absolute;
\t\ttop: 9px;
\t\tright: 20px;
\t\tfont-size: 1.5em;
\t}
\t.accordion-content {
\t\tdisplay: none;
\t\tpadding: 20px;
\t\toverflow: auto;
\t}
\t.accordion-content img {
\t\tdisplay: block;
\t\tfloat: left;
\t\tmargin: 0 15px 10px 0;
\t\tmax-width: 100%;
\t\theight: auto;
\t}
\t
\t/* media query for mobile */
\t@media (max-width: 767px) {
\t\t.content {
\t\t\twidth: auto;
\t\t}
\t\t.accordion-content {
\t\t\tpadding: 10px 0;
\t\t\toverflow: inherit;
\t\t}
\t}
body{
 background-image:url(\"http://alijafarian.com/demos/responsive-jquery-accordions/images/texture_old_map.png\");
}

#bs_bloc .bs_container {
  width: 100%;
  font-family: 'Lato', sans-serif;
}

#bs_bloc .bs_container .bs_container-liste {
  height: 100vh;
}

#bs_bloc .bs_container .bs_container-liste ul {
  margin: 0;
  padding: 0;
}

#bs_bloc .bs_container .bs_container-liste ul li {
  display: inline-block;
  width: 33.33%;
  padding: 0;
  margin: 0;
  float: left;
}

#bs_bloc .bs_container .bs_container-liste ul li .bs_container-liste-bloc {
  background-position: center center;
  background-size: cover;
  position: relative;
  height: 100vh;
}

#bs_bloc .bs_container .bs_container-liste ul li .bs_container-liste-bloc .bs_container-liste-fliter {
  background-color: #00000080;
  height: 100vh;
  position: relative;
  overflow: hidden;
  transition: 1s background-color;
}

#bs_bloc .bs_container .bs_container-liste ul li .bs_container-liste-bloc .bs_container-liste-content {
  background-color: #00000080;
  position: absolute;
  width: 100%;
  height: auto;
  top: 50%; left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: #ffffff;
  padding: 20px 10px;
  user-select: none;
}

#bs_bloc .bs_container .bs_container-liste ul li .bs_container-liste-bloc .bs_container-liste-fliter:hover {
  background-color: #00000010;
  transition: .5s background-color;
}
@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);






.ng {
  position: relative;
  float: left;
  width: 350px;
  height: 500px;
  overflow: visible;
  margin: 20px;
  display: block;
  background-color: #000;
  text-decoration: none;
}

.ng div {
  position: relative;
  z-index: 1;
  width: 350px;
  height: 500px;
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  -webkit-background-size: cover;
  overflow: hidden;
  
  -webkit-box-shadow: 0 0 3px 2px rgba(0,0,0,0.2);
  box-shadow: 0 0 3px 2px rgba(0,0,0,0.2);
  
  -webkit-transform: translate(-4px,-4px);
  -moz-transform:    translate(-4px,-4px);
  -ms-transform:     translate(-4px,-4px);
  -o-transform:      translate(-4px,-4px);
  transform:         translate(-4px,-4px);
  
  -webkit-transition: width .2s, height .2s, -webkit-transform .2s, -webkit-box-shadow .2s;
  -moz-transition:  width .2s, height .2s, -moz-transform .2s, box-shadow .2s;
  transition:  width .2s, height .2s, transform .2s, box-shadow .2s;
}
.ng div:before {
  content: \"\";
  display: block;
  width: 350px;
  height: 500px;
  position: absolute;
  z-index: 2;
  top: 0;
  left: 0;
  opacity: 1;
  background: -moz-linear-gradient(left,  rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.85) 20%, rgba(0,0,0,0) 60%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(0,0,0,0.9)), color-stop(20%,rgba(0,0,0,0.85)), color-stop(60%,rgba(0,0,0,0))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(left,  rgba(0,0,0,0.9) 0%,rgba(0,0,0,0.85) 20%,rgba(0,0,0,0) 60%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(left,  rgba(0,0,0,0.9) 0%,rgba(0,0,0,0.85) 20%,rgba(0,0,0,0) 60%); /* Opera 11.10+ */
background: -ms-linear-gradient(left,  rgba(0,0,0,0.9) 0%,rgba(0,0,0,0.85) 20%,rgba(0,0,0,0) 60%); /* IE10+ */
background: linear-gradient(to right,  rgba(0,0,0,0.9) 0%,rgba(0,0,0,0.85) 20%,rgba(0,0,0,0) 60%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e6000000', endColorstr='#00000000',GradientType=1 ); /* IE6-9 */
  
  -webkit-transition: all 1s ease-in-out;
  -moz-transition: all 1s ease-in-out;
  -ms-transition: all 1s ease-in-out;
  -o-transition: all 1s ease-in-out;
  transition: all 1s ease-in-out;
}
.ng:hover div:before {
  opacity: 0.7;
}

.ng:hover div {
  width: 350px;
  height: 500px;
  
  -webkit-box-shadow: 0 0 3px 4px rgba(0,0,0,0.2);
  box-shadow: 0 0 3px 4px rgba(0,0,0,0.2);
  
  -webkit-transform: translate(-8px,-8px);
  -moz-transform:    translate(-8px,-8px);
  -ms-transform:     translate(-8px,-8px);
  -o-transform:      translate(-8px,-8px);
  transform:         translate(-8px,-8px);
}

.ng:active div {
  width: 350px;
  height: 500px;
  -webkit-box-shadow: none;
  box-shadow: none;
  -webkit-transform: translate(-4px,-4px);
  -moz-transform:    translate(-4px,-4px);
  -ms-transform:     translate(-4px,-4px);
  -o-transform:      translate(-4px,-4px);
  transform:         translate(-4px,-4px);
}

.ng span {
  position: absolute;
  display: block;
  overflow:hidden;
  z-index: 20;
  padding: 15px 20px;
  bottom: 0px;
  left: 0;
}

.ng span h3 {
  color: #fff;
  text-transform: uppercase;
  margin: 0;
}

.ng span p {
  font-size: 14px;
  color: rgba(255,255,255,0.7);
  margin: 0;
  opacity: 0;
  max-height: 0;
  -webkit-transition: all 1s ease-in-out;
  -moz-transition: all 1s ease-in-out;
  -ms-transition: all 1s ease-in-out;
  -o-transition: all 1s ease-in-out;
  transition: all 1s ease-in-out;
}
.ng:hover span p {
  opacity: 1;
  max-height: 200px;
}

 h3{
   color:hotpink;
 }


.btn-blink1 {
 position: relative;
 display: inline-block;
 padding: 15px 25px;
 border-radius: 5px;
 font-family: sans-serif;
 font-size: 1.2em;
 line-height: 1;
 font-weight: 700;
 letter-spacing: 1px;
 text-transform: uppercase;
 text-decoration: none;
 color:palevioletred;
 animation: anim-btn1 1s ease-in-out infinite alternate;
 
}

@keyframes anim-btn1 {
 from {
  transform: scale(1);
  background-color:pink;
  text-shadow: 0 1px 3px rgba(0, 0, 0, .15);
  box-shadow: 0 0 0 transparent, 0 0 5px rgba(0, 0, 0, .25) inset;
 }
 to {
  transform: scale(1.1);
  background-color:plum;
  text-shadow: 0 2px 6px rgba(0, 0, 0, .35);
  box-shadow: 0 0 12px purple, 0 0 10px rgba(0, 0, 0, .5) inset;
 }
}
.pub{
   width:100%;
  height:auto;
}

.polar{
  background:white;
  padding:1rem;
  box-shadow: 0 0.5rem 1rem gray;
  
}

.caption{
 font-size:1rem;
  text-align:center;
  line-height:1.5em;
}
.contents{
  width:30%;
  display:inline-block;
  margin-top:2rem;
  filter:grayscale(100%);
  
}
.contents .polar:before{
  
  position:absolute;
  z-index=-1;
  transtion:all 0.30s;
  
}

div.one{ transform: rotate(10deg);}
div.two{
   transform: rotate(-10deg);
}
div.three{
   transform: rotate(10deg);
}
.contents:hover{
  filter:grayscale(0%);
   transform: rotate(0);
  -ms-transform: scale(1.2); 
  -webkit-transform: scale(1.2);
  transform: scale(1.2); 

}






















.banner1,
.banner2,
.banner3,
.banner4 {
  
  width: 100%;
  position: absolute;
margin-top:70px;

}
.image {
  width: 100%;
  position: absolute;
  
  
  animation: zoom-out 6s linear infinite;
  
  height:500px
}

@keyframes zoom-out {
  100% {
    width: 100%;
  }
}







.banner1 {
  animation: slide1 12s linear infinite;
}

.banner2 {
  animation: slide2 12s linear infinite;
}

.banner3 {
  animation: slide3 12s linear infinite;
}

.banner4 {
  animation: slide4 12s linear infinite;
}

@keyframes slide1 {
  0% {
    visibility: visible;
  }
  25% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  75% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}

@keyframes slide2 {
  0% {
    visibility: hidden;
  }
  25% {
    visibility: hidden;
  }
  50% {
    visibility: visible;
  }
  75% {
    visibility: hidden;
  }
  100% {
    visibility: hidden;
  }
}

@keyframes slide3 {
  0% {
    visibility: hidden;
  }
  25% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  75% {
    visibility: visible;
  }
  100% {
    visibility: hidden;
  }
}

@keyframes slide4 {
  0% {
    visibility: hidden;
  }
  25% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  75% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}

@keyframes textup {
  10% {
    transform: translateY(0px);
  }
  100% {
    transform: translateY(0px);
  }
}

.text-box1 {
  animation-delay: 0s;
}

.text-box2 {
  animation-delay: 3s;
}

.text-box3 {
  animation-delay: 6s;
}

.text-box4 {
  animation-delay: 9s;
}

/*css card*/

.card {
  max-width : 100%;
  height: 400px;
  display: block;
    position: relative;
    
    align-items: center;
    justify-content: center;
    width: 1300px;
    
    background: #000;
    
    overflow: hidden;
    cursor: pointer;
    transition: all 0.5s ease;
    backface-visibility: hidden;
}
.card:hover {
    transform: scale(0.9);
}
.card:hover .ul {
    transform: translate(0);
    opacity: 1;
}

.card img {
    position: absolute;
    width: 100%;
    z-index: 10;
    transition: all 0.5s ease;
}
.card .con-text {
  line-height: 1.3 em;
  max-width : 100%;
    position: absolute;
    z-index: 30;
    bottom: 0;
    color: #fff;
    
    
    background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.9) 100%);
}


.ul {
    position: absolute;
.card:hover {
    transform: scale(0.9);
}
    right: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    z-index: 40;
    border-radius: 14px;
    padding-left: 0;
    padding-bottom: 8px;
    padding-top: 8px;
    top: 0;
    opacity: 0;
    transform: translate(100%);
    transition: all 0.5s ease;
}
.ul li {
    background: #fff;
    list-style: none;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0.7;
    transition: all 0.5s ease;
    backface-visibility: hidden;
}
.ul li:last-child {
    border-radius: 0 0 12px 12px;
}
.ul li:first-child {
    border-radius: 12px 12px 0 0;
}
.ul li:hover {
    opacity: 1;
    transform: translate(-7px, -4px);
    border-radius: 6px;
}
.ul li img {
    position: absolute;
    width: 100%;
}


  *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}

h6 {
  font-family:  ;
  font-size: 2em;
  text-align: center;
  color:hotpink;
  
  text-shadow: 0px 0px 15px #fff;
  -webkit-text-shadow: 0px 0px 15px #fff;
  -moz-text-shadow: 0px 0px 15px #fff;
  -ms-text-shadow: 0px 0px 15px #fff;
  -o-text-shadow: 0px 0px 15px #fff;
}

    </style>
    
     <script src=\"";
        // line 1219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("popper/popper.min.js"), "html", null, true);
        echo "\"></script> 
      <script src=\"";
        // line 1220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery/jquery.slim.min.js"), "html", null, true);
        echo "\"></script>
      <script>    \$(document).ready(function () {
    \$('.accordion-toggle').on('click', function(event){
    event.preventDefault();
    // create accordion variables
    var accordion = \$(this);
    var accordionContent = accordion.next('.accordion-content');
    var accordionToggleIcon = \$(this).children('.toggle-icon');
    // toggle accordion link open class
    accordion.toggleClass(\"open\");
    // toggle accordion content
    accordionContent.slideToggle(250);
    // change plus/minus icon
    if (accordion.hasClass(\"open\")) {
    accordionToggleIcon.html(\"<i class='fa fa-minus-circle'></i>\");
    } else {
    accordionToggleIcon.html(\"<i class='fa fa-plus-circle'></i>\");
    }
    });
    });</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  1429 => 1220,  1425 => 1219,  458 => 255,  454 => 253,  441 => 251,  437 => 250,  426 => 242,  422 => 240,  409 => 238,  405 => 237,  390 => 225,  384 => 221,  371 => 219,  367 => 218,  305 => 159,  300 => 157,  296 => 156,  292 => 155,  288 => 154,  284 => 153,  280 => 152,  276 => 151,  243 => 121,  238 => 119,  227 => 111,  222 => 109,  211 => 101,  206 => 99,  195 => 91,  190 => 89,  179 => 81,  174 => 79,  163 => 71,  158 => 69,  147 => 61,  142 => 59,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}
         

{% block body %}
<body>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, \">

       <body>


          
      
        <div class=\"slide\" >
       
            <!-- First slide -->
            <div class=\"banner1\">
              <img class=\"image\" src=\"https://cdn.pixabay.com/photo/2016/06/06/08/05/video-media-production-1439008__340.jpg\"/>
             
            </div>
        
            <!-- Second slide -->
            <div class=\"banner2\">
              <img class=\"image\"src=\"https://cdn.pixabay.com/photo/2020/02/07/13/08/wedding-4827128__340.jpg\"/>
              
            </div>
        
            <!-- Third slide -->
            <div class=\"banner3\">
              <img class=\"image\" src=\"https://cdn.pixabay.com/photo/2015/02/06/12/47/wedding-626020__340.jpg\">
            </div>
        
            <!-- Fourth slide -->
            <div class=\"banner4\">
              <img class=\"image\" src=\"https://cdn.pixabay.com/photo/2017/10/29/14/44/wedding-2899892__340.jpg\"/>
              
            </div>
          
        </div>   
</div>  
        
        
        
      
        
        
        <br>
        <div style=\"margin-top:600px;text-align: center;color:grey;\">
\t<h1>Les meilleurs prestataires pour organisez votre mariage!!</h1>
\t
</div>

<!--/.content-->

<div class=\"content white\"style=\"background-image:url('https://cdn.pixabay.com/photo/2016/07/13/03/47/background-1513621__340.jpg');width: 100%;background-repeat:no-repeat;background-size:cover;\">
\t
\t<div class=\"accordion-container\">
\t\t<a href=\"{{path('traiteurs')}}\" class=\"accordion-toggle\">Traiteurs <span class=\"toggle-icon\"><i class=\"fa fa-plus-circle\"></i></span></a>
\t\t<div class=\"accordion-content\">
\t\t\t<img src=\"{{asset('imgtraiteurs/4b72b37e8b797b4466b8c2a3b67a4d1f107d565a.jpeg')}}\" />
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
\t\t\t
\t\t</div>
\t\t<!--/.accordion-content-->
\t</div>
\t<!--/.accordion-container-->
\t<div class=\"accordion-container\">
\t\t<a href=\"{{path('photographe')}}\" class=\"accordion-toggle\">Photographes<span class=\"toggle-icon\"><i class=\"fa fa-plus-circle\"></i></span></a>
\t\t<div class=\"accordion-content\">
\t\t\t<img src=\"{{asset('imgphotographes/4dcfe5280c7e6f2ac53e9ed49ba20f725a0e7845.jpeg')}}\" />
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
\t\t
\t\t</div>
\t\t<!--/.accordion-content-->
\t</div>
\t<!--/.accordion-container-->
\t<div class=\"accordion-container\">
\t\t<a href=\"{{path('salle_de_mariage')}}\" class=\"accordion-toggle\">Les salles de mariage <span class=\"toggle-icon\"><i class=\"fa fa-plus-circle\"></i></span></a>
\t\t<div class=\"accordion-content\">
\t\t\t<img src=\"{{asset('imgsalles/1f603f1d9b2fb82e95ead52e96705bc1.jpg')}}\" />
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
\t\t\t
\t\t</div>
\t\t<!--/.accordion-content-->
\t</div>
  <!--/.accordion-container-->
\t<div class=\"accordion-container\">
\t\t<a href=\"{{path('musique_de_mariage')}}\" class=\"accordion-toggle\">Les musiques de mariage <span class=\"toggle-icon\"><i class=\"fa fa-plus-circle\"></i></span></a>
\t\t<div class=\"accordion-content\">
\t\t\t<img src=\"{{asset('imgmusiques/1c142dea8609f3130cc848bce8a397f1.jpg')}}\" />
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
\t\t\t
\t\t</div>
\t\t<!--/.accordion-content-->
\t</div>
  \t<!--/.accordion-container-->
\t<div class=\"accordion-container\">
\t\t<a href=\"{{path('voyage_de_noce')}}\" class=\"accordion-toggle\">Voyage de noce <span class=\"toggle-icon\"><i class=\"fa fa-plus-circle\"></i></span></a>
\t\t<div class=\"accordion-content\">
\t\t\t<img src=\"{{asset('imgvoyages/e916d6672cd31e4a6a3a03e83023fd2d.jpg')}}\" />
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

\t\t</div>
\t\t<!--/.accordion-content-->
\t</div>
\t<!--/.accordion-container-->
\t<div class=\"accordion-container\">
\t\t<a href=\"{{path('centre_de_beaute')}}\" class=\"accordion-toggle\">Les centres de beautés <span class=\"toggle-icon\"><i class=\"fa fa-plus-circle\"></i></span></a>
\t\t<div class=\"accordion-content\">
\t\t\t<img src=\"{{asset('imgcentre/a47ac509697db96e999653abf2e917e02ec67830.jpeg')}}\" />
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
\t\t\t
\t\t</div>
\t\t<!--/.accordion-content-->
\t</div>
\t<!--/.accordion-container-->
\t<div class=\"accordion-container\">
\t\t<a href=\"{{path('costume')}}\" class=\"accordion-toggle\">Les costumes mariés <span class=\"toggle-icon\"><i class=\"fa fa-plus-circle\"></i></span></a>
\t\t<div class=\"accordion-content\">
\t\t\t<img src=\"{{asset('imgcostume/1e721df6c01b1ba7928fdc18d2817e590eb8cfcd.jpeg')}}\" />
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
\t\t\t
\t\t</div>
\t\t<!--/.accordion-content-->
\t</div>
\t<!--/.accordion-container-->
</div>


<!-------------------- JS -------------------->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\" type=\"text/javascript\"></script>

</script>
</div>
    
    
<br>
        <div style=\"margin-top:70px;text-align: center;color:grey;\">
\t<h1>Vrais mariages</h1>
  <p>Inspirez-vous des mariages d'autres couples et s'ils vous plaisent contactez les prestataires qui les ont organisés.</p>
\t
</div>

<div>
    
 <img src=\"https://cdn.pixabay.com/photo/2020/03/12/10/21/bunting-4924629_960_720.png\" style=\"width: 100%;;\";\" alt=\"\">
</div>
 <div class=\"contenu_carou_auto\">
<div class=\"caroussel-image\">
<img src=\"{{asset('imgpublicite/t30_2199551.jpg')}}\" alt>
<img src=\"{{asset('imgpublicite/t30_2188427.jpg')}}\" alt>
<img src=\"{{asset('imgpublicite/t20_2200199.jpg')}}\" alt>
<img src=\"{{asset('imgpublicite/t10_2123163.jpg')}}\" alt>
<img src=\"{{asset('imgpublicite/df1232fb11a3e96017c68af66dd7ea58.jpg')}}\" alt>
<img src=\"{{asset('imgpublicite/2a73a70bbf93b35072333e1ac3a8a8ab.jpg')}}\" alt>
<img src=\"{{asset('imgpublicite/3c155d1ed4f4014b67b20f44e99089fd.jpg')}}\" alt>

<img src=\"{{asset('imgpublicite/0dd6c7751e0f5dcd68fee50111352b0c.jpg')}}\" alt>
</div>
</div>

    <section class=\"top\">
      <div class=\"title\">
        <h3> Pour organiser votre mariage</h3>
        <h1>Happy Mariage</h1>
      </div>
    </section>
    <section class=\"page\">
      <div class=\"parallax1\"></div>
      <div class=\"paragraph first\">
        <p><span>P</span>
     <br>L’Espace Lila Baya au RDC pouvant accueillir 300 personnes à l’intérieur. La mise en place de l'espace,
     <br> pour la signature du contrat de mariage, inclue 100 chaises en style théâtre. Pour votre réception de mariage, un grand espace
     <br> (espace couvert) est disponible pour partager les vœux de vos invités et célébrer votre réception de mariage dans un endroit enchanteur.</p>
      </div>
      <div class=\"parallax2\">
        <div class=\"overlay\"></div>
        <h2>Heni collection<br><span style=\"color:cornflowerblue;\">30%</span></h2>
      </div>
      <div class=\"paragraph second\">
        <p><span>N</span>
        <br> nos 10 idées de voyages, qui vous séduiront autant les unes que les autres. Envie de farniente,
        <br> d’aventure, de culture ou de nature ? Suivez-nous, faites le tour du monde avec ces voyages 
        <br>somptueux et, pour les plus chanceuses, transformez le rêve en réalité…</p>
      </div>
      <div class=\"parallax3\"></div>
      <div class=\"paragraph third\">
        <p><span>F</span>aisant suite à leur belle journée de mariage, le voyage de noces est,
        <br> pour tout couple de jeunes mariés, un moment privilégié de détente et d’évasion à deux.
        <br> Mais parmi toutes ces destinations possibles, comment choisir son type de</p>
      </div>
    </section>
    <div>
    
      <img src=\"https://cdn.pixabay.com/photo/2020/03/12/10/21/bunting-4924629_960_720.png\" style=\"width: 100%;;\";\" alt=\"\">
     </div>

    <div>
      <div style=\" margin: 0px;
   text-align: center;\">
   <a class=\"btn-blink1\" href=\"\">les Nouveautés!</a>
  </div>
      <h6 style=\" margin-top: 10px;\"> Forfait de Mariage</h6>
      <p style=\"text-align: center;\">
      Si vous voulez faire de votre mariage inoubliable en ayant un look idéal,
      <br> notre centre est là pour répondre à tous vos besoins.
       
  </p>
      </div>
  
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link href=\"https://fonts.googleapis.com/css2?family=Almendra+SC&display=swap\" rel=\"stylesheet\">
 
  
  
  <div class=\"wrapi\">
  {% for item in publicite %}
  <a href=\"#\" class=\"ng\" title=\"\"><div> <img src=\"/imgpublicite/{{ item.image }}\" style=\"height:600px;width:400px;\"></div><span><h3>{{ item.nom}}</h3>{{ item.prix }} dt</span></a>
  {% endfor %}
  </div>



  <a href=\"{{path('contact')}}\"><div class=\"btn-blink1\" style=\" margin-top: 50px;
  text-align: center;margin-left: 400px;\">au lieu de <span style=\"font: size 0.15em;
    color: #e21941;
    text-decoration: line-through;text-align: center;\">5300 dt</span> 5000 dt </div></a>

  
    


<div class=\"wrapi\" style=\"
  width: 1200px;
  \">
  {% for item in publicite1 %}
  <a href=\"#\" class=\"ng\" title=\"\"><div> <img src=\"/imgpublicite1/{{ item.image }}\" style=\"height:600px;width:400px;\"></div><span><h3>{{ item.nom}}</h3>{{ item.prix }} dt</span></a>
  {% endfor %}
  </div>
       
  <a href=\"{{path('contact')}}\"><div class=\"btn-blink1\" style=\"
text-align: center;margin-left: 400px;\">au lieu de <span style=\"font: size 0.15em;
  color: #e21941;text-decoration: line-through;
  text-align: center;\">4200 dt</span> 3900 dt </div> </a>
  
   <div class=\"wrapi\" style=\"
  width: 1200px;
  \">
  {% for item in publicite3 %}
  <a href=\"#\" class=\"ng\" title=\"\"><div> <img src=\"/imgpublicite3/{{ item.image }}\" style=\"height:600px;width:400px;\"></div><span><h3>{{ item.nom}}</h3>{{ item.prix }} dt</span></a>
  {% endfor %}
  </div>
       
<a href=\"{{path('contact')}}\"><div class=\"btn-blink1\" style=\" 
text-align: center;margin-left: 400px;\">au lieu de <span style=\"font: size 0.15em;
  color: #e21941;text-decoration: line-through;
  text-align: center;\">3900 dt</span> 3500 dt </div></a>
  
                   
 
            
</body>
<style>
 :root {
  --bc: #efeeee;
  --white: #ffffff;
\t--black: #000000;
  --red: #da2c4d;
\t--teal: #20c997;
\t--cyan: #17a2b8;
\t--primary: #f9c6cf;
\t--font-family-sans-serif: -apple-system,BlinkMacSystemFont,\"Segoe UI\",Roboto,\"Helvetica Neue\",Arial,\"Noto Sans\",sans-serif,\"Apple Color Emoji\",\"Segoe UI Emoji\",\"Segoe UI Symbol\",\"Noto Color Emoji\";
}
* {
\tbox-sizing: border-box;
}
body{
 
 background-image:url(\"http://alijafarian.com/demos/responsive-jquery-accordions/images/texture_old_map.png\");
}

html{
\tmargin: 0;
  width: 100%;
  min-height: 100vh;
\toverflow-x: hidden;
\tfont-family: var(--font-family-sans-serif);
  scroll-behavior: smooth;
\t-webkit-font-smoothing: antialiased;
  background-color: var(--bc);
}
/* Classes */
.top {
  padding: 2em;
  margin: 0 auto;
  background-color: white;
  text-align: center;
}
.title {
  color: var(--black);
}
.title h1 {
  margin: 0;
  padding: 0;
  font-size: 35px;
  font-weight: 400;
  font-family: 'Oswald', sans-serif;
  letter-spacing: 8px;
  text-transform: uppercase;
}
.title h3 {
  font-size: 14px; 
  font-weight: 400; 
  font-family: 'Oswald', sans-serif;
  text-transform: uppercase; 
  letter-spacing: 8px;
  line-height: 0;
}
/* Parallax */
.parallax1 {
  position: relative;
  background-image: url(\"https://cdn.pixabay.com/photo/2016/03/27/20/54/wedding-reception-1284245__340.jpg\");
  min-height: 50vh; 
  position: relative;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parallax2 {
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  background-image: url(\"https://cdn.pixabay.com/photo/2016/11/22/22/25/groom-1850932__340.jpg\");
  min-height: 50vh; 
  position: relative;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.overlay {
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .4);
  position: absolute;
}
.parallax2 h2 {
  font-size: 5em;
  font-weight: 300;
  text-transform: uppercase;
  color: var(--white);
  z-index: 1;
}
.parallax3 {
  position: relative;
  background-image: url(\"https://cdn.pixabay.com/photo/2014/07/31/23/29/wedding-cake-407170__340.jpg\");
  min-height: 50vh; 
  position: relative;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
/* Paragraph */
.paragraph {
  margin: 3em 0;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.paragraph p {
  width: 60%;
  font-size: 1.05em;
  line-height: 1.45em;
  letter-spacing: .1em;
  color: rgb(64, 64, 64);
}
.first span {
  font-size: 4em;
  color: var(--red);
  float: left;
  font-weight: 400;
  line-height: 55px;
  padding: .05em .2em 0 0;
}
.second span {
  font-size: 4em;
  color: var(--teal);
  float: left;
  font-weight: 400;
  line-height: 55px;
  padding: .05em .2em 0 0;
}
.third span {
  font-size: 4em;
  color: var(--cyan);
  float: left;
  font-weight: 400;
  line-height: 55px;
  padding: .05em .2em 0 0;
}
/* Selection */
::selection {
  color: var(--white);
  background: rgba(161, 181, 201, .8);
}
/* SCROLLBAR */
::-webkit-scrollbar-track {
      background-color: #F5F5F5;
}
::-webkit-scrollbar {
      width: 12px;
      background-color: #F5F5F5;
}
::-webkit-scrollbar-thumb {
      background-color: rgba(161, 181, 201, .8);
}
*{box-sizing : border-box}

img{max-width:100%}

.contenu_carou_auto{

margin:2rem auto;
width:420px;
height:279px;
perspective:8000px
\t
\t}
\t\t
.caroussel-image{
\t
animation:rotation 24s infinite alternate linear;\t
transform-style:preserve-3d;
position:relative;\t

}

.caroussel-image img{
\t
position: absolute;
top:0;
left: 0;
\t
\t
\t}


\t\t
.caroussel-image img{
\t
filter:drop-shadow(0 12px 5px hsla(0,0%,0%,.4));
width:400px;
height:266px;
left:10px;
outline:1px solid transparent;
backface-visibility:hidden
\t
\t}
\t\t
.caroussel-image img:nth-child(1){
\t
transform:translate3d(0,0,495px)
\t\t
\t\t}
\t\t
.caroussel-image img:nth-child(2){
\t
transform:rotateY(45deg) translateZ(495px)
\t
\t\t}
\t\t
.caroussel-image img:nth-child(3){
\t
\ttransform:rotateY(90deg) translateZ(495px)
\t
\t}
\t
.caroussel-image img:nth-child(4){
\t
\ttransform:rotateY(135deg) translateZ(495px)
\t
\t}
\t
.caroussel-image img:nth-child(5){
\t
\ttransform:rotateY(180deg) translateZ(495px)
\t
\t}
\t
.caroussel-image img:nth-child(6){
\t
\ttransform:rotateY(225deg) translateZ(495px)
\t
\t}
\t
.caroussel-image img:nth-child(7){
\t
\ttransform:rotateY(270deg) translateZ(495px)
\t
\t}
\t
.caroussel-image img:nth-child(8){
\t
\ttransform:rotateY(315deg) translateZ(495px)
\t
\t}

\t

\t
@keyframes rotation{
from{transform:rotatey(0)}
to{transform:rotatey(0.5turn)}}
\t
/*****fin carrousel 3d automatique*****/
* {
\t\tmargin: 0;
\t\tpadding: 0;
\t\tfont-family: 'Oswald', sans-serif;
\t}
\t
\tbody {
\t\tbackground: url(http://alijafarian.com/demos/responsive-jquery-accordions/images/texture_old_map.png);
\t}
\t
\t.content {
\t\twidth: 60%;
\t\tmargin: 50px auto;
\t\tpadding: 20px;
    
\t}
\t.content h1 {
\t\tfont-weight: 400;
\t\ttext-transform: uppercase;
\t\tmargin: 0;
\t}
\t.content h2 {
\t\tfont-weight: 400;
\t\ttext-transform: uppercase;
\t\tcolor: #333;
\t\tmargin: 0 0 20px;
\t}
\t.content p {
\t\tfont-size: 1em;
\t\tfont-weight: 300;
\t\tline-height: 1.5em;
\t\tmargin: 0 0 20px;
\t}
\t.content p:last-child {
\t\tmargin: 0;
\t}
\t.content a.button {
\t\tdisplay: inline-block;
\t\tpadding: 10px 20px;
\t\tbackground: #ff0;
\t\tcolor: #000;
\t\ttext-decoration: none;
\t}
\t.content a.button:hover {
\t\tbackground: #000;
\t\tcolor: #ff0;
\t}
\t.content.title {
\t\tposition: relative;
\t\tbackground: none;
\t\tborder: 2px dashed #333;
\t}
\t.content.title h1 span.demo {
\t\tdisplay: inline-block;
\t\tfont-size: .5em;
\t\tpadding: 5px 10px;
\t\tbackground: #000;
\t\tcolor: #fff;
\t\tvertical-align: top;
\t\tmargin: 7px 0 0;
\t}
\t.content.title .back-to-article {
\t\tposition: absolute;
\t\tbottom: -20px;
\t\tleft: 20px;
\t}
\t.content.title .back-to-article a {
\t\tpadding: 10px 20px;
\t\tbackground: #f60;
\t\tcolor: #fff;
\t\ttext-decoration: none;
\t}
\t.content.title .back-to-article a:hover {
\t\tbackground: #f90;
\t}
\t.content.title .back-to-article a i {
\t\tmargin-left: 5px;
\t}
\t.content.white {
\t\tbackground: #fff;
\t\tbox-shadow: 0 0 10px #999;
\t}
\t.content.black {
\t\tbackground: #000;
\t}
\t.content.black p {
\t\tcolor: #999;
\t}
\t.content.black p a {
\t\tcolor: #08c;
\t}
\t
\t.accordion-container {
\t\twidth: 100%;
\t\tmargin: 0 0 20px;
\t\tclear: both;
\t}
\t.accordion-toggle {
\t\tposition: relative;
\t\tdisplay: block;
\t\tpadding: 20px;
\t\tfont-size: 1.5em;
\t\tfont-weight: 300;
\t\tbackground: #999;
\t\tcolor: #fff;
\t\ttext-decoration: none;
\t}
\t.accordion-toggle.open {
\t\tbackground: #333;
\t\tcolor: #fff;
\t}
\t.accordion-toggle:hover {
\t\tbackground: #666;
\t}
\t.accordion-toggle span.toggle-icon {
\t\tposition: absolute;
\t\ttop: 9px;
\t\tright: 20px;
\t\tfont-size: 1.5em;
\t}
\t.accordion-content {
\t\tdisplay: none;
\t\tpadding: 20px;
\t\toverflow: auto;
\t}
\t.accordion-content img {
\t\tdisplay: block;
\t\tfloat: left;
\t\tmargin: 0 15px 10px 0;
\t\tmax-width: 100%;
\t\theight: auto;
\t}
\t
\t/* media query for mobile */
\t@media (max-width: 767px) {
\t\t.content {
\t\t\twidth: auto;
\t\t}
\t\t.accordion-content {
\t\t\tpadding: 10px 0;
\t\t\toverflow: inherit;
\t\t}
\t}
body{
 background-image:url(\"http://alijafarian.com/demos/responsive-jquery-accordions/images/texture_old_map.png\");
}

#bs_bloc .bs_container {
  width: 100%;
  font-family: 'Lato', sans-serif;
}

#bs_bloc .bs_container .bs_container-liste {
  height: 100vh;
}

#bs_bloc .bs_container .bs_container-liste ul {
  margin: 0;
  padding: 0;
}

#bs_bloc .bs_container .bs_container-liste ul li {
  display: inline-block;
  width: 33.33%;
  padding: 0;
  margin: 0;
  float: left;
}

#bs_bloc .bs_container .bs_container-liste ul li .bs_container-liste-bloc {
  background-position: center center;
  background-size: cover;
  position: relative;
  height: 100vh;
}

#bs_bloc .bs_container .bs_container-liste ul li .bs_container-liste-bloc .bs_container-liste-fliter {
  background-color: #00000080;
  height: 100vh;
  position: relative;
  overflow: hidden;
  transition: 1s background-color;
}

#bs_bloc .bs_container .bs_container-liste ul li .bs_container-liste-bloc .bs_container-liste-content {
  background-color: #00000080;
  position: absolute;
  width: 100%;
  height: auto;
  top: 50%; left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: #ffffff;
  padding: 20px 10px;
  user-select: none;
}

#bs_bloc .bs_container .bs_container-liste ul li .bs_container-liste-bloc .bs_container-liste-fliter:hover {
  background-color: #00000010;
  transition: .5s background-color;
}
@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);






.ng {
  position: relative;
  float: left;
  width: 350px;
  height: 500px;
  overflow: visible;
  margin: 20px;
  display: block;
  background-color: #000;
  text-decoration: none;
}

.ng div {
  position: relative;
  z-index: 1;
  width: 350px;
  height: 500px;
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  -webkit-background-size: cover;
  overflow: hidden;
  
  -webkit-box-shadow: 0 0 3px 2px rgba(0,0,0,0.2);
  box-shadow: 0 0 3px 2px rgba(0,0,0,0.2);
  
  -webkit-transform: translate(-4px,-4px);
  -moz-transform:    translate(-4px,-4px);
  -ms-transform:     translate(-4px,-4px);
  -o-transform:      translate(-4px,-4px);
  transform:         translate(-4px,-4px);
  
  -webkit-transition: width .2s, height .2s, -webkit-transform .2s, -webkit-box-shadow .2s;
  -moz-transition:  width .2s, height .2s, -moz-transform .2s, box-shadow .2s;
  transition:  width .2s, height .2s, transform .2s, box-shadow .2s;
}
.ng div:before {
  content: \"\";
  display: block;
  width: 350px;
  height: 500px;
  position: absolute;
  z-index: 2;
  top: 0;
  left: 0;
  opacity: 1;
  background: -moz-linear-gradient(left,  rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.85) 20%, rgba(0,0,0,0) 60%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(0,0,0,0.9)), color-stop(20%,rgba(0,0,0,0.85)), color-stop(60%,rgba(0,0,0,0))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(left,  rgba(0,0,0,0.9) 0%,rgba(0,0,0,0.85) 20%,rgba(0,0,0,0) 60%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(left,  rgba(0,0,0,0.9) 0%,rgba(0,0,0,0.85) 20%,rgba(0,0,0,0) 60%); /* Opera 11.10+ */
background: -ms-linear-gradient(left,  rgba(0,0,0,0.9) 0%,rgba(0,0,0,0.85) 20%,rgba(0,0,0,0) 60%); /* IE10+ */
background: linear-gradient(to right,  rgba(0,0,0,0.9) 0%,rgba(0,0,0,0.85) 20%,rgba(0,0,0,0) 60%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e6000000', endColorstr='#00000000',GradientType=1 ); /* IE6-9 */
  
  -webkit-transition: all 1s ease-in-out;
  -moz-transition: all 1s ease-in-out;
  -ms-transition: all 1s ease-in-out;
  -o-transition: all 1s ease-in-out;
  transition: all 1s ease-in-out;
}
.ng:hover div:before {
  opacity: 0.7;
}

.ng:hover div {
  width: 350px;
  height: 500px;
  
  -webkit-box-shadow: 0 0 3px 4px rgba(0,0,0,0.2);
  box-shadow: 0 0 3px 4px rgba(0,0,0,0.2);
  
  -webkit-transform: translate(-8px,-8px);
  -moz-transform:    translate(-8px,-8px);
  -ms-transform:     translate(-8px,-8px);
  -o-transform:      translate(-8px,-8px);
  transform:         translate(-8px,-8px);
}

.ng:active div {
  width: 350px;
  height: 500px;
  -webkit-box-shadow: none;
  box-shadow: none;
  -webkit-transform: translate(-4px,-4px);
  -moz-transform:    translate(-4px,-4px);
  -ms-transform:     translate(-4px,-4px);
  -o-transform:      translate(-4px,-4px);
  transform:         translate(-4px,-4px);
}

.ng span {
  position: absolute;
  display: block;
  overflow:hidden;
  z-index: 20;
  padding: 15px 20px;
  bottom: 0px;
  left: 0;
}

.ng span h3 {
  color: #fff;
  text-transform: uppercase;
  margin: 0;
}

.ng span p {
  font-size: 14px;
  color: rgba(255,255,255,0.7);
  margin: 0;
  opacity: 0;
  max-height: 0;
  -webkit-transition: all 1s ease-in-out;
  -moz-transition: all 1s ease-in-out;
  -ms-transition: all 1s ease-in-out;
  -o-transition: all 1s ease-in-out;
  transition: all 1s ease-in-out;
}
.ng:hover span p {
  opacity: 1;
  max-height: 200px;
}

 h3{
   color:hotpink;
 }


.btn-blink1 {
 position: relative;
 display: inline-block;
 padding: 15px 25px;
 border-radius: 5px;
 font-family: sans-serif;
 font-size: 1.2em;
 line-height: 1;
 font-weight: 700;
 letter-spacing: 1px;
 text-transform: uppercase;
 text-decoration: none;
 color:palevioletred;
 animation: anim-btn1 1s ease-in-out infinite alternate;
 
}

@keyframes anim-btn1 {
 from {
  transform: scale(1);
  background-color:pink;
  text-shadow: 0 1px 3px rgba(0, 0, 0, .15);
  box-shadow: 0 0 0 transparent, 0 0 5px rgba(0, 0, 0, .25) inset;
 }
 to {
  transform: scale(1.1);
  background-color:plum;
  text-shadow: 0 2px 6px rgba(0, 0, 0, .35);
  box-shadow: 0 0 12px purple, 0 0 10px rgba(0, 0, 0, .5) inset;
 }
}
.pub{
   width:100%;
  height:auto;
}

.polar{
  background:white;
  padding:1rem;
  box-shadow: 0 0.5rem 1rem gray;
  
}

.caption{
 font-size:1rem;
  text-align:center;
  line-height:1.5em;
}
.contents{
  width:30%;
  display:inline-block;
  margin-top:2rem;
  filter:grayscale(100%);
  
}
.contents .polar:before{
  
  position:absolute;
  z-index=-1;
  transtion:all 0.30s;
  
}

div.one{ transform: rotate(10deg);}
div.two{
   transform: rotate(-10deg);
}
div.three{
   transform: rotate(10deg);
}
.contents:hover{
  filter:grayscale(0%);
   transform: rotate(0);
  -ms-transform: scale(1.2); 
  -webkit-transform: scale(1.2);
  transform: scale(1.2); 

}






















.banner1,
.banner2,
.banner3,
.banner4 {
  
  width: 100%;
  position: absolute;
margin-top:70px;

}
.image {
  width: 100%;
  position: absolute;
  
  
  animation: zoom-out 6s linear infinite;
  
  height:500px
}

@keyframes zoom-out {
  100% {
    width: 100%;
  }
}







.banner1 {
  animation: slide1 12s linear infinite;
}

.banner2 {
  animation: slide2 12s linear infinite;
}

.banner3 {
  animation: slide3 12s linear infinite;
}

.banner4 {
  animation: slide4 12s linear infinite;
}

@keyframes slide1 {
  0% {
    visibility: visible;
  }
  25% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  75% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}

@keyframes slide2 {
  0% {
    visibility: hidden;
  }
  25% {
    visibility: hidden;
  }
  50% {
    visibility: visible;
  }
  75% {
    visibility: hidden;
  }
  100% {
    visibility: hidden;
  }
}

@keyframes slide3 {
  0% {
    visibility: hidden;
  }
  25% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  75% {
    visibility: visible;
  }
  100% {
    visibility: hidden;
  }
}

@keyframes slide4 {
  0% {
    visibility: hidden;
  }
  25% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  75% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}

@keyframes textup {
  10% {
    transform: translateY(0px);
  }
  100% {
    transform: translateY(0px);
  }
}

.text-box1 {
  animation-delay: 0s;
}

.text-box2 {
  animation-delay: 3s;
}

.text-box3 {
  animation-delay: 6s;
}

.text-box4 {
  animation-delay: 9s;
}

/*css card*/

.card {
  max-width : 100%;
  height: 400px;
  display: block;
    position: relative;
    
    align-items: center;
    justify-content: center;
    width: 1300px;
    
    background: #000;
    
    overflow: hidden;
    cursor: pointer;
    transition: all 0.5s ease;
    backface-visibility: hidden;
}
.card:hover {
    transform: scale(0.9);
}
.card:hover .ul {
    transform: translate(0);
    opacity: 1;
}

.card img {
    position: absolute;
    width: 100%;
    z-index: 10;
    transition: all 0.5s ease;
}
.card .con-text {
  line-height: 1.3 em;
  max-width : 100%;
    position: absolute;
    z-index: 30;
    bottom: 0;
    color: #fff;
    
    
    background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.9) 100%);
}


.ul {
    position: absolute;
.card:hover {
    transform: scale(0.9);
}
    right: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    z-index: 40;
    border-radius: 14px;
    padding-left: 0;
    padding-bottom: 8px;
    padding-top: 8px;
    top: 0;
    opacity: 0;
    transform: translate(100%);
    transition: all 0.5s ease;
}
.ul li {
    background: #fff;
    list-style: none;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0.7;
    transition: all 0.5s ease;
    backface-visibility: hidden;
}
.ul li:last-child {
    border-radius: 0 0 12px 12px;
}
.ul li:first-child {
    border-radius: 12px 12px 0 0;
}
.ul li:hover {
    opacity: 1;
    transform: translate(-7px, -4px);
    border-radius: 6px;
}
.ul li img {
    position: absolute;
    width: 100%;
}


  *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}

h6 {
  font-family:  ;
  font-size: 2em;
  text-align: center;
  color:hotpink;
  
  text-shadow: 0px 0px 15px #fff;
  -webkit-text-shadow: 0px 0px 15px #fff;
  -moz-text-shadow: 0px 0px 15px #fff;
  -ms-text-shadow: 0px 0px 15px #fff;
  -o-text-shadow: 0px 0px 15px #fff;
}

    </style>
    
     <script src=\"{{ asset('popper/popper.min.js')}}\"></script> 
      <script src=\"{{ asset('jquery/jquery.slim.min.js')}}\"></script>
      <script>    \$(document).ready(function () {
    \$('.accordion-toggle').on('click', function(event){
    event.preventDefault();
    // create accordion variables
    var accordion = \$(this);
    var accordionContent = accordion.next('.accordion-content');
    var accordionToggleIcon = \$(this).children('.toggle-icon');
    // toggle accordion link open class
    accordion.toggleClass(\"open\");
    // toggle accordion content
    accordionContent.slideToggle(250);
    // change plus/minus icon
    if (accordion.hasClass(\"open\")) {
    accordionToggleIcon.html(\"<i class='fa fa-minus-circle'></i>\");
    } else {
    accordionToggleIcon.html(\"<i class='fa fa-plus-circle'></i>\");
    }
    });
    });</script>
{% endblock %}
", "home/index.html.twig", "/opt/lampp/htdocs/sitemariage2/templates/home/index.html.twig");
    }
}
