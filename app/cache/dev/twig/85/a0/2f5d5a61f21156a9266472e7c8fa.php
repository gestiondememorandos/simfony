<?php

/* ::base.html.twig */
class __TwigTemplate_85a02f5d5a61f21156a9266472e7c8fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'izquierda' => array($this, 'block_izquierda'),
            'derecha' => array($this, 'block_derecha'),
            'centro' => array($this, 'block_centro'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t\t<font size=\"2px\">
\t\t\t<div id=\"pagina\" style=\"width: auto; height: 970px; overflow: visible; position: relative;\" class=\"ui-layout-container\">
\t\t\t\t<div id=\"encabezado\" class=\"ui-layout-unit ui-widget ui-widget-content ui-corner-all ui-layout-north ui-layout-pane ui-layout-pane-north\" style=\"position: \tabsolute; margin: 0px; top: 0px; bottom: auto; left: 0px; right: 0px; width: auto; z-index: 1; height: 124px; display: block; visibility: visible;\" >
\t\t\t\t\t<div class=\"ui-layout-unit-content ui-widget-content\" style=\"position: relative; height: 121px; visibility: visible;\">
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<a href=\"http://www.uniquindio.edu.co\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/banner_uq.jpg"), "html", null, true);
        echo "\" alt=\"Universidad del Quindío\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</center>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div id=\"panel_izquierda\" class=\"ui-layout-unit ui-widget ui-widget-content ui-corner-all ui-layout-west ui-layout-pane ui-layout-pane-west\" style=\"position: absolute; margin: 0px; left: 0px; right: auto; top: 138px; bottom: 0px; height: 826px; z-index: 1; width: 144px; display: block; visibility: visible;\">
\t\t\t\t\t<div class=\"ui-layout-unit-content ui-widget-content\" style=\"position: relative; height: 823px; visibility: visible;\">
\t\t\t\t\t\t";
        // line 26
        $this->displayBlock('izquierda', $context, $blocks);
        // line 27
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div id=\"panel_derecha\" class=\"ui-layout-unit ui-widget ui-widget-content ui-corner-all ui-layout-east ui-layout-pane ui-layout-pane-east\" style=\"position: absolute; margin: 0px; left: auto; right: 0px; top: 138px; bottom: 0px; height: 826px; z-index: 1; width: 144px; display: block; visibility: visible;\">
\t\t\t\t\t<div class=\"ui-layout-unit-content ui-widget-content\" style=\"position: relative; height: 823px; visibility: visible;\">
\t\t\t\t\t\t";
        // line 32
        $this->displayBlock('derecha', $context, $blocks);
        // line 33
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div id=\"panel_centro\" class=\"ui-layout-unit ui-widget ui-widget-content ui-corner-all ui-layout-center ui-layout-pane ui-layout-pane-center\" style=\"position: absolute; margin: 0px; left: 158px; right: 158px; top: 138px; bottom: 0px; height: 826px; width: 1011px; z-index: 1; display: block; visibility: visible;>
\t\t\t\t\t<div id=\"j_idt58\" class=\"ui-layout-unit ui-widget ui-widget-content ui-corner-all ui-layout-center ui-layout-pane ui-layout-pane-center\" style=\"position: absolute; margin: 0px; left: 2px; right: 2px; top: 95px; bottom: 2px; height: 729px; width: 1007px; z-index: 1; display: block; visibility: visible;\">
\t\t\t\t\t\t<div class=\"ui-layout-unit-content ui-widget-content\" style=\"position: relative; height: 823px; visibility: visible;\">
\t\t\t\t\t\t\t";
        // line 39
        $this->displayBlock('centro', $context, $blocks);
        // line 40
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t</div>\t
\t\t\t
\t\t\t\t<div id=\"j_idt9-resizer\" class=\"ui-layout-resizer ui-layout-resizer-north ui-layout-resizer-open ui-layout-resizer-north-open\" style=\"position: absolute; padding: 0px; margin: 0px; font-size: 1px; text-align: left; overflow: hidden; z-index: 2; top: 130px; cursor: default; width: 1333px; height: 6px; left: 0px;\">
\t\t\t\t</div>
\t\t\t\t<div id=\"j_idt13-resizer\" class=\"ui-layout-resizer ui-layout-resizer-west ui-layout-resizer-open ui-layout-resizer-west-open\" style=\"position: absolute; padding: 0px; margin: 0px; font-size: 1px; text-align: left; overflow: hidden; z-index: 2; left: 150px; cursor: default; height: 834px; width: 6px; top: 138px;\">
\t\t\t\t</div>
\t\t\t\t<div id=\"j_idt14-resizer\" class=\"ui-layout-resizer ui-layout-resizer-east ui-layout-resizer-open ui-layout-resizer-east-open\" style=\"position: absolute; padding: 0px; margin: 0px; font-size: 1px; text-align: left; overflow: hidden; z-index: 2; right: 150px; cursor: default; height: 834px; width: 6px; top: 138px;\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</font>
        ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/theme.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t";
    }

    // line 26
    public function block_izquierda($context, array $blocks = array())
    {
    }

    // line 32
    public function block_derecha($context, array $blocks = array())
    {
    }

    // line 39
    public function block_centro($context, array $blocks = array())
    {
    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 52,  130 => 39,  125 => 32,  120 => 26,  113 => 7,  110 => 6,  104 => 5,  98 => 53,  96 => 52,  82 => 40,  80 => 39,  72 => 33,  70 => 32,  63 => 27,  61 => 26,  50 => 18,  37 => 9,  35 => 6,  31 => 5,  25 => 1,);
    }
}
