<?php

/* dummy.html.twig */
class __TwigTemplate_6c0aae4396ee8d5315e3d21da6996ba68f4dbfcd0e5ed50e543e7babdd5fc7a6 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 6
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" href=\"\">
</head>
<body>
    ";
        // line 10
        echo twig_escape_filter($this->env, ($context["phrase"] ?? null), "html", null, true);
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "dummy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dummy.html.twig", "/var/www/netology.local/17/views/dummy.html.twig");
    }
}
