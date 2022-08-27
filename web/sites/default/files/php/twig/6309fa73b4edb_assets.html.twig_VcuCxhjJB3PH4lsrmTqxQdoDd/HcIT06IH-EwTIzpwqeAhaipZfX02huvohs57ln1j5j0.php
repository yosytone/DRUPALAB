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

/* @webprofiler/Collector/assets.html.twig */
class __TwigTemplate_a1371465f93df5b98e44042a99de592d0d7c7af770aaf1089bbd06c212dd630b extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/assets.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 26
        echo "
";
        // line 27
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("webprofiler.dashboard", ["profile" => ($context["token"] ?? null)], ["fragment" => "assets"]), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Assets"));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Assets"));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "icon", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getcsscount", [], "any", false, false, true, 6) + twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getjscount", [], "any", false, false, true, 6)), "html", null, true);
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        ob_start(function () { return ''; });
        // line 10
        echo "
    <div class=\"sf-toolbar-info-piece\">
        <b>CSS</b>
        <span>";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getcsscount", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>JS</b>
        <span>";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getjscount", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 22, $this->source), "")) : ("")), "html", null, true);
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((isset($context["text"]) || array_key_exists("text", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 23, $this->source), "")) : ("")), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 27
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 28
        echo "    <script id=\"assets\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Assets"));
        echo "</h2>
        <div class=\"tabs\">
            <% if( data.js.length != 0){ %>
            <input class=\"tabs__radio\" type=\"radio\" id=\"js\" name=\"tabs\" checked/>
            <% } %>
            <% if( data.js.length != 0){ %>
            <input class=\"tabs__radio\" type=\"radio\" id=\"css\" name=\"tabs\"/>
            <% } %>
            <ul class=\"tabs__tabs list--inline\">
                <% if( data.js.length != 0){ %>
                <li><label class=\"tabs__label\" for=\"js\">JS</label></li>
                <% } %>
                <% if( data.js.length != 0){ %>
                <li><label class=\"tabs__label\" for=\"css\">CSS</label></li>
                <% } %>
            </ul>
            <div class=\"tabs__panels\">
                <div class=\"tabs__panel\">
                    <% if( data.js.length != 0){ %>
                    <% _.each( data.js, function( item, key ){ %>
                    <% if( key === 'drupalSettings' ){ %>
                    <div class=\"panel__container\">
                        <div class=\"panel__expand-header \">
                            <ul class=\"list--inline\">
                                <li><b>asset</b> <%- key %></li>
                            </ul>
                            <div class=\"button--flat l-right js--panel-toggle\">";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Data"));
        echo "</div>
                        </div>
                        <div class=\"panel__expand-content\">
                            <% if(item.data && item.data.length != 0){ %>
                        <pre>
                            <code class=\"code--json \"><%= JSON.stringify(item.data, null, 4) %></code>
                        </pre>
                            <% } %>
                            <table class=\"table--duo\">
                                <% _.each( item, function( item, key ){ %>
                                <tr>
                                    <% if(key != 'data'){ %>
                                    <th><%- key %></th>
                                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                                    <% } %>
                                </tr>
                                <% }); %>
                            </table>
                        </div>
                    </div>
                    <% } else { %>
                    <div class=\"panel__container\">
                        <div class=\"panel__expand-header \">
                            <ul class=\"list--inline\">
                                <li><b>asset</b> <%= Drupal.webprofiler.helpers.classLink({\"file\":
                                    data.assets.installation_path + key, \"class\": key, \"line\": 0}) %>
                                </li>
                                <li><b>version</b> <%- item.version %></li>
                                <li><b>scope</b> <%- item.scope %></li>
                            </ul>
                            <div class=\"button--flat l-right js--panel-toggle\">";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Data"));
        echo "</div>
                        </div>
                        <div class=\"panel__expand-content\">
                            <table class=\"table--duo\">
                                <% _.each( item, function( item, key ){ %>
                                <tr>
                                    <th><%- key %></th>
                                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                                </tr>
                                <% }); %>
                            </table>
                        </div>
                    </div>
                    <% } %>
                    <% }); %>
                    <% } %>
                </div>
                <div class=\"tabs__panel\">
                    <% if( data.css.length != 0){ %>
                    <% _.each( data.css, function( item, key ){ %>
                    <div class=\"panel__container\">
                        <div class=\"panel__expand-header \">
                            <ul class=\"list--inline\">
                                <li><b>asset</b> <%= Drupal.webprofiler.helpers.classLink({\"file\":
                                    data.assets.installation_path + key, \"class\": key, \"line\": 0}) %>
                                </li>
                                <li><b>version</b> <%- item.version %></li>
                            </ul>
                            <div class=\"button--flat l-right js--panel-toggle\">";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Data"));
        echo "</div>
                        </div>
                        <div class=\"panel__expand-content\">
                            <table class=\"table--duo\">
                                <% _.each( item, function( item, key ){ %>
                                <tr>
                                    <th><%- key %></th>
                                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                                </tr>
                                <% }); %>
                            </table>
                        </div>
                    </div>
                    <% }); %>
                </div>
            </div>
        </div>

        <% } %>
    </script>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/assets.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  229 => 113,  198 => 85,  165 => 55,  136 => 29,  133 => 28,  126 => 27,  116 => 23,  112 => 22,  108 => 20,  102 => 17,  95 => 13,  90 => 10,  87 => 9,  81 => 6,  77 => 5,  73 => 4,  66 => 3,  63 => 2,  56 => 1,  49 => 27,  46 => 26,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Collector/assets.html.twig", "/var/www/16.student.d8c.ru/data/www/16.student.d8c.ru/web/modules/contrib/devel/webprofiler/templates/Collector/assets.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "set" => 2);
        static $filters = array("escape" => 3, "t" => 3, "default" => 22);
        static $functions = array("url" => 3);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set'],
                ['escape', 't', 'default'],
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
