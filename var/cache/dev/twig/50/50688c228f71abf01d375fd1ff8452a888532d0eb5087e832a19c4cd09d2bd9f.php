<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_5bd0d920bf8da30eeea9ac3e4a6dda86be764e57a703065a7afc235d7296d071 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_ffe62ab2ac76b373641d00f9bc44b639ac1e8ce624a30bd380627eeb7b67d32d = $this->env->getExtension("native_profiler");
        $__internal_ffe62ab2ac76b373641d00f9bc44b639ac1e8ce624a30bd380627eeb7b67d32d->enter($__internal_ffe62ab2ac76b373641d00f9bc44b639ac1e8ce624a30bd380627eeb7b67d32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffe62ab2ac76b373641d00f9bc44b639ac1e8ce624a30bd380627eeb7b67d32d->leave($__internal_ffe62ab2ac76b373641d00f9bc44b639ac1e8ce624a30bd380627eeb7b67d32d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26e59c58330e52ae49bbb2ae8c18fe8056fcafa5b2a3565978174e8ede702bc9 = $this->env->getExtension("native_profiler");
        $__internal_26e59c58330e52ae49bbb2ae8c18fe8056fcafa5b2a3565978174e8ede702bc9->enter($__internal_26e59c58330e52ae49bbb2ae8c18fe8056fcafa5b2a3565978174e8ede702bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_26e59c58330e52ae49bbb2ae8c18fe8056fcafa5b2a3565978174e8ede702bc9->leave($__internal_26e59c58330e52ae49bbb2ae8c18fe8056fcafa5b2a3565978174e8ede702bc9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
