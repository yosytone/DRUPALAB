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

/* core/themes/claro/templates/pager.html.twig */
class __TwigTemplate_d2317b585c070ffc05267e0ab591847778f113ed2b9de55164978f359d1ff87b extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/claro/templates/pager.html.twig"));

        // line 37
        if (($context["items"] ?? null)) {
            // line 38
            echo "  <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 38, $this->source), "html", null, true);
            echo "\">
    <h4 id=\"";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 39, $this->source), "html", null, true);
            echo "\" class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "</h4>
    <ul class=\"pager__items js-pager__items\">
      ";
            // line 42
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 42)) {
                // line 43
                echo "        ";
                ob_start(function () { return ''; });
                // line 44
                echo "        <li class=\"pager__item pager__item--action pager__item--first\">
          <a href=\"";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 45), "href", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo "\" class=\"pager__link pager__link--action-link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 45), "attributes", [], "any", false, false, true, 45), 45, $this->source), "href", "title"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 46
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                echo "</span>
            <span class=\"pager__item-title pager__item-title--backwards\" aria-hidden=\"true\">
              ";
                // line 48
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 48), "text", [], "any", true, true, true, 48)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 48), "text", [], "any", false, false, true, 48), 48, $this->source), t("First"))) : (t("First"))), ["«" => ""]), "html", null, true);
                echo "
            </span>
          </a>
        </li>
        ";
                $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_1_));
                // line 53
                echo "      ";
            }
            // line 54
            echo "
      ";
            // line 56
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 56)) {
                // line 57
                echo "        ";
                ob_start(function () { return ''; });
                // line 58
                echo "        <li class=\"pager__item pager__item--action pager__item--previous\">
          <a href=\"";
                // line 59
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 59), "href", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                echo "\" class=\"pager__link pager__link--action-link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 59), "attributes", [], "any", false, false, true, 59), 59, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 60
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                echo "</span>
            <span class=\"pager__item-title pager__item-title--backwards\" aria-hidden=\"true\">
              ";
                // line 62
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 62), "text", [], "any", true, true, true, 62)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 62), "text", [], "any", false, false, true, 62), 62, $this->source), t("Previous"))) : (t("Previous"))), ["‹" => ""]), "html", null, true);
                echo "
            </span>
          </a>
        </li>
        ";
                $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 57
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_2_));
                // line 67
                echo "      ";
            }
            // line 68
            echo "
      ";
            // line 70
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 70)) {
                // line 71
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 73
            echo "
      ";
            // line 75
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 75));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 76
                echo "        ";
                ob_start(function () { return ''; });
                // line 77
                echo "        <li class=\"pager__item";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" pager__item--active") : ("")));
                echo " pager__item--number\">
          ";
                // line 78
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 79
                    echo "            ";
                    $context["title"] = t("Current page");
                    // line 80
                    echo "          ";
                } else {
                    // line 81
                    echo "            ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 82
                    echo "          ";
                }
                // line 83
                echo "          <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "\" class=\"pager__link";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active") : ("")));
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 83, $this->source), "html", null, true);
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 83), 83, $this->source), "href", "title", "class"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">
              ";
                // line 85
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "
            </span>
            ";
                // line 87
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 87, $this->source), "html", null, true);
                echo "
          </a>
        </li>
        ";
                $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 76
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_3_));
                // line 91
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "
      ";
            // line 94
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 94)) {
                // line 95
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 97
            echo "
      ";
            // line 99
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 99)) {
                // line 100
                echo "        ";
                ob_start(function () { return ''; });
                // line 101
                echo "        <li class=\"pager__item pager__item--action pager__item--next\">
          <a href=\"";
                // line 102
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 102), "href", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                echo "\" class=\"pager__link pager__link--action-link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 102), "attributes", [], "any", false, false, true, 102), 102, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 103
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                echo "</span>
            <span class=\"pager__item-title pager__item-title--forward\" aria-hidden=\"true\">
              ";
                // line 105
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 105), "text", [], "any", true, true, true, 105)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 105), "text", [], "any", false, false, true, 105), 105, $this->source), t("Next"))) : (t("Next"))), ["›" => ""]), "html", null, true);
                echo "
            </span>
          </a>
        </li>
        ";
                $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 100
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_4_));
                // line 110
                echo "      ";
            }
            // line 111
            echo "
      ";
            // line 113
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 113)) {
                // line 114
                echo "        ";
                ob_start(function () { return ''; });
                // line 115
                echo "        <li class=\"pager__item pager__item--action pager__item--last\">
          <a href=\"";
                // line 116
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 116), "href", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
                echo "\" class=\"pager__link pager__link--action-link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 116), "attributes", [], "any", false, false, true, 116), 116, $this->source), "href", "title"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 117
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                echo "</span>
            <span class=\"pager__item-title pager__item-title--forward\" aria-hidden=\"true\">
              ";
                // line 119
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 119), "text", [], "any", true, true, true, 119)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 119), "text", [], "any", false, false, true, 119), 119, $this->source), t("Last"))) : (t("Last"))), ["»" => ""]), "html", null, true);
                echo "
            </span>
          </a>
        </li>
        ";
                $___internal_parse_5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 114
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_5_));
                // line 124
                echo "      ";
            }
            // line 125
            echo "    </ul>
  </nav>
";
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 125,  284 => 124,  282 => 114,  274 => 119,  269 => 117,  261 => 116,  258 => 115,  255 => 114,  252 => 113,  249 => 111,  246 => 110,  244 => 100,  236 => 105,  231 => 103,  223 => 102,  220 => 101,  217 => 100,  214 => 99,  211 => 97,  207 => 95,  204 => 94,  201 => 92,  195 => 91,  193 => 76,  186 => 87,  181 => 85,  169 => 83,  166 => 82,  163 => 81,  160 => 80,  157 => 79,  155 => 78,  150 => 77,  147 => 76,  142 => 75,  139 => 73,  135 => 71,  132 => 70,  129 => 68,  126 => 67,  124 => 57,  116 => 62,  111 => 60,  103 => 59,  100 => 58,  97 => 57,  94 => 56,  91 => 54,  88 => 53,  86 => 43,  78 => 48,  73 => 46,  65 => 45,  62 => 44,  59 => 43,  56 => 42,  49 => 39,  44 => 38,  42 => 37,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/pager.html.twig", "/var/www/16.student.d8c.ru/data/www/16.student.d8c.ru/web/core/themes/claro/templates/pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 37, "apply" => 43, "for" => 75, "set" => 79);
        static $filters = array("escape" => 38, "t" => 39, "without" => 45, "replace" => 48, "default" => 48, "spaceless" => 43);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'apply', 'for', 'set'],
                ['escape', 't', 'without', 'replace', 'default', 'spaceless'],
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
