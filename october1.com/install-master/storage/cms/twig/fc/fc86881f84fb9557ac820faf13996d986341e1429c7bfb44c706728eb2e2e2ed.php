<?php

/* /var/www/october1.com/install-master/themes/demo/pages/ajax.htm */
class __TwigTemplate_db2109a97df334f3b5e2275156b2e6ce1418157c9a8d1b039bd62e82ac8c5023 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"jumbotron title-js\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8\">
                <h1>";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("AJAX framework"));
        echo "</h1>
                <p>";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("This built-in JavaScript framework provides simple but powerful AJAX capabilities. Check out the calculator example below."));
        echo "</p>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Calculator</h3>
        </div>
        <div class=\"panel-body\">
            <form class=\"form-inline\" data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
                <input type=\"text\" class=\"form-control\" value=\"15\" name=\"value1\" style=\"width:100px\">
                <select class=\"form-control\" name=\"operation\" style=\"width: 70px\">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select>
                <input type=\"text\" class=\"form-control\" value=\"5\" name=\"value2\" style=\"width:100px\">
                <button type=\"submit\" class=\"btn btn btn-primary\" data-attach-loading>Calculate</button>
            </form>
        </div>
        <div class=\"panel-footer\" id=\"result\">
            ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("calcresult"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "        </div>
    </div>

</div>

<!-- Page Explanation -->
<div class=\"container\">";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("explain/ajax.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "</div>

<br />

<div class=\"text-center\">
    <p><a href=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("plugins");
        echo "\" class=\"btn btn-lg btn-default\">Continue to Plugin components</a></p>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/october1.com/install-master/themes/demo/pages/ajax.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 44,  74 => 39,  66 => 33,  62 => 32,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron title-js\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8\">
                <h1>{{ 'AJAX framework' |_ }}</h1>
                <p>{{ 'This built-in JavaScript framework provides simple but powerful AJAX capabilities. Check out the calculator example below.' |_ }}</p>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Calculator</h3>
        </div>
        <div class=\"panel-body\">
            <form class=\"form-inline\" data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
                <input type=\"text\" class=\"form-control\" value=\"15\" name=\"value1\" style=\"width:100px\">
                <select class=\"form-control\" name=\"operation\" style=\"width: 70px\">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select>
                <input type=\"text\" class=\"form-control\" value=\"5\" name=\"value2\" style=\"width:100px\">
                <button type=\"submit\" class=\"btn btn btn-primary\" data-attach-loading>Calculate</button>
            </form>
        </div>
        <div class=\"panel-footer\" id=\"result\">
            {% partial \"calcresult\" %}
        </div>
    </div>

</div>

<!-- Page Explanation -->
<div class=\"container\">{% partial \"explain/ajax.htm\" %}</div>

<br />

<div class=\"text-center\">
    <p><a href=\"{{ 'plugins'|page }}\" class=\"btn btn-lg btn-default\">Continue to Plugin components</a></p>
</div>", "/var/www/october1.com/install-master/themes/demo/pages/ajax.htm", "");
    }
}
