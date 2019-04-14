<?php

/* /var/www/october1.com/install-master/themes/demo/layouts/fallback.htm */
class __TwigTemplate_fd8cb9309e163bbee23e69435a66c27a287409304a31b8b279b43811eed27569 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/var/www/october1.com/install-master/themes/demo/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/var/www/october1.com/install-master/themes/demo/layouts/fallback.htm", "");
    }
}
