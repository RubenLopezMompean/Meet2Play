<?php

/* ucp_header.html */
class __TwigTemplate_b3feded0b504923485993b9e72d68e418bdcccda3042c7738c8b5fd203232520 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "ucp_header.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"ucp-title\">";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("UCP");
        echo "</h2>

<div id=\"tabs\" class=\"tabs\">
\t<ul>
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "t_block1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block1"]) {
            // line 8
            echo "\t\t<li class=\"tab";
            if ($this->getAttribute($context["t_block1"], "S_SELECTED", array())) {
                echo " activetab";
            }
            echo "\"><a href=\"";
            echo $this->getAttribute($context["t_block1"], "U_TITLE", array());
            echo "\">";
            echo $this->getAttribute($context["t_block1"], "L_TITLE", array());
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t</ul>
</div>

";
        // line 13
        if ((isset($context["S_COMPOSE_PM"]) ? $context["S_COMPOSE_PM"] : null)) {
            // line 14
            echo "<form id=\"postform\" method=\"post\" action=\"";
            echo (isset($context["S_POST_ACTION"]) ? $context["S_POST_ACTION"] : null);
            echo "\"";
            echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
            echo ">
";
        }
        // line 16
        echo "
<div class=\"panel bg3\">
\t<div class=\"inner\">

\t<div style=\"width: 100%;\">

\t<div id=\"cp-menu\" class=\"cp-menu\">
\t\t<div id=\"navigation\" class=\"navigation\" role=\"navigation\">

\t\t";
        // line 25
        if ((isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) {
            // line 26
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "t_block2", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["t_block2"]) {
                // line 27
                echo "\t\t\t\t";
                if (((isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null) &&  !$this->getAttribute($context["t_block2"], "S_LAST_ROW", array()))) {
                    // line 28
                    echo "\t\t\t\t<ul>
\t\t\t\t\t";
                    // line 29
                    if ($this->getAttribute($context["t_block2"], "S_SELECTED", array())) {
                        // line 30
                        echo "\t\t\t\t\t\t<li id=\"active-subsection\" class=\"active-subsection\"><a href=\"";
                        echo $this->getAttribute($context["t_block2"], "U_TITLE", array());
                        echo "\"><span>";
                        echo $this->getAttribute($context["t_block2"], "L_TITLE", array());
                        echo "</span></a></li>
\t\t\t\t\t";
                    } else {
                        // line 32
                        echo "\t\t\t\t\t\t<li><a href=\"";
                        echo $this->getAttribute($context["t_block2"], "U_TITLE", array());
                        echo "\"><span>";
                        echo $this->getAttribute($context["t_block2"], "L_TITLE", array());
                        echo "</span></a></li>
\t\t\t\t\t";
                    }
                    // line 34
                    echo "\t\t\t\t</ul>
\t\t\t\t";
                }
                // line 36
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "
\t\t\t<hr />
\t\t\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "folder", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 40
                echo "\t\t\t\t";
                if ($this->getAttribute($context["folder"], "S_FIRST_ROW", array())) {
                    echo "<ul>";
                }
                // line 41
                echo "\t\t\t\t";
                if ($this->getAttribute($context["folder"], "S_CUR_FOLDER", array())) {
                    // line 42
                    echo "\t\t\t\t\t<li id=\"active-subsection\" class=\"active-subsection\"><a href=\"";
                    echo $this->getAttribute($context["folder"], "U_FOLDER", array());
                    echo "\">";
                    if (($this->getAttribute($context["folder"], "UNREAD_MESSAGES", array()) > 0)) {
                        echo "<strong>";
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", array());
                        echo " (";
                        echo $this->getAttribute($context["folder"], "UNREAD_MESSAGES", array());
                        echo ")</strong>";
                    } else {
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", array());
                    }
                    echo "</a></li>
\t\t\t\t";
                } else {
                    // line 44
                    echo "\t\t\t\t\t<li><a href=\"";
                    echo $this->getAttribute($context["folder"], "U_FOLDER", array());
                    echo "\"><span>";
                    if (($this->getAttribute($context["folder"], "UNREAD_MESSAGES", array()) > 0)) {
                        echo "<strong>";
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", array());
                        echo " (";
                        echo $this->getAttribute($context["folder"], "UNREAD_MESSAGES", array());
                        echo ")</strong>";
                    } else {
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", array());
                    }
                    echo "</span></a></li>
\t\t\t\t";
                }
                // line 46
                echo "\t\t\t\t";
                if ($this->getAttribute($context["folder"], "S_LAST_ROW", array())) {
                    echo "</ul>";
                }
                // line 47
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t<hr />
\t\t";
        }
        // line 50
        echo "
\t\t\t<ul>
\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "t_block2", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block2"]) {
            // line 53
            echo "\t\t\t";
            if ((((isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null) && $this->getAttribute($context["t_block2"], "S_LAST_ROW", array())) ||  !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null))) {
                // line 54
                echo "\t\t\t\t";
                if ($this->getAttribute($context["t_block2"], "S_SELECTED", array())) {
                    // line 55
                    echo "\t\t\t\t\t<li id=\"active-subsection\" class=\"active-subsection\"><a href=\"";
                    echo $this->getAttribute($context["t_block2"], "U_TITLE", array());
                    echo "\"><span>";
                    echo $this->getAttribute($context["t_block2"], "L_TITLE", array());
                    echo "</span></a></li>
\t\t\t\t";
                } else {
                    // line 57
                    echo "\t\t\t\t\t<li><a href=\"";
                    echo $this->getAttribute($context["t_block2"], "U_TITLE", array());
                    echo "\"><span>";
                    echo $this->getAttribute($context["t_block2"], "L_TITLE", array());
                    echo "</span></a></li>
\t\t\t\t";
                }
                // line 59
                echo "\t\t\t";
            }
            // line 60
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t</ul>
\t\t</div>

\t\t";
        // line 64
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_online", array())) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_offline", array())))) {
            // line 65
            echo "\t\t<div class=\"cp-mini\">
\t\t\t<div class=\"inner\">

\t\t\t<dl class=\"mini\">
\t\t\t\t<dt>";
            // line 69
            echo $this->env->getExtension('phpbb')->lang("FRIENDS");
            echo "</dt>

\t\t\t\t";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_online", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["friends_online"]) {
                // line 72
                echo "\t\t\t\t\t<dd class=\"friend-online\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FRIENDS_ONLINE");
                echo "\">";
                echo $this->getAttribute($context["friends_online"], "USERNAME_FULL", array());
                echo " ";
                if ((isset($context["S_SHOW_PM_BOX"]) ? $context["S_SHOW_PM_BOX"] : null)) {
                    echo " <input type=\"submit\" name=\"add_to[";
                    echo $this->getAttribute($context["friends_online"], "USER_ID", array());
                    echo "]\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("ADD");
                    echo "\" class=\"button2\" />";
                }
                if (($this->getAttribute($context["friends_online"], "S_LAST_ROW", array()) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_offline", array())))) {
                    echo "<hr />";
                }
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friends_online'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "
\t\t\t\t";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_offline", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["friends_offline"]) {
                // line 76
                echo "\t\t\t\t\t<dd class=\"friend-offline\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FRIENDS_OFFLINE");
                echo "\">";
                echo $this->getAttribute($context["friends_offline"], "USERNAME_FULL", array());
                echo " ";
                if ((isset($context["S_SHOW_PM_BOX"]) ? $context["S_SHOW_PM_BOX"] : null)) {
                    echo "<input type=\"submit\" name=\"add_to[";
                    echo $this->getAttribute($context["friends_offline"], "USER_ID", array());
                    echo "]\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("ADD");
                    echo "\" class=\"button2\" />";
                }
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friends_offline'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "\t\t\t</dl>

