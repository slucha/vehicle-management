<?php

/* ::layout.html.twig */
class __TwigTemplate_a66465114619d56fe7bbae73018a0762 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

\t\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t\t";
        // line 8
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "\t\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "\t</head>

\t<body>
\t
\t<div class=\"navbar navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container\">
          <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </a>
          <a class=\"brand\" href=\"#\">Project name</a>
          <div class=\"nav-collapse\">
            <ul class=\"nav\">
              <li class=\"active\"><a href=\"#\">Home</a></li>
              <li><a href=\"#about\">About</a></li>
              <li><a href=\"#contact\">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
\t
\t
\t\t<div class=\"container-fluid\">

\t\t\t<div id=\"header\" class=\"page-header\">
\t\t\t\t\t<h1>Vehicle Management <small>Website for an easy vehicle management</small></h1>\t\t\t\t
\t\t\t\t\t<p>";
        // line 47
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 48
            echo "\t\t\t\t\t\t    <div class=\"btn-group\">
\t\t\t\t\t\t\t  <a class=\"btn\" href=\"#\"><i class=\"icon-user\"></i> <strong>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo "</strong></a>
\t\t\t\t\t\t\t  <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span class=\"caret\"></span></a>
\t\t\t\t\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t   <li><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i> My profile</a></li>
\t\t\t\t\t\t\t   <li><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\"><i class=\"icon-off\"></i> Disconnect</a></li>\t   
\t\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 57
            echo "\t\t\t\t\t\t\t <a class=\"btn\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\"><i class=\"icon-user\"></i> <strong>Connection</strong></a>\t\t\t\t
\t\t\t\t\t\t";
        }
        // line 59
        echo "\t\t\t\t\t</p>
\t\t\t</div>
\t\t<div class=\"row-fluid\">
\t\t\t\t<div id=\"menu\" class=\"span2\">
\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t<li class=";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('vehiclemanagement_extension')->activeFilter($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method"), "homepage"), "html", null, true);
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_homepage"), "html", null, true);
        echo "\"><i class=\"icon-chevron-right\"></i> Home</a></li>
\t\t\t\t\t\t<li class=";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('vehiclemanagement_extension')->activeFilter($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method"), "vehicle"), "html", null, true);
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VehicleManagementManagementBundle_vehicle"), "html", null, true);
        echo "\"><i class=\"icon-chevron-right\"></i> Vehicle</a></li>\t\t\t\t\t\t
\t\t\t\t\t\t<li class=";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('vehiclemanagement_extension')->activeFilter($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method"), "refuel"), "html", null, true);
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VehicleManagementManagementBundle_refuel"), "html", null, true);
        echo "\"><i class=\"icon-chevron-right\"></i> Refuel</a></li>
\t\t\t\t\t\t<li class=";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('vehiclemanagement_extension')->activeFilter($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method"), "servicing"), "html", null, true);
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VehicleManagementManagementBundle_servicing"), "html", null, true);
        echo "\"><i class=\"icon-chevron-right\"></i> Servicing</a></li>
\t\t\t\t\t\t<li class=";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('vehiclemanagement_extension')->activeFilter($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method"), "main"), "html", null, true);
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VehicleManagementChartBundle_main"), "html", null, true);
        echo "\"><i class=\"icon-chevron-right\"></i> Chart</a></li>
\t\t\t\t\t</ul>
                    
\t\t\t\t</div>
\t\t\t\t<div id=\"content\" class=\"span9\">
\t\t\t\t\t";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t<hr>

\t\t\t<footer>
\t\t\t\t<p>Obtao &copy; 2012</p>
\t\t\t</footer>
\t\t</div>
\t</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Vehicle Management";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "\t\t\t";
        // line 10
        echo "\t\t\t<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vehiclemanagementchart/js/highcharts/highcharts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>\t\t\t
\t\t";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/vm.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t";
    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        // line 74
        echo "\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 74,  193 => 73,  187 => 16,  182 => 15,  179 => 14,  173 => 12,  169 => 11,  166 => 10,  164 => 9,  161 => 8,  155 => 6,  140 => 75,  138 => 73,  128 => 68,  122 => 67,  116 => 66,  110 => 65,  104 => 64,  97 => 59,  91 => 57,  84 => 53,  80 => 52,  74 => 49,  71 => 48,  69 => 47,  38 => 18,  35 => 14,  33 => 8,  28 => 6,  21 => 1,);
    }
}
