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

/* employee/listTeam.html.twig */
class __TwigTemplate_5215fe83780145d06ae1b8e198006aba1e479c4e9e55861d6399769e59bbd2d6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/listTeam.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/listTeam.html.twig"));

        $this->parent = $this->loadTemplate("Employee/layaout.html.twig", "employee/listTeam.html.twig", 1);
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
        echo " -Liste Team
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
            <h1> Table Team</h1>
            <div class=\"section-header-breadcrumb\">
              <div class=\"breadcrumb-item active\"><a href=\"#\">Table</a></div>
              <div class=\"breadcrumb-item\"><a href=\"#\">Team</a></div>
              <div class=\"breadcrumb-item\">Liste Team</div>
            </div>
          </div>
          <div class=\"section-body\">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"card\">
                  <div class=\"card-header\">
                    <h4>Liste Team</h4>
                  </div>
                  <div class=\"card-body\">
                    <div class=\"table-responsive\">
                      <table class=\"table table-striped table-hover\" id=\"tableExport\" style=\"width:100%;\">
                        <thead>
                          <tr>
                            <th>Id</th>
                          
                            <th>Name</th>
                        
\t\t\t\t\t\t\t     <th>Action</th>
                          </tr>
                        </thead>
                           <tbody>
                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 39
            echo "                            <tr>
                            
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                           
\t\t\t\t\t\t\t <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t
                           
                         <td>
                           <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifteam", ["id" => twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">
                                <button type=\"button\" class=\"btn btn-warning\">Modification</button>
                            </a>
                            <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteteam", ["id" => twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">
                                <button type=\"button\" class=\"btn btn-danger\">Supprimer</button>
                            </a>
                        </td>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
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
        return "employee/listTeam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 55,  151 => 50,  145 => 47,  138 => 43,  133 => 41,  129 => 39,  125 => 38,  91 => 6,  81 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  {% extends \"Employee/layaout.html.twig\" %}
{% block title %}
{{parent()}} -Liste Team
{% endblock %}
{% block job_body %}
  
                       <!-- Main Content -->
      <div class=\"main-content\">
        <section class=\"section\">
          <div class=\"section-header\">
            <h1> Table Team</h1>
            <div class=\"section-header-breadcrumb\">
              <div class=\"breadcrumb-item active\"><a href=\"#\">Table</a></div>
              <div class=\"breadcrumb-item\"><a href=\"#\">Team</a></div>
              <div class=\"breadcrumb-item\">Liste Team</div>
            </div>
          </div>
          <div class=\"section-body\">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"card\">
                  <div class=\"card-header\">
                    <h4>Liste Team</h4>
                  </div>
                  <div class=\"card-body\">
                    <div class=\"table-responsive\">
                      <table class=\"table table-striped table-hover\" id=\"tableExport\" style=\"width:100%;\">
                        <thead>
                          <tr>
                            <th>Id</th>
                          
                            <th>Name</th>
                        
\t\t\t\t\t\t\t     <th>Action</th>
                          </tr>
                        </thead>
                           <tbody>
                            {% for team in teams %}
                            <tr>
                            
                            <td>{{team.id}}</td>
                           
\t\t\t\t\t\t\t <td>{{team.name}}</td>
\t\t\t\t\t\t\t
                           
                         <td>
                           <a href=\"{{path('modifteam',{'id':team.id})}}\">
                                <button type=\"button\" class=\"btn btn-warning\">Modification</button>
                            </a>
                            <a href=\"{{path('deleteteam',{'id':team.id})}}\">
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
      {% endblock %}", "employee/listTeam.html.twig", "C:\\laragon\\www\\Symfony4-projetEntreprise\\templates\\employee\\listTeam.html.twig");
    }
}
