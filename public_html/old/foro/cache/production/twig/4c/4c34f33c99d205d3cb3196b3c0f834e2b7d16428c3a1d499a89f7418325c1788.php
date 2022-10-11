<?php

/* memberlist_body.html */
class __TwigTemplate_6b5609454a4de4d587cedde8178f8e075cdbd7f25597905ff2076b5ee1bda793 extends Twig_Template
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
        if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
            // line 2
            echo "\t";
            $location = "simple_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_header.html", "memberlist_body.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 3
            echo "\t";
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 3)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 4
            echo "\t<form method=\"post\" id=\"results\" action=\"";
            echo ($context["S_MODE_ACTION"] ?? null);
            echo "\" onsubmit=\"insert_marked_users('#results', this.user); return false;\" data-form-name=\"";
            echo ($context["S_FORM_NAME"] ?? null);
            echo "\" data-field-name=\"";
            echo ($context["S_FIELD_NAME"] ?? null);
            echo "\">

";
        } else {
            // line 6
            ob_start();
            // line 7
            echo "\t\t";
            if ((($context["U_FIND_MEMBER"] ?? null) &&  !($context["S_SEARCH_USER"] ?? null))) {
                // line 8
                echo "\t\t\t<li class=\"small-icon icon-search\"><a href=\"";
                echo ($context["U_FIND_MEMBER"] ?? null);
                echo "\" data-alt-text=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_MEMBER_SEARCH"), "js");
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FIND_USERNAME");
                echo "</a></li>
\t\t";
            } elseif (((            // line 9
($context["S_SEARCH_USER"] ?? null) && ($context["U_HIDE_FIND_MEMBER"] ?? null)) &&  !($context["S_IN_SEARCH_POPUP"] ?? null))) {
                // line 10
                echo "\t\t\t<li class=\"small-icon icon-search\"><a href=\"";
                echo ($context["U_HIDE_FIND_MEMBER"] ?? null);
                echo "\" data-alt-text=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("FIND_USERNAME"), "js");
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_MEMBER_SEARCH");
                echo "</a>
\t\t";
            }
            // line 12
            echo "\t\t";
            if (($context["U_TEAM"] ?? null)) {
                echo "<li class=\"small-icon icon-team\"><a href=\"";
                echo ($context["U_TEAM"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 13
            echo "\t";
            $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
            $context['definition']->set('NAVLINKS', $value);
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "memberlist_body.html", 13)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 14
            echo "\t<div class=\"panel\" id=\"memberlist_search\"";
            if ( !($context["S_SEARCH_USER"] ?? null)) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t";
            // line 15
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 15)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 16
            echo "\t</div>
\t<form method=\"post\" action=\"";
            // line 17
            echo ($context["S_MODE_ACTION"] ?? null);
            echo "\">

";
        }
        // line 20
        echo "
