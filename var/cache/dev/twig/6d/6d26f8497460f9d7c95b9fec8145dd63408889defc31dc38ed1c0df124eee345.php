<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_458ed4cbdc8a82b7629893f47c90d94019095d0ff07483b6d610f9ffad1d6621 extends Twig_Template
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
        $__internal_995c52c34b3048be8c448550c67fa6fdbd8095c28222b94d6165c1bf3ec40c6b = $this->env->getExtension("native_profiler");
        $__internal_995c52c34b3048be8c448550c67fa6fdbd8095c28222b94d6165c1bf3ec40c6b->enter($__internal_995c52c34b3048be8c448550c67fa6fdbd8095c28222b94d6165c1bf3ec40c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

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
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">

                ";
        // line 21
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 22
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                ";
        }
        // line 24
        echo "
                <div id=\"input\" style=\"text-align: center\">
                    <input type=\"text\" id=\"username\" class=\"form-control\" placeholder=\" UserName ...\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required />

                    <br>


                    <input type=\"password\" class=\"form-control\" placeholder=\" Mot de passe ...\" id=\"password\" name=\"_password\" required/>
                </div>


                <br/>

                <input type=\"submit\" class=\"btn btn-primary btn-lg btn-block\"  id=\"_submit\" name=\"_submit\" value=\"Connection\" />

            </form>
        </div>
    </div>
</div>";
        
        $__internal_995c52c34b3048be8c448550c67fa6fdbd8095c28222b94d6165c1bf3ec40c6b->leave($__internal_995c52c34b3048be8c448550c67fa6fdbd8095c28222b94d6165c1bf3ec40c6b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 26,  76 => 24,  70 => 22,  68 => 21,  63 => 19,  56 => 15,  48 => 9,  42 => 7,  40 => 6,  35 => 4,  31 => 3,  27 => 2,  22 => 1,);
    }
}
/* <link rel="stylesheet" href="{{ asset('bundles/framework/bootstrap/css/bootstrap.min.css') }}">*/
/* <link rel="stylesheet" href="{{asset('bundles/framework/bootstrap/js/jquery.js')  }}">*/
/* <link rel="stylesheet" href="{{asset('bundles/framework/bootstrap/js/bootstrap.min.js')  }}">*/
/* <link rel="stylesheet" href="{{asset('bundles/framework/css/StyleLogin.css')  }}">*/
/* */
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* */
/* <div class="row" style="margin-left: 0px;margin-right: 0px;">*/
/*     <div class="panel panel-default col-md-offset-4 col-md-4">*/
/*         <div class="panel-body">*/
/*             <div id="Image">*/
/*                 <img style="max-width: 100%; height: auto;margin-bottom: 10px" alt="logo" src="{{ asset('bundles/framework/images/logo3.png') }}">*/
/*             </div>*/
/*             <br>*/
/* */
/*             <form action="{{ path("fos_user_security_check") }}" method="post">*/
/* */
/*                 {% if csrf_token %}*/
/*                     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                 {% endif %}*/
/* */
/*                 <div id="input" style="text-align: center">*/
/*                     <input type="text" id="username" class="form-control" placeholder=" UserName ..." name="_username" value="{{ last_username }}" required />*/
/* */
/*                     <br>*/
/* */
/* */
/*                     <input type="password" class="form-control" placeholder=" Mot de passe ..." id="password" name="_password" required/>*/
/*                 </div>*/
/* */
/* */
/*                 <br/>*/
/* */
/*                 <input type="submit" class="btn btn-primary btn-lg btn-block"  id="_submit" name="_submit" value="Connection" />*/
/* */
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
