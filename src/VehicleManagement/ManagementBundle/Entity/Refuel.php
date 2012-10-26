<?php

namespace VehicleManagement\ManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VehicleManagement\ManagementBundle\Entity\Refuel
 *
 * @ORM\Table(name="refuel")
 * @ORM\Entity(repositoryClass="VehicleManagement\ManagementBundle\Entity\RefuelRepository")
 */
class Refuel
{
	
	public function __construct()
	{
		$this->date = new \Datetime();
	}
	
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var date $date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var decimal $price
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;
    
    /**
     * @var integer $km
     *
     * @ORM\Column(name="km", type="integer")
     */
    private $km;
    
    /**
     * @ORM\ManyToOne(targetEntity="VehicleManagement\ManagementBundle\Entity\Vehicle")
     * @ORM\JoinColumn(nullable=false)
     */
    private $vehicle;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Get km
     *
     * @return km
     */
    public function getKm() {
    	return $this->km;
    }
    
    /**
     * Set km
     *
     * @param integer $km
     */
    public function setKm($km) {
    	$this->km = $km;
    }

    /**
     * Set date
     *
     * @param date $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return date 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set price
     *
     * @param decimal $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Get price
     *
     * @return decimal 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set vehicle
     *
     * @param VehicleManagement\VehicleBundle\Entity\Vehicle $vehicle
     */
    public function setVehicle(\VehicleManagement\ManagementBundle\Entity\Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    /**
     * Get vehicle
     *
     * @return VehicleManagement\VehicleBundle\Entity\Vehicle 
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }
}