<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_050ddfe0f5cba6c7054fb8df35d82da67ed202a89af67b61069bd05df40b44d5 extends Twig_Template
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
        $__internal_e595184b4757bb5fe005de576831dec74d590686c4297f07a201c6470645448c = $this->env->getExtension("native_profiler");
        $__internal_e595184b4757bb5fe005de576831dec74d590686c4297f07a201c6470645448c->enter($__internal_e595184b4757bb5fe005de576831dec74d590686c4297f07a201c6470645448c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e595184b4757bb5fe005de576831dec74d590686c4297f07a201c6470645448c->leave($__internal_e595184b4757bb5fe005de576831dec74d590686c4297f07a201c6470645448c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
