<?php

namespace VehicleManagement\ManagementBundle\Controller;

use VehicleManagement\ManagementBundle\Form\ServicingType;
use VehicleManagement\ManagementBundle\Form\ServicingHandler;
use VehicleManagement\ManagementBundle\Controller\GenericController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use VehicleManagement\ManagementBundle\Entity\Servicing;
use VehicleManagement\ManagementBundle\Entity\VehicleRepository;

class ServicingController extends GenericController {

	public function indexAction($page) {
		return $this->genericIndexAction($page, "Servicing");
	}
	
	public function editAction(Servicing $servicing) {
		if($this->getUser() != $servicing->getVehicle()->getUser()) {
			return $this->redirect($this->generateUrl('VehicleManagementManagementBundle_servicing'));
		}
		$form = $this->createForm(new ServicingType($this->getUser()), $servicing);
		$formHandler = new ServicingHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());
		if($formHandler->process()) {
			return $this->redirect($this->generateUrl('VehicleManagementManagementBundle_servicing'));
		}
		return $this->render('VehicleManagementManagementBundle::add.html.twig',
				array('form' => $form->createView(),
					  'managementType' => 'servicing'));
	}

	public function addAction() {
		$user = $this->getUser();
		$servicing = new Servicing($user);	
		// On crée le formulaire
		$form = $this->createForm(new ServicingType($user), $servicing);	
		// On crée le gestionnaire pour ce formulaire, avec les outils dont il a besoin
		$formHandler = new ServicingHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());		
		// On exécute le traitement du formulaire. S'il retourne true, alors le formulaire a bien été traité
		if($formHandler->process()) {
			return $this->redirect($this->generateUrl('VehicleManagementManagementBundle_servicing'));
		}
		return $this->render('VehicleManagementManagementBundle::add.html.twig',
				array('form' => $form->createView(),
					  'managementType' => 'servicing'
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
