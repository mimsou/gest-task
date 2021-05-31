<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgpPeriodicite
 *
 * @ORM\Table(name="agp_periodicite")
 * @ORM\Entity
 */
class AgpPeriodicite
{
    /**
     * @var int
     *
     * @ORM\Column(name="agp_periodicite_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $agpPeriodiciteId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="agp_periodicite_type", type="integer", nullable=true)
     */
    private $agpPeriodiciteType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="agp_periodicite_nombre", type="integer", nullable=true)
     */
    private $agpPeriodiciteNombre;

    public function getAgpPeriodiciteId(): ?int
    {
        return $this->agpPeriodiciteId;
    }

    public function getAgpPeriodiciteType(): ?int
    {
        return $this->agpPeriodiciteType;
    }

    public function setAgpPeriodiciteType(?int $agpPeriodiciteType): self
    {
        $this->agpPeriodiciteType = $agpPeriodiciteType;

        return $this;
    }

    public function getAgpPeriodiciteNombre(): ?int
    {
        return $this->agpPeriodiciteNombre;
    }

    public function setAgpPeriodiciteNombre(?int $agpPeriodiciteNombre): self
    {
        $this->agpPeriodiciteNombre = $agpPeriodiciteNombre;

        return $this;
    }


}
