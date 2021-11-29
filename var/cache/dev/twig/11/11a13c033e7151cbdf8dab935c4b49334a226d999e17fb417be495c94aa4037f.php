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

/* base.html.twig */
class __TwigTemplate_236e4c2c014799f8086e6a60d49a907caf97f439a42afdfb71aff3ac1b746000 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        \t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.10.2/css/all.css\">
  \t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">
         <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
         <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, \">
        
         <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
         <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\"
         integrity=\"sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==\"
         crossorigin=\"\"/>
         <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet.markercluster@1.4.1/dist/markercluster.css\">
         <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet.markercluster@1.4.1/dist/markercluster.Default.css\">



</head>
<body>
<!-- Start Header -->

<header class=\"fixed-top\">
    <div class=\"wrapper \">
        <!-- Brand Image -->
        <a href=\"#\" class=\"logo\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/images.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 100px;\"></a>
        <i class=\"toggle-btn fas fa-bars\"></i>
        <!-- Navbar -->
        <nav class=\"nav-menus \">
            <li><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"> Acceuil</a></li>
            <li><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("musique_de_mariage");
        echo "\"> Musique De Mariage</a></li>
            <li class=\"sub-menus\"><a href=\"#\"> centre de beaute</a>
                <ul>
                    <li><a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("centre_de_beaute");
        echo "\">Robe De Mariage </a></li>
                    <li><a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coiffure");
        echo "\"> Coiffure</a></li>
                    <li><a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("costume");
        echo "\"> Costumes De Marrié</a></li>
                </ul>
                </li>
                <li class=\"sub-menus\"><a href=\"#\"> Reception</a>
                <ul>
                    <li><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salle_de_mariage");
        echo "\"></i>Salle De Beauté </a></li>
                    <li><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("traiteurs");
        echo "\"> Traiteurs</a></li>
                  </ul>
           </li>
            <li><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("photographe");
        echo "\">photographe</a></li>
            <li><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_de_noce");
        echo "\"> voyage de noce</a></li>
        ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49)) {
            // line 50
            echo "
       <li class=\"nav-item \">
        <a class=\"nav-link\" >";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "nom", [], "any", false, false, false, 52), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "prenom", [], "any", false, false, false, 52), "html", null, true);
            echo "</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\"  href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" >Déconnexion</a>
      </li>


       ";
        } else {
            // line 60
            echo "        <li class=\"navbar-dropdown\">
          <a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Inscription</a>

        </li>
          </li>
        <li class=\"navbar-dropdown\">
          <a href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>

        </li>
        ";
        }
        // line 70
        echo "         
        </nav>
    </div>
