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

/* themes/custom/sepia/templates/block/block--block-content--6c18673c-1999-4758-b5b8-7ae790bf4563.html.twig */
class __TwigTemplate_2032e408d19e8e0c1696f85f725c91a0d5c5be1cf483825531c1a17b8d122cb4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 29];
        $filters = ["escape" => 28];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
";
        // line 29
        if (($context["label"] ?? null)) {
            // line 30
            echo "<h3 class=\"block-title\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</h3>
";
        }
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
<div class=\"block-inner\">





    <p class=\"text-align-center uprclas\">&nbsp;</p>

    <div class=\"references-top\">
        <h3 class=\"block-title\">Reference vybraných klientů</h3>

        <p class=\"margin-helper text-align-center\">Abychom o naší práci nehovořili pouze my, nechali jsme naše klienty, aby sami vyjádřili, jak naši spolupráci a služby vnímají...</p>

        <div class=\"references\" id=\"references\">
            <div class=\"row\">

                <a role=\"button\" data-toggle=\"collapse\" href=\"#csx1\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"inner\"><img src=\"/sites/default/files/rf/1.png\" />
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
                </a>

                <a role=\"button\" data-toggle=\"collapse\" href=\"#csx2\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"inner\"><img src=\"/sites/default/files/rf/2.png\" />
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
                </a>

                <a role=\"button\" data-toggle=\"collapse\" href=\"#csx3\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"inner\"><img src=\"/sites/default/files/rf/4.png\" />
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
                </a>

                <a role=\"button\" data-toggle=\"collapse\" href=\"#csx4\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"inner\"><img src=\"/sites/default/files/rf/6.png\" />
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
                </a>
            </div>

            <div class=\"row b-b\">

                <div class=\"collapse\" id=\"csx1\">
                    <div class=\"well-med\">
                        <div class=\"inner-wl\">
                            <h4>CSR projekt: Zachraňujeme životy!</h4>
                            <p>Jak úspěšně medializovat zavedení defibrilátorů na čerpacích stanicích? Pro MOL Česká republika je péče o zákazníky prioritou. Kromě špičkového servisu na čerpacích stanicích klade stejně velký důraz i na zdraví motoristů – a právě proto zavedla automatické externí defibrilátory na nejfrekventovanějších dálničních tazích. Komunikaci tohoto kroku jsme načasovali na období letních prázdnin, kdy se kvůli teplotám zvyšuje riziko infarktů, a to nejen za volantem. Uspořádali jsme exkluzivní tiskovou konferenci s interaktivním programem, na níž si sami novináři vyzkoušeli obsluhu defibrilátoru. Díky tomu získal projekt velkou publicitu. Diváci z celé země se dozvěděli o tom, že na čerpacích stanicích MOL jsou instalované defibrilátory a viděli,jak snadné je jejich použití – reportáž o projektu byla odvysílána i v hlavních večerních zprávách České televize! Během léta jsme vydávali osvětové články s tématem srdeční zástavy a první pomoci do celostátních i regionálních médií s důrazem na informaci o existenci defibrilátorů na dálničních čerpacích stanicích MOL.</p>
                        </div>
                    </div>
                </div>

                <div class=\"collapse\" id=\"csx2\">
                    <div class=\"well-med\">
                        <div class=\"inner-wl\">
                            <h4>PRODEJ POJIŠŤOVNY - TAHLE NEVĚSTA JE VÁŽNĚ ATRAKTIVNÍ!</h4>
                            <p>Finanční skupina Wüstenrot zveřejnila záměr prodat svou pojišťovací část. Při hledání strategického partnera hrála významnou roli síla, stabilita, zdraví a hodnota značky Wüstenrot. Úkolem agentury Native PR bylo posílit vnímanou hodnotu pojišťovny jejím větším zviditelněním v médiích a posílením image celé skupiny jako experta a inovátora v relevantních finančních segmentech. Dosažený výsledek: z hlediska mediální publicity byl pro Wüstenrot rok 2015 rekordní. Podle mediální analýzy Newton bylo zveřejněno 1 432 pozitivních nebo neutrálních výstupů a hodnota AVE dosáhla 35,5 mil. Kč. Celková čtenost přesáhla 350 mil. recipientů. Zvýšená mediální prezentace podpořila management firmy při hledání partnera pro akvizici a už v září mohla společnost oznámit, že pojišťovací část finanční skupiny Wüstenrot přebere skupina Allianz.</p>
                        </div>
                    </div>
                </div>

                <div class=\"collapse\" id=\"csx3\">
                    <div class=\"well-med\">
                        <div class=\"inner-wl\">
                            <h4>Firemní event: Den malých papíráků</h4>
                            <p>Zabavit přes 200 dětí je královská disciplína. Pro nás to ale byla hračka! Děti zaměstnanců největší české papírny Mondi Štětí zakončují své prázdniny příměstským táborem a zlatým hřebem je tradiční Den malých papíráků – celodenní akce, která dětem přináší zábavu i poučení. Tentokrát na „papíráky“ čekalo 12 zábavných stanovišť s tématem bezpečnosti a zodpovědného chování. Kromě kreativních a sportovních aktivit měly děti možnost si zahrát scénky před kamerou nebo potrénovat své manuální dovednosti při každodenních činnostech pouze s pomocí jedné ruky. Jedním z nejočekávanějších bodů programu bylo setkání s populární youtuberskou dvojicí TVTwixx, která děti zaujala vyprávěním o bezpečnosti na internetu.</p>
                        </div>
                    </div>
                </div>

                <div class=\"collapse\" id=\"csx4\">
                    <div class=\"well-med\">
                        <div class=\"inner-wl\">
                            <h4>SAXO DOPLNIT</h4>
                            <p>Zabavit přes 200 dětí je královská disciplína. Pro nás to ale byla hračka! Děti zaměstnanců největší české papírny Mondi Štětí zakončují své prázdniny příměstským táborem a zlatým hřebem je tradiční Den malých papíráků – celodenní akce, která dětem přináší zábavu i poučení. Tentokrát na „papíráky“ čekalo 12 zábavných stanovišť s tématem bezpečnosti a zodpovědného chování. Kromě kreativních a sportovních aktivit měly děti možnost si zahrát scénky před kamerou nebo potrénovat své manuální dovednosti při každodenních činnostech pouze s pomocí jedné ruky. Jedním z nejočekávanějších bodů programu bylo setkání s populární youtuberskou dvojicí TVTwixx, která děti zaujala vyprávěním o bezpečnosti na internetu.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class=\"row\">

                <a role=\"button\" data-toggle=\"collapse\" href=\"#csx5\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"inner\"><img src=\"/sites/default/files/rf/9.png\" />
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
                </a>

                <a role=\"button\" data-toggle=\"collapse\" href=\"#csx6\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"inner\"><img src=\"/sites/default/files/rf/10.png\" />
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
                </a>

                <a role=\"button\" data-toggle=\"collapse\" href=\"#csx7\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"inner\"><img src=\"/sites/default/files/rf/11.png\" />
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
                </a>

                <a role=\"button\" data-toggle=\"collapse\" href=\"#csx8\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"inner\"><img src=\"/sites/default/files/rf/12.png\" />
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
                </a>
            </div>

            <div class=\"row b-b\">

                <div class=\"collapse\" id=\"csx5\">
                    <div class=\"well-med\">
                        <div class=\"inner-wl\">
                            <h4>Employer Branding: Cool komunikace pro cool zaměstnance</h4>
                            <p>Jak vypadá intranet a náborový web pro firmu s věkovým průměrem zaměstnanců kolem 18 let? Pro McDonald’s jsme navrhli obsahovou a grafickou proměnu intranetu a kariérních stránek, a to tak, aby byli co nejatraktivnější pro uvedenou cílovou skupinu. Nový intranet pracuje s multimediálními formáty, vyváženým poměrem textu a vizuálů,komunikuje se zaměstnanci prostřednictvím soutěží, anket, sdílením fotografií a reportáží z firemních akcí nebo pravidelným chatem s top managementem. Také u kariérních stránek, uvedených sloganem „Mekáč jsme my!“, jsme implementovali novou obsahovou strategii s cílem co největší přehlednosti a atraktivity. Pojítkem mezi oběma kanály byl designový prvek – barevné kaňky, které jsme při spuštění nových stránek zpracovali do podoby velkých samolepek,umístěných v zázemí zaměstnanců v restauracích. Po menších samolepkách, které se rozdávaly zaměstnancům 144 českých a slovenských poboček jako dárek, se jen zaprášilo! Ukázku náborového videa naleznete zde.</p>
                    </div>
                    </div>
                </div>

                <div class=\"collapse\" id=\"csx6\">
                    <div class=\"well-med\">
                        <div class=\"inner-wl\">
                            <h4>PRODEJ POJIŠŤOVNY - TAHLE NEVĚSTA JE VÁŽNĚ ATRAKTIVNÍ!</h4>
                            <p>Finanční skupina Wüstenrot zveřejnila záměr prodat svou pojišťovací část. Při hledání strategického partnera hrála významnou roli síla, stabilita, zdraví a hodnota značky Wüstenrot. Úkolem agentury Native PR bylo posílit vnímanou hodnotu pojišťovny jejím větším zviditelněním v médiích a posílením image celé skupiny jako experta a inovátora v relevantních finančních segmentech. Dosažený výsledek: z hlediska mediální publicity byl pro Wüstenrot rok 2015 rekordní. Podle mediální analýzy Newton bylo zveřejněno 1 432 pozitivních nebo neutrálních výstupů a hodnota AVE dosáhla 35,5 mil. Kč. Celková čtenost přesáhla 350 mil. recipientů. Zvýšená mediální prezentace podpořila management firmy při hledání partnera pro akvizici a už v září mohla společnost oznámit, že pojišťovací část finanční skupiny Wüstenrot přebere skupina Allianz.</p>
                        </div>
                    </div>
                </div>

                <div class=\"collapse\" id=\"csx7\">
                    <div class=\"well-med\">
                        <div class=\"inner-wl\">
                            <h4>Firemní event: Den malých papíráků</h4>
                            <p>Zabavit přes 200 dětí je královská disciplína. Pro nás to ale byla hračka! Děti zaměstnanců největší české papírny Mondi Štětí zakončují své prázdniny příměstským táborem a zlatým hřebem je tradiční Den malých papíráků – celodenní akce, která dětem přináší zábavu i poučení. Tentokrát na „papíráky“ čekalo 12 zábavných stanovišť s tématem bezpečnosti a zodpovědného chování. Kromě kreativních a sportovních aktivit měly děti možnost si zahrát scénky před kamerou nebo potrénovat své manuální dovednosti při každodenních činnostech pouze s pomocí jedné ruky. Jedním z nejočekávanějších bodů programu bylo setkání s populární youtuberskou dvojicí TVTwixx, která děti zaujala vyprávěním o bezpečnosti na internetu.</p>
                        </div>
                    </div>
                </div>

                <div class=\"collapse\" id=\"csx8\">
                    <div class=\"well-med\">
                        <div class=\"inner-wl\">
                            <h4>SAXO DOPLNIT</h4>
                            <p>Zabavit přes 200 dětí je královská disciplína. Pro nás to ale byla hračka! Děti zaměstnanců největší české papírny Mondi Štětí zakončují své prázdniny příměstským táborem a zlatým hřebem je tradiční Den malých papíráků – celodenní akce, která dětem přináší zábavu i poučení. Tentokrát na „papíráky“ čekalo 12 zábavných stanovišť s tématem bezpečnosti a zodpovědného chování. Kromě kreativních a sportovních aktivit měly děti možnost si zahrát scénky před kamerou nebo potrénovat své manuální dovednosti při každodenních činnostech pouze s pomocí jedné ruky. Jedním z nejočekávanějších bodů programu bylo setkání s populární youtuberskou dvojicí TVTwixx, která děti zaujala vyprávěním o bezpečnosti na internetu.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class=\"row\">

                <a role=\"button\" data-toggle=\"collapse\" href=\"#csx9\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"inner\"><img src=\"/sites/default/files/rf/19.png\" />
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
                </a>

                <a role=\"button\" data-toggle=\"collapse\" href=\"#csx10\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"inner\"><img src=\"/sites/default/files/rf/21.png\" />
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
                </a>

                <a role=\"button\" data-toggle=\"collapse\" href=\"#csx11\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"inner\"><img src=\"/sites/default/files/rf/22.png\" />
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
                </a>

                    <div class=\"col-sm-6 col-md-3 spc\">
                        <div class=\"inner\">
                            ...a dalších více než<br>
                            <strong>100</strong><br>
                            klientů
                            &nbsp;
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
            </div>

            <div class=\"row b-b\">

                <div class=\"collapse\" id=\"csx9\">
                    <div class=\"well-med\">
                        <div class=\"inner-wl\">
                            <h4>Employer Branding: Cool komunikace pro cool zaměstnance</h4>
                            <p>Jak vypadá intranet a náborový web pro firmu s věkovým průměrem zaměstnanců kolem 18 let? Pro McDonald’s jsme navrhli obsahovou a grafickou proměnu intranetu a kariérních stránek, a to tak, aby byli co nejatraktivnější pro uvedenou cílovou skupinu. Nový intranet pracuje s multimediálními formáty, vyváženým poměrem textu a vizuálů,komunikuje se zaměstnanci prostřednictvím soutěží, anket, sdílením fotografií a reportáží z firemních akcí nebo pravidelným chatem s top managementem. Také u kariérních stránek, uvedených sloganem „Mekáč jsme my!“, jsme implementovali novou obsahovou strategii s cílem co největší přehlednosti a atraktivity. Pojítkem mezi oběma kanály byl designový prvek – barevné kaňky, které jsme při spuštění nových stránek zpracovali do podoby velkých samolepek,umístěných v zázemí zaměstnanců v restauracích. Po menších samolepkách, které se rozdávaly zaměstnancům 144 českých a slovenských poboček jako dárek, se jen zaprášilo! Ukázku náborového videa naleznete zde.</p>
                        </div>
                    </div>
                </div>

                <div class=\"collapse\" id=\"csx10\">
                    <div class=\"well-med\">
                        <div class=\"inner-wl\">
                            <h4>PRODEJ POJIŠŤOVNY - TAHLE NEVĚSTA JE VÁŽNĚ ATRAKTIVNÍ!</h4>
                            <p>Finanční skupina Wüstenrot zveřejnila záměr prodat svou pojišťovací část. Při hledání strategického partnera hrála významnou roli síla, stabilita, zdraví a hodnota značky Wüstenrot. Úkolem agentury Native PR bylo posílit vnímanou hodnotu pojišťovny jejím větším zviditelněním v médiích a posílením image celé skupiny jako experta a inovátora v relevantních finančních segmentech. Dosažený výsledek: z hlediska mediální publicity byl pro Wüstenrot rok 2015 rekordní. Podle mediální analýzy Newton bylo zveřejněno 1 432 pozitivních nebo neutrálních výstupů a hodnota AVE dosáhla 35,5 mil. Kč. Celková čtenost přesáhla 350 mil. recipientů. Zvýšená mediální prezentace podpořila management firmy při hledání partnera pro akvizici a už v září mohla společnost oznámit, že pojišťovací část finanční skupiny Wüstenrot přebere skupina Allianz.</p>
                        </div>
                    </div>
                </div>

                <div class=\"collapse\" id=\"csx11\">
                    <div class=\"well-med\">
                        <div class=\"inner-wl\">
                            <h4>Firemní event: Den malých papíráků</h4>
                            <p>Zabavit přes 200 dětí je královská disciplína. Pro nás to ale byla hračka! Děti zaměstnanců největší české papírny Mondi Štětí zakončují své prázdniny příměstským táborem a zlatým hřebem je tradiční Den malých papíráků – celodenní akce, která dětem přináší zábavu i poučení. Tentokrát na „papíráky“ čekalo 12 zábavných stanovišť s tématem bezpečnosti a zodpovědného chování. Kromě kreativních a sportovních aktivit měly děti možnost si zahrát scénky před kamerou nebo potrénovat své manuální dovednosti při každodenních činnostech pouze s pomocí jedné ruky. Jedním z nejočekávanějších bodů programu bylo setkání s populární youtuberskou dvojicí TVTwixx, která děti zaujala vyprávěním o bezpečnosti na internetu.</p>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sepia/templates/block/block--block-content--6c18673c-1999-4758-b5b8-7ae790bf4563.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 32,  61 => 30,  59 => 29,  55 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 */
