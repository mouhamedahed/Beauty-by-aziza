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

/* sitemap.xml */
class __TwigTemplate_f20b270a27a0b2846bd8730404ad60dd88eb25d876a495e63b85ec90bc7eb183 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\">
  <url>
    <loc>http://www.welearn2fly.com/images/logo_3_1.png</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/line%202.png</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/line%201.png</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/line%203.png</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/logo_4_1.png</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/s3.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/s4.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/g2.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/g1.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/g3.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/g4.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i3.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i4.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/a2.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i1.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i2.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i5.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/g5174x183.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i1174x183.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i2174x183.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i3174x183.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i4174x183.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i5174x183.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/g1195x205.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/g2195x205.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/g3195x205.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/a2195x205.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i3195x205.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i4195x205.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/g5222x233.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i1222x233.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i2222x233.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i3222x233.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i4222x233.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i5222x233.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/index.html</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 370px)\" href=\"http://www.welearn2fly.com/phone/index.html\"/>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 960px)\" href=\"http://www.welearn2fly.com/tablet/index.html\"/>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/about-us.html.twig</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 370px)\" href=\"http://www.welearn2fly.com/phone/about-us.html.twig\"/>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 960px)\" href=\"http://www.welearn2fly.com/tablet/about-us.html.twig\"/>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/services.html.twig</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 370px)\" href=\"http://www.welearn2fly.com/phone/services.html.twig\"/>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 960px)\" href=\"http://www.welearn2fly.com/tablet/services.html.twig\"/>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/gallery.html.twig</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 370px)\" href=\"http://www.welearn2fly.com/phone/gallery.html.twig\"/>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 960px)\" href=\"http://www.welearn2fly.com/tablet/gallery.html.twig\"/>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/contact.html.twig</loc>
    <lastmod>2015-09-03</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 370px)\" href=\"http://www.welearn2fly.com/phone/contact.html.twig\"/>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 960px)\" href=\"http://www.welearn2fly.com/tablet/contact.html.twig\"/>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/news.html.twig</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 370px)\" href=\"http://www.welearn2fly.com/phone/news.html.twig\"/>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 960px)\" href=\"http://www.welearn2fly.com/tablet/news.html.twig\"/>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/sample-news.html.twig</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 370px)\" href=\"http://www.welearn2fly.com/phone/sample-news.html.twig\"/>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 960px)\" href=\"http://www.welearn2fly.com/tablet/sample-news.html.twig\"/>
  </url>
</urlset>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "sitemap.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\">
  <url>
    <loc>http://www.welearn2fly.com/images/logo_3_1.png</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/line%202.png</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/line%201.png</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/line%203.png</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/logo_4_1.png</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/s3.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/s4.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/g2.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/g1.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/g3.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/g4.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i3.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i4.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/a2.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i1.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i2.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i5.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/g5174x183.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i1174x183.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i2174x183.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i3174x183.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i4174x183.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i5174x183.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/g1195x205.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/g2195x205.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/g3195x205.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/a2195x205.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i3195x205.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i4195x205.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/g5222x233.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i1222x233.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i2222x233.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i3222x233.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i4222x233.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/images/i5222x233.jpg</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/index.html</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 370px)\" href=\"http://www.welearn2fly.com/phone/index.html\"/>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 960px)\" href=\"http://www.welearn2fly.com/tablet/index.html\"/>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/about-us.html.twig</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 370px)\" href=\"http://www.welearn2fly.com/phone/about-us.html.twig\"/>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 960px)\" href=\"http://www.welearn2fly.com/tablet/about-us.html.twig\"/>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/services.html.twig</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 370px)\" href=\"http://www.welearn2fly.com/phone/services.html.twig\"/>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 960px)\" href=\"http://www.welearn2fly.com/tablet/services.html.twig\"/>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/gallery.html.twig</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 370px)\" href=\"http://www.welearn2fly.com/phone/gallery.html.twig\"/>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 960px)\" href=\"http://www.welearn2fly.com/tablet/gallery.html.twig\"/>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/contact.html.twig</loc>
    <lastmod>2015-09-03</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 370px)\" href=\"http://www.welearn2fly.com/phone/contact.html.twig\"/>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 960px)\" href=\"http://www.welearn2fly.com/tablet/contact.html.twig\"/>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/news.html.twig</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 370px)\" href=\"http://www.welearn2fly.com/phone/news.html.twig\"/>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 960px)\" href=\"http://www.welearn2fly.com/tablet/news.html.twig\"/>
  </url>
  <url>
    <loc>http://www.welearn2fly.com/sample-news.html.twig</loc>
    <lastmod>2015-09-29</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 370px)\" href=\"http://www.welearn2fly.com/phone/sample-news.html.twig\"/>
    <xhtml:link rel=\"alternate\" media=\"only screen and (max-device-width: 960px)\" href=\"http://www.welearn2fly.com/tablet/sample-news.html.twig\"/>
  </url>
</urlset>", "sitemap.xml", "C:\\Users\\mouhamed ahed\\PhpstormProjects\\Beauty-by-aziza\\templates\\sitemap.xml");
    }
}
