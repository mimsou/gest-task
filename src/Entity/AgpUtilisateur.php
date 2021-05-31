<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * AgpUtilisateur
 *
 * @ORM\Table(name="agp_utilisateur")
 * @ORM\Entity
 * @ApiResource(
 *     normalizationContext={"groups"={"user:read"}},
 *     denormalizationContext={"groups"={"user:write"}}
 * )
 */
class AgpUtilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="agp_utilisateur_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $agpUtilisateurId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agp_utilisateur_nom", type="string", length=45, nullable=true)
     * @Groups({"user:read", "user:write"})
     */
    private $agpUtilisateurNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agp_utilisateur_adress", type="string", length=100, nullable=true)
     * @Groups({"user:read", "user:write"})
     */
    private $agpUtilisateurAdress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agp_utilisateur_prenom", type="string", length=45, nullable=true)
     * @Groups({"user:read", "user:write"})
     */
    private $agpUtilisateurPrenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agp_utilisateur_login", type="string", length=45, nullable=true)
     * @Groups({"user:read", "user:write"})
     */
    private $agpUtilisateurLogin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agp_utilisateur_email", type="string", length=45, nullable=true)
     * @Groups({"user:read", "user:write"})
     */
    private $agpUtilisateurEmail;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AgpProjet", inversedBy="agpUtilisateurAgpUtilisateur")
     * @ORM\JoinTable(name="agp_utilisateur_has_agp_projet",
     *   joinColumns={
     *     @ORM\JoinColumn(name="agp_utilisateur_agp_utilisateur_id", referencedColumnName="agp_utilisateur_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="agp_projet_agp_projet_id", referencedColumnName="agp_projet_id")
     *   }
     * )
     */
    private $agpProjetAgpProjet;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->agpProjetAgpProjet = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getAgpUtilisateurId(): ?int
    {
        return $this->agpUtilisateurId;
    }

    public function getAgpUtilisateurNom(): ?string
    {
        return $this->agpUtilisateurNom;
    }

    public function setAgpUtilisateurNom(?string $agpUtilisateurNom): self
    {
        $this->agpUtilisateurNom = $agpUtilisateurNom;

        return $this;
    }

    public function getAgpUtilisateurAdress(): ?string
    {
        return $this->agpUtilisateurAdress;
    }

    public function setAgpUtilisateurAdress(?string $agpUtilisateurAdress): self
    {
        $this->agpUtilisateurAdress = $agpUtilisateurAdress;

        return $this;
    }

    public function getAgpUtilisateurPrenom(): ?string
    {
        return $this->agpUtilisateurPrenom;
    }

    public function setAgpUtilisateurPrenom(?string $agpUtilisateurPrenom): self
    {
        $this->agpUtilisateurPrenom = $agpUtilisateurPrenom;

        return $this;
    }

    public function getAgpUtilisateurLogin(): ?string
    {
        return $this->agpUtilisateurLogin;
    }

    public function setAgpUtilisateurLogin(?string $agpUtilisateurLogin): self
    {
        $this->agpUtilisateurLogin = $agpUtilisateurLogin;

        return $this;
    }

    public function getAgpUtilisateurEmail(): ?string
    {
        return $this->agpUtilisateurEmail;
    }

    public function setAgpUtilisateurEmail(?string $agpUtilisateurEmail): self
    {
        $this->agpUtilisateurEmail = $agpUtilisateurEmail;

        return $this;
    }

    /**
     * @return Collection|AgpProjet[]
     */
    public function getAgpProjetAgpProjet(): Collection
    {
        return $this->agpProjetAgpProjet;
    }

    public function addAgpProjetAgpProjet(AgpProjet $agpProjetAgpProjet): self
    {
        if (!$this->agpProjetAgpProjet->contains($agpProjetAgpProjet)) {
            $this->agpProjetAgpProjet[] = $agpProjetAgpProjet;
        }

        return $this;
    }

    public function removeAgpProjetAgpProjet(AgpProjet $agpProjetAgpProjet): self
    {
        $this->agpProjetAgpProjet->removeElement($agpProjetAgpProjet);

        return $this;
    }

}
