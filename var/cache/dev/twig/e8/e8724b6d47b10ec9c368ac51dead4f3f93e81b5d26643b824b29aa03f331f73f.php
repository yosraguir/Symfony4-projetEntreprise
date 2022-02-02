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

/* employee/listProjet.html.twig */
class __TwigTemplate_028f4d3033e031708fc3bef3a46955159d86706961919733cb29fc8a0ea63802 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/listProjet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/listProjet.html.twig"));

        $this->parent = $this->loadTemplate("Employee/layaout.html.twig", "employee/listProjet.html.twig", 1);
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
        echo " -Liste Projet
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
              <div class=\"breadcrumb-item\"><a href=\"#\">Projet</a></div>
              <div class=\"breadcrumb-item\">Liste Projet</div>
            </div>
          </div>
          <div class=\"section-body\">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"card\">
                  <div class=\"card-header\">
                    <h4>Liste Projet</h4>
                  </div>
                  <div class=\"card-body\">
                    <div class=\"table-responsive\">
                      <table class=\"table table-striped table-hover\" id=\"tableExport\" style=\"width:100%;\">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Technologie</th>
                            <th>beneficiaire</th>
\t\t\t\t\t\t\t  <th>Team</th>
                           <th>Action</th>
                          </tr>
                        </thead>

                     
                        <tbody>
                            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new RuntimeError('Variable "projets" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 43
            echo "                            <tr>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "name", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "description", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "technologie", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "beneficiaire", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                               <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["projet"], "team", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t
                            <td>
                           <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifprojet", ["id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">
                                <button type=\"button\" class=\"btn btn-warning\">Modification</button>
                            </a>
                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletep", ["id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">
                                <button type=\"button\" class=\"btn btn-danger\">Supprimer</button>
                            </a>
                        </td>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
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
        return "employee/listProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 60,  168 => 55,  162 => 52,  156 => 49,  152 => 48,  148 => 47,  144 => 46,  140 => 45,  136 => 44,  133 => 43,  129 => 42,  91 => 6,  81 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  {% extends \"Employee/layaout.html.twig\" %}
{% block title %}
{{parent()}} -Liste Projet
{% endblock %}
{% block job_body %}
   
        <!-- Main Content -->
      <div class=\"main-content\">
        <section class=\"section\">
          <div class=\"section-header\">
            <h1>Table Employee</h1>
            <div class=\"section-header-breadcrumb\">
              <div class=\"breadcrumb-item active\"><a href=\"#\">Table</a></div>
              <div class=\"breadcrumb-item\"><a href=\"#\">Projet</a></div>
              <div class=\"breadcrumb-item\">Liste Projet</div>
            </div>
          </div>
          <div class=\"section-body\">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"card\">
                  <div class=\"card-header\">
                    <h4>Liste Projet</h4>
                  </div>
                  <div class=\"card-body\">
                    <div class=\"table-responsive\">
                      <table class=\"table table-striped table-hover\" id=\"tableExport\" style=\"width:100%;\">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Technologie</th>
                            <th>beneficiaire</th>
\t\t\t\t\t\t\t  <th>Team</th>
                           <th>Action</th>
                          </tr>
                        </thead>

                     
                        <tbody>
                            {% for projet in projets %}
                            <tr>
                            <td>{{projet.id}}</td>
                            <td>{{projet.name}}</td>
                            <td>{{projet.description}}</td>
                            <td>{{projet.technologie}}</td>
                            <td>{{projet.beneficiaire}}</td>
                               <td>{{projet.team.name}}</td>
\t\t\t\t\t\t\t
                            <td>
                           <a href=\"{{path('modifprojet',{'id':projet.id})}}\">
                                <button type=\"button\" class=\"btn btn-warning\">Modification</button>
                            </a>
                            <a href=\"{{path('deletep',{'id':projet.id})}}\">
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
      {% endblock %}", "employee/listProjet.html.twig", "C:\\laragon\\www\\Symfony4-projetEntreprise\\templates\\employee\\listProjet.html.twig");
    }
}
