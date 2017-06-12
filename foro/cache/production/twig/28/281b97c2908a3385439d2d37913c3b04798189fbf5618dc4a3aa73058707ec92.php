<?php

/* acp_posting_buttons.html */
class __TwigTemplate_c1252d639ffd746f4fbefb5bb9b970df4c1f75d9f4c790050dd83410fb06fa0d extends Twig_Template
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
        echo "<script type=\"text/javascript\">
// <![CDATA[

\t// Define the bbCode tags
\tvar bbcode = new Array();
\tvar bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            echo ", ";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_NAME", array());
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ");

\t// Helpline messages
\tvar help_line = {
\t\tb: '";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_B_HELP"), "js");
        echo "',
\t\ti: '";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_I_HELP"), "js");
        echo "',
\t\tu: '";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_U_HELP"), "js");
        echo "',
\t\tq: '";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_Q_HELP"), "js");
        echo "',
\t\tc: '";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_C_HELP"), "js");
        echo "',
\t\tl: '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_L_HELP"), "js");
        echo "',
\t\to: '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_O_HELP"), "js");
        echo "',
\t\tp: '";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_P_HELP"), "js");
        echo "',
\t\tw: '";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_W_HELP"), "js");
        echo "',
\t\ta: '";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_A_HELP"), "js");
        echo "',
\t\ts: '";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_S_HELP"), "js");
        echo "',
\t\tf: '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_F_HELP"), "js");
        echo "',
\t\ty: '";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_Y_HELP"), "js");
        echo "',
\t\td: '";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_D_HELP"), "js");
        echo "'
\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            // line 25
            echo "\t\t\t,cb_";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " '";
            echo $this->getAttribute($context["custom_tags"], "A_BBCODE_HELPLINE", array());
            echo "'
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t}

// ]]>
</script>

";
        // line 32
        $asset_file = (("" . (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null)) . "/javascript/editor.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('4');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 33
        echo "
";
        // line 34
        // line 35
        echo "<div id=\"format-buttons\">
\t<input type=\"button\" class=\"button2\" accesskey=\"b\" name=\"addbbcode0\" value=\" B \" style=\"font-weight:bold; width: 30px\" onclick=\"bbstyle(0)\" title=\"";
        // line 36
        echo $this->env->getExtension('phpbb')->lang("BBCODE_B_HELP");
        echo "\" />
\t<input type=\"button\" class=\"button2\" accesskey=\"i\" name=\"addbbcode2\" value=\" i \" style=\"font-style:italic; width: 30px\" onclick=\"bbstyle(2)\" title=\"";
        // line 37
        echo $this->env->getExtension('phpbb')->lang("BBCODE_I_HELP");
        echo "\" />
\t<input type=\"button\" class=\"button2\" accesskey=\"u\" name=\"addbbcode4\" value=\" u \" style=\"text-decoration: underline; width: 30px\" onclick=\"bbstyle(4)\" title=\"";
        // line 38
        echo $this->env->getExtension('phpbb')->lang("BBCODE_U_HELP");
        echo "\" />
\t";
        // line 39
        if ((isset($context["S_BBCODE_QUOTE"]) ? $context["S_BBCODE_QUOTE"] : null)) {
            // line 40
            echo "\t\t<input type=\"button\" class=\"button2\" accesskey=\"q\" name=\"addbbcode6\" value=\"Quote\" style=\"width: 50px\" onclick=\"bbstyle(6)\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_Q_HELP");
            echo "\" />
\t";
        }
        // line 42
        echo "\t<input type=\"button\" class=\"button2\" accesskey=\"c\" name=\"addbbcode8\" value=\"Code\" style=\"width: 40px\" onclick=\"bbstyle(8)\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("BBCODE_C_HELP");
        echo "\" />
\t<input type=\"button\" class=\"button2\" accesskey=\"l\" name=\"addbbcode10\" value=\"List\" style=\"width: 40px\" onclick=\"bbstyle(10)\" title=\"";
        // line 43
        echo $this->env->getExtension('phpbb')->lang("BBCODE_L_HELP");
        echo "\" />
\t<input type=\"button\" class=\"button2\" accesskey=\"o\" name=\"addbbcode12\" value=\"List=\" style=\"width: 40px\" onclick=\"bbstyle(12)\" title=\"";
        // line 44
        echo $this->env->getExtension('phpbb')->lang("BBCODE_O_HELP");
        echo "\" />
\t<input type=\"button\" class=\"button2\" accesskey=\"y\" name=\"addlistitem\" value=\"[*]\" style=\"width: 40px\" onclick=\"bbstyle(-1)\" title=\"";
        // line 45
        echo $this->env->getExtension('phpbb')->lang("BBCODE_LISTITEM_HELP");
        echo "\" />
