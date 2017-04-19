<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_6b081d9ff7acab3fe3560279a9c364ebff5ff59418f3a5fc608a1f5c94985b94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_76859f36e8f2c2c01d07012f7ab0f80b09198a04435b2dbd4f6c240957600c84 = $this->env->getExtension("native_profiler");
        $__internal_76859f36e8f2c2c01d07012f7ab0f80b09198a04435b2dbd4f6c240957600c84->enter($__internal_76859f36e8f2c2c01d07012f7ab0f80b09198a04435b2dbd4f6c240957600c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76859f36e8f2c2c01d07012f7ab0f80b09198a04435b2dbd4f6c240957600c84->leave($__internal_76859f36e8f2c2c01d07012f7ab0f80b09198a04435b2dbd4f6c240957600c84_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a590571c45153a34b2307523bc59daa2340d4c97220b8960401ec90695785490 = $this->env->getExtension("native_profiler");
        $__internal_a590571c45153a34b2307523bc59daa2340d4c97220b8960401ec90695785490->enter($__internal_a590571c45153a34b2307523bc59daa2340d4c97220b8960401ec90695785490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_a590571c45153a34b2307523bc59daa2340d4c97220b8960401ec90695785490->leave($__internal_a590571c45153a34b2307523bc59daa2340d4c97220b8960401ec90695785490_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "@FOSUser/Resetting/reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
