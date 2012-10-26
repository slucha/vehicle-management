<?php

namespace VehicleManagement\ManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


abstract class GenericController extends Controller {
	
	public function genericIndexAction($page, $type) {
		//$repo = $this->getDoctrine()->getRepository('VehicleManagementManagementBundle:Refuel');
		$repo = $this->getRepository($type);
		$nbLinePerPage = 20;
		
		$user = $this->getUser();
		
		$nbObject = $repo->getTotal($user);

		if($nbObject ==0) {
			$nbPages = 1;
		} else {
			$nbPages = ceil($nbObject/$nbLinePerPage);
		}
		$offset = ($page - 1) * $nbLinePerPage;
			
		if($page < 1 || $page > $nbPages) {
			throw $this->createNotFoundException('Page inexistante!');
		}
		$objects = $repo->getObjects($nbLinePerPage, $offset, $user);
		
		return $this->render('VehicleManagementManagementBundle:' . $type . ':index.html.twig',
				array('objects' => $objects,
						'page' => $page,
						'nbPages' => $nbPages,
						'managementType'=>$type
		));
	}
	
	public function genericEditAction($type,$data) {

	}
	
	private function getRepository($entity) {
		return $this->getDoctrine()->getRepository('VehicleManagementManagementBundle:'. $entity);
	}
	
	public function getUser() {
		$user = $this->container->get('security.context')->getToken()->getUser();
		if(!is_object($user)) {
			throw new AccessDeniedException('Vous n\'êtes pas authentifié.');
		}
		return $user;
	}
}