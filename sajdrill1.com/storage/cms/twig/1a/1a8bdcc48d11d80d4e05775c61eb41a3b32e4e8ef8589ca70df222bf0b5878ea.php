<?php

/* /var/www/www-sajdrill-com/public_html/plugins/rahman/blogtags/components/relatedposts/default.htm */
class __TwigTemplate_a791dc214b5e311c961e65d77bc810a846a0f11995191b9c5961d445a242b433 extends Twig_Template
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
        $context["posts"] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "posts", array());
        // line 2
        echo "
<div class=\"row\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "    <div class=\"col-md-6\">
        <h3>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h3>
        <p>
            <i class=\"glyphicon glyphicon-tags\"></i>
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "tags", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 10
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo " ";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 11
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        </p>
        <p>";
            // line 13
            echo call_user_func_array($this->env->getFunction('str_words')->getCallable(), array("words", $this->getAttribute($context["post"], "content", array()), 50));
            echo "</p>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/plugins/rahman/blogtags/components/relatedposts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 16,  79 => 13,  76 => 12,  62 => 11,  55 => 10,  38 => 9,  32 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% set posts = __SELF__.posts %}*/
/* */
/* <div class="row">*/
/*     {% for post in posts %}*/
/*     <div class="col-md-6">*/
/*         <h3>{{ post.title }}</h3>*/
/*         <p>*/
/*             <i class="glyphicon glyphicon-tags"></i>*/
/*             {% for tag in post.tags %}*/
/*             {{ tag.name }} {% if not loop.last %}, {% endif %}*/
/*             {% endfor %}*/
/*         </p>*/
/*         <p>{{ str_words(post.content, 50) }}</p>*/
/*     </div>*/
/*     {% endfor %}*/
/* </div>*/
/* */
