<?php

/* base.html.twig */
class __TwigTemplate_22ac919c4023b215abe4e4dcb1bf377f7569feeaacafbbf1aebe00d01919aa58 extends Twig_Template
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
        $__internal_6c790bcb2127a5220c7ba97ae6741e78d10a440cc2f731e30c6504338f4d4ba0 = $this->env->getExtension("native_profiler");
        $__internal_6c790bcb2127a5220c7ba97ae6741e78d10a440cc2f731e30c6504338f4d4ba0->enter($__internal_6c790bcb2127a5220c7ba97ae6741e78d10a440cc2f731e30c6504338f4d4ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6c790bcb2127a5220c7ba97ae6741e78d10a440cc2f731e30c6504338f4d4ba0->leave($__internal_6c790bcb2127a5220c7ba97ae6741e78d10a440cc2f731e30c6504338f4d4ba0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e48f2c0b0f03842d96945bb11da0289548fb12563ab40e22a3b755732b1b4b8b = $this->env->getExtension("native_profiler");
        $__internal_e48f2c0b0f03842d96945bb11da0289548fb12563ab40e22a3b755732b1b4b8b->enter($__internal_e48f2c0b0f03842d96945bb11da0289548fb12563ab40e22a3b755732b1b4b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e48f2c0b0f03842d96945bb11da0289548fb12563ab40e22a3b755732b1b4b8b->leave($__internal_e48f2c0b0f03842d96945bb11da0289548fb12563ab40e22a3b755732b1b4b8b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6170082fd72c364d0f984355c7628bda9e7b2800bc6ffe6032d0dd0fd4ac54d7 = $this->env->getExtension("native_profiler");
        $__internal_6170082fd72c364d0f984355c7628bda9e7b2800bc6ffe6032d0dd0fd4ac54d7->enter($__internal_6170082fd72c364d0f984355c7628bda9e7b2800bc6ffe6032d0dd0fd4ac54d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6170082fd72c364d0f984355c7628bda9e7b2800bc6ffe6032d0dd0fd4ac54d7->leave($__internal_6170082fd72c364d0f984355c7628bda9e7b2800bc6ffe6032d0dd0fd4ac54d7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_033eb0d879f0eed15c5477d85915d589e652c45e496f647dc49a369f2443bc57 = $this->env->getExtension("native_profiler");
        $__internal_033eb0d879f0eed15c5477d85915d589e652c45e496f647dc49a369f2443bc57->enter($__internal_033eb0d879f0eed15c5477d85915d589e652c45e496f647dc49a369f2443bc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_033eb0d879f0eed15c5477d85915d589e652c45e496f647dc49a369f2443bc57->leave($__internal_033eb0d879f0eed15c5477d85915d589e652c45e496f647dc49a369f2443bc57_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a69995c40a8f1c8a91f060e71400ae87bdbdb70592a8129a259cc2bfb9ac31c = $this->env->getExtension("native_profiler");
        $__internal_4a69995c40a8f1c8a91f060e71400ae87bdbdb70592a8129a259cc2bfb9ac31c->enter($__internal_4a69995c40a8f1c8a91f060e71400ae87bdbdb70592a8129a259cc2bfb9ac31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4a69995c40a8f1c8a91f060e71400ae87bdbdb70592a8129a259cc2bfb9ac31c->leave($__internal_4a69995c40a8f1c8a91f060e71400ae87bdbdb70592a8129a259cc2bfb9ac31c_prof);

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
