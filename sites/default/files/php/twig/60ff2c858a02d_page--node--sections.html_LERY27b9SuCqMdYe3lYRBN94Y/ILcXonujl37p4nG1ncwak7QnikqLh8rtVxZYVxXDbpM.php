<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/sepia/templates/layout/page--node--sections.html.twig */
class __TwigTemplate_8cd30bae8ae71615cd31202d4d231ddeb1932798107a022f80381d19239820f4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "trans" => 20];
        $filters = ["escape" => 2];
        $functions = ["attach_library" => 2];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (($context["dark"] ?? null)) {
            // line 2
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("sepia/dark-style"), "html", null, true);
            echo "
";
        }
        // line 4
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 5
            echo "   ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
";
        }
        // line 7
        echo "<div id=\"body-content\">
<main id=\"main-content\">
  ";
        // line 9
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 10
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
  ";
        }
        // line 12
        echo "</main>
";
        // line 13
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 14
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
";
        }
        // line 16
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
            // line 17
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
            echo "
";
        }
        // line 19
        if (($context["scrolltop"] ?? null)) {
            // line 20
            echo "    <a href=\"#body\" class=\"scrolltotop sm-scroll\" title=\"";
            echo t("Scroll to top", array());
            echo "\"><i class=\"fa fa-chevron-up\"></i></a>
";
        }
        // line 22
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/sepia/templates/layout/page--node--sections.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 22,  103 => 20,  101 => 19,  95 => 17,  93 => 16,  87 => 14,  85 => 13,  82 => 12,  76 => 10,  74 => 9,  70 => 7,  64 => 5,  62 => 4,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/sepia/templates/layout/page--node--sections.html.twig", "/vagrant/nativepr/themes/custom/sepia/templates/layout/page--node--sections.html.twig");
    }
}
