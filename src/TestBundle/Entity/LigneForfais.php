<?php

namespace TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Finder\Comparator\DateComparator;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * LigneForfais
 *
 * @ORM\Table(name="ligne_forfais")
 * @ORM\Entity(repositoryClass="TestBundle\Repository\LigneForfaisRepository")
 */
class LigneForfais
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
     * @var float
     *
     * @ORM\Column(name="Quantité", type="float")
     * @Assert\NotBlank()
     */
    private $quantite;


    /**
     * @ORM\ManyToOne(targetEntity="TestBundle\Entity\FicheFrais",inversedBy="LigneForFais")
     * @ORM\JoinColumn(name="FicheFrais_id",referencedColumnName="id")
     *
     */
    private $fichefrai;

    /**
     * @ORM\ManyToOne(targetEntity="TestBundle\Entity\FraisForfais",inversedBy="LigneFForFais",cascade={"persist"})
     *
     */
    private $FraisForfais;

    /**
     * @var \Date
     *
     * @ORM\Column(name="Date", type="date")
     * @Assert\Callback(methods={"testDateValidite"})
     *
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="Montant", type="float")
     * @Assert\NotBlank()
     */
    private $montant;

    /**
     * @var bool
     *
     * @ORM\Column(name="Valide", type="boolean")
     */
    private $valide;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->valide = false;
    }

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
     * Set fichefrai
     *
     * @param \TestBundle\Entity\FicheFrais $fichefrai
     *
     * @return LigneForfais
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return LigneForfais
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

    public function testDateValidite(ExecutionContext $context){
            $DateComp = new DateComparator($this->date->format('d-m-Y'));
            $DateComp->setOperator(">");
            $test=new \DateTime();
            $test->addadd(new \DateInterval('P1M'));
            if($DateComp->test($test->format('U'))) {
                $propertyPath = $context->getPropertyPath() . '.dateValidite';
                $context->setPropertyPath($propertyPath);
                $context->addViolation('Le frais hor forfais ne peut pas depssaer un an', array(), null);
            }


    }

    /**
     * Set fraisForfais
     *
     * @param \TestBundle\Entity\FraisForfais $fraisForfais
     *
     * @return LigneForfais
     */
    public function setFraisForfais(\TestBundle\Entity\FraisForfais $fraisForfais = null)
    {
        $this->FraisForfais = $fraisForfais;

        return $this;
    }

    /**
     * Get fraisForfais
     *
     * @return \TestBundle\Entity\FraisForfais
     */
    public function getFraisForfais()
    {
        return $this->FraisForfais;
    }

    /**
     * Set valide
     *
     * @param boolean $valide
     *
     * @return LigneForfais
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
     * @return LigneForfais
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

    /**
     * Set quantite
     *
     * @param float $quantite
     *
     * @return LigneForfais
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return float
     */
    public function getQuantite()
    {
        return $this->quantite;
    }
}
