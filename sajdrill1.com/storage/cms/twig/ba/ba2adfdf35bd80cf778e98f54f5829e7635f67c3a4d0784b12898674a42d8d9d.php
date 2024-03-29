<?php

/* /var/www/www-sajdrill-com/public_html/plugins/rainlab/blog/components/post/default.htm */
class __TwigTemplate_7d2731b4e215ed92f46f4b621db2e9775e0ced49f8bf06b7bd4b8b2dbfff7b25 extends Twig_Template
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
        $context["post"] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "post", array());
        // line 2
        echo "
<div class=\"content\">";
        // line 3
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content_html", array());
        echo "</div>

";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), "count", array())) {
            // line 6
            echo "    <div class=\"featured-images text-center\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 8
                echo "            <p>
                <img
                    data-src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                echo "\"
                    src=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                echo "\"
                    alt=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
                echo "\"
                    style=\"max-width: 100%\" />
            </p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </div>
";
        }
        // line 18
        echo "
<p class=\"info\">
    Posted
    ";
        // line 21
        if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories", array()), "count", array())) {
            echo " in
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 23
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 24
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    ";
        }
        // line 26
        echo "    on ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "published_at", array()), "M d, Y"), "html", null, true);
        echo "
</p>
";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/plugins/rainlab/blog/components/post/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 26,  113 => 25,  99 => 24,  90 => 23,  73 => 22,  69 => 21,  64 => 18,  60 => 16,  50 => 12,  46 => 11,  42 => 10,  38 => 8,  34 => 7,  31 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set post = __SELF__.post %}*/
/* */
/* <div class="content">{{ post.content_html|raw }}</div>*/
/* */
/* {% if post.featured_images.count %}*/
/*     <div class="featured-images text-center">*/
/*         {% for image in post.featured_images %}*/
/*             <p>*/
/*                 <img*/
/*                     data-src="{{ image.filename }}"*/
/*                     src="{{ image.path }}"*/
/*                     alt="{{ image.description }}"*/
/*                     style="max-width: 100%" />*/
/*             </p>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endif %}*/
/* */
/* <p class="info">*/
/*     Posted*/
/*     {% if post.categories.count %} in*/
/*         {% for category in post.categories %}*/
/*             <a href="{{ category.url }}">{{ category.name }}</a>{% if not loop.last %}, {% endif %}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/*     on {{ post.published_at|date('M d, Y') }}*/
/* </p>*/
/* */
