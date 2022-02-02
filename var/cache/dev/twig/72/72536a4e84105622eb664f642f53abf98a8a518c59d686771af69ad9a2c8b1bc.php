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

/* employee/menu.html.twig */
class __TwigTemplate_d34698f49af9ffde48f83317415329f056f7d93b32081df7199eb86103b5e94f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/menu.html.twig"));

        // line 1
        echo "<div class=\"navbar-bg\"></div>
<nav class=\"navbar navbar-expand-lg main-navbar\">
  <div class=\"form-inline mr-auto\">
    <ul class=\"navbar-nav mr-3\">
      <li><a href=\"#\" data-toggle=\"sidebar\" class=\"nav-link nav-link-lg collapse-btn\"><i
            class=\"fas fa-bars\"></i></a></li>
      <li>
      <div class=\"search-group\">
        <span class=\"nav-link nav-link-lg\" id=\"search\">
            <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
        </span>
        <input type=\"text\" class=\"search-control\" placeholder=\"search\" aria-label=\"search\" aria-describedby=\"search\">
      </div>
      </li>
    </ul>
  </div>
  <ul class=\"navbar-nav navbar-right\">
  <li><a href=\"#\" class=\"nav-link nav-link-lg fullscreen-btn\">
          <i class=\"fas fa-expand\"></i>
        </a>
      </li>
      
    <li class=\"dropdown dropdown-list-toggle\"><a href=\"#\" data-toggle=\"dropdown\"
        class=\"nav-link notification-toggle nav-link-lg beep\"><i class=\"far fa-bell\"></i></a>
      <div class=\"dropdown-menu dropdown-list dropdown-menu-right\">
        <div class=\"dropdown-header\">Notifications
          <div class=\"float-right\">
            <a href=\"#\">Mark All As Read</a>
          </div>
        </div>
        <div class=\"dropdown-list-content dropdown-list-icons\">
          <a href=\"#\" class=\"dropdown-item dropdown-item-unread\">
            <span class=\"dropdown-item-icon bg-primary text-white\">
              <i class=\"fas fa-shopping-cart\"></i>
            </span>
            <span class=\"dropdown-item-desc\">
              New Order
              <span class=\"time\">3 Hours Ago</span>
            </span>
          </a>
          <a href=\"#\" class=\"dropdown-item dropdown-item-unread\">
            <span class=\"dropdown-item-icon bg-info text-white\">
              <i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>
            </span>
            <span class=\"dropdown-item-desc\">
              Application Error
              <span class=\"time\">7 Hours Ago</span>
            </span>
          </a>
          <a href=\"#\" class=\"dropdown-item\">
            <span class=\"dropdown-item-icon bg-success text-white\">
              <i class=\"fa fa-power-off\" aria-hidden=\"true\"></i>
            </span>
            <span class=\"dropdown-item-desc\">
              Server restarted
              <span class=\"time\">9 Hours Ago</span>
            </span>
          </a>
          <a href=\"#\" class=\"dropdown-item\">
            <span class=\"dropdown-item-icon bg-danger text-white\">
              <i class=\"fa fa-server\" aria-hidden=\"true\"></i>
            </span>
            <span class=\"dropdown-item-desc\">
              Your Subscription Expired
              <span class=\"time\">10 Hours Ago</span>
            </span>
          </a>
          <a href=\"#\" class=\"dropdown-item\">
            <span class=\"dropdown-item-icon bg-purple text-white\">
              <i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>
            </span>
            <span class=\"dropdown-item-desc\">
              You have <b>4</b> new followers
              <span class=\"time\">Yesterday</span>
            </span>
          </a>
        </div>
        <div class=\"dropdown-footer text-center\">
          <a href=\"#\">View All <i class=\"fas fa-chevron-right\"></i></a>
        </div>
      </div>
    </li>
    <li class=\"dropdown dropdown-list-toggle\"><a href=\"#\" data-toggle=\"dropdown\"
        class=\"nav-link nav-link-lg\"><i class=\"far fa-envelope\"></i></a>
      <div class=\"dropdown-menu dropdown-list dropdown-menu-right\">
        <div class=\"dropdown-header\">Messages
          <div class=\"float-right\">
            <a href=\"#\">Mark All As Read</a>
          </div>
        </div>
        <div class=\"dropdown-list-content dropdown-list-message\">
          <a href=\"#\" class=\"dropdown-item\">
            <span class=\"dropdown-item-avatar text-white\">
              <img alt=\"image\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/users/user-1.png"), "html", null, true);
        echo "\" class=\"image-square\">
            </span>
            <span class=\"dropdown-item-desc\">
              <span class=\"message-user\">Michael Gardner</span>
              <span class=\"time messege-text\">Analysis Project and Design Flowchart</span>
              <span class=\"time\">2 Min Ago</span>
            </span>
          </a>
          <a href=\"#\" class=\"dropdown-item\">
            <span class=\"dropdown-item-avatar text-white\">
              <img alt=\"image\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/users/user-2.png"), "html", null, true);
        echo "\" class=\"image-square\">
            </span>
            <span class=\"dropdown-item-desc\">
              <span class=\"message-user\">Nancy Burton</span>
              <span class=\"time messege-text\">Client meeting is cancelled</span>
              <span class=\"time\">5 Hour Ago</span>
            </span>
          </a>
          <a href=\"#\" class=\"dropdown-item\">
            <span class=\"dropdown-item-avatar text-white\">
              <img alt=\"image\" src=\"assets/img/users/user-5.png\" class=\"image-square\">
            </span>
            <span class=\"dropdown-item-desc\">
              <span class=\"message-user\">Amiah Smith</span>
              <span class=\"time messege-text\">Project Planning</span>
              <span class=\"time\">12 Hour Ago</span>
            </span>
          </a>
          <a href=\"#\" class=\"dropdown-item\">
            <span class=\"dropdown-item-avatar text-white\">
              <img alt=\"image\" src=\"assets/img/users/user-4.png\" class=\"image-square\">
            </span>
            <span class=\"dropdown-item-desc\">
              <span class=\"message-user\">John Doe</span>
              <span class=\"time messege-text\">Leave application !!</span>
              <span class=\"time\">1 Days Ago</span>
            </span>
          </a>
          <a href=\"#\" class=\"dropdown-item\">
            <span class=\"dropdown-item-avatar text-white\">
              <img alt=\"image\" src=\"assets/img/users/user-3.png\" class=\"image-square\">
            </span>
            <span class=\"dropdown-item-desc\">
              <span class=\"message-user\">Wiltor Stone</span>
              <span class=\"time messege-text\">Discussion about increment!</span>
              <span class=\"time\">2 Days Ago</span>
            </span>
          </a>
          <a href=\"#\" class=\"dropdown-item\">
            <span class=\"dropdown-item-avatar text-white\">
              <img alt=\"image\" src=\"assets/img/users/user-2.png\" class=\"image-square\">
            </span>
            <span class=\"dropdown-item-desc\">
              <span class=\"message-user\">Nancy Burton</span>
              <span class=\"time messege-text\">Upcoming project meeting</span>
              <span class=\"time text-primary\">3 Days Ago</span>
            </span>
          </a>
        </div>
        <div class=\"dropdown-footer text-center\">
          <a href=\"#\">View All <i class=\"fas fa-chevron-right\"></i></a>
        </div>
      </div>
    </li>
    
    <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\"
        class=\"nav-link dropdown-toggle nav-link-lg nav-link-user\">
   <img alt=\"image\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/user.png"), "html", null, true);
        echo "\" class=\"user-img-radious-style\">
        <span class=\"d-sm-none d-lg-inline-block\"></span></a>
      <div class=\"dropdown-menu dropdown-menu-right\">
        <div class=\"dropdown-title\">Hello Jessica Hill</div>
        <a href=\"profile.html\" class=\"dropdown-item has-icon\">
          <i class=\"far fa-user\"></i> Profile
        </a>
        <a href=\"timeline.html\" class=\"dropdown-item has-icon\">
          <i class=\"fas fa-bolt\"></i> Activities
        </a>
        <a href=\"#\" class=\"dropdown-item has-icon\">
          <i class=\"fas fa-cog\"></i> Settings
        </a>
        <div class=\"dropdown-divider\"></div>
        <a href=\"auth-login.html\" class=\"dropdown-item has-icon text-danger\">
          <i class=\"fas fa-sign-out-alt\"></i> Logout
        </a>
      </div>
    </li>
  </ul>
