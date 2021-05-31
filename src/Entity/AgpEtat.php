<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgpEtat
 *
 * @ORM\Table(name="agp_etat")
 * @ORM\Entity
 */
class AgpEtat
{
    /**
     * @var int
     *
     * @ORM\Column(name="agp_etat_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $agpEtatId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agp_etat_libelle", type="string", length=45, nullable=true)
     */
    private $agpEtatLibelle;

    public function getAgpEtatId(): ?int
    {
        return $this->agpEtatId;
    }

    public function getAgpEtatLibelle(): ?string
    {
        return $this->agpEtatLibelle;
    }

    public function setAgpEtatLibelle(?string $agpEtatLibelle): self
    {
        $this->agpEtatLibelle = $agpEtatLibelle;

        return $this;
    }


}
