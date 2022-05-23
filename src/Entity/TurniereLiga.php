<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TurniereLiga
 *
 * @ORM\Table(name="turniere_liga", indexes={@ORM\Index(name="ausrichter_team_id", columns={"ausrichter"}), @ORM\Index(name="spielplan_vorlage", columns={"spielplan_vorlage"})})
 * @ORM\Entity
 */
class TurniereLiga
{
    /**
     * @var int
     *
     * @ORM\Column(name="turnier_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $turnierId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tname", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $tname = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="mixteam_wildcard", type="boolean", nullable=true)
     */
    private $mixteamWildcard = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="art", type="string", length=0, nullable=true, options={"default"="NULL"})
     */
    private $art = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tblock", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $tblock = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tblock_fixed", type="string", length=0, nullable=true, options={"default"="'Nein'"})
     */
    private $tblockFixed = '\'Nein\'';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datum", type="date", nullable=true, options={"default"="NULL"})
     */
    private $datum = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="spieltag", type="integer", nullable=true)
     */
    private $spieltag = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="phase", type="string", length=0, nullable=true, options={"default"="NULL"})
     */
    private $phase = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="spielplan_datei", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $spielplanDatei = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="saison", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $saison = NULL;

    /**
     * @var \TeamsLiga
     *
     * @ORM\ManyToOne(targetEntity="TeamsLiga")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ausrichter", referencedColumnName="team_id")
     * })
     */
    private $ausrichter;

    /**
     * @var \SpielplanDetails
     *
     * @ORM\ManyToOne(targetEntity="SpielplanDetails")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="spielplan_vorlage", referencedColumnName="spielplan")
     * })
     */
    private $spielplanVorlage;

    public function getTurnierId(): ?int
    {
        return $this->turnierId;
    }

    public function getTname(): ?string
    {
        return $this->tname;
    }

    public function setTname(?string $tname): self
    {
        $this->tname = $tname;

        return $this;
    }

    public function isMixteamWildcard(): ?bool
    {
        return $this->mixteamWildcard;
    }

    public function setMixteamWildcard(?bool $mixteamWildcard): self
    {
        $this->mixteamWildcard = $mixteamWildcard;

        return $this;
    }

    public function getArt(): ?string
    {
        return $this->art;
    }

    public function setArt(?string $art): self
    {
        $this->art = $art;

        return $this;
    }

    public function getTblock(): ?string
    {
        return $this->tblock;
    }

    public function setTblock(?string $tblock): self
    {
        $this->tblock = $tblock;

        return $this;
    }

    public function getTblockFixed(): ?string
    {
        return $this->tblockFixed;
    }

    public function setTblockFixed(?string $tblockFixed): self
    {
        $this->tblockFixed = $tblockFixed;

        return $this;
    }

    public function getDatum(): ?\DateTimeInterface
    {
        return $this->datum;
    }

    public function setDatum(?\DateTimeInterface $datum): self
    {
        $this->datum = $datum;

        return $this;
    }

    public function getSpieltag(): ?int
    {
        return $this->spieltag;
    }

    public function setSpieltag(?int $spieltag): self
    {
        $this->spieltag = $spieltag;

        return $this;
    }

    public function getPhase(): ?string
    {
        return $this->phase;
    }

    public function setPhase(?string $phase): self
    {
        $this->phase = $phase;

        return $this;
    }

    public function getSpielplanDatei(): ?string
    {
        return $this->spielplanDatei;
    }

    public function setSpielplanDatei(?string $spielplanDatei): self
    {
        $this->spielplanDatei = $spielplanDatei;

        return $this;
    }

    public function getSaison(): ?int
    {
        return $this->saison;
    }

    public function setSaison(?int $saison): self
    {
        $this->saison = $saison;

        return $this;
    }

    public function getAusrichter(): ?TeamsLiga
    {
        return $this->ausrichter;
    }

    public function setAusrichter(?TeamsLiga $ausrichter): self
    {
        $this->ausrichter = $ausrichter;

        return $this;
    }

    public function getSpielplanVorlage(): ?SpielplanDetails
    {
        return $this->spielplanVorlage;
    }

    public function setSpielplanVorlage(?SpielplanDetails $spielplanVorlage): self
    {
        $this->spielplanVorlage = $spielplanVorlage;

        return $this;
    }


}
