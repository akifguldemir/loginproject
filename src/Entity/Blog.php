<?php

namespace App\Entity;

use App\Repository\BlogRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Knp\DoctrineBehaviors\Contract\Entity\TranslatableInterface;
use Knp\DoctrineBehaviors\Model\Translatable\TranslatableTrait;




/**
 * @ORM\Entity
 * @Vich\Uploadable
 */


class Blog implements TranslatableInterface 
{
    use TranslatableTrait;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    
    /**
     * @Vich\UploadableField(mapping="blog", fileNameProperty="image")
     * @var File
     */

     private $imageFile;
    


    public function getId(): ?int
    {
        return $this->id;
    }

    /** 
     * @return string|null
    */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /** 
     * @param string|null $image
     * @return $this
    */
    public function setImage(?string $image):self
    {
        $this->image= $image;
        return $this;
    }

    /**
     * @return File|null
     */
    public function getImageFile(): ? File
    {
        return $this->imageFile;
    }

    /**
     * @return File|null $imageFile
     */
    public function setImageFile(?File $imageFile= null)
    {
        $this->imageFile= $imageFile;
    }

}
