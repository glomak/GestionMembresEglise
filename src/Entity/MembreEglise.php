<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\MembreEgliseRepository;
use Symfony\Component\Validator\Constraints as Assert; 

/**
 * @ORM\Entity(repositoryClass=MembreEgliseRepository::class)
 */
class MembreEglise
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
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
    private $postnom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fonctionAssumee;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sexe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EtatCivil;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Length(min="9",minMessage="un numero valide doit avoir au moins 9 chiffres")
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseAvenue;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseNumero;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseQuartier;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseCommune;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateEnregistrement;

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

    public function getPostnom(): ?string
    {
        return $this->postnom;
    }

    public function setPostnom(string $postnom): self
    {
        $this->postnom = $postnom;

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

    public function getFonctionAssumee(): ?string
    {
        return $this->fonctionAssumee;
    }

    public function setFonctionAssumee(string $fonctionAssumee): self
    {
        $this->fonctionAssumee = $fonctionAssumee;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getEtatCivil(): ?string
    {
        return $this->EtatCivil;
    }

    public function setEtatCivil(string $EtatCivil): self
    {
        $this->EtatCivil = $EtatCivil;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(?int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getAdresseAvenue(): ?string
    {
        return $this->adresseAvenue;
    }

    public function setAdresseAvenue(string $adresseAvenue): self
    {
        $this->adresseAvenue = $adresseAvenue;

        return $this;
    }

    public function getAdresseNumero(): ?string
    {
        return $this->adresseNumero;
    }

    public function setAdresseNumero(string $adresseNumero): self
    {
        $this->adresseNumero = $adresseNumero;

        return $this;
    }

    public function getAdresseQuartier(): ?string
    {
        return $this->adresseQuartier;
    }

    public function setAdresseQuartier(string $adresseQuartier): self
    {
        $this->adresseQuartier = $adresseQuartier;

        return $this;
    }

    public function getAdresseCommune(): ?string
    {
        return $this->adresseCommune;
    }

    public function setAdresseCommune(string $adresseCommune): self
    {
        $this->adresseCommune = $adresseCommune;

        return $this;
    }

    public function getDateEnregistrement(): ?\DateTimeInterface
    {
        return $this->dateEnregistrement;
    }

    public function setDateEnregistrement(\DateTimeInterface $dateEnregistrement): self
    {
        $this->dateEnregistrement = $dateEnregistrement;

        return $this;
    }
}
