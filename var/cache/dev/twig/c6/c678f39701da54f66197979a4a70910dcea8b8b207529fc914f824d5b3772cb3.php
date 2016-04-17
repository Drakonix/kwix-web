<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0a6ca74a61b13923b50f5650e57762ea7196efb17c3a316b8b2af5e3baa57790 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a86f67ebcbf5e4d1657888c17d74a405773343c0ff15fc35e60dbe6010f1778 = $this->env->getExtension("native_profiler");
        $__internal_6a86f67ebcbf5e4d1657888c17d74a405773343c0ff15fc35e60dbe6010f1778->enter($__internal_6a86f67ebcbf5e4d1657888c17d74a405773343c0ff15fc35e60dbe6010f1778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a86f67ebcbf5e4d1657888c17d74a405773343c0ff15fc35e60dbe6010f1778->leave($__internal_6a86f67ebcbf5e4d1657888c17d74a405773343c0ff15fc35e60dbe6010f1778_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2832de3cacfaa61ddcb696fdf4a8fbe09d0e19cb366c0a089fe3826a366d85ae = $this->env->getExtension("native_profiler");
        $__internal_2832de3cacfaa61ddcb696fdf4a8fbe09d0e19cb366c0a089fe3826a366d85ae->enter($__internal_2832de3cacfaa61ddcb696fdf4a8fbe09d0e19cb366c0a089fe3826a366d85ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2832de3cacfaa61ddcb696fdf4a8fbe09d0e19cb366c0a089fe3826a366d85ae->leave($__internal_2832de3cacfaa61ddcb696fdf4a8fbe09d0e19cb366c0a089fe3826a366d85ae_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a0c834da99d4fee4e5adbf078f22bd4e9349151049ae7d3fbca171d1325a575 = $this->env->getExtension("native_profiler");
        $__internal_5a0c834da99d4fee4e5adbf078f22bd4e9349151049ae7d3fbca171d1325a575->enter($__internal_5a0c834da99d4fee4e5adbf078f22bd4e9349151049ae7d3fbca171d1325a575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5a0c834da99d4fee4e5adbf078f22bd4e9349151049ae7d3fbca171d1325a575->leave($__internal_5a0c834da99d4fee4e5adbf078f22bd4e9349151049ae7d3fbca171d1325a575_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa1c3761b1c1250d1ac6d5e95511dfb024eea4db483d81eaca694fbe82bc5340 = $this->env->getExtension("native_profiler");
        $__internal_fa1c3761b1c1250d1ac6d5e95511dfb024eea4db483d81eaca694fbe82bc5340->enter($__internal_fa1c3761b1c1250d1ac6d5e95511dfb024eea4db483d81eaca694fbe82bc5340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fa1c3761b1c1250d1ac6d5e95511dfb024eea4db483d81eaca694fbe82bc5340->leave($__internal_fa1c3761b1c1250d1ac6d5e95511dfb024eea4db483d81eaca694fbe82bc5340_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
