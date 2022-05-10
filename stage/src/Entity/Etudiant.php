<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EtudiantRepository::class)
 */
class Etudiant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="integer")
     */
    private $nce;

    /**
     * @ORM\ManyToOne(targetEntity=Soutenance::class)
     */
    private $soutenances;

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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNce(): ?int
    {
        return $this->nce;
    }

    public function setNce(int $nce): self
    {
        $this->nce = $nce;

        return $this;
    }

    public function getSoutenances(): ?Soutenance
    {
        return $this->soutenances;
    }

    public function setSoutenances(?Soutenance $soutenances): self
    {
        $this->soutenances = $soutenances;

        return $this;
    }
}
