<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * AgpProjet
 *
 * @ORM\Table(name="agp_projet", indexes={@ORM\Index(name="fk_agp_projet_agp_etat1_idx", columns={"agp_projet_etat"})})
 * @ORM\Entity
 */
class AgpProjet
{
    /**
     * @var int
     *
     * @ORM\Column(name="agp_projet_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $agpProjetId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agp_projet_nom", type="string", length=45, nullable=true)
     */
    private $agpProjetNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agp_projet_description", type="string", length=254, nullable=true)
     */
    private $agpProjetDescription;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="agp_projet_date_creation", type="datetime", nullable=true)
     */
    private $agpProjetDateCreation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="agp_projet_date_debut", type="datetime", nullable=true)
     */
    private $agpProjetDateDebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="agp_projet_date_fin", type="datetime", nullable=true)
     */
    private $agpProjetDateFin;

    /**
     * @var \AgpEtat
     *
     * @ORM\ManyToOne(targetEntity="AgpEtat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agp_projet_etat", referencedColumnName="agp_etat_id")
     * })
     */
    private $agpProjetEtat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AgpCategories", mappedBy="agpProjetAgpProjet")
     */
    private $agpCategoriesAgpCategories;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AgpTaches", inversedBy="agpProjetAgpProjet")
     * @ORM\JoinTable(name="agp_projet_has_agp_taches",
     *   joinColumns={
     *     @ORM\JoinColumn(name="agp_projet_agp_projet_id", referencedColumnName="agp_projet_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="agp_taches_agp_taches_id", referencedColumnName="agp_taches_id")
     *   }
     * )
     */
    private $agpTachesAgpTaches;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AgpUtilisateur", mappedBy="agpProjetAgpProjet")
     */
    private $agpUtilisateurAgpUtilisateur;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->agpCategoriesAgpCategories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->agpTachesAgpTaches = new \Doctrine\Common\Collections\ArrayCollection();
        $this->agpUtilisateurAgpUtilisateur = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getAgpProjetId(): ?int
    {
        return $this->agpProjetId;
    }

    public function getAgpProjetNom(): ?string
    {
        return $this->agpProjetNom;
    }

    public function setAgpProjetNom(?string $agpProjetNom): self
    {
        $this->agpProjetNom = $agpProjetNom;

        return $this;
    }

    public function getAgpProjetDescription(): ?string
    {
        return $this->agpProjetDescription;
    }

    public function setAgpProjetDescription(?string $agpProjetDescription): self
    {
        $this->agpProjetDescription = $agpProjetDescription;

        return $this;
    }

    public function getAgpProjetDateCreation(): ?\DateTimeInterface
    {
        return $this->agpProjetDateCreation;
    }

    public function setAgpProjetDateCreation(?\DateTimeInterface $agpProjetDateCreation): self
    {
        $this->agpProjetDateCreation = $agpProjetDateCreation;

        return $this;
    }

    public function getAgpProjetDateDebut(): ?\DateTimeInterface
    {
        return $this->agpProjetDateDebut;
    }

    public function setAgpProjetDateDebut(?\DateTimeInterface $agpProjetDateDebut): self
    {
        $this->agpProjetDateDebut = $agpProjetDateDebut;

        return $this;
    }

    public function getAgpProjetDateFin(): ?\DateTimeInterface
    {
        return $this->agpProjetDateFin;
    }

    public function setAgpProjetDateFin(?\DateTimeInterface $agpProjetDateFin): self
    {
        $this->agpProjetDateFin = $agpProjetDateFin;

        return $this;
    }

    public function getAgpProjetEtat(): ?AgpEtat
    {
        return $this->agpProjetEtat;
    }

    public function setAgpProjetEtat(?AgpEtat $agpProjetEtat): self
    {
        $this->agpProjetEtat = $agpProjetEtat;

        return $this;
    }

    /**
     * @return Collection|AgpCategories[]
     */
    public function getAgpCategoriesAgpCategories(): Collection
    {
        return $this->agpCategoriesAgpCategories;
    }

    public function addAgpCategoriesAgpCategory(AgpCategories $agpCategoriesAgpCategory): self
    {
        if (!$this->agpCategoriesAgpCategories->contains($agpCategoriesAgpCategory)) {
            $this->agpCategoriesAgpCategories[] = $agpCategoriesAgpCategory;
            $agpCategoriesAgpCategory->addAgpProjetAgpProjet($this);
        }

        return $this;
    }

    public function removeAgpCategoriesAgpCategory(AgpCategories $agpCategoriesAgpCategory): self
    {
        if ($this->agpCategoriesAgpCategories->removeElement($agpCategoriesAgpCategory)) {
            $agpCategoriesAgpCategory->removeAgpProjetAgpProjet($this);
        }

        return $this;
    }

    /**
     * @return Collection|AgpTaches[]
     */
    public function getAgpTachesAgpTaches(): Collection
    {
        return $this->agpTachesAgpTaches;
    }

    public function addAgpTachesAgpTach(AgpTaches $agpTachesAgpTach): self
    {
        if (!$this->agpTachesAgpTaches->contains($agpTachesAgpTach)) {
            $this->agpTachesAgpTaches[] = $agpTachesAgpTach;
        }

        return $this;
    }

    public function removeAgpTachesAgpTach(AgpTaches $agpTachesAgpTach): self
    {
        $this->agpTachesAgpTaches->removeElement($agpTachesAgpTach);

        return $this;
    }

    /**
     * @return Collection|AgpUtilisateur[]
     */
    public function getAgpUtilisateurAgpUtilisateur(): Collection
    {
        return $this->agpUtilisateurAgpUtilisateur;
    }

    public function addAgpUtilisateurAgpUtilisateur(AgpUtilisateur $agpUtilisateurAgpUtilisateur): self
    {
        if (!$this->agpUtilisateurAgpUtilisateur->contains($agpUtilisateurAgpUtilisateur)) {
            $this->agpUtilisateurAgpUtilisateur[] = $agpUtilisateurAgpUtilisateur;
            $agpUtilisateurAgpUtilisateur->addAgpProjetAgpProjet($this);
        }

        return $this;
    }

    public function removeAgpUtilisateurAgpUtilisateur(AgpUtilisateur $agpUtilisateurAgpUtilisateur): self
    {
        if ($this->agpUtilisateurAgpUtilisateur->removeElement($agpUtilisateurAgpUtilisateur)) {
            $agpUtilisateurAgpUtilisateur->removeAgpProjetAgpProjet($this);
        }

        return $this;
    }

}
