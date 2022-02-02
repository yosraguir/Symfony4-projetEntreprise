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

/* employee/login.html.twig */
class __TwigTemplate_a70c358e686235d138928d75467f8509c4a2113033134ee4103e058341a0f626 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">


<!-- Mirrored from radixtouch.in/templates/snkthemes/grexa/source/light/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Dec 2020 17:05:17 GMT -->
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bundles/bootstrap-social/bootstrap-social.css"), "html", null, true);
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
        echo "\"/>
</head>

<body class=\"background-image-body\">
  <div class=\"loader\"></div>
  <div id=\"app\">
    <section class=\"section\">
      <div class=\"container mt-5\">
        <div class=\"row\">
          <div class=\"col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4\">
            <div class=\"login-brand login-brand-color\">
            \t<img alt=\"image\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" />
              Grexa
            </div>
            <div class=\"card\">
              <div class=\"card-header card-header-auth\">
                <h4>Login</h4>
              </div>
              <div class=\"card-body\">
                <form method=\"POST\"   action=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("layaout");
        echo "\" class=\"needs-validation\" novalidate=\"\">
                  <div class=\"form-group\">
                    <label for=\"email\">Email</label>
                    <input id=\"email\" type=\"email\" class=\"form-control\" name=\"email\" tabindex=\"1\" required autofocus>
                    <div class=\"invalid-feedback\">
                      Please fill in your email
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <div class=\"d-block\">
                      <label for=\"password\" class=\"control-label\">Password</label>
                      <div class=\"float-right\">
                        <a href=\"auth-forgot-password.html\" class=\"text-small\">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id=\"password\" type=\"password\" class=\"form-control\" name=\"password\" tabindex=\"2\" required>
                    <div class=\"invalid-feedback\">
                      please fill in your password
                    </div>
                  </div>
                  
                  <div class=\"form-group\">
                    <button type=\"submit\"  class=\"btn btn-lg btn-block btn-auth-color\" tabindex=\"4\">
                      Login
                    </button>
                  </div>
                </form>
                
                
              </div>
            </div>
            <div class=\"mt-5 text-muted text-center\">
              Don't have an account? <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("layaout");
        echo "\">Create One</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.min.js"), "html", null, true);
        echo "\"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\"></script>
  
</body>


<!-- Mirrored from radixtouch.in/templates/snkthemes/grexa/source/light/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Dec 2020 17:05:17 GMT -->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "employee/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 83,  147 => 79,  136 => 71,  99 => 37,  88 => 29,  74 => 18,  68 => 15,  64 => 14,  59 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">


<!-- Mirrored from radixtouch.in/templates/snkthemes/grexa/source/light/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Dec 2020 17:05:17 GMT -->
<head>
  <meta charset=\"UTF-8\">
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no\" name=\"viewport\">
  <title>Grexa - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel=\"stylesheet\" href=\"{{asset('assets/css/app.min.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('assets/bundles/bootstrap-social/bootstrap-social.css')}}\">
  <!-- Template CSS -->
  <link rel=\"stylesheet\" href=\"{{asset('assets/css/style.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('assets/css/components.css')}}\">
  <!-- Custom style CSS -->
  
  <link rel='shortcut icon' type='image/x-icon' href=\"{{asset('assets/img/favicon.ico')}}\"/>
</head>

<body class=\"background-image-body\">
  <div class=\"loader\"></div>
  <div id=\"app\">
    <section class=\"section\">
      <div class=\"container mt-5\">
        <div class=\"row\">
          <div class=\"col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4\">
            <div class=\"login-brand login-brand-color\">
            \t<img alt=\"image\" src=\"{{asset('assets/img/logo.png')}}\" />
              Grexa
            </div>
            <div class=\"card\">
              <div class=\"card-header card-header-auth\">
                <h4>Login</h4>
              </div>
              <div class=\"card-body\">
                <form method=\"POST\"   action=\"{{ path('layaout') }}\" class=\"needs-validation\" novalidate=\"\">
                  <div class=\"form-group\">
                    <label for=\"email\">Email</label>
                    <input id=\"email\" type=\"email\" class=\"form-control\" name=\"email\" tabindex=\"1\" required autofocus>
                    <div class=\"invalid-feedback\">
                      Please fill in your email
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <div class=\"d-block\">
                      <label for=\"password\" class=\"control-label\">Password</label>
                      <div class=\"float-right\">
                        <a href=\"auth-forgot-password.html\" class=\"text-small\">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id=\"password\" type=\"password\" class=\"form-control\" name=\"password\" tabindex=\"2\" required>
                    <div class=\"invalid-feedback\">
                      please fill in your password
                    </div>
                  </div>
                  
                  <div class=\"form-group\">
                    <button type=\"submit\"  class=\"btn btn-lg btn-block btn-auth-color\" tabindex=\"4\">
                      Login
                    </button>
                  </div>
                </form>
                
                
              </div>
            </div>
            <div class=\"mt-5 text-muted text-center\">
              Don't have an account? <a href=\"{{path('layaout') }}\">Create One</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src=\"{{asset('assets/js/app.min.js')}}\"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src=\"{{asset('assets/js/scripts.js')}}\"></script>
  
</body>


<!-- Mirrored from radixtouch.in/templates/snkthemes/grexa/source/light/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Dec 2020 17:05:17 GMT -->
</html>", "employee/login.html.twig", "C:\\laragon\\www\\Symfony4-projetEntreprise\\templates\\employee\\login.html.twig");
    }
}
