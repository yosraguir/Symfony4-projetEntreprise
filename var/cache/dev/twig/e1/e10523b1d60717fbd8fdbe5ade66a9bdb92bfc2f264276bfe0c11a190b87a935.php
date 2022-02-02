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

/* employee/register.html.twig */
class __TwigTemplate_6ef7ebb64e6d2bbff641992250eb9926002babfa29a474544b4d502b4eae3c67 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">


<!-- Mirrored from radixtouch.in/templates/snkthemes/grexa/source/light/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Dec 2020 17:13:28 GMT -->
<head>
  <meta charset=\"UTF-8\">
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no\" name=\"viewport\">
  <title>Grexa - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bundles/jquery-selectric/selectric.css"), "html", null, true);
        echo "\">
  <!-- Template CSS -->
  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/components.css"), "html", null, true);
        echo "\">
  <!-- Custom style CSS -->
  
  <link rel='shortcut icon' type='image/x-icon' href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.ico"), "html", null, true);
        echo "\" />
</head>

<body class=\"background-image-body\">
  <div class=\"loader\"></div>
  <div id=\"app\">
    <section class=\"section\">
      <div class=\"container mt-5\">
        <div class=\"row\">
          <div class=\"col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2\">
            <div class=\"login-brand login-brand-color\">
            \t<img alt=\"image\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" />
              Grexa
            </div>
            <div class=\"card\">
              <div class=\"card-header card-header-auth\">
                <h4>Register</h4>
              </div>
              <div class=\"card-body\">
                <form method=\"POST\" action=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\">
                  <div class=\"row\">
                    <div class=\"form-group col-6\">
                      <label for=\"frist_name\">First Name</label>
                      <input  type=\"text\" class=\"form-control\" name=\"frist_name\" autofocus>
                    </div>
                    <div class=\"form-group col-6\">
                      <label for=\"last_name\">Last Name</label>
                      <input  type=\"text\" class=\"form-control\" name=\"last_name\">
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label for=\"email\">Email</label>
                    <input id=\"email\" type=\"email\" class=\"form-control\" name=\"email\">
                    <div class=\"invalid-feedback\">
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"form-group col-6\">
                      <label for=\"password\" class=\"d-block\">Password</label>
                      <input  type=\"password\" class=\"form-control pwstrength\" data-indicator=\"pwindicator\"
                        name=\"password\">
                      <div id=\"pwindicator\" class=\"pwindicator\">
                        <div class=\"bar\"></div>
                        <div class=\"label\"></div>
                      </div>
                    </div>
                    <div class=\"form-group col-6\">
                      <label for=\"password2\" class=\"d-block\">Password Confirmation</label>
                      <input  type=\"password\" class=\"form-control\" name=\"confpassword\">
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <div class=\"custom-control custom-checkbox\">
                      <input type=\"checkbox\" name=\"agree\" class=\"custom-control-input\" id=\"agree\">
                      <label class=\"custom-control-label\" for=\"agree\">I agree with the terms and conditions</label>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <button type=\"submit\" name=\"Submit\" class=\"btn btn-auth-color btn-lg btn-block\">
                      Register
                    </button>
                  </div>
                </form>
              </div>
              <div class=\"mb-4 text-muted text-center\">
                Already Registered? <a>Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.min.js"), "html", null, true);
        echo "\"></script>
  <!-- JS Libraies -->
  <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bundles/jquery-selectric/jquery.selectric.min.js"), "html", null, true);
        echo "\"></script>
  <!-- Page Specific JS File -->
  <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/page/auth-register.js"), "html", null, true);
        echo "\"></script>
  <!-- Template JS File -->
  <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\"></script>
  
</body>


<!-- Mirrored from radixtouch.in/templates/snkthemes/grexa/source/light/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Dec 2020 17:13:31 GMT -->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "employee/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 99,  171 => 97,  166 => 95,  162 => 94,  157 => 92,  99 => 37,  88 => 29,  74 => 18,  68 => 15,  64 => 14,  59 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">


