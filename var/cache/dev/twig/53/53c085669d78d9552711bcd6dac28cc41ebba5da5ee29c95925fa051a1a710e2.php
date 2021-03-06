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

/* photographe/index.html.twig */
class __TwigTemplate_cc306ab129c8013475df5cc4dae418e2372362dc8d6d03beca523918b266e738 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photographe/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photographe/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "photographe/index.html.twig", 1);
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"card-wrap \"  style=\"margin-top:100px;\">
";
        // line 7
        $this->loadTemplate("photographe/_filtre.html.twig", "photographe/index.html.twig", 7)->display(twig_to_array(["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })())]));
        // line 8
        echo "</div>

<div class=\"photographe\" style=\"margin-top:50px\">
<h3>Photographe Mariage</h3>
<p> Vous engagez un certain nombre de prestataires dans le but d???assurer le bon d??roulement de votre mariage et de le rendre unique.
<br> Le photographe, lui, participera autrement ?? vos festivit??s, puiqu???il sera charg?? de capturer l???ambiance et l?????motion de votre ??v??nement pour que vous puissiez le revivre post??rieurement. D???o?? l???importance de bien choisir l???auteur de vos photos de mariage,
<br> souvenirs ??ternels de votre belle journ??e.</p>
</div> 
<div class=\"cards-list\">
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photographe"]) || array_key_exists("photographe", $context) ? $context["photographe"] : (function () { throw new RuntimeError('Variable "photographe" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo " 
<div class=\"card 1\">
  <div class=\"card_image\"> 
  <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\"><img src=\"/imgphotographes/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 20), "html", null, true);
            echo "\" /></a> </div>
  <div class=\"card_title title-white\">
    <p style=\"color: palevioletred;\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
  </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</div>
    <div style=\"text-align: center;\"><img src=\"https://cdn.pixabay.com/photo/2020/03/06/08/23/divider-4906386_960_720.png\" alt=\"\" style=\"height: 100px;width: 500px;text-align: center;\"></div>

<div style=\" margin-top: 30px;
 text-align: center;\">
 <button class=\"btn-blink1\">Services</button>
</div> 



  
    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"box\">
                <div class=\"our-services settings\">
                    <div class=\"icon\"> <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/images.jpeg"), "html", null, true);
        echo "\" style=\"width:100px; height:100px; border-radius:50%;\"> </div>
                    <h4>Mariage</h4>
                     <p>Je n'ai pas choisi le monde de la photographie par hasard... 
   l'univers du Mariage
<br> encore moins. Regarder les couples se lover du regard, 
    <br>sentir l'intense douceur qui forme leur intimit?? et la sensualit?? 
    <br> de leurs gestes,
     vivre leur complicit?? jusque dans leurs rires...</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"box\">
                <div class=\"our-services speedup\">
                    <div class=\"icon\"> <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/t??l??chargement3.png"), "html", null, true);
        echo "\" style=\"width:100px; height:100px; border-radius:50%;\"> </div>
                    <h4>Shooting</h4>
                    <p>V.O.A vous propose une large gamme de portraits d???exception. 
    <br>Shooting individuels, Shooting de famille ou de couple. 
    <br>V.O.A Reconnue pour son Shooting Prestige 
    <br> et offre ??galement des prestations de Shooting Professionnels,
    <br>ou bien  d???Architecture
    </p>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"box\">
                <div class=\"our-services privacy\">
                    <div class=\"icon\"> <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/images (1).jpeg"), "html", null, true);
        echo "\" style=\"width:100px; height:100px; border-radius:50%;\"> </div>
                    <h4>??v??nements</h4>
                   <p>V.O.A r??alise les reportages de vos ??v??nements sur Rabat et 
    <br>partout au Maroc et vous livre vos photos dans les plus brefs d??lais !
    <br>leur intimit?? et la sensualit?? de leurs gestes,
    <br> vivre leur complicit?? jusque dans leurs rires...
    <br> de Photos Publicitaires </p>
                </div>
            </div>
        </div>
    </div>
 
    <div style=\"text-align: center;\"><img src=\"https://cdn.pixabay.com/photo/2020/03/06/08/23/divider-4906386_960_720.png\" alt=\"\" style=\"height: 100px;width: 500px;text-align: center;\"></div>

