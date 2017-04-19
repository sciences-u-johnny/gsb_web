<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_ec6e85f61b8a84f01e186e6704d3d57fe5ceb0d80c6170cbeb47bd8b9edd57e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_ba5aa6c07aa33fdd3acbca3a0fcab24a6eb68fd260b5da0dec5990f18d3d210a = $this->env->getExtension("native_profiler");
        $__internal_ba5aa6c07aa33fdd3acbca3a0fcab24a6eb68fd260b5da0dec5990f18d3d210a->enter($__internal_ba5aa6c07aa33fdd3acbca3a0fcab24a6eb68fd260b5da0dec5990f18d3d210a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba5aa6c07aa33fdd3acbca3a0fcab24a6eb68fd260b5da0dec5990f18d3d210a->leave($__internal_ba5aa6c07aa33fdd3acbca3a0fcab24a6eb68fd260b5da0dec5990f18d3d210a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_580ff949929d850d6b5c085ed52f5710d87d2bb86f6bd904e050bccdd7c9637a = $this->env->getExtension("native_profiler");
        $__internal_580ff949929d850d6b5c085ed52f5710d87d2bb86f6bd904e050bccdd7c9637a->enter($__internal_580ff949929d850d6b5c085ed52f5710d87d2bb86f6bd904e050bccdd7c9637a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_580ff949929d850d6b5c085ed52f5710d87d2bb86f6bd904e050bccdd7c9637a->leave($__internal_580ff949929d850d6b5c085ed52f5710d87d2bb86f6bd904e050bccdd7c9637a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "@FOSUser/Resetting/request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
