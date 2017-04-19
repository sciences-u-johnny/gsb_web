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
        $__internal_4e766bc95a709ebc4d0982a441b47e07a6bb1fd37c65bbd4f840fb027e2bb234 = $this->env->getExtension("native_profiler");
        $__internal_4e766bc95a709ebc4d0982a441b47e07a6bb1fd37c65bbd4f840fb027e2bb234->enter($__internal_4e766bc95a709ebc4d0982a441b47e07a6bb1fd37c65bbd4f840fb027e2bb234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e766bc95a709ebc4d0982a441b47e07a6bb1fd37c65bbd4f840fb027e2bb234->leave($__internal_4e766bc95a709ebc4d0982a441b47e07a6bb1fd37c65bbd4f840fb027e2bb234_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_77573a5a9e70cf63465e9507c47fd606662d7310bc12b7f6dc55e6d1fa5071d9 = $this->env->getExtension("native_profiler");
        $__internal_77573a5a9e70cf63465e9507c47fd606662d7310bc12b7f6dc55e6d1fa5071d9->enter($__internal_77573a5a9e70cf63465e9507c47fd606662d7310bc12b7f6dc55e6d1fa5071d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_77573a5a9e70cf63465e9507c47fd606662d7310bc12b7f6dc55e6d1fa5071d9->leave($__internal_77573a5a9e70cf63465e9507c47fd606662d7310bc12b7f6dc55e6d1fa5071d9_prof);

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
