<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* generale/index.html.twig */
class __TwigTemplate_a3a2e4cb29dbc41864993184221ff1be92dd8b0af735803376f3011815af8686 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "generale/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "generale/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "generale/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"clearfix\" id=\"page\"><!-- column -->
    <div class=\"position_content\" id=\"page_position_content\">
        <div class=\"browser_width\" id=\"u4705-bw\">
            <div class=\"pinned-colelem\" id=\"u4705\"><!-- simple frame --></div>
        </div>
        <a class=\"anchor_item colelem\" id=\"top\"></a>
        <a class=\"nonblock nontext MuseLinkActive clip_frame pinned-colelem\" id=\"u27479\" href=\"index.html\"><!-- image --><img class=\"block\" id=\"u27479_img\" src=\"images/logo_3_1.png\" alt=\"\" width=\"236\" height=\"56\"/></a>
        <div class=\"pinned-colelem\" id=\"u31546\"><!-- custom html -->
            <i class=\"fa fa-map-marker\"></i>
        </div>
        <div class=\"clearfix pinned-colelem\" id=\"u27289-4\"><!-- content -->
            <p>36 Bd de la Liberté, 13001 Marseille, France</p>
        </div>
        <div class=\"pinned-colelem\" id=\"u31548\"><!-- custom html -->
            <i class=\"fa fa-phone\"></i>
        </div>
        <div class=\"clearfix pinned-colelem\" id=\"u27288-4\"><!-- content -->
            <p>+33 6 50 21 55 14</p>
        </div>
        <div class=\"pinned-colelem\" id=\"u31550\"><!-- custom html -->
            <i class=\"fa fa-envelope\"></i>
        </div>
        <div class=\"clearfix pinned-colelem\" id=\"u27290-4\"><!-- content -->
            <p>ahedaziza@gmail.com</p>
        </div>
        <div class=\"browser_width\" id=\"u4706-bw\">
            <div class=\"pinned-colelem\" id=\"u4706\"><!-- simple frame --></div>
        </div>
        <nav class=\"MenuBar clearfix pinned-colelem\" id=\"menuu4707\"><!-- horizontal box -->
            <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4715\"><!-- vertical box -->
                <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem\" id=\"u4716\" href=\"index.html\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4719-4\"><!-- content --><p>HOME</p></div></a>
            </div>
            <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4722\"><!-- vertical box -->
                <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem\" id=\"u4725\" href=\"about-us.html.twig\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4728-4\"><!-- content --><p>ABOUT US</p></div></a>
            </div>
            <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4708\"><!-- vertical box -->
                <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem\" id=\"u4711\" href=\"services.html.twig\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4713-4\"><!-- content --><p>SERVICES</p></div></a>
            </div>
            <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4729\"><!-- vertical box -->
                <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem\" id=\"u4730\" href=\"gallery.html.twig\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4732-4\"><!-- content --><p>GALLERY</p></div></a>
            </div>
            <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4743\"><!-- vertical box -->
                <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem\" id=\"u4746\" href=\"news.html.twig\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4748-4\"><!-- content --><p>NEWS</p></div></a>
            </div>
            <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4736\"><!-- vertical box -->
                <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem\" id=\"u4739\" href=\"contact.html.twig\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4740-4\"><!-- content --><p>CONTACT</p></div></a>
            </div>
        </nav>
        <div class=\"pinned-colelem\" id=\"u31552\"><!-- custom html -->
            <i class=\"fa fa-facebook\"></i>
        </div>
        <div class=\"pinned-colelem\" id=\"u31554\"><!-- custom html -->
            <i class=\"fa fa-instagram\"></i>
        </div>
        <div class=\"pinned-colelem\" id=\"u31556\"><!-- custom html -->
            <i class=\"fa fa-google-plus\"></i>
        </div>
        <div class=\"pinned-colelem\" id=\"u31558\"><!-- custom html -->
            <i class=\"fa fa-twitter\"></i>
        </div>
        <div class=\"pinned-colelem\" id=\"u31560\"><!-- custom html -->
            <i class=\"fa fa-pinterest\"></i>
        </div>
        <div class=\"pinned-colelem\" id=\"u31562\"><!-- custom html -->
            <i class=\"fa fa-rss\"></i>
        </div>
        <div class=\"SlideShowWidget clearfix colelem\" id=\"slideshowu196\"><!-- none box -->
            <div class=\"popup_anchor\" id=\"u200popup\">
                <div class=\"SlideShowContentPanel clearfix\" id=\"u200\"><!-- stack box -->
                    <div class=\"SSSlide clip_frame grpelem\" id=\"u30565\"><!-- image -->
                        <img class=\"ImageInclude\" id=\"u30565_img\" data-src=\"images/s3.png\" src=\"images/blank.gif\" alt=\"\" data-width=\"1503\" data-height=\"783\"/>
                    </div>
                    <div class=\"SSSlide invi clip_frame grpelem\" id=\"u31910\"><!-- image -->
                        <img class=\"ImageInclude\" id=\"u31910_img\" data-src=\"images/s3.png\" src=\"images/blank.gif\" alt=\"\" data-width=\"1503\" data-height=\"783\"/>
                    </div>
                </div>
            </div>
            <div class=\"popup_anchor\" id=\"u207-4popup\">
                <div class=\"SSPreviousButton clearfix\" id=\"u207-4\"><!-- content -->
                    <p>&lt;</p>
                </div>
            </div>
            <div class=\"popup_anchor\" id=\"u199-4popup\">
                <div class=\"SSNextButton clearfix\" id=\"u199-4\"><!-- content -->
                    <p>&gt;</p>
                </div>
            </div>
        </div>
        <div class=\"clearfix colelem\" id=\"pu30671\"><!-- group -->
            <div class=\"browser_width grpelem\" id=\"u30671-bw\">
                <div id=\"u30671\"><!-- simple frame --></div>
            </div>

        </div>
        <div  id=\"u31895-9\">
            <p id=\"u31895-2\"  >BEAUTY BY AZIZA</p>
            <p id=\"u31895-4\">Welcome to Beauty Salon. We are professional stylists.</p>
            <p id=\"u31895-6\">Visit&nbsp; us and you will get&nbsp; amazing look .</p>
            <p id=\"u31895-7\">&nbsp;</p>
        </div>
        <div class=\"clearfix colelem\" id=\"pu1552\"><!-- group -->
            <div class=\"clearfix grpelem\" id=\"u1552\"><!-- column -->
                <div class=\"clearfix colelem\" id=\"u27692\"><!-- group -->
                    <div class=\"clearfix grpelem\" id=\"u1229-4\"><!-- content -->
                        <p id=\"u1229-2\">OPENING TIME</p>
                    </div>
                </div>
                <div class=\"clearfix colelem\" id=\"u1564-16\"><!-- content -->
                    <p>Monday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Closed</p>
                    <p>Tuesday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9 am - 8 pm</p>
                    <p>Wednesday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 8 pm</p>
                    <p>Thursday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10 am - 8 pm</p>
                    <p>Friday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 6 pm</p>
                    <p>Saturday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 4 pm</p>
                    <p>Sunday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 4 pm</p>
                </div>
            </div>
            <div class=\"PamphletWidget clearfix grpelem\" id=\"pamphletu1683\"><!-- none box -->
                <div class=\"ThumbGroup clearfix grpelem\" id=\"u1710\"><!-- none box -->
                    <div class=\"popup_anchor\">
                        <div class=\"Thumb popup_element\" id=\"u1751\"><!-- simple frame --></div>
                    </div>
                    <div class=\"popup_anchor\">
                        <div class=\"Thumb popup_element\" id=\"u3585\"><!-- simple frame --></div>
                    </div>
                </div>
                <div class=\"popup_anchor\" id=\"u1686popup\">
                    <div class=\"ContainerGroup clearfix\" id=\"u1686\"><!-- stack box -->
                        <div class=\"Container clearfix grpelem\" id=\"u1752\"><!-- column -->
                            <div class=\"position_content\" id=\"u1752_position_content\">
                                <div class=\"clearfix colelem\" id=\"u27702-4\"><!-- content -->
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
                                </div>
                                <div class=\"rounded-corners colelem\" id=\"u27703\"><!-- simple frame --></div>
                                <div class=\"clearfix colelem\" id=\"u27704-4\"><!-- content -->
                                    <p>Jack Doe</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"Container invi clearfix grpelem\" id=\"u3586\"><!-- column -->
                            <div class=\"position_content\" id=\"u3586_position_content\">
                                <div class=\"clearfix colelem\" id=\"u3590-4\"><!-- content -->
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
                                </div>
                                <div class=\"rounded-corners colelem\" id=\"u3591\"><!-- simple frame --></div>
                                <div class=\"clearfix colelem\" id=\"u3592-4\"><!-- content -->
                                    <p>Jane Doe</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"clearfix colelem\" id=\"pu28524\"><!-- group -->
            <div class=\"browser_width grpelem\" id=\"u28524-bw\">
                <div id=\"u28524\"><!-- group -->
                    <div class=\"clearfix\" id=\"u28524_align_to_page\">
                        <div class=\"clearfix grpelem\" id=\"pu1180-4\"><!-- column -->
                            <div class=\"fadeInUp clearfix colelem\" id=\"u1180-4\"><!-- content -->
                                <p>WELCOME</p>
                            </div>
                            <div class=\"clearfix colelem\" id=\"u1800-4\"><!-- content -->
                                <p>WHO WE ARE</p>
                            </div>
                            <div class=\"clearfix colelem\" id=\"u1802-4\"><!-- content -->
                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur .</p>
                            </div>
                        </div>
                        <div class=\"museBGSize grpelem\" id=\"u1788\"><!-- simple frame --></div>
                    </div>
                </div>
            </div>
            <div class=\"clip_frame grpelem\" id=\"u28495\"><!-- image -->
                <img class=\"block\" id=\"u28495_img\" src=\"images/line%202.png\" alt=\"\" width=\"250\" height=\"35\"/>
            </div>
        </div>
        <div class=\"clearfix colelem\" id=\"pu32059\"><!-- group -->
            <div class=\"browser_width grpelem\" id=\"u32059-bw\">
                <div id=\"u32059\"><!-- simple frame --></div>
            </div>
            <div class=\"browser_width grpelem\" id=\"u1855-bw\">
                <div class=\"museBGSize\" id=\"u1855\"><!-- simple frame --></div>
            </div>
            <div class=\"clearfix grpelem\" id=\"u1860-4\"><!-- content -->
                <p>AMAZING STYLISTS&nbsp; AMAZING STYLE</p>
            </div>
            <a class=\"nonblock nontext Button clearfix grpelem\" id=\"buttonu1862\" href=\"contact.html.twig\"><!-- container box --><div class=\"clearfix grpelem\" id=\"u1863-4\"><!-- content --><p>BOOK NOW</p></div></a>
        </div>
        <div class=\"fadeInUp clearfix colelem\" id=\"u2008-4\"><!-- content -->
            <p>POPULAR TRENDS</p>
        </div>
        <div class=\"clearfix colelem\" id=\"u2009-4\"><!-- content -->
            <p>POPULAR TRENDS FOR YOU</p>
        </div>
        <div class=\"clip_frame colelem\" id=\"u28483\"><!-- image -->
            <img class=\"block\" id=\"u28483_img\" src=\"images/line%201.png\" alt=\"\" width=\"250\" height=\"35\"/>
        </div>
        <div class=\"clearfix colelem\" id=\"pu27898\"><!-- group -->
            <div class=\"picture museBGSize grpelem\" id=\"u27898\"><!-- simple frame --></div>
            <div class=\"picture museBGSize grpelem\" id=\"u27904\"><!-- simple frame --></div>
            <div class=\"picture museBGSize grpelem\" id=\"u27910\"><!-- simple frame --></div>
        </div>
        <div class=\"clearfix colelem\" id=\"pu5430\"><!-- group -->
            <div class=\"clearfix grpelem\" id=\"u5430\"><!-- group -->
                <div class=\"clearfix grpelem\" id=\"u5433-4\"><!-- content -->
                    <p>WOMEN&nbsp; HAIRCUTS</p>
                </div>
            </div>
            <div class=\"clearfix grpelem\" id=\"u27902\"><!-- group -->
                <div class=\"clearfix grpelem\" id=\"u27903-4\"><!-- content -->
                    <p>MEN HAIRCUTS</p>
                </div>
            </div>
            <div class=\"clearfix grpelem\" id=\"u27908\"><!-- group -->
                <div class=\"clearfix grpelem\" id=\"u27909-4\"><!-- content -->
                    <p>MAKE–UP</p>
                </div>
            </div>
        </div>
        <div class=\"clearfix colelem\" id=\"pu27920\"><!-- group -->
            <div class=\"picture museBGSize grpelem\" id=\"u27920\"><!-- simple frame --></div>
            <div class=\"picture museBGSize grpelem\" id=\"u27921\"><!-- simple frame --></div>
            <div class=\"picture museBGSize grpelem\" id=\"u27922\"><!-- simple frame --></div>
        </div>
        <div class=\"clearfix colelem\" id=\"pu27925\"><!-- group -->
            <div class=\"clearfix grpelem\" id=\"u27925\"><!-- group -->
                <div class=\"clearfix grpelem\" id=\"u27928-4\"><!-- content -->
                    <p>ALL OVER COLOR</p>
                </div>
            </div>
            <div class=\"clearfix grpelem\" id=\"u27926\"><!-- group -->
                <div class=\"clearfix grpelem\" id=\"u27924-4\"><!-- content -->
                    <p>MASSAGE</p>
                </div>
            </div>
            <div class=\"clearfix grpelem\" id=\"u27923\"><!-- group -->
                <div class=\"clearfix grpelem\" id=\"u27927-4\"><!-- content -->
                    <p>NAILS</p>
                </div>
            </div>
        </div>
        <div class=\"browser_width colelem\" id=\"u2736-bw\">
            <div class=\"gradient\" id=\"u2736\"><!-- group -->
                <div class=\"clearfix\" id=\"u2736_align_to_page\">
                    <div class=\"clearfix grpelem\" id=\"pu3039-4\"><!-- column -->
                        <div class=\"fadeInUp clearfix colelem\" id=\"u3039-4\"><!-- content -->
                            <p>RECENT NEWS</p>
                        </div>
                        <div class=\"clearfix colelem\" id=\"u3041-4\"><!-- content -->
                            <p>THE LATEST UPDATE FROM US</p>
                        </div>
                        <div class=\"clip_frame colelem\" id=\"u28501\"><!-- image -->
                            <img class=\"block\" id=\"u28501_img\" src=\"images/line%203.png\" alt=\"\" width=\"250\" height=\"35\"/>
                        </div>
                        <div class=\"clearfix colelem\" id=\"u3038-4\"><!-- content -->
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                        </div>
                        <a class=\"nonblock nontext Button clearfix colelem\" id=\"buttonu27936\" href=\"news.html.twig\"><!-- container box --><div class=\"clearfix grpelem\" id=\"u27937-4\"><!-- content --><p>VIEW ALL NEWS</p></div></a>
                    </div>
                    <div class=\"clearfix grpelem\" id=\"pu27935\"><!-- column -->
                        <div class=\"picture museBGSize colelem\" id=\"u27935\"><!-- simple frame --></div>
                        <div class=\"clearfix colelem\" id=\"u27932\"><!-- column -->
                            <div class=\"clearfix colelem\" id=\"u27934-4\"><!-- content -->
                                <p>NEW HAIR OF MEN</p>
                            </div>
                            <div class=\"clearfix colelem\" id=\"u27933-4\"><!-- content -->
                                <p>HAIRCUTS &amp; STYLING</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix grpelem\" id=\"pu27942\"><!-- column -->
                        <div class=\"picture museBGSize colelem\" id=\"u27942\"><!-- simple frame --></div>
                        <div class=\"clearfix colelem\" id=\"u27943\"><!-- column -->
                            <div class=\"clearfix colelem\" id=\"u27944-4\"><!-- content -->
                                <p>NEW HAIR ARRANGEMENT</p>
                            </div>
                            <div class=\"clearfix colelem\" id=\"u27945-4\"><!-- content -->
                                <p>HAIRCUTS &amp; STYLING</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"browser_width colelem\" id=\"u3802-bw\">
            <div id=\"u3802\"><!-- group -->
                <div class=\"clearfix\" id=\"u3802_align_to_page\">
                    <div class=\"clearfix grpelem\" id=\"u3804-4\"><!-- content -->
                        <p>CALL +33 6 50 21 55 14 TO MAKE YOUR APPOINTMENT.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"verticalspacer\"></div>


        <!-- houni footer -->
        <div class=\"clearfix colelem\" id=\"pu4800\"><!-- group -->
            <div class=\"browser_width grpelem\" id=\"u4800-bw\">
                <div id=\"u4800\"><!-- group -->
                    <div class=\"clearfix\" id=\"u4800_align_to_page\">
                        <div class=\"clearfix grpelem\" id=\"pu4804-4\"><!-- column -->
                            <div class=\"clearfix colelem\" id=\"u4804-4\"><!-- content -->
                                <p>ABOUT US</p>
                            </div>
                            <div class=\"clearfix colelem\" id=\"u4801-8\"><!-- content -->
                                <p>Get the professional edge at The Beauty</p>
                                <p>Salon. Our professional team are here</p>
                                <p>to give you the best haircut.</p>
                            </div>
                            <div class=\"clip_frame colelem\" id=\"u27948\"><!-- image -->
                                <img class=\"block\" id=\"u27948_img\" src=\"images/logo_3_1.png\" alt=\"\" width=\"235\" height=\"44\"/>
                            </div>
                        </div>
                        <div class=\"clearfix grpelem\" id=\"pu4803-4\"><!-- column -->
                            <div class=\"clearfix colelem\" id=\"u4803-4\"><!-- content -->
                                <p>ADDRESS</p>
                            </div>
                            <div class=\"clearfix colelem\" id=\"u4802-5\"><!-- content -->
                                <p id=\"u4802-2\">36 Bd de la Liberté, 13001 Marseille, France</p>
                                <p id=\"u4802-3\">&nbsp;</p>
                            </div>
                            <div class=\"clearfix colelem\" id=\"pbuttonu31572\"><!-- group -->
                                    <div class=\"Button clearfix grpelem\" id=\"buttonu31572\"><!-- container box -->
                                        <a href=\"https://www.facebook.com/Beauty-by-aziza-1720077611573523\" >

                                        <div class=\"grpelem\" id=\"u31573\"><!-- custom html -->

                                            <i class=\"fa fa-facebook\"></i>
                                        </div>
                                        </a>
                                    </div>

                                <div class=\"Button clearfix grpelem\" id=\"buttonu31575\"><!-- container box -->
                                    <div class=\"grpelem\" id=\"u31576\"><!-- custom html -->
                                        <i class=\"fa fa-twitter\"></i>
                                    </div>
                                </div>
                                <div class=\"Button clearfix grpelem\" id=\"buttonu31578\"><!-- container box -->
                                    <a href=\"https://instagram.com/azzaahed?utm_medium=copy_link\">
                                    <div class=\"grpelem\" id=\"u31579\"><!-- custom html -->
                                        <i class=\"fa fa-instagram\"></i>
                                    </div>
                                    </a>
                                </div>
                                <div class=\"Button clearfix grpelem\" id=\"buttonu31581\"><!-- container box -->
                                    <div class=\"grpelem\" id=\"u31582\"><!-- custom html -->
                                        <i class=\"fa fa-youtube\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"clearfix grpelem\" id=\"pu4809\"><!-- column -->
                            <div class=\"clearfix colelem\" id=\"u4809\"><!-- group -->
                                <div class=\"clearfix grpelem\" id=\"u4810-4\"><!-- content -->
                                    <p>OPENING TIME</p>
                                </div>
                            </div>
                            <div class=\"clearfix colelem\" id=\"u27954-16\"><!-- content -->
                                <p>Monday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Closed</p>
                                <p>Tuesday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9 am - 8 pm</p>
                                <p>Wednesday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 8 pm</p>
                                <p>Thursday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10 am - 8 pm</p>
                                <p>Friday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 6 pm</p>
                                <p>Saturday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 4 pm</p>
                                <p>Sunday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 4 pm</p>
                            </div>
                            <div class=\"clearfix colelem\" id=\"u27947-6\"><!-- content -->
                                <p>© 2022 <span id=\"u27947-2\">Beauty By Aziza.</span> All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"browser_width grpelem\" id=\"u4819-bw\">
                <div id=\"u4819\"><!-- simple frame --></div>
            </div>
            <a class=\"nonblock nontext Button anim_swing clearfix grpelem\" id=\"buttonu31635\" href=\"index.html#top\"><!-- container box --><div class=\"grpelem\" id=\"u31636\"><!-- custom html --><i class=\"fa fa-arrow-up\"></i></div></a>
        </div>


    </div>
