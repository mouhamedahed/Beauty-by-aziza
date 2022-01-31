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

/* base.html.twig */
class __TwigTemplate_421bacdbc3e6f1f66b2dc5b74283e55c020650c687ed9eaada9ef2a40bab3a09 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
    <!DOCTYPE html>
    <html class=\"html\" lang=\"en-US\">
    <head>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <meta http-equiv=\"Content-type\" content=\"text/html;charset=UTF-8\"/>
        <meta name=\"generator\" content=\"2015.0.2.310\"/>

        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
    </head>
    <body>
        ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "
    </body>
    ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
        echo "</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            ";
        // line 12
        echo "
        <link media=\"only screen and (max-device-width: 370px)\" rel=\"alternate\" href=\"http://www.welearn2fly.com/phone/index.html\"/>
        <link media=\"only screen and (max-device-width: 960px)\" rel=\"alternate\" href=\"http://www.welearn2fly.com/tablet/index.html\"/>
        <!-- CSS -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/site_global.css?513919863\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/master_a-master.css?4246276592\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/index.css?3957583954\" id=\"pagesheet\"/>
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">

            <!--[if lt IE 9]>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"css/iefonts_index.css?4014416428\"/>
            <![endif]-->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "        ";
        // line 33
        echo "        <!-- Other scripts -->
        <script type=\"text/javascript\">
            document.documentElement.className += ' js';
            var __adobewebfontsappname__ = \"muse\";
        </script>
        <!-- JS includes -->
        <script type=\"text/javascript\">
            document.write('\\x3Cscript src=\"' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/pacifico:n4:all;raleway:n7,n4,n8,n6,n5:all;open-sans:n4,n3,i6:all.js\" type=\"text/javascript\">\\x3C/script>');
        </script>
        <!--[if lt IE 9]>
        <script src=\"scripts/html5shiv.js?4241844378\" type=\"text/javascript\"></script>
        <![endif]-->
        <!--custom head HTML-->
        <script type=\"text/javascript\">
            if(typeof Muse == \"undefined\") window.Muse = {}; window.Muse.assets = {\"required\":[\"jquery-1.8.3.min.js\", \"museutils.js\", \"jquery.watch.js\", \"webpro.js\", \"musewpslideshow.js\", \"jquery.museoverlay.js\", \"touchswipe.js\", \"jquery.musemenu.js\", \"jquery.musepolyfill.bgsize.js\", \"museredirect.js\", \"jquery.scrolleffects.js\", \"index.css\"], \"outOfDate\":[]};
        </script>

        <script src=\"scripts/museredirect.js?3899419633\" type=\"text/javascript\"></script>

        <script type=\"text/javascript\">
            Muse.Redirect.redirect('desktop', 'tablet/index.html', 'phone/index.html');
        </script>
        <!-- JS includes -->
        <script type=\"text/javascript\">
            if (document.location.protocol != 'https:') document.write('\\x3Cscript src=\"http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js\" type=\"text/javascript\">\\x3C/script>');
        </script>
        <script type=\"text/javascript\">
            window.jQuery || document.write('\\x3Cscript src=\"scripts/jquery-1.8.3.min.js\" type=\"text/javascript\">\\x3C/script>');
        </script>
        <script src=\"scripts/museutils.js?275725342\" type=\"text/javascript\"></script>
        <script src=\"scripts/jquery.musemenu.js?4042164668\" type=\"text/javascript\"></script>
        <script src=\"scripts/webpro.js?3883484123\" type=\"text/javascript\"></script>
        <script src=\"scripts/musewpslideshow.js?360574455\" type=\"text/javascript\"></script>
        <script src=\"scripts/jquery.museoverlay.js?342093292\" type=\"text/javascript\"></script>
        <script src=\"scripts/touchswipe.js?4218319045\" type=\"text/javascript\"></script>
        <script src=\"scripts/jquery.watch.js?3999102769\" type=\"text/javascript\"></script>
        <script src=\"scripts/jquery.musepolyfill.bgsize.js?185257658\" type=\"text/javascript\"></script>
        <script src=\"scripts/jquery.scrolleffects.js?206645848\" type=\"text/javascript\"></script>
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
                Muse.Utils.initWidget('#slideshowu196', function(elem) { \$(elem).data('widget', new WebPro.Widget.ContentSlideShow(elem, {heroFitting:'fillFrameProportionally',autoPlay:true,displayInterval:6000,slideLinkStopsSlideShow:false,transitionStyle:'fading',lightboxEnabled_runtime:false,shuffle:false,transitionDuration:1000,enableSwipe:false,elastic:'fullWidth',resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false})); });/* #slideshowu196 */
                Muse.Utils.resizeHeight()/* resize height */
                Muse.Utils.initWidget('#pamphletu1683', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'click',deactivationEvent:'none',autoPlay:false,displayInterval:7000,transitionStyle:'vertical',transitionDuration:2000,hideAllContentsFirst:false,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu1683 */
                \$('#u1855').registerBackgroundPositionScrollEffect([{\"speed\":[0,0],\"in\":[-Infinity,1831.4]},{\"speed\":[0,0],\"in\":[1831.4,Infinity]}]);/* scroll effect */
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
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  170 => 33,  168 => 32,  158 => 31,  140 => 28,  118 => 12,  116 => 11,  106 => 10,  87 => 5,  76 => 91,  74 => 31,  70 => 29,  68 => 28,  63 => 25,  61 => 10,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    <!DOCTYPE html>
    <html class=\"html\" lang=\"en-US\">
    <head>
        <title>{% block title %}Home{% endblock %}</title>

        <meta http-equiv=\"Content-type\" content=\"text/html;charset=UTF-8\"/>
        <meta name=\"generator\" content=\"2015.0.2.310\"/>

        {% block stylesheets %}
            {#{{ encore_entry_link_tags('app') }}#}

        <link media=\"only screen and (max-device-width: 370px)\" rel=\"alternate\" href=\"http://www.welearn2fly.com/phone/index.html\"/>
        <link media=\"only screen and (max-device-width: 960px)\" rel=\"alternate\" href=\"http://www.welearn2fly.com/tablet/index.html\"/>
        <!-- CSS -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/site_global.css?513919863\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/master_a-master.css?4246276592\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/index.css?3957583954\" id=\"pagesheet\"/>
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">

            <!--[if lt IE 9]>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"css/iefonts_index.css?4014416428\"/>
            <![endif]-->
        {% endblock %}

    </head>
    <body>
        {% block body %}{% endblock %}

    </body>
    {% block javascripts %}
        {#{{ encore_entry_script_tags('app') }}#}
        <!-- Other scripts -->
        <script type=\"text/javascript\">
            document.documentElement.className += ' js';
            var __adobewebfontsappname__ = \"muse\";
        </script>
        <!-- JS includes -->
        <script type=\"text/javascript\">
            document.write('\\x3Cscript src=\"' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/pacifico:n4:all;raleway:n7,n4,n8,n6,n5:all;open-sans:n4,n3,i6:all.js\" type=\"text/javascript\">\\x3C/script>');
        </script>
        <!--[if lt IE 9]>
        <script src=\"scripts/html5shiv.js?4241844378\" type=\"text/javascript\"></script>
        <![endif]-->
        <!--custom head HTML-->
        <script type=\"text/javascript\">
            if(typeof Muse == \"undefined\") window.Muse = {}; window.Muse.assets = {\"required\":[\"jquery-1.8.3.min.js\", \"museutils.js\", \"jquery.watch.js\", \"webpro.js\", \"musewpslideshow.js\", \"jquery.museoverlay.js\", \"touchswipe.js\", \"jquery.musemenu.js\", \"jquery.musepolyfill.bgsize.js\", \"museredirect.js\", \"jquery.scrolleffects.js\", \"index.css\"], \"outOfDate\":[]};
        </script>

        <script src=\"scripts/museredirect.js?3899419633\" type=\"text/javascript\"></script>

        <script type=\"text/javascript\">
            Muse.Redirect.redirect('desktop', 'tablet/index.html', 'phone/index.html');
        </script>
        <!-- JS includes -->
        <script type=\"text/javascript\">
            if (document.location.protocol != 'https:') document.write('\\x3Cscript src=\"http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js\" type=\"text/javascript\">\\x3C/script>');
        </script>
        <script type=\"text/javascript\">
            window.jQuery || document.write('\\x3Cscript src=\"scripts/jquery-1.8.3.min.js\" type=\"text/javascript\">\\x3C/script>');
        </script>
        <script src=\"scripts/museutils.js?275725342\" type=\"text/javascript\"></script>
        <script src=\"scripts/jquery.musemenu.js?4042164668\" type=\"text/javascript\"></script>
        <script src=\"scripts/webpro.js?3883484123\" type=\"text/javascript\"></script>
        <script src=\"scripts/musewpslideshow.js?360574455\" type=\"text/javascript\"></script>
        <script src=\"scripts/jquery.museoverlay.js?342093292\" type=\"text/javascript\"></script>
        <script src=\"scripts/touchswipe.js?4218319045\" type=\"text/javascript\"></script>
        <script src=\"scripts/jquery.watch.js?3999102769\" type=\"text/javascript\"></script>
        <script src=\"scripts/jquery.musepolyfill.bgsize.js?185257658\" type=\"text/javascript\"></script>
        <script src=\"scripts/jquery.scrolleffects.js?206645848\" type=\"text/javascript\"></script>
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
                Muse.Utils.initWidget('#slideshowu196', function(elem) { \$(elem).data('widget', new WebPro.Widget.ContentSlideShow(elem, {heroFitting:'fillFrameProportionally',autoPlay:true,displayInterval:6000,slideLinkStopsSlideShow:false,transitionStyle:'fading',lightboxEnabled_runtime:false,shuffle:false,transitionDuration:1000,enableSwipe:false,elastic:'fullWidth',resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false})); });/* #slideshowu196 */
                Muse.Utils.resizeHeight()/* resize height */
                Muse.Utils.initWidget('#pamphletu1683', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'click',deactivationEvent:'none',autoPlay:false,displayInterval:7000,transitionStyle:'vertical',transitionDuration:2000,hideAllContentsFirst:false,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu1683 */
                \$('#u1855').registerBackgroundPositionScrollEffect([{\"speed\":[0,0],\"in\":[-Infinity,1831.4]},{\"speed\":[0,0],\"in\":[1831.4,Infinity]}]);/* scroll effect */
                Muse.Utils.fullPage('#page');/* 100% height page */
                Muse.Utils.showWidgetsWhenReady();/* body */
                Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
            } catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
        </script>
    {% endblock %}
</html>
", "base.html.twig", "C:\\Users\\mouhamed ahed\\PhpstormProjects\\Beauty-by-aziza\\templates\\base.html.twig");
    }
}
