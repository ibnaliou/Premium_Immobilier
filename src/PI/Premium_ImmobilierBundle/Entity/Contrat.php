<?php

namespace PI\Premium_ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat.
 *
 * @ORM\Table(name="contrat")
 * @ORM\Entity(repositoryClass="PI\Premium_ImmobilierBundle\Repository\ContratRepository")
 */
class Contrat
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
     * @ORM\Column(name="dateContrat", type="date")
     */
    private $dateContrat;

    /**
     * @var string
     *
     * @ORM\Column(name="caution", type="string", length=30)
     */
    private $caution;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=30)
     */
    private $duree;

    /**
     * @ORM\OneToOne(targetEntity="PI\Premium_ImmobilierBundle\Entity\Client")
     */
    private $client;

    /**
     * @ORM\OneToOne(targetEntity="PI\Premium_ImmobilierBundle\Entity\Bien")
     */
    private $bien;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateContrat.
     *
     * @param \DateTime $dateContrat
     *
     * @return Contrat
     */
    public function setDateContrat($dateContrat)
    {
        $this->dateContrat = $dateContrat;

        return $this;
    }

    /**
     * Get dateContrat.
     *
     * @return \DateTime
     */
    public function getDateContrat()
    {
        return $this->dateContrat;
    }

    /**
     * Set caution.
     *
     * @param string $caution
     *
     * @return Contrat
     */
    public function setCaution($caution)
    {
        $this->caution = $caution;

        return $this;
    }

    /**
     * Get caution.
     *
     * @return string
     */
    public function getCaution()
    {
        return $this->caution;
    }

    /**
     * Set duree.
     *
     * @param string $duree
     *
     * @return Contrat
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree.
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set client.
     *
     * @param \PI\Premium_ImmobilierBundle\Entity\Client $client
     *
     * @return Contrat
     */
    public function setClient(\PI\Premium_ImmobilierBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client.
     *
     * @return \PI\Premium_ImmobilierBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set bien.
     *
     * @param \PI\Premium_ImmobilierBundle\Entity\Bien $bien
     *
     * @return Contrat
     */
    public function setBien(\PI\Premium_ImmobilierBundle\Entity\Bien $bien = null)
    {
        $this->bien = $bien;

        return $this;
    }

    /**
     * Get bien.
     *
     * @return \PI\Premium_ImmobilierBundle\Entity\Bien
     */
    public function getBien()
    {
        return $this->bien;
    }
}