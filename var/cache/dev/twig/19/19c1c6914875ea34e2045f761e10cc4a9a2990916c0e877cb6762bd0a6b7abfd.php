<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_9c91561a23a306513e619271e6387b460432f48453176f754796c22dd9e75d7f extends Twig_Template
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
        $__internal_45ebbb72996105477e3199793de1bea0347d6b97adf1a2d45836f984814be612 = $this->env->getExtension("native_profiler");
        $__internal_45ebbb72996105477e3199793de1bea0347d6b97adf1a2d45836f984814be612->enter($__internal_45ebbb72996105477e3199793de1bea0347d6b97adf1a2d45836f984814be612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_45ebbb72996105477e3199793de1bea0347d6b97adf1a2d45836f984814be612->leave($__internal_45ebbb72996105477e3199793de1bea0347d6b97adf1a2d45836f984814be612_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
