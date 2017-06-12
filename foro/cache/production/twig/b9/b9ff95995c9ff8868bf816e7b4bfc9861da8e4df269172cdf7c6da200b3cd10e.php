<?php

/* acp_attachments.html */
class __TwigTemplate_5f2083f10392919b9f07e5ea48d4c167963bffc57d8e376a6b3a5d75627a859f extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_attachments.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if ((isset($context["U_BACK"]) ? $context["U_BACK"] : null)) {
            // line 6
            echo "\t<a href=\"";
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>
";
        }
        // line 8
        echo "
<h1>";
        // line 9
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h1>

<p>";
        // line 11
        echo $this->env->getExtension('phpbb')->lang("TITLE_EXPLAIN");
        echo "</p>

";
        // line 13
        if ((isset($context["S_WARNING"]) ? $context["S_WARNING"] : null)) {
            // line 14
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 16
            echo (isset($context["WARNING_MSG"]) ? $context["WARNING_MSG"] : null);
            echo "</p>
\t</div>
";
        }
        // line 19
        echo "
";
        // line 20
        if ((isset($context["S_NOTIFY"]) ? $context["S_NOTIFY"] : null)) {
            // line 21
            echo "\t<div class=\"successbox\">
\t\t<h3>";
            // line 22
            echo $this->env->getExtension('phpbb')->lang("NOTIFY");
            echo "</h3>
\t\t<p>";
            // line 23
            echo (isset($context["NOTIFY_MSG"]) ? $context["NOTIFY_MSG"] : null);
            echo "</p>
\t</div>
";
        }
        // line 26
        echo "