</nav>
<div class=\"main-sidebar sidebar-style-2\">
  <aside id=\"sidebar-wrapper\">
    <div class=\"sidebar-brand\">
      <a href=\"index.html\">
        <img alt=\"image\" src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" class=\"header-logo\" />
        <span class=\"logo-name\">Grexa</span>
      </a>
    </div>
    
    <ul class=\"sidebar-menu\">
      <li class=\"menu-header\">Employee</li>
      <li class=\"dropdown active\">
        <a href=\"#\" class=\"nav-link has-dropdown\"><i class=\"fas fa-home\"></i><span>Gestion Employee</span></a>
        <ul class=\"dropdown-menu\">
          <li class=\"active\"><a class=\"nav-link\" href=\"";
        // line 196
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout_emp");
        echo "\">Formulaire Ajouter</a></li>
          <li><a class=\"nav-link\" href=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listemp");
        echo "\">Liste des Employee</a></li>
        </ul>
      </li>
      <li class=\"menu-header\">Team</li>
      <li class=\"dropdown\">
      
        <a href=\"#\" class=\"nav-link has-dropdown\"><i class=\"fab fa-gg\"></i><span>Gestion Team</span></a>
        <ul class=\"dropdown-menu\">
          <li><a class=\"nav-link\" href=\"";
        // line 205
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout_team");
        echo "\">Nouvelle Team</a></li>
          <li><a class=\"nav-link\" href=\"";
        // line 206
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listteam");
        echo "\">Liste des Teams</a></li>
     
        </ul>
      </li>
     


     <li class=\"menu-header\">Projets</li>
      <li class=\"dropdown\">
      
        <a href=\"#\" class=\"nav-link has-dropdown\"><i <i class=\"fas fa-layer-group\"></i><span>Gestion Projet</span></a>
        <ul class=\"dropdown-menu\">
          <li><a class=\"nav-link\" href=\"";
        // line 218
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout_projet");
        echo "\">Nouvelle Projet</a></li>
          <li><a class=\"nav-link\" href=\"";
        // line 219
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listprojet");
        echo "\">Liste des Projets</a></li>
     
        </ul>
      </li>
     
    
   
     
    
      
    </ul>
  </aside>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "employee/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 219,  286 => 218,  271 => 206,  267 => 205,  256 => 197,  252 => 196,  239 => 186,  211 => 161,  151 => 104,  138 => 94,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"navbar-bg\"></div>
