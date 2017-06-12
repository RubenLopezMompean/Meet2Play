<?php

/* acp_icons.html */
class __TwigTemplate_5de96ce15d6b50a8b7a1495aa7b66223c328f082a4e3f98b33f382985a8399e3 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_icons.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if ((isset($context["S_EDIT"]) ? $context["S_EDIT"] : null)) {
            // line 6
            echo "
\t<script type=\"text/javascript\" defer=\"defer\">
\t// <![CDATA[
\t";
            // line 9
            if ((isset($context["S_ADD_CODE"]) ? $context["S_ADD_CODE"] : null)) {
                // line 10
                echo "
\t\t\tvar smiley = Array();
\t\t\t";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smile", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["smile"]) {
                    // line 13
                    echo "\t\t\t\tsmiley['";
                    echo $this->getAttribute($context["smile"], "SMILEY_URL", array());
                    echo "'] = Array();
\t\t\t\tsmiley['";
                    // line 14
                    echo $this->getAttribute($context["smile"], "SMILEY_URL", array());
                    echo "']['code'] = '";
                    echo $this->getAttribute($context["smile"], "CODE", array());
                    echo "';
\t\t\t\tsmiley['";
                    // line 15
                    echo $this->getAttribute($context["smile"], "SMILEY_URL", array());
                    echo "']['emotion'] = '";
                    echo $this->getAttribute($context["smile"], "EMOTION", array());
                    echo "';
\t\t\t\tsmiley['";
                    // line 16
                    echo $this->getAttribute($context["smile"], "SMILEY_URL", array());
                    echo "']['width'] = ";
                    echo $this->getAttribute($context["smile"], "WIDTH", array());
                    echo ";
\t\t\t\tsmiley['";
                    // line 17
                    echo $this->getAttribute($context["smile"], "SMILEY_URL", array());
                    echo "']['height'] = ";
                    echo $this->getAttribute($context["smile"], "HEIGHT", array());
                    echo ";
\t\t\t\tsmiley['";
                    // line 18
                    echo $this->getAttribute($context["smile"], "SMILEY_URL", array());
                    echo "']['order'] = ";
                    echo $this->getAttribute($context["smile"], "ORDER", array());
                    echo ";
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smile'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "
\t\t\tfunction update_image(newimage)
\t\t\t{
\t\t\t\tvar use_element = smiley[newimage];

\t\t\t\tdocument.getElementById('add_image_src').src = '";
                // line 25
                echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
                echo (isset($context["IMG_PATH"]) ? $context["IMG_PATH"] : null);
                echo "/' + encodeURI(newimage);
\t\t\t\tdocument.getElementById('add_code').value = use_element['code'];
\t\t\t\tdocument.getElementById('add_emotion').value = use_element['emotion'];
\t\t\t\tdocument.getElementById('add_width').value = use_element['width'];
\t\t\t\tdocument.getElementById('add_height').value = use_element['height'];

\t\t\t\telement = document.getElementById('add_order');
\t\t\t\tfor (var i = 0; i < element.length; i++)
\t\t\t\t{
\t\t\t\t\tif (element.options[i].value == use_element['order'])
\t\t\t\t\t{
\t\t\t\t\t\tdocument.getElementById('add_order').options.selectedIndex = i;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t";
            }
            // line 42
            echo "

\tfunction toggle_select(icon, display, select)
\t{
\t\tvar disp = document.getElementById('order_disp_' + select);
\t\tvar nodisp = document.getElementById('order_no_disp_' + select);
\t\tdisp.disabled = !display;
\t\tnodisp.disabled = display;
\t\tif (display)
\t\t{
\t\t\tdocument.getElementById('order_' + select).selectedIndex = 0;
\t\t\tnodisp.className = 'disabled-options';
\t\t\tdisp.className = '';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById('order_' + select).selectedIndex = ";
            // line 58
            echo (isset($context["S_ORDER_LIST_DISPLAY_COUNT"]) ? $context["S_ORDER_LIST_DISPLAY_COUNT"] : null);
            echo ";
\t\t\tdisp.className = 'disabled-options';
\t\t\tnodisp.className = '';
\t\t}
\t}
\t// ]]>
\t</script>

\t<a href=\"";
            // line 66
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 68
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</h1>

\t<p>";
            // line 70
            echo $this->env->getExtension('phpbb')->lang("EXPLAIN");
            echo "</p>

\t<form id=\"acp_icons\" method=\"post\" action=\"";
            // line 72
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 75
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</legend>

\t<table class=\"table1 zebra-table\" id=\"smilies\">
\t<thead>
\t<tr>
\t\t<th colspan=\"";
            // line 80
            echo (isset($context["COLSPAN"]) ? $context["COLSPAN"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("CONFIG");
            echo "</th>
\t</tr>
\t";
            // line 82
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "items", array())) || (isset($context["S_ADD_CODE"]) ? $context["S_ADD_CODE"] : null))) {
                // line 83
                echo "\t<tr class=\"row3\">
\t\t<td>";
                // line 84
                echo $this->env->getExtension('phpbb')->lang("URL");
                echo "</td>
\t\t<td>";
                // line 85
                echo $this->env->getExtension('phpbb')->lang("LOCATION");
                echo "</td>
\t";
                // line 86
                if ((isset($context["S_SMILIES"]) ? $context["S_SMILIES"] : null)) {
                    // line 87
                    echo "\t\t<td>";
                    echo $this->env->getExtension('phpbb')->lang("SMILIES_CODE");
                    echo "</td>
\t\t<td>";
                    // line 88
                    echo $this->env->getExtension('phpbb')->lang("SMILIES_EMOTION");
                    echo "</td>
\t";
                }
                // line 90
                echo "\t\t<td>";
                echo $this->env->getExtension('phpbb')->lang("WIDTH");
                echo "</td>
\t\t<td>";
                // line 91
                echo $this->env->getExtension('phpbb')->lang("HEIGHT");
                echo "</td>
\t";
                // line 92
                if ( !(isset($context["S_SMILIES"]) ? $context["S_SMILIES"] : null)) {
                    // line 93
                    echo "\t\t<td>";
                    echo $this->env->getExtension('phpbb')->lang("ALT_TEXT");
                    echo "</td>
\t";
                }
                // line 95
                echo "\t\t<td>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_ON_POSTING");
                echo "</td>
\t";
                // line 96
                if (((isset($context["ID"]) ? $context["ID"] : null) || (isset($context["S_ADD"]) ? $context["S_ADD"] : null))) {
                    // line 97
                    echo "\t\t<td>";
                    echo $this->env->getExtension('phpbb')->lang("ORDER");
                    echo "</td>
\t";
                }
                // line 99
                echo "\t";
                if ((isset($context["S_ADD"]) ? $context["S_ADD"] : null)) {
                    // line 100
                    echo "\t\t<td>";
                    echo $this->env->getExtension('phpbb')->lang("ADD");
                    echo " <a href=\"#\" onclick=\"marklist('smilies', 'add_img', true); return false;\">(";
                    echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                    echo ")</a></td>
\t";
                }
                // line 102
                echo "\t</tr>
\t</thead>
\t<tbody>
\t";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
                    // line 106
                    echo "\t\t<tr>

\t\t<td style=\"text-align: center;\"><img src=\"";
                    // line 108
                    echo $this->getAttribute($context["items"], "IMG_SRC", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["items"], "TEXT_ALT", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["items"], "TEXT_ALT", array());
                    echo "\" /><input type=\"hidden\" name=\"image[";
                    echo $this->getAttribute($context["items"], "IMG", array());
                    echo "]\" value=\"1\" /></td>
\t\t<td style=\"vertical-align: top;\">[";
                    // line 109
                    echo $this->getAttribute($context["items"], "IMG", array());
                    echo "]</td>
\t\t";
                    // line 110
                    if ((isset($context["S_SMILIES"]) ? $context["S_SMILIES"] : null)) {
                        // line 111
                        echo "\t\t\t<td><input class=\"text post\" type=\"text\" name=\"code[";
                        echo $this->getAttribute($context["items"], "IMG", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["items"], "CODE", array());
                        echo "\" size=\"10\" maxlength=\"50\" /></td>
\t\t\t<td><input class=\"text post\" type=\"text\" name=\"emotion[";
                        // line 112
                        echo $this->getAttribute($context["items"], "IMG", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["items"], "EMOTION", array());
                        echo "\" size=\"10\" maxlength=\"50\" /></td>
\t\t";
                    }
                    // line 114
                    echo "\t\t<td><input class=\"text post\" type=\"number\" min=\"0\" max=\"999\" name=\"width[";
                    echo $this->getAttribute($context["items"], "IMG", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["items"], "WIDTH", array());
                    echo "\" /></td>
\t\t<td><input class=\"text post\" type=\"number\" min=\"0\" max=\"999\" name=\"height[";
                    // line 115
                    echo $this->getAttribute($context["items"], "IMG", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["items"], "HEIGHT", array());
                    echo "\" /></td>
\t\t";
                    // line 116
                    if ( !(isset($context["S_SMILIES"]) ? $context["S_SMILIES"] : null)) {
                        // line 117
                        echo "\t\t\t<td><input class=\"text post\" type=\"text\" name=\"alt[";
                        echo $this->getAttribute($context["items"], "IMG", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["items"], "ALT", array());
                        echo "\" size=\"10\" maxlength=\"50\" /></td>
\t\t";
                    }
                    // line 119
                    echo "\t\t<td>
\t\t\t<input type=\"checkbox\" class=\"radio\" name=\"display_on_posting[";
                    // line 120
                    echo $this->getAttribute($context["items"], "IMG", array());
                    echo "]\"";
                    echo $this->getAttribute($context["items"], "POSTING_CHECKED", array());
                    echo " onclick=\"toggle_select('";
                    echo $this->getAttribute($context["items"], "A_IMG", array());
                    echo "', this.checked, '";
                    echo $this->getAttribute($context["items"], "S_ROW_COUNT", array());
                    echo "');\"/>
\t\t\t";
                    // line 121
                    if ($this->getAttribute($context["items"], "S_ID", array())) {
                        // line 122
                        echo "\t\t\t\t<input type=\"hidden\" name=\"id[";
                        echo $this->getAttribute($context["items"], "IMG", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["items"], "ID", array());
                        echo "\" />
\t\t\t";
                    }
                    // line 124
                    echo "\t\t</td>
\t\t";
                    // line 125
                    if (((isset($context["ID"]) ? $context["ID"] : null) || (isset($context["S_ADD"]) ? $context["S_ADD"] : null))) {
                        // line 126
                        echo "\t\t\t<td><select id=\"order_";
                        echo $this->getAttribute($context["items"], "S_ROW_COUNT", array());
                        echo "\" name=\"order[";
                        echo $this->getAttribute($context["items"], "IMG", array());
                        echo "]\">
\t\t\t\t<optgroup id=\"order_disp_";
                        // line 127
                        echo $this->getAttribute($context["items"], "S_ROW_COUNT", array());
                        echo "\" label=\"";
                        echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTING");
                        echo "\" ";
                        if ( !$this->getAttribute($context["items"], "POSTING_CHECKED", array())) {
                            echo "disabled=\"disabled\" class=\"disabled-options\" ";
                        }
                        echo ">";
                        echo (isset($context["S_ORDER_LIST_DISPLAY"]) ? $context["S_ORDER_LIST_DISPLAY"] : null);
                        echo "</optgroup>
\t\t\t\t<optgroup id=\"order_no_disp_";
                        // line 128
                        echo $this->getAttribute($context["items"], "S_ROW_COUNT", array());
                        echo "\" label=\"";
                        echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTING_NO");
                        echo "\" ";
                        if ($this->getAttribute($context["items"], "POSTING_CHECKED", array())) {
                            echo "disabled=\"disabled\" class=\"disabled-options\" ";
                        }
                        echo ">";
                        echo (isset($context["S_ORDER_LIST_UNDISPLAY"]) ? $context["S_ORDER_LIST_UNDISPLAY"] : null);
                        echo "</optgroup>
\t\t\t</select></td>
\t\t";
                    }
                    // line 131
                    echo "\t\t";
                    if ((isset($context["S_ADD"]) ? $context["S_ADD"] : null)) {
                        // line 132
                        echo "\t\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"add_img[";
                        echo $this->getAttribute($context["items"], "IMG", array());
                        echo "]\" value=\"1\" /></td>
\t\t";
                    }
                    // line 134
                    echo "\t\t</tr>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                echo "\t";
                if ((isset($context["S_ADD_CODE"]) ? $context["S_ADD_CODE"] : null)) {
                    // line 137
                    echo "\t<tr>
\t\t<th colspan=\"";
                    // line 138
                    echo (isset($context["COLSPAN"]) ? $context["COLSPAN"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("ADD_SMILEY_CODE");
                    echo "</th>
\t</tr>
\t<tr class=\"row1\">
\t\t<td style=\"text-align: center;\"><select name=\"add_image\" id=\"add_image\" onchange=\"update_image(this.options[selectedIndex].value);\">";
                    // line 141
                    echo (isset($context["S_IMG_OPTIONS"]) ? $context["S_IMG_OPTIONS"] : null);
                    echo "</select></td>
\t\t<td style=\"vertical-align: top;\"><img src=\"";
                    // line 142
                    echo (isset($context["IMG_SRC"]) ? $context["IMG_SRC"] : null);
                    echo "\" id=\"add_image_src\" alt=\"\" title=\"\" /></td>
\t\t<td><input class=\"text post\" type=\"text\" name=\"add_code\" id=\"add_code\" value=\"";
                    // line 143
                    echo (isset($context["CODE"]) ? $context["CODE"] : null);
                    echo "\" size=\"10\" maxlength=\"50\" /></td>
\t\t<td><input class=\"text post\" type=\"text\" name=\"add_emotion\" id=\"add_emotion\" value=\"";
                    // line 144
                    echo (isset($context["EMOTION"]) ? $context["EMOTION"] : null);
                    echo "\" size=\"10\" maxlength=\"50\" /></td>
\t\t<td><input class=\"text post\" type=\"number\" min=\"0\" max=\"999\" name=\"add_width\" id=\"add_width\" value=\"";
                    // line 145
                    echo (isset($context["WIDTH"]) ? $context["WIDTH"] : null);
                    echo "\" /></td>
\t\t<td><input class=\"text post\" type=\"number\" min=\"0\" max=\"999\" name=\"add_height\" id=\"add_height\" value=\"";
                    // line 146
                    echo (isset($context["HEIGHT"]) ? $context["HEIGHT"] : null);
                    echo "\" /></td>
\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"add_display_on_posting\" checked=\"checked\" onclick=\"toggle_select('add', this.checked, 'add_order');\"/></td>
 \t\t<td><select id=\"order_add_order\" name=\"add_order\">
\t\t\t\t<optgroup id=\"order_disp_add_order\" label=\"";
                    // line 149
                    echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTING");
                    echo "\">";
                    echo (isset($context["S_ADD_ORDER_LIST_DISPLAY"]) ? $context["S_ADD_ORDER_LIST_DISPLAY"] : null);
                    echo "</optgroup>
\t\t\t\t<optgroup id=\"order_no_disp_add_order\" label=\"";
                    // line 150
                    echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTING_NO");
                    echo "\" disabled=\"disabled\" class=\"disabled-options\" >";
                    echo (isset($context["S_ADD_ORDER_LIST_UNDISPLAY"]) ? $context["S_ADD_ORDER_LIST_UNDISPLAY"] : null);
                    echo "</optgroup>
\t\t</select></td>
\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"add_additional_code\" value=\"1\" /></td>
\t</tr>
\t";
                }
                // line 155
                echo "\t";
            } else {
                // line 156
                echo "\t</thead>
\t<tbody>
\t<tr class=\"row3\">
\t\t<td colspan=\"";
                // line 159
                echo (isset($context["COLSPAN"]) ? $context["COLSPAN"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("NO_ICONS");
                echo "</td>
\t</tr>
\t";
            }
            // line 162
            echo "\t</tbody>
\t</table>

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 166
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 167
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t</p>
\t";
            // line 169
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif (        // line 173
(isset($context["S_CHOOSE_PAK"]) ? $context["S_CHOOSE_PAK"] : null)) {
            // line 174
            echo "
\t<a href=\"";
            // line 175
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 177
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</h1>

\t<p>";
            // line 179
            echo $this->env->getExtension('phpbb')->lang("EXPLAIN");
            echo "</p>

\t<form id=\"acp_icons\" method=\"post\" action=\"";
            // line 181
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 184
            echo $this->env->getExtension('phpbb')->lang("IMPORT");
            echo "</legend>

\t";
            // line 186
            if ( !(isset($context["S_PAK_OPTIONS"]) ? $context["S_PAK_OPTIONS"] : null)) {
                // line 187
                echo "\t\t<p>";
                echo $this->env->getExtension('phpbb')->lang("NO_PAK_OPTIONS");
                echo "</p>

\t";
            } else {
                // line 190
                echo "\t\t<dl>
\t\t\t<dt><label for=\"pak\">";
                // line 191
                echo $this->env->getExtension('phpbb')->lang("SELECT_PACKAGE");
                echo "</label></dt>
\t\t\t<dd><select id=\"pak\" name=\"pak\">";
                // line 192
                echo (isset($context["S_PAK_OPTIONS"]) ? $context["S_PAK_OPTIONS"] : null);
                echo "</select></dd>
\t\t</dl>
\t\t\t<dt><label for=\"current\">";
                // line 194
                echo $this->env->getExtension('phpbb')->lang("CURRENT");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("CURRENT_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"current\" name=\"current\" value=\"keep\" checked=\"checked\" /> ";
                // line 195
                echo $this->env->getExtension('phpbb')->lang("KEEP_ALL");
                echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"current\" value=\"replace\" /> ";
                // line 196
                echo $this->env->getExtension('phpbb')->lang("REPLACE_MATCHES");
                echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"current\" value=\"delete\" /> ";
                // line 197
                echo $this->env->getExtension('phpbb')->lang("DELETE_ALL");
                echo "</label></dd>
\t\t</dl>

\t<p class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" id=\"import\" name=\"import\" value=\"";
                // line 201
                echo $this->env->getExtension('phpbb')->lang("IMPORT_SUBMIT");
                echo "\" />
\t</p>
\t";
            }
            // line 204
            echo "\t";
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        } else {
            // line 209
            echo "
\t<h1>";
            // line 210
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</h1>

\t<p>";
            // line 212
            echo $this->env->getExtension('phpbb')->lang("EXPLAIN");
            echo "</p>

\t";
            // line 214
            if ((isset($context["NOTICE"]) ? $context["NOTICE"] : null)) {
                // line 215
                echo "\t\t<div class=\"successbox\">
\t\t\t<h3>";
                // line 216
                echo $this->env->getExtension('phpbb')->lang("NOTIFY");
                echo "</h3>
\t\t\t<p>";
                // line 217
                echo (isset($context["NOTICE"]) ? $context["NOTICE"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 220
            echo "
\t<form id=\"acp_icons\" method=\"post\" action=\"";
            // line 221
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<div style=\"text-align: right;\"><a href=\"";
            // line 223
            echo (isset($context["U_IMPORT"]) ? $context["U_IMPORT"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("IMPORT");
            echo "</a> | <a href=\"";
            echo (isset($context["U_EXPORT"]) ? $context["U_EXPORT"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("EXPORT");
            echo "</a></div>

\t<fieldset class=\"tabulated\">

\t<legend>";
            // line 227
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</legend>

\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 232
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</th>
\t\t";
            // line 233
            if ((isset($context["S_SMILIES"]) ? $context["S_SMILIES"] : null)) {
                // line 234
                echo "\t\t<th>";
                echo $this->env->getExtension('phpbb')->lang("CODE");
                echo "</th>
\t\t<th>";
                // line 235
                echo $this->env->getExtension('phpbb')->lang("EMOTION");
                echo "</th>
\t\t";
            }
            // line 237
            echo "\t\t<th>";
            echo $this->env->getExtension('phpbb')->lang("OPTIONS");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "items", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
                // line 242
                echo "\t\t";
                if ($this->getAttribute($context["items"], "S_SPACER", array())) {
                    // line 243
                    echo "\t\t\t<tr>
\t\t\t\t<td class=\"row3\" colspan=\"";
                    // line 244
                    echo (isset($context["COLSPAN"]) ? $context["COLSPAN"] : null);
                    echo "\" style=\"text-align: center;\">";
                    echo $this->env->getExtension('phpbb')->lang("NOT_DISPLAYED");
                    echo "</td>
\t\t\t</tr>
\t\t";
                }
                // line 247
                echo "\t\t<tr>
\t\t\t<td style=\"width: 85%; text-align: center;\"><img src=\"";
                // line 248
                echo $this->getAttribute($context["items"], "IMG_SRC", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["items"], "WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["items"], "HEIGHT", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["items"], "ALT_TEXT", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["items"], "ALT_TEXT", array());
                echo "\" /></td>
\t\t\t";
                // line 249
                if ((isset($context["S_SMILIES"]) ? $context["S_SMILIES"] : null)) {
                    // line 250
                    echo "\t\t\t\t<td style=\"text-align: center;\">";
                    echo $this->getAttribute($context["items"], "CODE", array());
                    echo "</td>
\t\t\t\t<td style=\"text-align: center;\">";
                    // line 251
                    echo $this->getAttribute($context["items"], "EMOTION", array());
                    echo "</td>
\t\t\t";
                }
                // line 253
                echo "\t\t\t<td class=\"actions\" style=\"text-align: right;\">
\t\t\t\t<span class=\"up-disabled\" style=\"display:none;\">";
                // line 254
                echo (isset($context["ICON_MOVE_UP_DISABLED"]) ? $context["ICON_MOVE_UP_DISABLED"] : null);
                echo "</span>
\t\t\t\t<span class=\"up\"><a href=\"";
                // line 255
                echo $this->getAttribute($context["items"], "U_MOVE_UP", array());
                echo "\" data-ajax=\"row_up\">";
                echo (isset($context["ICON_MOVE_UP"]) ? $context["ICON_MOVE_UP"] : null);
                echo "</a></span>
\t\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
                // line 256
                echo (isset($context["ICON_MOVE_DOWN_DISABLED"]) ? $context["ICON_MOVE_DOWN_DISABLED"] : null);
                echo "</span>
\t\t\t\t<span class=\"down\"><a href=\"";
                // line 257
                echo $this->getAttribute($context["items"], "U_MOVE_DOWN", array());
                echo "\" data-ajax=\"row_down\">";
                echo (isset($context["ICON_MOVE_DOWN"]) ? $context["ICON_MOVE_DOWN"] : null);
                echo "</a></span>
\t\t\t\t<a href=\"";
                // line 258
                echo $this->getAttribute($context["items"], "U_EDIT", array());
                echo "\">";
                echo (isset($context["ICON_EDIT"]) ? $context["ICON_EDIT"] : null);
                echo "</a> <a href=\"";
                echo $this->getAttribute($context["items"], "U_DELETE", array());
                echo "\" data-ajax=\"row_delete\">";
                echo (isset($context["ICON_DELETE"]) ? $context["ICON_DELETE"] : null);
                echo "</a>
\t\t\t</td>
\t\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 262
                echo "\t\t<tr class=\"row3\">
\t\t\t<td colspan=\"";
                // line 263
                echo (isset($context["COLSPAN"]) ? $context["COLSPAN"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("ACP_NO_ITEMS");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 266
            echo "\t</tbody>
\t</table>
\t<div class=\"pagination\">
\t";
            // line 269
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 270
                echo "\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "acp_icons.html", 270)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 271
                echo "\t";
            }
            // line 272
            echo "\t</div>
\t<p class=\"quick\">
\t\t<input class=\"button2\" name=\"add\" type=\"submit\" value=\"";
            // line 274
            echo $this->env->getExtension('phpbb')->lang("ICON_ADD");
            echo "\" />&nbsp; &nbsp;<input class=\"button2\" type=\"submit\" name=\"edit\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("ICON_EDIT");
            echo "\" />
\t</p>
\t";
            // line 276
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        }
        // line 281
        echo "
";
        // line 282
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_icons.html", 282)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_icons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  808 => 282,  805 => 281,  797 => 276,  790 => 274,  786 => 272,  783 => 271,  770 => 270,  768 => 269,  763 => 266,  752 => 263,  749 => 262,  734 => 258,  728 => 257,  724 => 256,  718 => 255,  714 => 254,  711 => 253,  706 => 251,  701 => 250,  699 => 249,  687 => 248,  684 => 247,  676 => 244,  673 => 243,  670 => 242,  665 => 241,  657 => 237,  652 => 235,  647 => 234,  645 => 233,  641 => 232,  633 => 227,  620 => 223,  615 => 221,  612 => 220,  606 => 217,  602 => 216,  599 => 215,  597 => 214,  592 => 212,  587 => 210,  584 => 209,  575 => 204,  569 => 201,  562 => 197,  558 => 196,  554 => 195,  548 => 194,  543 => 192,  539 => 191,  536 => 190,  529 => 187,  527 => 186,  522 => 184,  516 => 181,  511 => 179,  506 => 177,  497 => 175,  494 => 174,  492 => 173,  485 => 169,  480 => 167,  476 => 166,  470 => 162,  462 => 159,  457 => 156,  454 => 155,  444 => 150,  438 => 149,  432 => 146,  428 => 145,  424 => 144,  420 => 143,  416 => 142,  412 => 141,  404 => 138,  401 => 137,  398 => 136,  391 => 134,  385 => 132,  382 => 131,  368 => 128,  356 => 127,  349 => 126,  347 => 125,  344 => 124,  336 => 122,  334 => 121,  324 => 120,  321 => 119,  313 => 117,  311 => 116,  305 => 115,  298 => 114,  291 => 112,  284 => 111,  282 => 110,  278 => 109,  268 => 108,  264 => 106,  260 => 105,  255 => 102,  247 => 100,  244 => 99,  238 => 97,  236 => 96,  231 => 95,  225 => 93,  223 => 92,  219 => 91,  214 => 90,  209 => 88,  204 => 87,  202 => 86,  198 => 85,  194 => 84,  191 => 83,  189 => 82,  182 => 80,  174 => 75,  168 => 72,  163 => 70,  158 => 68,  149 => 66,  138 => 58,  120 => 42,  99 => 25,  92 => 20,  82 => 18,  76 => 17,  70 => 16,  64 => 15,  58 => 14,  53 => 13,  49 => 12,  45 => 10,  43 => 9,  38 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* <!-- IF S_EDIT -->*/
/* */
/* 	<script type="text/javascript" defer="defer">*/
/* 	// <![CDATA[*/
/* 	<!-- IF S_ADD_CODE -->*/
/* */
/* 			var smiley = Array();*/
/* 			<!-- BEGIN smile -->*/
/* 				smiley['{smile.SMILEY_URL}'] = Array();*/
/* 				smiley['{smile.SMILEY_URL}']['code'] = '{smile.CODE}';*/
/* 				smiley['{smile.SMILEY_URL}']['emotion'] = '{smile.EMOTION}';*/
/* 				smiley['{smile.SMILEY_URL}']['width'] = {smile.WIDTH};*/
/* 				smiley['{smile.SMILEY_URL}']['height'] = {smile.HEIGHT};*/
/* 				smiley['{smile.SMILEY_URL}']['order'] = {smile.ORDER};*/
/* 			<!-- END smile -->*/
/* */
/* 			function update_image(newimage)*/
/* 			{*/
/* 				var use_element = smiley[newimage];*/
/* */
/* 				document.getElementById('add_image_src').src = '{ROOT_PATH}{IMG_PATH}/' + encodeURI(newimage);*/
/* 				document.getElementById('add_code').value = use_element['code'];*/
/* 				document.getElementById('add_emotion').value = use_element['emotion'];*/
/* 				document.getElementById('add_width').value = use_element['width'];*/
/* 				document.getElementById('add_height').value = use_element['height'];*/
/* */
/* 				element = document.getElementById('add_order');*/
/* 				for (var i = 0; i < element.length; i++)*/
/* 				{*/
/* 					if (element.options[i].value == use_element['order'])*/
/* 					{*/
/* 						document.getElementById('add_order').options.selectedIndex = i;*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 	<!-- ENDIF -->*/
/* */
/* */
/* 	function toggle_select(icon, display, select)*/
/* 	{*/
/* 		var disp = document.getElementById('order_disp_' + select);*/
/* 		var nodisp = document.getElementById('order_no_disp_' + select);*/
/* 		disp.disabled = !display;*/
/* 		nodisp.disabled = display;*/
/* 		if (display)*/
/* 		{*/
/* 			document.getElementById('order_' + select).selectedIndex = 0;*/
/* 			nodisp.className = 'disabled-options';*/
/* 			disp.className = '';*/
/* 		}*/
/* 		else*/
/* 		{*/
/* 			document.getElementById('order_' + select).selectedIndex = {S_ORDER_LIST_DISPLAY_COUNT};*/
/* 			disp.className = 'disabled-options';*/
/* 			nodisp.className = '';*/
/* 		}*/
/* 	}*/
/* 	// ]]>*/
/* 	</script>*/
/* */
/* 	<a href="{U_BACK}" style="float: {S_CONTENT_FLOW_END};">&laquo; {L_BACK}</a>*/
/* */
/* 	<h1>{L_TITLE}</h1>*/
/* */
/* 	<p>{L_EXPLAIN}</p>*/
/* */
/* 	<form id="acp_icons" method="post" action="{U_ACTION}">*/
/* */
/* 	<fieldset class="tabulated">*/
/* 	<legend>{L_TITLE}</legend>*/
/* */
/* 	<table class="table1 zebra-table" id="smilies">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th colspan="{COLSPAN}">{L_CONFIG}</th>*/
/* 	</tr>*/
/* 	<!-- IF .items or S_ADD_CODE -->*/
/* 	<tr class="row3">*/
/* 		<td>{L_URL}</td>*/
/* 		<td>{L_LOCATION}</td>*/
/* 	<!-- IF S_SMILIES -->*/
/* 		<td>{L_SMILIES_CODE}</td>*/
/* 		<td>{L_SMILIES_EMOTION}</td>*/
/* 	<!-- ENDIF -->*/
/* 		<td>{L_WIDTH}</td>*/
/* 		<td>{L_HEIGHT}</td>*/
/* 	<!-- IF not S_SMILIES -->*/
/* 		<td>{L_ALT_TEXT}</td>*/
/* 	<!-- ENDIF -->*/
/* 		<td>{L_DISPLAY_ON_POSTING}</td>*/
/* 	<!-- IF ID or S_ADD -->*/
/* 		<td>{L_ORDER}</td>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_ADD -->*/
/* 		<td>{L_ADD} <a href="#" onclick="marklist('smilies', 'add_img', true); return false;">({L_MARK_ALL})</a></td>*/
/* 	<!-- ENDIF -->*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<!-- BEGIN items -->*/
/* 		<tr>*/
/* */
/* 		<td style="text-align: center;"><img src="{items.IMG_SRC}" alt="{items.TEXT_ALT}" title="{items.TEXT_ALT}" /><input type="hidden" name="image[{items.IMG}]" value="1" /></td>*/
/* 		<td style="vertical-align: top;">[{items.IMG}]</td>*/
/* 		<!-- IF S_SMILIES -->*/
/* 			<td><input class="text post" type="text" name="code[{items.IMG}]" value="{items.CODE}" size="10" maxlength="50" /></td>*/
/* 			<td><input class="text post" type="text" name="emotion[{items.IMG}]" value="{items.EMOTION}" size="10" maxlength="50" /></td>*/
/* 		<!-- ENDIF -->*/
/* 		<td><input class="text post" type="number" min="0" max="999" name="width[{items.IMG}]" value="{items.WIDTH}" /></td>*/
/* 		<td><input class="text post" type="number" min="0" max="999" name="height[{items.IMG}]" value="{items.HEIGHT}" /></td>*/
/* 		<!-- IF not S_SMILIES -->*/
/* 			<td><input class="text post" type="text" name="alt[{items.IMG}]" value="{items.ALT}" size="10" maxlength="50" /></td>*/
/* 		<!-- ENDIF -->*/
/* 		<td>*/
/* 			<input type="checkbox" class="radio" name="display_on_posting[{items.IMG}]"{items.POSTING_CHECKED} onclick="toggle_select('{items.A_IMG}', this.checked, '{items.S_ROW_COUNT}');"/>*/
/* 			<!-- IF items.S_ID -->*/
/* 				<input type="hidden" name="id[{items.IMG}]" value="{items.ID}" />*/
/* 			<!-- ENDIF -->*/
/* 		</td>*/
/* 		<!-- IF ID or S_ADD -->*/
/* 			<td><select id="order_{items.S_ROW_COUNT}" name="order[{items.IMG}]">*/
/* 				<optgroup id="order_disp_{items.S_ROW_COUNT}" label="{L_DISPLAY_POSTING}" <!-- IF not items.POSTING_CHECKED -->disabled="disabled" class="disabled-options" <!-- ENDIF -->>{S_ORDER_LIST_DISPLAY}</optgroup>*/
/* 				<optgroup id="order_no_disp_{items.S_ROW_COUNT}" label="{L_DISPLAY_POSTING_NO}" <!-- IF  items.POSTING_CHECKED -->disabled="disabled" class="disabled-options" <!-- ENDIF -->>{S_ORDER_LIST_UNDISPLAY}</optgroup>*/
/* 			</select></td>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_ADD -->*/
/* 			<td><input type="checkbox" class="radio" name="add_img[{items.IMG}]" value="1" /></td>*/
/* 		<!-- ENDIF -->*/
/* 		</tr>*/
/* 	<!-- END items -->*/
/* 	<!-- IF S_ADD_CODE -->*/
/* 	<tr>*/
/* 		<th colspan="{COLSPAN}">{L_ADD_SMILEY_CODE}</th>*/
/* 	</tr>*/
/* 	<tr class="row1">*/
/* 		<td style="text-align: center;"><select name="add_image" id="add_image" onchange="update_image(this.options[selectedIndex].value);">{S_IMG_OPTIONS}</select></td>*/
/* 		<td style="vertical-align: top;"><img src="{IMG_SRC}" id="add_image_src" alt="" title="" /></td>*/
/* 		<td><input class="text post" type="text" name="add_code" id="add_code" value="{CODE}" size="10" maxlength="50" /></td>*/
/* 		<td><input class="text post" type="text" name="add_emotion" id="add_emotion" value="{EMOTION}" size="10" maxlength="50" /></td>*/
/* 		<td><input class="text post" type="number" min="0" max="999" name="add_width" id="add_width" value="{WIDTH}" /></td>*/
/* 		<td><input class="text post" type="number" min="0" max="999" name="add_height" id="add_height" value="{HEIGHT}" /></td>*/
/* 		<td><input type="checkbox" class="radio" name="add_display_on_posting" checked="checked" onclick="toggle_select('add', this.checked, 'add_order');"/></td>*/
/*  		<td><select id="order_add_order" name="add_order">*/
/* 				<optgroup id="order_disp_add_order" label="{L_DISPLAY_POSTING}">{S_ADD_ORDER_LIST_DISPLAY}</optgroup>*/
/* 				<optgroup id="order_no_disp_add_order" label="{L_DISPLAY_POSTING_NO}" disabled="disabled" class="disabled-options" >{S_ADD_ORDER_LIST_UNDISPLAY}</optgroup>*/
/* 		</select></td>*/
/* 		<td><input type="checkbox" class="radio" name="add_additional_code" value="1" /></td>*/
/* 	</tr>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- ELSE -->*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<tr class="row3">*/
/* 		<td colspan="{COLSPAN}">{L_NO_ICONS}</td>*/
/* 	</tr>*/
/* 	<!-- ENDIF -->*/
/* 	</tbody>*/
/* 	</table>*/
/* */
/* 	<p class="submit-buttons">*/
/* 		<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />&nbsp;*/
/* 		<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* 	</p>*/
/* 	{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
/* <!-- ELSEIF S_CHOOSE_PAK -->*/
/* */
/* 	<a href="{U_BACK}" style="float: {S_CONTENT_FLOW_END};">&laquo; {L_BACK}</a>*/
/* */
/* 	<h1>{L_TITLE}</h1>*/
/* */
/* 	<p>{L_EXPLAIN}</p>*/
/* */
/* 	<form id="acp_icons" method="post" action="{U_ACTION}">*/
/* */
/* 	<fieldset>*/
/* 		<legend>{L_IMPORT}</legend>*/
/* */
/* 	<!-- IF not S_PAK_OPTIONS -->*/
/* 		<p>{L_NO_PAK_OPTIONS}</p>*/
/* */
/* 	<!-- ELSE -->*/
/* 		<dl>*/
/* 			<dt><label for="pak">{L_SELECT_PACKAGE}</label></dt>*/
/* 			<dd><select id="pak" name="pak">{S_PAK_OPTIONS}</select></dd>*/
/* 		</dl>*/
/* 			<dt><label for="current">{L_CURRENT}</label><br /><span>{L_CURRENT_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" id="current" name="current" value="keep" checked="checked" /> {L_KEEP_ALL}</label>*/
/* 				<label><input type="radio" class="radio" name="current" value="replace" /> {L_REPLACE_MATCHES}</label>*/
/* 				<label><input type="radio" class="radio" name="current" value="delete" /> {L_DELETE_ALL}</label></dd>*/
/* 		</dl>*/
/* */
/* 	<p class="quick">*/
/* 		<input class="button1" type="submit" id="import" name="import" value="{L_IMPORT_SUBMIT}" />*/
/* 	</p>*/
/* 	<!-- ENDIF -->*/
/* 	{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
/* <!-- ELSE -->*/
/* */
/* 	<h1>{L_TITLE}</h1>*/
/* */
/* 	<p>{L_EXPLAIN}</p>*/
/* */
/* 	<!-- IF NOTICE -->*/
/* 		<div class="successbox">*/
/* 			<h3>{L_NOTIFY}</h3>*/
/* 			<p>{NOTICE}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<form id="acp_icons" method="post" action="{U_ACTION}">*/
/* */
/* 	<div style="text-align: right;"><a href="{U_IMPORT}">{L_IMPORT}</a> | <a href="{U_EXPORT}">{L_EXPORT}</a></div>*/
/* */
/* 	<fieldset class="tabulated">*/
/* */
/* 	<legend>{L_TITLE}</legend>*/
/* */
/* 	<table class="table1 zebra-table">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th>{L_TITLE}</th>*/
/* 		<!-- IF S_SMILIES -->*/
/* 		<th>{L_CODE}</th>*/
/* 		<th>{L_EMOTION}</th>*/
/* 		<!-- ENDIF -->*/
/* 		<th>{L_OPTIONS}</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<!-- BEGIN items -->*/
/* 		<!-- IF items.S_SPACER -->*/
/* 			<tr>*/
/* 				<td class="row3" colspan="{COLSPAN}" style="text-align: center;">{L_NOT_DISPLAYED}</td>*/
/* 			</tr>*/
/* 		<!-- ENDIF -->*/
/* 		<tr>*/
/* 			<td style="width: 85%; text-align: center;"><img src="{items.IMG_SRC}" width="{items.WIDTH}" height="{items.HEIGHT}" alt="{items.ALT_TEXT}" title="{items.ALT_TEXT}" /></td>*/
/* 			<!-- IF S_SMILIES -->*/
/* 				<td style="text-align: center;">{items.CODE}</td>*/
/* 				<td style="text-align: center;">{items.EMOTION}</td>*/
/* 			<!-- ENDIF -->*/
/* 			<td class="actions" style="text-align: right;">*/
/* 				<span class="up-disabled" style="display:none;">{ICON_MOVE_UP_DISABLED}</span>*/
/* 				<span class="up"><a href="{items.U_MOVE_UP}" data-ajax="row_up">{ICON_MOVE_UP}</a></span>*/
/* 				<span class="down-disabled" style="display:none;">{ICON_MOVE_DOWN_DISABLED}</span>*/
/* 				<span class="down"><a href="{items.U_MOVE_DOWN}" data-ajax="row_down">{ICON_MOVE_DOWN}</a></span>*/
/* 				<a href="{items.U_EDIT}">{ICON_EDIT}</a> <a href="{items.U_DELETE}" data-ajax="row_delete">{ICON_DELETE}</a>*/
/* 			</td>*/
/* 		</tr>*/
/* 	<!-- BEGINELSE -->*/
/* 		<tr class="row3">*/
/* 			<td colspan="{COLSPAN}">{L_ACP_NO_ITEMS}</td>*/
/* 		</tr>*/
/* 	<!-- END items -->*/
/* 	</tbody>*/
/* 	</table>*/
/* 	<div class="pagination">*/
/* 	<!-- IF .pagination -->*/
/* 		<!-- INCLUDE pagination.html -->*/
/* 	<!-- ENDIF -->*/
/* 	</div>*/
/* 	<p class="quick">*/
/* 		<input class="button2" name="add" type="submit" value="{L_ICON_ADD}" />&nbsp; &nbsp;<input class="button2" type="submit" name="edit" value="{L_ICON_EDIT}" />*/
/* 	</p>*/
/* 	{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