</header>
<!-- End Header -->
";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "        
     <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js.map"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("popper/popper.min.js"), "html", null, true);
        echo "\"></script> 
      <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery/jquery.slim.min.js"), "html", null, true);
        echo "\"></script>
      
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\" integrity=\"sha256-DBxkGZLxKsLKhz054qUpBqtotG00r9AELGpSigJujLg=\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("popper/popper-base.min.js.map_2.4.4/cdnjs/popper-base.min.js.map"), "html", null, true);
        echo "\"></script>
     ";
        // line 85
        $this->displayBlock('javascripts', $context, $blocks);
        // line 86
        echo "      
      <div class=\"page-wrapper\">
    <div id=\"waterdrop\"></div>
    <footer>
      <div class=\"footer-top\">
        <div class=\"pt-exebar\">

        </div>
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-3 col-md-12 col-sm-12 footer-col-3\">
              <div class=\"widget footer_widget\">
                <h5 class=\"footer-title\">Address</h5>
                <div class=\"gem-contacts\">
                  <div class=\"gem-contacts-item gem-contacts-address\">Corporate Office :<br> Doon House, B-275(A), First floor
                    Sector-57, Shushant Lok 3
                    Near Hong Kong Bazzar, Gurugram Pin 122001, Haryana.
                  </div>
                  <div class=\"gem-contacts-item gem-contacts-phone\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> Phone: <a href=\"\">+91-9122588799</a></div>

                  <div class=\"gem-contacts-item gem-contacts-address mt-2\">Reg. Office :<br> Doon House, D2/3,
                    4th Floor, Chandra Tower, IDBI Bank Building
                    Dimna Road, Mango, Jamshedpur-831012, Jharkhand.</div>
                  <div class=\"gem-contacts-item gem-contacts-phone\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> Phone: <a>+91 9122588799</a></div>

                </div>
              </div>

            </div>
            <div class=\"col-12 col-lg-6 col-md-6 col-sm-12\">
              <div class=\"row\">
                <div class=\"col-6 col-lg-6 col-md-6 col-sm-6\">
                  <div class=\"widget footer_widget\">
                    <h5 class=\"footer-title\">Recent News</h5>
                    <ul class=\"posts  styled\">
                      <li class=\"clearfix gem-pp-posts\">
                        <div class=\"gem-pp-posts-text\">
                          <div class=\"gem-pp-posts-item\">
                            <a href=\"#\">Want to start Your Own Play School.
                            </a>
                          </div>
                          <div class=\"gem-pp-posts-date\">Call +91-9122588799</div>
                        </div>
                      </li>
                      <li class=\"clearfix gem-pp-posts\">
                        <div class=\"gem-pp-posts-text\">
                          <div class=\"gem-pp-posts-item\">
                            <a href=\"#\">Now we are in Faridabad,Now we are in DaudNagar.
                            </a>
                          </div>
                          <div class=\"gem-pp-posts-date\">Call +91-9122588799, +91-9122588799</div>
                        </div>
                      </li>
                      <li class=\"clearfix gem-pp-posts\">
                        <div class=\"gem-pp-posts-text\">
                          <div class=\"gem-pp-posts-item\">
                            <a href=\"\">Now we are in Ranchi, Admission open
                            </a>
                          </div>
                          <div class=\"gem-pp-posts-date\">Call +91-9122588799, +91-9122588799</div>
                        </div>
                      </li>

                    </ul>
                  </div>
                </div>
                <div class=\"col-6 col-lg-6 col-md-6 col-sm-6\">
                  <div class=\"widget\">
                    <h5 class=\"footer-title\">Email Us</h5>
                    <div class=\"textwidget\">
                      <div role=\"form\" class=\"wpcf7\" id=\"wpcf7-f4-o1\" lang=\"en-US\" dir=\"ltr\">

                        <form method=\"post\" class=\"wpcf7-form\" novalidate=\"novalidate\">

                          <div class=\"contact-form-footer\">
                          
                            <p><span class=\"wpcf7-form-control-wrap your-first-name\"><input type=\"text\" name=\"your-first-name\" value=\"\" size=\"40\" class=\"wpcf7-form-control wpcf7-text\" aria-invalid=\"false\" placeholder=\"Your name\"></span></p>
                            <p><span class=\"wpcf7-form-control-wrap your-email_1\"><input type=\"email\" name=\"your-email_1\" value=\"\" size=\"40\" class=\"wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email\" aria-invalid=\"false\" placeholder=\"Your email\"></span></p>
                            <p><span class=\"wpcf7-form-control-wrap your-message\"><textarea name=\"your-message\" cols=\"40\" rows=\"10\" class=\"wpcf7-form-control wpcf7-textarea\" aria-invalid=\"false\" placeholder=\"Your message\"></textarea></span></p>
                            <div><input type=\"submit\" value=\"Send\" class=\"wpcf7-form-control wpcf7-submit\"><span class=\"ajax-loader\"></span></div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4\">
              <div class=\"widget widget_gallery gallery-grid-4\">
                <h5 class=\"footer-title\">Our Gallery</h5>
                <ul class=\"magnific-image\">

                  <li><a class=\"magnific-anchor\"><img src=\"https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80\" alt=\"\"></a></li>
                  <li><a class=\"magnific-anchor\"><img src=\"https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80\" alt=\"\"></a></li>
                  <li><a class=\"magnific-anchor\"><img src=\"https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80\" alt=\"\"></a></li>
                  <li><a class=\"magnific-anchor\"><img src=\"https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80\" alt=\"\"></a></li>
                  <li><a class=\"magnific-anchor\"><img src=\"https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80\" alt=\"\"></a></li>
                  <li><a class=\"magnific-anchor\"><img src=\"https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80\" alt=\"\"></a></li>
                  <li><a class=\"magnific-anchor\"><img src=\"https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80\" alt=\"\"></a></li>
                  <li><a class=\"magnific-anchor\"><img src=\"https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80\" alt=\"\"></a></li>
                  <li><a class=\"magnific-anchor\"><img src=\"https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80\" alt=\"\"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      
            
            </div>

          </div>
        </div>
      </div>
    </footer>
  </div>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
  <script src=\"http://code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
  <script src=\"https://daniellaharel.com/raindrops/js/raindrops.js\"></script>


 <script> jQuery('#waterdrop').raindrops({color:'#1c1f2f', canvasHeight:150, density: 0.1, frequency: 20});
</script>



  
</body>
</html>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


  
.wrapper {
   
    display: flex;
    align-items: center;
    width: 100vw;
    background-color: #fff;
    box-shadow: 0px 10px 10px 3px rgba(0, 0, 0, 0.3);
    
    
    
} 



/*-- Navbar CSS --*/
.nav-menus {
    float: right;
    min-height: 70px;
    display: flex;
    align-items: center;
    padding:0px;
    margin-left:80px;
}
.nav-menus li {
    list-style: none;
    position: relative;
    
}
.nav-menus a {
    color: black;
    position: relative;
    font-size: 17px;
    text-decoration: none;
    padding: 15px 12px;
    z-index: 1;
}
.nav-menus li:hover {
    color: #c79826;
}
.nav-menus a:after {
    content: \"\";
    width: 100%;
    height: 0px;
    background-color: hotpink;
    position: absolute;
    top: 0px;
    left: 0px;
    border-radius: 4px;
    transition: 0.5s;
    z-index: -1;
}
.nav-menus li:hover > a:after{
    height: 100%;
}
.nav-menus i{
    margin-right: 8px;
    font-size: 16px;
}
.toggle-btn{
    float: right;
    height: 90px;
    line-height: 90px;
    color:hotpink ;
    font-size: 26px;
    display: none;
    cursor: pointer;
}
.nav-menus.active{
    display: block;
}
/*-- Sub Menus CSS--*/
.sub-menus ul {
    position: absolute;
    top: 80px;
    background-color: #fff;
    padding: 5px 0px;
    min-width: 150px;
    box-shadow: 0px 0px 8px #636363;
    border-radius: 4px;
    display: none;
}
.sub-menus:hover ul {
    display: block;
}
.sub-menus ul li {
    padding: 5px 0px;
}
.sub-menus ul li a {
    padding: 8px 10px;
    display: block;
    color: black;
}
.sub-menus ul li:hover a {
    color: #fff;
}
.sub-menus ul::before {
    content: \"\";
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 10px solid #fff;
    position: absolute;
    top: -9px;
}
/*-- Responsive Menus Bar CSS--*/
@media (max-width:767px) {
.toggle-btn{
    display: block;
}
.nav-menus {
    position: absolute;
    width: 100%;
    background: white;
    top: 100px;
    right: 0;
    display: none;
    padding: 0px 15px;
    box-sizing: border-box;
}
.nav-menus::before{
    content: \"\";
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 10px solid #4e2890;
    position: absolute;
    top: -10px;
    right: 10px;
}
.sub-menus ul {
    position: static;
}
.sub-menus ul::before {
    display: none;
}
.nav-menus li {
    padding: 0px;
}
.nav-menus li a {
    display: block;
    margin: 15px 0px;
}
}
footer p, footer strong, footer b, footer {
    color: #b0b0b0;
}

