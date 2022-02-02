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

/* employee/listEmp.html.twig */
class __TwigTemplate_acfe2fe831c49067d22635b336747b30f80c3408eee16f4b5ddbe7d9b303a016 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/listEmp.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/listEmp.html.twig"));

        $this->parent = $this->loadTemplate("Employee/layaout.html.twig", "employee/listEmp.html.twig", 1);
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
        echo " -List Employee
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
        echo "  
                       <!-- Main Content -->
      <div class=\"main-content\">
        <section class=\"section\">
          <div class=\"section-header\">
            <h1>Table Employee</h1>
            <div class=\"section-header-breadcrumb\">
              <div class=\"breadcrumb-item active\"><a href=\"#\">Table</a></div>
              <div class=\"breadcrumb-item\"><a href=\"#\">Employee</a></div>
              <div class=\"breadcrumb-item\">Liste Employee</div>
            </div>
          </div>
          <div class=\"section-body\">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"card\">
                  <div class=\"card-header\">
                    <h4>Liste Employee</h4>
                  </div>
                  <div class=\"card-body\">
                    <div class=\"table-responsive\">
                      <table class=\"table table-striped table-hover\" id=\"tableExport\" style=\"width:100%;\">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Cin</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Age</th>
                           <th>Salary</th>
\t\t\t\t\t\t     <th>Role</th>
\t\t\t\t\t\t\t<th>Team</th>
\t\t\t\t\t\t\t     <th>Action</th>
                          </tr>
                        </thead>

                     
                        <tbody>
                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employees"]) || array_key_exists("employees", $context) ? $context["employees"] : (function () { throw new RuntimeError('Variable "employees" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 45
            echo "                            <tr>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "cin", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "position", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "age", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                            <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "salary", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "role", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t  <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["employee"], "team", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t
                            <td>
                           <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifemp", ["id" => twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">
                                <button type=\"button\" class=\"btn btn-warning\">Modification</button>
                            </a>
                            <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\">
                                <button type=\"button\" class=\"btn btn-danger\">Supprimer</button>
                            </a>
                        </td>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class=\"settingSidebar\">
