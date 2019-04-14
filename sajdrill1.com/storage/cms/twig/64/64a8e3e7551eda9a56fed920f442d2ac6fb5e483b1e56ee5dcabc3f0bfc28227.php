<?php

/* /var/www/www-sajdrill-com/public_html/themes/jtherczeg-corlate/partials/nav.htm */
class __TwigTemplate_514072a1a7a4f8bbedd3884a50e732bf970755afd3b21d1ce3c0c16632b0f791 extends Twig_Template
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
        // line 2
        $context["links"] = array("blog" => array(0 => "mag", 1 => "مجله خبری"), "forum" => array(0 => "forum", 1 => "انجمن"), "qanda" => array(0 => "qanda", 1 => "پرسش و پاسخ"), "opportunities" => array("name" => "فرصت ها", "sublinks" => array("recruitment" => array(0 => "opportunities/recruitment", 1 => "جذب نیرو"), "distributing-request" => array(0 => "opportunities/distributing-request", 1 => "درخواست نمایندگی"), "degree-request" => array(0 => "opportunities/degree-request", 1 => "درخواست مدرک"), "auctions" => array(0 => "opportunities/auctions", 1 => "مزایدات"), "tenders" => array(0 => "opportunities/tenders", 1 => "مناقصات"))), "company" => array("name" => "شرکت", "sublinks" => array("about" => array(0 => "company/about", 1 => "درباره ما"), "contact" => array(0 => "company/contact", 1 => "ارتباط با ما"), "public-relations" => array(0 => "company/public-relations", 1 => "روابط عمومی"), "responsibilities" => array(0 => "company/responsibilities", 1 => "مسئولیت ها"), "associates" => array(0 => "company/associates", 1 => "همکاران"), "distributors" => array(0 => "company/distributors", 1 => "نمایندگی ها"))), "services" => array("name" => "خدمات", "sublinks" => array("randd" => array(0 => "services/services", 1 => "تحقیق و توسعه"), "engineering" => array(0 => "services/engineering", 1 => "فنی، مهندسی"), "consultation" => array(0 => "services/consultation", 1 => "مشاوره"), "education" => array(0 => "services/education", 1 => "آموزش"), "support" => array(0 => "services/support", 1 => "پشتیبانی"), "quality-test" => array(0 => "services/quality-test", 1 => "تست کیفیت"))), "products" => array("name" => "محصولات", "sublinks" => array("portables" => array(0 => "products/portable-drill", 1 => "دریل های قابل حمل"), "diamond-tools" => array(0 => "products/diamond-tools", 1 => "ابزار الماسه"), "spare-parts" => array(0 => "products/spare-parts", 1 => "لوازم یدکی"), "custom-equipments" => array(0 => "products/custom-equipments", 1 => "تجهیزات سفارشی"), "pricing" => array(0 => "samples/pricing", 1 => "جداول قیمت"))));
        // line 51
        echo "
";
        // line 72
        echo "
";
        // line 73
        $context["nav"] = $this;
        // line 74
        echo "
<nav class=\"navbar navbar-inverse\" role=\"banner\">
\t<div class=\"container\">
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 84
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo.png");
        echo "\" alt=\"logo\"></a>
\t\t</div>
\t\t<div class=\"collapse navbar-collapse navbar-right\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t";
        // line 88
        echo $context["nav"]->getrender_menu((isset($context["links"]) ? $context["links"] : null));
        echo "
