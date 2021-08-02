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

/* themes/custom/sepia/templates/content/node--article--full.html.twig */
class __TwigTemplate_dddaf35b948273d70d0f1da608cd22ddc9fe0734778da158ea063bd39facf93c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 2, "date" => 29];
        $functions = ["file_url" => 2];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date'],
                ['file_url']
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
        echo "<article class=\"blog-single-post lightgallery\">
  <a href=\"";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image", []), "#items", [], "array"), "entity", []), "uri", []), "value", []))]), "html", null, true);
        echo "\" class=\"blog-single-featured-image lg-trigger\" data-exthumbnail=\"assets/img/blog/list/blog-1.jpg\">
\t\t\t\t\t\t\t\t\t";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<!-- End blog single featured image -->

\t\t\t\t\t\t\t\t<!-- Begin blog single heading -->
\t\t\t\t\t\t\t\t<div class=\"blog-single-post-heading\">
\t\t\t\t\t\t\t\t\t<h1 class=\"blog-single-post-title\">";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t\t\t<div class=\"blog-single-post-category\">";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_tags", [])), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End blog single heading -->

\t\t\t\t\t\t\t\t<!-- Begin blog single post inner -->
\t\t\t\t\t\t\t\t<div class=\"blog-single-post-inner\">

\t\t\t\t\t\t\t\t\t<!-- Begin blog single attributes -->
\t\t\t\t\t\t\t\t\t<div class=\"blog-single-attributes\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Begin blog single meta -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-single-meta-wrap\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Blog single author avatar -->

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-single-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"article-time-cat\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"article-time\">";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null)), "d.m Y"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- End blog single meta -->

\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /.col -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">

\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /.col -->
\t\t\t\t\t\t\t\t\t\t</div> <!-- /.row -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- End blog single attributes -->

\t\t\t\t\t\t\t\t\t<!-- Begin post content -->
\t\t\t\t\t\t\t\t\t<div class=\"post-content\">

\t\t\t\t\t\t\t\t\t\t";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div> <!-- /.col -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t

</article> ";
    }

    public function getTemplateName()
    {
        return "themes/custom/sepia/templates/content/node--article--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 48,  97 => 29,  75 => 10,  71 => 9,  62 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/sepia/templates/content/node--article--full.html.twig", "/vagrant/nativepr/themes/custom/sepia/templates/content/node--article--full.html.twig");
    }
}
