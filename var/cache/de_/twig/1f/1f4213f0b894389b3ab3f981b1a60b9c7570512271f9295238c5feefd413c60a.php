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
        $__internal_af17bdd83cc9800a466202a3539cdc1328c2e17fc16d6a6fe96f758cf042f587 = $this->env->getExtension("native_profiler");
        $__internal_af17bdd83cc9800a466202a3539cdc1328c2e17fc16d6a6fe96f758cf042f587->enter($__internal_af17bdd83cc9800a466202a3539cdc1328c2e17fc16d6a6fe96f758cf042f587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af17bdd83cc9800a466202a3539cdc1328c2e17fc16d6a6fe96f758cf042f587->leave($__internal_af17bdd83cc9800a466202a3539cdc1328c2e17fc16d6a6fe96f758cf042f587_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_13c18bef25e67e254feeabd5b083f12658a59685dbeb567a9299b570a101bac0 = $this->env->getExtension("native_profiler");
        $__internal_13c18bef25e67e254feeabd5b083f12658a59685dbeb567a9299b570a101bac0->enter($__internal_13c18bef25e67e254feeabd5b083f12658a59685dbeb567a9299b570a101bac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_13c18bef25e67e254feeabd5b083f12658a59685dbeb567a9299b570a101bac0->leave($__internal_13c18bef25e67e254feeabd5b083f12658a59685dbeb567a9299b570a101bac0_prof);

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
