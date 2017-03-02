<?php

/* ::layout.html.twig */
class __TwigTemplate_5b6734360f14e4704cd3acadf64fc5653b16edbeead65104a19f5b1750e5507e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base-sin-assetics.html.twig", "::layout.html.twig", 1);
        $this->blocks = array(
            'menus' => array($this, 'block_menus'),
            'aside' => array($this, 'block_aside'),
            'slidebar' => array($this, 'block_slidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base-sin-assetics.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menus($context, array $blocks = array())
    {
        // line 4
        echo "    <header id=\"header-full-top\" class=\"hidden-xs header-full-dark\">
        <div class=\"container\">
            <div class=\"header-full-title\">
                <h1 class=\"animated fadeInRight\"><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Luís <span>Riego</span></a></h1>
                <p class=\"animated fadeInRight\">Programador Web</p>
            </div>
            <nav class=\"top-nav\">

                <div class=\"dropdown animated fadeInDown animation-delay-11\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> Login</a>
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-login-box animated flipCenter\">

                        ";
        // line 16
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:login"), array());
        // line 17
        echo "
                    </div>
                </div> <!-- dropdown -->

                <div class=\"dropdown animated fadeInDown animation-delay-13\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-search\"></i></a>
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-search-box animated fadeInUp\">
                        <form role=\"form\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Buscar...\">
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-ar btn-primary\" type=\"button\">Buscar!</button>
                            </span>
                            </div><!-- /input-group -->
                        </form>
                    </div>
                </div> <!-- dropdown -->
            </nav>
        </div> <!-- container -->
    </header> <!-- header-full -->
    <nav class=\"navbar navbar-default navbar-header-full navbar-dark yamm navbar-static-top\" role=\"navigation\" id=\"header\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <i class=\"fa fa-bars\"></i>
                </button>
                <a id=\"ar-brand\" class=\"navbar-brand hidden-lg hidden-md hidden-sm navbar-dark\" href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Clinica <span>do Micro</span></a>
            </div> <!-- navbar-header -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"pull-right\">
                <a href=\"javascript:void(0);\" class=\"sb-icon-navbar sb-toggle-right\"><i class=\"fa fa-bars\"></i></a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"\">
                        <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"\" data-toggle=\"\" data-hover=\"\">Início</a>
                    </li>
                    <li class=\"dropdown yamm-fw\">
                        <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\">Serviços</a>
                        <ul class=\"dropdown-menu dropdown-menu-left animated-2x animated fadeIn\">
                            <li>
                                <div class=\"yamm-content\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 col-md-6 col-sm-6 col-megamenu\">
                                            <div class=\"megamenu-block\">
                                                <h4 class=\"megamenu-block-title\"><i class=\"fa fa-sitemap\"></i> Redes</h4>
                                                <ul>
                                                    <li><a href=\"#\"><i class=\"fa fa-sitemap\"></i> Instalação de redes</a></li>
                                                    <li><a href=\"#\"><i class=\"fa fa-gears\"></i> Manutenção de redes</a></li>
                                                    <li><a href=\"#\"><i class=\"fa fa-gear\"></i> Conserto de instalações de terceiros</a></li>
                                                    <li><a href=\"#\"><i class=\"fa fa-code-fork\"></i> Proyetos de redes</a></li>
                                                    <li><a href=\"#\"><i class=\"fa fa-puzzle-piece\"></i> Ampliação de redes</a></li>
                                                </ul>
                                            </div>
                                            <div class=\"megamenu-block\">
                                                <h4 class=\"megamenu-block-title\"><i class=\"fa fa-rss\"></i> WI-Fi</h4>
                                                <ul>
                                                    <li><a href=\"#\"><i class=\"fa fa-rss\"></i> Wi-Fi básico</a></li>
                                                    <li><a href=\"#\"><i class=\"fa fa-rss-square\"></i> Wi-Fi especiais <span class=\"label label-info pull-right\">Consulte</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-3 col-md-6 col-sm-6 col-megamenu\">
                                            <div class=\"megamenu-block\">
                                                <h4 class=\"megamenu-block-title\"><i class=\"fa fa-cubes\"></i> Servidores</h4>
                                                <ul>
                                                    <li><a href=\"#\"><i class=\"fa fa-dollar\"></i> Venda</a></li>
                                                    <li><a href=\"#\"><i class=\"fa fa-gears\"></i> Instalação</a></li>
                                                    <li><a href=\"#\"><i class=\"fa fa-gear\"></i> Manutenção</a></li>
                                                    <li><a href=\"#\"><i class=\"fa fa-scissors\"></i> Servidores a medida</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-3 col-md-6 col-sm-6 col-megamenu\">
                                            <div class=\"megamenu-block\">
                                                <h4 class=\"megamenu-block-title\"><i class=\"fa fa-cloud\"></i> Virtualização</h4>
                                                <ul>
                                                    <li><a href=\"#\"><i class=\"fa fa-cloud-upload\"></i> Projetos de Virtualização<span class=\"label label-info pull-right\">Novidade</span></a></li>
                                                    <li><a href=\"#\"><i class=\"fa fa-cloud-download\"></i> Implantação</a></li>
                                                    <li><a href=\"#\"><i class=\"fa fa-question\"></i> FAQ</a></li>
                                                </ul>
                                            </div>
                                            <div class=\"megamenu-block\">
                                                <h4 class=\"megamenu-block-title\"><i class=\"fa fa-ellipsis-v\"></i> Armazenamento</h4>
                                                <ul>
                                                    <li><a href=\"#\"><i class=\"fa fa-rss\"></i> HDs clasicos</a></li>
                                                    <li><a href=\"#\"><i class=\"fa fa-rss-square\"></i> HDs SSD <span class=\"label label-info pull-right\">Consulte</span></a></li>
                                                    <li><a href=\"#\"><i class=\"fa fa-cloud\"></i> Nuvem privada<span class=\"label label-info pull-right\">Novidade</span></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class=\"col-lg-3 col-md-6 col-sm-6 col-megamenu\">
                                            <div class=\"megamenu-block\">
                                                <h4 class=\"megamenu-block-title\"><i class=\"fa fa-product-hunt\"></i> Programas</h4>
                                                <ul>
                                                    <li><a href=\"#\"><i class=\"fa fa-dollar\"></i> Venda e instalação</a></li>
                                                    <li><a href=\"#\"><i class=\"fa fa-support\"></i> Suporte <span class=\"label label-success pull-right\">New</span></a></li>
                                                    <li><a href=\"#\"><i class=\"fa fa-download\"></i> Downloads para clientes <span class=\"label label-success pull-right\">Novidade</span></a></li>
                                                </ul>
                                            </div>
                                            <div class=\"megamenu-block\">
                                                <h4 class=\"megamenu-block-title\"><i class=\"fa fa-ellipsis-v\"></i> Bases de datos</h4>
                                                <ul>
                                                    <li><a href=\"#\"><i class=\"fa fa-database\"></i> SQL</a></li>
                                                    <li><a href=\"#\"><i class=\"fa fa-database\"></i> não-SQL <span class=\"label label-info pull-right\">Consulte</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    ";
        // line 135
        echo "                        ";
        // line 136
        echo "                        ";
        // line 137
        echo "                            ";
        // line 138
        echo "                                ";
        // line 139
        echo "                                    ";
        // line 140
        echo "                                        ";
        // line 141
        echo "                                            ";
        // line 142
        echo "                                                ";
        // line 143
        echo "                                                ";
        // line 144
        echo "                                                    ";
        // line 145
        echo "                                                    ";
        // line 146
        echo "                                                    ";
        // line 147
        echo "                                                ";
        // line 148
        echo "                                            ";
        // line 149
        echo "                                            ";
        // line 150
        echo "                                                ";
        // line 151
        echo "                                                ";
        // line 152
        echo "                                                    ";
        // line 153
        echo "                                                    ";
        // line 154
        echo "                                                ";
        // line 155
        echo "                                            ";
        // line 156
        echo "                                        ";
        // line 157
        echo "                                        ";
        // line 158
        echo "                                            ";
        // line 159
        echo "                                                ";
        // line 160
        echo "                                                ";
        // line 161
        echo "                                                    ";
        // line 162
        echo "                                                    ";
        // line 163
        echo "                                                ";
        // line 164
        echo "                                            ";
        // line 165
        echo "                                            ";
        // line 166
        echo "                                                ";
        // line 167
        echo "                                                ";
        // line 168
        echo "                                                    ";
        // line 169
        echo "                                                    ";
        // line 170
        echo "                                                    ";
        // line 171
        echo "                                                ";
        // line 172
        echo "                                            ";
        // line 173
        echo "                                        ";
        // line 174
        echo "                                        ";
        // line 175
        echo "                                            ";
        // line 176
        echo "                                                ";
        // line 177
        echo "                                                ";
        // line 178
        echo "                                                    ";
        // line 179
        echo "                                                    ";
        // line 180
        echo "                                                    ";
        // line 181
        echo "                                                    ";
        // line 182
        echo "                                                ";
        // line 183
        echo "                                            ";
        // line 184
        echo "                                            ";
        // line 185
        echo "                                                ";
        // line 186
        echo "                                                ";
        // line 187
        echo "                                                    ";
        // line 188
        echo "                                                    ";
        // line 189
        echo "                                                    ";
        // line 190
        echo "                                                ";
        // line 191
        echo "                                            ";
        // line 192
        echo "                                        ";
        // line 193
        echo "
                                        ";
        // line 195
        echo "                                            ";
        // line 196
        echo "                                                ";
        // line 197
        echo "                                                ";
        // line 198
        echo "                                                    ";
        // line 199
        echo "                                                    ";
        // line 200
        echo "                                                ";
        // line 201
        echo "                                            ";
        // line 202
        echo "                                            ";
        // line 203
        echo "                                                ";
        // line 204
        echo "                                                ";
        // line 205
        echo "                                                    ";
        // line 206
        echo "                                                    ";
        // line 207
        echo "                                                ";
        // line 208
        echo "                                            ";
        // line 209
        echo "                                        ";
        // line 210
        echo "                                    ";
        // line 211
        echo "                                ";
        // line 212
        echo "                            ";
        // line 213
        echo "                        ";
        // line 214
        echo "                    ";
        // line 215
        echo "                    <li class=\"\">
                        <a href=\"";
        // line 216
        echo $this->env->getExtension('routing')->getPath("nossos-clientes");
        echo "\" class=\"\" data-toggle=\"\" data-hover=\"\">Portifólio</a>
                    </li>
                    <li class=\"\">
                        <a href=\"";
        // line 219
        echo $this->env->getExtension('routing')->getPath("nossos-clientes");
        echo "\" class=\"\" data-toggle=\"\" data-hover=\"\">Nossos Clientes</a>
                    </li>
                    <li class=\"\">
                        <a href=\"";
        // line 222
        echo $this->env->getExtension('routing')->getPath("contato");
        echo "\" class=\"\" data-toggle=\"\" data-hover=\"\">Contato</a>
                    </li>
                    ";
        // line 224
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 225
            echo "                        <li class=\"dropdown yamm-fw\">
                            <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\">Administração</a>
                            <ul class=\"dropdown-menu dropdown-menu-left animated-2x animated fadeIn\">
                                <li>
                                    <div class=\"yamm-content\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-3 col-md-6 col-sm-6 col-megamenu\">
                                                <div class=\"megamenu-block\">
                                                    <h4 class=\"megamenu-block-title\"><i class=\"fa fa-dollar\"></i> Contabilidade doméstica</h4>
                                                    <ul>
                                                        <li><a href=\"";
            // line 235
            echo $this->env->getExtension('routing')->getPath("formulario_asiento");
            echo "\"><i class=\"fa fa-list-alt\"></i> Formulário de Assentos</a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-bar-chart-o\"></i> Consumo por mes</a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-bar-chart\"></i> Consumo por Grupo</a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dollar\"></i> Cálculos financeiros</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-3 col-md-6 col-sm-6 col-megamenu\">
                                                <div class=\"megamenu-block\">
                                                    <h4 class=\"megamenu-block-title\"><i class=\"fa fa-cubes\"></i> Área de administração</h4>
                                                    <ul>
                                                        <li><a href=\"";
            // line 246
            echo $this->env->getExtension('routing')->getPath("admin");
            echo "\"><i class=\"fa fa-bar-chart-o\"></i> Admin</a></li>
                                                        ";
            // line 248
            echo "                                                        ";
            // line 249
            echo "                                                        ";
            // line 250
            echo "                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-3 col-md-6 col-sm-6 col-megamenu\">
                                                <div class=\"megamenu-block\">
                                                    <h4 class=\"megamenu-block-title\"><i class=\"fa fa-cloud\"></i> Virtualização</h4>
                                                    <ul>
                                                        <li><a href=\"#\"><i class=\"fa fa-cloud-upload\"></i> Projetos de Virtualização<span class=\"label label-info pull-right\">Novidade</span></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-cloud-download\"></i> Implantação</a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-question\"></i> FAQ</a></li>
                                                    </ul>
                                                </div>
                                                <div class=\"megamenu-block\">
                                                    <h4 class=\"megamenu-block-title\"><i class=\"fa fa-ellipsis-v\"></i> Armazenamento</h4>
                                                    <ul>
                                                        <li><a href=\"#\"><i class=\"fa fa-rss\"></i> HDs clasicos</a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-rss-square\"></i> HDs SSD <span class=\"label label-info pull-right\">Consulte</span></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-cloud\"></i> Nuvem privada<span class=\"label label-info pull-right\">Novidade</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class=\"col-lg-3 col-md-6 col-sm-6 col-megamenu\">
                                                <div class=\"megamenu-block\">
                                                    <h4 class=\"megamenu-block-title\"><i class=\"fa fa-product-hunt\"></i> Programas</h4>
                                                    <ul>
                                                        <li><a href=\"#\"><i class=\"fa fa-dollar\"></i> Venda e instalação</a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-support\"></i> Suporte <span class=\"label label-success pull-right\">New</span></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-download\"></i> Downloads para clientes <span class=\"label label-success pull-right\">Novidade</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class=\"megamenu-block\">
                                                    <h4 class=\"megamenu-block-title\"><i class=\"fa fa-ellipsis-v\"></i> Bases de datos</h4>
                                                    <ul>
                                                        <li><a href=\"#\"><i class=\"fa fa-database\"></i> SQL</a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-database\"></i> não-SQL <span class=\"label label-info pull-right\">Consulte</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    ";
        }
        // line 295
        echo "                </ul>
            </div><!-- navbar-collapse -->
        </div><!-- container -->
    </nav>
";
    }

    // line 301
    public function block_aside($context, array $blocks = array())
    {
        // line 302
        echo "    <aside id=\"footer-widgets\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <h3 class=\"footer-widget-title\">Mapa do Site</h3>
                    <ul class=\"list-unstyled three_cols\">
                        <li><a href=\"";
        // line 308
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Início</a></li>
                        <li><a href=\"";
        // line 309
        echo $this->env->getExtension('routing')->getPath("servicos");
        echo "\">Serviços</a></li>
                        <li><a href=\"";
        // line 310
        echo $this->env->getExtension('routing')->getPath("produtos");
        echo "\">Produtos</a></li>
                        <li><a href=\"";
        // line 311
        echo $this->env->getExtension('routing')->getPath("nossos-clientes");
        echo "\">Nossos clientes</a></li>
                        <li><a href=\"#";
        // line 312
        echo "\">FAQ</a></li>
                        <li><a href=\"";
        // line 313
        echo $this->env->getExtension('routing')->getPath("contato");
        echo "\">Contato</a></li>
                    </ul>
                    <h3 class=\"footer-widget-title\">Suscriba nosso Newsletter</h3>
                    <p>Lorem ipsum Amet fugiat elit nisi anim mollit minim labore ut esse Duis ullamco ad dolor veniam velit.</p>
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Seu Email\">
                    <span class=\"input-group-btn\">
                        <button class=\"btn btn-ar btn-primary\" type=\"button\">Suscribir</button>
                    </span>
                    </div><!-- /input-group -->
                </div>
                <div class=\"col-md-4 hidden-xs invisible\">
                    <div class=\"footer-widget\">
                        <h3 class=\"footer-widget-title\">Post Recentes</h3>
                        <div class=\"media\">
                            <a class=\"pull-left\" href=\"#\">
                                ";
        // line 330
        echo "                                <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/m2.jpg"), "html", null, true);
        echo "\" class=\"media-object\" alt=\"Image\" width=\"75\" height=\"75\">
                                ";
        // line 332
        echo "                            </a>
                            <div class=\"media-body\">
                                <h4 class=\"media-heading\"><a href=\"#\">Lorem ipsum Duis quis occaecat minim lorem ipsum tempor officia labor</a></h4>
                                <small>22 de dezembro de 2015</small>
                            </div>
                        </div>
                        <div class=\"media\">
                            <a class=\"pull-left\" href=\"#\">
                                ";
        // line 341
        echo "                                <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/m11.jpg"), "html", null, true);
        echo "\" class=\"media-object\" alt=\"Image\" width=\"75\" height=\"75\">
                                ";
        // line 343
        echo "                            </a>
                            <div class=\"media-body\">
                                <h4 class=\"media-heading\"><a href=\"#\">Lorem ipsum dolor excepteur sunt in lorem ipsum cillum tempor</a></h4>
                                <small>28 de dezembro de 2015</small>
                            </div>
                        </div>
                        <div class=\"media\">
                            <a class=\"pull-left\" href=\"#\">
                                ";
        // line 352
        echo "                                <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/m4.jpg"), "html", null, true);
        echo "\" class=\"media-object\" alt=\"Image\" width=\"75\" height=\"75\">
                                ";
        // line 354
        echo "                            </a>
                            <div class=\"media-body\">
                                <h4 class=\"media-heading\"><a href=\"#\">Lorem ipsum Dolor cupidatat minim adipisicing et fugiat</a></h4>
                                <small>3 de janeiro de 2016</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"footer-widget\">
                        <h3 class=\"footer-widget-title\">Últimos serviços prestados</h3>
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-md-6 col-sm-3 col-xs-6\">
                                <a href=\"#\" class=\"thumbnail\">
                                    ";
        // line 369
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/wf1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                                    ";
        // line 371
        echo "                                </a>
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-3 col-xs-6\">
                                <a href=\"#\" class=\"thumbnail\">
                                    ";
        // line 376
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/wf2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                                    ";
        // line 378
        echo "                                </a>
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-3 col-xs-6\">
                                <a href=\"#\" class=\"thumbnail\">
                                    ";
        // line 383
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/wf3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                                    ";
        // line 385
        echo "                                </a>
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-3 col-xs-6\">
                                <a href=\"#\" class=\"thumbnail\">
                                    ";
        // line 390
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/assets/img/demo/wf4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Image\">
                                    ";
        // line 392
        echo "                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </aside> <!-- footer-widgets -->
