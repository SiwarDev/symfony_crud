<?php

namespace App\Entity;

use App\Repository\SoutenanceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SoutenanceRepository::class)
 */
class Soutenance
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numjury;

    /**
     * @ORM\Column(type="date")
     */
    private $dateSoutenance;

    /**
     * @ORM\Column(type="float")
     */
    private $note;

    /**
     * @ORM\ManyToOne(targetEntity=Enseignant::class)
     * @ORM\JoinColumn(name="Matricule", referencedColumnName="id")
     */
    private $enseignants;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumjury(): ?int
    {
        return $this->numjury;
    }

    public function setNumjury(int $numjury): self
    {
        $this->numjury = $numjury;

        return $this;
    }

    public function getDateSoutenance(): ?\DateTimeInterface
    {
        return $this->dateSoutenance;
    }

    public function setDateSoutenance(\DateTimeInterface $dateSoutenance): self
    {
        $this->dateSoutenance = $dateSoutenance;

        return $this;
    }

    public function getNote(): ?float
    {
        return $this->note;
    }

    public function setNote(float $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getEnseignants(): ?Enseignant
    {
        return $this->enseignants;
    }

    public function setEnseignants(?Enseignant $enseignants): self
    {
        $this->enseignants = $enseignants;

        return $this;
    }
}
