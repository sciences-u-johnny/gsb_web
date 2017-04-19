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
        $__internal_66855700567db42dc9180af3c29a2057c32a2a19a4cca8cb6f402646ce0605cd = $this->env->getExtension("native_profiler");
        $__internal_66855700567db42dc9180af3c29a2057c32a2a19a4cca8cb6f402646ce0605cd->enter($__internal_66855700567db42dc9180af3c29a2057c32a2a19a4cca8cb6f402646ce0605cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66855700567db42dc9180af3c29a2057c32a2a19a4cca8cb6f402646ce0605cd->leave($__internal_66855700567db42dc9180af3c29a2057c32a2a19a4cca8cb6f402646ce0605cd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94ae86d63e5549968ebeac523fd8caf6f7f3d1ce51a5d284f60d93241a509d8d = $this->env->getExtension("native_profiler");
        $__internal_94ae86d63e5549968ebeac523fd8caf6f7f3d1ce51a5d284f60d93241a509d8d->enter($__internal_94ae86d63e5549968ebeac523fd8caf6f7f3d1ce51a5d284f60d93241a509d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_94ae86d63e5549968ebeac523fd8caf6f7f3d1ce51a5d284f60d93241a509d8d->leave($__internal_94ae86d63e5549968ebeac523fd8caf6f7f3d1ce51a5d284f60d93241a509d8d_prof);

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
