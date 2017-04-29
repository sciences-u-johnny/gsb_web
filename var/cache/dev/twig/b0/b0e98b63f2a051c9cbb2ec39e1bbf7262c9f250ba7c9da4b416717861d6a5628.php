<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_209d72b8227a8c564890c449e8673ff2cae74c409c5fc2a201259f1bd314ca80 extends Twig_Template
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
        $__internal_2df53802ba4218f5dae9b5e54bfdb81f58fb63ef6a4699c957d113945df58c0d = $this->env->getExtension("native_profiler");
        $__internal_2df53802ba4218f5dae9b5e54bfdb81f58fb63ef6a4699c957d113945df58c0d->enter($__internal_2df53802ba4218f5dae9b5e54bfdb81f58fb63ef6a4699c957d113945df58c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_2df53802ba4218f5dae9b5e54bfdb81f58fb63ef6a4699c957d113945df58c0d->leave($__internal_2df53802ba4218f5dae9b5e54bfdb81f58fb63ef6a4699c957d113945df58c0d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  30 => 5,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*     <div>*/
/*         <label for="username">{{ 'resetting.request.username'|trans }}</label>*/
/*         <input type="text" id="username" name="username" required="required" />*/
/*     </div>*/
/*     <div>*/
/*         <input type="submit" value="{{ 'resetting.request.submit'|trans }}" />*/
/*     </div>*/
/* </form>*/
/* */