\t";
        // line 21
        if (($context["S_SHOW_GROUP"] ?? null)) {
            // line 22
            echo "\t\t<h2 class=\"group-title\"";
            if (($context["GROUP_COLOR"] ?? null)) {
                echo " style=\"color:#";
                echo ($context["GROUP_COLOR"] ?? null);
                echo ";\"";
            }
            echo ">";
            echo ($context["GROUP_NAME"] ?? null);
            echo "</h2>
\t\t";
            // line 23
            if (($context["U_MANAGE"] ?? null)) {
                // line 24
                echo "\t\t\t<p class=\"right responsive-center manage rightside\"><a href=\"";
                echo ($context["U_MANAGE"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MANAGE_GROUP");
                echo "</a></p>
\t\t";
            }
            // line 26
            echo "\t\t<p>";
            echo ($context["GROUP_DESC"] ?? null);
            echo " ";
            echo ($context["GROUP_TYPE"] ?? null);
            echo "</p>

\t\t<p>
\t\t\t";
            // line 29
            if (($context["AVATAR_IMG"] ?? null)) {
                echo ($context["AVATAR_IMG"] ?? null);
            }
            // line 30
            echo "\t\t\t";
            if (($context["RANK_IMG"] ?? null)) {
                echo ($context["RANK_IMG"] ?? null);
            }
            // line 31
            echo "\t\t\t";
            if (($context["GROUP_RANK"] ?? null)) {
                echo ($context["GROUP_RANK"] ?? null);
            }
            // line 32
            echo "\t\t</p>
\t";
        } else {
            // line 34
            echo "\t\t<h2 class=\"solo\">";
            echo ($context["PAGE_TITLE"] ?? null);
            if (($context["SEARCH_WORDS"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " <a href=\"";
                echo ($context["U_SEARCH_WORDS"] ?? null);
                echo "\">";
                echo ($context["SEARCH_WORDS"] ?? null);
                echo "</a>";
            }
            echo "</h2>

\t\t<div class=\"action-bar bar-top\">
\t\t\t<div class=\"member-search panel\">
\t\t\t\t";
            // line 38
            if ((($context["U_FIND_MEMBER"] ?? null) &&  !($context["S_SEARCH_USER"] ?? null))) {
                echo "<a href=\"";
                echo ($context["U_FIND_MEMBER"] ?? null);
                echo "\" id=\"member_search\" data-alt-text=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_MEMBER_SEARCH");
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FIND_USERNAME");
                echo "</a> &bull; ";
            } elseif (((($context["S_SEARCH_USER"] ?? null) && ($context["U_HIDE_FIND_MEMBER"] ?? null)) &&  !($context["S_IN_SEARCH_POPUP"] ?? null))) {
                echo "<a href=\"";
                echo ($context["U_HIDE_FIND_MEMBER"] ?? null);
                echo "\" id=\"member_search\" data-alt-text=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FIND_USERNAME");
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_MEMBER_SEARCH");
                echo "</a> &bull; ";
            }
            // line 39
            echo "\t\t\t\t<strong>
\t\t\t\t";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "first_char", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["first_char"]) {
                // line 41
                echo "\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["first_char"], "U_SORT", array());
                echo "\">";
                echo $this->getAttribute($context["first_char"], "DESC", array());
                echo "</a>&nbsp;
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['first_char'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t\t\t</strong>
\t\t\t</div>

\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 47
            echo ($context["TOTAL_USERS"] ?? null);
            echo "
\t\t\t\t";
            // line 48
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 49
                echo "\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "memberlist_body.html", 49)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 50
                echo "\t\t\t\t";
            } else {
                // line 51
                echo "\t\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t\t";
            }
            // line 53
            echo "\t\t\t</div>
\t\t</div>
\t";
        }
        // line 56
        echo "
\t";
        // line 57
        if (((($context["S_LEADERS_SET"] ?? null) ||  !($context["S_SHOW_GROUP"] ?? null)) ||  !twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "memberrow", array())))) {
            // line 58
            echo "\t<div class=\"forumbg forumbg-table\">
\t\t<div class=\"inner\">

\t\t<table class=\"table1 memberlist\" id=\"memberlist\">
\t\t<thead>
\t\t<tr>
\t\t\t<th class=\"name\" data-dfn=\"";
            // line 64
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
            if ((($context["S_SHOW_GROUP"] ?? null) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "memberrow", array())))) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_LEADER");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            }
            echo "\"><span class=\"rank-img\"><a href=\"";
            echo ($context["U_SORT_RANK"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK");
            echo "</a></span><a href=\"";
            echo ($context["U_SORT_USERNAME"] ?? null);
            echo "\">";
            if ((($context["S_SHOW_GROUP"] ?? null) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "memberrow", array())))) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_LEADER");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            }
            echo "</a></th>
\t\t\t<th class=\"posts\"><a href=\"";
            // line 65
            echo ($context["U_SORT_POSTS"] ?? null);
            echo "#memberlist\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
            echo "</a></th>
