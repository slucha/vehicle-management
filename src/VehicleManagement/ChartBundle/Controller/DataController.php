<?php

namespace VehicleManagement\ChartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;


class DataController extends Controller {

	public function retrieveAction($year) {
		$repo = $this->getDoctrine()->getRepository("VehicleManagementManagementBundle:Refuel");
		$user = $this->container->get('security.context')->getToken()->getUser();
		$amounts = $repo->getRefuelCostPerMonth($user,$year);
		
		//$encoder = new XmlEncoder();
		$data = [0,0,0,0,0,0,0,0,0,0,0,0];
		$tooltips =  [0,0,0,0,0,0,0,0,0,0,0,0];
		$accrueddRefuel = [0,0,0,0,0,0,0,0,0,0,0,0];
		$accruedRefuelTips =  [0,0,0,0,0,0,0,0,0,0,0,0];
		
		foreach ($amounts as $amount) {
			//var_dump($amount->getDate()->format('m'));
			$i = (int) $amount->getDate()->format('m');
			$data[$i-1] = $amount->getPrice();	
			$tooltips[$i-1] = "" .$amount->getPrice();
			if($i == 1) {
				$accrueddRefuel[$i-1] = $amount->getPrice();
				$accruedRefuelTips[$i-1] = "".$amount->getPrice();
			} else {
				$accrueddRefuel[$i-1] = $amount->getPrice() + 	$accrueddRefuel[$i-2];
				$accruedRefuelTips[$i-1] = $amount->getPrice() + $accrueddRefuel[$i-2] ."";	
			}
			
		}
		//$amount = array
		$toEncode = array("refuel cost"=> $data,"accrued refuel cost"=>$accrueddRefuel
				//,"tooltips"=>$tooltips,"accruedRefuel"=>$accrueddRefuel, 'accruedRefuelTips'=>$accruedRefuelTips
				);
		//$var = array("toto","titi","tata");
		//$xml = $encoder->encode($r, 'xml');
		//var_dump($r);
		//$serializer = new Serializer()
		//$response = new Response();
		//$response->headers->set('Content-Type', 'application/xml');
		
		
		//$serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new JsonEncoder()));
		//$json = $serializer->serialize($var, 'json');
		$json = json_encode($toEncode);
		$response = new Response($json);
		//$response->headers->set('Content-Type', 'application/json');
		//return $this->render('VehicleManagementChartBundle:Main:data.xml.twig',array('res'=> $r),$response);

		return $response;
	}
}


