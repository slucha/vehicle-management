<?php

namespace VehicleManagement\ManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller {
	
	public function indexAction() {
		return $this->render('VehicleManagementManagementBundle:Homepage:index.html.twig');
	}
}