<?php

/* /var/www/www-sajdrill-com/public_html/plugins/pkleindienst/blogseries/components/postnavigation/default.htm */
class __TwigTemplate_520f109429a9fabfd329b368f636efbe9c3cda152fdf88437b91538d7419d30e extends Twig_Template
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
        $context["postNav"] = (isset($context["__SELF__"]) ? $context["__SELF__"] : null);
        // line 2
        echo "
";
        // line 3
        if (($this->getAttribute((isset($context["postNav"]) ? $context["postNav"] : null), "series", array()) && $this->getAttribute($this->getAttribute((isset($context["postNav"]) ? $context["postNav"] : null), "series", array()), "posts", array()))) {
            // line 4
            echo "<div class=\"panel panel-default\">
    ";
            // line 5
            if ($this->getAttribute((isset($context["postNav"]) ? $context["postNav"] : null), "smallNav", array())) {
                // line 6
                echo "        <div class=\"panel-body\">
            <p>This post is part of a series called <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["postNav"]) ? $context["postNav"] : null), "series", array()), "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["postNav"]) ? $context["postNav"] : null), "series", array()), "title", array()), "html", null, true);
                echo "</a>.</p>
            <p>
                ";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["postNav"]) ? $context["postNav"] : null), "series", array()), "posts", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                    // line 10
                    echo "                    ";
                    if (($this->getAttribute($context["post"], "slug", array()) == $this->getAttribute((isset($context["postNav"]) ? $context["postNav"] : null), "slug", array()))) {
                        // line 11
                        echo "                        ";
                        $context["previous"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["postNav"]) ? $context["postNav"] : null), "series", array()), "posts", array()), ($this->getAttribute($context["loop"], "index0", array()) - 1), array(), "array");
                        // line 12
                        echo "                        ";
                        $context["next"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["postNav"]) ? $context["postNav"] : null), "series", array()), "posts", array()), $this->getAttribute($context["loop"], "index", array()), array(), "array");
                        // line 13
                        echo "
                        ";
                        // line 14
                        if ((isset($context["previous"]) ? $context["previous"] : null)) {
                            // line 15
                            echo "                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previous"]) ? $context["previous"] : null), "url", array()), "html", null, true);
                            echo "\" class=\"pull-left\" aria-label=\"Previous\"><span aria-hidden=\"true\">&laquo;</span> ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previous"]) ? $context["previous"] : null), "title", array()), "html", null, true);
                            echo "</a>
                        ";
                        }
                        // line 17
                        echo "
                        ";
                        // line 18
                        if ((isset($context["next"]) ? $context["next"] : null)) {
                            // line 19
                            echo "                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next"]) ? $context["next"] : null), "url", array()), "html", null, true);
                            echo "\" class=\"pull-right\" aria-label=\"Next\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next"]) ? $context["next"] : null), "title", array()), "html", null, true);
                            echo " <span aria-hidden=\"true\">&raquo;</span></a>
                        ";
                        }
                        // line 21
                        echo "                    ";
                    }
                    // line 22
                    echo "                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "            </p>
        </div>
    ";
            } else {
                // line 26
                echo "        <div class=\"panel-body\">
            <p>This post is part of a series called <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["postNav"]) ? $context["postNav"] : null), "series", array()), "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["postNav"]) ? $context["postNav"] : null), "series", array()), "title", array()), "html", null, true);
                echo "</a>.</p>
        </div>
        <!-- Full -->
        <div class=\"list-group\">
            ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["postNav"]) ? $context["postNav"] : null), "series", array()), "posts", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                    // line 32
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                    echo "\" class=\"list-group-item ";
                    echo ((($this->getAttribute($context["post"], "slug", array()) == $this->getAttribute((isset($context["postNav"]) ? $context["postNav"] : null), "slug", array()))) ? ("active") : (null));
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                    echo "</a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "        </div>
    ";
            }
            // line 36
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/plugins/pkleindienst/blogseries/components/postnavigation/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 36,  144 => 34,  131 => 32,  127 => 31,  118 => 27,  115 => 26,  110 => 23,  96 => 22,  93 => 21,  85 => 19,  83 => 18,  80 => 17,  72 => 15,  70 => 14,  67 => 13,  64 => 12,  61 => 11,  58 => 10,  41 => 9,  34 => 7,  31 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set postNav = __SELF__ %}*/
/* */
/* {% if postNav.series and postNav.series.posts %}*/
/* <div class="panel panel-default">*/
/*     {% if postNav.smallNav %}*/
/*         <div class="panel-body">*/
/*             <p>This post is part of a series called <a href="{{ postNav.series.url }}">{{ postNav.series.title }}</a>.</p>*/
/*             <p>*/
/*                 {% for post in postNav.series.posts %}*/
/*                     {% if post.slug == postNav.slug %}*/
/*                         {% set previous = postNav.series.posts[loop.index0-1] %}*/
/*                         {% set next = postNav.series.posts[loop.index] %}*/
/* */
/*                         {% if previous %}*/
/*                             <a href="{{ previous.url }}" class="pull-left" aria-label="Previous"><span aria-hidden="true">&laquo;</span> {{ previous.title }}</a>*/
/*                         {% endif %}*/
/* */
/*                         {% if next %}*/
/*                             <a href="{{next.url }}" class="pull-right" aria-label="Next">{{ next.title }} <span aria-hidden="true">&raquo;</span></a>*/
/*                         {% endif %}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             </p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="panel-body">*/
/*             <p>This post is part of a series called <a href="{{ postNav.series.url }}">{{ postNav.series.title }}</a>.</p>*/
/*         </div>*/
/*         <!-- Full -->*/
/*         <div class="list-group">*/
/*             {% for post in postNav.series.posts %}*/
/*                 <a href="{{ post.url }}" class="list-group-item {{ post.slug == postNav.slug ? 'active' : null }}">{{ post.title }}</a>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endif %}*/
/* </div>*/
/* {% endif %}*/
