<?php

/* /var/www/www-sajdrill-com/public_html/themes/jtherczeg-corlate/partials/footer.htm */
class __TwigTemplate_4209d640ef79509aaa931106be6e066abfb03861dc57cc2069bf3dbd33cc94b2 extends Twig_Template
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
        echo "<div class=\"container\">
        <div class=\"row\">
<!--             <div class=\"col-sm-8\"> -->
<!-- \t\t\t\t&copy;  ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_name", array()), "html", null, true);
        echo ". All Rights Reserved. A <a href=\"http://shapebootstrap.net/\" title=\"Free Twitter Bootstrap WordPress Themes and HTML templates\" target=\"_blank\">ShapeBootstrap</a> Theme &#123;&#123; Powered by <a href=\"http://octobercms.com/\">OctoberCMS</a> &#125;&#125; -->
<!--             </div> -->
            <div class=\"col-sm-8\">
            تمامی حقوق این مجموعه متعلق به گروه فنی، مهندسی ساج دریل می باشد و هرگونه کپی برداری مشروط به کسب اجازه از این مجموعه است
            </div>
            <div class=\"col-sm-4\">
                <ul class=\"pull-right\">
                    <li><a href=\"";
        // line 11
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">خانه</a></li>
                    <li><a href=\"";
        // line 12
        echo $this->env->getExtension('CMS')->pageFilter("samples/about");
        echo "\">درباره ما</a></li>
                    <li><a href=\"#\">پرسش و پاسخ</a></li>
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('CMS')->pageFilter("samples/contact");
        echo "\">ارتباط با ما</a></li>
                </ul>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/themes/jtherczeg-corlate/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 14,  40 => 12,  36 => 11,  24 => 4,  19 => 1,);
    }
}
/* <div class="container">*/
/*         <div class="row">*/
/* <!--             <div class="col-sm-8"> -->*/
/* <!-- 				&copy;  {{ "now"|date("Y") }} {{ this.theme.site_name }}. All Rights Reserved. A <a href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates" target="_blank">ShapeBootstrap</a> Theme &#123;&#123; Powered by <a href="http://octobercms.com/">OctoberCMS</a> &#125;&#125; -->*/
/* <!--             </div> -->*/
/*             <div class="col-sm-8">*/
/*             تمامی حقوق این مجموعه متعلق به گروه فنی، مهندسی ساج دریل می باشد و هرگونه کپی برداری مشروط به کسب اجازه از این مجموعه است*/
/*             </div>*/
/*             <div class="col-sm-4">*/
/*                 <ul class="pull-right">*/
/*                     <li><a href="{{ 'home'|page }}">خانه</a></li>*/
/*                     <li><a href="{{ 'samples/about'|page }}">درباره ما</a></li>*/
/*                     <li><a href="#">پرسش و پاسخ</a></li>*/
/*                     <li><a href="{{ 'samples/contact'|page }}">ارتباط با ما</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
