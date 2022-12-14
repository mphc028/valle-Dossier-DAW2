<?php

/* acp_attachments.html */
class __TwigTemplate_3080b41fd9570ec28fd9bf1df22bb96fc7e6ae17d1070d2ac7be81900bb48883 extends Twig_Template
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
        if (($context["U_BACK"] ?? null)) {
            // line 6
            echo "\t<a href=\"";
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
            echo "</a>
";
        }
        // line 8
        echo "
<h1>";
        // line 9
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
        echo "</h1>

<p>";
        // line 11
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE_EXPLAIN");
        echo "</p>

";
        // line 13
        if (($context["S_WARNING"] ?? null)) {
            // line 14
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 15
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 16
            echo ($context["WARNING_MSG"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 19
        echo "
";
        // line 20
        if (($context["S_NOTIFY"] ?? null)) {
            // line 21
            echo "\t<div class=\"successbox\">
\t\t<h3>";
            // line 22
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFY");
            echo "</h3>
\t\t<p>";
            // line 23
            echo ($context["NOTIFY_MSG"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 26
        echo "
";
        // line 27
        if (($context["S_UPLOADING_FILES"] ?? null)) {
            // line 28
            echo "\t<h2>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UPLOADING_FILES");
            echo "</h2>

\t";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "upload", array()));
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
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUCCESSFULLY_UPLOADED");
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
        if (($context["S_ATTACHMENT_SETTINGS"] ?? null)) {
            // line 39
            echo "
\t";
            // line 40
            if ( !($context["S_THUMBNAIL_SUPPORT"] ?? null)) {
                // line 41
                echo "\t\t<div class=\"errorbox\">
\t\t\t<p>";
                // line 42
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_THUMBNAIL_SUPPORT");
                echo "</p>
\t\t</div>
\t";
            }
            // line 45
            echo "
\t<form id=\"attachsettings\" method=\"post\" action=\"";
            // line 46
            echo ($context["U_ACTION"] ?? null);
            echo "\">
\t";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "options", array()));
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
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
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
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 67
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 68
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
            echo "\" />
\t</fieldset>

\t";
            // line 71
            if ( !($context["S_SECURE_DOWNLOADS"] ?? null)) {
                // line 72
                echo "\t\t<div class=\"errorbox\">
\t\t\t<p>";
                // line 73
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SECURE_DOWNLOAD_NOTICE");
                echo "</p>
\t\t</div>
\t";
            }
            // line 76
            echo "
\t<fieldset>
\t\t<legend>";
            // line 78
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SECURE_TITLE");
            echo "</legend>
\t\t<p>";
            // line 79
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DOWNLOAD_ADD_IPS_EXPLAIN");
            echo "</p>
\t<dl>
\t\t<dt><label for=\"ip_hostname\">";
            // line 81
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IP_HOSTNAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><textarea id=\"ip_hostname\" cols=\"40\" rows=\"3\" name=\"ips\"></textarea></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"exclude\">";
            // line 85
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IP_EXCLUDE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXCLUDE_ENTERED_IP");
            echo "</span></dt>
\t\t<dd><label><input type=\"radio\" id=\"exclude\" name=\"ipexclude\" value=\"1\" class=\"radio\" /> ";
            // line 86
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" name=\"ipexclude\" value=\"0\" checked=\"checked\" class=\"radio\" /> ";
            // line 87
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t</dl>

\t<p class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" id=\"securesubmit\" name=\"securesubmit\" value=\"";
            // line 91
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />
\t</p>
\t</fieldset>

\t<fieldset>
\t\t<legend>";
            // line 96
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REMOVE_IPS");
            echo "</legend>
\t";
            // line 97
            if (($context["S_DEFINED_IPS"] ?? null)) {
                // line 98
                echo "\t\t\t<p>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DOWNLOAD_REMOVE_IPS_EXPLAIN");
                echo "</p>
\t\t<dl>
\t\t\t<dt><label for=\"remove_ip_hostname\">";
                // line 100
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IP_HOSTNAME");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><select name=\"unip[]\" id=\"remove_ip_hostname\" multiple=\"multiple\" size=\"10\">";
                // line 101
                echo ($context["DEFINED_IPS"] ?? null);
                echo "</select></dd>
\t\t</dl>

\t\t<p class=\"quick\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"unsecuresubmit\" name=\"unsecuresubmit\" value=\"";
                // line 105
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" />
\t\t</p>
\t\t</fieldset>

\t";
            } else {
                // line 110
                echo "\t\t<p>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_IPS_DEFINED");
                echo "</p>
\t";
            }
            // line 112
            echo "\t";
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif (        // line 116
($context["S_EXTENSION_GROUPS"] ?? null)) {
            // line 117
            echo "
\t";
            // line 118
            if (($context["S_EDIT_GROUP"] ?? null)) {
                // line 119
                echo "\t\t<script type=\"text/javascript\" defer=\"defer\">
\t\t// <![CDATA[
\t\t\tfunction update_image(newimage)
\t\t\t{
\t\t\t\tif (newimage == 'no_image')
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('image_upload_icon').src = \"";
                // line 125
                echo ($context["ROOT_PATH"] ?? null);
                echo "images/spacer.gif\";
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('image_upload_icon').src = \"";
                // line 129
                echo ($context["ROOT_PATH"] ?? null);
                echo ($context["IMG_PATH"] ?? null);
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
                echo ($context["U_ACTION"] ?? null);
                echo "\">
\t\t<fieldset>
\t\t\t<input type=\"hidden\" name=\"action\" value=\"";
                // line 170
                echo ($context["ACTION"] ?? null);
                echo "\" />
\t\t\t<input type=\"hidden\" name=\"g\" value=\"";
                // line 171
                echo ($context["GROUP_ID"] ?? null);
                echo "\" />

\t\t\t<legend>";
                // line 173
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LEGEND");
                echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"group_name\">";
                // line 175
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_NAME");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"text\" id=\"group_name\" size=\"20\" maxlength=\"100\" name=\"group_name\" value=\"";
                // line 176
                echo ($context["GROUP_NAME"] ?? null);
                echo "\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"category\">";
                // line 179
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SPECIAL_CATEGORY");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SPECIAL_CATEGORY_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd>";
                // line 180
                echo ($context["S_CATEGORY_SELECT"] ?? null);
                echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"allowed\">";
                // line 183
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALLOWED");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"allowed\" name=\"allow_group\" value=\"1\"";
                // line 184
                if (($context["ALLOW_GROUP"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"allow_in_pm\">";
                // line 187
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALLOW_IN_PM");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"allow_in_pm\" name=\"allow_in_pm\" value=\"1\"";
                // line 188
                if (($context["ALLOW_IN_PM"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"upload_icon\">";
                // line 191
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UPLOAD_ICON");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><select name=\"upload_icon\" id=\"upload_icon\" onchange=\"update_image(this.options[selectedIndex].value);\">
\t\t\t\t\t<option value=\"no_image\"";
                // line 193
                if (($context["S_NO_IMAGE"] ?? null)) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_IMAGE");
                echo "</option>";
                echo ($context["S_FILENAME_LIST"] ?? null);
                echo "
\t\t\t</select></dd>
\t\t\t<dd>&nbsp;<img ";
                // line 195
                if (($context["S_NO_IMAGE"] ?? null)) {
                    echo "src=\"";
                    echo ($context["ROOT_PATH"] ?? null);
                    echo "images/spacer.gif\"";
                } else {
                    echo "src=\"";
                    echo ($context["UPLOAD_ICON_SRC"] ?? null);
                    echo "\"";
                }
                echo " id=\"image_upload_icon\" alt=\"\" title=\"\" />&nbsp;</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"extgroup_filesize\">";
                // line 198
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MAX_EXTGROUP_FILESIZE");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"number\" id=\"extgroup_filesize\" min=\"0\" max=\"999999999999999\" step=\"any\" name=\"max_filesize\" value=\"";
                // line 199
                echo ($context["EXTGROUP_FILESIZE"] ?? null);
                echo "\" /> <select name=\"size_select\">";
                echo ($context["S_EXT_GROUP_SIZE_OPTIONS"] ?? null);
                echo "</select></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"assigned_extensions\">";
                // line 202
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ASSIGNED_EXTENSIONS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><div id=\"ext\">";
                // line 203
                echo ($context["ASSIGNED_EXTENSIONS"] ?? null);
                echo "</div> <span>[<a href=\"";
                echo ($context["U_EXTENSIONS"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO_TO_EXTENSIONS");
                echo "</a> ]</span></dd>
\t\t\t<dd><select name=\"extensions[]\" id=\"assigned_extensions\" class=\"narrow\" onchange=\"show_extensions(this);\" multiple=\"multiple\" size=\"8\">";
                // line 204
                echo ($context["S_EXTENSION_OPTIONS"] ?? null);
                echo "</select></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"allowed_forums\">";
                // line 207
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALLOWED_FORUMS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALLOWED_FORUMS_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" id=\"allowed_forums\" class=\"radio\" name=\"forum_select\" value=\"0\"";
                // line 208
                if ( !($context["S_FORUM_IDS"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALLOW_ALL_FORUMS");
                echo "</label></dd>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"forum_select\" value=\"1\"";
                // line 209
                if (($context["S_FORUM_IDS"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALLOW_SELECTED_FORUMS");
                echo "</label></dd>
\t\t\t<dd><select name=\"allowed_forums[]\" multiple=\"multiple\" size=\"8\">";
                // line 210
                echo ($context["S_FORUM_ID_OPTIONS"] ?? null);
                echo "</select></dd>
\t\t</dl>

\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
                // line 214
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
                // line 215
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
                echo "\" />
\t\t</p>
\t\t";
                // line 217
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t</fieldset>

\t\t</form>
\t";
            } else {
                // line 222
                echo "
\t\t<form id=\"extgroups\" method=\"post\" action=\"";
                // line 223
                echo ($context["U_ACTION"] ?? null);
                echo "\">
\t\t<fieldset class=\"tabulated\">
\t\t<legend>";
                // line 225
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
                echo "</legend>

\t\t<table class=\"table1\">
\t\t\t<col class=\"row1\" /><col class=\"row1\" /><col class=\"row2\" />
\t\t<thead>
\t\t<tr>
\t\t\t<th>";
                // line 231
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXTENSION_GROUP");
                echo "</th>
\t\t\t<th>";
                // line 232
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SPECIAL_CATEGORY");
                echo "</th>
\t\t\t<th>";
                // line 233
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPTIONS");
                echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
                // line 237
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "groups", array()));
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
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOT_ALLOWED_IN_PM");
                        echo "</span>
\t\t\t\t\t";
                    } elseif (($this->getAttribute(                    // line 246
$context["groups"], "S_ALLOWED_IN_PM", array()) &&  !$this->getAttribute($context["groups"], "S_GROUP_ALLOWED", array()))) {
                        echo "<br /><span>&raquo; ";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLY_ALLOWED_IN_PM");
                        echo "</span>
\t\t\t\t\t";
                    } elseif (( !$this->getAttribute(                    // line 247
$context["groups"], "S_GROUP_ALLOWED", array()) &&  !$this->getAttribute($context["groups"], "S_ALLOWED_IN_PM", array()))) {
                        echo "<br /><span>&raquo; ";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOT_ALLOWED_IN_PM_POST");
                        echo "</span>
\t\t\t\t\t";
                    } else {
                        // line 248
                        echo "<br /><span>&raquo; ";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALLOWED_IN_PM_POST");
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
                    echo ($context["ICON_EDIT"] ?? null);
                    echo "</a>&nbsp;&nbsp;<a href=\"";
                    echo $this->getAttribute($context["groups"], "U_DELETE", array());
                    echo "\" data-ajax=\"row_delete\">";
                    echo ($context["ICON_DELETE"] ?? null);
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
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CREATE_GROUP");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " <input type=\"text\" name=\"group_name\" maxlength=\"30\" />
\t\t\t\t<input class=\"button2\" name=\"add\" type=\"submit\" value=\"";
                // line 258
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" />
\t\t</p>
\t\t";
                // line 260
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t</fieldset>
\t\t</form>

\t";
            }
            // line 265
            echo "
";
        } elseif (        // line 266
($context["S_EXTENSIONS"] ?? null)) {
            // line 267
            echo "
\t<form id=\"add_ext\" method=\"post\" action=\"";
            // line 268
            echo ($context["U_ACTION"] ?? null);
            echo "\">
\t<fieldset>
\t\t<legend>";
            // line 270
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_EXTENSION");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"add_extension\">";
            // line 272
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXTENSION");
            echo "</label></dt>
\t\t<dd><input type=\"text\" id=\"add_extension\" size=\"20\" maxlength=\"100\" name=\"add_extension\" value=\"";
            // line 273
            echo ($context["ADD_EXTENSION"] ?? null);
            echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"extension_group\">";
            // line 276
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXTENSION_GROUP");
            echo "</label></dt>
\t\t<dd>";
            // line 277
            echo ($context["GROUP_SELECT_OPTIONS"] ?? null);
            echo "</dd>
\t</dl>

\t<p class=\"quick\">
\t\t<input type=\"submit\" id=\"add_extension_check\" name=\"add_extension_check\" class=\"button2\" value=\"";
            // line 281
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />
\t</p>
\t";
            // line 283
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

\t<form id=\"change_ext\" method=\"post\" action=\"";
            // line 287
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 290
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
            echo "</legend>

\t<table class=\"table1\">
\t\t<col class=\"row1\" /><col class=\"row1\" /><col class=\"row2\" />
\t<thead>
\t<tr>
\t\t<th>";
            // line 296
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXTENSION");
            echo "</th>
\t\t<th>";
            // line 297
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXTENSION_GROUP");
            echo "</th>
\t\t<th>";
            // line 298
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 302
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "extensions", array()));
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
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 319
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
            echo "\" />
\t</p>
\t";
            // line 321
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif (        // line 325
($context["S_ORPHAN"] ?? null)) {
            // line 326
            echo "
\t<form id=\"orphan\" method=\"post\" action=\"";
            // line 327
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 330
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
            echo "</legend>

\t<table class=\"table1 zebra-table fixed-width-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 335
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FILENAME");
            echo "</th>
\t\t<th style=\"width: 15%;\">";
            // line 336
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FILEDATE");
            echo "</th>
\t\t<th style=\"width: 15%;\">";
            // line 337
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FILESIZE");
            echo "</th>
\t\t<th style=\"width: 15%;\">";
            // line 338
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACH_POST_ID");
            echo "</th>
\t\t<th style=\"width: 15%;\">";
            // line 339
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACH_TO_POST");
            echo "</th>
\t\t<th style=\"width: 15%;\">";
            // line 340
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 344
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "orphan", array()));
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
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACH_ID");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
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
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
            echo "</a> :: <a href=\"#\" onclick=\"marklist('orphan', 'add', false); return false;\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
            echo "</a></td>
\t\t<td class=\"small\"><a href=\"#\" onclick=\"marklist('orphan', 'delete', true); return false;\">";
            // line 357
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
            echo "</a> :: <a href=\"#\" onclick=\"marklist('orphan', 'delete', false); return false;\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
            echo "</a></td>
\t</tr>
\t</tbody>
\t</table>

\t<br />

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 365
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 366
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
            echo "\" />
\t</p>
\t";
            // line 368
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif (        // line 372
($context["S_MANAGE"] ?? null)) {
            // line 373
            echo "
\t<form id=\"attachments\" method=\"post\" action=\"";
            // line 374
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 377
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
            echo "</legend>

\t<div class=\"pagination top-pagination\">
\t";
            // line 380
            if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())) || ($context["TOTAL_FILES"] ?? null))) {
                // line 381
                echo "\t\t";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NUMBER_FILES");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo ($context["TOTAL_FILES"] ?? null);
                echo " &bull; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_SIZE");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo ($context["TOTAL_SIZE"] ?? null);
                echo "
\t\t";
                // line 382
                if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
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
                    echo ($context["PAGE_NUMBER"] ?? null);
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
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "attachments", array()))) {
                // line 391
                echo "\t<table class=\"table1 zebra-table fixed-width-table\">
\t<thead>
\t<tr>
\t\t<th>";
                // line 394
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FILENAME");
                echo "</th>
\t\t<th style=\"width: 15%;\">";
                // line 395
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
                echo "</th>
\t\t<th style=\"width: 15%;\" class=\"centered-text\">";
                // line 396
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FILESIZE");
                echo "</th>
\t\t<th style=\"width: 10%;\" class=\"centered-text\">";
                // line 397
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK");
                echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
                // line 401
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "attachments", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachments"]) {
                    // line 402
                    echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t";
                    // line 404
                    if ($this->getAttribute($context["attachments"], "S_IN_MESSAGE", array())) {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXTENSION_GROUP");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " <strong>";
                        if ($this->getAttribute($context["attachments"], "EXT_GROUP_NAME", array())) {
                            echo $this->getAttribute($context["attachments"], "EXT_GROUP_NAME", array());
                        } else {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_EXT_GROUP");
                        }
                        echo "</strong><br />";
                        echo $this->getAttribute($context["attachments"], "L_DOWNLOAD_COUNT", array());
                        echo "<br />";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                        echo " ";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVATE_MESSAGE");
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
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
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
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
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
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_ATTACHMENTS");
                echo "</p>
\t</div>
";
            }
            // line 419
            echo "
\t";
            // line 420
            if (($context["TOTAL_FILES"] ?? null)) {
                // line 421
                echo "\t<div class=\"pagination\">
\t\t";
                // line 422
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NUMBER_FILES");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo ($context["TOTAL_FILES"] ?? null);
                echo " &bull; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_SIZE");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo ($context["TOTAL_SIZE"] ?? null);
                echo "
\t\t";
                // line 423
                if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
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
                    echo ($context["PAGE_NUMBER"] ?? null);
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
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY_LOG");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " &nbsp;";
            echo ($context["S_LIMIT_DAYS"] ?? null);
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " ";
            echo ($context["S_SORT_KEY"] ?? null);
            echo " ";
            echo ($context["S_SORT_DIR"] ?? null);
            echo "
\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 433
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
            echo "\" name=\"sort\" />
\t</fieldset>

\t<hr />

";
            // line 438
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "attachments", array()))) {
                // line 439
                echo "\t<fieldset class=\"quick\">
\t\t<input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
                // line 440
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_MARKED");
                echo "\" /><br />
\t\t<p class=\"small\">
\t\t\t<a href=\"#\" onclick=\"marklist('attachments', 'delete', true); return false;\">";
                // line 442
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
                echo "</a> &bull;
\t\t\t<a href=\"#\" onclick=\"marklist('attachments', 'delete', false); return false;\">";
                // line 443
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
                echo "</a>\t\t
\t\t</p>
\t</fieldset>
";
            }
            // line 447
            echo "\t";
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

\t";
            // line 451
            if (($context["S_ACTION_OPTIONS"] ?? null)) {
                // line 452
                echo "\t<fieldset>
\t\t<legend>";
                // line 453
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESYNC_STATS");
                echo "</legend>
\t\t<form id=\"action_stats_form\" method=\"post\" action=\"";
                // line 454
                echo ($context["U_ACTION"] ?? null);
                echo "\">
\t\t\t<dl>
\t\t\t\t<dt><label for=\"action_stats\">";
                // line 456
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESYNC_FILES_STATS");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESYNC_FILES_STATS_EXPLAIN");
                echo "</span></dt>
\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"stats\" /><input class=\"button2\" type=\"submit\" id=\"action_stats\" name=\"action_stats\" value=\"";
                // line 457
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RUN");
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "acp_attachments.html", "");
    }
}
