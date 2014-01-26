<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('gestionmemorandos_homepage', new Route('/hello/{name}', array(
    '_controller' => 'gestionmemorandosBundle:Default:index',
)));

$collection->add('gestionmemorandos_login', new Route('/login', array(
    '_controller' => 'gestionmemorandosBundle:Default:login',
)));

$collection->add('gestionmemorandos_inicio', new Route('/inicio', array(
    '_controller' => 'gestionmemorandosBundle:Default:inicio',
)));

$collection->add('gestionmemorandos_correo', new Route('/correo/{codigo}', array(
    '_controller' => 'gestionmemorandosBundle:Default:correo',
)));

$collection->add('gestionmemorandos_prueba', new Route('/prueba', array(
    '_controller' => 'gestionmemorandosBundle:Default:prueba',
)));

return $collection;
