<?php

/* AppBundle::inicio.html.twig */
class __TwigTemplate_1160f45fef6a77aeee991c1fee362739b8a740f20e0c9fd40aedfc36c146f8e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AppBundle::inicio.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <section class=\"carousel-section\">
        <div id=\"carousel-example-generic\" class=\"carousel carousel-razon slide\" data-ride=\"carousel\" data-interval=\"5000\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\">
                <div class=\"item active\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-7\">
                                <div class=\"carousel-caption\">
                                    <div class=\"carousel-text\">
                                        <h1 class=\"animated fadeInDownBig animation-delay-7 carousel-title\">Uma empresa, infinitas possibilidades</h1>
                                        <h2 class=\"animated fadeInDownBig animation-delay-5  crousel-subtitle\">Entregamos todo pronto, menos o café</h2>
                                        <ul class=\"list-unstyled carousel-list\">
                                            <li class=\"animated bounceInLeft animation-delay-11\"><i class=\"fa fa-check\"></i>Instalação de redes</li>
                                            <li class=\"animated bounceInLeft animation-delay-13\"><i class=\"fa fa-check\"></i>Servidores, hosting e dominios</li>
                                            <li class=\"animated bounceInLeft animation-delay-15\"><i class=\"fa fa-check\"></i>Virtualização</li>
                                        </ul>
                                        <p class=\"animated fadeInUpBig animation-delay-17\">Lorem ipsum dolor sit amet consectetur adipisicing elit. In rerum maxime quis tenetur dolor <span>recusandae a nulla</span> qui enim dolorem.</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-5 hidden-xs carousel-img-wrap\">
                                <div class=\"carousel-img\">
                                    ";
        // line 36
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/pre.png"), "html", null, true);
        echo "\" class=\"img-responsive animated bounceInUp animation-delay-3\" alt=\"Image\">
                                    ";
        // line 38
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-8\">
                                <div class=\"carousel-caption\">
                                    <div class=\"carousel-text\">
                                        <h1 class=\"animated fadeInDownBig animation-delay-7 carousel-title\">Servidores</h1>
                                        <h2 class=\"animated fadeInDownBig animation-delay-5  crousel-subtitle\">Instalamos e configuramos</h2>
                                        <ul class=\"list-unstyled carousel-list\">
                                            <li class=\"animated bounceInLeft animation-delay-11\"><i class=\"fa fa-check\"></i>Servidores Linux</li>
                                            <li class=\"animated bounceInLeft animation-delay-13\"><i class=\"fa fa-check\"></i>Servidores Windows</li>
                                            <li class=\"animated bounceInLeft animation-delay-15\"><i class=\"fa fa-check\"></i>Serviços de Hosting</li>
                                        </ul>
                                        <p class=\"animated fadeInUpBig animation-delay-17\">Lorem ipsum dolor sit amet consectetur adipisicing elit. In rerum maxime quis tenetur dolor <span>recusandae a nulla</span> qui enim dolorem.</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-4 hidden-xs carousel-img-wrap\">
                                <div class=\"carousel-img\">
                                    ";
        // line 64
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/pre2-old.png"), "html", null, true);
        echo "\" class=\"img-responsive animated bounceInUp animation-delay-3\" alt=\"Image\">
                                    ";
        // line 66
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-md-7 col-sm-9\">
                                <div class=\"carousel-caption\">
                                    <div class=\"carousel-text\">
                                        <h1 class=\"animated fadeInDownBig animation-delay-7 carousel-title\">Virtualização</h1>
                                        <h2 class=\"animated fadeInDownBig animation-delay-5  crousel-subtitle\">O que há de mais moderno e competitivo</h2>
                                        <ul class=\"list-unstyled carousel-list\">
                                            <li class=\"animated bounceInLeft animation-delay-11\"><i class=\"fa fa-check\"></i>Maior flexibilidade</li>
                                            <li class=\"animated bounceInLeft animation-delay-13\"><i class=\"fa fa-check\"></i>Menor custo</li>
                                            <li class=\"animated bounceInLeft animation-delay-15\"><i class=\"fa fa-check\"></i>Maior desempenho</li>
                                        </ul>
                                        <p class=\"animated fadeInUpBig animation-delay-17\">Lorem ipsum dolor sit amet consectetur adipisicing elit. In rerum maxime quis tenetur dolor <span>recusandae a nulla</span> qui enim dolorem.</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 col-md-5 col-sm-3 hidden-xs carousel-img-wrap\">
                                <div class=\"carousel-img\">
                                    ";
        // line 91
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/pre3-old.png"), "html", null, true);
        echo "\" class=\"img-responsive animated bounceInUp animation-delay-3\" alt=\"Image\">
                                    ";
        // line 93
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                <span class=\"glyphicon glyphicon-chevron-left\"></span>
            </a>
            <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                <span class=\"glyphicon glyphicon-chevron-right\"></span>
            </a>
        </div>
    </section> <!-- carousel -->

    <section class=\"margin-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"content-box box-default animated fadeInUp animation-delay-10\">
                        <span class=\"icon-ar icon-ar-lg icon-ar-round icon-ar-inverse\"><i class=\"fa fa-sitemap\"></i></span>
                        <h4 class=\"content-box-title\">Redes</h4>
                        <p>Problemas com a instalação ou manutenção das redes da sua empresa?</p>
                        <a href=\"#\" type=\"button\" class=\"btn btn-primary btn-ar\">Resolva agora</a>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"content-box box-default animated fadeInUp animation-delay-14\">
                        <span class=\"icon-ar icon-ar-lg icon-ar-round icon-ar-inverse\"><i class=\"fa fa-bolt\"></i></span>
                        <h4 class=\"content-box-title\">Virtualização</h4>
                        <p>Precissa modernizar os sistemas da sua empresa para se-adaptar as necessidades atuais?</p>
                        <a href=\"#\" type=\"button\" class=\"btn btn-primary btn-ar\">Conheça a Virtualização</a>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"content-box box-default animated fadeInUp animation-delay-16\">
                        <span class=\"icon-ar icon-ar-lg icon-ar-round icon-ar-inverse\"><i class=\"fa fa-shield\"></i></span>
                        <h4 class=\"content-box-title\">Segurança</h4>
                        <p>Você confia na protenção dos dados da sua empresa? Problemas con a segurança?</p>
                        <a href=\"#\" type=\"button\" class=\"btn btn-primary btn-ar\">Fique mais traquilo</a>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"content-box box-default animated fadeInUp animation-delay-12\">
                        <span class=\"icon-ar icon-ar-lg icon-ar-round icon-ar-inverse\"><i class=\"fa fa-desktop\"></i></span>
                        <h4 class=\"content-box-title\">Servidores</h4>
                        <p>Seu servidor atende completamente às suas necessidades da sua empresa?</p>
                        <a href=\"#\" type=\"button\" class=\"btn btn-primary btn-ar\">Veja como solucinar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"section-lines\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"home-devices\">
                        <h3>Nos atendemos todas as suas necessidades</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, sapiente, nam sunt rem beatae architecto cupiditate numquam consectetur dolorum aliquam suscipit adipisci expedita vel quaerat illum aperiam facere inventore officia.</p>
                        <p>Consequuntur sed ipsum eius minima eum velit soluta accusamus omnis maiores modi quae mollitia consectetur adipisci.</p>
                        <ul class=\"icon-devices\">
                            <li class=\"active\"><a href=\"#redes\" data-toggle=\"tab\"><i class=\"fa fa-sitemap\"></i></a></li>
                            <li><a href=\"#produtos\" data-toggle=\"tab\"><i class=\"fa fa-print\"></i></a></li>
                            <li><a href=\"#seguranca\" data-toggle=\"tab\"><i class=\"fa fa-shield\"></i></a></li>
                            <li><a href=\"#virtualizacao\" data-toggle=\"tab\"><i class=\"fa fa-tachometer\"></i></a></li>
                        </ul>

                    </div>
                </div>
                <div class=\"col-md-8\">
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"redes\">
                            ";
        // line 170
        echo "                            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/mac.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                            ";
        // line 172
        echo "                        </div>
                        <div class=\"tab-pane\" id=\"produtos\">
                            ";
        // line 175
        echo "                            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/macpro.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                            ";
        // line 177
        echo "                        </div>
                        <div class=\"tab-pane\" id=\"seguranca\">
                            ";
        // line 180
        echo "                            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/ipad.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                            ";
        // line 182
        echo "                        </div>
                        <div class=\"tab-pane\" id=\"virtualizacao\">
                            ";
        // line 185
        echo "                            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/iphone.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                            ";
        // line 187
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class=\"container\">
        <section class=\"margin-bottom\">
            <h2 class=\"section-title\">Últimos serviços</h2>
            <div class=\"bxslider-controls\">
                <span id=\"bx-prev4\"></span>
                <span id=\"bx-next4\"></span>
            </div>
            <ul class=\"bxslider\" id=\"latest-works\">
                <li>
                    <div class=\"img-caption-ar\">
                        ";
        // line 205
        echo "                        <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/w1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                        ";
        // line 207
        echo "                        <div class=\"caption-ar\">
                            <div class=\"caption-content\">
                                <a href=\"#\" class=\"animated fadeInDown\"><i class=\"fa fa-search\"></i>Mais informação</a>
                                <h4 class=\"caption-title\">Hospedagem de site</h4>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"img-caption-ar\">
                        ";
        // line 218
        echo "                        <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/w2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                        ";
        // line 220
        echo "                        <div class=\"caption-ar\">
                            <div class=\"caption-content\">
                                <a href=\"#\" class=\"animated fadeInDown\"><i class=\"fa fa-search\"></i>Mais informação</a>
                                <h4 class=\"caption-title\">Manutenção de redes</h4>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"img-caption-ar\">
                        ";
        // line 231
        echo "                        <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/w3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                        ";
        // line 233
        echo "                        <div class=\"caption-ar\">
                            <div class=\"caption-content\">
                                <a href=\"#\" class=\"animated fadeInDown\"><i class=\"fa fa-search\"></i>Mais informação</a>
                                <h4 class=\"caption-title\">Instalação de servidor</h4>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"img-caption-ar\">
                        ";
        // line 244
        echo "                        <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/w4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                        ";
        // line 246
        echo "                        <div class=\"caption-ar\">
                            <div class=\"caption-content\">
                                <a href=\"#\" class=\"animated fadeInDown\"><i class=\"fa fa-search\"></i>Mais informação</a>
                                <h4 class=\"caption-title\">Venda e instalação de computadores</h4>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"img-caption-ar\">
                        ";
        // line 257
        echo "                        <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/w1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                        ";
        // line 259
        echo "                        <div class=\"caption-ar\">
                            <div class=\"caption-content\">
                                <a href=\"#\" class=\"animated fadeInDown\"><i class=\"fa fa-search\"></i>Mais informação</a>
                                <h4 class=\"caption-title\">Hospedagem de site</h4>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"img-caption-ar\">
                        ";
        // line 270
        echo "                        <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/w2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                        ";
        // line 272
        echo "                        <div class=\"caption-ar\">
                            <div class=\"caption-content\">
                                <a href=\"#\" class=\"animated fadeInDown\"><i class=\"fa fa-search\"></i>Mais informação</a>
                                <h4 class=\"caption-title\">Manutenção de redes</h4>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"img-caption-ar\">
                        ";
        // line 283
        echo "                        <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/w3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                        ";
        // line 285
        echo "                        <div class=\"caption-ar\">
                            <div class=\"caption-content\">
                                <a href=\"#\" class=\"animated fadeInDown\"><i class=\"fa fa-search\"></i>Mais informação</a>
                                <h4 class=\"caption-title\">Instalação de servidor</h4>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"img-caption-ar\">
                        ";
        // line 296
        echo "                        <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/w4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                        ";
        // line 298
        echo "                        <div class=\"caption-ar\">
                            <div class=\"caption-content\">
                                <a href=\"#\" class=\"animated fadeInDown\"><i class=\"fa fa-search\"></i>Mais informação</a>
                                <h4 class=\"caption-title\">Venda e instalação de computadores</h4>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        <section>
            <p class=\"slogan text-center\">Descubra o porque de nossos <span>15 anos</span> de serciço, <span>responsabilidade, compromisso e seriedade</span>. Nossos principios <span>satisfazem</span> aos nossos clientes e os tornam <span>amigos</span>.</p>
            <h2 class=\"section-title\">Nossos Clientes</h2>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"bxslider-controls\">
                        <span id=\"bx-prev5\"></span>
                        <span id=\"bx-next5\"></span>
                    </div>
                    <ul class=\"bxslider\" id=\"home-block\">
                        <li>
                            <blockquote class=\"blockquote-color\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                                <footer>Mirian Dayrell, CEO da Mirian Dayrell Imóveis</footer>
                            </blockquote>
                        </li>
                        <li>
                            <blockquote class=\"blockquote-color\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                                <footer>Roberto Marinho, Jornal o Globo</footer>
                            </blockquote>
                        </li>
                        <li>
                            <blockquote class=\"blockquote-color\">
                                <p>Dolore totam at ea reiciendis suscipit a tempore cum nisi aspernatur nisi alias posuere erat a ante posuere erat a ante ultricies ultricies nisi vel augue quam semper conse erat quuntur.</p>
                                <footer>Silvio Santos, Dono da SBT</footer>
                            </blockquote>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-3 col-xs-6\">
                            ";
        // line 343
        echo "                            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/intel.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                            ";
        // line 345
        echo "                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-6\">
                            ";
        // line 348
        echo "                            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/microsoft.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                            ";
        // line 350
        echo "                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-6\">
                            ";
        // line 353
        echo "                            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/nokia.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                            ";
        // line 355
        echo "                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-6\">
                            ";
        // line 358
        echo "                            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/samsung.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                            ";
        // line 360
        echo "                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-3 col-xs-6\">
                            ";
        // line 365
        echo "                            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/anz.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                            ";
        // line 367
        echo "                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-6\">
                            ";
        // line 370
        echo "                            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/maxis.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                            ";
        // line 372
        echo "                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-6\">
                            ";
        // line 375
        echo "                            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/sony.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                            ";
        // line 377
        echo "                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-6\">
                            ";
        // line 380
        echo "                            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/hp.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                            ";
        // line 382
        echo "                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

            ";
        // line 391
        echo "

    ";
        // line 394
        echo "
