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
        $__internal_d0259d44ec0bd7d87399b815031427e53c992b9a31b553e5366c9d4d9270ce4a = $this->env->getExtension("native_profiler");
        $__internal_d0259d44ec0bd7d87399b815031427e53c992b9a31b553e5366c9d4d9270ce4a->enter($__internal_d0259d44ec0bd7d87399b815031427e53c992b9a31b553e5366c9d4d9270ce4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d0259d44ec0bd7d87399b815031427e53c992b9a31b553e5366c9d4d9270ce4a->leave($__internal_d0259d44ec0bd7d87399b815031427e53c992b9a31b553e5366c9d4d9270ce4a_prof);

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