<section  style=\"margin-bottom:80px;\">
  
  
  <h3>Trouver votre photographe de mariage id??al</h3>
<p>Vous engagez un certain nombre de prestataires dans le but d???assurer le bon d??roulement de votre mariage 
  <br> et de le rendre unique. Le photographe, lui, participera autrement ?? vos festivit??s, puiqu???il sera charg?? 
  <br> de capturer l???ambiance et l?????motion de votre ??v??nement pour que vous puissiez le revivre post??rieurement.
  <br> D???o?? l???importance de bien choisir l???auteur de vos photos de mariage, souvenirs ??ternels de votre belle journ??e.

  Le premier point primordial pour choisir votre professionnel, c???est le feeling ?? partir du quel vous construirez une relation de confiance.
  <br> Veillez donc ?? le rencontrer ?? une ou plusieurs reprises avant le jour J et prenez le temps de d??couvrir ses m??thodes de travail et sa personnalit??.
  
  Disponibilit??, bonne humeur, professionnalisme, discr??tion, voici en somme les principales qualit??s que devra poss??der votre professionnel
   <br> de la photo de mariage pour un maximum de complicit??.
  
 </p>
  

  
  <div class=\"scrolling-wrapper\">
    <div class=\"card1\"><img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/1e77bd7a5f2789604b34aaf810a1c76e.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
   
    <div class=\"card1\" style=\"margin-left:10px;\"><img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/727c6a3594876837fa0981693c127494.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
   
    <div class=\"card1\" style=\"margin-left:10px;\"><img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/6867e12a4a55f7e392bdc65b1fe91058.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
    <div class=\"card1\" style=\"margin-left:10px;\"><img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/ad310d818731633d0d6c97b16919a4e6.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
    <div class=\"card1\"style=\"margin-left:10px;\"><img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/ea805768d77fca1876c7d111a3303db4.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
    <div class=\"card1\"style=\"margin-left:10px;\"><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/8649b1607269c9a5b69a4fb986308605.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>

    
  </div>
  
  
</section>




<style>
body{
 background-image:url(\"http://alijafarian.com/demos/responsive-jquery-accordions/images/texture_old_map.png\");
}
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}

  .card1 {
    display: inline-block;
    
  margin:  auto;
  width: 200px;
  height: 300px;
  border-radius: 40px;

  cursor: pointer;
  transition: 0.4s;
}
.card1:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
}
  
.cards-list {
  z-index: 0;
  width: 100%;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}


 


.box {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px
}
.icon{
     border-radius:50%;
}
.our-services {
    margin-top: 75px;
    padding-bottom: 30px;
    padding: 0 60px;
    min-height: 198px;
    text-align: center;
    border-radius: 10px;
    background-color: black;
    transition: all .4s ease-in-out;
    box-shadow: 0 0 25px 0 rgba(20, 27, 202, .17)
}
.our-services .icon {
    margin-bottom: -21px;
    transform: translateY(-50%);
    text-align: center
   
}
.our-services:hover h4,
.our-services:hover p {
    color: #fff
}
.speedup:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, hotpink 0%, hotpink 100%)
}
.settings:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, hotpink 0%, hotpink 100%)
}
.privacy:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, hotpink 0%, hotpink 100%)
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



h3{
   color:hotpink;
   text-align: center;
 } 
 p{
    text-align: center;  
}
.cards-list {
  z-index: 0;
  width: 100%;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.card {
  margin: 30px auto;
  width: 300px;
  height: 300px;
  border-radius: 40px;
box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  cursor: pointer;
  transition: 0.4s;
}

.card .card_image {
  width: inherit;
  height: inherit;
  border-radius: 40px;
}

.card .card_image img {
  width: inherit;
  height: inherit;
  border-radius: 40px;
  object-fit: cover;
}

.card .card_title {
  text-align: center;
  border-radius: 0px 0px 40px 40px;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 30px;
  margin-top: -80px;
  height: 30px;
}

.card:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
}

.title-white {
  color: white;
}

.title-black {
  color: black;
}

@media all and (max-width: 500px) {
  .card-list {
    /* On small screens, we are no longer using row direction but column */
    flex-direction: column;
  }
}



