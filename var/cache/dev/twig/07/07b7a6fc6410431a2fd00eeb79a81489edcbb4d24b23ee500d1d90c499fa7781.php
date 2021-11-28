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
class __TwigTemplate_f9b07a6be96f010f99b6a11a95d3d097c51f4bc409e6cdfa446802ec2e31e2c0 extends Template
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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"card\">
        <img src=\"https://gorbita.tn/modules/posslideshows/images/89dc25dcd48e8865186511073fee67139ce01799_mariage1.jpg\" alt=\"Paris\">
        <div class=\"con-text\">
           
            <h3>
               Organisez un mariage parfait avec<span style=\" color:hotpink;;
             text-decoration: none;
             font-size: 35px;\">Happy Mariage</h3>
                
                
        
        </div>
        </div>
        <br>
    <div>
    
    <h6>Les meilleurs centres de beauté pour les mariées</h6>
    <p style=\"text-align: center;\">La saison des mariages et le choix du salon de coiffure est le plus difficile pour les nouvelles mariées.
    <br> Alors si vous n’avez pas encore choisi votre <span style=\" color:hotpink;;
             text-decoration: none;
             font-size: 25px;\"><a href=\"";
        // line 26
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
                src=\"https://www.marhba.com/images/mariage/mariagelobna.jpg\"
              />
              
            </div>
        
            <!-- Third slide -->
            <div class=\"banner3\">
              <img class=\"image\"
                src=\"https://www.marhba.com/images/mariage/mariageferyelstudio.jpg\"
              />
             
            </div>
        
            <!-- Fourth slide -->
            <div class=\"banner4\">
              <img class=\"image\"
                src=\"https://www.marhba.com/images/mariage/mariageviolette.jpg\"
              />
              
            </div>
          
        </div>   
</div>


 <div style=\"margin-top:600px;\">
    
    <h6>Les salles de fêtes pour la soirée de votre vie</h6>
    <p style=\"text-align: center;\">On connais tous le nombre d'invités important dans les mariages tunisiens. Pour une fête réussie,
    <br><span style=\" color:hotpink;;
             text-decoration: none;
             font-size: 25px;\"><a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salle_de_mariage");
        echo "\"> la salle </span></a> compte énormément et trouver l’espace de rêve pour réunir vos convives est une tâche un peu délicate.
    </p>
    </div>
<div style=\"margin-top:70px;\">

\t<div class=\"row\">
\t\t<div class=\"col-12 col-md-4\">
\t\t\t<div class=\"rt-profile-card\">
      <img src=\"https://www.marhba.com/images/mariage/mariage2018/covermariagespace.jpg\" style=\"height:250px\" class=\"full-width img-fluid\">
\t\t\t

\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-12 col-md-4\">
\t\t\t<div class=\"rt-profile-card\">
      <img src=\"https://www.marhba.com/images/mariage/mariage2018/jinen-khadija.jpg\" class=\"full-width img-fluid\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-12 col-md-4\">
\t\t\t<div class=\"rt-profile-card\">
      <img src=\"https://www.marhba.com/images/mariage/mariage2018/versailles.jpg\" class=\"full-width img-fluid\">
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

<div style=\"margin-top:100px;\">
    
    <h6>Les troupes musicales pour votre mariage</h6>
    <p style=\"text-align: center;\">
    On vous facilite la tâche et on partage avec vous<span style=\" color:hotpink;;
             text-decoration: none;
             font-size: 25px;\"><a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("musique_de_mariage");
        echo "\" > des troupes musicales </a></span>bien réputées en Tunisie
     <br> pour une ambiance de mariage exceptionnelle le Jour J.
</p>
    </div>

 <!-- 3D Slideshow Section --> 
