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

/* themes/contrib/vani/templates/layout/html.html.twig */
class __TwigTemplate_3f56d7fe5e8c8e7f6c3e5c26ba7e0542 extends Template
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
        // line 26
        yield "
";
        // line 29
        $context["body_classes"] = [(( !        // line 30
($context["root_path"] ?? null)) ? ("homepage") : ("site-page")), ((        // line 31
($context["node_type"] ?? null)) ? (("page-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 31, $this->source)))) : ("")), ((( !CoreExtension::getAttribute($this->env, $this->source,         // line 32
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 32) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 32))) ? ("no-sidebar") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 33
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 33) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 33))) ? ("one-sidebar sidebar-left") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 34
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 34) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 34))) ? ("one-sidebar sidebar-right") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 35
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 35) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 35))) ? ("two-sidebar") : (""))];
        // line 38
        yield "<!DOCTYPE html>
<html";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 39, $this->source), "html", null, true);
        yield ">
  <head>
    <head-placeholder token=\"";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 41, $this->source), "html", null, true);
        yield "\">
    <title>";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 42, $this->source), " | "));
        yield "</title>
    ";
        // line 43
        if ((($context["google_font"] ?? null) == "local")) {
            // line 44
            yield "    <link rel=\"preload\" as=\"font\" href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 44, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 44, $this->source)), "html", null, true);
            yield "/fonts/open-sans.woff2\" type=\"font/woff2\" crossorigin>
    <link rel=\"preload\" as=\"font\" href=\"";
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 45, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 45, $this->source)), "html", null, true);
            yield "/fonts/roboto.woff2\" type=\"font/woff2\" crossorigin>
    <link rel=\"preload\" as=\"font\" href=\"";
            // line 46
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 46, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 46, $this->source)), "html", null, true);
            yield "/fonts/roboto-bold.woff2\" type=\"font/woff2\" crossorigin>
    ";
        } elseif ((        // line 47
($context["google_font"] ?? null) == "googlecdn")) {
            // line 48
            yield "    <link rel=\"preconnect\" href=\"//fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"//fonts.gstatic.com\" crossorigin>
    <link href=\"//fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@400;700&display=swap\" rel=\"stylesheet\">
    ";
        }
        // line 52
        yield "    <css-placeholder token=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 52, $this->source), "html", null, true);
        yield "\">
    <js-placeholder token=\"";
        // line 53
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 53, $this->source), "html", null, true);
        yield "\">
";
        // line 54
        if (($context["styling"] ?? null)) {
            // line 55
            yield "<style>
";
            // line 56
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["styling_code"] ?? null), 56, $this->source));
            yield "
</style>
";
        }
        // line 59
        yield "  </head>
  <body";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 60), 60, $this->source), "html", null, true);
        yield ">
    ";
        // line 65
        yield "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 66
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        yield "
    </a>
    ";
        // line 68
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 68, $this->source), "html", null, true);
        yield "
    ";
        // line 69
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 69, $this->source), "html", null, true);
        yield "
    ";
        // line 70
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 70, $this->source), "html", null, true);
        yield "
    ";
        // line 71
        if ((($context["google_font"] ?? null) == "local")) {
            // line 72
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("vani/googlefontslocal"), "html", null, true);
            yield "
    ";
        }
        // line 74
        yield "    <js-bottom-placeholder token=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 74, $this->source), "html", null, true);
        yield "\">
  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["root_path", "node_type", "page", "html_attributes", "placeholder_token", "head_title", "google_font", "base_path", "directory", "styling", "styling_code", "attributes", "page_top", "page_bottom"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/vani/templates/layout/html.html.twig";
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
        return array (  145 => 74,  139 => 72,  137 => 71,  133 => 70,  129 => 69,  125 => 68,  120 => 66,  117 => 65,  113 => 60,  110 => 59,  104 => 56,  101 => 55,  99 => 54,  95 => 53,  90 => 52,  84 => 48,  82 => 47,  78 => 46,  74 => 45,  69 => 44,  67 => 43,  63 => 42,  59 => 41,  54 => 39,  51 => 38,  49 => 35,  48 => 34,  47 => 33,  46 => 32,  45 => 31,  44 => 30,  43 => 29,  40 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/vani/templates/layout/html.html.twig", "/app/web/themes/contrib/vani/templates/layout/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "if" => 43);
        static $filters = array("clean_class" => 31, "escape" => 39, "safe_join" => 42, "raw" => 56, "t" => 66);
        static $functions = array("attach_library" => 72);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'safe_join', 'raw', 't'],
                ['attach_library'],
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
