<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpielerAusleihen
 *
 * @ORM\Table(name="spieler_ausleihen")
 * @ORM\Entity
 */
class SpielerAusleihen
{
    /**
     * @var int
     *
     * @ORM\Column(name="ausleihe_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ausleiheId;

    /**
     * @var int
     *
     * @ORM\Column(name="turnier_id", type="integer", nullable=false)
     */
    private $turnierId;

    /**
     * @var string
     *
     * @ORM\Column(name="spieler", type="string", length=255, nullable=false)
     */
    private $spieler;

    /**
     * @var string
     *
     * @ORM\Column(name="team_auf", type="string", length=255, nullable=false)
     */
    private $teamAuf;

    /**
     * @var string
     *
     * @ORM\Column(name="team_ab", type="string", length=255, nullable=false)
     */
    private $teamAb;

    public function getAusleiheId(): ?int
    {
        return $this->ausleiheId;
    }

    public function getTurnierId(): ?int
    {
        return $this->turnierId;
    }

    public function setTurnierId(int $turnierId): self
    {
        $this->turnierId = $turnierId;

        return $this;
    }

    public function getSpieler(): ?string
    {
        return $this->spieler;
    }

    public function setSpieler(string $spieler): self
    {
        $this->spieler = $spieler;

        return $this;
    }

    public function getTeamAuf(): ?string
    {
        return $this->teamAuf;
    }

    public function setTeamAuf(string $teamAuf): self
    {
        $this->teamAuf = $teamAuf;

        return $this;
    }

    public function getTeamAb(): ?string
    {
        return $this->teamAb;
    }

    public function setTeamAb(string $teamAb): self
    {
        $this->teamAb = $teamAb;

        return $this;
    }


}