<div id=\"slideshow\">
\t\t\t<div class=\"entire-content\">
\t\t\t\t<div class=\"content-carrousel\">
\t\t\t\t\t<figure class=\"shadow\"><img src=\"http://www.marhba.com/images/mariage/boudinar.jpg\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"https://www.marhba.com/images/mariage/mariage2018/Ben_Rhouma_Troupe.jpg\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"https://3ersi.tn/uploads/437/images/_1572010036.JPG\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"https://3ersi.tn/uploads/382/images/troupe_mazzika_1532531212.jpg\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"https://3ersi.tn/uploads/437/images/_1572010036.JPG\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"https://www.mariage-tunisie.net/wp-content/uploads/2018/08/troupe-la-fiesta-sofien-safta-696x348.jpg\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ_KNdo438Gefigl0cAzTTXqiU-dZV211Mdg&usqp=CAU\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"https://3ersi.tn/uploads/437/images/_1572009868.JPG\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"https://3ersi.tn/uploads/437/images/_1572009868.JPG\"/></figure>
\t\t</div>
\t</div>
</div>
<div>
    <div style=\" margin: 100px;
 text-align: center;\">
 <a class=\"btn-blink1\" href=\"\">les Nouveautés!</a>
</div>
    <h6>Les agences de voyage pour organiser votre voyage de noce</h6>
    <p style=\"text-align: center;\">
    Vous vous préparez pour sauter le pas ? A part l’organisation du grand événement 
    <br> certainement vous cherchez la destination idéale pour partir en<span style=\" color:hotpink;;
             text-decoration: none;
             font-size: 25px;\"> voyage de noces.</span>
     
</p>
    </div>
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link href=\"https://fonts.googleapis.com/css2?family=Almendra+SC&display=swap\" rel=\"stylesheet\">
  <div class=\"contents one\">
    <div class=\"polar\">
     
      <img src=\"https://www.keejob.com/media/recruiter/recruiter_15212/logo-15212-20181017-201247.jpg\" alt=\"\" style=\"height:330px\">
      <div class=\"caption\">Elena Gilbert</div>
    </div>
  </div>
  
   <div class=\"contents two\">
    <div class=\"polar \">
      <img src=\"https://3ersi.tn/uploads/shops/photos/1520351630_logo.png\"  alt=\"w\" style=\"height:300px\" >
      <div class=\"caption\">Rebekah mikelson</div>
    </div>
  </div>
   <div class=\"contents three\">
    <div class=\"polar \">
      <img src=\"https://prod.bravebooking.net/clients/SV76920/media/photos/website/logo_1_safarivoyages.svg\" alt=\"\" style=\"height:300px\">
      <div class=\"caption\">Caroline forbes</div>
    </div>
  </div>


<style>
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