\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 83
        echo "
\t\t";
        // line 84
        if ((isset($context["S_SHOW_COLOUR_LEGEND"]) ? $context["S_SHOW_COLOUR_LEGEND"] : null)) {
            // line 85
            echo "\t\t<div class=\"cp-mini\">
\t\t\t<div class=\"inner\">

\t\t\t<dl class=\"mini\">
\t\t\t\t<dt>";
            // line 89
            echo $this->env->getExtension('phpbb')->lang("MESSAGE_COLOURS");
            echo "</dt>
\t\t\t\t";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pm_colour_info", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pm_colour_info"]) {
                // line 91
                echo "\t\t\t\t\t<dd class=\"pm-legend";
                if ($this->getAttribute($context["pm_colour_info"], "CLASS", array())) {
                    echo " ";
                    echo $this->getAttribute($context["pm_colour_info"], "CLASS", array());
                }
                echo "\">";
                if ($this->getAttribute($context["pm_colour_info"], "IMG", array())) {
                    echo $this->getAttribute($context["pm_colour_info"], "IMG", array());
                    echo " ";
                }
                echo $this->getAttribute($context["pm_colour_info"], "LANG", array());
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pm_colour_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t\t\t</dl>

\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 98
        echo "
\t</div>

\t<div id=\"cp-main\" class=\"cp-main ucp-main panel-container\">
";
    }

    public function getTemplateName()
    {
        return "ucp_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 98,  343 => 93,  325 => 91,  321 => 90,  317 => 89,  311 => 85,  309 => 84,  306 => 83,  299 => 78,  280 => 76,  276 => 75,  273 => 74,  251 => 72,  247 => 71,  242 => 69,  236 => 65,  234 => 64,  229 => 61,  223 => 60,  220 => 59,  212 => 57,  204 => 55,  201 => 54,  198 => 53,  194 => 52,  190 => 50,  186 => 48,  180 => 47,  175 => 46,  159 => 44,  143 => 42,  140 => 41,  135 => 40,  131 => 39,  127 => 37,  121 => 36,  117 => 34,  109 => 32,  101 => 30,  99 => 29,  96 => 28,  93 => 27,  88 => 26,  86 => 25,  75 => 16,  67 => 14,  65 => 13,  60 => 10,  45 => 8,  41 => 7,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <h2 class="ucp-title">{L_UCP}</h2>*/
/* */
/* <div id="tabs" class="tabs">*/
/* 	<ul>*/
/* 		<!-- BEGIN t_block1 -->*/
/* 		<li class="tab<!-- IF t_block1.S_SELECTED --> activetab<!-- ENDIF -->"><a href="{t_block1.U_TITLE}">{t_block1.L_TITLE}</a></li>*/
/* 		<!-- END t_block1 -->*/
/* 	</ul>*/
/* </div>*/
/* */
/* <!-- IF S_COMPOSE_PM -->*/
/* <form id="postform" method="post" action="{S_POST_ACTION}"{S_FORM_ENCTYPE}>*/
/* <!-- ENDIF -->*/
/* */
/* <div class="panel bg3">*/
/* 	<div class="inner">*/
/* */
/* 	<div style="width: 100%;">*/
/* */
/* 	<div id="cp-menu" class="cp-menu">*/
/* 		<div id="navigation" class="navigation" role="navigation">*/
/* */
/* 		<!-- IF S_PRIVMSGS -->*/
/* 			<!-- BEGIN t_block2 -->*/
/* 				<!-- IF S_PRIVMSGS and not t_block2.S_LAST_ROW -->*/
/* 				<ul>*/
/* 					<!-- IF t_block2.S_SELECTED -->*/
/* 						<li id="active-subsection" class="active-subsection"><a href="{t_block2.U_TITLE}"><span>{t_block2.L_TITLE}</span></a></li>*/
/* 					<!-- ELSE -->*/
/* 						<li><a href="{t_block2.U_TITLE}"><span>{t_block2.L_TITLE}</span></a></li>*/
/* 					<!-- ENDIF -->*/
/* 				</ul>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- END t_block2 -->*/
/* */
/* 			<hr />*/
/* 			<!-- BEGIN folder -->*/
/* 				<!-- IF folder.S_FIRST_ROW --><ul><!-- ENDIF -->*/
/* 				<!-- IF folder.S_CUR_FOLDER -->*/
/* 					<li id="active-subsection" class="active-subsection"><a href="{folder.U_FOLDER}"><!-- IF folder.UNREAD_MESSAGES > 0 --><strong>{folder.FOLDER_NAME} ({folder.UNREAD_MESSAGES})</strong><!-- ELSE -->{folder.FOLDER_NAME}<!-- ENDIF --></a></li>*/
/* 				<!-- ELSE -->*/
/* 					<li><a href="{folder.U_FOLDER}"><span><!-- IF folder.UNREAD_MESSAGES > 0 --><strong>{folder.FOLDER_NAME} ({folder.UNREAD_MESSAGES})</strong><!-- ELSE -->{folder.FOLDER_NAME}<!-- ENDIF --></span></a></li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF folder.S_LAST_ROW --></ul><!-- ENDIF -->*/
/* 			<!-- END folder -->*/
/* 			<hr />*/
/* 		<!-- ENDIF -->*/
/* */
/* 			<ul>*/
/* 		<!-- BEGIN t_block2 -->*/
/* 			<!-- IF (S_PRIVMSGS and t_block2.S_LAST_ROW) or not S_PRIVMSGS -->*/
/* 				<!-- IF t_block2.S_SELECTED -->*/
/* 					<li id="active-subsection" class="active-subsection"><a href="{t_block2.U_TITLE}"><span>{t_block2.L_TITLE}</span></a></li>*/
/* 				<!-- ELSE -->*/
/* 					<li><a href="{t_block2.U_TITLE}"><span>{t_block2.L_TITLE}</span></a></li>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 		<!-- END t_block2 -->*/
/* 			</ul>*/
/* 		</div>*/
/* */
/* 		<!-- IF .friends_online or .friends_offline -->*/
/* 		<div class="cp-mini">*/
/* 			<div class="inner">*/
/* */
/* 			<dl class="mini">*/
/* 				<dt>{L_FRIENDS}</dt>*/
/* */
/* 				<!-- BEGIN friends_online -->*/
/* 					<dd class="friend-online" title="{L_FRIENDS_ONLINE}">{friends_online.USERNAME_FULL} <!-- IF S_SHOW_PM_BOX --> <input type="submit" name="add_to[{friends_online.USER_ID}]" value="{L_ADD}" class="button2" /><!-- ENDIF --><!-- IF friends_online.S_LAST_ROW and .friends_offline --><hr /><!-- ENDIF --></dd>*/
/* 				<!-- END friends_online -->*/
/* */
/* 				<!-- BEGIN friends_offline -->*/
/* 					<dd class="friend-offline" title="{L_FRIENDS_OFFLINE}">{friends_offline.USERNAME_FULL} <!-- IF S_SHOW_PM_BOX --><input type="submit" name="add_to[{friends_offline.USER_ID}]" value="{L_ADD}" class="button2" /><!-- ENDIF --></dd>*/
/* 				<!-- END friends_offline -->*/
/* 			</dl>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF S_SHOW_COLOUR_LEGEND -->*/
/* 		<div class="cp-mini">*/
/* 			<div class="inner">*/
/* */
/* 			<dl class="mini">*/
/* 				<dt>{L_MESSAGE_COLOURS}</dt>*/
/* 				<!-- BEGIN pm_colour_info -->*/
/* 					<dd class="pm-legend<!-- IF pm_colour_info.CLASS --> {pm_colour_info.CLASS}<!-- ENDIF -->"><!-- IF pm_colour_info.IMG -->{pm_colour_info.IMG} <!-- ENDIF -->{pm_colour_info.LANG}</dd>*/
/* 				<!-- END pm_colour_info -->*/
/* 			</dl>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* */
/* 	</div>*/
/* */
/* 	<div id="cp-main" class="cp-main ucp-main panel-container">*/
/* */
