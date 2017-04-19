<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_49d04799cefec2e0e502822b65ee4b25962dd43d49d440bef9dae8ef994b661c extends Twig_Template
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
        $__internal_da7283a850ffbe12ffc048d0a1e2763b4e4db14c7bb8b7121e3622bae21b1ddd = $this->env->getExtension("native_profiler");
        $__internal_da7283a850ffbe12ffc048d0a1e2763b4e4db14c7bb8b7121e3622bae21b1ddd->enter($__internal_da7283a850ffbe12ffc048d0a1e2763b4e4db14c7bb8b7121e3622bae21b1ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_da7283a850ffbe12ffc048d0a1e2763b4e4db14c7bb8b7121e3622bae21b1ddd->leave($__internal_da7283a850ffbe12ffc048d0a1e2763b4e4db14c7bb8b7121e3622bae21b1ddd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
