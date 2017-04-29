<?php

/* ::login.html.twig */
class __TwigTemplate_e57936eafa5d9dc92e244b947d23d1649698535b59fc8b04679c315203e3230f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9aafb26b2f7a8516e273bb53a13cfc5a42bf9fff85067b96a897f9f2d3f7af81 = $this->env->getExtension("native_profiler");
        $__internal_9aafb26b2f7a8516e273bb53a13cfc5a42bf9fff85067b96a897f9f2d3f7af81->enter($__internal_9aafb26b2f7a8516e273bb53a13cfc5a42bf9fff85067b96a897f9f2d3f7af81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::login.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/bootstrap/js/jquery.js"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/StyleLogin.css"), "html", null, true);
        echo "\">

  ";
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "      <div class=\"alert alert-danger\" style=\"color: red;font-size: 20px\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 9
        echo "

<div class=\"row\" style=\"margin-left: 0px;margin-right: 0px;\">
    <div class=\"panel panel-default col-md-offset-4 col-md-4\">
        <div class=\"panel-body\">
        <div id=\"Image\">
            <img style=\"max-width: 100%; height: auto;margin-bottom: 10px\" alt=\"logo\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/images/logo3.png"), "html", null, true);
        echo "\">
        </div>
        <br>

        <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
            <div id=\"input\" style=\"text-align: center\">
                <input type=\"text\" id=\"username\" class=\"form-control\" placeholder=\" Login ...\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required />

                <br>


                <input type=\"password\" class=\"form-control\" placeholder=\" Mot de passe ...\" id=\"password\" name=\"_password\" required/>
            </div>


                <br/>

                <input type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" id=\"login\" value=\"Connexion\" />

        </form>
    </div>
    </div>
</div>
";
        
        $__internal_9aafb26b2f7a8516e273bb53a13cfc5a42bf9fff85067b96a897f9f2d3f7af81->leave($__internal_9aafb26b2f7a8516e273bb53a13cfc5a42bf9fff85067b96a897f9f2d3f7af81_prof);

    }

    public function getTemplateName()
    {
        return "::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  63 => 19,  56 => 15,  48 => 9,  42 => 7,  40 => 6,  35 => 4,  31 => 3,  27 => 2,  22 => 1,);
    }
}
/* <link rel="stylesheet" href="{{ asset('bundles/framework/bootstrap/css/bootstrap.min.css') }}">*/
/* <link rel="stylesheet" href="{{asset('bundles/framework/bootstrap/js/jquery.js')  }}">*/
/* <link rel="stylesheet" href="{{asset('bundles/framework/bootstrap/js/bootstrap.min.js')  }}">*/
/* <link rel="stylesheet" href="{{asset('bundles/framework/css/StyleLogin.css')  }}">*/
/* */
/*   {% if error %}*/
/*       <div class="alert alert-danger" style="color: red;font-size: 20px">{{ error.message }}</div>*/
/*   {% endif %}*/
/* */
/* */
/* <div class="row" style="margin-left: 0px;margin-right: 0px;">*/
/*     <div class="panel panel-default col-md-offset-4 col-md-4">*/
/*         <div class="panel-body">*/
/*         <div id="Image">*/
/*             <img style="max-width: 100%; height: auto;margin-bottom: 10px" alt="logo" src="{{ asset('bundles/framework/images/logo3.png') }}">*/
/*         </div>*/
/*         <br>*/
/* */
/*         <form action="{{ path('login_check') }}" method="post">*/
/*             <div id="input" style="text-align: center">*/
/*                 <input type="text" id="username" class="form-control" placeholder=" Login ..." name="_username" value="{{ last_username }}" required />*/
/* */
/*                 <br>*/
/* */
/* */
/*                 <input type="password" class="form-control" placeholder=" Mot de passe ..." id="password" name="_password" required/>*/
/*             </div>*/
/* */
/* */
/*                 <br/>*/
/* */
/*                 <input type="submit" class="btn btn-primary btn-lg btn-block" id="login" value="Connexion" />*/
/* */
/*         </form>*/
/*     </div>*/
/*     </div>*/
/* </div>*/
/* */
