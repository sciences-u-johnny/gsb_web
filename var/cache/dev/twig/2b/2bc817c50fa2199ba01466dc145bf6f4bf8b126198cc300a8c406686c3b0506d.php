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
        $__internal_1dfd7a43dd3b5ac0358630f14e190f2b259237467d589c0e0c501e34b46e4f3f = $this->env->getExtension("native_profiler");
        $__internal_1dfd7a43dd3b5ac0358630f14e190f2b259237467d589c0e0c501e34b46e4f3f->enter($__internal_1dfd7a43dd3b5ac0358630f14e190f2b259237467d589c0e0c501e34b46e4f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dfd7a43dd3b5ac0358630f14e190f2b259237467d589c0e0c501e34b46e4f3f->leave($__internal_1dfd7a43dd3b5ac0358630f14e190f2b259237467d589c0e0c501e34b46e4f3f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_539e4c42ac9127cd4d2d3e7ba56170cffa6831b6db379ecd9cedbec864784874 = $this->env->getExtension("native_profiler");
        $__internal_539e4c42ac9127cd4d2d3e7ba56170cffa6831b6db379ecd9cedbec864784874->enter($__internal_539e4c42ac9127cd4d2d3e7ba56170cffa6831b6db379ecd9cedbec864784874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_539e4c42ac9127cd4d2d3e7ba56170cffa6831b6db379ecd9cedbec864784874->leave($__internal_539e4c42ac9127cd4d2d3e7ba56170cffa6831b6db379ecd9cedbec864784874_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5e4f7ffb91b546f85b8466cf3dfa9a06ad02f6344d95f2f68a1ce5d187a853fb = $this->env->getExtension("native_profiler");
        $__internal_5e4f7ffb91b546f85b8466cf3dfa9a06ad02f6344d95f2f68a1ce5d187a853fb->enter($__internal_5e4f7ffb91b546f85b8466cf3dfa9a06ad02f6344d95f2f68a1ce5d187a853fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5e4f7ffb91b546f85b8466cf3dfa9a06ad02f6344d95f2f68a1ce5d187a853fb->leave($__internal_5e4f7ffb91b546f85b8466cf3dfa9a06ad02f6344d95f2f68a1ce5d187a853fb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b39f28f3b1b0edff4e123ca9306f1633062d29e78f8ac80058f14d398323580 = $this->env->getExtension("native_profiler");
        $__internal_6b39f28f3b1b0edff4e123ca9306f1633062d29e78f8ac80058f14d398323580->enter($__internal_6b39f28f3b1b0edff4e123ca9306f1633062d29e78f8ac80058f14d398323580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6b39f28f3b1b0edff4e123ca9306f1633062d29e78f8ac80058f14d398323580->leave($__internal_6b39f28f3b1b0edff4e123ca9306f1633062d29e78f8ac80058f14d398323580_prof);

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
