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

/* themes/custom/sepia/templates/paragraphs/paragraph--header.html.twig */
class __TwigTemplate_09724669a5f518751038cf249ea044526e7254e775cd56d1ddc067d57205a840 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "set" => 2];
        $filters = ["render" => 1, "escape" => 7];
        $functions = ["drupal_entity" => 9];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['render', 'escape'],
                ['drupal_entity']
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
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_header_style", []))) {
            // line 2
            echo "  ";
            $context["header_style"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_header_style", []), "#items", [], "array"), "getString", [], "method");
        }
        // line 4
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_menu_align", []))) {
            // line 5
            echo "  ";
            $context["menu_align"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_menu_align", []), "#items", [], "array"), "getString", [], "method");
        }
        // line 7
        echo "<header id=\"header\" ";
        if ((($context["menu_align"] ?? null) == "menu-align-center")) {
            echo "class=\"menu-align-center\"";
        } else {
            echo "class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_style"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_align"] ?? null)), "html", null, true);
            echo "\"";
        }
        echo ">
   <div class=\"header-inner tt-wrap\">
";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalEntity("block", "sepia_branding"), "html", null, true);
        echo "
   <nav class=\"tt-main-menu\">
\t\t<div id=\"tt-m-menu-toggle-btn\">
\t\t\t<span></span>
\t\t</div>
\t
\t\t\t\t\t<div class=\"tt-menu-tools\">
\t\t\t\t\t
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 18
        if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_search", []), "value", []) == "1")) {
            // line 19
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"tt-clobal-search-trigger\"><i class=\"fa fa-search\"></i></a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"tt-clobal-search\">
\t\t\t\t\t\t\t\t\t<div class=\"tt-clobal-search-inner\">
\t\t\t\t\t\t\t\t\t\t<span class=\"tt-clobal-search-title\">Search</span>
\t\t\t\t\t";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalEntity("block", "sepia_search"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t<div class=\"tt-clobal-search-close\"><i class=\"tt-close-btn tt-close-light\"></i></div>
\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 32
        echo "                            ";
        if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_language_menu_on_off", []), "value", []) == "1")) {
            // line 33
            echo "\t\t\t\t\t\t\t";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_menu_lng", [])), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t\t

\t\t\t\t\t\t\t";
        // line 37
        if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_show_button", []), "value", []) == "1")) {
            // line 38
            echo "\t\t\t\t\t\t\t<li class=\"button-link\">
\t\t\t\t\t\t\t\t";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_button_link", [])), "html", null, true);
            echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tt-menu-collapse ";
        // line 45
        if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_submenu_dark_style", []), "value", []) == "1")) {
            echo "tt-submenu-dark";
        }
        echo "\">
\t\t\t\t\t";
        // line 46
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalEntity("block", "sepia_main_menu"), "html", null, true);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t</div> 

\t\t\t\t</nav> 
\t\t\t

\t\t\t</div>

\t\t</header>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/sepia/templates/paragraphs/paragraph--header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 46,  142 => 45,  137 => 42,  131 => 39,  128 => 38,  126 => 37,  122 => 35,  116 => 33,  113 => 32,  103 => 25,  95 => 19,  93 => 18,  81 => 9,  67 => 7,  63 => 5,  61 => 4,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if content.field_header_style|render %}
  {% set header_style = content.field_header_style['#items'].getString() %}
{% endif %}
{% if content.field_menu_align|render %}
  {% set menu_align = content.field_menu_align['#items'].getString() %}
{% endif %}
<header id=\"header\" {% if menu_align == 'menu-align-center' %}class=\"menu-align-center\"{% else %}class=\"{{header_style}} {{menu_align}}\"{% endif %}>
   <div class=\"header-inner tt-wrap\">
{{ drupal_entity('block', 'sepia_branding') }}
   <nav class=\"tt-main-menu\">
\t\t<div id=\"tt-m-menu-toggle-btn\">
\t\t\t<span></span>
\t\t</div>
\t
\t\t\t\t\t<div class=\"tt-menu-tools\">
\t\t\t\t\t
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t{% if paragraph.field_search.value =='1' %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"tt-clobal-search-trigger\"><i class=\"fa fa-search\"></i></a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"tt-clobal-search\">
\t\t\t\t\t\t\t\t\t<div class=\"tt-clobal-search-inner\">
\t\t\t\t\t\t\t\t\t\t<span class=\"tt-clobal-search-title\">Search</span>
\t\t\t\t\t{{ drupal_entity('block', 'sepia_search') }}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t<div class=\"tt-clobal-search-close\"><i class=\"tt-close-btn tt-close-light\"></i></div>
\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
                            {% if paragraph.field_language_menu_on_off.value =='1' %}
\t\t\t\t\t\t\t{{ content.field_menu_lng }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t

\t\t\t\t\t\t\t{% if paragraph.field_show_button.value =='1' %}
\t\t\t\t\t\t\t<li class=\"button-link\">
\t\t\t\t\t\t\t\t{{ content.field_button_link }}
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tt-menu-collapse {% if paragraph.field_submenu_dark_style.value =='1' %}tt-submenu-dark{% endif %}\">
\t\t\t\t\t{{ drupal_entity('block', 'sepia_main_menu') }}
\t\t\t\t\t\t
\t\t\t\t\t</div> 

\t\t\t\t</nav> 
\t\t\t

\t\t\t</div>

\t\t</header>
", "themes/custom/sepia/templates/paragraphs/paragraph--header.html.twig", "/vagrant/nativepr/themes/custom/sepia/templates/paragraphs/paragraph--header.html.twig");
    }
}
