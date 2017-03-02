<?php

/* @Admin/form-asiento.html.twig */
class __TwigTemplate_97e60b06b1a4237ff376cd02ea261c8cb5d7ac01d52654260e3378df9e5413f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@Admin/form-asiento.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
        echo "    <header class=\"main-header\">
        <div class=\"container\">
            <h1 class=\"page-title\">Formulário de Assentos Contábeis</h1>

            <ol class=\"breadcrumb pull-right\">
                <li><a href=\"";
        // line 9
        echo "\">Administração</a></li>
                <li class=\"active\">Formulário de assentos</li>
            </ol>
        </div>
    </header>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h2 class=\"section-title no-margin-top\">Formulário de ingresso de assentos contáveis</h2>
            </div>
            <div class=\"col-md-8\">
                <section>
                    <div class=\"row\">
                        ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulario"]) ? $context["formulario"] : null), 'form_start', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : null), 'errors');
        echo "
                        <fieldset>
                            <div class=\"form-group col-md-5\">
                                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : null), "fecha", array()), 'label', array("label" => "Data"));
        echo "
                                ";
        // line 29
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : null), "fecha", array()), 'widget', array("attr" => array("class" => "form-control")));
        // line 31
        echo "
                            </div>

                            <div class=\"form-group col-md-12\">
                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : null), "nombre", array()), 'label', array("label" => "Nome"));
        echo "
                                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : null), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nome")));
        // line 39
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : null), "tipo", array()), 'label', array("label" => "Tipo"));
        echo "
                                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : null), "tipo", array()), 'widget', array("attr" => array("class" => "form-control")));
        // line 45
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : null), "importe", array()), 'label', array("label" => "Importe"));
        echo "
                                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : null), "importe", array()), 'widget', array("attr" => array("class" => "form-control")));
        // line 51
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : null), "fPago", array()), 'label', array("label" => "Forma de Pago"));
        echo "
                                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : null), "fPago", array()), 'widget', array("attr" => array("class" => "form-control")));
        // line 57
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : null), "parcelas", array()), 'label', array("label" => "Parcelas"));
        echo "
                                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : null), "parcelas", array()), 'widget', array("attr" => array("class" => "form-control", "value" => 1)));
        // line 64
        echo "
                            </div>
                            <div class=\"form-group col-md-12\">
                                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : null), "anotacion", array()), 'label', array("label" => "Anotações"));
        echo "
                                ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : null), "anotacion", array()), 'widget', array("attr" => array("class" => "form-control")));
        // line 70
        echo "
                            </div>
                            <div class=\"checkbox col-md-12\">
                                <label>
                                    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : null), "vacaciones", array()), 'widget', array("attr" => array("class" => "form-control")));
        // line 76
        echo " Vacaciones
                                </label>
                            </div>
                            <div class=\"form-group col-md-3 col-md-offset-9\">
                                ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : null), "registrar", array()), 'widget', array("attr" => array("class" => "btn btn-large btn-block btn-primary", "data-loading-text" => "Loading...")));
        // line 83
        echo "
                            </div>

                        </fieldset>
                        ";
        // line 88
        echo "                        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulario"]) ? $context["formulario"] : null), 'form_end');
        echo "
                    </div>


                </section>
            </div>

            <div class=\"col-md-4\">
                <section>
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\"><i class=\"fa fa-dollar\"></i> Informação Adicional</div>
                        <div class=\"panel-body\">
                            <h4 class=\"section-title no-margin-top\">Últimos assentos</h4>
                            <table class=\"table table-striped\">
                                <thead>
                                <tr>
                                    <td><strong>Nome</strong></td>
                                    <td><strong>Importe</strong></td>
                                    <td><strong>Data</strong></td>
                                </tr>
                                </thead>
                                ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["asiento"]) ? $context["asiento"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 110
            echo "                                    <tr>
                                        <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["a"], "nombre", array()), 25, false), "html", null, true);
            echo "</td>
                                        <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["a"], "importe", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                                        <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "fecha", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                                ";
        $context["sumaActual"] = 0;
        // line 117
        echo "                                ";
        $context["gastoActual"] = 0;
        // line 118
        echo "                                ";
        $context["ganhoActual"] = 0;
        // line 119
        echo "                                ";
        $context["suma1Anterior"] = 0;
        // line 120
        echo "                                ";
        $context["gastoAnterior"] = 0;
        // line 121
        echo "                                ";
        $context["ganhoAnterior"] = 0;
        // line 122
        echo "                                ";
        $context["suma2Anterior"] = 0;
        // line 123
        echo "                                ";
        $context["suma3Anterior"] = 0;
        // line 124
        echo "                                ";
        $context["gFixos"] = 0;
        // line 125
        echo "                                ";
        $context["alimentacion"] = 0;
        // line 126
        echo "
                                ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["suma"]) ? $context["suma"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 128
            echo "                                    ";
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["a"], "fecha", array()), "m") == twig_date_format_filter($this->env, "now", "m"))) {
                // line 129
                echo "                                        ";
                $context["sumaActual"] = ((isset($context["sumaActual"]) ? $context["sumaActual"] : null) + $this->getAttribute($context["a"], "importe", array()));
                // line 130
                echo "                                        ";
                if (($this->getAttribute($context["a"], "operacion", array()) == 0)) {
                    // line 131
                    echo "                                            ";
                    $context["gastoActual"] = ((isset($context["gastoActual"]) ? $context["gastoActual"] : null) + $this->getAttribute($context["a"], "importe", array()));
                    // line 132
                    echo "                                        ";
                } else {
                    // line 133
                    echo "                                            ";
                    $context["ganhoActual"] = ((isset($context["ganhoActual"]) ? $context["ganhoActual"] : null) + $this->getAttribute($context["a"], "importe", array()));
                    // line 134
                    echo "                                        ";
                }
                // line 135
                echo "                                    ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute($context["a"], "fecha", array()), "m") == (twig_date_format_filter($this->env, "now", "m") - 1))) {
                // line 136
                echo "                                        ";
                $context["suma1Anterior"] = ((isset($context["suma1Anterior"]) ? $context["suma1Anterior"] : null) + $this->getAttribute($context["a"], "importe", array()));
                // line 137
                echo "                                        ";
                if (($this->getAttribute($context["a"], "operacion", array()) == 0)) {
                    // line 138
                    echo "                                            ";
                    $context["gastoAnterior"] = ((isset($context["gastoAnterior"]) ? $context["gastoAnterior"] : null) + $this->getAttribute($context["a"], "importe", array()));
                    // line 139
                    echo "                                        ";
                } else {
                    // line 140
                    echo "                                            ";
                    $context["ganhoAnterior"] = ((isset($context["ganhoAnterior"]) ? $context["ganhoAnterior"] : null) + $this->getAttribute($context["a"], "importe", array()));
                    // line 141
                    echo "                                        ";
                }
                // line 142
                echo "                                    ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute($context["a"], "fecha", array()), "m") == (twig_date_format_filter($this->env, "now", "m") - 2))) {
                // line 143
                echo "                                        ";
                $context["suma2Anterior"] = ((isset($context["suma2Anterior"]) ? $context["suma2Anterior"] : null) + $this->getAttribute($context["a"], "importe", array()));
                // line 144
                echo "                                    ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute($context["a"], "fecha", array()), "m") == (twig_date_format_filter($this->env, "now", "m") - 3))) {
                // line 145
                echo "                                        ";
                $context["suma3Anterior"] = ((isset($context["suma3Anterior"]) ? $context["suma3Anterior"] : null) + $this->getAttribute($context["a"], "importe", array()));
                // line 146
                echo "                                    ";
            }
            // line 147
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "
                                <tr>
                                    <td><strong>Total este mes:</strong></td>
                                    <td><strong>";
        // line 151
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumaActual"]) ? $context["sumaActual"] : null), 2, ",", "."), "html", null, true);
        echo "</strong></td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <hr class=\"dotted\">
        <div class=\"col-md-9\">
            <section class=\"css-section\">
                <h2 class=\"section-title no-margin-top\">Gastos discriminados</h2>
                <div class=\"alert alert-info\">Referentes ao mes passado</div>
                <hr class=\"dotted\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"text-center\">
                            <div class=\"circle\" id=\"circles-1\"></div>
                            <h4 class=\"text-center\">HTML 5</h4>
                            <p class=\"small-font\">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"text-center\">
                            <div class=\"circle\" id=\"circles-2\"></div>
                            <h4 class=\"text-center\">CSS 3</h4>
                            <p class=\"small-font\">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"text-center\">
                            <div class=\"circle\" id=\"circles-3\"></div>
                            <h4 class=\"text-center\">Jquery</h4>
                            <p class=\"small-font\">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"text-center\">
                            <div class=\"circle\" id=\"circles-4\"></div>
                            <h4 class=\"text-center\">Bootstrap 3</h4>
                            <p class=\"small-font\">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section class=\"hidden\">
            <div class=\"well well-sm\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d937.7060092707519!2d-43.9242921!3d-19.9318186!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sus!4v1452256315307\" width=\"100%\" height=\"350\"></iframe>
            </div>
        </section>
    </div> <!-- container -->
