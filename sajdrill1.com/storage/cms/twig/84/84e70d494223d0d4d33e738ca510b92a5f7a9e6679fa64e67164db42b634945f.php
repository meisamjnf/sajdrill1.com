<?php

/* /var/www/www-sajdrill-com/public_html/plugins/rainlab/forum/components/topic/post.htm */
class __TwigTemplate_cec71dcddf06cc89c32b633cfa3aba4f8b4c8e9adebc6442ef0698fe4c1a196f extends Twig_Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "member", array()), "url", array()), "html", null, true);
        echo "\" class=\"avatar\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "member", array()), "user", array()), "avatarThumb", array(0 => 50), "method"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "member", array()), "username", array()), "html", null, true);
        echo "\" />
</a>
<div class=\"content\">
    <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "member", array()), "url", array()), "html", null, true);
        echo "\" class=\"author\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "member", array()), "username", array()), "html", null, true);
        echo "</a>
    <div class=\"metadata\">
        <div class=\"date\">-
            <a href=\"#post-";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
        echo "\">&nbsp;";
        echo call_user_func_array($this->env->getFunction('n2f')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "created_at", array()), "diffForHumans", array())));
        echo "&nbsp;</a>
        </div>-
        ";
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "member", array()), "is_banned", array())) {
            // line 11
            echo "            <div class=\"status text-danger\">
                <i class=\"icon-exclamation\"></i>مسدود
            </div>
        ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 14
(isset($context["post"]) ? $context["post"] : null), "member", array()), "is_moderator", array())) {
            // line 15
            echo "            <div class=\"status\">
                <i class=\"icon-star\"></i>مدیر
            </div>
        ";
        }
        // line 19
        echo "    </div>

    ";
        // line 21
        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 22
            echo "
        ";
            // line 23
            echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open"));
            echo "
            <!-- Passable fields -->
            <input type=\"hidden\" name=\"mode\" value=\"save\" />
            <input type=\"hidden\" name=\"post\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
            echo "\" />

            ";
            // line 28
            if (($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "first_post", array()), "id", array()) == $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))) {
                // line 29
                echo "                <input type=\"text\" name=\"subject\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "subject", array()), "html", null, true);
                echo "\" />
            ";
            }
            // line 31
            echo "
            <div class=\"text\">
                <textarea
                    rows=\"5\"
                    name=\"content\"
                    class=\"form-control\"
                    >";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content", array()), "html", null, true);
            echo "</textarea>
            </div>
            <div class=\"actions\">
                <a
                    href=\"javascript:;\"
                    data-request=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
            echo "::onUpdate\"
                    data-request-data=\"post: ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
            echo "\"
                    data-request-update=\"'";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
            echo "::post': '#post-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
            echo "'\"
                    class=\"save\">
                    ذخیره
                </a>

                <a
                    href=\"javascript:;\"
                    data-request=\"";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
            echo "::onUpdate\"
                    data-request-data=\"post: ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
            echo ", mode: 'delete'\"
                    data-request-update=\"'";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
            echo "::post': '#post-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
            echo "'\"
                    data-request-confirm=\"Are you sure?\"
                    class=\"delete\">
                    حذف
                </a>

                <a href=\"javascript:;\"
                    data-request=\"";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
            echo "::onUpdate\"
                    data-request-data=\"post: ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
            echo ", mode: 'view'\"
                    data-request-update=\"'";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
            echo "::post': '#post-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
            echo "'\"
                    class=\"cancel\">
                    انصراف
                </a>
            </div>
        ";
            // line 67
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
            echo "

    ";
        } elseif ((        // line 69
(isset($context["mode"]) ? $context["mode"] : null) == "delete")) {
            // line 70
            echo "        <div class=\"text\">
            <p><em>پست حذف شده است</em></p>
        </div>
    ";
        } else {
            // line 74
            echo "        <div class=\"text\">
            ";
            // line 75
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content_html", array());
            echo "

            ";
            // line 77
            if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "created_at", array()) != $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "updated_at", array()))) {
                // line 78
                echo "                <p><small class=\"text text-muted\">آخرین به روز رسانی ";
                echo call_user_func_array($this->env->getFunction('n2f')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "updated_at", array()), "diffForHumans", array())));
                echo "</small></p>
            ";
            }
            // line 80
            echo "        </div>
        <div class=\"actions\">
            ";
            // line 82
            if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "canPost", array())) {
                // line 83
                echo "                <a href=\"javascript:;\"
                    class=\"quote\"
                    data-request-data=\"post: ";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
                echo "\"
                    data-quote-button>
                    نقل قول
                </a>
            ";
            }
            // line 90
            echo "            ";
            if (((($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "canPost", array()) && $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "canEdit", array())) && ((isset($context["mode"]) ? $context["mode"] : null) != "edit")) && ((isset($context["mode"]) ? $context["mode"] : null) != "delete"))) {
                // line 91
                echo "                <a href=\"javascript:;\"
                    class=\"edit\"
                    data-request=\"onUpdate\"
                    data-request-data=\"post: ";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
                echo "\"
                    data-request-update=\"'";
                // line 95
                echo twig_escape_filter($this->env, ((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::post"), "html", null, true);
                echo "': '#post-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
                echo "'\">
                    ویرایش
                </a>
            ";
            }
            // line 99
            echo "        </div>
    ";
        }
        // line 101
        echo "
</div>
<div class=\"post-divider\"></div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/plugins/rainlab/forum/components/topic/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 101,  232 => 99,  223 => 95,  219 => 94,  214 => 91,  211 => 90,  203 => 85,  199 => 83,  197 => 82,  193 => 80,  187 => 78,  185 => 77,  180 => 75,  177 => 74,  171 => 70,  169 => 69,  164 => 67,  154 => 62,  150 => 61,  146 => 60,  134 => 53,  130 => 52,  126 => 51,  114 => 44,  110 => 43,  106 => 42,  98 => 37,  90 => 31,  84 => 29,  82 => 28,  77 => 26,  71 => 23,  68 => 22,  66 => 21,  62 => 19,  56 => 15,  54 => 14,  49 => 11,  47 => 10,  40 => 8,  32 => 5,  24 => 2,  19 => 1,);
    }
}
/* <a href="{{ post.member.url }}" class="avatar">*/
/*     <img src="{{ post.member.user.avatarThumb(50) }}" alt="{{ post.member.username }}" />*/
/* </a>*/
/* <div class="content">*/
/*     <a href="{{ post.member.url }}" class="author">{{ post.member.username }}</a>*/
/*     <div class="metadata">*/
/*         <div class="date">-*/
/*             <a href="#post-{{ post.id }}">&nbsp;{{ n2f(post.created_at.diffForHumans) }}&nbsp;</a>*/
/*         </div>-*/
/*         {% if post.member.is_banned %}*/
/*             <div class="status text-danger">*/
/*                 <i class="icon-exclamation"></i>مسدود*/
/*             </div>*/
/*         {% elseif post.member.is_moderator %}*/
/*             <div class="status">*/
/*                 <i class="icon-star"></i>مدیر*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     {% if mode == 'edit' %}*/
/* */
/*         {{ form_open() }}*/
/*             <!-- Passable fields -->*/
/*             <input type="hidden" name="mode" value="save" />*/
/*             <input type="hidden" name="post" value="{{ post.id }}" />*/
/* */
/*             {% if topic.first_post.id == post.id %}*/
/*                 <input type="text" name="subject" class="form-control" value="{{ topic.subject }}" />*/
/*             {% endif %}*/
/* */
/*             <div class="text">*/
/*                 <textarea*/
/*                     rows="5"*/
/*                     name="content"*/
/*                     class="form-control"*/
/*                     >{{ post.content }}</textarea>*/
/*             </div>*/
/*             <div class="actions">*/
/*                 <a*/
/*                     href="javascript:;"*/
/*                     data-request="{{ __SELF__ }}::onUpdate"*/
/*                     data-request-data="post: {{ post.id }}"*/
/*                     data-request-update="'{{ __SELF__ }}::post': '#post-{{ post.id }}'"*/
/*                     class="save">*/
/*                     ذخیره*/
/*                 </a>*/
/* */
/*                 <a*/
/*                     href="javascript:;"*/
/*                     data-request="{{ __SELF__ }}::onUpdate"*/
/*                     data-request-data="post: {{ post.id }}, mode: 'delete'"*/
/*                     data-request-update="'{{ __SELF__ }}::post': '#post-{{ post.id }}'"*/
/*                     data-request-confirm="Are you sure?"*/
/*                     class="delete">*/
/*                     حذف*/
/*                 </a>*/
/* */
/*                 <a href="javascript:;"*/
/*                     data-request="{{ __SELF__ }}::onUpdate"*/
/*                     data-request-data="post: {{ post.id }}, mode: 'view'"*/
/*                     data-request-update="'{{ __SELF__ }}::post': '#post-{{ post.id }}'"*/
/*                     class="cancel">*/
/*                     انصراف*/
/*                 </a>*/
/*             </div>*/
/*         {{ form_close() }}*/
/* */
/*     {% elseif mode == 'delete' %}*/
/*         <div class="text">*/
/*             <p><em>پست حذف شده است</em></p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="text">*/
/*             {{ post.content_html|raw }}*/
/* */
/*             {% if post.created_at != post.updated_at %}*/
/*                 <p><small class="text text-muted">آخرین به روز رسانی {{ n2f(post.updated_at.diffForHumans) }}</small></p>*/
/*             {% endif %}*/
/*         </div>*/
/*         <div class="actions">*/
/*             {% if topic.canPost %}*/
/*                 <a href="javascript:;"*/
/*                     class="quote"*/
/*                     data-request-data="post: {{ post.id }}"*/
/*                     data-quote-button>*/
/*                     نقل قول*/
/*                 </a>*/
/*             {% endif %}*/
/*             {% if topic.canPost and post.canEdit and mode != 'edit' and mode != 'delete' %}*/
/*                 <a href="javascript:;"*/
/*                     class="edit"*/
/*                     data-request="onUpdate"*/
/*                     data-request-data="post: {{ post.id }}"*/
/*                     data-request-update="'{{ __SELF__ ~ '::post' }}': '#post-{{ post.id }}'">*/
/*                     ویرایش*/
/*                 </a>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* </div>*/
/* <div class="post-divider"></div>*/
/* */
