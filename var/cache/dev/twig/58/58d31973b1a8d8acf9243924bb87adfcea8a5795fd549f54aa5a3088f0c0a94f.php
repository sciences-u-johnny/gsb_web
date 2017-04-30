<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_0ae90765bba391d1cbea74cc00bbbe36972af1e93e7c4c344b4c98d5fde09c97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_833a5600e1333f610d0d4c6f594dc53c504dfbd335b0d082e51f5cd8f259dea2 = $this->env->getExtension("native_profiler");
        $__internal_833a5600e1333f610d0d4c6f594dc53c504dfbd335b0d082e51f5cd8f259dea2->enter($__internal_833a5600e1333f610d0d4c6f594dc53c504dfbd335b0d082e51f5cd8f259dea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_833a5600e1333f610d0d4c6f594dc53c504dfbd335b0d082e51f5cd8f259dea2->leave($__internal_833a5600e1333f610d0d4c6f594dc53c504dfbd335b0d082e51f5cd8f259dea2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6dd52df6be6f7bc3d53354c0f1ae047a4097c000675f1eab35ec4550df533e99 = $this->env->getExtension("native_profiler");
        $__internal_6dd52df6be6f7bc3d53354c0f1ae047a4097c000675f1eab35ec4550df533e99->enter($__internal_6dd52df6be6f7bc3d53354c0f1ae047a4097c000675f1eab35ec4550df533e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_6dd52df6be6f7bc3d53354c0f1ae047a4097c000675f1eab35ec4550df533e99->leave($__internal_6dd52df6be6f7bc3d53354c0f1ae047a4097c000675f1eab35ec4550df533e99_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "@FOSUser/Registration/register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