\t\t\t<a href=\"javascript:void(0)\" class=\"settingPanelToggle\"> <i
\t\t\t\tclass=\"fa fa-spin fa-cog\"></i>
\t\t\t</a>
\t\t\t<div class=\"settingSidebar-body ps-container ps-theme-default\">
\t\t\t\t<div class=\" fade show active\">
\t\t\t\t\t<div class=\"setting-panel-header\">Theme Customizer</div>
\t\t\t\t\t<div class=\"p-15 border-bottom\">
\t\t\t\t\t\t<h6 class=\"font-medium m-b-10\">Theme Layout</h6>
\t\t\t\t\t\t<div class=\"selectgroup layout-color w-50\">
\t\t\t\t\t\t\t<label> <span class=\"control-label p-r-20\">Light</span>
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom-switch-input\" value=\"1\"
\t\t\t\t\t\t\t\tclass=\"custom-switch-input\" checked> <span
\t\t\t\t\t\t\t\tclass=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"selectgroup layout-color  w-50\">
\t\t\t\t\t\t\t<label> <span class=\"control-label p-r-20\">Dark&nbsp;</span>
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom-switch-input\" value=\"2\"
\t\t\t\t\t\t\t\tclass=\"custom-switch-input\"> <span
\t\t\t\t\t\t\t\tclass=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"p-15 border-bottom\">
\t\t\t\t\t<h6 class=\"font-medium m-b-10\">Sidebar Colors</h6>
\t\t\t\t\t<div class=\"sidebar-setting-options\">
\t\t\t\t\t\t<ul class=\"sidebar-color list-unstyled mb-0\">
\t\t\t\t\t\t\t<li title=\"white\" class=\"active\">
\t\t\t\t\t\t\t\t<div class=\"white\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"blue\">
\t\t\t\t\t\t\t\t<div class=\"blue\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"coral\">
\t\t\t\t\t\t\t\t<div class=\"coral\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"purple\">
\t\t\t\t\t\t\t\t<div class=\"purple\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"allports\">
\t\t\t\t\t\t\t\t<div class=\"allports\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"barossa\">
\t\t\t\t\t\t\t\t<div class=\"barossa\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"fancy\">
\t\t\t\t\t\t\t\t<div class=\"fancy\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"p-15 border-bottom\">
\t\t\t\t\t<h6 class=\"font-medium m-b-10\">Theme Colors</h6>
\t\t\t\t\t<div class=\"theme-setting-options\">
\t\t\t\t\t\t<ul class=\"choose-theme list-unstyled mb-0\">
\t\t\t\t\t\t\t<li title=\"white\" class=\"active\">
\t\t\t\t\t\t\t\t<div class=\"white\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"blue\">
\t\t\t\t\t\t\t\t<div class=\"blue\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"coral\">
\t\t\t\t\t\t\t\t<div class=\"coral\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"purple\">
\t\t\t\t\t\t\t\t<div class=\"purple\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"allports\">
\t\t\t\t\t\t\t\t<div class=\"allports\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"barossa\">
\t\t\t\t\t\t\t\t<div class=\"barossa\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"fancy\">
\t\t\t\t\t\t\t\t<div class=\"fancy\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"cyan\">
\t\t\t\t\t\t\t\t<div class=\"cyan\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"orange\">
\t\t\t\t\t\t\t\t<div class=\"orange\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"green\">
\t\t\t\t\t\t\t\t<div class=\"green\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"red\">
\t\t\t\t\t\t\t\t<div class=\"red\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"p-15 border-bottom\">
\t\t\t\t\t<h6 class=\"font-medium m-b-10\">Layout Options</h6>
\t\t\t\t\t<div class=\"theme-setting-options\">
\t\t\t\t\t\t<label> <span class=\"control-label p-r-20\">Compact
\t\t\t\t\t\t\t\tSidebar Menu</span> <input type=\"checkbox\"
\t\t\t\t\t\t\tname=\"custom-switch-checkbox\" class=\"custom-switch-input\"
\t\t\t\t\t\t\tid=\"mini_sidebar_setting\"> <span
\t\t\t\t\t\t\tclass=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mt-3 mb-3 align-center\">
\t\t\t\t\t<a href=\"#\"
\t\t\t\t\t\tclass=\"btn btn-icon icon-left btn-outline-primary btn-restore-theme\">
\t\t\t\t\t\t<i class=\"fas fa-undo\"></i> Restore Default
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
      </div>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "employee/listEmp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 64,  178 => 59,  172 => 56,  166 => 53,  162 => 52,  158 => 51,  154 => 50,  150 => 49,  146 => 48,  142 => 47,  138 => 46,  135 => 45,  131 => 44,  91 => 6,  81 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  {% extends \"Employee/layaout.html.twig\" %}
{% block title %}
{{parent()}} -List Employee
{% endblock %}
{% block job_body %}
  
                       <!-- Main Content -->
      <div class=\"main-content\">
        <section class=\"section\">
          <div class=\"section-header\">
            <h1>Table Employee</h1>
            <div class=\"section-header-breadcrumb\">
              <div class=\"breadcrumb-item active\"><a href=\"#\">Table</a></div>
              <div class=\"breadcrumb-item\"><a href=\"#\">Employee</a></div>
              <div class=\"breadcrumb-item\">Liste Employee</div>
            </div>
          </div>
          <div class=\"section-body\">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"card\">
                  <div class=\"card-header\">
                    <h4>Liste Employee</h4>
                  </div>
                  <div class=\"card-body\">
                    <div class=\"table-responsive\">
                      <table class=\"table table-striped table-hover\" id=\"tableExport\" style=\"width:100%;\">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Cin</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Age</th>
                           <th>Salary</th>
\t\t\t\t\t\t     <th>Role</th>
\t\t\t\t\t\t\t<th>Team</th>
\t\t\t\t\t\t\t     <th>Action</th>
                          </tr>
                        </thead>

                     
                        <tbody>
                            {% for employee in employees %}
                            <tr>
                            <td>{{employee.id}}</td>
                            <td>{{employee.cin}}</td>
                            <td>{{employee.name}}</td>
                            <td>{{employee.position}}</td>
                            <td>{{employee.age}}</td>
                            <td>{{employee.salary}}</td>