</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "photographe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 110,  234 => 109,  230 => 108,  226 => 107,  221 => 105,  216 => 103,  179 => 69,  162 => 55,  145 => 41,  128 => 26,  118 => 22,  111 => 20,  103 => 17,  92 => 8,  90 => 7,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}
<div class=\"card-wrap \"  style=\"margin-top:100px;\">
{% include 'photographe/_filtre.html.twig' with{form:form} only %}
</div>

<div class=\"photographe\" style=\"margin-top:50px\">
<h3>Photographe Mariage</h3>
<p> Vous engagez un certain nombre de prestataires dans le but d???assurer le bon d??roulement de votre mariage et de le rendre unique.
<br> Le photographe, lui, participera autrement ?? vos festivit??s, puiqu???il sera charg?? de capturer l???ambiance et l?????motion de votre ??v??nement pour que vous puissiez le revivre post??rieurement. D???o?? l???importance de bien choisir l???auteur de vos photos de mariage,
<br> souvenirs ??ternels de votre belle journ??e.</p>
</div> 
<div class=\"cards-list\">
  {% for item in photographe %} 
<div class=\"card 1\">
  <div class=\"card_image\"> 
  <a href=\"{{path('home_detail',{'id':item.id})}}\"><img src=\"/imgphotographes/{{ item.image }}\" /></a> </div>
  <div class=\"card_title title-white\">
    <p style=\"color: palevioletred;\">{{ item.nom}}</p>
  </div>
</div>
{% endfor %}
</div>
    <div style=\"text-align: center;\"><img src=\"https://cdn.pixabay.com/photo/2020/03/06/08/23/divider-4906386_960_720.png\" alt=\"\" style=\"height: 100px;width: 500px;text-align: center;\"></div>

<div style=\" margin-top: 30px;
 text-align: center;\">
 <button class=\"btn-blink1\">Services</button>
</div> 



  
    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"box\">
                <div class=\"our-services settings\">
                    <div class=\"icon\"> <img src=\"{{asset('imgcomment/images.jpeg')}}\" style=\"width:100px; height:100px; border-radius:50%;\"> </div>
                    <h4>Mariage</h4>
                     <p>Je n'ai pas choisi le monde de la photographie par hasard... 
   l'univers du Mariage
<br> encore moins. Regarder les couples se lover du regard, 
    <br>sentir l'intense douceur qui forme leur intimit?? et la sensualit?? 
    <br> de leurs gestes,
     vivre leur complicit?? jusque dans leurs rires...</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"box\">
                <div class=\"our-services speedup\">
                    <div class=\"icon\"> <img src=\"{{asset('imgcomment/t??l??chargement3.png')}}\" style=\"width:100px; height:100px; border-radius:50%;\"> </div>
                    <h4>Shooting</h4>
                    <p>V.O.A vous propose une large gamme de portraits d???exception. 
    <br>Shooting individuels, Shooting de famille ou de couple. 
    <br>V.O.A Reconnue pour son Shooting Prestige 
    <br> et offre ??galement des prestations de Shooting Professionnels,
    <br>ou bien  d???Architecture
    </p>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"box\">
                <div class=\"our-services privacy\">
                    <div class=\"icon\"> <img src=\"{{asset('imgcomment/images (1).jpeg')}}\" style=\"width:100px; height:100px; border-radius:50%;\"> </div>
                    <h4>??v??nements</h4>
                   <p>V.O.A r??alise les reportages de vos ??v??nements sur Rabat et 
    <br>partout au Maroc et vous livre vos photos dans les plus brefs d??lais !
    <br>leur intimit?? et la sensualit?? de leurs gestes,
    <br> vivre leur complicit?? jusque dans leurs rires...
    <br> de Photos Publicitaires </p>
                </div>
            </div>
        </div>
    </div>
 
    <div style=\"text-align: center;\"><img src=\"https://cdn.pixabay.com/photo/2020/03/06/08/23/divider-4906386_960_720.png\" alt=\"\" style=\"height: 100px;width: 500px;text-align: center;\"></div>

<section  style=\"margin-bottom:80px;\">
  
  
  <h3>Trouver votre photographe de mariage id??al</h3>
