<?php

namespace App\Entity;

use App\Repository\SpelersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SpelersRepository::class)]
class Spelers
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Voornaam;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Tussenvoegsels;

    #[ORM\Column(type: 'string', length: 255)]
    private $Achternaam;

    #[ORM\Column(type: 'string', length: 255)]
    private $Schoolnaam;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVoornaam(): ?string
    {
        return $this->Voornaam;
    }

    public function setVoornaam(string $Voornaam): self
    {
        $this->Voornaam = $Voornaam;

        return $this;
    }

    public function getTussenvoegsels(): ?string
    {
        return $this->Tussenvoegsels;
    }

    public function setTussenvoegsels(?string $Tussenvoegsels): self
    {
        $this->Tussenvoegsels = $Tussenvoegsels;

        return $this;
    }

    public function getAchternaam(): ?string
    {
        return $this->Achternaam;
    }

    public function setAchternaam(string $Achternaam): self
    {
        $this->Achternaam = $Achternaam;

        return $this;
    }

    public function getSchoolnaam(): ?string
    {
        return $this->Schoolnaam;
    }

    public function setSchoolnaam(string $Schoolnaam): self
    {
        $this->Schoolnaam = $Schoolnaam;

        return $this;
    }

}
