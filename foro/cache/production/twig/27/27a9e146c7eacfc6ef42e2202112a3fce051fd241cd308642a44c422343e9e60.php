<?php

/* @phpbb_viglink/event/overall_footer_after.html */
class __TwigTemplate_f24f2f7b0d4a69b19597d66832d489348dd853cd2ce3e32da4b4a137f9fd91e9 extends Twig_Template
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
        if ((isset($context["VIGLINK_ENABLED"]) ? $context["VIGLINK_ENABLED"] : null)) {
            // line 2
            echo "<script type=\"text/javascript\">
\tvar vglnk = {
\t\tkey: '";
            // line 4
            echo (isset($context["VIGLINK_API_KEY"]) ? $context["VIGLINK_API_KEY"] : null);
            echo "',
\t\tsub_id: '";
            // line 5
            echo (isset($context["VIGLINK_SUB_ID"]) ? $context["VIGLINK_SUB_ID"] : null);
            echo "'
\t};

\t(function(d, t) {
\t\tvar s = d.createElement(t); s.type = 'text/javascript'; s.async = true;
\t\ts.src = '//cdn.viglink.com/api/vglnk.js';
\t\tvar r = d.getElementsByTagName(t)[0]; r.parentNode.insertBefore(s, r);
\t}(document, 'script'));
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_viglink/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF VIGLINK_ENABLED -->*/
/* <script type="text/javascript">*/
/* 	var vglnk = {*/
/* 		key: '{VIGLINK_API_KEY}',*/
/* 		sub_id: '{VIGLINK_SUB_ID}'*/
/* 	};*/
/* */
/* 	(function(d, t) {*/
/* 		var s = d.createElement(t); s.type = 'text/javascript'; s.async = true;*/
/* 		s.src = '//cdn.viglink.com/api/vglnk.js';*/
/* 		var r = d.getElementsByTagName(t)[0]; r.parentNode.insertBefore(s, r);*/
/* 	}(document, 'script'));*/
/* </script>*/
/* <!-- ENDIF -->*/
/* */
