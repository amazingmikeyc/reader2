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
        $__internal_7577e1beff05625ed8a49497da5b92dd983631b52c776e459ca3ce48fc0f69bf = $this->env->getExtension("native_profiler");
        $__internal_7577e1beff05625ed8a49497da5b92dd983631b52c776e459ca3ce48fc0f69bf->enter($__internal_7577e1beff05625ed8a49497da5b92dd983631b52c776e459ca3ce48fc0f69bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7577e1beff05625ed8a49497da5b92dd983631b52c776e459ca3ce48fc0f69bf->leave($__internal_7577e1beff05625ed8a49497da5b92dd983631b52c776e459ca3ce48fc0f69bf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8151c455cc52e55c4d3518514325629f869d6036c2f48e1966931ac0a4e92d23 = $this->env->getExtension("native_profiler");
        $__internal_8151c455cc52e55c4d3518514325629f869d6036c2f48e1966931ac0a4e92d23->enter($__internal_8151c455cc52e55c4d3518514325629f869d6036c2f48e1966931ac0a4e92d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8151c455cc52e55c4d3518514325629f869d6036c2f48e1966931ac0a4e92d23->leave($__internal_8151c455cc52e55c4d3518514325629f869d6036c2f48e1966931ac0a4e92d23_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_07273d376aff0c915e0e333bfa3206097623d663b86534a4f40677684804a996 = $this->env->getExtension("native_profiler");
        $__internal_07273d376aff0c915e0e333bfa3206097623d663b86534a4f40677684804a996->enter($__internal_07273d376aff0c915e0e333bfa3206097623d663b86534a4f40677684804a996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_07273d376aff0c915e0e333bfa3206097623d663b86534a4f40677684804a996->leave($__internal_07273d376aff0c915e0e333bfa3206097623d663b86534a4f40677684804a996_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_83a74bc14700b436ae2d545311f0ce921a40acdbd594adf71a974ca48c167ac2 = $this->env->getExtension("native_profiler");
        $__internal_83a74bc14700b436ae2d545311f0ce921a40acdbd594adf71a974ca48c167ac2->enter($__internal_83a74bc14700b436ae2d545311f0ce921a40acdbd594adf71a974ca48c167ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_83a74bc14700b436ae2d545311f0ce921a40acdbd594adf71a974ca48c167ac2->leave($__internal_83a74bc14700b436ae2d545311f0ce921a40acdbd594adf71a974ca48c167ac2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e02f68b78a393e7f698573346f6a48f102fcd8c4b97cfd96a1828800091c2195 = $this->env->getExtension("native_profiler");
        $__internal_e02f68b78a393e7f698573346f6a48f102fcd8c4b97cfd96a1828800091c2195->enter($__internal_e02f68b78a393e7f698573346f6a48f102fcd8c4b97cfd96a1828800091c2195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e02f68b78a393e7f698573346f6a48f102fcd8c4b97cfd96a1828800091c2195->leave($__internal_e02f68b78a393e7f698573346f6a48f102fcd8c4b97cfd96a1828800091c2195_prof);

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
