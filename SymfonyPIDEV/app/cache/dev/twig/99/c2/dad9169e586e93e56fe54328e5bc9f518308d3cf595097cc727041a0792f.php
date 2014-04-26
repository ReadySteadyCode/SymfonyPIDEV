<?php

/* ::base.html.twig */
class __TwigTemplate_99c2dad9169e586e93e56fe54328e5bc9f518308d3cf595097cc727041a0792f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,  110 => 38,  107 => 37,  88 => 30,  82 => 26,  74 => 22,  34 => 5,  113 => 40,  104 => 37,  100 => 36,  77 => 25,  73 => 23,  60 => 20,  47 => 12,  98 => 34,  83 => 31,  76 => 27,  70 => 24,  95 => 34,  84 => 27,  67 => 18,  63 => 21,  102 => 33,  96 => 35,  78 => 24,  65 => 17,  20 => 1,  58 => 14,  59 => 6,  53 => 5,  45 => 11,  37 => 7,  52 => 14,  71 => 23,  48 => 16,  38 => 7,  94 => 22,  92 => 31,  89 => 30,  85 => 23,  79 => 18,  75 => 24,  68 => 12,  64 => 10,  56 => 16,  50 => 16,  27 => 7,  29 => 5,  87 => 33,  80 => 19,  72 => 21,  55 => 38,  36 => 9,  21 => 2,  46 => 13,  26 => 6,  57 => 19,  40 => 11,  33 => 6,  30 => 7,  44 => 11,  42 => 10,  35 => 7,  31 => 4,  43 => 11,  41 => 10,  28 => 3,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 40,  112 => 39,  105 => 40,  101 => 33,  91 => 34,  86 => 28,  69 => 11,  66 => 15,  62 => 16,  54 => 19,  51 => 37,  49 => 12,  39 => 10,  24 => 4,  32 => 4,  25 => 35,  22 => 2,  19 => 1,);
    }
}
