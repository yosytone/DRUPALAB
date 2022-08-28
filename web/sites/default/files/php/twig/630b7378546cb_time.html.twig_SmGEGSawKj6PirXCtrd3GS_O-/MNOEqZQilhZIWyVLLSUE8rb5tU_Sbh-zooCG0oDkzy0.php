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

/* @webprofiler/Collector/time.html.twig */
class __TwigTemplate_0df0332991950541978f8e10a379590b43bc31a63789b526972995c39d262a44 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/time.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 28
        echo "
";
        // line 29
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
        $context["duration"] = ((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, true, 2), 2, $this->source))) ? (twig_sprintf("%.0f ms", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, true, 2), 2, $this->source))) : ("n/a"));
        // line 3
        echo "    ";
        $context["memory"] = twig_sprintf("%.1f MB", ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "memory", [], "any", false, false, true, 3) / 1024) / 1024));
        // line 4
        echo "    ";
        $context["total_memory"] = (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "memoryLimit", [], "any", false, false, true, 4) ==  -1)) ? ("&infin;") : ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_sprintf("%.1f MB", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "memoryLimit", [], "any", false, false, true, 4) / 1024)))));
        // line 5
        echo "    ";
        ob_start(function () { return ''; });
        // line 6
        echo "    <a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("webprofiler.dashboard", ["profile" => ($context["token"] ?? null)], ["fragment" => "time"]), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Timeline"));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Timeline"));
        echo "\"
             src=\"data:image/png;base64,";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "icon", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\"/>
        <span>";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["duration"] ?? null), 9, $this->source), "html", null, true);
        echo " / ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["memory"] ?? null), 9, $this->source), "html", null, true);
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        echo "    ";
        ob_start(function () { return ''; });
        // line 13
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Total time"));
        echo "</b>
        <span>";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["duration"] ?? null), 15, $this->source), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Memory"));
        echo "</b>
        <span>";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["memory"] ?? null), 19, $this->source), "html", null, true);
        echo " / ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["total_memory"] ?? null), 19, $this->source), "html", null, true);
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 24, $this->source), "")) : ("")), "html", null, true);
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((isset($context["text"]) || array_key_exists("text", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 25, $this->source), "")) : ("")), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 29
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 30
        echo "    <script id=\"time\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Timeline"));
        echo "</h2>

        <div class=\"panel__container\">
            <ul class=\"list--inline\">
                <li>
                    <b>";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Total time"));
        echo "</b> <%- Drupal.webprofiler.helpers.printTime(data.duration) %>
                </li>
                <li>
                    <b>";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Initialization time"));
        echo "</b> <%- Drupal.webprofiler.helpers.printTime(data.initTime) %>
                </li>
            </ul>
            <br/><br/>

            <div class=\"timeline\">
                <div class=\"timeline__legends\">
                    <span class=\"timeline__legends--default\">default</span>
                    <span class=\"timeline__legends--section\">section</span>
                    <span class=\"timeline__legends--event_listener\">event_listener</span>
                    <span class=\"timeline__legends--event_listener_loading\">event_listener_loading</span>
                    <span class=\"timeline__legends--template\">template</span>
                    <span class=\"timeline__legends--service\">service</span>
                </div>

                <div id=\"timeline\"></div>
            </div>
        </div>

    </script>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/time.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 39,  162 => 36,  154 => 31,  151 => 30,  144 => 29,  134 => 25,  130 => 24,  126 => 22,  118 => 19,  114 => 18,  108 => 15,  104 => 14,  101 => 13,  98 => 12,  90 => 9,  86 => 8,  82 => 7,  75 => 6,  72 => 5,  69 => 4,  66 => 3,  63 => 2,  56 => 1,  49 => 29,  46 => 28,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Collector/time.html.twig", "/var/www/16.student.d8c.ru/data/www/16.student.d8c.ru/web/modules/contrib/devel/webprofiler/templates/Collector/time.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "set" => 2);
        static $filters = array("length" => 2, "format" => 2, "escape" => 4, "t" => 6, "default" => 24);
        static $functions = array("url" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set'],
                ['length', 'format', 'escape', 't', 'default'],
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
