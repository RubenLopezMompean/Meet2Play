<?php

/* acp_email.html */
class __TwigTemplate_46c92b064ee9cf05727dea4e45126a2d6f83f998e433432d8e1860ed08cadb63 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_email.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("ACP_MASS_EMAIL");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("ACP_MASS_EMAIL_EXPLAIN");
        echo "</p>

";
        // line 9
        if ((isset($context["S_WARNING"]) ? $context["S_WARNING"] : null)) {
            // line 10
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 12
            echo (isset($context["WARNING_MSG"]) ? $context["WARNING_MSG"] : null);
            echo "</p>
\t</div>
";
        }
        // line 15
        echo "
<form id=\"acp_email\" method=\"post\" action=\"";
        // line 16
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">

<fieldset>
\t<legend>";
        // line 19
        echo $this->env->getExtension('phpbb')->lang("COMPOSE");
        echo "</legend>
<dl>
\t<dt><label for=\"group\">";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("SEND_TO_GROUP");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t";
        // line 22
        // line 23
        echo "\t<dd><select id=\"group\" name=\"g\">";
        echo (isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null);
        echo "</select></dd>
\t";
        // line 24
        // line 25
        echo "</dl>
<dl>
\t<dt><label for=\"usernames\">";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("SEND_TO_USERS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("SEND_TO_USERS_EXPLAIN");
        echo "</span></dt>
\t<dd><textarea name=\"usernames\" id=\"usernames\" rows=\"5\" cols=\"40\">";
        // line 28
        echo (isset($context["USERNAMES"]) ? $context["USERNAMES"] : null);
        echo "</textarea></dd>
\t<dd>";
        // line 29
        echo "[ <a href=\"";
        echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
        echo "\" onclick=\"find_username(this.href); return false;\">";
        echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
        echo "</a> ]";
        echo "</dd>
</dl>
<dl>
\t<dt><label for=\"subject\">";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("SUBJECT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><input name=\"subject\" type=\"text\" id=\"subject\" value=\"";
        // line 33
        echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
        echo "\" /></dd>
</dl>
<dl>
\t<dt><label for=\"message\">";
        // line 36
        echo $this->env->getExtension('phpbb')->lang("MASS_MESSAGE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("MASS_MESSAGE_EXPLAIN");
        echo "</span></dt>
\t<dd><textarea id=\"message\" name=\"message\" rows=\"10\" cols=\"60\">";
        // line 37
        echo (isset($context["MESSAGE"]) ? $context["MESSAGE"] : null);
        echo "</textarea></dd>
</dl>
<dl>
\t<dt><label for=\"priority\">";
        // line 40
        echo $this->env->getExtension('phpbb')->lang("MAIL_PRIORITY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><select id=\"priority\" name=\"mail_priority_flag\">";
        // line 41
        echo (isset($context["S_PRIORITY_OPTIONS"]) ? $context["S_PRIORITY_OPTIONS"] : null);
        echo "</select></dd>
</dl>
<dl>
\t<dt><label for=\"banned\">";
        // line 44
        echo $this->env->getExtension('phpbb')->lang("MAIL_BANNED");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("MAIL_BANNED_EXPLAIN");
        echo "</span></dt>
\t<dd><input id=\"banned\" name=\"mail_banned_flag\" type=\"checkbox\" class=\"radio\" /></dd>
</dl>
<dl>
\t<dt><label for=\"send\">";
        // line 48
        echo $this->env->getExtension('phpbb')->lang("SEND_IMMEDIATELY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><input id=\"send\" type=\"checkbox\" class=\"radio\" name=\"send_immediately\" checked=\"checked\" /></dd>
</dl>

";
        // line 52
        // line 53
        echo "
<p class=\"submit-buttons\">
\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 55
        echo $this->env->getExtension('phpbb')->lang("SEND_EMAIL");
        echo "\" />&nbsp;
\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 56
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
</p>
";
        // line 58
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

";
        // line 62
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_email.html", 62)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_email.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 62,  179 => 58,  174 => 56,  170 => 55,  166 => 53,  165 => 52,  157 => 48,  147 => 44,  141 => 41,  136 => 40,  130 => 37,  123 => 36,  117 => 33,  112 => 32,  102 => 29,  98 => 28,  91 => 27,  87 => 25,  86 => 24,  81 => 23,  80 => 22,  75 => 21,  70 => 19,  64 => 16,  61 => 15,  55 => 12,  51 => 11,  48 => 10,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* <h1>{L_ACP_MASS_EMAIL}</h1>*/
/* */
/* <p>{L_ACP_MASS_EMAIL_EXPLAIN}</p>*/
/* */
/* <!-- IF S_WARNING -->*/
/* 	<div class="errorbox">*/
/* 		<h3>{L_WARNING}</h3>*/
/* 		<p>{WARNING_MSG}</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <form id="acp_email" method="post" action="{U_ACTION}">*/
/* */
/* <fieldset>*/
/* 	<legend>{L_COMPOSE}</legend>*/
/* <dl>*/
/* 	<dt><label for="group">{L_SEND_TO_GROUP}{L_COLON}</label></dt>*/
/* 	<!-- EVENT acp_email_group_options_prepend -->*/
/* 	<dd><select id="group" name="g">{S_GROUP_OPTIONS}</select></dd>*/
/* 	<!-- EVENT acp_email_group_options_append -->*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="usernames">{L_SEND_TO_USERS}{L_COLON}</label><br /><span>{L_SEND_TO_USERS_EXPLAIN}</span></dt>*/
/* 	<dd><textarea name="usernames" id="usernames" rows="5" cols="40">{USERNAMES}</textarea></dd>*/
/* 	<dd><!-- EVENT acp_email_find_username_prepend -->[ <a href="{U_FIND_USERNAME}" onclick="find_username(this.href); return false;">{L_FIND_USERNAME}</a> ]<!-- EVENT acp_email_find_username_append --></dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="subject">{L_SUBJECT}{L_COLON}</label></dt>*/
/* 	<dd><input name="subject" type="text" id="subject" value="{SUBJECT}" /></dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="message">{L_MASS_MESSAGE}{L_COLON}</label><br /><span>{L_MASS_MESSAGE_EXPLAIN}</span></dt>*/
/* 	<dd><textarea id="message" name="message" rows="10" cols="60">{MESSAGE}</textarea></dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="priority">{L_MAIL_PRIORITY}{L_COLON}</label></dt>*/
/* 	<dd><select id="priority" name="mail_priority_flag">{S_PRIORITY_OPTIONS}</select></dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="banned">{L_MAIL_BANNED}{L_COLON}</label><br /><span>{L_MAIL_BANNED_EXPLAIN}</span></dt>*/
/* 	<dd><input id="banned" name="mail_banned_flag" type="checkbox" class="radio" /></dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="send">{L_SEND_IMMEDIATELY}{L_COLON}</label></dt>*/
/* 	<dd><input id="send" type="checkbox" class="radio" name="send_immediately" checked="checked" /></dd>*/
/* </dl>*/
/* */
/* <!-- EVENT acp_email_options_after -->*/
/* */
/* <p class="submit-buttons">*/
/* 	<input class="button1" type="submit" id="submit" name="submit" value="{L_SEND_EMAIL}" />&nbsp;*/
/* 	<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* </p>*/
/* {S_FORM_TOKEN}*/
/* </fieldset>*/
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
