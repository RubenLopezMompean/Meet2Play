<?php

/* acp_prune_forums.html */
class __TwigTemplate_a9299bda5018be4b1525ee919a20287215f718bbd236e67e837d3e80114c98e6 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_prune_forums.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if ((isset($context["S_PRUNED"]) ? $context["S_PRUNED"] : null)) {
            // line 6
            echo "
\t<h1>";
            // line 7
            echo $this->env->getExtension('phpbb')->lang("FORUM_PRUNE");
            echo "</h1>

\t<p>";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("PRUNE_SUCCESS");
            echo "</p>

\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 14
            echo $this->env->getExtension('phpbb')->lang("FORUM");
            echo "</th>
\t\t<th>";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("TOPICS_PRUNED");
            echo "</th>
\t\t<th>";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("POSTS_PRUNED");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pruned", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["pruned"]) {
                // line 21
                echo "\t<tr>
\t\t<td style=\"text-align: center;\">";
                // line 22
                echo $this->getAttribute($context["pruned"], "FORUM_NAME", array());
                echo "</td>
\t\t<td style=\"text-align: center;\">";
                // line 23
                echo $this->getAttribute($context["pruned"], "NUM_TOPICS", array());
                echo "</td>
\t\t<td style=\"text-align: center;\">";
                // line 24
                echo $this->getAttribute($context["pruned"], "NUM_POSTS", array());
                echo "</td>
\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 27
                echo "\t\t<tr>
\t\t\t<td colspan=\"3\" class=\"row3\" style=\"text-align: center;\">";
                // line 28
                echo $this->env->getExtension('phpbb')->lang("NO_PRUNE");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pruned'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t</tbody>
\t</table>

";
        } elseif (        // line 34
(isset($context["S_SELECT_FORUM"]) ? $context["S_SELECT_FORUM"] : null)) {
            // line 35
            echo "
\t<h1>";
            // line 36
            echo $this->env->getExtension('phpbb')->lang("ACP_PRUNE_FORUMS");
            echo "</h1>

\t<p>";
            // line 38
            echo $this->env->getExtension('phpbb')->lang("ACP_PRUNE_FORUMS_EXPLAIN");
            echo "</p>

\t<form id=\"acp_prune\" method=\"post\" action=\"";
            // line 40
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t
\t<fieldset>
\t\t<legend>";
            // line 43
            echo $this->env->getExtension('phpbb')->lang("SELECT_FORUM");
            echo "</legend>
\t\t<p>";
            // line 44
            echo $this->env->getExtension('phpbb')->lang("LOOK_UP_FORUMS_EXPLAIN");
            echo "</p>
\t<dl>
\t\t<dt>";
            // line 46
            echo "<label for=\"forum\">";
            echo $this->env->getExtension('phpbb')->lang("LOOK_UP_FORUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>";
            echo "</dt>
\t\t<dd><select id=\"forum\" name=\"f[]\" multiple=\"multiple\" size=\"10\">";
            // line 47
            echo (isset($context["S_FORUM_OPTIONS"]) ? $context["S_FORUM_OPTIONS"] : null);
            echo "</select></dd>
\t\t<dd><label><input type=\"checkbox\" class=\"radio\" name=\"all_forums\" value=\"1\" /> ";
            // line 48
            echo $this->env->getExtension('phpbb')->lang("ALL_FORUMS");
            echo "</label></dd>
\t</dl>
\t
\t<p class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" value=\"";
            // line 52
            echo $this->env->getExtension('phpbb')->lang("LOOK_UP_FORUM");
            echo "\" />
\t</p>
\t</fieldset>

\t</form>

";
        } else {
            // line 59
            echo "
\t<a href=\"";
            // line 60
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 62
            echo $this->env->getExtension('phpbb')->lang("ACP_PRUNE_FORUMS");
            echo "</h1>

\t<p>";
            // line 64
            echo $this->env->getExtension('phpbb')->lang("ACP_PRUNE_FORUMS_EXPLAIN");
            echo "</p>

\t<h2>";
            // line 66
            echo $this->env->getExtension('phpbb')->lang("FORUM");
            echo "</h2>

\t<p>";
            // line 68
            echo $this->env->getExtension('phpbb')->lang("SELECTED_FORUMS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            echo (isset($context["FORUM_LIST"]) ? $context["FORUM_LIST"] : null);
            echo "</p>

\t<form id=\"acp_prune\" method=\"post\" action=\"";
            // line 70
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 73
            echo $this->env->getExtension('phpbb')->lang("FORUM_PRUNE");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"prune_days\">";
            // line 75
            echo $this->env->getExtension('phpbb')->lang("PRUNE_NOT_POSTED");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"number\" id=\"prune_days\" name=\"prune_days\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"prune_vieweddays\">";
            // line 79
            echo $this->env->getExtension('phpbb')->lang("PRUNE_NOT_VIEWED");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"number\" id=\"prune_vieweddays\" name=\"prune_vieweddays\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"polls\">";
            // line 83
            echo $this->env->getExtension('phpbb')->lang("PRUNE_OLD_POLLS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("PRUNE_OLD_POLLS_EXPLAIN");
            echo "</span></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_old_polls\" value=\"1\" /> ";
            // line 84
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"polls\" name=\"prune_old_polls\" value=\"0\" checked=\"checked\" /> ";
            // line 85
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"announce\">";
            // line 88
            echo $this->env->getExtension('phpbb')->lang("PRUNE_ANNOUNCEMENTS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_announce\" value=\"1\" /> ";
            // line 89
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"announce\" name=\"prune_announce\" value=\"0\" checked=\"checked\" /> ";
            // line 90
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"sticky\">";
            // line 93
            echo $this->env->getExtension('phpbb')->lang("PRUNE_STICKY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_sticky\" value=\"1\" /> ";
            // line 94
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"sticky\" name=\"prune_sticky\" value=\"0\" checked=\"checked\" /> ";
            // line 95
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t</dl>
\t
\t<p class=\"quick\">
\t\t";
            // line 99
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t";
            // line 100
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 101
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t</p>
\t</fieldset>
\t</form>

";
        }
        // line 107
        echo "
";
        // line 108
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_prune_forums.html", 108)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_prune_forums.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 108,  295 => 107,  286 => 101,  282 => 100,  278 => 99,  271 => 95,  267 => 94,  262 => 93,  256 => 90,  252 => 89,  247 => 88,  241 => 85,  237 => 84,  230 => 83,  222 => 79,  214 => 75,  209 => 73,  203 => 70,  195 => 68,  190 => 66,  185 => 64,  180 => 62,  171 => 60,  168 => 59,  158 => 52,  151 => 48,  147 => 47,  140 => 46,  135 => 44,  131 => 43,  125 => 40,  120 => 38,  115 => 36,  112 => 35,  110 => 34,  105 => 31,  96 => 28,  93 => 27,  85 => 24,  81 => 23,  77 => 22,  74 => 21,  69 => 20,  62 => 16,  58 => 15,  54 => 14,  46 => 9,  41 => 7,  38 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* <!-- IF S_PRUNED -->*/
/* */
/* 	<h1>{L_FORUM_PRUNE}</h1>*/
/* */
/* 	<p>{L_PRUNE_SUCCESS}</p>*/
/* */
/* 	<table class="table1 zebra-table">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th>{L_FORUM}</th>*/
/* 		<th>{L_TOPICS_PRUNED}</th>*/
/* 		<th>{L_POSTS_PRUNED}</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<!-- BEGIN pruned -->*/
/* 	<tr>*/
/* 		<td style="text-align: center;">{pruned.FORUM_NAME}</td>*/
/* 		<td style="text-align: center;">{pruned.NUM_TOPICS}</td>*/
/* 		<td style="text-align: center;">{pruned.NUM_POSTS}</td>*/
/* 	</tr>*/
/* 	<!-- BEGINELSE -->*/
/* 		<tr>*/
/* 			<td colspan="3" class="row3" style="text-align: center;">{L_NO_PRUNE}</td>*/
/* 		</tr>*/
/* 	<!-- END pruned -->*/
/* 	</tbody>*/
/* 	</table>*/
/* */
/* <!-- ELSEIF S_SELECT_FORUM -->*/
/* */
/* 	<h1>{L_ACP_PRUNE_FORUMS}</h1>*/
/* */
/* 	<p>{L_ACP_PRUNE_FORUMS_EXPLAIN}</p>*/
/* */
/* 	<form id="acp_prune" method="post" action="{U_ACTION}">*/
/* 	*/
/* 	<fieldset>*/
/* 		<legend>{L_SELECT_FORUM}</legend>*/
/* 		<p>{L_LOOK_UP_FORUMS_EXPLAIN}</p>*/
/* 	<dl>*/
/* 		<dt><!-- EVENT acp_prune_forums_prepend --><label for="forum">{L_LOOK_UP_FORUM}{L_COLON}</label><!-- EVENT acp_prune_forums_append --></dt>*/
/* 		<dd><select id="forum" name="f[]" multiple="multiple" size="10">{S_FORUM_OPTIONS}</select></dd>*/
/* 		<dd><label><input type="checkbox" class="radio" name="all_forums" value="1" /> {L_ALL_FORUMS}</label></dd>*/
/* 	</dl>*/
/* 	*/
/* 	<p class="quick">*/
/* 		<input class="button1" type="submit" value="{L_LOOK_UP_FORUM}" />*/
/* 	</p>*/
/* 	</fieldset>*/
/* */
/* 	</form>*/
/* */
/* <!-- ELSE -->*/
/* */
/* 	<a href="{U_BACK}" style="float: {S_CONTENT_FLOW_END};">&laquo; {L_BACK}</a>*/
/* */
/* 	<h1>{L_ACP_PRUNE_FORUMS}</h1>*/
/* */
/* 	<p>{L_ACP_PRUNE_FORUMS_EXPLAIN}</p>*/
/* */
/* 	<h2>{L_FORUM}</h2>*/
/* */
/* 	<p>{L_SELECTED_FORUMS}{L_COLON} {FORUM_LIST}</p>*/
/* */
/* 	<form id="acp_prune" method="post" action="{U_ACTION}">*/
/* */
/* 	<fieldset>*/
/* 		<legend>{L_FORUM_PRUNE}</legend>*/
/* 	<dl>*/
/* 		<dt><label for="prune_days">{L_PRUNE_NOT_POSTED}{L_COLON}</label></dt>*/
/* 		<dd><input type="number" id="prune_days" name="prune_days" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="prune_vieweddays">{L_PRUNE_NOT_VIEWED}{L_COLON}</label></dt>*/
/* 		<dd><input type="number" id="prune_vieweddays" name="prune_vieweddays" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="polls">{L_PRUNE_OLD_POLLS}{L_COLON}</label><br /><span>{L_PRUNE_OLD_POLLS_EXPLAIN}</span></dt>*/
/* 		<dd><label><input type="radio" class="radio" name="prune_old_polls" value="1" /> {L_YES}</label>*/
/* 			<label><input type="radio" class="radio" id="polls" name="prune_old_polls" value="0" checked="checked" /> {L_NO}</label></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="announce">{L_PRUNE_ANNOUNCEMENTS}{L_COLON}</label></dt>*/
/* 		<dd><label><input type="radio" class="radio" name="prune_announce" value="1" /> {L_YES}</label>*/
/* 			<label><input type="radio" class="radio" id="announce" name="prune_announce" value="0" checked="checked" /> {L_NO}</label></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="sticky">{L_PRUNE_STICKY}{L_COLON}</label></dt>*/
/* 		<dd><label><input type="radio" class="radio" name="prune_sticky" value="1" /> {L_YES}</label>*/
/* 			<label><input type="radio" class="radio" id="sticky" name="prune_sticky" value="0" checked="checked" /> {L_NO}</label></dd>*/
/* 	</dl>*/
/* 	*/
/* 	<p class="quick">*/
/* 		{S_HIDDEN_FIELDS}*/
/* 		{S_FORM_TOKEN}*/
/* 		<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />*/
/* 	</p>*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
