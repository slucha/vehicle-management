<?php

namespace VehicleManagement\ManagementBundle\Controller;

use VehicleManagement\ManagementBundle\Controller\GenericController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use VehicleManagement\ManagementBundle\Entity\Refuel;
use VehicleManagement\ManagementBundle\Form\RefuelType;
use VehicleManagement\ManagementBundle\Form\RefuelHandler;

class RefuelController extends GenericController {

	public function IndexAction($page) {
		return $this->genericIndexAction($page, "Refuel");
	}
	
	public function editAction(Refuel $refuel) {
		if($this->getUser() != $refuel->getVehicle()->getUser()) {
			return $this->redirect($this->generateUrl('VehicleManagementManagementBundle_refuel'));
		}
		$form = $this->createForm(new RefuelType($this->getUser()), $refuel);
		$formHandler = new RefuelHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());
		if($formHandler->process()) {
			return $this->redirect($this->generateUrl('VehicleManagementManagementBundle_refuel'));
		}
		return $this->render('VehicleManagementManagementBundle::add.html.twig',
				array('form' => $form->createView(),
					  'managementType' => 'refuel'));
	}

	public function addAction() {
		$user = $this->getUser();
		$refuel = new Refuel($user);	
		// On crée le formulaire
		$form = $this->createForm(new RefuelType($user), $refuel);	
		// On crée le gestionnaire pour ce formulaire, avec les outils dont il a besoin
		$formHandler = new RefuelHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());		
		// On exécute le traitement du formulaire. S'il retourne true, alors le formulaire a bien été traité
		if($formHandler->process()) {
			return $this->redirect($this->generateUrl('VehicleManagementManagementBundle_refuel'));
		}
		return $this->render('VehicleManagementManagementBundle::add.html.twig',
				array('form' => $form->createView(),
					  'managementType' => 'Refuel'
		));
	}
	
	public function deleteAction(Refuel $refuel) {
		if($this->getUser() != $refuel->getVehicle()->getUser()) {
			throw $this->createNotFoundException('Page inexistante!');
		}
		$em = $this->getDoctrine()->getEntityManager();
		$em->remove($refuel);
		$em->flush();
		return $this->redirect($this->generateUrl('VehicleManagementManagementBundle_refuel'));
	}
}
