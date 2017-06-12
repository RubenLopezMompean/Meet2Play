<?php

/* acp_jabber.html */
class __TwigTemplate_0b6800a861c2e6300388fa706758732f7e16f670bd85a9160d7c7e7681281a91 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_jabber.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("ACP_JABBER_SETTINGS");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("ACP_JABBER_SETTINGS_EXPLAIN");
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
<form id=\"acp_jabber\" method=\"post\" action=\"";
        // line 16
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">

<fieldset>
\t<legend>";
        // line 19
        echo $this->env->getExtension('phpbb')->lang("ACP_JABBER_SETTINGS");
        echo "</legend>
";
        // line 20
        if ((isset($context["S_GTALK_NOTE"]) ? $context["S_GTALK_NOTE"] : null)) {
            // line 21
            echo "\t<p>";
            echo $this->env->getExtension('phpbb')->lang("JAB_GTALK_NOTE");
            echo "</p>
";
        }
        // line 23
        echo "<dl>
\t<dt><label for=\"jab_enable\">";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("JAB_ENABLE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("JAB_ENABLE_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" id=\"jab_enable\" name=\"jab_enable\" value=\"1\"";
        // line 25
        if ((isset($context["JAB_ENABLE"]) ? $context["JAB_ENABLE"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("ENABLED");
        echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" name=\"jab_enable\" value=\"0\"";
        // line 26
        if ( !(isset($context["JAB_ENABLE"]) ? $context["JAB_ENABLE"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("DISABLED");
        echo "</label></dd>
</dl>
<dl>
\t<dt><label for=\"jab_host\">";
        // line 29
        echo $this->env->getExtension('phpbb')->lang("JAB_SERVER");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("JAB_SERVER_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"text\" id=\"jab_host\" name=\"jab_host\" value=\"";
        // line 30
        echo (isset($context["JAB_HOST"]) ? $context["JAB_HOST"] : null);
        echo "\" /></dd>
</dl>
<dl>
\t<dt><label for=\"jab_port\">";
        // line 33
        echo $this->env->getExtension('phpbb')->lang("JAB_PORT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("JAB_PORT_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"number\" id=\"jab_port\" name=\"jab_port\" value=\"";
        // line 34
        echo (isset($context["JAB_PORT"]) ? $context["JAB_PORT"] : null);
        echo "\" min=\"0\" max=\"99999\" /></dd>
</dl>
<dl>
\t<dt><label for=\"jab_username\">";
        // line 37
        echo $this->env->getExtension('phpbb')->lang("JAB_USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("JAB_USERNAME_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"text\" id=\"jab_username\" name=\"jab_username\" value=\"";
        // line 38
        echo (isset($context["JAB_USERNAME"]) ? $context["JAB_USERNAME"] : null);
        echo "\" /></dd>
</dl>
<dl>
\t<dt><label for=\"jab_password\">";
        // line 41
        echo $this->env->getExtension('phpbb')->lang("JAB_PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("JAB_PASSWORD_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"password\" id=\"jab_password\" name=\"jab_password\" value=\"";
        // line 42
        echo (isset($context["JAB_PASSWORD"]) ? $context["JAB_PASSWORD"] : null);
        echo "\" autocomplete=\"off\" /></dd>
</dl>
";
        // line 44
        if ((isset($context["S_CAN_USE_SSL"]) ? $context["S_CAN_USE_SSL"] : null)) {
            // line 45
            echo "<dl>
\t<dt><label for=\"jab_use_ssl\">";
            // line 46
            echo $this->env->getExtension('phpbb')->lang("JAB_USE_SSL");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("JAB_USE_SSL_EXPLAIN");
            echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" id=\"jab_use_ssl\" name=\"jab_use_ssl\" value=\"1\"";
            // line 47
            if ((isset($context["JAB_USE_SSL"]) ? $context["JAB_USE_SSL"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" name=\"jab_use_ssl\" value=\"0\"";
            // line 48
            if ( !(isset($context["JAB_USE_SSL"]) ? $context["JAB_USE_SSL"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
</dl>
";
        }
        // line 51
        echo "<dl>
\t<dt><label for=\"jab_package_size\">";
        // line 52
        echo $this->env->getExtension('phpbb')->lang("JAB_PACKAGE_SIZE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("JAB_PACKAGE_SIZE_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"number\" id=\"jab_package_size\" name=\"jab_package_size\" value=\"";
        // line 53
        echo (isset($context["JAB_PACKAGE_SIZE"]) ? $context["JAB_PACKAGE_SIZE"] : null);
        echo "\" min=\"0\" max=\"99999\" /></dd>
</dl>

</fieldset>

<fieldset class=\"submit-buttons\">
\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 59
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 60
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
\t";
        // line 61
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

";
        // line 65
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_jabber.html", 65)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_jabber.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 65,  218 => 61,  214 => 60,  210 => 59,  201 => 53,  194 => 52,  191 => 51,  181 => 48,  173 => 47,  166 => 46,  163 => 45,  161 => 44,  156 => 42,  149 => 41,  143 => 38,  136 => 37,  130 => 34,  123 => 33,  117 => 30,  110 => 29,  100 => 26,  92 => 25,  85 => 24,  82 => 23,  76 => 21,  74 => 20,  70 => 19,  64 => 16,  61 => 15,  55 => 12,  51 => 11,  48 => 10,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* <h1>{L_ACP_JABBER_SETTINGS}</h1>*/
/* */
/* <p>{L_ACP_JABBER_SETTINGS_EXPLAIN}</p>*/
/* */
/* <!-- IF S_WARNING -->*/
/* 	<div class="errorbox">*/
/* 		<h3>{L_WARNING}</h3>*/
/* 		<p>{WARNING_MSG}</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <form id="acp_jabber" method="post" action="{U_ACTION}">*/
/* */
/* <fieldset>*/
/* 	<legend>{L_ACP_JABBER_SETTINGS}</legend>*/
/* <!-- IF S_GTALK_NOTE -->*/
/* 	<p>{L_JAB_GTALK_NOTE}</p>*/
/* <!-- ENDIF -->*/
/* <dl>*/
/* 	<dt><label for="jab_enable">{L_JAB_ENABLE}{L_COLON}</label><br /><span>{L_JAB_ENABLE_EXPLAIN}</span></dt>*/
/* 	<dd><label><input type="radio" class="radio" id="jab_enable" name="jab_enable" value="1"<!-- IF JAB_ENABLE --> checked="checked"<!-- ENDIF --> /> {L_ENABLED}</label>*/
/* 		<label><input type="radio" class="radio" name="jab_enable" value="0"<!-- IF not JAB_ENABLE --> checked="checked"<!-- ENDIF --> /> {L_DISABLED}</label></dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="jab_host">{L_JAB_SERVER}{L_COLON}</label><br /><span>{L_JAB_SERVER_EXPLAIN}</span></dt>*/
/* 	<dd><input type="text" id="jab_host" name="jab_host" value="{JAB_HOST}" /></dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="jab_port">{L_JAB_PORT}{L_COLON}</label><br /><span>{L_JAB_PORT_EXPLAIN}</span></dt>*/
/* 	<dd><input type="number" id="jab_port" name="jab_port" value="{JAB_PORT}" min="0" max="99999" /></dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="jab_username">{L_JAB_USERNAME}{L_COLON}</label><br /><span>{L_JAB_USERNAME_EXPLAIN}</span></dt>*/
/* 	<dd><input type="text" id="jab_username" name="jab_username" value="{JAB_USERNAME}" /></dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="jab_password">{L_JAB_PASSWORD}{L_COLON}</label><br /><span>{L_JAB_PASSWORD_EXPLAIN}</span></dt>*/
/* 	<dd><input type="password" id="jab_password" name="jab_password" value="{JAB_PASSWORD}" autocomplete="off" /></dd>*/
/* </dl>*/
/* <!-- IF S_CAN_USE_SSL -->*/
/* <dl>*/
/* 	<dt><label for="jab_use_ssl">{L_JAB_USE_SSL}{L_COLON}</label><br /><span>{L_JAB_USE_SSL_EXPLAIN}</span></dt>*/
/* 	<dd><label><input type="radio" class="radio" id="jab_use_ssl" name="jab_use_ssl" value="1"<!-- IF JAB_USE_SSL --> checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 		<label><input type="radio" class="radio" name="jab_use_ssl" value="0"<!-- IF not JAB_USE_SSL --> checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* </dl>*/
/* <!-- ENDIF -->*/
/* <dl>*/
/* 	<dt><label for="jab_package_size">{L_JAB_PACKAGE_SIZE}{L_COLON}</label><br /><span>{L_JAB_PACKAGE_SIZE_EXPLAIN}</span></dt>*/
/* 	<dd><input type="number" id="jab_package_size" name="jab_package_size" value="{JAB_PACKAGE_SIZE}" min="0" max="99999" /></dd>*/
/* </dl>*/
/* */
/* </fieldset>*/
/* */
/* <fieldset class="submit-buttons">*/
/* 	<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />&nbsp;*/
/* 	<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* 	{S_FORM_TOKEN}*/
/* </fieldset>*/
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
