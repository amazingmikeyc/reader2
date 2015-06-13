<?php

/* base.html.twig */
class __TwigTemplate_bb2f68f912e30216a3549a709bb9914b0d8f73518287807f9066e06445243905 extends Twig_Template
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
        $__internal_fe91a9326ace6cc7609fca08170d0aa0933265c21b084c415aeaa674a622b0da = $this->env->getExtension("native_profiler");
        $__internal_fe91a9326ace6cc7609fca08170d0aa0933265c21b084c415aeaa674a622b0da->enter($__internal_fe91a9326ace6cc7609fca08170d0aa0933265c21b084c415aeaa674a622b0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html ng-app=\"rssApp\">
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
    <body ng-controller=\"feedListController\">
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
        
        $__internal_fe91a9326ace6cc7609fca08170d0aa0933265c21b084c415aeaa674a622b0da->leave($__internal_fe91a9326ace6cc7609fca08170d0aa0933265c21b084c415aeaa674a622b0da_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb5f5f182528769a1c4fc69fc4bfef3e9c1c1922585b5e812fc301f757b942ef = $this->env->getExtension("native_profiler");
        $__internal_bb5f5f182528769a1c4fc69fc4bfef3e9c1c1922585b5e812fc301f757b942ef->enter($__internal_bb5f5f182528769a1c4fc69fc4bfef3e9c1c1922585b5e812fc301f757b942ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bb5f5f182528769a1c4fc69fc4bfef3e9c1c1922585b5e812fc301f757b942ef->leave($__internal_bb5f5f182528769a1c4fc69fc4bfef3e9c1c1922585b5e812fc301f757b942ef_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_141efeffe769f8e5171ba28c7efd846cca24c637eeb5007c6a27b50fae09fe2d = $this->env->getExtension("native_profiler");
        $__internal_141efeffe769f8e5171ba28c7efd846cca24c637eeb5007c6a27b50fae09fe2d->enter($__internal_141efeffe769f8e5171ba28c7efd846cca24c637eeb5007c6a27b50fae09fe2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_141efeffe769f8e5171ba28c7efd846cca24c637eeb5007c6a27b50fae09fe2d->leave($__internal_141efeffe769f8e5171ba28c7efd846cca24c637eeb5007c6a27b50fae09fe2d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_278c9374068d970b975a86ce752e8709c8ae1ba172632b4fea73f390baa09c82 = $this->env->getExtension("native_profiler");
        $__internal_278c9374068d970b975a86ce752e8709c8ae1ba172632b4fea73f390baa09c82->enter($__internal_278c9374068d970b975a86ce752e8709c8ae1ba172632b4fea73f390baa09c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_278c9374068d970b975a86ce752e8709c8ae1ba172632b4fea73f390baa09c82->leave($__internal_278c9374068d970b975a86ce752e8709c8ae1ba172632b4fea73f390baa09c82_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83a503e380b593f253d05615bfae8b0dc0149da20c285eeec6a21bdd3c4e519c = $this->env->getExtension("native_profiler");
        $__internal_83a503e380b593f253d05615bfae8b0dc0149da20c285eeec6a21bdd3c4e519c->enter($__internal_83a503e380b593f253d05615bfae8b0dc0149da20c285eeec6a21bdd3c4e519c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_83a503e380b593f253d05615bfae8b0dc0149da20c285eeec6a21bdd3c4e519c->leave($__internal_83a503e380b593f253d05615bfae8b0dc0149da20c285eeec6a21bdd3c4e519c_prof);

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
