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
        echo "
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, \">
        <img class=\"card\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/téléchargement.jpeg"), "html", null, true);
        echo "\" alt=\"\" style=\"margin-top:100px;\">
        
        
        <br>
    <div>
    
    <h6>Les meilleurs centres de beauté pour les mariées</h6>
    <p style=\"text-align: center;\">La saison des mariages et le choix du salon de coiffure est le plus difficile pour les nouvelles mariées.
    <br> Alors si vous n’avez pas encore choisi votre <span style=\" color:hotpink;;
             text-decoration: none;
             font-size: 25px;\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("centre_de_beaute");
        echo "\"> centre de beauté </a></span> pour le grand jour .</p>
    </div>
        <div class=\"slide\" >
       
            <!-- First slide -->
            <div class=\"banner1\">
              <img class=\"image\"
                src=\"https://www.marhba.com/images/mariage/mariagejean.jpg\"
              />
             
            </div>
        
            <!-- Second slide -->
            <div class=\"banner2\">
              <img class=\"image\"
                src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/mariageviolette.jpg"), "html", null, true);
        echo "\"
              />
              
            </div>
        
            <!-- Third slide -->
            <div class=\"banner3\">
              <img class=\"image\"
                src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/mariagelobna.jpg"), "html", null, true);
        echo "\"
              />
             
            </div>
        
            <!-- Fourth slide -->
            <div class=\"banner4\">
              <img class=\"image\"
                src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/mariageferyelstudio.jpg"), "html", null, true);
        echo "\"
              />
              
            </div>
          
        </div>   
</div>


<div style=\"margin-top:700px;\">
    
    <h6>Les troupes musicales pour votre mariage</h6>
    <p style=\"text-align: center;\">
    On vous facilite la tâche et on partage avec vous<span style=\" color:hotpink;;
             text-decoration: none;
             font-size: 25px;\"><a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("musique_de_mariage");
        echo "\" > des troupes musicales </a></span>bien réputées en Tunisie
     <br> pour une ambiance de mariage exceptionnelle le Jour J.
</p>
    </div>

 <!-- 3D Slideshow Section --> 
<div id=\"slideshow\" style=\"margin-top:30px;\">
\t\t\t<div class=\"entire-content\">
\t\t\t<a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("musique_de_mariage");
        echo "\">\t<div class=\"content-carrousel\">
\t\t\t\t\t<figure class=\"shadow\"><img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgmusiques/9b3088f1fd3d8e42f4b6874d7c31dd1f529765cb.jpeg"), "html", null, true);
        echo "\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgmusiques/22b2556fd677d8baee846be04be0182946665793.jpeg"), "html", null, true);
        echo "\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgmusiques/684acc6861ae42af9df31c32b5b6d49c87ad0d2b.jpeg"), "html", null, true);
        echo "\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgmusiques/171344a9fb14d6e40e20f0843748291b51a0d16c.jpeg"), "html", null, true);
        echo "\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgmusiques/ad9fcbd1578c037a34ac2e25800024ef291999d6.jpeg"), "html", null, true);
        echo "\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgmusiques/bd6f0bf08df7ed11d624cf457d54c22e5b0a558c.jpeg"), "html", null, true);
        echo "\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgmusiques/bd6f0bf08df7ed11d624cf457d54c22e5b0a558c.jpeg"), "html", null, true);
        echo "\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgmusiques/bd6f0bf08df7ed11d624cf457d54c22e5b0a558c.jpeg"), "html", null, true);
        echo "\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgmusiques/bd6f0bf08df7ed11d624cf457d54c22e5b0a558c.jpeg"), "html", null, true);
        echo "\"/></figure>
\t\t</div></a>
\t</div>
</div>
<div>
    <div style=\" margin: 100px;
 text-align: center;\">
 <a class=\"btn-blink1\" href=\"\">les Nouveautés!</a>
</div>
    <h6> Forfait de Mariage</h6>
    <p style=\"text-align: center;\">
    Si vous voulez faire de votre mariage inoubliable en ayant un look idéal,
    <br> notre centre est là pour répondre à tous vos besoins.
     
