<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PortfolioRepository;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: PortfolioRepository::class)]
#[Vich\Uploadable] 
class Portfolio
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $title;

    #[ORM\Column(type: 'string', length: 255)]
    private $image;

    #[Vich\UploadableField(mapping: 'portfolio', fileNameProperty: 'image')]
    private ?File $imageFile = null;

/*     #[ORM\Column(type: 'datetime', nullable:true)]
    private ?\DateTimeInterface $updatedAt = null; */

    #[ORM\Column(type: 'datetime')]
    private $date;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $link;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $description;

    #[ORM\ManyToOne(targetEntity: Category::class, inversedBy: 'portfolios')]
    private $category;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $theme;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $stack;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function setImageFile(File $image = null): self
    {        
        $this->imageFile = $image;
        if ($image) {
            $this->updatedAt = new DateTime('now');
          }
        return $this;
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;

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

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getTheme(): ?string
    {
        return $this->theme;
    }

    public function setTheme(?string $theme): self
    {
        $this->theme = $theme;

        return $this;
    }

    public function getStack(): ?string
    {
        return $this->stack;
    }

    public function setStack(?string $stack): self
    {
        $this->stack = $stack;

        return $this;
    }
}
