<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MotionsRepository")
 */
class Motions
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descrpt;

    /**
     * @ORM\Column(type="date")
     */
    private $cr_date;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $full_name;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $email;

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

    public function getDescrpt(): ?string
    {
        return $this->descrpt;
    }

    public function setDescrpt(?string $descrpt): self
    {
        $this->descrpt = $descrpt;

        return $this;
    }
    public function getcr_date(): ?\DateTimeInterface
    {
        return $this->cr_date;
    }

    public function setcr_date(\DateTimeInterface $cr_date): self

    {
        $this->cr_date = $cr_date;

        return $this;
    }

    public function getfull_name(): ?string
    {
        return $this->full_name;
    }

    public function setfull_name(string $full_name): self
    {
        $this->full_name = $full_name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
