<?php

/* viewtopic_topic_tools.html */
class __TwigTemplate_b69ab5b00872ba584aba916de7f015e16fa7fe9cf8b12a16175e736c0aa80706 extends Twig_Template
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
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && ((((((isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null) || (isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null)) || (isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null)) || (isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null)) || (isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null)) || (isset($context["S_DISPLAY_TOPIC_TOOLS"]) ? $context["S_DISPLAY_TOPIC_TOOLS"] : null)))) {
            // line 2
            echo "\t<div class=\"dropdown-container dropdown-button-control topic-tools\">
\t\t<span title=\"";
            // line 3
            echo $this->env->getExtension('phpbb')->lang("TOPIC_TOOLS");
            echo "\" class=\"button button-secondary dropdown-trigger dropdown-select\">
\t\t\t<i class=\"icon fa-wrench fa-fw\" aria-hidden=\"true\"></i>
\t\t\t<span class=\"caret\"><i class=\"icon fa-sort-down fa-fw\" aria-hidden=\"true\"></i></span>
\t\t</span>
\t\t<div class=\"dropdown\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 10
            // line 11
            echo "\t\t\t\t";
            if ((isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null)) {
                // line 12
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 13
                echo (isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null);
                echo "\" class=\"watch-topic-link\" title=\"";
                echo (isset($context["S_WATCH_TOPIC_TITLE"]) ? $context["S_WATCH_TOPIC_TITLE"] : null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"icon ";
                if ((isset($context["S_WATCHING_TOPIC"]) ? $context["S_WATCHING_TOPIC"] : null)) {
                    echo "fa-check-square-o";
                } else {
                    echo "fa-square-o";
                }
                echo " fa-fw\" data-toggle-text=\"";
                echo (isset($context["S_WATCH_TOPIC_TOGGLE"]) ? $context["S_WATCH_TOPIC_TOGGLE"] : null);
                echo "\" data-toggle-url=\"";
                echo (isset($context["U_WATCH_TOPIC_TOGGLE"]) ? $context["U_WATCH_TOPIC_TOGGLE"] : null);
                echo "\" data-update-all=\".watch-topic-link\">
\t\t\t\t\t\t\t<i class=\"icon ";
                // line 14
                if ((isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                    echo "fa-square-o";
                } else {
                    echo "fa-check-square-o";
                }
                echo " fa-fw\" aria-hidden=\"true\"></i><span>";
                echo (isset($context["S_WATCH_TOPIC_TITLE"]) ? $context["S_WATCH_TOPIC_TITLE"] : null);
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t";
            if ((isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null)) {
                // line 19
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 20
                echo (isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null);
                echo "\" class=\"bookmark-link\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BOOKMARK_TOPIC");
                echo "\" data-ajax=\"alt_text\" data-alt-text=\"";
                echo (isset($context["S_BOOKMARK_TOGGLE"]) ? $context["S_BOOKMARK_TOGGLE"] : null);
                echo "\" data-update-all=\".bookmark-link\">
\t\t\t\t\t\t\t<i class=\"icon fa-bookmark-o fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 21
                echo (isset($context["S_BOOKMARK_TOPIC"]) ? $context["S_BOOKMARK_TOPIC"] : null);
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t";
            if ((isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null)) {
                // line 26
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 27
                echo (isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "\" data-ajax=\"true\">
\t\t\t\t\t\t<i class=\"icon fa-level-up fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 28
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t";
            if ((isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null)) {
                // line 33
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 34
                echo (isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
                echo "\">
\t\t\t\t\t\t<i class=\"icon fa-envelope-o fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 35
                echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t";
            if ((isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null)) {
                // line 40
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 41
                echo (isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("PRINT_TOPIC");
                echo "\" accesskey=\"p\">
\t\t\t\t\t\t<i class=\"icon fa-print fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 42
                echo $this->env->getExtension('phpbb')->lang("PRINT_TOPIC");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t";
            // line 47
            echo "\t\t\t</ul>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_topic_tools.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 47,  148 => 46,  141 => 42,  135 => 41,  132 => 40,  129 => 39,  122 => 35,  116 => 34,  113 => 33,  110 => 32,  103 => 28,  97 => 27,  94 => 26,  91 => 25,  84 => 21,  76 => 20,  73 => 19,  70 => 18,  57 => 14,  41 => 13,  38 => 12,  35 => 11,  34 => 10,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF not S_IS_BOT and (U_WATCH_TOPIC or U_BOOKMARK_TOPIC or U_BUMP_TOPIC or U_EMAIL_TOPIC or U_PRINT_TOPIC or S_DISPLAY_TOPIC_TOOLS) -->*/
/* 	<div class="dropdown-container dropdown-button-control topic-tools">*/
/* 		<span title="{L_TOPIC_TOOLS}" class="button button-secondary dropdown-trigger dropdown-select">*/
/* 			<i class="icon fa-wrench fa-fw" aria-hidden="true"></i>*/
/* 			<span class="caret"><i class="icon fa-sort-down fa-fw" aria-hidden="true"></i></span>*/
/* 		</span>*/
/* 		<div class="dropdown">*/
/* 			<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 			<ul class="dropdown-contents">*/
/* 				<!-- EVENT viewtopic_topic_tools_before -->*/
/* 				<!-- IF U_WATCH_TOPIC -->*/
/* 					<li>*/
/* 						<a href="{U_WATCH_TOPIC}" class="watch-topic-link" title="{S_WATCH_TOPIC_TITLE}" data-ajax="toggle_link" data-toggle-class="icon <!-- IF S_WATCHING_TOPIC -->fa-check-square-o<!-- ELSE -->fa-square-o<!-- ENDIF --> fa-fw" data-toggle-text="{S_WATCH_TOPIC_TOGGLE}" data-toggle-url="{U_WATCH_TOPIC_TOGGLE}" data-update-all=".watch-topic-link">*/
/* 							<i class="icon <!-- IF S_WATCHING_FORUM -->fa-square-o<!-- ELSE -->fa-check-square-o<!-- ENDIF --> fa-fw" aria-hidden="true"></i><span>{S_WATCH_TOPIC_TITLE}</span>*/
/* 						</a>*/
/* 					</li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF U_BOOKMARK_TOPIC -->*/
/* 					<li>*/
/* 						<a href="{U_BOOKMARK_TOPIC}" class="bookmark-link" title="{L_BOOKMARK_TOPIC}" data-ajax="alt_text" data-alt-text="{S_BOOKMARK_TOGGLE}" data-update-all=".bookmark-link">*/
/* 							<i class="icon fa-bookmark-o fa-fw" aria-hidden="true"></i><span>{S_BOOKMARK_TOPIC}</span>*/
/* 						</a>*/
/* 					</li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF U_BUMP_TOPIC -->*/
/* 				<li>*/
/* 					<a href="{U_BUMP_TOPIC}" title="{L_BUMP_TOPIC}" data-ajax="true">*/
/* 						<i class="icon fa-level-up fa-fw" aria-hidden="true"></i><span>{L_BUMP_TOPIC}</span>*/
/* 					</a>*/
/* 				</li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF U_EMAIL_TOPIC -->*/
/* 				<li>*/
/* 					<a href="{U_EMAIL_TOPIC}" title="{L_EMAIL_TOPIC}">*/
/* 						<i class="icon fa-envelope-o fa-fw" aria-hidden="true"></i><span>{L_EMAIL_TOPIC}</span>*/
/* 					</a>*/
/* 				</li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF U_PRINT_TOPIC -->*/
/* 				<li>*/
/* 					<a href="{U_PRINT_TOPIC}" title="{L_PRINT_TOPIC}" accesskey="p">*/
/* 						<i class="icon fa-print fa-fw" aria-hidden="true"></i><span>{L_PRINT_TOPIC}</span>*/
/* 					</a>*/
/* 				</li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- EVENT viewtopic_topic_tools_after -->*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
