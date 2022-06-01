<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigakarteGesuch
 *
 * @ORM\Table(name="ligakarte_gesuch")
 * @ORM\Entity
 */
class LigakarteGesuch
{
    /**
     * @var int
     *
     * @ORM\Column(name="gesuch_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gesuchId;

    /**
     * @var int
     *
     * @ORM\Column(name="plz", type="integer", nullable=false)
     */
    private $plz;

    /**
     * @var string
     *
     * @ORM\Column(name="ort", type="string", length=255, nullable=false)
     */
    private $ort;

    /**
     * @var float
     *
     * @ORM\Column(name="LAT", type="float", precision=10, scale=0, nullable=false)
     */
    private $lat;

    /**
     * @var float
     *
     * @ORM\Column(name="Lon", type="float", precision=10, scale=0, nullable=false)
     */
    private $lon;

    /**
     * @var string
     *
     * @ORM\Column(name="r_name", type="string", length=255, nullable=false)
     */
    private $rName;

    /**
     * @var string
     *
     * @ORM\Column(name="kontakt", type="string", length=255, nullable=false)
     */
    private $kontakt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="zeit", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $zeit = 'CURRENT_TIMESTAMP';

    public function getGesuchId(): ?int
    {
        return $this->gesuchId;
    }

    public function getPlz(): ?int
    {
        return $this->plz;
    }

    public function setPlz(int $plz): self
    {
        $this->plz = $plz;

        return $this;
    }

    public function getOrt(): ?string
    {
        return $this->ort;
    }

    public function setOrt(string $ort): self
    {
        $this->ort = $ort;

        return $this;
    }

    public function getLat(): ?float
    {
        return $this->lat;
    }

    public function setLat(float $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getLon(): ?float
    {
        return $this->lon;
    }

    public function setLon(float $lon): self
    {
        $this->lon = $lon;

        return $this;
    }

    public function getRName(): ?string
    {
        return $this->rName;
    }

    public function setRName(string $rName): self
    {
        $this->rName = $rName;

        return $this;
    }

    public function getKontakt(): ?string
    {
        return $this->kontakt;
    }

    public function setKontakt(string $kontakt): self
    {
        $this->kontakt = $kontakt;

        return $this;
    }

    public function getZeit(): ?\DateTimeInterface
    {
        return $this->zeit;
    }

    public function setZeit(\DateTimeInterface $zeit): self
    {
        $this->zeit = $zeit;

        return $this;
    }


}
