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

/* core/themes/claro/templates/navigation/details--vertical-tabs.html.twig */
class __TwigTemplate_9b68dfa67ee98d451a2384f48cc0f10c8e3351f78bf82c83f94312cdb0aae5e6 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/claro/templates/navigation/details--vertical-tabs.html.twig"));

        // line 29
        $context["classes"] = [0 => "claro-details", 1 => "claro-details--vertical-tabs-item"];
        // line 35
        $context["content_wrapper_classes"] = [0 => "claro-details__wrapper", 1 => "details-wrapper", 2 => "claro-details__wrapper--vertical-tabs-item"];
        // line 42
        $context["inner_wrapper_classes"] = [0 => "claro-details__content", 1 => "claro-details__content--vertical-tabs-item"];
        // line 47
        echo "<details";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 47), 47, $this->source), "html", null, true);
        echo ">";
        // line 48
        if (($context["title"] ?? null)) {
            // line 50
            $context["summary_classes"] = [0 => "claro-details__summary", 1 => "claro-details__summary--vertical-tabs-item", 2 => ((            // line 53
($context["required"] ?? null)) ? ("js-form-required") : ("")), 3 => ((            // line 54
($context["required"] ?? null)) ? ("form-required") : (""))];
            // line 57
            echo "    <summary";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["summary_attributes"] ?? null), "addClass", [0 => ($context["summary_classes"] ?? null)], "method", false, false, true, 57), 57, $this->source), "html", null, true);
            echo ">";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 58, $this->source), "html", null, true);
            // line 59
            echo "</summary>";
        }
        // line 61
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_wrapper_classes"] ?? null)], "method", false, false, true, 61), 61, $this->source), "html", null, true);
        echo ">
    <div";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => ($context["inner_wrapper_classes"] ?? null)]), "html", null, true);
        echo ">
      ";
        // line 63
        if (($context["errors"] ?? null)) {
            // line 64
            echo "        <div class=\"form-item form-item--error-message\">
          ";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 65, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 68
        if (($context["description"] ?? null)) {
            // line 69
            echo "<div class=\"claro-details__description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 69, $this->source), "html", null, true);
            echo "</div>";
        }
        // line 71
        if (($context["children"] ?? null)) {
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 72, $this->source), "html", null, true);
        }
        // line 74
        if (($context["value"] ?? null)) {
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 75, $this->source), "html", null, true);
        }
        // line 77
        echo "</div>
  </div>
</details>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/navigation/details--vertical-tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 77,  101 => 75,  99 => 74,  96 => 72,  94 => 71,  89 => 69,  87 => 68,  81 => 65,  78 => 64,  76 => 63,  72 => 62,  67 => 61,  64 => 59,  62 => 58,  58 => 57,  56 => 54,  55 => 53,  54 => 50,  52 => 48,  48 => 47,  46 => 42,  44 => 35,  42 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/navigation/details--vertical-tabs.html.twig", "/var/www/16.student.d8c.ru/data/www/16.student.d8c.ru/web/core/themes/claro/templates/navigation/details--vertical-tabs.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "if" => 48);
        static $filters = array("escape" => 47);
        static $functions = array("create_attribute" => 62);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                ['create_attribute']
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
