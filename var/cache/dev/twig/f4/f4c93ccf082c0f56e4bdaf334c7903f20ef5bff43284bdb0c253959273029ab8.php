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
        $__internal_7a96b10495a441acdab19c58ae5238afcda174f71371f9c5384f0565c89b7342 = $this->env->getExtension("native_profiler");
        $__internal_7a96b10495a441acdab19c58ae5238afcda174f71371f9c5384f0565c89b7342->enter($__internal_7a96b10495a441acdab19c58ae5238afcda174f71371f9c5384f0565c89b7342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_7a96b10495a441acdab19c58ae5238afcda174f71371f9c5384f0565c89b7342->leave($__internal_7a96b10495a441acdab19c58ae5238afcda174f71371f9c5384f0565c89b7342_prof);

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
