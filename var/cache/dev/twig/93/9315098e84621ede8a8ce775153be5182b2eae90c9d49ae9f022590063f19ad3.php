<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_063dc455306506caed060385e1c4f8b654458947362e4899796ff1d1888a8d22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_b34abfe6386a8a1127293a30feffffc4866a8e8ddc9fa8eeadefe629a9f26278 = $this->env->getExtension("native_profiler");
        $__internal_b34abfe6386a8a1127293a30feffffc4866a8e8ddc9fa8eeadefe629a9f26278->enter($__internal_b34abfe6386a8a1127293a30feffffc4866a8e8ddc9fa8eeadefe629a9f26278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b34abfe6386a8a1127293a30feffffc4866a8e8ddc9fa8eeadefe629a9f26278->leave($__internal_b34abfe6386a8a1127293a30feffffc4866a8e8ddc9fa8eeadefe629a9f26278_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ef28da98a980d1ce66f60958348cbff7b03e392aab84de51708d19221ae1796 = $this->env->getExtension("native_profiler");
        $__internal_0ef28da98a980d1ce66f60958348cbff7b03e392aab84de51708d19221ae1796->enter($__internal_0ef28da98a980d1ce66f60958348cbff7b03e392aab84de51708d19221ae1796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0ef28da98a980d1ce66f60958348cbff7b03e392aab84de51708d19221ae1796->leave($__internal_0ef28da98a980d1ce66f60958348cbff7b03e392aab84de51708d19221ae1796_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
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
