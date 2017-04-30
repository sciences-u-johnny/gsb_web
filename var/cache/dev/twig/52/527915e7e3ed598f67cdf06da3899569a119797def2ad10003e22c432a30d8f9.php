<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_5492225eec5ba0b89a4b9ba0bd3404c1383ceb4f930da4e21e1ca66f172de5b6 extends Twig_Template
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
        $__internal_f8286c41c233330092e35b53167e6959dae5a5415e8a251d63092a8df819dca4 = $this->env->getExtension("native_profiler");
        $__internal_f8286c41c233330092e35b53167e6959dae5a5415e8a251d63092a8df819dca4->enter($__internal_f8286c41c233330092e35b53167e6959dae5a5415e8a251d63092a8df819dca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_f8286c41c233330092e35b53167e6959dae5a5415e8a251d63092a8df819dca4->leave($__internal_f8286c41c233330092e35b53167e6959dae5a5415e8a251d63092a8df819dca4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