.footer-top {
    background: #303030;
    background-size: cover;
    background-position: center;
    padding: 0 0 20px;
    font-family: rubik;
  padding-top:30px;
  
}

.footer-top, .footer-bottom {
    background-color: #1c1f2f;
}

.footer-bottom {
    padding: 15px 0;
    border-top: 1px solid #313646;
    background-color: #181828 !important;
    color: #b0b0b0;
    font-family: rubik;
}
color: #99a9b5;
    padding-top: 15px;
}

.footer-site-info {
    font-size: 92.86%;
}
#footer-navigation, #footer-navigation li a:hover, .custom-footer, .custom-footer li a:hover {
    color: white;
}

#footer-navigation, #footer-navigation li a, .custom-footer, .custom-footer li a {
    color: #99a9b5;
    padding-top: 15px;
}

.footer-bottom ul {
    margin: 0;
}
.inline-inside {
    font-size: 0;
    line-height: 0;
}
.clearfix:after, .clearfix:before {
    content: \"\";
    display: table;
}
#footer-menu li {
    display: inline-block;
    padding: 0 21px;
    position: relative;
    line-height: 1;
}

#footer-navigation, #footer-navigation li a, .custom-footer, .custom-footer li a {
    color: #99a9b5;
    padding-top: 15px;
}

#footer-navigation, #footer-navigation li a, .custom-footer, .custom-footer li a {
    color: #99a9b5;
    padding-top: 15px;
}
#footer-menu li+li:before {
    content: '';
    width: 0;
    height: 100%;
    position: absolute;
    left: -1px;
    top: 0;
    font-size: 0;
    border-left: 1px solid #232234;
    border-right: 1px solid #333146;
}


navigation li a, .custom-footer, .custom-footer li a {
    color: #99a9b5;
    padding-top: 15px;
}

#footer-socials {
    text-align: right;
}

#footer-socials .socials {
    text-align: right;
    margin: 0 -7px;
    display: inline-block;
    vertical-align: middle;
}

a.socials-item {
    display: inline-block;
    vertical-align: top;
    text-align: center;
    -o-transition: all 0.3s;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    margin: 0 5px;
    line-height: 16px;
    padding: 10px;
    border-radius: 50%;
    background-color: #141421;
    border: 1px solid #2e2e4c;
    box-shadow: 3px 9px 16px rgb(0,0,0,0.4), -3px -3px 10px rgba(255,255,255, 0.06), inset 14px 14px 26px rgb(0,0,0,0.3), inset -3px -3px 15px rgba(255,255,255, 0.05);
}

.socials-item i {
    display: inline-block;
    font-weight: normal;
    width: 1em;
    height: 1em;
    line-height: 1;
    font-size: 16px;
    text-align: center;
    vertical-align: top;
    font-feature-settings: normal;
    font-kerning: auto;
    font-language-override: normal;
    font-size-adjust: none;
    font-stretch: normal;
    font-style: normal;
    font-synthesis: weight style;
    font-variant: normal;
    font-weight: normal;
    text-rendering: auto;
}

.facebook {
    color: #4e64b5;
}

.twitter {
    color: #00aced;
}
.instagram {
    color: #9a8f62;
}
.youtube {
    color: #c82929;
}

.telegram {
    color: #2ca5e0;
}