\t";
        // line 46
        if ((isset($context["S_BBCODE_IMG"]) ? $context["S_BBCODE_IMG"] : null)) {
            // line 47
            echo "\t\t<input type=\"button\" class=\"button2\" accesskey=\"p\" name=\"addbbcode14\" value=\"Img\" style=\"width: 40px\" onclick=\"bbstyle(14)\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_P_HELP");
            echo "\" />
\t";
        }
        // line 49
        echo "\t";
        if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
            // line 50
            echo "\t\t<input type=\"button\" class=\"button2\" accesskey=\"w\" name=\"addbbcode16\" value=\"URL\" style=\"text-decoration: underline; width: 40px\" onclick=\"bbstyle(16)\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_W_HELP");
            echo "\" />
\t";
        }
        // line 52
        echo "\t";
        if ((isset($context["S_BBCODE_FLASH"]) ? $context["S_BBCODE_FLASH"] : null)) {
            // line 53
            echo "\t\t<input type=\"button\" class=\"button2\" accesskey=\"d\" name=\"addbbcode18\" value=\"Flash\" onclick=\"bbstyle(18)\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_D_HELP");
            echo "\" />
\t";
        }
        // line 55
        echo "\t<select name=\"addbbcode20\" onchange=\"bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("BBCODE_F_HELP");
        echo "\">
\t\t<option value=\"50\">";
        // line 56
        echo $this->env->getExtension('phpbb')->lang("FONT_TINY");
        echo "</option>
\t\t<option value=\"85\">";
        // line 57
        echo $this->env->getExtension('phpbb')->lang("FONT_SMALL");
        echo "</option>
\t\t<option value=\"100\" selected=\"selected\">";
        // line 58
        echo $this->env->getExtension('phpbb')->lang("FONT_NORMAL");
        echo "</option>
\t\t";
        // line 59
        if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 150))) {
            // line 60
            echo "\t\t<option value=\"150\">";
            echo $this->env->getExtension('phpbb')->lang("FONT_LARGE");
            echo "</option>
\t\t";
            // line 61
            if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 200))) {
                // line 62
                echo "\t\t<option value=\"200\">";
                echo $this->env->getExtension('phpbb')->lang("FONT_HUGE");
                echo "</option>
\t\t";
            }
            // line 64
            echo "\t\t";
        }
        // line 65
        echo "\t</select>
