<?php

/* /var/www/www-sajdrill-com/public_html/plugins/pollozen/rankpost/components/setrank/default.htm */
class __TwigTemplate_534b6780ff3d9717aec1b7753e77c9f8fc12de15e7b3982c685c841dac537f48 extends Twig_Template
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
        echo "<h2>What dou yout thing about this post?</h2>
<div id=\"formRank\">
<form data-request=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onRank\" data-request-update=\"'";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::gracias': '#responseRank'\">
\t<input id=\"rankPost\" name=\"rankPost\" min=0 max=5 class=\"rating\"
\t\tdata-glyphicon=\"false\"
\t\tdata-rating-class=\"rating-fa\"
\t\tvalue=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "rank", array()), "html", null, true);
        echo "\"
\t\tstep=";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "step", array()), "html", null, true);
        echo " 
\t\tdata-size=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "toolsize", array()), "html", null, true);
        echo "\" 
\t\tdata-symbol=\"";
        // line 10
        echo $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "symbol", array());
        echo "\">
\t<input type=\"hidden\" name=\"rankId\" id=\"rankId\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "rankId", array()), "html", null, true);
        echo "\">
\t<input type=\"hidden\" name=\"rank\" id=\"rank\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "rank", array()), "html", null, true);
        echo "\">
\t<div id=\"responseRank\">
\t\t<button type=\"submit\" class=\"btn btn-primary\">Rank it!</button>
\t</div> 
</form>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/plugins/pollozen/rankpost/components/setrank/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  48 => 11,  44 => 10,  40 => 9,  36 => 8,  32 => 7,  23 => 3,  19 => 1,);
    }
}
/* <h2>What dou yout thing about this post?</h2>*/
/* <div id="formRank">*/
/* <form data-request="{{ __SELF__ }}::onRank" data-request-update="'{{ __SELF__ }}::gracias': '#responseRank'">*/
/* 	<input id="rankPost" name="rankPost" min=0 max=5 class="rating"*/
/* 		data-glyphicon="false"*/
/* 		data-rating-class="rating-fa"*/
/* 		value="{{__SELF__.rank}}"*/
/* 		step={{__SELF__.step}} */
/* 		data-size="{{__SELF__.toolsize}}" */
/* 		data-symbol="{{__SELF__.symbol | raw}}">*/
/* 	<input type="hidden" name="rankId" id="rankId" value="{{__SELF__.rankId}}">*/
/* 	<input type="hidden" name="rank" id="rank" value="{{__SELF__.rank}}">*/
/* 	<div id="responseRank">*/
/* 		<button type="submit" class="btn btn-primary">Rank it!</button>*/
/* 	</div> */
/* </form>*/
/* </div>*/
