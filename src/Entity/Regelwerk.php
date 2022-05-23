<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regelwerk
 *
 * @ORM\Table(name="regelwerk")
 * @ORM\Entity
 */
class Regelwerk
{
    /**
     * @var string
     *
     * @ORM\Column(name="regelnummer", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $regelnummer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="regeltitel", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $regeltitel = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="regeltext", type="string", length=3000, nullable=true, options={"default"="NULL"})
     */
    private $regeltext = 'NULL';

    public function getRegelnummer(): ?string
    {
        return $this->regelnummer;
    }

    public function getRegeltitel(): ?string
    {
        return $this->regeltitel;
    }

    public function setRegeltitel(?string $regeltitel): self
    {
        $this->regeltitel = $regeltitel;

        return $this;
    }

    public function getRegeltext(): ?string
    {
        return $this->regeltext;
    }

    public function setRegeltext(?string $regeltext): self
    {
        $this->regeltext = $regeltext;

        return $this;
    }


}
