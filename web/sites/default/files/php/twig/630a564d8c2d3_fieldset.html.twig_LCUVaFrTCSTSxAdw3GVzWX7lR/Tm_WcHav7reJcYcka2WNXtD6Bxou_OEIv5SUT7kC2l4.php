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

/* core/themes/claro/templates/fieldset.html.twig */
class __TwigTemplate_10c880fcb4db934e558a3ff0ccf490a997719f45f9347ca7c00d7c35ff7e4c8b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/claro/templates/fieldset.html.twig"));

        // line 30
        $context["classes"] = [0 => "fieldset", 1 => ((twig_get_attribute($this->env, $this->source,         // line 32
($context["attributes"] ?? null), "hasClass", [0 => "fieldgroup"], "method", false, false, true, 32)) ? ("fieldset--group") : ("")), 2 => "js-form-item", 3 => "form-item", 4 => "js-form-wrapper", 5 => "form-wrapper"];
        // line 40
        $context["wrapper_classes"] = [0 => "fieldset__wrapper", 1 => ((twig_get_attribute($this->env, $this->source,         // line 42
($context["attributes"] ?? null), "hasClass", [0 => "fieldgroup"], "method", false, false, true, 42)) ? ("fieldset__wrapper--group") : (""))];
        // line 46
        $context["legend_span_classes"] = [0 => "fieldset__label", 1 => ((twig_get_attribute($this->env, $this->source,         // line 48
($context["attributes"] ?? null), "hasClass", [0 => "fieldgroup"], "method", false, false, true, 48)) ? ("fieldset__label--group") : ("")), 2 => ((        // line 49
($context["required"] ?? null)) ? ("js-form-required") : ("")), 3 => ((        // line 50
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 54
        $context["legend_classes"] = [0 => "fieldset__legend", 1 => (((twig_get_attribute($this->env, $this->source,         // line 56
($context["attributes"] ?? null), "hasClass", [0 => "fieldgroup"], "method", false, false, true, 56) &&  !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", [0 => "form-composite"], "method", false, false, true, 56))) ? ("fieldset__legend--group") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,         // line 57
($context["attributes"] ?? null), "hasClass", [0 => "form-composite"], "method", false, false, true, 57)) ? ("fieldset__legend--composite") : ("")), 3 => (((        // line 58
($context["title_display"] ?? null) == "invisible")) ? ("fieldset__legend--invisible") : ("fieldset__legend--visible"))];
        // line 62
        $context["description_classes"] = [0 => "fieldset__description"];
        // line 66
        echo "
<fieldset";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 67), 67, $this->source), "html", null, true);
        echo ">
  ";
        // line 69
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 69)) {
            // line 70
            echo "  <legend";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["legend"] ?? null), "attributes", [], "any", false, false, true, 70), "addClass", [0 => ($context["legend_classes"] ?? null)], "method", false, false, true, 70), 70, $this->source), "html", null, true);
            echo ">
    <span";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["legend_span"] ?? null), "attributes", [], "any", false, false, true, 71), "addClass", [0 => ($context["legend_span_classes"] ?? null)], "method", false, false, true, 71), 71, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "</span>
  </legend>
  ";
        }
        // line 74
        echo "
  <div";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["wrapper_classes"] ?? null)], "method", false, false, true, 75), 75, $this->source), "html", null, true);
        echo ">
    ";
        // line 76
        if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 76))) {
            // line 77
            echo "      <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 77), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 77), 77, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "</div>
    ";
        }
        // line 79
        echo "    ";
        if (($context["inline_items"] ?? null)) {
            // line 80
            echo "      <div class=\"container-inline\">
    ";
        }
        // line 82
        echo "
    ";
        // line 83
        if (($context["prefix"] ?? null)) {
            // line 84
            echo "      <span class=\"fieldset__prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 84, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 86
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 86, $this->source), "html", null, true);
        echo "
    ";
        // line 87
        if (($context["suffix"] ?? null)) {
            // line 88
            echo "      <span class=\"fieldset__suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 88, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 90
        echo "    ";
        if (($context["errors"] ?? null)) {
            // line 91
            echo "      <div class=\"fieldset__error-message\">
        ";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 92, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 95
        echo "    ";
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 95))) {
            // line 96
            echo "      <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 96), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 96), 96, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            echo "</div>
    ";
        }
        // line 98
        echo "
    ";
        // line 99
        if (($context["inline_items"] ?? null)) {
            // line 100
            echo "      </div>
    ";
        }
        // line 102
        echo "  </div>
</fieldset>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 102,  159 => 100,  157 => 99,  154 => 98,  146 => 96,  143 => 95,  137 => 92,  134 => 91,  131 => 90,  125 => 88,  123 => 87,  118 => 86,  112 => 84,  110 => 83,  107 => 82,  103 => 80,  100 => 79,  92 => 77,  90 => 76,  86 => 75,  83 => 74,  75 => 71,  70 => 70,  67 => 69,  63 => 67,  60 => 66,  58 => 62,  56 => 58,  55 => 57,  54 => 56,  53 => 54,  51 => 50,  50 => 49,  49 => 48,  48 => 46,  46 => 42,  45 => 40,  43 => 32,  42 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/fieldset.html.twig", "/var/www/16.student.d8c.ru/data/www/16.student.d8c.ru/web/core/themes/claro/templates/fieldset.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 30, "if" => 69);
        static $filters = array("escape" => 67);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                []
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
