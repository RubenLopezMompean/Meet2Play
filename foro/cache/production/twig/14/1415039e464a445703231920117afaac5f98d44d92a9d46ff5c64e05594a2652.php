<?php

/* progress_bar.html */
class __TwigTemplate_196d3aa102cfce522980897037bb31535ca1e0624371bd31d1435c381a9e9fc0 extends Twig_Template
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
        $location = "simple_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("simple_header.html", "progress_bar.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<script type=\"text/javascript\">
// <![CDATA[
\t/**
\t* Close previously opened popup
\t*/
\tfunction close_popup()
\t{
\t\tif (opener != null)
\t\t{
\t\t\tif (opener.close_waitscreen != null)
\t\t\t{
\t\t\t\tif (opener.close_waitscreen == 1)
\t\t\t\t{
\t\t\t\t\topener.close_waitscreen = 0;
\t\t\t\t\tself.close();
\t\t\t\t\treturn 0;
\t\t\t\t}
\t\t\t}
\t\t}
\t\tsetTimeout(\"close_popup()\", 1000);
\t\treturn 0;
\t}
// ]]>
</script>

<div class=\"successbox\">
\t<h3>";
        // line 29
        echo $this->env->getExtension('phpbb')->lang("PROGRESS");
        echo "</h3>
\t<img src=\"images/progress_bar.gif\" alt=\"";
        // line 30
        echo $this->env->getExtension('phpbb')->lang("PROGRESS");
        echo "\" />
\t<p>";
        // line 31
        echo $this->env->getExtension('phpbb')->lang("PROGRESS_EXPLAIN");
        echo "</p>
</div>

<script type=\"text/javascript\">
// <![CDATA[
\tclose_popup();
// ]]>
</script>

";
        // line 40
        $location = "simple_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("simple_footer.html", "progress_bar.html", 40)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "progress_bar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 40,  68 => 31,  64 => 30,  60 => 29,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE simple_header.html -->*/
/* */
/* <script type="text/javascript">*/
/* // <![CDATA[*/
/* 	/***/
/* 	* Close previously opened popup*/
/* 	*//* */
/* 	function close_popup()*/
/* 	{*/
/* 		if (opener != null)*/
/* 		{*/
/* 			if (opener.close_waitscreen != null)*/
/* 			{*/
/* 				if (opener.close_waitscreen == 1)*/
/* 				{*/
/* 					opener.close_waitscreen = 0;*/
/* 					self.close();*/
/* 					return 0;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 		setTimeout("close_popup()", 1000);*/
/* 		return 0;*/
/* 	}*/
/* // ]]>*/
/* </script>*/
/* */
/* <div class="successbox">*/
/* 	<h3>{L_PROGRESS}</h3>*/
/* 	<img src="images/progress_bar.gif" alt="{L_PROGRESS}" />*/
/* 	<p>{L_PROGRESS_EXPLAIN}</p>*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/* // <![CDATA[*/
/* 	close_popup();*/
/* // ]]>*/
/* </script>*/
/* */
/* <!-- INCLUDE simple_footer.html -->*/
/* */
