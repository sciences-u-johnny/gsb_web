<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_b90092f75fe9c5a962c7cfd14d5c99454d3949bab77e94368fff45f8c84817e0 extends Twig_Template
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
        $__internal_d81da90547f56b556e401ac5e1aeb60fa9afe1c5064affb3f4132f2037c70d4b = $this->env->getExtension("native_profiler");
        $__internal_d81da90547f56b556e401ac5e1aeb60fa9afe1c5064affb3f4132f2037c70d4b->enter($__internal_d81da90547f56b556e401ac5e1aeb60fa9afe1c5064affb3f4132f2037c70d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_d81da90547f56b556e401ac5e1aeb60fa9afe1c5064affb3f4132f2037c70d4b->leave($__internal_d81da90547f56b556e401ac5e1aeb60fa9afe1c5064affb3f4132f2037c70d4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