<p>Vous engagez un certain nombre de prestataires dans le but d???assurer le bon d??roulement de votre mariage 
  <br> et de le rendre unique. Le photographe, lui, participera autrement ?? vos festivit??s, puiqu???il sera charg?? 
  <br> de capturer l???ambiance et l?????motion de votre ??v??nement pour que vous puissiez le revivre post??rieurement.
  <br> D???o?? l???importance de bien choisir l???auteur de vos photos de mariage, souvenirs ??ternels de votre belle journ??e.

  Le premier point primordial pour choisir votre professionnel, c???est le feeling ?? partir du quel vous construirez une relation de confiance.
  <br> Veillez donc ?? le rencontrer ?? une ou plusieurs reprises avant le jour J et prenez le temps de d??couvrir ses m??thodes de travail et sa personnalit??.
  
  Disponibilit??, bonne humeur, professionnalisme, discr??tion, voici en somme les principales qualit??s que devra poss??der votre professionnel
   <br> de la photo de mariage pour un maximum de complicit??.
  
 </p>
  

  
  <div class=\"scrolling-wrapper\">
    <div class=\"card1\"><img src=\"{{asset('imgcomment/1e77bd7a5f2789604b34aaf810a1c76e.jpg')}}\" alt=\"\"></div>
   
    <div class=\"card1\" style=\"margin-left:10px;\"><img src=\"{{asset('imgcomment/727c6a3594876837fa0981693c127494.jpg')}}\" alt=\"\"></div>
   
    <div class=\"card1\" style=\"margin-left:10px;\"><img src=\"{{asset('imgcomment/6867e12a4a55f7e392bdc65b1fe91058.jpg')}}\" alt=\"\"></div>
    <div class=\"card1\" style=\"margin-left:10px;\"><img src=\"{{asset('imgcomment/ad310d818731633d0d6c97b16919a4e6.jpg')}}\" alt=\"\"></div>
    <div class=\"card1\"style=\"margin-left:10px;\"><img src=\"{{asset('imgcomment/ea805768d77fca1876c7d111a3303db4.jpg')}}\" alt=\"\"></div>
    <div class=\"card1\"style=\"margin-left:10px;\"><img src=\"{{asset('imgcomment/8649b1607269c9a5b69a4fb986308605.jpg')}}\" alt=\"\"></div>

    
  </div>
  
  
</section>




<style>
body{
 background-image:url(\"http://alijafarian.com/demos/responsive-jquery-accordions/images/texture_old_map.png\");
}
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}

  .card1 {
    display: inline-block;
    
  margin:  auto;
  width: 200px;
  height: 300px;
  border-radius: 40px;

  cursor: pointer;
  transition: 0.4s;
}
.card1:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
}
  
.cards-list {
  z-index: 0;
  width: 100%;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}


 


.box {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px
}
.icon{
     border-radius:50%;
}
.our-services {
    margin-top: 75px;
    padding-bottom: 30px;
    padding: 0 60px;
    min-height: 198px;
    text-align: center;
    border-radius: 10px;
    background-color: black;
    transition: all .4s ease-in-out;
    box-shadow: 0 0 25px 0 rgba(20, 27, 202, .17)
}
.our-services .icon {
    margin-bottom: -21px;
    transform: translateY(-50%);
    text-align: center
   
}
.our-services:hover h4,
.our-services:hover p {
    color: #fff
}
.speedup:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, hotpink 0%, hotpink 100%)
}
.settings:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, hotpink 0%, hotpink 100%)
}
.privacy:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, hotpink 0%, hotpink 100%)
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



h3{
   color:hotpink;
   text-align: center;
 } 
 p{
    text-align: center;  
}
.cards-list {
  z-index: 0;
  width: 100%;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.card {
  margin: 30px auto;
  width: 300px;
  height: 300px;
  border-radius: 40px;
box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  cursor: pointer;
  transition: 0.4s;
}

.card .card_image {
  width: inherit;
  height: inherit;
  border-radius: 40px;
}

.card .card_image img {
  width: inherit;
  height: inherit;
  border-radius: 40px;
  object-fit: cover;
}

.card .card_title {
  text-align: center;
  border-radius: 0px 0px 40px 40px;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 30px;
  margin-top: -80px;
  height: 30px;
}

.card:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
}

.title-white {
  color: white;
}

.title-black {
  color: black;
}

@media all and (max-width: 500px) {
  .card-list {
    /* On small screens, we are no longer using row direction but column */
    flex-direction: column;
  }
}



</style>
{% endblock %}
", "photographe/index.html.twig", "/opt/lampp/htdocs/sitemariage2/templates/photographe/index.html.twig");
    }
}
