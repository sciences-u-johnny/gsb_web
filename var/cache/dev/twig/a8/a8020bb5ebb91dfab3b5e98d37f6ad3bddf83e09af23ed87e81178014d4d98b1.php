<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b76f158bb2e4b030714ca0094f69e1ec232b482db963140230a30163ec1a8b7f extends Twig_Template
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
        $__internal_b9352481398c9e8870ede4070362843e86856af1f392ed3afe466306a825688c = $this->env->getExtension("native_profiler");
        $__internal_b9352481398c9e8870ede4070362843e86856af1f392ed3afe466306a825688c->enter($__internal_b9352481398c9e8870ede4070362843e86856af1f392ed3afe466306a825688c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b9352481398c9e8870ede4070362843e86856af1f392ed3afe466306a825688c->leave($__internal_b9352481398c9e8870ede4070362843e86856af1f392ed3afe466306a825688c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
