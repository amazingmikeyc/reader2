<?php

/* default/index.html.twig */
class __TwigTemplate_c97cd5b5fcfa505c69ae4ac55ea422f98ab6bc183e7f27f97d798c63f4259959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62dee8723fd1a8e289b5c48dfbcfc39dd032e5383013cb1d87f8c1ee7eea9a8c = $this->env->getExtension("native_profiler");
        $__internal_62dee8723fd1a8e289b5c48dfbcfc39dd032e5383013cb1d87f8c1ee7eea9a8c->enter($__internal_62dee8723fd1a8e289b5c48dfbcfc39dd032e5383013cb1d87f8c1ee7eea9a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62dee8723fd1a8e289b5c48dfbcfc39dd032e5383013cb1d87f8c1ee7eea9a8c->leave($__internal_62dee8723fd1a8e289b5c48dfbcfc39dd032e5383013cb1d87f8c1ee7eea9a8c_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_687c67b076385964a1345b76a81aacfb95de554b15b9ba259807f4ecb77a440e = $this->env->getExtension("native_profiler");
        $__internal_687c67b076385964a1345b76a81aacfb95de554b15b9ba259807f4ecb77a440e->enter($__internal_687c67b076385964a1345b76a81aacfb95de554b15b9ba259807f4ecb77a440e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js\"></script>
";
        
        $__internal_687c67b076385964a1345b76a81aacfb95de554b15b9ba259807f4ecb77a440e->leave($__internal_687c67b076385964a1345b76a81aacfb95de554b15b9ba259807f4ecb77a440e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_64668a50fe54c194e30571dfcf00a9755a6ba97841ea2fd88a0ccf5c20f08b99 = $this->env->getExtension("native_profiler");
        $__internal_64668a50fe54c194e30571dfcf00a9755a6ba97841ea2fd88a0ccf5c20f08b99->enter($__internal_64668a50fe54c194e30571dfcf00a9755a6ba97841ea2fd88a0ccf5c20f08b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    <header>
        <h1>Super Reader</h1>
    </header>
    
    <nav>
        
    </nav>
    
    <footer>
        
    </footer>
    
    
    
";
        
        $__internal_64668a50fe54c194e30571dfcf00a9755a6ba97841ea2fd88a0ccf5c20f08b99->leave($__internal_64668a50fe54c194e30571dfcf00a9755a6ba97841ea2fd88a0ccf5c20f08b99_prof);

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
