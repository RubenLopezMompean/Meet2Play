<?php

/* simple_header.html */
class __TwigTemplate_b9a0687ce96acbd94578674da71c0b85f2013f6a23c7c4d7f4f64aabe6dc0d11 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo "\" lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 7
        if ((isset($context["META"]) ? $context["META"] : null)) {
            echo (isset($context["META"]) ? $context["META"] : null);
        }
        // line 8
        echo "<title>";
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        echo "</title>

<link href=\"style/admin.css?assets_version=";
        // line 10
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />

<script type=\"text/javascript\">
// <![CDATA[
var jump_page = '";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("JUMP_PAGE"), "js");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "';
var on_page = '";
        // line 15
        echo (isset($context["CURRENT_PAGE"]) ? $context["CURRENT_PAGE"] : null);
        echo "';
var per_page = '";
        // line 16
        echo (isset($context["PER_PAGE"]) ? $context["PER_PAGE"] : null);
        echo "';
var base_url = '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["BASE_URL"]) ? $context["BASE_URL"] : null), "js");
        echo "';

/**
* Window popup
*/
function popup(url, width, height, name)
{
\tif (!name)
\t{
\t\tname = '_popup';
\t}

\twindow.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes, width=' + width);
\treturn false;
}

/**
* Jump to page
*/
function jumpto()
{
\tvar page = prompt(jump_page, on_page);

\tif (page !== null && !isNaN(page) && page == Math.floor(page) && page > 0)
\t{
\t\tif (base_url.indexOf('?') == -1)
\t\t{
\t\t\tdocument.location.href = base_url + '?start=' + ((page - 1) * per_page);
\t\t}
\t\telse
\t\t{
\t\t\tdocument.location.href = base_url.replace(/&amp;/g, '&') + '&start=' + ((page - 1) * per_page);
\t\t}
\t}
}

/**
* Mark/unmark checkboxes
* id = ID of parent container, name = name prefix, state = state [true/false]
*/
function marklist(id, name, state)
{
\tvar parent = document.getElementById(id);
\tif (!parent)
\t{
\t\treturn;
\t}

\tvar rb = parent.getElementsByTagName('input');
\t
\tfor (var r = 0; r < rb.length; r++)
\t{
\t\tif (rb[r].name.substr(0, name.length) == name)
\t\t{
\t\t\trb[r].checked = state;
\t\t}
\t}
}

/**
* Find a member
*/
function find_username(url)
{
\tpopup(url, 760, 570, '_usersearch');
\treturn false;
}

// ]]>
</script>
";
        // line 87
        // line 88
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS", array());
        echo "
";
        // line 89
        // line 90
        echo "</head>

<body class=\"";
        // line 92
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo " ";
        echo (isset($context["BODY_CLASS"]) ? $context["BODY_CLASS"] : null);
        echo "\">

";
        // line 94
        // line 95
        echo "
<div id=\"page-body\" class=\"simple-page-body\">
";
    }

    public function getTemplateName()
    {
        return "simple_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 95,  152 => 94,  145 => 92,  141 => 90,  140 => 89,  136 => 88,  135 => 87,  62 => 17,  58 => 16,  54 => 15,  49 => 14,  42 => 10,  36 => 8,  32 => 7,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{S_CONTENT_DIRECTION}" lang="{S_USER_LANG}">*/
/* <head>*/
/* <meta charset="utf-8">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1" />*/
/* <!-- IF META -->{META}<!-- ENDIF -->*/
/* <title>{PAGE_TITLE}</title>*/
/* */
/* <link href="style/admin.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet" type="text/css" media="screen" />*/
/* */
/* <script type="text/javascript">*/
/* // <![CDATA[*/
/* var jump_page = '{LA_JUMP_PAGE}{L_COLON}';*/
/* var on_page = '{CURRENT_PAGE}';*/
/* var per_page = '{PER_PAGE}';*/
/* var base_url = '{BASE_URL|e('js')}';*/
/* */
/* /***/
/* * Window popup*/
/* *//* */
/* function popup(url, width, height, name)*/
/* {*/
/* 	if (!name)*/
/* 	{*/
/* 		name = '_popup';*/
/* 	}*/
/* */
/* 	window.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes, width=' + width);*/
/* 	return false;*/
/* }*/
/* */
/* /***/
/* * Jump to page*/
/* *//* */
/* function jumpto()*/
/* {*/
/* 	var page = prompt(jump_page, on_page);*/
/* */
/* 	if (page !== null && !isNaN(page) && page == Math.floor(page) && page > 0)*/
/* 	{*/
/* 		if (base_url.indexOf('?') == -1)*/
/* 		{*/
/* 			document.location.href = base_url + '?start=' + ((page - 1) * per_page);*/
/* 		}*/
/* 		else*/
/* 		{*/
/* 			document.location.href = base_url.replace(/&amp;/g, '&') + '&start=' + ((page - 1) * per_page);*/
/* 		}*/
/* 	}*/
/* }*/
/* */
/* /***/
/* * Mark/unmark checkboxes*/
/* * id = ID of parent container, name = name prefix, state = state [true/false]*/
/* *//* */
/* function marklist(id, name, state)*/
/* {*/
/* 	var parent = document.getElementById(id);*/
/* 	if (!parent)*/
/* 	{*/
/* 		return;*/
/* 	}*/
/* */
/* 	var rb = parent.getElementsByTagName('input');*/
/* 	*/
/* 	for (var r = 0; r < rb.length; r++)*/
/* 	{*/
/* 		if (rb[r].name.substr(0, name.length) == name)*/
/* 		{*/
/* 			rb[r].checked = state;*/
/* 		}*/
/* 	}*/
/* }*/
/* */
/* /***/
/* * Find a member*/
/* *//* */
/* function find_username(url)*/
/* {*/
/* 	popup(url, 760, 570, '_usersearch');*/
/* 	return false;*/
/* }*/
/* */
/* // ]]>*/
/* </script>*/
/* <!-- EVENT acp_simple_header_head_append -->*/
/* {$STYLESHEETS}*/
/* <!-- EVENT acp_simple_header_stylesheets_after -->*/
/* </head>*/
/* */
/* <body class="{S_CONTENT_DIRECTION} {BODY_CLASS}">*/
/* */
/* <!-- EVENT acp_simple_header_body_before -->*/
/* */
/* <div id="page-body" class="simple-page-body">*/
/* */