a.socials-item:hover {
    box-shadow: 0 0px 20px rgba(84, 1, 74, 0.7);
    border-color: rgba(255, 6, 224, 0.61);
    background: linear-gradient(to right, rgba(255, 9, 9, 0.12941176470588237), #c000ffb5, rgba(255, 0, 94, 0.14));
}

.footer-bottom a:hover {
    color: white;
}


footer p, footer li {
    font-size: 15px;
    line-height: 22px;
}


.widget {
    margin-bottom: 50px;
}

.footer-title {
    margin-bottom: 40px;
    color: #fff;
    font-weight: 500;
    text-transform: capitalize;
    padding-bottom: 15px;
    font-size: 16px;
    position: relative;
}

.footer-title:after {
    width: 50px;
    background: #fff;
    opacity: 0.2;
    height: 1px;
    content: \"\";
    position: absolute;
    bottom: 0;
    left: 0;
}

.gem-contacts-item {
    padding-top: 10px;
    font-size: 15px;
}

.gem-contacts-item i {
    padding-right: 10px;
}

footer .widget ul {
    list-style: none;
    margin-top: 5px;
}

.posts li {
    border-bottom: 1px solid #393d50;
    padding-bottom: 12px;
    padding-top: 6px;
}

footer p, footer li {
    font-size: 15px;
    line-height: 22px;
}

.gem-pp-posts-date {
    color: #00bcd4;
    font-size: 89.5%;
}

footer p {
    line-height: 24px;
    margin-bottom: 10px;font-size: 15px;
}

.wpcf7-form-control-wrap .wpcf7-form-control {
    padding: 7px!important;
    width: 100%;
}

.wpcf7-form-control-wrap input {
    background: #1c1f2f;
    overflow: hidden;
    border: 1px solid #2e344d;
    background-color: #1c1f2f;
    box-shadow: 10px 10px 36px rgb(0,0,0,0.5), -13px -13px 23px rgba(255,255,255, 0.03);
    border-radius: 5px;
    transition: all 0.3s ease-in-out 0s;
}

.wpcf7-form-control-wrap input:hover {
    background-color: transparent;
    box-shadow: 10px 10px 36px rgb(0,0,0,0.5), -13px -13px 23px rgba(255,255,255, 0.03), inset 14px 14px 70px rgb(0,0,0,0.2), inset -15px -15px 30px rgba(255,255,255, 0.04);
    border-color: rgba(255, 255, 255, 0.2);
    color: white;
}

.wpcf7 .wpcf7-form .contact-form-footer textarea {
    height: 160px;
    width: 100%;
}

.wpcf7-form-control-wrap textarea:hover {
    background-color: transparent;
    box-shadow: 10px 10px 36px rgb(0,0,0,0.5), -13px -13px 23px rgba(255,255,255, 0.03), inset 14px 14px 70px rgb(0,0,0,0.2), inset -15px -15px 30px rgba(255,255,255, 0.04);
    border-color: rgba(255, 255, 255, 0.2);
    color: white;
}

.wpcf7-form-control-wrap textarea {
    background: #1c1f2f;
    overflow: hidden;
    border: 1px solid #2e344d;
    background-color: #1c1f2f;
    box-shadow: 10px 10px 36px rgb(0,0,0,0.5), -13px -13px 23px rgba(255,255,255, 0.03);
    border-radius: 5px;
    transition: all 0.3s ease-in-out 0s;
}

textarea {
    overflow: auto;
    resize: vertical;
}

.wpcf7 .wpcf7-form .contact-form-footer .wpcf7-submit {
    width: 100%;
    padding: 11px;
    margin: 0;
    line-height: 0;
}
.wpcf7-form .contact-form-footer .wpcf7-submit {
    background-color: #394050;
    color: #99a9b5;
    border: none;
    cursor: pointer;
    padding: 15px 40px;
    font-size: 14px;
    font-weight: 400;
    transition: all 0.5s;
    letter-spacing: 2px;
    color: rgba(255,255,255,.5);
    box-shadow: none;
    text-transform: uppercase;
    outline: none !important;
    background-color: #1c1f2f;
    border-radius: 5px;
    min-width: 140px;
    /* box-shadow: 10px 10px 36px rgb(0,0,0,0.5), -13px -13px 23px rgba(255,255,255, 0.03), inset 14px 14px 70px rgb(0,0,0,0.2), inset -15px -15px 30px rgba(255,255,255, 0.04); */
    box-shadow: 3px 9px 16px rgb(0,0,0,0.4), -3px -3px 10px rgba(255,255,255, 0.06), inset 14px 14px 26px rgb(0,0,0,0.3), inset -3px -3px 15px rgba(255,255,255, 0.05);
    border-width: 1px 0px 0px 1px;
    border-style: solid;
    border-color: #2e344d;
    transition: all 0.3s ease-in-out 0s;
}

.wpcf7-form input[type=submit] {
    height: 40px;
    line-height: 21px;
    padding: 10px 40px;
    font-size: 14px;
}

.posts li a {
    color: #99a9b5;
}

.wpcf7-form .contact-form-footer .wpcf7-submit:hover {
    box-shadow: 0 0px 20px rgba(84, 1, 74, 0.7);
    border-color: rgba(255, 6, 224, 0.61);
    background: linear-gradient(to right, rgba(255, 9, 9, 0.12941176470588237), #c000ffb5, rgba(255, 0, 94, 0.14));
    color: white;
}

img {
    border-style: none;
    height: auto;
    max-width: 100%;
    vertical-align: middle;
}
.widget_gallery a {
    display: inline-block;
}
footer .widget ul {
    list-style: none;
    margin-top: 5px;
}
.widget_gallery ul {
    padding-left: 0;
    display: table;
}

.widget_gallery li {
    display: inline-block;
    width: 33.33%;
    float: left;
    transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -o-transition: all 0.5s;
    padding: 2px;
}

.widget_gallery.gallery-grid-4 li {
    width: 30%;
}


#waterdrop {
    height: 30px;
}

#waterdrop canvas {
    bottom: -70px !important;
}

.footer-site-info
{
  padding-top: 10px;
}


</style>
  <!-- Toggle jQuery for Small Devices -->