\t\t\t<th class=\"info\">";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "custom_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                if ( !$this->getAttribute($context["custom_fields"], "S_FIRST_ROW", array())) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
                    echo " ";
                }
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</th>
\t\t\t<th class=\"joined\"><a href=\"";
            // line 67
            echo ($context["U_SORT_JOINED"] ?? null);
            echo "#memberlist\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
            echo "</a></th>
\t\t\t";
            // line 68
            if (($context["U_SORT_ACTIVE"] ?? null)) {
                echo "<th class=\"active\"><a href=\"";
                echo ($context["U_SORT_ACTIVE"] ?? null);
                echo "#memberlist\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_ACTIVE");
                echo "</a></th>";
            }
            // line 69
            echo "\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t";
        }
        // line 73
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "memberrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["memberrow"]) {
            // line 74
            echo "\t\t\t";
            if (($context["S_SHOW_GROUP"] ?? null)) {
                // line 75
                echo "\t\t\t\t";
                if (( !$this->getAttribute($context["memberrow"], "S_GROUP_LEADER", array()) &&  !$this->getAttribute(($context["definition"] ?? null), "S_MEMBER_HEADER", array()))) {
                    // line 76
                    echo "\t\t\t\t";
                    if ((($context["S_LEADERS_SET"] ?? null) && $this->getAttribute($context["memberrow"], "S_FIRST_ROW", array()))) {
                        // line 77
                        echo "\t\t\t\t<tr class=\"bg1\">
\t\t\t\t\t<td colspan=\"";
                        // line 78
                        if (($context["U_SORT_ACTIVE"] ?? null)) {
                            echo "5";
                        } else {
                            echo "4";
                        }
                        echo "\">&nbsp;</td>
\t\t\t\t</tr>
\t\t\t\t";
                    }
                    // line 81
                    if (($context["S_LEADERS_SET"] ?? null)) {
                        // line 82
                        echo "\t\t</tbody>
\t\t</table>

\t</div>
</div>
";
                    }
                    // line 88
                    echo "<div class=\"forumbg forumbg-table\">
\t<div class=\"inner\">

\t<table class=\"table1\">
\t<thead>
\t<tr>
\t";
                    // line 94
                    if ( !($context["S_LEADERS_SET"] ?? null)) {
                        // line 95
                        echo "\t\t<th class=\"name\" data-dfn=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
                        echo "\"><span class=\"rank-img\"><a href=\"";
                        echo ($context["U_SORT_RANK"] ?? null);
                        echo "\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK");
                        echo "</a></span><a href=\"";
                        echo ($context["U_SORT_USERNAME"] ?? null);
                        echo "\">";
                        if (($context["S_SHOW_GROUP"] ?? null)) {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_MEMBERS");
                        } else {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
                        }
                        echo "</a></th>
\t\t\t<th class=\"posts\"><a href=\"";
                        // line 96
                        echo ($context["U_SORT_POSTS"] ?? null);
                        echo "#memberlist\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                        echo "</a></th>
\t\t\t<th class=\"info\">";
                        // line 97
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                            if ( !$this->getAttribute($context["custom_fields"], "S_FIRST_ROW", array())) {
                                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t\t<th class=\"joined\"><a href=\"";
                        // line 98
                        echo ($context["U_SORT_JOINED"] ?? null);
                        echo "#memberlist\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
                        echo "</a></th>
\t\t\t";
                        // line 99
                        if (($context["U_SORT_ACTIVE"] ?? null)) {
                            echo "<th class=\"active\"><a href=\"";
                            echo ($context["U_SORT_ACTIVE"] ?? null);
                            echo "#memberlist\">";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_ACTIVE");
                            echo "</a></th>";
                        }
                        // line 100
                        echo "\t";
                    } elseif (($context["S_SHOW_GROUP"] ?? null)) {
                        // line 101
                        echo "\t\t<th class=\"name\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_MEMBERS");
                        echo "</th>
\t\t<th class=\"posts\">";
                        // line 102
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                        echo "</th>
\t\t<th class=\"info\">";
                        // line 103
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                            if ( !$this->getAttribute($context["custom_fields"], "S_FIRST_ROW", array())) {
                                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t<th class=\"joined\">";
                        // line 104
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
                        echo "</th>
\t\t";
                        // line 105
                        if (($context["U_SORT_ACTIVE"] ?? null)) {
                            echo "<th class=\"active\">";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_ACTIVE");
                            echo "</th>";
                        }
                        // line 106
                        echo "\t";
                    }
                    // line 107
                    echo "\t</tr>
\t</thead>
\t<tbody>
\t\t\t\t\t";
                    // line 110
                    $value = 1;
                    $context['definition']->set('S_MEMBER_HEADER', $value);
                    // line 111
                    echo "\t\t\t\t";
                }
                // line 112
                echo "\t\t\t";
            }
            // line 113
            echo "
