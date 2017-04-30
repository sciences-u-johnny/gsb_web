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
        $__internal_22aa0486a14da19923ce2084a5bb573443cc12a5c7b4a7b92975cd507c92a9ef = $this->env->getExtension("native_profiler");
        $__internal_22aa0486a14da19923ce2084a5bb573443cc12a5c7b4a7b92975cd507c92a9ef->enter($__internal_22aa0486a14da19923ce2084a5bb573443cc12a5c7b4a7b92975cd507c92a9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_22aa0486a14da19923ce2084a5bb573443cc12a5c7b4a7b92975cd507c92a9ef->leave($__internal_22aa0486a14da19923ce2084a5bb573443cc12a5c7b4a7b92975cd507c92a9ef_prof);

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
