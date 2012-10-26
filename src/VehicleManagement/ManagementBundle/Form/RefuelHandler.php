<?php 

namespace VehicleManagement\ManagementBundle\Form;

use VehicleManagement\ManagementBundle\Entity\Refuel;
use VehicleManagement\ManagementBundle\Form\BaseHandler;

class RefuelHandler extends BaseHandler {
	public function onSuccess(Refuel $refuel) {
    	$this->em->persist($refuel);
    	$this->em->flush();
    }
}