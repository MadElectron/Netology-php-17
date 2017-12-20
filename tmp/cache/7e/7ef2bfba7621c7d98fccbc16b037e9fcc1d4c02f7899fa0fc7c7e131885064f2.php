<?php

/* manager.html.twig */
class __TwigTemplate_7ef0d46aed2e9a7b7758cf4fc192ba2e5cdaddf75fe169e8c70fe103284a4842 extends Twig_Template
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
<html lang=\"ru\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Task Manager</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">
</head>
<body>
    <div class=\"container\">
        <header id=\"header\">
            <div class=\"container\">
                <p>Пользователь:&nbsp; ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "login", array()), "html", null, true);
        echo " | 
                    <a href=\"logout.php\">Выйти</a>
                </p>
            </div>
        </header>
        
        <h1>Task Manager</h1>
        <form action=\"\" method=\"post\" accept-charset=\"utf-8\">
        ";
        // line 21
        if (($context["editTask"] ?? null)) {
            // line 22
            echo "            <input type=\"text\" name=\"description\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["editTask"] ?? null), "description", array()), "html", null, true);
            echo "\" placeholder=\"Название\" autofocus>
            <input type=\"hidden\" name=\"editId\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["editTask"] ?? null), "id", array()), "html", null, true);
            echo "\">
            <input type=\"submit\" name=\"submit\" value=\"Изменить\">
        ";
        } else {
            // line 26
            echo "            <input type=\"text\" name=\"description\" value=\"\" placeholder=\"Название\">
            <input type=\"submit\" name=\"submit\" value=\"Добавить\">
        ";
        }
        // line 28
        echo "         
        </form>
        
        <h2>Созданные задачи</h2>
        ";
        // line 32
        if ( !($context["tasks"] ?? null)) {
            // line 33
            echo "            <p><em>Нет задач</em></p>
        ";
        } else {
            // line 35
            echo "        <table>
            <thead>
                <tr>
                    <th>№ п/п</th>
                    <th>ID задачи</th>
                    <th>Описание задачи</th>
                    <th>Дата добавления</th>
                    <th>Статус</th>
                    <th>Действия</th>
                    <th>Ответственный</th>
                    <th>Автор</th>
                    <th>Делегировать</th>
                </tr>
            </thead>
            <tbody>

            ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 52
                echo "                <tr>
                    <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "id", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "description", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "date_added", array()), "html", null, true);
                echo "</td>
                    ";
                // line 57
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "is_done", array())) {
                    // line 58
                    echo "                        <td class=\"task-done\">Выполнено</td>
                    ";
                } else {
                    // line 60
                    echo "                        <td class=\"task-progress\">В процессе</td>
                    ";
                }
                // line 62
                echo "                    <td>
                        <form action=\"\" method=\"post\" accept-charset=\"utf-8\">
                            <button type=\"submit\" name=\"done\" value=\"";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "id", array()), "html", null, true);
                echo "\" ";
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "is_done", array()) || (twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "assigned_user", array()) != twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "login", array())))) ? ("disabled") : (""));
                echo ">Выполнить</button>
                        </form>
                        <form action=\"\" method=\"post\" accept-charset=\"utf-8\">
                            <button type=\"submit\" name=\"edit\" value=\"";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "id", array()), "html", null, true);
                echo "\">Изменить</button>
                        </form>                            
                        <form action=\"\" method=\"post\" accept-charset=\"utf-8\">
                            <button type=\"submit\" name=\"delete\" value=\"";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "id", array()), "html", null, true);
                echo "\" onclick=\"confirm('Вы действительно хотите удалить задание &laquo;";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "description", array()), "html", null, true);
                echo "&raquo;')\">Удалить</button>
                        </form>
                    </td>

                    <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "assigned_user", array()), "html", null, true);
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "assigned_user", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "login", array()))) ? (" (Вы)") : (""));
                echo "</td>
                    <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "login", array()), "html", null, true);
                echo " (Вы)</td>
                    <td>
                        <form action=\"\" method=\"post\" accept-charset=\"utf-8\">
                            <select name=\"assignedUser\">
                            ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                    // line 80
                    echo "                                <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["u"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["u"], "login", array()), "html", null, true);
                    echo "</option>}
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "                            </select>
                            <button type=\"submit\" name=\"assign\" value=\"";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "id", array()), "html", null, true);
                echo "\">Ок</button>  
                        </form>
                    </td>
                </tr>
                </tr>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "
            </tbody>
        </table> 
    ";
        }
        // line 93
        echo "

    <h2>Делегированные задачи</h2>
    ";
        // line 96
        if ( !($context["assignedTasks"] ?? null)) {
            // line 97
            echo "        <p><em>Нет задач</em></p>
    ";
        } else {
            // line 98
            echo "     
        <table>
            <thead>
                <tr>
                    <th>№ п/п</th>
                    <th>ID задачи</th>
                    <th>Описание задачи</th>
                    <th>Дата добавления</th>
                    <th>Статус</th>
                    <th>Действия</th>
                    <th>Ответственный</th>
                    <th>Автор</th>
                </tr>
            </thead>
            <tbody>
               ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["assignedTasks"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                echo "              
                <tr>
                    <td>";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "id", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "description", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "date_added", array()), "html", null, true);
                echo "</td>
                    ";
                // line 119
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "is_done", array())) {
                    // line 120
                    echo "                        <td class=\"task-done\">Выполнено</td>
                    ";
                } else {
                    // line 122
                    echo "                        <td class=\"task-progress\">В процессе</td>
                    ";
                }
                // line 124
                echo "                    <td>
                        <form action=\"\" method=\"post\" accept-charset=\"utf-8\">
                            <button type=\"submit\" name=\"done\" value=\"";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "id", array()), "html", null, true);
                echo "\" ";
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "is_done", array())) ? ("disabled") : (""));
                echo ">Выполнить</button>
                        </form>
                    </td>
                    <td>";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "login", array()), "html", null, true);
                echo " (Вы)</td>
                    <td>";
                // line 130
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "user", array()), "html", null, true);
                echo "</td>                
                </tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "            </tbody>
        </table>
    ";
        }
        // line 136
        echo "    </div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 136,  328 => 133,  311 => 130,  307 => 129,  299 => 126,  295 => 124,  291 => 122,  287 => 120,  285 => 119,  281 => 118,  277 => 117,  273 => 116,  269 => 115,  249 => 113,  232 => 98,  228 => 97,  226 => 96,  221 => 93,  215 => 89,  195 => 83,  192 => 82,  181 => 80,  177 => 79,  170 => 75,  165 => 74,  156 => 70,  150 => 67,  142 => 64,  138 => 62,  134 => 60,  130 => 58,  128 => 57,  124 => 56,  120 => 55,  116 => 54,  112 => 53,  109 => 52,  92 => 51,  74 => 35,  70 => 33,  68 => 32,  62 => 28,  57 => 26,  51 => 23,  46 => 22,  44 => 21,  33 => 13,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "manager.html.twig", "/var/www/netology.local/17/views/manager.html.twig");
    }
}
