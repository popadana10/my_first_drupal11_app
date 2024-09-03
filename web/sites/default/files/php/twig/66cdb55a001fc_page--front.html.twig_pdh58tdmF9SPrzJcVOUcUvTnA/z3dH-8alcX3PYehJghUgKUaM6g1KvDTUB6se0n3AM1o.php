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

/* themes/contrib/vani/templates/layout/page--front.html.twig */
class __TwigTemplate_cf425340b80edaf5a9b7ca2091c96b69 extends Template
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
        // line 11
        yield from         $this->loadTemplate("@vani/template-parts/header.html.twig", "themes/contrib/vani/templates/layout/page--front.html.twig", 11)->unwrap()->yield($context);
        // line 12
        yield "<div id=\"main-wrapper\" class=\"main-wrapper\">
  ";
        // line 13
        yield from         $this->loadTemplate("@vani/template-parts/content_home.html.twig", "themes/contrib/vani/templates/layout/page--front.html.twig", 13)->unwrap()->yield($context);
        // line 14
        yield "  <div class=\"container\">
    ";
        // line 15
        if (($context["front_sidebar"] ?? null)) {
            // line 16
            yield "      <div class=\"main-container\">
    ";
        }
        // line 18
        yield "    <main id=\"main\" class=\"page-content home-content\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 20
        yield "      ";
        yield from         $this->loadTemplate("@vani/template-parts/content_top.html.twig", "themes/contrib/vani/templates/layout/page--front.html.twig", 20)->unwrap()->yield($context);
        // line 21
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        yield "
      ";
        // line 22
        yield from         $this->loadTemplate("@vani/template-parts/content_bottom.html.twig", "themes/contrib/vani/templates/layout/page--front.html.twig", 22)->unwrap()->yield($context);
        // line 23
        yield "    </main>
    ";
        // line 24
        if (($context["front_sidebar"] ?? null)) {
            // line 25
            yield "      ";
            yield from             $this->loadTemplate("@vani/template-parts/sidebar_left.html.twig", "themes/contrib/vani/templates/layout/page--front.html.twig", 25)->unwrap()->yield($context);
            // line 26
            yield "      ";
            yield from             $this->loadTemplate("@vani/template-parts/sidebar_right.html.twig", "themes/contrib/vani/templates/layout/page--front.html.twig", 26)->unwrap()->yield($context);
            // line 27
            yield "      </div> ";
            // line 28
            yield "    ";
        }
        // line 29
        yield "  </div> ";
        // line 30
        yield "</div>";
        // line 31
        yield from         $this->loadTemplate("@vani/template-parts/footer.html.twig", "themes/contrib/vani/templates/layout/page--front.html.twig", 31)->unwrap()->yield($context);
        // line 32
        if (($context["slider_show"] ?? null)) {
            // line 33
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("vani/slider"), "html", null, true);
            yield "
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["front_sidebar", "page", "slider_show"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/vani/templates/layout/page--front.html.twig";
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
        return array (  93 => 33,  91 => 32,  89 => 31,  87 => 30,  85 => 29,  82 => 28,  80 => 27,  77 => 26,  74 => 25,  72 => 24,  69 => 23,  67 => 22,  62 => 21,  59 => 20,  56 => 18,  52 => 16,  50 => 15,  47 => 14,  45 => 13,  42 => 12,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/vani/templates/layout/page--front.html.twig", "/app/web/themes/contrib/vani/templates/layout/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 11, "if" => 15);
        static $filters = array("escape" => 21);
        static $functions = array("attach_library" => 33);

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
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
