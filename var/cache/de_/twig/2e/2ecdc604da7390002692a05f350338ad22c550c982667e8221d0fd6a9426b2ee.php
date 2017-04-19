<?php

/* @Test/Default/Acceuil.html.twig */
class __TwigTemplate_738a9644bf81a6cf0a6c26b5a3ed8cf9d9ce0ac1d3a2dfdad88849308f07c3d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestBundle::layout.html.twig", "@Test/Default/Acceuil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TestBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bccc92592ba2cffd8d163ce1dc2e9d31b34c9e380e8dd190fd3d675fb3f50fb = $this->env->getExtension("native_profiler");
        $__internal_6bccc92592ba2cffd8d163ce1dc2e9d31b34c9e380e8dd190fd3d675fb3f50fb->enter($__internal_6bccc92592ba2cffd8d163ce1dc2e9d31b34c9e380e8dd190fd3d675fb3f50fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Test/Default/Acceuil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bccc92592ba2cffd8d163ce1dc2e9d31b34c9e380e8dd190fd3d675fb3f50fb->leave($__internal_6bccc92592ba2cffd8d163ce1dc2e9d31b34c9e380e8dd190fd3d675fb3f50fb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c42de968c6755b01e22e73aca2e4fce7eb689a75e52125b85d1cfd292883bb6 = $this->env->getExtension("native_profiler");
        $__internal_1c42de968c6755b01e22e73aca2e4fce7eb689a75e52125b85d1cfd292883bb6->enter($__internal_1c42de968c6755b01e22e73aca2e4fce7eb689a75e52125b85d1cfd292883bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

     <div class=\"row\" style=\"margin-left: 0px;margin-right: 0px;\" >
         <div class=\"col-md-offset-2\">
         </div>

     </div>

";
        
        $__internal_1c42de968c6755b01e22e73aca2e4fce7eb689a75e52125b85d1cfd292883bb6->leave($__internal_1c42de968c6755b01e22e73aca2e4fce7eb689a75e52125b85d1cfd292883bb6_prof);

    }

    public function getTemplateName()
    {
        return "@Test/Default/Acceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'TestBundle::layout.html.twig' %}*/
/* {% block body %}*/
/* */
/* */
/*      <div class="row" style="margin-left: 0px;margin-right: 0px;" >*/
/*          <div class="col-md-offset-2">*/
/*          </div>*/
/* */
/*      </div>*/
/* */
/* {% endblock %}*/
/* */
