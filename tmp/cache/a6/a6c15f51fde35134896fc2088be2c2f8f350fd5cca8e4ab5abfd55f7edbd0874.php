<?php

/* index.html.twig */
class __TwigTemplate_24ff63a2f6247447b005df65f9a486b3c3f38b10f94a4811890e8b58bbc3b8fa extends Twig_Template
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
    <title>Авторизация</title>
    <link rel=\"stylesheet\" href=\"css/style.css\">
</head>
<body>
    <div class=\"container\">
        <div class=\"login\">
            <h2>Авторизация</h2>
            <p class=\"error\">";
        // line 13
        echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
        echo "</p>

            <form action=\"\" method=\"post\" accept-charset=\"utf-8\">
                <input type=\"text\" name=\"login\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["login"] ?? null), "html", null, true);
        echo "\" placeholder=\"Логин\" autofocus required>
                <input type=\"password\" name=\"pass\" value=\"\" placeholder=\"Пароль\" required>
                <input type=\"submit\" name=\"action\" value=\"Войти\">
                <input type=\"submit\" name=\"action\" value=\"Зарегистрироваться\">
            </form>    
        </div>
    </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 16,  33 => 13,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "/var/www/netology.local/17/views/index.html.twig");
    }
}
