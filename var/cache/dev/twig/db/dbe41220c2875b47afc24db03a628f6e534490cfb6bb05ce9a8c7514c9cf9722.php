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

/* generale/sample-news.html */
class __TwigTemplate_c2c19741fb0cc2358fd29b40357589522473a32f99cfece4375bf9a536265872 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "generale/sample-news.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "generale/sample-news.html"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"html\" lang=\"en-US\">
 <head>

  <script type=\"text/javascript\">
   if(typeof Muse == \"undefined\") window.Muse = {}; window.Muse.assets = {\"required\":[\"jquery-1.8.3.min.js\", \"museutils.js\", \"jquery.watch.js\", \"jquery.musemenu.js\", \"jquery.musepolyfill.bgsize.js\", \"museredirect.js\", \"sample-news.css\"], \"outOfDate\":[]};
</script>
  
  <script src=\"scripts/museredirect.js?3899419633\" type=\"text/javascript\"></script>
  
  <script type=\"text/javascript\">
   Muse.Redirect.redirect('desktop', 'tablet/sample-news.html', 'phone/sample-news.html');
</script>
  
  <meta http-equiv=\"Content-type\" content=\"text/html;charset=UTF-8\"/>
  <meta name=\"generator\" content=\"2015.0.2.310\"/>
  <title>Sample News</title>
  <link media=\"only screen and (max-device-width: 370px)\" rel=\"alternate\" href=\"http://www.welearn2fly.com/phone/sample-news.html\"/>
  <link media=\"only screen and (max-device-width: 960px)\" rel=\"alternate\" href=\"http://www.welearn2fly.com/tablet/sample-news.html\"/>
  <!-- CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"css/site_global.css?513919863\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"css/master_a-master.css?4246276592\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"css/sample-news.css?4100789291\" id=\"pagesheet\"/>
  <!--[if lt IE 9]>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"css/iefonts_sample-news.css?4086206242\"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type=\"text/javascript\">
   document.documentElement.className += ' js';
var __adobewebfontsappname__ = \"muse\";
</script>
  <!-- JS includes -->
  <script type=\"text/javascript\">
   document.write('\\x3Cscript src=\"' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/raleway:n7,n5,n6:all;open-sans:n4:all.js\" type=\"text/javascript\">\\x3C/script>');
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
    <div class=\"clearfix colelem\" id=\"pu28571\"><!-- group -->
     <div class=\"picture museBGSize clearfix grpelem\" id=\"u28571\"><!-- group -->
      <div class=\"clearfix grpelem\" id=\"u15475-4\"><!-- content -->
       <p id=\"u15475-2\">SAMPLE NEWS</p>
      </div>
     </div>
     <div class=\"clearfix grpelem\" id=\"u28583\"><!-- column -->
      <div class=\"clearfix colelem\" id=\"u28585\"><!-- group -->
       <div class=\"clearfix grpelem\" id=\"u28586-4\"><!-- content -->
        <p id=\"u28586-2\">OPENING TIME</p>
       </div>
      </div>
      <div class=\"clearfix colelem\" id=\"u28584-16\"><!-- content -->
       <p>Monday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Closed</p>
       <p>Tuesday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9 am - 8 pm</p>
       <p>Wednesday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 8 pm</p>
       <p>Thursday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10 am - 8 pm</p>
       <p>Friday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 6 pm</p>
       <p>Saturday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 4 pm</p>
       <p>Sunday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 4 pm</p>
      </div>
     </div>
    </div>
    <div class=\"clearfix colelem\" id=\"pu28573-4\"><!-- group -->
     <div class=\"fadeInUp clearfix grpelem\" id=\"u28573-4\"><!-- content -->
      <p>SAMPLE NEWS PAGE</p>
     </div>
     <div class=\"fadeInUp clearfix grpelem\" id=\"u28599-4\"><!-- content -->
      <p>OUR POPULAR NEWS</p>
     </div>
    </div>
    <div class=\"clearfix colelem\" id=\"u28575-4\"><!-- content -->
     <p>Admin | Monday, February 23, 2015</p>
    </div>
    <div class=\"clearfix colelem\" id=\"pu28574-4\"><!-- group -->
     <div class=\"clearfix grpelem\" id=\"u28574-4\"><!-- content -->
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
     </div>
     <div class=\"clearfix grpelem\" id=\"pu28587\"><!-- column -->
      <div class=\"museBGSize colelem\" id=\"u28587\"><!-- simple frame --></div>
      <div class=\"museBGSize colelem\" id=\"u28588\"><!-- simple frame --></div>
     </div>
     <div class=\"clearfix grpelem\" id=\"pu28590-4\"><!-- column -->
      <div class=\"clearfix colelem\" id=\"u28590-4\"><!-- content -->
       <p>Feugait ut wisi enim ad minim veniam</p>
      </div>
      <div class=\"clearfix colelem\" id=\"pu31660\"><!-- group -->
       <div class=\"grpelem\" id=\"u31660\"><!-- custom html -->
        <i class=\"fa fa-clock-o\"></i>
</div>
       <div class=\"clearfix grpelem\" id=\"u28593-4\"><!-- content -->
        <p>Monday, February 23, 2015</p>
       </div>
      </div>
      <div class=\"clearfix colelem\" id=\"u28591-4\"><!-- content -->
       <p>Feugait ut wisi enim ad minim veniam</p>
      </div>
      <div class=\"clearfix colelem\" id=\"pu31662\"><!-- group -->
       <div class=\"grpelem\" id=\"u31662\"><!-- custom html -->
        <i class=\"fa fa-clock-o\"></i>
</div>
       <div class=\"clearfix grpelem\" id=\"u28594-4\"><!-- content -->
        <p>Monday, February 23, 2015</p>
       </div>
      </div>
     </div>
    </div>
    <div class=\"clearfix colelem\" id=\"pu28578\"><!-- group -->
     <div class=\"grpelem\" id=\"u28578\"><!-- simple frame --></div>
     <div class=\"clearfix grpelem\" id=\"u28577-4\"><!-- content -->
      <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
     </div>
     <div class=\"museBGSize grpelem\" id=\"u28589\"><!-- simple frame --></div>
     <div class=\"clearfix grpelem\" id=\"pu28592-4\"><!-- column -->
      <div class=\"clearfix colelem\" id=\"u28592-4\"><!-- content -->
       <p>Feugait ut wisi enim ad minim veniam</p>
      </div>
      <div class=\"clearfix colelem\" id=\"pu31664\"><!-- group -->
       <div class=\"grpelem\" id=\"u31664\"><!-- custom html -->
        <i class=\"fa fa-clock-o\"></i>
</div>
       <div class=\"clearfix grpelem\" id=\"u28595-4\"><!-- content -->
        <p>Monday, February 23, 2015</p>
       </div>
      </div>
     </div>
    </div>
    <div class=\"browser_width colelem\" id=\"u28572-bw\">
     <div id=\"u28572\"><!-- simple frame --></div>
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
         <div class=\"clearfix colelem\" id=\"pu27954-16\"><!-- group -->
          <div class=\"clearfix grpelem\" id=\"u27954-16\"><!-- content -->
           <p>Monday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Closed</p>
           <p>Tuesday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9 am - 8 pm</p>
           <p>Wednesday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 8 pm</p>
           <p>Thursday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10 am - 8 pm</p>
           <p>Friday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 6 pm</p>
           <p>Saturday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 4 pm</p>
           <p>Sunday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 4 pm</p>
          </div>
          <a class=\"nonblock nontext Button anim_swing clearfix grpelem\" id=\"buttonu31668\" href=\"sample-news.html#top\"><!-- container box --><div class=\"grpelem\" id=\"u31669\"><!-- custom html --><i class=\"fa fa-arrow-up\"></i></div></a>
         </div>
         <div class=\"clearfix colelem\" id=\"u27947-6\"><!-- content -->
          <p>© 2015 <span id=\"u27947-2\">Beauty Salon.</span> All rights reserved.</p>
         </div>
        </div>
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
        return "generale/sample-news.html";
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
   if(typeof Muse == \"undefined\") window.Muse = {}; window.Muse.assets = {\"required\":[\"jquery-1.8.3.min.js\", \"museutils.js\", \"jquery.watch.js\", \"jquery.musemenu.js\", \"jquery.musepolyfill.bgsize.js\", \"museredirect.js\", \"sample-news.css\"], \"outOfDate\":[]};
</script>
  
  <script src=\"scripts/museredirect.js?3899419633\" type=\"text/javascript\"></script>
  
  <script type=\"text/javascript\">
   Muse.Redirect.redirect('desktop', 'tablet/sample-news.html', 'phone/sample-news.html');
</script>
  
  <meta http-equiv=\"Content-type\" content=\"text/html;charset=UTF-8\"/>
  <meta name=\"generator\" content=\"2015.0.2.310\"/>
  <title>Sample News</title>
  <link media=\"only screen and (max-device-width: 370px)\" rel=\"alternate\" href=\"http://www.welearn2fly.com/phone/sample-news.html\"/>
  <link media=\"only screen and (max-device-width: 960px)\" rel=\"alternate\" href=\"http://www.welearn2fly.com/tablet/sample-news.html\"/>
  <!-- CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"css/site_global.css?513919863\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"css/master_a-master.css?4246276592\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"css/sample-news.css?4100789291\" id=\"pagesheet\"/>
  <!--[if lt IE 9]>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"css/iefonts_sample-news.css?4086206242\"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type=\"text/javascript\">
   document.documentElement.className += ' js';
var __adobewebfontsappname__ = \"muse\";
</script>
  <!-- JS includes -->
  <script type=\"text/javascript\">
   document.write('\\x3Cscript src=\"' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/raleway:n7,n5,n6:all;open-sans:n4:all.js\" type=\"text/javascript\">\\x3C/script>');
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
    <div class=\"clearfix colelem\" id=\"pu28571\"><!-- group -->
     <div class=\"picture museBGSize clearfix grpelem\" id=\"u28571\"><!-- group -->
      <div class=\"clearfix grpelem\" id=\"u15475-4\"><!-- content -->
       <p id=\"u15475-2\">SAMPLE NEWS</p>
      </div>
     </div>
     <div class=\"clearfix grpelem\" id=\"u28583\"><!-- column -->
      <div class=\"clearfix colelem\" id=\"u28585\"><!-- group -->
       <div class=\"clearfix grpelem\" id=\"u28586-4\"><!-- content -->
        <p id=\"u28586-2\">OPENING TIME</p>
       </div>
      </div>
      <div class=\"clearfix colelem\" id=\"u28584-16\"><!-- content -->
       <p>Monday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Closed</p>
       <p>Tuesday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9 am - 8 pm</p>
       <p>Wednesday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 8 pm</p>
       <p>Thursday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10 am - 8 pm</p>
       <p>Friday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 6 pm</p>
       <p>Saturday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 4 pm</p>
       <p>Sunday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 4 pm</p>
      </div>
     </div>
    </div>
    <div class=\"clearfix colelem\" id=\"pu28573-4\"><!-- group -->
     <div class=\"fadeInUp clearfix grpelem\" id=\"u28573-4\"><!-- content -->
      <p>SAMPLE NEWS PAGE</p>
     </div>
     <div class=\"fadeInUp clearfix grpelem\" id=\"u28599-4\"><!-- content -->
      <p>OUR POPULAR NEWS</p>
     </div>
    </div>
    <div class=\"clearfix colelem\" id=\"u28575-4\"><!-- content -->
     <p>Admin | Monday, February 23, 2015</p>
    </div>
    <div class=\"clearfix colelem\" id=\"pu28574-4\"><!-- group -->
     <div class=\"clearfix grpelem\" id=\"u28574-4\"><!-- content -->
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
     </div>
     <div class=\"clearfix grpelem\" id=\"pu28587\"><!-- column -->
      <div class=\"museBGSize colelem\" id=\"u28587\"><!-- simple frame --></div>
      <div class=\"museBGSize colelem\" id=\"u28588\"><!-- simple frame --></div>
     </div>
     <div class=\"clearfix grpelem\" id=\"pu28590-4\"><!-- column -->
      <div class=\"clearfix colelem\" id=\"u28590-4\"><!-- content -->
       <p>Feugait ut wisi enim ad minim veniam</p>
      </div>
      <div class=\"clearfix colelem\" id=\"pu31660\"><!-- group -->
       <div class=\"grpelem\" id=\"u31660\"><!-- custom html -->
        <i class=\"fa fa-clock-o\"></i>
</div>
       <div class=\"clearfix grpelem\" id=\"u28593-4\"><!-- content -->
        <p>Monday, February 23, 2015</p>
       </div>
      </div>
      <div class=\"clearfix colelem\" id=\"u28591-4\"><!-- content -->
       <p>Feugait ut wisi enim ad minim veniam</p>
      </div>
      <div class=\"clearfix colelem\" id=\"pu31662\"><!-- group -->
       <div class=\"grpelem\" id=\"u31662\"><!-- custom html -->
        <i class=\"fa fa-clock-o\"></i>
</div>
       <div class=\"clearfix grpelem\" id=\"u28594-4\"><!-- content -->
        <p>Monday, February 23, 2015</p>
       </div>
      </div>
     </div>
    </div>
    <div class=\"clearfix colelem\" id=\"pu28578\"><!-- group -->
     <div class=\"grpelem\" id=\"u28578\"><!-- simple frame --></div>
     <div class=\"clearfix grpelem\" id=\"u28577-4\"><!-- content -->
      <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
     </div>
     <div class=\"museBGSize grpelem\" id=\"u28589\"><!-- simple frame --></div>
     <div class=\"clearfix grpelem\" id=\"pu28592-4\"><!-- column -->
      <div class=\"clearfix colelem\" id=\"u28592-4\"><!-- content -->
       <p>Feugait ut wisi enim ad minim veniam</p>
      </div>
      <div class=\"clearfix colelem\" id=\"pu31664\"><!-- group -->
       <div class=\"grpelem\" id=\"u31664\"><!-- custom html -->
        <i class=\"fa fa-clock-o\"></i>
</div>
       <div class=\"clearfix grpelem\" id=\"u28595-4\"><!-- content -->
        <p>Monday, February 23, 2015</p>
       </div>
      </div>
     </div>
    </div>
    <div class=\"browser_width colelem\" id=\"u28572-bw\">
     <div id=\"u28572\"><!-- simple frame --></div>
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
         <div class=\"clearfix colelem\" id=\"pu27954-16\"><!-- group -->
          <div class=\"clearfix grpelem\" id=\"u27954-16\"><!-- content -->
           <p>Monday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Closed</p>
           <p>Tuesday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9 am - 8 pm</p>
           <p>Wednesday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 8 pm</p>
           <p>Thursday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10 am - 8 pm</p>
           <p>Friday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 6 pm</p>
           <p>Saturday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 4 pm</p>
           <p>Sunday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 am - 4 pm</p>
          </div>
          <a class=\"nonblock nontext Button anim_swing clearfix grpelem\" id=\"buttonu31668\" href=\"sample-news.html#top\"><!-- container box --><div class=\"grpelem\" id=\"u31669\"><!-- custom html --><i class=\"fa fa-arrow-up\"></i></div></a>
         </div>
         <div class=\"clearfix colelem\" id=\"u27947-6\"><!-- content -->
          <p>© 2015 <span id=\"u27947-2\">Beauty Salon.</span> All rights reserved.</p>
         </div>
        </div>
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
", "generale/sample-news.html", "C:\\Users\\mouhamed ahed\\PhpstormProjects\\Beauty-by-aziza\\templates\\generale\\sample-news.html");
    }
}
