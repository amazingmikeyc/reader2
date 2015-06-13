<?php

/* feedShow/index.html.twig */
class __TwigTemplate_e5c5d70999fc5305cde4f5d1bfd65a53fa17d6441a399aa42bf9f678ad960090 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("fullLayout.html.twig", "feedShow/index.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'main' => array($this, 'block_main'),
            'navigation' => array($this, 'block_navigation'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "fullLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f1fc3080804408369112638ceafc48f5da1a835dcbc69a1b6e337a85c3dae24 = $this->env->getExtension("native_profiler");
        $__internal_6f1fc3080804408369112638ceafc48f5da1a835dcbc69a1b6e337a85c3dae24->enter($__internal_6f1fc3080804408369112638ceafc48f5da1a835dcbc69a1b6e337a85c3dae24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "feedShow/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f1fc3080804408369112638ceafc48f5da1a835dcbc69a1b6e337a85c3dae24->leave($__internal_6f1fc3080804408369112638ceafc48f5da1a835dcbc69a1b6e337a85c3dae24_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_905bec011d5436578ffb9a64d05f912d971cb10ee9259b069b02f7783d7e8a26 = $this->env->getExtension("native_profiler");
        $__internal_905bec011d5436578ffb9a64d05f912d971cb10ee9259b069b02f7783d7e8a26->enter($__internal_905bec011d5436578ffb9a64d05f912d971cb10ee9259b069b02f7783d7e8a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js\"></script>
    <script src=\"http://code.jquery.com/jquery-2.1.4.min.js\"></script>
    <script src=\"/js/controller.js\"></script>
";
        
        $__internal_905bec011d5436578ffb9a64d05f912d971cb10ee9259b069b02f7783d7e8a26->leave($__internal_905bec011d5436578ffb9a64d05f912d971cb10ee9259b069b02f7783d7e8a26_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_ddfbd32ef61b5be8ee9ce4b38ae23b19baf8dba056957f45e192a3c4a7d0acd4 = $this->env->getExtension("native_profiler");
        $__internal_ddfbd32ef61b5be8ee9ce4b38ae23b19baf8dba056957f45e192a3c4a7d0acd4->enter($__internal_ddfbd32ef61b5be8ee9ce4b38ae23b19baf8dba056957f45e192a3c4a7d0acd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "     ";
        // line 19
        echo "
         <h2><a href=\"{{feed.info.link}}\" >{{feed.info.title}}</a></h2>
         <h3>{{feed.info.description}}</h3>
        <div>
            <ul>
                <li ng-repeat=\"article in feed.articles\">
                    <h4><a href=\"{{article.link}}\">{{article.title}}</a></h4>
                    <p>{{article.content}}</p>
                </li>
            </ul>
        </div>
    ";
        echo "
    
";
        
        $__internal_ddfbd32ef61b5be8ee9ce4b38ae23b19baf8dba056957f45e192a3c4a7d0acd4->leave($__internal_ddfbd32ef61b5be8ee9ce4b38ae23b19baf8dba056957f45e192a3c4a7d0acd4_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_21472a3cf7c9fc873b9d9a76a6580b43f73771af2ce500ebf4981796312930df = $this->env->getExtension("native_profiler");
        $__internal_21472a3cf7c9fc873b9d9a76a6580b43f73771af2ce500ebf4981796312930df->enter($__internal_21472a3cf7c9fc873b9d9a76a6580b43f73771af2ce500ebf4981796312930df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "    ";
        // line 33
        echo "
        <ul>
            <li ng-repeat=\"feed in feedlist.list\">
                <a ng-click=\"load(feed.name)\" href> {{feed.title}} </a>
            </li>
        </ul>
        
        <form type=\"get\" ng-submit=\"feedlist.addFeed()\">
            <input type=\"url\" placeholder=\"add a new url\" ng-model=\"feedlist.newUrl\" /><input type=\"submit\" value=\"add\" />
        </form>
    ";
        echo "
    
    
    
";
        
        $__internal_21472a3cf7c9fc873b9d9a76a6580b43f73771af2ce500ebf4981796312930df->leave($__internal_21472a3cf7c9fc873b9d9a76a6580b43f73771af2ce500ebf4981796312930df_prof);

    }

    public function getTemplateName()
    {
        return "feedShow/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  87 => 23,  81 => 22,  60 => 19,  58 => 8,  52 => 7,  42 => 3,  36 => 2,  11 => 1,);
    }
}
