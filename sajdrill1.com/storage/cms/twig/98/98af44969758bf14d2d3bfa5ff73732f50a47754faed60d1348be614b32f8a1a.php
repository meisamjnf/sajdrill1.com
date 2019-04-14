<?php

/* /var/www/www-sajdrill-com/public_html/plugins/rainlab/forum/components/topic/default.htm */
class __TwigTemplate_33e1d56d20236822ebf0d0db98c95a94eb60226283f6b44094811d3cd6e3f110 extends Twig_Template
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
        echo "<div class=\"rainlab-forum\">

    ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 3
        foreach (Flash::all() as $type => $message) {
            $context["type"] = $type;            $context["message"] = $message;            // line 4
            echo "        <div class=\"alert alert-";
            echo twig_escape_filter($this->env, ((((isset($context["type"]) ? $context["type"] : null) == "error")) ? ("danger") : ((isset($context["type"]) ? $context["type"] : null))), "html", null, true);
            echo "\">
            ";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        </div>
    ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 9
        echo "
    ";
        // line 10
        if ((isset($context["returnUrl"]) ? $context["returnUrl"] : null)) {
            // line 11
            echo "        <p>&rarr; <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["returnUrl"]) ? $context["returnUrl"] : null), "html", null, true);
            echo "\">بازگشت به  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["channel"]) ? $context["channel"] : null), "title", array()), "html", null, true);
            echo "</a></p>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if ((isset($context["topic"]) ? $context["topic"] : null)) {
            // line 15
            echo "
        <h4>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "subject", array()), "html", null, true);
            echo "</h4>

        <div class=\"row\">
            <div class=\"col-md-3 col-md-push-9\">

                <div id=\"topicControlPanel\">
                    ";
            // line 22
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("@controlpanel"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 23
            echo "                </div>

            </div>
            <div class=\"col-md-9 col-md-pull-3\">

                ";
            // line 28
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("@posts"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 29
            echo "
                ";
            // line 30
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("@pagination"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 31
            echo "
                <h4>پاسخ به این مباحثه</h4>
                ";
            // line 33
            if ( !$this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "canPost", array())) {
                // line 34
                echo "                    <p>
                        شما نمی توانید پاسخی ارسال نمائید و یا متنی را ویرایش کنید.
                        ";
                // line 36
                if ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "is_banned", array())) {
                    echo "کاربری شما مسدود شده است.";
                }
                // line 37
                echo "                        ";
                if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "is_locked", array())) {
                    echo "این تاپیک غیرفعال شده است.";
                }
                // line 38
                echo "                    </p>
                ";
            } else {
                // line 40
                echo "                    ";
                if ((isset($context["member"]) ? $context["member"] : null)) {
                    // line 41
                    echo "                        ";
                    $context['__cms_partial_params'] = [];
                    echo $this->env->getExtension('CMS')->partialFunction("@postform"                    , $context['__cms_partial_params']                    );
                    unset($context['__cms_partial_params']);
                    // line 42
                    echo "                    ";
                } else {
                    // line 43
                    echo "                        <p>شما برای ارسال پاسخ باید وارد سیستم شوید.</p>
                    ";
                }
                // line 45
                echo "                ";
            }
            // line 46
            echo "
            </div>
        </div>

    ";
        } elseif (        // line 50
(isset($context["channel"]) ? $context["channel"] : null)) {
            // line 51
            echo "
        <h4>ایجاد تاپیک مباحثه جدید</h4>
        ";
            // line 53
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("@createform"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 54
            echo "
    ";
        } else {
            // line 56
            echo "
        <p>تاپیک وجود ندارد.</p>

    ";
        }
        // line 60
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/plugins/rainlab/forum/components/topic/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 60,  150 => 56,  146 => 54,  142 => 53,  138 => 51,  136 => 50,  130 => 46,  127 => 45,  123 => 43,  120 => 42,  115 => 41,  112 => 40,  108 => 38,  103 => 37,  99 => 36,  95 => 34,  93 => 33,  89 => 31,  85 => 30,  82 => 29,  78 => 28,  71 => 23,  67 => 22,  58 => 16,  55 => 15,  53 => 14,  50 => 13,  42 => 11,  40 => 10,  37 => 9,  30 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="rainlab-forum">*/
/* */
/*     {% flash %}*/
/*         <div class="alert alert-{{ type == 'error' ? 'danger' : type }}">*/
/*             {{ message }}*/
/*             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*/
/*         </div>*/
/*     {% endflash %}*/
/* */
/*     {% if returnUrl %}*/
/*         <p>&rarr; <a href="{{ returnUrl }}">بازگشت به  {{ channel.title }}</a></p>*/
/*     {% endif %}*/
/* */
/*     {% if topic %}*/
/* */
/*         <h4>{{ topic.subject }}</h4>*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-3 col-md-push-9">*/
/* */
/*                 <div id="topicControlPanel">*/
/*                     {% partial "@controlpanel" %}*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <div class="col-md-9 col-md-pull-3">*/
/* */
/*                 {% partial "@posts" %}*/
/* */
/*                 {% partial "@pagination" %}*/
/* */
/*                 <h4>پاسخ به این مباحثه</h4>*/
/*                 {% if not topic.canPost %}*/
/*                     <p>*/
/*                         شما نمی توانید پاسخی ارسال نمائید و یا متنی را ویرایش کنید.*/
/*                         {% if member.is_banned %}کاربری شما مسدود شده است.{% endif %}*/
/*                         {% if topic.is_locked %}این تاپیک غیرفعال شده است.{% endif %}*/
/*                     </p>*/
/*                 {% else %}*/
/*                     {% if member %}*/
/*                         {% partial "@postform" %}*/
/*                     {% else %}*/
/*                         <p>شما برای ارسال پاسخ باید وارد سیستم شوید.</p>*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/*     {% elseif channel %}*/
/* */
/*         <h4>ایجاد تاپیک مباحثه جدید</h4>*/
/*         {% partial "@createform" %}*/
/* */
/*     {% else %}*/
/* */
/*         <p>تاپیک وجود ندارد.</p>*/
/* */
/*     {% endif %}*/
/* </div>*/
