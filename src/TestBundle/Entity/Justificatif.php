<?php

namespace TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Justificatif
 *
 * @ORM\Table(name="justificatif")
 * @ORM\Entity(repositoryClass="TestBundle\Repository\JustificatifRepository")
 */
class Justificatif
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="URL",type="string", length=200,nullable=false)
     *
     * @Assert\NotBlank(message="Please, upload the product brochure as a PDF file.")
     * @Assert\File(mimeTypes={ "application/pdf" })
     */
    private $URL;

    /**
     * @var File
     */
    private $File;

    /**
     * @ORM\ManyToOne(targetEntity="TestBundle\Entity\FicheFrais",inversedBy="justificatif")
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
     * set id
     *
     * @param int $id
     *
     * @return int
     */
    public function setId($ID)
    {
       $this->id = $ID;

        return $this;
    }







    /**
     * Set fichefrai
     *
     * @param \TestBundle\Entity\FicheFrais $fichefrai
     *
     * @return Justificatif
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
     * Set File
     *
     * @param File $File
     *
     * @return Justificatif
     */
    public function setFile($File)
    {
        $this->File = $File;

        return $this;
    }

    /**
     * Get File
     *
     * @return File
     */
    public function getFile()
    {
        return $this->File;
    }



    /**
     * Set uRL
     *
     * @param string $uRL
     *
     * @return Justificatif
     */
    public function setURL($uRL)
    {
        $this->URL = $uRL;

        return $this;
    }

    /**
     * Get uRL
     *
     * @return string
     */
    public function getURL()
    {
        return $this->URL;
    }
}
