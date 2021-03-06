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

/* generale/services.html.twig */
class __TwigTemplate_081aea6da227c93056f4de256e4324136759137e785b347e296b333163152071 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "generale/services.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "generale/services.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "generale/services.html.twig", 1);
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
        echo "

  <div class=\"clearfix\" id=\"page\"><!-- column -->
   <div class=\"position_content\" id=\"page_position_content\">
    <div class=\"browser_width\" id=\"u4705-bw\">
     <div class=\"pinned-colelem\" id=\"u4705\"><!-- simple frame --></div>
    </div>
    <a class=\"anchor_item colelem\" id=\"top\"></a>
    <a class=\"nonblock nontext clip_frame pinned-colelem\" id=\"u27479\" href=\"index.html\"><!-- image --><img class=\"block\" id=\"u27479_img\" src=\"images/logo_3_1.png\" alt=\"\" width=\"236\" height=\"56\"/></a>
    <div class=\"pinned-colelem\" id=\"u31546\"><!-- custom html -->
     <i class=\"fa fa-map-marker\"></i>
</div>
    <div class=\"clearfix pinned-colelem\" id=\"u27289-4\"><!-- content -->
     <p>999&nbsp; Street Ca 90099</p>
    </div>
    <div class=\"pinned-colelem\" id=\"u31548\"><!-- custom html -->
     <i class=\"fa fa-phone\"></i>
</div>
    <div class=\"clearfix pinned-colelem\" id=\"u27288-4\"><!-- content -->
     <p>1-811-234-5678</p>
    </div>
    <div class=\"pinned-colelem\" id=\"u31550\"><!-- custom html -->
     <i class=\"fa fa-envelope\"></i>
