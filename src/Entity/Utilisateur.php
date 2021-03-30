<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Table(name="im2021_utilisateurs", options={"comment"="Table des utilisateurs du site"})
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 * @UniqueEntity(
 *     fields="login",
 *     message="Ce login existe déjà."
 * )
 */
class Utilisateur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="pk", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="identifiant", type="string", length=30, unique=true, options={"comment"="sert de login (doit être unique)"})
     */
    private $login;

    /**
     * @ORM\Column(name="motdepasse", type="string", length=64, options={"comment"="mot de passe crypté : il faut une taille assez grande pour ne pas le tronquer"})
     */
    private $motDePasse;

    /**
     * @ORM\Column(type="string", length=30, nullable=true, options={"default"=null})
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=30, nullable=true, options={"default"=null})
     */
    private $prenom;

    /**
     * @ORM\Column(type="date", nullable=true, options={"default"=null})
     */
    private $anniversaire;

    /**
     * @ORM\Column(name="isadmin", type="boolean", options={"default"=false, "comment"="type booléen"})
     */
    private $isAdmin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->motDePasse;
    }

    public function setMotDePasse(string $motDePasse): self
    {
        $this->motDePasse = sha1($motDePasse);

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAnniversaire(): ?\DateTimeInterface
    {
        return $this->anniversaire;
    }

    public function setAnniversaire(?\DateTimeInterface $anniversaire): self
    {
        $this->anniversaire = $anniversaire;

        return $this;
    }

    public function getIsAdmin(): ?bool
    {
        return $this->isAdmin;
    }

    public function setIsAdmin(bool $isAdmin): self
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * Utilisateur constructor.
     */
    public function __construct()
    {
        $this->nom = null;
        $this->prenom = null;
        $this->anniversaire = null;
        $this->isAdmin = false;
    }
}
