<?php

/* /var/www/www-sajdrill-com/public_html/themes/jtherczeg-corlate/partials/top.htm */
class __TwigTemplate_2a7893f08afa2393558f2cd5f6e57d463b69c056eca0f9b8a5eab21521e690fd extends Twig_Template
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
        echo "<div class=\"top-bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-xs-4\">
                        <div class=\"top-number\"><p><i class=\"fa fa-phone-square\"></i><a class=\"sjt-tel-1\" tabIndex=\"-1\" href=\"tel:04134474970\"> (+۹۸)۴۱-۳۴۴۷-۴۹۷۰ </a></p></div>
                    </div>
                    <div class=\"col-sm-6 col-xs-8\">
                       <div class=\"social\">
                            ";
        // line 9
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 10
            echo "                                <a href=\"#\" data-request=\"onLogout\">خروج</a>
                            ";
        }
        // line 12
        echo "                            <ul class=\"social-share\">
                                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li> 
                                <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-skype\"></i></a></li>
                            </ul>
                            <div class=\"search\">
                                <form role=\"form\">
                                    <input type=\"text\" class=\"search-form\" autocomplete=\"off\" placeholder=\"Search\">
                                    <i class=\"fa fa-search\"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
\t</div><!--/.top-bar-->";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/themes/jtherczeg-corlate/partials/top.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  31 => 10,  29 => 9,  19 => 1,);
    }
}
/* <div class="top-bar">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-6 col-xs-4">*/
/*                         <div class="top-number"><p><i class="fa fa-phone-square"></i><a class="sjt-tel-1" tabIndex="-1" href="tel:04134474970"> (+۹۸)۴۱-۳۴۴۷-۴۹۷۰ </a></p></div>*/
/*                     </div>*/
/*                     <div class="col-sm-6 col-xs-8">*/
/*                        <div class="social">*/
/*                             {% if user %}*/
/*                                 <a href="#" data-request="onLogout">خروج</a>*/
/*                             {% endif %}*/
/*                             <ul class="social-share">*/
/*                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>*/
/*                                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>*/
/*                                 <li><a href="#"><i class="fa fa-linkedin"></i></a></li> */
/*                                 <li><a href="#"><i class="fa fa-dribbble"></i></a></li>*/
/*                                 <li><a href="#"><i class="fa fa-skype"></i></a></li>*/
/*                             </ul>*/
/*                             <div class="search">*/
/*                                 <form role="form">*/
/*                                     <input type="text" class="search-form" autocomplete="off" placeholder="Search">*/
/*                                     <i class="fa fa-search"></i>*/
/*                                 </form>*/
/*                            </div>*/
/*                        </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!--/.container-->*/
/* 	</div><!--/.top-bar-->*/
