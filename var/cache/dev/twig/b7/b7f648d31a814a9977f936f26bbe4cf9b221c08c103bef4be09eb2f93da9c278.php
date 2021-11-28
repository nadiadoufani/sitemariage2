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
class __TwigTemplate_54b74e636d36fd504bad9cc77d55c9f7cbb259b2665fcf71b09515bf0c2ec10b extends Template
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

        echo "Hello SalleDeMariageController!";
        
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
<div> 

<h3>Votre robe de mariée</h3>
<p style=\"text-align: center;\" >Préparez-vous pour le plus beau moment de votre vie en trouvant la robe de mariée parfaite,
<br> celle qui vous correspond le mieux parmi nos différentes collections de robes !
<br> Lors de la cérémonie du mariage, la mariée est au centre de l’attention : la tenue de la mariée sublime ses formes tout en étant la plus élégante possible ! Trouvez votre style : de la robe de mariée simple à la robe de mariée princesse, sans oublier la fameuse robe de mariée dentelle.
<br></p></div>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css\"/>

<div class=\"centre\">
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["centredebeaute"]) || array_key_exists("centredebeaute", $context) ? $context["centredebeaute"] : (function () { throw new RuntimeError('Variable "centredebeaute" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "<img src=\"/imgcentre/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 18), "html", null, true);
            echo "\" alt=\"\" style=\"width: 300px;height:300px; \" class=\"img3\">
  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
</div>
<div style=\" margin: 100px;
 text-align: center;\">
 <a class=\"btn-blink1\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rendez_vous");
        echo "\">Rendez-Vous !!!</a>
</div> 
<div>
  <h3>Votre robe de mariée par style</h3>
  <p style=\"text-align: center;\" >Découvrez les modèles tendances en 2022 selon le style de robe de mariée qui vous séduit le plus 
    <br>: romantique, chic, bohème, original, simple, champêtre, vintage… il y en a pour tous les goûts ! </p>
    <br>
</div>
<div class=\"robe\">
  
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6 col-md-3\">
            <div class=\"image-block\">
                <a href=\"#\"><img src=\"https://www.mariee.fr/wp-content/uploads/2019/11/cover-robes-romantiques-2020-victoire-vermeulen.jpg\" /></a>
              </div>
             
          </div>
          <div class=\"col-xs-12 col-sm-6 col-md-3\">
            <div class=\"image-block\">
                <a href=\"#\"><img src=\"https://www.mariee.fr/wp-content/uploads/2021/10/ELISE_MARTIMORT_Robe_de_mariee_sur_mesure_paris_bordeaux_Collection_Empowerment-Robe-SIMONE-2-BD.jpeg\" /></a>
              </div>
             
          </div>
          <div class=\"col-xs-12 col-sm-6 col-md-3\">
            <div class=\"image-block\">
                <a href=\"#\"><img src=\"https://www.mariee.fr/wp-content/uploads/2019/11/robe-petrus-civile-dentelle-laure-de-sagazan-.jpg\" /></a>
              </div>
             
          </div>
          <div class=\"col-xs-12 col-sm-6 col-md-3\">
            <div class=\"image-block\">
                <a href=\"#\"><img src=\"https://www.mariee.fr/wp-content/uploads/2019/11/cover-original-CALIFA-valerio-luna.jpg\" /></a>
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
                      <a href=\"#\"><img src=\"https://www.mariee.fr/wp-content/uploads/2019/11/nicole-spose-NCA20031-NicoleCouture-moda-sposa-2020-710.jpg\" /></a>
                    </div>
                   
                </div>
                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                  <div class=\"image-block\">
                      <a href=\"#\"><img src=\"https://www.mariee.fr/wp-content/uploads/2021/10/top-singuliere-jupe-couleur-de-lune-elsa-gary-2022-robe-de-mariee-elegante-6.jpeg\" /></a>
                    </div>
                   
                </div>
                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                  <div class=\"image-block\">
                      <a href=\"#\"><img src=\"https://www.mariee.fr/wp-content/uploads/2021/10/alleyn_d.jpeg\" /></a>
                    </div>
                   
                </div>
                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                  <div class=\"image-block\">
                      <a href=\"#\"><img src=\"https://www.mariee.fr/wp-content/uploads/2019/11/2020_LINZ_LUNA_NOVIAS_1.jpg\" /></a>
                    </div>
                   
                </div>
            </div>
<style>
 
.image-block{transition:all .3s linear;
  -webkit-transition:all .3s linear;
  -moz-transition:all .3s linear
}
.image-block:hover{transform:translateY(10px) scale(1.2);
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
  max-width: 1200px;
  max-height: 1200px;
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
  max-width: 100%;
  margin-bottom: -52%;
  -webkit-clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
     clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
  transform: scale(1);
  transition: all 0.25s;
}

img:nth-child(7n+1) {
  grid-column: 2/span 2;
}

img:hover {
   z-index: 2;
  transform: scale(2);
}
h3{
   color:hotpink;
   text-align: center;
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
        return array (  121 => 25,  115 => 21,  105 => 18,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello SalleDeMariageController!{% endblock %}
 
{% block body %}
 
<div> 

<h3>Votre robe de mariée</h3>
<p style=\"text-align: center;\" >Préparez-vous pour le plus beau moment de votre vie en trouvant la robe de mariée parfaite,
<br> celle qui vous correspond le mieux parmi nos différentes collections de robes !
<br> Lors de la cérémonie du mariage, la mariée est au centre de l’attention : la tenue de la mariée sublime ses formes tout en étant la plus élégante possible ! Trouvez votre style : de la robe de mariée simple à la robe de mariée princesse, sans oublier la fameuse robe de mariée dentelle.
<br></p></div>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css\"/>

<div class=\"centre\">
{% for item in centredebeaute %}
<img src=\"/imgcentre/{{ item.image }}\" alt=\"\" style=\"width: 300px;height:300px; \" class=\"img3\">
  
{% endfor %}

</div>
<div style=\" margin: 100px;
 text-align: center;\">
 <a class=\"btn-blink1\" href=\"{{ path('rendez_vous')}}\">Rendez-Vous !!!</a>
</div> 
<div>
  <h3>Votre robe de mariée par style</h3>
  <p style=\"text-align: center;\" >Découvrez les modèles tendances en 2022 selon le style de robe de mariée qui vous séduit le plus 
    <br>: romantique, chic, bohème, original, simple, champêtre, vintage… il y en a pour tous les goûts ! </p>
    <br>
</div>
<div class=\"robe\">
  
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6 col-md-3\">
            <div class=\"image-block\">
                <a href=\"#\"><img src=\"https://www.mariee.fr/wp-content/uploads/2019/11/cover-robes-romantiques-2020-victoire-vermeulen.jpg\" /></a>
              </div>
             
          </div>
          <div class=\"col-xs-12 col-sm-6 col-md-3\">
            <div class=\"image-block\">
                <a href=\"#\"><img src=\"https://www.mariee.fr/wp-content/uploads/2021/10/ELISE_MARTIMORT_Robe_de_mariee_sur_mesure_paris_bordeaux_Collection_Empowerment-Robe-SIMONE-2-BD.jpeg\" /></a>
              </div>
             
          </div>
          <div class=\"col-xs-12 col-sm-6 col-md-3\">
            <div class=\"image-block\">
                <a href=\"#\"><img src=\"https://www.mariee.fr/wp-content/uploads/2019/11/robe-petrus-civile-dentelle-laure-de-sagazan-.jpg\" /></a>
              </div>
             
          </div>
          <div class=\"col-xs-12 col-sm-6 col-md-3\">
            <div class=\"image-block\">
                <a href=\"#\"><img src=\"https://www.mariee.fr/wp-content/uploads/2019/11/cover-original-CALIFA-valerio-luna.jpg\" /></a>
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
                      <a href=\"#\"><img src=\"https://www.mariee.fr/wp-content/uploads/2019/11/nicole-spose-NCA20031-NicoleCouture-moda-sposa-2020-710.jpg\" /></a>
                    </div>
                   
                </div>
                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                  <div class=\"image-block\">
                      <a href=\"#\"><img src=\"https://www.mariee.fr/wp-content/uploads/2021/10/top-singuliere-jupe-couleur-de-lune-elsa-gary-2022-robe-de-mariee-elegante-6.jpeg\" /></a>
                    </div>
                   
                </div>
                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                  <div class=\"image-block\">
                      <a href=\"#\"><img src=\"https://www.mariee.fr/wp-content/uploads/2021/10/alleyn_d.jpeg\" /></a>
                    </div>
                   
                </div>
                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                  <div class=\"image-block\">
                      <a href=\"#\"><img src=\"https://www.mariee.fr/wp-content/uploads/2019/11/2020_LINZ_LUNA_NOVIAS_1.jpg\" /></a>
                    </div>
                   
                </div>
            </div>
<style>
 
.image-block{transition:all .3s linear;
  -webkit-transition:all .3s linear;
  -moz-transition:all .3s linear
}
.image-block:hover{transform:translateY(10px) scale(1.2);
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
  max-width: 1200px;
  max-height: 1200px;
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
  max-width: 100%;
  margin-bottom: -52%;
  -webkit-clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
     clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
  transform: scale(1);
  transition: all 0.25s;
}

img:nth-child(7n+1) {
  grid-column: 2/span 2;
}

img:hover {
   z-index: 2;
  transform: scale(2);
}
h3{
   color:hotpink;
   text-align: center;
 } 


</style>   
{% endblock %}
", "centre_de_beaute/index.html.twig", "/opt/lampp/htdocs/sitemariage/templates/centre_de_beaute/index.html.twig");
    }
}
