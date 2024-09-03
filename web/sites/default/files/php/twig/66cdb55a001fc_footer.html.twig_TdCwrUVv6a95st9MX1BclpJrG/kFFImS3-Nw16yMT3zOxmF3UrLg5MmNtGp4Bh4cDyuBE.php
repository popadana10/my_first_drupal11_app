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

/* @vani/template-parts/footer.html.twig */
class __TwigTemplate_1cb7b212f54ea1d89d8a3f3056e2eb9d extends Template
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
        yield "<!-- Start: Footer -->
";
        // line 2
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 2)) {
            // line 3
            yield "  <section id=\"footer-top\">
    <div class=\"footer-top footer-block-region container\">
      ";
            // line 5
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            yield "
    </div>
  </section>
";
        }
        // line 8
        yield "<!-- /footer-top -->
<footer class=\"footer\">
  ";
        // line 10
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 10) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 10)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 10)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 10))) {
            // line 11
            yield "    <section id=\"footer-blocks\">
      <div class=\"container footer-container\">
        <div class=\"footer-block footer-block-region block-section\">
          ";
            // line 14
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 14)) {
                // line 15
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                yield "
          ";
            }
            // line 17
            yield "        </div> <!--/footer-first -->

        <div class=\"footer-block footer-block-region block-section\">
          ";
            // line 20
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 20)) {
                // line 21
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                yield "
          ";
            }
            // line 23
            yield "        </div> <!--/footer-second -->

        <div class=\"footer-block footer-block-region block-section\">
          ";
            // line 26
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 26)) {
                // line 27
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                yield "
          ";
            }
            // line 29
            yield "        </div> <!--/footer-three -->

        <div class=\"footer-block footer-block-region block-section\">
          ";
            // line 32
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 32)) {
                // line 33
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                yield "
          ";
            }
            // line 35
            yield "        </div> <!--/footer-fourth -->
      </div> <!--/container -->
    </section> <!--/footer-blocks -->
  ";
        }
        // line 38
        yield " ";
        // line 39
        yield "
  ";
        // line 40
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 40)) {
            // line 41
            yield "    <section id=\"footer-bottom\">
      <div class=\"footer-bottom container block-section\">
        ";
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            yield "
      </div> <!-- /.container -->
    </section>
  ";
        }
        // line 46
        yield "<!-- /footer-bottom -->

 ";
        // line 48
        if ((($context["copyright_text"] ?? null) || ($context["all_icons_show"] ?? null))) {
            // line 49
            yield "  <section id=\"footer-bottom-last\">
    <div class=\"container\">
    <div class=\"footer-bottom-last\">
      ";
            // line 52
            if (($context["copyright_text"] ?? null)) {
                // line 53
                yield "          <div class=\"copyright\">
            &copy; ";
                // line 54
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 54, $this->source), "html", null, true);
                yield ", All rights reserved.
          </div>
      ";
            }
            // line 57
            yield "      ";
            if (($context["all_icons_show"] ?? null)) {
                // line 58
                yield "        <div class=\"footer-social-icons\">
          ";
                // line 59
                yield from                 $this->loadTemplate("@vani/template-parts/social-icons.html.twig", "@vani/template-parts/footer.html.twig", 59)->unwrap()->yield($context);
                // line 60
                yield "        </div>
      ";
            }
            // line 62
            yield "      </div> <!--/.social icons -->
    </div> <!-- /.container -->
    </div> <!-- /.container -->
  </section> <!-- /footer-bottom-last -->
  ";
        }
        // line 66
        yield " <!-- end condition if copyright or social icons -->
</footer>
";
        // line 68
        if (($context["scrolltotop_on"] ?? null)) {
            // line 69
            yield "<div class=\"scrolltop\"><div class=\"scrolltop-icon\">&#x2191;</div></div>
";
        }
        // line 71
        yield "<!-- End: Footer -->
";
        // line 72
        if (($context["font_icon_fontawesome"] ?? null)) {
            // line 73
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("vani/fontawesome"), "html", null, true);
            yield "
";
        }
        // line 75
        if (($context["font_icon_material"] ?? null)) {
            // line 76
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("vani/material"), "html", null, true);
            yield "
";
        }
        // line 78
        if (($context["bootstrapicons"] ?? null)) {
            // line 79
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("vani/bootstrap-icons"), "html", null, true);
            yield "
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "copyright_text", "all_icons_show", "site_name", "scrolltotop_on", "font_icon_fontawesome", "font_icon_material", "bootstrapicons"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@vani/template-parts/footer.html.twig";
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
        return array (  210 => 79,  208 => 78,  203 => 76,  201 => 75,  196 => 73,  194 => 72,  191 => 71,  187 => 69,  185 => 68,  181 => 66,  174 => 62,  170 => 60,  168 => 59,  165 => 58,  162 => 57,  154 => 54,  151 => 53,  149 => 52,  144 => 49,  142 => 48,  138 => 46,  131 => 43,  127 => 41,  125 => 40,  122 => 39,  120 => 38,  114 => 35,  108 => 33,  106 => 32,  101 => 29,  95 => 27,  93 => 26,  88 => 23,  82 => 21,  80 => 20,  75 => 17,  69 => 15,  67 => 14,  62 => 11,  60 => 10,  56 => 8,  49 => 5,  45 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@vani/template-parts/footer.html.twig", "/app/web/themes/contrib/vani/templates/template-parts/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "include" => 59);
        static $filters = array("escape" => 5, "date" => 54);
        static $functions = array("attach_library" => 73);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 'date'],
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
