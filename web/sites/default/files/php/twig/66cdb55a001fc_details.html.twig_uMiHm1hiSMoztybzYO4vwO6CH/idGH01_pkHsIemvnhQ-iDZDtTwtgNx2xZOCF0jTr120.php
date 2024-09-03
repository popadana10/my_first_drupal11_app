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

/* themes/contrib/vani/templates/form/details.html.twig */
class __TwigTemplate_89df81acc59b8cab291fe11a9b2743c8 extends Template
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
        // line 17
        yield "<details";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 17, $this->source), "html", null, true);
        yield ">";
        // line 18
        if (($context["title"] ?? null)) {
            // line 20
            $context["summary_classes"] = [((            // line 21
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((            // line 22
($context["required"] ?? null)) ? ("form-required") : (""))];
            // line 25
            yield "    <summary";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["summary_attributes"] ?? null), "addClass", [($context["summary_classes"] ?? null)], "method", false, false, true, 25), 25, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 25, $this->source), "html", null, true);
            yield "</summary>";
        }
        // line 27
        yield "<div class=\"form-details-wrapper\">
    ";
        // line 28
        if (($context["errors"] ?? null)) {
            // line 29
            yield "      <div class=\"form-item--error-message\">
        <strong>";
            // line 30
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 30, $this->source), "html", null, true);
            yield "</strong>
      </div>
    ";
        }
        // line 33
        if (($context["description"] ?? null)) {
            // line 34
            yield "<div class=\"details-description\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 34, $this->source), "html", null, true);
            yield "</div>";
        }
        // line 36
        if (($context["children"] ?? null)) {
            // line 37
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 37, $this->source), "html", null, true);
        }
        // line 39
        if (($context["value"] ?? null)) {
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 40, $this->source), "html", null, true);
        }
        // line 42
        yield "</div>
</details>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "title", "required", "summary_attributes", "errors", "description", "children", "value"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/vani/templates/form/details.html.twig";
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
        return array (  88 => 42,  85 => 40,  83 => 39,  80 => 37,  78 => 36,  73 => 34,  71 => 33,  65 => 30,  62 => 29,  60 => 28,  57 => 27,  50 => 25,  48 => 22,  47 => 21,  46 => 20,  44 => 18,  40 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/vani/templates/form/details.html.twig", "/app/web/themes/contrib/vani/templates/form/details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18, "set" => 20);
        static $filters = array("escape" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
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
