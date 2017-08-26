<?php

/* article/en_user_management.twig */
class __TwigTemplate_379f53feb0e532f7d39bb47a57e0e37266c27f2c0fa2dd126fad707bafed5303 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("article/user_management.php", "article/en_user_management.twig", 1);
        $this->blocks = array(
            'Title' => array($this, 'block_Title'),
            'View' => array($this, 'block_View'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "article/user_management.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_Title($context, array $blocks = array())
    {
        // line 4
        echo "\tUSER MANAGEMENT
";
    }

    // line 7
    public function block_View($context, array $blocks = array())
    {
        // line 8
        echo "\tView User Article
";
    }

    public function getTemplateName()
    {
        return "article/en_user_management.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "article/en_user_management.twig", "/Applications/XAMPP/xamppfiles/htdocs/Chood/application/views/article/en_user_management.twig");
    }
}
