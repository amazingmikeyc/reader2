<?php

/* fullLayout.html.twig */
class __TwigTemplate_9823fac9473ff75a18c2e22dfa530d4bef61066cbf90cf84a203027761536fca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fullLayout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'navigation' => array($this, 'block_navigation'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c1e3a40ab563c1423ef8b635ec0e046d3f4532d3079748be5a2b3996d0c247c = $this->env->getExtension("native_profiler");
        $__internal_2c1e3a40ab563c1423ef8b635ec0e046d3f4532d3079748be5a2b3996d0c247c->enter($__internal_2c1e3a40ab563c1423ef8b635ec0e046d3f4532d3079748be5a2b3996d0c247c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fullLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c1e3a40ab563c1423ef8b635ec0e046d3f4532d3079748be5a2b3996d0c247c->leave($__internal_2c1e3a40ab563c1423ef8b635ec0e046d3f4532d3079748be5a2b3996d0c247c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed1e994cccd7b3b5943994ad64b5c44498d7ee0b93e26e8e57e80c7602862c07 = $this->env->getExtension("native_profiler");
        $__internal_ed1e994cccd7b3b5943994ad64b5c44498d7ee0b93e26e8e57e80c7602862c07->enter($__internal_ed1e994cccd7b3b5943994ad64b5c44498d7ee0b93e26e8e57e80c7602862c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    
    <header>
        <h1>title</h1>
    </header>
    
    <nav>
        ";
        // line 9
        $this->displayBlock('navigation', $context, $blocks);
        // line 10
        echo "    </nav>
    
    <div>
        ";
        // line 13
        $this->displayBlock('main', $context, $blocks);
        // line 14
        echo "    </div>
    
    <footer>
        &copy; Mike C
    </footer>

";
        
        $__internal_ed1e994cccd7b3b5943994ad64b5c44498d7ee0b93e26e8e57e80c7602862c07->leave($__internal_ed1e994cccd7b3b5943994ad64b5c44498d7ee0b93e26e8e57e80c7602862c07_prof);

    }

    // line 9
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_a5454ddb993393c9a9be54ef0b92cd78c0afe13b6978bb32038da8a81c69c6ee = $this->env->getExtension("native_profiler");
        $__internal_a5454ddb993393c9a9be54ef0b92cd78c0afe13b6978bb32038da8a81c69c6ee->enter($__internal_a5454ddb993393c9a9be54ef0b92cd78c0afe13b6978bb32038da8a81c69c6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        
        $__internal_a5454ddb993393c9a9be54ef0b92cd78c0afe13b6978bb32038da8a81c69c6ee->leave($__internal_a5454ddb993393c9a9be54ef0b92cd78c0afe13b6978bb32038da8a81c69c6ee_prof);

    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        $__internal_4d81e0750930cbbd970bc66a64c3fb523999e0b73c7fc30d36e37c4406a82311 = $this->env->getExtension("native_profiler");
        $__internal_4d81e0750930cbbd970bc66a64c3fb523999e0b73c7fc30d36e37c4406a82311->enter($__internal_4d81e0750930cbbd970bc66a64c3fb523999e0b73c7fc30d36e37c4406a82311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_4d81e0750930cbbd970bc66a64c3fb523999e0b73c7fc30d36e37c4406a82311->leave($__internal_4d81e0750930cbbd970bc66a64c3fb523999e0b73c7fc30d36e37c4406a82311_prof);

    }

    public function getTemplateName()
    {
        return "fullLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 13,  72 => 9,  59 => 14,  57 => 13,  52 => 10,  50 => 9,  42 => 3,  36 => 2,  11 => 1,);
    }
}
