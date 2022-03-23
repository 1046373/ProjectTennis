<?php

namespace App\Entity;

use App\Repository\AanmeldingenRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AanmeldingenRepository::class)]
class Aanmeldingen
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $SpelerID;

    #[ORM\Column(type: 'integer')]
    private $ToernooiID;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSpelerID(): ?int
    {
        return $this->SpelerID;
    }

    public function setSpelerID(int $SpelerID): self
    {
        $this->SpelerID = $SpelerID;

        return $this;
    }

    public function getToernooiID(): ?int
    {
        return $this->ToernooiID;
    }

    public function setToernooiID(int $ToernooiID): self
    {
        $this->ToernooiID = $ToernooiID;

        return $this;
    }
}
