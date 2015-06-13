<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_197402c4ca2e5023d0ee43ab7b7c2e367992f5ebc6ab9764e1e19632618756e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_942003de4a06ce105f84ea44fd654f186eb12e1cfd6bfaeda5950f5d89a01835 = $this->env->getExtension("native_profiler");
        $__internal_942003de4a06ce105f84ea44fd654f186eb12e1cfd6bfaeda5950f5d89a01835->enter($__internal_942003de4a06ce105f84ea44fd654f186eb12e1cfd6bfaeda5950f5d89a01835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_942003de4a06ce105f84ea44fd654f186eb12e1cfd6bfaeda5950f5d89a01835->leave($__internal_942003de4a06ce105f84ea44fd654f186eb12e1cfd6bfaeda5950f5d89a01835_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e18b6367bb976021d4b036223161736f58e386814839db9d939aab58022bf26 = $this->env->getExtension("native_profiler");
        $__internal_6e18b6367bb976021d4b036223161736f58e386814839db9d939aab58022bf26->enter($__internal_6e18b6367bb976021d4b036223161736f58e386814839db9d939aab58022bf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6e18b6367bb976021d4b036223161736f58e386814839db9d939aab58022bf26->leave($__internal_6e18b6367bb976021d4b036223161736f58e386814839db9d939aab58022bf26_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_36060430db72432683cb0043e51fbd45a12ff308e6edbd225694b72c47d62ef1 = $this->env->getExtension("native_profiler");
        $__internal_36060430db72432683cb0043e51fbd45a12ff308e6edbd225694b72c47d62ef1->enter($__internal_36060430db72432683cb0043e51fbd45a12ff308e6edbd225694b72c47d62ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_36060430db72432683cb0043e51fbd45a12ff308e6edbd225694b72c47d62ef1->leave($__internal_36060430db72432683cb0043e51fbd45a12ff308e6edbd225694b72c47d62ef1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ea876aa373779f54b2f40caf36add9f2d0e33a73140f1b3e6ad7db9e2c72c51 = $this->env->getExtension("native_profiler");
        $__internal_6ea876aa373779f54b2f40caf36add9f2d0e33a73140f1b3e6ad7db9e2c72c51->enter($__internal_6ea876aa373779f54b2f40caf36add9f2d0e33a73140f1b3e6ad7db9e2c72c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6ea876aa373779f54b2f40caf36add9f2d0e33a73140f1b3e6ad7db9e2c72c51->leave($__internal_6ea876aa373779f54b2f40caf36add9f2d0e33a73140f1b3e6ad7db9e2c72c51_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
