<?php

/* /var/www/www-sajdrill-com/public_html/themes/jtherczeg-corlate/pages/forum.htm */
class __TwigTemplate_c559e1374fc34a3d5a0a33d61c4648bc42b36631ce9c4d16f29f1c348095166f extends Twig_Template
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
        echo $this->env->getExtension('CMS')->componentFunction("forumChannels"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/themes/jtherczeg-corlate/pages/forum.htm";
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
/*         {% component 'forumChannels' %}*/
/*     </div>*/
/* </div>*/
