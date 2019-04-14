<?php

/* /var/www/october1.com/install-master/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm */
class __TwigTemplate_96aed554217f228fd1c5a49d2a1245da00a2c0b3e0e73a4af50bebff2d2d958a extends Twig_Template
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
        echo "<section id=\"navbar\" class=\"m-b-3\">
\t<nav class=\"navbar navbar-dark bg-inverse navbar-fixed-top\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("features");
        echo "\">Bootstrap 4</a>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item";
        // line 6
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "features")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("features");
        echo "\">Features</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 9
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "author")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("author");
        echo "\">Author</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</nav>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/october1.com/install-master/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  42 => 9,  37 => 7,  33 => 6,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"navbar\" class=\"m-b-3\">
\t<nav class=\"navbar navbar-dark bg-inverse navbar-fixed-top\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"{{ 'features'|page }}\">Bootstrap 4</a>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'features' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'features'|page }}\">Features</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'author' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'author'|page }}\">Author</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</nav>
</section>", "/var/www/october1.com/install-master/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm", "");
    }
}
