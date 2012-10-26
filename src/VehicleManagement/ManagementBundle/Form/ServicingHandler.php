<?php 

namespace VehicleManagement\ManagementBundle\Form;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use VehicleManagement\ManagementBundle\Entity\Servicing;
use VehicleManagement\ManagementBundle\Form\BaseHandler;

class ServicingHandler extends BaseHandler {
	public function onSuccess(Servicing $servicing) {
    	$this->em->persist($servicing);
    	$this->em->flush();
    }
}