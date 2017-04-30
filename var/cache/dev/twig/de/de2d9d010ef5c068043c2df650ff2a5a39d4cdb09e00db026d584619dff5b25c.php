<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2d62b4df1693a4a9c09d33251951663236e9011bbdc43683e59f29aef6f8d98b extends Twig_Template
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
        $__internal_35ee9f9261a93754b79aebc55ecbd45e4e385ebeadcdec7db781aad564a08b0b = $this->env->getExtension("native_profiler");
        $__internal_35ee9f9261a93754b79aebc55ecbd45e4e385ebeadcdec7db781aad564a08b0b->enter($__internal_35ee9f9261a93754b79aebc55ecbd45e4e385ebeadcdec7db781aad564a08b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_35ee9f9261a93754b79aebc55ecbd45e4e385ebeadcdec7db781aad564a08b0b->leave($__internal_35ee9f9261a93754b79aebc55ecbd45e4e385ebeadcdec7db781aad564a08b0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
