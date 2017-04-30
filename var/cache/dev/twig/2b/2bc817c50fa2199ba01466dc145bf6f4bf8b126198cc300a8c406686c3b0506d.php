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
        $__internal_5aacf395ef635ca1e256456e901c4ec08f8427340efdaf85773f7279912a01ed = $this->env->getExtension("native_profiler");
        $__internal_5aacf395ef635ca1e256456e901c4ec08f8427340efdaf85773f7279912a01ed->enter($__internal_5aacf395ef635ca1e256456e901c4ec08f8427340efdaf85773f7279912a01ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5aacf395ef635ca1e256456e901c4ec08f8427340efdaf85773f7279912a01ed->leave($__internal_5aacf395ef635ca1e256456e901c4ec08f8427340efdaf85773f7279912a01ed_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ddd9762306cd2df7f4452f9a95b4e996a1b16c82fca8ac24b7efffc697fa3db = $this->env->getExtension("native_profiler");
        $__internal_7ddd9762306cd2df7f4452f9a95b4e996a1b16c82fca8ac24b7efffc697fa3db->enter($__internal_7ddd9762306cd2df7f4452f9a95b4e996a1b16c82fca8ac24b7efffc697fa3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7ddd9762306cd2df7f4452f9a95b4e996a1b16c82fca8ac24b7efffc697fa3db->leave($__internal_7ddd9762306cd2df7f4452f9a95b4e996a1b16c82fca8ac24b7efffc697fa3db_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ba7dcbf716c29848560c9d60cbf9e42e89de6efee9158a2030a36e89a9266169 = $this->env->getExtension("native_profiler");
        $__internal_ba7dcbf716c29848560c9d60cbf9e42e89de6efee9158a2030a36e89a9266169->enter($__internal_ba7dcbf716c29848560c9d60cbf9e42e89de6efee9158a2030a36e89a9266169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ba7dcbf716c29848560c9d60cbf9e42e89de6efee9158a2030a36e89a9266169->leave($__internal_ba7dcbf716c29848560c9d60cbf9e42e89de6efee9158a2030a36e89a9266169_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3e02f438ae6f075b8ce0a7d5304a0296716edf68cf80d2244f4cb611a1d2d5e = $this->env->getExtension("native_profiler");
        $__internal_a3e02f438ae6f075b8ce0a7d5304a0296716edf68cf80d2244f4cb611a1d2d5e->enter($__internal_a3e02f438ae6f075b8ce0a7d5304a0296716edf68cf80d2244f4cb611a1d2d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a3e02f438ae6f075b8ce0a7d5304a0296716edf68cf80d2244f4cb611a1d2d5e->leave($__internal_a3e02f438ae6f075b8ce0a7d5304a0296716edf68cf80d2244f4cb611a1d2d5e_prof);

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
