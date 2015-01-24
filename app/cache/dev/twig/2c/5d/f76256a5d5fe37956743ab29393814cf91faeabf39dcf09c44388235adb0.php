<?php

/* GTaxiTaxiDriverBundle:Taxi:layout.html.twig */
class __TwigTemplate_2c5df76256a5d5fe37956743ab29393814cf91faeabf39dcf09c44388235adb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
              ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 59
        echo "\t</head>
\t<body class=\"page1\" id=\"top\">
            ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 260
        echo "\t</body>
</html>




";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "\t\t<title>";
        $this->displayBlock('title', $context, $blocks);
        echo "  </title>
\t\t<meta charset=\"utf-8\">
\t\t<meta name = \"format-detection\" content = \"telephone=no\" />
\t\t<link rel=\"icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\">
\t\t<link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("booking/css/booking.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/camera.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
\t\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-migrate-1.2.1.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/superfish.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.totop.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.equalheights.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mobilemenu.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/owl.carousel.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/camera.js"), "html", null, true);
        echo "\"></script>
\t\t<!--[if (gt IE 9)|!(IE)]><!-->
\t\t<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mobile.customized.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!--<![endif]-->
\t\t<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("booking/js/booking.js"), "html", null, true);
        echo "\"></script>
\t\t<script>
\t\t\t\$(document).ready(function(){
\t\t\t\tjQuery('#camera_wrap').camera({
\t\t\t\t\tloader: false,
\t\t\t\t\tpagination: false ,
\t\t\t\t\tminHeight: '444',
\t\t\t\t\tthumbnails: false,
\t\t\t\t\theight: '28.28125%',
\t\t\t\t\tcaption: true,
\t\t\t\t\tnavigation: true,
\t\t\t\t\tfx: 'mosaic'
\t\t\t\t});
\t\t\t\t\$().UItoTop({ easingType: 'easeOutQuart' });
\t\t\t});
\t\t</script>
\t\t<!--[if lt IE 8]>
\t\t\t<div style=' clear: both; text-align:center; position: relative;'>
\t\t\t\t<a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\">
\t\t\t\t\t<img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" />
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<![endif]-->
\t\t<!--[if lt IE 9]>
\t\t\t<script src=\"js/html5shiv.js\"></script>
\t\t\t<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ie.css"), "html", null, true);
        echo "\">
\t\t<![endif]-->
                
                
                ";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo " My Taxi ";
    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        // line 62
        echo "\t\t<div class=\"main\">
<!--==============================header=================================-->
\t\t\t<header>
\t\t\t\t<div class=\"menu_block \">
\t\t\t\t\t<div class=\"container_12\">
\t\t\t\t\t\t<div class=\"grid_12\">
\t\t\t\t\t\t\t<nav class=\"horizontal-nav full-width horizontalNav-notprocessed\">
\t\t\t\t\t\t\t\t<ul class=\"sf-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"current\"><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index-1.html\">About</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index-2.html\">Cars</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index-3.html\">Services</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index-4.html\">Contacts</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"container_12\">
\t\t\t\t\t<div class=\"grid_12\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Your Happy Family\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clear\"></div>
\t\t\t</header>
\t\t\t<div class=\"slider_wrapper \">
\t\t\t\t<div id=\"camera_wrap\" class=\"\">
\t\t\t\t\t<div data-src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide.jpg"), "html", null, true);
        echo "\" ></div>
\t\t\t\t\t<div data-src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide1.jpg"), "html", null, true);
        echo "\" ></div>
\t\t\t\t\t<div data-src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide2.jpg"), "html", null, true);
        echo "\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container_12\">
