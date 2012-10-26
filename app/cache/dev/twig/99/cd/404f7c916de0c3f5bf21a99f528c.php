<?php

/* VehicleManagementChartBundle:Main:index.html.twig */
class __TwigTemplate_99cd404f7c916de0c3f5bf21a99f528c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "<h3>Charts</h3>

<div id=\"container\" style=\"width:500px; height: 400px; margin: 0 auto\"></div>
";
        // line 5
        $this->displayBlock('javascripts', $context, $blocks);
        // line 9
        echo "
";
    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        // line 6
        echo "\t\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t\t<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vehiclemanagementchart/js/chart.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>\t\t
";
    }

    public function getTemplateName()
    {
        return "VehicleManagementChartBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  45 => 6,  42 => 5,  37 => 9,  35 => 5,  30 => 2,  27 => 1,);
    }
}
