<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpielerZeitstrafen
 *
 * @ORM\Table(name="spieler_zeitstrafen")
 * @ORM\Entity
 */
class SpielerZeitstrafen
{
    /**
     * @var int
     *
     * @ORM\Column(name="zeitstrafe_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $zeitstrafeId;

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
     * @ORM\Column(name="dauer", type="string", length=0, nullable=false)
     */
    private $dauer;

    /**
     * @var string
     *
     * @ORM\Column(name="team_a", type="string", length=255, nullable=false)
     */
    private $teamA;

    /**
     * @var string
     *
     * @ORM\Column(name="team_b", type="string", length=255, nullable=false)
     */
    private $teamB;

    /**
     * @var string
     *
     * @ORM\Column(name="grund", type="string", length=350, nullable=false)
     */
    private $grund;

    public function getZeitstrafeId(): ?int
    {
        return $this->zeitstrafeId;
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

    public function getDauer(): ?string
    {
        return $this->dauer;
    }

    public function setDauer(string $dauer): self
    {
        $this->dauer = $dauer;

        return $this;
    }

    public function getTeamA(): ?string
    {
        return $this->teamA;
    }

    public function setTeamA(string $teamA): self
    {
        $this->teamA = $teamA;

        return $this;
    }

    public function getTeamB(): ?string
    {
        return $this->teamB;
    }

    public function setTeamB(string $teamB): self
    {
        $this->teamB = $teamB;

        return $this;
    }

    public function getGrund(): ?string
    {
        return $this->grund;
    }

    public function setGrund(string $grund): self
    {
        $this->grund = $grund;

        return $this;
    }


}
