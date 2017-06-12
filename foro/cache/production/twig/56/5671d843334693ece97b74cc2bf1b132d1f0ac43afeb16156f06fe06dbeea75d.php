<?php

/* ucp_prefs_personal.html */
class __TwigTemplate_8fddb5a45f798066122156e45caa19a81f5ee4aa546725baf348b9acddf4d629 extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_prefs_personal.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">

<h2>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t<fieldset>
\t";
        // line 11
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p class=\"error\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 12
        echo "\t";
        // line 13
        echo "\t<dl>
\t\t<dt><label for=\"viewemail0\">";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("SHOW_EMAIL");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"viewemail1\"><input type=\"radio\" name=\"viewemail\" id=\"viewemail1\" value=\"1\"";
        // line 16
        if ((isset($context["S_VIEW_EMAIL"]) ? $context["S_VIEW_EMAIL"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t\t<label for=\"viewemail0\"><input type=\"radio\" name=\"viewemail\" id=\"viewemail0\" value=\"0\"";
        // line 17
        if ( !(isset($context["S_VIEW_EMAIL"]) ? $context["S_VIEW_EMAIL"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"massemail1\">";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("ADMIN_EMAIL");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"massemail1\"><input type=\"radio\" name=\"massemail\" id=\"massemail1\" value=\"1\"";
        // line 23
        if ((isset($context["S_MASS_EMAIL"]) ? $context["S_MASS_EMAIL"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t\t<label for=\"massemail0\"><input type=\"radio\" name=\"massemail\" id=\"massemail0\" value=\"0\"";
        // line 24
        if ( !(isset($context["S_MASS_EMAIL"]) ? $context["S_MASS_EMAIL"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"allowpm1\">";
        // line 28
        echo $this->env->getExtension('phpbb')->lang("ALLOW_PM");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("ALLOW_PM_EXPLAIN");
        echo "</span></dt>
\t\t<dd>
\t\t\t<label for=\"allowpm1\"><input type=\"radio\" name=\"allowpm\" id=\"allowpm1\" value=\"1\"";
        // line 30
        if ((isset($context["S_ALLOW_PM"]) ? $context["S_ALLOW_PM"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t\t<label for=\"allowpm0\"><input type=\"radio\" name=\"allowpm\" id=\"allowpm0\" value=\"0\"";
        // line 31
        if ( !(isset($context["S_ALLOW_PM"]) ? $context["S_ALLOW_PM"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t";
        // line 34
        if ((isset($context["S_CAN_HIDE_ONLINE"]) ? $context["S_CAN_HIDE_ONLINE"] : null)) {
            // line 35
            echo "\t\t<dl>
\t\t\t<dt><label for=\"hideonline0\">";
            // line 36
            echo $this->env->getExtension('phpbb')->lang("HIDE_ONLINE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("HIDE_ONLINE_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"hideonline1\"><input type=\"radio\" name=\"hideonline\" id=\"hideonline1\" value=\"1\"";
            // line 38
            if ((isset($context["S_HIDE_ONLINE"]) ? $context["S_HIDE_ONLINE"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label for=\"hideonline0\"><input type=\"radio\" name=\"hideonline\" id=\"hideonline0\" value=\"0\"";
            // line 39
            if ( !(isset($context["S_HIDE_ONLINE"]) ? $context["S_HIDE_ONLINE"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label>
\t\t\t</dd>
\t\t</dl>
\t";
        }
        // line 43
        echo "\t";
        if ((isset($context["S_SELECT_NOTIFY"]) ? $context["S_SELECT_NOTIFY"] : null)) {
            // line 44
            echo "\t\t<dl>
\t\t\t<dt><label for=\"notifymethod0\">";
            // line 45
            echo $this->env->getExtension('phpbb')->lang("NOTIFY_METHOD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"notifymethod0\"><input type=\"radio\" name=\"notifymethod\" id=\"notifymethod0\" value=\"0\"";
            // line 47
            if ((isset($context["S_NOTIFY_EMAIL"]) ? $context["S_NOTIFY_EMAIL"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NOTIFY_METHOD_EMAIL");
            echo "</label>
\t\t\t\t<label for=\"notifymethod1\"><input type=\"radio\" name=\"notifymethod\" id=\"notifymethod1\" value=\"1\"";
            // line 48
            if ((isset($context["S_NOTIFY_IM"]) ? $context["S_NOTIFY_IM"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NOTIFY_METHOD_IM");
            echo "</label>
\t\t\t\t<label for=\"notifymethod2\"><input type=\"radio\" name=\"notifymethod\" id=\"notifymethod2\" value=\"2\"";
            // line 49
            if ((isset($context["S_NOTIFY_BOTH"]) ? $context["S_NOTIFY_BOTH"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NOTIFY_METHOD_BOTH");
            echo "</label>
\t\t\t</dd>
\t\t</dl>
\t";
        }
        // line 53
        echo "\t";
        if ((isset($context["S_MORE_LANGUAGES"]) ? $context["S_MORE_LANGUAGES"] : null)) {
            // line 54
            echo "\t\t<dl>
\t\t\t<dt><label for=\"lang\">";
            // line 55
            echo $this->env->getExtension('phpbb')->lang("BOARD_LANGUAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><select name=\"lang\" id=\"lang\">";
            // line 56
            echo (isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null);
            echo "</select></dd>
\t\t</dl>
\t";
        }
        // line 59
        echo "\t";
        if (((isset($context["S_STYLE_OPTIONS"]) ? $context["S_STYLE_OPTIONS"] : null) && (isset($context["S_MORE_STYLES"]) ? $context["S_MORE_STYLES"] : null))) {
            // line 60
            echo "\t\t<dl>
\t\t\t<dt><label for=\"user_style\">";
            // line 61
            echo $this->env->getExtension('phpbb')->lang("BOARD_STYLE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><select name=\"user_style\" id=\"user_style\">";
            // line 62
            echo (isset($context["S_STYLE_OPTIONS"]) ? $context["S_STYLE_OPTIONS"] : null);
            echo "</select></dd>
\t\t</dl>
\t";
        }
        // line 65
        echo "\t";
        $location = "timezone_option.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("timezone_option.html", "ucp_prefs_personal.html", 65)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 66
        echo "\t<dl>
\t\t<dt><label for=\"dateformat\">";
        // line 67
        echo $this->env->getExtension('phpbb')->lang("BOARD_DATE_FORMAT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("BOARD_DATE_FORMAT_EXPLAIN");
        echo "</span></dt>
\t\t<dd>
\t\t\t<select name=\"dateoptions\" id=\"dateoptions\" onchange=\"if(this.value=='custom'){phpbb.toggleDisplay('custom_date',1);}else{phpbb.toggleDisplay('custom_date',-1);} if (this.value == 'custom') { document.getElementById('dateformat').value = default_dateformat; } else { document.getElementById('dateformat').value = this.value; }\">
\t\t\t\t";
        // line 70
        echo (isset($context["S_DATEFORMAT_OPTIONS"]) ? $context["S_DATEFORMAT_OPTIONS"] : null);
        echo "
\t\t\t</select>
\t\t</dd>
\t\t<dd id=\"custom_date\" style=\"display:none;\"><input type=\"text\" name=\"dateformat\" id=\"dateformat\" value=\"";
        // line 73
        echo (isset($context["DATE_FORMAT"]) ? $context["DATE_FORMAT"] : null);
        echo "\" maxlength=\"64\" class=\"inputbox narrow\" style=\"margin-top: 3px;\" /></dd>
\t</dl>
\t";
        // line 75
        // line 76
        echo "\t</fieldset>

\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t";
        // line 82
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "<input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 83
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 84
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

<script type=\"text/javascript\">
// <![CDATA[
\tvar date_format = '";
        // line 90
        echo (isset($context["A_DATE_FORMAT"]) ? $context["A_DATE_FORMAT"] : null);
        echo "';
\tvar default_dateformat = '";
        // line 91
        echo (isset($context["A_DEFAULT_DATEFORMAT"]) ? $context["A_DEFAULT_DATEFORMAT"] : null);
        echo "';

\tfunction customDates()
\t{
\t\tvar e = document.getElementById('dateoptions');

\t\te.selectedIndex = e.length - 1;

\t\t// Loop and match date_format in menu
\t\tfor (var i = 0; i < e.length; i++)
\t\t{
\t\t\tif (e.options[i].value == date_format)
\t\t\t{
\t\t\t\te.selectedIndex = i;
\t\t\t\tbreak;
\t\t\t}
\t\t}

\t\t// Show/hide custom field
\t\tif (e.selectedIndex == e.length - 1)
\t\t{
\t\t\tphpbb.toggleDisplay('custom_date',1);
\t\t}
\t\telse
\t\t{
\t\t\tphpbb.toggleDisplay('custom_date',-1);
\t\t}
\t}

\twindow.onload = customDates;
// ]]>
</script>

";
        // line 124
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_prefs_personal.html", 124)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_prefs_personal.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 124,  310 => 91,  306 => 90,  297 => 84,  293 => 83,  287 => 82,  279 => 76,  278 => 75,  273 => 73,  267 => 70,  258 => 67,  255 => 66,  242 => 65,  236 => 62,  231 => 61,  228 => 60,  225 => 59,  219 => 56,  214 => 55,  211 => 54,  208 => 53,  197 => 49,  189 => 48,  181 => 47,  175 => 45,  172 => 44,  169 => 43,  158 => 39,  150 => 38,  142 => 36,  139 => 35,  137 => 34,  127 => 31,  119 => 30,  111 => 28,  100 => 24,  92 => 23,  86 => 21,  75 => 17,  67 => 16,  61 => 14,  58 => 13,  56 => 12,  50 => 11,  41 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* */
/* <form id="ucp" method="post" action="{S_UCP_ACTION}"{S_FORM_ENCTYPE}>*/
/* */
/* <h2>{L_TITLE}</h2>*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<fieldset>*/
/* 	<!-- IF ERROR --><p class="error">{ERROR}</p><!-- ENDIF -->*/
/* 	<!-- EVENT ucp_prefs_personal_prepend -->*/
/* 	<dl>*/
/* 		<dt><label for="viewemail0">{L_SHOW_EMAIL}{L_COLON}</label></dt>*/
/* 		<dd>*/
/* 			<label for="viewemail1"><input type="radio" name="viewemail" id="viewemail1" value="1"<!-- IF S_VIEW_EMAIL --> checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 			<label for="viewemail0"><input type="radio" name="viewemail" id="viewemail0" value="0"<!-- IF not S_VIEW_EMAIL --> checked="checked"<!-- ENDIF --> /> {L_NO}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="massemail1">{L_ADMIN_EMAIL}{L_COLON}</label></dt>*/
/* 		<dd>*/
/* 			<label for="massemail1"><input type="radio" name="massemail" id="massemail1" value="1"<!-- IF S_MASS_EMAIL --> checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 			<label for="massemail0"><input type="radio" name="massemail" id="massemail0" value="0"<!-- IF not S_MASS_EMAIL --> checked="checked"<!-- ENDIF --> /> {L_NO}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="allowpm1">{L_ALLOW_PM}{L_COLON}</label><br /><span>{L_ALLOW_PM_EXPLAIN}</span></dt>*/
/* 		<dd>*/
/* 			<label for="allowpm1"><input type="radio" name="allowpm" id="allowpm1" value="1"<!-- IF S_ALLOW_PM --> checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 			<label for="allowpm0"><input type="radio" name="allowpm" id="allowpm0" value="0"<!-- IF not S_ALLOW_PM --> checked="checked"<!-- ENDIF --> /> {L_NO}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<!-- IF S_CAN_HIDE_ONLINE -->*/
/* 		<dl>*/
/* 			<dt><label for="hideonline0">{L_HIDE_ONLINE}{L_COLON}</label><br /><span>{L_HIDE_ONLINE_EXPLAIN}</span></dt>*/
/* 			<dd>*/
/* 				<label for="hideonline1"><input type="radio" name="hideonline" id="hideonline1" value="1"<!-- IF S_HIDE_ONLINE --> checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label for="hideonline0"><input type="radio" name="hideonline" id="hideonline0" value="0"<!-- IF not S_HIDE_ONLINE --> checked="checked"<!-- ENDIF --> /> {L_NO}</label>*/
/* 			</dd>*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_SELECT_NOTIFY -->*/
/* 		<dl>*/
/* 			<dt><label for="notifymethod0">{L_NOTIFY_METHOD}{L_COLON}</label></dt>*/
/* 			<dd>*/
/* 				<label for="notifymethod0"><input type="radio" name="notifymethod" id="notifymethod0" value="0"<!-- IF S_NOTIFY_EMAIL --> checked="checked"<!-- ENDIF --> /> {L_NOTIFY_METHOD_EMAIL}</label>*/
/* 				<label for="notifymethod1"><input type="radio" name="notifymethod" id="notifymethod1" value="1"<!-- IF S_NOTIFY_IM --> checked="checked"<!-- ENDIF --> /> {L_NOTIFY_METHOD_IM}</label>*/
/* 				<label for="notifymethod2"><input type="radio" name="notifymethod" id="notifymethod2" value="2"<!-- IF S_NOTIFY_BOTH --> checked="checked"<!-- ENDIF --> /> {L_NOTIFY_METHOD_BOTH}</label>*/
/* 			</dd>*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_MORE_LANGUAGES -->*/
/* 		<dl>*/
/* 			<dt><label for="lang">{L_BOARD_LANGUAGE}{L_COLON}</label></dt>*/
/* 			<dd><select name="lang" id="lang">{S_LANG_OPTIONS}</select></dd>*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_STYLE_OPTIONS and S_MORE_STYLES -->*/
/* 		<dl>*/
/* 			<dt><label for="user_style">{L_BOARD_STYLE}{L_COLON}</label></dt>*/
/* 			<dd><select name="user_style" id="user_style">{S_STYLE_OPTIONS}</select></dd>*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- INCLUDE timezone_option.html -->*/
/* 	<dl>*/
/* 		<dt><label for="dateformat">{L_BOARD_DATE_FORMAT}{L_COLON}</label><br /><span>{L_BOARD_DATE_FORMAT_EXPLAIN}</span></dt>*/
/* 		<dd>*/
/* 			<select name="dateoptions" id="dateoptions" onchange="if(this.value=='custom'){phpbb.toggleDisplay('custom_date',1);}else{phpbb.toggleDisplay('custom_date',-1);} if (this.value == 'custom') { document.getElementById('dateformat').value = default_dateformat; } else { document.getElementById('dateformat').value = this.value; }">*/
/* 				{S_DATEFORMAT_OPTIONS}*/
/* 			</select>*/
/* 		</dd>*/
/* 		<dd id="custom_date" style="display:none;"><input type="text" name="dateformat" id="dateformat" value="{DATE_FORMAT}" maxlength="64" class="inputbox narrow" style="margin-top: 3px;" /></dd>*/
/* 	</dl>*/
/* 	<!-- EVENT ucp_prefs_personal_append -->*/
/* 	</fieldset>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <fieldset class="submit-buttons">*/
/* 	{S_HIDDEN_FIELDS}<input type="reset" value="{L_RESET}" name="reset" class="button2" />&nbsp;*/
/* 	<input type="submit" name="submit" value="{L_SUBMIT}" class="button1" />*/
/* 	{S_FORM_TOKEN}*/
/* </fieldset>*/
/* </form>*/
/* */
/* <script type="text/javascript">*/
/* // <![CDATA[*/
/* 	var date_format = '{A_DATE_FORMAT}';*/
/* 	var default_dateformat = '{A_DEFAULT_DATEFORMAT}';*/
/* */
/* 	function customDates()*/
/* 	{*/
/* 		var e = document.getElementById('dateoptions');*/
/* */
/* 		e.selectedIndex = e.length - 1;*/
/* */
/* 		// Loop and match date_format in menu*/
/* 		for (var i = 0; i < e.length; i++)*/
/* 		{*/
/* 			if (e.options[i].value == date_format)*/
/* 			{*/
/* 				e.selectedIndex = i;*/
/* 				break;*/
/* 			}*/
/* 		}*/
/* */
/* 		// Show/hide custom field*/
/* 		if (e.selectedIndex == e.length - 1)*/
/* 		{*/
/* 			phpbb.toggleDisplay('custom_date',1);*/
/* 		}*/
/* 		else*/
/* 		{*/
/* 			phpbb.toggleDisplay('custom_date',-1);*/
/* 		}*/
/* 	}*/
/* */
/* 	window.onload = customDates;*/
/* // ]]>*/
/* </script>*/
/* */
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
