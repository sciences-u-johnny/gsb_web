<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_83b719d29b856c4bdf2e555ba44841eae4cc276366dcf1c410b378367992f491 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_9439abdd9b973e002186327d9c14df593b7096e6e4bc7e8c5080d1032d317dd6 = $this->env->getExtension("native_profiler");
        $__internal_9439abdd9b973e002186327d9c14df593b7096e6e4bc7e8c5080d1032d317dd6->enter($__internal_9439abdd9b973e002186327d9c14df593b7096e6e4bc7e8c5080d1032d317dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9439abdd9b973e002186327d9c14df593b7096e6e4bc7e8c5080d1032d317dd6->leave($__internal_9439abdd9b973e002186327d9c14df593b7096e6e4bc7e8c5080d1032d317dd6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db159217c5240ac7fe05817db2e897ed4f2ac2c4d7fb89f44725cf16eb4bb7a7 = $this->env->getExtension("native_profiler");
        $__internal_db159217c5240ac7fe05817db2e897ed4f2ac2c4d7fb89f44725cf16eb4bb7a7->enter($__internal_db159217c5240ac7fe05817db2e897ed4f2ac2c4d7fb89f44725cf16eb4bb7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_db159217c5240ac7fe05817db2e897ed4f2ac2c4d7fb89f44725cf16eb4bb7a7->leave($__internal_db159217c5240ac7fe05817db2e897ed4f2ac2c4d7fb89f44725cf16eb4bb7a7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
