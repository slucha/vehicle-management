<?php

/* VehicleManagementManagementBundle::form.html.twig */
class __TwigTemplate_3410bc0a14fb628c0b2e3a24ca0b7725 extends Twig_Template
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
        // line 1
        echo "<form class=\"well span4\" method=\"post\"  ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
\t<legend>Add a ";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, "managementType"), "html", null, true);
        echo "
\t";
        // line 3
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
\t<!--   <input type=\"submit\" />-->
\t<button type=\"submit\" class=\"btn\">Save</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "VehicleManagementManagementBundle::form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  17 => 1,);
    }
}
