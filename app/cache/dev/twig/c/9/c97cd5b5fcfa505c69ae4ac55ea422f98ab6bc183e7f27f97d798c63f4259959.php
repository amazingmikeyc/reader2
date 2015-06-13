<?php

/* default/index.html.twig */
class __TwigTemplate_c97cd5b5fcfa505c69ae4ac55ea422f98ab6bc183e7f27f97d798c63f4259959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("fullLayout.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "fullLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_630a524818c159893abe64e6a0fc82bc8aa15096b1e335ee5ffce0874aa4cc74 = $this->env->getExtension("native_profiler");
        $__internal_630a524818c159893abe64e6a0fc82bc8aa15096b1e335ee5ffce0874aa4cc74->enter($__internal_630a524818c159893abe64e6a0fc82bc8aa15096b1e335ee5ffce0874aa4cc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_630a524818c159893abe64e6a0fc82bc8aa15096b1e335ee5ffce0874aa4cc74->leave($__internal_630a524818c159893abe64e6a0fc82bc8aa15096b1e335ee5ffce0874aa4cc74_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f1ce3e4abe64b60d3b4643251ccf4ea9ab880fdf8bad5f032757ae42ea805331 = $this->env->getExtension("native_profiler");
        $__internal_f1ce3e4abe64b60d3b4643251ccf4ea9ab880fdf8bad5f032757ae42ea805331->enter($__internal_f1ce3e4abe64b60d3b4643251ccf4ea9ab880fdf8bad5f032757ae42ea805331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js\"></script>
";
        
        $__internal_f1ce3e4abe64b60d3b4643251ccf4ea9ab880fdf8bad5f032757ae42ea805331->leave($__internal_f1ce3e4abe64b60d3b4643251ccf4ea9ab880fdf8bad5f032757ae42ea805331_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_ea354bded5cc1ae8325d171ec1177e6ef6da34968621e3eee169f52e091b073a = $this->env->getExtension("native_profiler");
        $__internal_ea354bded5cc1ae8325d171ec1177e6ef6da34968621e3eee169f52e091b073a->enter($__internal_ea354bded5cc1ae8325d171ec1177e6ef6da34968621e3eee169f52e091b073a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "   main
    
";
        
        $__internal_ea354bded5cc1ae8325d171ec1177e6ef6da34968621e3eee169f52e091b073a->leave($__internal_ea354bded5cc1ae8325d171ec1177e6ef6da34968621e3eee169f52e091b073a_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