\t\t\t\t\t\t\t <td>{{employee.role}}</td>
\t\t\t\t\t\t\t  <td>{{employee.team.name}}</td>
\t\t\t\t\t\t\t
                            <td>
                           <a href=\"{{path('modifemp',{'id':employee.id})}}\">
                                <button type=\"button\" class=\"btn btn-warning\">Modification</button>
                            </a>
                            <a href=\"{{path('delete',{'id':employee.id})}}\">
                                <button type=\"button\" class=\"btn btn-danger\">Supprimer</button>
                            </a>
                        </td>
                        {% endfor %}
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class=\"settingSidebar\">
\t\t\t<a href=\"javascript:void(0)\" class=\"settingPanelToggle\"> <i
\t\t\t\tclass=\"fa fa-spin fa-cog\"></i>
\t\t\t</a>
\t\t\t<div class=\"settingSidebar-body ps-container ps-theme-default\">
\t\t\t\t<div class=\" fade show active\">
\t\t\t\t\t<div class=\"setting-panel-header\">Theme Customizer</div>
\t\t\t\t\t<div class=\"p-15 border-bottom\">
\t\t\t\t\t\t<h6 class=\"font-medium m-b-10\">Theme Layout</h6>
\t\t\t\t\t\t<div class=\"selectgroup layout-color w-50\">
\t\t\t\t\t\t\t<label> <span class=\"control-label p-r-20\">Light</span>
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom-switch-input\" value=\"1\"
\t\t\t\t\t\t\t\tclass=\"custom-switch-input\" checked> <span
\t\t\t\t\t\t\t\tclass=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"selectgroup layout-color  w-50\">
\t\t\t\t\t\t\t<label> <span class=\"control-label p-r-20\">Dark&nbsp;</span>
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom-switch-input\" value=\"2\"
\t\t\t\t\t\t\t\tclass=\"custom-switch-input\"> <span
\t\t\t\t\t\t\t\tclass=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"p-15 border-bottom\">
\t\t\t\t\t<h6 class=\"font-medium m-b-10\">Sidebar Colors</h6>
\t\t\t\t\t<div class=\"sidebar-setting-options\">
\t\t\t\t\t\t<ul class=\"sidebar-color list-unstyled mb-0\">
\t\t\t\t\t\t\t<li title=\"white\" class=\"active\">
\t\t\t\t\t\t\t\t<div class=\"white\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"blue\">
\t\t\t\t\t\t\t\t<div class=\"blue\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"coral\">
\t\t\t\t\t\t\t\t<div class=\"coral\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"purple\">
\t\t\t\t\t\t\t\t<div class=\"purple\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"allports\">
\t\t\t\t\t\t\t\t<div class=\"allports\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"barossa\">
\t\t\t\t\t\t\t\t<div class=\"barossa\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"fancy\">
\t\t\t\t\t\t\t\t<div class=\"fancy\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"p-15 border-bottom\">
\t\t\t\t\t<h6 class=\"font-medium m-b-10\">Theme Colors</h6>
\t\t\t\t\t<div class=\"theme-setting-options\">
\t\t\t\t\t\t<ul class=\"choose-theme list-unstyled mb-0\">
\t\t\t\t\t\t\t<li title=\"white\" class=\"active\">
\t\t\t\t\t\t\t\t<div class=\"white\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"blue\">
\t\t\t\t\t\t\t\t<div class=\"blue\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"coral\">
\t\t\t\t\t\t\t\t<div class=\"coral\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"purple\">
\t\t\t\t\t\t\t\t<div class=\"purple\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"allports\">
\t\t\t\t\t\t\t\t<div class=\"allports\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"barossa\">
\t\t\t\t\t\t\t\t<div class=\"barossa\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"fancy\">
\t\t\t\t\t\t\t\t<div class=\"fancy\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"cyan\">
\t\t\t\t\t\t\t\t<div class=\"cyan\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"orange\">
\t\t\t\t\t\t\t\t<div class=\"orange\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"green\">
\t\t\t\t\t\t\t\t<div class=\"green\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li title=\"red\">
\t\t\t\t\t\t\t\t<div class=\"red\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"p-15 border-bottom\">
\t\t\t\t\t<h6 class=\"font-medium m-b-10\">Layout Options</h6>
\t\t\t\t\t<div class=\"theme-setting-options\">
\t\t\t\t\t\t<label> <span class=\"control-label p-r-20\">Compact
\t\t\t\t\t\t\t\tSidebar Menu</span> <input type=\"checkbox\"
\t\t\t\t\t\t\tname=\"custom-switch-checkbox\" class=\"custom-switch-input\"
\t\t\t\t\t\t\tid=\"mini_sidebar_setting\"> <span
\t\t\t\t\t\t\tclass=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mt-3 mb-3 align-center\">
\t\t\t\t\t<a href=\"#\"
\t\t\t\t\t\tclass=\"btn btn-icon icon-left btn-outline-primary btn-restore-theme\">
\t\t\t\t\t\t<i class=\"fas fa-undo\"></i> Restore Default
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
      </div>
      {% endblock %}", "employee/listEmp.html.twig", "C:\\laragon\\www\\Symfony4-projetEntreprise\\templates\\employee\\listEmp.html.twig");
    }
}
