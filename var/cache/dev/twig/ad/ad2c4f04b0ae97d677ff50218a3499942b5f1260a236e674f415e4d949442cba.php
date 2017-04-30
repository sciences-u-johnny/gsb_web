<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_a863f0c0bf525a86c81eb6cae828174f687eba99415786b60a70e22009e051cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_a73e0d34526742fdbf4211c5b3919523de0d5de2913e6d08653414c79d9d62b6 = $this->env->getExtension("native_profiler");
        $__internal_a73e0d34526742fdbf4211c5b3919523de0d5de2913e6d08653414c79d9d62b6->enter($__internal_a73e0d34526742fdbf4211c5b3919523de0d5de2913e6d08653414c79d9d62b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a73e0d34526742fdbf4211c5b3919523de0d5de2913e6d08653414c79d9d62b6->leave($__internal_a73e0d34526742fdbf4211c5b3919523de0d5de2913e6d08653414c79d9d62b6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df0516daae7f03e82cdfe0c0473a4522ac1338992675d8eb1275ad076005f029 = $this->env->getExtension("native_profiler");
        $__internal_df0516daae7f03e82cdfe0c0473a4522ac1338992675d8eb1275ad076005f029->enter($__internal_df0516daae7f03e82cdfe0c0473a4522ac1338992675d8eb1275ad076005f029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_df0516daae7f03e82cdfe0c0473a4522ac1338992675d8eb1275ad076005f029->leave($__internal_df0516daae7f03e82cdfe0c0473a4522ac1338992675d8eb1275ad076005f029_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "@FOSUser/Group/show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
