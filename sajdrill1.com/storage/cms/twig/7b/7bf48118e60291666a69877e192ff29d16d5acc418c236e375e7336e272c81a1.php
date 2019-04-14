<?php

/* /var/www/www-sajdrill-com/public_html/themes/jtherczeg-corlate/pages/products/portable-drill.htm */
class __TwigTemplate_3c1003b51f95f76d90e690c8f682be5aa0d241f2100fb7fc8c32892cf0e92244 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->componentFunction("advanced"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/themes/jtherczeg-corlate/pages/products/portable-drill.htm";
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
/*     {% component 'advanced' %}*/
/* </div>*/
