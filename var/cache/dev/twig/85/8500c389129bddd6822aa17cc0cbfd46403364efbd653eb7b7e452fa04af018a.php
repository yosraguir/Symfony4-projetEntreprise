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

/* employee/ajouter.html.twig */
class __TwigTemplate_1651d3bb6dc34269edac7012fb9ced3b00216c78a402e29950bd8b1481ed497e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/ajouter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/ajouter.html.twig"));

        $this->parent = $this->loadTemplate("Employee/layaout.html.twig", "employee/ajouter.html.twig", 1);
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
        echo " -Ajouter Emlpoyee
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
\t<!-- Bootstrap CSS -->
\t
    <div class=\"main-content\">
      <section class=\"section\">
        <div class=\"section-header\">
          <h1>Form Employee</h1>
          <div class=\"section-header-breadcrumb\">
            <div class=\"breadcrumb-item active\"><a href=\"#\">Formulaire</a></div>
            <div class=\"breadcrumb-item\"><a href=\"#\">Employee</a></div>
            <div class=\"breadcrumb-item\">Form Validation</div>
          </div>
        </div>
        <div class=\"section-body\">
          <div class=\"row\">
            
            <div class=\"col-12 col-md-6 col-lg-6\">
              <div class=\"card\">
                <form class=\"needs-validation\" novalidate method=\"Post\" >
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
        echo "
                  <div class=\"card-header\">
                    <h4>Ajouter Employee</h4>
                  </div>
                  <div class=\"card-body\">

                    <div class=\"form-group row\">
                   
                      <div class=\"col-sm-9\">
                     ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "cin", [], "any", false, false, false, 34), 'row', ["attr" => ["placeholder" => "Cin..."]]);
        echo "
                       <div class=\"invalid-feedback\">
                          please enter your name?
                        </div>
                      </div>
                    </div>

                     <div class=\"form-group mb-0 row\">
                   
                      <div class=\"col-sm-9\">
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "age", [], "any", false, false, false, 44), 'row', ["attr" => ["placeholder" => "Age..."]]);
        echo "
                        <div class=\"invalid-feedback\">
                          please provide message.
                        </div>
                      </div>
                    </div>
                        <div class=\"form-group mb-0 row\">
                    
                      <div class=\"col-sm-9\">
                          ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "team", [], "any", false, false, false, 53), 'row');
        echo "
                        <div class=\"invalid-feedback\">
                          please provide message.
                        </div>
                      </div>
                    </div>
                   
                     <div class=\"form-group mb-0 row\">
                   
                      <div class=\"col-sm-9\">
                          ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "role", [], "any", false, false, false, 63), 'row', ["attr" => ["placeholder" => "role..."]]);
        echo "
                        <div class=\"invalid-feedback\">
                          please provide message.
                        </div>
                      </div>
                    </div>
                   
            
                    <div class=\"form-group row\">
                  <div class=\"col-sm-9\">
                   ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "name", [], "any", false, false, false, 73), 'row', ["attr" => ["placeholder" => "Name..."]]);
        echo "
                        <div class=\"invalid-feedback\">
                          name is invalid. 
                        </div>
                      </div>
                    </div>
                   
                <div class=\"form-group mb-0 row\">

                      <div class=\"col-sm-9\">
                           ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "salary", [], "any", false, false, false, 83), 'row', ["attr" => ["placeholder" => "Salary..."]]);
        echo "
                        <div class=\"invalid-feedback\">
                          please provide message.
                        </div>
                      </div>
                    </div>
                     <div class=\"form-group row\">
                   
                      <div class=\"col-sm-9\">
                      ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "position", [], "any", false, false, false, 92), 'row', ["attr" => ["placeholder" => "Position..."]]);
        echo "
                        <div class=\"valid-feedback\">
                          done.
                        </div>
                      </div>
                    </div>
                  <div class=\"card-footer text-right\">
                    <button type=\"submit\" class=\"btn btn-primary\">Creer</button>
                  </div>
                
                </form>
                  ";
        // line 103
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'form_end');
        echo "
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
        return "employee/ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 103,  200 => 92,  188 => 83,  175 => 73,  162 => 63,  149 => 53,  137 => 44,  124 => 34,  112 => 25,  91 => 6,  81 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Employee/layaout.html.twig\" %}
{% block title %}
{{parent()}} -Ajouter Emlpoyee
{% endblock %}
{% block job_body %}
    <!-- Main Content -->
