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
class __TwigTemplate_4857f9ed061f4acd4dc9649603a6c3abf3fb390b67cf88b1e38d5af4d515ebdc extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
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
<html lang=\"en\">

<!-- Mirrored from radixtouch.in/templates/snkthemes/grexa/source/light/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Dec 2020 17:13:31 GMT -->
<head>
  <meta charset=\"UTF-8\">
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no\" name=\"viewport\">
 

<title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "<body>

 <div class=\"loader\"></div>
  <h1 class=\"text-center\"></h1>
  ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo " 
  <!-- General JS Scripts -->
  <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.min.js"), "html", null, true);
        echo "\"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\"></script>
  
   <!-- JS Libraies -->
   <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bundles/echart/echarts.js"), "html", null, true);
        echo "\"></script>

   <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bundles/chartjs/chart.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bundles/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Page Specific JS File -->
  <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/page/index.js"), "html", null, true);
        echo "\"></script>
</body>
    

<!-- Mirrored from radixtouch.in/templates/snkthemes/grexa/source/light/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Dec 2020 17:13:31 GMT -->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Employees ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "
  <!-- General CSS Files -->
  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app.min.css"), "html", null, true);
        echo "\">
  <!-- Template CSS -->
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/components.css"), "html", null, true);
        echo "\">
   <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bundles/bootstrap-social/bootstrap-social.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bundles/flag-icon-css/css/flag-icon.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app.min.css"), "html", null, true);
        echo "\">
 <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css"), "html", null, true);
        echo "\">
  <!-- Custom style CSS -->
 <link rel='shortcut icon' type='image/x-icon' href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.ico"), "html", null, true);
        echo "\"/>
</head>
   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "
  ";
        
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
        return array (  204 => 31,  194 => 30,  181 => 23,  176 => 21,  172 => 20,  168 => 19,  164 => 18,  160 => 17,  156 => 16,  151 => 14,  147 => 12,  137 => 11,  118 => 10,  102 => 47,  97 => 45,  93 => 44,  88 => 42,  82 => 39,  75 => 35,  71 => 33,  69 => 30,  63 => 26,  61 => 11,  57 => 10,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from radixtouch.in/templates/snkthemes/grexa/source/light/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Dec 2020 17:13:31 GMT -->
<head>
  <meta charset=\"UTF-8\">
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no\" name=\"viewport\">
 

<title>{% block title %} Employees {% endblock %}</title>
{% block stylesheets %}

  <!-- General CSS Files -->
  <link rel=\"stylesheet\" href=\"{{asset('assets/css/app.min.css')}}\">
  <!-- Template CSS -->
  <link rel=\"stylesheet\" href=\"{{asset('assets/css/style.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('assets/css/components.css')}}\">
   <link rel=\"stylesheet\" href=\"{{asset('assets/bundles/bootstrap-social/bootstrap-social.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('assets/bundles/flag-icon-css/css/flag-icon.min.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('assets/css/app.min.css')}}\">
 <link rel=\"stylesheet\" href=\"{{asset('assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}\">
  <!-- Custom style CSS -->
 <link rel='shortcut icon' type='image/x-icon' href=\"{{asset('assets/img/favicon.ico')}}\"/>
</head>
   {% endblock%}
<body>

 <div class=\"loader\"></div>
  <h1 class=\"text-center\"></h1>
  {% block body %}

  {% endblock %}
 
  <!-- General JS Scripts -->
  <script src=\"{{asset('assets/js/app.min.js')}}\"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src=\"{{asset('assets/js/scripts.js')}}\"></script>
  
   <!-- JS Libraies -->
   <script src=\"{{asset('assets/bundles/echart/echarts.js')}}\"></script>

   <script src=\"{{asset('assets/bundles/chartjs/chart.min.js')}}\"></script>
   <script src=\"{{asset('assets/bundles/apexcharts/apexcharts.min.js')}}\"></script>
    <!-- Page Specific JS File -->
  <script src=\"{{asset('assets/js/page/index.js')}}\"></script>
</body>
    

<!-- Mirrored from radixtouch.in/templates/snkthemes/grexa/source/light/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Dec 2020 17:13:31 GMT -->
</html>", "base.html.twig", "C:\\laragon\\www\\Symfony4-projetEntreprise\\templates\\base.html.twig");
    }
}
