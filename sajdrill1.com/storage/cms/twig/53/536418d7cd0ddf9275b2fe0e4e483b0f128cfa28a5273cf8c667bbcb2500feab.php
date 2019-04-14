<?php

/* /var/www/www-sajdrill-com/public_html/plugins/rainlab/forum/components/channel/topics.htm */
class __TwigTemplate_fec57f455dc3d199e8b503aba636866b8c048c10c1801240aabc202869ae6328 extends Twig_Template
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
        echo "<table class=\"forum-table\">
    <tr>
        <th colspan=\"2\">تاپیک</th>
        <th class=\"counter-column\">پاسخ ها</th>
        <th class=\"counter-column\">بازدید</th>
        <th class=\"activity-column\">آخرین پاسخ</th>
    </tr>

    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topics"]) ? $context["topics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 10
            echo "        <tr class=\"forum-topic\">
            <td class=\"indicator-column\">
                <div class=\"topic-indicator ";
            // line 12
            echo ((((isset($context["member"]) ? $context["member"] : null) && $this->getAttribute($context["topic"], "hasNew", array()))) ? ("has-new") : (""));
            echo "\"></div>
            </td>
            <td>
                <h5>
                    ";
            // line 16
            if ($this->getAttribute($context["topic"], "is_sticky", array())) {
                echo "<strong>Sticky:</strong>";
            }
            // line 17
            echo "                    ";
            if ($this->getAttribute($context["topic"], "is_locked", array())) {
                echo "<i class=\"icon icon-lock\"></i> <strong>Locked:</strong>";
            }
            // line 18
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["topic"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["topic"], "subject", array()), "html", null, true);
            echo "</a>
                </h5>
            </td>
            <td class=\"counter-column\">
                <p>";
            // line 22
            echo call_user_func_array($this->env->getFunction('n2f')->getCallable(), array($this->getAttribute($context["topic"], "count_posts", array())));
            echo "</p>
            </td>
            <td class=\"counter-column\">
                <p>";
            // line 25
            echo call_user_func_array($this->env->getFunction('n2f')->getCallable(), array($this->getAttribute($context["topic"], "count_views", array())));
            echo "</p>
            </td>
            <td class=\"activity-column\">
                <p>
                    <small>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["topic"], "url", array()), "html", null, true);
            echo "?page=last#post-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["topic"], "last_post_id", array()), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFunction('n2f')->getCallable(), array($this->getAttribute($this->getAttribute($context["topic"], "last_post_at", array()), "diffForHumans", array())));
            echo "</a> توسط
                    </small>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["topic"], "last_post_member", array()), "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["topic"], "last_post_member", array()), "username", array()), "html", null, true);
            echo "</a>
                    <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["topic"], "last_post_member", array()), "user", array()), "avatarThumb", array(0 => 24), "method"), "html", null, true);
            echo "\" class=\"member-avatar\" />
                </p>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
    ";
        // line 39
        if ( !twig_length_filter($this->env, (isset($context["topics"]) ? $context["topics"] : null))) {
            // line 40
            echo "        <tr>
            <td colspan=\"100\">در این کانال، تاپیکی وجود ندارد.</td>
        </tr>
    ";
        }
        // line 44
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/plugins/rainlab/forum/components/channel/topics.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 44,  108 => 40,  106 => 39,  103 => 38,  92 => 33,  86 => 32,  77 => 30,  69 => 25,  63 => 22,  53 => 18,  48 => 17,  44 => 16,  37 => 12,  33 => 10,  29 => 9,  19 => 1,);
    }
}
/* <table class="forum-table">*/
/*     <tr>*/
/*         <th colspan="2">تاپیک</th>*/
/*         <th class="counter-column">پاسخ ها</th>*/
/*         <th class="counter-column">بازدید</th>*/
/*         <th class="activity-column">آخرین پاسخ</th>*/
/*     </tr>*/
/* */
/*     {% for topic in topics %}*/
/*         <tr class="forum-topic">*/
/*             <td class="indicator-column">*/
/*                 <div class="topic-indicator {{ member and topic.hasNew ? 'has-new' }}"></div>*/
/*             </td>*/
/*             <td>*/
/*                 <h5>*/
/*                     {% if topic.is_sticky %}<strong>Sticky:</strong>{% endif %}*/
/*                     {% if topic.is_locked %}<i class="icon icon-lock"></i> <strong>Locked:</strong>{% endif %}*/
/*                     <a href="{{ topic.url }}">{{ topic.subject }}</a>*/
/*                 </h5>*/
/*             </td>*/
/*             <td class="counter-column">*/
/*                 <p>{{ n2f(topic.count_posts) }}</p>*/
/*             </td>*/
/*             <td class="counter-column">*/
/*                 <p>{{ n2f(topic.count_views) }}</p>*/
/*             </td>*/
/*             <td class="activity-column">*/
/*                 <p>*/
/*                     <small>*/
/*                         <a href="{{ topic.url }}?page=last#post-{{ topic.last_post_id }}">{{ n2f(topic.last_post_at.diffForHumans) }}</a> توسط*/
/*                     </small>*/
/*                     <a href="{{ topic.last_post_member.url }}">{{ topic.last_post_member.username }}</a>*/
/*                     <img src="{{ topic.last_post_member.user.avatarThumb(24) }}" class="member-avatar" />*/
/*                 </p>*/
/*             </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* */
/*     {% if not topics|length %}*/
/*         <tr>*/
/*             <td colspan="100">در این کانال، تاپیکی وجود ندارد.</td>*/
/*         </tr>*/
/*     {% endif %}*/
/* </table>*/