";
    }

    // line 402
    public function block_slidebar($context, array $blocks = array())
    {
        // line 403
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 404
            echo "        <div class=\"sb-slidebar sb-right\">
            <div class=\"input-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
            <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-search\"></i></button>
            </span>
            </div><!-- /input-group -->

            <h2 class=\"slidebar-header no-margin-bottom\">Menu</h2>
            <ul class=\"slidebar-menu\">
                <li><a href=\"";
            // line 414
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\">Início</a></li>
                <li><a href=\"";
            // line 415
            echo $this->env->getExtension('routing')->getPath("servicos");
            echo "\">Serviços</a></li>
                <li><a href=\"";
            // line 416
            echo $this->env->getExtension('routing')->getPath("produtos");
            echo "\">Produtos</a></li>
                <li><a href=\"";
            // line 417
            echo $this->env->getExtension('routing')->getPath("nossos-clientes");
            echo "\">Nossos Clientes</a></li>
                <li><a href=\"";
            // line 418
            echo $this->env->getExtension('routing')->getPath("contato");
            echo "\">Contato</a></li>
            </ul>

            <h2 class=\"slidebar-header\">Redes Sociais</h2>
            <div class=\"slidebar-social-icons\">
                <a href=\"#\" class=\"social-icon-ar rss\"><i class=\"fa fa-rss\"></i></a>
                <a href=\"#\" class=\"social-icon-ar facebook\"><i class=\"fa fa-facebook\"></i></a>
                <a href=\"#\" class=\"social-icon-ar twitter\"><i class=\"fa fa-twitter\"></i></a>
                <!--<a href=\"#\" class=\"social-icon-ar pinterest\"><i class=\"fa fa-pinterest\"></i></a>-->
                <!--<a href=\"#\" class=\"social-icon-ar instagram\"><i class=\"fa fa-instagram\"></i></a>-->
                <!--<a href=\"#\" class=\"social-icon-ar wordpress\"><i class=\"fa fa-wordpress\"></i></a>-->
                <!--<a href=\"#\" class=\"social-icon-ar linkedin\"><i class=\"fa fa-linkedin\"></i></a>-->
                <!--<a href=\"#\" class=\"social-icon-ar flickr\"><i class=\"fa fa-flickr\"></i></a>-->
                <!--<a href=\"#\" class=\"social-icon-ar vine\"><i class=\"fa fa-vine\"></i></a>-->
                <!--<a href=\"#\" class=\"social-icon-ar dribbble\"><i class=\"fa fa-dribbble\"></i></a>-->
            </div>
        </div> <!-- sb-slidebar sb-right -->
    ";
        }
        // line 436
        echo "    <div id=\"back-top\">
        <a href=\"#header\"><i class=\"fa fa-chevron-up\"></i></a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  652 => 436,  631 => 418,  627 => 417,  623 => 416,  619 => 415,  615 => 414,  603 => 404,  600 => 403,  597 => 402,  585 => 392,  580 => 390,  574 => 385,  569 => 383,  563 => 378,  558 => 376,  552 => 371,  547 => 369,  531 => 354,  526 => 352,  516 => 343,  511 => 341,  501 => 332,  496 => 330,  477 => 313,  474 => 312,  470 => 311,  466 => 310,  462 => 309,  458 => 308,  450 => 302,  447 => 301,  439 => 295,  392 => 250,  390 => 249,  388 => 248,  384 => 246,  370 => 235,  358 => 225,  356 => 224,  351 => 222,  345 => 219,  339 => 216,  336 => 215,  334 => 214,  332 => 213,  330 => 212,  328 => 211,  326 => 210,  324 => 209,  322 => 208,  320 => 207,  318 => 206,  316 => 205,  314 => 204,  312 => 203,  310 => 202,  308 => 201,  306 => 200,  304 => 199,  302 => 198,  300 => 197,  298 => 196,  296 => 195,  293 => 193,  291 => 192,  289 => 191,  287 => 190,  285 => 189,  283 => 188,  281 => 187,  279 => 186,  277 => 185,  275 => 184,  273 => 183,  271 => 182,  269 => 181,  267 => 180,  265 => 179,  263 => 178,  261 => 177,  259 => 176,  257 => 175,  255 => 174,  253 => 173,  251 => 172,  249 => 171,  247 => 170,  245 => 169,  243 => 168,  241 => 167,  239 => 166,  237 => 165,  235 => 164,  233 => 163,  231 => 162,  229 => 161,  227 => 160,  225 => 159,  223 => 158,  221 => 157,  219 => 156,  217 => 155,  215 => 154,  213 => 153,  211 => 152,  209 => 151,  207 => 150,  205 => 149,  203 => 148,  201 => 147,  199 => 146,  197 => 145,  195 => 144,  193 => 143,  191 => 142,  189 => 141,  187 => 140,  185 => 139,  183 => 138,  181 => 137,  179 => 136,  177 => 135,  95 => 55,  82 => 45,  52 => 17,  50 => 16,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends('::base-sin-assetics.html.twig') %}*/