\t<tr class=\"";
            // line 114
            if (($this->getAttribute($context["memberrow"], "S_ROW_COUNT", array()) % 2 == 0)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if ($this->getAttribute($context["memberrow"], "S_INACTIVE", array())) {
                echo " inactive";
            }
            echo "\">
\t\t<td><span class=\"rank-img\">";
            // line 115
            if ($this->getAttribute($context["memberrow"], "RANK_IMG", array())) {
                echo $this->getAttribute($context["memberrow"], "RANK_IMG", array());
            } else {
                echo $this->getAttribute($context["memberrow"], "RANK_TITLE", array());
            }
            echo "</span>";
            if ((($context["S_IN_SEARCH_POPUP"] ?? null) &&  !($context["S_SELECT_SINGLE"] ?? null))) {
                echo "<input type=\"checkbox\" name=\"user\" value=\"";
                echo $this->getAttribute($context["memberrow"], "USERNAME", array());
                echo "\" /> ";
            }
            echo $this->getAttribute($context["memberrow"], "USERNAME_FULL", array());
            if ($this->getAttribute($context["memberrow"], "S_INACTIVE", array())) {
                echo " (";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INACTIVE");
                echo ")";
            }
            if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
                echo "<br />[&nbsp;<a href=\"#\" onclick=\"insert_single_user('#results', '";
                echo $this->getAttribute($context["memberrow"], "A_USERNAME", array());
                echo "'); return false;\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT");
                echo "</a>&nbsp;]";
            }
            echo "</td>
