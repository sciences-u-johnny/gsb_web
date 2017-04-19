<?php

namespace TestBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\VarDumper\Cloner\Data;
use Symfony\Component\Validator\Constraints as Assert;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Visiteur
 *
 * @ORM\Table(name="visiteur")
 * @ORM\Entity(repositoryClass="TestBundle\Repository\VisiteurRepository")
 */
class Visiteur extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=50,nullable=true)
     * @Assert\NotBlank()
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=50,nullable=true)
     * @Assert\NotBlank()
     *
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=50,nullable=true)
     * @Assert\NotBlank()
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=50,nullable=true)
     * @Assert\NotBlank()
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="CP", type="string", length=5,nullable=true)
     * @Assert\NotBlank()
     */
    private $cP;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateEmbauche", type="date",nullable=true)
     *
     */
    private $dateEmbauche;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCreation", type="datetime",nullable=true)
     *
     */

    private $DateCreation;

    /**
     * @ORM\OneToMany(targetEntity="TestBundle\Entity\FicheFrais",mappedBy="visiteur",cascade={"remove","persist"})
     */
    private $ficheFrai;



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
     * Set nom
     *
     * @param string $nom
     *
     * @return Visiteur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Visiteur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Visiteur
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Visiteur
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set cP
     *
     * @param string $cP
     *
     * @return Visiteur
     */
    public function setCP($cP)
    {
        $this->cP = $cP;

        return $this;
    }

    /**
     * Get cP
     *
     * @return string
     */
    public function getCP()
    {
        return $this->cP;
    }

    /**
     * Set dateEmbauche
     *
     * @param \DateTime $dateEmbauche
     *
     * @return Visiteur
     */
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    /**
     * Get dateEmbauche
     *
     * @return \DateTime
     */
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }




    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->DateCreation = new \DateTime('now');
        $this->dateEmbauche = new \DateTime('now');
        $this->ficheFrais = new \Doctrine\Common\Collections\ArrayCollection();
    }






    /**
     * Add ficheFrai
     *
     * @param \TestBundle\Entity\FicheFrais $ficheFrai
     *
     * @return Visiteur
     */
    public function addFicheFrai(\TestBundle\Entity\FicheFrais $ficheFrai)
    {
        $this->ficheFrai[] = $ficheFrai;

        return $this;
    }

    /**
     * Remove ficheFrai
     *
     * @param \TestBundle\Entity\FicheFrais $ficheFrai
     */
    public function removeFicheFrai(\TestBundle\Entity\FicheFrais $ficheFrai)
    {
        $this->ficheFrai->removeElement($ficheFrai);
    }

    /**
     * Get ficheFrai
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFicheFrai()
    {
        return $this->ficheFrai;
    }



    /**
     * Set dateCreation
     *
     * @param string $dateCreation
     *
     * @return Visiteur
     */
    public function setDateCreation($dateCreation)
    {
        $this->DateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return string
     */
    public function getDateCreation()
    {
        return $this->DateCreation;
    }
}
