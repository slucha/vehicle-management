<?php

namespace VehicleManagement\ManagementBundle\Controller;

use VehicleManagement\ManagementBundle\Form\VehicleType;
use VehicleManagement\ManagementBundle\Form\VehicleHandler;
use VehicleManagement\ManagementBundle\Controller\GenericController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use VehicleManagement\ManagementBundle\Entity\Vehicle;

class VehicleController extends GenericController {

	public function indexAction($page) {
		return $this->genericIndexAction($page, "Vehicle");
	}
	
	public function editAction(Vehicle $vehicle) {
		if($this->getUser() != $vehicle->getUser()) {
			return $this->redirect($this->generateUrl('VehicleManagementManagementBundle_vehicle'));
		}
		$form = $this->createForm(new VehicleType(), $vehicle);
		$formHandler = new VehicleHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());
		if($formHandler->process()) {
			return $this->redirect($this->generateUrl('VehicleManagementManagementBundle_vehicle'));
		}
		return $this->render('VehicleManagementManagementBundle::add.html.twig',
				array('form' => $form->createView(),
					  'managementType' => 'vehicle'));
	}

	public function addAction() {
		$vehicle = new Vehicle($this->getUser());	
		// On crée le formulaire
		$form = $this->createForm(new VehicleType(), $vehicle);	
		// On crée le gestionnaire pour ce formulaire, avec les outils dont il a besoin
		$formHandler = new VehicleHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());		
		// On exécute le traitement du formulaire. S'il retourne true, alors le formulaire a bien été traité
		if($formHandler->process()) {
			return $this->redirect($this->generateUrl('VehicleManagementManagementBundle_vehicle'));
		}
		return $this->render('VehicleManagementManagementBundle::add.html.twig',
				array('form' => $form->createView(),
					  'managementType' => 'Vehicle'
		));
	}
	
	public function deleteAction(Vehicle $vehicle) {
		if($this->getUser() != $vehicle->getUser()) {
			throw $this->createNotFoundException('Page inexistante!');
		}
		$em = $this->getDoctrine()->getEntityManager();
		$em->remove($vehicle);
		$em->flush();
		return $this->redirect($this->generateUrl('VehicleManagementManagementBundle_vehicle'));
	}
}
