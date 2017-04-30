<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b7bdcba0c8d7f23abb22686bfa9cad0f048c65fd30bf60e3f13d07325b8fc46c extends Twig_Template
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
        $__internal_89bde120a6e1e4f56872d8b2c4c8c69c35f93d836f1dce2c2a690f4af5767f1b = $this->env->getExtension("native_profiler");
        $__internal_89bde120a6e1e4f56872d8b2c4c8c69c35f93d836f1dce2c2a690f4af5767f1b->enter($__internal_89bde120a6e1e4f56872d8b2c4c8c69c35f93d836f1dce2c2a690f4af5767f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_89bde120a6e1e4f56872d8b2c4c8c69c35f93d836f1dce2c2a690f4af5767f1b->leave($__internal_89bde120a6e1e4f56872d8b2c4c8c69c35f93d836f1dce2c2a690f4af5767f1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