</p>
    </div>
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link href=\"https://fonts.googleapis.com/css2?family=Almendra+SC&display=swap\" rel=\"stylesheet\">
 
  
  
  <div class=\"wrapi\">
  ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicite"]) || array_key_exists("publicite", $context) ? $context["publicite"] : (function () { throw new RuntimeError('Variable "publicite" does not exist.', 104, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 105
            echo "  <a href=\"#\" class=\"ng\" title=\"\"><div> <img src=\"/imgpublicite/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 105), "html", null, true);
            echo "\"></div><span><h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 105), "html", null, true);
            echo "</h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 105), "html", null, true);
            echo " dt</span></a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "  </div>



  <div class=\"btn-blink1\" style=\" margin-top: 50px;
  text-align: center;margin-left: 400px;\">au lieu de <span style=\"font: size 0.15em;
    color: #e21941;
    text-decoration: line-through;text-align: center;\">5300 dt</span> 5000 dt </div>

  
    


<div class=\"wrapi\" style=\"
  width: 1200px;
  \">
  ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicite1"]) || array_key_exists("publicite1", $context) ? $context["publicite1"] : (function () { throw new RuntimeError('Variable "publicite1" does not exist.', 123, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 124
            echo "  <a href=\"#\" class=\"ng\" title=\"\"><div> <img src=\"/imgpublicite1/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 124), "html", null, true);
            echo "\"></div><span><h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 124), "html", null, true);
            echo "</h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 124), "html", null, true);
            echo " dt</span></a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "  </div>
       
<div class=\"btn-blink1\" style=\"
text-align: center;margin-left: 400px;\">au lieu de <span style=\"font: size 0.15em;
  color: #e21941;text-decoration: line-through;
  text-align: center;\">4200 dt</span> 3900 dt </div> 
  
   <div class=\"wrapi\" style=\"
  width: 1200px;
  \">
  ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicite3"]) || array_key_exists("publicite3", $context) ? $context["publicite3"] : (function () { throw new RuntimeError('Variable "publicite3" does not exist.', 136, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 137
            echo "  <a href=\"#\" class=\"ng\" title=\"\"><div> <img src=\"/imgpublicite3/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 137), "html", null, true);
            echo "\"></div><span><h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 137), "html", null, true);
            echo "</h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 137), "html", null, true);
            echo " dt</span></a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "  </div>
       
<div class=\"btn-blink1\" style=\" 
text-align: center;margin-left: 400px;\">au lieu de <span style=\"font: size 0.15em;
  color: #e21941;text-decoration: line-through;
  text-align: center;\">3900 dt</span> 3500 dt </div> 
  
                   
 

            

<style>

@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);




.wrapi {
  
}

.ng {
  position: relative;
  float: left;
  width: 350px;
  height: 210px;
  overflow: visible;
  margin: 20px;
  display: block;
  background-color: #000;
  text-decoration: none;
}

.ng div {
  position: relative;
  z-index: 1;
  width: 358px;
  height: 218px;
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
  width: 600px;
  height: 400px;
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
  width: 366px;
  height: 226px;
  
  -webkit-box-shadow: 0 0 3px 4px rgba(0,0,0,0.2);
  box-shadow: 0 0 3px 4px rgba(0,0,0,0.2);
  
  -webkit-transform: translate(-8px,-8px);
  -moz-transform:    translate(-8px,-8px);
  -ms-transform:     translate(-8px,-8px);
  -o-transform:      translate(-8px,-8px);
  transform:         translate(-8px,-8px);
}

