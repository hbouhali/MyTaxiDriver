<?php

/* GTaxiTaxiDriverBundle:Taxi:index.html.twig */
class __TwigTemplate_ae806dad5f8406883418aa46e44c7db5cca9e3262e875b7a3c75a75bc523bbee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GTaxiTaxiDriverBundle:Taxi:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GTaxiTaxiDriverBundle:Taxi:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "GTaxiTaxiDriverBundle:Taxi:index";
    }

    public function getTemplateName()
    {
        return "GTaxiTaxiDriverBundle:Taxi:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,);
    }
}
