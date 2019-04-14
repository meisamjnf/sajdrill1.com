<?php

/* /var/www/www-sajdrill-com/public_html/plugins/pkleindienst/blogsearch/components/searchform/default.htm */
class __TwigTemplate_6037b52bfa911e0348de4ad2e1039f5d941830a42218da8b7d8f380b5bd97db1 extends Twig_Template
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
        echo "<form class=\"form-inline\" method=\"GET\" action=\"";
        echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "resultPage", array()));
        echo "\">
    <input type=\"text\" name=\"search\" class=\"form-control\">

    ";
        // line 4
        if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "categoryFilter", array())) {
            // line 5
            echo "        <select name=\"cat[]\" class=\"form-control\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "categories", array()));
            foreach ($context['_seq'] as $context["key"] => $context["cat"]) {
                // line 7
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["cat"], "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </select>
    ";
        }
        // line 11
        echo "
    <button class=\"btn btn btn-primary\" type=\"submit\">Search</button>
</form>";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/plugins/pkleindienst/blogsearch/components/searchform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  46 => 9,  35 => 7,  31 => 6,  28 => 5,  26 => 4,  19 => 1,);
    }
}
/* <form class="form-inline" method="GET" action="{{ __SELF__.resultPage|page }}">*/
/*     <input type="text" name="search" class="form-control">*/
/* */
/*     {% if __SELF__.categoryFilter %}*/
/*         <select name="cat[]" class="form-control">*/
/*         {% for key,cat in __SELF__.categories %}*/
/*             <option value="{{ key }}">{{ cat }}</option>*/
/*         {% endfor %}*/
/*         </select>*/
/*     {% endif %}*/
/* */
/*     <button class="btn btn btn-primary" type="submit">Search</button>*/
/* </form>*/
