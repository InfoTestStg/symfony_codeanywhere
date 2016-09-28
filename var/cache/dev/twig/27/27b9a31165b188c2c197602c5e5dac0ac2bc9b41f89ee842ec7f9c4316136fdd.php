<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_499c108ec529519931f544a25196503468ca104fb5a69ea3aa46c55d864c8d5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_29327e878a276125202d06b66031cae9b3487757fcda61c2a573c723bf04ab60 = $this->env->getExtension("native_profiler");
        $__internal_29327e878a276125202d06b66031cae9b3487757fcda61c2a573c723bf04ab60->enter($__internal_29327e878a276125202d06b66031cae9b3487757fcda61c2a573c723bf04ab60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29327e878a276125202d06b66031cae9b3487757fcda61c2a573c723bf04ab60->leave($__internal_29327e878a276125202d06b66031cae9b3487757fcda61c2a573c723bf04ab60_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bec0d7361638e39a0c4763be91bc4664db6258c29fbcdc74472a0c77f72ce671 = $this->env->getExtension("native_profiler");
        $__internal_bec0d7361638e39a0c4763be91bc4664db6258c29fbcdc74472a0c77f72ce671->enter($__internal_bec0d7361638e39a0c4763be91bc4664db6258c29fbcdc74472a0c77f72ce671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bec0d7361638e39a0c4763be91bc4664db6258c29fbcdc74472a0c77f72ce671->leave($__internal_bec0d7361638e39a0c4763be91bc4664db6258c29fbcdc74472a0c77f72ce671_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a36382dca6910aea1768c6c879733529de61bc238a1f0e693dec2b378a08b990 = $this->env->getExtension("native_profiler");
        $__internal_a36382dca6910aea1768c6c879733529de61bc238a1f0e693dec2b378a08b990->enter($__internal_a36382dca6910aea1768c6c879733529de61bc238a1f0e693dec2b378a08b990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a36382dca6910aea1768c6c879733529de61bc238a1f0e693dec2b378a08b990->leave($__internal_a36382dca6910aea1768c6c879733529de61bc238a1f0e693dec2b378a08b990_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_26ef6d73275f52ac520fe63ba27d367b88583581f43d2b1f01145158db971f0b = $this->env->getExtension("native_profiler");
        $__internal_26ef6d73275f52ac520fe63ba27d367b88583581f43d2b1f01145158db971f0b->enter($__internal_26ef6d73275f52ac520fe63ba27d367b88583581f43d2b1f01145158db971f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_26ef6d73275f52ac520fe63ba27d367b88583581f43d2b1f01145158db971f0b->leave($__internal_26ef6d73275f52ac520fe63ba27d367b88583581f43d2b1f01145158db971f0b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
