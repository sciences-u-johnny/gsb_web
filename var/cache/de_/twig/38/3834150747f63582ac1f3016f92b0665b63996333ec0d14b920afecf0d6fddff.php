<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_42f997be5437c0678489432ff4e7470fab08d6a25c9ad479ae795a58de0478cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_2ff89edeb45ff06c9115c4bef70b1087cebdc6057c917ca5f10b18a3ceb65fdb = $this->env->getExtension("native_profiler");
        $__internal_2ff89edeb45ff06c9115c4bef70b1087cebdc6057c917ca5f10b18a3ceb65fdb->enter($__internal_2ff89edeb45ff06c9115c4bef70b1087cebdc6057c917ca5f10b18a3ceb65fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ff89edeb45ff06c9115c4bef70b1087cebdc6057c917ca5f10b18a3ceb65fdb->leave($__internal_2ff89edeb45ff06c9115c4bef70b1087cebdc6057c917ca5f10b18a3ceb65fdb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_edfd0ad32c964f00b08a9f65b14c899ee362f2bdd18d6fb9e0a9a1d8abb5d411 = $this->env->getExtension("native_profiler");
        $__internal_edfd0ad32c964f00b08a9f65b14c899ee362f2bdd18d6fb9e0a9a1d8abb5d411->enter($__internal_edfd0ad32c964f00b08a9f65b14c899ee362f2bdd18d6fb9e0a9a1d8abb5d411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_edfd0ad32c964f00b08a9f65b14c899ee362f2bdd18d6fb9e0a9a1d8abb5d411->leave($__internal_edfd0ad32c964f00b08a9f65b14c899ee362f2bdd18d6fb9e0a9a1d8abb5d411_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
/*     {{ include('@FOSUser/Security/login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
