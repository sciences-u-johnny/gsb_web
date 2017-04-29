<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b741c863781a524d572b8ec49f659b59f3a06b58059189d8d4d386420b3b7b14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_5a2570592673115ff963a8f9f667e76cb20f910d1521fcbeb28f9dc1a4f44738 = $this->env->getExtension("native_profiler");
        $__internal_5a2570592673115ff963a8f9f667e76cb20f910d1521fcbeb28f9dc1a4f44738->enter($__internal_5a2570592673115ff963a8f9f667e76cb20f910d1521fcbeb28f9dc1a4f44738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a2570592673115ff963a8f9f667e76cb20f910d1521fcbeb28f9dc1a4f44738->leave($__internal_5a2570592673115ff963a8f9f667e76cb20f910d1521fcbeb28f9dc1a4f44738_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3a3ea66ec54b8d744a0fd26a46fbfbc67c802a4b944f20b61c55602f2a49db5d = $this->env->getExtension("native_profiler");
        $__internal_3a3ea66ec54b8d744a0fd26a46fbfbc67c802a4b944f20b61c55602f2a49db5d->enter($__internal_3a3ea66ec54b8d744a0fd26a46fbfbc67c802a4b944f20b61c55602f2a49db5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3a3ea66ec54b8d744a0fd26a46fbfbc67c802a4b944f20b61c55602f2a49db5d->leave($__internal_3a3ea66ec54b8d744a0fd26a46fbfbc67c802a4b944f20b61c55602f2a49db5d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c76362290560d7f15567deae286e9ead205410f7025f9c09d6076dfe09725dc3 = $this->env->getExtension("native_profiler");
        $__internal_c76362290560d7f15567deae286e9ead205410f7025f9c09d6076dfe09725dc3->enter($__internal_c76362290560d7f15567deae286e9ead205410f7025f9c09d6076dfe09725dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c76362290560d7f15567deae286e9ead205410f7025f9c09d6076dfe09725dc3->leave($__internal_c76362290560d7f15567deae286e9ead205410f7025f9c09d6076dfe09725dc3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_359f4149018c0f695c262519565117bbc76ac081c75a4cc5c19d8ca413dc0e32 = $this->env->getExtension("native_profiler");
        $__internal_359f4149018c0f695c262519565117bbc76ac081c75a4cc5c19d8ca413dc0e32->enter($__internal_359f4149018c0f695c262519565117bbc76ac081c75a4cc5c19d8ca413dc0e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_359f4149018c0f695c262519565117bbc76ac081c75a4cc5c19d8ca413dc0e32->leave($__internal_359f4149018c0f695c262519565117bbc76ac081c75a4cc5c19d8ca413dc0e32_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
