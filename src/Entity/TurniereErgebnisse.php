<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TurniereErgebnisse
 *
 * @ORM\Table(name="turniere_ergebnisse", indexes={@ORM\Index(name="team_id", columns={"team_id"}), @ORM\Index(name="turniere_ergebnisse_ibfk_2", columns={"turnier_id"})})
 * @ORM\Entity
 */
class TurniereErgebnisse
{
    /**
     * @var int
     *
     * @ORM\Column(name="turnier_ergebnis_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $turnierErgebnisId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ergebnis", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $ergebnis = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="platz", type="integer", nullable=false)
     */
    private $platz;

    /**
     * @var \TeamsLiga
     *
     * @ORM\ManyToOne(targetEntity="TeamsLiga")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_id", referencedColumnName="team_id")
     * })
     */
    private $team;

    /**
     * @var \TurniereLiga
     *
     * @ORM\ManyToOne(targetEntity="TurniereLiga")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="turnier_id", referencedColumnName="turnier_id")
     * })
     */
    private $turnier;

    public function getTurnierErgebnisId(): ?int
    {
        return $this->turnierErgebnisId;
    }

    public function getErgebnis(): ?int
    {
        return $this->ergebnis;
    }

    public function setErgebnis(?int $ergebnis): self
    {
        $this->ergebnis = $ergebnis;

        return $this;
    }

    public function getPlatz(): ?int
    {
        return $this->platz;
    }

    public function setPlatz(int $platz): self
    {
        $this->platz = $platz;

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