<nav class=\"navbar navbar-expand-lg main-navbar\">
  <div class=\"form-inline mr-auto\">
    <ul class=\"navbar-nav mr-3\">
      <li><a href=\"#\" data-toggle=\"sidebar\" class=\"nav-link nav-link-lg collapse-btn\"><i
            class=\"fas fa-bars\"></i></a></li>
      <li>
      <div class=\"search-group\">
        <span class=\"nav-link nav-link-lg\" id=\"search\">
            <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
        </span>
        <input type=\"text\" class=\"search-control\" placeholder=\"search\" aria-label=\"search\" aria-describedby=\"search\">
      </div>
      </li>
    </ul>
  </div>
  <ul class=\"navbar-nav navbar-right\">
  <li><a href=\"#\" class=\"nav-link nav-link-lg fullscreen-btn\">
          <i class=\"fas fa-expand\"></i>
        </a>
      </li>
      
    <li class=\"dropdown dropdown-list-toggle\"><a href=\"#\" data-toggle=\"dropdown\"
        class=\"nav-link notification-toggle nav-link-lg beep\"><i class=\"far fa-bell\"></i></a>
      <div class=\"dropdown-menu dropdown-list dropdown-menu-right\">
        <div class=\"dropdown-header\">Notifications
          <div class=\"float-right\">
            <a href=\"#\">Mark All As Read</a>
          </div>
        </div>
        <div class=\"dropdown-list-content dropdown-list-icons\">
          <a href=\"#\" class=\"dropdown-item dropdown-item-unread\">
            <span class=\"dropdown-item-icon bg-primary text-white\">
              <i class=\"fas fa-shopping-cart\"></i>
            </span>
            <span class=\"dropdown-item-desc\">
              New Order
              <span class=\"time\">3 Hours Ago</span>
            </span>
          </a>
          <a href=\"#\" class=\"dropdown-item dropdown-item-unread\">
            <span class=\"dropdown-item-icon bg-info text-white\">
              <i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>
            </span>
            <span class=\"dropdown-item-desc\">
              Application Error
              <span class=\"time\">7 Hours Ago</span>
            </span>
          </a>
          <a href=\"#\" class=\"dropdown-item\">
            <span class=\"dropdown-item-icon bg-success text-white\">
              <i class=\"fa fa-power-off\" aria-hidden=\"true\"></i>
            </span>
            <span class=\"dropdown-item-desc\">
              Server restarted
              <span class=\"time\">9 Hours Ago</span>
            </span>
          </a>
          <a href=\"#\" class=\"dropdown-item\">
            <span class=\"dropdown-item-icon bg-danger text-white\">
              <i class=\"fa fa-server\" aria-hidden=\"true\"></i>
            </span>
            <span class=\"dropdown-item-desc\">
              Your Subscription Expired
              <span class=\"time\">10 Hours Ago</span>
            </span>
          </a>
          <a href=\"#\" class=\"dropdown-item\">
            <span class=\"dropdown-item-icon bg-purple text-white\">
              <i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>
            </span>
            <span class=\"dropdown-item-desc\">
              You have <b>4</b> new followers
              <span class=\"time\">Yesterday</span>
            </span>
          </a>
        </div>
        <div class=\"dropdown-footer text-center\">
          <a href=\"#\">View All <i class=\"fas fa-chevron-right\"></i></a>
        </div>
      </div>
    </li>
    <li class=\"dropdown dropdown-list-toggle\"><a href=\"#\" data-toggle=\"dropdown\"
        class=\"nav-link nav-link-lg\"><i class=\"far fa-envelope\"></i></a>
      <div class=\"dropdown-menu dropdown-list dropdown-menu-right\">
        <div class=\"dropdown-header\">Messages
          <div class=\"float-right\">
            <a href=\"#\">Mark All As Read</a>
          </div>
        </div>
        <div class=\"dropdown-list-content dropdown-list-message\">
          <a href=\"#\" class=\"dropdown-item\">
            <span class=\"dropdown-item-avatar text-white\">
              <img alt=\"image\" src=\"{{asset('assets/img/users/user-1.png')}}\" class=\"image-square\">
            </span>
            <span class=\"dropdown-item-desc\">
              <span class=\"message-user\">Michael Gardner</span>
              <span class=\"time messege-text\">Analysis Project and Design Flowchart</span>
              <span class=\"time\">2 Min Ago</span>
            </span>
          </a>
          <a href=\"#\" class=\"dropdown-item\">
            <span class=\"dropdown-item-avatar text-white\">
              <img alt=\"image\" src=\"{{asset('assets/img/users/user-2.png')}}\" class=\"image-square\">
            </span>
            <span class=\"dropdown-item-desc\">
              <span class=\"message-user\">Nancy Burton</span>
              <span class=\"time messege-text\">Client meeting is cancelled</span>
              <span class=\"time\">5 Hour Ago</span>
            </span>
          </a>
          <a href=\"#\" class=\"dropdown-item\">
            <span class=\"dropdown-item-avatar text-white\">
              <img alt=\"image\" src=\"assets/img/users/user-5.png\" class=\"image-square\">
            </span>
            <span class=\"dropdown-item-desc\">
              <span class=\"message-user\">Amiah Smith</span>
              <span class=\"time messege-text\">Project Planning</span>
              <span class=\"time\">12 Hour Ago</span>
            </span>
          </a>
          <a href=\"#\" class=\"dropdown-item\">
            <span class=\"dropdown-item-avatar text-white\">
              <img alt=\"image\" src=\"assets/img/users/user-4.png\" class=\"image-square\">
            </span>
            <span class=\"dropdown-item-desc\">
              <span class=\"message-user\">John Doe</span>
              <span class=\"time messege-text\">Leave application !!</span>
              <span class=\"time\">1 Days Ago</span>
            </span>
          </a>
          <a href=\"#\" class=\"dropdown-item\">
            <span class=\"dropdown-item-avatar text-white\">
              <img alt=\"image\" src=\"assets/img/users/user-3.png\" class=\"image-square\">
            </span>
            <span class=\"dropdown-item-desc\">
              <span class=\"message-user\">Wiltor Stone</span>
              <span class=\"time messege-text\">Discussion about increment!</span>
              <span class=\"time\">2 Days Ago</span>
            </span>
          </a>
          <a href=\"#\" class=\"dropdown-item\">
            <span class=\"dropdown-item-avatar text-white\">
              <img alt=\"image\" src=\"assets/img/users/user-2.png\" class=\"image-square\">
            </span>
            <span class=\"dropdown-item-desc\">
              <span class=\"message-user\">Nancy Burton</span>
              <span class=\"time messege-text\">Upcoming project meeting</span>
              <span class=\"time text-primary\">3 Days Ago</span>
            </span>
          </a>
        </div>
        <div class=\"dropdown-footer text-center\">
          <a href=\"#\">View All <i class=\"fas fa-chevron-right\"></i></a>
        </div>
      </div>
    </li>
    
    <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\"
        class=\"nav-link dropdown-toggle nav-link-lg nav-link-user\">
   <img alt=\"image\" src=\"{{asset('assets/img/user.png')}}\" class=\"user-img-radious-style\">
        <span class=\"d-sm-none d-lg-inline-block\"></span></a>
      <div class=\"dropdown-menu dropdown-menu-right\">
        <div class=\"dropdown-title\">Hello Jessica Hill</div>
        <a href=\"profile.html\" class=\"dropdown-item has-icon\">
          <i class=\"far fa-user\"></i> Profile
        </a>
        <a href=\"timeline.html\" class=\"dropdown-item has-icon\">
          <i class=\"fas fa-bolt\"></i> Activities
        </a>
        <a href=\"#\" class=\"dropdown-item has-icon\">
          <i class=\"fas fa-cog\"></i> Settings
        </a>
        <div class=\"dropdown-divider\"></div>
        <a href=\"auth-login.html\" class=\"dropdown-item has-icon text-danger\">
          <i class=\"fas fa-sign-out-alt\"></i> Logout
        </a>
      </div>
    </li>
  </ul>
