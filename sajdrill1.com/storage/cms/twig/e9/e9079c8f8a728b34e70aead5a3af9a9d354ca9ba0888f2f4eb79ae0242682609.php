<?php

/* /var/www/www-sajdrill-com/public_html/themes/jtherczeg-corlate/layouts/default.htm */
class __TwigTemplate_cd5f3e7c4b4693ede44aaa7dd918be3cc0b04f78803e6d2e119bb92a42366540 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("frontendspellings"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "<!DOCTYPE html>
";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
\t<meta name=\"keywords\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_keywords", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_author", array()), "html", null, true);
        echo "\">
    <meta name=\"format-detection\" content=\"telephone=no\">
    <title>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</title>
\t";
        // line 12
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("SeoCmsPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 13
        echo "\t<!-- core CSS -->
\t";
        // line 14
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 15
        echo "\t<link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/bootstrap-rtl.min.css", 1 => "assets/css/bootstrap.min.css", 2 => "assets/css/font-awesome.min.css", 3 => "assets/css/animate.min.css", 4 => "assets/css/prettyPhoto.css", 5 => "assets/css/main.css", 6 => "assets/css/responsive.css", 7 => "assets/css/sajit.css"));
        // line 23
        echo "\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"";
        // line 24
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/favicon.ico");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 25
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/apple-touch-icon-144-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 26
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/apple-touch-icon-114-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 27
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/apple-touch-icon-72-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 28
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/apple-touch-icon-57-precomposed.png");
        echo "\">
</head><!--/head-->

<body class=\"homepage\">

<header id=\"header\">
\t\t";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("top"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "</header><!--/header-->

    ";
        // line 38
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 39
        echo "    ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("googleTracker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 40
        echo "<section id=\"bottom\">
\t";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("bottom"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "</section><!--/#bottom-->

<footer id=\"footer\" class=\"midnight-blue\">
\t";
        // line 45
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 46
        echo "</footer><!--/#footer-->

<!-- Scripts -->
<script type=\"text/javascript\" src=\"";
        // line 49
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/html5shiv.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 50
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/respond.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 51
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 52
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 53
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.prettyPhoto.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 54
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.isotope.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 55
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/main.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 56
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 57
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/sajit.js");
        echo "\"></script>
";
        // line 58
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 59
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 60
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/themes/jtherczeg-corlate/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 60,  179 => 59,  172 => 58,  168 => 57,  164 => 56,  160 => 55,  156 => 54,  152 => 53,  148 => 52,  144 => 51,  140 => 50,  136 => 49,  131 => 46,  127 => 45,  122 => 42,  118 => 41,  115 => 40,  110 => 39,  108 => 38,  104 => 36,  99 => 35,  95 => 34,  86 => 28,  82 => 27,  78 => 26,  74 => 25,  70 => 24,  67 => 23,  64 => 15,  61 => 14,  58 => 13,  54 => 12,  48 => 11,  43 => 9,  39 => 8,  35 => 7,  25 => 2,  19 => 1,);
    }
}
/* {% component 'frontendspellings' %}<!DOCTYPE html>*/
/* {% component 'session' %}<html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/* 	<meta http-equiv="content-type" content="text/html; charset=utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="{{ this.page.meta_description }}">*/
/* 	<meta name="keywords" content="{{ this.page.meta_keywords }}">*/
/*     <meta name="author" content="{{ this.page.meta_author }}">*/
/*     <meta name="format-detection" content="telephone=no">*/
/*     <title>{{ this.page.title }} | {{ this.theme.site_name }}</title>*/
/* 	{% component 'SeoCmsPage' %}*/
/* 	<!-- core CSS -->*/
/* 	{% styles %}*/
/* 	<link href="{{ ['assets/css/bootstrap-rtl.min.css',*/
/* 		'assets/css/bootstrap.min.css',*/
/* 		'assets/css/font-awesome.min.css',*/
/* 		'assets/css/animate.min.css',*/
/* 		'assets/css/prettyPhoto.css',*/
/* 		'assets/css/main.css',*/
/* 		'assets/css/responsive.css',*/
/* 		'assets/css/sajit.css',*/
/* 	]|theme }}" rel="stylesheet">*/
/*     <link rel="shortcut icon" href="{{ 'assets/images/ico/favicon.ico'|theme }}">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ 'assets/images/ico/apple-touch-icon-144-precomposed.png'|theme }}">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ 'assets/images/ico/apple-touch-icon-114-precomposed.png'|theme }}">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ 'assets/images/ico/apple-touch-icon-72-precomposed.png'|theme }}">*/
/*     <link rel="apple-touch-icon-precomposed" href="{{ 'assets/images/ico/apple-touch-icon-57-precomposed.png'|theme }}">*/
/* </head><!--/head-->*/
/* */
/* <body class="homepage">*/
/* */
/* <header id="header">*/
/* 		{% partial "top" %}*/
/*         {% partial "nav" %}*/
/* </header><!--/header-->*/
/* */
/*     {% page %}*/
/*     {% component 'googleTracker' %}*/
/* <section id="bottom">*/
/* 	{% partial "bottom" %}*/
/* </section><!--/#bottom-->*/
/* */
/* <footer id="footer" class="midnight-blue">*/
/* 	{% partial "footer" %}*/
/* </footer><!--/#footer-->*/
/* */
/* <!-- Scripts -->*/
/* <script type="text/javascript" src="{{ 'assets/js/html5shiv.js'|theme }}"></script>*/
/* <script type="text/javascript" src="{{ 'assets/js/respond.min.js'|theme }}"></script>*/
/* <script type="text/javascript" src="{{ 'assets/js/jquery.js'|theme }}"></script>*/
/* <script type="text/javascript" src="{{ 'assets/js/bootstrap.min.js'|theme }}"></script>*/
/* <script type="text/javascript" src="{{ 'assets/js/jquery.prettyPhoto.js'|theme }}"></script>*/
/* <script type="text/javascript" src="{{ 'assets/js/jquery.isotope.min.js'|theme }}"></script>*/
/* <script type="text/javascript" src="{{ 'assets/js/main.js'|theme }}"></script>*/
/* <script type="text/javascript" src="{{ 'assets/js/wow.min.js'|theme }}"></script>*/
/* <script type="text/javascript" src="{{ 'assets/js/sajit.js'|theme }}"></script>*/
/* {% framework extras %}*/
/* {% scripts %}*/
/* </body>*/
/* </html>*/
