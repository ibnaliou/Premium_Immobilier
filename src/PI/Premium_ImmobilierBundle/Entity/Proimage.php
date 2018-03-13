<?php

namespace PI\Premium_ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proimage
 *
 * @ORM\Table(name="proimage")
 * @ORM\Entity(repositoryClass="PI\Premium_ImmobilierBundle\Repository\ProimageRepository")
 */
class Proimage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="blob")
     */
    private $image;


     /**
     * @ORM\ManyToOne(targetEntity="PI\Premium_ImmobilierBundle\Entity\Probien", inversedBy="images")
     * @ORM\JoinColumn(nullable=false)
     */
    private $bien;
    


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Proimage
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Get the value of bien
     */ 
    public function getBien()
    {
        return $this->bien;
    }

    /**
     * Set the value of bien
     *
     * @return  self
     */ 
    public function setBien($bien)
    {
        $this->bien = $bien;

        return $this;
    }
}

