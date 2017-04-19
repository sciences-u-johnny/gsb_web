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
        $__internal_d93ec1ccdbc7ae21b9d3f3846ebd82407821a83db1dbda7a845b91395b09c57b = $this->env->getExtension("native_profiler");
        $__internal_d93ec1ccdbc7ae21b9d3f3846ebd82407821a83db1dbda7a845b91395b09c57b->enter($__internal_d93ec1ccdbc7ae21b9d3f3846ebd82407821a83db1dbda7a845b91395b09c57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d93ec1ccdbc7ae21b9d3f3846ebd82407821a83db1dbda7a845b91395b09c57b->leave($__internal_d93ec1ccdbc7ae21b9d3f3846ebd82407821a83db1dbda7a845b91395b09c57b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ab7e75e711bee6416d85e437d0f21661f98187887c5c2d8dac48515dfbece03 = $this->env->getExtension("native_profiler");
        $__internal_4ab7e75e711bee6416d85e437d0f21661f98187887c5c2d8dac48515dfbece03->enter($__internal_4ab7e75e711bee6416d85e437d0f21661f98187887c5c2d8dac48515dfbece03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_4ab7e75e711bee6416d85e437d0f21661f98187887c5c2d8dac48515dfbece03->leave($__internal_4ab7e75e711bee6416d85e437d0f21661f98187887c5c2d8dac48515dfbece03_prof);

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
