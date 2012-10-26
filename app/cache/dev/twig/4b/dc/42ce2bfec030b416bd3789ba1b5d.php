<?php

/* VehicleManagementManagementBundle:Vehicle:edit.html.twig */
class __TwigTemplate_4bdc42ce2bfec030b416bd3789ba1b5d extends Twig_Template
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
        echo " - Edit Vehicle";
    }

    // line 5
    public function block_management_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<h2>Edit a Vehicle</h2>
\t
\t";
        // line 8
        $this->env->loadTemplate("VehicleManagementManagementBundle::form.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "VehicleManagementManagementBundle:Vehicle:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 72,  155 => 68,  118 => 48,  105 => 38,  98 => 34,  76 => 27,  65 => 24,  163 => 64,  119 => 45,  66 => 22,  45 => 7,  36 => 5,  18 => 1,  167 => 50,  164 => 49,  150 => 67,  144 => 62,  140 => 59,  68 => 18,  61 => 30,  21 => 3,  56 => 13,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 61,  148 => 57,  145 => 60,  141 => 55,  134 => 54,  132 => 8,  127 => 46,  123 => 44,  109 => 49,  93 => 43,  90 => 29,  54 => 12,  133 => 44,  124 => 41,  111 => 51,  80 => 28,  60 => 16,  52 => 13,  97 => 34,  95 => 21,  88 => 30,  78 => 25,  71 => 14,  25 => 4,  72 => 26,  64 => 15,  53 => 13,  34 => 5,  92 => 20,  86 => 28,  79 => 40,  19 => 2,  42 => 7,  40 => 8,  29 => 2,  26 => 1,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 69,  158 => 16,  156 => 60,  153 => 15,  146 => 55,  142 => 54,  137 => 10,  126 => 6,  120 => 39,  117 => 44,  103 => 36,  74 => 36,  47 => 19,  32 => 3,  24 => 11,  22 => 2,  23 => 3,  17 => 1,  69 => 25,  63 => 15,  58 => 17,  49 => 11,  43 => 9,  37 => 6,  20 => 1,  139 => 26,  131 => 55,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 40,  99 => 44,  96 => 32,  91 => 33,  82 => 27,  77 => 25,  75 => 24,  57 => 29,  50 => 11,  46 => 8,  44 => 11,  39 => 10,  33 => 6,  30 => 2,  27 => 3,  135 => 9,  129 => 47,  122 => 49,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 20,  87 => 42,  84 => 29,  81 => 26,  73 => 24,  70 => 26,  67 => 16,  62 => 21,  59 => 14,  55 => 14,  51 => 26,  48 => 8,  41 => 8,  38 => 6,  35 => 5,  31 => 5,  28 => 1,);
    }
}
