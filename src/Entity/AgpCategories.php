<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * AgpCategories
 *
 * @ORM\Table(name="agp_categories")
 * @ORM\Entity
 */
class AgpCategories
{
    /**
     * @var int
     *
     * @ORM\Column(name="agp_categories", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $agpCategories;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agp_categories_nom", type="string", length=45, nullable=true)
     */
    private $agpCategoriesNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agp_categories_description", type="string", length=200, nullable=true)
     */
    private $agpCategoriesDescription;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AgpProjet", inversedBy="agpCategoriesAgpCategories")
     * @ORM\JoinTable(name="agp_categories_has_agp_projet",
     *   joinColumns={
     *     @ORM\JoinColumn(name="agp_categories_agp_categories", referencedColumnName="agp_categories")
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

    public function getAgpCategories(): ?int
    {
        return $this->agpCategories;
    }

    public function getAgpCategoriesNom(): ?string
    {
        return $this->agpCategoriesNom;
    }

    public function setAgpCategoriesNom(?string $agpCategoriesNom): self
    {
        $this->agpCategoriesNom = $agpCategoriesNom;

        return $this;
    }

    public function getAgpCategoriesDescription(): ?string
    {
        return $this->agpCategoriesDescription;
    }

    public function setAgpCategoriesDescription(?string $agpCategoriesDescription): self
    {
        $this->agpCategoriesDescription = $agpCategoriesDescription;

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
