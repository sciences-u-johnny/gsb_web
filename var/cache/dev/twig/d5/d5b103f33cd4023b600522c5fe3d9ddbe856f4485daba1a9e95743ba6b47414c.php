<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_7127b37b476fd6d1d50409e36367aace13244fddb5e6747a920c43cb4c48a61c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d08efede1bb813cfb4aed315701b151cf8ce69ac6472923fcf0723de0ab5734 = $this->env->getExtension("native_profiler");
        $__internal_0d08efede1bb813cfb4aed315701b151cf8ce69ac6472923fcf0723de0ab5734->enter($__internal_0d08efede1bb813cfb4aed315701b151cf8ce69ac6472923fcf0723de0ab5734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d08efede1bb813cfb4aed315701b151cf8ce69ac6472923fcf0723de0ab5734->leave($__internal_0d08efede1bb813cfb4aed315701b151cf8ce69ac6472923fcf0723de0ab5734_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58fb070b46048a3779e223c992a213bbff5c4458b6c202d7afecfef77d003314 = $this->env->getExtension("native_profiler");
        $__internal_58fb070b46048a3779e223c992a213bbff5c4458b6c202d7afecfef77d003314->enter($__internal_58fb070b46048a3779e223c992a213bbff5c4458b6c202d7afecfef77d003314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_58fb070b46048a3779e223c992a213bbff5c4458b6c202d7afecfef77d003314->leave($__internal_58fb070b46048a3779e223c992a213bbff5c4458b6c202d7afecfef77d003314_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
