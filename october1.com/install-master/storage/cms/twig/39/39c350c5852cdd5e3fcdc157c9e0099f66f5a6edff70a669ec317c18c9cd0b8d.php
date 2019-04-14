<?php

/* /var/www/october1.com/install-master/themes/demo/pages/ehtemal1.htm */
class __TwigTemplate_7f832ef9c7e411277c2ccf502e1300c750bf8c25e18d94681376f0b52564c166 extends Twig_Template
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
        echo "<form method=\"post\" action=\"ehtemal1\">

tedade huruf: <input type=\"number\" name=\"word\" value=\"\" , min =\"0\" ></br> </br>
tedade adad :<input type=\"number\" name=\"number\" value=\"\" , min=\"0\" ></br></br>
<input type=\"radio\" name=\"radio1\" value=\"radio1\"> ba tekrar<br>
<input type=\"radio\" name=\"radio1\" value=\"radio2\"> bedune tekrar<br>

<input type=\"submit\" name=\"submit\" value=\"Submit\">




</form>






javab:   ";
        // line 20
        echo twig_escape_filter($this->env, ($context["a1"] ?? null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/october1.com/install-master/themes/demo/pages/ehtemal1.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 20,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form method=\"post\" action=\"ehtemal1\">

tedade huruf: <input type=\"number\" name=\"word\" value=\"\" , min =\"0\" ></br> </br>
tedade adad :<input type=\"number\" name=\"number\" value=\"\" , min=\"0\" ></br></br>
<input type=\"radio\" name=\"radio1\" value=\"radio1\"> ba tekrar<br>
<input type=\"radio\" name=\"radio1\" value=\"radio2\"> bedune tekrar<br>

<input type=\"submit\" name=\"submit\" value=\"Submit\">




</form>






javab:   {{a1}}", "/var/www/october1.com/install-master/themes/demo/pages/ehtemal1.htm", "");
    }
}
