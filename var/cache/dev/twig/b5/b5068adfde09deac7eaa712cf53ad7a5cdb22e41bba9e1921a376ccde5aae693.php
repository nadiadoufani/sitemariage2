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

/* thankyou/index.html.twig */
class __TwigTemplate_4392a52927aaf58288f0ade8f25c27806e1cc32d11b88dd6f0ab08de24fde758 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "thankyou/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "thankyou/index.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
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

        echo "Hello ThankyouController!";
        
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
    <title>Thankyou For Contacting</title>
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
            margin-bottom: 20px;
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
            margin-top: 40px;
            font-size: 85px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            justify-content: center;
            align-items: center;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            position: relative;
        }

        .h1 h1 {
            display: block;
            position: relative;
            top: 150px;
            text-decoration: none;
            text-transform: uppercase;
            font-family: sans-serif;
            padding: 10px;
            color: white;
            font-size: large;
            font: bold;
            margin: 10px;
            border: transparent 2px solid;
            border-radius: 10px;
            box-sizing: border-box;
            transition: 0.7s;
            opacity: 0.5;
        }

        .thankyou #okay {
            display: block;
            color: green;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-style: italic;
            font-size: 30px;
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
            color: #6c757d;
            font-size: 1.50rem;
            text-align: center;
            font-weight: 300;
            box-sizing: border-box;
            margin-bottom: 0.25rem;
            display: block;
            line-height: 1.5;
            font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", 
            Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", 
            \"Segoe UI Symbol\", \"Noto Color Emoji\" 
        }

        .thankyou #namedrf2 {
            text-transform: capitalize;
            margin-left: 15px;
            margin-right: 15px;
            position: relative;
            color: #000000;
            font-size: 1.50rem;
            text-align: center;
            font-weight: 300;
            box-sizing: border-box;
            margin-bottom: 8.25rem;
            display: block;
            line-height: 1.5;
            font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", 
            Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", 
            \"Segoe UI Symbol\", \"Noto Color Emoji\" 
        }


        @media (max-width:761px) {
            .h1 {
                font-size: 50px;
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

        @media (max-width:284px) {
            .anchor {
                margin-bottom: 30px;
            }

            .thankyou .h1 {
                display: none;
            }

            .thankyou #okay {
                margin-top: 30px;
            }

        }
    </style>
</head>

<body>
    <section>
        <div class=\"thankyou\">
            <h1 class=\"h1\">
                Thank You for Contacting Us
            </h1>

            <p id=\"okay\">
                Your message has been sent successfully!
            </p>

            <p id=\"namedrf\">Your Company or Website name</p>

            <div class=\"anchor\">
                <a href=\"#\">Watch Videos</a>
                <a href=\"#\">Back To Home</a>
                <a href=\"#\" target=\"_blank\"
                    rel=\"noopener noreferrer\">Watch On youtube</a>
            </div>
            <p id=\"namedrf2\">We will reply you to your entered Email</p>
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
        return "thankyou/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  93 => 6,  83 => 5,  64 => 3,  54 => 5,  51 => 4,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block title %}Hello ThankyouController!{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Thankyou For Contacting</title>
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
            margin-bottom: 20px;
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
            margin-top: 40px;
            font-size: 85px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            justify-content: center;
            align-items: center;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            position: relative;
        }

        .h1 h1 {
            display: block;
            position: relative;
            top: 150px;
            text-decoration: none;
            text-transform: uppercase;
            font-family: sans-serif;
            padding: 10px;
            color: white;
            font-size: large;
            font: bold;
            margin: 10px;
            border: transparent 2px solid;
            border-radius: 10px;
            box-sizing: border-box;
            transition: 0.7s;
            opacity: 0.5;
        }

        .thankyou #okay {
            display: block;
            color: green;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-style: italic;
            font-size: 30px;
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
            color: #6c757d;
            font-size: 1.50rem;
            text-align: center;
            font-weight: 300;
            box-sizing: border-box;
            margin-bottom: 0.25rem;
            display: block;
            line-height: 1.5;
            font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", 
            Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", 
            \"Segoe UI Symbol\", \"Noto Color Emoji\" 
        }

        .thankyou #namedrf2 {
            text-transform: capitalize;
            margin-left: 15px;
            margin-right: 15px;
            position: relative;
            color: #000000;
            font-size: 1.50rem;
            text-align: center;
            font-weight: 300;
            box-sizing: border-box;
            margin-bottom: 8.25rem;
            display: block;
            line-height: 1.5;
            font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", 
            Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", 
            \"Segoe UI Symbol\", \"Noto Color Emoji\" 
        }


        @media (max-width:761px) {
            .h1 {
                font-size: 50px;
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

        @media (max-width:284px) {
            .anchor {
                margin-bottom: 30px;
            }

            .thankyou .h1 {
                display: none;
            }

            .thankyou #okay {
                margin-top: 30px;
            }

        }
    </style>
</head>

<body>
    <section>
        <div class=\"thankyou\">
            <h1 class=\"h1\">
                Thank You for Contacting Us
            </h1>

            <p id=\"okay\">
                Your message has been sent successfully!
            </p>

            <p id=\"namedrf\">Your Company or Website name</p>

            <div class=\"anchor\">
                <a href=\"#\">Watch Videos</a>
                <a href=\"#\">Back To Home</a>
                <a href=\"#\" target=\"_blank\"
                    rel=\"noopener noreferrer\">Watch On youtube</a>
            </div>
            <p id=\"namedrf2\">We will reply you to your entered Email</p>
        </div>
    </section>
</body>

</html>
{% endblock %}
", "thankyou/index.html.twig", "/opt/lampp/htdocs/sitemariage/templates/thankyou/index.html.twig");
    }
}
