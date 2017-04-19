<?php

namespace TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etat
 *
 * @ORM\Table(name="etat")
 * @ORM\Entity(repositoryClass="TestBundle\Repository\EtatRepository")
 */
class Etat
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string",length=50)
     * @ORM\Id
     */
    private $id;


    /**
     * @ORM\OneToMany(targetEntity="TestBundle\Entity\FicheFrais",mappedBy="etat")
     */
    private $fichefrai;



    public function __construct()
    {
        $this->fichefrai = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add fichefrai
     *
     * @param \TestBundle\Entity\FicheFrais $fichefrai
     *
     * @return Etat
     */
    public function addFichefrai(\TestBundle\Entity\FicheFrais $fichefrai)
    {
        $this->fichefrai[] = $fichefrai;

        return $this;
    }

    /**
     * Remove fichefrai
     *
     * @param \TestBundle\Entity\FicheFrais $fichefrai
     */
    public function removeFichefrai(\TestBundle\Entity\FicheFrais $fichefrai)
    {
        $this->fichefrai->removeElement($fichefrai);
    }

    /**
     * Get fichefrai
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFichefrai()
    {
        return $this->fichefrai;
    }

    /**
     * Set id
     *
     * @param string $id
     *
     * @return Etat
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
}
