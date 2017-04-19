<?php

/* SeTestBundle::login.html.twig */
class __TwigTemplate_794c57b770865cb90e14992b830288abdc4c81ef268fdbcf324a1f81d7197be2 extends Twig_Template
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
        $__internal_045611cd777674ea97c0d4fe6f1b4eae595e6bca571dc712ee5482633ac4619e = $this->env->getExtension("native_profiler");
        $__internal_045611cd777674ea97c0d4fe6f1b4eae595e6bca571dc712ee5482633ac4619e->enter($__internal_045611cd777674ea97c0d4fe6f1b4eae595e6bca571dc712ee5482633ac4619e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SeTestBundle::login.html.twig"));

        // line 2
        echo "  ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 3
            echo "      <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 5
        echo "
<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"login\">Login :</label>
    <input type=\"text\" id=\"login\" name=\"_username\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"submit\" value=\"Connexion\" />
</form>";
        
        $__internal_045611cd777674ea97c0d4fe6f1b4eae595e6bca571dc712ee5482633ac4619e->leave($__internal_045611cd777674ea97c0d4fe6f1b4eae595e6bca571dc712ee5482633ac4619e_prof);

    }

    public function getTemplateName()
    {
        return "SeTestBundle::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  31 => 5,  25 => 3,  22 => 2,);
    }
}
/* {# S'il y a une erreur, on l'affiche dans un joli cadre #}*/
/*   {% if error %}*/
/*       <div class="alert alert-danger">{{ error.message }}</div>*/
/*   {% endif %}*/
/* */
/* <form action="{{ path('login_check') }}" method="post">*/
/*     <label for="login">Login :</label>*/
/*     <input type="text" id="login" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Mot de passe :</label>*/
/*     <input type="password" id="password" name="_password" />*/
/*     <br />*/
/*     <input type="submit" value="Connexion" />*/
/* </form>*/
