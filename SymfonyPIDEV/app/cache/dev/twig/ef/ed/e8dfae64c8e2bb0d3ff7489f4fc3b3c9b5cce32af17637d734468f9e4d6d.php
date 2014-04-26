<?php

/* AcmeDemoBundle:Secured:helloadmin.html.twig */
class __TwigTemplate_efede8dfae64c8e2bb0d3ff7489f4fc3b3c9b5cce32af17637d734468f9e4d6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " secured for Admins only!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:helloadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  53 => 11,  45 => 8,  37 => 5,  52 => 10,  71 => 19,  48 => 9,  38 => 6,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  68 => 14,  64 => 17,  56 => 9,  50 => 8,  27 => 4,  29 => 3,  87 => 20,  80 => 19,  72 => 16,  55 => 15,  36 => 5,  21 => 2,  46 => 8,  26 => 9,  57 => 12,  40 => 6,  33 => 10,  30 => 3,  44 => 12,  42 => 7,  35 => 5,  31 => 3,  43 => 7,  41 => 7,  28 => 3,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  54 => 11,  51 => 14,  49 => 10,  39 => 9,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
