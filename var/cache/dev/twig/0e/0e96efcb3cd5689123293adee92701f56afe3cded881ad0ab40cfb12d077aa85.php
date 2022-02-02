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

/* employee/form.html.twig */
class __TwigTemplate_592ea1dcd6477d0daf7db6b3f1f351bc2a94e6fccb1ddcf21fc9a2a08ff15405 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/form.html.twig"));

        // line 1
        echo "

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
              \t<div class=\"card\">
                  <form class=\"needs-validation\" novalidate>
                    <div class=\"card-header\">
                      <h4>JavaScript Validation</h4>
                    </div>
                    <div class=\"card-body\">
                      <div class=\"form-group row\">
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "cin", [], "any", false, false, false, 25), 'label', ["label" => "cin de la personne"]);
        echo "
                      
                        <div class=\"col-sm-9\">
                          <input type=\"text\" class=\"form-control\" required>
                          <div class=\"invalid-feedback\">
                            please enter your name?
                          </div>
                        </div>
                      </div>
                      <div class=\"form-group row\">
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35), 'label', ["label" => "Nom de la personne"]);
        echo "
                        <div class=\"col-sm-9\">
                        
                          <input type=\"text\" class=\"form-control\" required>
                          <div class=\"invalid-feedback\">
                            Email is invalid.
                          </div>
                        </div>
                      </div>
                      <div class=\"form-group row\">
                     
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "position", [], "any", false, false, false, 46), 'label', ["label" => "position de la personne"]);
        echo "
                        <div class=\"col-sm-9\">
                     
                       
                          <input type=\"text\" class=\"form-control\" required>
                          <div class=\"valid-feedback\">
                            done.
                          </div>
                        </div>
                      </div>
                      <div class=\"form-group mb-0 row\">
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "age", [], "any", false, false, false, 57), 'label', ["label" => "age de la personne"]);
        echo "
                    
                        <div class=\"col-sm-9\">
                    
                          <input type=\"text\" class=\"form-control\" required>
                          <div class=\"invalid-feedback\">
                            please provide message.
                          </div>
                        </div>
                      </div>

                      <div class=\"form-group mb-0 row\">
                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "joiningDate", [], "any", false, false, false, 69), 'label', ["label" => "date de la personne"]);
        echo "
                        <div class=\"col-sm-9\">
                     
                          <input type=\"text\" class=\"form-control\" required>
                          <div class=\"invalid-feedback\">
                            please provide message.
                          </div>
                        </div>
                      </div>
                      
                      <div class=\"form-group mb-0 row\">
                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "salary", [], "any", false, false, false, 80), 'label', ["label" => "salary de la personne"]);
        echo "
                        <div class=\"col-sm-9\">
                     
                          <input type=\"text\" class=\"form-control\" required>
                          <div class=\"invalid-feedback\">
                            please provide message.
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"card-footer text-right\">
                      <button name=\"save\" class=\"btn btn-primary\">save</button>
                    </div>
                  </form>
                </div>
  
                
              </div>
            
    </div>
    </div>
    </section>
    </div>
    
      

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "employee/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 80,  125 => 69,  110 => 57,  96 => 46,  82 => 35,  69 => 25,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

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
              \t<div class=\"card\">
                  <form class=\"needs-validation\" novalidate>
                    <div class=\"card-header\">
                      <h4>JavaScript Validation</h4>
                    </div>
                    <div class=\"card-body\">
                      <div class=\"form-group row\">
                        {{ form_label(form.cin, \"cin de la personne\") }}
                      
                        <div class=\"col-sm-9\">
                          <input type=\"text\" class=\"form-control\" required>
                          <div class=\"invalid-feedback\">
                            please enter your name?
                          </div>
                        </div>
                      </div>
                      <div class=\"form-group row\">
                        {{ form_label(form.name, \"Nom de la personne\") }}
                        <div class=\"col-sm-9\">
                        
                          <input type=\"text\" class=\"form-control\" required>
                          <div class=\"invalid-feedback\">
                            Email is invalid.
                          </div>
                        </div>
                      </div>
                      <div class=\"form-group row\">
                     
                        {{ form_label(form.position, \"position de la personne\") }}
                        <div class=\"col-sm-9\">
                     
                       
                          <input type=\"text\" class=\"form-control\" required>
                          <div class=\"valid-feedback\">
                            done.
                          </div>
                        </div>
                      </div>
                      <div class=\"form-group mb-0 row\">
                        {{ form_label(form.age, \"age de la personne\") }}
                    
                        <div class=\"col-sm-9\">
                    
                          <input type=\"text\" class=\"form-control\" required>
                          <div class=\"invalid-feedback\">
                            please provide message.
                          </div>
                        </div>
                      </div>

                      <div class=\"form-group mb-0 row\">
                        {{ form_label(form.joiningDate, \"date de la personne\") }}
                        <div class=\"col-sm-9\">
                     
                          <input type=\"text\" class=\"form-control\" required>
                          <div class=\"invalid-feedback\">
                            please provide message.
                          </div>
                        </div>
                      </div>
                      
                      <div class=\"form-group mb-0 row\">
                        {{ form_label(form.salary, \"salary de la personne\") }}
                        <div class=\"col-sm-9\">
                     
                          <input type=\"text\" class=\"form-control\" required>
                          <div class=\"invalid-feedback\">
                            please provide message.
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"card-footer text-right\">
                      <button name=\"save\" class=\"btn btn-primary\">save</button>
                    </div>
                  </form>
                </div>
  
                
              </div>
            
    </div>
    </div>
    </section>
    </div>
    
      

", "employee/form.html.twig", "C:\\laragon\\www\\Symfony4-projetEntreprise\\templates\\employee\\form.html.twig");
    }
}
