<?php

/* acp_bots.html */
class __TwigTemplate_c89ca124cab99f7de2ca2d956a84dfe4f58a213bfbb441b738c27dbe16c5cf50 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_bots.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if ((isset($context["S_EDIT_BOT"]) ? $context["S_EDIT_BOT"] : null)) {
            // line 6
            echo "
\t<a href=\"";
            // line 7
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</h1>

\t<p>";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("BOT_EDIT_EXPLAIN");
            echo "</p>

\t";
            // line 13
            if ((isset($context["S_ERROR"]) ? $context["S_ERROR"] : null)) {
                // line 14
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 15
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 16
                echo (isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 19
            echo "
\t<form id=\"acp_bots\" method=\"post\" action=\"";
            // line 20
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 23
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"bot_name\">";
            // line 25
            echo $this->env->getExtension('phpbb')->lang("BOT_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("BOT_NAME_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input name=\"bot_name\" type=\"text\" id=\"bot_name\" value=\"";
            // line 26
            echo (isset($context["BOT_NAME"]) ? $context["BOT_NAME"] : null);
            echo "\" maxlength=\"255\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"bot_style\">";
            // line 29
            echo $this->env->getExtension('phpbb')->lang("BOT_STYLE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("BOT_STYLE_EXPLAIN");
            echo "</span></dt>
\t\t<dd><select id=\"bot_style\" name=\"bot_style\">";
            // line 30
            echo (isset($context["S_STYLE_OPTIONS"]) ? $context["S_STYLE_OPTIONS"] : null);
            echo "</select></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"bot_lang\">";
            // line 33
            echo $this->env->getExtension('phpbb')->lang("BOT_LANG");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("BOT_LANG_EXPLAIN");
            echo "</span></dt>
\t\t<dd><select id=\"bot_lang\" name=\"bot_lang\">";
            // line 34
            echo (isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null);
            echo "</select></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"bot_active\">";
            // line 37
            echo $this->env->getExtension('phpbb')->lang("BOT_ACTIVE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select id=\"bot_active\" name=\"bot_active\">";
            // line 38
            echo (isset($context["S_ACTIVE_OPTIONS"]) ? $context["S_ACTIVE_OPTIONS"] : null);
            echo "</select></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"bot_agent\">";
            // line 41
            echo $this->env->getExtension('phpbb')->lang("BOT_AGENT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("BOT_AGENT_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input name=\"bot_agent\" type=\"text\" id=\"bot_agent\" value=\"";
            // line 42
            echo (isset($context["BOT_AGENT"]) ? $context["BOT_AGENT"] : null);
            echo "\" maxlength=\"255\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"bot_ip\">";
            // line 45
            echo $this->env->getExtension('phpbb')->lang("BOT_IP");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("BOT_IP_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input name=\"bot_ip\" type=\"text\" id=\"bot_ip\" value=\"";
            // line 46
            echo (isset($context["BOT_IP"]) ? $context["BOT_IP"] : null);
            echo "\" maxlength=\"255\" /></dd>
\t</dl>

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 50
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 51
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t\t";
            // line 52
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</p>
\t</fieldset>
\t</form>

";
        } else {
            // line 58
            echo "
\t<h1>";
            // line 59
            echo $this->env->getExtension('phpbb')->lang("BOTS");
            echo "</h1>

\t<p>";
            // line 61
            echo $this->env->getExtension('phpbb')->lang("BOTS_EXPLAIN");
            echo "</p>

\t<form id=\"acp_bots\" method=\"post\" action=\"";
            // line 63
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 68
            echo $this->env->getExtension('phpbb')->lang("BOT_NAME");
            echo "</th>
\t\t<th>";
            // line 69
            echo $this->env->getExtension('phpbb')->lang("BOT_LAST_VISIT");
            echo "</th>
\t\t<th colspan=\"3\">";
            // line 70
            echo $this->env->getExtension('phpbb')->lang("OPTIONS");
            echo "</th>
\t\t<th>";
            // line 71
            echo $this->env->getExtension('phpbb')->lang("MARK");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "bots", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["bots"]) {
                // line 76
                echo "\t\t<tr>
\t\t\t<td style=\"width: 50%;\">";
                // line 77
                echo $this->getAttribute($context["bots"], "BOT_NAME", array());
                echo "</td>
\t\t\t<td style=\"width: 15%; white-space: nowrap;\" align=\"center\">&nbsp;";
                // line 78
                echo $this->getAttribute($context["bots"], "LAST_VISIT", array());
                echo "&nbsp;</td>
\t\t\t<td style=\"text-align: center;\">&nbsp;<a href=\"";
                // line 79
                echo $this->getAttribute($context["bots"], "U_ACTIVATE_DEACTIVATE", array());
                echo "\" data-ajax=\"activate_deactivate\">";
                echo $this->getAttribute($context["bots"], "L_ACTIVATE_DEACTIVATE", array());
                echo "</a>&nbsp;</td>
\t\t\t<td style=\"text-align: center;\">&nbsp;<a href=\"";
                // line 80
                echo $this->getAttribute($context["bots"], "U_EDIT", array());
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("EDIT");
                echo "</a>&nbsp;</td>
\t\t\t<td style=\"text-align: center;\">&nbsp;<a href=\"";
                // line 81
                echo $this->getAttribute($context["bots"], "U_DELETE", array());
                echo "\" data-ajax=\"row_delete\">";
                echo $this->env->getExtension('phpbb')->lang("DELETE");
                echo "</a>&nbsp;</td>
\t\t\t<td style=\"text-align: center;\"><input type=\"checkbox\" class=\"radio\" name=\"mark[]\" value=\"";
                // line 82
                echo $this->getAttribute($context["bots"], "BOT_ID", array());
                echo "\" /></td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bots'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "\t</tbody>
\t</table>

\t<fieldset class=\"quick\" style=\"float: ";
            // line 88
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo ";\">
\t\t<input class=\"button2\" name=\"add\" type=\"submit\" value=\"";
            // line 89
            echo $this->env->getExtension('phpbb')->lang("BOT_ADD");
            echo "\" />
\t</fieldset>

\t<fieldset class=\"quick\" style=\"float: ";
            // line 92
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">
\t\t<select name=\"action\">";
            // line 93
            echo (isset($context["S_BOT_OPTIONS"]) ? $context["S_BOT_OPTIONS"] : null);
            echo "</select>
\t\t<input class=\"button2\" name=\"submit\" type=\"submit\" value=\"";
            // line 94
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t\t<p class=\"small\"><a href=\"#\" onclick=\"marklist('acp_bots', 'mark', true);\">";
            // line 95
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('acp_bots', 'mark', false);\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></p>
\t\t";
            // line 96
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        }
        // line 101
        echo "
";
        // line 102
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_bots.html", 102)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_bots.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 102,  306 => 101,  298 => 96,  292 => 95,  288 => 94,  284 => 93,  280 => 92,  274 => 89,  270 => 88,  265 => 85,  256 => 82,  250 => 81,  244 => 80,  238 => 79,  234 => 78,  230 => 77,  227 => 76,  223 => 75,  216 => 71,  212 => 70,  208 => 69,  204 => 68,  196 => 63,  191 => 61,  186 => 59,  183 => 58,  174 => 52,  170 => 51,  166 => 50,  159 => 46,  152 => 45,  146 => 42,  139 => 41,  133 => 38,  128 => 37,  122 => 34,  115 => 33,  109 => 30,  102 => 29,  96 => 26,  89 => 25,  84 => 23,  78 => 20,  75 => 19,  69 => 16,  65 => 15,  62 => 14,  60 => 13,  55 => 11,  50 => 9,  41 => 7,  38 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* <!-- IF S_EDIT_BOT -->*/
/* */
/* 	<a href="{U_BACK}" style="float: {S_CONTENT_FLOW_END};">&laquo; {L_BACK}</a>*/
/* */
/* 	<h1>{L_TITLE}</h1>*/
/* */
/* 	<p>{L_BOT_EDIT_EXPLAIN}</p>*/
/* */
/* 	<!-- IF S_ERROR -->*/
/* 		<div class="errorbox">*/
/* 			<h3>{L_WARNING}</h3>*/
/* 			<p>{ERROR_MSG}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<form id="acp_bots" method="post" action="{U_ACTION}">*/
/* */
/* 	<fieldset>*/
/* 		<legend>{L_TITLE}</legend>*/
/* 	<dl>*/
/* 		<dt><label for="bot_name">{L_BOT_NAME}{L_COLON}</label><br /><span>{L_BOT_NAME_EXPLAIN}</span></dt>*/
/* 		<dd><input name="bot_name" type="text" id="bot_name" value="{BOT_NAME}" maxlength="255" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="bot_style">{L_BOT_STYLE}{L_COLON}</label><br /><span>{L_BOT_STYLE_EXPLAIN}</span></dt>*/
/* 		<dd><select id="bot_style" name="bot_style">{S_STYLE_OPTIONS}</select></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="bot_lang">{L_BOT_LANG}{L_COLON}</label><br /><span>{L_BOT_LANG_EXPLAIN}</span></dt>*/
/* 		<dd><select id="bot_lang" name="bot_lang">{S_LANG_OPTIONS}</select></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="bot_active">{L_BOT_ACTIVE}{L_COLON}</label></dt>*/
/* 		<dd><select id="bot_active" name="bot_active">{S_ACTIVE_OPTIONS}</select></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="bot_agent">{L_BOT_AGENT}{L_COLON}</label><br /><span>{L_BOT_AGENT_EXPLAIN}</span></dt>*/
/* 		<dd><input name="bot_agent" type="text" id="bot_agent" value="{BOT_AGENT}" maxlength="255" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="bot_ip">{L_BOT_IP}{L_COLON}</label><br /><span>{L_BOT_IP_EXPLAIN}</span></dt>*/
/* 		<dd><input name="bot_ip" type="text" id="bot_ip" value="{BOT_IP}" maxlength="255" /></dd>*/
/* 	</dl>*/
/* */
/* 	<p class="submit-buttons">*/
/* 		<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />&nbsp;*/
/* 		<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* 		{S_FORM_TOKEN}*/
/* 	</p>*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
/* <!-- ELSE -->*/
/* */
/* 	<h1>{L_BOTS}</h1>*/
/* */
/* 	<p>{L_BOTS_EXPLAIN}</p>*/
/* */
/* 	<form id="acp_bots" method="post" action="{U_ACTION}">*/
/* */
/* 	<table class="table1 zebra-table">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th>{L_BOT_NAME}</th>*/
/* 		<th>{L_BOT_LAST_VISIT}</th>*/
/* 		<th colspan="3">{L_OPTIONS}</th>*/
/* 		<th>{L_MARK}</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<!-- BEGIN bots -->*/
/* 		<tr>*/
/* 			<td style="width: 50%;">{bots.BOT_NAME}</td>*/
/* 			<td style="width: 15%; white-space: nowrap;" align="center">&nbsp;{bots.LAST_VISIT}&nbsp;</td>*/
/* 			<td style="text-align: center;">&nbsp;<a href="{bots.U_ACTIVATE_DEACTIVATE}" data-ajax="activate_deactivate">{bots.L_ACTIVATE_DEACTIVATE}</a>&nbsp;</td>*/
/* 			<td style="text-align: center;">&nbsp;<a href="{bots.U_EDIT}">{L_EDIT}</a>&nbsp;</td>*/
/* 			<td style="text-align: center;">&nbsp;<a href="{bots.U_DELETE}" data-ajax="row_delete">{L_DELETE}</a>&nbsp;</td>*/
/* 			<td style="text-align: center;"><input type="checkbox" class="radio" name="mark[]" value="{bots.BOT_ID}" /></td>*/
/* 		</tr>*/
/* 	<!-- END bots -->*/
/* 	</tbody>*/
/* 	</table>*/
/* */
/* 	<fieldset class="quick" style="float: {S_CONTENT_FLOW_BEGIN};">*/
/* 		<input class="button2" name="add" type="submit" value="{L_BOT_ADD}" />*/
/* 	</fieldset>*/
/* */
/* 	<fieldset class="quick" style="float: {S_CONTENT_FLOW_END};">*/
/* 		<select name="action">{S_BOT_OPTIONS}</select>*/
/* 		<input class="button2" name="submit" type="submit" value="{L_SUBMIT}" />*/
/* 		<p class="small"><a href="#" onclick="marklist('acp_bots', 'mark', true);">{L_MARK_ALL}</a> &bull; <a href="#" onclick="marklist('acp_bots', 'mark', false);">{L_UNMARK_ALL}</a></p>*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
