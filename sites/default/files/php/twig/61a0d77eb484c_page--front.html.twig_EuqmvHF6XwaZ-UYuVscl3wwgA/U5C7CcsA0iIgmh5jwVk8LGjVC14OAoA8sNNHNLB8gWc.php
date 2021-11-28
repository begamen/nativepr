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

/* themes/custom/sepia/templates/layout/page--front.html.twig */
class __TwigTemplate_d25619cbedf41a05c43ee1910ae3cea715dfa448a024578d1ade85b8f95cfeef extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "trans" => 49];
        $filters = ["escape" => 2, "render" => 13];
        $functions = ["attach_library" => 2];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'render'],
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
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
";
        }
        // line 7
        echo "<div id=\"body-content\">
<main id=\"main-content\">
 <section id=\"page-section\" class=\"page-classic\">
\t<div class=\"page-section-inner tt-wrap\"> 
        <div class=\"container-fluid\">
\t\t\t<div class=\"row\">
  ";
        // line 13
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_first", []))) {
            // line 14
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo " >
            ";
            // line 16
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </div>
        </div>
\t  ";
        }
        // line 20
        echo "
      ";
        // line 21
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "content", []))) {
            // line 22
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo ">
            ";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "

          </div>
        </div>
\t  ";
        }
        // line 29
        echo "
      ";
        // line 30
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) {
            // line 31
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
            ";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </div>
        </div>
\t  ";
        }
        // line 37
        echo "       </div>
    </div>
   </div>
</section>
</main>
";
        // line 42
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 43
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
";
        }
        // line 45
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
            // line 46
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
            echo "
";
        }
        // line 48
        if (($context["scrolltop"] ?? null)) {
            // line 49
            echo "    <a href=\"#body\" class=\"scrolltotop sm-scroll\" title=\"";
            echo t("Scroll to top", array());
            echo "\"><i class=\"fa fa-chevron-up\"></i></a>
";
        }
        // line 51
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sepia/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 51,  158 => 49,  156 => 48,  150 => 46,  148 => 45,  142 => 43,  140 => 42,  133 => 37,  126 => 33,  122 => 32,  119 => 31,  117 => 30,  114 => 29,  106 => 24,  102 => 23,  99 => 22,  97 => 21,  94 => 20,  87 => 16,  83 => 15,  80 => 14,  78 => 13,  70 => 7,  64 => 5,  62 => 4,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if dark %}
{{ attach_library('sepia/dark-style') }}
{% endif %}
{% if page.header %}
      {{ page.header }}
{% endif %}
<div id=\"body-content\">
<main id=\"main-content\">
 <section id=\"page-section\" class=\"page-classic\">
\t<div class=\"page-section-inner tt-wrap\"> 
        <div class=\"container-fluid\">
\t\t\t<div class=\"row\">
  {% if page.sidebar_first | render %}
        <div class=\"sidebar\" >
          <div class = {{sidebarfirst}} >
            {{ page.sidebar_first }}
          </div>
        </div>
\t  {% endif %}

      {% if page.content | render %}
        <div class=\"content_layout\">
          <div class={{contentlayout}}>
            {{ page.content }}

          </div>
        </div>
\t  {% endif %}

      {% if page.sidebar_second | render %}
        <div class=\"sidebar\">
          <div class={{sidebarsecond}}>
            {{ page.sidebar_second }}
          </div>
        </div>
\t  {% endif %}
       </div>
    </div>
   </div>
</section>
</main>
{% if page.footer %}
    {{ page.footer }}
{% endif %}
{% if page.footer_bottom %}
    {{ page.footer_bottom }}
{% endif %}
{% if scrolltop %}
    <a href=\"#body\" class=\"scrolltotop sm-scroll\" title=\"{% trans %}Scroll to top{% endtrans %}\"><i class=\"fa fa-chevron-up\"></i></a>
{% endif %}
</div>", "themes/custom/sepia/templates/layout/page--front.html.twig", "/vagrant/nativepr/themes/custom/sepia/templates/layout/page--front.html.twig");
    }
}
