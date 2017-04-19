<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b166d8470f6d5010a424c75791e5682ee778b793d4b81f7ed6bd08467cf7e988 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8825cdf933c5daf29812c3f464ab07101df8eae52ece174c0470dd0e4160a88 = $this->env->getExtension("native_profiler");
        $__internal_c8825cdf933c5daf29812c3f464ab07101df8eae52ece174c0470dd0e4160a88->enter($__internal_c8825cdf933c5daf29812c3f464ab07101df8eae52ece174c0470dd0e4160a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8825cdf933c5daf29812c3f464ab07101df8eae52ece174c0470dd0e4160a88->leave($__internal_c8825cdf933c5daf29812c3f464ab07101df8eae52ece174c0470dd0e4160a88_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_46fcd9c4da73844f92bb12a2040f3d4cb014fc143f804694e23add3e4c009c3b = $this->env->getExtension("native_profiler");
        $__internal_46fcd9c4da73844f92bb12a2040f3d4cb014fc143f804694e23add3e4c009c3b->enter($__internal_46fcd9c4da73844f92bb12a2040f3d4cb014fc143f804694e23add3e4c009c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_46fcd9c4da73844f92bb12a2040f3d4cb014fc143f804694e23add3e4c009c3b->leave($__internal_46fcd9c4da73844f92bb12a2040f3d4cb014fc143f804694e23add3e4c009c3b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e6b7e4a9f35f30bec8319a801daca9a3dae67762c0c9b6aedd3979c2dda3d9a = $this->env->getExtension("native_profiler");
        $__internal_9e6b7e4a9f35f30bec8319a801daca9a3dae67762c0c9b6aedd3979c2dda3d9a->enter($__internal_9e6b7e4a9f35f30bec8319a801daca9a3dae67762c0c9b6aedd3979c2dda3d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9e6b7e4a9f35f30bec8319a801daca9a3dae67762c0c9b6aedd3979c2dda3d9a->leave($__internal_9e6b7e4a9f35f30bec8319a801daca9a3dae67762c0c9b6aedd3979c2dda3d9a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9fd49b594f784feb9141267e300fa08b2f8198faaeddf12c4e46377578f0dd67 = $this->env->getExtension("native_profiler");
        $__internal_9fd49b594f784feb9141267e300fa08b2f8198faaeddf12c4e46377578f0dd67->enter($__internal_9fd49b594f784feb9141267e300fa08b2f8198faaeddf12c4e46377578f0dd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9fd49b594f784feb9141267e300fa08b2f8198faaeddf12c4e46377578f0dd67->leave($__internal_9fd49b594f784feb9141267e300fa08b2f8198faaeddf12c4e46377578f0dd67_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