</div>
    <div class=\"clearfix pinned-colelem\" id=\"u27290-4\"><!-- content -->
     <p>info@mail.com</p>
    </div>
    <div class=\"browser_width\" id=\"u4706-bw\">
     <div class=\"pinned-colelem\" id=\"u4706\"><!-- simple frame --></div>
    </div>
    <nav class=\"MenuBar clearfix pinned-colelem\" id=\"menuu4707\"><!-- horizontal box -->
     <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4715\"><!-- vertical box -->
      <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem\" id=\"u4716\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4719-4\"><!-- content --><p>HOME</p></div></a>
     </div>
     <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4722\"><!-- vertical box -->
      <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem\" id=\"u4725\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aboutus");
        echo "\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4728-4\"><!-- content --><p>ABOUT US</p></div></a>
     </div>
     <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4708\"><!-- vertical box -->
      <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem\" id=\"u4711\" href=\"\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4713-4\"><!-- content --><p>SERVICES</p></div></a>
     </div>
     <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4729\"><!-- vertical box -->
      <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem\" id=\"u4730\" href=\"\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4732-4\"><!-- content --><p>GALLERY</p></div></a>
     </div>
     <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4743\"><!-- vertical box -->
      <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem\" id=\"u4746\" href=\"news.html.twig\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4748-4\"><!-- content --><p>NEWS</p></div></a>
     </div>
     <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4736\"><!-- vertical box -->
      <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem\" id=\"u4739\" href=\"\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4740-4\"><!-- content --><p>CONTACT</p></div></a>
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
    <div class=\"clearfix colelem\" id=\"ppu28354-4\"><!-- group -->
     <div class=\"clearfix grpelem\" id=\"pu28354-4\"><!-- column -->
      <div class=\"fadeInUp clearfix colelem\" id=\"u28354-4\"><!-- content -->
       <p>OUR SERVICES</p>
      </div>
      <div class=\"clearfix colelem\" id=\"pu28356-4\"><!-- group -->
       <div class=\"clearfix grpelem\" id=\"u28356-4\"><!-- content -->
        <p>WHAT WE DO</p>
       </div>
       <div class=\"clip_frame grpelem\" id=\"u28517\"><!-- image -->
        <img class=\"block\" id=\"u28517_img\" src=\"images/line%202.png\" alt=\"\" width=\"250\" height=\"35\"/>
       </div>
      </div>
     </div>
     <div class=\"Button clearfix grpelem\" id=\"buttonu8441\"><!-- container box -->
      <div class=\"clearfix colelem\" id=\"u8443-4\"><!-- content -->
       <p>HAIR</p>
      </div>
      <div class=\"clearfix colelem\" id=\"u8442-4\"><!-- content -->
       <p>STYLISH HAIR SALON</p>
      </div>
     </div>
     <div class=\"Button clearfix grpelem\" id=\"buttonu8435\"><!-- container box -->
      <div class=\"clearfix colelem\" id=\"u8437-4\"><!-- content -->
       <p>MAKE -UP</p>
      </div>
      <div class=\"clearfix colelem\" id=\"u8436-4\"><!-- content -->
       <p>MAKE UP BY PROFESSIONAL</p>
      </div>
     </div>
    </div>
    <div class=\"clearfix colelem\" id=\"pu28353-4\"><!-- group -->
     <div class=\"clearfix grpelem\" id=\"u28353-4\"><!-- content -->
      <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc</p>
     </div>
     <div class=\"Button clearfix grpelem\" id=\"buttonu8447\"><!-- container box -->
      <div class=\"clearfix colelem\" id=\"u8449-4\"><!-- content -->
       <p>MASSAGE</p>
      </div>
      <div class=\"clearfix colelem\" id=\"u8448-4\"><!-- content -->
       <p>RELAX&nbsp; WITH OUR MASSAGE</p>
      </div>
     </div>
     <div class=\"Button clearfix grpelem\" id=\"buttonu8450\"><!-- container box -->
      <div class=\"clearfix colelem\" id=\"u8451-4\"><!-- content -->
       <p>NAILS</p>
      </div>
      <div class=\"clearfix colelem\" id=\"u8452-4\"><!-- content -->
       <p>GET YOUR PERFECT NAILS</p>
      </div>
     </div>
    </div>
    <div class=\"clearfix colelem\" id=\"pu28362\"><!-- group -->
     <div class=\"browser_width grpelem\" id=\"u28362-bw\">
      <div id=\"u28362\"><!-- column -->
       <div class=\"clearfix\" id=\"u28362_align_to_page\">
        <div class=\"fadeInUp clearfix colelem\" id=\"u9214-4\"><!-- content -->
         <p>RANDOM GALLERY</p>
        </div>
        <div class=\"clearfix colelem\" id=\"u9216-4\"><!-- content -->
         <p>OUR RANDOM GALLERY</p>
        </div>
       </div>
      </div>
     </div>
     <div class=\"PamphletWidget clearfix grpelem\" id=\"pamphletu10583\"><!-- none box -->
      <div class=\"ThumbGroup clearfix grpelem\" id=\"u10590\"><!-- none box -->
       <div class=\"popup_anchor\">
        <div class=\"Thumb popup_element\" id=\"u11077\"><!-- simple frame --></div>
       </div>
       <div class=\"popup_anchor\">
        <div class=\"Thumb popup_element\" id=\"u28385\"><!-- simple frame --></div>
       </div>
      </div>
      <div class=\"popup_anchor\" id=\"u10593popup\">
       <div class=\"ContainerGroup clearfix\" id=\"u10593\"><!-- stack box -->
        <div class=\"Container clearfix grpelem\" id=\"u11078\"><!-- group -->
         <div class=\"SlideShowWidget clearfix widget_invisible grpelem\" id=\"slideshowu25076\"><!-- none box -->
          <div class=\"popup_anchor\" id=\"u25077popup\">
           <div class=\"SlideShowContentPanel rgba-background clearfix\" id=\"u25077\"><!-- stack box -->
            <div class=\"SSSlide clip_frame clearfix grpelem\" id=\"u25082\"><!-- image -->
             <div id=\"u25082_clip\">
              <img class=\"ImageInclude position_content\" id=\"u25082_img\" data-src=\"images/i2.jpg\" src=\"images/blank.gif\" alt=\"\" data-width=\"380\" data-height=\"400\"/>
             </div>
            </div>
            <div class=\"SSSlide invi clip_frame clearfix grpelem\" id=\"u25080\"><!-- image -->
             <div id=\"u25080_clip\">
              <img class=\"ImageInclude position_content\" id=\"u25080_img\" data-src=\"images/i3.jpg\" src=\"images/blank.gif\" alt=\"\" data-width=\"380\" data-height=\"400\"/>
             </div>
            </div>
            <div class=\"SSSlide invi clip_frame clearfix grpelem\" id=\"u25078\"><!-- image -->
             <div id=\"u25078_clip\">
              <img class=\"ImageInclude position_content\" id=\"u25078_img\" data-src=\"images/i4.jpg\" src=\"images/blank.gif\" alt=\"\" data-width=\"380\" data-height=\"400\"/>
             </div>
            </div>
           </div>
          </div>
          <div class=\"popup_anchor\" id=\"u25094popup\">
           <div class=\"SSSlideLinks clearfix\" id=\"u25094\"><!-- none box -->
            <div class=\"SSSlideLink clip_frame grpelem\" id=\"u25099\"><!-- image -->
             <img class=\"block\" id=\"u25099_img\" src=\"images/i2-crop-u25099.jpg\" alt=\"\" width=\"240\" height=\"329\"/>
            </div>
            <div class=\"SSSlideLink clip_frame grpelem\" id=\"u25097\"><!-- image -->
             <img class=\"block\" id=\"u25097_img\" src=\"images/i3-crop-u25097.jpg\" alt=\"\" width=\"240\" height=\"329\"/>
            </div>
            <div class=\"SSSlideLink clip_frame grpelem\" id=\"u25095\"><!-- image -->
             <img class=\"block\" id=\"u25095_img\" src=\"images/i4-crop-u25095.jpg\" alt=\"\" width=\"240\" height=\"329\"/>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class=\"Container invi clearfix grpelem\" id=\"u28386\"><!-- group -->
         <div class=\"SlideShowWidget clearfix widget_invisible grpelem\" id=\"slideshowu28419\"><!-- none box -->
          <div class=\"popup_anchor\" id=\"u28437popup\">
           <div class=\"SlideShowContentPanel rgba-background clearfix\" id=\"u28437\"><!-- stack box -->
            <div class=\"SSSlide clip_frame clearfix grpelem\" id=\"u28442\"><!-- image -->
             <div id=\"u28442_clip\">
              <img class=\"ImageInclude position_content\" id=\"u28442_img\" data-src=\"images/g2.jpg\" src=\"images/blank.gif\" alt=\"\" data-width=\"380\" data-height=\"400\"/>
             </div>
            </div>
            <div class=\"SSSlide invi clip_frame clearfix grpelem\" id=\"u28438\"><!-- image -->
             <div id=\"u28438_clip\">
              <img class=\"ImageInclude position_content\" id=\"u28438_img\" data-src=\"images/g4.jpg\" src=\"images/blank.gif\" alt=\"\" data-width=\"380\" data-height=\"400\"/>
             </div>
            </div>
            <div class=\"SSSlide invi clip_frame clearfix grpelem\" id=\"u28440\"><!-- image -->
             <div id=\"u28440_clip\">
              <img class=\"ImageInclude position_content\" id=\"u28440_img\" data-src=\"images/a2.jpg\" src=\"images/blank.gif\" alt=\"\" data-width=\"380\" data-height=\"400\"/>
             </div>
            </div>
           </div>
          </div>
          <div class=\"popup_anchor\" id=\"u28423popup\">
           <div class=\"SSSlideLinks clearfix\" id=\"u28423\"><!-- none box -->
            <div class=\"SSSlideLink clip_frame grpelem\" id=\"u28428\"><!-- image -->
             <img class=\"block\" id=\"u28428_img\" src=\"images/g2-crop-u28428.jpg\" alt=\"\" width=\"240\" height=\"329\"/>
            </div>
            <div class=\"SSSlideLink clip_frame grpelem\" id=\"u28426\"><!-- image -->
             <img class=\"block\" id=\"u28426_img\" src=\"images/g4-crop-u28426.jpg\" alt=\"\" width=\"240\" height=\"329\"/>
            </div>
            <div class=\"SSSlideLink clip_frame grpelem\" id=\"u28424\"><!-- image -->
             <img class=\"block\" id=\"u28424_img\" src=\"images/a2-crop-u28424.jpg\" alt=\"\" width=\"240\" height=\"329\"/>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class=\"popup_anchor\">
       <div class=\"PamphletPrevButton PamphletLightboxPart popup_element clearfix\" id=\"u10588\"><!-- group -->
        <div class=\"clearfix grpelem\" id=\"u10589-4\"><!-- content -->
         <p id=\"u10589-2\">&lt;</p>
        </div>
       </div>
      </div>
      <div class=\"popup_anchor\">
       <div class=\"PamphletNextButton PamphletLightboxPart popup_element clearfix\" id=\"u10586\"><!-- group -->
        <div class=\"clearfix grpelem\" id=\"u10587-4\"><!-- content -->
         <p id=\"u10587-2\">&gt;</p>
        </div>
       </div>
      </div>
     </div>
     <div class=\"clip_frame grpelem\" id=\"u28514\"><!-- image -->
      <img class=\"block\" id=\"u28514_img\" src=\"images/line%201.png\" alt=\"\" width=\"250\" height=\"35\"/>
     </div>
    </div>
    <div class=\"browser_width colelem\" id=\"u11214-bw\">
     <div id=\"u11214\"><!-- group -->
      <div class=\"clearfix\" id=\"u11214_align_to_page\">
       <div class=\"clearfix grpelem\" id=\"u11215-4\"><!-- content -->
        <p>WOMEN &amp;&nbsp; MEN LOVE BEAUTY SALON.</p>
       </div>
      </div>
     </div>
    </div>
    <div class=\"verticalspacer\"></div>
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
          <img class=\"block\" id=\"u27948_img\" src=\"images/logo_4_1.png\" alt=\"\" width=\"235\" height=\"44\"/>
         </div>
        </div>
        <div class=\"clearfix grpelem\" id=\"pu4803-4\"><!-- column -->
         <div class=\"clearfix colelem\" id=\"u4803-4\"><!-- content -->
          <p>ADDRESS</p>
         </div>
         <div class=\"clearfix colelem\" id=\"u4802-5\"><!-- content -->
          <p id=\"u4802-2\">999&nbsp; Street Ca 90099</p>
          <p id=\"u4802-3\">&nbsp;</p>
         </div>
         <div class=\"clearfix colelem\" id=\"pbuttonu31572\"><!-- group -->
          <div class=\"Button clearfix grpelem\" id=\"buttonu31572\"><!-- container box -->
           <div class=\"grpelem\" id=\"u31573\"><!-- custom html -->
            <i class=\"fa fa-facebook\"></i>
