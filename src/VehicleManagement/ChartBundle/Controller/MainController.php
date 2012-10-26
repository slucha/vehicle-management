<?php

namespace VehicleManagement\ChartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class MainController extends Controller {
    
    public function indexAction() {
        return $this->render('VehicleManagementChartBundle:Main:index.html.twig');
    }
}
