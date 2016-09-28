<?php

/* base.html.twig */
class __TwigTemplate_06f7cbac72598956b538e4c34664b19da2c73752be14262f66cb5edccfd1bd6a extends Twig_Template
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
        $__internal_54cbea1ae6a642215136ad79f1e4b26c95760e2e5fa6b37bd2604f9f3bb763d9 = $this->env->getExtension("native_profiler");
        $__internal_54cbea1ae6a642215136ad79f1e4b26c95760e2e5fa6b37bd2604f9f3bb763d9->enter($__internal_54cbea1ae6a642215136ad79f1e4b26c95760e2e5fa6b37bd2604f9f3bb763d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_54cbea1ae6a642215136ad79f1e4b26c95760e2e5fa6b37bd2604f9f3bb763d9->leave($__internal_54cbea1ae6a642215136ad79f1e4b26c95760e2e5fa6b37bd2604f9f3bb763d9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6815447609516cfad81ef28f0ef5ac40c7dc6aa9c74cf50d0c866cdc5eb735bc = $this->env->getExtension("native_profiler");
        $__internal_6815447609516cfad81ef28f0ef5ac40c7dc6aa9c74cf50d0c866cdc5eb735bc->enter($__internal_6815447609516cfad81ef28f0ef5ac40c7dc6aa9c74cf50d0c866cdc5eb735bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6815447609516cfad81ef28f0ef5ac40c7dc6aa9c74cf50d0c866cdc5eb735bc->leave($__internal_6815447609516cfad81ef28f0ef5ac40c7dc6aa9c74cf50d0c866cdc5eb735bc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b90bdc359b35685688a930366ea7659847de36b62565b9c8cc01bc28aa499d7f = $this->env->getExtension("native_profiler");
        $__internal_b90bdc359b35685688a930366ea7659847de36b62565b9c8cc01bc28aa499d7f->enter($__internal_b90bdc359b35685688a930366ea7659847de36b62565b9c8cc01bc28aa499d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b90bdc359b35685688a930366ea7659847de36b62565b9c8cc01bc28aa499d7f->leave($__internal_b90bdc359b35685688a930366ea7659847de36b62565b9c8cc01bc28aa499d7f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef828bc92e8ee660b659446a38301e29c48be5868a7ac4a34ea8b21247352535 = $this->env->getExtension("native_profiler");
        $__internal_ef828bc92e8ee660b659446a38301e29c48be5868a7ac4a34ea8b21247352535->enter($__internal_ef828bc92e8ee660b659446a38301e29c48be5868a7ac4a34ea8b21247352535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ef828bc92e8ee660b659446a38301e29c48be5868a7ac4a34ea8b21247352535->leave($__internal_ef828bc92e8ee660b659446a38301e29c48be5868a7ac4a34ea8b21247352535_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_881f240ad9b44cbd008ce7e013dd53ee44b3eab1078bfbbfc992d966a4fc9941 = $this->env->getExtension("native_profiler");
        $__internal_881f240ad9b44cbd008ce7e013dd53ee44b3eab1078bfbbfc992d966a4fc9941->enter($__internal_881f240ad9b44cbd008ce7e013dd53ee44b3eab1078bfbbfc992d966a4fc9941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_881f240ad9b44cbd008ce7e013dd53ee44b3eab1078bfbbfc992d966a4fc9941->leave($__internal_881f240ad9b44cbd008ce7e013dd53ee44b3eab1078bfbbfc992d966a4fc9941_prof);

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