\t\t\t\t<div class=\"grid_4\">
\t\t\t\t\t<div class=\"banner\">
\t\t\t\t\t\t<div class=\"maxheight\">
\t\t\t\t\t\t\t<div class=\"banner_title\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icon1.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"extra_wrapper\">Fast&amp;
\t\t\t\t\t\t\t\t\t<div class=\"color1\">Safe</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\tDorem ipsum dolor sit amet, consectetur adipiscinger elit. In mollis erat mattis neque facilisis, sit ameter ultricies erat rutrum. Cras facilisis, nulla vel viver auctor, leo magna sodales felis, quis malesuad
\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-share-square\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_4\">
\t\t\t\t\t<div class=\"banner\">
\t\t\t\t\t\t<div class=\"maxheight\">
\t\t\t\t\t\t\t<div class=\"banner_title\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icon2.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"extra_wrapper\">Best
\t\t\t\t\t\t\t\t\t<div class=\"color1\">Prices</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\tHem ipsum dolor sit amet, consectetur adipiscinger elit. In mollis erat mattis neque facilisis, sit ameter ultricies erat rutrum. Cras facilisis, nulla vel viver auctor, leo magna sodales felis, quis malesuader
\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-share-square\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_4\">
\t\t\t\t\t<div class=\"banner\">
\t\t\t\t\t\t<div class=\"maxheight\">
\t\t\t\t\t\t\t<div class=\"banner_title\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icon3.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"extra_wrapper\">Package
\t\t\t\t\t\t\t\t\t<div class=\"color1\">Delivery</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\tKurem ipsum dolor sit amet, consectetur adipiscinger elit. In mollis erat mattis neque facilisis, sit ameter ultricies erat rutrum. Cras facilisis, nulla vel viver auctor, leo magna sodales felis, quis malesuki
\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-share-square\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clear\"></div>
\t\t\t</div>
\t\t\t<div class=\"c_phone\">
\t\t\t\t<div class=\"container_12\">
\t\t\t\t\t<div class=\"grid_12\">
\t\t\t\t\t\t<div class=\"fa fa-phone\"></div>+ 1800 559 6580
\t\t\t\t\t\t<span>ORDER NOW!</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</div>
\t\t\t</div>
<!--==============================Content=================================-->
\t\t\t<div class=\"content\"><div class=\"ic\"></div>
\t\t\t\t<div class=\"container_12\">
\t\t\t\t\t<div class=\"grid_5\">
\t\t\t\t\t\t<h3>Booking Form</h3>
\t\t\t\t\t\t<form id=\"bookingForm\">
\t\t\t\t\t\t\t<div class=\"fl1\">
\t\t\t\t\t\t\t\t<div class=\"tmInput\">
\t\t\t\t\t\t\t\t\t<input name=\"Name\" placeHolder=\"Name:\" type=\"text\" data-constraints='@NotEmpty @Required @AlphaSpecial'>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tmInput\">
\t\t\t\t\t\t\t\t\t<input name=\"From\" placeHolder=\"From:\" type=\"text\" data-constraints=\"@NotEmpty @Required \">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"fl1\">
\t\t\t\t\t\t\t\t<div class=\"tmInput\">
\t\t\t\t\t\t\t\t\t<input name=\"Email\" placeHolder=\"Email:\" type=\"text\" data-constraints=\"@NotEmpty @Required @Email\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tmInput mr0\">
\t\t\t\t\t\t\t\t\t<input name=\"To\" placeHolder=\"To:\" type=\"text\" data-constraints=\"@NotEmpty @Required\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t<strong>Time</strong>
\t\t\t\t\t\t\t<div class=\"tmInput\">
\t\t\t\t\t\t\t\t<input name=\"Time\" placeHolder=\"\" type=\"text\" data-constraints=\"@NotEmpty @Required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t<strong>Date</strong>
\t\t\t\t\t\t\t<label class=\"tmDatepicker\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"Date\"\tplaceHolder='20/05/2014' data-constraints=\"@NotEmpty @Required @Date\">
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t<div class=\"tmRadio\">
\t\t\t\t\t\t\t\t<p>Comfort</p>
\t\t\t\t\t\t\t\t<input name=\"Comfort\" type=\"radio\" id=\"tmRadio0\" data-constraints='@RadioGroupChecked(name=\"Comfort\", groups=[RadioGroup])' checked/>
\t\t\t\t\t\t\t\t<span>Cheap</span>
\t\t\t\t\t\t\t\t<input name=\"Comfort\" type=\"radio\" id=\"tmRadio1\" data-constraints='@RadioGroupChecked(name=\"Comfort\", groups=[RadioGroup])' />
\t\t\t\t\t\t\t\t<span>Standart</span>
\t\t\t\t\t\t\t\t<input name=\"Comfort\" type=\"radio\" id=\"tmRadio2\" data-constraints='@RadioGroupChecked(name=\"Comfort\", groups=[RadioGroup])' />
\t\t\t\t\t\t\t\t<span>Lux</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t<div class=\"fl1 fl2\">
\t\t\t\t\t\t\t\t<em>Adults</em>
\t\t\t\t\t\t\t\t<select name=\"Adults\" class=\"tmSelect auto\" data-class=\"tmSelect tmSelect2\" data-constraints=\"\">
\t\t\t\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<div class=\"clear height1\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"fl1 fl2\">
\t\t\t\t\t\t\t\t<em>Children</em>
\t\t\t\t\t\t\t\t<select name=\"Children\" class=\"tmSelect auto\" data-class=\"tmSelect tmSelect2\" data-constraints=\"\">
\t\t\t\t\t\t\t\t\t<option>0</option>
\t\t\t\t\t\t\t\t\t<option>0</option>
\t\t\t\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t<div class=\"tmTextarea\">
\t\t\t\t\t\t\t\t<textarea name=\"Message\" placeHolder=\"Message\" data-constraints='@NotEmpty @Required @Length(min=20,max=999999)'></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn\" data-type=\"submit\">Submit</a>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"grid_6 prefix_1\">
\t\t\t\t\t\t<a href=\"index2.html\" class=\"type\"><img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/page1_img1.jpg"), "html", null, true);
        echo "\" alt=\"\"><span class=\"type_caption\">Economy</span></a>