";
        // line 27
        if ((isset($context["S_UPLOADING_FILES"]) ? $context["S_UPLOADING_FILES"] : null)) {
            // line 28
            echo "\t<h2>";
            echo $this->env->getExtension('phpbb')->lang("UPLOADING_FILES");
            echo "</h2>

\t";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "upload", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["upload"]) {
                // line 31
                echo "\t\t:: ";
                echo $this->getAttribute($context["upload"], "FILE_INFO", array());
                echo "<br />
\t\t";
                // line 32
                if ($this->getAttribute($context["upload"], "S_DENIED", array())) {
                    echo "<span class=\"error\">";
                    echo $this->getAttribute($context["upload"], "DENIED", array());
                    echo "</span>";
                } elseif ($this->getAttribute($context["upload"], "ERROR_MSG", array())) {
                    echo "<span class=\"error\">";
                    echo $this->getAttribute($context["upload"], "ERROR_MSG", array());
                    echo "</span>";
                } else {
                    echo "<span class=\"success\">";
                    echo $this->env->getExtension('phpbb')->lang("SUCCESSFULLY_UPLOADED");
                    echo "</span>";
                }
                // line 33
                echo "\t\t<br /><br />
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['upload'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "
";
        }
        // line 37
        echo "
";
        // line 38
        if ((isset($context["S_ATTACHMENT_SETTINGS"]) ? $context["S_ATTACHMENT_SETTINGS"] : null)) {
            // line 39
            echo "
\t";
            // line 40
            if ( !(isset($context["S_THUMBNAIL_SUPPORT"]) ? $context["S_THUMBNAIL_SUPPORT"] : null)) {
                // line 41
                echo "\t\t<div class=\"errorbox\">
\t\t\t<p>";
                // line 42
                echo $this->env->getExtension('phpbb')->lang("NO_THUMBNAIL_SUPPORT");
                echo "</p>
\t\t</div>
\t";
            }
            // line 45
            echo "
\t<form id=\"attachsettings\" method=\"post\" action=\"";
            // line 46
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                // line 48
                echo "\t\t";
                if ($this->getAttribute($context["options"], "S_LEGEND", array())) {
                    // line 49
                    echo "\t\t\t";
                    if ( !$this->getAttribute($context["options"], "S_FIRST_ROW", array())) {
                        // line 50
                        echo "\t\t\t\t</fieldset>
\t\t\t";
                    }
                    // line 52
                    echo "\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 53
                    echo $this->getAttribute($context["options"], "LEGEND", array());
                    echo "</legend>
\t\t";
                } else {
                    // line 55
                    echo "
\t\t\t<dl>
\t\t\t\t<dt><label for=\"";
                    // line 57
                    echo $this->getAttribute($context["options"], "KEY", array());
                    echo "\">";
                    echo $this->getAttribute($context["options"], "TITLE", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label>";
                    if ($this->getAttribute($context["options"], "S_EXPLAIN", array())) {
                        echo "<br /><span>";
                        echo $this->getAttribute($context["options"], "TITLE_EXPLAIN", array());
                        echo "</span>";
                    }
                    echo "</dt>
\t\t\t\t<dd>";
                    // line 58
                    echo $this->getAttribute($context["options"], "CONTENT", array());
                    echo "</dd>
\t\t\t</dl>

\t\t";
                }
                // line 62
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
            // line 66
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 67
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 68
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t</fieldset>

\t";
            // line 71
            if ( !(isset($context["S_SECURE_DOWNLOADS"]) ? $context["S_SECURE_DOWNLOADS"] : null)) {
                // line 72
                echo "\t\t<div class=\"errorbox\">
\t\t\t<p>";
                // line 73
                echo $this->env->getExtension('phpbb')->lang("SECURE_DOWNLOAD_NOTICE");
                echo "</p>
\t\t</div>
\t";
            }
            // line 76
            echo "
\t<fieldset>
\t\t<legend>";
            // line 78
            echo $this->env->getExtension('phpbb')->lang("SECURE_TITLE");
            echo "</legend>
\t\t<p>";
            // line 79
            echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_ADD_IPS_EXPLAIN");
            echo "</p>
\t<dl>
\t\t<dt><label for=\"ip_hostname\">";
            // line 81
            echo $this->env->getExtension('phpbb')->lang("IP_HOSTNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><textarea id=\"ip_hostname\" cols=\"40\" rows=\"3\" name=\"ips\"></textarea></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"exclude\">";
            // line 85
            echo $this->env->getExtension('phpbb')->lang("IP_EXCLUDE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("EXCLUDE_ENTERED_IP");
            echo "</span></dt>
\t\t<dd><label><input type=\"radio\" id=\"exclude\" name=\"ipexclude\" value=\"1\" class=\"radio\" /> ";
            // line 86
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" name=\"ipexclude\" value=\"0\" checked=\"checked\" class=\"radio\" /> ";
            // line 87
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t</dl>

\t<p class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" id=\"securesubmit\" name=\"securesubmit\" value=\"";
            // line 91
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t</p>
\t</fieldset>

\t<fieldset>
\t\t<legend>";
            // line 96
            echo $this->env->getExtension('phpbb')->lang("REMOVE_IPS");
            echo "</legend>
\t";
            // line 97
            if ((isset($context["S_DEFINED_IPS"]) ? $context["S_DEFINED_IPS"] : null)) {
                // line 98
                echo "\t\t\t<p>";
                echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_REMOVE_IPS_EXPLAIN");
                echo "</p>
\t\t<dl>
\t\t\t<dt><label for=\"remove_ip_hostname\">";
                // line 100
                echo $this->env->getExtension('phpbb')->lang("IP_HOSTNAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><select name=\"unip[]\" id=\"remove_ip_hostname\" multiple=\"multiple\" size=\"10\">";
                // line 101
                echo (isset($context["DEFINED_IPS"]) ? $context["DEFINED_IPS"] : null);
                echo "</select></dd>
\t\t</dl>

\t\t<p class=\"quick\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"unsecuresubmit\" name=\"unsecuresubmit\" value=\"";
                // line 105
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />
\t\t</p>
\t\t</fieldset>

\t";
            } else {
                // line 110
                echo "\t\t<p>";
                echo $this->env->getExtension('phpbb')->lang("NO_IPS_DEFINED");
                echo "</p>
\t";
            }
            // line 112
            echo "\t";
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif (        // line 116
(isset($context["S_EXTENSION_GROUPS"]) ? $context["S_EXTENSION_GROUPS"] : null)) {
            // line 117
            echo "
\t";
            // line 118
            if ((isset($context["S_EDIT_GROUP"]) ? $context["S_EDIT_GROUP"] : null)) {
                // line 119
                echo "\t\t<script type=\"text/javascript\" defer=\"defer\">
\t\t// <![CDATA[
\t\t\tfunction update_image(newimage)
\t\t\t{
\t\t\t\tif (newimage == 'no_image')
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('image_upload_icon').src = \"";
                // line 125
                echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
                echo "images/spacer.gif\";
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('image_upload_icon').src = \"";
                // line 129
                echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
                echo (isset($context["IMG_PATH"]) ? $context["IMG_PATH"] : null);
                echo "/\" + newimage;
\t\t\t\t}
\t\t\t}

\t\t\tfunction show_extensions(elem)
\t\t\t{
\t\t\t\tvar str = '';

\t\t\t\tfor (i = 0; i < elem.length; i++)
\t\t\t\t{
\t\t\t\t\tvar element = elem.options[i];
\t\t\t\t\tif (element.selected)
\t\t\t\t\t{
\t\t\t\t\t\tif (str)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tstr = str + ', ';
\t\t\t\t\t\t}

\t\t\t\t\t\tstr = str + element.innerHTML;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (document.all)
\t\t\t\t{
\t\t\t\t\tdocument.all.ext.innerText = str;
\t\t\t\t}
\t\t\t\telse if (document.getElementById('ext').textContent)
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('ext').textContent = str;
\t\t\t\t}
\t\t\t\telse if (document.getElementById('ext').firstChild.nodeValue)
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('ext').firstChild.nodeValue = str;
\t\t\t\t}
\t\t\t}

\t\t// ]]>
\t\t</script>

\t\t<form id=\"extgroups\" method=\"post\" action=\"";
                // line 168
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">
\t\t<fieldset>
\t\t\t<input type=\"hidden\" name=\"action\" value=\"";
                // line 170
                echo (isset($context["ACTION"]) ? $context["ACTION"] : null);
                echo "\" />
\t\t\t<input type=\"hidden\" name=\"g\" value=\"";
                // line 171
                echo (isset($context["GROUP_ID"]) ? $context["GROUP_ID"] : null);
                echo "\" />

\t\t\t<legend>";
                // line 173
                echo $this->env->getExtension('phpbb')->lang("LEGEND");
                echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"group_name\">";
                // line 175
                echo $this->env->getExtension('phpbb')->lang("GROUP_NAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"text\" id=\"group_name\" size=\"20\" maxlength=\"100\" name=\"group_name\" value=\"";
                // line 176
                echo (isset($context["GROUP_NAME"]) ? $context["GROUP_NAME"] : null);
                echo "\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"category\">";
                // line 179
                echo $this->env->getExtension('phpbb')->lang("SPECIAL_CATEGORY");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("SPECIAL_CATEGORY_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd>";
                // line 180
                echo (isset($context["S_CATEGORY_SELECT"]) ? $context["S_CATEGORY_SELECT"] : null);
                echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"allowed\">";
                // line 183
                echo $this->env->getExtension('phpbb')->lang("ALLOWED");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"allowed\" name=\"allow_group\" value=\"1\"";
                // line 184
                if ((isset($context["ALLOW_GROUP"]) ? $context["ALLOW_GROUP"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"allow_in_pm\">";
                // line 187
                echo $this->env->getExtension('phpbb')->lang("ALLOW_IN_PM");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"allow_in_pm\" name=\"allow_in_pm\" value=\"1\"";
                // line 188
                if ((isset($context["ALLOW_IN_PM"]) ? $context["ALLOW_IN_PM"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"upload_icon\">";
                // line 191
                echo $this->env->getExtension('phpbb')->lang("UPLOAD_ICON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><select name=\"upload_icon\" id=\"upload_icon\" onchange=\"update_image(this.options[selectedIndex].value);\">
\t\t\t\t\t<option value=\"no_image\"";
                // line 193
                if ((isset($context["S_NO_IMAGE"]) ? $context["S_NO_IMAGE"] : null)) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->env->getExtension('phpbb')->lang("NO_IMAGE");
                echo "</option>";
                echo (isset($context["S_FILENAME_LIST"]) ? $context["S_FILENAME_LIST"] : null);
                echo "
\t\t\t</select></dd>
\t\t\t<dd>&nbsp;<img ";
                // line 195
                if ((isset($context["S_NO_IMAGE"]) ? $context["S_NO_IMAGE"] : null)) {
                    echo "src=\"";
                    echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
                    echo "images/spacer.gif\"";
                } else {
                    echo "src=\"";
                    echo (isset($context["UPLOAD_ICON_SRC"]) ? $context["UPLOAD_ICON_SRC"] : null);
                    echo "\"";
                }
                echo " id=\"image_upload_icon\" alt=\"\" title=\"\" />&nbsp;</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"extgroup_filesize\">";
                // line 198
                echo $this->env->getExtension('phpbb')->lang("MAX_EXTGROUP_FILESIZE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"number\" id=\"extgroup_filesize\" min=\"0\" max=\"999999999999999\" step=\"any\" name=\"max_filesize\" value=\"";
                // line 199
                echo (isset($context["EXTGROUP_FILESIZE"]) ? $context["EXTGROUP_FILESIZE"] : null);
                echo "\" /> <select name=\"size_select\">";
                echo (isset($context["S_EXT_GROUP_SIZE_OPTIONS"]) ? $context["S_EXT_GROUP_SIZE_OPTIONS"] : null);
                echo "</select></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"assigned_extensions\">";
                // line 202
                echo $this->env->getExtension('phpbb')->lang("ASSIGNED_EXTENSIONS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><div id=\"ext\">";
                // line 203
                echo (isset($context["ASSIGNED_EXTENSIONS"]) ? $context["ASSIGNED_EXTENSIONS"] : null);
                echo "</div> <span>[<a href=\"";
                echo (isset($context["U_EXTENSIONS"]) ? $context["U_EXTENSIONS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("GO_TO_EXTENSIONS");
                echo "</a> ]</span></dd>
\t\t\t<dd><select name=\"extensions[]\" id=\"assigned_extensions\" class=\"narrow\" onchange=\"show_extensions(this);\" multiple=\"multiple\" size=\"8\">";
                // line 204
                echo (isset($context["S_EXTENSION_OPTIONS"]) ? $context["S_EXTENSION_OPTIONS"] : null);
                echo "</select></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"allowed_forums\">";
                // line 207
                echo $this->env->getExtension('phpbb')->lang("ALLOWED_FORUMS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("ALLOWED_FORUMS_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" id=\"allowed_forums\" class=\"radio\" name=\"forum_select\" value=\"0\"";
                // line 208
                if ( !(isset($context["S_FORUM_IDS"]) ? $context["S_FORUM_IDS"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("ALLOW_ALL_FORUMS");
                echo "</label></dd>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"forum_select\" value=\"1\"";
                // line 209
                if ((isset($context["S_FORUM_IDS"]) ? $context["S_FORUM_IDS"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("ALLOW_SELECTED_FORUMS");
                echo "</label></dd>
\t\t\t<dd><select name=\"allowed_forums[]\" multiple=\"multiple\" size=\"8\">";
                // line 210
                echo (isset($context["S_FORUM_ID_OPTIONS"]) ? $context["S_FORUM_ID_OPTIONS"] : null);
                echo "</select></dd>
\t\t</dl>

\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
                // line 214
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
                // line 215
                echo $this->env->getExtension('phpbb')->lang("RESET");
                echo "\" />
\t\t</p>
\t\t";
                // line 217
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t</fieldset>

\t\t</form>
\t";
            } else {
                // line 222
                echo "
\t\t<form id=\"extgroups\" method=\"post\" action=\"";
                // line 223
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">
\t\t<fieldset class=\"tabulated\">
\t\t<legend>";
                // line 225
                echo $this->env->getExtension('phpbb')->lang("TITLE");
                echo "</legend>

\t\t<table class=\"table1\">
\t\t\t<col class=\"row1\" /><col class=\"row1\" /><col class=\"row2\" />
\t\t<thead>
\t\t<tr>
\t\t\t<th>";
                // line 231
                echo $this->env->getExtension('phpbb')->lang("EXTENSION_GROUP");
                echo "</th>
\t\t\t<th>";
                // line 232
                echo $this->env->getExtension('phpbb')->lang("SPECIAL_CATEGORY");
                echo "</th>
\t\t\t<th>";
                // line 233
                echo $this->env->getExtension('phpbb')->lang("OPTIONS");
                echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
                // line 237
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "groups", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["groups"]) {
                    // line 238
                    echo "\t\t\t";
                    if (($this->getAttribute($context["groups"], "S_ADD_SPACER", array()) &&  !$this->getAttribute($context["groups"], "S_FIRST_ROW", array()))) {
                        // line 239
                        echo "\t\t\t<tr>
\t\t\t\t<td class=\"spacer\" colspan=\"3\">&nbsp;</td>
\t\t\t</tr>
\t\t\t";
                    }
                    // line 243
                    echo "\t\t\t<tr>
\t\t\t\t<td><strong>";
                    // line 244
                    echo $this->getAttribute($context["groups"], "GROUP_NAME", array());
                    echo "</strong>
\t\t\t\t\t";
                    // line 245
                    if (($this->getAttribute($context["groups"], "S_GROUP_ALLOWED", array()) &&  !$this->getAttribute($context["groups"], "S_ALLOWED_IN_PM", array()))) {
                        echo "<br /><span>&raquo; ";
                        echo $this->env->getExtension('phpbb')->lang("NOT_ALLOWED_IN_PM");
                        echo "</span>
\t\t\t\t\t";
                    } elseif (($this->getAttribute(                    // line 246
$context["groups"], "S_ALLOWED_IN_PM", array()) &&  !$this->getAttribute($context["groups"], "S_GROUP_ALLOWED", array()))) {
                        echo "<br /><span>&raquo; ";
                        echo $this->env->getExtension('phpbb')->lang("ONLY_ALLOWED_IN_PM");
                        echo "</span>
\t\t\t\t\t";
                    } elseif (( !$this->getAttribute(                    // line 247
$context["groups"], "S_GROUP_ALLOWED", array()) &&  !$this->getAttribute($context["groups"], "S_ALLOWED_IN_PM", array()))) {
                        echo "<br /><span>&raquo; ";
                        echo $this->env->getExtension('phpbb')->lang("NOT_ALLOWED_IN_PM_POST");
                        echo "</span>
\t\t\t\t\t";
                    } else {
                        // line 248
                        echo "<br /><span>&raquo; ";
                        echo $this->env->getExtension('phpbb')->lang("ALLOWED_IN_PM_POST");
                        echo "</span>";
                    }
                    // line 249
                    echo "\t\t\t\t</td>
\t\t\t\t<td>";
                    // line 250
                    echo $this->getAttribute($context["groups"], "CATEGORY", array());
                    echo "</td>
\t\t\t\t<td align=\"center\" valign=\"middle\" style=\"white-space: nowrap;\">&nbsp;<a href=\"";
                    // line 251
                    echo $this->getAttribute($context["groups"], "U_EDIT", array());
                    echo "\">";
                    echo (isset($context["ICON_EDIT"]) ? $context["ICON_EDIT"] : null);
                    echo "</a>&nbsp;&nbsp;<a href=\"";
                    echo $this->getAttribute($context["groups"], "U_DELETE", array());
                    echo "\" data-ajax=\"row_delete\">";
                    echo (isset($context["ICON_DELETE"]) ? $context["ICON_DELETE"] : null);
                    echo "</a>&nbsp;</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groups'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 254
                echo "\t\t</tbody>
\t\t</table>
\t\t<p class=\"quick\">
\t\t\t\t";
                // line 257
                echo $this->env->getExtension('phpbb')->lang("CREATE_GROUP");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <input type=\"text\" name=\"group_name\" maxlength=\"30\" />
\t\t\t\t<input class=\"button2\" name=\"add\" type=\"submit\" value=\"";
                // line 258
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />
\t\t</p>
\t\t";
                // line 260
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t</fieldset>
\t\t</form>

\t";
            }
            // line 265
            echo "
";
        } elseif (        // line 266
(isset($context["S_EXTENSIONS"]) ? $context["S_EXTENSIONS"] : null)) {
            // line 267
            echo "
\t<form id=\"add_ext\" method=\"post\" action=\"";
            // line 268
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t<fieldset>
\t\t<legend>";
            // line 270
            echo $this->env->getExtension('phpbb')->lang("ADD_EXTENSION");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"add_extension\">";
            // line 272
            echo $this->env->getExtension('phpbb')->lang("EXTENSION");
            echo "</label></dt>
\t\t<dd><input type=\"text\" id=\"add_extension\" size=\"20\" maxlength=\"100\" name=\"add_extension\" value=\"";
            // line 273
            echo (isset($context["ADD_EXTENSION"]) ? $context["ADD_EXTENSION"] : null);
            echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"extension_group\">";
            // line 276
            echo $this->env->getExtension('phpbb')->lang("EXTENSION_GROUP");
            echo "</label></dt>
\t\t<dd>";
            // line 277
            echo (isset($context["GROUP_SELECT_OPTIONS"]) ? $context["GROUP_SELECT_OPTIONS"] : null);
            echo "</dd>
\t</dl>

\t<p class=\"quick\">
\t\t<input type=\"submit\" id=\"add_extension_check\" name=\"add_extension_check\" class=\"button2\" value=\"";
            // line 281
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t</p>
\t";
            // line 283
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

\t<form id=\"change_ext\" method=\"post\" action=\"";
            // line 287
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 290
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</legend>

\t<table class=\"table1\">
\t\t<col class=\"row1\" /><col class=\"row1\" /><col class=\"row2\" />
\t<thead>
\t<tr>
\t\t<th>";
            // line 296
            echo $this->env->getExtension('phpbb')->lang("EXTENSION");
            echo "</th>
\t\t<th>";
            // line 297
            echo $this->env->getExtension('phpbb')->lang("EXTENSION_GROUP");
            echo "</th>
\t\t<th>";
            // line 298
            echo $this->env->getExtension('phpbb')->lang("DELETE");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 302
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "extensions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["extensions"]) {
                // line 303
                echo "\t\t";
                if ($this->getAttribute($context["extensions"], "S_SPACER", array())) {
                    // line 304
                    echo "\t\t<tr>
\t\t\t<td class=\"spacer\" colspan=\"3\">&nbsp;</td>
\t\t</tr>
\t\t";
                }
                // line 308
                echo "\t\t<tr>
\t\t\t<td><strong>";
                // line 309
                echo $this->getAttribute($context["extensions"], "EXTENSION", array());
                echo "</strong></td>
\t\t\t<td>";
                // line 310
                echo $this->getAttribute($context["extensions"], "GROUP_OPTIONS", array());
                echo "</td>
\t\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"extension_id_list[]\" value=\"";
                // line 311
                echo $this->getAttribute($context["extensions"], "EXTENSION_ID", array());
                echo "\" /><input type=\"hidden\" name=\"extension_change_list[]\" value=\"";
                echo $this->getAttribute($context["extensions"], "EXTENSION_ID", array());
                echo "\" /></td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extensions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 314
            echo "\t</tbody>
\t</table>

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 318
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 319
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t</p>
\t";
            // line 321
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif (        // line 325
(isset($context["S_ORPHAN"]) ? $context["S_ORPHAN"] : null)) {
            // line 326
            echo "
\t<form id=\"orphan\" method=\"post\" action=\"";
            // line 327
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 330
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</legend>

\t<table class=\"table1 zebra-table fixed-width-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 335
            echo $this->env->getExtension('phpbb')->lang("FILENAME");
            echo "</th>
\t\t<th style=\"width: 15%;\">";
            // line 336
            echo $this->env->getExtension('phpbb')->lang("FILEDATE");
            echo "</th>
\t\t<th style=\"width: 15%;\">";
            // line 337
            echo $this->env->getExtension('phpbb')->lang("FILESIZE");
            echo "</th>
\t\t<th style=\"width: 15%;\">";
            // line 338
            echo $this->env->getExtension('phpbb')->lang("ATTACH_POST_ID");
            echo "</th>
\t\t<th style=\"width: 15%;\">";
            // line 339
            echo $this->env->getExtension('phpbb')->lang("ATTACH_TO_POST");
            echo "</th>
\t\t<th style=\"width: 15%;\">";
            // line 340
            echo $this->env->getExtension('phpbb')->lang("DELETE");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 344
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "orphan", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["orphan"]) {
                // line 345
                echo "\t\t<tr>
\t\t\t<td><a href=\"";
                // line 346
                echo $this->getAttribute($context["orphan"], "U_FILE", array());
                echo "\">";
                echo $this->getAttribute($context["orphan"], "REAL_FILENAME", array());
                echo "</a></td>
\t\t\t<td>";
                // line 347
                echo $this->getAttribute($context["orphan"], "FILETIME", array());
                echo "</td>
\t\t\t<td>";
                // line 348
                echo $this->getAttribute($context["orphan"], "FILESIZE", array());
                echo "</td>
\t\t\t<td><strong>";
                // line 349
                echo $this->env->getExtension('phpbb')->lang("ATTACH_ID");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " </strong><input type=\"number\" min=\"0\" max=\"9999999999\" name=\"post_id[";
                echo $this->getAttribute($context["orphan"], "ATTACH_ID", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["orphan"], "POST_ID", array());
                echo "\" style=\"width: 75%;\" /></td>
\t\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"add[";
                // line 350
                echo $this->getAttribute($context["orphan"], "ATTACH_ID", array());
                echo "]\" /></td>
\t\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"delete[";
                // line 351
                echo $this->getAttribute($context["orphan"], "ATTACH_ID", array());
                echo "]\" /></td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orphan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 354
            echo "\t<tr class=\"row4\">
\t\t<td colspan=\"4\">&nbsp;</td>
\t\t<td class=\"small\"><a href=\"#\" onclick=\"marklist('orphan', 'add', true); return false;\">";
            // line 356
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> :: <a href=\"#\" onclick=\"marklist('orphan', 'add', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></td>
\t\t<td class=\"small\"><a href=\"#\" onclick=\"marklist('orphan', 'delete', true); return false;\">";
            // line 357
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> :: <a href=\"#\" onclick=\"marklist('orphan', 'delete', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></td>
\t</tr>
\t</tbody>
\t</table>

\t<br />

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 365
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 366
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t</p>
\t";
            // line 368
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif (        // line 372
(isset($context["S_MANAGE"]) ? $context["S_MANAGE"] : null)) {
            // line 373
            echo "
\t<form id=\"attachments\" method=\"post\" action=\"";
            // line 374
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 377
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</legend>

\t<div class=\"pagination top-pagination\">
\t";
            // line 380
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["TOTAL_FILES"]) ? $context["TOTAL_FILES"] : null))) {
                // line 381
                echo "\t\t";
                echo $this->env->getExtension('phpbb')->lang("NUMBER_FILES");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["TOTAL_FILES"]) ? $context["TOTAL_FILES"] : null);
                echo " &bull; ";
                echo $this->env->getExtension('phpbb')->lang("TOTAL_SIZE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["TOTAL_SIZE"]) ? $context["TOTAL_SIZE"] : null);
                echo "
\t\t";
                // line 382
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                    // line 383
                    echo "\t\t\t&bull; ";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "acp_attachments.html", 383)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 384
                    echo "\t\t";
                } else {
                    // line 385
                    echo "\t\t\t&bull; ";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "
\t\t";
                }
                // line 387
                echo "\t";
            }
            // line 388
            echo "\t</div>

";
            // line 390
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attachments", array()))) {
                // line 391
                echo "\t<table class=\"table1 zebra-table fixed-width-table\">
\t<thead>
\t<tr>
\t\t<th>";
                // line 394
                echo $this->env->getExtension('phpbb')->lang("FILENAME");
                echo "</th>
\t\t<th style=\"width: 15%;\">";
                // line 395
                echo $this->env->getExtension('phpbb')->lang("POSTED");
                echo "</th>
\t\t<th style=\"width: 15%;\" class=\"centered-text\">";
                // line 396
                echo $this->env->getExtension('phpbb')->lang("FILESIZE");
                echo "</th>
\t\t<th style=\"width: 10%;\" class=\"centered-text\">";
                // line 397
                echo $this->env->getExtension('phpbb')->lang("MARK");
                echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
                // line 401
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attachments", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachments"]) {
                    // line 402
                    echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t";
                    // line 404
                    if ($this->getAttribute($context["attachments"], "S_IN_MESSAGE", array())) {
                        echo $this->env->getExtension('phpbb')->lang("EXTENSION_GROUP");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        if ($this->getAttribute($context["attachments"], "EXT_GROUP_NAME", array())) {
                            echo $this->getAttribute($context["attachments"], "EXT_GROUP_NAME", array());
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("NO_EXT_GROUP");
                        }
                        echo "</strong><br />";
                        echo $this->getAttribute($context["attachments"], "L_DOWNLOAD_COUNT", array());
                        echo "<br />";
                        echo $this->env->getExtension('phpbb')->lang("IN");
                        echo " ";
                        echo $this->env->getExtension('phpbb')->lang("PRIVATE_MESSAGE");
                        echo "
\t\t\t\t";
                    } else {
                        // line 405
                        echo "<a href=\"";
                        echo $this->getAttribute($context["attachments"], "U_FILE", array());
                        echo "\" style=\"font-weight: bold;\">";
                        echo $this->getAttribute($context["attachments"], "REAL_FILENAME", array());
                        echo "</a><br />";
                        if ($this->getAttribute($context["attachments"], "COMMENT", array())) {
                            echo $this->getAttribute($context["attachments"], "COMMENT", array());
                            echo "<br />";
                        }
                        echo $this->getAttribute($context["attachments"], "L_DOWNLOAD_COUNT", array());
                        echo "<br />";
                        echo $this->env->getExtension('phpbb')->lang("TOPIC");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <a href=\"";
                        echo $this->getAttribute($context["attachments"], "U_VIEW_TOPIC", array());
                        echo "\">";
                        echo $this->getAttribute($context["attachments"], "TOPIC_TITLE", array());
                        echo "</a>";
                    }
                    // line 406
                    echo "\t\t\t</td>
\t\t\t<td>";
                    // line 407
                    echo $this->getAttribute($context["attachments"], "FILETIME", array());
                    echo "<br />";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["attachments"], "ATTACHMENT_POSTER", array());
                    echo "</td>
\t\t\t<td class=\"centered-text\">";
                    // line 408
                    echo $this->getAttribute($context["attachments"], "FILESIZE", array());
                    echo "</td>
\t\t\t<td class=\"centered-text\"><input type=\"checkbox\" class=\"radio\" name=\"delete[";
                    // line 409
                    echo $this->getAttribute($context["attachments"], "ATTACH_ID", array());
                    echo "]\" /></td>
\t\t</tr>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachments'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 412
                echo "\t</tbody>
\t</table>
";
            } else {
                // line 415
                echo "\t<div class=\"errorbox\">
\t\t<p>";
                // line 416
                echo $this->env->getExtension('phpbb')->lang("NO_ATTACHMENTS");
                echo "</p>
\t</div>
";
            }
            // line 419
            echo "
\t";
            // line 420
            if ((isset($context["TOTAL_FILES"]) ? $context["TOTAL_FILES"] : null)) {
                // line 421
                echo "\t<div class=\"pagination\">
\t\t";
                // line 422
                echo $this->env->getExtension('phpbb')->lang("NUMBER_FILES");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["TOTAL_FILES"]) ? $context["TOTAL_FILES"] : null);
                echo " &bull; ";
                echo $this->env->getExtension('phpbb')->lang("TOTAL_SIZE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["TOTAL_SIZE"]) ? $context["TOTAL_SIZE"] : null);
                echo "
\t\t";
                // line 423
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                    // line 424
                    echo "\t\t\t&bull; ";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "acp_attachments.html", 424)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 425
                    echo "\t\t";
                } else {
                    // line 426
                    echo "\t\t\t&bull; ";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "
\t\t";
                }
                // line 428
                echo "\t</div>
\t";
            }
            // line 430
            echo "
\t<fieldset class=\"display-options\">
\t\t";
            // line 432
            echo $this->env->getExtension('phpbb')->lang("DISPLAY_LOG");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " &nbsp;";
            echo (isset($context["S_LIMIT_DAYS"]) ? $context["S_LIMIT_DAYS"] : null);
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("SORT_BY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            echo (isset($context["S_SORT_KEY"]) ? $context["S_SORT_KEY"] : null);
            echo " ";
            echo (isset($context["S_SORT_DIR"]) ? $context["S_SORT_DIR"] : null);
            echo "
\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 433
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" name=\"sort\" />
\t</fieldset>

\t<hr />

";
            // line 438
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attachments", array()))) {
                // line 439
                echo "\t<fieldset class=\"quick\">
\t\t<input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
                // line 440
                echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
                echo "\" /><br />
\t\t<p class=\"small\">
\t\t\t<a href=\"#\" onclick=\"marklist('attachments', 'delete', true); return false;\">";
                // line 442
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</a> &bull;
\t\t\t<a href=\"#\" onclick=\"marklist('attachments', 'delete', false); return false;\">";
                // line 443
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a>\t\t
\t\t</p>
\t</fieldset>
";
            }
            // line 447
            echo "\t";
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

\t";
            // line 451
            if ((isset($context["S_ACTION_OPTIONS"]) ? $context["S_ACTION_OPTIONS"] : null)) {
                // line 452
                echo "\t<fieldset>
\t\t<legend>";
                // line 453
                echo $this->env->getExtension('phpbb')->lang("RESYNC_STATS");
                echo "</legend>
\t\t<form id=\"action_stats_form\" method=\"post\" action=\"";
                // line 454
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">
\t\t\t<dl>
\t\t\t\t<dt><label for=\"action_stats\">";
                // line 456
                echo $this->env->getExtension('phpbb')->lang("RESYNC_FILES_STATS");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("RESYNC_FILES_STATS_EXPLAIN");
                echo "</span></dt>
\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"stats\" /><input class=\"button2\" type=\"submit\" id=\"action_stats\" name=\"action_stats\" value=\"";
                // line 457
                echo $this->env->getExtension('phpbb')->lang("RUN");
                echo "\" /></dd>
\t\t\t</dl>
\t\t</form>
\t</fieldset>
\t";
            }
        }
        // line 463
        echo "
";
        // line 464
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_attachments.html", 464)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_attachments.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1280 => 464,  1277 => 463,  1268 => 457,  1262 => 456,  1257 => 454,  1253 => 453,  1250 => 452,  1248 => 451,  1240 => 447,  1233 => 443,  1229 => 442,  1224 => 440,  1221 => 439,  1219 => 438,  1211 => 433,  1197 => 432,  1193 => 430,  1189 => 428,  1183 => 426,  1180 => 425,  1167 => 424,  1165 => 423,  1153 => 422,  1150 => 421,  1148 => 420,  1145 => 419,  1139 => 416,  1136 => 415,  1131 => 412,  1122 => 409,  1118 => 408,  1110 => 407,  1107 => 406,  1087 => 405,  1068 => 404,  1064 => 402,  1060 => 401,  1053 => 397,  1049 => 396,  1045 => 395,  1041 => 394,  1036 => 391,  1034 => 390,  1030 => 388,  1027 => 387,  1021 => 385,  1018 => 384,  1005 => 383,  1003 => 382,  990 => 381,  988 => 380,  982 => 377,  976 => 374,  973 => 373,  971 => 372,  964 => 368,  959 => 366,  955 => 365,  942 => 357,  936 => 356,  932 => 354,  923 => 351,  919 => 350,  910 => 349,  906 => 348,  902 => 347,  896 => 346,  893 => 345,  889 => 344,  882 => 340,  878 => 339,  874 => 338,  870 => 337,  866 => 336,  862 => 335,  854 => 330,  848 => 327,  845 => 326,  843 => 325,  836 => 321,  831 => 319,  827 => 318,  821 => 314,  810 => 311,  806 => 310,  802 => 309,  799 => 308,  793 => 304,  790 => 303,  786 => 302,  779 => 298,  775 => 297,  771 => 296,  762 => 290,  756 => 287,  749 => 283,  744 => 281,  737 => 277,  733 => 276,  727 => 273,  723 => 272,  718 => 270,  713 => 268,  710 => 267,  708 => 266,  705 => 265,  697 => 260,  692 => 258,  687 => 257,  682 => 254,  667 => 251,  663 => 250,  660 => 249,  655 => 248,  648 => 247,  642 => 246,  636 => 245,  632 => 244,  629 => 243,  623 => 239,  620 => 238,  616 => 237,  609 => 233,  605 => 232,  601 => 231,  592 => 225,  587 => 223,  584 => 222,  576 => 217,  571 => 215,  567 => 214,  560 => 210,  552 => 209,  544 => 208,  537 => 207,  531 => 204,  523 => 203,  518 => 202,  510 => 199,  505 => 198,  491 => 195,  480 => 193,  474 => 191,  466 => 188,  461 => 187,  453 => 184,  448 => 183,  442 => 180,  435 => 179,  429 => 176,  424 => 175,  419 => 173,  414 => 171,  410 => 170,  405 => 168,  362 => 129,  355 => 125,  347 => 119,  345 => 118,  342 => 117,  340 => 116,  332 => 112,  326 => 110,  318 => 105,  311 => 101,  306 => 100,  300 => 98,  298 => 97,  294 => 96,  286 => 91,  279 => 87,  275 => 86,  268 => 85,  260 => 81,  255 => 79,  251 => 78,  247 => 76,  241 => 73,  238 => 72,  236 => 71,  230 => 68,  226 => 67,  222 => 66,  217 => 63,  211 => 62,  204 => 58,  191 => 57,  187 => 55,  182 => 53,  179 => 52,  175 => 50,  172 => 49,  169 => 48,  165 => 47,  161 => 46,  158 => 45,  152 => 42,  149 => 41,  147 => 40,  144 => 39,  142 => 38,  139 => 37,  135 => 35,  128 => 33,  114 => 32,  109 => 31,  105 => 30,  99 => 28,  97 => 27,  94 => 26,  88 => 23,  84 => 22,  81 => 21,  79 => 20,  76 => 19,  70 => 16,  66 => 15,  63 => 14,  61 => 13,  56 => 11,  51 => 9,  48 => 8,  38 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* <!-- IF U_BACK -->*/
/* 	<a href="{U_BACK}" style="float: {S_CONTENT_FLOW_END};">&laquo; {L_BACK}</a>*/
/* <!-- ENDIF -->*/
/* */
/* <h1>{L_TITLE}</h1>*/
/* */
/* <p>{L_TITLE_EXPLAIN}</p>*/
/* */
/* <!-- IF S_WARNING -->*/
/* 	<div class="errorbox">*/
/* 		<h3>{L_WARNING}</h3>*/
/* 		<p>{WARNING_MSG}</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_NOTIFY -->*/
/* 	<div class="successbox">*/
/* 		<h3>{L_NOTIFY}</h3>*/
/* 		<p>{NOTIFY_MSG}</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_UPLOADING_FILES -->*/
/* 	<h2>{L_UPLOADING_FILES}</h2>*/
/* */
/* 	<!-- BEGIN upload -->*/
/* 		:: {upload.FILE_INFO}<br />*/
/* 		<!-- IF upload.S_DENIED --><span class="error">{upload.DENIED}</span><!-- ELSEIF upload.ERROR_MSG --><span class="error">{upload.ERROR_MSG}</span><!-- ELSE --><span class="success">{L_SUCCESSFULLY_UPLOADED}</span><!-- ENDIF -->*/
/* 		<br /><br />*/
/* 	<!-- END upload -->*/
/* */
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_ATTACHMENT_SETTINGS -->*/
/* */
/* 	<!-- IF not S_THUMBNAIL_SUPPORT -->*/
/* 		<div class="errorbox">*/
/* 			<p>{L_NO_THUMBNAIL_SUPPORT}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<form id="attachsettings" method="post" action="{U_ACTION}">*/
/* 	<!-- BEGIN options -->*/
/* 		<!-- IF options.S_LEGEND -->*/
/* 			<!-- IF not options.S_FIRST_ROW -->*/
/* 				</fieldset>*/
/* 			<!-- ENDIF -->*/
/* 			<fieldset>*/
/* 				<legend>{options.LEGEND}</legend>*/
/* 		<!-- ELSE -->*/
/* */
/* 			<dl>*/
/* 				<dt><label for="{options.KEY}">{options.TITLE}{L_COLON}</label><!-- IF options.S_EXPLAIN --><br /><span>{options.TITLE_EXPLAIN}</span><!-- ENDIF --></dt>*/
/* 				<dd>{options.CONTENT}</dd>*/
/* 			</dl>*/
/* */
/* 		<!-- ENDIF -->*/
/* 	<!-- END options -->*/
/* 	</fieldset>*/
/* */
/* 	<fieldset class="submit-buttons">*/
/* 		<legend>{L_SUBMIT}</legend>*/
/* 		<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />&nbsp;*/
/* 		<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* 	</fieldset>*/
/* */
/* 	<!-- IF not S_SECURE_DOWNLOADS -->*/
/* 		<div class="errorbox">*/
/* 			<p>{L_SECURE_DOWNLOAD_NOTICE}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<fieldset>*/
/* 		<legend>{L_SECURE_TITLE}</legend>*/
/* 		<p>{L_DOWNLOAD_ADD_IPS_EXPLAIN}</p>*/
/* 	<dl>*/
/* 		<dt><label for="ip_hostname">{L_IP_HOSTNAME}{L_COLON}</label></dt>*/
/* 		<dd><textarea id="ip_hostname" cols="40" rows="3" name="ips"></textarea></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="exclude">{L_IP_EXCLUDE}{L_COLON}</label><br /><span>{L_EXCLUDE_ENTERED_IP}</span></dt>*/
/* 		<dd><label><input type="radio" id="exclude" name="ipexclude" value="1" class="radio" /> {L_YES}</label>*/
/* 			<label><input type="radio" name="ipexclude" value="0" checked="checked" class="radio" /> {L_NO}</label></dd>*/
/* 	</dl>*/
/* */
/* 	<p class="quick">*/
/* 		<input class="button1" type="submit" id="securesubmit" name="securesubmit" value="{L_SUBMIT}" />*/
/* 	</p>*/
/* 	</fieldset>*/
/* */
/* 	<fieldset>*/
/* 		<legend>{L_REMOVE_IPS}</legend>*/
/* 	<!-- IF S_DEFINED_IPS -->*/
/* 			<p>{L_DOWNLOAD_REMOVE_IPS_EXPLAIN}</p>*/
/* 		<dl>*/
/* 			<dt><label for="remove_ip_hostname">{L_IP_HOSTNAME}{L_COLON}</label></dt>*/
/* 			<dd><select name="unip[]" id="remove_ip_hostname" multiple="multiple" size="10">{DEFINED_IPS}</select></dd>*/
/* 		</dl>*/
/* */
/* 		<p class="quick">*/
/* 			<input class="button1" type="submit" id="unsecuresubmit" name="unsecuresubmit" value="{L_SUBMIT}" />*/
/* 		</p>*/
/* 		</fieldset>*/
/* */
/* 	<!-- ELSE -->*/
/* 		<p>{L_NO_IPS_DEFINED}</p>*/
/* 	<!-- ENDIF -->*/
/* 	{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
/* <!-- ELSEIF S_EXTENSION_GROUPS -->*/
/* */
/* 	<!-- IF S_EDIT_GROUP -->*/
/* 		<script type="text/javascript" defer="defer">*/
/* 		// <![CDATA[*/
/* 			function update_image(newimage)*/
/* 			{*/
/* 				if (newimage == 'no_image')*/
/* 				{*/
/* 					document.getElementById('image_upload_icon').src = "{ROOT_PATH}images/spacer.gif";*/
/* 				}*/
/* 				else*/
/* 				{*/
/* 					document.getElementById('image_upload_icon').src = "{ROOT_PATH}{IMG_PATH}/" + newimage;*/
/* 				}*/
/* 			}*/
/* */
/* 			function show_extensions(elem)*/
/* 			{*/
/* 				var str = '';*/
/* */
/* 				for (i = 0; i < elem.length; i++)*/
/* 				{*/
/* 					var element = elem.options[i];*/
/* 					if (element.selected)*/
/* 					{*/
/* 						if (str)*/
/* 						{*/
/* 							str = str + ', ';*/
/* 						}*/
/* */
/* 						str = str + element.innerHTML;*/
/* 					}*/
/* 				}*/
/* */
/* 				if (document.all)*/
/* 				{*/
/* 					document.all.ext.innerText = str;*/
/* 				}*/
/* 				else if (document.getElementById('ext').textContent)*/
/* 				{*/
/* 					document.getElementById('ext').textContent = str;*/
/* 				}*/
/* 				else if (document.getElementById('ext').firstChild.nodeValue)*/
/* 				{*/
/* 					document.getElementById('ext').firstChild.nodeValue = str;*/
/* 				}*/
/* 			}*/
/* */
/* 		// ]]>*/
/* 		</script>*/
/* */
/* 		<form id="extgroups" method="post" action="{U_ACTION}">*/
/* 		<fieldset>*/
/* 			<input type="hidden" name="action" value="{ACTION}" />*/
/* 			<input type="hidden" name="g" value="{GROUP_ID}" />*/
/* */
/* 			<legend>{L_LEGEND}</legend>*/
/* 		<dl>*/
/* 			<dt><label for="group_name">{L_GROUP_NAME}{L_COLON}</label></dt>*/
/* 			<dd><input type="text" id="group_name" size="20" maxlength="100" name="group_name" value="{GROUP_NAME}" /></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="category">{L_SPECIAL_CATEGORY}{L_COLON}</label><br /><span>{L_SPECIAL_CATEGORY_EXPLAIN}</span></dt>*/
/* 			<dd>{S_CATEGORY_SELECT}</dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="allowed">{L_ALLOWED}{L_COLON}</label></dt>*/
/* 			<dd><input type="checkbox" class="radio" id="allowed" name="allow_group" value="1"<!-- IF ALLOW_GROUP --> checked="checked"<!-- ENDIF --> /></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="allow_in_pm">{L_ALLOW_IN_PM}{L_COLON}</label></dt>*/
/* 			<dd><input type="checkbox" class="radio" id="allow_in_pm" name="allow_in_pm" value="1"<!-- IF ALLOW_IN_PM --> checked="checked"<!-- ENDIF --> /></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="upload_icon">{L_UPLOAD_ICON}{L_COLON}</label></dt>*/
/* 			<dd><select name="upload_icon" id="upload_icon" onchange="update_image(this.options[selectedIndex].value);">*/
/* 					<option value="no_image"<!-- IF S_NO_IMAGE --> selected="selected"<!-- ENDIF -->>{L_NO_IMAGE}</option>{S_FILENAME_LIST}*/
/* 			</select></dd>*/
/* 			<dd>&nbsp;<img <!-- IF S_NO_IMAGE -->src="{ROOT_PATH}images/spacer.gif"<!-- ELSE -->src="{UPLOAD_ICON_SRC}"<!-- ENDIF --> id="image_upload_icon" alt="" title="" />&nbsp;</dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="extgroup_filesize">{L_MAX_EXTGROUP_FILESIZE}{L_COLON}</label></dt>*/
/* 			<dd><input type="number" id="extgroup_filesize" min="0" max="999999999999999" step="any" name="max_filesize" value="{EXTGROUP_FILESIZE}" /> <select name="size_select">{S_EXT_GROUP_SIZE_OPTIONS}</select></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="assigned_extensions">{L_ASSIGNED_EXTENSIONS}{L_COLON}</label></dt>*/
/* 			<dd><div id="ext">{ASSIGNED_EXTENSIONS}</div> <span>[<a href="{U_EXTENSIONS}">{L_GO_TO_EXTENSIONS}</a> ]</span></dd>*/
/* 			<dd><select name="extensions[]" id="assigned_extensions" class="narrow" onchange="show_extensions(this);" multiple="multiple" size="8">{S_EXTENSION_OPTIONS}</select></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="allowed_forums">{L_ALLOWED_FORUMS}{L_COLON}</label><br /><span>{L_ALLOWED_FORUMS_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" id="allowed_forums" class="radio" name="forum_select" value="0"<!-- IF not S_FORUM_IDS --> checked="checked"<!-- ENDIF --> /> {L_ALLOW_ALL_FORUMS}</label></dd>*/
/* 			<dd><label><input type="radio" class="radio" name="forum_select" value="1"<!-- IF S_FORUM_IDS --> checked="checked"<!-- ENDIF --> /> {L_ALLOW_SELECTED_FORUMS}</label></dd>*/
/* 			<dd><select name="allowed_forums[]" multiple="multiple" size="8">{S_FORUM_ID_OPTIONS}</select></dd>*/
/* 		</dl>*/
/* */
/* 		<p class="submit-buttons">*/
/* 			<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />&nbsp;*/
/* 			<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* 		</p>*/
/* 		{S_FORM_TOKEN}*/
/* 		</fieldset>*/
/* */
/* 		</form>*/
/* 	<!-- ELSE -->*/
/* */
/* 		<form id="extgroups" method="post" action="{U_ACTION}">*/
/* 		<fieldset class="tabulated">*/
/* 		<legend>{L_TITLE}</legend>*/
/* */
/* 		<table class="table1">*/
/* 			<col class="row1" /><col class="row1" /><col class="row2" />*/
/* 		<thead>*/
/* 		<tr>*/
/* 			<th>{L_EXTENSION_GROUP}</th>*/
/* 			<th>{L_SPECIAL_CATEGORY}</th>*/
/* 			<th>{L_OPTIONS}</th>*/
/* 		</tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 		<!-- BEGIN groups -->*/
/* 			<!-- IF groups.S_ADD_SPACER and not groups.S_FIRST_ROW -->*/
/* 			<tr>*/
/* 				<td class="spacer" colspan="3">&nbsp;</td>*/
/* 			</tr>*/
/* 			<!-- ENDIF -->*/
/* 			<tr>*/
/* 				<td><strong>{groups.GROUP_NAME}</strong>*/
/* 					<!-- IF groups.S_GROUP_ALLOWED and not groups.S_ALLOWED_IN_PM --><br /><span>&raquo; {L_NOT_ALLOWED_IN_PM}</span>*/
/* 					<!-- ELSEIF groups.S_ALLOWED_IN_PM and not groups.S_GROUP_ALLOWED --><br /><span>&raquo; {L_ONLY_ALLOWED_IN_PM}</span>*/
/* 					<!-- ELSEIF not groups.S_GROUP_ALLOWED and not groups.S_ALLOWED_IN_PM --><br /><span>&raquo; {L_NOT_ALLOWED_IN_PM_POST}</span>*/
/* 					<!-- ELSE --><br /><span>&raquo; {L_ALLOWED_IN_PM_POST}</span><!-- ENDIF -->*/
/* 				</td>*/
/* 				<td>{groups.CATEGORY}</td>*/
/* 				<td align="center" valign="middle" style="white-space: nowrap;">&nbsp;<a href="{groups.U_EDIT}">{ICON_EDIT}</a>&nbsp;&nbsp;<a href="{groups.U_DELETE}" data-ajax="row_delete">{ICON_DELETE}</a>&nbsp;</td>*/
/* 			</tr>*/
/* 		<!-- END groups -->*/
/* 		</tbody>*/
/* 		</table>*/
/* 		<p class="quick">*/
/* 				{L_CREATE_GROUP}{L_COLON} <input type="text" name="group_name" maxlength="30" />*/
/* 				<input class="button2" name="add" type="submit" value="{L_SUBMIT}" />*/
/* 		</p>*/
/* 		{S_FORM_TOKEN}*/
/* 		</fieldset>*/
/* 		</form>*/
/* */
/* 	<!-- ENDIF -->*/
/* */
/* <!-- ELSEIF S_EXTENSIONS -->*/
/* */
/* 	<form id="add_ext" method="post" action="{U_ACTION}">*/
/* 	<fieldset>*/
/* 		<legend>{L_ADD_EXTENSION}</legend>*/
/* 	<dl>*/
/* 		<dt><label for="add_extension">{L_EXTENSION}</label></dt>*/
/* 		<dd><input type="text" id="add_extension" size="20" maxlength="100" name="add_extension" value="{ADD_EXTENSION}" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="extension_group">{L_EXTENSION_GROUP}</label></dt>*/
/* 		<dd>{GROUP_SELECT_OPTIONS}</dd>*/
/* 	</dl>*/
/* */
/* 	<p class="quick">*/
/* 		<input type="submit" id="add_extension_check" name="add_extension_check" class="button2" value="{L_SUBMIT}" />*/
/* 	</p>*/
/* 	{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
/* 	<form id="change_ext" method="post" action="{U_ACTION}">*/
/* */
/* 	<fieldset class="tabulated">*/
/* 	<legend>{L_TITLE}</legend>*/
/* */
/* 	<table class="table1">*/
/* 		<col class="row1" /><col class="row1" /><col class="row2" />*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th>{L_EXTENSION}</th>*/
/* 		<th>{L_EXTENSION_GROUP}</th>*/
/* 		<th>{L_DELETE}</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<!-- BEGIN extensions -->*/
/* 		<!-- IF extensions.S_SPACER -->*/
/* 		<tr>*/
/* 			<td class="spacer" colspan="3">&nbsp;</td>*/
/* 		</tr>*/
/* 		<!-- ENDIF -->*/
/* 		<tr>*/
/* 			<td><strong>{extensions.EXTENSION}</strong></td>*/
/* 			<td>{extensions.GROUP_OPTIONS}</td>*/
/* 			<td><input type="checkbox" class="radio" name="extension_id_list[]" value="{extensions.EXTENSION_ID}" /><input type="hidden" name="extension_change_list[]" value="{extensions.EXTENSION_ID}" /></td>*/
/* 		</tr>*/
/* 	<!-- END extensions -->*/
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
/* <!-- ELSEIF S_ORPHAN -->*/
/* */
/* 	<form id="orphan" method="post" action="{U_ACTION}">*/
/* */
/* 	<fieldset class="tabulated">*/
/* 	<legend>{L_TITLE}</legend>*/
/* */
/* 	<table class="table1 zebra-table fixed-width-table">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th>{L_FILENAME}</th>*/
/* 		<th style="width: 15%;">{L_FILEDATE}</th>*/
/* 		<th style="width: 15%;">{L_FILESIZE}</th>*/
/* 		<th style="width: 15%;">{L_ATTACH_POST_ID}</th>*/
/* 		<th style="width: 15%;">{L_ATTACH_TO_POST}</th>*/
/* 		<th style="width: 15%;">{L_DELETE}</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<!-- BEGIN orphan -->*/
/* 		<tr>*/
/* 			<td><a href="{orphan.U_FILE}">{orphan.REAL_FILENAME}</a></td>*/
/* 			<td>{orphan.FILETIME}</td>*/
/* 			<td>{orphan.FILESIZE}</td>*/
/* 			<td><strong>{L_ATTACH_ID}{L_COLON} </strong><input type="number" min="0" max="9999999999" name="post_id[{orphan.ATTACH_ID}]" value="{orphan.POST_ID}" style="width: 75%;" /></td>*/
/* 			<td><input type="checkbox" class="radio" name="add[{orphan.ATTACH_ID}]" /></td>*/
/* 			<td><input type="checkbox" class="radio" name="delete[{orphan.ATTACH_ID}]" /></td>*/
/* 		</tr>*/
/* 	<!-- END orphan -->*/
/* 	<tr class="row4">*/
/* 		<td colspan="4">&nbsp;</td>*/
/* 		<td class="small"><a href="#" onclick="marklist('orphan', 'add', true); return false;">{L_MARK_ALL}</a> :: <a href="#" onclick="marklist('orphan', 'add', false); return false;">{L_UNMARK_ALL}</a></td>*/
/* 		<td class="small"><a href="#" onclick="marklist('orphan', 'delete', true); return false;">{L_MARK_ALL}</a> :: <a href="#" onclick="marklist('orphan', 'delete', false); return false;">{L_UNMARK_ALL}</a></td>*/
/* 	</tr>*/
/* 	</tbody>*/
/* 	</table>*/
/* */
/* 	<br />*/
/* */
/* 	<p class="submit-buttons">*/
/* 		<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />&nbsp;*/
/* 		<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* 	</p>*/
/* 	{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
/* <!-- ELSEIF S_MANAGE -->*/
/* */
/* 	<form id="attachments" method="post" action="{U_ACTION}">*/
/* */
/* 	<fieldset class="tabulated">*/
/* 	<legend>{L_TITLE}</legend>*/
/* */
/* 	<div class="pagination top-pagination">*/
/* 	<!-- IF .pagination or TOTAL_FILES -->*/
/* 		{L_NUMBER_FILES}{L_COLON} {TOTAL_FILES} &bull; {L_TOTAL_SIZE}{L_COLON} {TOTAL_SIZE}*/
/* 		<!-- IF .pagination -->*/
/* 			&bull; <!-- INCLUDE pagination.html -->*/
/* 		<!-- ELSE -->*/
/* 			&bull; {PAGE_NUMBER}*/
/* 		<!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* 	</div>*/
/* */
/* <!-- IF .attachments -->*/
/* 	<table class="table1 zebra-table fixed-width-table">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th>{L_FILENAME}</th>*/
/* 		<th style="width: 15%;">{L_POSTED}</th>*/
/* 		<th style="width: 15%;" class="centered-text">{L_FILESIZE}</th>*/
/* 		<th style="width: 10%;" class="centered-text">{L_MARK}</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<!-- BEGIN attachments -->*/
/* 		<tr>*/
/* 			<td>*/
/* 				<!-- IF attachments.S_IN_MESSAGE -->{L_EXTENSION_GROUP}{L_COLON} <strong><!-- IF attachments.EXT_GROUP_NAME -->{attachments.EXT_GROUP_NAME}<!-- ELSE -->{L_NO_EXT_GROUP}<!-- ENDIF --></strong><br />{attachments.L_DOWNLOAD_COUNT}<br />{L_IN} {L_PRIVATE_MESSAGE}*/
/* 				<!-- ELSE --><a href="{attachments.U_FILE}" style="font-weight: bold;">{attachments.REAL_FILENAME}</a><br /><!-- IF attachments.COMMENT -->{attachments.COMMENT}<br /><!-- ENDIF -->{attachments.L_DOWNLOAD_COUNT}<br />{L_TOPIC}{L_COLON} <a href="{attachments.U_VIEW_TOPIC}">{attachments.TOPIC_TITLE}</a><!-- ENDIF -->*/
/* 			</td>*/
/* 			<td>{attachments.FILETIME}<br />{L_POST_BY_AUTHOR} {attachments.ATTACHMENT_POSTER}</td>*/
/* 			<td class="centered-text">{attachments.FILESIZE}</td>*/
/* 			<td class="centered-text"><input type="checkbox" class="radio" name="delete[{attachments.ATTACH_ID}]" /></td>*/
/* 		</tr>*/
/* 	<!-- END attachments -->*/
/* 	</tbody>*/
/* 	</table>*/
/* <!-- ELSE -->*/
/* 	<div class="errorbox">*/
/* 		<p>{L_NO_ATTACHMENTS}</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* 	<!-- IF TOTAL_FILES -->*/
/* 	<div class="pagination">*/
/* 		{L_NUMBER_FILES}{L_COLON} {TOTAL_FILES} &bull; {L_TOTAL_SIZE}{L_COLON} {TOTAL_SIZE}*/
/* 		<!-- IF .pagination -->*/
/* 			&bull; <!-- INCLUDE pagination.html -->*/
/* 		<!-- ELSE -->*/
/* 			&bull; {PAGE_NUMBER}*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<fieldset class="display-options">*/
/* 		{L_DISPLAY_LOG}{L_COLON} &nbsp;{S_LIMIT_DAYS}&nbsp;{L_SORT_BY}{L_COLON} {S_SORT_KEY} {S_SORT_DIR}*/
/* 		<input class="button2" type="submit" value="{L_GO}" name="sort" />*/
/* 	</fieldset>*/
/* */
/* 	<hr />*/
/* */
/* <!-- IF .attachments -->*/
/* 	<fieldset class="quick">*/
/* 		<input class="button2" type="submit" name="submit" value="{L_DELETE_MARKED}" /><br />*/
/* 		<p class="small">*/
/* 			<a href="#" onclick="marklist('attachments', 'delete', true); return false;">{L_MARK_ALL}</a> &bull;*/
/* 			<a href="#" onclick="marklist('attachments', 'delete', false); return false;">{L_UNMARK_ALL}</a>		*/
/* 		</p>*/
/* 	</fieldset>*/
/* <!-- ENDIF -->*/
/* 	{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
/* 	<!-- IF S_ACTION_OPTIONS -->*/
/* 	<fieldset>*/
/* 		<legend>{L_RESYNC_STATS}</legend>*/
/* 		<form id="action_stats_form" method="post" action="{U_ACTION}">*/
/* 			<dl>*/
/* 				<dt><label for="action_stats">{L_RESYNC_FILES_STATS}</label><br /><span>{L_RESYNC_FILES_STATS_EXPLAIN}</span></dt>*/
/* 				<dd><input type="hidden" name="action" value="stats" /><input class="button2" type="submit" id="action_stats" name="action_stats" value="{L_RUN}" /></dd>*/
/* 			</dl>*/
/* 		</form>*/
/* 	</fieldset>*/
/* 	<!-- ENDIF -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
