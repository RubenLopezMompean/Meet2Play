<?php

/* index_body.html */
class __TwigTemplate_c606b3a3482e107ea7b55bfc55f2f40f1536c3c9ae59c53c46b160a001fa90a6 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
";
        // line 5
        // line 6
        echo "
";
        // line 7
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 7)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 8
        echo "
";
        // line 9
        // line 10
        echo "
<div class=\"forabg\">
\t<div class=\"inner\">
\t<ul class=\"topiclist\">
\t\t<li class=\"header\">
\t\t\t<dl class=\"row-item\">
\t\t\t\t<dt><div class=\"list-inner\">";
        // line 16
        echo $this->env->getExtension('phpbb')->lang("INFORMATION");
        echo "</div></dt>
\t\t\t</dl>
\t\t</li>
\t</ul>
\t<ul class=\"topiclist forums stats zebra-list\">
\t
\t\t";
        // line 22
        if (( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 23
            echo "\t\t\t<li class=\"row\">
\t\t\t\t<div class=\"stat-block\">
\t\t\t\t\t<form method=\"post\" action=\"";
            // line 25
            echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
            echo "\">
\t\t\t\t\t<h3><i class=\"icon fa-fw fa-sign-in\"></i> <a href=\"";
            // line 26
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a>";
            if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
                echo " &bull; <a href=\"";
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</a>";
            }
            echo "</h3>
\t\t\t\t\t\t<fieldset class=\"quick-login\">
\t\t\t\t\t\t\t<label for=\"username\"><span>";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</span> <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "\" /></label>
\t\t\t\t\t\t\t<label for=\"password\"><span>";
            // line 29
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</span> <input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo "\" autocomplete=\"off\" /></label>
\t\t\t\t\t\t\t";
            // line 30
            if ((isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null)) {
                // line 31
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo (isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORGOT_PASS");
                echo "</a>
\t\t\t\t\t\t\t";
            }
            // line 33
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                // line 34
                echo "\t\t\t\t\t\t\t\t<span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" /></label>
\t\t\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
            echo "\" class=\"button2\" />
\t\t\t\t\t\t\t";
            // line 37
            echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
            echo "
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</li>
\t\t";
        }
        // line 43
        echo "
\t\t";
        // line 44
        // line 45
        echo "
\t\t";
        // line 46
        if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
            // line 47
            echo "\t\t\t<li class=\"row\">
\t\t\t\t<div class=\"stat-block online-list\">
\t\t\t\t\t";
            // line 49
            if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                echo "<h3><i class=\"icon fa-fw fa-users\"></i> <a href=\"";
                echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                echo "</a></h3>";
            } else {
                echo "<h3><i class=\"icon fa-fw fa-users\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                echo "</h3>";
            }
            // line 50
            echo "\t\t\t\t\t<p>
\t\t\t\t\t\t";
            // line 51
            // line 52
            echo "\t\t\t\t\t\t";
            echo (isset($context["TOTAL_USERS_ONLINE"]) ? $context["TOTAL_USERS_ONLINE"] : null);
            echo " (";
            echo $this->env->getExtension('phpbb')->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            echo (isset($context["RECORD_USERS"]) ? $context["RECORD_USERS"] : null);
            echo "<br /> <br />";
            echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
            echo "
\t\t\t\t\t\t";
            // line 53
            if ((isset($context["LEGEND"]) ? $context["LEGEND"] : null)) {
                echo "<br /><em>";
                echo $this->env->getExtension('phpbb')->lang("LEGEND");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["LEGEND"]) ? $context["LEGEND"] : null);
                echo "</em>";
            }
            // line 54
            echo "\t\t\t\t\t\t";
            // line 55
            echo "\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</li>
\t\t";
        }
        // line 59
        echo "
