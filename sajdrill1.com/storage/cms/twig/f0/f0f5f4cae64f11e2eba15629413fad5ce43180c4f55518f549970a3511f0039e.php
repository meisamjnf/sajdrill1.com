<?php

/* /var/www/www-sajdrill-com/public_html/plugins/anandpatel/seoextension/components/blogpost/default.htm */
class __TwigTemplate_2b8a2abd9f19b77d534dbc48229b9da4be2c7d719da05418e9b5c97d63a8a97c extends Twig_Template
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
        echo "

";
        // line 3
        echo $this->env->getExtension('CMS')->startBlock('meta'        );
        // line 4
        echo '<!-- X_OCTOBER_DEFAULT_BLOCK_CONTENT -->';
        // line 5
        echo "    ";
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "redirect_url", array())) {
            // line 6
            echo "        <meta http-equiv=\"refresh\" content=\"0; url=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "redirect_url", array()), "html", null, true);
            echo "\" />
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "seo_title", array())) {
            // line 10
            echo "        <title>";
            echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), array($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "seo_title", array())));
            echo "</title>
    ";
        } else {
            // line 12
            echo "        <title>";
            echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), array($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array())));
            echo "</title>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "seo_description", array())) {
            // line 16
            echo "        <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "seo_description", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 18
        echo "
    ";
        // line 19
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "seo_keywords", array())) {
            // line 20
            echo "        <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "seo_keywords", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 22
        echo "
    ";
        // line 23
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "canonical_url", array())) {
            // line 24
            echo "        <link rel=\"canonical\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "canonical_url", array()), "html", null, true);
            echo "\" />
    ";
        } else {
            // line 26
            echo "        ";
            echo call_user_func_array($this->env->getFilter('generateCanonicalUrl')->getCallable(), array(""));
            echo "
    ";
        }
        // line 28
        echo "
        <meta name=\"robots\" content=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "robot_index", array()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "robot_follow", array()), "html", null, true);
        echo "\">

    ";
        // line 31
        echo call_user_func_array($this->env->getFilter('otherMetaTags')->getCallable(), array(""));
        echo "

    ";
        // line 33
        echo call_user_func_array($this->env->getFilter('generateOgTags')->getCallable(), array((isset($context["post"]) ? $context["post"] : null)));
        echo "
";
        // line 3
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 35
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/plugins/anandpatel/seoextension/components/blogpost/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 35,  111 => 3,  107 => 33,  102 => 31,  95 => 29,  92 => 28,  86 => 26,  80 => 24,  78 => 23,  75 => 22,  69 => 20,  67 => 19,  64 => 18,  58 => 16,  56 => 15,  53 => 14,  47 => 12,  41 => 10,  39 => 9,  36 => 8,  30 => 6,  27 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* */
/* */
/* {% put meta %}*/
/* {% default %}*/
/*     {% if post.redirect_url %}*/
/*         <meta http-equiv="refresh" content="0; url={{post.redirect_url}}" />*/
/*     {% endif %}*/
/* */
/*     {% if post.seo_title %}*/
/*         <title>{{ post.seo_title | generateTitle}}</title>*/
/*     {% else %}*/
/*         <title>{{ post.title | generateTitle }}</title>*/
/*     {% endif %}*/
/* */
/*     {% if post.seo_description %}*/
/*         <meta name="description" content="{{post.seo_description}}">*/
/*     {% endif %}*/
/* */
/*     {% if post.seo_keywords %}*/
/*         <meta name="keywords" content="{{post.seo_keywords}}">*/
/*     {% endif %}*/
/* */
/*     {% if post.canonical_url %}*/
/*         <link rel="canonical" href="{{post.canonical_url}}" />*/
/*     {% else %}*/
/*         {{ '' | generateCanonicalUrl}}*/
/*     {% endif %}*/
/* */
/*         <meta name="robots" content="{{post.robot_index}},{{post.robot_follow}}">*/
/* */
/*     {{ ''|otherMetaTags|raw }}*/
/* */
/*     {{ post|generateOgTags }}*/
/* {% endput %}*/
/* */
/* */
