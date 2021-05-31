<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * AgpTaches
 *
 * @ORM\Table(name="agp_taches", indexes={@ORM\Index(name="fk_agp_taches_agp_periodicite1_idx", columns={"agp_taches_periodicite"}), @ORM\Index(name="fk_agp_taches_agp_utilisateur1_idx", columns={"agp_taches_createur"}), @ORM\Index(name="fk_agp_taches_agp_etat1_idx", columns={"agp_taches_etat"})})
 * @ORM\Entity
 */
class AgpTaches
{
    /**
     * @var int
     *
     * @ORM\Column(name="agp_taches_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $agpTachesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agp_taches_nom", type="string", length=45, nullable=true)
     */
    private $agpTachesNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agp_taches_description", type="string", length=45, nullable=true)
     */
    private $agpTachesDescription;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="agp_taches_date_creation", type="datetime", nullable=true)
     */
    private $agpTachesDateCreation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="agp_taches_date_debut", type="datetime", nullable=true)
     */
    private $agpTachesDateDebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="agp_taches_date_fin", type="datetime", nullable=true)
     */
    private $agpTachesDateFin;

    /**
     * @var \AgpEtat
     *
     * @ORM\ManyToOne(targetEntity="AgpEtat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agp_taches_etat", referencedColumnName="agp_etat_id")
     * })
     */
    private $agpTachesEtat;

    /**
     * @var \AgpPeriodicite
     *
     * @ORM\ManyToOne(targetEntity="AgpPeriodicite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agp_taches_periodicite", referencedColumnName="agp_periodicite_id")
     * })
     */
    private $agpTachesPeriodicite;

    /**
     * @var \AgpUtilisateur
     *
     * @ORM\ManyToOne(targetEntity="AgpUtilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agp_taches_createur", referencedColumnName="agp_utilisateur_id")
     * })
     */
    private $agpTachesCreateur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AgpProjet", mappedBy="agpTachesAgpTaches")
     */
    private $agpProjetAgpProjet;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->agpProjetAgpProjet = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getAgpTachesId(): ?int
    {
        return $this->agpTachesId;
    }

    public function getAgpTachesNom(): ?string
    {
        return $this->agpTachesNom;
    }

    public function setAgpTachesNom(?string $agpTachesNom): self
    {
        $this->agpTachesNom = $agpTachesNom;

        return $this;
    }

    public function getAgpTachesDescription(): ?string
    {
        return $this->agpTachesDescription;
    }

    public function setAgpTachesDescription(?string $agpTachesDescription): self
    {
        $this->agpTachesDescription = $agpTachesDescription;

        return $this;
    }

    public function getAgpTachesDateCreation(): ?\DateTimeInterface
    {
        return $this->agpTachesDateCreation;
    }

    public function setAgpTachesDateCreation(?\DateTimeInterface $agpTachesDateCreation): self
    {
        $this->agpTachesDateCreation = $agpTachesDateCreation;

        return $this;
    }

    public function getAgpTachesDateDebut(): ?\DateTimeInterface
    {
        return $this->agpTachesDateDebut;
    }

    public function setAgpTachesDateDebut(?\DateTimeInterface $agpTachesDateDebut): self
    {
        $this->agpTachesDateDebut = $agpTachesDateDebut;

        return $this;
    }

    public function getAgpTachesDateFin(): ?\DateTimeInterface
    {
        return $this->agpTachesDateFin;
    }

    public function setAgpTachesDateFin(?\DateTimeInterface $agpTachesDateFin): self
    {
        $this->agpTachesDateFin = $agpTachesDateFin;

        return $this;
    }

    public function getAgpTachesEtat(): ?AgpEtat
    {
        return $this->agpTachesEtat;
    }

    public function setAgpTachesEtat(?AgpEtat $agpTachesEtat): self
    {
        $this->agpTachesEtat = $agpTachesEtat;

        return $this;
    }

    public function getAgpTachesPeriodicite(): ?AgpPeriodicite
    {
        return $this->agpTachesPeriodicite;
    }

    public function setAgpTachesPeriodicite(?AgpPeriodicite $agpTachesPeriodicite): self
    {
        $this->agpTachesPeriodicite = $agpTachesPeriodicite;

        return $this;
    }

    public function getAgpTachesCreateur(): ?AgpUtilisateur
    {
        return $this->agpTachesCreateur;
    }

    public function setAgpTachesCreateur(?AgpUtilisateur $agpTachesCreateur): self
    {
        $this->agpTachesCreateur = $agpTachesCreateur;

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
            $agpProjetAgpProjet->addAgpTachesAgpTach($this);
        }

        return $this;
    }

    public function removeAgpProjetAgpProjet(AgpProjet $agpProjetAgpProjet): self
    {
        if ($this->agpProjetAgpProjet->removeElement($agpProjetAgpProjet)) {
            $agpProjetAgpProjet->removeAgpTachesAgpTach($this);
        }

        return $this;
    }

}
