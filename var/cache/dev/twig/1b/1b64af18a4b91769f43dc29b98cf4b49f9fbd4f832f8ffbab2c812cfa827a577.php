<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_af139182e4a3d75a7ad02591a8ffd13d3b4596385d93010970e980afeeafec52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_230d63050829437b772d8c20d719fe69a20b3936a6ecd5a3e9bb13015ee40ae2 = $this->env->getExtension("native_profiler");
        $__internal_230d63050829437b772d8c20d719fe69a20b3936a6ecd5a3e9bb13015ee40ae2->enter($__internal_230d63050829437b772d8c20d719fe69a20b3936a6ecd5a3e9bb13015ee40ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_230d63050829437b772d8c20d719fe69a20b3936a6ecd5a3e9bb13015ee40ae2->leave($__internal_230d63050829437b772d8c20d719fe69a20b3936a6ecd5a3e9bb13015ee40ae2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_438de78d5f54f1a9e5e8bc6f64666f5e68019331e0eb81d801d468120eef9e09 = $this->env->getExtension("native_profiler");
        $__internal_438de78d5f54f1a9e5e8bc6f64666f5e68019331e0eb81d801d468120eef9e09->enter($__internal_438de78d5f54f1a9e5e8bc6f64666f5e68019331e0eb81d801d468120eef9e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_438de78d5f54f1a9e5e8bc6f64666f5e68019331e0eb81d801d468120eef9e09->leave($__internal_438de78d5f54f1a9e5e8bc6f64666f5e68019331e0eb81d801d468120eef9e09_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_25fe64ffd62d11e075073a4f4f68bed7e22e06b19ec57919a29046092eeb4a94 = $this->env->getExtension("native_profiler");
        $__internal_25fe64ffd62d11e075073a4f4f68bed7e22e06b19ec57919a29046092eeb4a94->enter($__internal_25fe64ffd62d11e075073a4f4f68bed7e22e06b19ec57919a29046092eeb4a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_25fe64ffd62d11e075073a4f4f68bed7e22e06b19ec57919a29046092eeb4a94->leave($__internal_25fe64ffd62d11e075073a4f4f68bed7e22e06b19ec57919a29046092eeb4a94_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_db39014a02d13c77b5329b9dc5cf377e72c73b9d809fc9de2de3321f574a49ef = $this->env->getExtension("native_profiler");
        $__internal_db39014a02d13c77b5329b9dc5cf377e72c73b9d809fc9de2de3321f574a49ef->enter($__internal_db39014a02d13c77b5329b9dc5cf377e72c73b9d809fc9de2de3321f574a49ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_db39014a02d13c77b5329b9dc5cf377e72c73b9d809fc9de2de3321f574a49ef->leave($__internal_db39014a02d13c77b5329b9dc5cf377e72c73b9d809fc9de2de3321f574a49ef_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
