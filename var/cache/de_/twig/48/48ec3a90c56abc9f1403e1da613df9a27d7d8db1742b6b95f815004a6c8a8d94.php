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
        $__internal_b0c2159167504896d3548919603de0eba47f0f87df003a1b2e822e76fc3f9254 = $this->env->getExtension("native_profiler");
        $__internal_b0c2159167504896d3548919603de0eba47f0f87df003a1b2e822e76fc3f9254->enter($__internal_b0c2159167504896d3548919603de0eba47f0f87df003a1b2e822e76fc3f9254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_b0c2159167504896d3548919603de0eba47f0f87df003a1b2e822e76fc3f9254->leave($__internal_b0c2159167504896d3548919603de0eba47f0f87df003a1b2e822e76fc3f9254_prof);

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
