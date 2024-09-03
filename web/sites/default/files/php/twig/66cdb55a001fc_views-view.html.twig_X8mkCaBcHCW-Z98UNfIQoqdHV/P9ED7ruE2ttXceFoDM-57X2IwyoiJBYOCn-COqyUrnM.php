<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/vani/templates/views/views-view.html.twig */
class __TwigTemplate_bd8b89901fec0c09cd121be5d24372d6 extends Template
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
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        $context["classes"] = ["view", ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 36
($context["id"] ?? null), 36, $this->source)))];
        // line 39
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 39), 39, $this->source), "html", null, true);
        yield ">
  ";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 40, $this->source), "html", null, true);
        yield "
  ";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 41, $this->source), "html", null, true);
        yield "
  ";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 42, $this->source), "html", null, true);
        yield "

  ";
        // line 44
        if (($context["header"] ?? null)) {
            // line 45
            yield "    <div class=\"view-header\">
      ";
            // line 46
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 46, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 49
        yield "
  ";
        // line 50
        if (($context["exposed"] ?? null)) {
            // line 51
            yield "    <div class=\"view-filters\">
      ";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 52, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 55
        yield "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 56
            yield "    <div class=\"view-attachment view-attachment-before\">
      ";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 57, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 60
        yield "
  ";
        // line 61
        if (($context["rows"] ?? null)) {
            // line 62
            yield "    <div class=\"view-content\">
      ";
            // line 63
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 63, $this->source), "html", null, true);
            yield "
    </div>
  ";
        } elseif (        // line 65
($context["empty"] ?? null)) {
            // line 66
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 66, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 68
        yield "
  ";
        // line 69
        if (($context["pager"] ?? null)) {
            // line 70
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 70, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 72
        yield "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 73
            yield "    <div class=\"view-attachment view-attachment-after\">
      ";
            // line 74
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 74, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 77
        yield "  ";
        if (($context["more"] ?? null)) {
            // line 78
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 78, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 80
        yield "
  ";
        // line 81
        if (($context["footer"] ?? null)) {
            // line 82
            yield "    <div class=\"view-footer\">
      ";
            // line 83
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 83, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 86
        yield "
  ";
        // line 87
        if (($context["feed_icons"] ?? null)) {
            // line 88
            yield "    <div class=\"feed-icons\">
      ";
            // line 89
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 89, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 92
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "attributes", "title_prefix", "title", "title_suffix", "header", "exposed", "attachment_before", "rows", "empty", "pager", "attachment_after", "more", "footer", "feed_icons"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/vani/templates/views/views-view.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  178 => 92,  172 => 89,  169 => 88,  167 => 87,  164 => 86,  158 => 83,  155 => 82,  153 => 81,  150 => 80,  144 => 78,  141 => 77,  135 => 74,  132 => 73,  129 => 72,  123 => 70,  121 => 69,  118 => 68,  113 => 66,  111 => 65,  106 => 63,  103 => 62,  101 => 61,  98 => 60,  92 => 57,  89 => 56,  86 => 55,  80 => 52,  77 => 51,  75 => 50,  72 => 49,  66 => 46,  63 => 45,  61 => 44,  56 => 42,  52 => 41,  48 => 40,  43 => 39,  41 => 36,  40 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/vani/templates/views/views-view.html.twig", "/app/web/themes/contrib/vani/templates/views/views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 34, "if" => 44);
        static $filters = array("clean_class" => 36, "escape" => 39);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                [],
                $this->source
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
