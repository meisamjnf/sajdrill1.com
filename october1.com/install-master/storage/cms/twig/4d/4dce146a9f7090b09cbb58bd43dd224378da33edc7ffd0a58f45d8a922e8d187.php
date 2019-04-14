<?php

/* /var/www/october1.com/install-master/themes/hambern-hambern-blank-bootstrap-4/pages/author.htm */
class __TwigTemplate_03e06a27a00e0b26b05b0f181117307dd25891186a0e375e2d7b6a2de877fcbc extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('jumbotron'        );
        // line 2
        echo "  <h1 class=\"display-3\">Hambern</h1>
  <p class=\"lead\">The template is created by Mattias \"Hambern\" Hamberg</p>
  <p>Please visit my homepage at <a href=\"http://hambergmedia.se\">hambergmedia.se</a></p>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 6
        echo "
<div data-type=\"youtube\" data-video-id=\"Bf4HAse1DOQ\" data-plyr='{\"autoplay\":true}'></div>";
    }

    public function getTemplateName()
    {
        return "/var/www/october1.com/install-master/themes/hambern-hambern-blank-bootstrap-4/pages/author.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  30 => 1,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put jumbotron %}
  <h1 class=\"display-3\">Hambern</h1>
  <p class=\"lead\">The template is created by Mattias \"Hambern\" Hamberg</p>
  <p>Please visit my homepage at <a href=\"http://hambergmedia.se\">hambergmedia.se</a></p>
{% endput %}

<div data-type=\"youtube\" data-video-id=\"Bf4HAse1DOQ\" data-plyr='{\"autoplay\":true}'></div>", "/var/www/october1.com/install-master/themes/hambern-hambern-blank-bootstrap-4/pages/author.htm", "");
    }
}
