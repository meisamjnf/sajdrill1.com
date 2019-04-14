<?php

/* /var/www/www-sajdrill-com/public_html/themes/jtherczeg-corlate/pages/forum/forum-channel.htm */
class __TwigTemplate_efd64f315cf8cd7cd602d25e4d8ce7295afa3400c8eba1efccbe79f2cd723887 extends Twig_Template
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
    <div class=\"sjt-forum-fa\">
        ";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("forumChannel"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/themes/jtherczeg-corlate/pages/forum/forum-channel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="container">*/
/*     <div class="sjt-forum-fa">*/
/*         {% component 'forumChannel' %}*/
/*     </div>*/
/* </div>*/
