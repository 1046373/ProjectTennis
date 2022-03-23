<?php

namespace App\Entity;

use App\Repository\WedstrijdenRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WedstrijdenRepository::class)]
class Wedstrijden
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $ToernooiID;

    #[ORM\Column(type: 'integer')]
    private $Ronde;

    #[ORM\Column(type: 'integer')]
    private $Speler1ID;

    #[ORM\Column(type: 'integer')]
    private $Speler2ID;

    #[ORM\Column(type: 'integer')]
    private $Score1;

    #[ORM\Column(type: 'integer')]
    private $Score2;

    #[ORM\Column(type: 'integer')]
    private $WinnaarID;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getToernooiID(): ?string
    {
        return $this->ToernooiID;
    }

    public function setToernooiID(string $ToernooiID): self
    {
        $this->ToernooiID = $ToernooiID;

        return $this;
    }

    public function getRonde(): ?int
    {
        return $this->Ronde;
    }

    public function setRonde(int $Ronde): self
    {
        $this->Ronde = $Ronde;

        return $this;
    }

    public function getSpeler1ID(): ?int
    {
        return $this->Speler1ID;
    }

    public function setSpeler1ID(int $Speler1ID): self
    {
        $this->Speler1ID = $Speler1ID;

        return $this;
    }

    public function getSpeler2ID(): ?int
    {
        return $this->Speler2ID;
    }

    public function setSpeler2ID(int $Speler2ID): self
    {
        $this->Speler2ID = $Speler2ID;

        return $this;
    }

    public function getScore1(): ?int
    {
        return $this->Score1;
    }

    public function setScore1(int $Score1): self
    {
        $this->Score1 = $Score1;

        return $this;
    }

    public function getScore2(): ?int
    {
        return $this->Score2;
    }

    public function setScore2(int $Score2): self
    {
        $this->Score2 = $Score2;

        return $this;
    }

    public function getWinnaarID(): ?int
    {
        return $this->WinnaarID;
    }

    public function setWinnaarID(int $WinnaarID): self
    {
        $this->WinnaarID = $WinnaarID;

        return $this;
    }
}
