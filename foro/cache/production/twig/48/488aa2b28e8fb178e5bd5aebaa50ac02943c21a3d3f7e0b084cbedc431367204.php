<?php

/* acp_help_phpbb.html */
class __TwigTemplate_879e58e19168af09c65528afd39d793bc5ff11c0f6b45060488822991311c16d extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_help_phpbb.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("ACP_HELP_PHPBB");
        echo "</h1>

<form id=\"acp_help_phpbb\" method=\"post\" action=\"";
        // line 7
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\" data-ajax-action=\"";
        echo (isset($context["U_COLLECT_STATS"]) ? $context["U_COLLECT_STATS"] : null);
        echo "\">
<div class=\"send-stats-row\">
\t";
        // line 9
        // line 10
        echo "\t<div class=\"send-stats-tile\">
\t\t<h2><i class=\"icon fa-bar-chart\"></i>";
        // line 11
        echo $this->env->getExtension('phpbb')->lang("SEND_STATISTICS");
        echo "</h2>
\t\t<p>";
        // line 12
        echo $this->env->getExtension('phpbb')->lang("EXPLAIN_SEND_STATISTICS");
        echo "</p>
\t\t<div class=\"send-stats-row\">
\t\t\t<div class=\"send-stats-data-row send-stats-data-only-row\">
\t\t\t\t<a id=\"trigger-configlist\" data-ajax=\"toggle_link\" data-overlay=\"false\" data-toggle-text=\"";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("HIDE_STATISTICS");
        echo "\"><span>";
        echo $this->env->getExtension('phpbb')->lang("SHOW_STATISTICS");
        echo "</span><i class=\"icon fa-angle-down\"></i></a>
\t\t\t</div>
\t\t\t<div class=\"send-stats-data-row\">
\t\t\t\t<div class=\"configlist\" id=\"configlist\">
\t\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "providers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["providers"]) {
            // line 20
            echo "\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<legend>";
            // line 21
            echo $this->getAttribute($context["providers"], "NAME", array());
            echo "</legend>
