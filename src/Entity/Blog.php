<?php

namespace App\Entity;

use App\Repository\BlogRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @ORM\Entity
 * @Vich\Uploadable
 */


class Blog
{
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
    

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $slug;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
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

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }


    




}
