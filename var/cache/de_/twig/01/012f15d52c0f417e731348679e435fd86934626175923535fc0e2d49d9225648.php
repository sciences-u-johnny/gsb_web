<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_8164a27daa99d3ddc06b95792fcc8c488e9868668c9e80c5b6ef343da649f771 extends Twig_Template
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
        $__internal_3668a9234597d37841a1cae509ed58bfcf0b5169098ccabec623cece206de32e = $this->env->getExtension("native_profiler");
        $__internal_3668a9234597d37841a1cae509ed58bfcf0b5169098ccabec623cece206de32e->enter($__internal_3668a9234597d37841a1cae509ed58bfcf0b5169098ccabec623cece206de32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_3668a9234597d37841a1cae509ed58bfcf0b5169098ccabec623cece206de32e->leave($__internal_3668a9234597d37841a1cae509ed58bfcf0b5169098ccabec623cece206de32e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
