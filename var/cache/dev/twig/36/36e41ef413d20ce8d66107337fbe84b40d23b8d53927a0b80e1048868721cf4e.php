<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_bd4a7d874ece3347fccbcb9e807b9e028189f6afd9d9a6815ade44c4950b17ec extends Twig_Template
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
        $__internal_a3b66f5f5db5ed88022330dac76eebaa658ac8ebf5caabb0aeecc7475c6ab2d9 = $this->env->getExtension("native_profiler");
        $__internal_a3b66f5f5db5ed88022330dac76eebaa658ac8ebf5caabb0aeecc7475c6ab2d9->enter($__internal_a3b66f5f5db5ed88022330dac76eebaa658ac8ebf5caabb0aeecc7475c6ab2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_a3b66f5f5db5ed88022330dac76eebaa658ac8ebf5caabb0aeecc7475c6ab2d9->leave($__internal_a3b66f5f5db5ed88022330dac76eebaa658ac8ebf5caabb0aeecc7475c6ab2d9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
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
