<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Spiele
 *
 * @ORM\Table(name="spiele", indexes={@ORM\Index(name="schiri_team_id_a", columns={"schiri_team_id_a"}), @ORM\Index(name="schiri_team_id_b", columns={"schiri_team_id_b"}), @ORM\Index(name="team_id_a", columns={"team_id_a"}), @ORM\Index(name="team_id_b", columns={"team_id_b"}), @ORM\Index(name="IDX_39043E3DB5FFB8C1", columns={"turnier_id"})})
 * @ORM\Entity
 */
class Spiele
{
    /**
     * @var int
     *
     * @ORM\Column(name="spiel_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $spielId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tore_a", type="integer", nullable=true)
     */
    private $toreA;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tore_b", type="integer", nullable=true)
     */
    private $toreB;

    /**
     * @var int|null
     *
     * @ORM\Column(name="penalty_a", type="integer", nullable=true)
     */
    private $penaltyA;

    /**
     * @var int|null
     *
     * @ORM\Column(name="penalty_b", type="integer", nullable=true)
     */
    private $penaltyB;

    /**
     * @var \TeamsLiga
     *
     * @ORM\ManyToOne(targetEntity="TeamsLiga")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_id_b", referencedColumnName="team_id")
     * })
     */
    private $teamIdB;

    /**
     * @var \TeamsLiga
     *
     * @ORM\ManyToOne(targetEntity="TeamsLiga")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="schiri_team_id_b", referencedColumnName="team_id")
     * })
     */
    private $schiriTeamIdB;

    /**
     * @var \TeamsLiga
     *
     * @ORM\ManyToOne(targetEntity="TeamsLiga")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_id_a", referencedColumnName="team_id")
     * })
     */
    private $teamIdA;

    /**
     * @var \TeamsLiga
     *
     * @ORM\ManyToOne(targetEntity="TeamsLiga")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="schiri_team_id_a", referencedColumnName="team_id")
     * })
     */
    private $schiriTeamIdA;

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

    public function getSpielId(): ?int
    {
        return $this->spielId;
    }

    public function getToreA(): ?int
    {
        return $this->toreA;
    }

    public function setToreA(?int $toreA): self
    {
        $this->toreA = $toreA;

        return $this;
    }

    public function getToreB(): ?int
    {
        return $this->toreB;
    }

    public function setToreB(?int $toreB): self
    {
        $this->toreB = $toreB;

        return $this;
    }

    public function getPenaltyA(): ?int
    {
        return $this->penaltyA;
    }

    public function setPenaltyA(?int $penaltyA): self
    {
        $this->penaltyA = $penaltyA;

        return $this;
    }

    public function getPenaltyB(): ?int
    {
        return $this->penaltyB;
    }

    public function setPenaltyB(?int $penaltyB): self
    {
        $this->penaltyB = $penaltyB;

        return $this;
    }

    public function getTeamIdB(): ?TeamsLiga
    {
        return $this->teamIdB;
    }

    public function setTeamIdB(?TeamsLiga $teamIdB): self
    {
        $this->teamIdB = $teamIdB;

        return $this;
    }

    public function getSchiriTeamIdB(): ?TeamsLiga
    {
        return $this->schiriTeamIdB;
    }

    public function setSchiriTeamIdB(?TeamsLiga $schiriTeamIdB): self
    {
        $this->schiriTeamIdB = $schiriTeamIdB;

        return $this;
    }

    public function getTeamIdA(): ?TeamsLiga
    {
        return $this->teamIdA;
    }

    public function setTeamIdA(?TeamsLiga $teamIdA): self
    {
        $this->teamIdA = $teamIdA;

        return $this;
    }

    public function getSchiriTeamIdA(): ?TeamsLiga
    {
        return $this->schiriTeamIdA;
    }

    public function setSchiriTeamIdA(?TeamsLiga $schiriTeamIdA): self
    {
        $this->schiriTeamIdA = $schiriTeamIdA;

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
