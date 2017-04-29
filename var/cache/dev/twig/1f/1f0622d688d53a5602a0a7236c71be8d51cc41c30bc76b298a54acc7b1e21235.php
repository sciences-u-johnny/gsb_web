<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_fe36646a50e13d2c76f1ac6cd9a5c06daa1f908caa02845255320565ea67a129 extends Twig_Template
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
        $__internal_e64381e2e713aaa8c6cabbde3765a0765f54ca2785a2438167d768b50c47cf07 = $this->env->getExtension("native_profiler");
        $__internal_e64381e2e713aaa8c6cabbde3765a0765f54ca2785a2438167d768b50c47cf07->enter($__internal_e64381e2e713aaa8c6cabbde3765a0765f54ca2785a2438167d768b50c47cf07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e64381e2e713aaa8c6cabbde3765a0765f54ca2785a2438167d768b50c47cf07->leave($__internal_e64381e2e713aaa8c6cabbde3765a0765f54ca2785a2438167d768b50c47cf07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