\t\t<td class=\"posts\">";
            // line 116
            if (($this->getAttribute($context["memberrow"], "POSTS", array()) && ($context["S_DISPLAY_SEARCH"] ?? null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["memberrow"], "U_SEARCH_USER", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_USER_POSTS");
                echo "\">";
                echo $this->getAttribute($context["memberrow"], "POSTS", array());
                echo "</a>";
            } else {
                echo $this->getAttribute($context["memberrow"], "POSTS", array());
            }
            echo "</td>
\t\t<td class=\"info\">";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                echo "<div>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                echo "</div>";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
\t\t<td>";
            // line 118
            echo $this->getAttribute($context["memberrow"], "JOINED", array());
            echo "</td>
\t\t";
            // line 119
            if (($context["S_VIEWONLINE"] ?? null)) {
                echo "<td>";
                echo $this->getAttribute($context["memberrow"], "LAST_ACTIVE", array());
                echo "&nbsp;</td>";
            }
            // line 120
            echo "\t</tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 122
            echo "\t<tr class=\"bg1\">
\t\t<td colspan=\"";
            // line 123
            if (($context["S_VIEWONLINE"] ?? null)) {
                echo "5";
            } else {
                echo "4";
            }
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_MEMBERS");
            echo "</td>
\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memberrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "\t</tbody>
\t</table>

\t</div>
</div>

";
        // line 132
        if ((($context["S_IN_SEARCH_POPUP"] ?? null) &&  !($context["S_SELECT_SINGLE"] ?? null))) {
            // line 133
            echo "<fieldset class=\"display-actions\">
\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 134
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_MARKED");
            echo "\" class=\"button2\" />
\t<div><a href=\"#\" onclick=\"marklist('results', 'user', true); return false;\">";
            // line 135
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('results', 'user', false); return false;\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
            echo "</a></div>
</fieldset>
";
        }
        // line 138
        echo "
";
        // line 139
        if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
            // line 140
            echo "</form>
<form method=\"post\" id=\"sort-results\" action=\"";
            // line 141
            echo ($context["S_MODE_ACTION"] ?? null);
            echo "\">
";
        }
        // line 143
        echo "
";
        // line 144
        if ((($context["S_IN_SEARCH_POPUP"] ?? null) &&  !($context["S_SEARCH_USER"] ?? null))) {
            // line 145
            echo "<fieldset class=\"display-options\">
\t<label for=\"sk\">";
            // line 146
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_SORT_METHOD");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <select name=\"sk\" id=\"sk\">";
            echo ($context["S_MODE_SELECT"] ?? null);
            echo "</select></label>
\t<label for=\"sd\">";
            // line 147
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ORDER");
            echo " <select name=\"sd\" id=\"sd\">";
            echo ($context["S_ORDER_SELECT"] ?? null);
            echo "</select></label>
\t<input type=\"submit\" name=\"sort\" value=\"";
            // line 148
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" class=\"button2\" />
</fieldset>
";
        }
        // line 151
        echo "
</form>

<div class=\"action-bar bar-bottom\">
\t<div class=\"pagination\">
\t\t";
        // line 156
        echo ($context["TOTAL_USERS"] ?? null);
        echo "
\t\t";
        // line 157
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
            // line 158
            echo "\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "memberlist_body.html", 158)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 159
            echo "\t\t";
        } else {
            // line 160
            echo "\t\t\t &bull; ";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "
\t\t";
        }
        // line 162
        echo "\t</div>
</div>

";
        // line 165
        if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
            // line 166
            echo "\t";
            $location = "simple_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_footer.html", "memberlist_body.html", 166)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 168
            echo "\t";
            $location = "jumpbox.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("jumpbox.html", "memberlist_body.html", 168)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 169
            echo "\t";
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "memberlist_body.html", 169)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "memberlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  753 => 169,  740 => 168,  726 => 166,  724 => 165,  719 => 162,  713 => 160,  710 => 159,  697 => 158,  695 => 157,  691 => 156,  684 => 151,  678 => 148,  672 => 147,  665 => 146,  662 => 145,  660 => 144,  657 => 143,  652 => 141,  649 => 140,  647 => 139,  644 => 138,  636 => 135,  632 => 134,  629 => 133,  627 => 132,  619 => 126,  604 => 123,  601 => 122,  595 => 120,  589 => 119,  585 => 118,  567 => 117,  553 => 116,  526 => 115,  515 => 114,  512 => 113,  509 => 112,  506 => 111,  503 => 110,  498 => 107,  495 => 106,  489 => 105,  485 => 104,  470 => 103,  466 => 102,  461 => 101,  458 => 100,  450 => 99,  444 => 98,  429 => 97,  423 => 96,  404 => 95,  402 => 94,  394 => 88,  386 => 82,  384 => 81,  374 => 78,  371 => 77,  368 => 76,  365 => 75,  362 => 74,  356 => 73,  350 => 69,  342 => 68,  336 => 67,  321 => 66,  315 => 65,  293 => 64,  285 => 58,  283 => 57,  280 => 56,  275 => 53,  269 => 51,  266 => 50,  253 => 49,  251 => 48,  247 => 47,  241 => 43,  230 => 41,  226 => 40,  223 => 39,  205 => 38,  189 => 34,  185 => 32,  180 => 31,  175 => 30,  171 => 29,  162 => 26,  154 => 24,  152 => 23,  141 => 22,  139 => 21,  136 => 20,  130 => 17,  127 => 16,  115 => 15,  108 => 14,  93 => 13,  84 => 12,  74 => 10,  72 => 9,  63 => 8,  60 => 7,  58 => 6,  47 => 4,  34 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "memberlist_body.html", "");
    }
}
