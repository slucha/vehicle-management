<?php

namespace VehicleManagement\ManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VehicleManagement\ManagementBundle\Entity\Servicing
 *
 * @ORM\Table(name="servicing")
 * @ORM\Entity(repositoryClass="VehicleManagement\ManagementBundle\Entity\ServicingRepository")
 */
class Servicing
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var datetime $date
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var float $price
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var string $comment
     *
     * @ORM\Column(name="comment", type="string", length=255)
     */
    private $comment;

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
     * Set date
     *
     * @param datetime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return datetime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set price
     *
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set comment
     *
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set km
     *
     * @param integer $km
     */
    public function setKm($km)
    {
        $this->km = $km;
    }

    /**
     * Get km
     *
     * @return integer 
     */
    public function getKm()
    {
        return $this->km;
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