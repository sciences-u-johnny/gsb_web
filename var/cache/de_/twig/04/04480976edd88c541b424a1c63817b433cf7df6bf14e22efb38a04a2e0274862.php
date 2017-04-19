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
        $__internal_59b80eb377ca6d8bdf4acf38ee40da18ade1f66e417c2f777d1099e136285174 = $this->env->getExtension("native_profiler");
        $__internal_59b80eb377ca6d8bdf4acf38ee40da18ade1f66e417c2f777d1099e136285174->enter($__internal_59b80eb377ca6d8bdf4acf38ee40da18ade1f66e417c2f777d1099e136285174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_59b80eb377ca6d8bdf4acf38ee40da18ade1f66e417c2f777d1099e136285174->leave($__internal_59b80eb377ca6d8bdf4acf38ee40da18ade1f66e417c2f777d1099e136285174_prof);

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
