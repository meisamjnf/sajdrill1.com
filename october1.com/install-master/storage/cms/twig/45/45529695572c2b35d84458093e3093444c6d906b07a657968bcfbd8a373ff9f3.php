<?php

/* /var/www/october1.com/install-master/plugins/rainlab/user/components/resetpassword/default.htm */
class __TwigTemplate_19a353f3fc76d1b37b810bd7c1cc28ecb299d3b2bd2654cca4e6f3b8509ca66b extends Twig_Template
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
        echo "<div id=\"partialUserResetForm\">
    ";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "code", array()) == null)) {
            // line 3
            echo "        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::restore")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    ";
        } else {
            // line 5
            echo "        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::reset")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 6
            echo "    ";
        }
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/october1.com/install-master/plugins/rainlab/user/components/resetpassword/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  41 => 6,  36 => 5,  33 => 4,  28 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"partialUserResetForm\">
    {% if __SELF__.code == null %}
        {% partial __SELF__ ~ '::restore' %}
    {% else %}
        {% partial __SELF__ ~ '::reset' %}
    {% endif %}
</div>", "/var/www/october1.com/install-master/plugins/rainlab/user/components/resetpassword/default.htm", "");
    }
}
