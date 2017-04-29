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
        $__internal_c28aae737dfab15631b4b4cd3349474df11fc9adcdf2e8609124c27ddb156e58 = $this->env->getExtension("native_profiler");
        $__internal_c28aae737dfab15631b4b4cd3349474df11fc9adcdf2e8609124c27ddb156e58->enter($__internal_c28aae737dfab15631b4b4cd3349474df11fc9adcdf2e8609124c27ddb156e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_c28aae737dfab15631b4b4cd3349474df11fc9adcdf2e8609124c27ddb156e58->leave($__internal_c28aae737dfab15631b4b4cd3349474df11fc9adcdf2e8609124c27ddb156e58_prof);

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