\t";
        // line 66
        // line 67
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            // line 68
            echo "\t<input type=\"button\" class=\"button2\" name=\"addbbcode";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
            echo "\" value=\"";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_TAG", array());
            echo "\" onclick=\"bbstyle(";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
            echo ")\" title=\"";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_HELPLINE", array());
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "</div>
";
        // line 71
    }

    public function getTemplateName()
    {
        return "acp_posting_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 71,  260 => 70,  245 => 68,  240 => 67,  239 => 66,  236 => 65,  233 => 64,  227 => 62,  225 => 61,  220 => 60,  218 => 59,  214 => 58,  210 => 57,  206 => 56,  201 => 55,  195 => 53,  192 => 52,  186 => 50,  183 => 49,  177 => 47,  175 => 46,  171 => 45,  167 => 44,  163 => 43,  158 => 42,  152 => 40,  150 => 39,  146 => 38,  142 => 37,  138 => 36,  135 => 35,  134 => 34,  131 => 33,  120 => 32,  113 => 27,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  45 => 11,  41 => 10,  26 => 6,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/* // <![CDATA[*/
/* */
/* 	// Define the bbCode tags*/
/* 	var bbcode = new Array();*/
/* 	var bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'<!-- BEGIN custom_tags -->, {custom_tags.BBCODE_NAME}<!-- END custom_tags -->);*/
/* */
/* 	// Helpline messages*/
/* 	var help_line = {*/
/* 		b: '{LA_BBCODE_B_HELP}',*/
/* 		i: '{LA_BBCODE_I_HELP}',*/
/* 		u: '{LA_BBCODE_U_HELP}',*/
/* 		q: '{LA_BBCODE_Q_HELP}',*/
/* 		c: '{LA_BBCODE_C_HELP}',*/
/* 		l: '{LA_BBCODE_L_HELP}',*/
/* 		o: '{LA_BBCODE_O_HELP}',*/
/* 		p: '{LA_BBCODE_P_HELP}',*/
/* 		w: '{LA_BBCODE_W_HELP}',*/
/* 		a: '{LA_BBCODE_A_HELP}',*/
/* 		s: '{LA_BBCODE_S_HELP}',*/
/* 		f: '{LA_BBCODE_F_HELP}',*/
/* 		y: '{LA_BBCODE_Y_HELP}',*/
/* 		d: '{LA_BBCODE_D_HELP}'*/
/* 		<!-- BEGIN custom_tags -->*/
/* 			,cb_{custom_tags.BBCODE_ID}{L_COLON} '{custom_tags.A_BBCODE_HELPLINE}'*/
/* 		<!-- END custom_tags -->*/
/* 	}*/
/* */
/* // ]]>*/
/* </script>*/
/* */
/* <!-- INCLUDEJS {T_ASSETS_PATH}/javascript/editor.js -->*/
/* */
/* <!-- EVENT acp_posting_buttons_before -->*/
/* <div id="format-buttons">*/
/* 	<input type="button" class="button2" accesskey="b" name="addbbcode0" value=" B " style="font-weight:bold; width: 30px" onclick="bbstyle(0)" title="{L_BBCODE_B_HELP}" />*/
/* 	<input type="button" class="button2" accesskey="i" name="addbbcode2" value=" i " style="font-style:italic; width: 30px" onclick="bbstyle(2)" title="{L_BBCODE_I_HELP}" />*/
/* 	<input type="button" class="button2" accesskey="u" name="addbbcode4" value=" u " style="text-decoration: underline; width: 30px" onclick="bbstyle(4)" title="{L_BBCODE_U_HELP}" />*/
/* 	<!-- IF S_BBCODE_QUOTE -->*/
/* 		<input type="button" class="button2" accesskey="q" name="addbbcode6" value="Quote" style="width: 50px" onclick="bbstyle(6)" title="{L_BBCODE_Q_HELP}" />*/
/* 	<!-- ENDIF -->*/
/* 	<input type="button" class="button2" accesskey="c" name="addbbcode8" value="Code" style="width: 40px" onclick="bbstyle(8)" title="{L_BBCODE_C_HELP}" />*/
/* 	<input type="button" class="button2" accesskey="l" name="addbbcode10" value="List" style="width: 40px" onclick="bbstyle(10)" title="{L_BBCODE_L_HELP}" />*/
/* 	<input type="button" class="button2" accesskey="o" name="addbbcode12" value="List=" style="width: 40px" onclick="bbstyle(12)" title="{L_BBCODE_O_HELP}" />*/
/* 	<input type="button" class="button2" accesskey="y" name="addlistitem" value="[*]" style="width: 40px" onclick="bbstyle(-1)" title="{L_BBCODE_LISTITEM_HELP}" />*/
/* 	<!-- IF S_BBCODE_IMG -->*/
/* 		<input type="button" class="button2" accesskey="p" name="addbbcode14" value="Img" style="width: 40px" onclick="bbstyle(14)" title="{L_BBCODE_P_HELP}" />*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_LINKS_ALLOWED -->*/
/* 		<input type="button" class="button2" accesskey="w" name="addbbcode16" value="URL" style="text-decoration: underline; width: 40px" onclick="bbstyle(16)" title="{L_BBCODE_W_HELP}" />*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_BBCODE_FLASH -->*/
/* 		<input type="button" class="button2" accesskey="d" name="addbbcode18" value="Flash" onclick="bbstyle(18)" title="{L_BBCODE_D_HELP}" />*/
/* 	<!-- ENDIF -->*/
/* 	<select name="addbbcode20" onchange="bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;" title="{L_BBCODE_F_HELP}">*/
/* 		<option value="50">{L_FONT_TINY}</option>*/
/* 		<option value="85">{L_FONT_SMALL}</option>*/
/* 		<option value="100" selected="selected">{L_FONT_NORMAL}</option>*/
/* 		<!-- IF not MAX_FONT_SIZE or MAX_FONT_SIZE >= 150 -->*/
/* 		<option value="150">{L_FONT_LARGE}</option>*/
/* 		<!-- IF not MAX_FONT_SIZE or MAX_FONT_SIZE >= 200 -->*/
/* 		<option value="200">{L_FONT_HUGE}</option>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 	</select>*/
/* 	<!-- EVENT acp_posting_buttons_custom_tags_before -->*/
/* 	<!-- BEGIN custom_tags -->*/
/* 	<input type="button" class="button2" name="addbbcode{custom_tags.BBCODE_ID}" value="{custom_tags.BBCODE_TAG}" onclick="bbstyle({custom_tags.BBCODE_ID})" title="{custom_tags.BBCODE_HELPLINE}" />*/
/* 	<!-- END custom_tags -->*/
/* </div>*/
/* <!-- EVENT acp_posting_buttons_after -->*/
/* */