.polar{
  background:white;
  padding:1rem;
  box-shadow: 0 0.5rem 1rem gray;
  
}
.polar img{
  max-width:100%;
  height:auto;
  
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
  content:'';
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


.rt-profile-card {
\tmax-width: 400px;
\tbackground-color: #FFF;
\tbox-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
\tbackground-position: center;
\toverflow: hidden;
\tposition: relative;
\tmargin: 10px auto;
\tcursor: pointer;
\tborder-radius: 10px;
}

.rt-profile-card img.full-width {
\ttransition: all linear 0.25s;
\twidth: 100%;
\theight: auto;
}

.rt-profile-card .rt-profile-body {
\tposition: absolute;
\tleft: 30px;
\tright: 15px;
\tbottom: 0;
\ttransition: all linear 0.25s;
}

.rt-profile-card .rt-profile-name {
\tfont-size: 30px;
\tline-height: 1;
\tcolor: #FFF;
\ttext-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
\tfont-weight: bold;
\tposition: relative;
\ttransition: all 400ms ease-out;
\ttext-transform: uppercase;
}

.rt-profile-card .rt-profile-text {
\tvisibility: hidden;
\topacity: 0;
\tfont-size: 16px;
\tline-height: 1.4;
\tcolor: #FFF;
\ttext-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
\tmargin-top: 10px;
\theight: unset;
\ttransition: all linear 0.25s;
}

.rt-profile-card:hover .rt-profile-body {
\tbottom: 30px;
}

.rt-profile-card:hover .rt-profile-name {
\tcolor: #ffc920;
}

.rt-profile-card .rt-profile-name::before,
.rt-profile-card .rt-profile-name::after {
\tcontent: \"\";
\tdisplay: inline-block;
\tbackground: #fff;
\tborder-radius: 20px;
\twidth: 120px;
\theight: 2px;
\tmargin-right: 0;
\tmargin-left: 0;
\ttransition: all 250ms ease-in;
}

.rt-profile-card .rt-profile-name::before {
\tposition: absolute;
\tleft: 0;
\ttop: -7px;
\ttransform: translateX(0);
}

.rt-profile-card .rt-profile-name::after {
\tposition: absolute;
\tleft: 0;
\tbottom: -7px;
\ttransform: translateX(-200px);
}

.rt-profile-card:hover .rt-profile-name::before {
\tcontent: \"\";
\tbackground: #ffc920;
\ttransform: translateX(-200px);
}

.rt-profile-card:hover .rt-profile-name::after {
\tcontent: \"\";
\tbackground: #ffc920;
\ttransform: translateX(0);
}

.rt-profile-card:hover .rt-profile-text {
\tvisibility: visible;
\topacity: 1;
\ttransition: all 400ms ease-out;
\theight: initial;
}

@media (max-width: 768px) {
\t.rt-profile-card .rt-profile-body {
\t\tbottom: 30px;
\t}
\t.rt-profile-card .rt-profile-text {
\t\tvisibility: visible;
\t\topacity:1;
\t\theight: initial;
\t}
\t.rt-profile-card .rt-profile-name::before {
\t\tdisplay: none;
\t}   
\t.rt-profile-card .rt-profile-name::after {
\t\tposition: absolute;
\t\tleft: 0;
\t\tbottom: -7px;
\t\ttransform: translateX(0);
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
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 1300px;
    height: 400px;
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
.card:hover .con-text p {
    margin-bottom: 0;
    opacity: 1;
    transition: all 0.5s ease;
}
.card img {
    position: absolute;
    width: 100%;
    z-index: 10;
    transition: all 0.5s ease;
}
.card .con-text {
    position: absolute;
    z-index: 30;
    bottom: 0;
    color: #fff;
    padding: 20px;
    padding-bottom: 30px;
    background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.9) 100%);
}
.card .con-text p {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    font-size: 0.8rem;
    opacity: 0;
    margin-bottom: -150px;
    transition: all 0.5s ease;
}
.card .con-text p button {
    padding: 7px 17px;
    border-radius: 12px;
    background: transparent;
    border: 2px solid #fff;
    color: #fff;
    margin-top: 10px;
    margin-left: auto;
    cursor: pointer;
    transition: all 0.5s ease;
    font-family: poppins;
    font-size: 0.75rem;
    outline: none;
}
.card .con-text p button:hover {
    background: #fff;
    color: #000;
}
.ul {
    position: absolute;
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
        // line 780
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("popper/popper.min.js"), "html", null, true);
        echo "\"></script> 
      <script src=\"";
        // line 781
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
        return array (  877 => 781,  873 => 780,  195 => 105,  159 => 72,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
<div class=\"card\">
        <img src=\"https://gorbita.tn/modules/posslideshows/images/89dc25dcd48e8865186511073fee67139ce01799_mariage1.jpg\" alt=\"Paris\">
        <div class=\"con-text\">
           
            <h3>
               Organisez un mariage parfait avec<span style=\" color:hotpink;;
             text-decoration: none;
             font-size: 35px;\">Happy Mariage</h3>
                
                
        
        </div>
        </div>
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
                src=\"https://www.marhba.com/images/mariage/mariagelobna.jpg\"
              />
              
            </div>
        
            <!-- Third slide -->
            <div class=\"banner3\">
              <img class=\"image\"
                src=\"https://www.marhba.com/images/mariage/mariageferyelstudio.jpg\"
              />
             
            </div>
        
            <!-- Fourth slide -->
            <div class=\"banner4\">
              <img class=\"image\"
                src=\"https://www.marhba.com/images/mariage/mariageviolette.jpg\"
              />
              
            </div>
          
        </div>   
</div>


 <div style=\"margin-top:600px;\">
    
    <h6>Les salles de fêtes pour la soirée de votre vie</h6>
    <p style=\"text-align: center;\">On connais tous le nombre d'invités important dans les mariages tunisiens. Pour une fête réussie,
    <br><span style=\" color:hotpink;;
             text-decoration: none;
             font-size: 25px;\"><a href=\"{{ path('salle_de_mariage')}}\"> la salle </span></a> compte énormément et trouver l’espace de rêve pour réunir vos convives est une tâche un peu délicate.
    </p>
    </div>
<div style=\"margin-top:70px;\">

\t<div class=\"row\">
\t\t<div class=\"col-12 col-md-4\">
\t\t\t<div class=\"rt-profile-card\">
      <img src=\"https://www.marhba.com/images/mariage/mariage2018/covermariagespace.jpg\" style=\"height:250px\" class=\"full-width img-fluid\">
\t\t\t

\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-12 col-md-4\">
\t\t\t<div class=\"rt-profile-card\">
      <img src=\"https://www.marhba.com/images/mariage/mariage2018/jinen-khadija.jpg\" class=\"full-width img-fluid\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-12 col-md-4\">
\t\t\t<div class=\"rt-profile-card\">
      <img src=\"https://www.marhba.com/images/mariage/mariage2018/versailles.jpg\" class=\"full-width img-fluid\">
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

<div style=\"margin-top:100px;\">
    
    <h6>Les troupes musicales pour votre mariage</h6>
    <p style=\"text-align: center;\">
    On vous facilite la tâche et on partage avec vous<span style=\" color:hotpink;;
             text-decoration: none;
             font-size: 25px;\"><a href=\"{{path('musique_de_mariage')}}\" > des troupes musicales </a></span>bien réputées en Tunisie
     <br> pour une ambiance de mariage exceptionnelle le Jour J.
</p>
    </div>

 <!-- 3D Slideshow Section --> 
<div id=\"slideshow\">
\t\t\t<div class=\"entire-content\">
\t\t\t\t<div class=\"content-carrousel\">
\t\t\t\t\t<figure class=\"shadow\"><img src=\"http://www.marhba.com/images/mariage/boudinar.jpg\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"https://www.marhba.com/images/mariage/mariage2018/Ben_Rhouma_Troupe.jpg\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"https://3ersi.tn/uploads/437/images/_1572010036.JPG\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"https://3ersi.tn/uploads/382/images/troupe_mazzika_1532531212.jpg\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"https://3ersi.tn/uploads/437/images/_1572010036.JPG\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"https://www.mariage-tunisie.net/wp-content/uploads/2018/08/troupe-la-fiesta-sofien-safta-696x348.jpg\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ_KNdo438Gefigl0cAzTTXqiU-dZV211Mdg&usqp=CAU\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"https://3ersi.tn/uploads/437/images/_1572009868.JPG\"/></figure>
\t\t\t\t\t<figure class=\"shadow\"><img src=\"https://3ersi.tn/uploads/437/images/_1572009868.JPG\"/></figure>
\t\t</div>
\t</div>
</div>
<div>
    <div style=\" margin: 100px;
 text-align: center;\">
 <a class=\"btn-blink1\" href=\"\">les Nouveautés!</a>
</div>
    <h6>Les agences de voyage pour organiser votre voyage de noce</h6>
    <p style=\"text-align: center;\">
    Vous vous préparez pour sauter le pas ? A part l’organisation du grand événement 
    <br> certainement vous cherchez la destination idéale pour partir en<span style=\" color:hotpink;;
             text-decoration: none;
             font-size: 25px;\"> voyage de noces.</span>
     
</p>
    </div>
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link href=\"https://fonts.googleapis.com/css2?family=Almendra+SC&display=swap\" rel=\"stylesheet\">
  <div class=\"contents one\">
    <div class=\"polar\">
     
      <img src=\"https://www.keejob.com/media/recruiter/recruiter_15212/logo-15212-20181017-201247.jpg\" alt=\"\" style=\"height:330px\">
      <div class=\"caption\">Elena Gilbert</div>
    </div>
  </div>
  
   <div class=\"contents two\">
    <div class=\"polar \">
      <img src=\"https://3ersi.tn/uploads/shops/photos/1520351630_logo.png\"  alt=\"w\" style=\"height:300px\" >
      <div class=\"caption\">Rebekah mikelson</div>
    </div>
  </div>
   <div class=\"contents three\">
    <div class=\"polar \">
      <img src=\"https://prod.bravebooking.net/clients/SV76920/media/photos/website/logo_1_safarivoyages.svg\" alt=\"\" style=\"height:300px\">
      <div class=\"caption\">Caroline forbes</div>
    </div>
  </div>


<style>
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

.polar{
  background:white;
  padding:1rem;
  box-shadow: 0 0.5rem 1rem gray;
  
}
.polar img{
  max-width:100%;
  height:auto;
  
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
  content:'';
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


.rt-profile-card {
\tmax-width: 400px;
\tbackground-color: #FFF;
\tbox-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
\tbackground-position: center;
\toverflow: hidden;
\tposition: relative;
\tmargin: 10px auto;
\tcursor: pointer;
\tborder-radius: 10px;
}

.rt-profile-card img.full-width {
\ttransition: all linear 0.25s;
\twidth: 100%;
\theight: auto;
}

.rt-profile-card .rt-profile-body {
\tposition: absolute;
\tleft: 30px;
\tright: 15px;
\tbottom: 0;
\ttransition: all linear 0.25s;
}

.rt-profile-card .rt-profile-name {
\tfont-size: 30px;
\tline-height: 1;
\tcolor: #FFF;
\ttext-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
\tfont-weight: bold;
\tposition: relative;
\ttransition: all 400ms ease-out;
\ttext-transform: uppercase;
}

.rt-profile-card .rt-profile-text {
\tvisibility: hidden;
\topacity: 0;
\tfont-size: 16px;
\tline-height: 1.4;
\tcolor: #FFF;
\ttext-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
\tmargin-top: 10px;
\theight: unset;
\ttransition: all linear 0.25s;
}

.rt-profile-card:hover .rt-profile-body {
\tbottom: 30px;
}

.rt-profile-card:hover .rt-profile-name {
\tcolor: #ffc920;
}

.rt-profile-card .rt-profile-name::before,
.rt-profile-card .rt-profile-name::after {
\tcontent: \"\";
\tdisplay: inline-block;
\tbackground: #fff;
\tborder-radius: 20px;
\twidth: 120px;
\theight: 2px;
\tmargin-right: 0;
\tmargin-left: 0;
\ttransition: all 250ms ease-in;
}

.rt-profile-card .rt-profile-name::before {
\tposition: absolute;
\tleft: 0;
\ttop: -7px;
\ttransform: translateX(0);
}

.rt-profile-card .rt-profile-name::after {
\tposition: absolute;
\tleft: 0;
\tbottom: -7px;
\ttransform: translateX(-200px);
}

.rt-profile-card:hover .rt-profile-name::before {
\tcontent: \"\";
\tbackground: #ffc920;
\ttransform: translateX(-200px);
}

.rt-profile-card:hover .rt-profile-name::after {
\tcontent: \"\";
\tbackground: #ffc920;
\ttransform: translateX(0);
}

.rt-profile-card:hover .rt-profile-text {
\tvisibility: visible;
\topacity: 1;
\ttransition: all 400ms ease-out;
\theight: initial;
}

@media (max-width: 768px) {
\t.rt-profile-card .rt-profile-body {
\t\tbottom: 30px;
\t}
\t.rt-profile-card .rt-profile-text {
\t\tvisibility: visible;
\t\topacity:1;
\t\theight: initial;
\t}
\t.rt-profile-card .rt-profile-name::before {
\t\tdisplay: none;
\t}   
\t.rt-profile-card .rt-profile-name::after {
\t\tposition: absolute;
\t\tleft: 0;
\t\tbottom: -7px;
\t\ttransform: translateX(0);
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
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 1300px;
    height: 400px;
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
.card:hover .con-text p {
    margin-bottom: 0;
    opacity: 1;
    transition: all 0.5s ease;
}
.card img {
    position: absolute;
    width: 100%;
    z-index: 10;
    transition: all 0.5s ease;
}
.card .con-text {
    position: absolute;
    z-index: 30;
    bottom: 0;
    color: #fff;
    padding: 20px;
    padding-bottom: 30px;
    background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.9) 100%);
}
.card .con-text p {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    font-size: 0.8rem;
    opacity: 0;
    margin-bottom: -150px;
    transition: all 0.5s ease;
}
.card .con-text p button {
    padding: 7px 17px;
    border-radius: 12px;
    background: transparent;
    border: 2px solid #fff;
    color: #fff;
    margin-top: 10px;
    margin-left: auto;
    cursor: pointer;
    transition: all 0.5s ease;
    font-family: poppins;
    font-size: 0.75rem;
    outline: none;
}
.card .con-text p button:hover {
    background: #fff;
    color: #000;
}
.ul {
    position: absolute;
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
