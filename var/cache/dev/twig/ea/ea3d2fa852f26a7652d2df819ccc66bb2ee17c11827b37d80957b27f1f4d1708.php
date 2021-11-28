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

/* contact/index.html.twig */
class __TwigTemplate_a3cd8a04ec2d3f477c9821190eccaeb5fb71bdd0c26019aded0087ac8e0786fc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

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


<div class=\"wrapper\">
  <h2>Contact us</h2>
  <div id=\"error_message\"></div>
  <form id=\"myform\" onsubmit=\"return validate();\">
    <div class=\"input_field\">
        <input type=\"text\" placeholder=\"Name\" id=\"name\">
    </div>
    <div class=\"input_field\">
        <input type=\"text\" placeholder=\"Subject\" id=\"subject\">
    </div>
    <div class=\"input_field\">
        <input type=\"text\" placeholder=\"Phone\" id=\"phone\">
    </div>
    <div class=\"input_field\">
        <input type=\"text\" placeholder=\"Email\" id=\"email\">
    </div>
    <div class=\"input_field\">
        <textarea placeholder=\"Message\" id=\"message\"></textarea>
    </div>
    <div class=\"btn\">
        <input type=\"submit\">
    </div>
  </form>
</div>

<script>
function validate(){
  var name = document.getElementById(\"name\").value;
  var subject = document.getElementById(\"subject\").value;
  var phone = document.getElementById(\"phone\").value;
  var email = document.getElementById(\"email\").value;
  var message = document.getElementById(\"message\").value;
  var error_message = document.getElementById(\"error_message\");
  
  error_message.style.padding = \"10px\";
  
  var text;
  if(name.length < 5){
    text = \"Please Enter valid Name\";
    error_message.innerHTML = text;
    return false;
  }
  if(subject.length < 10){
    text = \"Please Enter Correct Subject\";
    error_message.innerHTML = text;
    return false;
  }
  if(isNaN(phone) || phone.length != 10){
    text = \"Please Enter valid Phone Number\";
    error_message.innerHTML = text;
    return false;
  }
  if(email.indexOf(\"@\") == -1 || email.length < 6){
    text = \"Please Enter valid Email\";
    error_message.innerHTML = text;
    return false;
  }
  if(message.length <= 14){
    text = \"Please Enter More Than 140 Characters\";
    error_message.innerHTML = text;
    return false;
  }
  alert(\"Form Submitted Successfully!\");
  return true;
}

</script>
<style>
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: 'Josefin Sans', sans-serif;
  background-color: #fe8b8e;
}


.wrapper{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  max-width: 350px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 5px;
  box-shadow: 4px 4px 2px rgba(254,236,164,1); 
}

.wrapper h2{
  text-align: center;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #332902;
}

.wrapper .input_field{
  margin-bottom: 10px;
}

.wrapper .input_field input[type=\"text\"],
.wrapper textarea{
  border: 1px solid #e0e0e0;
  width: 100%;
  padding: 10px;
}

.wrapper textarea{
  resize: none;
  height: 80px;
}

.wrapper .btn input[type=\"submit\"]{
  border: 0px;
  margin-top: 15px;
  padding: 10px;
  text-align: center;
  width: 100%;
  background: #fece0c;
  color: #332902;
  text-transform: uppercase;
  letter-spacing: 5px;
  font-weight: bold;
  border-radius: 25px;
  cursor: pointer;
}

#error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
}
</style>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  92 => 6,  82 => 5,  64 => 3,  54 => 5,  51 => 4,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block title %}{% endblock %}

{% block body %}



<div class=\"wrapper\">
  <h2>Contact us</h2>
  <div id=\"error_message\"></div>
  <form id=\"myform\" onsubmit=\"return validate();\">
    <div class=\"input_field\">
        <input type=\"text\" placeholder=\"Name\" id=\"name\">
    </div>
    <div class=\"input_field\">
        <input type=\"text\" placeholder=\"Subject\" id=\"subject\">
    </div>
    <div class=\"input_field\">
        <input type=\"text\" placeholder=\"Phone\" id=\"phone\">
    </div>
    <div class=\"input_field\">
        <input type=\"text\" placeholder=\"Email\" id=\"email\">
    </div>
    <div class=\"input_field\">
        <textarea placeholder=\"Message\" id=\"message\"></textarea>
    </div>
    <div class=\"btn\">
        <input type=\"submit\">
    </div>
  </form>
</div>

<script>
function validate(){
  var name = document.getElementById(\"name\").value;
  var subject = document.getElementById(\"subject\").value;
  var phone = document.getElementById(\"phone\").value;
  var email = document.getElementById(\"email\").value;
  var message = document.getElementById(\"message\").value;
  var error_message = document.getElementById(\"error_message\");
  
  error_message.style.padding = \"10px\";
  
  var text;
  if(name.length < 5){
    text = \"Please Enter valid Name\";
    error_message.innerHTML = text;
    return false;
  }
  if(subject.length < 10){
    text = \"Please Enter Correct Subject\";
    error_message.innerHTML = text;
    return false;
  }
  if(isNaN(phone) || phone.length != 10){
    text = \"Please Enter valid Phone Number\";
    error_message.innerHTML = text;
    return false;
  }
  if(email.indexOf(\"@\") == -1 || email.length < 6){
    text = \"Please Enter valid Email\";
    error_message.innerHTML = text;
    return false;
  }
  if(message.length <= 14){
    text = \"Please Enter More Than 140 Characters\";
    error_message.innerHTML = text;
    return false;
  }
  alert(\"Form Submitted Successfully!\");
  return true;
}

</script>
<style>
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: 'Josefin Sans', sans-serif;
  background-color: #fe8b8e;
}


.wrapper{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  max-width: 350px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 5px;
  box-shadow: 4px 4px 2px rgba(254,236,164,1); 
}

.wrapper h2{
  text-align: center;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #332902;
}

.wrapper .input_field{
  margin-bottom: 10px;
}

.wrapper .input_field input[type=\"text\"],
.wrapper textarea{
  border: 1px solid #e0e0e0;
  width: 100%;
  padding: 10px;
}

.wrapper textarea{
  resize: none;
  height: 80px;
}

.wrapper .btn input[type=\"submit\"]{
  border: 0px;
  margin-top: 15px;
  padding: 10px;
  text-align: center;
  width: 100%;
  background: #fece0c;
  color: #332902;
  text-transform: uppercase;
  letter-spacing: 5px;
  font-weight: bold;
  border-radius: 25px;
  cursor: pointer;
}

#error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
}
</style>


{% endblock %}", "contact/index.html.twig", "/opt/lampp/htdocs/sitemariage/templates/contact/index.html.twig");
    }
}
