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
        $__internal_a881a140c2f1f388f9a6246ffee8359766cc89bb2ba127eef4234b661004f490 = $this->env->getExtension("native_profiler");
        $__internal_a881a140c2f1f388f9a6246ffee8359766cc89bb2ba127eef4234b661004f490->enter($__internal_a881a140c2f1f388f9a6246ffee8359766cc89bb2ba127eef4234b661004f490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a881a140c2f1f388f9a6246ffee8359766cc89bb2ba127eef4234b661004f490->leave($__internal_a881a140c2f1f388f9a6246ffee8359766cc89bb2ba127eef4234b661004f490_prof);

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
