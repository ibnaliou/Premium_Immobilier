<?php

namespace PI\Premium_ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Procontrat
 *
 * @ORM\Table(name="procontrat")
 * @ORM\Entity(repositoryClass="PI\Premium_ImmobilierBundle\Repository\ProcontratRepository")
 */
class Procontrat
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateContrat", type="datetime")
     */
    private $dateContrat;

    /**
     * @var int
     *
     * @ORM\Column(name="caution", type="integer")
     */
    private $caution;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=255)
     */
    private $duree;


    
      /**
   
      * @ORM\OneToOne(targetEntity="PI\Premium_ImmobilierBundle\Entity\Probien")
   
      */
   
      private $bien;



    /**
      * @ORM\OneToOne(targetEntity="PI\Premium_ImmobilierBundle\Entity\Proprietaire")
   
      */
   
      private $proprietaire;



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
     * Set dateContrat
     *
     * @param \DateTime $dateContrat
     *
     * @return Procontrat
     */
    public function setDateContrat($dateContrat)
    {
        $this->dateContrat = $dateContrat;

        return $this;
    }

    /**
     * Get dateContrat
     *
     * @return \DateTime
     */
    public function getDateContrat()
    {
        return $this->dateContrat;
    }

    /**
     * Set caution
     *
     * @param integer $caution
     *
     * @return Procontrat
     */
    public function setCaution($caution)
    {
        $this->caution = $caution;

        return $this;
    }

    /**
     * Get caution
     *
     * @return int
     */
    public function getCaution()
    {
        return $this->caution;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return Procontrat
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
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

      /**
       * Get the value of proprietaire
       */ 
      public function getProprietaire()
      {
            return $this->proprietaire;
      }

      /**
       * Set the value of proprietaire
       *
       * @return  self
       */ 
      public function setProprietaire($proprietaire)
      {
            $this->proprietaire = $proprietaire;

            return $this;
      }
}

