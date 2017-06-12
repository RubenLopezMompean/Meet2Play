<?php

/* @phpbb_viglink/event/acp_help_phpbb_stats_after.html */
class __TwigTemplate_bcc4eaab9daa854e80416e7ddc4e7a686966707456acf69e4c5c116bd99c9d9b extends Twig_Template
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
        echo "<div class=\"send-stats-tile\">
    <h2 class=\"viglink-header-h2\"><span class=\"viglink-header\"></span></h2>
    <p>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("ACP_VIGLINK_SETTINGS_EXPLAIN");
        echo "<br /><br />";
        echo (isset($context["ACP_VIGLINK_SETTINGS_CHANGE"]) ? $context["ACP_VIGLINK_SETTINGS_CHANGE"] : null);
        echo "</p>
    <dl class=\"send-stats-settings\">
        <dt>
            <input name=\"enable-viglink\" id=\"enable-viglink\" type=\"checkbox\" ";
        // line 6
        if (((isset($context["S_ENABLE_VIGLINK"]) ? $context["S_ENABLE_VIGLINK"] : null) == 1)) {
            echo "checked=\"checked\"";
        }
        echo "/>
            <label for=\"enable-viglink\"></label>
        </dt>
        <dd>";
        // line 9
        echo $this->env->getExtension('phpbb')->lang("ENABLE");
        echo "</dd>
    </dl>
</div>

";
        // line 13
        $asset_file = "@phpbb_viglink/viglink.css";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('4');
        }
        $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);    }

    public function getTemplateName()
    {
        return "@phpbb_viglink/event/acp_help_phpbb_stats_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,  39 => 9,  31 => 6,  23 => 3,  19 => 1,);
    }
}
/* <div class="send-stats-tile">*/
/*     <h2 class="viglink-header-h2"><span class="viglink-header"></span></h2>*/
/*     <p>{L_ACP_VIGLINK_SETTINGS_EXPLAIN}<br /><br />{ACP_VIGLINK_SETTINGS_CHANGE}</p>*/
/*     <dl class="send-stats-settings">*/
/*         <dt>*/
/*             <input name="enable-viglink" id="enable-viglink" type="checkbox" <!-- IF S_ENABLE_VIGLINK == 1 -->checked="checked"<!-- ENDIF -->/>*/
/*             <label for="enable-viglink"></label>*/
/*         </dt>*/
/*         <dd>{L_ENABLE}</dd>*/
/*     </dl>*/
/* </div>*/
/* */
/* <!-- INCLUDECSS @phpbb_viglink/viglink.css -->*/
/* */