\t\t";
        // line 60
        if ((isset($context["S_DISPLAY_BIRTHDAY_LIST"]) ? $context["S_DISPLAY_BIRTHDAY_LIST"] : null)) {
            // line 61
            echo "\t\t\t<li class=\"row\">
\t\t\t\t<div class=\"stat-block birthday-list\">
\t\t\t\t\t<h3><i class=\"icon fa-fw fa-birthday-cake\"></i> ";
            // line 63
            echo $this->env->getExtension('phpbb')->lang("BIRTHDAYS");
            echo "</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\t";
            // line 65
            // line 66
            echo "\t\t\t\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()))) {
                echo $this->env->getExtension('phpbb')->lang("CONGRATULATIONS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <strong>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo $this->getAttribute($context["birthdays"], "USERNAME", array());
                    if (($this->getAttribute($context["birthdays"], "AGE", array()) !== "")) {
                        echo " (";
                        echo $this->getAttribute($context["birthdays"], "AGE", array());
                        echo ")";
                    }
                    if ( !$this->getAttribute($context["birthdays"], "S_LAST_ROW", array())) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->env->getExtension('phpbb')->lang("NO_BIRTHDAYS");
            }
            // line 67
            echo "\t\t\t\t\t\t";
            // line 68
            echo "\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</li>
\t\t";
        }
        // line 72
        echo "
\t\t";
        // line 73
        if ((isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null)) {
            // line 74
            echo "\t\t\t<li class=\"row\">
\t\t\t\t<div class=\"stat-block statistics\">
\t\t\t\t\t<h3><i class=\"icon fa-fw fa-bar-chart\"></i> ";
            // line 76
            echo $this->env->getExtension('phpbb')->lang("STATISTICS");
            echo "</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\t";
            // line 78
            // line 79
            echo "\t\t\t\t\t\t";
            echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
            echo " &bull; ";
            echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
            echo " &bull; ";
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo " &bull; ";
            echo (isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null);
            echo "
\t\t\t\t\t\t";
            // line 80
            // line 81
            echo "\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</li>
\t\t";
        }
        // line 85
        echo "
\t\t";
        // line 86
        // line 87
        echo "
\t</ul>
\t</div>
</div>