<script type=\"text/javascript\">
    \$(\".toggle-btn\").click(function(){
        \$(this).toggleClass(\"fa-times\");
        \$(\".nav-menus\").toggleClass(\"active\");
    });
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  923 => 85,  905 => 75,  886 => 5,  212 => 86,  210 => 85,  206 => 84,  200 => 81,  196 => 80,  192 => 79,  188 => 78,  184 => 77,  181 => 76,  179 => 75,  172 => 70,  165 => 66,  157 => 61,  154 => 60,  146 => 55,  138 => 52,  134 => 50,  132 => 49,  128 => 48,  124 => 47,  118 => 44,  114 => 43,  106 => 38,  102 => 37,  98 => 36,  92 => 33,  88 => 32,  81 => 28,  62 => 12,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Home{% endblock %}</title>
        \t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.10.2/css/all.css\">
  \t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">
         <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
         <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, \">
        
         <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
         <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\"
         integrity=\"sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==\"
         crossorigin=\"\"/>
         <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet.markercluster@1.4.1/dist/markercluster.css\">
         <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet.markercluster@1.4.1/dist/markercluster.Default.css\">



</head>
<body>
<!-- Start Header -->

<header class=\"fixed-top\">
    <div class=\"wrapper \">
        <!-- Brand Image -->
        <a href=\"#\" class=\"logo\"><img src=\"{{ asset('js/images.png')}}\" alt=\"\" style=\"width: 100px;\"></a>
        <i class=\"toggle-btn fas fa-bars\"></i>
        <!-- Navbar -->
        <nav class=\"nav-menus \">
            <li><a href=\"{{path('home')}}\"> Acceuil</a></li>
            <li><a href=\"{{ path('musique_de_mariage')}}\"> Musique De Mariage</a></li>
            <li class=\"sub-menus\"><a href=\"#\"> centre de beaute</a>
                <ul>
                    <li><a href=\"{{ path('centre_de_beaute')}}\">Robe De Mariage </a></li>
                    <li><a href=\"{{ path('coiffure')}}\"> Coiffure</a></li>
                    <li><a href=\"{{ path('costume')}}\"> Costumes De Marrié</a></li>
                </ul>
                </li>
                <li class=\"sub-menus\"><a href=\"#\"> Reception</a>
                <ul>
                    <li><a href=\"{{ path('salle_de_mariage')}}\"></i>Salle De Beauté </a></li>
                    <li><a href=\"{{ path('traiteurs')}}\"> Traiteurs</a></li>
                  </ul>
           </li>
            <li><a href=\"{{ path('photographe')}}\">photographe</a></li>
            <li><a href=\"{{ path('voyage_de_noce')}}\"> voyage de noce</a></li>
        {% if app.user %}

       <li class=\"nav-item \">
        <a class=\"nav-link\" >{{ app.user.nom }} {{ app.user.prenom }}</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\"  href=\"{{path('app_logout')}}\" >Déconnexion</a>
      </li>


       {% else %}
        <li class=\"navbar-dropdown\">
          <a href=\"{{path('register')}}\">Inscription</a>

        </li>
          </li>
        <li class=\"navbar-dropdown\">
          <a href=\"{{path('app_login')}}\">Connexion</a>

        </li>
        {% endif %}
         
        </nav>
    </div>
</header>
<!-- End Header -->
{% block body %}{% endblock %}
        
     <script src=\"{{ asset('js/bootstrap.min.js.map')}}\"></script>
      <script src=\"{{ asset('js/bootstrap.bundle.min.js')}}\"></script>
      <script src=\"{{ asset('js/index.js')}}\"></script>
      <script src=\"{{ asset('popper/popper.min.js')}}\"></script> 
      <script src=\"{{ asset('jquery/jquery.slim.min.js')}}\"></script>
      
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\" integrity=\"sha256-DBxkGZLxKsLKhz054qUpBqtotG00r9AELGpSigJujLg=\" crossorigin=\"anonymous\"></script>
<script src=\"{{ asset('popper/popper-base.min.js.map_2.4.4/cdnjs/popper-base.min.js.map')}}\"></script>
     {% block javascripts %}{% endblock %}
      
      <div class=\"page-wrapper\">
    <div id=\"waterdrop\"></div>
    <footer>
      <div class=\"footer-top\">
        <div class=\"pt-exebar\">

        </div>
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-3 col-md-12 col-sm-12 footer-col-3\">
              <div class=\"widget footer_widget\">
                <h5 class=\"footer-title\">Address</h5>
                <div class=\"gem-contacts\">
                  <div class=\"gem-contacts-item gem-contacts-address\">Corporate Office :<br> Doon House, B-275(A), First floor
                    Sector-57, Shushant Lok 3
                    Near Hong Kong Bazzar, Gurugram Pin 122001, Haryana.
                  </div>
                  <div class=\"gem-contacts-item gem-contacts-phone\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> Phone: <a href=\"\">+91-9122588799</a></div>

                  <div class=\"gem-contacts-item gem-contacts-address mt-2\">Reg. Office :<br> Doon House, D2/3,
                    4th Floor, Chandra Tower, IDBI Bank Building
                    Dimna Road, Mango, Jamshedpur-831012, Jharkhand.</div>
                  <div class=\"gem-contacts-item gem-contacts-phone\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> Phone: <a>+91 9122588799</a></div>

                </div>
              </div>

            </div>
            <div class=\"col-12 col-lg-6 col-md-6 col-sm-12\">
              <div class=\"row\">
                <div class=\"col-6 col-lg-6 col-md-6 col-sm-6\">
                  <div class=\"widget footer_widget\">
                    <h5 class=\"footer-title\">Recent News</h5>
                    <ul class=\"posts  styled\">
                      <li class=\"clearfix gem-pp-posts\">
                        <div class=\"gem-pp-posts-text\">
                          <div class=\"gem-pp-posts-item\">
                            <a href=\"#\">Want to start Your Own Play School.
                            </a>
                          </div>
                          <div class=\"gem-pp-posts-date\">Call +91-9122588799</div>
                        </div>
                      </li>
                      <li class=\"clearfix gem-pp-posts\">
                        <div class=\"gem-pp-posts-text\">
                          <div class=\"gem-pp-posts-item\">
                            <a href=\"#\">Now we are in Faridabad,Now we are in DaudNagar.
                            </a>
                          </div>
                          <div class=\"gem-pp-posts-date\">Call +91-9122588799, +91-9122588799</div>
                        </div>
                      </li>
                      <li class=\"clearfix gem-pp-posts\">
                        <div class=\"gem-pp-posts-text\">
                          <div class=\"gem-pp-posts-item\">
                            <a href=\"\">Now we are in Ranchi, Admission open
                            </a>
                          </div>
                          <div class=\"gem-pp-posts-date\">Call +91-9122588799, +91-9122588799</div>
                        </div>
                      </li>

                    </ul>
                  </div>
                </div>
                <div class=\"col-6 col-lg-6 col-md-6 col-sm-6\">
                  <div class=\"widget\">
                    <h5 class=\"footer-title\">Email Us</h5>
                    <div class=\"textwidget\">
                      <div role=\"form\" class=\"wpcf7\" id=\"wpcf7-f4-o1\" lang=\"en-US\" dir=\"ltr\">

                        <form method=\"post\" class=\"wpcf7-form\" novalidate=\"novalidate\">

                          <div class=\"contact-form-footer\">
                          
                            <p><span class=\"wpcf7-form-control-wrap your-first-name\"><input type=\"text\" name=\"your-first-name\" value=\"\" size=\"40\" class=\"wpcf7-form-control wpcf7-text\" aria-invalid=\"false\" placeholder=\"Your name\"></span></p>
                            <p><span class=\"wpcf7-form-control-wrap your-email_1\"><input type=\"email\" name=\"your-email_1\" value=\"\" size=\"40\" class=\"wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email\" aria-invalid=\"false\" placeholder=\"Your email\"></span></p>
                            <p><span class=\"wpcf7-form-control-wrap your-message\"><textarea name=\"your-message\" cols=\"40\" rows=\"10\" class=\"wpcf7-form-control wpcf7-textarea\" aria-invalid=\"false\" placeholder=\"Your message\"></textarea></span></p>
                            <div><input type=\"submit\" value=\"Send\" class=\"wpcf7-form-control wpcf7-submit\"><span class=\"ajax-loader\"></span></div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4\">
              <div class=\"widget widget_gallery gallery-grid-4\">
                <h5 class=\"footer-title\">Our Gallery</h5>
                <ul class=\"magnific-image\">

                  <li><a class=\"magnific-anchor\"><img src=\"https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80\" alt=\"\"></a></li>
                  <li><a class=\"magnific-anchor\"><img src=\"https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80\" alt=\"\"></a></li>
                  <li><a class=\"magnific-anchor\"><img src=\"https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80\" alt=\"\"></a></li>
                  <li><a class=\"magnific-anchor\"><img src=\"https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80\" alt=\"\"></a></li>
                  <li><a class=\"magnific-anchor\"><img src=\"https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80\" alt=\"\"></a></li>
                  <li><a class=\"magnific-anchor\"><img src=\"https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80\" alt=\"\"></a></li>
                  <li><a class=\"magnific-anchor\"><img src=\"https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80\" alt=\"\"></a></li>
                  <li><a class=\"magnific-anchor\"><img src=\"https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80\" alt=\"\"></a></li>
                  <li><a class=\"magnific-anchor\"><img src=\"https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80\" alt=\"\"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      
            
            </div>

          </div>
        </div>
      </div>
    </footer>
  </div>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
  <script src=\"http://code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
  <script src=\"https://daniellaharel.com/raindrops/js/raindrops.js\"></script>


 <script> jQuery('#waterdrop').raindrops({color:'#1c1f2f', canvasHeight:150, density: 0.1, frequency: 20});
</script>



  
</body>
</html>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


  
.wrapper {
   
    display: flex;
    align-items: center;
    width: 100vw;
    background-color: #fff;
    box-shadow: 0px 10px 10px 3px rgba(0, 0, 0, 0.3);
    
    
    
} 



/*-- Navbar CSS --*/
.nav-menus {
    float: right;
    min-height: 70px;
    display: flex;
    align-items: center;
    padding:0px;
    margin-left:80px;
}
.nav-menus li {
    list-style: none;
    position: relative;
    
}
.nav-menus a {
    color: black;
    position: relative;
    font-size: 17px;
    text-decoration: none;
    padding: 15px 12px;
    z-index: 1;
}
.nav-menus li:hover {
    color: #c79826;
}
.nav-menus a:after {
    content: \"\";
    width: 100%;
    height: 0px;
    background-color: hotpink;
    position: absolute;
    top: 0px;
    left: 0px;
    border-radius: 4px;
    transition: 0.5s;
    z-index: -1;
}
.nav-menus li:hover > a:after{
    height: 100%;
}
.nav-menus i{
    margin-right: 8px;
    font-size: 16px;
}
.toggle-btn{
    float: right;
    height: 90px;
    line-height: 90px;
    color:hotpink ;
    font-size: 26px;
    display: none;
    cursor: pointer;
}
.nav-menus.active{
    display: block;
}
/*-- Sub Menus CSS--*/
.sub-menus ul {
    position: absolute;
    top: 80px;
    background-color: #fff;
    padding: 5px 0px;
    min-width: 150px;
    box-shadow: 0px 0px 8px #636363;
    border-radius: 4px;
    display: none;
}
.sub-menus:hover ul {
    display: block;
}
.sub-menus ul li {
    padding: 5px 0px;
}
.sub-menus ul li a {
    padding: 8px 10px;
    display: block;
    color: black;
}
.sub-menus ul li:hover a {
    color: #fff;
}
.sub-menus ul::before {
    content: \"\";
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 10px solid #fff;
    position: absolute;
    top: -9px;
}
/*-- Responsive Menus Bar CSS--*/
@media (max-width:767px) {
.toggle-btn{
    display: block;
}
.nav-menus {
    position: absolute;
    width: 100%;
    background: white;
    top: 100px;
    right: 0;
    display: none;
    padding: 0px 15px;
    box-sizing: border-box;
}
.nav-menus::before{
    content: \"\";
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 10px solid #4e2890;
    position: absolute;
    top: -10px;
    right: 10px;
}
.sub-menus ul {
    position: static;
}
.sub-menus ul::before {
    display: none;
}
.nav-menus li {
    padding: 0px;
}
.nav-menus li a {
    display: block;
    margin: 15px 0px;
}
}
footer p, footer strong, footer b, footer {
    color: #b0b0b0;
}

.footer-top {
    background: #303030;
    background-size: cover;
    background-position: center;
    padding: 0 0 20px;
    font-family: rubik;
  padding-top:30px;
  
}

.footer-top, .footer-bottom {
    background-color: #1c1f2f;
}

.footer-bottom {
    padding: 15px 0;
    border-top: 1px solid #313646;
    background-color: #181828 !important;
    color: #b0b0b0;
    font-family: rubik;
}
color: #99a9b5;
    padding-top: 15px;
}

