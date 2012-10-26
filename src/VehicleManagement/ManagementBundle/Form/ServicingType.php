<?php 

namespace VehicleManagement\ManagementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use VehicleManagement\ManagementBundle\Entity\VehicleRepository;

class ServicingType extends AbstractType {
	
	private $user;
	
	public function __construct($user) {
		$this->user = $user;
	}
	public function buildForm(FormBuilder $builder, array $options) {
		$user = $this->user;
		$builder
			->add('date',    'date')
			->add('vehicle', 'entity',array('class' => 'VehicleManagementManagementBundle:Vehicle',
											'query_builder' => function(VehicleRepository $vr) use ($user) { return $vr->getAllObjects($user);}))
			->add('comment', 'textarea')
			->add('price',   'text')
			->add('km',      'integer');
	}
	
	public function getName() {
		return 'vehiclemanagement_managementbundle_servicingtype';
	}
	
	public function getDefaultOptions(array $options) {
		return array(
				'data_class' => 'VehicleManagement\ManagementBundle\Entity\Servicing',
		);
	}
}