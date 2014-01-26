<?php

/* gestionmemorandosBundle:Default:login.html.twig */
class __TwigTemplate_9aa1f21f2c22d272268fb59f44c8194d extends Twig_Template
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
        // line 6
        echo "\t\t\t<center>
\t\t\t\t\t<div id=\"j_idt17\" class=\"ui-panel ui-widget ui-widget-content ui-corner-all\" style=\"width:300px\">
\t\t\t\t\t\t<div id=\"j_idt17_header\" class=\"ui-panel-titlebar ui-widget-header ui-helper-clearfix ui-corner-all\">
\t\t\t\t\t\t\t<span class=\"ui-panel-title\">
\t\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"j_idt17_content\" class=\"ui-panel-content ui-widget-content\">
\t\t\t\t\t\t\t<form id=\"login\" name=\"login\" method=\"post\" enctype=\"application/x-www-form-urlencoded\" action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("gestionmemorandos_inicio", array("codigo" => "Recibido"));
        echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"login\" value=\"login\">
\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr><td>Usuario:* </td></tr>
\t\t\t\t\t\t\t\t\t\t<tr><td><input id=\"login:usuario\" name=\"login:usuario\" type=\"text\" class=\"ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all\" role=\"textbox\" aria-disabled=\"false\" aria-readonly=\"false\" aria-multiline=\"false\"></td></tr>
\t\t\t\t\t\t\t\t\t\t<tr></tr>
\t\t\t\t\t\t\t\t\t\t<tr><td>Contraseña:* </td></tr>
\t\t\t\t\t\t\t\t\t\t<tr><td><input id=\"login:password\" name=\"login:password\" type=\"password\" class=\"ui-inputfield ui-password ui-widget ui-state-default ui-corner-all\" role=\"textbox\" aria-disabled=\"false\" aria-readonly=\"false\" aria-multiline=\"false\"></td></tr>
\t\t\t\t\t\t\t\t\t\t<tr></tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<button id=\"login:loging\" name=\"login:loging\" class=\"ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\" style=\"width:150px;height:32px\" type=\"submit\" role=\"button\" aria-disabled=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"ui-button-text\">
\t\t\t\t\t\t\t\t\t\tIngresar
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div id=\"login:j_idt25\" class=\"ui-messages ui-widget\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<form id=\"olvidoC\" name=\"olvidoC\" method=\"post\" action=\"/gestionMemorandos/loging.jsf\" enctype=\"application/x-www-form-urlencoded\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"olvidoC\" value=\"olvidoC\">
\t\t\t\t\t\t<a id=\"olvidoC:olvidoContrasenia\" href=\"#\" class=\"ui-commandlink\" onclick=\"PrimeFaces.addSubmitParam('olvidoC',{'olvidoC:olvidoContrasenia':'olvidoC:olvidoContrasenia'}).submit('olvidoC');\" style=\"margin-right:20px;font-size: 0.9em\">¿Olvidaste tu contraseña?
\t\t\t\t\t\t</a>
\t\t\t\t\t</form>
\t\t\t\t</center>
\t\t";
    }

    public function getTemplateName()
    {
        return "gestionmemorandosBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  50 => 6,  47 => 5,  42 => 4,  37 => 3,  31 => 2,);
    }
}