";
    }

    // line 397
    public function block_javascript($context, array $blocks = array())
    {
        // line 398
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/js/index.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "AppBundle::inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  529 => 399,  524 => 398,  521 => 397,  516 => 394,  512 => 391,  502 => 382,  497 => 380,  493 => 377,  488 => 375,  484 => 372,  479 => 370,  475 => 367,  470 => 365,  464 => 360,  459 => 358,  455 => 355,  450 => 353,  446 => 350,  441 => 348,  437 => 345,  432 => 343,  386 => 298,  381 => 296,  369 => 285,  364 => 283,  352 => 272,  347 => 270,  335 => 259,  330 => 257,  318 => 246,  313 => 244,  301 => 233,  296 => 231,  284 => 220,  279 => 218,  267 => 207,  262 => 205,  243 => 187,  238 => 185,  234 => 182,  229 => 180,  225 => 177,  220 => 175,  216 => 172,  211 => 170,  133 => 93,  128 => 91,  102 => 66,  97 => 64,  70 => 38,  65 => 36,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends('::layout.html.twig') %}*/
/* */
/* {% block body %}*/
/* */
/*     <section class="carousel-section">*/
/*         <div id="carousel-example-generic" class="carousel carousel-razon slide" data-ride="carousel" data-interval="5000">*/
/*             <!-- Indicators -->*/
/*             <ol class="carousel-indicators">*/
/*                 <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>*/
/*                 <li data-target="#carousel-example-generic" data-slide-to="1"></li>*/
/*                 <li data-target="#carousel-example-generic" data-slide-to="2"></li>*/
/*             </ol>*/
/* */
/*             <!-- Wrapper for slides -->*/
/*             <div class="carousel-inner">*/
/*                 <div class="item active">*/
/*                     <div class="container">*/
/*                         <div class="row">*/
/*                             <div class="col-md-6 col-sm-7">*/
/*                                 <div class="carousel-caption">*/
/*                                     <div class="carousel-text">*/
/*                                         <h1 class="animated fadeInDownBig animation-delay-7 carousel-title">Uma empresa, infinitas possibilidades</h1>*/
/*                                         <h2 class="animated fadeInDownBig animation-delay-5  crousel-subtitle">Entregamos todo pronto, menos o café</h2>*/
/*                                         <ul class="list-unstyled carousel-list">*/
/*                                             <li class="animated bounceInLeft animation-delay-11"><i class="fa fa-check"></i>Instalação de redes</li>*/
/*                                             <li class="animated bounceInLeft animation-delay-13"><i class="fa fa-check"></i>Servidores, hosting e dominios</li>*/
/*                                             <li class="animated bounceInLeft animation-delay-15"><i class="fa fa-check"></i>Virtualização</li>*/
/*                                         </ul>*/
/*                                         <p class="animated fadeInUpBig animation-delay-17">Lorem ipsum dolor sit amet consectetur adipisicing elit. In rerum maxime quis tenetur dolor <span>recusandae a nulla</span> qui enim dolorem.</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-6 col-sm-5 hidden-xs carousel-img-wrap">*/
/*                                 <div class="carousel-img">*/
/*                                     {#{% image '@AppBundle/Resources/public/assets/img/demo/pre.png' %}#}*/
/*                                     <img src="{{ asset('bundles/app/assets/img/demo/pre.png') }}" class="img-responsive animated bounceInUp animation-delay-3" alt="Image">*/
/*                                     {#{% endimage %}#}*/
/* */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="item">*/
/*                     <div class="container">*/
/*                         <div class="row">*/
/*                             <div class="col-md-6 col-sm-8">*/
/*                                 <div class="carousel-caption">*/
/*                                     <div class="carousel-text">*/
/*                                         <h1 class="animated fadeInDownBig animation-delay-7 carousel-title">Servidores</h1>*/
/*                                         <h2 class="animated fadeInDownBig animation-delay-5  crousel-subtitle">Instalamos e configuramos</h2>*/
/*                                         <ul class="list-unstyled carousel-list">*/
/*                                             <li class="animated bounceInLeft animation-delay-11"><i class="fa fa-check"></i>Servidores Linux</li>*/
/*                                             <li class="animated bounceInLeft animation-delay-13"><i class="fa fa-check"></i>Servidores Windows</li>*/
/*                                             <li class="animated bounceInLeft animation-delay-15"><i class="fa fa-check"></i>Serviços de Hosting</li>*/
/*                                         </ul>*/
/*                                         <p class="animated fadeInUpBig animation-delay-17">Lorem ipsum dolor sit amet consectetur adipisicing elit. In rerum maxime quis tenetur dolor <span>recusandae a nulla</span> qui enim dolorem.</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-6 col-sm-4 hidden-xs carousel-img-wrap">*/
/*                                 <div class="carousel-img">*/
/*                                     {#{% image '@AppBundle/Resources/public/assets/img/demo/pre2.png' %}#}*/
/*                                     <img src="{{ asset('bundles/app/assets/img/demo/pre2-old.png') }}" class="img-responsive animated bounceInUp animation-delay-3" alt="Image">*/
/*                                     {#{% endimage %}#}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="item">*/
/*                     <div class="container">*/
/*                         <div class="row">*/
/*                             <div class="col-lg-6 col-md-7 col-sm-9">*/
/*                                 <div class="carousel-caption">*/
/*                                     <div class="carousel-text">*/
/*                                         <h1 class="animated fadeInDownBig animation-delay-7 carousel-title">Virtualização</h1>*/
/*                                         <h2 class="animated fadeInDownBig animation-delay-5  crousel-subtitle">O que há de mais moderno e competitivo</h2>*/
/*                                         <ul class="list-unstyled carousel-list">*/
/*                                             <li class="animated bounceInLeft animation-delay-11"><i class="fa fa-check"></i>Maior flexibilidade</li>*/
/*                                             <li class="animated bounceInLeft animation-delay-13"><i class="fa fa-check"></i>Menor custo</li>*/
/*                                             <li class="animated bounceInLeft animation-delay-15"><i class="fa fa-check"></i>Maior desempenho</li>*/
/*                                         </ul>*/
/*                                         <p class="animated fadeInUpBig animation-delay-17">Lorem ipsum dolor sit amet consectetur adipisicing elit. In rerum maxime quis tenetur dolor <span>recusandae a nulla</span> qui enim dolorem.</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-lg-6 col-md-5 col-sm-3 hidden-xs carousel-img-wrap">*/
/*                                 <div class="carousel-img">*/
/*                                     {#{% image '@AppBundle/Resources/public/assets/img/demo/pre3.png' %}#}*/
/*                                     <img src="{{ asset('bundles/app/assets/img/demo/pre3-old.png') }}" class="img-responsive animated bounceInUp animation-delay-3" alt="Image">*/
/*                                     {#{% endimage %}#}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <!-- Controls -->*/
/*             <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">*/
/*                 <span class="glyphicon glyphicon-chevron-left"></span>*/
/*             </a>*/
/*             <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">*/
/*                 <span class="glyphicon glyphicon-chevron-right"></span>*/
/*             </a>*/
/*         </div>*/
/*     </section> <!-- carousel -->*/
/* */
/*     <section class="margin-bottom">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-3 col-sm-6">*/
/*                     <div class="content-box box-default animated fadeInUp animation-delay-10">*/
/*                         <span class="icon-ar icon-ar-lg icon-ar-round icon-ar-inverse"><i class="fa fa-sitemap"></i></span>*/
/*                         <h4 class="content-box-title">Redes</h4>*/
/*                         <p>Problemas com a instalação ou manutenção das redes da sua empresa?</p>*/
/*                         <a href="#" type="button" class="btn btn-primary btn-ar">Resolva agora</a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-3 col-sm-6">*/
/*                     <div class="content-box box-default animated fadeInUp animation-delay-14">*/
/*                         <span class="icon-ar icon-ar-lg icon-ar-round icon-ar-inverse"><i class="fa fa-bolt"></i></span>*/
/*                         <h4 class="content-box-title">Virtualização</h4>*/
/*                         <p>Precissa modernizar os sistemas da sua empresa para se-adaptar as necessidades atuais?</p>*/
/*                         <a href="#" type="button" class="btn btn-primary btn-ar">Conheça a Virtualização</a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-3 col-sm-6">*/
/*                     <div class="content-box box-default animated fadeInUp animation-delay-16">*/
/*                         <span class="icon-ar icon-ar-lg icon-ar-round icon-ar-inverse"><i class="fa fa-shield"></i></span>*/
/*                         <h4 class="content-box-title">Segurança</h4>*/
/*                         <p>Você confia na protenção dos dados da sua empresa? Problemas con a segurança?</p>*/
/*                         <a href="#" type="button" class="btn btn-primary btn-ar">Fique mais traquilo</a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-3 col-sm-6">*/
/*                     <div class="content-box box-default animated fadeInUp animation-delay-12">*/
/*                         <span class="icon-ar icon-ar-lg icon-ar-round icon-ar-inverse"><i class="fa fa-desktop"></i></span>*/
/*                         <h4 class="content-box-title">Servidores</h4>*/
/*                         <p>Seu servidor atende completamente às suas necessidades da sua empresa?</p>*/
/*                         <a href="#" type="button" class="btn btn-primary btn-ar">Veja como solucinar</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/*     <section class="section-lines">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-4">*/
/*                     <div class="home-devices">*/
/*                         <h3>Nos atendemos todas as suas necessidades</h3>*/
/*                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, sapiente, nam sunt rem beatae architecto cupiditate numquam consectetur dolorum aliquam suscipit adipisci expedita vel quaerat illum aperiam facere inventore officia.</p>*/
/*                         <p>Consequuntur sed ipsum eius minima eum velit soluta accusamus omnis maiores modi quae mollitia consectetur adipisci.</p>*/
/*                         <ul class="icon-devices">*/
/*                             <li class="active"><a href="#redes" data-toggle="tab"><i class="fa fa-sitemap"></i></a></li>*/
/*                             <li><a href="#produtos" data-toggle="tab"><i class="fa fa-print"></i></a></li>*/
/*                             <li><a href="#seguranca" data-toggle="tab"><i class="fa fa-shield"></i></a></li>*/
/*                             <li><a href="#virtualizacao" data-toggle="tab"><i class="fa fa-tachometer"></i></a></li>*/
/*                         </ul>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-8">*/
/*                     <div class="tab-content">*/
/*                         <div class="tab-pane active" id="redes">*/
/*                             {#{% image '@AppBundle/Resources/public/assets/img/demo/mac.png' %}#}*/
/*                             <img src="{{ asset('bundles/app/assets/img/demo/mac.png') }}" class="img-responsive" alt="Image">*/
/*                             {#{% endimage %}#}*/
/*                         </div>*/
/*                         <div class="tab-pane" id="produtos">*/
/*                             {#{% image '@AppBundle/Resources/public/assets/img/demo/macpro.png' %}#}*/
/*                             <img src="{{ asset('bundles/app/assets/img/demo/macpro.png') }}" class="img-responsive" alt="Image">*/
/*                             {#{% endimage %}#}*/
/*                         </div>*/
/*                         <div class="tab-pane" id="seguranca">*/
/*                             {#{% image '@AppBundle/Resources/public/assets/img/demo/ipad.png' %}#}*/
/*                             <img src="{{ asset('bundles/app/assets/img/demo/ipad.png') }}" class="img-responsive" alt="Image">*/
/*                             {#{% endimage %}#}*/
/*                         </div>*/
/*                         <div class="tab-pane" id="virtualizacao">*/
/*                             {#{% image '@AppBundle/Resources/public/assets/img/demo/iphone.png' %}#}*/
/*                             <img src="{{ asset('bundles/app/assets/img/demo/iphone.png') }}" class="img-responsive" alt="Image">*/
/*                             {#{% endimage %}#}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/*     <div class="container">*/
/*         <section class="margin-bottom">*/
/*             <h2 class="section-title">Últimos serviços</h2>*/
/*             <div class="bxslider-controls">*/
/*                 <span id="bx-prev4"></span>*/
/*                 <span id="bx-next4"></span>*/
/*             </div>*/
/*             <ul class="bxslider" id="latest-works">*/
/*                 <li>*/
/*                     <div class="img-caption-ar">*/
/*                         {#{% image '@AppBundle/Resources/public/assets/img/demo/w1.jpg' %}#}*/
/*                         <img src="{{ asset('bundles/app/assets/img/demo/w1.jpg') }}" class="img-responsive" alt="Image">*/
/*                         {#{% endimage %}#}*/
/*                         <div class="caption-ar">*/
/*                             <div class="caption-content">*/
/*                                 <a href="#" class="animated fadeInDown"><i class="fa fa-search"></i>Mais informação</a>*/
/*                                 <h4 class="caption-title">Hospedagem de site</h4>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </li>*/
/*                 <li>*/
/*                     <div class="img-caption-ar">*/
/*                         {#{% image '@AppBundle/Resources/public/assets/img/demo/w2.jpg' %}#}*/
/*                         <img src="{{ asset('bundles/app/assets/img/demo/w2.jpg') }}" class="img-responsive" alt="Image">*/
/*                         {#{% endimage %}#}*/
/*                         <div class="caption-ar">*/
/*                             <div class="caption-content">*/
/*                                 <a href="#" class="animated fadeInDown"><i class="fa fa-search"></i>Mais informação</a>*/
/*                                 <h4 class="caption-title">Manutenção de redes</h4>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </li>*/
/*                 <li>*/
/*                     <div class="img-caption-ar">*/
/*                         {#{% image '@AppBundle/Resources/public/assets/img/demo/w3.jpg' %}#}*/
/*                         <img src="{{ asset('bundles/app/assets/img/demo/w3.jpg') }}" class="img-responsive" alt="Image">*/
/*                         {#{% endimage %}#}*/
/*                         <div class="caption-ar">*/
/*                             <div class="caption-content">*/
/*                                 <a href="#" class="animated fadeInDown"><i class="fa fa-search"></i>Mais informação</a>*/
/*                                 <h4 class="caption-title">Instalação de servidor</h4>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </li>*/
/*                 <li>*/
/*                     <div class="img-caption-ar">*/
/*                         {#{% image '@AppBundle/Resources/public/assets/img/demo/w4.jpg' %}#}*/
/*                         <img src="{{ asset('bundles/app/assets/img/demo/w4.jpg') }}" class="img-responsive" alt="Image">*/
/*                         {#{% endimage %}#}*/
/*                         <div class="caption-ar">*/
/*                             <div class="caption-content">*/
/*                                 <a href="#" class="animated fadeInDown"><i class="fa fa-search"></i>Mais informação</a>*/
/*                                 <h4 class="caption-title">Venda e instalação de computadores</h4>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </li>*/
/*                 <li>*/
/*                     <div class="img-caption-ar">*/
/*                         {#{% image '@AppBundle/Resources/public/assets/img/demo/w1.jpg' %}#}*/
/*                         <img src="{{ asset('bundles/app/assets/img/demo/w1.jpg') }}" class="img-responsive" alt="Image">*/
/*                         {#{% endimage %}#}*/
/*                         <div class="caption-ar">*/
/*                             <div class="caption-content">*/
/*                                 <a href="#" class="animated fadeInDown"><i class="fa fa-search"></i>Mais informação</a>*/
/*                                 <h4 class="caption-title">Hospedagem de site</h4>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </li>*/
/*                 <li>*/
/*                     <div class="img-caption-ar">*/
/*                         {#{% image '@AppBundle/Resources/public/assets/img/demo/w2.jpg' %}#}*/
/*                         <img src="{{ asset('bundles/app/assets/img/demo/w2.jpg') }}" class="img-responsive" alt="Image">*/
/*                         {#{% endimage %}#}*/
/*                         <div class="caption-ar">*/
/*                             <div class="caption-content">*/
/*                                 <a href="#" class="animated fadeInDown"><i class="fa fa-search"></i>Mais informação</a>*/
/*                                 <h4 class="caption-title">Manutenção de redes</h4>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </li>*/
/*                 <li>*/
/*                     <div class="img-caption-ar">*/
/*                         {#{% image '@AppBundle/Resources/public/assets/img/demo/w3.jpg' %}#}*/
/*                         <img src="{{ asset('bundles/app/assets/img/demo/w3.jpg') }}" class="img-responsive" alt="Image">*/
/*                         {#{% endimage %}#}*/
/*                         <div class="caption-ar">*/
/*                             <div class="caption-content">*/
/*                                 <a href="#" class="animated fadeInDown"><i class="fa fa-search"></i>Mais informação</a>*/
/*                                 <h4 class="caption-title">Instalação de servidor</h4>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </li>*/
/*                 <li>*/
/*                     <div class="img-caption-ar">*/
/*                         {#{% image '@AppBundle/Resources/public/assets/img/demo/w4.jpg' %}#}*/
/*                         <img src="{{ asset('bundles/app/assets/img/demo/w4.jpg') }}" class="img-responsive" alt="Image">*/
/*                         {#{% endimage %}#}*/
/*                         <div class="caption-ar">*/
/*                             <div class="caption-content">*/
/*                                 <a href="#" class="animated fadeInDown"><i class="fa fa-search"></i>Mais informação</a>*/
/*                                 <h4 class="caption-title">Venda e instalação de computadores</h4>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </li>*/
/*             </ul>*/
/*         </section>*/
/* */
/*         <section>*/
/*             <p class="slogan text-center">Descubra o porque de nossos <span>15 anos</span> de serciço, <span>responsabilidade, compromisso e seriedade</span>. Nossos principios <span>satisfazem</span> aos nossos clientes e os tornam <span>amigos</span>.</p>*/
/*             <h2 class="section-title">Nossos Clientes</h2>*/
/*             <div class="row">*/
/*                 <div class="col-md-6">*/
/*                     <div class="bxslider-controls">*/
/*                         <span id="bx-prev5"></span>*/
/*                         <span id="bx-next5"></span>*/
/*                     </div>*/
/*                     <ul class="bxslider" id="home-block">*/
/*                         <li>*/
/*                             <blockquote class="blockquote-color">*/
/*                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>*/
/*                                 <footer>Mirian Dayrell, CEO da Mirian Dayrell Imóveis</footer>*/
/*                             </blockquote>*/
/*                         </li>*/
/*                         <li>*/
/*                             <blockquote class="blockquote-color">*/
/*                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>*/
/*                                 <footer>Roberto Marinho, Jornal o Globo</footer>*/
/*                             </blockquote>*/
/*                         </li>*/
/*                         <li>*/
/*                             <blockquote class="blockquote-color">*/
/*                                 <p>Dolore totam at ea reiciendis suscipit a tempore cum nisi aspernatur nisi alias posuere erat a ante posuere erat a ante ultricies ultricies nisi vel augue quam semper conse erat quuntur.</p>*/
/*                                 <footer>Silvio Santos, Dono da SBT</footer>*/
/*                             </blockquote>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     <div class="row">*/
/*                         <div class="col-md-3 col-sm-3 col-xs-6">*/
/*                             {#{% image '@AppBundle/Resources/public/assets/img/demo/intel.png' %}#}*/
/*                             <img src="{{ asset('bundles/app/assets/img/demo/intel.png') }}" class="img-responsive" alt="Image">*/
/*                             {#{% endimage %}#}*/
/*                         </div>*/
/*                         <div class="col-md-3 col-sm-3 col-xs-6">*/
/*                             {#{% image '@AppBundle/Resources/public/assets/img/demo/microsoft.png' %}#}*/
/*                             <img src="{{ asset('bundles/app/assets/img/demo/microsoft.png') }}" class="img-responsive" alt="Image">*/
/*                             {#{% endimage %}#}*/
/*                         </div>*/
/*                         <div class="col-md-3 col-sm-3 col-xs-6">*/
/*                             {#{% image '@AppBundle/Resources/public/assets/img/demo/nokia.png' %}#}*/
/*                             <img src="{{ asset('bundles/app/assets/img/demo/nokia.png') }}" class="img-responsive" alt="Image">*/
/*                             {#{% endimage %}#}*/
/*                         </div>*/
/*                         <div class="col-md-3 col-sm-3 col-xs-6">*/
/*                             {#{% image '@AppBundle/Resources/public/assets/img/demo/samsung.png' %}#}*/
/*                             <img src="{{ asset('bundles/app/assets/img/demo/samsung.png') }}" class="img-responsive" alt="Image">*/
/*                             {#{% endimage %}#}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <div class="col-md-3 col-sm-3 col-xs-6">*/
/*                             {#{% image '@AppBundle/Resources/public/assets/img/demo/anz.png' %}#}*/
/*                             <img src="{{ asset('bundles/app/assets/img/demo/anz.png') }}" class="img-responsive" alt="Image">*/
/*                             {#{% endimage %}#}*/
/*                         </div>*/
/*                         <div class="col-md-3 col-sm-3 col-xs-6">*/
/*                             {#{% image '@AppBundle/Resources/public/assets/img/demo/maxis.png' %}#}*/
/*                             <img src="{{ asset('bundles/app/assets/img/demo/maxis.png') }}" class="img-responsive" alt="Image">*/
/*                             {#{% endimage %}#}*/
/*                         </div>*/
/*                         <div class="col-md-3 col-sm-3 col-xs-6">*/
/*                             {#{% image '@AppBundle/Resources/public/assets/img/demo/sony.png' %}#}*/
/*                             <img src="{{ asset('bundles/app/assets/img/demo/sony.png') }}" class="img-responsive" alt="Image">*/
/*                             {#{% endimage %}#}*/
/*                         </div>*/
/*                         <div class="col-md-3 col-sm-3 col-xs-6">*/
/*                             {#{% image '@AppBundle/Resources/public/assets/img/demo/hp.png' %}#}*/
/*                             <img src="{{ asset('bundles/app/assets/img/demo/hp.png') }}" class="img-responsive" alt="Image">*/
/*                             {#{% endimage %}#}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/* */
/*     </div>*/
/* */
/*             {#aqui o footer#}*/
/* */
/* */
/*     {#aqui o slidebar#}*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('bundles/app/assets/js/index.js') }}"></script>*/
/* {% endblock %}*/
