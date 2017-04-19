<?php

namespace TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FraisForfais
 *
 * @ORM\Table(name="frais_forfais")
 * @ORM\Entity(repositoryClass="TestBundle\Repository\FraisForfaisRepository")
 */
class FraisForfais
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=50)
     * @ORM\Id
     *
     */
    private $id;



    /**
     * @var int
     *
     * @ORM\Column(name="Montant", type="integer")
     */
    private $montant;

    /**
     * @ORM\OneToMany(targetEntity="TestBundle\Entity\LigneForfais",mappedBy="FraisForfais",cascade={"persist"})
     */
    private $LigneFForFais;



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->LigneForFais = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param string $id
     *
     * @return FraisForfais
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     *
     * @return FraisForfais
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return integer
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Add ligneForFai
     *
     * @param \TestBundle\Entity\LigneForfais $ligneForFai
     *
     * @return FraisForfais
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
     * Add ligneFForFai
     *
     * @param \TestBundle\Entity\LigneForfais $ligneFForFai
     *
     * @return FraisForfais
     */
    public function addLigneFForFai(\TestBundle\Entity\LigneForfais $ligneFForFai)
    {
        $this->LigneFForFais[] = $ligneFForFai;

        return $this;
    }

    /**
     * Remove ligneFForFai
     *
     * @param \TestBundle\Entity\LigneForfais $ligneFForFai
     */
    public function removeLigneFForFai(\TestBundle\Entity\LigneForfais $ligneFForFai)
    {
        $this->LigneFForFais->removeElement($ligneFForFai);
    }

    /**
     * Get ligneFForFais
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLigneFForFais()
    {
        return $this->LigneFForFais;
    }
}
