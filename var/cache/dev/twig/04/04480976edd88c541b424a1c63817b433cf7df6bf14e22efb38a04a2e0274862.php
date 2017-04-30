<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_bc1bfa3082573369fb2b1a90680071dd8b9b1257695fbeabbaad4beb76b1baf4 extends Twig_Template
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
        $__internal_589e30450d88f2d7a1b6d16de0f3ac043d119179bbd6d1a5ff12f56af932d684 = $this->env->getExtension("native_profiler");
        $__internal_589e30450d88f2d7a1b6d16de0f3ac043d119179bbd6d1a5ff12f56af932d684->enter($__internal_589e30450d88f2d7a1b6d16de0f3ac043d119179bbd6d1a5ff12f56af932d684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_589e30450d88f2d7a1b6d16de0f3ac043d119179bbd6d1a5ff12f56af932d684->leave($__internal_589e30450d88f2d7a1b6d16de0f3ac043d119179bbd6d1a5ff12f56af932d684_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
