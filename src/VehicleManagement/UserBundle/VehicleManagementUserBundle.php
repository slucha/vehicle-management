<?php
// src/Sdz/UserBundle/SdzUserBundle.php

namespace VehicleManagement\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class VehicleManagementUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}