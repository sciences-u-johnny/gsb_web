<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_3260109fde79d678cfcdc5fadf78f4d4f4f9d2efa08f1552060816ff7db78746 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_c5ac0e3bd685be330209132351bde5d953f9dc0a239ab5702294d64c4fc4a923 = $this->env->getExtension("native_profiler");
        $__internal_c5ac0e3bd685be330209132351bde5d953f9dc0a239ab5702294d64c4fc4a923->enter($__internal_c5ac0e3bd685be330209132351bde5d953f9dc0a239ab5702294d64c4fc4a923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5ac0e3bd685be330209132351bde5d953f9dc0a239ab5702294d64c4fc4a923->leave($__internal_c5ac0e3bd685be330209132351bde5d953f9dc0a239ab5702294d64c4fc4a923_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74b66792063aec3bc47d5cd6411a2eedc40ce0f75ea0bea27bb4f8910d5f691a = $this->env->getExtension("native_profiler");
        $__internal_74b66792063aec3bc47d5cd6411a2eedc40ce0f75ea0bea27bb4f8910d5f691a->enter($__internal_74b66792063aec3bc47d5cd6411a2eedc40ce0f75ea0bea27bb4f8910d5f691a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_74b66792063aec3bc47d5cd6411a2eedc40ce0f75ea0bea27bb4f8910d5f691a->leave($__internal_74b66792063aec3bc47d5cd6411a2eedc40ce0f75ea0bea27bb4f8910d5f691a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "@FOSUser/Group/new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
