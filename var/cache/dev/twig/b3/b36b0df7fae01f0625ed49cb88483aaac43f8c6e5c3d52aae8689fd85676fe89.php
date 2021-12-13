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

/* centre_de_beaute/index.html.twig */
class __TwigTemplate_6f07d81d8dd2dd0007c6ec47a5f187b82b916d715000dd083067a4c574cdd541 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "centre_de_beaute/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "centre_de_beaute/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "centre_de_beaute/index.html.twig", 1);
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
        echo "<body>
 <div class=\"card-wrap \"  style=\"margin-top:100px;\">
";
        // line 8
        $this->loadTemplate("centre_de_beaute/_filtre.html.twig", "centre_de_beaute/index.html.twig", 8)->display(twig_to_array(["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })())]));
        // line 9
        echo "</div>
<div style=\"margin-top:50px;\"> 

<h3>Votre robe de mariée</h3>
<p style=\"text-align: center;\" >Préparez-vous pour le plus beau moment de votre vie en trouvant la robe de mariée parfaite,
<br> celle qui vous correspond le mieux parmi nos différentes collections de robes !
<br> Lors de la cérémonie du mariage, la mariée est au centre de l’attention : la tenue de la mariée sublime ses formes tout en étant la plus élégante possible ! Trouvez votre style : de la robe de mariée simple à la robe de mariée princesse, sans oublier la fameuse robe de mariée dentelle.
<br></p></div>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css\"/>




<section style=\"margin-bottom:1600px;\">
 ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["centredebeaute"]) || array_key_exists("centredebeaute", $context) ? $context["centredebeaute"] : (function () { throw new RuntimeError('Variable "centredebeaute" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "          <div class=\"pic\">
\t\t\t<div class=\"mask\"> 
\t\t\t\t<h3 class=\"title\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 26), "html", null, true);
            echo "</h3>
\t\t\t<br>
\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_detail_centre", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"readMore\">READ MORE</a>
\t\t\t</div>
\t\t\t<img src=\"/imgcentre/";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 30), "html", null, true);
            echo "\" class=\"picture1\" >
      
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </section> 
    
    <div style=\"text-align: center;\"><img src=\"https://cdn.pixabay.com/photo/2020/03/06/08/23/divider-4906386_960_720.png\" alt=\"\" style=\"height: 100px;width: 500px;text-align: center;\"></div>
    <section style=\"margin-top:100px;\">
<div>
  <h3>Votre robe de mariée par style</h3>
  <p style=\"text-align: center;\" >Découvrez les modèles tendances en 2022 selon le style de robe de mariée qui vous séduit le plus 
    <br>: romantique, chic, bohème, original, simple, champêtre, vintage… il y en a pour tous les goûts ! </p>
    <br>
</div>
</section>

<div class=\"robe\">
  
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6 col-md-3\">
            <div class=\"image-block\">
                <a href=\"#\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/cover-robes-romantiques-2020-victoire-vermeulen.jpg"), "html", null, true);
        echo "\" /></a>
              </div>
             
          </div>
          <div class=\"col-xs-12 col-sm-6 col-md-3\">
            <div class=\"image-block\">
                <a href=\"#\"><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/ELISE_MARTIMORT_Robe_de_mariee_sur_mesure_paris_bordeaux_Collection_Empowerment-Robe-SIMONE-2-BD.jpeg"), "html", null, true);
        echo "\" /></a>
              </div>
             
          </div>
          <div class=\"col-xs-12 col-sm-6 col-md-3\">
            <div class=\"image-block\">
                <a href=\"#\"><img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/robe-petrus-civile-dentelle-laure-de-sagazan-.jpg"), "html", null, true);
        echo "\" /></a>
              </div>
             
          </div>
          <div class=\"col-xs-12 col-sm-6 col-md-3\">
            <div class=\"image-block\">
                <a href=\"#\"><img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/cover-original-CALIFA-valerio-luna.jpg"), "html", null, true);
        echo "\" /></a>
              </div>
             
          </div>
      </div>
      <div>
        <h3>Votre robe de mariée par coupe, matière et longueur</h3>
        <p style=\"text-align: center;\" >
          Bustier, sirène, empire, princesse, fluide, dos-nu, manches longues,
          <br> dentelle, asymétrique… sur quelle coupe et/ou tissu allez-vous
          <br> craquer pour votre mariage en 2022 ? Faites votre choix grâce à nos pages spécifiques ! 
        </p>
      </div>
      <div class=\"robe\">
        
          <div class=\"row\">
              <div class=\"col-xs-12 col-sm-6 col-md-3\">
                  <div class=\"image-block\">
                      <a href=\"#\"><img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/nicole-spose-NCA20031-NicoleCouture-moda-sposa-2020-710.jpg"), "html", null, true);
        echo "\" /></a>
                    </div>
                   
                </div>
                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                  <div class=\"image-block\">
                      <a href=\"#\"><img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/top-singuliere-jupe-couleur-de-lune-elsa-gary-2022-robe-de-mariee-elegante-6.jpeg"), "html", null, true);
        echo "\" /></a>
                    </div>
                   
                </div>
                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                  <div class=\"image-block\">
                      <a href=\"#\"><img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/alleyn_d.jpeg"), "html", null, true);
        echo "\" /></a>
                    </div>
                   
                </div>
                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                  <div class=\"image-block\">
                      <a href=\"#\"><img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/2020_LINZ_LUNA_NOVIAS_1.jpg"), "html", null, true);
        echo "\" /></a>
                    </div>
                   
                </div>
            </div>
