<?php

/* /var/www/october1.com/install-master/themes/demo/partials/site/header.htm */
class __TwigTemplate_f57db34b9e32985f806b2bc6d00b7cb7870734878aad9a511a3f1c96a39e06ba extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">October Demo</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li><a href = \"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("account");
        echo "\"> Account </a></li>
                <li><a href = \"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\"> Blog </a></li>
                <li><a href = \"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("forum");
        echo "\"> Forum </a></li>
                <li><a href = \"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("formoctober");
        echo "\"> Formoctober </a></li>
                <li class=\"";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Basic concepts</a></li>
                <li class=\"";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "ajax")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        echo "\">AJAX framework</a></li>
                <li class=\"";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "plugins")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("plugins");
        echo "\">Plugin components</a></li>
                
                
                  ";
        // line 25
        if (($context["user"] ?? null)) {
            // line 26
            echo "                       <li><a href=\"a\" data-request=\"onLogout\">Logout</a></li>
                       ";
        }
        // line 28
        echo "                  
                  
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/var/www/october1.com/install-master/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 28,  87 => 26,  85 => 25,  75 => 22,  67 => 21,  59 => 20,  55 => 19,  51 => 18,  47 => 17,  43 => 16,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">October Demo</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li><a href = \"{{ 'account' |page }}\"> Account </a></li>
                <li><a href = \"{{ 'blog' |page }}\"> Blog </a></li>
                <li><a href = \"{{ 'forum' |page }}\"> Forum </a></li>
                <li><a href = \"{{ 'formoctober' |page }}\"> Formoctober </a></li>
                <li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'home'|page }}\">Basic concepts</a></li>
                <li class=\"{% if this.page.id == 'ajax' %}active{% endif %}\"><a href=\"{{ 'ajax'|page }}\">AJAX framework</a></li>
                <li class=\"{% if this.page.id == 'plugins' %}active{% endif %}\"><a href=\"{{ 'plugins'|page }}\">Plugin components</a></li>
                
                
                  {% if user %}
                       <li><a href=\"a\" data-request=\"onLogout\">Logout</a></li>
                       {% endif %}
                  
                  
            </ul>
        </div>
    </div>
</nav>", "/var/www/october1.com/install-master/themes/demo/partials/site/header.htm", "");
    }
}
