<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @webprofiler/Collector/database.html.twig */
class __TwigTemplate_3db88203e1651940d4048d34a3d7577d68242780c53ad98e1353c189782d8df0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'panel' => [$this, 'block_panel'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/database.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start(function () { return ''; });
        // line 3
        echo "    <a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("webprofiler.dashboard", ["profile" => ($context["token"] ?? null)], ["fragment" => "database"]), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Database"));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Database"));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "icon", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "colorCode", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</span>
        ";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, true, 7) > 0)) {
            // line 8
            echo "            <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_sprintf("%0.2f ms", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, true, 8), 8, $this->source)), "html", null, true);
            echo "</span>
        ";
        }
        // line 10
        echo "    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        echo "    ";
        ob_start(function () { return ''; });
        // line 13
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("DB Queries"));
        echo "</b>
        <span>";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Query time"));
        echo "</b>
        <span>";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_sprintf("%0.2f ms", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, true, 19), 19, $this->source)), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Default database"));
        echo "</b>
        <span>";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "database", [], "any", false, false, true, 23), "driver", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "://";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "database", [], "any", false, false, true, 23), "host", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo ":";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "database", [], "any", false, false, true, 23), "port", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "
            /";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "database", [], "any", false, false, true, 24), "database", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 29, $this->source), "")) : ("")), "html", null, true);
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((isset($context["text"]) || array_key_exists("text", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 30, $this->source), "")) : ("")), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <script id=\"database\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Database"));
        echo "</h2>

        <form class=\"panel__toolbar\">
            <div class=\"panel__filter--text\">
                <input id=\"edit-caller\" class=\"js--live-filter\" placeholder=\"";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Caller"));
        echo "\" type=\"text\"/>
                <label for=\"edit-caller\" class=\"panel__filter-label\">";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Caller"));
        echo "</label>
            </div>
            <div class=\"panel__filter--select\">
                <select id=\"edit-type\" class=\"js--live-filter\">
                    <option value=\"\">";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Any"));
        echo "</option>
                    <option value=\"select\">Select</option>
                    <option value=\"insert\">Insert</option>
                    <option value=\"update\">Update</option>
                    <option value=\"create\">Create</option>
                    <option value=\"delete\">Delete</option>
                </select>
                <label for=\"edit-type\" class=\"panel__filter-label\">";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Query type"));
        echo "</label>
            </div>
            <div class=\"panel__filter--select\">
                <select id=\"edit-hightlighted\" class=\"js--live-filter\">
                    <option value=\"\">";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Any"));
        echo "</option>
                    <option value=\"1\">";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Yes"));
        echo "</option>
                    <option value=\"0\">";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No"));
        echo "</option>
                </select>
                <label for=\"edit-type\" class=\"panel__filter-label\">";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Slow queries"));
        echo "</label>
            </div>
            <div class=\"panel__filter--select\">
                <select id=\"edit-database\" class=\"js--live-filter\">
                    <option value=\"\">";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Any"));
        echo "</option>
                    <% _.each(data.connections, function( item ){ %>
                        <option value=\"<%- item %>\"><%- item %></option>
                    <% }) %>
                </select>
                <label for=\"edit-database\" class=\"panel__filter-label\">";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Database"));
        echo "</label>
            </div>

            <div class=\"button--flat l-right js--code-toggle--global js--placeholder-visible\">";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Swap Placeholders"));
        echo "</div>

        </form>

        <% _.each( data.queries, function( item, key ){ %>
        <div class=\"panel__container<% if (item.time > data.query_highlight_threshold) { %> is--hightlighted <% } %>\"
             data-wp-caller=\"<%- item.caller.class != null ? item.caller.class.toLowerCase() : '' %>\"
             data-wp-database=\"<%- item.database %>\"
             data-wp-type=\"<%- item.type %>\"
             data-wp-hightlighted=\"<%- (item.time > data.query_highlight_threshold) ? '1' : '0' %>\">
            <div class=\"panel__expand-header \">
                    <pre <% if( item.query_args) { %> class=\"js--code-target\"<% } %> >
                        <code class=\"sql js--placeholder-query\">
                            <%- item.query %>
                        </code>
                        <% if( item.query_args) { %>
                        <code class=\"sql js--clipboard-target is--hidden js--original-query\">
                            <%- item.query_args %>
                        </code>
                        <% } %>
                    </pre>
                <ul class=\"list--inline\">
                    <li><b>";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Time"));
        echo "</b>: <%- Drupal.webprofiler.helpers.printTime(item.time) %></li>
                    <li><b>";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Caller"));
        echo "</b>: <%= Drupal.webprofiler.helpers.classLink({\"file\" : item.caller.file,
                        \"class\" : item.caller.class, \"line\" : item.caller.line, \"method\" : item.caller.function}) %>
                    </li>
                    <li><b>";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Database"));
        echo "</b>: <%- item.database %></li>
                    <li><b>";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Target"));
        echo "</b>: <%- item.target %></li>
                </ul>

                <% if(item.query_args){ %>
                <div class=\"button--flat l-right js--code-toggle\">";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Swap Placeholders"));
        echo "</div>
                <% } %>
                <% if(item.args){ %>
                <div class=\"button--flat l-right js--panel-toggle\">";
        // line 106
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Info"));
        echo "</div>
                <% } %>
                <!--div class=\"button--flat l-right js--clipboard-trigger\">";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Copy Query"));
        echo "</div-->
                <% if(item.explain){ %>
                <div class=\"button--flat l-right js--explain-trigger\"
                     data-wp-queryPosition=\"<%- key %>\"
                        >";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Explain"));
        echo "</div>
                <% } %>
            </div>

            <% if(item.explain){ %>
            <div class=\"loader--linear js--loader\" style=\"display: none\">
                <div class=\"loader__bar\"></div>
                <div class=\"loader__bar\"></div>
                <div class=\"loader__bar\"></div>
            </div>
            <div class=\"panel__expand-content js--explain-target\"></div>
            <% } %>

            <% if(item.args){ %>
            <div class=\"panel__expand-content\">
                <div class=\"wp-query-arguments\">
                    <table class=\"table--duo\">
                        <thead>
                        <tr>
                            <th>";
        // line 131
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("placeholder"));
        echo "</th>
                            <th>";
        // line 132
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("value"));
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        <% _.each( item.args, function( item, key ){ %>
                        <tr>
                            <td><%- key %></td>
                            <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                        </tr>
                        <% }); %>
                        </tbody>
                    </table>
                </div>
            </div>
            <% } %>
        </div>
        <% }); %>
    </script>
    <script id=\"wp-query-explain-template\" type=\"text/template\">
        <table class=\"table--compact\">
            <thead>
            <tr>
                <% _.each(rc.data[1], function(value, key, list) { %>
                <th><%= key %></th>
                <% }); %>
            </tr>
            </thead>
            <% _.each(rc.data, function(value) { %>
            <tr>
                <% _.each(value, function(value2, key, list) { %>
                <td><%= value2 %></td>
                <% }); %>
            </tr>
            <% }); %>
        </table>
    </script>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/database.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  330 => 132,  326 => 131,  304 => 112,  297 => 108,  292 => 106,  286 => 103,  279 => 99,  275 => 98,  269 => 95,  265 => 94,  240 => 72,  234 => 69,  226 => 64,  219 => 60,  214 => 58,  210 => 57,  206 => 56,  199 => 52,  189 => 45,  182 => 41,  178 => 40,  171 => 36,  168 => 35,  161 => 34,  151 => 30,  147 => 29,  143 => 27,  137 => 24,  129 => 23,  125 => 22,  119 => 19,  115 => 18,  109 => 15,  105 => 14,  102 => 13,  99 => 12,  95 => 10,  89 => 8,  87 => 7,  81 => 6,  77 => 5,  73 => 4,  66 => 3,  63 => 2,  56 => 1,  49 => 34,  46 => 33,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Collector/database.html.twig", "/var/www/16.student.d8c.ru/data/www/16.student.d8c.ru/web/modules/contrib/devel/webprofiler/templates/Collector/database.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "set" => 2, "if" => 7);
        static $filters = array("escape" => 3, "t" => 3, "format" => 8, "default" => 29);
        static $functions = array("url" => 3);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'if'],
                ['escape', 't', 'format', 'default'],
                ['url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
