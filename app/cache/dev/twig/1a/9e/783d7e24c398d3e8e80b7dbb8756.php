<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_1a9e783d7e24c398d3e8e80b7dbb8756 extends Twig_Template
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

    // line 1
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 2
        echo " ";
        if ($this->getContext($context, "error")) {
            // line 3
            echo "<div class=\"alert\">
\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t<strong>Erreur!</strong> ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "error"), array(), "VehicleManagementUserBundle"), "html", null, true);
            // line 6
            echo "
</div>
";
        }
        // line 9
        echo "<div class=\"row\">
\t<div class=\"span3\">
\t\t<form class=\"well\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\">
\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getContext($context, "csrf_token"), "html", null, true);
        echo "\" /> <label
\t\t\t\tfor=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        // line 14
        echo "</label> <input type=\"text\" class=\"input-small\" id=\"username\" name=\"_username\"
\t\t\t\tvalue=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" /> <label for=\"password\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        // line 16
        echo "</label> <input
\t\t\t\ttype=\"password\" class=\"input-small\" id=\"password\" name=\"_password\" /> 
\t\t\t\t<input type=\"submit\" id=\"_submit\" name=\"_submit\"
\t\t\t\tvalue=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t</form>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  64 => 16,  60 => 15,  57 => 14,  55 => 13,  51 => 12,  47 => 11,  43 => 9,  38 => 6,  36 => 5,  32 => 3,  29 => 2,  26 => 1,);
    }
}
