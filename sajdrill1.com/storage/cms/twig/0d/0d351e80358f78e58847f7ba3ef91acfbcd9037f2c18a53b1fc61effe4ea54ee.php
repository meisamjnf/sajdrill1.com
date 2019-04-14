<?php

/* /var/www/www-sajdrill-com/public_html/plugins/anandpatel/seoextension/components/cmspage/default.htm */
class __TwigTemplate_93b1357d021ae9fc660e55f7a252d4e0343d4bf21466121ed5c61dc4452f43ce extends Twig_Template
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
        // line 2
        if ((isset($context["hasBlog"]) ? $context["hasBlog"] : null)) {
            // line 3
            echo "    ";
            $context['__placeholder_meta_default_contents'] = null;            ob_start();            // line 4
            echo "
    ";
            $context['__placeholder_meta_default_contents'] = ob_get_clean();            // line 3
            echo $this->env->getExtension('CMS')->displayBlock('meta', $context['__placeholder_meta_default_contents']);
            unset($context['__placeholder_meta_default_contents']);            // line 6
            echo "
";
        } else {
            // line 8
            echo "
    ";
            // line 9
            if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "redirect_url", array())) {
                // line 10
                echo "        <meta http-equiv=\"refresh\" content=\"0; url=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "redirect_url", array()), "html", null, true);
                echo "\" />
    ";
            }
            // line 12
            echo "
    ";
            // line 13
            if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "seo_title", array())) {
                // line 14
                echo "        <title>";
                echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), array($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "seo_title", array())));
                echo "</title>
    ";
            }
            // line 16
            echo "
    ";
            // line 17
            if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "seo_description", array())) {
                // line 18
                echo "        <meta name=\"description\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "seo_description", array()), "html", null, true);
                echo "\">

";
            }
            // line 21
            echo "    ";
            if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "seo_keywords", array())) {
                // line 22
                echo "        <meta name=\"keywords\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "seo_keywords", array()), "html", null, true);
                echo "\">
    ";
            }
            // line 24
            echo "
    ";
            // line 25
            if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "canonical_url", array())) {
                // line 26
                echo "        <link rel=\"canonical\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "canonical_url", array()), "html", null, true);
                echo "\" />
    ";
            } else {
                // line 28
                echo "        ";
                echo call_user_func_array($this->env->getFilter('generateCanonicalUrl')->getCallable(), array(""));
                echo "
    ";
            }
            // line 30
            echo "
    <meta name=\"robots\" content=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "robot_index", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "robot_follow", array()), "html", null, true);
            echo "\">

    ";
            // line 33
            echo call_user_func_array($this->env->getFilter('otherMetaTags')->getCallable(), array(""));
            echo "


    ";
            // line 36
            if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogTitle", array())) {
                // line 37
                echo "        <meta property=\"og:title\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogTitle", array()), "html", null, true);
                echo "\" />
    ";
            }
            // line 39
            echo "
    ";
            // line 40
            if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogUrl", array())) {
                // line 41
                echo "        <meta property=\"og:url\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogUrl", array()), "html", null, true);
                echo "\" />
    ";
            }
            // line 43
            echo "
    ";
            // line 44
            if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogSiteName", array())) {
                // line 45
                echo "        <meta property=\"og:site_name\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogSiteName", array()), "html", null, true);
                echo "\" />
    ";
            }
            // line 47
            echo "
    ";
            // line 48
            if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogDescription", array())) {
                // line 49
                echo "        <meta property=\"og:description\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogDescription", array()), "html", null, true);
                echo "\" />
    ";
            }
            // line 51
            echo "
    ";
            // line 52
            if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogFbAppId", array())) {
                // line 53
                echo "        <meta property=\"fb:app_id\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogFbAppId", array()), "html", null, true);
                echo "\" />
    ";
            }
            // line 55
            echo "


";
        }
        // line 59
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/plugins/anandpatel/seoextension/components/cmspage/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 59,  163 => 55,  157 => 53,  155 => 52,  152 => 51,  146 => 49,  144 => 48,  141 => 47,  135 => 45,  133 => 44,  130 => 43,  124 => 41,  122 => 40,  119 => 39,  113 => 37,  111 => 36,  105 => 33,  98 => 31,  95 => 30,  89 => 28,  83 => 26,  81 => 25,  78 => 24,  72 => 22,  69 => 21,  62 => 18,  60 => 17,  57 => 16,  51 => 14,  49 => 13,  46 => 12,  40 => 10,  38 => 9,  35 => 8,  31 => 6,  29 => 3,  26 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% if hasBlog %}*/
/*     {% placeholder meta default %}*/
/* */
/*     {% endplaceholder %}*/
/* */
/* {% else %}*/
/* */
/*     {% if __SELF__.redirect_url %}*/
/*         <meta http-equiv="refresh" content="0; url={{__SELF__.redirect_url}}" />*/
/*     {% endif %}*/
/* */
/*     {% if __SELF__.seo_title %}*/
/*         <title>{{__SELF__.seo_title | generateTitle}}</title>*/
/*     {% endif %}*/
/* */
/*     {% if __SELF__.seo_description %}*/
/*         <meta name="description" content="{{__SELF__.seo_description}}">*/
/* */
/* {% endif %}*/
/*     {% if __SELF__.seo_keywords %}*/
/*         <meta name="keywords" content="{{__SELF__.seo_keywords}}">*/
/*     {% endif %}*/
/* */
/*     {% if __SELF__.canonical_url %}*/
/*         <link rel="canonical" href="{{__SELF__.canonical_url}}" />*/
/*     {% else %}*/
/*         {{ '' | generateCanonicalUrl}}*/
/*     {% endif %}*/
/* */
/*     <meta name="robots" content="{{__SELF__.robot_index}},{{__SELF__.robot_follow}}">*/
/* */
/*     {{ ''|otherMetaTags|raw }}*/
/* */
/* */
/*     {% if __SELF__.ogTitle %}*/
/*         <meta property="og:title" content="{{ __SELF__.ogTitle }}" />*/
/*     {% endif %}*/
/* */
/*     {% if __SELF__.ogUrl %}*/
/*         <meta property="og:url" content="{{ __SELF__.ogUrl }}" />*/
/*     {% endif %}*/
/* */
/*     {% if __SELF__.ogSiteName %}*/
/*         <meta property="og:site_name" content="{{ __SELF__.ogSiteName }}" />*/
/*     {% endif %}*/
/* */
/*     {% if __SELF__.ogDescription %}*/
/*         <meta property="og:description" content="{{ __SELF__.ogDescription }}" />*/
/*     {% endif %}*/
/* */
/*     {% if __SELF__.ogFbAppId %}*/
/*         <meta property="fb:app_id" content="{{ __SELF__.ogFbAppId  }}" />*/
/*     {% endif %}*/
/* */
/* */
/* */
/* {% endif %}*/
/* */
/* */
