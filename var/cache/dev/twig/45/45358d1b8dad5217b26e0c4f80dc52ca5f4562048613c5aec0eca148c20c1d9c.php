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

/* employee/modifteam.html.twig */
class __TwigTemplate_5626b38ca44028a2d4643305af06d725e6ee29b3d8e55807e52f487fcafb8ce8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'job_body' => [$this, 'block_job_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Employee/layaout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/modifteam.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/modifteam.html.twig"));

        $this->parent = $this->loadTemplate("Employee/layaout.html.twig", "employee/modifteam.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        $this->displayParentBlock("title", $context, $blocks);
        echo " -Modifier team
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_job_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "job_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "job_body"));

        // line 6
        echo "    <!-- Main Content -->
    <div class=\"main-content\">
      <section class=\"section\">
        <div class=\"section-header\">
          <h1>Form Validation</h1>
          <div class=\"section-header-breadcrumb\">
            <div class=\"breadcrumb-item active\"><a href=\"#\">Dashboard</a></div>
            <div class=\"breadcrumb-item\"><a href=\"#\">Forms</a></div>
            <div class=\"breadcrumb-item\">Form Validation</div>
          </div>
        </div>
        <div class=\"section-body\">
          <div class=\"row\">
            
            <div class=\"col-12 col-md-6 col-lg-6\">
              <div class=\"card\">
                <form class=\"needs-validation\" novalidate method=\"Post\" action=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modift");
        echo "\">
                  <div class=\"card-header\">
                    <h4>JavaScript Validation</h4>
                  </div>
                  <div class=\"card-body\">
                    
                    <div class=\"form-group row\">
                      <label class=\"col-sm-3 col-form-label\">id</label>
                      <div class=\"col-sm-9\">
                        <input type=\"text\" class=\"form-control\" name=\"id\"  required value=";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "html", null, true);
        echo " required>
                        <div class=\"invalid-feedback\">
                          id is invalid. 
                        </div>
                      </div>
                    </div>
                      <div class=\"form-group row\">
                      <label class=\"col-sm-3 col-form-label\">name</label>
                      <div class=\"col-sm-9\">
                        <input type=\"text\" class=\"form-control\" name=\"name\"  required value=";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), "html", null, true);
        echo " required>
                        <div class=\"invalid-feedback\">
                          name is invalid. 
                        </div>
                      </div>
                    </div>
                   
                   
                   
                
                  </div>
                  <div class=\"card-footer text-right\">
                    <button class=\"btn btn-primary\" name=\"Submit\">Submit</button>
                  </div>
                </form>
              </div>
              
    </div>
  </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "employee/modifteam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 40,  121 => 31,  109 => 22,  91 => 6,  81 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Employee/layaout.html.twig\" %}
{% block title %}
{{parent()}} -Modifier team
{% endblock %}
{% block job_body %}
    <!-- Main Content -->
    <div class=\"main-content\">
      <section class=\"section\">
        <div class=\"section-header\">
          <h1>Form Validation</h1>
          <div class=\"section-header-breadcrumb\">
            <div class=\"breadcrumb-item active\"><a href=\"#\">Dashboard</a></div>
            <div class=\"breadcrumb-item\"><a href=\"#\">Forms</a></div>
            <div class=\"breadcrumb-item\">Form Validation</div>
          </div>
        </div>
        <div class=\"section-body\">
          <div class=\"row\">
            
            <div class=\"col-12 col-md-6 col-lg-6\">
              <div class=\"card\">
                <form class=\"needs-validation\" novalidate method=\"Post\" action=\"{{ path('modift') }}\">
                  <div class=\"card-header\">
                    <h4>JavaScript Validation</h4>
                  </div>
                  <div class=\"card-body\">
                    
                    <div class=\"form-group row\">
                      <label class=\"col-sm-3 col-form-label\">id</label>
                      <div class=\"col-sm-9\">
                        <input type=\"text\" class=\"form-control\" name=\"id\"  required value={{team.id}} required>
                        <div class=\"invalid-feedback\">
                          id is invalid. 
                        </div>
                      </div>
                    </div>
                      <div class=\"form-group row\">
                      <label class=\"col-sm-3 col-form-label\">name</label>
                      <div class=\"col-sm-9\">
                        <input type=\"text\" class=\"form-control\" name=\"name\"  required value={{team.name}} required>
                        <div class=\"invalid-feedback\">
                          name is invalid. 
                        </div>
                      </div>
                    </div>
                   
                   
                   
                
                  </div>
                  <div class=\"card-footer text-right\">
                    <button class=\"btn btn-primary\" name=\"Submit\">Submit</button>
                  </div>
                </form>
              </div>
              
    </div>
  </div>
    </div>
{% endblock %}", "employee/modifteam.html.twig", "C:\\laragon\\www\\Symfony4-projetEntreprise\\templates\\employee\\modifteam.html.twig");
    }
}
