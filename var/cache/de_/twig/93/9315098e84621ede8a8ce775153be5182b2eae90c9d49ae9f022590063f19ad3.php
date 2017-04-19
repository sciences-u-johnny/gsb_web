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
        $__internal_6d2ce20ad12cdf5d606a1fa2517f2f5b647604fb62bc10a2abbc94453cfdab8a = $this->env->getExtension("native_profiler");
        $__internal_6d2ce20ad12cdf5d606a1fa2517f2f5b647604fb62bc10a2abbc94453cfdab8a->enter($__internal_6d2ce20ad12cdf5d606a1fa2517f2f5b647604fb62bc10a2abbc94453cfdab8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d2ce20ad12cdf5d606a1fa2517f2f5b647604fb62bc10a2abbc94453cfdab8a->leave($__internal_6d2ce20ad12cdf5d606a1fa2517f2f5b647604fb62bc10a2abbc94453cfdab8a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c5717586c18c4aa2e542c9fe914d2bee953e759f1aa0a002c780b4973bcfedfd = $this->env->getExtension("native_profiler");
        $__internal_c5717586c18c4aa2e542c9fe914d2bee953e759f1aa0a002c780b4973bcfedfd->enter($__internal_c5717586c18c4aa2e542c9fe914d2bee953e759f1aa0a002c780b4973bcfedfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c5717586c18c4aa2e542c9fe914d2bee953e759f1aa0a002c780b4973bcfedfd->leave($__internal_c5717586c18c4aa2e542c9fe914d2bee953e759f1aa0a002c780b4973bcfedfd_prof);

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
