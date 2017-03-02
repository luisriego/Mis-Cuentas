<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_25900529bde1af3ef6cd65f90af1b1e664a085606ee8d0eb5d5c70b8a2c2692d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "<h4>Formulário de Login</h4>
<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
    <div class=\"form-group\">
        <div class=\"input-group login-input\">
            <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
            ";
        // line 16
        echo "            <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />
        </div>
        <br>
        <div class=\"input-group login-input\">
            <span class=\"input-group-addon\"><i class=\"fa fa-lock\"></i></span>
            ";
        // line 22
        echo "            <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" required=\"required\" />
        </div>
        <div class=\"checkbox pull-left\">
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label for=\"remember_me\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        </div>
        <button type=\"submit\" id=\"_submit\" class=\"btn btn-ar btn-primary pull-right\"  name=\"_submit\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
        ";
        // line 30
        echo "        <div class=\"clearfix\"></div>
    </div>


</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 30,  73 => 28,  68 => 26,  62 => 22,  53 => 16,  46 => 11,  42 => 10,  39 => 9,  33 => 7,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* <h4>Formulário de Login</h4>*/
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*     <div class="form-group">*/
/*         <div class="input-group login-input">*/
/*             <span class="input-group-addon"><i class="fa fa-user"></i></span>*/
/*             {#<label for="username">{{ 'security.login.username'|trans }}</label>#}*/
/*             <input type="text" id="username" class="form-control" name="_username" value="{{ last_username }}" required="required" />*/
/*         </div>*/
/*         <br>*/
/*         <div class="input-group login-input">*/
/*             <span class="input-group-addon"><i class="fa fa-lock"></i></span>*/
/*             {#<label for="password">{{ 'security.login.password'|trans }}</label>#}*/
/*             <input type="password" id="password" class="form-control" name="_password" required="required" />*/
/*         </div>*/
/*         <div class="checkbox pull-left">*/
/*             <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*             <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*         </div>*/
/*         <button type="submit" id="_submit" class="btn btn-ar btn-primary pull-right"  name="_submit">{{ 'security.login.submit'|trans }}</button>*/
/*         {#<input type="submit" id="_submit" class="btn btn-ar btn-primary pull-right" name="_submit" value="{{ 'security.login.submit'|trans }}" />#}*/
/*         <div class="clearfix"></div>*/
/*     </div>*/
/* */
/* */
/* </form>*/
/* {% endblock fos_user_content %}*/
/* */
