<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_92dcd411512aec404be0491472b9363eb2c9d6e4771268557f8e7597cff1d729 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85f5afb1b9cf99ca76de54808a77c898c8030e10b339cf54c1750f9a248b6f74 = $this->env->getExtension("native_profiler");
        $__internal_85f5afb1b9cf99ca76de54808a77c898c8030e10b339cf54c1750f9a248b6f74->enter($__internal_85f5afb1b9cf99ca76de54808a77c898c8030e10b339cf54c1750f9a248b6f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_85f5afb1b9cf99ca76de54808a77c898c8030e10b339cf54c1750f9a248b6f74->leave($__internal_85f5afb1b9cf99ca76de54808a77c898c8030e10b339cf54c1750f9a248b6f74_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
