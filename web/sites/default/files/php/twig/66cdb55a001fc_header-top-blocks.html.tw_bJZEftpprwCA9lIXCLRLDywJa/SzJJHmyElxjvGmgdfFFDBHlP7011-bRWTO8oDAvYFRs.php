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

/* @vani/template-parts/header-top-blocks.html.twig */
class __TwigTemplate_2c60544bc64dbeb5b5c87d07aea9dce3 extends Template
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
        // line 1
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_left", [], "any", false, false, true, 1) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 1))) {
            // line 2
            yield "<div class=\"header-top-blocks\">
  <div class=\"container\">
    <div class=\"header-block-container\">
      ";
            // line 5
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_left", [], "any", false, false, true, 5)) {
                // line 6
                yield "        <div class=\"header-block header-block-left\">
          ";
                // line 7
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_left", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
                yield "
        </div> <!--/.Header Left -->
      ";
            }
            // line 10
            yield "
      ";
            // line 11
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 11)) {
                // line 12
                yield "        <div class=\"header-block header-block-right\">
          ";
                // line 13
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                yield "
        </div> <!--/.Header right -->
      ";
            }
            // line 16
            yield "    </div><!--/.header-block-container -->
  </div><!--/.container -->
</div><!--/.header-top-blocks -->
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@vani/template-parts/header-top-blocks.html.twig";
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
        return array (  72 => 16,  66 => 13,  63 => 12,  61 => 11,  58 => 10,  52 => 7,  49 => 6,  47 => 5,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@vani/template-parts/header-top-blocks.html.twig", "/app/web/themes/contrib/vani/templates/template-parts/header-top-blocks.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
