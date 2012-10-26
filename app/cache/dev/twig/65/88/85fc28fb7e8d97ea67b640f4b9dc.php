<?php

/* VehicleManagementManagementBundle::add.html.twig */
class __TwigTemplate_658885fc28fb7e8d97ea67b640f4b9dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VehicleManagementManagementBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'management_body' => array($this, 'block_management_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VehicleManagementManagementBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Edit ";
        echo twig_escape_filter($this->env, $this->getContext($context, "managementType"), "html", null, true);
    }

    // line 5
    public function block_management_body($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $this->env->loadTemplate("VehicleManagementManagementBundle::form.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "VehicleManagementManagementBundle::add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  27 => 3,);
    }
}