.footer-site-info {
    font-size: 92.86%;
}
#footer-navigation, #footer-navigation li a:hover, .custom-footer, .custom-footer li a:hover {
    color: white;
}

#footer-navigation, #footer-navigation li a, .custom-footer, .custom-footer li a {
    color: #99a9b5;
    padding-top: 15px;
}

.footer-bottom ul {
    margin: 0;
}
.inline-inside {
    font-size: 0;
    line-height: 0;
}
.clearfix:after, .clearfix:before {
    content: \"\";
    display: table;
}
#footer-menu li {
    display: inline-block;
    padding: 0 21px;
    position: relative;
    line-height: 1;
}

#footer-navigation, #footer-navigation li a, .custom-footer, .custom-footer li a {
    color: #99a9b5;
    padding-top: 15px;
}

#footer-navigation, #footer-navigation li a, .custom-footer, .custom-footer li a {
    color: #99a9b5;
    padding-top: 15px;
}
#footer-menu li+li:before {
    content: '';
    width: 0;
    height: 100%;
    position: absolute;
    left: -1px;
    top: 0;
    font-size: 0;
    border-left: 1px solid #232234;
    border-right: 1px solid #333146;
}


navigation li a, .custom-footer, .custom-footer li a {
    color: #99a9b5;
    padding-top: 15px;
}