";
    }

    public function getTemplateName()
    {
        return "@Admin/form-asiento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 151,  309 => 148,  303 => 147,  300 => 146,  297 => 145,  294 => 144,  291 => 143,  288 => 142,  285 => 141,  282 => 140,  279 => 139,  276 => 138,  273 => 137,  270 => 136,  267 => 135,  264 => 134,  261 => 133,  258 => 132,  255 => 131,  252 => 130,  249 => 129,  246 => 128,  242 => 127,  239 => 126,  236 => 125,  233 => 124,  230 => 123,  227 => 122,  224 => 121,  221 => 120,  218 => 119,  215 => 118,  212 => 117,  209 => 116,  200 => 113,  196 => 112,  192 => 111,  189 => 110,  185 => 109,  160 => 88,  154 => 83,  152 => 80,  146 => 76,  144 => 74,  138 => 70,  136 => 68,  132 => 67,  127 => 64,  125 => 61,  121 => 60,  116 => 57,  114 => 55,  110 => 54,  105 => 51,  103 => 49,  99 => 48,  94 => 45,  92 => 43,  88 => 42,  83 => 39,  81 => 36,  77 => 35,  71 => 31,  68 => 29,  64 => 27,  58 => 24,  54 => 23,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends('::layout.html.twig') %}*/
/* */
/* {% block body %}*/
/*     <header class="main-header">*/
/*         <div class="container">*/
/*             <h1 class="page-title">Formulário de Assentos Contábeis</h1>*/
/* */
/*             <ol class="breadcrumb pull-right">*/
/*                 <li><a href="{#{{ path('admin') }}#}">Administração</a></li>*/
/*                 <li class="active">Formulário de assentos</li>*/
/*             </ol>*/
/*         </div>*/
/*     </header>*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h2 class="section-title no-margin-top">Formulário de ingresso de assentos contáveis</h2>*/
/*             </div>*/
/*             <div class="col-md-8">*/
/*                 <section>*/
/*                     <div class="row">*/
/*                         {{ form_start(formulario, { 'attr': { 'class' : '' } }) }}*/
/*                         {{ form_errors(formulario) }}*/
/*                         <fieldset>*/
/*                             <div class="form-group col-md-5">*/
/*                                 {{ form_label(formulario.fecha, 'Data') }}*/
/*                                 {#<label for="fecha" class="">Data</label>#}*/
/*                                 {{ form_widget(formulario.fecha, { 'attr': {*/
/*                                     'class' : 'form-control'*/
/*                                 } }) }}*/
/*                             </div>*/
/* */
/*                             <div class="form-group col-md-12">*/
/*                                 {{ form_label(formulario.nombre, 'Nome') }}*/
/*                                 {{ form_widget(formulario.nombre, { 'attr': {*/
/*                                     'class' : 'form-control',*/
/*                                     'placeholder' : 'Nome'*/
/*                                 } }) }}*/
/*                             </div>*/
/*                             <div class="form-group col-md-6">*/
/*                                 {{ form_label(formulario.tipo, 'Tipo') }}*/
/*                                 {{ form_widget(formulario.tipo, { 'attr': {*/
/*                                     'class' : 'form-control'*/
/*                                 } }) }}*/
/*                             </div>*/
/*                             <div class="form-group col-md-6">*/
/*                                 {{ form_label(formulario.importe, 'Importe') }}*/
/*                                 {{ form_widget(formulario.importe, { 'attr': {*/
/*                                     'class' : 'form-control'*/
/*                                 } }) }}*/
/*                             </div>*/
/*                             <div class="form-group col-md-6">*/
/*                                 {{ form_label(formulario.fPago, 'Forma de Pago') }}*/
/*                                 {{ form_widget(formulario.fPago, { 'attr': {*/
/*                                     'class' : 'form-control'*/
/*                                 } }) }}*/
/*                             </div>*/
/*                             <div class="form-group col-md-6">*/
/*                                 {{ form_label(formulario.parcelas, 'Parcelas') }}*/
/*                                 {{ form_widget(formulario.parcelas, { 'attr': {*/
/*                                     'class' : 'form-control',*/
/*                                     'value' : 1*/
/*                                 } }) }}*/
/*                             </div>*/
/*                             <div class="form-group col-md-12">*/
/*                                 {{ form_label(formulario.anotacion, 'Anotações') }}*/
/*                                 {{ form_widget(formulario.anotacion, { 'attr': {*/
/*                                     'class' : 'form-control'*/
/*                                 } }) }}*/
/*                             </div>*/
/*                             <div class="checkbox col-md-12">*/
/*                                 <label>*/
/*                                     {{ form_widget(formulario.vacaciones, { 'attr': {*/
/*                                         'class' : 'form-control'*/
/*                                     } }) }} Vacaciones*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="form-group col-md-3 col-md-offset-9">*/
/*                                 {{ form_widget(formulario.registrar, { 'attr': {*/
/*                                     'class' : 'btn btn-large btn-block btn-primary',*/
/*                                     'data-loading-text' : 'Loading...'*/
/*                                 } }) }}*/
/*                             </div>*/
/* */
/*                         </fieldset>*/
/*                         {#</div>#}*/
/*                         {{ form_end(formulario) }}*/
/*                     </div>*/
/* */
/* */
/*                 </section>*/
/*             </div>*/
/* */
/*             <div class="col-md-4">*/
/*                 <section>*/
/*                     <div class="panel panel-primary">*/
/*                         <div class="panel-heading"><i class="fa fa-dollar"></i> Informação Adicional</div>*/
/*                         <div class="panel-body">*/
/*                             <h4 class="section-title no-margin-top">Últimos assentos</h4>*/
/*                             <table class="table table-striped">*/
/*                                 <thead>*/
/*                                 <tr>*/
/*                                     <td><strong>Nome</strong></td>*/
/*                                     <td><strong>Importe</strong></td>*/
/*                                     <td><strong>Data</strong></td>*/
/*                                 </tr>*/
/*                                 </thead>*/
/*                                 {% for a in asiento %}*/
/*                                     <tr>*/
/*                                         <td>{{ a.nombre | truncate(25, false)}}</td>*/
/*                                         <td>{{ a.importe | number_format(2, ',', '.') }}</td>*/
/*                                         <td>{{ a.fecha | date('d/m/Y') }}</td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                                 {% set sumaActual = 0 %}*/
/*                                 {% set gastoActual = 0 %}*/
/*                                 {% set ganhoActual = 0 %}*/
/*                                 {% set suma1Anterior = 0 %}*/
/*                                 {% set gastoAnterior = 0 %}*/
/*                                 {% set ganhoAnterior = 0 %}*/
/*                                 {% set suma2Anterior = 0 %}*/
/*                                 {% set suma3Anterior = 0 %}*/
/*                                 {% set gFixos = 0 %}*/
/*                                 {% set alimentacion = 0 %}*/
/* */
/*                                 {% for a in suma %}*/
/*                                     {% if a.fecha|date('m') == 'now'|date('m') %}*/
/*                                         {% set sumaActual = sumaActual + a.importe %}*/
/*                                         {% if a.operacion == 0 %}*/
/*                                             {% set gastoActual = gastoActual + a.importe %}*/
/*                                         {% else %}*/
/*                                             {% set ganhoActual = ganhoActual + a.importe %}*/
/*                                         {% endif %}*/
/*                                     {% elseif a.fecha|date('m') == 'now'|date('m')-1 %}*/
/*                                         {% set suma1Anterior = suma1Anterior + a.importe %}*/
/*                                         {% if a.operacion == 0 %}*/
/*                                             {% set gastoAnterior = gastoAnterior + a.importe %}*/
/*                                         {% else %}*/
/*                                             {% set ganhoAnterior = ganhoAnterior + a.importe %}*/
/*                                         {% endif %}*/
/*                                     {% elseif a.fecha|date('m') == 'now'|date('m')-2 %}*/
/*                                         {% set suma2Anterior = suma2Anterior + a.importe %}*/
/*                                     {% elseif a.fecha|date('m') == 'now'|date('m')-3 %}*/
/*                                         {% set suma3Anterior = suma3Anterior + a.importe %}*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/* */
/*                                 <tr>*/
/*                                     <td><strong>Total este mes:</strong></td>*/
/*                                     <td><strong>{{ sumaActual | number_format(2, ',', '.') }}</strong></td>*/
/*                                 </tr>*/
/* */
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </section>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <hr class="dotted">*/
/*         <div class="col-md-9">*/
/*             <section class="css-section">*/
/*                 <h2 class="section-title no-margin-top">Gastos discriminados</h2>*/
/*                 <div class="alert alert-info">Referentes ao mes passado</div>*/
/*                 <hr class="dotted">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-6 col-md-3">*/
/*                         <div class="text-center">*/
/*                             <div class="circle" id="circles-1"></div>*/
/*                             <h4 class="text-center">HTML 5</h4>*/
/*                             <p class="small-font">Lorem ipsum dolor sit amet consectetur adipisicing.</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-sm-6 col-md-3">*/
/*                         <div class="text-center">*/
/*                             <div class="circle" id="circles-2"></div>*/
/*                             <h4 class="text-center">CSS 3</h4>*/
/*                             <p class="small-font">Lorem ipsum dolor sit amet consectetur adipisicing.</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-sm-6 col-md-3">*/
/*                         <div class="text-center">*/
/*                             <div class="circle" id="circles-3"></div>*/
/*                             <h4 class="text-center">Jquery</h4>*/
/*                             <p class="small-font">Lorem ipsum dolor sit amet consectetur adipisicing.</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-sm-6 col-md-3">*/
/*                         <div class="text-center">*/
/*                             <div class="circle" id="circles-4"></div>*/
/*                             <h4 class="text-center">Bootstrap 3</h4>*/
/*                             <p class="small-font">Lorem ipsum dolor sit amet consectetur adipisicing.</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/*         </div>*/
/* */
/*         <section class="hidden">*/
/*             <div class="well well-sm">*/
/*                 <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d937.7060092707519!2d-43.9242921!3d-19.9318186!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sus!4v1452256315307" width="100%" height="350"></iframe>*/
/*             </div>*/
/*         </section>*/
/*     </div> <!-- container -->*/
/* {% endblock %}*/
