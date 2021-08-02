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
        $tags = ["if" => 1, "trans" => 464];
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
              <div class=\"contact paragraph--type--dd-block row\">
                  <h3 class=\"block-title text-align-center\">Kontakt</h3>
                  <div class=\"contact-left col-sm-12 col-md-6\">
                      <h4>Native PR, s.r.o.</h4>
                      <div class=\"under-txt\">
                          Krocínova 1 <br>
                          110 00 Praha 1 <br>
                          DIČ: CZ 60202335<br>
                      </div>
                      <div class=\"row\">
                          <div class=\"call col-sm-6 col-md-6\">
                              <a class=\"btn btn-social-min btn-lg btn-default btn-link\" href=\"tel:221592450\" title=\"Zavolejte nám\"><i class=\"fa fa-mobile\">&nbsp;</i></a>
                              <br> zavolejte nám...
                              <div class=\"nmbr\"><a href=\"tel:221592450\" title=\"Zavolejte nám\">221 592 450</a></div>
                          </div>
                          <div class=\"call col-sm-6 col-md-6\">
                              <a class=\"btn btn-social-min btn-lg btn-default btn-link\" href=\"mailto:welcome@nativepr.cz\" title=\"Napište nám\"><i class=\"fa fa-envelope\">&nbsp;</i></a>
                              <br>napište nám...
                              <div class=\"nmbr\"> <a href=\"mailto:welcome@nativepr.cz\" title=\"Napište nám\">welcome@nativepr.cz </a></div>
                          </div>
                          <div class=\"under-txt\">
                              Krizová linka 24/7<br>
                              +420 603 574 650
                          </div>
                      </div>

                  </div>
                  <div class=\"contact-right col-sm-12 col-md-6\">
                      ";
            // line 53
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["page"] ?? null), "hidden_blocks_collection", []), "contactblock", [])), "html", null, true);
            echo "
              </div>
              </div>

              <!-- Modal Case studies -->

              <div aria-hidden=\"true\" aria-labelledby=\"exampleModalCenterTitle\" class=\"modal fade\" id=\"csx\" role=\"dialog\" tabindex=\"-1\">
                  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                      <div class=\"modal-content\">
                          <div class=\"modal-header\">
                              <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">x</span></button></div>
                          <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Klient: <b>KiK</b></h5>
                          <div class=\"modal-body\">
                              <h4>Repositioning značky: Oblékáme se chytře - Jak profilovat značku s diskontními cenami jako kvalitní a atraktivní?</h4>
                              <div class=\"icons row\">
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/calc-icon.png\"><br>
                                      <strong>Realizace </strong><br>
                                      2018</div>
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/person-icon.png\"><br>
                                      <strong>Oblast </strong><br>
                                      Repositioning značky </div>
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/dart-icon.png\"><br>
                                      <strong>Služba </strong><br>
                                      On-line komunikace </div>
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/ribbon-icon.png\"><br>
                                      <strong>Ocenění </strong><br>
                                      Česká cena za PR - 1. místo </div></div>
                              <p>Komunikaci, jejíž hlavním záměrem byl repositioning značky, jsme navrhli jako vícekanálový PR projekt s fotosoutěží a online kampaní „Oblékáme se chytře“. Jako hlavní komunikační platformu jsme zvolili microsite se čtivým obsahem a atraktivními vizuály, mezi nimiž čtenáře nejvíce zaujaly Proměny s KiKem. K účasti v soutěži zacílené na rodiny s dětmi jsme zvali prostřednictvím rozsáhlého e-mailingu. V kampani jsme spolupracovali s módními blogerkami Sexy Mamas, využili jsme facebookové stránky a vybrané soutěžní portály. KiK jsme profilovali dále i v mediích s hlavním mottem „Stylové oblékání není jen otázkou peněz“. Za kampaň Oblékáme se chytře jsme získali zlato v České ceně za PR v oborové kategorii Spotřební zboží.</p>
                          </div>
                          <div class=\"modal-footer\"><button class=\"btn btn-secondary\" data-dismiss=\"modal\" type=\"button\">Zavřít</button></div>
                      </div>
                  </div>
              </div>

              <div aria-hidden=\"true\" aria-labelledby=\"exampleModalCenterTitle\" class=\"modal fade\" id=\"cs1\" role=\"dialog\" tabindex=\"-1\">
                  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                      <div class=\"modal-content\">
                          <div class=\"modal-header\">
                              <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">x</span></button></div>
                          <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Klient: <b>McDonald’s</b></h5>
                          <div class=\"modal-body\">
                              <h4>Employer Branding: Cool komunikace pro cool zaměstnance</h4>
                              <div class=\"icons row\">
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/calc-icon.png\"><br>
                                      <strong>Realizace </strong><br>
                                      2017</div>
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/person-icon.png\"><br>
                                      <strong>Oblast </strong><br>
                                      Employer Branding </div>
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/dart-icon.png\"><br>
                                      <strong>Služba </strong><br>
                                      Content Management  </div>
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/ribbon-icon.png\"><br>
                                      <strong>Výsledek </strong><br>
                                      Výrazné zvýšení návštěvnosti cílovou skupinou </div></div>
                              <p>Jak vypadá intranet a náborový web pro firmu s věkovým průměrem zaměstnanců kolem 18 let? Pro McDonald’s jsme navrhli obsahovou a grafickou proměnu intranetu a kariérních stránek, a to tak, aby byli co nejatraktivnější pro uvedenou  cílovou skupinu. Nový intranet pracuje s multimediálními formáty, vyváženým poměrem textu a vizuálů,komunikuje se zaměstnanci prostřednictvím soutěží, anket, sdílením fotografií a reportáží z firemních akcí nebo pravidelným chatem s top managementem. Také u kariérních stránek, uvedených sloganem „Mekáč jsme my!“, jsme  implementovali novou obsahovou strategii s cílem co největší přehlednosti a atraktivity. Pojítkem mezi oběma kanály byl designový prvek – barevné kaňky, které jsme při spuštění nových stránek zpracovali do podoby velkých samolepek,umístěných v zázemí zaměstnanců v restauracích. Po menších samolepkách, které se rozdávaly zaměstnancům 144 českých a slovenských poboček jako dárek, se jen zaprášilo! Ukázku náborového videa naleznete <a href=\"https://www.youtube.com/watch?v=yzRFTqucM0c&amp;feature=youtu.be\">zde</a>.</p>
                          </div>
                          <div class=\"modal-footer\"><button class=\"btn btn-secondary\" data-dismiss=\"modal\" type=\"button\">Zavřít</button></div>
                      </div>
                  </div>
              </div>

              <div aria-hidden=\"true\" aria-labelledby=\"exampleModalCenterTitle\" class=\"modal fade\" id=\"cs2\" role=\"dialog\" tabindex=\"-1\">
                  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                      <div class=\"modal-content\">
                          <div class=\"modal-header\">
                              <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">x</span></button></div>
                          <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Klient: <b>MOL Česká republika</b></h5>
                          <div class=\"modal-body\">
                              <h4>CSR projekt: Zachraňujeme životy!</h4>
                              <div class=\"icons row\">
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/calc-icon.png\"><br>
                                      <strong>Realizace </strong><br>
                                      2018</div>
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/person-icon.png\"><br>
                                      <strong>Oblast </strong><br>
                                      CSR  </div>
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/dart-icon.png\"><br>
                                      <strong>Služba </strong><br>
                                      Media Relations   </div>
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/ribbon-icon.png\"><br>
                                      <strong>Výsledek </strong><br>
                                      TV reportáže v prime time  </div></div>
                            <p>Jak úspěšně medializovat zavedení defibrilátorů na čerpacích stanicích? Pro MOL Česká republika je péče o zákazníky prioritou. Kromě špičkového servisu na čerpacích stanicích klade stejně velký důraz i na zdraví motoristů – a právě proto zavedla automatické externí defibrilátory na nejfrekventovanějších dálničních tazích. Komunikaci tohoto kroku jsme načasovali na období letních prázdnin, kdy se kvůli teplotám zvyšuje riziko infarktů, a to nejen za volantem. Uspořádali jsme exkluzivní tiskovou konferenci s interaktivním programem, na níž si sami novináři vyzkoušeli obsluhu defibrilátoru. Díky tomu získal projekt velkou publicitu. Diváci z celé země se dozvěděli o tom, že na čerpacích stanicích MOL jsou instalované defibrilátory a viděli,jak snadné je jejich použití – reportáž o projektu byla odvysílána i v hlavních večerních zprávách České televize! Během léta jsme vydávali osvětové články s tématem srdeční zástavy a první pomoci do celostátních i regionálních médií s důrazem na informaci o existenci defibrilátorů na dálničních čerpacích stanicích MOL.</p>
                          </div>
                          <div class=\"modal-footer\"><button class=\"btn btn-secondary\" data-dismiss=\"modal\" type=\"button\">Zavřít</button></div>
                      </div>
                  </div>
              </div>

              <div aria-hidden=\"true\" aria-labelledby=\"exampleModalCenterTitle\" class=\"modal fade\" id=\"cs3\" role=\"dialog\" tabindex=\"-1\">
                  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                      <div class=\"modal-content\">
                          <div class=\"modal-header\">
                              <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">x</span></button></div>
                          <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Klient: <b>Mondi Štětí</b></h5>
                          <div class=\"modal-body\">
                              <h4>Firemní event: Den malých papíráků</h4>
                              <div class=\"icons row\">
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/calc-icon.png\"><br>
                                      <strong>Realizace </strong><br>
                                      2018</div>
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/person-icon.png\"><br>
                                      <strong>Oblast </strong><br>
                                      Interní komunikace   </div>
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/dart-icon.png\"><br>
                                      <strong>Služba </strong><br>
                                      Event Management   </div>
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/ribbon-icon.png\"><br>
                                      <strong>Výsledek </strong><br>
                                      200 dětských úsměvů   </div></div>
                              <p> Zabavit přes 200 dětí je královská disciplína. Pro nás to ale byla hračka! Děti zaměstnanců největší české papírny Mondi Štětí zakončují své prázdniny příměstským táborem a zlatým hřebem je tradiční Den malých papíráků – celodenní akce, která dětem přináší zábavu i poučení. Tentokrát na „papíráky“ čekalo 12 zábavných stanovišť s tématem bezpečnosti a zodpovědného chování. Kromě kreativních a sportovních aktivit měly děti možnost si zahrát scénky před kamerou nebo potrénovat své manuální dovednosti při každodenních činnostech pouze s pomocí jedné ruky. Jedním z nejočekávanějších bodů programu bylo setkání s populární youtuberskou dvojicí TVTwixx, která děti zaujala vyprávěním o bezpečnosti na internetu.</p>
                          </div>
                          <div class=\"modal-footer\"><button class=\"btn btn-secondary\" data-dismiss=\"modal\" type=\"button\">Zavřít</button></div>
                      </div>
                  </div>
              </div>

              <div aria-hidden=\"true\" aria-labelledby=\"exampleModalCenterTitle\" class=\"modal fade\" id=\"cs4\" role=\"dialog\" tabindex=\"-1\">
                  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                      <div class=\"modal-content\">
                          <div class=\"modal-header\">
                              <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">x</span></button></div>
                          <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Klient: <b>Tesco</b></h5>
                          <div class=\"modal-body\">
                              <h4>REGIONÁLNÍ POTRAVINY V OBCHODNÍCH ŘETĚZCÍCH: TESCO SPOLUPRACUJE S LOKÁLNÍMI VÝROBCI POTRAVIN</h4>
                              <div class=\"icons row\">
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/calc-icon.png\"><br>
                                      <strong>Realizace </strong><br>
                                      2016</div>
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/person-icon.png\"><br>
                                      <strong>Oblast </strong><br>
                                      Media Relations    </div>
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/dart-icon.png\"><br>
                                      <strong>Služba </strong><br>
                                      Content Management    </div>
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/ribbon-icon.png\"><br>
                                      <strong>Výsledek </strong><br>
                                      74 výstupů    </div></div>
                              <p>Společnost Tesco se dlouhodobě snaží vyvažovat stereotyp týkající se kvality potravin v obchodech. Prostřednictvím příběhů českých dodavatelů naopak upozorňuje na výhody spolupráce s tímto řetězcem. Představení jednotlivých potravinářských odvětví spolu se zajímavými příběhy českých firem, jejich majitelů a zakladatelů pomáhá zlepšovat mediální obraz obchodních řetězců.</p>
                          </div>
                          <div class=\"modal-footer\"><button class=\"btn btn-secondary\" data-dismiss=\"modal\" type=\"button\">Zavřít</button></div>
                      </div>
                  </div>
              </div>

              <div aria-hidden=\"true\" aria-labelledby=\"exampleModalCenterTitle\" class=\"modal fade\" id=\"cs5\" role=\"dialog\" tabindex=\"-1\">
                  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                      <div class=\"modal-content\">
                          <div class=\"modal-header\">
                              <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">x</span></button></div>
                          <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Klient: <b>Wüstenrot</b></h5>
                          <div class=\"modal-body\">
                              <h4>PRODEJ POJIŠŤOVNY - TAHLE NEVĚSTA JE VÁŽNĚ ATRAKTIVNÍ!</h4>
                              <div class=\"icons row\">
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/calc-icon.png\"><br>
                                      <strong>Realizace </strong><br>
                                      2015</div>
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/person-icon.png\"><br>
                                      <strong>Oblast </strong><br>
                                      Finanční PR     </div>
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/dart-icon.png\"><br>
                                      <strong>Služba </strong><br>
                                      Reputation Management     </div>
                                  <div class=\"col-sm-6 col-md-3 brd\"><img src=\"/sites/default/files/rf/ribbon-icon.png\"><br>
                                      <strong>Výsledek </strong><br>
                                      1 432 výstupů/rok     </div></div>
                              <p>Finanční skupina Wüstenrot zveřejnila záměr prodat svou pojišťovací část. Při hledání strategického partnera hrála významnou roli síla, stabilita, zdraví a hodnota značky Wüstenrot. Úkolem agentury Native PR bylo posílit vnímanou hodnotu pojišťovny jejím větším zviditelněním v médiích a posílením image celé skupiny jako experta a inovátora v relevantních finančních segmentech. Dosažený výsledek: z hlediska mediální publicity byl pro Wüstenrot rok 2015 rekordní. Podle mediální analýzy Newton bylo zveřejněno 1 432 pozitivních nebo neutrálních výstupů a hodnota AVE dosáhla 35,5 mil. Kč. Celková čtenost přesáhla 350 mil. recipientů. Zvýšená mediální prezentace podpořila management firmy při hledání partnera pro akvizici a už v září mohla společnost oznámit, že pojišťovací část finanční skupiny Wüstenrot přebere skupina Allianz.</p>
                          </div>
                          <div class=\"modal-footer\"><button class=\"btn btn-secondary\" data-dismiss=\"modal\" type=\"button\">Zavřít</button></div>
                      </div>
                  </div>
              </div>

              <!-- Modal Služby -->

              <div aria-hidden=\"true\" aria-labelledby=\"exampleModalCenterTitle\" class=\"modal fade\" id=\"1\" role=\"dialog\" tabindex=\"-1\">
                  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                      <div class=\"modal-content\">
                          <div class=\"modal-header\">
                              <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">x</span></button></div>
                              <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Komunikační strategie</h5>
                          <div class=\"modal-body\">
                              <h4>Vytváříme účinné strategie k dosažení Vašich komunikačních cílů</h4>
                              <p>Rozdílné komunikační cíle vyžadují rozdílná řešení. Dobré komunikační strategie pomáhají prodávat, umožňují získat a udržet špičkové zaměstnance, nebo třeba snížit riziko konfliktů se zájmovými skupinami, které mají na Vaše podnikání vliv. Na základě obchodních a podnikatelských záměrů pomáháme našim klientům definovat jejich komunikační cíle, analyzovat prostředí i cílové skupiny pro komunikaci a navrhujeme vhodné strategie.</p>
                          </div>
                          <div class=\"modal-footer\"><button class=\"btn btn-secondary\" data-dismiss=\"modal\" type=\"button\">Zavřít</button></div>
                      </div>
                  </div>
              </div>

              <div aria-hidden=\"true\" aria-labelledby=\"exampleModalCenterTitle\" class=\"modal fade\" id=\"2\" role=\"dialog\" tabindex=\"-1\">
                  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                      <div class=\"modal-content\">
                          <div class=\"modal-header\">
                              <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">x</span></button></div>
                              <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Komunikační kampaně</h5>
                          <div class=\"modal-body\">
                              <h4>Vytváříme a realizujeme komunikační kampaně přesně na míru Vašim potřebám</h4>
                              <p>Jsme lídrem v koncipování a realizaci komunikačních kampaní, které mění postoje a chování veřejnosti. Ať už je cílem Vaší komunikace stimulace celkové poptávky, změna chování zákazníků nebo třeba získání veřejné podpory  pro úpravu legislativy regulující Váš sektor podnikání, navrhneme Vám celkový koncept kampaně, design jejích jednotlivých prvků a zajistíme realizaci všech kreativních řešení.</p>
                          </div>
                          <div class=\"modal-footer\"><button class=\"btn btn-secondary\" data-dismiss=\"modal\" type=\"button\">Zavřít</button></div>
                      </div>
                  </div>
              </div>

              <div aria-hidden=\"true\" aria-labelledby=\"exampleModalCenterTitle\" class=\"modal fade\" id=\"3\" role=\"dialog\" tabindex=\"-1\">
                  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                      <div class=\"modal-content\">
                          <div class=\"modal-header\">
                              <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">x</span></button></div>
                              <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Vyprávění příběhů</h5>
                          <div class=\"modal-body\">
                              <h4>Vyprávíme příběhy našich zákazníků</h4>
                              <p>Vyprávění silných příběhů je nejlepším způsobem, jak si v dnešním přeinformovaném světě získat skutečnou pozornost lidí. Dobrý příběh vytváří emocionální zapojení a vede spotřebitele k zaujetí stanoviska a následné akci. Hledáme mimořádné příběhy. Hledáme cesty a aktivity, jak je co nejlépe vytěžit pro naše zákazníky. Vyprávíme příběhy prostřednictvím všech relevantních kanálů a pomáháme organizacím,aby se příběh stal nedílnou součástí jejich života.</p>
                          </div>
                          <div class=\"modal-footer\"><button class=\"btn btn-secondary\" data-dismiss=\"modal\" type=\"button\">Zavřít</button></div>
                      </div>
                  </div>
              </div>

              <div aria-hidden=\"true\" aria-labelledby=\"exampleModalCenterTitle\" class=\"modal fade\" id=\"4\" role=\"dialog\" tabindex=\"-1\">
                  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                      <div class=\"modal-content\">
                          <div class=\"modal-header\">
                              <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">x</span></button></div>
                              <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Firemní komunikace</h5>
                          <div class=\"modal-body\">
                              <h4>Pomáháme firmám budovat a rozvíjet vztahy se všemi skupinami partnerů a decision makerů</h4>
                              <p>Budování a rozvoj vztahů s různými externími stakeholdery vyžadují pochopení jejich zájmů a očekávání a následnou Maximalizujeme přínosy vnějších vztahů tím, že pomáháme a vedou rozvoj strategií a akčních plánů, od informačních kampaní až po řízení vztahů.</p>
                          </div>
                          <div class=\"modal-footer\"><button class=\"btn btn-secondary\" data-dismiss=\"modal\" type=\"button\">Zavřít</button></div>
                      </div>
                  </div>
              </div>

              <div aria-hidden=\"true\" aria-labelledby=\"exampleModalCenterTitle\" class=\"modal fade\" id=\"5\" role=\"dialog\" tabindex=\"-1\">
                  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                      <div class=\"modal-content\">
                          <div class=\"modal-header\">
                              <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">x</span></button></div>
                              <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Krizová komunikace</h5>
                          <div class=\"modal-body\">
                              <h4>Pomáháme klientům zvládnout krizovou situaci s minimálními dopady na jejich pověst</h4>
                              <p>Špatně řízená krize může zničit roky budovanou pověst vaší organizace za jediný den. Pomáháme klientům předcházet krizím, připravovat se na ně, reagovat na ně a komunikovat o nich. S našimi klienty jsme úspěšně prošli již desítkami větších či menších krizových situací a víme, jak je v rovině komunikace správně řešit.  Máme řadu zkušeností s přípravou krizových komunikačních plánů, tréninkem managementu či organizováním krizových simulací. A když ke krizové situaci skutečně dojde, pomáháme ji zvládat v reálném čase prostřednictvím naší 24/7 krizové linky a zkušeného krizového týmu, který je na tento typ práce speciálně vyškolený a připravený.
                                  <br>Potřebujete pomoc právě teď? Volejte naší 24/7 krizovou linku: +420603574650 </p>
                          </div>
                          <div class=\"modal-footer\"><button class=\"btn btn-secondary\" data-dismiss=\"modal\" type=\"button\">Zavřít</button></div>
                      </div>
                  </div>
              </div>

              <div aria-hidden=\"true\" aria-labelledby=\"exampleModalCenterTitle\" class=\"modal fade\" id=\"6\" role=\"dialog\" tabindex=\"-1\">
                  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                      <div class=\"modal-content\">
                          <div class=\"modal-header\">
                              <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">x</span></button></div>
                              <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Řízení reputačních rizik</h5>
                          <div class=\"modal-body\">
                              <h4>Budování pověsti a řízení reputačních rizik </h4>
                              <p>V době sociálních sítí, zvýšené angažovanosti jejich uživatelů  a extrémně rychlého sdílení informací mezi lidmi se otázka dobré pověsti  stala významnější, než kdykoliv předtím. Vaše pověst dnes může výrazně pomoci k dosažení obchodních cílů, nebo  jejich naplnění naopak  zcela znemožnit. Máme širokou škálu služeb, které vám pomohou při budování vaší reputace na místní i celorepublikové úrovni. Pro naše zákazníky navrhujeme a realizujeme dlouhodbé komunikační programy zaměřené na posílení dobré pověsti a omezení reputačních rizik. V těchto programech integrujeme tradiční média i sociální sítě.  Pomůžeme Vám identifikovat hlavní opinion makery a navázat s nimi nejvhodnější způsob komunikace. </p>
                          </div>
                          <div class=\"modal-footer\"><button class=\"btn btn-secondary\" data-dismiss=\"modal\" type=\"button\">Zavřít</button></div>
                      </div>
                  </div>
              </div>

              <div aria-hidden=\"true\" aria-labelledby=\"exampleModalCenterTitle\" class=\"modal fade\" id=\"7\" role=\"dialog\" tabindex=\"-1\">
                  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                      <div class=\"modal-content\">
                          <div class=\"modal-header\">
                              <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">x</span></button></div>
                              <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Media Relations</h5>
                          <div class=\"modal-body\">
                              <h4>Pomáháme klientům efektivně využívat média pro jejich komunikační potřeby</h4>
                              <p>Zajišťujeme efektivní prezentaci v hromadných sdělovacích prostředcích a budujeme dlouhodobé vztahy s příslušnými médii. Vytváříme optimální mediální přítomnost s ohledem na firemní cíle.  Zvyšujeme porozumění o produktech,službách i samotné firmě. Hledáme zajímavá témata, navrhujeme a realizujeme konkrétní formy prezentace, pomáháme vytvářet a vyprávět příběhy firem a jejich výrobků</p>
                          </div>
                          <div class=\"modal-footer\"><button class=\"btn btn-secondary\" data-dismiss=\"modal\" type=\"button\">Zavřít</button></div>
                      </div>
                  </div>
              </div>

              <div aria-hidden=\"true\" aria-labelledby=\"exampleModalCenterTitle\" class=\"modal fade\" id=\"8\" role=\"dialog\" tabindex=\"-1\">
                  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                      <div class=\"modal-content\">
                          <div class=\"modal-header\">
                              <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">x</span></button></div>
                              <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Produktová komunikace</h5>
                          <div class=\"modal-body\">
                              <h4>Zajistíme, aby zákazníci znali a preferovali vaše výrobky či služby</h4>
                              <p>Spotřebitelé jsou zahlceni stále větším množstvím méně originálních reklamních sdělení, a nejen proto účinnost klasické reklamy klesá. K zajištění stejného účinku jsou firmy nuceny vynakládat stále větší náklady na nákup médií. My disponujeme řadou nástrojů, které levněji a kreativněji budují vztah spotřebitele ke konkrétní značce. Umíme vytvořit dlouhodobý příběh, který oslovuje zákazníky přímou komunikací, prostřednictvím internetu, a má potenciál dostat se i do relevantních médií. Při vytváření produktových PR strategií jsme zvyklí úzce spolupracovat s agenturami, které zajišťují další složky marketingového mixu.</p>

                          </div>
                          <div class=\"modal-footer\"><button class=\"btn btn-secondary\" data-dismiss=\"modal\" type=\"button\">Zavřít</button></div>
                      </div>
                  </div>
              </div>

              <div aria-hidden=\"true\" aria-labelledby=\"exampleModalCenterTitle\" class=\"modal fade\" id=\"9\" role=\"dialog\" tabindex=\"-1\">
                  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                      <div class=\"modal-content\">
                          <div class=\"modal-header\">
                              <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">x</span></button></div>
                              <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">HR Marketing a Employer Branding</h5>
                          <div class=\"modal-body\">
                              <h4>Budování značky atraktivního zaměstnavatele (Employer Branding)</h4>
                              <p>Budování značky zaměstnavatele a nábor kvalitních zaměstnanců jsou tématem číslo jedna pro většinu našich klientů. Firmám pomáháme šířit jejich dobrou pověst směrem k potenciálním zaměstnancům – ať už formou budování kariérních stránek, komunikací v médiích, online prezentací či vhodným využitím sociálních sítí. Řešíme, jak zaměstnance motivovat a aktivně je zapojovat do šíření dobré pověsti firem, protože i oni jsou hlavními nositeli značky dobrého zaměstnavatele.
                                  <br>
                                  <b>Jak vám můžeme pomoci:</b> Na míru konkrétním potřebám vaší firmy navrhneme a zrealizujeme komunikační kampaň, která pomůže oslovit ty správné potenciální zaměstnance a dovést je k pohovoru s vaším personalistou.</p>
                              <br>
                              <h4>Posílení angažovanosti zaměstnanců</h4>
                              <p>Angažovanost zaměstnanců je dnes populární téma hojně diskutované na většině „velkých“ HR konferencí. V Native PR se snažíme, aby tato problematika nezůstala zavřená za dveřmi odborných fór. Našim klientům pomáháme realizovat interní změny, které viditelně zvyšují chuť zaměstnanců podílet se na chodu a fungování firmy. V rámci spolupráce provádíme interní názorové průzkumy, na jejichž základě navrhujeme strategické plány s cílem zvýšit angažovanost zaměstnanců. Zaměřujeme se na aktivní zapojení zaměstnanců ze všech úrovní,podporu a školení manažerů s cílem posílit jejich komunikační a motivační role, a rovněž na propojení angažovanosti s ostatními procesy ve firmě.
                                  <br>
                                  <b>Jak vám můžeme pomoci:</b> Na základě řízené diskuze s vedením vaší organizace vydefinujeme přesné zadání a cíle interního projektu zaměřeného na zvýšení angažovanosti. Navrhneme strategii,jak tohoto cíle co nejefektivněji dosáhnout. Pomůžeme vám s řízením a realizací interní komunikace a dáme k dispozici zkušené konzultanty a kouče, kteří vašim manažerům vysvětlí, jak si mohou zlepšit své komunikační a motivační dovednosti.</p>
                              <br>
                              <h4>Motivace zaměstnanců k účasti na procesu inovací</h4>
                              <p>S našimi klienty často řešíme, jak motivovat pracovníky k tomu, aby vystoupili z každodenní rutiny a zamysleli se nad tím, co by bylo možné v jejich firmě zlepšit. Pomáháme přesvědčovat zaměstnance o tom, že důležitá mohou být i drobná zlepšení, a motivovat je k tomu, aby s podobnými zlepšeními svého pracovního prostředí sami aktivně přicházeli.
                                  <br>
                                  <b>Jak vám můžeme pomoci:</b> Navrhneme a zrealizujeme interní komunikační projekt zaměřený na zvýšení motivace zaměstnanců podílet se na inovačním procesu firmy.</p>
                              <br>
                              <h4>Zapojení zaměstnanců do prevence v oblasti BOZP</h4>
                              <p>Aktivně začleňujeme zaměstnance do prevence v oblasti bezpečnosti práce: sami zaměstnanci mají možnost podílet se na utváření pracovních systémů, doporučují, navrhují a požadují zlepšení.
                                  <br>
                                  <b>Jak vám můžeme pomoci:</b> Vytvoříme pro vás návrh projektu, jak aktivně zapojit zaměstnance do prevence v oblasti BOZP. Tento návrh vám následně pomůžeme zrealizovat.</p>
                              <br>
                              <h4>Zvýšení angažovanosti zaměstnanců v oblasti ochrany životního prostředí</h4>
                              <p>Navrhujeme a realizujeme pro zaměstnance takové programy, jejichž prostřednictvím mohou sami přinášet, konzultovat a realizovat nápady podporující angažovanost firem v oblasti ochrany životního prostředí a udržitelnosti.
                                  <br>
                                  <b>Jak vám můžeme pomoci:</b> Vytvoříme pro vás návrh projektu, jak aktivně zapojit zaměstnance do vašich programů zaměřených na ochranu životního prostředí. Tento návrh vám následně pomůžeme zrealizovat.</p>
                              <br>
                              <h4>Podpora zdravého životního stylu zaměstnanců</h4>
                              <p>Zdravý životní styl rovná se výkonnější a spokojenější zaměstnanec. Naše projekty pomáhají ve firmách prosadit zdravé stravování, zlepšit pracovní prostředí,zapojují zaměstnance do sportovních aktivit a prevence různých onemocnění.
                                  <br>
                                  <b>Jak vám můžeme pomoci:</b> Vytvoříme pro vás návrh komunikační kampaně,zaměřené na propagaci zdravého životního stylu Vašich zaměstnanců. Tento návrh vám následně pomůžeme zrealizovat.
                                  <br>
                                  <b>Pokud jsme vás zaujali, rádi vám připravíme nezávaznou nabídku našich služeb, a případně zodpovíme jakékoli vaše doplňující otázky.</b></p>
                          </div>
                          <div class=\"modal-footer\"><button class=\"btn btn-secondary\" data-dismiss=\"modal\" type=\"button\">Zavřít</button></div>
                      </div>
                  </div>
              </div>

              <div aria-hidden=\"true\" aria-labelledby=\"exampleModalCenterTitle\" class=\"modal fade\" id=\"10\" role=\"dialog\" tabindex=\"-1\">
                  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                      <div class=\"modal-content\">
                          <div class=\"modal-header\">
                              <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">x</span></button></div>
                              <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Interní komunikace</h5>
                          <div class=\"modal-body\">
                              <h4>Pomůžeme zvýšit loajalitu a angažovanost vašich zaměstnanců</h4>
                              <p>Dobří manažeři věnují pozornost tomu, aby zaměstnanci byli na firmu hrdí a aby fámy a klepy nebyly hlavním zdrojem informovanosti. Naše PR agentura má za sebou celou řadu úspěšných projektů interní komunikace pro nejrůznější typy společností. Vytvoříme komplexní strategii interní komunikace vaší společnosti, zrealizujeme interní průzkumy názorů, pomůžeme vám s vydáváním vašeho zaměstnaneckého časopisu, navrhneme obsah intranetu či realizujeme celou řadu motivačních soutěží pro vaše zaměstnance.</p>

                          </div>
                          <div class=\"modal-footer\"><button class=\"btn btn-secondary\" data-dismiss=\"modal\" type=\"button\">Zavřít</button></div>
                      </div>
                  </div>
              </div>

              <div aria-hidden=\"true\" aria-labelledby=\"exampleModalCenterTitle\" class=\"modal fade\" id=\"11\" role=\"dialog\" tabindex=\"-1\">
                  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                      <div class=\"modal-content\">
                          <div class=\"modal-header\">
                              <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">x</span></button></div>
                              <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Online komunikace</h5>
                          <div class=\"modal-body\">
                              <h4>S námi budete na internetu jako doma</h4>
                              <p>Internet je největší revolucí v oblasti komunikace od vynálezu knihtisku. Mít oficiální webové stránky dnes již nestačí, čím dál větší důraz je kladen na účinný dialog se zákazníky. Nástroje v podobě sociálních sítí, blogů a diskusních fór proměnily konzumenty reklamy v angažované mluvčí,kteří dnes již nejsou pouze pasivními příjemci sdělení, ale naopak aktivně navzájem ovlivňují své chování a názory. Chcete-li se prosadit ve světě on-line komunikace, měli byste svým klientům nejen naslouchat, ale i s nimi aktivně komunikovat.  Naši specialisté na digitální marketing vám pomohou doručit sdělení té správné cílové skupině prostřednictvím správného média a v ten pravý čas. Zároveň se postaráme o vaši reputaci napříč všemi on-line kanály. Pomůžeme s optimalizací vašich webových stránek pro vyhledávače (SEO). Klíčovými parametry pro navrhované marketingové strategie jsou pro nás vždy přesné zacílení, efektivní komunikace a měřitelný výsledek v relevantním čase.</p>
                          </div>
                          <div class=\"modal-footer\"><button class=\"btn btn-secondary\" data-dismiss=\"modal\" type=\"button\">Zavřít</button></div>
                      </div>
                  </div>
              </div>

              <div aria-hidden=\"true\" aria-labelledby=\"exampleModalCenterTitle\" class=\"modal fade\" id=\"12\" role=\"dialog\" tabindex=\"-1\">
                  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                      <div class=\"modal-content\">
                          <div class=\"modal-header\">
                              <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">x</span></button></div>
                              <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Médiální trénink</h5>
                          <div class=\"modal-body\">
                              <h4>Naučíme vás komunikovat s médii</h4>
                              <p>Média jsou důležitým nástrojem firemní komunikace a mají zásadní vliv na to, zda veřejnost firmu zná a co si o ní myslí. Pro naše klienty jsme v minulosti zorganizovali desítky tisíc kontaktů se zástupci médií, ať už se jednalo o tiskové zprávy, odborné články, rozhovory či tiskové konference. Každý zástupce společnosti, který ji reprezentuje v médiích, by měl vědět, jak média fungují a jak s nimi co nejlépe a efektivně komunikovat. Prostřednictvím teoretického i praktického tréninku vás naučíme, jak novináři předat nejlépe vaše sdělení, jak reagovat na ne vždy příjemné dotazy médií a jak vytěžit z komunikace s médii pro vaši společnost maximum.</p>
                          </div>
                          <div class=\"modal-footer\"><button class=\"btn btn-secondary\" data-dismiss=\"modal\" type=\"button\">Zavřít</button></div>
                      </div>
                  </div>
              </div>

          </div>
        </div>
\t  ";
        }
        // line 444
        echo "
      ";
        // line 445
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) {
            // line 446
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 447
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
            ";
            // line 448
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </div>
        </div>
\t  ";
        }
        // line 452
        echo "       </div>
    </div>
   </div>
</section>
</main>
";
        // line 457
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 458
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
";
        }
        // line 460
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
            // line 461
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
            echo "
";
        }
        // line 463
        if (($context["scrolltop"] ?? null)) {
            // line 464
            echo "    <a href=\"#body\" class=\"scrolltotop sm-scroll\" title=\"";
            echo t("Scroll to top", array());
            echo "\"><i class=\"fa fa-chevron-up\"></i></a>
";
        }
        // line 466
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
        return array (  582 => 466,  576 => 464,  574 => 463,  568 => 461,  566 => 460,  560 => 458,  558 => 457,  551 => 452,  544 => 448,  540 => 447,  537 => 446,  535 => 445,  532 => 444,  138 => 53,  106 => 24,  102 => 23,  99 => 22,  97 => 21,  94 => 20,  87 => 16,  83 => 15,  80 => 14,  78 => 13,  70 => 7,  64 => 5,  62 => 4,  57 => 2,  55 => 1,);
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