</div>
          </div>
          <div class=\"Button clearfix grpelem\" id=\"buttonu31575\"><!-- container box -->
           <div class=\"grpelem\" id=\"u31576\"><!-- custom html -->
            <i class=\"fa fa-twitter\"></i>
</div>
          </div>
          <div class=\"Button clearfix grpelem\" id=\"buttonu31578\"><!-- container box -->
           <div class=\"grpelem\" id=\"u31579\"><!-- custom html -->
            <i class=\"fa fa-instagram\"></i>
</div>
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
          <p>?? 2015 <span id=\"u27947-2\">Beauty Salon.</span> All rights reserved.</p>
         </div>
        </div>
        <a class=\"nonblock nontext Button anim_swing clearfix grpelem\" id=\"buttonu31644\" href=\"services.html.twig#top\"><!-- container box --><div class=\"grpelem\" id=\"u31645\"><!-- custom html --><i class=\"fa fa-arrow-up\"></i></div></a>
       </div>
      </div>
     </div>
     <div class=\"browser_width grpelem\" id=\"u4819-bw\">
      <div id=\"u4819\"><!-- simple frame --></div>
     </div>
    </div>
   </div>
  </div>
  <!-- JS includes -->
  <script type=\"text/javascript\">
   if (document.location.protocol != 'https:') document.write('\\x3Cscript src=\"http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js\" type=\"text/javascript\">\\x3C/script>');