\t\t\t</ul>
\t\t</div>
\t</div>
</nav><!--/nav-->";
    }

    // line 52
    public function getrender_menu($__links__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "links" => $__links__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 53
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 54
                echo "        <li class=\"";
                echo ((($context["code"] == (isset($context["currentPage"]) ? $context["currentPage"] : null))) ? ("active") : (""));
                echo " ";
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 56
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("#") : ($this->env->getExtension('CMS')->pageFilter((($this->getAttribute($context["link"], "page", array())) ? ($this->getAttribute($context["link"], "page", array())) : ($this->getAttribute($context["link"], 0, array(), "array"))))));
                echo "\"
                ";
                // line 57
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 58
                echo "                class=\"";
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 60
                echo twig_escape_filter($this->env, (($this->getAttribute($context["link"], "name", array())) ? ($this->getAttribute($context["link"], "name", array())) : ($this->getAttribute($context["link"], 1, array(), "array"))), "html", null, true);
                echo "
                ";
                // line 61
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 62
                echo "            </a>
            ";
                // line 63
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    // line 64
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 66
                    echo $this->getAttribute($this, "render_menu", array(0 => $this->getAttribute($context["link"], "sublinks", array())), "method");
                    echo "
                </ul>
            ";
                }
                // line 69
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/themes/jtherczeg-corlate/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 69,  115 => 66,  111 => 64,  109 => 63,  106 => 62,  102 => 61,  98 => 60,  92 => 58,  88 => 57,  84 => 56,  76 => 54,  71 => 53,  59 => 52,  50 => 88,  41 => 84,  29 => 74,  27 => 73,  24 => 72,  21 => 51,  19 => 2,);
    }
}
/* {# Note: Only one levels of sublinks are supported by Bootstrap 3 #}*/
/* {% set*/
/*     links = {*/
/*         'blog':		 ['mag', 'مجله خبری'],*/
/*         'forum':		 ['forum', 'انجمن'],*/
/*         'qanda':		 ['qanda', 'پرسش و پاسخ'],*/
/*         'opportunities': {*/
/*             name: 'فرصت ها',*/
/*             sublinks: {*/
/*                 'recruitment':	  ['opportunities/recruitment', 'جذب نیرو'],*/
/*                 'distributing-request':	  ['opportunities/distributing-request', 'درخواست نمایندگی'],*/
/*                 'degree-request':	  ['opportunities/degree-request', 'درخواست مدرک'],*/
/*                 'auctions':	  ['opportunities/auctions', 'مزایدات'],*/
/*                 'tenders':	  ['opportunities/tenders', 'مناقصات'],*/
/*             },*/
/*         },*/
/*         'company': {*/
/*             name: 'شرکت',*/
/*             sublinks: {*/
/*                 'about':     ['company/about', 'درباره ما'],*/
/*                 'contact': ['company/contact', 'ارتباط با ما'],*/
/*                 'public-relations': ['company/public-relations', 'روابط عمومی'],*/
/*                 'responsibilities': ['company/responsibilities', 'مسئولیت ها'],*/
/*                 'associates': ['company/associates', 'همکاران'],*/
/*                 'distributors': ['company/distributors', 'نمایندگی ها'],*/
/*             },*/
/*         },*/
/*         'services': {*/
/*             name: 'خدمات',*/
/*             sublinks: {*/
/*                 'randd':	  ['services/services', 'تحقیق و توسعه'],*/
/*                 'engineering':	  ['services/engineering', 'فنی، مهندسی'],*/
/*                 'consultation':	  ['services/consultation', 'مشاوره'],*/
/*                 'education':	  ['services/education', 'آموزش'],*/
/*                 'support':	  ['services/support', 'پشتیبانی'],*/
/*                 'quality-test': ['services/quality-test', 'تست کیفیت'],*/
/*             },*/
/*         },*/
/*         'products': {*/
/*             name: 'محصولات',*/
/*             sublinks: {*/
/*             	'portables':	  ['products/portable-drill', 'دریل های قابل حمل'],*/
/*             	'diamond-tools':	  ['products/diamond-tools', 'ابزار الماسه'],*/
/*             	'spare-parts':	  ['products/spare-parts', 'لوازم یدکی'],*/
/*             	'custom-equipments':	  ['products/custom-equipments', 'تجهیزات سفارشی'],*/
/*                 'pricing':	  ['samples/pricing', 'جداول قیمت'],*/
/*             },*/
/*         },	    */
/*     }*/
/* %}*/
/* */
/* {% macro render_menu(links) %}*/
/*     {% for code, link in links %}*/
/*         <li class="{{ code == currentPage ? 'active' }} {{ link.sublinks ? 'dropdown' }}">*/
/*             <a*/
/*                 href="{{ link.sublinks ? '#' : (link.page ?: link[0])|page }}"*/
/*                 {% if link.sublinks %}data-toggle="dropdown"{% endif %}*/
/*                 class="{{ link.sublinks ? 'dropdown-toggle' }}"*/
/*             >*/
/*                 {{ link.name ?: link[1] }}*/
/*                 {% if link.sublinks %}<span class="caret"></span>{% endif %}*/
/*             </a>*/
/*             {% if link.sublinks %}*/
/*                 <span class="dropdown-arrow"></span>*/
/*                 <ul class="dropdown-menu">*/
/*                     {{ _self.render_menu(link.sublinks) }}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
/* {% import _self as nav %}*/
/* */
/* <nav class="navbar navbar-inverse" role="banner">*/
/* 	<div class="container">*/
/* 		<div class="navbar-header">*/
/* 			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/* 			<span class="sr-only">Toggle navigation</span>*/
/* 			<span class="icon-bar"></span>*/
/* 			<span class="icon-bar"></span>*/
/* 			<span class="icon-bar"></span>*/
/* 			</button>*/
/* 			<a class="navbar-brand" href="{{ 'home'|page }}"><img src="{{ 'assets/images/logo.png'|theme }}" alt="logo"></a>*/
/* 		</div>*/
/* 		<div class="collapse navbar-collapse navbar-right">*/
/* 			<ul class="nav navbar-nav">*/
/* 				{{ nav.render_menu(links) }}*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* </nav><!--/nav-->*/
