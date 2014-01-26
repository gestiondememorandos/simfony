<?php

/* gestionmemorandosBundle:Default:prueba.html.twig */
class __TwigTemplate_ab9ff4032004692337193d2cd6a9944f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'izquierda' => array($this, 'block_izquierda'),
            'derecha' => array($this, 'block_derecha'),
            'centro' => array($this, 'block_centro'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Geston de Memorandos";
    }

    // line 3
    public function block_izquierda($context, array $blocks = array())
    {
    }

    // line 4
    public function block_derecha($context, array $blocks = array())
    {
    }

    // line 5
    public function block_centro($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "gestionmemorandosBundle:Default:prueba.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  42 => 4,  37 => 3,  31 => 2,);
    }
}
