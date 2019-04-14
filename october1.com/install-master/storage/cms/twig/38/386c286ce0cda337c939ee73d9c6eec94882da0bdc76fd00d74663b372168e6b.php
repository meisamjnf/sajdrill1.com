<?php

/* /var/www/october1.com/install-master/themes/demo/pages/bootstrap1.htm */
class __TwigTemplate_50f74af725c6022048514f9c3d5e7acbfa10fbe621ff8239d5a58e46ff04f2da extends Twig_Template
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
        echo "<head>
  <title>Bootstrap Example</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
</head>



<nav class=\"navbar navbar-expand-sm bg-dark navbar-dark\">
  <!-- Brand/logo -->
  <a class=\"navbar-brand\" href=\"#\">
    <img src=\"http://memajco.com/storage/app/media/akhari%20aks%20ha/dimotto.jpg\" alt=\"logo\" style=\"width:140px;\">
  </a>
  
  <!-- Links -->
  <ul class=\"navbar-nav\">
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"http://october1.com/install-master/bootstrap/\">home</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"#\">about</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"#\">gallery</a>
    </li>
  </ul>
</nav>

";
        // line 33
        if ( !($context["user"] ?? null)) {
            // line 34
            echo "<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-md-6\">
            <h3>Sign in</h3>
            ";
            // line 39
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 40
            echo "        </div>

        <div class=\"col-md-6\">
            ";
            // line 43
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 44
            echo "        </div>

    </div></div>

";
        } else {
            // line 49
            echo "
    ";
            // line 50
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::activation_check")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 51
            echo "
    ";
            // line 52
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::update")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 53
            echo "
    ";
            // line 54
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::deactivate_link")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 55
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/october1.com/install-master/themes/demo/pages/bootstrap1.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 55,  103 => 54,  100 => 53,  96 => 52,  93 => 51,  89 => 50,  86 => 49,  79 => 44,  75 => 43,  70 => 40,  66 => 39,  59 => 34,  57 => 33,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<head>
  <title>Bootstrap Example</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
</head>



<nav class=\"navbar navbar-expand-sm bg-dark navbar-dark\">
  <!-- Brand/logo -->
  <a class=\"navbar-brand\" href=\"#\">
    <img src=\"http://memajco.com/storage/app/media/akhari%20aks%20ha/dimotto.jpg\" alt=\"logo\" style=\"width:140px;\">
  </a>
  
  <!-- Links -->
  <ul class=\"navbar-nav\">
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"http://october1.com/install-master/bootstrap/\">home</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"#\">about</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"#\">gallery</a>
    </li>
  </ul>
</nav>

{% if not user %}
<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-md-6\">
            <h3>Sign in</h3>
            {% partial account ~ '::signin' %}
        </div>

        <div class=\"col-md-6\">
            {% partial account ~ '::register' %}
        </div>

    </div></div>

{% else %}

    {% partial account ~ '::activation_check' %}

    {% partial account ~ '::update' %}

    {% partial account ~ '::deactivate_link' %}

{% endif %}", "/var/www/october1.com/install-master/themes/demo/pages/bootstrap1.htm", "");
    }
}
