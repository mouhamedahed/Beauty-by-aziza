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
class __TwigTemplate_9ca161727ff842c8b17b6eda2be3f976 extends Template
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
            'metas' => [$this, 'block_metas'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
    <!DOCTYPE html>
    <html class=\"html\" lang=\"en-US\">
    <head>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('metas', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "
    </head>
    <body>
        ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "
    </body>
    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metas"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metas"));

        // line 7
        echo "        <meta http-equiv=\"Content-type\" content=\"text/html;charset=UTF-8\"/>
        <meta name=\"generator\" content=\"2015.0.2.310\"/>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "
        <link media=\"only screen and (max-device-width: 370px)\" rel=\"alternate\" href=\"http://www.welearn2fly.com/phone/index.html\"/>
        <link media=\"only screen and (max-device-width: 960px)\" rel=\"alternate\" href=\"http://www.welearn2fly.com/tablet/index.html\"/>

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/site_global.css?513919863"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/master_a-master.css?4246276592"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index.css?3957583954"), "html", null, true);
        echo "\" id=\"pagesheet\"/>
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">


            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/iefonts_index.css?4014416428"), "html", null, true);
        echo "\"/>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "
        <script type=\"text/javascript\">
            document.documentElement.className += ' js';
            var __adobewebfontsappname__ = \"muse\";
        </script>

        <script type=\"text/javascript\">
            document.write('\\x3Cscript src=\"' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/pacifico:n4:all;raleway:n7,n4,n8,n6,n5:all;open-sans:n4,n3,i6:all.js\" type=\"text/javascript\">\\x3C/script>');
        </script>

        <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("scripts/html5shiv.js?4241844378"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <script type=\"text/javascript\">
            if(typeof Muse == \"undefined\") window.Muse = {}; window.Muse.assets = {\"required\":[\"jquery-1.8.3.min.js\", \"museutils.js\", \"jquery.watch.js\", \"webpro.js\", \"musewpslideshow.js\", \"jquery.museoverlay.js\", \"touchswipe.js\", \"jquery.musemenu.js\", \"jquery.musepolyfill.bgsize.js\", \"museredirect.js\", \"jquery.scrolleffects.js\", \"index.css\"], \"outOfDate\":[]};
        </script>

        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("scripts/museredirect.js?3899419633"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <script type=\"text/javascript\">
            Muse.Redirect.redirect('desktop', 'tablet/index.html', 'phone/index.html');
        </script>

        <script type=\"text/javascript\">
            if (document.location.protocol != 'https:') document.write('\\x3Cscript src=\"http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js\" type=\"text/javascript\">\\x3C/script>');
        </script>
        <script type=\"text/javascript\">
            window.jQuery || document.write('\\x3Cscript src=\"scripts/jquery-1.8.3.min.js\" type=\"text/javascript\">\\x3C/script>');
        </script>
        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("scripts/museutils.js?275725342"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("scripts/jquery.musemenu.js?4042164668"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("scripts/webpro.js?3883484123"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("scripts/musewpslideshow.js?360574455"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("scripts/jquery.museoverlay.js?342093292"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("scripts/touchswipe.js?4218319045"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("scripts/jquery.watch.js?3999102769"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("scripts/jquery.musepolyfill.bgsize.js?185257658"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("scripts/jquery.scrolleffects.js?206645848"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <script type=\"text/javascript\">
            \$(document).ready(function() { try {
                (function(){var a={},b=function(a){if(a.match(/^rgb/))return a=a.replace(/\\s+/g,\"\").match(/([\\d\\,]+)/gi)[0].split(\",\"),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\\#/))return parseInt(a.substr(1),16);return 0};(function(){\$('link[type=\"text/css\"]').each(function(){var b=(\$(this).attr(\"href\")||\"\").match(/\\/?css\\/([\\w\\-]+\\.css)\\?(\\d+)/);b&&b[1]&&b[2]&&(a[b[1]]=b[2])})})();(function(){\$(\"body\").append('<div class=\"version\" style=\"display:none; width:1px; height:1px;\"></div>');
                    for(var c=\$(\".version\"),d=0;d<Muse.assets.required.length;){var f=Muse.assets.required[d],g=f.match(/([\\w\\-\\.]+)\\.(\\w+)\$/),k=g&&g[1]?g[1]:null,g=g&&g[2]?g[2]:null;switch(g.toLowerCase()){case \"css\":k=k.replace(/\\W/gi,\"_\").replace(/^([^a-z])/gi,\"_\$1\");c.addClass(k);var g=b(c.css(\"color\")),h=b(c.css(\"background-color\"));g!=0||h!=0?(Muse.assets.required.splice(d,1),\"undefined\"!=typeof a[f]&&(g!=a[f]>>>24||h!=(a[f]&16777215))&&Muse.assets.outOfDate.push(f)):d++;c.removeClass(k);break;case \"js\":k.match(/^jquery-[\\d\\.]+/gi)&&
                    typeof \$!=\"undefined\"?Muse.assets.required.splice(d,1):d++;break;default:throw Error(\"Unsupported file type: \"+g);}}c.remove();if(Muse.assets.outOfDate.length||Muse.assets.required.length)c=\"Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.\",(d=location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi))&&Muse.assets.outOfDate.length&&(c+=\"\\nOut of date: \"+Muse.assets.outOfDate.join(\",\")),d&&Muse.assets.required.length&&(c+=\"\\nMissing: \"+Muse.assets.required.join(\",\")),alert(c)})()})();

                Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();
                Muse.Utils.prepHyperlinks(true);
                Muse.Utils.initWidget('.MenuBar', function(elem) { return \$(elem).museMenu(); });/* unifiedNavBar */
                Muse.Utils.initWidget('#slideshowu196', function(elem) { \$(elem).data('widget', new WebPro.Widget.ContentSlideShow(elem, {heroFitting:'fillFrameProportionally',autoPlay:true,displayInterval:6000,slideLinkStopsSlideShow:false,transitionStyle:'fading',lightboxEnabled_runtime:false,shuffle:false,transitionDuration:1000,enableSwipe:false,elastic:'fullWidth',resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false})); });/* #slideshowu196 */
                Muse.Utils.resizeHeight()
                Muse.Utils.initWidget('#pamphletu1683', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'click',deactivationEvent:'none',autoPlay:false,displayInterval:7000,transitionStyle:'vertical',transitionDuration:2000,hideAllContentsFirst:false,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu1683 */
                \$('#u1855').registerBackgroundPositionScrollEffect([{\"speed\":[0,0],\"in\":[-Infinity,1831.4]},{\"speed\":[0,0],\"in\":[1831.4,Infinity]}]);/* scroll effect */
                Muse.Utils.fullPage('#page');
                Muse.Utils.showWidgetsWhenReady();
                Muse.Utils.transformMarkupToFixBrowserProblems();
            } catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
        </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  268 => 67,  264 => 66,  260 => 65,  256 => 64,  252 => 63,  248 => 62,  244 => 61,  240 => 60,  236 => 59,  221 => 47,  212 => 41,  200 => 31,  190 => 30,  172 => 27,  159 => 21,  152 => 17,  148 => 16,  144 => 15,  138 => 11,  128 => 10,  116 => 7,  106 => 6,  87 => 5,  76 => 88,  74 => 30,  70 => 28,  68 => 27,  63 => 24,  60 => 10,  58 => 6,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    <!DOCTYPE html>
    <html class=\"html\" lang=\"en-US\">
    <head>
        <title>{% block title %}Home{% endblock %}</title>
        {% block metas %}
        <meta http-equiv=\"Content-type\" content=\"text/html;charset=UTF-8\"/>
        <meta name=\"generator\" content=\"2015.0.2.310\"/>
        {% endblock %}
        {% block stylesheets %}

        <link media=\"only screen and (max-device-width: 370px)\" rel=\"alternate\" href=\"http://www.welearn2fly.com/phone/index.html\"/>
        <link media=\"only screen and (max-device-width: 960px)\" rel=\"alternate\" href=\"http://www.welearn2fly.com/tablet/index.html\"/>

        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/site_global.css?513919863') }}\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/master_a-master.css?4246276592') }}\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/index.css?3957583954') }}\" id=\"pagesheet\"/>
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">


            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/iefonts_index.css?4014416428') }}\"/>

        {% endblock %}

    </head>
    <body>
        {% block body %}{% endblock %}

    </body>
    {% block javascripts %}

        <script type=\"text/javascript\">
            document.documentElement.className += ' js';
            var __adobewebfontsappname__ = \"muse\";
        </script>

        <script type=\"text/javascript\">
            document.write('\\x3Cscript src=\"' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/pacifico:n4:all;raleway:n7,n4,n8,n6,n5:all;open-sans:n4,n3,i6:all.js\" type=\"text/javascript\">\\x3C/script>');
        </script>

        <script src=\"{{ asset('scripts/html5shiv.js?4241844378') }}\" type=\"text/javascript\"></script>

        <script type=\"text/javascript\">
            if(typeof Muse == \"undefined\") window.Muse = {}; window.Muse.assets = {\"required\":[\"jquery-1.8.3.min.js\", \"museutils.js\", \"jquery.watch.js\", \"webpro.js\", \"musewpslideshow.js\", \"jquery.museoverlay.js\", \"touchswipe.js\", \"jquery.musemenu.js\", \"jquery.musepolyfill.bgsize.js\", \"museredirect.js\", \"jquery.scrolleffects.js\", \"index.css\"], \"outOfDate\":[]};
        </script>

        <script src=\"{{ asset('scripts/museredirect.js?3899419633') }}\" type=\"text/javascript\"></script>

        <script type=\"text/javascript\">
            Muse.Redirect.redirect('desktop', 'tablet/index.html', 'phone/index.html');
        </script>

        <script type=\"text/javascript\">
            if (document.location.protocol != 'https:') document.write('\\x3Cscript src=\"http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js\" type=\"text/javascript\">\\x3C/script>');
        </script>
        <script type=\"text/javascript\">
            window.jQuery || document.write('\\x3Cscript src=\"scripts/jquery-1.8.3.min.js\" type=\"text/javascript\">\\x3C/script>');
        </script>
        <script src=\"{{ asset('scripts/museutils.js?275725342') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('scripts/jquery.musemenu.js?4042164668') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('scripts/webpro.js?3883484123') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('scripts/musewpslideshow.js?360574455') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('scripts/jquery.museoverlay.js?342093292') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('scripts/touchswipe.js?4218319045') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('scripts/jquery.watch.js?3999102769') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('scripts/jquery.musepolyfill.bgsize.js?185257658') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('scripts/jquery.scrolleffects.js?206645848') }}\" type=\"text/javascript\"></script>

        <script type=\"text/javascript\">
            \$(document).ready(function() { try {
                (function(){var a={},b=function(a){if(a.match(/^rgb/))return a=a.replace(/\\s+/g,\"\").match(/([\\d\\,]+)/gi)[0].split(\",\"),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\\#/))return parseInt(a.substr(1),16);return 0};(function(){\$('link[type=\"text/css\"]').each(function(){var b=(\$(this).attr(\"href\")||\"\").match(/\\/?css\\/([\\w\\-]+\\.css)\\?(\\d+)/);b&&b[1]&&b[2]&&(a[b[1]]=b[2])})})();(function(){\$(\"body\").append('<div class=\"version\" style=\"display:none; width:1px; height:1px;\"></div>');
                    for(var c=\$(\".version\"),d=0;d<Muse.assets.required.length;){var f=Muse.assets.required[d],g=f.match(/([\\w\\-\\.]+)\\.(\\w+)\$/),k=g&&g[1]?g[1]:null,g=g&&g[2]?g[2]:null;switch(g.toLowerCase()){case \"css\":k=k.replace(/\\W/gi,\"_\").replace(/^([^a-z])/gi,\"_\$1\");c.addClass(k);var g=b(c.css(\"color\")),h=b(c.css(\"background-color\"));g!=0||h!=0?(Muse.assets.required.splice(d,1),\"undefined\"!=typeof a[f]&&(g!=a[f]>>>24||h!=(a[f]&16777215))&&Muse.assets.outOfDate.push(f)):d++;c.removeClass(k);break;case \"js\":k.match(/^jquery-[\\d\\.]+/gi)&&
                    typeof \$!=\"undefined\"?Muse.assets.required.splice(d,1):d++;break;default:throw Error(\"Unsupported file type: \"+g);}}c.remove();if(Muse.assets.outOfDate.length||Muse.assets.required.length)c=\"Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.\",(d=location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi))&&Muse.assets.outOfDate.length&&(c+=\"\\nOut of date: \"+Muse.assets.outOfDate.join(\",\")),d&&Muse.assets.required.length&&(c+=\"\\nMissing: \"+Muse.assets.required.join(\",\")),alert(c)})()})();

                Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();
                Muse.Utils.prepHyperlinks(true);
                Muse.Utils.initWidget('.MenuBar', function(elem) { return \$(elem).museMenu(); });/* unifiedNavBar */
                Muse.Utils.initWidget('#slideshowu196', function(elem) { \$(elem).data('widget', new WebPro.Widget.ContentSlideShow(elem, {heroFitting:'fillFrameProportionally',autoPlay:true,displayInterval:6000,slideLinkStopsSlideShow:false,transitionStyle:'fading',lightboxEnabled_runtime:false,shuffle:false,transitionDuration:1000,enableSwipe:false,elastic:'fullWidth',resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false})); });/* #slideshowu196 */
                Muse.Utils.resizeHeight()
                Muse.Utils.initWidget('#pamphletu1683', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'click',deactivationEvent:'none',autoPlay:false,displayInterval:7000,transitionStyle:'vertical',transitionDuration:2000,hideAllContentsFirst:false,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu1683 */
                \$('#u1855').registerBackgroundPositionScrollEffect([{\"speed\":[0,0],\"in\":[-Infinity,1831.4]},{\"speed\":[0,0],\"in\":[1831.4,Infinity]}]);/* scroll effect */
                Muse.Utils.fullPage('#page');
                Muse.Utils.showWidgetsWhenReady();
                Muse.Utils.transformMarkupToFixBrowserProblems();
            } catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
        </script>
    {% endblock %}
</html>
", "base.html.twig", "C:\\Users\\mouhamed ahed\\PhpstormProjects\\Beauty-by-aziza\\templates\\base.html.twig");
    }
}