/* */
/* {% block menus %}*/
/*     <header id="header-full-top" class="hidden-xs header-full-dark">*/
/*         <div class="container">*/
/*             <div class="header-full-title">*/
/*                 <h1 class="animated fadeInRight"><a href="{{ path('homepage') }}">Luís <span>Riego</span></a></h1>*/
/*                 <p class="animated fadeInRight">Programador Web</p>*/
/*             </div>*/
/*             <nav class="top-nav">*/
/* */
/*                 <div class="dropdown animated fadeInDown animation-delay-11">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Login</a>*/
/*                     <div class="dropdown-menu dropdown-menu-right dropdown-login-box animated flipCenter">*/
/* */
/*                         {% render(controller('FOSUserBundle:Security:login')) %}*/
/* */
/*                     </div>*/
/*                 </div> <!-- dropdown -->*/
/* */
/*                 <div class="dropdown animated fadeInDown animation-delay-13">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>*/
/*                     <div class="dropdown-menu dropdown-menu-right dropdown-search-box animated fadeInUp">*/
/*                         <form role="form">*/
/*                             <div class="input-group">*/
/*                                 <input type="text" class="form-control" placeholder="Buscar...">*/
/*                             <span class="input-group-btn">*/
/*                                 <button class="btn btn-ar btn-primary" type="button">Buscar!</button>*/
/*                             </span>*/
/*                             </div><!-- /input-group -->*/
/*                         </form>*/
/*                     </div>*/
/*                 </div> <!-- dropdown -->*/
/*             </nav>*/
/*         </div> <!-- container -->*/
/*     </header> <!-- header-full -->*/
/*     <nav class="navbar navbar-default navbar-header-full navbar-dark yamm navbar-static-top" role="navigation" id="header">*/
/*         <div class="container">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <i class="fa fa-bars"></i>*/
/*                 </button>*/
/*                 <a id="ar-brand" class="navbar-brand hidden-lg hidden-md hidden-sm navbar-dark" href="{{ path("homepage") }}">Clinica <span>do Micro</span></a>*/
/*             </div> <!-- navbar-header -->*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="pull-right">*/
/*                 <a href="javascript:void(0);" class="sb-icon-navbar sb-toggle-right"><i class="fa fa-bars"></i></a>*/
/*             </div>*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li class="">*/
/*                         <a href="{{ path('homepage') }}" class="" data-toggle="" data-hover="">Início</a>*/
/*                     </li>*/
/*                     <li class="dropdown yamm-fw">*/
/*                         <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Serviços</a>*/
/*                         <ul class="dropdown-menu dropdown-menu-left animated-2x animated fadeIn">*/
/*                             <li>*/
/*                                 <div class="yamm-content">*/
/*                                     <div class="row">*/
/*                                         <div class="col-lg-3 col-md-6 col-sm-6 col-megamenu">*/
/*                                             <div class="megamenu-block">*/
/*                                                 <h4 class="megamenu-block-title"><i class="fa fa-sitemap"></i> Redes</h4>*/
/*                                                 <ul>*/
/*                                                     <li><a href="#"><i class="fa fa-sitemap"></i> Instalação de redes</a></li>*/
/*                                                     <li><a href="#"><i class="fa fa-gears"></i> Manutenção de redes</a></li>*/
/*                                                     <li><a href="#"><i class="fa fa-gear"></i> Conserto de instalações de terceiros</a></li>*/
/*                                                     <li><a href="#"><i class="fa fa-code-fork"></i> Proyetos de redes</a></li>*/
/*                                                     <li><a href="#"><i class="fa fa-puzzle-piece"></i> Ampliação de redes</a></li>*/
/*                                                 </ul>*/
/*                                             </div>*/
/*                                             <div class="megamenu-block">*/
/*                                                 <h4 class="megamenu-block-title"><i class="fa fa-rss"></i> WI-Fi</h4>*/
/*                                                 <ul>*/
/*                                                     <li><a href="#"><i class="fa fa-rss"></i> Wi-Fi básico</a></li>*/
/*                                                     <li><a href="#"><i class="fa fa-rss-square"></i> Wi-Fi especiais <span class="label label-info pull-right">Consulte</span></a></li>*/
/*                                                 </ul>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="col-lg-3 col-md-6 col-sm-6 col-megamenu">*/
/*                                             <div class="megamenu-block">*/
/*                                                 <h4 class="megamenu-block-title"><i class="fa fa-cubes"></i> Servidores</h4>*/
/*                                                 <ul>*/
/*                                                     <li><a href="#"><i class="fa fa-dollar"></i> Venda</a></li>*/
/*                                                     <li><a href="#"><i class="fa fa-gears"></i> Instalação</a></li>*/
/*                                                     <li><a href="#"><i class="fa fa-gear"></i> Manutenção</a></li>*/
/*                                                     <li><a href="#"><i class="fa fa-scissors"></i> Servidores a medida</a></li>*/
/*                                                 </ul>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="col-lg-3 col-md-6 col-sm-6 col-megamenu">*/
/*                                             <div class="megamenu-block">*/
/*                                                 <h4 class="megamenu-block-title"><i class="fa fa-cloud"></i> Virtualização</h4>*/
/*                                                 <ul>*/
/*                                                     <li><a href="#"><i class="fa fa-cloud-upload"></i> Projetos de Virtualização<span class="label label-info pull-right">Novidade</span></a></li>*/
/*                                                     <li><a href="#"><i class="fa fa-cloud-download"></i> Implantação</a></li>*/
/*                                                     <li><a href="#"><i class="fa fa-question"></i> FAQ</a></li>*/
/*                                                 </ul>*/
/*                                             </div>*/
/*                                             <div class="megamenu-block">*/
/*                                                 <h4 class="megamenu-block-title"><i class="fa fa-ellipsis-v"></i> Armazenamento</h4>*/
/*                                                 <ul>*/
/*                                                     <li><a href="#"><i class="fa fa-rss"></i> HDs clasicos</a></li>*/
/*                                                     <li><a href="#"><i class="fa fa-rss-square"></i> HDs SSD <span class="label label-info pull-right">Consulte</span></a></li>*/
/*                                                     <li><a href="#"><i class="fa fa-cloud"></i> Nuvem privada<span class="label label-info pull-right">Novidade</span></a></li>*/
/*                                                 </ul>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                         <div class="col-lg-3 col-md-6 col-sm-6 col-megamenu">*/
/*                                             <div class="megamenu-block">*/
/*                                                 <h4 class="megamenu-block-title"><i class="fa fa-product-hunt"></i> Programas</h4>*/
/*                                                 <ul>*/
/*                                                     <li><a href="#"><i class="fa fa-dollar"></i> Venda e instalação</a></li>*/
/*                                                     <li><a href="#"><i class="fa fa-support"></i> Suporte <span class="label label-success pull-right">New</span></a></li>*/
/*                                                     <li><a href="#"><i class="fa fa-download"></i> Downloads para clientes <span class="label label-success pull-right">Novidade</span></a></li>*/
/*                                                 </ul>*/
/*                                             </div>*/
/*                                             <div class="megamenu-block">*/
/*                                                 <h4 class="megamenu-block-title"><i class="fa fa-ellipsis-v"></i> Bases de datos</h4>*/
/*                                                 <ul>*/
/*                                                     <li><a href="#"><i class="fa fa-database"></i> SQL</a></li>*/
/*                                                     <li><a href="#"><i class="fa fa-database"></i> não-SQL <span class="label label-info pull-right">Consulte</span></a></li>*/
/*                                                 </ul>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     {#<li class="dropdown yamm-fw">#}*/
/*                         {#<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Produtos</a>#}*/
/*                         {#<ul class="dropdown-menu dropdown-menu-left animated-2x animated fadeIn">#}*/
/*                             {#<li>#}*/
/*                                 {#<div class="yamm-content">#}*/
/*                                     {#<div class="row">#}*/
/*                                         {#<div class="col-lg-3 col-md-6 col-sm-6 col-megamenu">#}*/
/*                                             {#<div class="megamenu-block">#}*/
/*                                                 {#<h4 class="megamenu-block-title"><i class="fa fa-sitemap"></i> Servidores</h4>#}*/
/*                                                 {#<ul>#}*/
/*                                                     {#<li><a href="#"><i class="fa fa-sitemap"></i> Servidor Linux</a></li>#}*/
/*                                                     {#<li><a href="#"><i class="fa fa-gears"></i> Servidor Windows</a></li>#}*/
/*                                                     {#<li><a href="#"><i class="fa fa-gear"></i> Servidor dedicado</a></li>#}*/
/*                                                 {#</ul>#}*/
/*                                             {#</div>#}*/
/*                                             {#<div class="megamenu-block">#}*/
/*                                                 {#<h4 class="megamenu-block-title"><i class="fa fa-terminal"></i> Thin Client</h4>#}*/
/*                                                 {#<ul>#}*/
/*                                                     {#<li><a href="#"><i class="fa fa-terminal"></i> Venda</a></li>#}*/
/*                                                     {#<li><a href="#"><i class="fa fa-terminal"></i> Aluguel <span class="label label-info pull-right">Consulte</span></a></li>#}*/
/*                                                 {#</ul>#}*/
/*                                             {#</div>#}*/
/*                                         {#</div>#}*/
/*                                         {#<div class="col-lg-3 col-md-6 col-sm-6 col-megamenu">#}*/
/*                                             {#<div class="megamenu-block">#}*/
/*                                                 {#<h4 class="megamenu-block-title"><i class="fa fa-desktop"></i> PCs</h4>#}*/
/*                                                 {#<ul>#}*/
/*                                                     {#<li><a href="#"><i class="fa fa-desktop"></i> Intel</a></li>#}*/
/*                                                     {#<li><a href="#"><i class="fa fa-desktop"></i> AMD</a></li>#}*/
/*                                                 {#</ul>#}*/
/*                                             {#</div>#}*/
/*                                             {#<div class="megamenu-block">#}*/
/*                                                 {#<h4 class="megamenu-block-title"><i class="fa fa-laptop"></i> Laptop</h4>#}*/
/*                                                 {#<ul>#}*/
/*                                                     {#<li><a href="#"><i class="fa fa-laptop"></i> hp</a></li>#}*/
/*                                                     {#<li><a href="#"><i class="fa fa-laptop"></i> Sony</a></li>#}*/
/*                                                     {#<li><a href="#"><i class="fa fa-laptop"></i> Lenovo</a></li>#}*/
/*                                                 {#</ul>#}*/
/*                                             {#</div>#}*/
/*                                         {#</div>#}*/
/*                                         {#<div class="col-lg-3 col-md-6 col-sm-6 col-megamenu">#}*/
/*                                             {#<div class="megamenu-block">#}*/
/*                                                 {#<h4 class="megamenu-block-title"><i class="fa fa-cloud"></i> Memória</h4>#}*/
/*                                                 {#<ul>#}*/
/*                                                     {#<li><a href="#"><i class="fa fa-cloud-upload"></i> Para PCs<span class="label label-info pull-right">Novidade</span></a></li>#}*/
/*                                                     {#<li><a href="#"><i class="fa fa-cloud-download"></i> Para Laptop</a></li>#}*/
/*                                                     {#<li><a href="#"><i class="fa fa-question"></i> Pendrives</a></li>#}*/
/*                                                     {#<li><a href="#"><i class="fa fa-question"></i> cartões de memória</a></li>#}*/
/*                                                 {#</ul>#}*/
/*                                             {#</div>#}*/
/*                                             {#<div class="megamenu-block">#}*/
/*                                                 {#<h4 class="megamenu-block-title"><i class="fa fa-database"></i> Armazenamento</h4>#}*/
/*                                                 {#<ul>#}*/
/*                                                     {#<li><a href="#"><i class="fa fa-cloud"></i> HDs clasicos</a></li>#}*/
/*                                                     {#<li><a href="#"><i class="fa fa-cloud"></i> HDs SSD <span class="label label-info pull-right">Consulte</span></a></li>#}*/
/*                                                     {#<li><a href="#"><i class="fa fa-cloud"></i> Nuvem privada<span class="label label-info pull-right">Novidade</span></a></li>#}*/
/*                                                 {#</ul>#}*/
/*                                             {#</div>#}*/
/*                                         {#</div>#}*/
/* */
/*                                         {#<div class="col-lg-3 col-md-6 col-sm-6 col-megamenu">#}*/
/*                                             {#<div class="megamenu-block">#}*/
/*                                                 {#<h4 class="megamenu-block-title"><i class="fa fa-product-hunt"></i> Placas Mãe</h4>#}*/
/*                                                 {#<ul>#}*/
/*                                                     {#<li><a href="#"><i class="fa fa-dollar"></i> Assus</a></li>#}*/
/*                                                     {#<li><a href="#"><i class="fa fa-support"></i> Intel <span class="label label-success pull-right">New</span></a></li>#}*/
/*                                                 {#</ul>#}*/
/*                                             {#</div>#}*/
/*                                             {#<div class="megamenu-block">#}*/
/*                                                 {#<h4 class="megamenu-block-title"><i class="fa fa-ellipsis-v"></i> Placas de Video</h4>#}*/
/*                                                 {#<ul>#}*/
/*                                                     {#<li><a href="#"><i class="fa fa-database"></i> NVidia</a></li>#}*/
/*                                                     {#<li><a href="#"><i class="fa fa-database"></i> Gigabyte <span class="label label-info pull-right">Consulte</span></a></li>#}*/
/*                                                 {#</ul>#}*/
/*                                             {#</div>#}*/
/*                                         {#</div>#}*/
/*                                     {#</div>#}*/
/*                                 {#</div>#}*/
/*                             {#</li>#}*/
/*                         {#</ul>#}*/
/*                     {#</li>#}*/
/*                     <li class="">*/
/*                         <a href="{{ path('nossos-clientes') }}" class="" data-toggle="" data-hover="">Portifólio</a>*/
/*                     </li>*/
/*                     <li class="">*/
/*                         <a href="{{ path('nossos-clientes') }}" class="" data-toggle="" data-hover="">Nossos Clientes</a>*/
/*                     </li>*/
/*                     <li class="">*/
/*                         <a href="{{ path('contato') }}" class="" data-toggle="" data-hover="">Contato</a>*/
/*                     </li>*/
/*                     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                         <li class="dropdown yamm-fw">*/
/*                             <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Administração</a>*/
/*                             <ul class="dropdown-menu dropdown-menu-left animated-2x animated fadeIn">*/
/*                                 <li>*/
/*                                     <div class="yamm-content">*/
/*                                         <div class="row">*/
/*                                             <div class="col-lg-3 col-md-6 col-sm-6 col-megamenu">*/
/*                                                 <div class="megamenu-block">*/
/*                                                     <h4 class="megamenu-block-title"><i class="fa fa-dollar"></i> Contabilidade doméstica</h4>*/
/*                                                     <ul>*/
/*                                                         <li><a href="{{ path('formulario_asiento') }}"><i class="fa fa-list-alt"></i> Formulário de Assentos</a></li>*/
/*                                                         <li><a href="#"><i class="fa fa-bar-chart-o"></i> Consumo por mes</a></li>*/
/*                                                         <li><a href="#"><i class="fa fa-bar-chart"></i> Consumo por Grupo</a></li>*/
/*                                                         <li><a href="#"><i class="fa fa-dollar"></i> Cálculos financeiros</a></li>*/
/*                                                     </ul>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="col-lg-3 col-md-6 col-sm-6 col-megamenu">*/
/*                                                 <div class="megamenu-block">*/
/*                                                     <h4 class="megamenu-block-title"><i class="fa fa-cubes"></i> Área de administração</h4>*/
/*                                                     <ul>*/
/*                                                         <li><a href="{{ path('admin') }}"><i class="fa fa-bar-chart-o"></i> Admin</a></li>*/
/*                                                         {#<li><a href="#"><i class="fa fa-gears"></i> Instalação</a></li>#}*/
/*                                                         {#<li><a href="#"><i class="fa fa-gear"></i> Manutenção</a></li>#}*/
/*                                                         {#<li><a href="#"><i class="fa fa-scissors"></i> Servidores a medida</a></li>#}*/
/*                                                     </ul>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="col-lg-3 col-md-6 col-sm-6 col-megamenu">*/
/*                                                 <div class="megamenu-block">*/
/*                                                     <h4 class="megamenu-block-title"><i class="fa fa-cloud"></i> Virtualização</h4>*/
/*                                                     <ul>*/
/*                                                         <li><a href="#"><i class="fa fa-cloud-upload"></i> Projetos de Virtualização<span class="label label-info pull-right">Novidade</span></a></li>*/
/*                                                         <li><a href="#"><i class="fa fa-cloud-download"></i> Implantação</a></li>*/
/*                                                         <li><a href="#"><i class="fa fa-question"></i> FAQ</a></li>*/
/*                                                     </ul>*/
/*                                                 </div>*/
/*                                                 <div class="megamenu-block">*/
/*                                                     <h4 class="megamenu-block-title"><i class="fa fa-ellipsis-v"></i> Armazenamento</h4>*/
/*                                                     <ul>*/
/*                                                         <li><a href="#"><i class="fa fa-rss"></i> HDs clasicos</a></li>*/
/*                                                         <li><a href="#"><i class="fa fa-rss-square"></i> HDs SSD <span class="label label-info pull-right">Consulte</span></a></li>*/
/*                                                         <li><a href="#"><i class="fa fa-cloud"></i> Nuvem privada<span class="label label-info pull-right">Novidade</span></a></li>*/
/*                                                     </ul>*/
/*                                                 </div>*/
/*                                             </div>*/
/* */
/*                                             <div class="col-lg-3 col-md-6 col-sm-6 col-megamenu">*/
/*                                                 <div class="megamenu-block">*/
/*                                                     <h4 class="megamenu-block-title"><i class="fa fa-product-hunt"></i> Programas</h4>*/
/*                                                     <ul>*/
/*                                                         <li><a href="#"><i class="fa fa-dollar"></i> Venda e instalação</a></li>*/
/*                                                         <li><a href="#"><i class="fa fa-support"></i> Suporte <span class="label label-success pull-right">New</span></a></li>*/
/*                                                         <li><a href="#"><i class="fa fa-download"></i> Downloads para clientes <span class="label label-success pull-right">Novidade</span></a></li>*/
/*                                                     </ul>*/
/*                                                 </div>*/
/*                                                 <div class="megamenu-block">*/
/*                                                     <h4 class="megamenu-block-title"><i class="fa fa-ellipsis-v"></i> Bases de datos</h4>*/
/*                                                     <ul>*/
/*                                                         <li><a href="#"><i class="fa fa-database"></i> SQL</a></li>*/
/*                                                         <li><a href="#"><i class="fa fa-database"></i> não-SQL <span class="label label-info pull-right">Consulte</span></a></li>*/
/*                                                     </ul>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     {% endif %}*/
/*                 </ul>*/
/*             </div><!-- navbar-collapse -->*/
/*         </div><!-- container -->*/
/*     </nav>*/
/* {% endblock %}*/
/* */
/* {% block aside %}*/
/*     <aside id="footer-widgets">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-4">*/
/*                     <h3 class="footer-widget-title">Mapa do Site</h3>*/
/*                     <ul class="list-unstyled three_cols">*/
/*                         <li><a href="{{ path('homepage') }}">Início</a></li>*/
/*                         <li><a href="{{ path('servicos') }}">Serviços</a></li>*/
/*                         <li><a href="{{ path('produtos') }}">Produtos</a></li>*/
/*                         <li><a href="{{ path('nossos-clientes') }}">Nossos clientes</a></li>*/
/*                         <li><a href="#{#page_support.html#}">FAQ</a></li>*/
/*                         <li><a href="{{ path('contato') }}">Contato</a></li>*/
/*                     </ul>*/
/*                     <h3 class="footer-widget-title">Suscriba nosso Newsletter</h3>*/
/*                     <p>Lorem ipsum Amet fugiat elit nisi anim mollit minim labore ut esse Duis ullamco ad dolor veniam velit.</p>*/
/*                     <div class="input-group">*/
/*                         <input type="text" class="form-control" placeholder="Seu Email">*/
/*                     <span class="input-group-btn">*/
/*                         <button class="btn btn-ar btn-primary" type="button">Suscribir</button>*/
/*                     </span>*/
/*                     </div><!-- /input-group -->*/
/*                 </div>*/
/*                 <div class="col-md-4 hidden-xs invisible">*/
/*                     <div class="footer-widget">*/
/*                         <h3 class="footer-widget-title">Post Recentes</h3>*/
/*                         <div class="media">*/
/*                             <a class="pull-left" href="#">*/
/*                                 {#{% image '@AppBundle/Resources/public/assets/img/demo/m2.jpg' %}#}*/
/*                                 <img src="{{ asset('bundles/app/assets/img/demo/m2.jpg') }}" class="media-object" alt="Image" width="75" height="75">*/
/*                                 {#{% endimage %}#}*/
/*                             </a>*/
/*                             <div class="media-body">*/
/*                                 <h4 class="media-heading"><a href="#">Lorem ipsum Duis quis occaecat minim lorem ipsum tempor officia labor</a></h4>*/
/*                                 <small>22 de dezembro de 2015</small>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="media">*/
/*                             <a class="pull-left" href="#">*/
/*                                 {#{% image '@AppBundle/Resources/public/assets/img/demo/m11.jpg' %}#}*/
/*                                 <img src="{{ asset('bundles/app/assets/img/demo/m11.jpg') }}" class="media-object" alt="Image" width="75" height="75">*/
/*                                 {#{% endimage %}#}*/
/*                             </a>*/
/*                             <div class="media-body">*/
/*                                 <h4 class="media-heading"><a href="#">Lorem ipsum dolor excepteur sunt in lorem ipsum cillum tempor</a></h4>*/
/*                                 <small>28 de dezembro de 2015</small>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="media">*/
/*                             <a class="pull-left" href="#">*/
/*                                 {#{% image '@AppBundle/Resources/public/assets/img/demo/m4.jpg' %}#}*/
/*                                 <img src="{{ asset('bundles/app/assets/img/demo/m4.jpg') }}" class="media-object" alt="Image" width="75" height="75">*/
/*                                 {#{% endimage %}#}*/
/*                             </a>*/
/*                             <div class="media-body">*/
/*                                 <h4 class="media-heading"><a href="#">Lorem ipsum Dolor cupidatat minim adipisicing et fugiat</a></h4>*/
/*                                 <small>3 de janeiro de 2016</small>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <div class="footer-widget">*/
/*                         <h3 class="footer-widget-title">Últimos serviços prestados</h3>*/
/*                         <div class="row">*/
/*                             <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">*/
/*                                 <a href="#" class="thumbnail">*/
/*                                     {#{% image '@AppBundle/Resources/public/assets/img/demo/wf1.jpg' %}#}*/
/*                                     <img src="{{ asset('bundles/app/assets/img/demo/wf1.jpg') }}" class="img-responsive" alt="Image">*/
/*                                     {#{% endimage %}#}*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">*/
/*                                 <a href="#" class="thumbnail">*/
/*                                     {#{% image '@AppBundle/Resources/public/assets/img/demo/wf2.jpg' %}#}*/
/*                                     <img src="{{ asset('bundles/app/assets/img/demo/wf2.jpg') }}" class="img-responsive" alt="Image">*/
/*                                     {#{% endimage %}#}*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">*/
/*                                 <a href="#" class="thumbnail">*/
/*                                     {#{% image '@AppBundle/Resources/public/assets/img/demo/wf3.jpg' %}#}*/
/*                                     <img src="{{ asset('bundles/app/assets/img/demo/wf3.jpg') }}" class="img-responsive" alt="Image">*/
/*                                     {#{% endimage %}#}*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">*/
/*                                 <a href="#" class="thumbnail">*/
/*                                     {#{% image '@AppBundle/Resources/public/assets/img/demo/wf4.jpg' %}#}*/
/*                                     <img src="{{ asset('bundles/app/assets/img/demo/wf4.jpg') }}" class="img-responsive" alt="Image">*/
/*                                     {#{% endimage %}#}*/
/*                                 </a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div> <!-- row -->*/
/*         </div> <!-- container -->*/
/*     </aside> <!-- footer-widgets -->*/
/* {% endblock %}*/
/* */
/* {% block slidebar %}*/
/*     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*         <div class="sb-slidebar sb-right">*/
/*             <div class="input-group">*/
/*                 <input type="text" class="form-control" placeholder="Search...">*/
/*             <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>*/
/*             </span>*/
/*             </div><!-- /input-group -->*/
/* */
/*             <h2 class="slidebar-header no-margin-bottom">Menu</h2>*/
/*             <ul class="slidebar-menu">*/
/*                 <li><a href="{{ path("homepage") }}">Início</a></li>*/
/*                 <li><a href="{{ path('servicos') }}">Serviços</a></li>*/
/*                 <li><a href="{{ path('produtos') }}">Produtos</a></li>*/
/*                 <li><a href="{{ path('nossos-clientes') }}">Nossos Clientes</a></li>*/
/*                 <li><a href="{{ path('contato') }}">Contato</a></li>*/
/*             </ul>*/
/* */
/*             <h2 class="slidebar-header">Redes Sociais</h2>*/
/*             <div class="slidebar-social-icons">*/
/*                 <a href="#" class="social-icon-ar rss"><i class="fa fa-rss"></i></a>*/
/*                 <a href="#" class="social-icon-ar facebook"><i class="fa fa-facebook"></i></a>*/
/*                 <a href="#" class="social-icon-ar twitter"><i class="fa fa-twitter"></i></a>*/
/*                 <!--<a href="#" class="social-icon-ar pinterest"><i class="fa fa-pinterest"></i></a>-->*/
/*                 <!--<a href="#" class="social-icon-ar instagram"><i class="fa fa-instagram"></i></a>-->*/
/*                 <!--<a href="#" class="social-icon-ar wordpress"><i class="fa fa-wordpress"></i></a>-->*/
/*                 <!--<a href="#" class="social-icon-ar linkedin"><i class="fa fa-linkedin"></i></a>-->*/
/*                 <!--<a href="#" class="social-icon-ar flickr"><i class="fa fa-flickr"></i></a>-->*/
/*                 <!--<a href="#" class="social-icon-ar vine"><i class="fa fa-vine"></i></a>-->*/
/*                 <!--<a href="#" class="social-icon-ar dribbble"><i class="fa fa-dribbble"></i></a>-->*/
/*             </div>*/
/*         </div> <!-- sb-slidebar sb-right -->*/
/*     {% endif %}*/
/*     <div id="back-top">*/
/*         <a href="#header"><i class="fa fa-chevron-up"></i></a>*/
/*     </div>*/
/* {% endblock %}*/
