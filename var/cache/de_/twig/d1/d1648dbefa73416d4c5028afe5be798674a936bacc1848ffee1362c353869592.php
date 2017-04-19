<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_737a8d7d2e10beb74598f332dcefd27ce47bb08df9da35c647ef14aa83c9613b extends Twig_Template
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
        $__internal_1750ba680343d3d08b0ae6cbbc8cac438fa6f1750d4369d8f91b72d33443558d = $this->env->getExtension("native_profiler");
        $__internal_1750ba680343d3d08b0ae6cbbc8cac438fa6f1750d4369d8f91b72d33443558d->enter($__internal_1750ba680343d3d08b0ae6cbbc8cac438fa6f1750d4369d8f91b72d33443558d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1750ba680343d3d08b0ae6cbbc8cac438fa6f1750d4369d8f91b72d33443558d->leave($__internal_1750ba680343d3d08b0ae6cbbc8cac438fa6f1750d4369d8f91b72d33443558d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
