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

/* themes/contrib/vani/templates/layout/page.html.twig */
class __TwigTemplate_0f2b7b54e2694acc7368f97c5eaac48c extends Template
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
        // line 52
        yield from         $this->loadTemplate("@vani/template-parts/header.html.twig", "themes/contrib/vani/templates/layout/page.html.twig", 52)->unwrap()->yield($context);
        // line 53
        yield "<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"container\">
  <div class=\"main-container\">
    <main id=\"main\" class=\"page-content\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 58
        yield "      ";
        yield from         $this->loadTemplate("@vani/template-parts/content_top.html.twig", "themes/contrib/vani/templates/layout/page.html.twig", 58)->unwrap()->yield($context);
        // line 59
        yield "      <div class=\"node-content\">
        ";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        yield "
      </div>
      ";
        // line 62
        yield from         $this->loadTemplate("@vani/template-parts/content_bottom.html.twig", "themes/contrib/vani/templates/layout/page.html.twig", 62)->unwrap()->yield($context);
        // line 63
        yield "    </main>
    ";
        // line 64
        yield from         $this->loadTemplate("@vani/template-parts/sidebar_left.html.twig", "themes/contrib/vani/templates/layout/page.html.twig", 64)->unwrap()->yield($context);
        // line 65
        yield "    ";
        yield from         $this->loadTemplate("@vani/template-parts/sidebar_right.html.twig", "themes/contrib/vani/templates/layout/page.html.twig", 65)->unwrap()->yield($context);
        // line 66
        yield "  </div> ";
        // line 67
        yield "  </div> ";
        // line 68
        yield "</div>";
        // line 69
        yield from         $this->loadTemplate("@vani/template-parts/footer.html.twig", "themes/contrib/vani/templates/layout/page.html.twig", 69)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/vani/templates/layout/page.html.twig";
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
        return array (  75 => 69,  73 => 68,  71 => 67,  69 => 66,  66 => 65,  64 => 64,  61 => 63,  59 => 62,  54 => 60,  51 => 59,  48 => 58,  42 => 53,  40 => 52,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/vani/templates/layout/page.html.twig", "/app/web/themes/contrib/vani/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 52);
        static $filters = array("escape" => 60);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
