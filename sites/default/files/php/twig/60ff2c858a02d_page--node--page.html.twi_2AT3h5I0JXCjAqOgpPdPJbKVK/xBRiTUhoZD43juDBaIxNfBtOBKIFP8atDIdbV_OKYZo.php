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

/* themes/custom/sepia/templates/layout/page--node--page.html.twig */
class __TwigTemplate_cafb1eebe2eacce008e7c59f4d20f2b2f6ea4fa698585e33a591a3644c4b74c6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "trans" => 50];
        $filters = ["escape" => 2, "render" => 15];
        $functions = ["attach_library" => 2, "drupal_field" => 8];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'render'],
                ['attach_library', 'drupal_field']
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
 ";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalField("field_page_header", "node"), "html", null, true);
        echo "
 
 <section id=\"page-section\" class=\"page-classic\">
\t<div class=\"page-section-inner tt-wrap\"> 
        <div class=\"container-fluid\">
\t\t\t<div class=\"row\">
 
  ";
        // line 15
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_first", []))) {
            // line 16
            echo "        <div class=\"page-sidebar sidebar-left\">
          <div class = ";
            // line 17
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo " >
            ";
            // line 18
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </div>
        </div>
\t  ";
        }
        // line 22
        echo "
      ";
        // line 23
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "content", []))) {
            // line 24
            echo "
          <div class=\"main-content\">
          <div class=";
            // line 26
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo ">
            ";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
          </div>
          </div>

\t  ";
        }
        // line 32
        echo "
      ";
        // line 33
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) {
            // line 34
            echo "        <div class=\"page-sidebar sidebar-right\">
          <div class=";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
            ";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </div>
        </div>
\t  ";
        }
        // line 40
        echo "
</div></div></div>
</section>
";
        // line 43
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 44
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
";
        }
        // line 46
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
            // line 47
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
            echo "
";
        }
        // line 49
        if (($context["scrolltop"] ?? null)) {
            // line 50
            echo "    <a href=\"#body\" class=\"scrolltotop sm-scroll\" title=\"";
            echo t("Scroll to top", array());
            echo "\"><i class=\"fa fa-chevron-up\"></i></a>
";
        }
        // line 52
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sepia/templates/layout/page--node--page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 52,  162 => 50,  160 => 49,  154 => 47,  152 => 46,  146 => 44,  144 => 43,  139 => 40,  132 => 36,  128 => 35,  125 => 34,  123 => 33,  120 => 32,  112 => 27,  108 => 26,  104 => 24,  102 => 23,  99 => 22,  92 => 18,  88 => 17,  85 => 16,  83 => 15,  73 => 8,  70 => 7,  64 => 5,  62 => 4,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/sepia/templates/layout/page--node--page.html.twig", "/vagrant/nativepr/themes/custom/sepia/templates/layout/page--node--page.html.twig");
    }
}
