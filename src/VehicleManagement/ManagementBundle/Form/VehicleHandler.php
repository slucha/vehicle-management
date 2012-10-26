<?php 

namespace VehicleManagement\ManagementBundle\Form;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use VehicleManagement\ManagementBundle\Entity\Vehicle;
use VehicleManagement\ManagementBundle\Form\BaseHandler;

class VehicleHandler extends BaseHandler {
	public function onSuccess(Vehicle $vehicle) {
    	$this->em->persist($vehicle);
    	$this->em->flush();
    }
}