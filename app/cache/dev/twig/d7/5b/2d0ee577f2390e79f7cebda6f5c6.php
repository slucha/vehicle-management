<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_d75b2d0ee577f2390e79f7cebda6f5c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute($this->getContext($context, "user"), "username")), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 5
        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "app"), "session")))) {
            // line 6
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_security.target_path"), "method");
            // line 7
            echo "        ";
            if ((!twig_test_empty($this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "targetUrl"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 8
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  18 => 1,  167 => 50,  164 => 49,  150 => 14,  144 => 12,  140 => 11,  68 => 34,  61 => 30,  21 => 3,  56 => 15,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 8,  127 => 46,  123 => 44,  109 => 49,  93 => 43,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 51,  80 => 26,  60 => 16,  52 => 13,  97 => 34,  95 => 21,  88 => 29,  78 => 25,  71 => 14,  25 => 4,  72 => 16,  64 => 15,  53 => 13,  34 => 5,  92 => 20,  86 => 28,  79 => 40,  19 => 2,  42 => 10,  40 => 7,  29 => 4,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 16,  156 => 60,  153 => 15,  146 => 55,  142 => 54,  137 => 10,  126 => 6,  120 => 39,  117 => 44,  103 => 36,  74 => 36,  47 => 19,  32 => 11,  24 => 3,  22 => 3,  23 => 3,  17 => 1,  69 => 20,  63 => 18,  58 => 17,  49 => 11,  43 => 10,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 44,  96 => 34,  91 => 33,  82 => 27,  77 => 25,  75 => 24,  57 => 29,  50 => 13,  46 => 24,  44 => 11,  39 => 7,  33 => 6,  30 => 6,  27 => 3,  135 => 9,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 20,  87 => 42,  84 => 28,  81 => 41,  73 => 21,  70 => 26,  67 => 16,  62 => 24,  59 => 23,  55 => 14,  51 => 26,  48 => 8,  41 => 9,  38 => 18,  35 => 14,  31 => 5,  28 => 4,);
    }
}