.ng:active div {
  width: 358px;
  height: 218px;
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
.ng:hover span h3 {
  
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





/* 3D Slideshow */ 
#slideshow {
\tmargin: 0 auto;
\tpadding-top: 50px;
\theight: 400px;
\twidth: 100%;
\t
\tbox-sizing: border-box;
}

.slideshow-title {
\tfont-family: 'Allerta Stencil';
\tfont-size: 62px;
\tcolor: #fff;
\tmargin: 0 auto;
\ttext-align: center;
\tmargin-top: 25%;
\tletter-spacing: 3px;
\tfont-weight: 300;
}

.sub-heading {
\tpadding-top: 50px;
\tfont-size: 18px;
} .sub-heading-two {
\tfont-size: 15px;
} .sub-heading-three {
\tfont-size: 13px;
} .sub-heading-four {
\tfont-size: 11px;
} .sub-heading-five {
\tfont-size: 9px;
} .sub-heading-six {
\tfont-size: 7px;
} .sub-heading-seven {
\tfont-size: 5px;
} .sub-heading-eight {
\tfont-size: 3px;
} .sub-heading-nine {
\tfont-size: 1px;
}

.entire-content {
\tmargin: auto;
\twidth: 190px;
\tperspective: 1000px;
\tposition: relative;
\tpadding-top: 80px;
}

.content-carrousel {
\twidth: 100%;
\tposition: absolute;
\tfloat: right;
\tanimation: rotar 15s infinite linear;
\ttransform-style: preserve-3d;
}

.content-carrousel:hover {
\tanimation-play-state: paused;
\tcursor: pointer;
}

.content-carrousel figure {
\twidth: 100%;
\theight: 120px;
\tborder: 1px solid #3b444b;
\toverflow: hidden;
\tposition: absolute;
}

.content-carrousel figure:nth-child(1) {
\ttransform: rotateY(0deg) translateZ(300px); 
} .content-carrousel figure:nth-child(2) {
\ttransform: rotateY(40deg) translateZ(300px); 
} .content-carrousel figure:nth-child(3) {
\ttransform: rotateY(80deg) translateZ(300px); 
} .content-carrousel figure:nth-child(4) {
\ttransform: rotateY(120deg) translateZ(300px); 
} .content-carrousel figure:nth-child(5) {
\ttransform: rotateY(160deg) translateZ(300px); 
} .content-carrousel figure:nth-child(6) {
\ttransform: rotateY(200deg) translateZ(300px); 
} .content-carrousel figure:nth-child(7) {
\ttransform: rotateY(240deg) translateZ(300px); 
} .content-carrousel figure:nth-child(8) {
\ttransform: rotateY(280deg) translateZ(300px); 
} .content-carrousel figure:nth-child(9) {
\ttransform: rotateY(320deg) translateZ(300px); 
} .content-carrousel figure:nth-child(10) {
\ttransform: rotateY(360deg) translateZ(300px); 
} 

.shadow {
    position: absolute;
    box-shadow: 0px 0px 20px 0px #000;
    border-radius: 1px;
}

.content-carrousel img {
\timage-rendering: auto;
\ttransition: all 300ms;
\twidth: 100%;
\theight: 100%;
}

.content-carrousel img:hover {
\ttransform: scale(1.2);
\ttransition: all 300ms;
}

@keyframes rotar {
\tfrom {
\t\ttransform: rotateY(0deg);
\t} to {
\t\ttransform: rotateY(360deg);
\t}
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
  border-radius:80px;
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
    border-radius: 30px;
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
        // line 772
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("popper/popper.min.js"), "html", null, true);
        echo "\"></script> 
      <script src=\"";
        // line 773
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery/jquery.slim.min.js"), "html", null, true);
        echo "\"></script>
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
        return array (  955 => 773,  951 => 772,  316 => 139,  303 => 137,  299 => 136,  287 => 126,  274 => 124,  270 => 123,  252 => 107,  239 => 105,  235 => 104,  210 => 82,  206 => 81,  202 => 80,  198 => 79,  194 => 78,  190 => 77,  186 => 76,  182 => 75,  178 => 74,  174 => 73,  163 => 65,  145 => 50,  134 => 42,  123 => 34,  105 => 19,  92 => 9,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}
         

{% block body %}

<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, \">
        <img class=\"card\" src=\"{{asset('imgcomment/téléchargement.jpeg')}}\" alt=\"\" style=\"margin-top:100px;\">
        
        
        <br>
    <div>
    
    <h6>Les meilleurs centres de beauté pour les mariées</h6>
    <p style=\"text-align: center;\">La saison des mariages et le choix du salon de coiffure est le plus difficile pour les nouvelles mariées.
    <br> Alors si vous n’avez pas encore choisi votre <span style=\" color:hotpink;;
             text-decoration: none;
             font-size: 25px;\"><a href=\"{{path('centre_de_beaute')}}\"> centre de beauté </a></span> pour le grand jour .</p>
    </div>
        <div class=\"slide\" >
       
            <!-- First slide -->
            <div class=\"banner1\">
              <img class=\"image\"
                src=\"https://www.marhba.com/images/mariage/mariagejean.jpg\"
              />
             
            </div>
        
            <!-- Second slide -->
            <div class=\"banner2\">
              <img class=\"image\"
                src=\"{{asset('imgcomment/mariageviolette.jpg')}}\"
              />
              
            </div>
        
            <!-- Third slide -->
            <div class=\"banner3\">
              <img class=\"image\"
                src=\"{{asset('imgcomment/mariagelobna.jpg')}}\"
              />
             
            </div>
        
            <!-- Fourth slide -->
            <div class=\"banner4\">
              <img class=\"image\"
                src=\"{{asset('imgcomment/mariageferyelstudio.jpg')}}\"
              />
              
            </div>
          
        </div>   
</div>


<div style=\"margin-top:700px;\">
    
    <h6>Les troupes musicales pour votre mariage</h6>
    <p style=\"text-align: center;\">
    On vous facilite la tâche et on partage avec vous<span style=\" color:hotpink;;
             text-decoration: none;
             font-size: 25px;\"><a href=\"{{path('musique_de_mariage')}}\" > des troupes musicales </a></span>bien réputées en Tunisie
     <br> pour une ambiance de mariage exceptionnelle le Jour J.
</p>
    </div>

 <!-- 3D Slideshow Section --> 
<div id=\"slideshow\" style=\"margin-top:30px;\">
\t\t\t<div class=\"entire-content\">
\t\t\t<a href=\"{{path('musique_de_mariage')}}\">\t<div class=\"content-carrousel\">
\t\t\t\t\t<figure class=\"shadow\"><img src=\"{{asset('imgmusiques/9b3088f1fd3d8e42f4b6874d7c31dd1f529765cb.jpeg')}}\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"{{asset('imgmusiques/22b2556fd677d8baee846be04be0182946665793.jpeg')}}\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"{{asset('imgmusiques/684acc6861ae42af9df31c32b5b6d49c87ad0d2b.jpeg')}}\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"{{asset('imgmusiques/171344a9fb14d6e40e20f0843748291b51a0d16c.jpeg')}}\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"{{asset('imgmusiques/ad9fcbd1578c037a34ac2e25800024ef291999d6.jpeg')}}\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"{{asset('imgmusiques/bd6f0bf08df7ed11d624cf457d54c22e5b0a558c.jpeg')}}\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"{{asset('imgmusiques/bd6f0bf08df7ed11d624cf457d54c22e5b0a558c.jpeg')}}\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"{{asset('imgmusiques/bd6f0bf08df7ed11d624cf457d54c22e5b0a558c.jpeg')}}\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"{{asset('imgmusiques/bd6f0bf08df7ed11d624cf457d54c22e5b0a558c.jpeg')}}\"/></figure>
\t\t</div></a>
\t</div>
</div>
<div>
    <div style=\" margin: 100px;
 text-align: center;\">
 <a class=\"btn-blink1\" href=\"\">les Nouveautés!</a>
</div>
    <h6> Forfait de Mariage</h6>
    <p style=\"text-align: center;\">
    Si vous voulez faire de votre mariage inoubliable en ayant un look idéal,
    <br> notre centre est là pour répondre à tous vos besoins.
     
</p>
    </div>
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link href=\"https://fonts.googleapis.com/css2?family=Almendra+SC&display=swap\" rel=\"stylesheet\">
 
  
  
  <div class=\"wrapi\">
  {% for item in publicite %}
  <a href=\"#\" class=\"ng\" title=\"\"><div> <img src=\"/imgpublicite/{{ item.image }}\"></div><span><h3>{{ item.nom}}</h3>{{ item.prix }} dt</span></a>
  {% endfor %}
  </div>



  <div class=\"btn-blink1\" style=\" margin-top: 50px;
  text-align: center;margin-left: 400px;\">au lieu de <span style=\"font: size 0.15em;
    color: #e21941;
    text-decoration: line-through;text-align: center;\">5300 dt</span> 5000 dt </div>

  
    


<div class=\"wrapi\" style=\"
  width: 1200px;
  \">
  {% for item in publicite1 %}
  <a href=\"#\" class=\"ng\" title=\"\"><div> <img src=\"/imgpublicite1/{{ item.image }}\"></div><span><h3>{{ item.nom}}</h3>{{ item.prix }} dt</span></a>
  {% endfor %}
  </div>
       
<div class=\"btn-blink1\" style=\"
text-align: center;margin-left: 400px;\">au lieu de <span style=\"font: size 0.15em;
  color: #e21941;text-decoration: line-through;
  text-align: center;\">4200 dt</span> 3900 dt </div> 
  
   <div class=\"wrapi\" style=\"
  width: 1200px;
  \">
  {% for item in publicite3 %}
  <a href=\"#\" class=\"ng\" title=\"\"><div> <img src=\"/imgpublicite3/{{ item.image }}\"></div><span><h3>{{ item.nom}}</h3>{{ item.prix }} dt</span></a>
  {% endfor %}
  </div>
       
<div class=\"btn-blink1\" style=\" 
text-align: center;margin-left: 400px;\">au lieu de <span style=\"font: size 0.15em;
  color: #e21941;text-decoration: line-through;
  text-align: center;\">3900 dt</span> 3500 dt </div> 
  
                   
 

            

<style>

@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);




