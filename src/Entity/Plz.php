<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plz
 *
 * @ORM\Table(name="plz")
 * @ORM\Entity
 */
class Plz
{
    /**
     * @var string
     *
     * @ORM\Column(name="PLZ", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $plz;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ort", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $ort = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Lon", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $lon = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="LAT", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $lat = NULL;

    public function getPlz(): ?string
    {
        return $this->plz;
    }

    public function getOrt(): ?string
    {
        return $this->ort;
    }

    public function setOrt(?string $ort): self
    {
        $this->ort = $ort;

        return $this;
    }

    public function getLon(): ?float
    {
        return $this->lon;
    }

    public function setLon(?float $lon): self
    {
        $this->lon = $lon;

        return $this;
    }

    public function getLat(): ?float
    {
        return $this->lat;
    }

    public function setLat(?float $lat): self
    {
        $this->lat = $lat;

        return $this;
    }


}
