<?php

namespace PI\Premium_ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proreservation
 *
 * @ORM\Table(name="proreservation")
 * @ORM\Entity(repositoryClass="PI\Premium_ImmobilierBundle\Repository\ProreservationRepository")
 */
class Proreservation
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
     * @ORM\Column(name="dateReservation", type="datetime")
     */
    private $dateReservation;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;
    

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
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     *
     * @return Proreservation
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Proreservation
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
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

