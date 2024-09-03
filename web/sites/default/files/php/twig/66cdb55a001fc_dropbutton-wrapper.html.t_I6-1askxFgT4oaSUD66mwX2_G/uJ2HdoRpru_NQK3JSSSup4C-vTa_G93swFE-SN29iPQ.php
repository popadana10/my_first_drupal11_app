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

/* core/themes/stable9/templates/form/dropbutton-wrapper.html.twig */
class __TwigTemplate_b630114155fe314ada968c2ad09ef4e6 extends Template
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
        // line 12
        if (($context["children"] ?? null)) {
            // line 13
            yield "  ";
            $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 14
                yield "    <div class=\"dropbutton-wrapper\" data-drupal-ajax-container>
      <div class=\"dropbutton-widget\">
        ";
                // line 16
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 16, $this->source), "html", null, true);
                yield "
      </div>
    </div>
  ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 13
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_0_));
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["children"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/stable9/templates/form/dropbutton-wrapper.html.twig";
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
        return array (  57 => 13,  49 => 16,  45 => 14,  42 => 13,  40 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/stable9/templates/form/dropbutton-wrapper.html.twig", "/app/web/core/themes/stable9/templates/form/dropbutton-wrapper.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12, "apply" => 13);
        static $filters = array("escape" => 16, "spaceless" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'apply'],
                ['escape', 'spaceless'],
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
