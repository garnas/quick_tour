<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Neuigkeiten
 *
 * @ORM\Table(name="neuigkeiten")
 * @ORM\Entity
 */
class Neuigkeiten
{
    /**
     * @var int
     *
     * @ORM\Column(name="neuigkeiten_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $neuigkeitenId;

    /**
     * @var string
     *
     * @ORM\Column(name="titel", type="string", length=255, nullable=false)
     */
    private $titel;

    /**
     * @var string
     *
     * @ORM\Column(name="inhalt", type="string", length=1800, nullable=false)
     */
    private $inhalt;

    /**
     * @var string
     *
     * @ORM\Column(name="link_pdf", type="string", length=255, nullable=false)
     */
    private $linkPdf;

    /**
     * @var string
     *
     * @ORM\Column(name="link_jpg", type="string", length=255, nullable=false)
     */
    private $linkJpg;

    /**
     * @var string
     *
     * @ORM\Column(name="bild_verlinken", type="string", length=255, nullable=false)
     */
    private $bildVerlinken;

    /**
     * @var string
     *
     * @ORM\Column(name="eingetragen_von", type="string", length=255, nullable=false)
     */
    private $eingetragenVon;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="zeit", type="datetime", nullable=false, options={"default"="current_timestamp()"})
     */
    private $zeit = 'current_timestamp()';

    public function getNeuigkeitenId(): ?int
    {
        return $this->neuigkeitenId;
    }

    public function getTitel(): ?string
    {
        return $this->titel;
    }

    public function setTitel(string $titel): self
    {
        $this->titel = $titel;

        return $this;
    }

    public function getInhalt(): ?string
    {
        return $this->inhalt;
    }

    public function setInhalt(string $inhalt): self
    {
        $this->inhalt = $inhalt;

        return $this;
    }

    public function getLinkPdf(): ?string
    {
        return $this->linkPdf;
    }

    public function setLinkPdf(string $linkPdf): self
    {
        $this->linkPdf = $linkPdf;

        return $this;
    }

    public function getLinkJpg(): ?string
    {
        return $this->linkJpg;
    }

    public function setLinkJpg(string $linkJpg): self
    {
        $this->linkJpg = $linkJpg;

        return $this;
    }

    public function getBildVerlinken(): ?string
    {
        return $this->bildVerlinken;
    }

    public function setBildVerlinken(string $bildVerlinken): self
    {
        $this->bildVerlinken = $bildVerlinken;

        return $this;
    }

    public function getEingetragenVon(): ?string
    {
        return $this->eingetragenVon;
    }

    public function setEingetragenVon(string $eingetragenVon): self
    {
        $this->eingetragenVon = $eingetragenVon;

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
