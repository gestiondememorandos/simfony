<?php

namespace gestion\memorandosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use gestion\memorandosBundle\Entity\Actor;
use gestion\memorandosBundle\Entity\Contacto;
use gestion\memorandosBundle\Entity\Comunicacion;

$datos = '';
class DefaultController extends Controller
{
	
    public function indexAction($name)
    {
        return $this->render('gestionmemorandosBundle:Default:index.html.twig', array('name' => $name));
    }
	
	public function loginAction()
    {
        return $this->render('gestionmemorandosBundle:Default:login.html.twig');
    }
	
	public function inicioAction()
    {
		$contacto = new Contacto();
		$repository = $this->getDoctrine()->getRepository('gestionmemorandosBundle:Contacto');
		$datos = $repository->findOneBy(array('username'=>$_POST['login:usuario'], 'password'=>$_POST['login:password']));
		
		/* $contacto->setPassword($datos->getPassword()); */
		
		if(isset($datos))
		{
				/* $comunicacion = new Comunicacion(); */
				$repository = $this->getDoctrine()->getEntityManager();
				/* $repository = $this->getDoctrine()->getRepository('gestionmemorandosBundle:Comunicacion'); */
				/* $correos = $repository->findAll(); */
				$consulta = $repository->createQuery('SELECT c, o, d FROM gestionmemorandosBundle:Comunicaciondestinatario c JOIN c.comunicacion o JOIN c.destinatario d JOIN o.remitente r WHERE c.destinatario = :contacto');
				$consulta->setParameter('contacto', $datos->getIdcontacto());
				$correos=$consulta->getResult();
				return $this->render('gestionmemorandosBundle:Default:inicio.html.twig', array('correos' => $correos));
		}
		else
		{
			throw $this->createNotFoundException('Datos incorrectos');
		}
    }
	
