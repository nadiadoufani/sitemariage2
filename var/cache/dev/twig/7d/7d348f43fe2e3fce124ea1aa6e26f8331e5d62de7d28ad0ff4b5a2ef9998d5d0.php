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

/* coiffure/index.html.twig */
class __TwigTemplate_a9663c8ef269d2ec45c28ea258aa98b5815bc74854a86b9e077d89ed550aaf66 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coiffure/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coiffure/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "coiffure/index.html.twig", 1);
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

        echo "Hello CoiffureController!";
        
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
        echo "
 
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
     <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css
\">


<style>
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
.coiffure {
    position:relative;
    width:100%;
    height:auto;
    margin:80px auto 0;
    margin-bottom: 50px;
}
.coiffure .box {
    position:relative;
    width:calc(400px - 60px);
    height:calc(300px - 30px);
    background:#000;
    float:left;
    margin:15px;
    box-sizing:border-box;
    overflow:hidden;
    box-shadow:0 5px 10px rgba(0,0,0,.8);
}
.coiffure .box:before {
    content:'';
    position:absolute;
    top:10px;
    left:10px;
    right:10px;
    bottom:10px;
    border-top:1px solid #fff;
    border-bottom:1px solid #fff;
    box-sizing:border-box;
    transition:0.5s;
    transform: scaleX(0);
    opacity:0;
}
.coiffure .box:hover:before {
    transform:scaleX(1);
    opacity:1;
}
.coiffure .box:after {
    content:'';
    position:absolute;
    top:10px;
    left:10px;
    right:10px;
    bottom:10px;
    border-left:1px solid #fff;
    border-right:1px solid #fff;
    box-sizing:border-box;
    transition:0.5s;
    transform: scaleY(0);
    opacity:0;
}
.coiffure .box:hover:after {
    transform:scaleY(1);
    opacity:1;
}
.coiffure .box .imgBox {
    position:relative;
}
.coiffure .box .imgBox img {
    width:100%;
    transition:0.5s;
}
.coiffure .box:hover .imgBox img {
    opacity:.2;
    transform:scale(1.2);
}
.coiffure .box .content {
    position:absolute;
    width:100%;
    top:50%;
    transform:translateY(-50%);
    z-index:2;
    padding:20px;
    box-sizing:border-box;
    text-align:center;
}
.coiffure .box .content h2 {
    margin: 0 0 10px;
    padding:0;
    color:#fff;
    transition:0.5s;
    transform:translateY(-50px);
    opacity:0;
    visibility:hidden;
}
.coiffure .box .content p {
    margin:0;
    padding:0;
    color:#fff;
    transform:translateY(50px);
    opacity:0;
    visibility:hidden;
}
.coiffure .box:hover .content h2,
.coiffure .box:hover .content P {
    opacity:1;
    visibility:visible;
    transform:translateY(0px);
}
h3{
   color:hotpink;
   text-align: center;
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
*:focus {
  outline: 0;
}
section {
    
\tposition: relative;
\tpadding: 50px 0;
\twidth: 100%;
}

.circle {
\toverflow: hidden;
\tposition: relative;
}

.circle.circle-one,
.circle.circle-two {
\tborder-radius: 50%;
\tmargin: 20px;
\tshape-outside: circle();
}

.circle.circle-one {
\tfloat: left;
\theight: 400px;
\twidth: 400px;
}

.circle.circle-two {
\tfloat: right;
\theight: 300px;
\twidth: 300px;
}

.circle img {
\theight: 100%;
\tobject-fit: cover;
\tposition: absolute;
\tleft: 0;
\ttop: 0;
\twidth: 100%;
}

section h2 {
\tcolor: hotpink;
\tfont-size: 2rem;
\tmargin-bottom: 10px;
}

section p {
\tcolor: black;
}
</style>
<div>
<h3 style=\"margin-top:100px;\">Coiffure mariage</h3>
<p style=\"text-align: center;\" >
Vous vous mariez prochainement et êtes en plein dans les préparatifs du plus beau jour de votre vie… 
<br>Vous venez de trouver votre magnifique robe de mariée et avez choisi les accessoires qui la sublimeront.
<br> Il est désormais temps de vous préoccuper de votre mise en beauté. À commencer par votre coiffure de mariée !

Mais alors, comment se coiffer quand on a les cheveux longs ou bien très courts ?
<br> Quelle coupe choisir avec un visage rond, carré ou allongé ? Quand faire son premier essai dans un salon avant le mariage ? Quand se faire coiffer pour le jour J ? Comment respecter son budget beauté ? Découvrez tous nos avis,
<br> conseils et inspirations pour une coiffure de mariage réussie ! 
</p>
</div>
<div class=\"coiffure\" >
";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coiffure"]) || array_key_exists("coiffure", $context) ? $context["coiffure"] : (function () { throw new RuntimeError('Variable "coiffure" does not exist.', 220, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 221
            echo "    <div class=\"box\">
        <div class=\"imgBox\">
            <img src=\"/imgcoiffure/";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 223), "html", null, true);
            echo "\">
        </div>
        <div class=\"content\">
            <h2>";
            // line 226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 226), "html", null, true);
            echo "</h2>
            <p>";
            // line 227
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 227), "html", null, true);
            echo "</p>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        echo "</div>

