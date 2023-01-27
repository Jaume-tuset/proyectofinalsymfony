<?php

namespace App\Entity;

use App\Repository\PeixRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PeixRepository::class)]
class Peix
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id;

    #[Assert\NotBlank]
    #[ORM\Column(length: 255)]
    private ?string $nom;

    #[Assert\NotBlank]
    #[ORM\Column(length: 255)]
    private ?string $nom_cientific;

    #[Assert\NotBlank]
    #[ORM\Column(length: 255)]
    private ?string $imatges;

    #[Assert\NotBlank]
    #[ORM\Column(type: Types::TEXT)]
    private ?string $informacio;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getNomCientific(): ?string
    {
        return $this->nom_cientific;
    }

    public function setNomCientific(string $nom_cientific): self
    {
        $this->nom_cientific = $nom_cientific;

        return $this;
    }

    public function getImatges(): ?string
    {
        return $this->imatges;
    }

    public function setImatges(string $imatges): self
    {
        $this->imatges = $imatges;

        return $this;
    }

    public function getInformacio(): ?string
    {
        return $this->informacio;
    }

    public function setInformacio(string $informacio): self
    {
        $this->informacio = $informacio;

        return $this;
    }
}
