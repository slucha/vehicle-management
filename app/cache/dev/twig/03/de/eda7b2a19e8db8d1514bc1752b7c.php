<?php

/* VehicleManagementManagementBundle::layout.html.twig */
class __TwigTemplate_03deeda7b2a19e8db8d1514bc1752b7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'management_body' => array($this, 'block_management_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "

";
        // line 4
        echo " 
";
        // line 5
        $this->displayBlock('management_body', $context, $blocks);
        echo " ";
    }

    public function block_management_body($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "VehicleManagementManagementBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  37 => 5,  34 => 4,  27 => 1,);
    }
}
