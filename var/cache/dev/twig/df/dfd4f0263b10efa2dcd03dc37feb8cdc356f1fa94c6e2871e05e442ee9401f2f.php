<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_9afd848ceeb8a52c43f24b3ff38038a2e07493860e67ea6e0afcc41b14703d63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_d605d1776fc85921c79c61310732806dc75b0b267662d9703b49a553ccc873c8 = $this->env->getExtension("native_profiler");
        $__internal_d605d1776fc85921c79c61310732806dc75b0b267662d9703b49a553ccc873c8->enter($__internal_d605d1776fc85921c79c61310732806dc75b0b267662d9703b49a553ccc873c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d605d1776fc85921c79c61310732806dc75b0b267662d9703b49a553ccc873c8->leave($__internal_d605d1776fc85921c79c61310732806dc75b0b267662d9703b49a553ccc873c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62f24bad5f6180475d23f946cd7330a0fe3e81cd6bc4e0d33a2d94961936efbd = $this->env->getExtension("native_profiler");
        $__internal_62f24bad5f6180475d23f946cd7330a0fe3e81cd6bc4e0d33a2d94961936efbd->enter($__internal_62f24bad5f6180475d23f946cd7330a0fe3e81cd6bc4e0d33a2d94961936efbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_62f24bad5f6180475d23f946cd7330a0fe3e81cd6bc4e0d33a2d94961936efbd->leave($__internal_62f24bad5f6180475d23f946cd7330a0fe3e81cd6bc4e0d33a2d94961936efbd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