</div>
<div class=\"preload_images\">
    <img class=\"preload\" src=\"images/hover2.jpg\" alt=\"\"/>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "generale/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}
<div class=\"clearfix\" id=\"page\"><!-- column -->
    <div class=\"position_content\" id=\"page_position_content\">
        <div class=\"browser_width\" id=\"u4705-bw\">
            <div class=\"pinned-colelem\" id=\"u4705\"><!-- simple frame --></div>
        </div>
        <a class=\"anchor_item colelem\" id=\"top\"></a>
        <a class=\"nonblock nontext MuseLinkActive clip_frame pinned-colelem\" id=\"u27479\" href=\"index.html\"><!-- image --><img class=\"block\" id=\"u27479_img\" src=\"images/logo_3_1.png\" alt=\"\" width=\"236\" height=\"56\"/></a>
        <div class=\"pinned-colelem\" id=\"u31546\"><!-- custom html -->
            <i class=\"fa fa-map-marker\"></i>
        </div>
        <div class=\"clearfix pinned-colelem\" id=\"u27289-4\"><!-- content -->
            <p>36 Bd de la Liberté, 13001 Marseille, France</p>
        </div>
        <div class=\"pinned-colelem\" id=\"u31548\"><!-- custom html -->
            <i class=\"fa fa-phone\"></i>
        </div>
        <div class=\"clearfix pinned-colelem\" id=\"u27288-4\"><!-- content -->
            <p>+33 6 50 21 55 14</p>
        </div>
        <div class=\"pinned-colelem\" id=\"u31550\"><!-- custom html -->
            <i class=\"fa fa-envelope\"></i>
        </div>
        <div class=\"clearfix pinned-colelem\" id=\"u27290-4\"><!-- content -->
            <p>ahedaziza@gmail.com</p>
        </div>
        <div class=\"browser_width\" id=\"u4706-bw\">
            <div class=\"pinned-colelem\" id=\"u4706\"><!-- simple frame --></div>
        </div>
        <nav class=\"MenuBar clearfix pinned-colelem\" id=\"menuu4707\"><!-- horizontal box -->
            <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4715\"><!-- vertical box -->
                <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem\" id=\"u4716\" href=\"index.html\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4719-4\"><!-- content --><p>HOME</p></div></a>
            </div>
            <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4722\"><!-- vertical box -->
                <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem\" id=\"u4725\" href=\"about-us.html.twig\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4728-4\"><!-- content --><p>ABOUT US</p></div></a>
            </div>
            <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4708\"><!-- vertical box -->
                <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem\" id=\"u4711\" href=\"services.html.twig\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4713-4\"><!-- content --><p>SERVICES</p></div></a>
            </div>
            <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4729\"><!-- vertical box -->
                <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem\" id=\"u4730\" href=\"gallery.html.twig\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4732-4\"><!-- content --><p>GALLERY</p></div></a>
            </div>
            <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4743\"><!-- vertical box -->
                <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem\" id=\"u4746\" href=\"news.html.twig\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4748-4\"><!-- content --><p>NEWS</p></div></a>
            </div>
            <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4736\"><!-- vertical box -->
                <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem\" id=\"u4739\" href=\"contact.html.twig\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4740-4\"><!-- content --><p>CONTACT</p></div></a>
            </div>
        </nav>
        <div class=\"pinned-colelem\" id=\"u31552\"><!-- custom html -->
            <i class=\"fa fa-facebook\"></i>
        </div>
        <div class=\"pinned-colelem\" id=\"u31554\"><!-- custom html -->
            <i class=\"fa fa-instagram\"></i>
        </div>
        <div class=\"pinned-colelem\" id=\"u31556\"><!-- custom html -->
            <i class=\"fa fa-google-plus\"></i>
        </div>
        <div class=\"pinned-colelem\" id=\"u31558\"><!-- custom html -->
            <i class=\"fa fa-twitter\"></i>
        </div>
        <div class=\"pinned-colelem\" id=\"u31560\"><!-- custom html -->
            <i class=\"fa fa-pinterest\"></i>
        </div>
        <div class=\"pinned-colelem\" id=\"u31562\"><!-- custom html -->
            <i class=\"fa fa-rss\"></i>
        </div>
        <div class=\"SlideShowWidget clearfix colelem\" id=\"slideshowu196\"><!-- none box -->
            <div class=\"popup_anchor\" id=\"u200popup\">
                <div class=\"SlideShowContentPanel clearfix\" id=\"u200\"><!-- stack box -->
                    <div class=\"SSSlide clip_frame grpelem\" id=\"u30565\"><!-- image -->
                        <img class=\"ImageInclude\" id=\"u30565_img\" data-src=\"images/s3.png\" src=\"images/blank.gif\" alt=\"\" data-width=\"1503\" data-height=\"783\"/>
                    </div>
                    <div class=\"SSSlide invi clip_frame grpelem\" id=\"u31910\"><!-- image -->
                        <img class=\"ImageInclude\" id=\"u31910_img\" data-src=\"images/s3.png\" src=\"images/blank.gif\" alt=\"\" data-width=\"1503\" data-height=\"783\"/>
                    </div>
                </div>
            </div>
            <div class=\"popup_anchor\" id=\"u207-4popup\">
                <div class=\"SSPreviousButton clearfix\" id=\"u207-4\"><!-- content -->
                    <p>&lt;</p>
                </div>
            </div>
            <div class=\"popup_anchor\" id=\"u199-4popup\">
                <div class=\"SSNextButton clearfix\" id=\"u199-4\"><!-- content -->
                    <p>&gt;</p>
                </div>
            </div>
        </div>
        <div class=\"clearfix colelem\" id=\"pu30671\"><!-- group -->
            <div class=\"browser_width grpelem\" id=\"u30671-bw\">
                <div id=\"u30671\"><!-- simple frame --></div>
            </div>

        </div>
        <div  id=\"u31895-9\">
            <p id=\"u31895-2\"  >BEAUTY BY AZIZA</p>
            <p id=\"u31895-4\">Welcome to Beauty Salon. We are professional stylists.</p>
            <p id=\"u31895-6\">Visit&nbsp; us and you will get&nbsp; amazing look .</p>
            <p id=\"u31895-7\">&nbsp;</p>
        </div>
        <div class=\"clearfix colelem\" id=\"pu1552\"><!-- group -->
            <div class=\"clearfix grpelem\" id=\"u1552\"><!-- column -->
                <div class=\"clearfix colelem\" id=\"u27692\"><!-- group -->
                    <div class=\"clearfix grpelem\" id=\"u1229-4\"><!-- content -->
                        <p id=\"u1229-2\">OPENING TIME</p>
                    </div>
                </div>
                <div class=\"clearfix colelem\" id=\"u1564-16\"><!-- content -->
                    <p>Monday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Closed</p>
                    <p>Tuesday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9 am - 8 pm</p>
                    <p>Wednesday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 8 pm</p>
                    <p>Thursday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10 am - 8 pm</p>
                    <p>Friday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 6 pm</p>
                    <p>Saturday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 4 pm</p>
                    <p>Sunday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 4 pm</p>
                </div>
            </div>
            <div class=\"PamphletWidget clearfix grpelem\" id=\"pamphletu1683\"><!-- none box -->
                <div class=\"ThumbGroup clearfix grpelem\" id=\"u1710\"><!-- none box -->
                    <div class=\"popup_anchor\">
                        <div class=\"Thumb popup_element\" id=\"u1751\"><!-- simple frame --></div>
                    </div>
                    <div class=\"popup_anchor\">
                        <div class=\"Thumb popup_element\" id=\"u3585\"><!-- simple frame --></div>
                    </div>
                </div>
                <div class=\"popup_anchor\" id=\"u1686popup\">
                    <div class=\"ContainerGroup clearfix\" id=\"u1686\"><!-- stack box -->
                        <div class=\"Container clearfix grpelem\" id=\"u1752\"><!-- column -->
                            <div class=\"position_content\" id=\"u1752_position_content\">
                                <div class=\"clearfix colelem\" id=\"u27702-4\"><!-- content -->
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
                                </div>
                                <div class=\"rounded-corners colelem\" id=\"u27703\"><!-- simple frame --></div>
                                <div class=\"clearfix colelem\" id=\"u27704-4\"><!-- content -->
                                    <p>Jack Doe</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"Container invi clearfix grpelem\" id=\"u3586\"><!-- column -->
                            <div class=\"position_content\" id=\"u3586_position_content\">
                                <div class=\"clearfix colelem\" id=\"u3590-4\"><!-- content -->
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
                                </div>
                                <div class=\"rounded-corners colelem\" id=\"u3591\"><!-- simple frame --></div>
                                <div class=\"clearfix colelem\" id=\"u3592-4\"><!-- content -->
                                    <p>Jane Doe</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"clearfix colelem\" id=\"pu28524\"><!-- group -->
            <div class=\"browser_width grpelem\" id=\"u28524-bw\">
                <div id=\"u28524\"><!-- group -->
                    <div class=\"clearfix\" id=\"u28524_align_to_page\">
                        <div class=\"clearfix grpelem\" id=\"pu1180-4\"><!-- column -->
                            <div class=\"fadeInUp clearfix colelem\" id=\"u1180-4\"><!-- content -->
                                <p>WELCOME</p>
                            </div>
                            <div class=\"clearfix colelem\" id=\"u1800-4\"><!-- content -->
                                <p>WHO WE ARE</p>
                            </div>
                            <div class=\"clearfix colelem\" id=\"u1802-4\"><!-- content -->
                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur .</p>
                            </div>
                        </div>
                        <div class=\"museBGSize grpelem\" id=\"u1788\"><!-- simple frame --></div>
                    </div>
                </div>
            </div>
            <div class=\"clip_frame grpelem\" id=\"u28495\"><!-- image -->
                <img class=\"block\" id=\"u28495_img\" src=\"images/line%202.png\" alt=\"\" width=\"250\" height=\"35\"/>
            </div>
        </div>
        <div class=\"clearfix colelem\" id=\"pu32059\"><!-- group -->
            <div class=\"browser_width grpelem\" id=\"u32059-bw\">
                <div id=\"u32059\"><!-- simple frame --></div>
            </div>
            <div class=\"browser_width grpelem\" id=\"u1855-bw\">
                <div class=\"museBGSize\" id=\"u1855\"><!-- simple frame --></div>
            </div>
            <div class=\"clearfix grpelem\" id=\"u1860-4\"><!-- content -->
                <p>AMAZING STYLISTS&nbsp; AMAZING STYLE</p>
            </div>
            <a class=\"nonblock nontext Button clearfix grpelem\" id=\"buttonu1862\" href=\"contact.html.twig\"><!-- container box --><div class=\"clearfix grpelem\" id=\"u1863-4\"><!-- content --><p>BOOK NOW</p></div></a>
        </div>
        <div class=\"fadeInUp clearfix colelem\" id=\"u2008-4\"><!-- content -->
            <p>POPULAR TRENDS</p>
        </div>
        <div class=\"clearfix colelem\" id=\"u2009-4\"><!-- content -->
            <p>POPULAR TRENDS FOR YOU</p>
        </div>
        <div class=\"clip_frame colelem\" id=\"u28483\"><!-- image -->
            <img class=\"block\" id=\"u28483_img\" src=\"images/line%201.png\" alt=\"\" width=\"250\" height=\"35\"/>
        </div>
        <div class=\"clearfix colelem\" id=\"pu27898\"><!-- group -->
            <div class=\"picture museBGSize grpelem\" id=\"u27898\"><!-- simple frame --></div>
            <div class=\"picture museBGSize grpelem\" id=\"u27904\"><!-- simple frame --></div>
            <div class=\"picture museBGSize grpelem\" id=\"u27910\"><!-- simple frame --></div>
        </div>
        <div class=\"clearfix colelem\" id=\"pu5430\"><!-- group -->
            <div class=\"clearfix grpelem\" id=\"u5430\"><!-- group -->
                <div class=\"clearfix grpelem\" id=\"u5433-4\"><!-- content -->
                    <p>WOMEN&nbsp; HAIRCUTS</p>
                </div>
            </div>
            <div class=\"clearfix grpelem\" id=\"u27902\"><!-- group -->
                <div class=\"clearfix grpelem\" id=\"u27903-4\"><!-- content -->
                    <p>MEN HAIRCUTS</p>
                </div>
            </div>
            <div class=\"clearfix grpelem\" id=\"u27908\"><!-- group -->
                <div class=\"clearfix grpelem\" id=\"u27909-4\"><!-- content -->
                    <p>MAKE–UP</p>
                </div>
            </div>
        </div>
        <div class=\"clearfix colelem\" id=\"pu27920\"><!-- group -->
            <div class=\"picture museBGSize grpelem\" id=\"u27920\"><!-- simple frame --></div>
            <div class=\"picture museBGSize grpelem\" id=\"u27921\"><!-- simple frame --></div>
            <div class=\"picture museBGSize grpelem\" id=\"u27922\"><!-- simple frame --></div>
        </div>
        <div class=\"clearfix colelem\" id=\"pu27925\"><!-- group -->
            <div class=\"clearfix grpelem\" id=\"u27925\"><!-- group -->
                <div class=\"clearfix grpelem\" id=\"u27928-4\"><!-- content -->
                    <p>ALL OVER COLOR</p>
                </div>
            </div>
            <div class=\"clearfix grpelem\" id=\"u27926\"><!-- group -->
                <div class=\"clearfix grpelem\" id=\"u27924-4\"><!-- content -->
                    <p>MASSAGE</p>
                </div>
            </div>
            <div class=\"clearfix grpelem\" id=\"u27923\"><!-- group -->
                <div class=\"clearfix grpelem\" id=\"u27927-4\"><!-- content -->
                    <p>NAILS</p>
                </div>
            </div>
        </div>
        <div class=\"browser_width colelem\" id=\"u2736-bw\">
            <div class=\"gradient\" id=\"u2736\"><!-- group -->
                <div class=\"clearfix\" id=\"u2736_align_to_page\">
                    <div class=\"clearfix grpelem\" id=\"pu3039-4\"><!-- column -->
                        <div class=\"fadeInUp clearfix colelem\" id=\"u3039-4\"><!-- content -->
                            <p>RECENT NEWS</p>
                        </div>
                        <div class=\"clearfix colelem\" id=\"u3041-4\"><!-- content -->
                            <p>THE LATEST UPDATE FROM US</p>
                        </div>
                        <div class=\"clip_frame colelem\" id=\"u28501\"><!-- image -->
                            <img class=\"block\" id=\"u28501_img\" src=\"images/line%203.png\" alt=\"\" width=\"250\" height=\"35\"/>
                        </div>
                        <div class=\"clearfix colelem\" id=\"u3038-4\"><!-- content -->
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                        </div>
                        <a class=\"nonblock nontext Button clearfix colelem\" id=\"buttonu27936\" href=\"news.html.twig\"><!-- container box --><div class=\"clearfix grpelem\" id=\"u27937-4\"><!-- content --><p>VIEW ALL NEWS</p></div></a>
                    </div>
                    <div class=\"clearfix grpelem\" id=\"pu27935\"><!-- column -->
                        <div class=\"picture museBGSize colelem\" id=\"u27935\"><!-- simple frame --></div>
                        <div class=\"clearfix colelem\" id=\"u27932\"><!-- column -->
                            <div class=\"clearfix colelem\" id=\"u27934-4\"><!-- content -->
                                <p>NEW HAIR OF MEN</p>
                            </div>
                            <div class=\"clearfix colelem\" id=\"u27933-4\"><!-- content -->
                                <p>HAIRCUTS &amp; STYLING</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix grpelem\" id=\"pu27942\"><!-- column -->
                        <div class=\"picture museBGSize colelem\" id=\"u27942\"><!-- simple frame --></div>
                        <div class=\"clearfix colelem\" id=\"u27943\"><!-- column -->
                            <div class=\"clearfix colelem\" id=\"u27944-4\"><!-- content -->
                                <p>NEW HAIR ARRANGEMENT</p>
                            </div>
                            <div class=\"clearfix colelem\" id=\"u27945-4\"><!-- content -->
                                <p>HAIRCUTS &amp; STYLING</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"browser_width colelem\" id=\"u3802-bw\">
            <div id=\"u3802\"><!-- group -->
                <div class=\"clearfix\" id=\"u3802_align_to_page\">
                    <div class=\"clearfix grpelem\" id=\"u3804-4\"><!-- content -->
                        <p>CALL +33 6 50 21 55 14 TO MAKE YOUR APPOINTMENT.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"verticalspacer\"></div>


        <!-- houni footer -->
        <div class=\"clearfix colelem\" id=\"pu4800\"><!-- group -->
            <div class=\"browser_width grpelem\" id=\"u4800-bw\">
                <div id=\"u4800\"><!-- group -->
                    <div class=\"clearfix\" id=\"u4800_align_to_page\">
                        <div class=\"clearfix grpelem\" id=\"pu4804-4\"><!-- column -->
                            <div class=\"clearfix colelem\" id=\"u4804-4\"><!-- content -->
                                <p>ABOUT US</p>
                            </div>
                            <div class=\"clearfix colelem\" id=\"u4801-8\"><!-- content -->
                                <p>Get the professional edge at The Beauty</p>
                                <p>Salon. Our professional team are here</p>
                                <p>to give you the best haircut.</p>
                            </div>
                            <div class=\"clip_frame colelem\" id=\"u27948\"><!-- image -->
                                <img class=\"block\" id=\"u27948_img\" src=\"images/logo_3_1.png\" alt=\"\" width=\"235\" height=\"44\"/>
                            </div>
                        </div>
                        <div class=\"clearfix grpelem\" id=\"pu4803-4\"><!-- column -->
                            <div class=\"clearfix colelem\" id=\"u4803-4\"><!-- content -->
                                <p>ADDRESS</p>
                            </div>
                            <div class=\"clearfix colelem\" id=\"u4802-5\"><!-- content -->
                                <p id=\"u4802-2\">36 Bd de la Liberté, 13001 Marseille, France</p>
                                <p id=\"u4802-3\">&nbsp;</p>
                            </div>
                            <div class=\"clearfix colelem\" id=\"pbuttonu31572\"><!-- group -->
                                    <div class=\"Button clearfix grpelem\" id=\"buttonu31572\"><!-- container box -->
                                        <a href=\"https://www.facebook.com/Beauty-by-aziza-1720077611573523\" >

                                        <div class=\"grpelem\" id=\"u31573\"><!-- custom html -->

                                            <i class=\"fa fa-facebook\"></i>
                                        </div>
                                        </a>
                                    </div>

                                <div class=\"Button clearfix grpelem\" id=\"buttonu31575\"><!-- container box -->
                                    <div class=\"grpelem\" id=\"u31576\"><!-- custom html -->
                                        <i class=\"fa fa-twitter\"></i>
                                    </div>
                                </div>
                                <div class=\"Button clearfix grpelem\" id=\"buttonu31578\"><!-- container box -->
                                    <a href=\"https://instagram.com/azzaahed?utm_medium=copy_link\">
                                    <div class=\"grpelem\" id=\"u31579\"><!-- custom html -->
                                        <i class=\"fa fa-instagram\"></i>
                                    </div>
                                    </a>
                                </div>
                                <div class=\"Button clearfix grpelem\" id=\"buttonu31581\"><!-- container box -->
                                    <div class=\"grpelem\" id=\"u31582\"><!-- custom html -->
                                        <i class=\"fa fa-youtube\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"clearfix grpelem\" id=\"pu4809\"><!-- column -->
                            <div class=\"clearfix colelem\" id=\"u4809\"><!-- group -->
                                <div class=\"clearfix grpelem\" id=\"u4810-4\"><!-- content -->
                                    <p>OPENING TIME</p>
                                </div>
                            </div>
                            <div class=\"clearfix colelem\" id=\"u27954-16\"><!-- content -->
                                <p>Monday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Closed</p>
                                <p>Tuesday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9 am - 8 pm</p>
                                <p>Wednesday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 8 pm</p>
                                <p>Thursday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10 am - 8 pm</p>
                                <p>Friday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 6 pm</p>
                                <p>Saturday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 4 pm</p>
                                <p>Sunday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 4 pm</p>
                            </div>
                            <div class=\"clearfix colelem\" id=\"u27947-6\"><!-- content -->
                                <p>© 2022 <span id=\"u27947-2\">Beauty By Aziza.</span> All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"browser_width grpelem\" id=\"u4819-bw\">
                <div id=\"u4819\"><!-- simple frame --></div>
            </div>
            <a class=\"nonblock nontext Button anim_swing clearfix grpelem\" id=\"buttonu31635\" href=\"index.html#top\"><!-- container box --><div class=\"grpelem\" id=\"u31636\"><!-- custom html --><i class=\"fa fa-arrow-up\"></i></div></a>
        </div>


    </div>
</div>
<div class=\"preload_images\">
    <img class=\"preload\" src=\"images/hover2.jpg\" alt=\"\"/>
</div>


{% endblock %}
", "generale/index.html.twig", "C:\\Users\\mouhamed ahed\\PhpstormProjects\\Beauty-by-aziza\\templates\\generale\\index.html.twig");
    }
}
