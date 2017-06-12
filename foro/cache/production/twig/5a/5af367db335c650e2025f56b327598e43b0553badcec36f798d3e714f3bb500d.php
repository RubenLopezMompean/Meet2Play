<?php

/* acp_viglink.html */
class __TwigTemplate_b15ff49206fdedc592727b3df14e32f354fd19f58e31da7fdc5c01f87c40930f extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_viglink.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("ACP_VIGLINK_SETTINGS");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("ACP_VIGLINK_SETTINGS_EXPLAIN");
        echo "</p>

";
        // line 9
        if ((isset($context["S_ERROR"]) ? $context["S_ERROR"] : null)) {
            // line 10
            echo "<div class=\"errorbox\">
\t<h3>";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("WARNING");
            echo "</h3>
\t<p>";
            // line 12
            echo (isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null);
            echo "</p>
</div>
";
        }
        // line 15
        echo "
<form id=\"acp_viglink\" method=\"post\" action=\"";
        // line 16
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">

\t<fieldset>
\t\t<legend>";
        // line 19
        echo $this->env->getExtension('phpbb')->lang("ACP_VIGLINK_SETTINGS");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"viglink_enabled\">";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("ACP_VIGLINK_ENABLE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("ACP_VIGLINK_ENABLE_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"viglink_enabled\" name=\"viglink_enabled\" value=\"1\"";
        // line 22
        if ((isset($context["VIGLINK_ENABLED"]) ? $context["VIGLINK_ENABLED"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("ENABLED");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"viglink_enabled\" value=\"0\"";
        // line 23
        if ( !(isset($context["VIGLINK_ENABLED"]) ? $context["VIGLINK_ENABLED"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("DISABLED");
        echo "</label></dd>
\t\t</dl>
\t</fieldset>

\t<h1>";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("ACP_VIGLINK_EARNINGS");
        echo "</h1>

\t<p>";
        // line 29
        echo $this->env->getExtension('phpbb')->lang("ACP_VIGLINK_EARNINGS_EXPLAIN");
        echo "</p>

\t<fieldset>
\t\t<legend>";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("ACP_VIGLINK_EARNINGS");
        echo "</legend>
\t\t";
        // line 33
        if ((isset($context["U_VIGLINK_CONVERT"]) ? $context["U_VIGLINK_CONVERT"] : null)) {
            // line 34
            echo "\t\t<dl>
\t\t\t<dt><label>";
            // line 35
            echo $this->env->getExtension('phpbb')->lang("ACP_VIGLINK_CLAIM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("ACP_VIGLINK_CLAIM_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><a href=\"";
            // line 36
            echo (isset($context["U_VIGLINK_CONVERT"]) ? $context["U_VIGLINK_CONVERT"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("ACP_VIGLINK_CONVERT_ACCOUNT");
            echo "</a></dd>
\t\t</dl>
\t\t";
        }
        // line 39
        echo "\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 42
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 43
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
\t\t";
        // line 44
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</fieldset>
</form>

";
        // line 48
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_viglink.html", 48)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_viglink.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 48,  149 => 44,  145 => 43,  141 => 42,  136 => 39,  128 => 36,  121 => 35,  118 => 34,  116 => 33,  112 => 32,  106 => 29,  101 => 27,  90 => 23,  82 => 22,  75 => 21,  70 => 19,  64 => 16,  61 => 15,  55 => 12,  51 => 11,  48 => 10,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* <h1>{L_ACP_VIGLINK_SETTINGS}</h1>*/
/* */
/* <p>{L_ACP_VIGLINK_SETTINGS_EXPLAIN}</p>*/
/* */
/* <!-- IF S_ERROR -->*/
/* <div class="errorbox">*/
/* 	<h3>{L_WARNING}</h3>*/
/* 	<p>{ERROR_MSG}</p>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* */
/* <form id="acp_viglink" method="post" action="{U_ACTION}">*/
/* */
/* 	<fieldset>*/
/* 		<legend>{L_ACP_VIGLINK_SETTINGS}</legend>*/
/* 		<dl>*/
/* 			<dt><label for="viglink_enabled">{L_ACP_VIGLINK_ENABLE}{L_COLON}</label><br /><span>{L_ACP_VIGLINK_ENABLE_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" id="viglink_enabled" name="viglink_enabled" value="1"<!-- IF VIGLINK_ENABLED --> checked="checked"<!-- ENDIF --> /> {L_ENABLED}</label>*/
/* 				<label><input type="radio" class="radio" name="viglink_enabled" value="0"<!-- IF not VIGLINK_ENABLED --> checked="checked"<!-- ENDIF --> /> {L_DISABLED}</label></dd>*/
/* 		</dl>*/
/* 	</fieldset>*/
/* */
/* 	<h1>{L_ACP_VIGLINK_EARNINGS}</h1>*/
/* */
/* 	<p>{L_ACP_VIGLINK_EARNINGS_EXPLAIN}</p>*/
/* */
/* 	<fieldset>*/
/* 		<legend>{L_ACP_VIGLINK_EARNINGS}</legend>*/
/* 		<!-- IF U_VIGLINK_CONVERT -->*/
/* 		<dl>*/
/* 			<dt><label>{L_ACP_VIGLINK_CLAIM}{L_COLON}</label><br /><span>{L_ACP_VIGLINK_CLAIM_EXPLAIN}</span></dt>*/
/* 			<dd><a href="{U_VIGLINK_CONVERT}">{L_ACP_VIGLINK_CONVERT_ACCOUNT}</a></dd>*/
/* 		</dl>*/
/* 		<!-- ENDIF -->*/
/* 	</fieldset>*/
/* */
/* 	<fieldset class="submit-buttons">*/
/* 		<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />&nbsp;*/
/* 		<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
