<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_27c3938c7f6cd1b7dea71d1504d6da4e8b9a08c48752664614b30cde716b20d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_3f66e53c760e08dedab647cfcfe27ccaa3393391e92b6477cd17b82e5ae6357d = $this->env->getExtension("native_profiler");
        $__internal_3f66e53c760e08dedab647cfcfe27ccaa3393391e92b6477cd17b82e5ae6357d->enter($__internal_3f66e53c760e08dedab647cfcfe27ccaa3393391e92b6477cd17b82e5ae6357d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f66e53c760e08dedab647cfcfe27ccaa3393391e92b6477cd17b82e5ae6357d->leave($__internal_3f66e53c760e08dedab647cfcfe27ccaa3393391e92b6477cd17b82e5ae6357d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d61eb887875b0f4837c330145bc98ab8b1b62fac59ff05f45a8c119c95fdc49 = $this->env->getExtension("native_profiler");
        $__internal_5d61eb887875b0f4837c330145bc98ab8b1b62fac59ff05f45a8c119c95fdc49->enter($__internal_5d61eb887875b0f4837c330145bc98ab8b1b62fac59ff05f45a8c119c95fdc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_5d61eb887875b0f4837c330145bc98ab8b1b62fac59ff05f45a8c119c95fdc49->leave($__internal_5d61eb887875b0f4837c330145bc98ab8b1b62fac59ff05f45a8c119c95fdc49_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "@FOSUser/Profile/edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
