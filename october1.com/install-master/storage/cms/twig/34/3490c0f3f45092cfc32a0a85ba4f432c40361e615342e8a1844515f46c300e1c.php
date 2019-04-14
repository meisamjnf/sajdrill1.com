<?php

/* /var/www/october1.com/install-master/themes/demo/pages/home.htm */
class __TwigTemplate_9903a253d9cf6e3e4c9ef3574a90b6d367b093f5cdf9e6de30bd0b534f36f1b2 extends Twig_Template
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
        echo "<h3>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Please select your language:"));
        echo "</h3>
";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "
<p>
    Switch language to:
    <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">English</a>,
    <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'ru'\">Russian</a>
</p>


<div class=\"jumbotron\">
    <div class=\"container\">
        ";
        // line 13
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("welcome.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 14
        echo "    </div>
</div>

<div class=\"container\">

    <div class=\"page-header\">
        <h2>Overview <small>Basic concepts</small></h2>
    </div>
    <p>
        This page demonstrates the basic CMS features.
        Usually each page built with October is a combination of a layout, page, partials and content blocks,
        although in simple cases you can just use a page without anything else.
    </p>

    <!-- Layouts -->
    <h3>Layouts</h3>
    <p class=\"lead\">
        <i class=\"icon-th-large\"></i> &nbsp; Layouts define the page scaffold.
    </p>
    <p>
        The layout file <code>layouts/default.htm</code> defines the page scaffold &mdash;
        everything that repeats on each page, such as the HTML, HEAD and BODY tags, StyleSheet and JavaScript references.
    </p>
    <p>The page menu and footer in the Demo theme are defined in the layout as well.</p>

    <hr />

    <!-- Pages -->
    <h3>Pages</h3>
    <p class=\"lead\">
        <i class=\"icon-copy\"></i> &nbsp; Pages hold the content for each URL.
    </p>
    <p>
        The page file <code>pages/home.htm</code> defines the page URL (<code>/</code> for this page) and the page content.
        Pages are rendered inside layouts with this function that should be called in the layout code:
    </p>
    <pre>";
        // line 50
        echo "{% page %}";
        echo "</pre>
    <p>Using a layout for pages is optional &mdash; you can define everything right in the page file.</p>

    <hr />

    <!-- Partials -->
    <h3>Partials</h3>
    <p class=\"lead\">
        <i class=\"icon-tags\"></i> &nbsp; Partials contain reusable chunks of HTML markup.
    </p>
    <p>
        Partials are chunks of HTML defined in separate files that can be included anywhere.
        Partials are rendered with:
    </p>
    <pre>";
        // line 64
        echo "{% partial \"partial-name\" %}";
        echo "</pre>
    <p>You may place partials inside folders too. In this example we placed the footer content to the <code>partials/site/footer.htm</code> partial.</p>
    <pre>";
        // line 66
        echo "{% partial \"site/footer\" %}";
        echo "</pre>
    <p>Partials can be used inside pages, layouts or other partials.</p>

    <hr />

    <!-- Content blocks -->
    <h3>Content blocks</h3>
    <p class=\"lead\">
        <i class=\"icon-font\"></i> &nbsp; Content blocks are text or HTML blocks that can be edited separately from the page or layout.
    </p>
    <p>
        The introductory text used on this page is defined in the <code>content/welcome.htm</code> file.
        Content blocks are defined and rendered with:
        <pre>";
        // line 79
        echo "{% content \"content-name.htm\" %}";
        echo "</pre>
    </p>

    <hr />

    <!-- Placeholders -->
    <h3>Placeholders</h3>
    <p class=\"lead\">
        <i class=\"icon-bookmark\"></i> &nbsp; Placeholders allow pages to inject content to a layout.
    </p>
    <p>
        The common use is injecting page-specific links to StyleSheet or JavaScript files to the HEAD tag defined in the layout.
        Placeholders are defined in the layout file and they have names so that they can be referred in the page.
        Example:
    </p>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <p>Layout file:</p>
            <pre>";
        // line 97
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("placeholder/layout.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</pre>
        </div>
        <div class=\"col-md-6\">
            <p>Page file:</p>
            <pre>";
        // line 101
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("placeholder/page.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</pre>
        </div>
    </div>

    <hr />

    <!-- Assets -->
    <h3>Assets</h3>
    <p class=\"lead\">
        <i class=\"icon-picture\"></i> &nbsp; Assets are resource files like images and stylesheets.
    </p>
    <p>This theme stores its asset files (JavaScript, StyleSheet, images, fonts, etc) in the <code>themes/demo/assets</code> directory. This theme is also packaged with these useful 3rd party tools:</p>
    <ul class=\"list-inline\">
        <li><a target=\"_blank\" href=\"http://getbootstrap.com/\">Twitter Bootstrap</a></li>
        <li><a target=\"_blank\" href=\"http://fontawesome.io/3.2.1/\">Font Awesome</a></li>
        <li><a target=\"_blank\" href=\"http://www.google.com/fonts/specimen/Lato\">Lato webfont</a></li>
    </ul>
    <p>You might prefer to remove them for your website implementation.</p>

    <br />

    <div class=\"text-center\">
        <p><a href=\"";
        // line 123
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        echo "\" class=\"btn btn-lg btn-default\">Continue to AJAX framework</a></p>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/october1.com/install-master/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 123,  154 => 101,  145 => 97,  124 => 79,  108 => 66,  103 => 64,  86 => 50,  48 => 14,  44 => 13,  32 => 3,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>{{ 'Please select your language:'|_ }}</h3>
{% component 'localePicker' %}

<p>
    Switch language to:
    <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">English</a>,
    <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'ru'\">Russian</a>
</p>


<div class=\"jumbotron\">
    <div class=\"container\">
        {% content \"welcome.htm\" %}
    </div>
</div>

<div class=\"container\">

    <div class=\"page-header\">
        <h2>Overview <small>Basic concepts</small></h2>
    </div>
    <p>
        This page demonstrates the basic CMS features.
        Usually each page built with October is a combination of a layout, page, partials and content blocks,
        although in simple cases you can just use a page without anything else.
    </p>

    <!-- Layouts -->
    <h3>Layouts</h3>
    <p class=\"lead\">
        <i class=\"icon-th-large\"></i> &nbsp; Layouts define the page scaffold.
    </p>
    <p>
        The layout file <code>layouts/default.htm</code> defines the page scaffold &mdash;
        everything that repeats on each page, such as the HTML, HEAD and BODY tags, StyleSheet and JavaScript references.
    </p>
    <p>The page menu and footer in the Demo theme are defined in the layout as well.</p>

    <hr />

    <!-- Pages -->
    <h3>Pages</h3>
    <p class=\"lead\">
        <i class=\"icon-copy\"></i> &nbsp; Pages hold the content for each URL.
    </p>
    <p>
        The page file <code>pages/home.htm</code> defines the page URL (<code>/</code> for this page) and the page content.
        Pages are rendered inside layouts with this function that should be called in the layout code:
    </p>
    <pre>{{ \"{% page %}\" }}</pre>
    <p>Using a layout for pages is optional &mdash; you can define everything right in the page file.</p>

    <hr />

    <!-- Partials -->
    <h3>Partials</h3>
    <p class=\"lead\">
        <i class=\"icon-tags\"></i> &nbsp; Partials contain reusable chunks of HTML markup.
    </p>
    <p>
        Partials are chunks of HTML defined in separate files that can be included anywhere.
        Partials are rendered with:
    </p>
    <pre>{{ \"{% partial \\\"partial-name\\\" %}\" }}</pre>
    <p>You may place partials inside folders too. In this example we placed the footer content to the <code>partials/site/footer.htm</code> partial.</p>
    <pre>{{ \"{% partial \\\"site/footer\\\" %}\" }}</pre>
    <p>Partials can be used inside pages, layouts or other partials.</p>

    <hr />

    <!-- Content blocks -->
    <h3>Content blocks</h3>
    <p class=\"lead\">
        <i class=\"icon-font\"></i> &nbsp; Content blocks are text or HTML blocks that can be edited separately from the page or layout.
    </p>
    <p>
        The introductory text used on this page is defined in the <code>content/welcome.htm</code> file.
        Content blocks are defined and rendered with:
        <pre>{{ \"{% content \\\"content-name.htm\\\" %}\" }}</pre>
    </p>

    <hr />

    <!-- Placeholders -->
    <h3>Placeholders</h3>
    <p class=\"lead\">
        <i class=\"icon-bookmark\"></i> &nbsp; Placeholders allow pages to inject content to a layout.
    </p>
    <p>
        The common use is injecting page-specific links to StyleSheet or JavaScript files to the HEAD tag defined in the layout.
        Placeholders are defined in the layout file and they have names so that they can be referred in the page.
        Example:
    </p>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <p>Layout file:</p>
            <pre>{% content \"placeholder/layout.txt\" %}</pre>
        </div>
        <div class=\"col-md-6\">
            <p>Page file:</p>
            <pre>{% content \"placeholder/page.txt\" %}</pre>
        </div>
    </div>

    <hr />

    <!-- Assets -->
    <h3>Assets</h3>
    <p class=\"lead\">
        <i class=\"icon-picture\"></i> &nbsp; Assets are resource files like images and stylesheets.
    </p>
    <p>This theme stores its asset files (JavaScript, StyleSheet, images, fonts, etc) in the <code>themes/demo/assets</code> directory. This theme is also packaged with these useful 3rd party tools:</p>
    <ul class=\"list-inline\">
        <li><a target=\"_blank\" href=\"http://getbootstrap.com/\">Twitter Bootstrap</a></li>
        <li><a target=\"_blank\" href=\"http://fontawesome.io/3.2.1/\">Font Awesome</a></li>
        <li><a target=\"_blank\" href=\"http://www.google.com/fonts/specimen/Lato\">Lato webfont</a></li>
    </ul>
    <p>You might prefer to remove them for your website implementation.</p>

    <br />

    <div class=\"text-center\">
        <p><a href=\"{{ 'ajax'|page }}\" class=\"btn btn-lg btn-default\">Continue to AJAX framework</a></p>
    </div>

</div>", "/var/www/october1.com/install-master/themes/demo/pages/home.htm", "");
    }
}
