<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b745e78800f309155291caf708c3bde04a0614c21ca93364e194121f11b14c30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_dccf571b6cb844ef16d0737636fb435d10c8d2844d14765ae27ff6260a9322e0 = $this->env->getExtension("native_profiler");
        $__internal_dccf571b6cb844ef16d0737636fb435d10c8d2844d14765ae27ff6260a9322e0->enter($__internal_dccf571b6cb844ef16d0737636fb435d10c8d2844d14765ae27ff6260a9322e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dccf571b6cb844ef16d0737636fb435d10c8d2844d14765ae27ff6260a9322e0->leave($__internal_dccf571b6cb844ef16d0737636fb435d10c8d2844d14765ae27ff6260a9322e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed6f3403c322a33fc27a975813c7394a960d3ea85d25688e0b8d1511accaf4bd = $this->env->getExtension("native_profiler");
        $__internal_ed6f3403c322a33fc27a975813c7394a960d3ea85d25688e0b8d1511accaf4bd->enter($__internal_ed6f3403c322a33fc27a975813c7394a960d3ea85d25688e0b8d1511accaf4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ed6f3403c322a33fc27a975813c7394a960d3ea85d25688e0b8d1511accaf4bd->leave($__internal_ed6f3403c322a33fc27a975813c7394a960d3ea85d25688e0b8d1511accaf4bd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
