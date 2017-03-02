<?php

/* ::base-sin-assetics.html.twig */
class __TwigTemplate_5415099349ba58a6a93724ec376157d4774335f77c709978d445e20d29becc88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menus' => array($this, 'block_menus'),
            'body' => array($this, 'block_body'),
            'aside' => array($this, 'block_aside'),
            'slidebar' => array($this, 'block_slidebar'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt-BR\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/favicon.png"), "html", null, true);
        echo "\" />

    <meta name=\"description\" content=\"\">

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/js/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
</head>

<!-- Preloader -->
<div id=\"preloader\">
    <div id=\"status\">&nbsp;</div>
</div>

<body>
<div id=\"sb-site\">
    <div class=\"boxed\">
";
        // line 55
        $this->displayBlock('menus', $context, $blocks);
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 57
        $this->displayBlock('aside', $context, $blocks);
        // line 58
        echo "    <footer id=\"footer\">
        <p>&copy; 2011 - 2016 <a href=\"http://www.luisriego.com\">Luís Riego</a>. Todos os Direitos Reservados.</p>
    </footer>
    </div> <!-- boxed -->
</div> <!-- sb-site -->
";
        // line 63
        $this->displayBlock('slidebar', $context, $blocks);
        // line 64
        $this->displayBlock('javascript', $context, $blocks);
        // line 99
        echo "
</body>

</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Luis Riego";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "    <!-- CSS -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/css/preload.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Compiled in vendors.js -->

    ";
        // line 22
        echo "    ";
        // line 23
        echo "    ";
        // line 24
        echo "    ";
        // line 25
        echo "    ";
        // line 26
        echo "    ";
        // line 27
        echo "    ";
        // line 28
        echo "    ";
        // line 29
        echo "

    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/css/vendors.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/css/extra.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/css/syntaxhighlighter/shCore.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >

    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/css/style-blue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" title=\"default\">
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/css/width-full.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" title=\"default\">

    ";
    }

    // line 55
    public function block_menus($context, array $blocks = array())
    {
    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
    }

    // line 57
    public function block_aside($context, array $blocks = array())
    {
        echo " ";
    }

    // line 63
    public function block_slidebar($context, array $blocks = array())
    {
    }

    // line 64
    public function block_javascript($context, array $blocks = array())
    {
        // line 65
        echo "<!-- Scripts -->
<!-- Compiled in vendors.js -->

";
        // line 82
        echo "

    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/js/vendors.js"), "html", null, true);
        echo "\"></script>

    <!-- Syntaxhighlighter -->
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/js/syntaxhighlighter/shCore.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/js/syntaxhighlighter/shBrushXml.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/js/syntaxhighlighter/shBrushJScript.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/js/DropdownHover.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/js/app.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/js/holder.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/js/page_charts.js"), "html", null, true);
        echo "\"></script>
";
        // line 96
        echo "

";
    }

    public function getTemplateName()
    {
        return "::base-sin-assetics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 96,  223 => 94,  219 => 93,  215 => 92,  211 => 91,  206 => 89,  202 => 88,  198 => 87,  192 => 84,  188 => 82,  183 => 65,  180 => 64,  175 => 63,  169 => 57,  164 => 56,  159 => 55,  152 => 36,  148 => 35,  143 => 33,  139 => 32,  135 => 31,  131 => 29,  129 => 28,  127 => 27,  125 => 26,  123 => 25,  121 => 24,  119 => 23,  117 => 22,  110 => 17,  107 => 16,  104 => 15,  98 => 9,  91 => 99,  89 => 64,  87 => 63,  80 => 58,  78 => 57,  76 => 56,  74 => 55,  59 => 43,  55 => 42,  50 => 39,  48 => 15,  41 => 11,  36 => 9,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="pt-BR">*/
/* */
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/* */
/*     <title>{% block title %}Luis Riego{% endblock %}</title>*/
/* */
/*     <link rel="shortcut icon" href="{{ asset('bundles/app/assets/img/favicon.png') }}" />*/
/* */
/*     <meta name="description" content="">*/
/* */
/*     {% block stylesheets %}*/
/*     <!-- CSS -->*/
/*     <link href="{{ asset('bundles/app/assets/css/preload.css') }}" rel="stylesheet">*/
/* */
/*     <!-- Compiled in vendors.js -->*/
/* */
/*     {#<link href="{{ asset('bundles/app/assets/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">#}*/
/*     {#<link href="{{ asset('bundles/app/assets/lib/bootstrap/css/bootstrap-s') }}assets/css/bootstrap-switch.min.css" rel="stylesheet">#}*/
/*     {#<link href="assets/css/font-awesome.min.css" rel="stylesheet">#}*/
/*     {#<link href="assets/css/animate.min.css" rel="stylesheet">#}*/
/*     {#<link href="assets/css/slidebars.min.css" rel="stylesheet">#}*/
/*     {#<link href="assets/css/lightbox.css" rel="stylesheet">#}*/
/*     {#<link href="assets/css/jquery.bxslider.css" rel="stylesheet" />#}*/
/*     {#<link href="assets/css/buttons.css" rel="stylesheet">#}*/
/* */
/* */
/*     <link href="{{ asset('bundles/app/assets/css/vendors.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('bundles/app/assets/css/extra.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('bundles/app/assets/css/syntaxhighlighter/shCore.css') }}" rel="stylesheet" >*/
/* */
/*     <link href="{{ asset('bundles/app/assets/css/style-blue.css') }}" rel="stylesheet" title="default">*/
/*     <link href="{{ asset('bundles/app/assets/css/width-full.css') }}" rel="stylesheet" title="default">*/
/* */
/*     {% endblock %}*/
/* */
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="{{ asset('bundles/app/assets/js/html5shiv.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/app/assets/js/respond.min.js') }}"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* */
/* <!-- Preloader -->*/
/* <div id="preloader">*/
/*     <div id="status">&nbsp;</div>*/
/* </div>*/
/* */
/* <body>*/
/* <div id="sb-site">*/
/*     <div class="boxed">*/
/* {% block menus %}{% endblock %}*/
/* {% block body %}{% endblock %}*/
/* {% block aside %} {% endblock %}*/
/*     <footer id="footer">*/
/*         <p>&copy; 2011 - 2016 <a href="http://www.luisriego.com">Luís Riego</a>. Todos os Direitos Reservados.</p>*/
/*     </footer>*/
/*     </div> <!-- boxed -->*/
/* </div> <!-- sb-site -->*/
/* {% block slidebar %}{% endblock %}*/
/* {% block javascript %}*/
/* <!-- Scripts -->*/
/* <!-- Compiled in vendors.js -->*/
/* */
/* {#<script src="assets/js/jquery.min.js"></script>#}*/
/* {#<script src="assets/js/jquery.cookie.js"></script>#}*/
/* {#<script src="assets/js/imagesloaded.pkgd.min.js"></script>#}*/
/* {#<script src="assets/js/bootstrap.min.js"></script>#}*/
/* {#<script src="assets/js/bootstrap-switch.min.js"></script>#}*/
/* {#<script src="assets/js/wow.min.js"></script>#}*/
/* {#<script src="assets/js/slidebars.min.js"></script>#}*/
/* {#<script src="assets/js/jquery.bxslider.min.js"></script>#}*/
/* {#<script src="assets/js/holder.js"></script>#}*/
/* {#<script src="assets/js/buttons.js"></script>#}*/
/* {#<script src="assets/js/jquery.mixitup.min.js"></script>#}*/
/* {#<script src="assets/js/circles.min.js"></script>#}*/
/* {#<script src="assets/js/masonry.pkgd.min.js"></script>#}*/
/* {#<script src="assets/js/jquery.matchHeight-min.js"></script>#}*/
/* */
/* */
/*     <script src="{{ asset('bundles/app/assets/js/vendors.js') }}"></script>*/
/* */
/*     <!-- Syntaxhighlighter -->*/
/*     <script src="{{ asset('bundles/app/assets/js/syntaxhighlighter/shCore.js') }}"></script>*/
/*     <script src="{{ asset('bundles/app/assets/js/syntaxhighlighter/shBrushXml.js') }}"></script>*/
/*     <script src="{{ asset('bundles/app/assets/js/syntaxhighlighter/shBrushJScript.js') }}"></script>*/
/* */
/*     <script src="{{ asset('bundles/app/assets/js/DropdownHover.js') }}"></script>*/
/*     <script src="{{ asset('bundles/app/assets/js/app.js') }}"></script>*/
/*     <script src="{{ asset('bundles/app/assets/js/holder.js') }}"></script>*/
/*     <script src="{{ asset('bundles/app/assets/js/page_charts.js') }}"></script>*/
/* {#<script src="{{ asset('bundles/app/assets/js/index.js') }}"></script>#}*/
/* */
/* */
/* {% endblock %}*/
/* */
/* </body>*/
/* */
/* </html>*/
