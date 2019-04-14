<?php

/* /var/www/october1.com/install-master/plugins/rainlab/user/components/resetpassword/restore.htm */
class __TwigTemplate_326da8cac0b691ebbe302bb708a1d94639a9f3ba949956755da53ac84632de71 extends Twig_Template
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
        echo "<p class=\"lead\">
    <strong>Lost your password?</strong> No problem! Enter your email address to verify your account.
</p>

<form
    data-request=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onRestorePassword\"
    data-request-update=\"'";
        // line 7
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::reset': '#partialUserResetForm'\">
    <div class=\"form-group\">
        <label for=\"userRestoreEmail\">Email</label>
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"userRestoreEmail\" placeholder=\"Enter your email\">
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Restore password</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "/var/www/october1.com/install-master/plugins/rainlab/user/components/resetpassword/restore.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p class=\"lead\">
    <strong>Lost your password?</strong> No problem! Enter your email address to verify your account.
</p>

<form
    data-request=\"{{ __SELF__ }}::onRestorePassword\"
    data-request-update=\"'{{ __SELF__ }}::reset': '#partialUserResetForm'\">
    <div class=\"form-group\">
        <label for=\"userRestoreEmail\">Email</label>
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"userRestoreEmail\" placeholder=\"Enter your email\">
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Restore password</button>
</form>
", "/var/www/october1.com/install-master/plugins/rainlab/user/components/resetpassword/restore.htm", "");
    }
}