.wrapi {
  
}

.ng {
  position: relative;
  float: left;
  width: 350px;
  height: 210px;
  overflow: visible;
  margin: 20px;
  display: block;
  background-color: #000;
  text-decoration: none;
}

.ng div {
  position: relative;
  z-index: 1;
  width: 358px;
  height: 218px;
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
  width: 600px;
  height: 400px;
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
  width: 366px;
  height: 226px;
  
  -webkit-box-shadow: 0 0 3px 4px rgba(0,0,0,0.2);
  box-shadow: 0 0 3px 4px rgba(0,0,0,0.2);
  
  -webkit-transform: translate(-8px,-8px);
  -moz-transform:    translate(-8px,-8px);
  -ms-transform:     translate(-8px,-8px);
  -o-transform:      translate(-8px,-8px);
  transform:         translate(-8px,-8px);
}

.ng:active div {
  width: 358px;
  height: 218px;
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
.ng:hover span h3 {
  
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





/* 3D Slideshow */ 
#slideshow {
\tmargin: 0 auto;
\tpadding-top: 50px;
\theight: 400px;
\twidth: 100%;
\t
\tbox-sizing: border-box;
}

.slideshow-title {
\tfont-family: 'Allerta Stencil';
\tfont-size: 62px;
\tcolor: #fff;
\tmargin: 0 auto;
\ttext-align: center;
\tmargin-top: 25%;
\tletter-spacing: 3px;
\tfont-weight: 300;
}

.sub-heading {
\tpadding-top: 50px;
\tfont-size: 18px;
} .sub-heading-two {
\tfont-size: 15px;
} .sub-heading-three {
\tfont-size: 13px;
} .sub-heading-four {
\tfont-size: 11px;
} .sub-heading-five {
\tfont-size: 9px;
} .sub-heading-six {
\tfont-size: 7px;
} .sub-heading-seven {
\tfont-size: 5px;
} .sub-heading-eight {
\tfont-size: 3px;
} .sub-heading-nine {
\tfont-size: 1px;
}

.entire-content {
\tmargin: auto;
\twidth: 190px;
\tperspective: 1000px;
\tposition: relative;
\tpadding-top: 80px;
}

.content-carrousel {
\twidth: 100%;
\tposition: absolute;
\tfloat: right;
\tanimation: rotar 15s infinite linear;
\ttransform-style: preserve-3d;
}

.content-carrousel:hover {
\tanimation-play-state: paused;
\tcursor: pointer;
}

.content-carrousel figure {
\twidth: 100%;
\theight: 120px;
\tborder: 1px solid #3b444b;
\toverflow: hidden;
\tposition: absolute;
}

.content-carrousel figure:nth-child(1) {
\ttransform: rotateY(0deg) translateZ(300px); 
} .content-carrousel figure:nth-child(2) {
\ttransform: rotateY(40deg) translateZ(300px); 
} .content-carrousel figure:nth-child(3) {
\ttransform: rotateY(80deg) translateZ(300px); 
} .content-carrousel figure:nth-child(4) {
\ttransform: rotateY(120deg) translateZ(300px); 
} .content-carrousel figure:nth-child(5) {
\ttransform: rotateY(160deg) translateZ(300px); 
} .content-carrousel figure:nth-child(6) {
\ttransform: rotateY(200deg) translateZ(300px); 
} .content-carrousel figure:nth-child(7) {
\ttransform: rotateY(240deg) translateZ(300px); 
} .content-carrousel figure:nth-child(8) {
\ttransform: rotateY(280deg) translateZ(300px); 
} .content-carrousel figure:nth-child(9) {
\ttransform: rotateY(320deg) translateZ(300px); 
} .content-carrousel figure:nth-child(10) {
\ttransform: rotateY(360deg) translateZ(300px); 
} 

.shadow {
    position: absolute;
    box-shadow: 0px 0px 20px 0px #000;
    border-radius: 1px;
}

.content-carrousel img {
\timage-rendering: auto;
\ttransition: all 300ms;
\twidth: 100%;
\theight: 100%;
}

.content-carrousel img:hover {
\ttransform: scale(1.2);
\ttransition: all 300ms;
}

@keyframes rotar {
\tfrom {
\t\ttransform: rotateY(0deg);
\t} to {
\t\ttransform: rotateY(360deg);
\t}
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
  border-radius:80px;
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
    border-radius: 30px;
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
{% endblock %}
", "home/index.html.twig", "/opt/lampp/htdocs/sitemariage/templates/home/index.html.twig");
    }
}
