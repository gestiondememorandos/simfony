<?php

/* gestionmemorandosBundle:Default:inicio.html.twig */
class __TwigTemplate_75341f140fa52a40f053df70689ef370 extends Twig_Template
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
        // line 4
        echo "\t\t\t\t<div class=\"ui-layout-unit-content ui-widget-content\" style=\"position: relative; height: 823px; visibility: visible;\">
\t\t\t\t\t<form id=\"izquierda\" name=\"izquierda\" method=\"post\" action=\"/gestionMemorandos/inicioSecre.jsf\" enctype=\"application/x-www-form-urlencoded\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"izquierda\" value=\"izquierda\">
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<div id=\"izquierda:j_idt15\" class=\"ui-splitbutton ui-buttonset ui-widget\">
\t\t\t\t\t\t\t\t<button id=\"izquierda:j_idt15_button\" name=\"izquierda:j_idt15_button\" class=\"ui-button ui-widget ui-state-default ui-corner-left ui-button-text-icon-left\" onclick=\"PrimeFaces.ab({source:'izquierda:j_idt15'});return false;\" type=\"submit\" role=\"button\" aria-disabled=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"ui-button-icon-left ui-icon ui-icon-mail-closed\">
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"ui-button-text\">
\t\t\t\t\t\t\t\t\t\tNuevo
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button id=\"izquierda:j_idt15_menuButton\" name=\"izquierda:j_idt15_menuButton\" type=\"button\" class=\"ui-splitbutton-menubutton  ui-button ui-widget ui-state-default ui-corner-right ui-button-icon-only\" role=\"button\" aria-disabled=\"true\">
\t\t\t\t\t\t\t\t\t<span class=\"ui-button-icon-left ui-icon ui-icon-triangle-1-s\">
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"ui-button-text\">
\t\t\t\t\t\t\t\t\t\t<div id=\"izquierda:j_idt15\" class=\"ui-menu ui-menu-dynamic ui-widget ui-widget-content ui-corner-all ui-helper-clearfix ui-shadow\" role=\"menu\" style=\"z-index: 1003; display:block; top:205.71875px; left: 18.046875px;\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ui-menu-list ui-helper-reset\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"ui-menuitem ui-widget ui-corner-all\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"izquierda:j_idt16\" class\"ui-menuitem-link ui-corner-all\" style=\"font-size: 0.8em\" href=\"#\" onclick=\"\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ui-menuitem-icon ui-icon ui-icon-triangule-1-n\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ui-menuitem-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ta
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tb
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</center>
\t\t\t\t\t\t<hr id=\"izquierda:j_idt21\" class=\"ui-separator ui-state-default ui-corner-all\" style=\"width: 95%; height: 1px\">
\t\t\t\t\t\t<div id=\"izquierda:j_idt22\" class=\"ui-menu ui-widget ui-widget-content ui-corner-all ui-helper-clearfix\" style=\"width:133px;font-size: 1.0em\" role=\"menu\">
\t\t\t\t\t\t\t<ul class=\"ui-menu-list ui-helper-reset\">
\t\t\t\t\t\t\t\t<li class=\"ui-menuitem ui-widget ui-corner-all\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<a id=\"izquierda:j_idt23\" class=\"ui-menuitem-link ui-corner-all\" href=\"javascript:void(0)\" onclick=\"PrimeFaces.addSubmitParam('izquierda',{'izquierda:j_idt23':'izquierda:j_idt23'}).submit('izquierda');\">
\t\t\t\t\t\t\t\t\t\t<span class=\"ui-menuitem-text\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestionmemorandos_correo", array("codigo" => "Recibido", "_format" => "pdf")), "html", null, true);
        echo "\">Recibidos
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"ui-menuitem ui-widget ui-corner-all\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<a id=\"izquierda:j_idt24\" class=\"ui-menuitem-link ui-corner-all\" href=\"javascript:void(0)\" onclick=\"PrimeFaces.addSubmitParam('izquierda',{'izquierda:j_idt24':'izquierda:j_idt24'}).submit('izquierda');\">
\t\t\t\t\t\t\t\t\t\t<span class=\"ui-menuitem-text\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("gestionmemorandos_correo", array("codigo" => "Enviado"));
        echo "\">Enviados
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"ui-menuitem ui-widget ui-corner-all\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<a id=\"izquierda:j_idt25\" class=\"ui-menuitem-link ui-corner-all\" href=\"javascript:void(0)\" onclick=\"PrimeFaces.addSubmitParam('izquierda',{'izquierda:j_idt25':'izquierda:j_idt25'}).submit('izquierda');\">
\t\t\t\t\t\t\t\t\t\t<span class=\"ui-menuitem-text\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("gestionmemorandos_correo", array("codigo" => "Registrado"));
        echo "\">Registrados
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr id=\"izquierda:j_idt26\" class=\"ui-separator ui-state-default ui-corner-all\" style=\"width: 95%; height: 1px\">
\t\t\t\t\t\t<div id=\"izquierda:j_idt27\" class=\"ui-menu ui-widget ui-widget-content ui-corner-all ui-helper-clearfix\" style=\"width:133px;font-size: 1.0em\" role=\"menu\">
\t\t\t\t\t\t\t<ul class=\"ui-menu-list ui-helper-reset\">
\t\t\t\t\t\t\t\t<li class=\"ui-menuitem ui-widget ui-corner-all\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<a id=\"izquierda:j_idt28\" class=\"ui-menuitem-link ui-corner-all\" href=\"javascript:void(0)\" onclick=\"PrimeFaces.addSubmitParam('izquierda',{'izquierda:j_idt28':'izquierda:j_idt28'}).submit('izquierda');\">
\t\t\t\t\t\t\t\t\t\t<span class=\"ui-menuitem-text\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("gestionmemorandos_correo", array("codigo" => "Elaborado"));
        echo "\">Elaborados
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"ui-menuitem ui-widget ui-corner-all\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<a id=\"izquierda:j_idt29\" class=\"ui-menuitem-link ui-corner-all\" href=\"javascript:void(0)\" onclick=\"PrimeFaces.addSubmitParam('izquierda',{'izquierda:j_idt29':'izquierda:j_idt29'}).submit('izquierda');\">
\t\t\t\t\t\t\t\t\t\t<span class=\"ui-menuitem-text\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("gestionmemorandos_correo", array("codigo" => "Construido"));
        echo "\">Construidos
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"ui-menuitem ui-widget ui-corner-all\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<a id=\"izquierda:j_idt30\" class=\"ui-menuitem-link ui-corner-all\" href=\"javascript:void(0)\" onclick=\"PrimeFaces.addSubmitParam('izquierda',{'izquierda:j_idt30':'izquierda:j_idt30'}).submit('izquierda');\">
\t\t\t\t\t\t\t\t\t\t<span class=\"ui-menuitem-text\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("gestionmemorandos_correo", array("codigo" => "Redactado"));
        echo "\">Redactados
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"ui-menuitem ui-widget ui-corner-all\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<a id=\"izquierda:j_idt31\" class=\"ui-menuitem-link ui-corner-all\" href=\"javascript:void(0)\" onclick=\"PrimeFaces.addSubmitParam('izquierda',{'izquierda:j_idt31':'izquierda:j_idt31'}).submit('izquierda');\">
\t\t\t\t\t\t\t\t\t\t<span class=\"ui-menuitem-text\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("gestionmemorandos_correo", array("codigo" => "Listo"));
        echo "\">Listos para enviar
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr id=\"izquierda:j_idt32\" class=\"ui-separator ui-state-default ui-corner-all\" style=\"width: 95%; height: 1px\">
\t\t\t\t\t</center>
\t\t\t\t</form>
\t\t\t\t</div>
\t\t";
    }

    // line 107
    public function block_derecha($context, array $blocks = array())
    {
    }

    // line 108
    public function block_centro($context, array $blocks = array())
    {
        // line 109
        echo "\t\t\t\t\t<form id=\"form\" name=\"form\" method=\"post\" action=\"/gestionMemorandos/inicioSecre.jsf\" enctype=\"application/x-www-form-urlencoded\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"form\" value=\"form\">
\t\t\t\t\t\t<span id=\"form:growl\">
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<div id=\"form:bandejaEntrada\" class=\"ui-datatable ui-widget\"><table role=\"grid\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th class=\"ui-datatable-header ui-widget-header\" colspan=\"5\">  
\t\t\t\t\t\t\t\t\t\tRecibidos
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr role=\"row\">
\t\t\t\t\t\t\t\t\t<th id=\"form:bandejaEntrada:estadoCom\" class=\"ui-state-default\" role=\"columnheader\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ui-dt-c\">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\tLeido
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t<th id=\"form:bandejaEntrada:model\" class=\"ui-state-default ui-filter-column\" role=\"columnheader\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ui-dt-c\">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\tRemitente
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<input id=\"form:bandejaEntrada:model:filter\" name=\"form:bandejaEntrada:model:filter\" class=\"ui-column-filter ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all\" value=\"\" autocomplete=\"off\" role=\"textbox\" aria-disabled=\"false\" aria-readonly=\"false\" aria-multiline=\"false\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t<th id=\"form:bandejaEntrada:year\" class=\"ui-state-default\" role=\"columnheader\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ui-dt-c\">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\tAsunto
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t<th id=\"form:bandejaEntrada:tipoCom\" class=\"ui-state-default ui-sortable-column\" role=\"columnheader\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ui-dt-c\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ui-sortable-column-icon ui-icon ui-icon-carat-2-n-s\">
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\tComunicación
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t<th id=\"form:bandejaEntrada:fechaEnvio\" class=\"ui-state-default\" role=\"columnheader\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ui-dt-c\">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\tFecha
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td id=\"form:bandejaEntrada_paginator_bottom\" class=\"ui-paginator ui-paginator-bottom ui-widget-header\" colspan=\"5\">
\t\t\t\t\t\t\t\t\t\t<span class=\"ui-paginator-first ui-state-default ui-corner-all ui-state-disabled\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ui-icon ui-icon-seek-first\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"ui-paginator-prev ui-state-default ui-corner-all ui-state-disabled\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ui-icon ui-icon-seek-prev\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"ui-paginator-pages\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ui-paginator-page ui-state-default ui-state-active ui-corner-all\">
\t\t\t\t\t\t\t\t\t\t\t\t1
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"ui-paginator-next ui-state-default ui-corner-all ui-state-disabled\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ui-icon ui-icon-seek-next\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"ui-paginator-last ui-state-default ui-corner-all ui-state-disabled\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ui-icon ui-icon-seek-end\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t";
        // line 192
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["correos"]) ? $context["correos"] : $this->getContext($context, "correos")));
        foreach ($context['_seq'] as $context["_key"] => $context["correo"]) {
            // line 193
            echo "\t\t\t\t\t\t\t";
            $context["i"] = 0;
            // line 194
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tbody id=\"form:bandejaEntrada_data";
            // line 195
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" class=\"ui-datatable-data ui-widget-content\">
\t\t\t\t\t\t\t\t<tr data-ri=\"0\" data-rk=\"1\" class=\"ui-widget-content ui-datatable-even\" role=\"row\" aria-selected=\"true\">
\t\t\t\t\t\t\t\t\t<td role=\"gridcell\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ui-dt-c\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestionmemorandos_correo", array("codigo" => $this->getAttribute($this->getAttribute((isset($context["correo"]) ? $context["correo"] : $this->getContext($context, "correo")), "comunicacion"), "tipo"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["correo"]) ? $context["correo"] : $this->getContext($context, "correo")), "comunicacion"), "leido"), "html", null, true);
            echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td role=\"gridcell\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ui-dt-c\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["correo"]) ? $context["correo"] : $this->getContext($context, "correo")), "comunicacion"), "remitente"), "nombre"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td role=\"gridcell\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ui-dt-c\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["correo"]) ? $context["correo"] : $this->getContext($context, "correo")), "comunicacion"), "asunto"), "html", null, true);
            echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td role=\"gridcell\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ui-dt-c\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["correo"]) ? $context["correo"] : $this->getContext($context, "correo")), "comunicacion"), "tipo"), "html", null, true);
            echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td role=\"gridcell\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ui-dt-c\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 219
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t";
            // line 224
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 225
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['correo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "\t\t\t\t\t\t</table>
\t\t\t\t\t\t<input type=\"hidden\" id=\"form:bandejaEntrada_selection\" name=\"form:bandejaEntrada_selection\" autocomplete=\"off\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "gestionmemorandosBundle:Default:inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 226,  321 => 225,  319 => 224,  311 => 219,  303 => 214,  295 => 209,  287 => 204,  277 => 199,  270 => 195,  267 => 194,  264 => 193,  260 => 192,  175 => 109,  172 => 108,  167 => 107,  152 => 96,  142 => 89,  132 => 82,  122 => 75,  107 => 63,  97 => 56,  87 => 49,  40 => 4,  37 => 3,  31 => 2,);
    }
}
