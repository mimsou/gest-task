<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgpSousTaches
 *
 * @ORM\Table(name="agp_sous_taches", indexes={@ORM\Index(name="fk_agp_sous_taches_agp_periodicite1_idx", columns={"agp_sous_taches_periodicite"}), @ORM\Index(name="fk_agp_sous_taches_agp_utilisateur1_idx", columns={"agp_sous_taches_createur"}), @ORM\Index(name="fk_agp_sous_taches_agp_etat1_idx", columns={"agp_sous_taches_etat"}), @ORM\Index(name="fk_agp_sous_taches_agp_taches1_idx", columns={"agp_sous_taches_parent"})})
 * @ORM\Entity
 */
class AgpSousTaches
{
    /**
     * @var int
     *
     * @ORM\Column(name="agp_sous_taches_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $agpSousTachesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agp_sous_taches_nom", type="string", length=45, nullable=true)
     */
    private $agpSousTachesNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agp_sous_taches_description", type="string", length=45, nullable=true)
     */
    private $agpSousTachesDescription;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="agp_sous_taches_date_creation", type="datetime", nullable=true)
     */
    private $agpSousTachesDateCreation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="agp_sous_taches_date_debut", type="datetime", nullable=true)
     */
    private $agpSousTachesDateDebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="agp_sous_taches_date_fin", type="datetime", nullable=true)
     */
    private $agpSousTachesDateFin;

    /**
     * @var \AgpEtat
     *
     * @ORM\ManyToOne(targetEntity="AgpEtat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agp_sous_taches_etat", referencedColumnName="agp_etat_id")
     * })
     */
    private $agpSousTachesEtat;

    /**
     * @var \AgpPeriodicite
     *
     * @ORM\ManyToOne(targetEntity="AgpPeriodicite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agp_sous_taches_periodicite", referencedColumnName="agp_periodicite_id")
     * })
     */
    private $agpSousTachesPeriodicite;

    /**
     * @var \AgpTaches
     *
     * @ORM\ManyToOne(targetEntity="AgpTaches")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agp_sous_taches_parent", referencedColumnName="agp_taches_id")
     * })
     */
    private $agpSousTachesParent;

    /**
     * @var \AgpUtilisateur
     *
     * @ORM\ManyToOne(targetEntity="AgpUtilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agp_sous_taches_createur", referencedColumnName="agp_utilisateur_id")
     * })
     */
    private $agpSousTachesCreateur;

    public function getAgpSousTachesId(): ?int
    {
        return $this->agpSousTachesId;
    }

    public function getAgpSousTachesNom(): ?string
    {
        return $this->agpSousTachesNom;
    }

    public function setAgpSousTachesNom(?string $agpSousTachesNom): self
    {
        $this->agpSousTachesNom = $agpSousTachesNom;

        return $this;
    }

    public function getAgpSousTachesDescription(): ?string
    {
        return $this->agpSousTachesDescription;
    }

    public function setAgpSousTachesDescription(?string $agpSousTachesDescription): self
    {
        $this->agpSousTachesDescription = $agpSousTachesDescription;

        return $this;
    }

    public function getAgpSousTachesDateCreation(): ?\DateTimeInterface
    {
        return $this->agpSousTachesDateCreation;
    }

    public function setAgpSousTachesDateCreation(?\DateTimeInterface $agpSousTachesDateCreation): self
    {
        $this->agpSousTachesDateCreation = $agpSousTachesDateCreation;

        return $this;
    }

    public function getAgpSousTachesDateDebut(): ?\DateTimeInterface
    {
        return $this->agpSousTachesDateDebut;
    }

    public function setAgpSousTachesDateDebut(?\DateTimeInterface $agpSousTachesDateDebut): self
    {
        $this->agpSousTachesDateDebut = $agpSousTachesDateDebut;

        return $this;
    }

    public function getAgpSousTachesDateFin(): ?\DateTimeInterface
    {
        return $this->agpSousTachesDateFin;
    }

    public function setAgpSousTachesDateFin(?\DateTimeInterface $agpSousTachesDateFin): self
    {
        $this->agpSousTachesDateFin = $agpSousTachesDateFin;

        return $this;
    }

    public function getAgpSousTachesEtat(): ?AgpEtat
    {
        return $this->agpSousTachesEtat;
    }

    public function setAgpSousTachesEtat(?AgpEtat $agpSousTachesEtat): self
    {
        $this->agpSousTachesEtat = $agpSousTachesEtat;

        return $this;
    }

    public function getAgpSousTachesPeriodicite(): ?AgpPeriodicite
    {
        return $this->agpSousTachesPeriodicite;
    }

    public function setAgpSousTachesPeriodicite(?AgpPeriodicite $agpSousTachesPeriodicite): self
    {
        $this->agpSousTachesPeriodicite = $agpSousTachesPeriodicite;

        return $this;
    }

    public function getAgpSousTachesParent(): ?AgpTaches
    {
        return $this->agpSousTachesParent;
    }

    public function setAgpSousTachesParent(?AgpTaches $agpSousTachesParent): self
    {
        $this->agpSousTachesParent = $agpSousTachesParent;

        return $this;
    }

    public function getAgpSousTachesCreateur(): ?AgpUtilisateur
    {
        return $this->agpSousTachesCreateur;
    }

    public function setAgpSousTachesCreateur(?AgpUtilisateur $agpSousTachesCreateur): self
    {
        $this->agpSousTachesCreateur = $agpSousTachesCreateur;

        return $this;
    }


}