</nav>
<div class=\"main-sidebar sidebar-style-2\">
  <aside id=\"sidebar-wrapper\">
    <div class=\"sidebar-brand\">
      <a href=\"index.html\">
        <img alt=\"image\" src=\"{{asset('assets/img/logo.png')}}\" class=\"header-logo\" />
        <span class=\"logo-name\">Grexa</span>
      </a>
    </div>
    
    <ul class=\"sidebar-menu\">
      <li class=\"menu-header\">Employee</li>
      <li class=\"dropdown active\">
        <a href=\"#\" class=\"nav-link has-dropdown\"><i class=\"fas fa-home\"></i><span>Gestion Employee</span></a>
        <ul class=\"dropdown-menu\">
          <li class=\"active\"><a class=\"nav-link\" href=\"{{path('ajout_emp') }}\">Formulaire Ajouter</a></li>
          <li><a class=\"nav-link\" href=\"{{path('listemp') }}\">Liste des Employee</a></li>
        </ul>
      </li>
      <li class=\"menu-header\">Team</li>
      <li class=\"dropdown\">
      
        <a href=\"#\" class=\"nav-link has-dropdown\"><i class=\"fab fa-gg\"></i><span>Gestion Team</span></a>
        <ul class=\"dropdown-menu\">
          <li><a class=\"nav-link\" href=\"{{path('ajout_team') }}\">Nouvelle Team</a></li>
          <li><a class=\"nav-link\" href=\"{{path('listteam') }}\">Liste des Teams</a></li>
     
        </ul>
      </li>
     


     <li class=\"menu-header\">Projets</li>
      <li class=\"dropdown\">
      
        <a href=\"#\" class=\"nav-link has-dropdown\"><i <i class=\"fas fa-layer-group\"></i><span>Gestion Projet</span></a>
        <ul class=\"dropdown-menu\">
          <li><a class=\"nav-link\" href=\"{{path('ajout_projet') }}\">Nouvelle Projet</a></li>
          <li><a class=\"nav-link\" href=\"{{path('listprojet') }}\">Liste des Projets</a></li>
     
        </ul>
      </li>
     
    
   
     
    
      
    </ul>
  </aside>
</div>", "employee/menu.html.twig", "C:\\laragon\\www\\Symfony4-projetEntreprise\\templates\\employee\\menu.html.twig");
    }
}