</script>
  <script type=\"text/javascript\">
   window.jQuery || document.write('\\x3Cscript src=\"scripts/jquery-1.8.3.min.js\" type=\"text/javascript\">\\x3C/script>');
</script>
  <script src=\"scripts/museutils.js?275725342\" type=\"text/javascript\"></script>
  <script src=\"scripts/jquery.musemenu.js?4042164668\" type=\"text/javascript\"></script>
  <script src=\"scripts/jquery.watch.js?3999102769\" type=\"text/javascript\"></script>
  <script src=\"scripts/webpro.js?3883484123\" type=\"text/javascript\"></script>
  <script src=\"scripts/musewpslideshow.js?360574455\" type=\"text/javascript\"></script>
  <script src=\"scripts/jquery.museoverlay.js?342093292\" type=\"text/javascript\"></script>
  <script src=\"scripts/touchswipe.js?4218319045\" type=\"text/javascript\"></script>
  <!-- Other scripts -->
  <script type=\"text/javascript\">
   \$(document).ready(function() { try {
(function(){var a={},b=function(a){if(a.match(/^rgb/))return a=a.replace(/\\s+/g,\"\").match(/([\\d\\,]+)/gi)[0].split(\",\"),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\\#/))return parseInt(a.substr(1),16);return 0};(function(){\$('link[type=\"text/css\"]').each(function(){var b=(\$(this).attr(\"href\")||\"\").match(/\\/?css\\/([\\w\\-]+\\.css)\\?(\\d+)/);b&&b[1]&&b[2]&&(a[b[1]]=b[2])})})();(function(){\$(\"body\").append('<div class=\"version\" style=\"display:none; width:1px; height:1px;\"></div>');
for(var c=\$(\".version\"),d=0;d<Muse.assets.required.length;){var f=Muse.assets.required[d],g=f.match(/([\\w\\-\\.]+)\\.(\\w+)\$/),k=g&&g[1]?g[1]:null,g=g&&g[2]?g[2]:null;switch(g.toLowerCase()){case \"css\":k=k.replace(/\\W/gi,\"_\").replace(/^([^a-z])/gi,\"_\$1\");c.addClass(k);var g=b(c.css(\"color\")),h=b(c.css(\"background-color\"));g!=0||h!=0?(Muse.assets.required.splice(d,1),\"undefined\"!=typeof a[f]&&(g!=a[f]>>>24||h!=(a[f]&16777215))&&Muse.assets.outOfDate.push(f)):d++;c.removeClass(k);break;case \"js\":k.match(/^jquery-[\\d\\.]+/gi)&&
typeof \$!=\"undefined\"?Muse.assets.required.splice(d,1):d++;break;default:throw Error(\"Unsupported file type: \"+g);}}c.remove();if(Muse.assets.outOfDate.length||Muse.assets.required.length)c=\"Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.\",(d=location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi))&&Muse.assets.outOfDate.length&&(c+=\"\\nOut of date: \"+Muse.assets.outOfDate.join(\",\")),d&&Muse.assets.required.length&&(c+=\"\\nMissing: \"+Muse.assets.required.join(\",\")),alert(c)})()})();
/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.initWidget('.MenuBar', function(elem) { return \$(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.resizeHeight()/* resize height */
Muse.Utils.initWidget('#slideshowu25076', function(elem) { \$(elem).data('widget', new WebPro.Widget.ContentSlideShow(elem, {autoPlay:false,displayInterval:3000,slideLinkStopsSlideShow:false,transitionStyle:'fading',lightboxEnabled_runtime:true,shuffle:false,transitionDuration:500,enableSwipe:true,elastic:'off',resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false})); });/* #slideshowu25076 */
Muse.Utils.initWidget('#slideshowu28419', function(elem) { \$(elem).data('widget', new WebPro.Widget.ContentSlideShow(elem, {autoPlay:false,displayInterval:3000,slideLinkStopsSlideShow:false,transitionStyle:'fading',lightboxEnabled_runtime:true,shuffle:false,transitionDuration:500,enableSwipe:true,elastic:'off',resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false})); });/* #slideshowu28419 */
Muse.Utils.initWidget('#pamphletu10583', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'click',deactivationEvent:'none',autoPlay:true,displayInterval:7000,transitionStyle:'horizontal',transitionDuration:2000,hideAllContentsFirst:false,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:7000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu10583 */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "generale/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 38,  102 => 35,  68 => 3,  58 => 2,  35 => 1,);
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
    <a class=\"nonblock nontext clip_frame pinned-colelem\" id=\"u27479\" href=\"index.html\"><!-- image --><img class=\"block\" id=\"u27479_img\" src=\"images/logo_3_1.png\" alt=\"\" width=\"236\" height=\"56\"/></a>
    <div class=\"pinned-colelem\" id=\"u31546\"><!-- custom html -->
     <i class=\"fa fa-map-marker\"></i>
</div>
    <div class=\"clearfix pinned-colelem\" id=\"u27289-4\"><!-- content -->
     <p>999&nbsp; Street Ca 90099</p>
    </div>
    <div class=\"pinned-colelem\" id=\"u31548\"><!-- custom html -->
     <i class=\"fa fa-phone\"></i>
</div>
    <div class=\"clearfix pinned-colelem\" id=\"u27288-4\"><!-- content -->
     <p>1-811-234-5678</p>
    </div>
    <div class=\"pinned-colelem\" id=\"u31550\"><!-- custom html -->
     <i class=\"fa fa-envelope\"></i>
</div>
    <div class=\"clearfix pinned-colelem\" id=\"u27290-4\"><!-- content -->
     <p>info@mail.com</p>
    </div>
    <div class=\"browser_width\" id=\"u4706-bw\">
     <div class=\"pinned-colelem\" id=\"u4706\"><!-- simple frame --></div>
    </div>
    <nav class=\"MenuBar clearfix pinned-colelem\" id=\"menuu4707\"><!-- horizontal box -->
     <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4715\"><!-- vertical box -->
      <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem\" id=\"u4716\" href=\"{{ path('index') }}\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4719-4\"><!-- content --><p>HOME</p></div></a>
     </div>
     <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4722\"><!-- vertical box -->
      <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem\" id=\"u4725\" href=\"{{ path('aboutus') }}\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4728-4\"><!-- content --><p>ABOUT US</p></div></a>
     </div>
     <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4708\"><!-- vertical box -->
      <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem\" id=\"u4711\" href=\"\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4713-4\"><!-- content --><p>SERVICES</p></div></a>
     </div>
     <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4729\"><!-- vertical box -->
      <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem\" id=\"u4730\" href=\"\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4732-4\"><!-- content --><p>GALLERY</p></div></a>
     </div>
     <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4743\"><!-- vertical box -->
      <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem\" id=\"u4746\" href=\"news.html.twig\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4748-4\"><!-- content --><p>NEWS</p></div></a>
     </div>
     <div class=\"MenuItemContainer clearfix grpelem\" id=\"u4736\"><!-- vertical box -->
      <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem\" id=\"u4739\" href=\"\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4740-4\"><!-- content --><p>CONTACT</p></div></a>
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
    <div class=\"clearfix colelem\" id=\"ppu28354-4\"><!-- group -->
     <div class=\"clearfix grpelem\" id=\"pu28354-4\"><!-- column -->
      <div class=\"fadeInUp clearfix colelem\" id=\"u28354-4\"><!-- content -->
       <p>OUR SERVICES</p>
      </div>
      <div class=\"clearfix colelem\" id=\"pu28356-4\"><!-- group -->
       <div class=\"clearfix grpelem\" id=\"u28356-4\"><!-- content -->
        <p>WHAT WE DO</p>
       </div>
       <div class=\"clip_frame grpelem\" id=\"u28517\"><!-- image -->
        <img class=\"block\" id=\"u28517_img\" src=\"images/line%202.png\" alt=\"\" width=\"250\" height=\"35\"/>
       </div>
      </div>
     </div>
     <div class=\"Button clearfix grpelem\" id=\"buttonu8441\"><!-- container box -->
      <div class=\"clearfix colelem\" id=\"u8443-4\"><!-- content -->
       <p>HAIR</p>
      </div>
      <div class=\"clearfix colelem\" id=\"u8442-4\"><!-- content -->
       <p>STYLISH HAIR SALON</p>
      </div>
     </div>
     <div class=\"Button clearfix grpelem\" id=\"buttonu8435\"><!-- container box -->
      <div class=\"clearfix colelem\" id=\"u8437-4\"><!-- content -->
       <p>MAKE -UP</p>
      </div>
      <div class=\"clearfix colelem\" id=\"u8436-4\"><!-- content -->
       <p>MAKE UP BY PROFESSIONAL</p>
      </div>
     </div>
    </div>
    <div class=\"clearfix colelem\" id=\"pu28353-4\"><!-- group -->
     <div class=\"clearfix grpelem\" id=\"u28353-4\"><!-- content -->
      <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc</p>
     </div>
     <div class=\"Button clearfix grpelem\" id=\"buttonu8447\"><!-- container box -->
      <div class=\"clearfix colelem\" id=\"u8449-4\"><!-- content -->
       <p>MASSAGE</p>
      </div>
      <div class=\"clearfix colelem\" id=\"u8448-4\"><!-- content -->
       <p>RELAX&nbsp; WITH OUR MASSAGE</p>
      </div>
     </div>
     <div class=\"Button clearfix grpelem\" id=\"buttonu8450\"><!-- container box -->
      <div class=\"clearfix colelem\" id=\"u8451-4\"><!-- content -->
       <p>NAILS</p>
      </div>
      <div class=\"clearfix colelem\" id=\"u8452-4\"><!-- content -->
       <p>GET YOUR PERFECT NAILS</p>
      </div>
     </div>
    </div>
    <div class=\"clearfix colelem\" id=\"pu28362\"><!-- group -->
     <div class=\"browser_width grpelem\" id=\"u28362-bw\">
      <div id=\"u28362\"><!-- column -->
       <div class=\"clearfix\" id=\"u28362_align_to_page\">
        <div class=\"fadeInUp clearfix colelem\" id=\"u9214-4\"><!-- content -->
         <p>RANDOM GALLERY</p>
        </div>
        <div class=\"clearfix colelem\" id=\"u9216-4\"><!-- content -->
         <p>OUR RANDOM GALLERY</p>
        </div>
       </div>
      </div>
     </div>
     <div class=\"PamphletWidget clearfix grpelem\" id=\"pamphletu10583\"><!-- none box -->
      <div class=\"ThumbGroup clearfix grpelem\" id=\"u10590\"><!-- none box -->
       <div class=\"popup_anchor\">
        <div class=\"Thumb popup_element\" id=\"u11077\"><!-- simple frame --></div>
       </div>
       <div class=\"popup_anchor\">
        <div class=\"Thumb popup_element\" id=\"u28385\"><!-- simple frame --></div>
       </div>
      </div>
      <div class=\"popup_anchor\" id=\"u10593popup\">
       <div class=\"ContainerGroup clearfix\" id=\"u10593\"><!-- stack box -->
        <div class=\"Container clearfix grpelem\" id=\"u11078\"><!-- group -->
         <div class=\"SlideShowWidget clearfix widget_invisible grpelem\" id=\"slideshowu25076\"><!-- none box -->
          <div class=\"popup_anchor\" id=\"u25077popup\">
           <div class=\"SlideShowContentPanel rgba-background clearfix\" id=\"u25077\"><!-- stack box -->
            <div class=\"SSSlide clip_frame clearfix grpelem\" id=\"u25082\"><!-- image -->
             <div id=\"u25082_clip\">
              <img class=\"ImageInclude position_content\" id=\"u25082_img\" data-src=\"images/i2.jpg\" src=\"images/blank.gif\" alt=\"\" data-width=\"380\" data-height=\"400\"/>
             </div>
            </div>
            <div class=\"SSSlide invi clip_frame clearfix grpelem\" id=\"u25080\"><!-- image -->
             <div id=\"u25080_clip\">
              <img class=\"ImageInclude position_content\" id=\"u25080_img\" data-src=\"images/i3.jpg\" src=\"images/blank.gif\" alt=\"\" data-width=\"380\" data-height=\"400\"/>
             </div>
            </div>
            <div class=\"SSSlide invi clip_frame clearfix grpelem\" id=\"u25078\"><!-- image -->
             <div id=\"u25078_clip\">
              <img class=\"ImageInclude position_content\" id=\"u25078_img\" data-src=\"images/i4.jpg\" src=\"images/blank.gif\" alt=\"\" data-width=\"380\" data-height=\"400\"/>
             </div>
            </div>
           </div>
          </div>
          <div class=\"popup_anchor\" id=\"u25094popup\">
           <div class=\"SSSlideLinks clearfix\" id=\"u25094\"><!-- none box -->
            <div class=\"SSSlideLink clip_frame grpelem\" id=\"u25099\"><!-- image -->
             <img class=\"block\" id=\"u25099_img\" src=\"images/i2-crop-u25099.jpg\" alt=\"\" width=\"240\" height=\"329\"/>
            </div>
            <div class=\"SSSlideLink clip_frame grpelem\" id=\"u25097\"><!-- image -->
             <img class=\"block\" id=\"u25097_img\" src=\"images/i3-crop-u25097.jpg\" alt=\"\" width=\"240\" height=\"329\"/>
            </div>
            <div class=\"SSSlideLink clip_frame grpelem\" id=\"u25095\"><!-- image -->
             <img class=\"block\" id=\"u25095_img\" src=\"images/i4-crop-u25095.jpg\" alt=\"\" width=\"240\" height=\"329\"/>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class=\"Container invi clearfix grpelem\" id=\"u28386\"><!-- group -->
         <div class=\"SlideShowWidget clearfix widget_invisible grpelem\" id=\"slideshowu28419\"><!-- none box -->
          <div class=\"popup_anchor\" id=\"u28437popup\">
           <div class=\"SlideShowContentPanel rgba-background clearfix\" id=\"u28437\"><!-- stack box -->
            <div class=\"SSSlide clip_frame clearfix grpelem\" id=\"u28442\"><!-- image -->
             <div id=\"u28442_clip\">
              <img class=\"ImageInclude position_content\" id=\"u28442_img\" data-src=\"images/g2.jpg\" src=\"images/blank.gif\" alt=\"\" data-width=\"380\" data-height=\"400\"/>
             </div>
            </div>
            <div class=\"SSSlide invi clip_frame clearfix grpelem\" id=\"u28438\"><!-- image -->
             <div id=\"u28438_clip\">
              <img class=\"ImageInclude position_content\" id=\"u28438_img\" data-src=\"images/g4.jpg\" src=\"images/blank.gif\" alt=\"\" data-width=\"380\" data-height=\"400\"/>
             </div>
            </div>
            <div class=\"SSSlide invi clip_frame clearfix grpelem\" id=\"u28440\"><!-- image -->
             <div id=\"u28440_clip\">
              <img class=\"ImageInclude position_content\" id=\"u28440_img\" data-src=\"images/a2.jpg\" src=\"images/blank.gif\" alt=\"\" data-width=\"380\" data-height=\"400\"/>
             </div>
            </div>
           </div>
          </div>
          <div class=\"popup_anchor\" id=\"u28423popup\">
           <div class=\"SSSlideLinks clearfix\" id=\"u28423\"><!-- none box -->
            <div class=\"SSSlideLink clip_frame grpelem\" id=\"u28428\"><!-- image -->
             <img class=\"block\" id=\"u28428_img\" src=\"images/g2-crop-u28428.jpg\" alt=\"\" width=\"240\" height=\"329\"/>
            </div>
            <div class=\"SSSlideLink clip_frame grpelem\" id=\"u28426\"><!-- image -->
             <img class=\"block\" id=\"u28426_img\" src=\"images/g4-crop-u28426.jpg\" alt=\"\" width=\"240\" height=\"329\"/>
            </div>
            <div class=\"SSSlideLink clip_frame grpelem\" id=\"u28424\"><!-- image -->
             <img class=\"block\" id=\"u28424_img\" src=\"images/a2-crop-u28424.jpg\" alt=\"\" width=\"240\" height=\"329\"/>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class=\"popup_anchor\">
       <div class=\"PamphletPrevButton PamphletLightboxPart popup_element clearfix\" id=\"u10588\"><!-- group -->
        <div class=\"clearfix grpelem\" id=\"u10589-4\"><!-- content -->
         <p id=\"u10589-2\">&lt;</p>
        </div>
       </div>
      </div>
      <div class=\"popup_anchor\">
       <div class=\"PamphletNextButton PamphletLightboxPart popup_element clearfix\" id=\"u10586\"><!-- group -->
        <div class=\"clearfix grpelem\" id=\"u10587-4\"><!-- content -->
         <p id=\"u10587-2\">&gt;</p>
        </div>
       </div>
      </div>
     </div>
     <div class=\"clip_frame grpelem\" id=\"u28514\"><!-- image -->
      <img class=\"block\" id=\"u28514_img\" src=\"images/line%201.png\" alt=\"\" width=\"250\" height=\"35\"/>
     </div>
    </div>
    <div class=\"browser_width colelem\" id=\"u11214-bw\">
     <div id=\"u11214\"><!-- group -->
      <div class=\"clearfix\" id=\"u11214_align_to_page\">
       <div class=\"clearfix grpelem\" id=\"u11215-4\"><!-- content -->
        <p>WOMEN &amp;&nbsp; MEN LOVE BEAUTY SALON.</p>
       </div>
      </div>
     </div>
    </div>
    <div class=\"verticalspacer\"></div>
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
          <img class=\"block\" id=\"u27948_img\" src=\"images/logo_4_1.png\" alt=\"\" width=\"235\" height=\"44\"/>
         </div>
        </div>
        <div class=\"clearfix grpelem\" id=\"pu4803-4\"><!-- column -->
         <div class=\"clearfix colelem\" id=\"u4803-4\"><!-- content -->
          <p>ADDRESS</p>
         </div>
         <div class=\"clearfix colelem\" id=\"u4802-5\"><!-- content -->
          <p id=\"u4802-2\">999&nbsp; Street Ca 90099</p>
          <p id=\"u4802-3\">&nbsp;</p>
         </div>
         <div class=\"clearfix colelem\" id=\"pbuttonu31572\"><!-- group -->
          <div class=\"Button clearfix grpelem\" id=\"buttonu31572\"><!-- container box -->
           <div class=\"grpelem\" id=\"u31573\"><!-- custom html -->
            <i class=\"fa fa-facebook\"></i>
</div>
          </div>
          <div class=\"Button clearfix grpelem\" id=\"buttonu31575\"><!-- container box -->
           <div class=\"grpelem\" id=\"u31576\"><!-- custom html -->
            <i class=\"fa fa-twitter\"></i>
</div>
          </div>
          <div class=\"Button clearfix grpelem\" id=\"buttonu31578\"><!-- container box -->
           <div class=\"grpelem\" id=\"u31579\"><!-- custom html -->
            <i class=\"fa fa-instagram\"></i>
</div>
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
          <p>?? 2015 <span id=\"u27947-2\">Beauty Salon.</span> All rights reserved.</p>
         </div>
        </div>
        <a class=\"nonblock nontext Button anim_swing clearfix grpelem\" id=\"buttonu31644\" href=\"services.html.twig#top\"><!-- container box --><div class=\"grpelem\" id=\"u31645\"><!-- custom html --><i class=\"fa fa-arrow-up\"></i></div></a>
       </div>
      </div>
     </div>
     <div class=\"browser_width grpelem\" id=\"u4819-bw\">
      <div id=\"u4819\"><!-- simple frame --></div>
     </div>
    </div>
   </div>
  </div>
  <!-- JS includes -->
  <script type=\"text/javascript\">
   if (document.location.protocol != 'https:') document.write('\\x3Cscript src=\"http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js\" type=\"text/javascript\">\\x3C/script>');
</script>
  <script type=\"text/javascript\">
   window.jQuery || document.write('\\x3Cscript src=\"scripts/jquery-1.8.3.min.js\" type=\"text/javascript\">\\x3C/script>');
</script>
  <script src=\"scripts/museutils.js?275725342\" type=\"text/javascript\"></script>
  <script src=\"scripts/jquery.musemenu.js?4042164668\" type=\"text/javascript\"></script>
  <script src=\"scripts/jquery.watch.js?3999102769\" type=\"text/javascript\"></script>
  <script src=\"scripts/webpro.js?3883484123\" type=\"text/javascript\"></script>
  <script src=\"scripts/musewpslideshow.js?360574455\" type=\"text/javascript\"></script>
  <script src=\"scripts/jquery.museoverlay.js?342093292\" type=\"text/javascript\"></script>
  <script src=\"scripts/touchswipe.js?4218319045\" type=\"text/javascript\"></script>
  <!-- Other scripts -->
  <script type=\"text/javascript\">
   \$(document).ready(function() { try {
(function(){var a={},b=function(a){if(a.match(/^rgb/))return a=a.replace(/\\s+/g,\"\").match(/([\\d\\,]+)/gi)[0].split(\",\"),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\\#/))return parseInt(a.substr(1),16);return 0};(function(){\$('link[type=\"text/css\"]').each(function(){var b=(\$(this).attr(\"href\")||\"\").match(/\\/?css\\/([\\w\\-]+\\.css)\\?(\\d+)/);b&&b[1]&&b[2]&&(a[b[1]]=b[2])})})();(function(){\$(\"body\").append('<div class=\"version\" style=\"display:none; width:1px; height:1px;\"></div>');
for(var c=\$(\".version\"),d=0;d<Muse.assets.required.length;){var f=Muse.assets.required[d],g=f.match(/([\\w\\-\\.]+)\\.(\\w+)\$/),k=g&&g[1]?g[1]:null,g=g&&g[2]?g[2]:null;switch(g.toLowerCase()){case \"css\":k=k.replace(/\\W/gi,\"_\").replace(/^([^a-z])/gi,\"_\$1\");c.addClass(k);var g=b(c.css(\"color\")),h=b(c.css(\"background-color\"));g!=0||h!=0?(Muse.assets.required.splice(d,1),\"undefined\"!=typeof a[f]&&(g!=a[f]>>>24||h!=(a[f]&16777215))&&Muse.assets.outOfDate.push(f)):d++;c.removeClass(k);break;case \"js\":k.match(/^jquery-[\\d\\.]+/gi)&&
typeof \$!=\"undefined\"?Muse.assets.required.splice(d,1):d++;break;default:throw Error(\"Unsupported file type: \"+g);}}c.remove();if(Muse.assets.outOfDate.length||Muse.assets.required.length)c=\"Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.\",(d=location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi))&&Muse.assets.outOfDate.length&&(c+=\"\\nOut of date: \"+Muse.assets.outOfDate.join(\",\")),d&&Muse.assets.required.length&&(c+=\"\\nMissing: \"+Muse.assets.required.join(\",\")),alert(c)})()})();
/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.initWidget('.MenuBar', function(elem) { return \$(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.resizeHeight()/* resize height */
Muse.Utils.initWidget('#slideshowu25076', function(elem) { \$(elem).data('widget', new WebPro.Widget.ContentSlideShow(elem, {autoPlay:false,displayInterval:3000,slideLinkStopsSlideShow:false,transitionStyle:'fading',lightboxEnabled_runtime:true,shuffle:false,transitionDuration:500,enableSwipe:true,elastic:'off',resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false})); });/* #slideshowu25076 */
Muse.Utils.initWidget('#slideshowu28419', function(elem) { \$(elem).data('widget', new WebPro.Widget.ContentSlideShow(elem, {autoPlay:false,displayInterval:3000,slideLinkStopsSlideShow:false,transitionStyle:'fading',lightboxEnabled_runtime:true,shuffle:false,transitionDuration:500,enableSwipe:true,elastic:'off',resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false})); });/* #slideshowu28419 */
Muse.Utils.initWidget('#pamphletu10583', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'click',deactivationEvent:'none',autoPlay:true,displayInterval:7000,transitionStyle:'horizontal',transitionDuration:2000,hideAllContentsFirst:false,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:7000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu10583 */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>

{% endblock %}


", "generale/services.html.twig", "C:\\Users\\mouhamed ahed\\PhpstormProjects\\Beauty-by-aziza\\templates\\generale\\services.html.twig");
    }
}
