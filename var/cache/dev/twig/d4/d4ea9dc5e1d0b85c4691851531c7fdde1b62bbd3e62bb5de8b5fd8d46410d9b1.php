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

/* error/index.html.twig */
class __TwigTemplate_32c618e9259b6efef8f8e8905c46b4d86b813ceb0b4fb19c7c05db02aad99198 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "error/index.html.twig", 1);
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

        echo "Hello ErrorController!";
        
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Error while sending mail</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body {
            transition: 1s;
            background-color: #E9ECEF;
        }

        .anchor {
            justify-content: center;
            align-items: center;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            position: relative;
            /* margin-bottom: 70px; */
        }

        .anchor a {
            position: relative;
            top: 20px;
            text-decoration: none;
            text-transform: uppercase;
            font-family: sans-serif;
            padding: 10px;
            color: white;
            font-size: large;
            font: bold;
            margin-bottom: 10px;
            margin-right: 10px;
            margin-left: 10px;
            border: transparent 2px solid;
            border-radius: 10px;
            box-sizing: border-box;
            transition: 0.7s;
            opacity: 0.5;
        }


        .anchor a:hover {
            transition: 0.7s;
            opacity: 0.8;
        }

        .anchor a:nth-child(1) {
            background-color: rgb(18, 165, 18);
        }

        .anchor a:nth-child(2) {
            background-color: rgb(243, 74, 74);
        }

        .anchor a:nth-child(3) {
            background-color: rgb(49, 165, 238);
        }

        .h1 {
            margin-top: 20px;
            font-size: 85px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            justify-content: center;
            align-items: center;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            display: block;
            position: relative;
        }

        .h1 h1 {
            position: relative;
            top: 150px;
            text-decoration: none;
            text-transform: uppercase;
            font-family: sans-serif;
            padding: 10px;
            color: white;
            font-size: 85px;
            font: bold;
            margin: 10px;
            /* margin-bottom: 100px; */
            border: transparent 2px solid;
            border-radius: 10px;
            box-sizing: border-box;
            transition: 0.7s;
            opacity: 0.5;
        }

        .thankyou #okay {
            color: red;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-style: italic;
            font-size: 28px;
            justify-content: center;
            align-items: center;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            position: relative;
            margin-bottom: 20px;
        }

        .thankyou #namedrf {
            text-transform: capitalize;
            margin: 0 15px;
            position: relative;
            color: #000000;
            font-size: 1.50rem;
            text-align: center;
            font-weight: 300;
            box-sizing: border-box;
            margin-bottom: 0.25rem;
            display: block;
            line-height: 1.5;
            margin-top: 30px;
            font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, 
            \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", 
            \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\" 
        }

        .errorways {
            position: relative;
            color: #6c757d;
            font-size: 20px;
            font-weight: 300;
            box-sizing: border-box;
            text-align: center;
            display: block;
            /* line-height: 1.5; */
            font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, 
            \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", 
            \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\" 
        }

        .thankyou .errorway2 {
            margin-top: 50px;
        }

        #youtubecontact {
            text-decoration: none;
            color: rgb(0, 162, 255);
        }

        #youtubecontact:hover {
            text-decoration: underline;
            color: rgb(0, 162, 255);
        }

        .contactinfo .box {
            position: relative;
            padding: 20px 0;
            display: flex;
        }

        .contactinfo .box {
            min-width: 60px;
            height: 60px;
        }

        @media (max-width:761px) {
            .h1 {
                display: none;
            }

            #okay {
                margin-top: 10px;
            }

            .errorways {
                font-size: 15px;
            }

            .thankyou #okay {
                font-size: 25px;
            }
        }

        @media (max-width:576px) {
            .thankyou #okay {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>
    <section>
        <div class=\"thankyou\">
            <h1 class=\"h1\">
                Error While Sending Message
            </h1>

            <p id=\"okay\">
                Error while Sending Message Please try again later
            </p>

            <div class=\"errorways\">
                <h2 id=\"tryanounce\" style=\"font-weight: 400; color: black;\">
                    You can Try these things:-
                </h2>
                <div class=\"errorways2\">
                    <p>
                        Checking Your Connection To The Internet
                    </p>
                
                </div>
            </div>
            <p id=\"namedrf\">Your Company or Website name</p>

            <div class=\"anchor\" style=\"margin-bottom: 50px;\">
                
                <a href=\"";
        // line 229
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact Us</a>
            </div>

        </div>
    </section>
</body>

</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "error/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 229,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ErrorController!{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Error while sending mail</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body {
            transition: 1s;
            background-color: #E9ECEF;
        }

        .anchor {
            justify-content: center;
            align-items: center;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            position: relative;
            /* margin-bottom: 70px; */
        }

        .anchor a {
            position: relative;
            top: 20px;
            text-decoration: none;
            text-transform: uppercase;
            font-family: sans-serif;
            padding: 10px;
            color: white;
            font-size: large;
            font: bold;
            margin-bottom: 10px;
            margin-right: 10px;
            margin-left: 10px;
            border: transparent 2px solid;
            border-radius: 10px;
            box-sizing: border-box;
            transition: 0.7s;
            opacity: 0.5;
        }


        .anchor a:hover {
            transition: 0.7s;
            opacity: 0.8;
        }

        .anchor a:nth-child(1) {
            background-color: rgb(18, 165, 18);
        }

        .anchor a:nth-child(2) {
            background-color: rgb(243, 74, 74);
        }

        .anchor a:nth-child(3) {
            background-color: rgb(49, 165, 238);
        }

        .h1 {
            margin-top: 20px;
            font-size: 85px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            justify-content: center;
            align-items: center;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            display: block;
            position: relative;
        }

        .h1 h1 {
            position: relative;
            top: 150px;
            text-decoration: none;
            text-transform: uppercase;
            font-family: sans-serif;
            padding: 10px;
            color: white;
            font-size: 85px;
            font: bold;
            margin: 10px;
            /* margin-bottom: 100px; */
            border: transparent 2px solid;
            border-radius: 10px;
            box-sizing: border-box;
            transition: 0.7s;
            opacity: 0.5;
        }

        .thankyou #okay {
            color: red;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-style: italic;
            font-size: 28px;
            justify-content: center;
            align-items: center;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            position: relative;
            margin-bottom: 20px;
        }

        .thankyou #namedrf {
            text-transform: capitalize;
            margin: 0 15px;
            position: relative;
            color: #000000;
            font-size: 1.50rem;
            text-align: center;
            font-weight: 300;
            box-sizing: border-box;
            margin-bottom: 0.25rem;
            display: block;
            line-height: 1.5;
            margin-top: 30px;
            font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, 
            \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", 
            \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\" 
        }

        .errorways {
            position: relative;
            color: #6c757d;
            font-size: 20px;
            font-weight: 300;
            box-sizing: border-box;
            text-align: center;
            display: block;
            /* line-height: 1.5; */
            font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, 
            \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", 
            \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\" 
        }

        .thankyou .errorway2 {
            margin-top: 50px;
        }

        #youtubecontact {
            text-decoration: none;
            color: rgb(0, 162, 255);
        }

        #youtubecontact:hover {
            text-decoration: underline;
            color: rgb(0, 162, 255);
        }

        .contactinfo .box {
            position: relative;
            padding: 20px 0;
            display: flex;
        }

        .contactinfo .box {
            min-width: 60px;
            height: 60px;
        }

        @media (max-width:761px) {
            .h1 {
                display: none;
            }

            #okay {
                margin-top: 10px;
            }

            .errorways {
                font-size: 15px;
            }

            .thankyou #okay {
                font-size: 25px;
            }
        }

        @media (max-width:576px) {
            .thankyou #okay {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>
    <section>
        <div class=\"thankyou\">
            <h1 class=\"h1\">
                Error While Sending Message
            </h1>

            <p id=\"okay\">
                Error while Sending Message Please try again later
            </p>

            <div class=\"errorways\">
                <h2 id=\"tryanounce\" style=\"font-weight: 400; color: black;\">
                    You can Try these things:-
                </h2>
                <div class=\"errorways2\">
                    <p>
                        Checking Your Connection To The Internet
                    </p>
                
                </div>
            </div>
            <p id=\"namedrf\">Your Company or Website name</p>

            <div class=\"anchor\" style=\"margin-bottom: 50px;\">
                
                <a href=\"{{ path('contact')}}\">Contact Us</a>
            </div>

        </div>
    </section>
</body>

</html>
{% endblock %}
", "error/index.html.twig", "/opt/lampp/htdocs/sitemariage/templates/error/index.html.twig");
    }
}