#footer-socials {
    text-align: right;
}

#footer-socials .socials {
    text-align: right;
    margin: 0 -7px;
    display: inline-block;
    vertical-align: middle;
}

a.socials-item {
    display: inline-block;
    vertical-align: top;
    text-align: center;
    -o-transition: all 0.3s;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    margin: 0 5px;
    line-height: 16px;
    padding: 10px;
    border-radius: 50%;
    background-color: #141421;
    border: 1px solid #2e2e4c;
    box-shadow: 3px 9px 16px rgb(0,0,0,0.4), -3px -3px 10px rgba(255,255,255, 0.06), inset 14px 14px 26px rgb(0,0,0,0.3), inset -3px -3px 15px rgba(255,255,255, 0.05);
}

.socials-item i {
    display: inline-block;
    font-weight: normal;
    width: 1em;
    height: 1em;
    line-height: 1;
    font-size: 16px;
    text-align: center;
    vertical-align: top;
    font-feature-settings: normal;
    font-kerning: auto;
    font-language-override: normal;
    font-size-adjust: none;
    font-stretch: normal;
    font-style: normal;
    font-synthesis: weight style;
    font-variant: normal;
    font-weight: normal;
    text-rendering: auto;
}

.facebook {
    color: #4e64b5;
}

.twitter {
    color: #00aced;
}
.instagram {
    color: #9a8f62;
}
.youtube {
    color: #c82929;
}

.telegram {
    color: #2ca5e0;
}