<!-- Mirrored from radixtouch.in/templates/snkthemes/grexa/source/light/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Dec 2020 17:13:28 GMT -->
<head>
  <meta charset=\"UTF-8\">
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no\" name=\"viewport\">
  <title>Grexa - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel=\"stylesheet\" href=\"{{asset('assets/css/app.min.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('assets/bundles/jquery-selectric/selectric.css')}}\">
  <!-- Template CSS -->
  <link rel=\"stylesheet\" href=\"{{asset('assets/css/style.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('assets/css/components.css')}}\">
  <!-- Custom style CSS -->
  
  <link rel='shortcut icon' type='image/x-icon' href=\"{{asset('assets/img/favicon.ico')}}\" />
</head>

<body class=\"background-image-body\">
  <div class=\"loader\"></div>
  <div id=\"app\">
    <section class=\"section\">
      <div class=\"container mt-5\">
        <div class=\"row\">
          <div class=\"col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2\">
            <div class=\"login-brand login-brand-color\">
            \t<img alt=\"image\" src=\"{{asset('assets/img/logo.png')}}\" />
              Grexa
            </div>
            <div class=\"card\">
              <div class=\"card-header card-header-auth\">
                <h4>Register</h4>
              </div>
              <div class=\"card-body\">
                <form method=\"POST\" action=\"{{ path('register') }}\">
                  <div class=\"row\">
                    <div class=\"form-group col-6\">
                      <label for=\"frist_name\">First Name</label>
                      <input  type=\"text\" class=\"form-control\" name=\"frist_name\" autofocus>
                    </div>
                    <div class=\"form-group col-6\">
                      <label for=\"last_name\">Last Name</label>
                      <input  type=\"text\" class=\"form-control\" name=\"last_name\">
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label for=\"email\">Email</label>
                    <input id=\"email\" type=\"email\" class=\"form-control\" name=\"email\">
                    <div class=\"invalid-feedback\">
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"form-group col-6\">
                      <label for=\"password\" class=\"d-block\">Password</label>
                      <input  type=\"password\" class=\"form-control pwstrength\" data-indicator=\"pwindicator\"
                        name=\"password\">
                      <div id=\"pwindicator\" class=\"pwindicator\">
                        <div class=\"bar\"></div>
                        <div class=\"label\"></div>
                      </div>
                    </div>
                    <div class=\"form-group col-6\">
                      <label for=\"password2\" class=\"d-block\">Password Confirmation</label>
                      <input  type=\"password\" class=\"form-control\" name=\"confpassword\">
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <div class=\"custom-control custom-checkbox\">
                      <input type=\"checkbox\" name=\"agree\" class=\"custom-control-input\" id=\"agree\">
                      <label class=\"custom-control-label\" for=\"agree\">I agree with the terms and conditions</label>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <button type=\"submit\" name=\"Submit\" class=\"btn btn-auth-color btn-lg btn-block\">
                      Register
                    </button>
                  </div>
                </form>
              </div>
              <div class=\"mb-4 text-muted text-center\">
                Already Registered? <a>Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src=\"{{asset('assets/js/app.min.js')}}\"></script>
  <!-- JS Libraies -->
  <script src=\"{{asset('assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js')}}\"></script>
  <script src=\"{{asset('assets/bundles/jquery-selectric/jquery.selectric.min.js')}}\"></script>
  <!-- Page Specific JS File -->
  <script src=\"{{asset('assets/js/page/auth-register.js')}}\"></script>
  <!-- Template JS File -->
  <script src=\"{{asset('assets/js/scripts.js')}}\"></script>
  
</body>


<!-- Mirrored from radixtouch.in/templates/snkthemes/grexa/source/light/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Dec 2020 17:13:31 GMT -->
</html>", "employee/register.html.twig", "C:\\laragon\\www\\Symfony4-projetEntreprise\\templates\\employee\\register.html.twig");
    }
}
