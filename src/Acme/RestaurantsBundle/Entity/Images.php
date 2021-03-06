<?php

namespace Acme\RestaurantsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Images
 *
 * @ORM\Table(name="images")
 * @ORM\Entity
 */
class Images
{   
    /**
    *  @ORM\Column(name="id", type="integer" )
    *  @ORM\GeneratedValue(strategy="IDENTITY")
    */
    
    private $id;
    /**
     * @var string
     *
     * @ORM\Column(name="images_link", type="text", nullable=false)
     */
    private $imagesLink;

    /**
     * @var string
     *
     * @ORM\Column(name="images_main", type="text" )
     */
    private $imagesMain;

    /**
     * @var integer
     *
     * @ORM\Column(name="images_id", type="text")
     * @ORM\OneToMany(targetEntity="Restaurantsbundle\Entity\Places")
     * @JoinColumn(name="places_id", referencedColumnName="placesId")
     */
    private $imagesId;
     /**
     * $var integer
     * 
     */
    private $placesId;
    
    /**
     * @ORM\ManyToOne(targetEntity="Places", inversedBy="images")
     * @ORM\JoinColumn(name="images_id", referencedColumnName="places_id")
     */
    protected $place;
    
    public function __construct() {
        $this->place = new ArrayCollection();
    }
    
    /**
     * Set imagesLink
     *
     * @param string $imagesLink
     * @return Images
     */
    public function setImagesLink($imagesLink)
    {
        $this->imagesLink = $imagesLink;
    
        return $this;
    }

    /**
     * Get imagesLink
     *
     * @return string 
     */
    public function getImagesLink()
    {
        return $this->imagesLink;
    }

    /**
     * Set imagesMain
     *
     * @param integer $imagesMain
     * @return Images
     */
    public function setImagesMain($imagesMain)
    {
        $this->imagesMain = $imagesMain;
    
        return $this;
    }

    /**
     * Get imagesMain
     *
     * @return integer 
     */
    public function getImagesMain()
    {
        return $this->imagesMain;
    }

    /**
     * Get imagesId
     *
     * @return integer 
     */
    public function getImagesId()
    {
        return $this->imagesId;
    }

    /**
     * Set imagesId
     *
     * @param string $imagesId
     * @return Images
     */
    public function setImagesId($imagesId)
    {
        $this->imagesId = $imagesId;
    
        return $this;
    }

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
     * @var string
     */
    private $placesName;


    /**
     * Set placesName
     *
     * @param string $placesName
     * @return Images
     */
    public function setPlacesName($placesName)
    {
        $this->placesName = $placesName;
    
        return $this;
    }

    /**
     * Get placesName
     *
     * @return string 
     */
    public function getPlacesName()
    {
        return $this->placesName;
    }
}