<?php 

namespace VehicleManagement\ManagementBundle\Form;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;

class BaseHandler {
	
	public function __construct(Form $form, Request $request, EntityManager $em) {
        $this->form    = $form;
        $this->request = $request;
        $this->em      = $em;
    }
	
    public function process() {
    	if( $this->request->getMethod() == 'POST' ) {
    		$this->form->bindRequest($this->request);
    		if( $this->form->isValid() ) {
    			$this->onSuccess($this->form->getData());
    			return true;
    		}
    	}   
    	return false;
    }
}