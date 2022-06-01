<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamsDetails
 *
 * @ORM\Table(name="teams_details", uniqueConstraints={@ORM\UniqueConstraint(name="team_id", columns={"team_id"})})
 * @ORM\Entity
 */
class TeamsDetails
{
    /**
     * @var int
     *
     * @ORM\Column(name="team_details_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $teamDetailsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plz", type="string", length=255, nullable=true)
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
     * @ORM\Column(name="verein", type="string", length=255, nullable=true)
     */
    private $verein;

    /**
     * @var string|null
     *
     * @ORM\Column(name="homepage", type="string", length=255, nullable=true)
     */
    private $homepage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ligavertreter", type="string", length=255, nullable=true)
     */
    private $ligavertreter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="teamfoto", type="string", length=255, nullable=true)
     */
    private $teamfoto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trikot_farbe_1", type="string", length=9, nullable=true)
     */
    private $trikotFarbe1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trikot_farbe_2", type="string", length=9, nullable=true)
     */
    private $trikotFarbe2;

    /**
     * @var \TeamsLiga
     *
     * @ORM\ManyToOne(targetEntity="TeamsLiga")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_id", referencedColumnName="team_id")
     * })
     */
    private $team;

    public function getTeamDetailsId(): ?int
    {
        return $this->teamDetailsId;
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

    public function getVerein(): ?string
    {
        return $this->verein;
    }

    public function setVerein(?string $verein): self
    {
        $this->verein = $verein;

        return $this;
    }

    public function getHomepage(): ?string
    {
        return $this->homepage;
    }

    public function setHomepage(?string $homepage): self
    {
        $this->homepage = $homepage;

        return $this;
    }

    public function getLigavertreter(): ?string
    {
        return $this->ligavertreter;
    }

    public function setLigavertreter(?string $ligavertreter): self
    {
        $this->ligavertreter = $ligavertreter;

        return $this;
    }

    public function getTeamfoto(): ?string
    {
        return $this->teamfoto;
    }

    public function setTeamfoto(?string $teamfoto): self
    {
        $this->teamfoto = $teamfoto;

        return $this;
    }

    public function getTrikotFarbe1(): ?string
    {
        return $this->trikotFarbe1;
    }

    public function setTrikotFarbe1(?string $trikotFarbe1): self
    {
        $this->trikotFarbe1 = $trikotFarbe1;

        return $this;
    }

    public function getTrikotFarbe2(): ?string
    {
        return $this->trikotFarbe2;
    }

    public function setTrikotFarbe2(?string $trikotFarbe2): self
    {
        $this->trikotFarbe2 = $trikotFarbe2;

        return $this;
    }

    public function getTeam(): ?TeamsLiga
    {
        return $this->team;
    }

    public function setTeam(?TeamsLiga $team): self
    {
        $this->team = $team;

        return $this;
    }


}