\t<!-- Bootstrap CSS -->
\t
    <div class=\"main-content\">
      <section class=\"section\">
        <div class=\"section-header\">
          <h1>Form Employee</h1>
          <div class=\"section-header-breadcrumb\">
            <div class=\"breadcrumb-item active\"><a href=\"#\">Formulaire</a></div>
            <div class=\"breadcrumb-item\"><a href=\"#\">Employee</a></div>
            <div class=\"breadcrumb-item\">Form Validation</div>
          </div>
        </div>
        <div class=\"section-body\">
          <div class=\"row\">
            
            <div class=\"col-12 col-md-6 col-lg-6\">
              <div class=\"card\">
                <form class=\"needs-validation\" novalidate method=\"Post\" >
                {{form_start(form)}}
                  <div class=\"card-header\">
                    <h4>Ajouter Employee</h4>
                  </div>
                  <div class=\"card-body\">

                    <div class=\"form-group row\">
                   
                      <div class=\"col-sm-9\">
                     {{ form_row(form.cin, { 'attr': { 'placeholder': 'Cin...' } } ) }}
                       <div class=\"invalid-feedback\">
                          please enter your name?
                        </div>
                      </div>
                    </div>

                     <div class=\"form-group mb-0 row\">
                   
                      <div class=\"col-sm-9\">
                        {{ form_row(form.age, { 'attr': { 'placeholder': 'Age...' } } ) }}
                        <div class=\"invalid-feedback\">
                          please provide message.
                        </div>
                      </div>
                    </div>
                        <div class=\"form-group mb-0 row\">
                    
                      <div class=\"col-sm-9\">
                          {{ form_row(form.team) }}
                        <div class=\"invalid-feedback\">
                          please provide message.
                        </div>
                      </div>
                    </div>
                   
                     <div class=\"form-group mb-0 row\">
                   
                      <div class=\"col-sm-9\">
                          {{ form_row(form.role, { 'attr': { 'placeholder': 'role...' } } ) }}
                        <div class=\"invalid-feedback\">
                          please provide message.
                        </div>
                      </div>
                    </div>
                   
            
                    <div class=\"form-group row\">
                  <div class=\"col-sm-9\">
                   {{ form_row(form.name, { 'attr': { 'placeholder': 'Name...' } } ) }}
                        <div class=\"invalid-feedback\">
                          name is invalid. 
                        </div>
                      </div>
                    </div>
                   
                <div class=\"form-group mb-0 row\">

                      <div class=\"col-sm-9\">
                           {{ form_row(form.salary, { 'attr': { 'placeholder': 'Salary...' } } ) }}
                        <div class=\"invalid-feedback\">
                          please provide message.
                        </div>
                      </div>
                    </div>
                     <div class=\"form-group row\">
                   
                      <div class=\"col-sm-9\">
                      {{ form_row(form.position, { 'attr': { 'placeholder': 'Position...' } } ) }}
                        <div class=\"valid-feedback\">
                          done.
                        </div>
                      </div>
                    </div>
                  <div class=\"card-footer text-right\">
                    <button type=\"submit\" class=\"btn btn-primary\">Creer</button>
                  </div>
                
                </form>
                  {{ form_end(form) }}
              </div>
              
    </div>
  </div>
    </div>
{% endblock %}
", "employee/ajouter.html.twig", "C:\\laragon\\www\\Symfony4-projetEntreprise\\templates\\employee\\ajouter.html.twig");
    }
}
