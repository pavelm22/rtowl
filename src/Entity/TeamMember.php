<?php

namespace App\Entity;

use App\Entity\Interface\TeamMemberInterface;
use App\Repository\TeamMemberRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TeamMemberRepository::class)]
class TeamMember implements TeamMemberInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Vorname = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(length: 255)]
    private ?string $Email = null;

    #[ORM\Column(length: 255)]
    private ?string $Position = null;

    #[ORM\ManyToOne(inversedBy: 'teamMembers')]
    private ?SubTeam $SubTeam = null;

    #[ORM\Column(length: 255)]
    private ?string $ImgPath = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVorname(): ?string
    {
        return $this->Vorname;
    }

    public function setVorname(string $Vorname): TeamMemberInterface
    {
        $this->Vorname = $Vorname;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): TeamMemberInterface
    {
        $this->Name = $Name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): TeamMemberInterface
    {
        $this->Email = $Email;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->Position;
    }

    public function setPosition(string $Position): TeamMemberInterface
    {
        $this->Position = $Position;

        return $this;
    }

    public function getSubTeam(): ?SubTeam
    {
        return $this->SubTeam;
    }

    public function setSubTeam(?SubTeam $SubTeam): TeamMemberInterface
    {
        $this->SubTeam = $SubTeam;

        return $this;
    }

    public function getImgPath(): ?string
    {
        return $this->ImgPath;
    }

    public function setImgPath(string $ImgPath): static
    {
        $this->ImgPath = $ImgPath;

        return $this;
    }
}