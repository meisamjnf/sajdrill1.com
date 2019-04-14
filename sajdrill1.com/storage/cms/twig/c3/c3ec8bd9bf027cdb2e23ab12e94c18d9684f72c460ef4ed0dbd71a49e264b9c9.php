<?php

/* /var/www/www-sajdrill-com/public_html/plugins/cheerfullab/frontendspelling/components/frontendspelling/default.htm */
class __TwigTemplate_d9cf4bda39de23c4469ffad37bc3bc3b1dfa74987f96bd83cfb1e9932815a1cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::tes_css")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::tes_js")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/plugins/cheerfullab/frontendspelling/components/frontendspelling/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }
}
/* {% partial __SELF__ ~ '::tes_css' %}*/
/* {% partial __SELF__ ~ '::tes_js' %}*/
/* */
