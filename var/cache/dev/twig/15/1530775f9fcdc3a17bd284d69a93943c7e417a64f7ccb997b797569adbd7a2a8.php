<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_6b081d9ff7acab3fe3560279a9c364ebff5ff59418f3a5fc608a1f5c94985b94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_52ba02f23ff24edda32a18f4629e187f510168bc36b47f8cc631e9bdc921db62 = $this->env->getExtension("native_profiler");
        $__internal_52ba02f23ff24edda32a18f4629e187f510168bc36b47f8cc631e9bdc921db62->enter($__internal_52ba02f23ff24edda32a18f4629e187f510168bc36b47f8cc631e9bdc921db62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52ba02f23ff24edda32a18f4629e187f510168bc36b47f8cc631e9bdc921db62->leave($__internal_52ba02f23ff24edda32a18f4629e187f510168bc36b47f8cc631e9bdc921db62_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8afac7e7be0dd2b0a97dc233372d924ffb7b439bf0b33307f734cd28606cdef2 = $this->env->getExtension("native_profiler");
        $__internal_8afac7e7be0dd2b0a97dc233372d924ffb7b439bf0b33307f734cd28606cdef2->enter($__internal_8afac7e7be0dd2b0a97dc233372d924ffb7b439bf0b33307f734cd28606cdef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_8afac7e7be0dd2b0a97dc233372d924ffb7b439bf0b33307f734cd28606cdef2->leave($__internal_8afac7e7be0dd2b0a97dc233372d924ffb7b439bf0b33307f734cd28606cdef2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "@FOSUser/Resetting/reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
