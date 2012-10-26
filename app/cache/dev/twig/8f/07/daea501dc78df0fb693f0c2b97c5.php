<?php

/* VehicleManagementManagementBundle:Homepage:index.html.twig */
class __TwigTemplate_8f07daea501dc78df0fb693f0c2b97c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VehicleManagementManagementBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Vehicle List";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<h2>Welcome on Vehicle Management!</h2>
  \t<p>Vehicle Management is a simple and intuitive website that lets you manage your vehicles easily.</p>
  \t<p>You can manage your fuel, your maintenance costs and see <strong>amazing charts!</strong></p>
";
    }

    public function getTemplateName()
    {
        return "VehicleManagementManagementBundle:Homepage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 4,  34 => 3,  27 => 2,);
    }
}
