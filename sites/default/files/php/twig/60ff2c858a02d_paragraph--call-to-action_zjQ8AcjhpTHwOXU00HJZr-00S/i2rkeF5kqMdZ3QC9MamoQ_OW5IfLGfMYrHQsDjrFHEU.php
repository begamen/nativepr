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

/* themes/custom/sepia/templates/paragraphs/paragraph--call-to-action.html.twig */
class __TwigTemplate_0da16ad404fbfcc5359f2023a22e3a8cc018ac40e41ffe9e1a958af5c1d02c58 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 2];
        $filters = ["escape" => 3, "render" => 17];
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
        echo "<section class=\"call-to-action-section\">
  ";
        // line 2
        if (($context["dark"] ?? null)) {
            // line 3
            echo "   <div class=\"full-cover for-dark-style bg-image\" style=\"background-image: url(";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
            echo "/assets/img/pattern/bg-pattern-2-dark.png); background-position: 50% 50%;\"></div>
   ";
        } else {
            // line 5
            echo "    <div class=\"full-cover for-light-style\"></div>
 ";
        }
        // line 7
        echo "\t<div class=\"call-to-action-inner tt-wrap\"> 
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 text-center\">

";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_cta_title_subtitle", [])), "html", null, true);
        echo "

\t\t\t\t\t\t
\t\t 
\t
\t<div class=\"margin-top-30 max-width-1000 margin-auto\">
                         ";
        // line 17
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_cta_text", []))) {
            echo " 
\t\t\t\t\t\t\t\t";
            // line 18
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_cta_text", [])), "html", null, true);
            echo "
\t\t\t\t\t\t ";
        }
        // line 20
        echo "                         ";
        if (($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_cta_link1", [])) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_cta_link2", [])))) {
            echo "    
\t\t\t\t\t\t\t\t<div class=\"margin-top-30\">
 ";
            // line 22
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_cta_link1", []))) {
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_cta_link1", [])), "html", null, true);
            }
            // line 23
            echo " ";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_cta_link2", []))) {
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_cta_link2", [])), "html", null, true);
            }
            // line 24
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 25
        echo "\t
\t </div>\t\t\t\t\t\t
    </div>
    </div>
    </div> 
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sepia/templates/paragraphs/paragraph--call-to-action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 25,  109 => 24,  104 => 23,  100 => 22,  94 => 20,  89 => 18,  85 => 17,  76 => 11,  70 => 7,  66 => 5,  60 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/sepia/templates/paragraphs/paragraph--call-to-action.html.twig", "/vagrant/nativepr/themes/custom/sepia/templates/paragraphs/paragraph--call-to-action.html.twig");
    }
}
