<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SchiriErgebnis
 *
 * @ORM\Table(name="schiri_ergebnis")
 * @ORM\Entity
 */
class SchiriErgebnis
{
    /**
     * @var int
     *
     * @ORM\Column(name="schiri_test_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $schiriTestId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="md5sum", type="string", length=32, nullable=true)
     */
    private $md5sum;

    /**
     * @var int
     *
     * @ORM\Column(name="spieler_id", type="integer", nullable=false)
     */
    private $spielerId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="spieler_email", type="string", length=500, nullable=true)
     */
    private $spielerEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gestellte_fragen", type="string", length=500, nullable=true)
     */
    private $gestellteFragen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gesetzte_antworten", type="string", length=500, nullable=true)
     */
    private $gesetzteAntworten;

    /**
     * @var string|null
     *
     * @ORM\Column(name="test_level", type="string", length=0, nullable=true)
     */
    private $testLevel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bestanden", type="string", length=0, nullable=true)
     */
    private $bestanden;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kommentar", type="string", length=500, nullable=true)
     */
    private $kommentar;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="t_erstellt", type="datetime", nullable=true)
     */
    private $tErstellt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="t_gestartet", type="datetime", nullable=true)
     */
    private $tGestartet;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="t_abgegeben", type="datetime", nullable=true)
     */
    private $tAbgegeben;

    /**
     * @var int
     *
     * @ORM\Column(name="saison", type="integer", nullable=false)
     */
    private $saison;

    /**
     * @var int
     *
     * @ORM\Column(name="schiri_test_version", type="integer", nullable=false)
     */
    private $schiriTestVersion;

    public function getSchiriTestId(): ?int
    {
        return $this->schiriTestId;
    }

    public function getMd5sum(): ?string
    {
        return $this->md5sum;
    }

    public function setMd5sum(?string $md5sum): self
    {
        $this->md5sum = $md5sum;

        return $this;
    }

    public function getSpielerId(): ?int
    {
        return $this->spielerId;
    }

    public function setSpielerId(int $spielerId): self
    {
        $this->spielerId = $spielerId;

        return $this;
    }

    public function getSpielerEmail(): ?string
    {
        return $this->spielerEmail;
    }

    public function setSpielerEmail(?string $spielerEmail): self
    {
        $this->spielerEmail = $spielerEmail;

        return $this;
    }

    public function getGestellteFragen(): ?string
    {
        return $this->gestellteFragen;
    }

    public function setGestellteFragen(?string $gestellteFragen): self
    {
        $this->gestellteFragen = $gestellteFragen;

        return $this;
    }

    public function getGesetzteAntworten(): ?string
    {
        return $this->gesetzteAntworten;
    }

    public function setGesetzteAntworten(?string $gesetzteAntworten): self
    {
        $this->gesetzteAntworten = $gesetzteAntworten;

        return $this;
    }

    public function getTestLevel(): ?string
    {
        return $this->testLevel;
    }

    public function setTestLevel(?string $testLevel): self
    {
        $this->testLevel = $testLevel;

        return $this;
    }

    public function getBestanden(): ?string
    {
        return $this->bestanden;
    }

    public function setBestanden(?string $bestanden): self
    {
        $this->bestanden = $bestanden;

        return $this;
    }

    public function getKommentar(): ?string
    {
        return $this->kommentar;
    }

    public function setKommentar(?string $kommentar): self
    {
        $this->kommentar = $kommentar;

        return $this;
    }

    public function getTErstellt(): ?\DateTimeInterface
    {
        return $this->tErstellt;
    }

    public function setTErstellt(?\DateTimeInterface $tErstellt): self
    {
        $this->tErstellt = $tErstellt;

        return $this;
    }

    public function getTGestartet(): ?\DateTimeInterface
    {
        return $this->tGestartet;
    }

    public function setTGestartet(?\DateTimeInterface $tGestartet): self
    {
        $this->tGestartet = $tGestartet;

        return $this;
    }

    public function getTAbgegeben(): ?\DateTimeInterface
    {
        return $this->tAbgegeben;
    }

    public function setTAbgegeben(?\DateTimeInterface $tAbgegeben): self
    {
        $this->tAbgegeben = $tAbgegeben;

        return $this;
    }

    public function getSaison(): ?int
    {
        return $this->saison;
    }

    public function setSaison(int $saison): self
    {
        $this->saison = $saison;

        return $this;
    }

    public function getSchiriTestVersion(): ?int
    {
        return $this->schiriTestVersion;
    }

    public function setSchiriTestVersion(int $schiriTestVersion): self
    {
        $this->schiriTestVersion = $schiriTestVersion;

        return $this;
    }


}
