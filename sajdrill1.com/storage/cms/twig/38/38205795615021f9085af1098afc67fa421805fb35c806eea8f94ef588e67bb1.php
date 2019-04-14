<?php

/* /var/www/www-sajdrill-com/public_html/themes/jtherczeg-corlate/pages/404.htm */
class __TwigTemplate_b9cf5b960746972114eb0d07f1fea94f2a4d63e57e4baf76f790acd8e84ca905 extends Twig_Template
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
        echo "<section id=\"error\" class=\"container text-center\">
        <h1>404, MJ Page Not Found</h1>
        <p>The page you are looking for doesn't exist or another error occurred.</p>
        <a class=\"btn btn-primary\" href=\"";
        // line 4
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">GO BACK TO THE HOMEPAGE</a>
    </section><!--/#error-->";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/themes/jtherczeg-corlate/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* <section id="error" class="container text-center">*/
/*         <h1>404, MJ Page Not Found</h1>*/
/*         <p>The page you are looking for doesn't exist or another error occurred.</p>*/
/*         <a class="btn btn-primary" href="{{ 'home'|page }}">GO BACK TO THE HOMEPAGE</a>*/
/*     </section><!--/#error-->*/