\t\t\t\t\t\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["providers"], "values", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["values"]) {
                // line 23
                echo "\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt>";
                // line 24
                echo $this->getAttribute($context["values"], "KEY", array());
                echo "</dt>
\t\t\t\t\t\t\t<dd>";
                // line 25
                echo $this->getAttribute($context["values"], "VALUE", array());
                echo "</dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t\t\t\t</fieldset>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['providers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<dl class=\"send-stats-settings\">
\t\t\t<dt>
\t\t\t\t<input name=\"help_send_statistics\" id=\"help_send_statistics\" type=\"checkbox\"";
        // line 35
        if ((isset($context["S_COLLECT_STATS"]) ? $context["S_COLLECT_STATS"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " />
\t\t\t\t<label for=\"help_send_statistics\"></label>
\t\t\t</dt>
\t\t\t<dd>";
        // line 38
        echo $this->env->getExtension('phpbb')->lang("SEND_STATISTICS_LONG");
        echo "</dd>
\t\t</dl>
\t</div>
\t";
        // line 41
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/acp_help_phpbb_stats_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 42
        echo "\t<fieldset>
\t\t<p class=\"submit-buttons\">
\t\t\t<input type=\"hidden\" name=\"systemdata\" value=\"";
        // line 44
        echo (isset($context["RAW_DATA"]) ? $context["RAW_DATA"] : null);
        echo "\" />
\t\t\t<input type=\"hidden\" name=\"help_send_statistics_time\" value=\"";
        // line 45
        echo (isset($context["COLLECT_STATS_TIME"]) ? $context["COLLECT_STATS_TIME"] : null);
        echo "\" />
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 46
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />
\t\t</p>
\t\t";
        // line 48
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</fieldset>
</div>
</form>
<form action=\"";
        // line 52
        echo (isset($context["U_COLLECT_STATS"]) ? $context["U_COLLECT_STATS"] : null);
        echo "\" method=\"post\" target=\"questionaire_result\" id=\"questionnaire-form\">
\t<fieldset>
\t\t<p class=\"submit-buttons\">
\t\t\t<input type=\"hidden\" name=\"systemdata\" value=\"";
        // line 55
        echo (isset($context["RAW_DATA"]) ? $context["RAW_DATA"] : null);
        echo "\" />
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit_stats\" name=\"submit\" value=\"";
        // line 56
        echo $this->env->getExtension('phpbb')->lang("SEND_STATISTICS");
        echo "\" />
\t\t</p>
\t</fieldset>
</form>

";
        // line 61
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_help_phpbb.html", 61)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_help_phpbb.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 61,  169 => 56,  165 => 55,  159 => 52,  152 => 48,  147 => 46,  143 => 45,  139 => 44,  135 => 42,  130 => 41,  124 => 38,  116 => 35,  109 => 30,  102 => 28,  93 => 25,  89 => 24,  86 => 23,  82 => 22,  78 => 21,  75 => 20,  71 => 19,  62 => 15,  56 => 12,  52 => 11,  49 => 10,  48 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* <h1>{L_ACP_HELP_PHPBB}</h1>*/
/* */
/* <form id="acp_help_phpbb" method="post" action="{U_ACTION}" data-ajax-action="{U_COLLECT_STATS}">*/
/* <div class="send-stats-row">*/
/* 	<!-- EVENT acp_help_phpbb_stats_before -->*/
/* 	<div class="send-stats-tile">*/
/* 		<h2><i class="icon fa-bar-chart"></i>{L_SEND_STATISTICS}</h2>*/
/* 		<p>{L_EXPLAIN_SEND_STATISTICS}</p>*/
/* 		<div class="send-stats-row">*/
/* 			<div class="send-stats-data-row send-stats-data-only-row">*/
/* 				<a id="trigger-configlist" data-ajax="toggle_link" data-overlay="false" data-toggle-text="{L_HIDE_STATISTICS}"><span>{L_SHOW_STATISTICS}</span><i class="icon fa-angle-down"></i></a>*/
/* 			</div>*/
/* 			<div class="send-stats-data-row">*/
/* 				<div class="configlist" id="configlist">*/
/* 					<!-- BEGIN providers -->*/
/* 					<fieldset>*/
/* 						<legend>{providers.NAME}</legend>*/
/* 						<!-- BEGIN values -->*/
/* 						<dl>*/
/* 							<dt>{providers.values.KEY}</dt>*/
/* 							<dd>{providers.values.VALUE}</dd>*/
/* 						</dl>*/
/* 						<!-- END values -->*/
/* 					</fieldset>*/
/* 					<!-- END providers -->*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<dl class="send-stats-settings">*/
/* 			<dt>*/
/* 				<input name="help_send_statistics" id="help_send_statistics" type="checkbox"<!-- IF S_COLLECT_STATS --> checked="checked"<!-- ENDIF --> />*/
/* 				<label for="help_send_statistics"></label>*/
/* 			</dt>*/
/* 			<dd>{L_SEND_STATISTICS_LONG}</dd>*/
/* 		</dl>*/
/* 	</div>*/
/* 	<!-- EVENT acp_help_phpbb_stats_after -->*/
/* 	<fieldset>*/
/* 		<p class="submit-buttons">*/
/* 			<input type="hidden" name="systemdata" value="{RAW_DATA}" />*/
/* 			<input type="hidden" name="help_send_statistics_time" value="{COLLECT_STATS_TIME}" />*/
/* 			<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />*/
/* 		</p>*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* </div>*/
/* </form>*/
/* <form action="{U_COLLECT_STATS}" method="post" target="questionaire_result" id="questionnaire-form">*/
/* 	<fieldset>*/
/* 		<p class="submit-buttons">*/
/* 			<input type="hidden" name="systemdata" value="{RAW_DATA}" />*/
/* 			<input class="button1" type="submit" id="submit_stats" name="submit" value="{L_SEND_STATISTICS}" />*/
/* 		</p>*/
/* 	</fieldset>*/
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
