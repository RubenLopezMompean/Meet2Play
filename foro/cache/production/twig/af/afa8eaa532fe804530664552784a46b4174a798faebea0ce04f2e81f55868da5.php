<?php

/* acp_ext_details.html */
class __TwigTemplate_24607bf0cdd444c1ce691104ad7ce70cb5bab612c491e493d9fd2a4f6eb299ea extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_ext_details.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

\t<a href=\"";
        // line 5
        echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
        echo "\" style=\"float: ";
        echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
        echo ";\">&laquo; ";
        echo $this->env->getExtension('phpbb')->lang("BACK");
        echo "</a>

\t<h1>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("EXTENSIONS_ADMIN");
        echo "</h1>

\t";
        // line 9
        if ((isset($context["S_VERSIONCHECK"]) ? $context["S_VERSIONCHECK"] : null)) {
            // line 10
            echo "\t\t";
            if ((isset($context["S_VERSIONCHECK_FAIL"]) ? $context["S_VERSIONCHECK_FAIL"] : null)) {
                // line 11
                echo "\t\t<div class=\"errorbox notice\">
\t\t\t<p>";
                // line 12
                echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FAIL");
                echo "</p>
\t\t\t<p>";
                // line 13
                echo (isset($context["VERSIONCHECK_FAIL_REASON"]) ? $context["VERSIONCHECK_FAIL_REASON"] : null);
                echo "</p>
\t\t\t<p><a href=\"";
                // line 14
                echo (isset($context["U_VERSIONCHECK_FORCE"]) ? $context["U_VERSIONCHECK_FORCE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FORCE_UPDATE");
                echo "</a></p>
\t\t</div>
\t\t";
            } else {
                // line 17
                echo "\t\t<div class=\"";
                if ((isset($context["S_UP_TO_DATE"]) ? $context["S_UP_TO_DATE"] : null)) {
                    echo "successbox";
                } else {
                    echo "errorbox";
                }
                echo "\">
\t\t\t<p>";
                // line 18
                echo (isset($context["UP_TO_DATE_MSG"]) ? $context["UP_TO_DATE_MSG"] : null);
                echo " - <a href=\"";
                echo (isset($context["U_VERSIONCHECK_FORCE"]) ? $context["U_VERSIONCHECK_FORCE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FORCE_UPDATE");
                echo "</a></p>
\t\t</div>
\t\t";
            }
            // line 21
            echo "\t";
        }
        // line 22
        echo "
\t<fieldset>
\t\t<legend>";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("EXT_DETAILS");
        echo "</legend>
\t\t";
        // line 25
        if ((isset($context["META_DISPLAY_NAME"]) ? $context["META_DISPLAY_NAME"] : null)) {
            // line 26
            echo "\t\t<dl>
\t\t\t<dt><label>";
            // line 27
            echo $this->env->getExtension('phpbb')->lang("DISPLAY_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><strong id=\"meta_display_name\">";
            // line 28
            echo (isset($context["META_DISPLAY_NAME"]) ? $context["META_DISPLAY_NAME"] : null);
            echo "</strong></dd>
\t\t</dl>
\t\t";
        }
        // line 31
        echo "\t\t<dl>
\t\t\t<dt><label>";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("CLEAN_NAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><strong id=\"meta_name\">";
        // line 33
        echo (isset($context["META_NAME"]) ? $context["META_NAME"] : null);
        echo "</strong></dd>
\t\t</dl>
\t\t";
        // line 35
        if ((isset($context["META_DESCRIPTION"]) ? $context["META_DESCRIPTION"] : null)) {
            // line 36
            echo "\t\t<dl>
\t\t\t<dt><label>";
            // line 37
            echo $this->env->getExtension('phpbb')->lang("DESCRIPTION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><span id=\"meta_description\">";
            // line 38
            echo (isset($context["META_DESCRIPTION"]) ? $context["META_DESCRIPTION"] : null);
            echo "</span></dd>
\t\t</dl>
\t\t";
        }
        // line 41
        echo "\t\t<dl>
\t\t\t<dt><label>";
        // line 42
        echo $this->env->getExtension('phpbb')->lang("VERSION");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><span id=\"meta_version\">";
        // line 43
        echo (isset($context["META_VERSION"]) ? $context["META_VERSION"] : null);
        echo "</span></dd>
\t\t</dl>
\t\t";
        // line 45
        if ((isset($context["META_HOMEPAGE"]) ? $context["META_HOMEPAGE"] : null)) {
            // line 46
            echo "\t\t<dl>
\t\t\t<dt><label>";
            // line 47
            echo $this->env->getExtension('phpbb')->lang("HOMEPAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><strong id=\"meta_homepage\"><a href=\"";
            // line 48
            echo (isset($context["META_HOMEPAGE"]) ? $context["META_HOMEPAGE"] : null);
            echo "\">";
            echo (isset($context["META_HOMEPAGE"]) ? $context["META_HOMEPAGE"] : null);
            echo "</a></strong></dd>
\t\t</dl>
\t\t";
        }
        // line 51
        echo "\t\t";
        if ((isset($context["META_TIME"]) ? $context["META_TIME"] : null)) {
            // line 52
            echo "\t\t<dl>
\t\t\t<dt><label>";
            // line 53
            echo $this->env->getExtension('phpbb')->lang("TIME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><span id=\"meta_time\">";
            // line 54
            echo (isset($context["META_TIME"]) ? $context["META_TIME"] : null);
            echo "</span></dd>
\t\t</dl>
\t\t";
        }
        // line 57
        echo "\t\t<dl>
\t\t\t<dt><label>";
        // line 58
        echo $this->env->getExtension('phpbb')->lang("LICENSE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><span id=\"meta_license\">";
        // line 59
        echo (isset($context["META_LICENSE"]) ? $context["META_LICENSE"] : null);
        echo "</span></dd>
\t\t</dl>
\t</fieldset>

\t";
        // line 63
        if (((isset($context["S_VERSIONCHECK"]) ? $context["S_VERSIONCHECK"] : null) &&  !(isset($context["S_UP_TO_DATE"]) ? $context["S_UP_TO_DATE"] : null))) {
            // line 64
            echo "\t<fieldset>
\t\t<legend>";
            // line 65
            echo $this->env->getExtension('phpbb')->lang("LATEST_VERSION");
            echo "</legend>
\t\t";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "updates_available", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["updates_available"]) {
                // line 67
                echo "\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 69
                echo $this->env->getExtension('phpbb')->lang("VERSION");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><strong>";
                // line 70
                echo $this->getAttribute($context["updates_available"], "current", array());
                echo "</strong></dd>
\t\t\t</dl>
\t\t\t";
                // line 72
                if ($this->getAttribute($context["updates_available"], "download", array())) {
                    // line 73
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                    // line 74
                    echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_LATEST");
                    echo "</label></dt>
\t\t\t\t<dd><strong><a href=\"";
                    // line 75
                    echo $this->getAttribute($context["updates_available"], "download", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("DOWNLOAD");
                    echo " ";
                    echo (isset($context["META_NAME"]) ? $context["META_NAME"] : null);
                    echo " ";
                    echo (isset($context["LATEST_VERSION"]) ? $context["LATEST_VERSION"] : null);
                    echo "</a></strong></dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 78
                echo "\t\t\t";
                if ($this->getAttribute($context["updates_available"], "announcement", array())) {
                    // line 79
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                    // line 80
                    echo $this->env->getExtension('phpbb')->lang("ANNOUNCEMENT_TOPIC");
                    echo "</label></dt>
\t\t\t\t<dd><strong><a href=\"";
                    // line 81
                    echo $this->getAttribute($context["updates_available"], "announcement", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("RELEASE_ANNOUNCEMENT");
                    echo "</a></strong></dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 84
                echo "\t\t</fieldset>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['updates_available'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "\t</fieldset>
\t";
        }
        // line 88
        echo "
\t";
        // line 89
        if (((isset($context["META_REQUIRE_PHPBB"]) ? $context["META_REQUIRE_PHPBB"] : null) || (isset($context["META_REQUIRE_PHP"]) ? $context["META_REQUIRE_PHP"] : null))) {
            // line 90
            echo "\t<fieldset>
\t\t<legend>";
            // line 91
            echo $this->env->getExtension('phpbb')->lang("REQUIREMENTS");
            echo "</legend>
\t\t";
            // line 92
            if ((isset($context["META_REQUIRE_PHPBB"]) ? $context["META_REQUIRE_PHPBB"] : null)) {
                // line 93
                echo "\t\t<dl";
                if ((isset($context["META_REQUIRE_PHPBB_FAIL"]) ? $context["META_REQUIRE_PHPBB_FAIL"] : null)) {
                    echo " class=\"requirements_not_met\"";
                }
                echo ">
\t\t\t<dt><label>";
                // line 94
                echo $this->env->getExtension('phpbb')->lang("PHPBB_VERSION");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><span id=\"require_phpbb\">";
                // line 95
                echo (isset($context["META_REQUIRE_PHPBB"]) ? $context["META_REQUIRE_PHPBB"] : null);
                echo "</span></dd>
\t\t</dl>
\t\t";
            }
            // line 98
            echo "\t\t";
            if ((isset($context["META_REQUIRE_PHP"]) ? $context["META_REQUIRE_PHP"] : null)) {
                // line 99
                echo "\t\t<dl";
                if ((isset($context["META_REQUIRE_PHP_FAIL"]) ? $context["META_REQUIRE_PHP_FAIL"] : null)) {
                    echo " class=\"requirements_not_met\"";
                }
                echo ">
\t\t\t<dt><label>";
                // line 100
                echo $this->env->getExtension('phpbb')->lang("PHP_VERSION");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><span id=\"require_php\">";
                // line 101
                echo (isset($context["META_REQUIRE_PHP"]) ? $context["META_REQUIRE_PHP"] : null);
                echo "</span></dd>
\t\t</dl>
\t\t";
            }
            // line 104
            echo "\t</fieldset>
\t";
        }
        // line 106
        echo "
\t<fieldset>
\t\t<legend>";
        // line 108
        echo $this->env->getExtension('phpbb')->lang("AUTHOR_INFORMATION");
        echo "</legend>
\t\t";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "meta_authors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["meta_authors"]) {
            // line 110
            echo "\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
            // line 112
            echo $this->env->getExtension('phpbb')->lang("AUTHOR_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><strong>";
            // line 113
            echo $this->getAttribute($context["meta_authors"], "AUTHOR_NAME", array());
            echo "</strong></dd>
\t\t\t</dl>
\t\t\t";
            // line 115
            if ($this->getAttribute($context["meta_authors"], "AUTHOR_EMAIL", array())) {
                // line 116
                echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 117
                echo $this->env->getExtension('phpbb')->lang("AUTHOR_EMAIL");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><strong><a href=\"mailto:";
                // line 118
                echo $this->getAttribute($context["meta_authors"], "AUTHOR_EMAIL", array());
                echo "\">";
                echo $this->getAttribute($context["meta_authors"], "AUTHOR_EMAIL", array());
                echo "</a></strong></dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 121
            echo "\t\t\t";
            if ($this->getAttribute($context["meta_authors"], "AUTHOR_HOMEPAGE", array())) {
                // line 122
                echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 123
                echo $this->env->getExtension('phpbb')->lang("AUTHOR_HOMEPAGE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><strong><a href=\"";
                // line 124
                echo $this->getAttribute($context["meta_authors"], "AUTHOR_HOMEPAGE", array());
                echo "\">";
                echo $this->getAttribute($context["meta_authors"], "AUTHOR_HOMEPAGE", array());
                echo "</a></strong></dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 127
            echo "\t\t\t";
            if ($this->getAttribute($context["meta_authors"], "AUTHOR_ROLE", array())) {
                // line 128
                echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 129
                echo $this->env->getExtension('phpbb')->lang("AUTHOR_ROLE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><strong>";
                // line 130
                echo $this->getAttribute($context["meta_authors"], "AUTHOR_ROLE", array());
                echo "</strong></dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 133
            echo "\t\t</fieldset>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta_authors'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "\t</fieldset>

\t";
        // line 137
        // line 138
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_ext_details.html", 138)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_ext_details.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 138,  437 => 137,  433 => 135,  426 => 133,  420 => 130,  415 => 129,  412 => 128,  409 => 127,  401 => 124,  396 => 123,  393 => 122,  390 => 121,  382 => 118,  377 => 117,  374 => 116,  372 => 115,  367 => 113,  362 => 112,  358 => 110,  354 => 109,  350 => 108,  346 => 106,  342 => 104,  336 => 101,  331 => 100,  324 => 99,  321 => 98,  315 => 95,  310 => 94,  303 => 93,  301 => 92,  297 => 91,  294 => 90,  292 => 89,  289 => 88,  285 => 86,  278 => 84,  270 => 81,  266 => 80,  263 => 79,  260 => 78,  248 => 75,  244 => 74,  241 => 73,  239 => 72,  234 => 70,  229 => 69,  225 => 67,  221 => 66,  217 => 65,  214 => 64,  212 => 63,  205 => 59,  200 => 58,  197 => 57,  191 => 54,  186 => 53,  183 => 52,  180 => 51,  172 => 48,  167 => 47,  164 => 46,  162 => 45,  157 => 43,  152 => 42,  149 => 41,  143 => 38,  138 => 37,  135 => 36,  133 => 35,  128 => 33,  123 => 32,  120 => 31,  114 => 28,  109 => 27,  106 => 26,  104 => 25,  100 => 24,  96 => 22,  93 => 21,  83 => 18,  74 => 17,  66 => 14,  62 => 13,  58 => 12,  55 => 11,  52 => 10,  50 => 9,  45 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* 	<a href="{U_BACK}" style="float: {S_CONTENT_FLOW_END};">&laquo; {L_BACK}</a>*/
/* */
/* 	<h1>{L_EXTENSIONS_ADMIN}</h1>*/
/* */
/* 	<!-- IF S_VERSIONCHECK -->*/
/* 		<!-- IF S_VERSIONCHECK_FAIL -->*/
/* 		<div class="errorbox notice">*/
/* 			<p>{L_VERSIONCHECK_FAIL}</p>*/
/* 			<p>{VERSIONCHECK_FAIL_REASON}</p>*/
/* 			<p><a href="{U_VERSIONCHECK_FORCE}">{L_VERSIONCHECK_FORCE_UPDATE}</a></p>*/
/* 		</div>*/
/* 		<!-- ELSE -->*/
/* 		<div class="<!-- IF S_UP_TO_DATE -->successbox<!-- ELSE -->errorbox<!-- ENDIF -->">*/
/* 			<p>{UP_TO_DATE_MSG} - <a href="{U_VERSIONCHECK_FORCE}">{L_VERSIONCHECK_FORCE_UPDATE}</a></p>*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<fieldset>*/
/* 		<legend>{L_EXT_DETAILS}</legend>*/
/* 		<!-- IF META_DISPLAY_NAME -->*/
/* 		<dl>*/
/* 			<dt><label>{L_DISPLAY_NAME}{L_COLON}</label></dt>*/
/* 			<dd><strong id="meta_display_name">{META_DISPLAY_NAME}</strong></dd>*/
/* 		</dl>*/
/* 		<!-- ENDIF -->*/
/* 		<dl>*/
/* 			<dt><label>{L_CLEAN_NAME}{L_COLON}</label></dt>*/
/* 			<dd><strong id="meta_name">{META_NAME}</strong></dd>*/
/* 		</dl>*/
/* 		<!-- IF META_DESCRIPTION -->*/
/* 		<dl>*/
/* 			<dt><label>{L_DESCRIPTION}{L_COLON}</label></dt>*/
/* 			<dd><span id="meta_description">{META_DESCRIPTION}</span></dd>*/
/* 		</dl>*/
/* 		<!-- ENDIF -->*/
/* 		<dl>*/
/* 			<dt><label>{L_VERSION}{L_COLON}</label></dt>*/
/* 			<dd><span id="meta_version">{META_VERSION}</span></dd>*/
/* 		</dl>*/
/* 		<!-- IF META_HOMEPAGE -->*/
/* 		<dl>*/
/* 			<dt><label>{L_HOMEPAGE}{L_COLON}</label></dt>*/
/* 			<dd><strong id="meta_homepage"><a href="{META_HOMEPAGE}">{META_HOMEPAGE}</a></strong></dd>*/
/* 		</dl>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF META_TIME -->*/
/* 		<dl>*/
/* 			<dt><label>{L_TIME}{L_COLON}</label></dt>*/
/* 			<dd><span id="meta_time">{META_TIME}</span></dd>*/
/* 		</dl>*/
/* 		<!-- ENDIF -->*/
/* 		<dl>*/
/* 			<dt><label>{L_LICENSE}{L_COLON}</label></dt>*/
/* 			<dd><span id="meta_license">{META_LICENSE}</span></dd>*/
/* 		</dl>*/
/* 	</fieldset>*/
/* */
/* 	<!-- IF S_VERSIONCHECK && not S_UP_TO_DATE -->*/
/* 	<fieldset>*/
/* 		<legend>{L_LATEST_VERSION}</legend>*/
/* 		<!-- BEGIN updates_available -->*/
/* 		<fieldset>*/
/* 			<dl>*/
/* 				<dt><label>{L_VERSION}{L_COLON}</label></dt>*/
/* 				<dd><strong>{updates_available.current}</strong></dd>*/
/* 			</dl>*/
/* 			<!-- IF updates_available.download-->*/
/* 			<dl>*/
/* 				<dt><label>{L_DOWNLOAD_LATEST}</label></dt>*/
/* 				<dd><strong><a href="{updates_available.download}">{L_DOWNLOAD} {META_NAME} {LATEST_VERSION}</a></strong></dd>*/
/* 			</dl>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF updates_available.announcement -->*/
/* 			<dl>*/
/* 				<dt><label>{L_ANNOUNCEMENT_TOPIC}</label></dt>*/
/* 				<dd><strong><a href="{updates_available.announcement}">{L_RELEASE_ANNOUNCEMENT}</a></strong></dd>*/
/* 			</dl>*/
/* 			<!-- ENDIF -->*/
/* 		</fieldset>*/
/* 		<!-- END updates_available -->*/
/* 	</fieldset>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF META_REQUIRE_PHPBB || META_REQUIRE_PHP -->*/
/* 	<fieldset>*/
/* 		<legend>{L_REQUIREMENTS}</legend>*/
/* 		<!-- IF META_REQUIRE_PHPBB -->*/
/* 		<dl<!-- IF META_REQUIRE_PHPBB_FAIL --> class="requirements_not_met"<!-- ENDIF -->>*/
/* 			<dt><label>{L_PHPBB_VERSION}{L_COLON}</label></dt>*/
/* 			<dd><span id="require_phpbb">{META_REQUIRE_PHPBB}</span></dd>*/
/* 		</dl>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF META_REQUIRE_PHP -->*/
/* 		<dl<!-- IF META_REQUIRE_PHP_FAIL --> class="requirements_not_met"<!-- ENDIF -->>*/
/* 			<dt><label>{L_PHP_VERSION}{L_COLON}</label></dt>*/
/* 			<dd><span id="require_php">{META_REQUIRE_PHP}</span></dd>*/
/* 		</dl>*/
/* 		<!-- ENDIF -->*/
/* 	</fieldset>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<fieldset>*/
/* 		<legend>{L_AUTHOR_INFORMATION}</legend>*/
/* 		<!-- BEGIN meta_authors -->*/
/* 		<fieldset>*/
/* 			<dl>*/
/* 				<dt><label>{L_AUTHOR_NAME}{L_COLON}</label></dt>*/
/* 				<dd><strong>{meta_authors.AUTHOR_NAME}</strong></dd>*/
/* 			</dl>*/
/* 			<!-- IF meta_authors.AUTHOR_EMAIL -->*/
/* 			<dl>*/
/* 				<dt><label>{L_AUTHOR_EMAIL}{L_COLON}</label></dt>*/
/* 				<dd><strong><a href="mailto:{meta_authors.AUTHOR_EMAIL}">{meta_authors.AUTHOR_EMAIL}</a></strong></dd>*/
/* 			</dl>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF meta_authors.AUTHOR_HOMEPAGE -->*/
/* 			<dl>*/
/* 				<dt><label>{L_AUTHOR_HOMEPAGE}{L_COLON}</label></dt>*/
/* 				<dd><strong><a href="{meta_authors.AUTHOR_HOMEPAGE}">{meta_authors.AUTHOR_HOMEPAGE}</a></strong></dd>*/
/* 			</dl>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF meta_authors.AUTHOR_ROLE -->*/
/* 			<dl>*/
/* 				<dt><label>{L_AUTHOR_ROLE}{L_COLON}</label></dt>*/
/* 				<dd><strong>{meta_authors.AUTHOR_ROLE}</strong></dd>*/
/* 			</dl>*/
/* 			<!-- ENDIF -->*/
/* 		</fieldset>*/
/* 		<!-- END meta_authors -->*/
/* 	</fieldset>*/
/* */
/* 	<!-- EVENT acp_ext_details_end -->*/
/* <!-- INCLUDE overall_footer.html -->*/
/* */