<section>
\t<div class=\"circle circle-one\">
\t\t<img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/11108871.webp"), "html", null, true);
        echo "\" alt=\"\" title=\"\">
\t</div>
\t
\t<div class=\"circle circle-two\">
\t\t<img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/institut-beauty-moment-maquillage-mariage-1030x687 (1).jpg"), "html", null, true);
        echo "\" alt=\"\">
\t</div>
\t
\t<div>
\t\t
        <h2 > maquilleuse de mariage</h2>\t
\t\t
\t\t
\t\t<p >Puisque vous serez la star de votre journée de célébration, vous devez accorder une grande importance à votre mise en beauté et rayonner tout au long de votre événement.
            <br> Ainsi, la coiffure et le make-up de mariage joueront un rôle essentiel pour vous présenter sous votre meilleur jour.
            
            <br>Pour trouver votre professionnel de l’esthétique, vous devrez repérer d’abord les idées de coiffure et de maquillage de mariage qui correspondent à votre style.
            <br> Une fois inspirée par des articles ou des photos de professionnels sur Internet, vous pourrez consulter différents profils de spécialistes de la beauté,
            <br> leurs forfaits, leurs méthodes, les produits utilisés, et prendre contact avec eux 4 à 6 mois à l’avance afin d’obtenir des demandes de devis détaillées
            <br> en fonction de vos besoins.
            
            Un bon professionnel saura vous conseiller et vous aider dans la mission de trouver la coiffure et le maquillage correspondant à vos désirs mais
            <br> aussi à la forme de votre visage, votre teint, votre robe de mariée et vos envies d’accessoires.
            
            <br>Cette personne ou cette équipe devra également vous proposer des soins en adéquation avec votre peau et votre type de cheveu et vous garantir
            <br> une tenue durable du maquillage et de la coiffure, avec des retouches regulières si besoin.</p>

\t</div>
</section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "coiffure/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 239,  338 => 235,  332 => 231,  322 => 227,  318 => 226,  312 => 223,  308 => 221,  304 => 220,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CoiffureController!{% endblock %}

{% block body %}

 
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
     <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css
\">


