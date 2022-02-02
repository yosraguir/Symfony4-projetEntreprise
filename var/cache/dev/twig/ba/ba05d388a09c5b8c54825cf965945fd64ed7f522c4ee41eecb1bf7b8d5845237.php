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

/* employee/modifemp.html.twig */
class __TwigTemplate_ca05ad6172513aafdce5395e2d3b07420daf44b22d82c38614dc38090e0087e8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/modifemp.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/modifemp.html.twig"));

        $this->parent = $this->loadTemplate("Employee/layaout.html.twig", "employee/modifemp.html.twig", 1);
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
        echo " -Modifier Employee
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modif");
        echo "\">
                  <div class=\"card-header\">
                    <h4>JavaScript Validation</h4>
                  </div>
                  <div class=\"card-body\">
                    <div class=\"form-group row\">
                        <label class=\"col-sm-3 col-form-label\">id</label>
                        <div class=\"col-sm-9\">
                          <input type=\"text\" class=\"form-control\" name=\"id\"  value=";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "html", null, true);
        echo " required>
                         <div class=\"invalid-feedback\">
                            please enter your name?
                          </div>
                        </div>
                      </div>
                    <div class=\"form-group row\">
                      <label class=\"col-sm-3 col-form-label\">Cin</label>
                      <div class=\"col-sm-9\">
                        <input type=\"text\" class=\"form-control\" name=\"cin\"  value=";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 39, $this->source); })()), "cin", [], "any", false, false, false, 39), "html", null, true);
        echo " required>
                       <div class=\"invalid-feedback\">
                          please enter your name?
                        </div>
                      </div>
                    </div>
                    <div class=\"form-group row\">
                      <label class=\"col-sm-3 col-form-label\">name</label>
                      <div class=\"col-sm-9\">
                        <input type=\"text\" class=\"form-control\" name=\"name\"  value=";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, false, 48), "html", null, true);
        echo " required>
                        <div class=\"invalid-feedback\">
                          name is invalid. 
                        </div>
                      </div>
                    </div>
                    <div class=\"form-group row\">
                      <label class=\"col-sm-3 col-form-label\">position</label>
                      <div class=\"col-sm-9\">
                        <input type=\"text\" class=\"form-control\"  name=\"position\" value=";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 57, $this->source); })()), "position", [], "any", false, false, false, 57), "html", null, true);
        echo ">
                        <div class=\"valid-feedback\">
                          done.
                        </div>
                      </div>
                    </div>
                   
                    <div class=\"form-group mb-0 row\">
                      <label class=\"col-sm-3 col-form-label\">Age</label>
                      <div class=\"col-sm-9\">
                        <input class=\"form-control\" name=\"age\"  required value=";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 67, $this->source); })()), "age", [], "any", false, false, false, 67), "html", null, true);
        echo ">
                        <div class=\"invalid-feedback\">
                          please provide message.
                        </div>
                      </div>
                    </div>
                    <div class=\"form-group mb-0 row\">
                      <label class=\"col-sm-3 col-form-label\">salary</label>
                      <div class=\"col-sm-9\">
                        <input class=\"form-control\" name=\"salary\"  required value=";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 76, $this->source); })()), "salary", [], "any", false, false, false, 76), "html", null, true);
        echo ">
                        <div class=\"invalid-feedback\">
                          please provide message.
                        </div>
                      </div>
                    </div>
                
                    <div class=\"form-group mb-0 row\">
                      <label class=\"col-sm-3 col-form-label\">Role</label>
                      <div class=\"col-sm-9\">
                        <input class=\"form-control\" name=\"role\"  required value=";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 86, $this->source); })()), "role", [], "any", false, false, false, 86), "html", null, true);
        echo ">
                        <div class=\"invalid-feedback\">
                          please provide message.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"card-footer text-right\">
                    <button class=\"btn btn-primary\">Submit</button>
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
        return "employee/modifemp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 86,  181 => 76,  169 => 67,  156 => 57,  144 => 48,  132 => 39,  120 => 30,  109 => 22,  91 => 6,  81 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Employee/layaout.html.twig\" %}
{% block title %}
{{parent()}} -Modifier Employee
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
                <form class=\"needs-validation\" novalidate method=\"Post\" action=\"{{ path('modif') }}\">
                  <div class=\"card-header\">
                    <h4>JavaScript Validation</h4>
                  </div>
                  <div class=\"card-body\">
                    <div class=\"form-group row\">
                        <label class=\"col-sm-3 col-form-label\">id</label>
                        <div class=\"col-sm-9\">
                          <input type=\"text\" class=\"form-control\" name=\"id\"  value={{employee.id}} required>
                         <div class=\"invalid-feedback\">
                            please enter your name?
                          </div>
                        </div>
                      </div>
                    <div class=\"form-group row\">
                      <label class=\"col-sm-3 col-form-label\">Cin</label>
                      <div class=\"col-sm-9\">
                        <input type=\"text\" class=\"form-control\" name=\"cin\"  value={{employee.cin}} required>
                       <div class=\"invalid-feedback\">
                          please enter your name?
                        </div>
                      </div>
                    </div>
                    <div class=\"form-group row\">
                      <label class=\"col-sm-3 col-form-label\">name</label>
                      <div class=\"col-sm-9\">
                        <input type=\"text\" class=\"form-control\" name=\"name\"  value={{employee.name}} required>
                        <div class=\"invalid-feedback\">
                          name is invalid. 
                        </div>
                      </div>
                    </div>
                    <div class=\"form-group row\">
                      <label class=\"col-sm-3 col-form-label\">position</label>
                      <div class=\"col-sm-9\">
                        <input type=\"text\" class=\"form-control\"  name=\"position\" value={{employee.position}}>
                        <div class=\"valid-feedback\">
                          done.
                        </div>
                      </div>
                    </div>
                   
                    <div class=\"form-group mb-0 row\">
                      <label class=\"col-sm-3 col-form-label\">Age</label>
                      <div class=\"col-sm-9\">
                        <input class=\"form-control\" name=\"age\"  required value={{employee.age}}>
                        <div class=\"invalid-feedback\">
                          please provide message.
                        </div>
                      </div>
                    </div>
                    <div class=\"form-group mb-0 row\">
                      <label class=\"col-sm-3 col-form-label\">salary</label>
                      <div class=\"col-sm-9\">
                        <input class=\"form-control\" name=\"salary\"  required value={{employee.salary}}>
                        <div class=\"invalid-feedback\">
                          please provide message.
                        </div>
                      </div>
                    </div>
                
                    <div class=\"form-group mb-0 row\">
                      <label class=\"col-sm-3 col-form-label\">Role</label>
                      <div class=\"col-sm-9\">
                        <input class=\"form-control\" name=\"role\"  required value={{employee.role}}>
                        <div class=\"invalid-feedback\">
                          please provide message.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"card-footer text-right\">
                    <button class=\"btn btn-primary\">Submit</button>
                  </div>
                </form>
              </div>
              
    </div>
  </div>
    </div>
{% endblock %}", "employee/modifemp.html.twig", "C:\\laragon\\www\\Symfony4-projetEntreprise\\templates\\employee\\modifemp.html.twig");
    }
}
