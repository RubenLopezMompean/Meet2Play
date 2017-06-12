<?php

/* display_options.html */
class __TwigTemplate_736dc82ed1cccefb1e21f00d44594e9263e0cb97cc9ca3443a225969ff3c0778 extends Twig_Template
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
        echo "<div class=\"dropdown-container dropdown-container-";
        echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
        echo " dropdown-button-control sort-tools\">
\t<span title=\"";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("SORT_OPTIONS");
        echo "\" class=\"button button-secondary dropdown-trigger dropdown-select\">
\t\t<i class=\"icon fa-sort-amount-asc fa-fw\" aria-hidden=\"true\"></i>
\t\t<span class=\"caret\"><i class=\"icon fa-sort-down fa-fw\" aria-hidden=\"true\"></i></span>
\t</span>
\t<div class=\"dropdown hidden\">
\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t<div class=\"dropdown-contents\">
\t\t\t<fieldset class=\"display-options\">
\t\t\t";
        // line 10
        if ((isset($context["S_SORT_OPTIONS"]) ? $context["S_SORT_OPTIONS"] : null)) {
            // line 11
            echo "\t\t\t\t<label>";
            echo $this->env->getExtension('phpbb')->lang("SORT_BY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"sk\" id=\"sk\">";
            echo (isset($context["S_SORT_OPTIONS"]) ? $context["S_SORT_OPTIONS"] : null);
            echo "</select></label>
\t\t\t\t<label>";
            // line 12
            echo $this->env->getExtension('phpbb')->lang("SORT_DIRECTION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"sd\" id=\"sd\">";
            echo (isset($context["S_ORDER_SELECT"]) ? $context["S_ORDER_SELECT"] : null);
            echo "</select></label>
\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t<input type=\"submit\" class=\"button2\" name=\"sort\" value=\"";
            // line 14
            echo $this->env->getExtension('phpbb')->lang("SORT");
            echo "\" />
\t\t\t";
        } else {
            // line 16
            echo "\t\t\t\t<label>";
            echo $this->env->getExtension('phpbb')->lang("DISPLAY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
            echo "</label>
\t\t\t\t";
            // line 17
            if ((isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null)) {
                // line 18
                echo "\t\t\t\t<label>";
                echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
                echo "</label>
\t\t\t\t<label>";
                // line 19
                echo $this->env->getExtension('phpbb')->lang("SORT_DIRECTION");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
                echo "</label>
\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t<input type=\"submit\" class=\"button2\" name=\"sort\" value=\"";
            // line 22
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" />
\t\t\t";
        }
        // line 24
        echo "\t\t\t</fieldset>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "display_options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  87 => 22,  84 => 21,  76 => 19,  68 => 18,  66 => 17,  58 => 16,  53 => 14,  45 => 12,  37 => 11,  35 => 10,  24 => 2,  19 => 1,);
    }
}
/* <div class="dropdown-container dropdown-container-{S_CONTENT_FLOW_BEGIN} dropdown-button-control sort-tools">*/
/* 	<span title="{L_SORT_OPTIONS}" class="button button-secondary dropdown-trigger dropdown-select">*/
/* 		<i class="icon fa-sort-amount-asc fa-fw" aria-hidden="true"></i>*/
/* 		<span class="caret"><i class="icon fa-sort-down fa-fw" aria-hidden="true"></i></span>*/
/* 	</span>*/
/* 	<div class="dropdown hidden">*/
/* 		<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 		<div class="dropdown-contents">*/
/* 			<fieldset class="display-options">*/
/* 			<!-- IF S_SORT_OPTIONS -->*/
/* 				<label>{L_SORT_BY}{L_COLON} <select name="sk" id="sk">{S_SORT_OPTIONS}</select></label>*/
/* 				<label>{L_SORT_DIRECTION}{L_COLON} <select name="sd" id="sd">{S_ORDER_SELECT}</select></label>*/
/* 				<hr class="dashed" />*/
/* 				<input type="submit" class="button2" name="sort" value="{L_SORT}" />*/
/* 			<!-- ELSE -->*/
/* 				<label>{L_DISPLAY}{L_COLON} {S_SELECT_SORT_DAYS}</label>*/
/* 				<!-- IF S_SELECT_SORT_KEY -->*/
/* 				<label>{L_SORT_BY}{L_COLON} {S_SELECT_SORT_KEY}</label>*/
/* 				<label>{L_SORT_DIRECTION}{L_COLON} {S_SELECT_SORT_DIR}</label>*/
/* 				<!-- ENDIF -->*/
/* 				<hr class="dashed" />*/
/* 				<input type="submit" class="button2" name="sort" value="{L_GO}" />*/
/* 			<!-- ENDIF -->*/
/* 			</fieldset>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
