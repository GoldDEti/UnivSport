<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EvenementRepository")
 */
class Evenement
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
     * @ORM\Column(name="titreEvt", type="string", length=255)
     */
    private $titreEvt;

    /**
     * @var int
     *
     * @ORM\Column(name="idSport", type="integer")
     */
    private $idSport;

    /**
     * @var int
     *
     * @ORM\Column(name="nombreEtu", type="integer")
     */
    private $nombreEtu;

    /**
     * @var int
     *
     * @ORM\Column(name="idCreateur", type="integer")
     */
    private $idCreateur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEvt", type="datetime")
     */
    private $dateEvt;


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
     * Set titreEvt
     *
     * @param string $titreEvt
     *
     * @return Evenement
     */
    public function setTitreEvt($titreEvt)
    {
        $this->titreEvt = $titreEvt;

        return $this;
    }

    /**
     * Get titreEvt
     *
     * @return string
     */
    public function getTitreEvt()
    {
        return $this->titreEvt;
    }

    /**
     * Set idSport
     *
     * @param integer $idSport
     *
     * @return Evenement
     */
    public function setIdSport($idSport)
    {
        $this->idSport = $idSport;

        return $this;
    }

    /**
     * Get idSport
     *
     * @return int
     */
    public function getIdSport()
    {
        return $this->idSport;
    }

    /**
     * Set nombreEtu
     *
     * @param integer $nombreEtu
     *
     * @return Evenement
     */
    public function setNombreEtu($nombreEtu)
    {
        $this->nombreEtu = $nombreEtu;

        return $this;
    }

    /**
     * Get nombreEtu
     *
     * @return int
     */
    public function getNombreEtu()
    {
        return $this->nombreEtu;
    }

    /**
     * Set idCreateur
     *
     * @param integer $idCreateur
     *
     * @return Evenement
     */
    public function setIdCreateur($idCreateur)
    {
        $this->idCreateur = $idCreateur;

        return $this;
    }

    /**
     * Get idCreateur
     *
     * @return int
     */
    public function getIdCreateur()
    {
        return $this->idCreateur;
    }

    /**
     * Set dateEvt
     *
     * @param \DateTime $dateEvt
     *
     * @return Evenement
     */
    public function setDateEvt($dateEvt)
    {
        $this->dateEvt = $dateEvt;

        return $this;
    }

    /**
     * Get dateEvt
     *
     * @return \DateTime
     */
    public function getDateEvt()
    {
        return $this->dateEvt;
    }
}

