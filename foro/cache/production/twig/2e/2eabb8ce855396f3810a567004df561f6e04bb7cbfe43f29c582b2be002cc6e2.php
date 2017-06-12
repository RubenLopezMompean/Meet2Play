<?php

/* auth_provider_ldap.html */
class __TwigTemplate_9400ef4ef87f14220b1b886e86b3654587a67134d2df592498e38666a1fff361 extends Twig_Template
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
        echo "<fieldset id=\"auth_ldap_settings\">
\t<legend>";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("LDAP");
        echo "</legend>
\t<dl>
\t\t<dt><label for=\"ldap_server\">";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("LDAP_SERVER");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("LDAP_SERVER_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"text\" id=\"ldap_server\" size=\"40\" name=\"config[ldap_server]\" value=\"";
        // line 5
        echo (isset($context["AUTH_LDAP_SERVER"]) ? $context["AUTH_LDAP_SERVER"] : null);
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"ldap_port\">";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("LDAP_PORT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("LDAP_PORT_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"text\" id=\"ldap_port\" size=\"40\" name=\"config[ldap_port]\" value=\"";
        // line 9
        echo (isset($context["AUTH_LDAP_PORT"]) ? $context["AUTH_LDAP_PORT"] : null);
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"ldap_dn\">";
        // line 12
        echo $this->env->getExtension('phpbb')->lang("LDAP_DN");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("LDAP_DN_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"text\" id=\"ldap_dn\" size=\"40\" name=\"config[ldap_base_dn]\" value=\"";
        // line 13
        echo (isset($context["AUTH_LDAP_BASE_DN"]) ? $context["AUTH_LDAP_BASE_DN"] : null);
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"ldap_uid\">";
        // line 16
        echo $this->env->getExtension('phpbb')->lang("LDAP_UID");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("LDAP_UID_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"text\" id=\"ldap_uid\" size=\"40\" name=\"config[ldap_uid]\" value=\"";
        // line 17
        echo (isset($context["AUTH_LDAP_UID"]) ? $context["AUTH_LDAP_UID"] : null);
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"ldap_user_filter\">";
        // line 20
        echo $this->env->getExtension('phpbb')->lang("LDAP_USER_FILTER");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("LDAP_USER_FILTER_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"text\" id=\"ldap_user_filter\" size=\"40\" name=\"config[ldap_user_filter]\" value=\"";
        // line 21
        echo (isset($context["AUTH_LDAP_USER_FILTER"]) ? $context["AUTH_LDAP_USER_FILTER"] : null);
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"ldap_email\">";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("LDAP_EMAIL");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("LDAP_EMAIL_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"text\" id=\"ldap_email\" size=\"40\" name=\"config[ldap_email]\" value=\"";
        // line 25
        echo (isset($context["AUTH_LDAP_EMAIL"]) ? $context["AUTH_LDAP_EMAIL"] : null);
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"ldap_user\">";
        // line 28
        echo $this->env->getExtension('phpbb')->lang("LDAP_USER");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("LDAP_USER_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"text\" id=\"ldap_user\" size=\"40\" name=\"config[ldap_user]\" value=\"";
        // line 29
        echo (isset($context["AUTH_LDAP_USER"]) ? $context["AUTH_LDAP_USER"] : null);
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"ldap_password\">";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("LDAP_PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("LDAP_PASSWORD_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"password\" id=\"ldap_password\" size=\"40\" name=\"config[ldap_password]\" value=\"";
        // line 33
        echo (isset($context["AUTH_LDAP_PASSWORD"]) ? $context["AUTH_LDAP_PASSWORD"] : null);
        echo "\" autocomplete=\"off\" /></dd>
\t</dl>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "auth_provider_ldap.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 33,  118 => 32,  112 => 29,  105 => 28,  99 => 25,  92 => 24,  86 => 21,  79 => 20,  73 => 17,  66 => 16,  60 => 13,  53 => 12,  47 => 9,  40 => 8,  34 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <fieldset id="auth_ldap_settings">*/
/* 	<legend>{L_LDAP}</legend>*/
/* 	<dl>*/
/* 		<dt><label for="ldap_server">{L_LDAP_SERVER}{L_COLON}</label><br /><span>{L_LDAP_SERVER_EXPLAIN}</span></dt>*/
/* 		<dd><input type="text" id="ldap_server" size="40" name="config[ldap_server]" value="{AUTH_LDAP_SERVER}" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="ldap_port">{L_LDAP_PORT}{L_COLON}</label><br /><span>{L_LDAP_PORT_EXPLAIN}</span></dt>*/
/* 		<dd><input type="text" id="ldap_port" size="40" name="config[ldap_port]" value="{AUTH_LDAP_PORT}" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="ldap_dn">{L_LDAP_DN}{L_COLON}</label><br /><span>{L_LDAP_DN_EXPLAIN}</span></dt>*/
/* 		<dd><input type="text" id="ldap_dn" size="40" name="config[ldap_base_dn]" value="{AUTH_LDAP_BASE_DN}" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="ldap_uid">{L_LDAP_UID}{L_COLON}</label><br /><span>{L_LDAP_UID_EXPLAIN}</span></dt>*/
/* 		<dd><input type="text" id="ldap_uid" size="40" name="config[ldap_uid]" value="{AUTH_LDAP_UID}" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="ldap_user_filter">{L_LDAP_USER_FILTER}{L_COLON}</label><br /><span>{L_LDAP_USER_FILTER_EXPLAIN}</span></dt>*/
/* 		<dd><input type="text" id="ldap_user_filter" size="40" name="config[ldap_user_filter]" value="{AUTH_LDAP_USER_FILTER}" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="ldap_email">{L_LDAP_EMAIL}{L_COLON}</label><br /><span>{L_LDAP_EMAIL_EXPLAIN}</span></dt>*/
/* 		<dd><input type="text" id="ldap_email" size="40" name="config[ldap_email]" value="{AUTH_LDAP_EMAIL}" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="ldap_user">{L_LDAP_USER}{L_COLON}</label><br /><span>{L_LDAP_USER_EXPLAIN}</span></dt>*/
/* 		<dd><input type="text" id="ldap_user" size="40" name="config[ldap_user]" value="{AUTH_LDAP_USER}" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="ldap_password">{L_LDAP_PASSWORD}{L_COLON}</label><br /><span>{L_LDAP_PASSWORD_EXPLAIN}</span></dt>*/
/* 		<dd><input type="password" id="ldap_password" size="40" name="config[ldap_password]" value="{AUTH_LDAP_PASSWORD}" autocomplete="off" /></dd>*/
/* 	</dl>*/
/* </fieldset>*/
/* */
