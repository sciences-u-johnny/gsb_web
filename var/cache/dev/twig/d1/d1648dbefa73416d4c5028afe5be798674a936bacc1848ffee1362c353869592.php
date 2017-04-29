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
        $__internal_fc448f6df9cd848daf878aa9b6c5b4b0eee30f4075d5aca53cc9397fc8cef365 = $this->env->getExtension("native_profiler");
        $__internal_fc448f6df9cd848daf878aa9b6c5b4b0eee30f4075d5aca53cc9397fc8cef365->enter($__internal_fc448f6df9cd848daf878aa9b6c5b4b0eee30f4075d5aca53cc9397fc8cef365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_fc448f6df9cd848daf878aa9b6c5b4b0eee30f4075d5aca53cc9397fc8cef365->leave($__internal_fc448f6df9cd848daf878aa9b6c5b4b0eee30f4075d5aca53cc9397fc8cef365_prof);

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
