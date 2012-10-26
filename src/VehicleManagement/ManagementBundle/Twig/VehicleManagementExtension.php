<?php
namespace VehicleManagement\ManagementBundle\Twig;

class VehicleManagementExtension extends \Twig_Extension {
	
	public function getFilters() {
		return array(
				'active' => new \Twig_Filter_Method($this, 'activeFilter'),
		);
	}
	
	public function activeFilter($currentRoute,$linkName) {
		if(strpos($currentRoute,$linkName) != false) {
			return "active";
		}
		return "#";
	}
	
	public function getName() {
		return 'vehiclemanagement_extension';
	}
}