<?php

/* /var/www/www-sajdrill-com/public_html/plugins/raviraj/rjgallery/components/gallery/default.htm */
class __TwigTemplate_d9ab125694964dd931068fa878f9767f1af1d4df2bc47b8686a2601a907bca04 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->startBlock('styles'        );
        // line 2
        echo "    <style>
        #";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo " {
            list-style: none outside none;
            padding-left: 0;
        }
        #";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo " li {
            display: block;
            float: left;
            height: ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
        echo "px;
            margin-bottom: 6px;
            margin-right: 6px;
            width: ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
        echo "px;
        }
        #";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo " li a {
            height: ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
        echo "px;
            width: ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
        echo "px;
        }
        #";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo " li a img {
            height: ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
        echo "px;
            width: ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
        echo "px;
        }
    </style>
";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 25
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 26
        echo "    <script>
         \$(document).ready(function() {
            var ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo " = \$(\"#";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "\").lightGallery({
                // Elements
                thumbnail   : ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["thumbnail"]) ? $context["thumbnail"] : null), "html", null, true);
        echo ",
                caption     : ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true);
        echo ",
                desc        : ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["desc"]) ? $context["desc"] : null), "html", null, true);
        echo ",
                counter     : ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
        echo ",
                controls    : ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["controls"]) ? $context["controls"] : null), "html", null, true);
        echo ", 
                preload     : ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["preload"]) ? $context["preload"] : null), "html", null, true);
        echo ",

                // Transitions
                mode   : '";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["mode"]) ? $context["mode"] : null), "html", null, true);
        echo "',
                useCSS : true,
                easing : 'linear',
                speed  : ";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["speed"]) ? $context["speed"] : null), "html", null, true);
        echo ",

                // Navigation
                hideControlOnEnd : false,
                loop             : ";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["loop"]) ? $context["loop"] : null), "html", null, true);
        echo ",
                auto             : ";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["auto"]) ? $context["auto"] : null), "html", null, true);
        echo ",
                pause            : ";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["pause"]) ? $context["pause"] : null), "html", null, true);
        echo ",
                escKey           : ";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["escKey"]) ? $context["escKey"] : null), "html", null, true);
        echo ",
                swipeThreshold    : 50,

                lang : { allPhotos: '";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
        echo "' },
            });
        });
    </script>
";
        // line 25
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 56
        echo "
<div style=\"width:100%\">
    <ul id=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "\">
        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 60
            echo "            <li data-src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
            echo "\" data-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
            echo "\" data-desc=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
            echo "\">
                <a href=\"#\"><img src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "getThumb", array(0 => (isset($context["width"]) ? $context["width"] : null), 1 => (isset($context["height"]) ? $context["height"] : null), 2 => (isset($context["resizer"]) ? $context["resizer"] : null)), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
            echo "\" /></a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/plugins/raviraj/rjgallery/components/gallery/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 64,  179 => 61,  170 => 60,  166 => 59,  160 => 58,  156 => 56,  154 => 25,  147 => 51,  141 => 48,  137 => 47,  133 => 46,  129 => 45,  122 => 41,  116 => 38,  110 => 35,  106 => 34,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  83 => 28,  79 => 26,  77 => 25,  75 => 1,  69 => 21,  65 => 20,  61 => 19,  56 => 17,  52 => 16,  48 => 15,  43 => 13,  37 => 10,  31 => 7,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% put styles %}*/
/*     <style>*/
/*         #{{ __SELF__ }} {*/
/*             list-style: none outside none;*/
/*             padding-left: 0;*/
/*         }*/
/*         #{{ __SELF__ }} li {*/
/*             display: block;*/
/*             float: left;*/
/*             height: {{ height }}px;*/
/*             margin-bottom: 6px;*/
/*             margin-right: 6px;*/
/*             width: {{ width }}px;*/
/*         }*/
/*         #{{ __SELF__ }} li a {*/
/*             height: {{ height }}px;*/
/*             width: {{ width }}px;*/
/*         }*/
/*         #{{ __SELF__ }} li a img {*/
/*             height: {{ height }}px;*/
/*             width: {{ width }}px;*/
/*         }*/
/*     </style>*/
/* {% endput %}*/
/* {% put scripts %}*/
/*     <script>*/
/*          $(document).ready(function() {*/
/*             var {{ __SELF__ }} = $("#{{ __SELF__ }}").lightGallery({*/
/*                 // Elements*/
/*                 thumbnail   : {{ thumbnail }},*/
/*                 caption     : {{ caption }},*/
/*                 desc        : {{ desc }},*/
/*                 counter     : {{ counter }},*/
/*                 controls    : {{ controls }}, */
/*                 preload     : {{ preload }},*/
/* */
/*                 // Transitions*/
/*                 mode   : '{{ mode }}',*/
/*                 useCSS : true,*/
/*                 easing : 'linear',*/
/*                 speed  : {{ speed }},*/
/* */
/*                 // Navigation*/
/*                 hideControlOnEnd : false,*/
/*                 loop             : {{ loop }},*/
/*                 auto             : {{ auto }},*/
/*                 pause            : {{ pause }},*/
/*                 escKey           : {{ escKey }},*/
/*                 swipeThreshold    : 50,*/
/* */
/*                 lang : { allPhotos: '{{ lang }}' },*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endput %}*/
/* */
/* <div style="width:100%">*/
/*     <ul id="{{ __SELF__ }}" class="{{ __SELF__ }}">*/
/*         {% for image in gallery.images %}*/
/*             <li data-src="{{ image.path }}" data-title="{{ image.title }}" data-desc="{{ image.description }}">*/
/*                 <a href="#"><img src="{{ image.getThumb(width, height, resizer) }}" alt="{{ image.title }}" /></a>*/
/*             </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* */
