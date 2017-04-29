<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_8cdb46b3acad6448b79906edaa0740ac4bbfd512619f52a058714bae111622fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_26ad77567b5f692a7a640f3ef4d59c805926e5316f4f20af2a43fdc58d6cc9a9 = $this->env->getExtension("native_profiler");
        $__internal_26ad77567b5f692a7a640f3ef4d59c805926e5316f4f20af2a43fdc58d6cc9a9->enter($__internal_26ad77567b5f692a7a640f3ef4d59c805926e5316f4f20af2a43fdc58d6cc9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26ad77567b5f692a7a640f3ef4d59c805926e5316f4f20af2a43fdc58d6cc9a9->leave($__internal_26ad77567b5f692a7a640f3ef4d59c805926e5316f4f20af2a43fdc58d6cc9a9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c3b0d58a08204645c8451be8fc547f8ad53d1acbbae6d95d06b7d7c8c36248d = $this->env->getExtension("native_profiler");
        $__internal_6c3b0d58a08204645c8451be8fc547f8ad53d1acbbae6d95d06b7d7c8c36248d->enter($__internal_6c3b0d58a08204645c8451be8fc547f8ad53d1acbbae6d95d06b7d7c8c36248d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_6c3b0d58a08204645c8451be8fc547f8ad53d1acbbae6d95d06b7d7c8c36248d->leave($__internal_6c3b0d58a08204645c8451be8fc547f8ad53d1acbbae6d95d06b7d7c8c36248d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "@FOSUser/Profile/show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
