<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3ec84a265a78072415c49ff2988ece30d1c0a80356d4cf882b78155148d81c66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Redirection Intercepted";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  83 => 31,  76 => 27,  70 => 24,  95 => 34,  84 => 27,  67 => 22,  63 => 21,  102 => 33,  96 => 30,  78 => 18,  65 => 11,  20 => 1,  58 => 18,  59 => 13,  53 => 15,  45 => 8,  37 => 7,  52 => 14,  71 => 23,  48 => 16,  38 => 6,  94 => 22,  92 => 28,  89 => 30,  85 => 23,  79 => 18,  75 => 24,  68 => 12,  64 => 21,  56 => 16,  50 => 18,  27 => 7,  29 => 3,  87 => 32,  80 => 19,  72 => 16,  55 => 38,  36 => 10,  21 => 2,  46 => 13,  26 => 6,  57 => 20,  40 => 6,  33 => 9,  30 => 3,  44 => 11,  42 => 8,  35 => 5,  31 => 8,  43 => 11,  41 => 10,  28 => 3,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  54 => 19,  51 => 37,  49 => 13,  39 => 10,  24 => 4,  32 => 4,  25 => 35,  22 => 2,  19 => 1,);
    }
}