\t\t\t\t\t\t<a href=\"index2.html\" class=\"type\"><img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/page1_img2.jpg"), "html", null, true);
        echo "\" alt=\"\"><span class=\"type_caption\">Standard</span></a>
\t\t\t\t\t\t<a href=\"index2.html\" class=\"type\"><img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/page1_img3.jpg"), "html", null, true);
        echo "\" alt=\"\"><span class=\"type_caption\">Lux</span></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
<!--==============================footer=================================-->
\t\t<footer>
\t\t\t<div class=\"container_12\">
\t\t\t\t<div class=\"grid_12\">
\t\t\t\t\t<div class=\"f_phone\"><span>Call Us:</span> + 1800 559 6580</div>
\t\t\t\t\t<div class=\"socials\">
\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-twitter\"></a>
\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-facebook\"></a>
\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-google-plus\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"copy\">
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clear\"></div>
\t\t\t</div>
\t\t</footer>
\t\t<script>
\t\t\t\$(function (){
\t\t\t\t\$('#bookingForm').bookingForm({
\t\t\t\t\townerEmail: '#'
\t\t\t\t});
\t\t\t})
\t\t\t\$(function() {
\t\t\t\t\$('#bookingForm input, #bookingForm textarea').placeholder();
\t\t\t});
\t\t</script>
                ";
    }

    public function getTemplateName()
    {
        return "GTaxiTaxiDriverBundle:Taxi:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  364 => 226,  360 => 225,  356 => 224,  262 => 133,  245 => 119,  228 => 105,  217 => 97,  213 => 96,  209 => 95,  197 => 86,  171 => 62,  168 => 61,  162 => 7,  153 => 54,  125 => 29,  120 => 27,  115 => 25,  111 => 24,  107 => 23,  103 => 22,  99 => 21,  95 => 20,  91 => 19,  87 => 18,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  48 => 7,  45 => 6,  35 => 260,  33 => 61,  29 => 59,  27 => 6,  22 => 3,);
    }
}
