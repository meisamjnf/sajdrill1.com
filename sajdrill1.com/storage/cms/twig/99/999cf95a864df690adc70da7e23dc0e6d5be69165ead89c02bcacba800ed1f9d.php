<?php

/* /var/www/www-sajdrill-com/public_html/themes/jtherczeg-corlate/partials/bottom.htm */
class __TwigTemplate_7d3dbb945868e0102effa781142be2956fe99cd688893d1d8364c4e71ab0a271 extends Twig_Template
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
        echo "<div class=\"container wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>شرکت</h3>
                    <ul>
                        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('CMS')->pageFilter("samples/about");
        echo "\">درباره ما</a></li>
                        <li><a href=\"#\">دعوت به همکاری</a></li>
                        <li><a href=\"#\">آشنایی با تیم</a></li>
                        <li><a href=\"#\">مالکیت معنوی</a></li>
                        <li><a href=\"#\">شرایط استفاده</a></li>
                        <li><a href=\"#\">ضوابط اطلاعات شخصی</a></li>
                        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('CMS')->pageFilter("samples/contact");
        echo "\">ارتباط با ما</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>پشتیبانی</h3>
                    <ul>
                        <li><a href=\"#\">پرسش و پاسخ</a></li>
                        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('CMS')->pageFilter("blog/blog");
        echo "\">وبلاگ</a></li>
                        <li><a href=\"#\">تالار گفت و گو</a></li>
                        <li><a href=\"#\">مستندات</a></li>
                        <li><a href=\"#\">گارانتی</a></li>
                        <li><a href=\"#\">پیگیری درخواست ها</a></li>
                        <li><a href=\"#\">صدور پیش فاکتور</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>خدمات</h3>
                    <ul>
                        <li><a href=\"#\">تامین ماشین آلات</a></li>
                        <li><a href=\"#\">پیمانکاری</a></li>
                        <li><a href=\"#\">مشاوره</a></li>
                        <li><a href=\"#\">سرمایه گذاری</a></li>
                        <li><a href=\"#\">تولید تجهیزات</a></li>
                        <li><a href=\"#\">اکتشاف</a></li>
                        <li><a href=\"#\">بهره برداری</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>همکاران</h3>
                    <ul>
\t\t\t\t\t\t<li><a href=\"#\">نظام مهندسی معدن</a></li>
\t\t\t\t\t\t<li><a href=\"#\">دریل های قابل حمل شاو</a></li>
                        <li><a href=\"#\">معدنکاری شاهان</a></li>
                        <li><a href=\"#\">ارکین پی راه</a></li>
                        <li><a href=\"#\">سرمایه گذاری الماس جانفشان</a></li>
                        <li><a href=\"#\">توسعه فناوری اطلاعات ساجیت</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/themes/jtherczeg-corlate/partials/bottom.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 23,  36 => 13,  27 => 7,  19 => 1,);
    }
}
/* <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">*/
/*         <div class="row">*/
/*             <div class="col-md-3 col-sm-6">*/
/*                 <div class="widget">*/
/*                     <h3>شرکت</h3>*/
/*                     <ul>*/
/*                         <li><a href="{{ 'samples/about'|page }}">درباره ما</a></li>*/
/*                         <li><a href="#">دعوت به همکاری</a></li>*/
/*                         <li><a href="#">آشنایی با تیم</a></li>*/
/*                         <li><a href="#">مالکیت معنوی</a></li>*/
/*                         <li><a href="#">شرایط استفاده</a></li>*/
/*                         <li><a href="#">ضوابط اطلاعات شخصی</a></li>*/
/*                         <li><a href="{{ 'samples/contact'|page }}">ارتباط با ما</a></li>*/
/*                     </ul>*/
/*                 </div>    */
/*             </div><!--/.col-md-3-->*/
/* */
/*             <div class="col-md-3 col-sm-6">*/
/*                 <div class="widget">*/
/*                     <h3>پشتیبانی</h3>*/
/*                     <ul>*/
/*                         <li><a href="#">پرسش و پاسخ</a></li>*/
/*                         <li><a href="{{ 'blog/blog'|page }}">وبلاگ</a></li>*/
/*                         <li><a href="#">تالار گفت و گو</a></li>*/
/*                         <li><a href="#">مستندات</a></li>*/
/*                         <li><a href="#">گارانتی</a></li>*/
/*                         <li><a href="#">پیگیری درخواست ها</a></li>*/
/*                         <li><a href="#">صدور پیش فاکتور</a></li>*/
/*                     </ul>*/
/*                 </div>    */
/*             </div><!--/.col-md-3-->*/
/* */
/*             <div class="col-md-3 col-sm-6">*/
/*                 <div class="widget">*/
/*                     <h3>خدمات</h3>*/
/*                     <ul>*/
/*                         <li><a href="#">تامین ماشین آلات</a></li>*/
/*                         <li><a href="#">پیمانکاری</a></li>*/
/*                         <li><a href="#">مشاوره</a></li>*/
/*                         <li><a href="#">سرمایه گذاری</a></li>*/
/*                         <li><a href="#">تولید تجهیزات</a></li>*/
/*                         <li><a href="#">اکتشاف</a></li>*/
/*                         <li><a href="#">بهره برداری</a></li>*/
/*                     </ul>*/
/*                 </div>    */
/*             </div><!--/.col-md-3-->*/
/* */
/*             <div class="col-md-3 col-sm-6">*/
/*                 <div class="widget">*/
/*                     <h3>همکاران</h3>*/
/*                     <ul>*/
/* 						<li><a href="#">نظام مهندسی معدن</a></li>*/
/* 						<li><a href="#">دریل های قابل حمل شاو</a></li>*/
/*                         <li><a href="#">معدنکاری شاهان</a></li>*/
/*                         <li><a href="#">ارکین پی راه</a></li>*/
/*                         <li><a href="#">سرمایه گذاری الماس جانفشان</a></li>*/
/*                         <li><a href="#">توسعه فناوری اطلاعات ساجیت</a></li>*/
/*                     </ul>*/
/*                 </div>    */
/*             </div><!--/.col-md-3-->*/
/*         </div>*/
/*     </div>*/
