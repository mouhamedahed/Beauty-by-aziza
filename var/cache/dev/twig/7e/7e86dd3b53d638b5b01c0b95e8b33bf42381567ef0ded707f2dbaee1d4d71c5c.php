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

/* generale/muse_manifest.xml */
class __TwigTemplate_8b1e9a42073bd7ac5ed1b37db534ce00f9c0ee093ace817d89c3b80d716cb234 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "generale/muse_manifest.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "generale/muse_manifest.xml"));

        // line 1
        echo "<manifest alg=\"2\" build=\"2015.0.2.310\" opt=\"false\" iceEnabled=\"true\" iceMarkupVersion=\"2\" exportTarget=\"other\" domain=\"www.welearn2fly.com\" resolutions=\"1x\" timestamp=\"1443517921797\">
  <folder name=\"css\">
    <file name=\"site_global.css\" crc=\"513919863\"/>
    <file name=\"master_a-master.css\" crc=\"4246276592\" ref=\"index:gallery:about-us:sample-news:contact:news:services\"/>
    <file name=\"index.css\" crc=\"3957583954\" ref=\"index\"/>
    <file name=\"iefonts_index.css\" crc=\"4014416428\" ref=\"index\"/>
    <file name=\"gallery.css\" crc=\"3978392733\" ref=\"gallery\"/>
    <file name=\"iefonts_gallery.css\" crc=\"158682041\" ref=\"gallery\"/>
    <file name=\"about-us.css\" crc=\"3921787085\" ref=\"about-us\"/>
    <file name=\"iefonts_about-us.css\" crc=\"4101961975\" ref=\"about-us\"/>
    <file name=\"sample-news.css\" crc=\"4100789291\" ref=\"sample-news\"/>
    <file name=\"iefonts_sample-news.css\" crc=\"4086206242\" ref=\"sample-news\"/>
    <file name=\"contact.css\" crc=\"4004713633\" ref=\"contact\"/>
    <file name=\"iefonts_contact.css\" crc=\"49247149\" ref=\"contact\"/>
    <file name=\"news.css\" crc=\"434055395\" ref=\"news\"/>
    <file name=\"iefonts_news.css\" crc=\"235503811\" ref=\"news\"/>
    <file name=\"services.css\" crc=\"249682861\" ref=\"services\"/>
    <file name=\"iefonts_services.css\" crc=\"471811033\" ref=\"services\"/>
  </folder>
  <folder name=\"fonts\">
    <file name=\"fontawesome-webfont.woff\" crc=\"4005222151\"/>
    <file name=\"fontawesome-webfont.eot\" crc=\"69270328\"/>
    <file name=\"fontawesome-webfont.svg\" crc=\"347027170\"/>
  </folder>
  <folder name=\"scripts\">
    <file name=\"jquery-1.8.3.min.js\" crc=\"196614522\" ref=\"phone>index:phone>about-us:phone>services:phone>gallery:phone>news:phone>contact:phone>sample-news:tablet>index:tablet>about-us:tablet>services:tablet>gallery:tablet>news:tablet>contact:tablet>sample-news:index:about-us:services:gallery:contact:news:sample-news\"/>
    <file name=\"museutils.js\" crc=\"275725342\" ref=\"phone>index:phone>about-us:phone>services:phone>gallery:phone>news:phone>contact:phone>sample-news:tablet>index:tablet>about-us:tablet>services:tablet>gallery:tablet>news:tablet>contact:tablet>sample-news:index:about-us:services:gallery:contact:news:sample-news\"/>
    <file name=\"jquery.scrolleffects.js\" crc=\"206645848\" ref=\"tablet>index:tablet>about-us:tablet>services:tablet>gallery:tablet>news:tablet>contact:tablet>sample-news:index:about-us\"/>
    <file name=\"jquery.watch.js\" crc=\"3999102769\" ref=\"phone>index:phone>about-us:phone>services:phone>gallery:phone>news:phone>contact:phone>sample-news:tablet>index:tablet>about-us:tablet>services:tablet>gallery:tablet>news:tablet>contact:tablet>sample-news:index:about-us:services:gallery:contact:news:sample-news\"/>
    <file name=\"jquery.musemenu.js\" crc=\"4042164668\" ref=\"phone>index:phone>about-us:phone>services:phone>gallery:phone>news:phone>contact:phone>sample-news:tablet>index:tablet>about-us:tablet>services:tablet>gallery:tablet>news:tablet>contact:tablet>sample-news:index:about-us:services:gallery:contact:news:sample-news\"/>
    <file name=\"webpro.js\" crc=\"3883484123\" ref=\"phone>index:phone>about-us:phone>services:phone>gallery:phone>news:phone>contact:phone>sample-news:tablet>index:tablet>services:tablet>gallery:tablet>contact:index:services:gallery:contact\"/>
    <file name=\"musewpdisclosure.js\" crc=\"404074387\" ref=\"phone>index:phone>about-us:phone>services:phone>gallery:phone>news:phone>contact:phone>sample-news\"/>
    <file name=\"musewpslideshow.js\" crc=\"360574455\" ref=\"phone>index:phone>gallery:tablet>index:tablet>services:tablet>gallery:index:services:gallery\"/>
    <file name=\"jquery.museoverlay.js\" crc=\"342093292\" ref=\"phone>index:phone>gallery:tablet>index:tablet>services:tablet>gallery:index:services:gallery\"/>
    <file name=\"touchswipe.js\" crc=\"4218319045\" ref=\"phone>index:phone>gallery:tablet>index:tablet>services:tablet>gallery:index:services:gallery\"/>
    <file name=\"pie.js\" crc=\"3827607177\" ref=\"phone>index:phone>gallery:tablet>index:tablet>services:tablet>gallery:index:services:gallery:news\"/>
    <file name=\"jquery.musepolyfill.bgsize.js\" crc=\"185257658\" ref=\"phone>index:phone>about-us:phone>news:phone>sample-news:tablet>index:tablet>about-us:tablet>news:tablet>sample-news:index:about-us:news:sample-news\"/>
    <file name=\"html5shiv.js\" crc=\"4241844378\" ref=\"phone>index:phone>about-us:phone>services:phone>gallery:phone>news:phone>contact:phone>sample-news:tablet>index:tablet>about-us:tablet>services:tablet>gallery:tablet>news:tablet>contact:tablet>sample-news:index:about-us:services:gallery:contact:news:sample-news\"/>
    <file name=\"form_check.php\" crc=\"3932029206\" ref=\"phone>contact:tablet>contact:contact\"/>
    <file name=\"form_throttle.php\" crc=\"314685628\" ref=\"phone>contact:tablet>contact:contact\"/>
    <file name=\"form_process.php\" crc=\"401030677\" ref=\"phone>contact:tablet>contact:contact\"/>
    <file name=\"form-u30286.php\" crc=\"4268641388\" ref=\"phone>contact\"/>
    <file name=\"museredirect.js\" crc=\"3899419633\" ref=\"tablet>index:tablet>about-us:tablet>services:tablet>gallery:tablet>news:tablet>contact:tablet>sample-news:index:about-us:services:gallery:contact:news:sample-news\"/>
    <file name=\"form-u29631.php\" crc=\"3978211828\" ref=\"tablet>contact\"/>
    <file name=\"form-u23821.php\" crc=\"95670771\" ref=\"contact\"/>
  </folder>
  <folder name=\"images\">
    <file name=\"logo_3_1.png\" crc=\"4133497541\" seo=\"true\" ref=\"phone>index:phone>about-us:phone>services:phone>gallery:phone>news:phone>contact:phone>sample-news:tablet>index:tablet>about-us:tablet>services:tablet>gallery:tablet>news:tablet>contact:tablet>sample-news:index:about-us:services:gallery:contact:news:sample-news\"/>
    <file name=\"menu icon_1_1.png\" crc=\"4271290251\" ref=\"phone>index\"/>
    <file name=\"close icon_2_1.png\" crc=\"3844757845\" ref=\"phone>index\"/>
    <file name=\"hover2.jpg\" crc=\"427629055\" ref=\"tablet>index:index\"/>
    <file name=\"blank.gif\" crc=\"4208392903\" ref=\"phone>index:phone>gallery:tablet>index:tablet>services:tablet>gallery:index:services:gallery\"/>
    <file name=\"loading.gif\" crc=\"3815509949\" ref=\"phone>index:phone>gallery:tablet>index:tablet>services:tablet>gallery:index:services:gallery\"/>
    <file name=\"line 2.png\" crc=\"4018456622\" seo=\"true\" ref=\"phone>index:phone>about-us:phone>services:tablet>index:tablet>about-us:tablet>services:index:about-us:services\"/>
    <file name=\"line 1.png\" crc=\"4033382895\" seo=\"true\" ref=\"phone>index:phone>about-us:phone>gallery:phone>news:phone>contact:tablet>index:tablet>about-us:tablet>services:tablet>gallery:tablet>news:tablet>contact:index:about-us:services:gallery:contact:news\"/>
    <file name=\"line 3.png\" crc=\"4257571884\" seo=\"true\" ref=\"phone>index:tablet>index:index\"/>
    <file name=\"u30291-17.png\" crc=\"4048920215\" ref=\"phone>contact\"/>
    <file name=\"u30291-17-r.png\" crc=\"3825218374\" ref=\"phone>contact\"/>
    <file name=\"u30291-17-m.png\" crc=\"3825218374\" ref=\"phone>contact\"/>
    <file name=\"u30291-17-fs.png\" crc=\"4048920215\" ref=\"phone>contact\"/>
    <file name=\"logo_4_1.png\" crc=\"214768511\" seo=\"true\" ref=\"tablet>index:tablet>about-us:tablet>services:tablet>gallery:tablet>news:tablet>contact:tablet>sample-news:index:about-us:services:gallery:contact:news:sample-news\"/>
    <file name=\"u29632-17.png\" crc=\"4048920215\" ref=\"tablet>contact\"/>
    <file name=\"u29632-17-r.png\" crc=\"3825218374\" ref=\"tablet>contact\"/>
    <file name=\"u29632-17-m.png\" crc=\"3825218374\" ref=\"tablet>contact\"/>
    <file name=\"u29632-17-fs.png\" crc=\"4048920215\" ref=\"tablet>contact\"/>
    <file name=\"u23840-17.png\" crc=\"4048920215\" ref=\"contact\"/>
    <file name=\"u23840-17-r.png\" crc=\"3825218374\" ref=\"contact\"/>
    <file name=\"u23840-17-m.png\" crc=\"3825218374\" ref=\"contact\"/>
    <file name=\"u23840-17-fs.png\" crc=\"4048920215\" ref=\"contact\"/>
    <file name=\"facebook.png\" crc=\"258452767\" ref=\"phone>about-us:tablet>about-us:about-us\"/>
    <file name=\"twitter.png\" crc=\"516071924\" ref=\"phone>about-us:tablet>about-us:about-us\"/>
    <file name=\"instagram.png\" crc=\"3880809162\" ref=\"phone>about-us:tablet>about-us:about-us\"/>
    <file name=\"google plus.png\" crc=\"406851409\" ref=\"phone>about-us:tablet>about-us:about-us\"/>
    <file name=\"s3.jpg\" crc=\"4133064304\" seo=\"true\" ref=\"phone>index:tablet>index:index\"/>
    <file name=\"s4.jpg\" crc=\"493468254\" seo=\"true\" ref=\"phone>index:tablet>index:index\"/>
    <file name=\"g1-u29970-fr.jpg\" crc=\"3979142784\" ref=\"phone>index:tablet>index\"/>
    <file name=\"i2-u29974-fr.jpg\" crc=\"4102817869\" ref=\"phone>index:tablet>index:index\"/>
    <file name=\"about3-u29989-fr.jpg\" crc=\"3953719350\" ref=\"phone>index:phone>about-us\"/>
    <file name=\"g2.jpg\" crc=\"445558524\" seo=\"true\" ref=\"phone>index:tablet>index:tablet>services:services\"/>
    <file name=\"g1.jpg\" crc=\"529205862\" seo=\"true\" ref=\"phone>index:tablet>index:tablet>services\"/>
    <file name=\"g3.jpg\" crc=\"3946779928\" seo=\"true\" ref=\"phone>index:tablet>index:tablet>services:index:gallery\"/>
    <file name=\"g4.jpg\" crc=\"344533151\" seo=\"true\" ref=\"phone>index:tablet>index:index:services\"/>
    <file name=\"g5.jpg\" crc=\"4194990294\" ref=\"phone>index:phone>gallery:tablet>index:tablet>gallery:index\"/>
    <file name=\"g6.jpg\" crc=\"497367853\" ref=\"phone>index:tablet>index:index\"/>
    <file name=\"i3-u30029-fr.jpg\" crc=\"70783613\" ref=\"phone>index:tablet>index:index\"/>
    <file name=\"i2-u30030-fr.jpg\" crc=\"320583909\" ref=\"phone>index:tablet>index:index\"/>
    <file name=\"i3.jpg\" crc=\"4059692287\" seo=\"true\" ref=\"phone>about-us:phone>gallery:phone>news:tablet>about-us:tablet>services:tablet>gallery:tablet>news:about-us:services:gallery:news\"/>
    <file name=\"i4.jpg\" crc=\"325574905\" seo=\"true\" ref=\"phone>about-us:phone>gallery:tablet>about-us:tablet>services:tablet>gallery:index:about-us:services:gallery\"/>
    <file name=\"a2.jpg\" crc=\"397006688\" seo=\"true\" ref=\"phone>about-us:tablet>about-us:tablet>services:about-us:services\"/>
    <file name=\"i1.jpg\" crc=\"425076499\" seo=\"true\" ref=\"phone>gallery:phone>news:tablet>gallery:tablet>news:gallery:news\"/>
    <file name=\"i2.jpg\" crc=\"513569529\" seo=\"true\" ref=\"phone>gallery:phone>news:tablet>gallery:tablet>news:services:gallery:news\"/>
    <file name=\"i5.jpg\" crc=\"289978434\" seo=\"true\" ref=\"phone>gallery:tablet>gallery:gallery\"/>
    <file name=\"g5174x183.jpg\" crc=\"385109178\" seo=\"true\" ref=\"phone>gallery\"/>
    <file name=\"i1174x183.jpg\" crc=\"228829081\" seo=\"true\" ref=\"phone>gallery\"/>
    <file name=\"i2174x183.jpg\" crc=\"58502115\" seo=\"true\" ref=\"phone>gallery\"/>
    <file name=\"i3174x183.jpg\" crc=\"3794118702\" seo=\"true\" ref=\"phone>gallery\"/>
    <file name=\"i4174x183.jpg\" crc=\"528424449\" seo=\"true\" ref=\"phone>gallery\"/>
    <file name=\"i5174x183.jpg\" crc=\"466120241\" seo=\"true\" ref=\"phone>gallery\"/>
    <file name=\"n3.jpg\" crc=\"4161983825\" ref=\"phone>sample-news:tablet>sample-news:sample-news\"/>
    <file name=\"about3.jpg\" crc=\"444458345\" ref=\"tablet>index:tablet>about-us:index:about-us\"/>
    <file name=\"g1195x205.jpg\" crc=\"4245329638\" seo=\"true\" ref=\"tablet>services\"/>
    <file name=\"g2195x205.jpg\" crc=\"4044476563\" seo=\"true\" ref=\"tablet>services\"/>
    <file name=\"g3195x205.jpg\" crc=\"4274590412\" seo=\"true\" ref=\"tablet>services\"/>
    <file name=\"a2195x205.jpg\" crc=\"4003147046\" seo=\"true\" ref=\"tablet>services\"/>
    <file name=\"i3195x205.jpg\" crc=\"258926522\" seo=\"true\" ref=\"tablet>services\"/>
    <file name=\"i4195x205.jpg\" crc=\"3905379607\" seo=\"true\" ref=\"tablet>services\"/>
    <file name=\"g5222x233.jpg\" crc=\"293494237\" seo=\"true\" ref=\"tablet>gallery\"/>
    <file name=\"i1222x233.jpg\" crc=\"4087653990\" seo=\"true\" ref=\"tablet>gallery\"/>
    <file name=\"i2222x233.jpg\" crc=\"201843163\" seo=\"true\" ref=\"tablet>gallery\"/>
    <file name=\"i3222x233.jpg\" crc=\"118809225\" seo=\"true\" ref=\"tablet>gallery\"/>
    <file name=\"i4222x233.jpg\" crc=\"185205260\" seo=\"true\" ref=\"tablet>gallery\"/>
    <file name=\"i5222x233.jpg\" crc=\"186780452\" seo=\"true\" ref=\"tablet>gallery\"/>
    <file name=\"i3-u27703-fr.jpg\" crc=\"328547710\" ref=\"index\"/>
    <file name=\"p1.jpg\" crc=\"112951930\" ref=\"index:about-us\"/>
    <file name=\"a1.jpg\" crc=\"3942693910\" ref=\"index\"/>
    <file name=\"i2-crop-u25099.jpg\" crc=\"4127129008\" ref=\"services\"/>
    <file name=\"i3-crop-u25097.jpg\" crc=\"4243230225\" ref=\"services\"/>
    <file name=\"i4-crop-u25095.jpg\" crc=\"195222980\" ref=\"services\"/>
    <file name=\"g2-crop-u28428.jpg\" crc=\"316120241\" ref=\"services\"/>
    <file name=\"g4-crop-u28426.jpg\" crc=\"3934960553\" ref=\"services\"/>
    <file name=\"a2-crop-u28424.jpg\" crc=\"3893086136\" ref=\"services\"/>
    <file name=\"i2-u28587-fr.jpg\" crc=\"526346551\" ref=\"sample-news\"/>
    <file name=\"i4-u28588-fr.jpg\" crc=\"3999966666\" ref=\"sample-news\"/>
    <file name=\"i5-u28589-fr.jpg\" crc=\"3863302518\" ref=\"sample-news\"/>
  </folder>
  <folder name=\"tablet\">
    <folder name=\"css\">
      <file name=\"master_a-master.css\" crc=\"368466291\" ref=\"tablet>services:tablet>gallery:tablet>news:tablet>contact:tablet>index:tablet>sample-news:tablet>about-us\"/>
      <file name=\"services.css\" crc=\"3959739858\" ref=\"tablet>services\"/>
      <file name=\"iefonts_services.css\" crc=\"490927809\" ref=\"tablet>services\"/>
      <file name=\"gallery.css\" crc=\"3807702668\" ref=\"tablet>gallery\"/>
      <file name=\"iefonts_gallery.css\" crc=\"3973169470\" ref=\"tablet>gallery\"/>
      <file name=\"news.css\" crc=\"278258766\" ref=\"tablet>news\"/>
      <file name=\"iefonts_news.css\" crc=\"3873654551\" ref=\"tablet>news\"/>
      <file name=\"contact.css\" crc=\"4196315024\" ref=\"tablet>contact\"/>
      <file name=\"iefonts_contact.css\" crc=\"3791688901\" ref=\"tablet>contact\"/>
      <file name=\"index.css\" crc=\"268157123\" ref=\"tablet>index\"/>
      <file name=\"iefonts_index.css\" crc=\"3969645103\" ref=\"tablet>index\"/>
      <file name=\"sample-news.css\" crc=\"4020222539\" ref=\"tablet>sample-news\"/>
      <file name=\"iefonts_sample-news.css\" crc=\"3815082893\" ref=\"tablet>sample-news\"/>
      <file name=\"about-us.css\" crc=\"140159086\" ref=\"tablet>about-us\"/>
      <file name=\"iefonts_about-us.css\" crc=\"204276116\" ref=\"tablet>about-us\"/>
    </folder>
    <file name=\"index.html\" crc=\"4247993558\" seo=\"true\" mt=\"1443517241059\" redirect=\"true\"/>
    <file name=\"about-us.html\" crc=\"10801148\" seo=\"true\" mt=\"1443517540573\" redirect=\"true\"/>
    <file name=\"services.html\" crc=\"3958604653\" seo=\"true\" mt=\"1443516880996\" redirect=\"true\"/>
    <file name=\"gallery.html\" crc=\"180036386\" seo=\"true\" mt=\"1443516921126\" redirect=\"true\"/>
    <file name=\"news.html\" crc=\"304822896\" seo=\"true\" mt=\"1443516977757\" redirect=\"true\"/>
    <file name=\"contact.html\" crc=\"495653280\" seo=\"true\" mt=\"1441129753235\" redirect=\"true\"/>
    <file name=\"sample-news.html\" crc=\"3982377309\" seo=\"true\" mt=\"1443517364068\" redirect=\"true\"/>
  </folder>
  <folder name=\"phone\">
    <folder name=\"css\">
      <file name=\"master_a-master.css\" crc=\"92962677\" ref=\"phone>contact:phone>sample-news:phone>about-us:phone>services:phone>index:phone>gallery:phone>news\"/>
      <file name=\"contact.css\" crc=\"4128871040\" ref=\"phone>contact\"/>
      <file name=\"iefonts_contact.css\" crc=\"235492413\" ref=\"phone>contact\"/>
      <file name=\"sample-news.css\" crc=\"340468551\" ref=\"phone>sample-news\"/>
      <file name=\"iefonts_sample-news.css\" crc=\"178112925\" ref=\"phone>sample-news\"/>
      <file name=\"about-us.css\" crc=\"3785903805\" ref=\"phone>about-us\"/>
      <file name=\"iefonts_about-us.css\" crc=\"11115297\" ref=\"phone>about-us\"/>
      <file name=\"services.css\" crc=\"4133164000\" ref=\"phone>services\"/>
      <file name=\"iefonts_services.css\" crc=\"3920934783\" ref=\"phone>services\"/>
      <file name=\"index.css\" crc=\"3900661936\" ref=\"phone>index\"/>
      <file name=\"iefonts_index.css\" crc=\"221524731\" ref=\"phone>index\"/>
      <file name=\"gallery.css\" crc=\"4080288917\" ref=\"phone>gallery\"/>
      <file name=\"iefonts_gallery.css\" crc=\"35482267\" ref=\"phone>gallery\"/>
      <file name=\"news.css\" crc=\"4172152789\" ref=\"phone>news\"/>
      <file name=\"iefonts_news.css\" crc=\"4013963624\" ref=\"phone>news\"/>
    </folder>
    <file name=\"index.html\" crc=\"446112937\" seo=\"true\" mt=\"1443517241061\" redirect=\"true\"/>
    <file name=\"about-us.html\" crc=\"419559566\" seo=\"true\" mt=\"1443517540574\" redirect=\"true\"/>
    <file name=\"services.html\" crc=\"3979631996\" seo=\"true\" mt=\"1443516095994\" redirect=\"true\"/>
    <file name=\"gallery.html\" crc=\"239594645\" seo=\"true\" mt=\"1443517319665\" redirect=\"true\"/>
    <file name=\"news.html\" crc=\"388243064\" seo=\"true\" mt=\"1443517347809\" redirect=\"true\"/>
    <file name=\"contact.html\" crc=\"3850225758\" seo=\"true\" mt=\"1443516095994\" redirect=\"true\"/>
    <file name=\"sample-news.html\" crc=\"3939754814\" seo=\"true\" mt=\"1443517464445\" redirect=\"true\"/>
  </folder>
  <file name=\"index.html\" crc=\"3984969208\" seo=\"true\" mt=\"1443517241063\" redirect=\"true\"/>
  <file name=\"about-us.html\" crc=\"484442647\" seo=\"true\" mt=\"1443516407832\" redirect=\"true\"/>
  <file name=\"services.html\" crc=\"3855826905\" seo=\"true\" mt=\"1443516471910\" redirect=\"true\"/>
  <file name=\"gallery.html\" crc=\"4165733333\" seo=\"true\" mt=\"1443516503833\" redirect=\"true\"/>
  <file name=\"contact.html\" crc=\"4268474223\" seo=\"true\" mt=\"1441235006455\" redirect=\"true\"/>
  <file name=\"news.html\" crc=\"488320501\" seo=\"true\" mt=\"1443516535627\" redirect=\"true\"/>
  <file name=\"sample-news.html\" crc=\"3883929237\" seo=\"true\" mt=\"1443517364066\" redirect=\"true\"/>
