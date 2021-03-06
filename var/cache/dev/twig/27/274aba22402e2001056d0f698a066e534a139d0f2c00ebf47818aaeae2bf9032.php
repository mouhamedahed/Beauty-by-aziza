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

/* generale/news.html.twig */
class __TwigTemplate_4197136a4af853896f54b1ccad2c01b7672601583f15ecbc6bbac6626ccd268e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "generale/news.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "generale/news.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"html\" lang=\"en-US\">
 <head>

  <script type=\"text/javascript\">
   if(typeof Muse == \"undefined\") window.Muse = {}; window.Muse.assets = {\"required\":[\"jquery-1.8.3.min.js\", \"museutils.js\", \"jquery.watch.js\", \"jquery.musemenu.js\", \"jquery.musepolyfill.bgsize.js\", \"museredirect.js\", \"news.css\"], \"outOfDate\":[]};
</script>
  
  <script src=\"scripts/museredirect.js?3899419633\" type=\"text/javascript\"></script>
  
  <script type=\"text/javascript\">
   Muse.Redirect.redirect('desktop', 'tablet/news.html', 'phone/news.html');
</script>
  
  <meta http-equiv=\"Content-type\" content=\"text/html;charset=UTF-8\"/>
  <meta name=\"generator\" content=\"2015.0.2.310\"/>
  <title>News</title>
  <link media=\"only screen and (max-device-width: 370px)\" rel=\"alternate\" href=\"http://www.welearn2fly.com/phone/news.html\"/>
  <link media=\"only screen and (max-device-width: 960px)\" rel=\"alternate\" href=\"http://www.welearn2fly.com/tablet/news.html\"/>
  <!-- CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"css/site_global.css?513919863\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"css/master_a-master.css?4246276592\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"css/news.css?434055395\" id=\"pagesheet\"/>
  <!--[if lt IE 9]>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"css/iefonts_news.css?235503811\"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type=\"text/javascript\">
   document.documentElement.className += ' js';
var __adobewebfontsappname__ = \"muse\";
</script>
  <!-- JS includes -->
  <script type=\"text/javascript\">
   document.write('\\x3Cscript src=\"' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/raleway:n7,n4,n5,n6:all;open-sans:n4:all.js\" type=\"text/javascript\">\\x3C/script>');
</script>
  <!--[if lt IE 9]>
  <script src=\"scripts/html5shiv.js?4241844378\" type=\"text/javascript\"></script>
  <![endif]-->
    <!--custom head HTML-->
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
 </head>
 <body>

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
      <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem\" id=\"u4716\" href=\"index.html\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4719-4\"><!-- content --><p>HOME</p></div></a>
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
      <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem\" id=\"u4746\" href=\"news.html.twig\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4748-4\"><!-- content --><p>NEWS</p></div></a>
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
    <div class=\"fadeInUp clearfix colelem\" id=\"u28531-4\"><!-- content -->
     <p>OUR NEWS</p>
    </div>
    <div class=\"clearfix colelem\" id=\"u28532-4\"><!-- content -->
     <p>THE LATEST UPDATE FROM US</p>
    </div>
    <div class=\"clip_frame colelem\" id=\"u28533\"><!-- image -->
     <img class=\"block\" id=\"u28533_img\" src=\"images/line%201.png\" alt=\"\" width=\"250\" height=\"35\"/>
    </div>
    <div class=\"clearfix colelem\" id=\"pu28537\"><!-- group -->
     <div class=\"museBGSize clearfix grpelem\" id=\"u28537\"><!-- group -->
      <div class=\"clearfix grpelem\" id=\"u12354-4\"><!-- content -->
       <p id=\"u12354-2\">HAIRCUTS &amp; STYLING</p>
      </div>
     </div>
     <div class=\"clearfix grpelem\" id=\"pu12355-4\"><!-- column -->
      <div class=\"rounded-corners fadeIn clearfix colelem\" id=\"u12355-4\"><!-- content -->
       <p>NEW HAIR OF MEN</p>
      </div>
      <div class=\"clearfix colelem\" id=\"u12378-4\"><!-- content -->
       <p>Admin | Monday, February 23, 2015</p>
      </div>
      <div class=\"clearfix colelem\" id=\"u12374-7\"><!-- content -->
       <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt</p>
       <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse......</p>
       <p>&nbsp;</p>
      </div>
      <a class=\"nonblock nontext clearfix colelem\" id=\"u15778-4\" href=\"sample-news.html\"><!-- content --><p id=\"u15778-2\">READ MORE</p></a>
     </div>
    </div>
    <div class=\"clearfix colelem\" id=\"pu28538\"><!-- group -->
     <div class=\"museBGSize clearfix grpelem\" id=\"u28538\"><!-- group -->
      <div class=\"clearfix grpelem\" id=\"u28539-4\"><!-- content -->
       <p id=\"u28539-2\">HAIRCUTS &amp; STYLING</p>
      </div>
     </div>
     <div class=\"clearfix grpelem\" id=\"pu28542-4\"><!-- column -->
      <div class=\"fadeIn clearfix colelem\" id=\"u28542-4\"><!-- content -->
       <p>NEW HAIR ARRANGEMENT</p>
      </div>
      <div class=\"clearfix colelem\" id=\"u28540-4\"><!-- content -->
       <p>Admin | Monday, February 23, 2015</p>
      </div>
      <div class=\"clearfix colelem\" id=\"u28541-7\"><!-- content -->
       <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt</p>
       <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse......</p>
       <p>&nbsp;</p>
      </div>
      <a class=\"nonblock nontext clearfix colelem\" id=\"u28543-4\" href=\"sample-news.html\"><!-- content --><p id=\"u28543-2\">READ MORE</p></a>
     </div>
    </div>
    <div class=\"clearfix colelem\" id=\"pu28549\"><!-- group -->
     <div class=\"museBGSize clearfix grpelem\" id=\"u28549\"><!-- group -->
      <div class=\"clearfix grpelem\" id=\"u28552-4\"><!-- content -->
       <p id=\"u28552-2\">HAIRCUTS &amp; STYLING</p>
      </div>
     </div>
     <div class=\"clearfix grpelem\" id=\"pu28551-4\"><!-- column -->
      <div class=\"fadeIn clearfix colelem\" id=\"u28551-4\"><!-- content -->
       <p>NEW HAIR OF WOMAN</p>
      </div>
      <div class=\"clearfix colelem\" id=\"u28550-4\"><!-- content -->
       <p>Admin | Monday, February 23, 2015</p>
      </div>
      <div class=\"clearfix colelem\" id=\"u28547-7\"><!-- content -->
       <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt</p>
       <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse......</p>
       <p>&nbsp;</p>
      </div>
      <a class=\"nonblock nontext clearfix colelem\" id=\"u28548-4\" href=\"sample-news.html\"><!-- content --><p id=\"u28548-2\">READ MORE</p></a>
     </div>
    </div>
    <div class=\"browser_width colelem\" id=\"u28536-bw\">
     <div id=\"u28536\"><!-- simple frame --></div>
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
       </div>
      </div>
     </div>
     <div class=\"browser_width grpelem\" id=\"u4819-bw\">
      <div id=\"u4819\"><!-- simple frame --></div>
     </div>
     <a class=\"nonblock nontext Button anim_swing clearfix grpelem\" id=\"buttonu31652\" href=\"news.html.twig#top\"><!-- container box --><div class=\"grpelem\" id=\"u31653\"><!-- custom html --><i class=\"fa fa-arrow-up\"></i></div></a>
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
  <script src=\"scripts/jquery.musepolyfill.bgsize.js?185257658\" type=\"text/javascript\"></script>
  <script src=\"scripts/jquery.watch.js?3999102769\" type=\"text/javascript\"></script>
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
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "generale/news.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"html\" lang=\"en-US\">
 <head>

  <script type=\"text/javascript\">
   if(typeof Muse == \"undefined\") window.Muse = {}; window.Muse.assets = {\"required\":[\"jquery-1.8.3.min.js\", \"museutils.js\", \"jquery.watch.js\", \"jquery.musemenu.js\", \"jquery.musepolyfill.bgsize.js\", \"museredirect.js\", \"news.css\"], \"outOfDate\":[]};
</script>
  
  <script src=\"scripts/museredirect.js?3899419633\" type=\"text/javascript\"></script>
  
  <script type=\"text/javascript\">
   Muse.Redirect.redirect('desktop', 'tablet/news.html', 'phone/news.html');
</script>
  
  <meta http-equiv=\"Content-type\" content=\"text/html;charset=UTF-8\"/>
  <meta name=\"generator\" content=\"2015.0.2.310\"/>
  <title>News</title>
  <link media=\"only screen and (max-device-width: 370px)\" rel=\"alternate\" href=\"http://www.welearn2fly.com/phone/news.html\"/>
  <link media=\"only screen and (max-device-width: 960px)\" rel=\"alternate\" href=\"http://www.welearn2fly.com/tablet/news.html\"/>
  <!-- CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"css/site_global.css?513919863\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"css/master_a-master.css?4246276592\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"css/news.css?434055395\" id=\"pagesheet\"/>
  <!--[if lt IE 9]>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"css/iefonts_news.css?235503811\"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type=\"text/javascript\">
   document.documentElement.className += ' js';
var __adobewebfontsappname__ = \"muse\";
</script>
  <!-- JS includes -->
  <script type=\"text/javascript\">
   document.write('\\x3Cscript src=\"' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/raleway:n7,n4,n5,n6:all;open-sans:n4:all.js\" type=\"text/javascript\">\\x3C/script>');
</script>
  <!--[if lt IE 9]>
  <script src=\"scripts/html5shiv.js?4241844378\" type=\"text/javascript\"></script>
  <![endif]-->
    <!--custom head HTML-->
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
 </head>
 <body>

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
      <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem\" id=\"u4716\" href=\"index.html\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4719-4\"><!-- content --><p>HOME</p></div></a>
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
      <a class=\"nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem\" id=\"u4746\" href=\"news.html.twig\"><!-- horizontal box --><div class=\"MenuItemLabel NoWrap clearfix grpelem\" id=\"u4748-4\"><!-- content --><p>NEWS</p></div></a>
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
    <div class=\"fadeInUp clearfix colelem\" id=\"u28531-4\"><!-- content -->
     <p>OUR NEWS</p>
    </div>
    <div class=\"clearfix colelem\" id=\"u28532-4\"><!-- content -->
     <p>THE LATEST UPDATE FROM US</p>
    </div>
    <div class=\"clip_frame colelem\" id=\"u28533\"><!-- image -->
     <img class=\"block\" id=\"u28533_img\" src=\"images/line%201.png\" alt=\"\" width=\"250\" height=\"35\"/>
    </div>
    <div class=\"clearfix colelem\" id=\"pu28537\"><!-- group -->
     <div class=\"museBGSize clearfix grpelem\" id=\"u28537\"><!-- group -->
      <div class=\"clearfix grpelem\" id=\"u12354-4\"><!-- content -->
       <p id=\"u12354-2\">HAIRCUTS &amp; STYLING</p>
      </div>
     </div>
     <div class=\"clearfix grpelem\" id=\"pu12355-4\"><!-- column -->
      <div class=\"rounded-corners fadeIn clearfix colelem\" id=\"u12355-4\"><!-- content -->
       <p>NEW HAIR OF MEN</p>
      </div>
      <div class=\"clearfix colelem\" id=\"u12378-4\"><!-- content -->
       <p>Admin | Monday, February 23, 2015</p>
      </div>
      <div class=\"clearfix colelem\" id=\"u12374-7\"><!-- content -->
       <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt</p>
       <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse......</p>
       <p>&nbsp;</p>
      </div>
      <a class=\"nonblock nontext clearfix colelem\" id=\"u15778-4\" href=\"sample-news.html\"><!-- content --><p id=\"u15778-2\">READ MORE</p></a>
     </div>
    </div>
    <div class=\"clearfix colelem\" id=\"pu28538\"><!-- group -->
     <div class=\"museBGSize clearfix grpelem\" id=\"u28538\"><!-- group -->
      <div class=\"clearfix grpelem\" id=\"u28539-4\"><!-- content -->
       <p id=\"u28539-2\">HAIRCUTS &amp; STYLING</p>
      </div>
     </div>
     <div class=\"clearfix grpelem\" id=\"pu28542-4\"><!-- column -->
      <div class=\"fadeIn clearfix colelem\" id=\"u28542-4\"><!-- content -->
       <p>NEW HAIR ARRANGEMENT</p>
      </div>
      <div class=\"clearfix colelem\" id=\"u28540-4\"><!-- content -->
       <p>Admin | Monday, February 23, 2015</p>
      </div>
      <div class=\"clearfix colelem\" id=\"u28541-7\"><!-- content -->
       <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt</p>
       <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse......</p>
       <p>&nbsp;</p>
      </div>
      <a class=\"nonblock nontext clearfix colelem\" id=\"u28543-4\" href=\"sample-news.html\"><!-- content --><p id=\"u28543-2\">READ MORE</p></a>
     </div>
    </div>
    <div class=\"clearfix colelem\" id=\"pu28549\"><!-- group -->
     <div class=\"museBGSize clearfix grpelem\" id=\"u28549\"><!-- group -->
      <div class=\"clearfix grpelem\" id=\"u28552-4\"><!-- content -->
       <p id=\"u28552-2\">HAIRCUTS &amp; STYLING</p>
      </div>
     </div>
     <div class=\"clearfix grpelem\" id=\"pu28551-4\"><!-- column -->
      <div class=\"fadeIn clearfix colelem\" id=\"u28551-4\"><!-- content -->
       <p>NEW HAIR OF WOMAN</p>
      </div>
      <div class=\"clearfix colelem\" id=\"u28550-4\"><!-- content -->
       <p>Admin | Monday, February 23, 2015</p>
      </div>
      <div class=\"clearfix colelem\" id=\"u28547-7\"><!-- content -->
       <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt</p>
       <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse......</p>
       <p>&nbsp;</p>
      </div>
      <a class=\"nonblock nontext clearfix colelem\" id=\"u28548-4\" href=\"sample-news.html\"><!-- content --><p id=\"u28548-2\">READ MORE</p></a>
     </div>
    </div>
    <div class=\"browser_width colelem\" id=\"u28536-bw\">
     <div id=\"u28536\"><!-- simple frame --></div>
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
       </div>
      </div>
     </div>
     <div class=\"browser_width grpelem\" id=\"u4819-bw\">
      <div id=\"u4819\"><!-- simple frame --></div>
     </div>
     <a class=\"nonblock nontext Button anim_swing clearfix grpelem\" id=\"buttonu31652\" href=\"news.html.twig#top\"><!-- container box --><div class=\"grpelem\" id=\"u31653\"><!-- custom html --><i class=\"fa fa-arrow-up\"></i></div></a>
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
  <script src=\"scripts/jquery.musepolyfill.bgsize.js?185257658\" type=\"text/javascript\"></script>
  <script src=\"scripts/jquery.watch.js?3999102769\" type=\"text/javascript\"></script>
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
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
", "generale/news.html.twig", "C:\\Users\\mouhamed ahed\\PhpstormProjects\\Beauty-by-aziza\\templates\\generale\\news.html.twig");
    }
}
