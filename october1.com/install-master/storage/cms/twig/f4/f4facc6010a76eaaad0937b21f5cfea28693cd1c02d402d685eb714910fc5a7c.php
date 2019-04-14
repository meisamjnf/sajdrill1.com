<?php

/* /var/www/october1.com/install-master/themes/demo/pages/account.htm */
class __TwigTemplate_0b1d70b405e299a34f36b18d86d76ada0fcc062e799a7aa0d4e49ff996c23d89 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("account"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/october1.com/install-master/themes/demo/pages/account.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'account' %}", "/var/www/october1.com/install-master/themes/demo/pages/account.htm", "");
    }
}
