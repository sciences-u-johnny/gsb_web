<?php

namespace TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FicheFrais
 *
 * @ORM\Table(name="fiche_frais")
 * @ORM\Entity(repositoryClass="TestBundle\Repository\FicheFraisRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class FicheFrais
{
    /**
     * @var \int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="NombreJustificatif", type="integer")
     */
    private $nombreJustificatif;

    /**
     * @var float
     *
     * @ORM\Column(name="MontantValide", type="float")
     */
    private $montantValide;

    /**
     * @ORM\Column(name="DateModif", type="datetime")
     */
    private $dateModif;


    /**
     * @var \Date
     *
     * @ORM\Column(name="Mois", type="date")
     */
    private $Mois;

    /**
     * @var \Date
     *
     * @ORM\Column(name="DateCreation", type="date")
     */
    private $dateCreation;

    /**
     * @ORM\OneToMany(targetEntity="TestBundle\Entity\Justificatif",mappedBy="fichefrai",cascade={"persist","remove"})
     */
    private $justificatif;

    /**
     *
     * @ORM\ManyToOne(targetEntity="TestBundle\Entity\Visiteur",inversedBy="ficheFrai", cascade={"persist"})
     *
     */
    private $visiteur;


    /**
     * @ORM\ManyToOne(targetEntity="TestBundle\Entity\Etat",inversedBy="fichefrai")
     */
    private $etat;

    /**
     * @ORM\OneToMany(targetEntity="TestBundle\Entity\LigneForfais",mappedBy="fichefrai", cascade={"persist","remove"})
     */
    private $LigneForFais;

    /**
     * @ORM\OneToMany(targetEntity="TestBundle\Entity\LigneHorForfait",mappedBy="fichefrai", cascade={"persist","remove"})
     */
    private $LigneHorForFait;




    /**
     * Set nombreJustificatif
     *
     * @param integer $nombreJustificatif
     *
     * @return FicheFrais
     */
    public function setNombreJustificatif($nombreJustificatif)
    {
        $this->nombreJustificatif = $nombreJustificatif;

        return $this;
    }

    /**
     * Get nombreJustificatif
     *
     * @return int
     */
    public function getNombreJustificatif()
    {
        return $this->nombreJustificatif;
    }







    /**
     * Constructor
     */

    public function __construct($unetat,$unVisiteurID,$mois)
    {
        $this->Mois = $mois;
        $this->visiteur = $unVisiteurID;
        $this->etat = $unetat;
        $this->montantValide = 0;
        $this->nombreJustificatif = 0;
        $this->dateCreation = new \DateTime('now');
        $this->dateModif = new \DateTime('now');
        $this->justificatif = new \Doctrine\Common\Collections\ArrayCollection();
    }



    /**
     * Add justificatif
     *
     * @param \TestBundle\Entity\Justificatif $justificatif
     *
     * @return FicheFrais
     */
    public function addJustificatif(\TestBundle\Entity\Justificatif $justificatif)
    {
        $this->justificatif[] = $justificatif;

        return $this;
    }

    /**
     * Remove justificatif
     *
     * @param \TestBundle\Entity\Justificatif $justificatif
     */
    public function removeJustificatif(\TestBundle\Entity\Justificatif $justificatif)
    {
        $this->justificatif->removeElement($justificatif);
    }

    /**
     * Get justificatif
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJustificatif()
    {
        return $this->justificatif;
    }


    /**
     * Set etat
     *
     * @param \TestBundle\Entity\Etat $etat
     *
     * @return FicheFrais
     */
    public function setEtat(\TestBundle\Entity\Etat $etat = null)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return \TestBundle\Entity\Etat
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Add ligneForFai
     *
     * @param \TestBundle\Entity\LigneForfais $ligneForFai
     *
     * @return FicheFrais
     */
    public function addLigneForFai(\TestBundle\Entity\LigneForfais $ligneForFai)
    {
        $this->LigneForFais[] = $ligneForFai;

        return $this;
    }

    /**
     * Remove ligneForFai
     *
     * @param \TestBundle\Entity\LigneForfais $ligneForFai
     */
    public function removeLigneForFai(\TestBundle\Entity\LigneForfais $ligneForFai)
    {
        $this->LigneForFais->removeElement($ligneForFai);
    }

    /**
     * Get ligneForFais
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLigneForFais()
    {
        return $this->LigneForFais;
    }




    /**
     * Set visiteur
     *
     * @param \TestBundle\Entity\Visiteur $visiteur
     *
     * @return FicheFrais
     */
    public function setVisiteur(\TestBundle\Entity\Visiteur $visiteur)
    {
        $this->visiteur = $visiteur;

        return $this;
    }

    /**
     * Get visiteur
     *
     * @return \TestBundle\Entity\Visiteur
     */
    public function getVisiteur()
    {
        return $this->visiteur;
    }



    /**
     * Add ligneHorForFait
     *
     * @param \TestBundle\Entity\LigneHorForfait $ligneHorForFait
     *
     * @return FicheFrais
     */
    public function addLigneHorForFait(\TestBundle\Entity\LigneHorForfait $ligneHorForFait)
    {
        $this->LigneHorForFait[] = $ligneHorForFait;

        return $this;
    }

    /**
     * Remove ligneHorForFait
     *
     * @param \TestBundle\Entity\LigneHorForfait $ligneHorForFait
     */
    public function removeLigneHorForFait(\TestBundle\Entity\LigneHorForfait $ligneHorForFait)
    {
        $this->LigneHorForFait->removeElement($ligneHorForFait);
    }

    /**
     * Get ligneHorForFait
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLigneHorForFait()
    {
        return $this->LigneHorForFait;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return FicheFrais
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateModif
     *
     * @param \DateTime $dateModif
     *
     * @return FicheFrais
     */
    public function setDateModif($dateModif)
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    /**
     * Get dateModif
     *
     * @return \DateTime
     */
    public function getDateModif()
    {
        return $this->dateModif;
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
     * @ORM\PreUpdate
     */
    public function updateDate()
    {
        $this->setDateModif(new \Datetime());
    }




    /**
     * Set mois
     *
     * @param \DateTime $mois
     *
     * @return FicheFrais
     */
    public function setMois($mois)
    {
        $this->Mois = $mois;

        return $this;
    }

    /**
     * Get mois
     *
     * @return \DateTime
     */
    public function getMois()
    {
        return $this->Mois;
    }



    /**
     * Set montantValide
     *
     * @param float $montantValide
     *
     * @return FicheFrais
     */
    public function setMontantValide($montantValide)
    {
        $this->montantValide = $montantValide;

        return $this;
    }

    /**
     * Get montantValide
     *
     * @return float
     */
    public function getMontantValide()
    {
        return $this->montantValide;
    }
}
