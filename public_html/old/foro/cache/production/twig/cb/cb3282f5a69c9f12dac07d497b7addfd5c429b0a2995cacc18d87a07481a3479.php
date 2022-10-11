<?php

/* navbar_header.html */
class __TwigTemplate_ae567b8e1dcfdb468f18085dadbd8198a935f4e23e4c8ce1d99fcd37398af013 extends Twig_Template
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
        ob_start();
        // line 2
        echo "\t";
        // line 3
        echo "
\t";
        // line 4
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 5
            echo "\t\t<li class=\"separator\"></li>
\t\t";
            // line 6
            if (($context["S_REGISTERED_USER"] ?? null)) {
                // line 7
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 8
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
                // line 9
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_SELF");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t";
            }
            // line 13
            echo "\t\t";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 14
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 15
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 16
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_NEW");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t";
            }
            // line 20
            echo "\t\t";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                // line 21
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 22
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 23
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNREAD");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t";
            }
            // line 27
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 28
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
            // line 29
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNANSWERED");
            echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-blue\" aria-hidden=\"true\"></i><span>";
            // line 34
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo ($context["U_SEARCH"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 40
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>\t
\t";
        }
        $context["quick_links_first_block"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 45
        echo "
";
        // line 46
        ob_start();
        // line 47
        echo "\t";
        $context["quick_links_last_block"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 49
        echo "
";
        // line 50
        ob_start();
        echo twig_trim_filter(($context["quick_links_first_block"] ?? null));
        echo twig_trim_filter(($context["quick_links_last_block"] ?? null));
        $context["quick_links_all"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 51
        echo "
<div class=\"navbar tabbed not-static\" role=\"navigation\">
\t<div class=\"inner page-width\">
\t\t<div class=\"nav-tabs\" data-current-page=\"";
        // line 54
        if ($this->getAttribute(($context["definition"] ?? null), "NAV_SECTION", array())) {
            echo $this->getAttribute(($context["definition"] ?? null), "NAV_SECTION", array());
        } else {
            echo ($context["SCRIPT_NAME"] ?? null);
        }
        echo "\">
\t\t\t<ul class=\"leftside\">
\t\t\t\t<li id=\"quick-links\" class=\"quick-links tab responsive-menu dropdown-container";
        // line 56
        if ((($context["quick_links_all"] ?? null) == "")) {
            echo " empty";
        }
        echo "\">
\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-trigger\">";
        // line 57
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICK_LINKS");
        echo "</a>
\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t";
        // line 61
        echo ($context["quick_links_first_block"] ?? null);
        echo "
\t\t\t\t\t\t\t";
        // line 62
        if (twig_trim_filter(($context["quick_links_last_block"] ?? null))) {
            // line 63
            echo "\t\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t\t";
            // line 64
            echo ($context["quick_links_last_block"] ?? null);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
        // line 69
        // line 70
        echo "\t\t\t\t";
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 71
            echo "\t\t\t\t\t<li class=\"tab home\" data-responsive-class=\"small-icon icon-home\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 72
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 75
        echo "\t\t\t\t<li class=\"tab forums selected\" data-responsive-class=\"small-icon icon-forums\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 76
        echo ($context["U_INDEX"] ?? null);
        echo "\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUMS");
        echo "</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 78
        if (( !($context["S_IS_BOT"] ?? null) && (($context["S_DISPLAY_MEMBERLIST"] ?? null) || ($context["U_TEAM"] ?? null)))) {
            // line 79
            echo "\t\t\t\t\t<li class=\"tab members dropdown-container\" data-select-match=\"member\" data-responsive-class=\"small-icon icon-members\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-trigger\" href=\"";
            // line 80
            echo ($context["U_MEMBERLIST"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERLIST");
            echo "</a>
\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t\t";
            // line 84
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                // line 85
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 86
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-group fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 87
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERLIST");
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 91
            echo "\t\t\t\t\t\t\t\t";
            if (($context["U_TEAM"] ?? null)) {
                // line 92
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 93
                echo ($context["U_TEAM"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-shield fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 94
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THE_TEAM");
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 98
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 102
        echo "\t\t\t\t";
        // line 103
        echo "\t\t\t</ul>
\t\t\t<ul class=\"rightside\">
\t\t\t\t";
        // line 105
        // line 106
        echo "\t\t\t\t<li class=\"tab faq\" data-select-match=\"faq\" data-responsive-class=\"small-icon icon-faq\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 107
        echo ($context["U_FAQ"] ?? null);
        echo "\" rel=\"help\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-question-circle fa-fw\" aria-hidden=\"true\"></i><span>";
        // line 108
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FAQ");
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 111
        // line 112
        echo "\t\t\t\t";
        if (($context["U_ACP"] ?? null)) {
            // line 113
            echo "\t\t\t\t\t<li class=\"tab acp\" data-last-responsive=\"true\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 114
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa-cogs fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 115
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_SHORT");
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 119
        echo "\t\t\t\t";
        if (($context["U_MCP"] ?? null)) {
            // line 120
            echo "\t\t\t\t\t<li class=\"tab mcp\" data-last-responsive=\"true\" data-select-match=\"mcp\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 121
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa-gavel fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 122
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP_SHORT");
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 126
        echo "\t\t\t\t";
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 127
            echo "\t\t\t\t\t";
            // line 128
            echo "\t\t\t\t\t<li id=\"username_logged_in\" class=\"tab account dropdown-container\" data-skip-responsive=\"true\" data-select-match=\"ucp\">
\t\t\t\t\t\t";
            // line 129
            echo "\t\t\t\t\t\t<a href=\"";
            echo ($context["U_PROFILE"] ?? null);
            echo "\" class=\"nav-link dropdown-trigger\">";
            echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
            echo "</a>
\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t\t";
            // line 133
            if (($context["U_RESTORE_PERMISSIONS"] ?? null)) {
                // line 134
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 135
                echo ($context["U_RESTORE_PERMISSIONS"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-refresh fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 136
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE_PERMISSIONS");
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 140
            echo "
\t\t\t\t\t\t\t\t";
            // line 141
            // line 142
            echo "
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 144
            echo ($context["U_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-sliders fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 145
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE");
            echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 149
            echo ($context["U_USER_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_PROFILE");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-user fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 150
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_PROFILE");
            echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t";
            // line 154
            // line 155
            echo "\t\t\t
\t\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 158
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 159
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 165
            // line 166
            echo "\t\t\t\t\t</li>
\t\t\t\t\t";
            // line 167
            if (($context["S_DISPLAY_PM"] ?? null)) {
                // line 168
                echo "\t\t\t\t\t\t<li class=\"tab pm";
                if ((($context["PRIVATE_MESSAGE_COUNT"] ?? null) > 0)) {
                    echo " non-zero";
                }
                echo "\" data-skip-responsive=\"true\" data-select-match=\"pm\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 169
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-inbox fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 170
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVATE_MESSAGES");
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<span class=\"counter\">";
                // line 173
                echo ($context["PRIVATE_MESSAGE_COUNT"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t<span class=\"arrow\"></span>
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 178
            echo "\t\t\t\t\t";
            if (($context["S_NOTIFICATIONS_DISPLAY"] ?? null)) {
                // line 179
                echo "\t\t\t\t\t\t<li class=\"tab notifications dropdown-container";
                if ((($context["NOTIFICATIONS_COUNT"] ?? null) > 0)) {
                    echo " non-zero";
                }
                echo "\" data-skip-responsive=\"true\" data-select-match=\"notifications\">
\t\t\t\t\t\t\t<a href=\"";
                // line 180
                echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
                echo "\" id=\"notification_list_button\" class=\"nav-link dropdown-trigger\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-bell fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 181
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS");
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<span class=\"counter\">";
                // line 184
                echo ($context["NOTIFICATIONS_COUNT"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t<span class=\"arrow\"></span>
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t";
                // line 187
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "navbar_header.html", 187)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 188
                echo "\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 190
            echo "\t\t\t\t\t";
            // line 191
            echo "\t\t\t\t";
        }
        // line 192
        echo "\t\t\t\t";
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 193
            echo "\t\t\t\t\t<li class=\"tab logout\"  data-skip-responsive=\"true\"><a class=\"nav-link\" href=\"";
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t";
        } else {
            // line 195
            echo "\t\t\t\t\t<li class=\"tab login\"  data-skip-responsive=\"true\" data-select-match=\"login\"><a class=\"nav-link\" href=\"";
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t";
            // line 196
            if (($context["S_REGISTER_ENABLED"] ?? null)) {
                // line 197
                echo "\t\t\t\t\t\t<li class=\"tab register\" data-skip-responsive=\"true\" data-select-match=\"register\"><a class=\"nav-link\" href=\"";
                echo ($context["U_REGISTER"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 199
            echo "\t\t\t\t\t";
            // line 200
            echo "\t\t\t\t";
        }
        // line 201
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</div>

<div class=\"navbar secondary";
        // line 206
        if ((($this->getAttribute(($context["definition"] ?? null), "SEARCH_IN_NAVBAR", array()) == 1) && $this->getAttribute(($context["definition"] ?? null), "SEARCH_BOX", array()))) {
            echo " with-search";
        }
        echo "\">
\t<ul role=\"menubar\">
\t\t";
        // line 208
        ob_start();
        // line 209
        echo "\t\t";
        // line 210
        echo "\t\t";
        if (twig_trim_filter($this->getAttribute(($context["definition"] ?? null), "NAVLINKS", array()))) {
            // line 211
            echo "\t\t\t";
            echo $this->getAttribute(($context["definition"] ?? null), "NAVLINKS", array());
            echo "
\t\t";
        }
        // line 213
        echo "\t\t";
        if (( !twig_trim_filter($this->getAttribute(($context["definition"] ?? null), "NAVLINKS", array())) || ($this->getAttribute(($context["definition"] ?? null), "NAVLINKS_SHOW_DEFAULT", array()) == 1))) {
            // line 214
            echo "\t\t\t";
            if ((($context["U_WATCH_FORUM_LINK"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 215
                echo "\t\t\t<li data-last-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 216
                echo ($context["U_WATCH_FORUM_LINK"] ?? null);
                echo "\" title=\"";
                echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"icon ";
                if (($context["S_WATCHING_FORUM"] ?? null)) {
                    echo "fa-check-square-o";
                } else {
                    echo "fa-square-o";
                }
                echo " fa-fw\" data-toggle-text=\"";
                echo ($context["S_WATCH_FORUM_TOGGLE"] ?? null);
                echo "\" data-toggle-url=\"";
                echo ($context["U_WATCH_FORUM_TOGGLE"] ?? null);
                echo "\">
\t\t\t\t\t<i class=\"icon ";
                // line 217
                if (($context["S_WATCHING_FORUM"] ?? null)) {
                    echo "fa-square-o";
                } else {
                    echo "fa-check-square-o";
                }
                echo " fa-fw\" aria-hidden=\"true\"></i><span>";
                echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
                echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t";
            }
            // line 221
            echo "\t\t";
        }
        // line 222
        echo "\t\t";
        // line 223
        echo "\t\t";
        $context["secondary_links"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 224
        echo "\t\t";
        if (twig_trim_filter(($context["secondary_links"] ?? null))) {
            // line 225
            echo "\t\t\t";
            echo ($context["secondary_links"] ?? null);
            echo "
\t\t\t";
            // line 226
            if (($this->getAttribute(($context["definition"] ?? null), "NAVLINKS_SHOW_DEFAULT", array()) && ($context["S_DISPLAY_SEARCH"] ?? null))) {
                // line 227
                echo "\t\t\t\t<li class=\"small-icon icon-search";
                if ((($this->getAttribute(($context["definition"] ?? null), "SEARCH_IN_NAVBAR", array()) == 1) && $this->getAttribute(($context["definition"] ?? null), "SEARCH_BOX", array()))) {
                    echo " responsive-hide";
                }
                echo "\"><a href=\"";
                echo ($context["U_SEARCH"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "</a></li>
\t\t\t\t";
                // line 228
                if (($context["S_USER_LOGGED_IN"] ?? null)) {
                    // line 229
                    echo "\t\t\t\t\t<li class=\"small-icon icon-new-posts\"><a href=\"";
                    echo ($context["U_SEARCH_NEW"] ?? null);
                    echo "\" role=\"menuitem\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_NEW");
                    echo "</a></li>
\t\t\t\t";
                }
                // line 231
                echo "\t\t\t";
            }
            // line 232
            echo "\t\t";
        } else {
            // line 233
            echo "\t\t\t";
            if (($context["S_DISPLAY_SEARCH"] ?? null)) {
                // line 234
                echo "\t\t\t\t<li class=\"small-icon icon-search";
                if ((($this->getAttribute(($context["definition"] ?? null), "SEARCH_IN_NAVBAR", array()) == 1) && $this->getAttribute(($context["definition"] ?? null), "SEARCH_BOX", array()))) {
                    echo " responsive-hide";
                }
                echo "\"><a href=\"";
                echo ($context["U_SEARCH"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "</a></li>
\t\t\t\t";
                // line 235
                if (($context["S_USER_LOGGED_IN"] ?? null)) {
                    // line 236
                    echo "\t\t\t\t\t<li class=\"small-icon icon-new-posts\"><a href=\"";
                    echo ($context["U_SEARCH_NEW"] ?? null);
                    echo "\" role=\"menuitem\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_NEW");
                    echo "</a></li>
\t\t\t\t";
                }
                // line 238
                echo "\t\t\t";
            }
            // line 239
            echo "\t\t\t";
            if ( !($context["S_REGISTERED_USER"] ?? null)) {
                // line 240
                echo "\t\t\t\t<li class=\"small-icon icon-login\"><a href=\"";
                echo ($context["U_LOGIN_LOGOUT"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
                echo "</a></li>
\t\t\t\t";
                // line 241
                if (($context["S_REGISTER_ENABLED"] ?? null)) {
                    // line 242
                    echo "\t\t\t\t\t<li class=\"small-icon icon-register\"><a href=\"";
                    echo ($context["U_REGISTER"] ?? null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                    echo "</a></li>
\t\t\t\t";
                }
                // line 244
                echo "\t\t\t";
            } elseif ( !($context["S_DISPLAY_SEARCH"] ?? null)) {
                // line 245
                echo "\t\t\t\t<li><a href=\"";
                echo ($context["U_PROFILE"] ?? null);
                echo "\" class=\"small-icon icon-profile\">";
                echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
                echo "</a></li>
\t\t\t";
            }
            // line 247
            echo "\t\t";
        }
        // line 248
        echo "
\t\t";
        // line 249
        if ((($this->getAttribute(($context["definition"] ?? null), "SEARCH_IN_NAVBAR", array()) == 1) && $this->getAttribute(($context["definition"] ?? null), "SEARCH_BOX", array()))) {
            // line 250
            echo "\t\t\t<li class=\"search-box not-responsive\">";
            echo $this->getAttribute(($context["definition"] ?? null), "SEARCH_BOX", array());
            echo "</li>
\t\t";
        }
        // line 252
        echo "\t</ul>
</div>

";
        // line 255
        ob_start();
        // line 256
        echo "<div class=\"navbar\">
\t<ul id=\"nav-breadcrumbs\" class=\"nav-breadcrumbs linklist navlinks\" role=\"menubar\">
\t\t";
        // line 258
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 259
        echo "\t\t";
        // line 260
        echo "\t\t<li class=\"breadcrumbs\">
\t\t\t";
        // line 261
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 262
            echo "\t\t\t\t<span class=\"crumb\"><a href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\"";
            echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", array());
            echo " data-navbar-reference=\"home\" itemprop=\"url\"><i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "</span></a></span>
\t\t\t";
        }
        // line 264
        echo "\t\t\t";
        // line 265
        echo "\t\t\t<span class=\"crumb\"";
        echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", array());
        echo "><a href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\" itemprop=\"url\">";
        if ( !($context["U_SITE_HOME"] ?? null)) {
            echo "<i class=\"icon fa-home fa-fw\"></i>";
        }
        echo "<span itemprop=\"title\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "</span></a></span>
\t\t\t";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 267
            echo "\t\t\t\t";
            // line 268
            echo "\t\t\t\t<span class=\"crumb\" ";
            echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", array());
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
            // line 269
            // line 270
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        echo "\t\t\t";
        // line 272
        echo "\t\t</li>
\t\t";
        // line 273
        // line 274
        echo "
\t\t";
        // line 275
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 276
            echo "\t\t\t<li class=\"rightside responsive-search\">
\t\t\t\t<a href=\"";
            // line 277
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV_EXPLAIN");
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 278
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 282
        echo "\t\t<li class=\"rightside dropdown-container icon-only\">
\t\t\t<a href=\"#\" class=\"dropdown-trigger time\" title=\"";
        // line 283
        echo ($context["CURRENT_TIME"] ?? null);
        echo "\"><i class=\"fa fa-clock-o\"></i></a>
\t\t\t<div class=\"dropdown\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t\t<li>";
        // line 287
        echo ($context["CURRENT_TIME"] ?? null);
        echo "</li>
\t\t\t\t\t<li>";
        // line 288
        echo ($context["S_TIMEZONE"] ?? null);
        echo "</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>
\t</ul>
</div>
";
        $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
        $context['definition']->set('BREADCRUMBS', $value);
        // line 295
        if (($this->getAttribute(($context["definition"] ?? null), "WRAP_HEADER", array()) != 0)) {
            // line 296
            echo "\t";
            echo $this->getAttribute(($context["definition"] ?? null), "BREADCRUMBS", array());
            echo "
\t";
            // line 297
            $value = "";
            $context['definition']->set('BREADCRUMBS', $value);
        }
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
        return array (  839 => 297,  834 => 296,  832 => 295,  821 => 288,  817 => 287,  810 => 283,  807 => 282,  800 => 278,  794 => 277,  791 => 276,  789 => 275,  786 => 274,  785 => 273,  782 => 272,  780 => 271,  774 => 270,  773 => 269,  760 => 268,  758 => 267,  754 => 266,  741 => 265,  739 => 264,  729 => 262,  727 => 261,  724 => 260,  722 => 259,  719 => 258,  715 => 256,  713 => 255,  708 => 252,  702 => 250,  700 => 249,  697 => 248,  694 => 247,  686 => 245,  683 => 244,  675 => 242,  673 => 241,  664 => 240,  661 => 239,  658 => 238,  650 => 236,  648 => 235,  637 => 234,  634 => 233,  631 => 232,  628 => 231,  620 => 229,  618 => 228,  607 => 227,  605 => 226,  600 => 225,  597 => 224,  594 => 223,  592 => 222,  589 => 221,  576 => 217,  560 => 216,  557 => 215,  554 => 214,  551 => 213,  545 => 211,  542 => 210,  540 => 209,  538 => 208,  531 => 206,  524 => 201,  521 => 200,  519 => 199,  511 => 197,  509 => 196,  500 => 195,  490 => 193,  487 => 192,  484 => 191,  482 => 190,  478 => 188,  466 => 187,  460 => 184,  454 => 181,  450 => 180,  443 => 179,  440 => 178,  432 => 173,  426 => 170,  422 => 169,  415 => 168,  413 => 167,  410 => 166,  409 => 165,  400 => 159,  394 => 158,  389 => 155,  388 => 154,  381 => 150,  375 => 149,  368 => 145,  362 => 144,  358 => 142,  357 => 141,  354 => 140,  347 => 136,  343 => 135,  340 => 134,  338 => 133,  328 => 129,  325 => 128,  323 => 127,  320 => 126,  313 => 122,  307 => 121,  304 => 120,  301 => 119,  294 => 115,  288 => 114,  285 => 113,  282 => 112,  281 => 111,  275 => 108,  269 => 107,  266 => 106,  265 => 105,  261 => 103,  259 => 102,  253 => 98,  246 => 94,  242 => 93,  239 => 92,  236 => 91,  229 => 87,  225 => 86,  222 => 85,  220 => 84,  211 => 80,  208 => 79,  206 => 78,  199 => 76,  196 => 75,  188 => 72,  185 => 71,  182 => 70,  181 => 69,  176 => 66,  171 => 64,  168 => 63,  166 => 62,  162 => 61,  155 => 57,  149 => 56,  140 => 54,  135 => 51,  130 => 50,  127 => 49,  124 => 47,  122 => 46,  119 => 45,  111 => 40,  107 => 39,  99 => 34,  95 => 33,  88 => 29,  84 => 28,  81 => 27,  74 => 23,  70 => 22,  67 => 21,  64 => 20,  57 => 16,  53 => 15,  50 => 14,  47 => 13,  40 => 9,  36 => 8,  33 => 7,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "navbar_header.html", "");
    }
}
