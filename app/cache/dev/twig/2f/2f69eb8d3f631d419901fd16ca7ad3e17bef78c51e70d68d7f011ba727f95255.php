<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3cb224d919a3d060d409b0f48e072aa5e9fcde056ed13c6c43546a7b67259d87 extends Twig_Template
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
        $__internal_2369efa0891915db31c6a86b8b9412cce4a84017cc191d9a1e5c6612c3603f45 = $this->env->getExtension("native_profiler");
        $__internal_2369efa0891915db31c6a86b8b9412cce4a84017cc191d9a1e5c6612c3603f45->enter($__internal_2369efa0891915db31c6a86b8b9412cce4a84017cc191d9a1e5c6612c3603f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2369efa0891915db31c6a86b8b9412cce4a84017cc191d9a1e5c6612c3603f45->leave($__internal_2369efa0891915db31c6a86b8b9412cce4a84017cc191d9a1e5c6612c3603f45_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a0306bdc3ce987964c3d91809c36e753bc374e5b4f44c02a909c72673ee6acd4 = $this->env->getExtension("native_profiler");
        $__internal_a0306bdc3ce987964c3d91809c36e753bc374e5b4f44c02a909c72673ee6acd4->enter($__internal_a0306bdc3ce987964c3d91809c36e753bc374e5b4f44c02a909c72673ee6acd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a0306bdc3ce987964c3d91809c36e753bc374e5b4f44c02a909c72673ee6acd4->leave($__internal_a0306bdc3ce987964c3d91809c36e753bc374e5b4f44c02a909c72673ee6acd4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f57768a453489e5f9354aa53f64db466097e8245850b729dd7ae1c890469bee0 = $this->env->getExtension("native_profiler");
        $__internal_f57768a453489e5f9354aa53f64db466097e8245850b729dd7ae1c890469bee0->enter($__internal_f57768a453489e5f9354aa53f64db466097e8245850b729dd7ae1c890469bee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f57768a453489e5f9354aa53f64db466097e8245850b729dd7ae1c890469bee0->leave($__internal_f57768a453489e5f9354aa53f64db466097e8245850b729dd7ae1c890469bee0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a4c93ff89f5aaa1ff008d850853975ffebb4c3b40c31a4323151e0eba255345 = $this->env->getExtension("native_profiler");
        $__internal_9a4c93ff89f5aaa1ff008d850853975ffebb4c3b40c31a4323151e0eba255345->enter($__internal_9a4c93ff89f5aaa1ff008d850853975ffebb4c3b40c31a4323151e0eba255345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9a4c93ff89f5aaa1ff008d850853975ffebb4c3b40c31a4323151e0eba255345->leave($__internal_9a4c93ff89f5aaa1ff008d850853975ffebb4c3b40c31a4323151e0eba255345_prof);

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
