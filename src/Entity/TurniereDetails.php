<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TurniereDetails
 *
 * @ORM\Table(name="turniere_details")
 * @ORM\Entity
 */
class TurniereDetails
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="hallenname", type="string", length=255, nullable=true)
     */
    private $hallenname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="strasse", type="string", length=255, nullable=true)
     */
    private $strasse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plz", type="string", length=6, nullable=true)
     */
    private $plz;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ort", type="string", length=255, nullable=true)
     */
    private $ort;

    /**
     * @var string|null
     *
     * @ORM\Column(name="haltestellen", type="string", length=255, nullable=true)
     */
    private $haltestellen;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plaetze", type="integer", nullable=true)
     */
    private $plaetze;

    /**
     * @var string|null
     *
     * @ORM\Column(name="format", type="string", length=255, nullable=true)
     */
    private $format;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="startzeit", type="time", nullable=true)
     */
    private $startzeit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="besprechung", type="string", length=0, nullable=true)
     */
    private $besprechung;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hinweis", type="string", length=1700, nullable=true)
     */
    private $hinweis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="organisator", type="string", length=255, nullable=true)
     */
    private $organisator;

    /**
     * @var string|null
     *
     * @ORM\Column(name="handy", type="string", length=255, nullable=true)
     */
    private $handy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="startgebuehr", type="string", length=255, nullable=true)
     */
    private $startgebuehr;

    /**
     * @var \TurniereLiga
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="TurniereLiga")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="turnier_id", referencedColumnName="turnier_id")
     * })
     */
    private $turnier;

    public function getHallenname(): ?string
    {
        return $this->hallenname;
    }

    public function setHallenname(?string $hallenname): self
    {
        $this->hallenname = $hallenname;

        return $this;
    }

    public function getStrasse(): ?string
    {
        return $this->strasse;
    }

    public function setStrasse(?string $strasse): self
    {
        $this->strasse = $strasse;

        return $this;
    }

    public function getPlz(): ?string
    {
        return $this->plz;
    }

    public function setPlz(?string $plz): self
    {
        $this->plz = $plz;

        return $this;
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

    public function getHaltestellen(): ?string
    {
        return $this->haltestellen;
    }

    public function setHaltestellen(?string $haltestellen): self
    {
        $this->haltestellen = $haltestellen;

        return $this;
    }

    public function getPlaetze(): ?int
    {
        return $this->plaetze;
    }

    public function setPlaetze(?int $plaetze): self
    {
        $this->plaetze = $plaetze;

        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(?string $format): self
    {
        $this->format = $format;

        return $this;
    }

    public function getStartzeit(): ?\DateTimeInterface
    {
        return $this->startzeit;
    }

    public function setStartzeit(?\DateTimeInterface $startzeit): self
    {
        $this->startzeit = $startzeit;

        return $this;
    }

    public function getBesprechung(): ?string
    {
        return $this->besprechung;
    }

    public function setBesprechung(?string $besprechung): self
    {
        $this->besprechung = $besprechung;

        return $this;
    }

    public function getHinweis(): ?string
    {
        return $this->hinweis;
    }

    public function setHinweis(?string $hinweis): self
    {
        $this->hinweis = $hinweis;

        return $this;
    }

    public function getOrganisator(): ?string
    {
        return $this->organisator;
    }

    public function setOrganisator(?string $organisator): self
    {
        $this->organisator = $organisator;

        return $this;
    }

    public function getHandy(): ?string
    {
        return $this->handy;
    }

    public function setHandy(?string $handy): self
    {
        $this->handy = $handy;

        return $this;
    }

    public function getStartgebuehr(): ?string
    {
        return $this->startgebuehr;
    }

    public function setStartgebuehr(?string $startgebuehr): self
    {
        $this->startgebuehr = $startgebuehr;

        return $this;
    }

    public function getTurnier(): ?TurniereLiga
    {
        return $this->turnier;
    }

    public function setTurnier(?TurniereLiga $turnier): self
    {
        $this->turnier = $turnier;

        return $this;
    }


}
