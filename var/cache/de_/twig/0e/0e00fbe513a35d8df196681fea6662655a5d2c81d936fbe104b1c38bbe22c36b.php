<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_67a8f876d48f7fd3e5755bdd05fff011e286320eccfa3c40d80350fc2981cd1a extends Twig_Template
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
        $__internal_672e06a64b3f9168bb6222522ddce46810ea14a61cde4756f82c569943d85936 = $this->env->getExtension("native_profiler");
        $__internal_672e06a64b3f9168bb6222522ddce46810ea14a61cde4756f82c569943d85936->enter($__internal_672e06a64b3f9168bb6222522ddce46810ea14a61cde4756f82c569943d85936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_672e06a64b3f9168bb6222522ddce46810ea14a61cde4756f82c569943d85936->leave($__internal_672e06a64b3f9168bb6222522ddce46810ea14a61cde4756f82c569943d85936_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
