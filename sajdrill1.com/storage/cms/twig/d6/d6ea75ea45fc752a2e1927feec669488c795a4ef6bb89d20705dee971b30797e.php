<?php

/* /var/www/www-sajdrill-com/public_html/plugins/rainlab/forum/components/channel/title.htm */
class __TwigTemplate_08c6828f1aa84fe808a86d21db3e638c9fb43fceb0c6e868d6374f9abf4879e6 extends Twig_Template
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
        echo "<div class=\"row\">

    <div class=\"col-md-9\">
        ";
        // line 4
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("method" => "get")));
        echo "
            <div class=\"search-box\">
                <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"جستجوی تاپیک\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, input("search"));
        echo "\">
            </div>
        ";
        // line 8
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "
    </div>
    <div class=\"col-md-3 text-right\">
        ";
        // line 11
        if ((isset($context["isGuest"]) ? $context["isGuest"] : null)) {
            // line 12
            echo "            <p>برای ایجاد تاپیک جدید وارد سامانه شوید.</p>
        ";
        } else {
            // line 14
            echo "            <a href=\"";
            echo $this->env->getExtension('CMS')->pageFilter((isset($context["topicPage"]) ? $context["topicPage"] : null));
            echo "?channel=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["channel"]) ? $context["channel"] : null), "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary btn-block\">
                ایجاد تاپیک جدید
            </a>
        ";
        }
        // line 18
        echo "    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/plugins/rainlab/forum/components/channel/title.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  46 => 14,  42 => 12,  40 => 11,  34 => 8,  29 => 6,  24 => 4,  19 => 1,);
    }
}
/* <div class="row">*/
/* */
/*     <div class="col-md-9">*/
/*         {{ form_open({ method: 'get' })}}*/
/*             <div class="search-box">*/
/*                 <input type="text" name="search" class="form-control" placeholder="جستجوی تاپیک" value="{{ input('search')|e }}">*/
/*             </div>*/
/*         {{ form_close() }}*/
/*     </div>*/
/*     <div class="col-md-3 text-right">*/
/*         {% if isGuest %}*/
/*             <p>برای ایجاد تاپیک جدید وارد سامانه شوید.</p>*/
/*         {% else %}*/
/*             <a href="{{ topicPage|page }}?channel={{ channel.id }}" class="btn btn-primary btn-block">*/
/*                 ایجاد تاپیک جدید*/
/*             </a>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/* </div>*/
/* */
