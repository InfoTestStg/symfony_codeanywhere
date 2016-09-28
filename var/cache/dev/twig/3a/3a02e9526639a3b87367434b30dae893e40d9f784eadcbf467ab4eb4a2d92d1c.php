<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_715a86650cec2f6d12528fd74e2e10461bb4c8611328a5136850f309d181d941 extends Twig_Template
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
        $__internal_07eec802c245df3f931de8661e951077f6cb18cc21ba03cba349030d54b78eb9 = $this->env->getExtension("native_profiler");
        $__internal_07eec802c245df3f931de8661e951077f6cb18cc21ba03cba349030d54b78eb9->enter($__internal_07eec802c245df3f931de8661e951077f6cb18cc21ba03cba349030d54b78eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07eec802c245df3f931de8661e951077f6cb18cc21ba03cba349030d54b78eb9->leave($__internal_07eec802c245df3f931de8661e951077f6cb18cc21ba03cba349030d54b78eb9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d99e55ff39b5153e7a771519633fe0165953da72d2117cc9bcebe65d6b1dd21e = $this->env->getExtension("native_profiler");
        $__internal_d99e55ff39b5153e7a771519633fe0165953da72d2117cc9bcebe65d6b1dd21e->enter($__internal_d99e55ff39b5153e7a771519633fe0165953da72d2117cc9bcebe65d6b1dd21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d99e55ff39b5153e7a771519633fe0165953da72d2117cc9bcebe65d6b1dd21e->leave($__internal_d99e55ff39b5153e7a771519633fe0165953da72d2117cc9bcebe65d6b1dd21e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6974940c46fac5d939774bb90bba57ef284e4bad2641ea46ffcc446e876fdf6c = $this->env->getExtension("native_profiler");
        $__internal_6974940c46fac5d939774bb90bba57ef284e4bad2641ea46ffcc446e876fdf6c->enter($__internal_6974940c46fac5d939774bb90bba57ef284e4bad2641ea46ffcc446e876fdf6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6974940c46fac5d939774bb90bba57ef284e4bad2641ea46ffcc446e876fdf6c->leave($__internal_6974940c46fac5d939774bb90bba57ef284e4bad2641ea46ffcc446e876fdf6c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ee4aaf40f79da5c181946aaa809584d5496883f5a26383686cfb3083432091d = $this->env->getExtension("native_profiler");
        $__internal_6ee4aaf40f79da5c181946aaa809584d5496883f5a26383686cfb3083432091d->enter($__internal_6ee4aaf40f79da5c181946aaa809584d5496883f5a26383686cfb3083432091d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6ee4aaf40f79da5c181946aaa809584d5496883f5a26383686cfb3083432091d->leave($__internal_6ee4aaf40f79da5c181946aaa809584d5496883f5a26383686cfb3083432091d_prof);

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
