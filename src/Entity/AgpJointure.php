<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgpJointure
 *
 * @ORM\Table(name="agp_jointure")
 * @ORM\Entity
 */
class AgpJointure
{
    /**
     * @var int
     *
     * @ORM\Column(name="agp_jointure_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $agpJointureId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agp_jointure_titre", type="string", length=45, nullable=true)
     */
    private $agpJointureTitre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agp_jointure_path", type="string", length=200, nullable=true)
     */
    private $agpJointurePath;

    /**
     * @var int|null
     *
     * @ORM\Column(name="agp_jointure_type", type="integer", nullable=true)
     */
    private $agpJointureType;

    public function getAgpJointureId(): ?int
    {
        return $this->agpJointureId;
    }

    public function getAgpJointureTitre(): ?string
    {
        return $this->agpJointureTitre;
    }

    public function setAgpJointureTitre(?string $agpJointureTitre): self
    {
        $this->agpJointureTitre = $agpJointureTitre;

        return $this;
    }

    public function getAgpJointurePath(): ?string
    {
        return $this->agpJointurePath;
    }

    public function setAgpJointurePath(?string $agpJointurePath): self
    {
        $this->agpJointurePath = $agpJointurePath;

        return $this;
    }

    public function getAgpJointureType(): ?int
    {
        return $this->agpJointureType;
    }

    public function setAgpJointureType(?int $agpJointureType): self
    {
        $this->agpJointureType = $agpJointureType;

        return $this;
    }


}
