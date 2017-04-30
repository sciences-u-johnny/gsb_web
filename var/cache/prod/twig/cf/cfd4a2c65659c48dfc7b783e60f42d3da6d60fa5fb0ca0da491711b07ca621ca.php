<?php

/* SeTestBundle::login.html.twig */
class __TwigTemplate_c86a51d030aa8e0f2a859151c334968a2c9ad2d86fb576b799109e3325843dfb extends Twig_Template
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
        // line 2
        echo "  ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 3
            echo "      <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"submit\" value=\"Connexion\" />
</form>";
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
        return array (  36 => 8,  31 => 6,  28 => 5,  22 => 3,  19 => 2,);
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
