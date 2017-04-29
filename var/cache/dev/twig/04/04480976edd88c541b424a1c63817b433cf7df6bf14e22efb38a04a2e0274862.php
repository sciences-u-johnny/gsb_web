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
        $__internal_13c6179724133cf92d4dabd8fb6dffa8572703c8c7575299e71ae69b783d36ba = $this->env->getExtension("native_profiler");
        $__internal_13c6179724133cf92d4dabd8fb6dffa8572703c8c7575299e71ae69b783d36ba->enter($__internal_13c6179724133cf92d4dabd8fb6dffa8572703c8c7575299e71ae69b783d36ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_13c6179724133cf92d4dabd8fb6dffa8572703c8c7575299e71ae69b783d36ba->leave($__internal_13c6179724133cf92d4dabd8fb6dffa8572703c8c7575299e71ae69b783d36ba_prof);

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
