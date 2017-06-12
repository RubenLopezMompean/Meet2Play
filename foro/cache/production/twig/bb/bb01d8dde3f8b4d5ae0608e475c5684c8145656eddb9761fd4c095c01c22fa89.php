<?php

/* ucp_pm_message_header.html */
class __TwigTemplate_f9af0ad34fb7bdcde6df5db7f0cc9c0e4d4d98ccda40fd2297691dd660cb42d0 extends Twig_Template
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
        echo "<h2>";
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        if ((isset($context["CUR_FOLDER_NAME"]) ? $context["CUR_FOLDER_NAME"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            echo (isset($context["CUR_FOLDER_NAME"]) ? $context["CUR_FOLDER_NAME"] : null);
        }
        echo "</h2>

<form id=\"viewfolder\" method=\"post\" action=\"";
        // line 3
        echo (isset($context["S_PM_ACTION"]) ? $context["S_PM_ACTION"] : null);
        echo "\">

<div class=\"panel\">
\t<div class=\"inner\">
\t";
        // line 7
        if (((isset($context["FOLDER_STATUS"]) ? $context["FOLDER_STATUS"] : null) && ((isset($context["FOLDER_MAX_MESSAGES"]) ? $context["FOLDER_MAX_MESSAGES"] : null) != 0))) {
            echo "<p>";
            echo (isset($context["FOLDER_STATUS"]) ? $context["FOLDER_STATUS"] : null);
            echo "</p>";
        }
        // line 8
        echo "
\t<div class=\"action-bar bar-top\">
\t";
        // line 10
        if ((((isset($context["U_POST_REPLY_PM"]) ? $context["U_POST_REPLY_PM"] : null) || (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null)) || (isset($context["U_FORWARD_PM"]) ? $context["U_FORWARD_PM"] : null))) {
            // line 11
            echo "\t\t";
            if ((isset($context["U_POST_REPLY_PM"]) ? $context["U_POST_REPLY_PM"] : null)) {
                // line 12
                echo "\t\t\t<a title=\"";
                echo $this->env->getExtension('phpbb')->lang("POST_REPLY_PM");
                echo "\" href=\"";
                echo (isset($context["U_POST_REPLY_PM"]) ? $context["U_POST_REPLY_PM"] : null);
                echo "\" class=\"button\">
\t\t\t\t<span>";
                // line 13
                echo $this->env->getExtension('phpbb')->lang("BUTTON_PM_REPLY");
                echo "</span> <i class=\"icon fa-reply fa-fw\" aria-hidden=\"true\"></i>
\t\t\t</a>
\t\t";
            } elseif (            // line 15
(isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null)) {
                // line 16
                echo "\t\t\t<a href=\"";
                echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                echo "\" accesskey=\"n\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("UCP_PM_COMPOSE");
                echo "\" class=\"button\">
\t\t\t\t<span>";
                // line 17
                echo $this->env->getExtension('phpbb')->lang("BUTTON_PM_NEW");
                echo "</span> <i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i>
\t\t\t</a>
\t\t";
            }
            // line 20
            echo "\t\t";
            if ((isset($context["U_FORWARD_PM"]) ? $context["U_FORWARD_PM"] : null)) {
                // line 21
                echo "\t\t\t<a title=\"";
                echo $this->env->getExtension('phpbb')->lang("POST_FORWARD_PM");
                echo "\" href=\"";
                echo (isset($context["U_FORWARD_PM"]) ? $context["U_FORWARD_PM"] : null);
                echo "\" class=\"button\">
\t\t\t\t<span>";
                // line 22
                echo $this->env->getExtension('phpbb')->lang("BUTTON_PM_FORWARD");
                echo "</span> <i class=\"icon fa-mail-forward fa-fw\" aria-hidden=\"true\"></i>
\t\t\t</a>
\t\t";
            }
            // line 25
            echo "\t\t";
            if (((isset($context["U_POST_REPLY_PM"]) ? $context["U_POST_REPLY_PM"] : null) && ((isset($context["S_PM_RECIPIENTS"]) ? $context["S_PM_RECIPIENTS"] : null) > 1))) {
                // line 26
                echo "\t\t\t<a title=\"";
                echo $this->env->getExtension('phpbb')->lang("REPLY_TO_ALL");
                echo "\" href=\"";
                echo (isset($context["U_POST_REPLY_ALL"]) ? $context["U_POST_REPLY_ALL"] : null);
                echo "\" class=\"button\">
\t\t\t\t<span>";
                // line 27
                echo $this->env->getExtension('phpbb')->lang("BUTTON_PM_REPLY_ALL");
                echo "</span> <i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i>
\t\t\t</a>
\t\t";
            }
            // line 30
            echo "\t";
        }
        // line 31
        echo "
\t";
        // line 32
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["U_PRINT_PM"]) ? $context["U_PRINT_PM"] : null))) {
            // line 33
            echo "\t\t<div class=\"dropdown-container dropdown-button-control topic-tools\">
\t\t\t<span title=\"";
            // line 34
            echo $this->env->getExtension('phpbb')->lang("PM_TOOLS");
            echo "\" class=\"button button-secondary dropdown-trigger dropdown-select\">
\t\t\t\t<i class=\"icon fa-wrench fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t<span class=\"caret\"><i class=\"icon fa-sort-down fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t</span>
\t\t\t<div class=\"dropdown\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t\t";
            // line 41
            if ((isset($context["U_PRINT_PM"]) ? $context["U_PRINT_PM"] : null)) {
                // line 42
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                // line 43
                echo (isset($context["U_PRINT_PM"]) ? $context["U_PRINT_PM"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("PRINT_PM");
                echo "\" accesskey=\"p\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-print fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 44
                echo $this->env->getExtension('phpbb')->lang("PRINT_PM");
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 48
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 52
        echo "
\t";
        // line 53
        if (((isset($context["TOTAL_MESSAGES"]) ? $context["TOTAL_MESSAGES"] : null) || (isset($context["S_VIEW_MESSAGE"]) ? $context["S_VIEW_MESSAGE"] : null))) {
            // line 54
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 55
            if ((isset($context["S_VIEW_MESSAGE"]) ? $context["S_VIEW_MESSAGE"] : null)) {
                // line 56
                echo "\t\t\t\t<a class=\"arrow-";
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo "\" href=\"";
                echo (isset($context["U_CURRENT_FOLDER"]) ? $context["U_CURRENT_FOLDER"] : null);
                echo "\">
\t\t\t\t\t<i class=\"icon fa-angle-";
                // line 57
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
                echo $this->env->getExtension('phpbb')->lang("RETURN_TO_FOLDER");
                echo "</span>
\t\t\t\t</a>
\t\t\t";
            } elseif ((            // line 59
(isset($context["FOLDER_CUR_MESSAGES"]) ? $context["FOLDER_CUR_MESSAGES"] : null) != 0)) {
                // line 60
                echo "\t\t\t\t";
                if ((isset($context["U_MARK_ALL"]) ? $context["U_MARK_ALL"] : null)) {
                    echo "<a href=\"";
                    echo (isset($context["U_MARK_ALL"]) ? $context["U_MARK_ALL"] : null);
                    echo "\" class=\"mark\">";
                    echo $this->env->getExtension('phpbb')->lang("PM_MARK_ALL_READ");
                    echo "</a> &bull; ";
                }
                // line 61
                echo "\t\t\t\t";
                echo (isset($context["TOTAL_MESSAGES"]) ? $context["TOTAL_MESSAGES"] : null);
                echo "
\t\t\t\t";
                // line 62
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                    // line 63
                    echo "\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_pm_message_header.html", 63)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 64
                    echo "\t\t\t\t";
                } else {
                    // line 65
                    echo "\t\t\t\t\t &bull; ";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "
\t\t\t\t";
                }
                // line 67
                echo "\t\t\t";
            }
            // line 68
            echo "\t\t</div>
\t";
        }
        // line 70
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "ucp_pm_message_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 70,  223 => 68,  220 => 67,  214 => 65,  211 => 64,  198 => 63,  196 => 62,  191 => 61,  182 => 60,  180 => 59,  173 => 57,  166 => 56,  164 => 55,  161 => 54,  159 => 53,  156 => 52,  150 => 48,  143 => 44,  137 => 43,  134 => 42,  132 => 41,  122 => 34,  119 => 33,  117 => 32,  114 => 31,  111 => 30,  105 => 27,  98 => 26,  95 => 25,  89 => 22,  82 => 21,  79 => 20,  73 => 17,  66 => 16,  64 => 15,  59 => 13,  52 => 12,  49 => 11,  47 => 10,  43 => 8,  37 => 7,  30 => 3,  19 => 1,);
    }
}
/* <h2>{L_TITLE}<!-- IF CUR_FOLDER_NAME -->{L_COLON} {CUR_FOLDER_NAME}<!-- ENDIF --></h2>*/
/* */
/* <form id="viewfolder" method="post" action="{S_PM_ACTION}">*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* 	<!-- IF FOLDER_STATUS and FOLDER_MAX_MESSAGES neq 0 --><p>{FOLDER_STATUS}</p><!-- ENDIF -->*/
/* */
/* 	<div class="action-bar bar-top">*/
/* 	<!-- IF U_POST_REPLY_PM or U_POST_NEW_TOPIC or U_FORWARD_PM -->*/
/* 		<!-- IF U_POST_REPLY_PM -->*/
/* 			<a title="{L_POST_REPLY_PM}" href="{U_POST_REPLY_PM}" class="button">*/
/* 				<span>{L_BUTTON_PM_REPLY}</span> <i class="icon fa-reply fa-fw" aria-hidden="true"></i>*/
/* 			</a>*/
/* 		<!-- ELSEIF U_POST_NEW_TOPIC -->*/
/* 			<a href="{U_POST_NEW_TOPIC}" accesskey="n" title="{L_UCP_PM_COMPOSE}" class="button">*/
/* 				<span>{L_BUTTON_PM_NEW}</span> <i class="icon fa-pencil fa-fw" aria-hidden="true"></i>*/
/* 			</a>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF U_FORWARD_PM -->*/
/* 			<a title="{L_POST_FORWARD_PM}" href="{U_FORWARD_PM}" class="button">*/
/* 				<span>{L_BUTTON_PM_FORWARD}</span> <i class="icon fa-mail-forward fa-fw" aria-hidden="true"></i>*/
/* 			</a>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF U_POST_REPLY_PM and S_PM_RECIPIENTS gt 1 -->*/
/* 			<a title="{L_REPLY_TO_ALL}" href="{U_POST_REPLY_ALL}" class="button">*/
/* 				<span>{L_BUTTON_PM_REPLY_ALL}</span> <i class="icon fa-pencil fa-fw" aria-hidden="true"></i>*/
/* 			</a>*/
/* 		<!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF not S_IS_BOT and U_PRINT_PM -->*/
/* 		<div class="dropdown-container dropdown-button-control topic-tools">*/
/* 			<span title="{L_PM_TOOLS}" class="button button-secondary dropdown-trigger dropdown-select">*/
/* 				<i class="icon fa-wrench fa-fw" aria-hidden="true"></i>*/
/* 				<span class="caret"><i class="icon fa-sort-down fa-fw" aria-hidden="true"></i></span>*/
/* 			</span>*/
/* 			<div class="dropdown">*/
/* 				<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 				<ul class="dropdown-contents">*/
/* 					<!-- IF U_PRINT_PM -->*/
/* 						<li>*/
/* 							<a href="{U_PRINT_PM}" title="{L_PRINT_PM}" accesskey="p">*/
/* 								<i class="icon fa-print fa-fw" aria-hidden="true"></i><span>{L_PRINT_PM}</span>*/
/* 							</a>*/
/* 						</li>*/
/* 					<!-- ENDIF -->*/
/* 				</ul>*/
/* 			</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF TOTAL_MESSAGES or S_VIEW_MESSAGE -->*/
/* 		<div class="pagination">*/
/* 			<!-- IF S_VIEW_MESSAGE -->*/
/* 				<a class="arrow-{S_CONTENT_FLOW_BEGIN}" href="{U_CURRENT_FOLDER}">*/
/* 					<i class="icon fa-angle-{S_CONTENT_FLOW_BEGIN} fa-fw icon-black" aria-hidden="true"></i><span>{L_RETURN_TO_FOLDER}</span>*/
/* 				</a>*/
/* 			<!-- ELSEIF FOLDER_CUR_MESSAGES neq 0 -->*/
/* 				<!-- IF U_MARK_ALL --><a href="{U_MARK_ALL}" class="mark">{L_PM_MARK_ALL_READ}</a> &bull; <!-- ENDIF -->*/
/* 				{TOTAL_MESSAGES}*/
/* 				<!-- IF .pagination -->*/
/* 					<!-- INCLUDE pagination.html -->*/
/* 				<!-- ELSE -->*/
/* 					 &bull; {PAGE_NUMBER}*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* 	</div>*/
/* */