</body>
<style>
 
body{
 background-image:url(\"http://alijafarian.com/demos/responsive-jquery-accordions/images/texture_old_map.png\");
}
.pic {
\twidth: 360px;
\theight: 360px;
\tfloat: left;
\tborder: 10px solid #fff;
  overflow: hidden;
  position: relative;
  -webkit-box-shadow: 1px 1px 2px #e6e6e6;
  -moz-box-shadow: 1px 1px 2px #e6e6e6;
  box-shadow: 1px 1px 2px #e6e6e6;
  box-shadow:0 5px 10px #666;\t
  margin-left: 50px;
  margin-top: 20px;
  color:white;
}

.picture1, .picture2, .picture3 {
  width: 100%;
  height: 100%;
  transition: 1s;
}



/*  picture1  */
.pic:hover .picture1{
  -webkit-transform: scale(10);
  transform: scale(10);
   transition: 1s;
   z-index: -1;
}

.mask {
  width: 100%;   
  height: 100%;
  position: absolute;
  opacity: 0;
  background-color: #2F4F4F;
  transition: 2s;
  z-index: 2;
}

.pic:hover .mask{
  opacity: 1;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;

}

.title {
  width: 100%;
  text-align: center;
\theight: 50px;
\tmargin-top: 20px;
  display: block;
  line-height: 50px;
  font-size: 32px;
  position: absolute;
  text-align: center;
  -webkit-transition: all 0.7s ease-in-out;
  -moz-transition: all 0.7s ease-in-out;
  -o-transition: all 0.7s ease-in-out;
  -ms-transition: all 0.7s ease-in-out;
  transition: all 0.7s ease-in-out;
  opacity: 0;
  transform: scale(0);
}

.readMore {
\theight: 40px;
\twidth: auto;
  margin-top: 70px;
  background:lightslategray ;
  color: white;
  line-height: 40px;
  font-size: 18px;
  opacity: 0;
  position: absolute;
  text-align: center;
  left: 30%;
  right: 30%;
  -webkit-transition: all 0.7s ease-in-out;
  -moz-transition: all 0.7s ease-in-out;
  -o-transition: all 0.7s ease-in-out;
  -ms-transition: all 0.7s ease-in-out;
  transition: all 0.7s ease-in-out;
  transform: scale(0);
}

.readMore:hover {
  background: cornsilk;
  color: black;
}

.text {
  width: 80%;
  border-top: 1px solid white;
  padding-top: 10px;
  margin: 0 auto;
  margin-top: 80px;
  text-align: center;
  font-style: italic;
  opacity: 0;
  transform: scale(0);
  transition: 0.7s;
}

.pic:hover .title,
.pic:hover .text,
.pic:hover .readMore {
  transform: scale(1);
  opacity: 1;
}



.image-block{transition:all .3s linear;
  -webkit-transition:all .3s linear;
  -moz-transition:all .3s linear
}
.image-block:hover{transform:translateY(5px) scale(1.2);
  box-shadow:0px 0px 40px rgba(0,0,0,.2);
  position:relative;z-index:9
}
.image-block img{width:100%;
  border:solid 5px #fff;
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
  *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}


.centre {
  position: relative;
  flex-grow: 1;
  margin: auto;
  width: 100%;
  height: auto;
  display: grid;
  grid-template-columns: repeat(8, 1fr);
  grid-template-rows: repeat(4, 1fr);
  grid-gap: 2vmin;
  justify-items: center;
  align-items: center;
}
.img3 {
  z-index: 1;
  grid-column: span 2;
  
  margin-bottom: -120%;
  -webkit-clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
     clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
  transform: scale(1);
  transition: all 0.15s;
}
.img3:nth-child(7n+1) {
  grid-column: 2/span 2;
}
.img3:hover {
   z-index: 2;
  transform: scale(2);
}


</style>   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "centre_de_beaute/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 105,  222 => 99,  213 => 93,  204 => 87,  183 => 69,  174 => 63,  165 => 57,  156 => 51,  137 => 34,  127 => 30,  122 => 28,  117 => 26,  113 => 24,  109 => 23,  93 => 9,  91 => 8,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}
 
{% block body %}
<body>
 <div class=\"card-wrap \"  style=\"margin-top:100px;\">
{% include 'centre_de_beaute/_filtre.html.twig' with{form:form} only %}
</div>
<div style=\"margin-top:50px;\"> 

<h3>Votre robe de mariée</h3>
<p style=\"text-align: center;\" >Préparez-vous pour le plus beau moment de votre vie en trouvant la robe de mariée parfaite,
<br> celle qui vous correspond le mieux parmi nos différentes collections de robes !
<br> Lors de la cérémonie du mariage, la mariée est au centre de l’attention : la tenue de la mariée sublime ses formes tout en étant la plus élégante possible ! Trouvez votre style : de la robe de mariée simple à la robe de mariée princesse, sans oublier la fameuse robe de mariée dentelle.
<br></p></div>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css\"/>




<section style=\"margin-bottom:1600px;\">
 {% for item in centredebeaute %}
          <div class=\"pic\">
\t\t\t<div class=\"mask\"> 
\t\t\t\t<h3 class=\"title\">{{ item.nom}}</h3>
\t\t\t<br>
\t\t\t\t<a href=\"{{path('home_detail_centre',{'id':item.id})}}\" class=\"readMore\">READ MORE</a>
\t\t\t</div>
\t\t\t<img src=\"/imgcentre/{{ item.image }}\" class=\"picture1\" >
      
\t\t</div>
\t\t{% endfor %}
    </section> 
    
    <div style=\"text-align: center;\"><img src=\"https://cdn.pixabay.com/photo/2020/03/06/08/23/divider-4906386_960_720.png\" alt=\"\" style=\"height: 100px;width: 500px;text-align: center;\"></div>
    <section style=\"margin-top:100px;\">
<div>
  <h3>Votre robe de mariée par style</h3>
  <p style=\"text-align: center;\" >Découvrez les modèles tendances en 2022 selon le style de robe de mariée qui vous séduit le plus 
    <br>: romantique, chic, bohème, original, simple, champêtre, vintage… il y en a pour tous les goûts ! </p>
    <br>
</div>
</section>

<div class=\"robe\">
  
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6 col-md-3\">
            <div class=\"image-block\">
                <a href=\"#\"><img src=\"{{asset('imgcomment/cover-robes-romantiques-2020-victoire-vermeulen.jpg')}}\" /></a>
              </div>
             
          </div>
          <div class=\"col-xs-12 col-sm-6 col-md-3\">
            <div class=\"image-block\">
                <a href=\"#\"><img src=\"{{asset('imgcomment/ELISE_MARTIMORT_Robe_de_mariee_sur_mesure_paris_bordeaux_Collection_Empowerment-Robe-SIMONE-2-BD.jpeg')}}\" /></a>
              </div>
             
          </div>
          <div class=\"col-xs-12 col-sm-6 col-md-3\">
            <div class=\"image-block\">
                <a href=\"#\"><img src=\"{{asset('imgcomment/robe-petrus-civile-dentelle-laure-de-sagazan-.jpg')}}\" /></a>
              </div>
             
          </div>
          <div class=\"col-xs-12 col-sm-6 col-md-3\">
            <div class=\"image-block\">
                <a href=\"#\"><img src=\"{{asset('imgcomment/cover-original-CALIFA-valerio-luna.jpg')}}\" /></a>
              </div>
             
          </div>
      </div>
      <div>
        <h3>Votre robe de mariée par coupe, matière et longueur</h3>
        <p style=\"text-align: center;\" >
          Bustier, sirène, empire, princesse, fluide, dos-nu, manches longues,
          <br> dentelle, asymétrique… sur quelle coupe et/ou tissu allez-vous
          <br> craquer pour votre mariage en 2022 ? Faites votre choix grâce à nos pages spécifiques ! 
        </p>
      </div>
      <div class=\"robe\">
        
          <div class=\"row\">
              <div class=\"col-xs-12 col-sm-6 col-md-3\">
                  <div class=\"image-block\">
                      <a href=\"#\"><img src=\"{{asset('imgcomment/nicole-spose-NCA20031-NicoleCouture-moda-sposa-2020-710.jpg')}}\" /></a>
                    </div>
                   
                </div>
                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                  <div class=\"image-block\">
                      <a href=\"#\"><img src=\"{{asset('imgcomment/top-singuliere-jupe-couleur-de-lune-elsa-gary-2022-robe-de-mariee-elegante-6.jpeg')}}\" /></a>
                    </div>
                   
                </div>
                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                  <div class=\"image-block\">
                      <a href=\"#\"><img src=\"{{asset('imgcomment/alleyn_d.jpeg')}}\" /></a>
                    </div>
                   
                </div>
                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                  <div class=\"image-block\">
                      <a href=\"#\"><img src=\"{{asset('imgcomment/2020_LINZ_LUNA_NOVIAS_1.jpg')}}\" /></a>
                    </div>
                   
                </div>
            </div>
</body>
<style>
 
body{
 background-image:url(\"http://alijafarian.com/demos/responsive-jquery-accordions/images/texture_old_map.png\");
}
.pic {
\twidth: 360px;
\theight: 360px;
\tfloat: left;
\tborder: 10px solid #fff;
  overflow: hidden;
  position: relative;
  -webkit-box-shadow: 1px 1px 2px #e6e6e6;
  -moz-box-shadow: 1px 1px 2px #e6e6e6;
  box-shadow: 1px 1px 2px #e6e6e6;
  box-shadow:0 5px 10px #666;\t
  margin-left: 50px;
  margin-top: 20px;
  color:white;
}

.picture1, .picture2, .picture3 {
  width: 100%;
  height: 100%;
  transition: 1s;
}



/*  picture1  */
.pic:hover .picture1{
  -webkit-transform: scale(10);
  transform: scale(10);
   transition: 1s;
   z-index: -1;
}

.mask {
  width: 100%;   
  height: 100%;
  position: absolute;
  opacity: 0;
  background-color: #2F4F4F;
  transition: 2s;
  z-index: 2;
}

.pic:hover .mask{
  opacity: 1;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;

}

.title {
  width: 100%;
  text-align: center;
\theight: 50px;
\tmargin-top: 20px;
  display: block;
  line-height: 50px;
  font-size: 32px;
  position: absolute;
  text-align: center;
  -webkit-transition: all 0.7s ease-in-out;
  -moz-transition: all 0.7s ease-in-out;
  -o-transition: all 0.7s ease-in-out;
  -ms-transition: all 0.7s ease-in-out;
  transition: all 0.7s ease-in-out;
  opacity: 0;
  transform: scale(0);
}

.readMore {
\theight: 40px;
\twidth: auto;
  margin-top: 70px;
  background:lightslategray ;
  color: white;
  line-height: 40px;
  font-size: 18px;
  opacity: 0;
  position: absolute;
  text-align: center;
  left: 30%;
  right: 30%;
  -webkit-transition: all 0.7s ease-in-out;
  -moz-transition: all 0.7s ease-in-out;
  -o-transition: all 0.7s ease-in-out;
  -ms-transition: all 0.7s ease-in-out;
  transition: all 0.7s ease-in-out;
  transform: scale(0);
}

.readMore:hover {
  background: cornsilk;
  color: black;
}

.text {
  width: 80%;
  border-top: 1px solid white;
  padding-top: 10px;
  margin: 0 auto;
  margin-top: 80px;
  text-align: center;
  font-style: italic;
  opacity: 0;
  transform: scale(0);
  transition: 0.7s;
}

.pic:hover .title,
.pic:hover .text,
.pic:hover .readMore {
  transform: scale(1);
  opacity: 1;
}



.image-block{transition:all .3s linear;
  -webkit-transition:all .3s linear;
  -moz-transition:all .3s linear
}
.image-block:hover{transform:translateY(5px) scale(1.2);
  box-shadow:0px 0px 40px rgba(0,0,0,.2);
  position:relative;z-index:9
}
.image-block img{width:100%;
  border:solid 5px #fff;
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
  *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}


.centre {
  position: relative;
  flex-grow: 1;
  margin: auto;
  width: 100%;
  height: auto;
  display: grid;
  grid-template-columns: repeat(8, 1fr);
  grid-template-rows: repeat(4, 1fr);
  grid-gap: 2vmin;
  justify-items: center;
  align-items: center;
}
.img3 {
  z-index: 1;
  grid-column: span 2;
  
  margin-bottom: -120%;
  -webkit-clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
     clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
  transform: scale(1);
  transition: all 0.15s;
}
.img3:nth-child(7n+1) {
  grid-column: 2/span 2;
}
.img3:hover {
   z-index: 2;
  transform: scale(2);
}


</style>   
{% endblock %}
", "centre_de_beaute/index.html.twig", "/opt/lampp/htdocs/sitemariage2/templates/centre_de_beaute/index.html.twig");
    }
}
