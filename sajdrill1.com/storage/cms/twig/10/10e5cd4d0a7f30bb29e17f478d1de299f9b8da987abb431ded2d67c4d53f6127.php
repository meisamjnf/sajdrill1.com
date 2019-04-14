<?php

/* /var/www/www-sajdrill-com/public_html/plugins/laminsanneh/fantasticfaq/components/faqdisplayer/default.htm */
class __TwigTemplate_ed7bb58d6cd78f568ffee7eae8c99b9d330eee59837f486071b3d42462126f7d extends Twig_Template
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
        echo "<div class=\"panel-group\" id=\"accordion\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "selectedFaqGroup", array(), "method"), "questions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 3
            echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\">
                        ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "title", array()), "html", null, true);
            echo "
                    </a>
                </h4>
            </div>
            <div id=\"collapse";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                    ";
            // line 13
            echo $this->getAttribute($context["question"], "body", array());
            echo "
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/plugins/laminsanneh/fantasticfaq/components/faqdisplayer/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  47 => 13,  42 => 11,  35 => 7,  31 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="panel-group" id="accordion">*/
/*     {% for question in __SELF__.selectedFaqGroup().questions %}*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h4 class="panel-title">*/
/*                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{question.id}}">*/
/*                         {{question.title}}*/
/*                     </a>*/
/*                 </h4>*/
/*             </div>*/
/*             <div id="collapse{{question.id}}" class="panel-collapse collapse">*/
/*                 <div class="panel-body">*/
/*                     {{question.body|raw}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* </div>*/