";
        // line 92
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 92)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 92,  290 => 87,  289 => 86,  286 => 85,  280 => 81,  279 => 80,  268 => 79,  267 => 78,  262 => 76,  258 => 74,  256 => 73,  253 => 72,  247 => 68,  245 => 67,  219 => 66,  218 => 65,  213 => 63,  209 => 61,  207 => 60,  204 => 59,  198 => 55,  196 => 54,  187 => 53,  176 => 52,  175 => 51,  172 => 50,  160 => 49,  156 => 47,  154 => 46,  151 => 45,  150 => 44,  147 => 43,  138 => 37,  133 => 36,  127 => 34,  124 => 33,  116 => 31,  114 => 30,  107 => 29,  100 => 28,  85 => 26,  81 => 25,  77 => 23,  75 => 22,  66 => 16,  58 => 10,  57 => 9,  54 => 8,  42 => 7,  39 => 6,  38 => 5,  35 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <!-- EVENT index_body_markforums_before -->*/
/* */
/* <!-- EVENT index_body_markforums_after -->*/
/* */
/* <!-- INCLUDE forumlist_body.html -->*/
/* */
/* <!-- EVENT index_body_forumlist_body_after -->*/
/* */
/* <div class="forabg">*/
/* 	<div class="inner">*/
/* 	<ul class="topiclist">*/
/* 		<li class="header">*/
/* 			<dl class="row-item">*/
/* 				<dt><div class="list-inner">{L_INFORMATION}</div></dt>*/
/* 			</dl>*/
/* 		</li>*/
/* 	</ul>*/
/* 	<ul class="topiclist forums stats zebra-list">*/
/* 	*/
/* 		<!-- IF not S_USER_LOGGED_IN and not S_IS_BOT -->*/
/* 			<li class="row">*/
/* 				<div class="stat-block">*/
/* 					<form method="post" action="{S_LOGIN_ACTION}">*/
/* 					<h3><i class="icon fa-fw fa-sign-in"></i> <a href="{U_LOGIN_LOGOUT}">{L_LOGIN_LOGOUT}</a><!-- IF S_REGISTER_ENABLED --> &bull; <a href="{U_REGISTER}">{L_REGISTER}</a><!-- ENDIF --></h3>*/
/* 						<fieldset class="quick-login">*/
/* 							<label for="username"><span>{L_USERNAME}{L_COLON}</span> <input type="text" tabindex="1" name="username" id="username" size="10" class="inputbox" title="{L_USERNAME}" /></label>*/
/* 							<label for="password"><span>{L_PASSWORD}{L_COLON}</span> <input type="password" tabindex="2" name="password" id="password" size="10" class="inputbox" title="{L_PASSWORD}" autocomplete="off" /></label>*/
/* 							<!-- IF U_SEND_PASSWORD -->*/
/* 								<a href="{U_SEND_PASSWORD}">{L_FORGOT_PASS}</a>*/
/* 							<!-- ENDIF -->*/
/* 							<!-- IF S_AUTOLOGIN_ENABLED -->*/
/* 								<span class="responsive-hide">|</span> <label for="autologin">{L_LOG_ME_IN} <input type="checkbox" tabindex="4" name="autologin" id="autologin" /></label>*/
/* 							<!-- ENDIF -->*/
/* 							<input type="submit" tabindex="5" name="login" value="{L_LOGIN}" class="button2" />*/
/* 							{S_LOGIN_REDIRECT}*/
/* 						</fieldset>*/
/* 					</form>*/
/* 				</div>*/
/* 			</li>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- EVENT index_body_stat_blocks_before -->*/
/* */
/* 		<!-- IF S_DISPLAY_ONLINE_LIST -->*/
/* 			<li class="row">*/
/* 				<div class="stat-block online-list">*/
/* 					<!-- IF U_VIEWONLINE --><h3><i class="icon fa-fw fa-users"></i> <a href="{U_VIEWONLINE}">{L_WHO_IS_ONLINE}</a></h3><!-- ELSE --><h3><i class="icon fa-fw fa-users"></i> {L_WHO_IS_ONLINE}</h3><!-- ENDIF -->*/
/* 					<p>*/
/* 						<!-- EVENT index_body_block_online_prepend -->*/
/* 						{TOTAL_USERS_ONLINE} ({L_ONLINE_EXPLAIN})<br />{RECORD_USERS}<br /> <br />{LOGGED_IN_USER_LIST}*/
/* 						<!-- IF LEGEND --><br /><em>{L_LEGEND}{L_COLON} {LEGEND}</em><!-- ENDIF -->*/
/* 						<!-- EVENT index_body_block_online_append -->*/
/* 					</p>*/
/* 				</div>*/
/* 			</li>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF S_DISPLAY_BIRTHDAY_LIST -->*/
/* 			<li class="row">*/
/* 				<div class="stat-block birthday-list">*/
/* 					<h3><i class="icon fa-fw fa-birthday-cake"></i> {L_BIRTHDAYS}</h3>*/
/* 					<p>*/
/* 						<!-- EVENT index_body_block_birthday_prepend -->*/
/* 						<!-- IF .birthdays -->{L_CONGRATULATIONS}{L_COLON} <strong><!-- BEGIN birthdays -->{birthdays.USERNAME}<!-- IF birthdays.AGE !== '' --> ({birthdays.AGE})<!-- ENDIF --><!-- IF not birthdays.S_LAST_ROW -->, <!-- ENDIF --><!-- END birthdays --></strong><!-- ELSE -->{L_NO_BIRTHDAYS}<!-- ENDIF -->*/
/* 						<!-- EVENT index_body_block_birthday_append -->*/
/* 					</p>*/
/* 				</div>*/
/* 			</li>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF NEWEST_USER -->*/
/* 			<li class="row">*/
/* 				<div class="stat-block statistics">*/
/* 					<h3><i class="icon fa-fw fa-bar-chart"></i> {L_STATISTICS}</h3>*/
/* 					<p>*/
/* 						<!-- EVENT index_body_block_stats_prepend -->*/
/* 						{TOTAL_POSTS} &bull; {TOTAL_TOPICS} &bull; {TOTAL_USERS} &bull; {NEWEST_USER}*/
/* 						<!-- EVENT index_body_block_stats_append -->*/
/* 					</p>*/
/* 				</div>*/
/* 			</li>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- EVENT index_body_stat_blocks_after -->*/
/* */
/* 	</ul>*/
/* 	</div>*/
/* </div>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