#}
{{ title_prefix }}
{% if label %}
<h3 class=\"block-title\">{{ label }}</h3>
{% endif %}
{{ title_suffix }}
<div class=\"block-inner\">





    <p class=\"text-align-center uprclas\">&nbsp;</p>

    <div class=\"references-top\">
        <h3 class=\"block-title\">Reference vybraných klientů</h3>

        <p class=\"margin-helper text-align-center\">Abychom o naší práci nehovořili pouze my, nechali jsme naše klienty, aby sami vyjádřili, jak naši spolupráci a služby vnímají...</p>

        <div class=\"references\" id=\"references\">
            <div class=\"row\">

                <a role=\"button\" data-toggle=\"collapse\" href=\"#csx1\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"inner\"><img src=\"/sites/default/files/rf/1.png\" />
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
                </a>

                <a role=\"button\" data-toggle=\"collapse\" href=\"#csx2\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"inner\"><img src=\"/sites/default/files/rf/2.png\" />
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
                </a>

                <a role=\"button\" data-toggle=\"collapse\" href=\"#csx3\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"inner\"><img src=\"/sites/default/files/rf/4.png\" />
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
                </a>

                <a role=\"button\" data-toggle=\"collapse\" href=\"#csx4\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"inner\"><img src=\"/sites/default/files/rf/6.png\" />
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
                </a>
            </div>

            <div class=\"row b-b\">

                <div class=\"collapse\" id=\"csx1\">
                    <div class=\"well-med\">
                        <div class=\"inner-wl\">
                            <h4>CSR projekt: Zachraňujeme životy!</h4>
                            <p>Jak úspěšně medializovat zavedení defibrilátorů na čerpacích stanicích? Pro MOL Česká republika je péče o zákazníky prioritou. Kromě špičkového servisu na čerpacích stanicích klade stejně velký důraz i na zdraví motoristů – a právě proto zavedla automatické externí defibrilátory na nejfrekventovanějších dálničních tazích. Komunikaci tohoto kroku jsme načasovali na období letních prázdnin, kdy se kvůli teplotám zvyšuje riziko infarktů, a to nejen za volantem. Uspořádali jsme exkluzivní tiskovou konferenci s interaktivním programem, na níž si sami novináři vyzkoušeli obsluhu defibrilátoru. Díky tomu získal projekt velkou publicitu. Diváci z celé země se dozvěděli o tom, že na čerpacích stanicích MOL jsou instalované defibrilátory a viděli,jak snadné je jejich použití – reportáž o projektu byla odvysílána i v hlavních večerních zprávách České televize! Během léta jsme vydávali osvětové články s tématem srdeční zástavy a první pomoci do celostátních i regionálních médií s důrazem na informaci o existenci defibrilátorů na dálničních čerpacích stanicích MOL.</p>
                        </div>
                    </div>
                </div>

                <div class=\"collapse\" id=\"csx2\">
                    <div class=\"well-med\">
                        <div class=\"inner-wl\">
                            <h4>PRODEJ POJIŠŤOVNY - TAHLE NEVĚSTA JE VÁŽNĚ ATRAKTIVNÍ!</h4>
                            <p>Finanční skupina Wüstenrot zveřejnila záměr prodat svou pojišťovací část. Při hledání strategického partnera hrála významnou roli síla, stabilita, zdraví a hodnota značky Wüstenrot. Úkolem agentury Native PR bylo posílit vnímanou hodnotu pojišťovny jejím větším zviditelněním v médiích a posílením image celé skupiny jako experta a inovátora v relevantních finančních segmentech. Dosažený výsledek: z hlediska mediální publicity byl pro Wüstenrot rok 2015 rekordní. Podle mediální analýzy Newton bylo zveřejněno 1 432 pozitivních nebo neutrálních výstupů a hodnota AVE dosáhla 35,5 mil. Kč. Celková čtenost přesáhla 350 mil. recipientů. Zvýšená mediální prezentace podpořila management firmy při hledání partnera pro akvizici a už v září mohla společnost oznámit, že pojišťovací část finanční skupiny Wüstenrot přebere skupina Allianz.</p>
                        </div>
                    </div>
                </div>

                <div class=\"collapse\" id=\"csx3\">
                    <div class=\"well-med\">
                        <div class=\"inner-wl\">
                            <h4>Firemní event: Den malých papíráků</h4>
                            <p>Zabavit přes 200 dětí je královská disciplína. Pro nás to ale byla hračka! Děti zaměstnanců největší české papírny Mondi Štětí zakončují své prázdniny příměstským táborem a zlatým hřebem je tradiční Den malých papíráků – celodenní akce, která dětem přináší zábavu i poučení. Tentokrát na „papíráky“ čekalo 12 zábavných stanovišť s tématem bezpečnosti a zodpovědného chování. Kromě kreativních a sportovních aktivit měly děti možnost si zahrát scénky před kamerou nebo potrénovat své manuální dovednosti při každodenních činnostech pouze s pomocí jedné ruky. Jedním z nejočekávanějších bodů programu bylo setkání s populární youtuberskou dvojicí TVTwixx, která děti zaujala vyprávěním o bezpečnosti na internetu.</p>
                        </div>
                    </div>
                </div>

                <div class=\"collapse\" id=\"csx4\">
                    <div class=\"well-med\">
                        <div class=\"inner-wl\">
                            <h4>SAXO DOPLNIT</h4>
                            <p>Zabavit přes 200 dětí je královská disciplína. Pro nás to ale byla hračka! Děti zaměstnanců největší české papírny Mondi Štětí zakončují své prázdniny příměstským táborem a zlatým hřebem je tradiční Den malých papíráků – celodenní akce, která dětem přináší zábavu i poučení. Tentokrát na „papíráky“ čekalo 12 zábavných stanovišť s tématem bezpečnosti a zodpovědného chování. Kromě kreativních a sportovních aktivit měly děti možnost si zahrát scénky před kamerou nebo potrénovat své manuální dovednosti při každodenních činnostech pouze s pomocí jedné ruky. Jedním z nejočekávanějších bodů programu bylo setkání s populární youtuberskou dvojicí TVTwixx, která děti zaujala vyprávěním o bezpečnosti na internetu.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class=\"row\">

                <a role=\"button\" data-toggle=\"collapse\" href=\"#csx5\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"inner\"><img src=\"/sites/default/files/rf/9.png\" />
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
                </a>

                <a role=\"button\" data-toggle=\"collapse\" href=\"#csx6\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"inner\"><img src=\"/sites/default/files/rf/10.png\" />
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
                </a>

                <a role=\"button\" data-toggle=\"collapse\" href=\"#csx7\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"inner\"><img src=\"/sites/default/files/rf/11.png\" />
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
                </a>

                <a role=\"button\" data-toggle=\"collapse\" href=\"#csx8\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"inner\"><img src=\"/sites/default/files/rf/12.png\" />
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
                </a>
            </div>

            <div class=\"row b-b\">

                <div class=\"collapse\" id=\"csx5\">
                    <div class=\"well-med\">
                        <div class=\"inner-wl\">
                            <h4>Employer Branding: Cool komunikace pro cool zaměstnance</h4>
                            <p>Jak vypadá intranet a náborový web pro firmu s věkovým průměrem zaměstnanců kolem 18 let? Pro McDonald’s jsme navrhli obsahovou a grafickou proměnu intranetu a kariérních stránek, a to tak, aby byli co nejatraktivnější pro uvedenou cílovou skupinu. Nový intranet pracuje s multimediálními formáty, vyváženým poměrem textu a vizuálů,komunikuje se zaměstnanci prostřednictvím soutěží, anket, sdílením fotografií a reportáží z firemních akcí nebo pravidelným chatem s top managementem. Také u kariérních stránek, uvedených sloganem „Mekáč jsme my!“, jsme implementovali novou obsahovou strategii s cílem co největší přehlednosti a atraktivity. Pojítkem mezi oběma kanály byl designový prvek – barevné kaňky, které jsme při spuštění nových stránek zpracovali do podoby velkých samolepek,umístěných v zázemí zaměstnanců v restauracích. Po menších samolepkách, které se rozdávaly zaměstnancům 144 českých a slovenských poboček jako dárek, se jen zaprášilo! Ukázku náborového videa naleznete zde.</p>
                    </div>
                    </div>
                </div>

                <div class=\"collapse\" id=\"csx6\">
                    <div class=\"well-med\">
                        <div class=\"inner-wl\">
                            <h4>PRODEJ POJIŠŤOVNY - TAHLE NEVĚSTA JE VÁŽNĚ ATRAKTIVNÍ!</h4>
                            <p>Finanční skupina Wüstenrot zveřejnila záměr prodat svou pojišťovací část. Při hledání strategického partnera hrála významnou roli síla, stabilita, zdraví a hodnota značky Wüstenrot. Úkolem agentury Native PR bylo posílit vnímanou hodnotu pojišťovny jejím větším zviditelněním v médiích a posílením image celé skupiny jako experta a inovátora v relevantních finančních segmentech. Dosažený výsledek: z hlediska mediální publicity byl pro Wüstenrot rok 2015 rekordní. Podle mediální analýzy Newton bylo zveřejněno 1 432 pozitivních nebo neutrálních výstupů a hodnota AVE dosáhla 35,5 mil. Kč. Celková čtenost přesáhla 350 mil. recipientů. Zvýšená mediální prezentace podpořila management firmy při hledání partnera pro akvizici a už v září mohla společnost oznámit, že pojišťovací část finanční skupiny Wüstenrot přebere skupina Allianz.</p>
                        </div>
                    </div>
                </div>

                <div class=\"collapse\" id=\"csx7\">
                    <div class=\"well-med\">
                        <div class=\"inner-wl\">
                            <h4>Firemní event: Den malých papíráků</h4>
                            <p>Zabavit přes 200 dětí je královská disciplína. Pro nás to ale byla hračka! Děti zaměstnanců největší české papírny Mondi Štětí zakončují své prázdniny příměstským táborem a zlatým hřebem je tradiční Den malých papíráků – celodenní akce, která dětem přináší zábavu i poučení. Tentokrát na „papíráky“ čekalo 12 zábavných stanovišť s tématem bezpečnosti a zodpovědného chování. Kromě kreativních a sportovních aktivit měly děti možnost si zahrát scénky před kamerou nebo potrénovat své manuální dovednosti při každodenních činnostech pouze s pomocí jedné ruky. Jedním z nejočekávanějších bodů programu bylo setkání s populární youtuberskou dvojicí TVTwixx, která děti zaujala vyprávěním o bezpečnosti na internetu.</p>
                        </div>
                    </div>
                </div>

                <div class=\"collapse\" id=\"csx8\">
                    <div class=\"well-med\">
                        <div class=\"inner-wl\">
                            <h4>SAXO DOPLNIT</h4>
                            <p>Zabavit přes 200 dětí je královská disciplína. Pro nás to ale byla hračka! Děti zaměstnanců největší české papírny Mondi Štětí zakončují své prázdniny příměstským táborem a zlatým hřebem je tradiční Den malých papíráků – celodenní akce, která dětem přináší zábavu i poučení. Tentokrát na „papíráky“ čekalo 12 zábavných stanovišť s tématem bezpečnosti a zodpovědného chování. Kromě kreativních a sportovních aktivit měly děti možnost si zahrát scénky před kamerou nebo potrénovat své manuální dovednosti při každodenních činnostech pouze s pomocí jedné ruky. Jedním z nejočekávanějších bodů programu bylo setkání s populární youtuberskou dvojicí TVTwixx, která děti zaujala vyprávěním o bezpečnosti na internetu.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class=\"row\">

                <a role=\"button\" data-toggle=\"collapse\" href=\"#csx9\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"inner\"><img src=\"/sites/default/files/rf/19.png\" />
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
                </a>

                <a role=\"button\" data-toggle=\"collapse\" href=\"#csx10\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"inner\"><img src=\"/sites/default/files/rf/21.png\" />
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
                </a>

                <a role=\"button\" data-toggle=\"collapse\" href=\"#csx11\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"inner\"><img src=\"/sites/default/files/rf/22.png\" />
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
                </a>

                    <div class=\"col-sm-6 col-md-3 spc\">
                        <div class=\"inner\">
                            ...a dalších více než<br>
                            <strong>100</strong><br>
                            klientů
                            &nbsp;
                            <div class=\"but\" data-target=\"#csx2\" data-toggle=\"collapse\" aria-expanded=\"false\">&nbsp;</div >
                        </div>
                    </div>
            </div>

            <div class=\"row b-b\">

                <div class=\"collapse\" id=\"csx9\">
                    <div class=\"well-med\">
                        <div class=\"inner-wl\">
                            <h4>Employer Branding: Cool komunikace pro cool zaměstnance</h4>
                            <p>Jak vypadá intranet a náborový web pro firmu s věkovým průměrem zaměstnanců kolem 18 let? Pro McDonald’s jsme navrhli obsahovou a grafickou proměnu intranetu a kariérních stránek, a to tak, aby byli co nejatraktivnější pro uvedenou cílovou skupinu. Nový intranet pracuje s multimediálními formáty, vyváženým poměrem textu a vizuálů,komunikuje se zaměstnanci prostřednictvím soutěží, anket, sdílením fotografií a reportáží z firemních akcí nebo pravidelným chatem s top managementem. Také u kariérních stránek, uvedených sloganem „Mekáč jsme my!“, jsme implementovali novou obsahovou strategii s cílem co největší přehlednosti a atraktivity. Pojítkem mezi oběma kanály byl designový prvek – barevné kaňky, které jsme při spuštění nových stránek zpracovali do podoby velkých samolepek,umístěných v zázemí zaměstnanců v restauracích. Po menších samolepkách, které se rozdávaly zaměstnancům 144 českých a slovenských poboček jako dárek, se jen zaprášilo! Ukázku náborového videa naleznete zde.</p>
                        </div>
                    </div>
                </div>

                <div class=\"collapse\" id=\"csx10\">
                    <div class=\"well-med\">
                        <div class=\"inner-wl\">
                            <h4>PRODEJ POJIŠŤOVNY - TAHLE NEVĚSTA JE VÁŽNĚ ATRAKTIVNÍ!</h4>
                            <p>Finanční skupina Wüstenrot zveřejnila záměr prodat svou pojišťovací část. Při hledání strategického partnera hrála významnou roli síla, stabilita, zdraví a hodnota značky Wüstenrot. Úkolem agentury Native PR bylo posílit vnímanou hodnotu pojišťovny jejím větším zviditelněním v médiích a posílením image celé skupiny jako experta a inovátora v relevantních finančních segmentech. Dosažený výsledek: z hlediska mediální publicity byl pro Wüstenrot rok 2015 rekordní. Podle mediální analýzy Newton bylo zveřejněno 1 432 pozitivních nebo neutrálních výstupů a hodnota AVE dosáhla 35,5 mil. Kč. Celková čtenost přesáhla 350 mil. recipientů. Zvýšená mediální prezentace podpořila management firmy při hledání partnera pro akvizici a už v září mohla společnost oznámit, že pojišťovací část finanční skupiny Wüstenrot přebere skupina Allianz.</p>
                        </div>
                    </div>
                </div>

                <div class=\"collapse\" id=\"csx11\">
                    <div class=\"well-med\">
                        <div class=\"inner-wl\">
                            <h4>Firemní event: Den malých papíráků</h4>
                            <p>Zabavit přes 200 dětí je královská disciplína. Pro nás to ale byla hračka! Děti zaměstnanců největší české papírny Mondi Štětí zakončují své prázdniny příměstským táborem a zlatým hřebem je tradiční Den malých papíráků – celodenní akce, která dětem přináší zábavu i poučení. Tentokrát na „papíráky“ čekalo 12 zábavných stanovišť s tématem bezpečnosti a zodpovědného chování. Kromě kreativních a sportovních aktivit měly děti možnost si zahrát scénky před kamerou nebo potrénovat své manuální dovednosti při každodenních činnostech pouze s pomocí jedné ruky. Jedním z nejočekávanějších bodů programu bylo setkání s populární youtuberskou dvojicí TVTwixx, která děti zaujala vyprávěním o bezpečnosti na internetu.</p>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

</div>", "themes/custom/sepia/templates/block/block--block-content--6c18673c-1999-4758-b5b8-7ae790bf4563.html.twig", "/vagrant/nativepr/themes/custom/sepia/templates/block/block--block-content--6c18673c-1999-4758-b5b8-7ae790bf4563.html.twig");
    }
}