a.socials-item:hover {
    box-shadow: 0 0px 20px rgba(84, 1, 74, 0.7);
    border-color: rgba(255, 6, 224, 0.61);
    background: linear-gradient(to right, rgba(255, 9, 9, 0.12941176470588237), #c000ffb5, rgba(255, 0, 94, 0.14));
}

.footer-bottom a:hover {
    color: white;
}


footer p, footer li {
    font-size: 15px;
    line-height: 22px;
}


.widget {
    margin-bottom: 50px;
}

.footer-title {
    margin-bottom: 40px;
    color: #fff;
    font-weight: 500;
    text-transform: capitalize;
    padding-bottom: 15px;
    font-size: 16px;
    position: relative;
}

.footer-title:after {
    width: 50px;
    background: #fff;
    opacity: 0.2;
    height: 1px;
    content: \"\";
    position: absolute;
    bottom: 0;
    left: 0;
}

.gem-contacts-item {
    padding-top: 10px;
    font-size: 15px;
}

.gem-contacts-item i {
    padding-right: 10px;
}

footer .widget ul {
    list-style: none;
    margin-top: 5px;
}

.posts li {
    border-bottom: 1px solid #393d50;
    padding-bottom: 12px;
    padding-top: 6px;
}

footer p, footer li {
    font-size: 15px;
    line-height: 22px;
}

.gem-pp-posts-date {
    color: #00bcd4;
    font-size: 89.5%;
}

footer p {
    line-height: 24px;
    margin-bottom: 10px;font-size: 15px;
}

.wpcf7-form-control-wrap .wpcf7-form-control {
    padding: 7px!important;
    width: 100%;
}

.wpcf7-form-control-wrap input {
    background: #1c1f2f;
    overflow: hidden;
    border: 1px solid #2e344d;
    background-color: #1c1f2f;
    box-shadow: 10px 10px 36px rgb(0,0,0,0.5), -13px -13px 23px rgba(255,255,255, 0.03);
    border-radius: 5px;
    transition: all 0.3s ease-in-out 0s;
}

.wpcf7-form-control-wrap input:hover {
    background-color: transparent;
    box-shadow: 10px 10px 36px rgb(0,0,0,0.5), -13px -13px 23px rgba(255,255,255, 0.03), inset 14px 14px 70px rgb(0,0,0,0.2), inset -15px -15px 30px rgba(255,255,255, 0.04);
    border-color: rgba(255, 255, 255, 0.2);
    color: white;
}

.wpcf7 .wpcf7-form .contact-form-footer textarea {
    height: 160px;
    width: 100%;
}

.wpcf7-form-control-wrap textarea:hover {
    background-color: transparent;
    box-shadow: 10px 10px 36px rgb(0,0,0,0.5), -13px -13px 23px rgba(255,255,255, 0.03), inset 14px 14px 70px rgb(0,0,0,0.2), inset -15px -15px 30px rgba(255,255,255, 0.04);
    border-color: rgba(255, 255, 255, 0.2);
    color: white;
}

.wpcf7-form-control-wrap textarea {
    background: #1c1f2f;
    overflow: hidden;
    border: 1px solid #2e344d;
    background-color: #1c1f2f;
    box-shadow: 10px 10px 36px rgb(0,0,0,0.5), -13px -13px 23px rgba(255,255,255, 0.03);
    border-radius: 5px;
    transition: all 0.3s ease-in-out 0s;
}

textarea {
    overflow: auto;
    resize: vertical;
}

.wpcf7 .wpcf7-form .contact-form-footer .wpcf7-submit {
    width: 100%;
    padding: 11px;
    margin: 0;
    line-height: 0;
}
.wpcf7-form .contact-form-footer .wpcf7-submit {
    background-color: #394050;
    color: #99a9b5;
    border: none;
    cursor: pointer;
    padding: 15px 40px;
    font-size: 14px;
    font-weight: 400;
    transition: all 0.5s;
    letter-spacing: 2px;
    color: rgba(255,255,255,.5);
    box-shadow: none;
    text-transform: uppercase;
    outline: none !important;
    background-color: #1c1f2f;
    border-radius: 5px;
    min-width: 140px;
    /* box-shadow: 10px 10px 36px rgb(0,0,0,0.5), -13px -13px 23px rgba(255,255,255, 0.03), inset 14px 14px 70px rgb(0,0,0,0.2), inset -15px -15px 30px rgba(255,255,255, 0.04); */
    box-shadow: 3px 9px 16px rgb(0,0,0,0.4), -3px -3px 10px rgba(255,255,255, 0.06), inset 14px 14px 26px rgb(0,0,0,0.3), inset -3px -3px 15px rgba(255,255,255, 0.05);
    border-width: 1px 0px 0px 1px;
    border-style: solid;
    border-color: #2e344d;
    transition: all 0.3s ease-in-out 0s;
}

.wpcf7-form input[type=submit] {
    height: 40px;
    line-height: 21px;
    padding: 10px 40px;
    font-size: 14px;
}

.posts li a {
    color: #99a9b5;
}

.wpcf7-form .contact-form-footer .wpcf7-submit:hover {
    box-shadow: 0 0px 20px rgba(84, 1, 74, 0.7);
    border-color: rgba(255, 6, 224, 0.61);
    background: linear-gradient(to right, rgba(255, 9, 9, 0.12941176470588237), #c000ffb5, rgba(255, 0, 94, 0.14));
    color: white;
}

img {
    border-style: none;
    height: auto;
    max-width: 100%;
    vertical-align: middle;
}
.widget_gallery a {
    display: inline-block;
}
footer .widget ul {
    list-style: none;
    margin-top: 5px;
}
.widget_gallery ul {
    padding-left: 0;
    display: table;
}

.widget_gallery li {
    display: inline-block;
    width: 33.33%;
    float: left;
    transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -o-transition: all 0.5s;
    padding: 2px;
}

.widget_gallery.gallery-grid-4 li {
    width: 30%;
}


#waterdrop {
    height: 30px;
}

#waterdrop canvas {
    bottom: -70px !important;
}

.footer-site-info
{
  padding-top: 10px;
}


</style>
  <!-- Toggle jQuery for Small Devices -->
<script type=\"text/javascript\">
    \$(\".toggle-btn\").click(function(){
        \$(this).toggleClass(\"fa-times\");
        \$(\".nav-menus\").toggleClass(\"active\");
    });
</script>
", "base.html.twig", "/opt/lampp/htdocs/sitemariage2/templates/base.html.twig");
    }
}
