<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_ac2e24d4918e90733dca5a1f827fe8d3516014bb6ccf7e66afccc548926cb313 extends Twig_Template
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
        $__internal_0e12a7524e7e6d40e7eb1bf96daf0bf2de01704d394caa9383eb7c6f8bf377c8 = $this->env->getExtension("native_profiler");
        $__internal_0e12a7524e7e6d40e7eb1bf96daf0bf2de01704d394caa9383eb7c6f8bf377c8->enter($__internal_0e12a7524e7e6d40e7eb1bf96daf0bf2de01704d394caa9383eb7c6f8bf377c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0e12a7524e7e6d40e7eb1bf96daf0bf2de01704d394caa9383eb7c6f8bf377c8->leave($__internal_0e12a7524e7e6d40e7eb1bf96daf0bf2de01704d394caa9383eb7c6f8bf377c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
