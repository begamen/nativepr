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

/* themes/custom/sepia/templates/paragraphs/paragraph--footer-minimal.html.twig */
class __TwigTemplate_01f190a3c2197ce22f4dafe2830664127468528bf38eb07e49eb3a71556a7911 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1];
        $filters = ["render" => 5, "escape" => 7];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['render', 'escape'],
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
        echo "<section id=\"footer-bottom\" class=\"footer-bottom footer-minimal ";
        if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_margin_top", []), "value", []) == "0")) {
            echo "no-margin-top";
        }
        echo " ";
        if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_fdark", []), "value", []) == "1")) {
            echo "footer-dark";
        }
        echo "\">
\t\t\t\t
\t\t\t\t\t<div class=\"footer-container ";
        // line 3
        if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_f_content_full_width", []), "value", []) == "1")) {
            echo "full-width";
        } else {
            echo "tt-wrap";
        }
        echo "\">
\t\t\t\t\t\t<div class=\"row\">
                        ";
        // line 5
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_right", []))) {
            // line 6
            echo "\t\t\t\t\t\t\t<div class=\"col-md-6 col-md-push-6\">
\t\t\t\t\t\t\t ";
            // line 7
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_right", [])), "html", null, true);
            echo "\t
\t                        </div> 
                        ";
        }
        // line 10
        echo "                        ";
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_fleft", []))) {
            // line 11
            echo "\t\t\t\t\t\t\t<div class=\"col-md-6 col-md-pull-6\">
                             ";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_fleft", [])), "html", null, true);
            echo "
                            </div> 
                        ";
        }
        // line 14
        echo "    
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sepia/templates/paragraphs/paragraph--footer-minimal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 14,  93 => 12,  90 => 11,  87 => 10,  81 => 7,  78 => 6,  76 => 5,  67 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"footer-bottom\" class=\"footer-bottom footer-minimal {% if paragraph.field_margin_top.value =='0' %}no-margin-top{% endif %} {% if paragraph.field_fdark.value =='1' %}footer-dark{% endif %}\">
\t\t\t\t
\t\t\t\t\t<div class=\"footer-container {% if paragraph.field_f_content_full_width.value =='1' %}full-width{% else %}tt-wrap{% endif %}\">
\t\t\t\t\t\t<div class=\"row\">
                        {% if content.field_right|render %}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-md-push-6\">
\t\t\t\t\t\t\t {{ content.field_right }}\t
\t                        </div> 
                        {% endif %}
                        {% if content.field_fleft|render %}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-md-pull-6\">
                             {{ content.field_fleft }}
                            </div> 
                        {% endif %}    
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
</section>", "themes/custom/sepia/templates/paragraphs/paragraph--footer-minimal.html.twig", "/vagrant/nativepr/themes/custom/sepia/templates/paragraphs/paragraph--footer-minimal.html.twig");
    }
}