	public function correoAction($codigo)
	{
		
			if($codigo == 'Recibido')
			{
				/* $comunicacion = new Comunicacion(); */
				$repository = $this->getDoctrine()->getEntityManager();
				/* $repository = $this->getDoctrine()->getRepository('gestionmemorandosBundle:Comunicacion'); */
				/* $correos = $repository->findAll(); */
				$consulta = $repository->createQuery('SELECT c, o, d FROM gestionmemorandosBundle:Comunicaciondestinatario c JOIN c.comunicacion o JOIN c.destinatario d JOIN o.remitente r WHERE c.destinatario = :contacto');
				$consulta->setParameter('contacto', '2');
				$correos=$consulta->getResult();
				return $this->render('gestionmemorandosBundle:Default:inicio.html.twig', array('correos' => $correos));
			}
			if($codigo == 'Enviado')
			{
				/* $comunicacion = new Comunicacion(); */
				$repository = $this->getDoctrine()->getEntityManager();
				/* $repository = $this->getDoctrine()->getRepository('gestionmemorandosBundle:Comunicacion'); */
				/* $correos = $repository->findAll(); */
				$consulta = $repository->createQuery('SELECT c, o, d FROM gestionmemorandosBundle:Comunicaciondestinatario c JOIN c.comunicacion o JOIN c.destinatario d JOIN o.remitente r WHERE o.remitente = :contacto');
				$consulta->setParameter('contacto', '2');
				$correos=$consulta->getResult();
				return $this->render('gestionmemorandosBundle:Default:inicio.html.twig', array('correos' => $correos));
			}
			if($codigo == 'Registrado')
			{
				/* $comunicacion = new Comunicacion(); */
				$repository = $this->getDoctrine()->getEntityManager();
				/* $repository = $this->getDoctrine()->getRepository('gestionmemorandosBundle:Comunicacion'); */
				/* $correos = $repository->findAll(); */
				$consulta = $repository->createQuery('SELECT c, o, d, r, e FROM gestionmemorandosBundle:Comunicaciondestinatario c JOIN c.comunicacion o JOIN c.destinatario d JOIN o.remitente r JOIN o.estado e WHERE c.destinatario = :contacto AND e.estado = :estado');
				$consulta->setParameter('contacto', '2');
				$consulta->setParameter('estado', 'Registrado');
				$correos=$consulta->getResult();
				return $this->render('gestionmemorandosBundle:Default:inicio.html.twig', array('correos' => $correos));
			}
			if($codigo == 'Elaborado')
			{
				/* $comunicacion = new Comunicacion(); */
				$repository = $this->getDoctrine()->getEntityManager();
				/* $repository = $this->getDoctrine()->getRepository('gestionmemorandosBundle:Comunicacion'); */
				/* $correos = $repository->findAll(); */
				$consulta = $repository->createQuery('SELECT c, o, d, r, e FROM gestionmemorandosBundle:Comunicaciondestinatario c JOIN c.comunicacion o JOIN c.destinatario d JOIN o.remitente r JOIN o.estado e WHERE c.destinatario = :contacto AND e.estado = :estado');
				$consulta->setParameter('contacto', '2');
				$consulta->setParameter('estado', 'Elaborado');
				$correos=$consulta->getResult();
				return $this->render('gestionmemorandosBundle:Default:inicio.html.twig', array('correos' => $correos));
			}
			if($codigo == 'Construido')
			{
				/* $comunicacion = new Comunicacion(); */
				$repository = $this->getDoctrine()->getEntityManager();
				/* $repository = $this->getDoctrine()->getRepository('gestionmemorandosBundle:Comunicacion'); */
				/* $correos = $repository->findAll(); */
				$consulta = $repository->createQuery('SELECT c, o, d, r, e FROM gestionmemorandosBundle:Comunicaciondestinatario c JOIN c.comunicacion o JOIN c.destinatario d JOIN o.remitente r JOIN o.estado e WHERE c.destinatario = :contacto AND e.estado = :estado');
				$consulta->setParameter('contacto', '2');
				$consulta->setParameter('estado', 'Construido');
				$correos=$consulta->getResult();
				return $this->render('gestionmemorandosBundle:Default:inicio.html.twig', array('correos' => $correos));
			}
			if($codigo == 'Redactado')
			{
				/* $comunicacion = new Comunicacion(); */
				$repository = $this->getDoctrine()->getEntityManager();
				/* $repository = $this->getDoctrine()->getRepository('gestionmemorandosBundle:Comunicacion'); */
				/* $correos = $repository->findAll(); */
				$consulta = $repository->createQuery('SELECT c, o, d, r, e FROM gestionmemorandosBundle:Comunicaciondestinatario c JOIN c.comunicacion o JOIN c.destinatario d JOIN o.remitente r JOIN o.estado e WHERE c.destinatario = :contacto AND e.estado = :estado');
				$consulta->setParameter('contacto', '2');
				$consulta->setParameter('estado', 'Redactado');
				$correos=$consulta->getResult();
				return $this->render('gestionmemorandosBundle:Default:inicio.html.twig', array('correos' => $correos));
			}
			if($codigo == 'Listo')
			{
				/* $comunicacion = new Comunicacion(); */
				$repository = $this->getDoctrine()->getEntityManager();
				/* $repository = $this->getDoctrine()->getRepository('gestionmemorandosBundle:Comunicacion'); */
				/* $correos = $repository->findAll(); */
				$consulta = $repository->createQuery('SELECT c, o, d, r, e FROM gestionmemorandosBundle:Comunicaciondestinatario c JOIN c.comunicacion o JOIN c.destinatario d JOIN o.remitente r JOIN o.estado e WHERE c.destinatario = :contacto AND e.estado = :estado');
				$consulta->setParameter('contacto', '2');
				$consulta->setParameter('estado', 'a');
				$correos=$consulta->getResult();
				return $this->render('gestionmemorandosBundle:Default:inicio.html.twig', array('correos' => $correos));
			}
			
	}
		
	
	public function pruebaAction()
	{
		return $this->render('gestionmemorandosBundle:Default:prueba.html.twig');
	}
}
?>