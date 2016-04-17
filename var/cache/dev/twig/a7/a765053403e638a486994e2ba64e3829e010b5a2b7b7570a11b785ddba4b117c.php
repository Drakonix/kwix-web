<?php

/* base.html.twig */
class __TwigTemplate_3291dec65108813440083bcc6761802e4155fcfccb8fe104a2999f60e7fb5431 extends Twig_Template
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
        $__internal_b56b654dbe8c93ac46c5ee87838d5d6424620fdbe5ff20437732326ef0ab847d = $this->env->getExtension("native_profiler");
        $__internal_b56b654dbe8c93ac46c5ee87838d5d6424620fdbe5ff20437732326ef0ab847d->enter($__internal_b56b654dbe8c93ac46c5ee87838d5d6424620fdbe5ff20437732326ef0ab847d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_b56b654dbe8c93ac46c5ee87838d5d6424620fdbe5ff20437732326ef0ab847d->leave($__internal_b56b654dbe8c93ac46c5ee87838d5d6424620fdbe5ff20437732326ef0ab847d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfbbc8352669e24c2a22c564cc265ebd68cfb7c3941d770a9eb283782a4de520 = $this->env->getExtension("native_profiler");
        $__internal_cfbbc8352669e24c2a22c564cc265ebd68cfb7c3941d770a9eb283782a4de520->enter($__internal_cfbbc8352669e24c2a22c564cc265ebd68cfb7c3941d770a9eb283782a4de520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cfbbc8352669e24c2a22c564cc265ebd68cfb7c3941d770a9eb283782a4de520->leave($__internal_cfbbc8352669e24c2a22c564cc265ebd68cfb7c3941d770a9eb283782a4de520_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_727ddace19612f89d5baa28eaaed930a39277b73c3ef86b6ede7e43cf18894b5 = $this->env->getExtension("native_profiler");
        $__internal_727ddace19612f89d5baa28eaaed930a39277b73c3ef86b6ede7e43cf18894b5->enter($__internal_727ddace19612f89d5baa28eaaed930a39277b73c3ef86b6ede7e43cf18894b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_727ddace19612f89d5baa28eaaed930a39277b73c3ef86b6ede7e43cf18894b5->leave($__internal_727ddace19612f89d5baa28eaaed930a39277b73c3ef86b6ede7e43cf18894b5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d4a75e56e29dd0cd0b44d69259eb1c68da389e3621d17778193d31a88a3f8c0 = $this->env->getExtension("native_profiler");
        $__internal_7d4a75e56e29dd0cd0b44d69259eb1c68da389e3621d17778193d31a88a3f8c0->enter($__internal_7d4a75e56e29dd0cd0b44d69259eb1c68da389e3621d17778193d31a88a3f8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7d4a75e56e29dd0cd0b44d69259eb1c68da389e3621d17778193d31a88a3f8c0->leave($__internal_7d4a75e56e29dd0cd0b44d69259eb1c68da389e3621d17778193d31a88a3f8c0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d41898b86691bb41218352096f102ecded35c8524fadfd7fff6a0f78dc945f3e = $this->env->getExtension("native_profiler");
        $__internal_d41898b86691bb41218352096f102ecded35c8524fadfd7fff6a0f78dc945f3e->enter($__internal_d41898b86691bb41218352096f102ecded35c8524fadfd7fff6a0f78dc945f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d41898b86691bb41218352096f102ecded35c8524fadfd7fff6a0f78dc945f3e->leave($__internal_d41898b86691bb41218352096f102ecded35c8524fadfd7fff6a0f78dc945f3e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
