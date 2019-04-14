<?php

/* /var/www/www-sajdrill-com/public_html/themes/jtherczeg-corlate/pages/qanda.htm */
class __TwigTemplate_028feba44d40b19c4b076eb4158df07b17a724dbcfc743d1b377dfb900fee140 extends Twig_Template
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
        echo "<div class=\"container\">
    ";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("faqDisplayer"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/themes/jtherczeg-corlate/pages/qanda.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="container">*/
/*     {% component 'faqDisplayer' %}*/
/* </div>*/
