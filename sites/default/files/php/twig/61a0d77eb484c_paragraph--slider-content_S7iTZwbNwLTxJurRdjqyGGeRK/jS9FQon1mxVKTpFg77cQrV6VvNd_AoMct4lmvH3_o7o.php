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

/* themes/custom/sepia/templates/paragraphs/paragraph--slider-content.html.twig */
class __TwigTemplate_6b51253e6e216688a573d3a3f969eaae935b3084cb4db499ba8b9442dceb6d65 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 2];
        $filters = ["escape" => 1, "render" => 2];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'render'],
                []
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
        echo "     <div class=\"intro-caption caption-animate intro-caption-xxlg ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_content_position", []), "value", [])), "html", null, true);
        echo "\">
\t";
        // line 2
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_heading_1", []))) {
            echo "<h1 class=\"intro-title\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_heading_1", [])), "html", null, true);
            echo "</h1>";
        }
        // line 3
        echo "\t";
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_heading_2", []))) {
            echo "<h2 class=\"intro-subtitle\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_heading_2", [])), "html", null, true);
            echo "</h2>";
        }
        // line 4
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_slider_text", [])), "html", null, true);
        echo "
     ";
        // line 5
        if (($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_link1", [])) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_link2", [])))) {
            // line 6
            echo "     <div class=\"margin-top-30\">
     ";
            // line 7
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_link1", []))) {
                // line 8
                echo "     ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_link1", [])), "html", null, true);
                echo "\t\t
\t ";
            }
            // line 9
            echo " \t
\t ";
            // line 10
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_link2", []))) {
                // line 11
                echo "     ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_link2", [])), "html", null, true);
                echo "\t\t
\t ";
            }
            // line 13
            echo "\t </div>
\t ";
        }
        // line 15
        echo "\t</div>

\t
\t
";
    }

    public function getTemplateName()
    {
        return "themes/custom/sepia/templates/paragraphs/paragraph--slider-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 15,  102 => 13,  96 => 11,  94 => 10,  91 => 9,  85 => 8,  83 => 7,  80 => 6,  78 => 5,  73 => 4,  66 => 3,  60 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("     <div class=\"intro-caption caption-animate intro-caption-xxlg {{ paragraph.field_content_position.value }}\">
\t{% if content.field_heading_1|render %}<h1 class=\"intro-title\">{{content.field_heading_1}}</h1>{% endif %}
\t{% if content.field_heading_2|render %}<h2 class=\"intro-subtitle\">{{content.field_heading_2}}</h2>{% endif %}
    {{ content.field_slider_text }}
     {% if content.field_link1|render or content.field_link2|render %}
     <div class=\"margin-top-30\">
     {% if content.field_link1|render %}
     {{ content.field_link1 }}\t\t
\t {% endif %} \t
\t {% if content.field_link2|render %}
     {{ content.field_link2 }}\t\t
\t {% endif %}
\t </div>
\t {% endif %}
\t</div>

\t
\t
", "themes/custom/sepia/templates/paragraphs/paragraph--slider-content.html.twig", "/vagrant/nativepr/themes/custom/sepia/templates/paragraphs/paragraph--slider-content.html.twig");
    }
}
