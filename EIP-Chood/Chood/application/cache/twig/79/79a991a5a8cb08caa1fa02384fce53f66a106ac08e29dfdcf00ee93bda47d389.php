<?php

/* article/user_management.php */
class __TwigTemplate_fc833f7c0fe6c6526638e9563926eb00222c79b755037043db0c326979ce68c9 extends Twig_Template
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
\t<title></title>
\t <base href = \"";
        // line 5
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\"/>
     <style type=\"text/css\">
         body {
            background-color: #125371;
            background-image: url();
            background-repeat: no-repeat;
            background-size: 100%;
         }
         #info {
            background-color: rgba(255,255,255,0.2);
            width: 60%;
            margin-left: 20%;
            border: 5px solid #fff;
            border-radius: 20px;
            box-shadow: 0 0 20px #fff;
            color: #fff;
         }
         #info a {
            text-decoration: none;
            color: #aaa;
         }

     </style>
</head>
<body>
<form method=\"post\" action=\"index.php/user/user_manage\">
\t\t<input type=\"image\" name=\"language\" value=\"en\" src=\"resource/images/gb.png\" alt=\"Submit\" align=\"right\" style=\"margin:5px;\">
\t\t<input type=\"image\" name=\"language\" value=\"zh\" src=\"resource/images/cn.png\" alt=\"Submit\" align=\"right\" style=\"margin:5px\">
</form>
<br>
<h1 style=\"text-align: center; color: #fff;\"> ";
        // line 35
        $this->displayBlock("Title", $context, $blocks);
        echo "</h1>
<div id=\"info\">
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) ? $context["user"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user_item"]) {
            // line 38
            echo "    \t<hr>
        ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["user_item"], "name", array()), "html", null, true);
            echo "<br>
        <a href=\"\"> ";
            // line 40
            $this->displayBlock("View", $context, $blocks);
            echo "</a>      
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    <hr>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "article/user_management.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 42,  87 => 40,  83 => 39,  80 => 38,  63 => 37,  58 => 35,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "article/user_management.php", "/Applications/XAMPP/xamppfiles/htdocs/Chood/application/views/article/user_management.php");
    }
}
