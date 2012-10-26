<?php 

namespace VehicleManagement\ManagementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class VehicleType extends AbstractType {
	
	public function buildForm(FormBuilder $builder, array $options) {
		$builder
		->add('type', 'text')
		->add('brand','text')
		->add('name', 'text');
	}
	
	public function getName() {
		return 'vehiclemanagement_managementbundle_vehicletype';
	}
	
	public function getDefaultOptions(array $options) {
		return array(
				'data_class' => 'VehicleManagement\ManagementBundle\Entity\Vehicle',
		);
	}
}