</manifest>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "generale/muse_manifest.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<manifest alg=\"2\" build=\"2015.0.2.310\" opt=\"false\" iceEnabled=\"true\" iceMarkupVersion=\"2\" exportTarget=\"other\" domain=\"www.welearn2fly.com\" resolutions=\"1x\" timestamp=\"1443517921797\">
  <folder name=\"css\">
    <file name=\"site_global.css\" crc=\"513919863\"/>
    <file name=\"master_a-master.css\" crc=\"4246276592\" ref=\"index:gallery:about-us:sample-news:contact:news:services\"/>
    <file name=\"index.css\" crc=\"3957583954\" ref=\"index\"/>
    <file name=\"iefonts_index.css\" crc=\"4014416428\" ref=\"index\"/>
    <file name=\"gallery.css\" crc=\"3978392733\" ref=\"gallery\"/>
    <file name=\"iefonts_gallery.css\" crc=\"158682041\" ref=\"gallery\"/>
    <file name=\"about-us.css\" crc=\"3921787085\" ref=\"about-us\"/>
    <file name=\"iefonts_about-us.css\" crc=\"4101961975\" ref=\"about-us\"/>
    <file name=\"sample-news.css\" crc=\"4100789291\" ref=\"sample-news\"/>
    <file name=\"iefonts_sample-news.css\" crc=\"4086206242\" ref=\"sample-news\"/>
    <file name=\"contact.css\" crc=\"4004713633\" ref=\"contact\"/>
    <file name=\"iefonts_contact.css\" crc=\"49247149\" ref=\"contact\"/>
    <file name=\"news.css\" crc=\"434055395\" ref=\"news\"/>
    <file name=\"iefonts_news.css\" crc=\"235503811\" ref=\"news\"/>
    <file name=\"services.css\" crc=\"249682861\" ref=\"services\"/>
    <file name=\"iefonts_services.css\" crc=\"471811033\" ref=\"services\"/>
  </folder>
  <folder name=\"fonts\">
    <file name=\"fontawesome-webfont.woff\" crc=\"4005222151\"/>
    <file name=\"fontawesome-webfont.eot\" crc=\"69270328\"/>
    <file name=\"fontawesome-webfont.svg\" crc=\"347027170\"/>
  </folder>
  <folder name=\"scripts\">
    <file name=\"jquery-1.8.3.min.js\" crc=\"196614522\" ref=\"phone>index:phone>about-us:phone>services:phone>gallery:phone>news:phone>contact:phone>sample-news:tablet>index:tablet>about-us:tablet>services:tablet>gallery:tablet>news:tablet>contact:tablet>sample-news:index:about-us:services:gallery:contact:news:sample-news\"/>
    <file name=\"museutils.js\" crc=\"275725342\" ref=\"phone>index:phone>about-us:phone>services:phone>gallery:phone>news:phone>contact:phone>sample-news:tablet>index:tablet>about-us:tablet>services:tablet>gallery:tablet>news:tablet>contact:tablet>sample-news:index:about-us:services:gallery:contact:news:sample-news\"/>
    <file name=\"jquery.scrolleffects.js\" crc=\"206645848\" ref=\"tablet>index:tablet>about-us:tablet>services:tablet>gallery:tablet>news:tablet>contact:tablet>sample-news:index:about-us\"/>
    <file name=\"jquery.watch.js\" crc=\"3999102769\" ref=\"phone>index:phone>about-us:phone>services:phone>gallery:phone>news:phone>contact:phone>sample-news:tablet>index:tablet>about-us:tablet>services:tablet>gallery:tablet>news:tablet>contact:tablet>sample-news:index:about-us:services:gallery:contact:news:sample-news\"/>
    <file name=\"jquery.musemenu.js\" crc=\"4042164668\" ref=\"phone>index:phone>about-us:phone>services:phone>gallery:phone>news:phone>contact:phone>sample-news:tablet>index:tablet>about-us:tablet>services:tablet>gallery:tablet>news:tablet>contact:tablet>sample-news:index:about-us:services:gallery:contact:news:sample-news\"/>
    <file name=\"webpro.js\" crc=\"3883484123\" ref=\"phone>index:phone>about-us:phone>services:phone>gallery:phone>news:phone>contact:phone>sample-news:tablet>index:tablet>services:tablet>gallery:tablet>contact:index:services:gallery:contact\"/>
    <file name=\"musewpdisclosure.js\" crc=\"404074387\" ref=\"phone>index:phone>about-us:phone>services:phone>gallery:phone>news:phone>contact:phone>sample-news\"/>
    <file name=\"musewpslideshow.js\" crc=\"360574455\" ref=\"phone>index:phone>gallery:tablet>index:tablet>services:tablet>gallery:index:services:gallery\"/>
    <file name=\"jquery.museoverlay.js\" crc=\"342093292\" ref=\"phone>index:phone>gallery:tablet>index:tablet>services:tablet>gallery:index:services:gallery\"/>
    <file name=\"touchswipe.js\" crc=\"4218319045\" ref=\"phone>index:phone>gallery:tablet>index:tablet>services:tablet>gallery:index:services:gallery\"/>
    <file name=\"pie.js\" crc=\"3827607177\" ref=\"phone>index:phone>gallery:tablet>index:tablet>services:tablet>gallery:index:services:gallery:news\"/>
    <file name=\"jquery.musepolyfill.bgsize.js\" crc=\"185257658\" ref=\"phone>index:phone>about-us:phone>news:phone>sample-news:tablet>index:tablet>about-us:tablet>news:tablet>sample-news:index:about-us:news:sample-news\"/>
    <file name=\"html5shiv.js\" crc=\"4241844378\" ref=\"phone>index:phone>about-us:phone>services:phone>gallery:phone>news:phone>contact:phone>sample-news:tablet>index:tablet>about-us:tablet>services:tablet>gallery:tablet>news:tablet>contact:tablet>sample-news:index:about-us:services:gallery:contact:news:sample-news\"/>
    <file name=\"form_check.php\" crc=\"3932029206\" ref=\"phone>contact:tablet>contact:contact\"/>
    <file name=\"form_throttle.php\" crc=\"314685628\" ref=\"phone>contact:tablet>contact:contact\"/>
    <file name=\"form_process.php\" crc=\"401030677\" ref=\"phone>contact:tablet>contact:contact\"/>
    <file name=\"form-u30286.php\" crc=\"4268641388\" ref=\"phone>contact\"/>
    <file name=\"museredirect.js\" crc=\"3899419633\" ref=\"tablet>index:tablet>about-us:tablet>services:tablet>gallery:tablet>news:tablet>contact:tablet>sample-news:index:about-us:services:gallery:contact:news:sample-news\"/>
    <file name=\"form-u29631.php\" crc=\"3978211828\" ref=\"tablet>contact\"/>
    <file name=\"form-u23821.php\" crc=\"95670771\" ref=\"contact\"/>
  </folder>
  <folder name=\"images\">
    <file name=\"logo_3_1.png\" crc=\"4133497541\" seo=\"true\" ref=\"phone>index:phone>about-us:phone>services:phone>gallery:phone>news:phone>contact:phone>sample-news:tablet>index:tablet>about-us:tablet>services:tablet>gallery:tablet>news:tablet>contact:tablet>sample-news:index:about-us:services:gallery:contact:news:sample-news\"/>
    <file name=\"menu icon_1_1.png\" crc=\"4271290251\" ref=\"phone>index\"/>
    <file name=\"close icon_2_1.png\" crc=\"3844757845\" ref=\"phone>index\"/>
    <file name=\"hover2.jpg\" crc=\"427629055\" ref=\"tablet>index:index\"/>
    <file name=\"blank.gif\" crc=\"4208392903\" ref=\"phone>index:phone>gallery:tablet>index:tablet>services:tablet>gallery:index:services:gallery\"/>
    <file name=\"loading.gif\" crc=\"3815509949\" ref=\"phone>index:phone>gallery:tablet>index:tablet>services:tablet>gallery:index:services:gallery\"/>
    <file name=\"line 2.png\" crc=\"4018456622\" seo=\"true\" ref=\"phone>index:phone>about-us:phone>services:tablet>index:tablet>about-us:tablet>services:index:about-us:services\"/>
    <file name=\"line 1.png\" crc=\"4033382895\" seo=\"true\" ref=\"phone>index:phone>about-us:phone>gallery:phone>news:phone>contact:tablet>index:tablet>about-us:tablet>services:tablet>gallery:tablet>news:tablet>contact:index:about-us:services:gallery:contact:news\"/>
    <file name=\"line 3.png\" crc=\"4257571884\" seo=\"true\" ref=\"phone>index:tablet>index:index\"/>
    <file name=\"u30291-17.png\" crc=\"4048920215\" ref=\"phone>contact\"/>
    <file name=\"u30291-17-r.png\" crc=\"3825218374\" ref=\"phone>contact\"/>
    <file name=\"u30291-17-m.png\" crc=\"3825218374\" ref=\"phone>contact\"/>
    <file name=\"u30291-17-fs.png\" crc=\"4048920215\" ref=\"phone>contact\"/>
    <file name=\"logo_4_1.png\" crc=\"214768511\" seo=\"true\" ref=\"tablet>index:tablet>about-us:tablet>services:tablet>gallery:tablet>news:tablet>contact:tablet>sample-news:index:about-us:services:gallery:contact:news:sample-news\"/>
    <file name=\"u29632-17.png\" crc=\"4048920215\" ref=\"tablet>contact\"/>
    <file name=\"u29632-17-r.png\" crc=\"3825218374\" ref=\"tablet>contact\"/>
    <file name=\"u29632-17-m.png\" crc=\"3825218374\" ref=\"tablet>contact\"/>
    <file name=\"u29632-17-fs.png\" crc=\"4048920215\" ref=\"tablet>contact\"/>
    <file name=\"u23840-17.png\" crc=\"4048920215\" ref=\"contact\"/>
    <file name=\"u23840-17-r.png\" crc=\"3825218374\" ref=\"contact\"/>
    <file name=\"u23840-17-m.png\" crc=\"3825218374\" ref=\"contact\"/>
    <file name=\"u23840-17-fs.png\" crc=\"4048920215\" ref=\"contact\"/>
    <file name=\"facebook.png\" crc=\"258452767\" ref=\"phone>about-us:tablet>about-us:about-us\"/>
    <file name=\"twitter.png\" crc=\"516071924\" ref=\"phone>about-us:tablet>about-us:about-us\"/>
    <file name=\"instagram.png\" crc=\"3880809162\" ref=\"phone>about-us:tablet>about-us:about-us\"/>
    <file name=\"google plus.png\" crc=\"406851409\" ref=\"phone>about-us:tablet>about-us:about-us\"/>
    <file name=\"s3.jpg\" crc=\"4133064304\" seo=\"true\" ref=\"phone>index:tablet>index:index\"/>
    <file name=\"s4.jpg\" crc=\"493468254\" seo=\"true\" ref=\"phone>index:tablet>index:index\"/>
    <file name=\"g1-u29970-fr.jpg\" crc=\"3979142784\" ref=\"phone>index:tablet>index\"/>
    <file name=\"i2-u29974-fr.jpg\" crc=\"4102817869\" ref=\"phone>index:tablet>index:index\"/>
    <file name=\"about3-u29989-fr.jpg\" crc=\"3953719350\" ref=\"phone>index:phone>about-us\"/>
    <file name=\"g2.jpg\" crc=\"445558524\" seo=\"true\" ref=\"phone>index:tablet>index:tablet>services:services\"/>
    <file name=\"g1.jpg\" crc=\"529205862\" seo=\"true\" ref=\"phone>index:tablet>index:tablet>services\"/>
    <file name=\"g3.jpg\" crc=\"3946779928\" seo=\"true\" ref=\"phone>index:tablet>index:tablet>services:index:gallery\"/>
    <file name=\"g4.jpg\" crc=\"344533151\" seo=\"true\" ref=\"phone>index:tablet>index:index:services\"/>
    <file name=\"g5.jpg\" crc=\"4194990294\" ref=\"phone>index:phone>gallery:tablet>index:tablet>gallery:index\"/>
    <file name=\"g6.jpg\" crc=\"497367853\" ref=\"phone>index:tablet>index:index\"/>
    <file name=\"i3-u30029-fr.jpg\" crc=\"70783613\" ref=\"phone>index:tablet>index:index\"/>
    <file name=\"i2-u30030-fr.jpg\" crc=\"320583909\" ref=\"phone>index:tablet>index:index\"/>
    <file name=\"i3.jpg\" crc=\"4059692287\" seo=\"true\" ref=\"phone>about-us:phone>gallery:phone>news:tablet>about-us:tablet>services:tablet>gallery:tablet>news:about-us:services:gallery:news\"/>
    <file name=\"i4.jpg\" crc=\"325574905\" seo=\"true\" ref=\"phone>about-us:phone>gallery:tablet>about-us:tablet>services:tablet>gallery:index:about-us:services:gallery\"/>
    <file name=\"a2.jpg\" crc=\"397006688\" seo=\"true\" ref=\"phone>about-us:tablet>about-us:tablet>services:about-us:services\"/>
    <file name=\"i1.jpg\" crc=\"425076499\" seo=\"true\" ref=\"phone>gallery:phone>news:tablet>gallery:tablet>news:gallery:news\"/>
    <file name=\"i2.jpg\" crc=\"513569529\" seo=\"true\" ref=\"phone>gallery:phone>news:tablet>gallery:tablet>news:services:gallery:news\"/>
    <file name=\"i5.jpg\" crc=\"289978434\" seo=\"true\" ref=\"phone>gallery:tablet>gallery:gallery\"/>
    <file name=\"g5174x183.jpg\" crc=\"385109178\" seo=\"true\" ref=\"phone>gallery\"/>
    <file name=\"i1174x183.jpg\" crc=\"228829081\" seo=\"true\" ref=\"phone>gallery\"/>
    <file name=\"i2174x183.jpg\" crc=\"58502115\" seo=\"true\" ref=\"phone>gallery\"/>
    <file name=\"i3174x183.jpg\" crc=\"3794118702\" seo=\"true\" ref=\"phone>gallery\"/>
    <file name=\"i4174x183.jpg\" crc=\"528424449\" seo=\"true\" ref=\"phone>gallery\"/>
    <file name=\"i5174x183.jpg\" crc=\"466120241\" seo=\"true\" ref=\"phone>gallery\"/>
    <file name=\"n3.jpg\" crc=\"4161983825\" ref=\"phone>sample-news:tablet>sample-news:sample-news\"/>
    <file name=\"about3.jpg\" crc=\"444458345\" ref=\"tablet>index:tablet>about-us:index:about-us\"/>
    <file name=\"g1195x205.jpg\" crc=\"4245329638\" seo=\"true\" ref=\"tablet>services\"/>
    <file name=\"g2195x205.jpg\" crc=\"4044476563\" seo=\"true\" ref=\"tablet>services\"/>
    <file name=\"g3195x205.jpg\" crc=\"4274590412\" seo=\"true\" ref=\"tablet>services\"/>
    <file name=\"a2195x205.jpg\" crc=\"4003147046\" seo=\"true\" ref=\"tablet>services\"/>
    <file name=\"i3195x205.jpg\" crc=\"258926522\" seo=\"true\" ref=\"tablet>services\"/>
    <file name=\"i4195x205.jpg\" crc=\"3905379607\" seo=\"true\" ref=\"tablet>services\"/>
    <file name=\"g5222x233.jpg\" crc=\"293494237\" seo=\"true\" ref=\"tablet>gallery\"/>
    <file name=\"i1222x233.jpg\" crc=\"4087653990\" seo=\"true\" ref=\"tablet>gallery\"/>
    <file name=\"i2222x233.jpg\" crc=\"201843163\" seo=\"true\" ref=\"tablet>gallery\"/>
    <file name=\"i3222x233.jpg\" crc=\"118809225\" seo=\"true\" ref=\"tablet>gallery\"/>
    <file name=\"i4222x233.jpg\" crc=\"185205260\" seo=\"true\" ref=\"tablet>gallery\"/>
    <file name=\"i5222x233.jpg\" crc=\"186780452\" seo=\"true\" ref=\"tablet>gallery\"/>
    <file name=\"i3-u27703-fr.jpg\" crc=\"328547710\" ref=\"index\"/>
    <file name=\"p1.jpg\" crc=\"112951930\" ref=\"index:about-us\"/>
    <file name=\"a1.jpg\" crc=\"3942693910\" ref=\"index\"/>
    <file name=\"i2-crop-u25099.jpg\" crc=\"4127129008\" ref=\"services\"/>
    <file name=\"i3-crop-u25097.jpg\" crc=\"4243230225\" ref=\"services\"/>
    <file name=\"i4-crop-u25095.jpg\" crc=\"195222980\" ref=\"services\"/>
    <file name=\"g2-crop-u28428.jpg\" crc=\"316120241\" ref=\"services\"/>
    <file name=\"g4-crop-u28426.jpg\" crc=\"3934960553\" ref=\"services\"/>
    <file name=\"a2-crop-u28424.jpg\" crc=\"3893086136\" ref=\"services\"/>
    <file name=\"i2-u28587-fr.jpg\" crc=\"526346551\" ref=\"sample-news\"/>
    <file name=\"i4-u28588-fr.jpg\" crc=\"3999966666\" ref=\"sample-news\"/>
    <file name=\"i5-u28589-fr.jpg\" crc=\"3863302518\" ref=\"sample-news\"/>
  </folder>
  <folder name=\"tablet\">
    <folder name=\"css\">
      <file name=\"master_a-master.css\" crc=\"368466291\" ref=\"tablet>services:tablet>gallery:tablet>news:tablet>contact:tablet>index:tablet>sample-news:tablet>about-us\"/>
      <file name=\"services.css\" crc=\"3959739858\" ref=\"tablet>services\"/>
      <file name=\"iefonts_services.css\" crc=\"490927809\" ref=\"tablet>services\"/>
      <file name=\"gallery.css\" crc=\"3807702668\" ref=\"tablet>gallery\"/>
      <file name=\"iefonts_gallery.css\" crc=\"3973169470\" ref=\"tablet>gallery\"/>
      <file name=\"news.css\" crc=\"278258766\" ref=\"tablet>news\"/>
      <file name=\"iefonts_news.css\" crc=\"3873654551\" ref=\"tablet>news\"/>
      <file name=\"contact.css\" crc=\"4196315024\" ref=\"tablet>contact\"/>
      <file name=\"iefonts_contact.css\" crc=\"3791688901\" ref=\"tablet>contact\"/>
      <file name=\"index.css\" crc=\"268157123\" ref=\"tablet>index\"/>
      <file name=\"iefonts_index.css\" crc=\"3969645103\" ref=\"tablet>index\"/>
      <file name=\"sample-news.css\" crc=\"4020222539\" ref=\"tablet>sample-news\"/>
      <file name=\"iefonts_sample-news.css\" crc=\"3815082893\" ref=\"tablet>sample-news\"/>
      <file name=\"about-us.css\" crc=\"140159086\" ref=\"tablet>about-us\"/>
      <file name=\"iefonts_about-us.css\" crc=\"204276116\" ref=\"tablet>about-us\"/>
    </folder>
    <file name=\"index.html\" crc=\"4247993558\" seo=\"true\" mt=\"1443517241059\" redirect=\"true\"/>
    <file name=\"about-us.html\" crc=\"10801148\" seo=\"true\" mt=\"1443517540573\" redirect=\"true\"/>
    <file name=\"services.html\" crc=\"3958604653\" seo=\"true\" mt=\"1443516880996\" redirect=\"true\"/>
    <file name=\"gallery.html\" crc=\"180036386\" seo=\"true\" mt=\"1443516921126\" redirect=\"true\"/>
    <file name=\"news.html\" crc=\"304822896\" seo=\"true\" mt=\"1443516977757\" redirect=\"true\"/>
    <file name=\"contact.html\" crc=\"495653280\" seo=\"true\" mt=\"1441129753235\" redirect=\"true\"/>
    <file name=\"sample-news.html\" crc=\"3982377309\" seo=\"true\" mt=\"1443517364068\" redirect=\"true\"/>
  </folder>
  <folder name=\"phone\">
    <folder name=\"css\">
      <file name=\"master_a-master.css\" crc=\"92962677\" ref=\"phone>contact:phone>sample-news:phone>about-us:phone>services:phone>index:phone>gallery:phone>news\"/>
      <file name=\"contact.css\" crc=\"4128871040\" ref=\"phone>contact\"/>
      <file name=\"iefonts_contact.css\" crc=\"235492413\" ref=\"phone>contact\"/>
      <file name=\"sample-news.css\" crc=\"340468551\" ref=\"phone>sample-news\"/>
      <file name=\"iefonts_sample-news.css\" crc=\"178112925\" ref=\"phone>sample-news\"/>
      <file name=\"about-us.css\" crc=\"3785903805\" ref=\"phone>about-us\"/>
      <file name=\"iefonts_about-us.css\" crc=\"11115297\" ref=\"phone>about-us\"/>
      <file name=\"services.css\" crc=\"4133164000\" ref=\"phone>services\"/>
      <file name=\"iefonts_services.css\" crc=\"3920934783\" ref=\"phone>services\"/>
      <file name=\"index.css\" crc=\"3900661936\" ref=\"phone>index\"/>
      <file name=\"iefonts_index.css\" crc=\"221524731\" ref=\"phone>index\"/>
      <file name=\"gallery.css\" crc=\"4080288917\" ref=\"phone>gallery\"/>
      <file name=\"iefonts_gallery.css\" crc=\"35482267\" ref=\"phone>gallery\"/>
      <file name=\"news.css\" crc=\"4172152789\" ref=\"phone>news\"/>
      <file name=\"iefonts_news.css\" crc=\"4013963624\" ref=\"phone>news\"/>
    </folder>
    <file name=\"index.html\" crc=\"446112937\" seo=\"true\" mt=\"1443517241061\" redirect=\"true\"/>
    <file name=\"about-us.html\" crc=\"419559566\" seo=\"true\" mt=\"1443517540574\" redirect=\"true\"/>
    <file name=\"services.html\" crc=\"3979631996\" seo=\"true\" mt=\"1443516095994\" redirect=\"true\"/>
    <file name=\"gallery.html\" crc=\"239594645\" seo=\"true\" mt=\"1443517319665\" redirect=\"true\"/>
    <file name=\"news.html\" crc=\"388243064\" seo=\"true\" mt=\"1443517347809\" redirect=\"true\"/>
    <file name=\"contact.html\" crc=\"3850225758\" seo=\"true\" mt=\"1443516095994\" redirect=\"true\"/>
    <file name=\"sample-news.html\" crc=\"3939754814\" seo=\"true\" mt=\"1443517464445\" redirect=\"true\"/>
  </folder>
  <file name=\"index.html\" crc=\"3984969208\" seo=\"true\" mt=\"1443517241063\" redirect=\"true\"/>
  <file name=\"about-us.html\" crc=\"484442647\" seo=\"true\" mt=\"1443516407832\" redirect=\"true\"/>
  <file name=\"services.html\" crc=\"3855826905\" seo=\"true\" mt=\"1443516471910\" redirect=\"true\"/>
  <file name=\"gallery.html\" crc=\"4165733333\" seo=\"true\" mt=\"1443516503833\" redirect=\"true\"/>
  <file name=\"contact.html\" crc=\"4268474223\" seo=\"true\" mt=\"1441235006455\" redirect=\"true\"/>
  <file name=\"news.html\" crc=\"488320501\" seo=\"true\" mt=\"1443516535627\" redirect=\"true\"/>
  <file name=\"sample-news.html\" crc=\"3883929237\" seo=\"true\" mt=\"1443517364066\" redirect=\"true\"/>
</manifest>", "generale/muse_manifest.xml", "C:\\Users\\mouhamed ahed\\PhpstormProjects\\Beauty-by-aziza\\templates\\generale\\muse_manifest.xml");
    }
}