<style>
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
.coiffure {
    position:relative;
    width:100%;
    height:auto;
    margin:80px auto 0;
    margin-bottom: 50px;
}
.coiffure .box {
    position:relative;
    width:calc(400px - 60px);
    height:calc(300px - 30px);
    background:#000;
    float:left;
    margin:15px;
    box-sizing:border-box;
    overflow:hidden;
    box-shadow:0 5px 10px rgba(0,0,0,.8);
}
.coiffure .box:before {
    content:'';
    position:absolute;
    top:10px;
    left:10px;
    right:10px;
    bottom:10px;
    border-top:1px solid #fff;
    border-bottom:1px solid #fff;
    box-sizing:border-box;
    transition:0.5s;
    transform: scaleX(0);
    opacity:0;
}
.coiffure .box:hover:before {
    transform:scaleX(1);
    opacity:1;
}
.coiffure .box:after {
    content:'';
    position:absolute;
    top:10px;
    left:10px;
    right:10px;
    bottom:10px;
    border-left:1px solid #fff;
    border-right:1px solid #fff;
    box-sizing:border-box;
    transition:0.5s;
    transform: scaleY(0);
    opacity:0;
}
.coiffure .box:hover:after {
    transform:scaleY(1);
    opacity:1;
}
.coiffure .box .imgBox {
    position:relative;
}
.coiffure .box .imgBox img {
    width:100%;
    transition:0.5s;
}
.coiffure .box:hover .imgBox img {
    opacity:.2;
    transform:scale(1.2);
}
.coiffure .box .content {
    position:absolute;
    width:100%;
    top:50%;
    transform:translateY(-50%);
    z-index:2;
    padding:20px;
    box-sizing:border-box;
    text-align:center;
}
.coiffure .box .content h2 {
    margin: 0 0 10px;
    padding:0;
    color:#fff;
    transition:0.5s;
    transform:translateY(-50px);
    opacity:0;
    visibility:hidden;
}
.coiffure .box .content p {
    margin:0;
    padding:0;
    color:#fff;
    transform:translateY(50px);
    opacity:0;
    visibility:hidden;
}
.coiffure .box:hover .content h2,
.coiffure .box:hover .content P {
    opacity:1;
    visibility:visible;
    transform:translateY(0px);
}
h3{
   color:hotpink;
   text-align: center;
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
*:focus {
  outline: 0;
}
section {
    
\tposition: relative;
\tpadding: 50px 0;
\twidth: 100%;
}

.circle {
\toverflow: hidden;
\tposition: relative;
}

.circle.circle-one,
.circle.circle-two {
\tborder-radius: 50%;
\tmargin: 20px;
\tshape-outside: circle();
}

.circle.circle-one {
\tfloat: left;
\theight: 400px;
\twidth: 400px;
}

.circle.circle-two {
\tfloat: right;
\theight: 300px;
\twidth: 300px;
}

.circle img {
\theight: 100%;
\tobject-fit: cover;
\tposition: absolute;
\tleft: 0;
\ttop: 0;
\twidth: 100%;
}

section h2 {
\tcolor: hotpink;
\tfont-size: 2rem;
\tmargin-bottom: 10px;
}

section p {
\tcolor: black;
}
</style>
<div>
<h3 style=\"margin-top:100px;\">Coiffure mariage</h3>
<p style=\"text-align: center;\" >
Vous vous mariez prochainement et êtes en plein dans les préparatifs du plus beau jour de votre vie… 
<br>Vous venez de trouver votre magnifique robe de mariée et avez choisi les accessoires qui la sublimeront.
<br> Il est désormais temps de vous préoccuper de votre mise en beauté. À commencer par votre coiffure de mariée !

Mais alors, comment se coiffer quand on a les cheveux longs ou bien très courts ?
<br> Quelle coupe choisir avec un visage rond, carré ou allongé ? Quand faire son premier essai dans un salon avant le mariage ? Quand se faire coiffer pour le jour J ? Comment respecter son budget beauté ? Découvrez tous nos avis,
<br> conseils et inspirations pour une coiffure de mariage réussie ! 
</p>
</div>
<div class=\"coiffure\" >
{% for item in coiffure%}
    <div class=\"box\">
        <div class=\"imgBox\">
            <img src=\"/imgcoiffure/{{ item.image }}\">
        </div>
        <div class=\"content\">
            <h2>{{ item.nom}}</h2>
            <p>{{ item.description}}</p>
        </div>
    </div>
    {% endfor %}
</div>

<section>
\t<div class=\"circle circle-one\">
\t\t<img src=\"{{asset('imgcomment/11108871.webp')}}\" alt=\"\" title=\"\">
\t</div>
\t
\t<div class=\"circle circle-two\">
\t\t<img src=\"{{asset('imgcomment/institut-beauty-moment-maquillage-mariage-1030x687 (1).jpg')}}\" alt=\"\">
\t</div>
\t
\t<div>
\t\t
        <h2 > maquilleuse de mariage</h2>\t
\t\t
\t\t
\t\t<p >Puisque vous serez la star de votre journée de célébration, vous devez accorder une grande importance à votre mise en beauté et rayonner tout au long de votre événement.
            <br> Ainsi, la coiffure et le make-up de mariage joueront un rôle essentiel pour vous présenter sous votre meilleur jour.
            
            <br>Pour trouver votre professionnel de l’esthétique, vous devrez repérer d’abord les idées de coiffure et de maquillage de mariage qui correspondent à votre style.
            <br> Une fois inspirée par des articles ou des photos de professionnels sur Internet, vous pourrez consulter différents profils de spécialistes de la beauté,
            <br> leurs forfaits, leurs méthodes, les produits utilisés, et prendre contact avec eux 4 à 6 mois à l’avance afin d’obtenir des demandes de devis détaillées
            <br> en fonction de vos besoins.
            
            Un bon professionnel saura vous conseiller et vous aider dans la mission de trouver la coiffure et le maquillage correspondant à vos désirs mais
            <br> aussi à la forme de votre visage, votre teint, votre robe de mariée et vos envies d’accessoires.
            
            <br>Cette personne ou cette équipe devra également vous proposer des soins en adéquation avec votre peau et votre type de cheveu et vous garantir
            <br> une tenue durable du maquillage et de la coiffure, avec des retouches regulières si besoin.</p>

\t</div>
</section>


{% endblock %}", "coiffure/index.html.twig", "/opt/lampp/htdocs/sitemariage/templates/coiffure/index.html.twig");
    }
}
