<?php

/* navbar_header.html */
class __TwigTemplate_9fadcb52d929c3dba4736f04dd5acbfe1d6eed5701f4291a426358d2f91ac637 extends Twig_Template
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
        echo "<div class=\"navbar\" role=\"navigation\">
\t<div class=\"inner\">

\t<ul id=\"nav-main\" class=\"nav-main linklist\" role=\"menubar\">

\t\t<li id=\"quick-links\" class=\"quick-links dropdown-container responsive-menu";
        // line 6
        if (( !(isset($context["S_DISPLAY_QUICK_LINKS"]) ? $context["S_DISPLAY_QUICK_LINKS"] : null) &&  !(isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null))) {
            echo " hidden";
        }
        echo "\" data-skip-responsive=\"true\">
\t\t\t<a href=\"#\" class=\"dropdown-trigger\">
\t\t\t\t<i class=\"icon fa-bars fa-fw\" aria-hidden=\"true\"></i><span>";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("QUICK_LINKS");
        echo "</span>
\t\t\t</a>
\t\t\t<div class=\"dropdown\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t";
        // line 13
        // line 14
        echo "
\t\t\t\t\t";
        // line 15
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            // line 16
            echo "\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t";
            // line 17
            if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
                // line 18
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 19
                echo (isset($context["U_SEARCH_SELF"]) ? $context["U_SEARCH_SELF"] : null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
                // line 20
                echo $this->env->getExtension('phpbb')->lang("SEARCH_SELF");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t\t";
            if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                // line 25
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 26
                echo (isset($context["U_SEARCH_NEW"]) ? $context["U_SEARCH_NEW"] : null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 27
                echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t\t\t";
            if ((isset($context["S_LOAD_UNREADS"]) ? $context["S_LOAD_UNREADS"] : null)) {
                // line 32
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 33
                echo (isset($context["U_SEARCH_UNREAD"]) ? $context["U_SEARCH_UNREAD"] : null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 34
                echo $this->env->getExtension('phpbb')->lang("SEARCH_UNREAD");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo (isset($context["U_SEARCH_UNANSWERED"]) ? $context["U_SEARCH_UNANSWERED"] : null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
            // line 40
            echo $this->env->getExtension('phpbb')->lang("SEARCH_UNANSWERED");
            echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 44
            echo (isset($context["U_SEARCH_ACTIVE_TOPICS"]) ? $context["U_SEARCH_ACTIVE_TOPICS"] : null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-blue\" aria-hidden=\"true\"></i><span>";
            // line 45
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 50
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 51
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 55
        echo "
\t\t\t\t\t";
        // line 56
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null) || (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)))) {
            // line 57
            echo "\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t";
            // line 58
            if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
                // line 59
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 60
                echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-group fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 61
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t\t\t";
            if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
                // line 66
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 67
                echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-shield fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 68
                echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 72
            echo "\t\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t\t<li class=\"separator\"></li>

\t\t\t\t\t";
        // line 75
        // line 76
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>

\t\t";
        // line 80
        // line 81
        echo "\t\t<li ";
        if ( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            echo "data-skip-responsive=\"true\"";
        } else {
            echo "data-last-responsive=\"true\"";
        }
        echo ">
\t\t\t<a href=\"";
        // line 82
        echo (isset($context["U_FAQ"]) ? $context["U_FAQ"] : null);
        echo "\" rel=\"help\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-question-circle fa-fw\" aria-hidden=\"true\"></i><span>";
        // line 83
        echo $this->env->getExtension('phpbb')->lang("FAQ");
        echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
        // line 86
        // line 87
        echo "\t\t";
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            // line 88
            echo "\t\t\t<li data-last-responsive=\"true\">
\t\t\t\t<a href=\"";
            // line 89
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-cogs fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 90
            echo $this->env->getExtension('phpbb')->lang("ACP_SHORT");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 94
        echo "\t\t";
        if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
            // line 95
            echo "\t\t\t<li data-last-responsive=\"true\">
\t\t\t\t<a href=\"";
            // line 96
            echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-gavel fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 97
            echo $this->env->getExtension('phpbb')->lang("MCP_SHORT");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 101
        echo "
\t";
        // line 102
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 103
            echo "\t\t";
            // line 104
            echo "\t\t<li id=\"username_logged_in\" class=\"rightside ";
            if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo " no-bulletin";
            }
            echo "\" data-skip-responsive=\"true\">
\t\t\t";
            // line 105
            // line 106
            echo "\t\t\t<div class=\"header-profile dropdown-container\">
\t\t\t\t<a href=\"";
            // line 107
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" class=\"header-avatar dropdown-trigger\">";
            if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
                echo " ";
            }
            echo " ";
            echo (isset($context["CURRENT_USERNAME_SIMPLE"]) ? $context["CURRENT_USERNAME_SIMPLE"] : null);
            echo "</a>
\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t";
            // line 111
            if ((isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null)) {
                // line 112
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 113
                echo (isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null);
                echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-refresh fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 114
                echo $this->env->getExtension('phpbb')->lang("RESTORE_PERMISSIONS");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 118
            echo "
\t\t\t\t\t";
            // line 119
            // line 120
            echo "
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 122
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-sliders fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 123
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 127
            echo (isset($context["U_USER_PROFILE"]) ? $context["U_USER_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-user fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 128
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t";
            // line 132
            // line 133
            echo "
\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 136
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 137
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 143
            // line 144
            echo "\t\t</li>
\t\t";
            // line 145
            if ((isset($context["S_DISPLAY_PM"]) ? $context["S_DISPLAY_PM"] : null)) {
                // line 146
                echo "\t\t\t<li class=\"rightside\" data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 147
                echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-inbox fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 148
                echo $this->env->getExtension('phpbb')->lang("PRIVATE_MESSAGES");
                echo " </span><strong class=\"badge";
                if ( !(isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null)) {
                    echo " hidden";
                }
                echo "\">";
                echo (isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null);
                echo "</strong>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 152
            echo "\t\t";
            if ((isset($context["S_NOTIFICATIONS_DISPLAY"]) ? $context["S_NOTIFICATIONS_DISPLAY"] : null)) {
                // line 153
                echo "\t\t\t<li class=\"dropdown-container dropdown-";
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo " rightside\" data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 154
                echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
                echo "\" id=\"notification_list_button\" class=\"dropdown-trigger\">
\t\t\t\t\t<i class=\"icon fa-bell fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 155
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo " </span><strong class=\"badge";
                if ( !(isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null)) {
                    echo " hidden";
                }
                echo "\">";
                echo (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null);
                echo "</strong>
\t\t\t\t</a>
\t\t\t\t";
                // line 157
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "navbar_header.html", 157)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 158
                echo "\t\t\t</li>
\t\t";
            }
            // line 160
            echo "\t\t";
            // line 161
            echo "\t";
        } else {
            // line 162
            echo "\t\t<li class=\"rightside\"  data-skip-responsive=\"true\">
\t\t\t<a href=\"";
            // line 163
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 164
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
            // line 167
            if (((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null) &&  !((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null) || (isset($context["S_REGISTRATION"]) ? $context["S_REGISTRATION"] : null)))) {
                // line 168
                echo "\t\t\t<li class=\"rightside\" data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 169
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-pencil-square-o  fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 170
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 174
            echo "\t\t";
            // line 175
            echo "\t";
        }
        // line 176
        echo "\t</ul>

\t<ul id=\"nav-breadcrumbs\" class=\"nav-breadcrumbs linklist navlinks\" role=\"menubar\">
\t\t";
        // line 179
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 180
        echo "\t\t";
        // line 181
        echo "\t\t<li class=\"breadcrumbs\">
\t\t\t";
        // line 182
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            // line 183
            echo "\t\t\t\t<span class=\"crumb\" ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" itemprop=\"url\" data-navbar-reference=\"home\"><i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</span></a></span>
\t\t\t";
        }
        // line 185
        echo "\t\t\t";
        // line 186
        echo "\t\t\t\t<span class=\"crumb\" ";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
        echo "><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" itemprop=\"url\" accesskey=\"h\" data-navbar-reference=\"index\">";
        if ( !(isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<i class=\"icon fa-home fa-fw\"></i>";
        }
        echo "<span itemprop=\"title\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</span></a></span>

\t\t\t";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 189
            echo "\t\t\t\t";
            // line 190
            echo "\t\t\t\t<span class=\"crumb\" ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            if ($this->getAttribute($context["navlinks"], "MICRODATA", array())) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", array());
            }
            echo "><a href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "</span></a></span>
\t\t\t\t";
            // line 191
            // line 192
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "\t\t\t";
        // line 194
        echo "\t\t</li>
\t\t";
        // line 195
        // line 196
        echo "
\t\t";
        // line 197
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
            // line 198
            echo "\t\t\t<li class=\"rightside responsive-search\">
\t\t\t\t<a href=\"";
            // line 199
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV_EXPLAIN");
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 200
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 204
        echo "\t</ul>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  556 => 204,  549 => 200,  543 => 199,  540 => 198,  538 => 197,  535 => 196,  534 => 195,  531 => 194,  529 => 193,  523 => 192,  522 => 191,  509 => 190,  507 => 189,  503 => 188,  489 => 186,  487 => 185,  477 => 183,  475 => 182,  472 => 181,  470 => 180,  467 => 179,  462 => 176,  459 => 175,  457 => 174,  450 => 170,  446 => 169,  443 => 168,  441 => 167,  435 => 164,  429 => 163,  426 => 162,  423 => 161,  421 => 160,  417 => 158,  405 => 157,  394 => 155,  390 => 154,  385 => 153,  382 => 152,  369 => 148,  365 => 147,  362 => 146,  360 => 145,  357 => 144,  356 => 143,  347 => 137,  341 => 136,  336 => 133,  335 => 132,  328 => 128,  322 => 127,  315 => 123,  309 => 122,  305 => 120,  304 => 119,  301 => 118,  294 => 114,  290 => 113,  287 => 112,  285 => 111,  271 => 107,  268 => 106,  267 => 105,  260 => 104,  258 => 103,  256 => 102,  253 => 101,  246 => 97,  240 => 96,  237 => 95,  234 => 94,  227 => 90,  221 => 89,  218 => 88,  215 => 87,  214 => 86,  208 => 83,  202 => 82,  193 => 81,  192 => 80,  186 => 76,  185 => 75,  181 => 73,  178 => 72,  171 => 68,  167 => 67,  164 => 66,  161 => 65,  154 => 61,  150 => 60,  147 => 59,  145 => 58,  142 => 57,  140 => 56,  137 => 55,  130 => 51,  126 => 50,  118 => 45,  114 => 44,  107 => 40,  103 => 39,  100 => 38,  93 => 34,  89 => 33,  86 => 32,  83 => 31,  76 => 27,  72 => 26,  69 => 25,  66 => 24,  59 => 20,  55 => 19,  52 => 18,  50 => 17,  47 => 16,  45 => 15,  42 => 14,  41 => 13,  33 => 8,  26 => 6,  19 => 1,);
    }
}
/* <div class="navbar" role="navigation">*/
/* 	<div class="inner">*/
/* */
/* 	<ul id="nav-main" class="nav-main linklist" role="menubar">*/
/* */
/* 		<li id="quick-links" class="quick-links dropdown-container responsive-menu<!-- IF not S_DISPLAY_QUICK_LINKS and not S_DISPLAY_SEARCH --> hidden<!-- ENDIF -->" data-skip-responsive="true">*/
/* 			<a href="#" class="dropdown-trigger">*/
/* 				<i class="icon fa-bars fa-fw" aria-hidden="true"></i><span>{L_QUICK_LINKS}</span>*/
/* 			</a>*/
/* 			<div class="dropdown">*/
/* 				<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 				<ul class="dropdown-contents" role="menu">*/
/* 					<!-- EVENT navbar_header_quick_links_before -->*/
/* */
/* 					<!-- IF S_DISPLAY_SEARCH -->*/
/* 						<li class="separator"></li>*/
/* 						<!-- IF S_REGISTERED_USER -->*/
/* 							<li>*/
/* 								<a href="{U_SEARCH_SELF}" role="menuitem">*/
/* 									<i class="icon fa-file-o fa-fw icon-gray" aria-hidden="true"></i><span>{L_SEARCH_SELF}</span>*/
/* 								</a>*/
/* 							</li>*/
/* 						<!-- ENDIF -->*/
/* 						<!-- IF S_USER_LOGGED_IN -->*/
/* 							<li>*/
/* 								<a href="{U_SEARCH_NEW}" role="menuitem">*/
/* 									<i class="icon fa-file-o fa-fw icon-red" aria-hidden="true"></i><span>{L_SEARCH_NEW}</span>*/
/* 								</a>*/
/* 							</li>*/
/* 						<!-- ENDIF -->*/
/* 						<!-- IF S_LOAD_UNREADS -->*/
/* 							<li>*/
/* 								<a href="{U_SEARCH_UNREAD}" role="menuitem">*/
/* 									<i class="icon fa-file-o fa-fw icon-red" aria-hidden="true"></i><span>{L_SEARCH_UNREAD}</span>*/
/* 								</a>*/
/* 							</li>*/
/* 						<!-- ENDIF -->*/
/* 							<li>*/
/* 								<a href="{U_SEARCH_UNANSWERED}" role="menuitem">*/
/* 									<i class="icon fa-file-o fa-fw icon-gray" aria-hidden="true"></i><span>{L_SEARCH_UNANSWERED}</span>*/
/* 								</a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="{U_SEARCH_ACTIVE_TOPICS}" role="menuitem">*/
/* 									<i class="icon fa-file-o fa-fw icon-blue" aria-hidden="true"></i><span>{L_SEARCH_ACTIVE_TOPICS}</span>*/
/* 								</a>*/
/* 							</li>*/
/* 							<li class="separator"></li>*/
/* 							<li>*/
/* 								<a href="{U_SEARCH}" role="menuitem">*/
/* 									<i class="icon fa-search fa-fw" aria-hidden="true"></i><span>{L_SEARCH}</span>*/
/* 								</a>*/
/* 							</li>*/
/* 					<!-- ENDIF -->*/
/* */
/* 					<!-- IF not S_IS_BOT and (S_DISPLAY_MEMBERLIST or U_TEAM) -->*/
/* 						<li class="separator"></li>*/
/* 						<!-- IF S_DISPLAY_MEMBERLIST -->*/
/* 							<li>*/
/* 								<a href="{U_MEMBERLIST}" role="menuitem">*/
/* 									<i class="icon fa-group fa-fw" aria-hidden="true"></i><span>{L_MEMBERLIST}</span>*/
/* 								</a>*/
/* 							</li>*/
/* 						<!-- ENDIF -->*/
/* 						<!-- IF U_TEAM -->*/
/* 							<li>*/
/* 								<a href="{U_TEAM}" role="menuitem">*/
/* 									<i class="icon fa-shield fa-fw" aria-hidden="true"></i><span>{L_THE_TEAM}</span>*/
/* 								</a>*/
/* 							</li>*/
/* 						<!-- ENDIF -->*/
/* 					<!-- ENDIF -->*/
/* 					<li class="separator"></li>*/
/* */
/* 					<!-- EVENT navbar_header_quick_links_after -->*/
/* 				</ul>*/
/* 			</div>*/
/* 		</li>*/
/* */
/* 		<!-- EVENT overall_header_navigation_prepend -->*/
/* 		<li <!-- IF not S_USER_LOGGED_IN -->data-skip-responsive="true"<!-- ELSE -->data-last-responsive="true"<!-- ENDIF -->>*/
/* 			<a href="{U_FAQ}" rel="help" title="{L_FAQ_EXPLAIN}" role="menuitem">*/
/* 				<i class="icon fa-question-circle fa-fw" aria-hidden="true"></i><span>{L_FAQ}</span>*/
/* 			</a>*/
/* 		</li>*/
/* 		<!-- EVENT overall_header_navigation_append -->*/
/* 		<!-- IF U_ACP -->*/
/* 			<li data-last-responsive="true">*/
/* 				<a href="{U_ACP}" title="{L_ACP}" role="menuitem">*/
/* 					<i class="icon fa-cogs fa-fw" aria-hidden="true"></i><span>{L_ACP_SHORT}</span>*/
/* 				</a>*/
/* 			</li>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF U_MCP -->*/
/* 			<li data-last-responsive="true">*/
/* 				<a href="{U_MCP}" title="{L_MCP}" role="menuitem">*/
/* 					<i class="icon fa-gavel fa-fw" aria-hidden="true"></i><span>{L_MCP_SHORT}</span>*/
/* 				</a>*/
/* 			</li>*/
/* 		<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_REGISTERED_USER -->*/
/* 		<!-- EVENT navbar_header_user_profile_prepend -->*/
/* 		<li id="username_logged_in" class="rightside <!-- IF CURRENT_USER_AVATAR --> no-bulletin<!-- ENDIF -->" data-skip-responsive="true">*/
/* 			<!-- EVENT navbar_header_username_prepend -->*/
/* 			<div class="header-profile dropdown-container">*/
/* 				<a href="{U_PROFILE}" class="header-avatar dropdown-trigger"><!-- IF CURRENT_USER_AVATAR -->{CURRENT_USER_AVATAR} <!-- ENDIF --> {CURRENT_USERNAME_SIMPLE}</a>*/
/* 				<div class="dropdown">*/
/* 					<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 					<ul class="dropdown-contents" role="menu">*/
/* 						<!-- IF U_RESTORE_PERMISSIONS -->*/
/* 							<li>*/
/* 								<a href="{U_RESTORE_PERMISSIONS}">*/
/* 									<i class="icon fa-refresh fa-fw" aria-hidden="true"></i><span>{L_RESTORE_PERMISSIONS}</span>*/
/* 								</a>*/
/* 							</li>*/
/* 						<!-- ENDIF -->*/
/* */
/* 					<!-- EVENT navbar_header_profile_list_before -->*/
/* */
/* 						<li>*/
/* 							<a href="{U_PROFILE}" title="{L_PROFILE}" role="menuitem">*/
/* 								<i class="icon fa-sliders fa-fw" aria-hidden="true"></i><span>{L_PROFILE}</span>*/
/* 							</a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="{U_USER_PROFILE}" title="{L_READ_PROFILE}" role="menuitem">*/
/* 								<i class="icon fa-user fa-fw" aria-hidden="true"></i><span>{L_READ_PROFILE}</span>*/
/* 							</a>*/
/* 						</li>*/
/* */
/* 						<!-- EVENT navbar_header_profile_list_after -->*/
/* */
/* 						<li class="separator"></li>*/
/* 						<li>*/
/* 							<a href="{U_LOGIN_LOGOUT}" title="{L_LOGIN_LOGOUT}" accesskey="x" role="menuitem">*/
/* 								<i class="icon fa-power-off fa-fw" aria-hidden="true"></i><span>{L_LOGIN_LOGOUT}</span>*/
/* 							</a>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- EVENT navbar_header_username_append -->*/
/* 		</li>*/
/* 		<!-- IF S_DISPLAY_PM -->*/
/* 			<li class="rightside" data-skip-responsive="true">*/
/* 				<a href="{U_PRIVATEMSGS}" role="menuitem">*/
/* 					<i class="icon fa-inbox fa-fw" aria-hidden="true"></i><span>{L_PRIVATE_MESSAGES} </span><strong class="badge<!-- IF not PRIVATE_MESSAGE_COUNT --> hidden<!-- ENDIF -->">{PRIVATE_MESSAGE_COUNT}</strong>*/
/* 				</a>*/
/* 			</li>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_NOTIFICATIONS_DISPLAY -->*/
/* 			<li class="dropdown-container dropdown-{S_CONTENT_FLOW_END} rightside" data-skip-responsive="true">*/
/* 				<a href="{U_VIEW_ALL_NOTIFICATIONS}" id="notification_list_button" class="dropdown-trigger">*/
/* 					<i class="icon fa-bell fa-fw" aria-hidden="true"></i><span>{L_NOTIFICATIONS} </span><strong class="badge<!-- IF not NOTIFICATIONS_COUNT --> hidden<!-- ENDIF -->">{NOTIFICATIONS_COUNT}</strong>*/
/* 				</a>*/
/* 				<!-- INCLUDE notification_dropdown.html -->*/
/* 			</li>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- EVENT navbar_header_user_profile_append -->*/
/* 	<!-- ELSE -->*/
/* 		<li class="rightside"  data-skip-responsive="true">*/
/* 			<a href="{U_LOGIN_LOGOUT}" title="{L_LOGIN_LOGOUT}" accesskey="x" role="menuitem">*/
/* 				<i class="icon fa-power-off fa-fw" aria-hidden="true"></i><span>{L_LOGIN_LOGOUT}</span>*/
/* 			</a>*/
/* 		</li>*/
/* 		<!-- IF S_REGISTER_ENABLED and not (S_SHOW_COPPA or S_REGISTRATION) -->*/
/* 			<li class="rightside" data-skip-responsive="true">*/
/* 				<a href="{U_REGISTER}" role="menuitem">*/
/* 					<i class="icon fa-pencil-square-o  fa-fw" aria-hidden="true"></i><span>{L_REGISTER}</span>*/
/* 				</a>*/
/* 			</li>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- EVENT navbar_header_logged_out_content -->*/
/* 	<!-- ENDIF -->*/
/* 	</ul>*/
/* */
/* 	<ul id="nav-breadcrumbs" class="nav-breadcrumbs linklist navlinks" role="menubar">*/
/* 		<!-- DEFINE $MICRODATA = ' itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""' -->*/
/* 		<!-- EVENT overall_header_breadcrumbs_before -->*/
/* 		<li class="breadcrumbs">*/
/* 			<!-- IF U_SITE_HOME -->*/
/* 				<span class="crumb" {$MICRODATA}><a href="{U_SITE_HOME}" itemprop="url" data-navbar-reference="home"><i class="icon fa-home fa-fw" aria-hidden="true"></i><span itemprop="title">{L_SITE_HOME}</span></a></span>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- EVENT overall_header_breadcrumb_prepend -->*/
/* 				<span class="crumb" {$MICRODATA}><a href="{U_INDEX}" itemprop="url" accesskey="h" data-navbar-reference="index"><!-- IF not U_SITE_HOME --><i class="icon fa-home fa-fw"></i><!-- ENDIF --><span itemprop="title">{L_INDEX}</span></a></span>*/
/* */
/* 			<!-- BEGIN navlinks -->*/
/* 				<!-- EVENT overall_header_navlink_prepend -->*/
/* 				<span class="crumb" {$MICRODATA}<!-- IF navlinks.MICRODATA --> {navlinks.MICRODATA}<!-- ENDIF -->><a href="{navlinks.U_VIEW_FORUM}" itemprop="url"><span itemprop="title">{navlinks.FORUM_NAME}</span></a></span>*/
/* 				<!-- EVENT overall_header_navlink_append -->*/
/* 			<!-- END navlinks -->*/
/* 			<!-- EVENT overall_header_breadcrumb_append -->*/
/* 		</li>*/
/* 		<!-- EVENT overall_header_breadcrumbs_after -->*/
/* */
/* 		<!-- IF S_DISPLAY_SEARCH and not S_IN_SEARCH -->*/
/* 			<li class="rightside responsive-search">*/
/* 				<a href="{U_SEARCH}" title="{L_SEARCH_ADV_EXPLAIN}" role="menuitem">*/
/* 					<i class="icon fa-search fa-fw" aria-hidden="true"></i><span class="sr-only">{L_SEARCH}</span>*/
/* 				</a>*/
/* 			</li>*/
/* 		<!-- ENDIF -->*/
/* 	</ul>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
