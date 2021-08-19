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
class __TwigTemplate_e40cf6b06a253e565d4b2954aca57b8715ced83f3ce84b8ce1267bdeac0686f6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "trans" => 89];
        $filters = ["escape" => 2, "render" => 13, "t" => 26];
        $functions = ["attach_library" => 2];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'render', 't'],
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
              <div class=\"contact paragraph--type--dd-block row\">
                  <h3 class=\"block-title text-align-center\">";
            // line 26
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Contact"));
            echo "</h3>
                  <div id=\"contact\" class=\"contact-left col-sm-12 col-md-6\">
                      <div class=\"row\">
                          <h3>Native PR, s.r.o.</h3>
                          <div class=\"call col-sm-6 col-md-6\">
                              <a class=\"btn btn-social-min btn-lg btn-default btn-link\" href=\"tel:221592450\" title=\"Zavolejte nám\"><i class=\"fa fa-mobile\">&nbsp;</i></a>
                              <br> ";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("call us..."));
            echo "
                              <div class=\"nmbr\"><a href=\"tel:221592450\" title=\"Zavolejte nám\">221 592 450</a></div>
                              <br>
                              <div class=\"under-txt\">
                                  Krocínova 1 <br>
                                  110 00 Praha 1 <br>
                                  DIČ: CZ 60202335<br>
                              </div>
                          </div>
                          <div class=\"call col-sm-6 col-md-6\">
                              <a class=\"btn btn-social-min btn-lg btn-default btn-link\" href=\"mailto:welcome@nativepr.cz\" title=\"Napište nám\"><i class=\"fa fa-envelope\">&nbsp;</i></a>
                              <br>";
            // line 43
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("write us..."));
            echo "
                              <div class=\"nmbr\"> <a href=\"mailto:welcome@nativepr.cz\" title=\"Napište nám\">welcome@nativepr.cz </a></div>
                              <br>
                              <div class=\"under-txt\">
                                  ";
            // line 47
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Help line"));
            echo " 24/7<br>
                                  +420 603 574 650
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class=\"contact-right col-sm-12 col-md-6\">
                      ";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["page"] ?? null), "hidden_blocks_collection", []), "contactblock", [])), "html", null, true);
            echo "
              </div>
              </div>

              <!-- Modal Case studies -->



              <!-- Modal Služby -->



          </div>
        </div>
\t  ";
        }
        // line 69
        echo "
      ";
        // line 70
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) {
            // line 71
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 72
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
            ";
            // line 73
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </div>
        </div>
\t  ";
        }
        // line 77
        echo "       </div>
    </div>
   </div>
</section>
</main>
";
        // line 82
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 83
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
";
        }
        // line 85
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
            // line 86
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
            echo "
";
        }
        // line 88
        if (($context["scrolltop"] ?? null)) {
            // line 89
            echo "    <a href=\"#body\" class=\"scrolltotop sm-scroll\" title=\"";
            echo t("Scroll to top", array());
            echo "\"><i class=\"fa fa-chevron-up\"></i></a>
";
        }
        // line 91
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
        return array (  219 => 91,  213 => 89,  211 => 88,  205 => 86,  203 => 85,  197 => 83,  195 => 82,  188 => 77,  181 => 73,  177 => 72,  174 => 71,  172 => 70,  169 => 69,  151 => 54,  141 => 47,  134 => 43,  120 => 32,  111 => 26,  106 => 24,  102 => 23,  99 => 22,  97 => 21,  94 => 20,  87 => 16,  83 => 15,  80 => 14,  78 => 13,  70 => 7,  64 => 5,  62 => 4,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/sepia/templates/layout/page--front.html.twig", "/vagrant/nativepr/themes/custom/sepia/templates/layout/page--front.html.twig");
    }
}
