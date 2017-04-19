<?php

namespace TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * LigneHorForfait
 *
 * @ORM\Table(name="ligne_hor_forfait")
 * @ORM\Entity(repositoryClass="TestBundle\Repository\LigneHorForfaitRepository")
 */
class LigneHorForfait
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
     * @ORM\Column(name="Date", type="date")
     */
    private $date;

    /**
     * @var bool
     *
     * @ORM\Column(name="Valide", type="boolean")
     */
    private $valide;

    /**
     * @var float
     *
     * @ORM\Column(name="Montant", type="float")
     * @Assert\NotBlank()
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="Libelle", type="string", length=50)
     * @Assert\NotBlank()
     *
     */
    private $libelle;

    /**
     * @ORM\ManyToOne(targetEntity="TestBundle\Entity\FicheFrais",inversedBy="LigneHorForFait")
     * @ORM\JoinColumn(name="FicheFrais_id",referencedColumnName="id")
     */
    private $fichefrai;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return LigneHorForfait
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }



    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return LigneHorForfait
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set fichefrai
     *
     * @param \TestBundle\Entity\FicheFrais $fichefrai
     *
     * @return LigneHorForfait
     */
    public function setFichefrai(\TestBundle\Entity\FicheFrais $fichefrai = null)
    {
        $this->fichefrai = $fichefrai;

        return $this;
    }

    /**
     * Get fichefrai
     *
     * @return \TestBundle\Entity\FicheFrais
     */
    public function getFichefrai()
    {
        return $this->fichefrai;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->valide = false;
    }

    /**
     * Set valide
     *
     * @param boolean $valide
     *
     * @return LigneHorForfait
     */
    public function setValide($valide)
    {
        $this->valide = $valide;

        return $this;
    }

    /**
     * Get valide
     *
     * @return boolean
     */
    public function getValide()
    {
        return $this->valide;
    }



    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return LigneHorForfait
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }
}
