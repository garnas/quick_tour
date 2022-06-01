<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamsStrafen
 *
 * @ORM\Table(name="teams_strafen", indexes={@ORM\Index(name="team_id", columns={"team_id"})})
 * @ORM\Entity
 */
class TeamsStrafen
{
    /**
     * @var int
     *
     * @ORM\Column(name="strafe_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $strafeId;

    /**
     * @var string
     *
     * @ORM\Column(name="verwarnung", type="string", length=0, nullable=false)
     */
    private $verwarnung;

    /**
     * @var int|null
     *
     * @ORM\Column(name="turnier_id", type="integer", nullable=true)
     */
    private $turnierId;

    /**
     * @var string
     *
     * @ORM\Column(name="grund", type="string", length=255, nullable=false)
     */
    private $grund;

    /**
     * @var string
     *
     * @ORM\Column(name="prozentsatz", type="string", length=255, nullable=false)
     */
    private $prozentsatz;

    /**
     * @var int
     *
     * @ORM\Column(name="saison", type="integer", nullable=false)
     */
    private $saison;

    /**
     * @var \TeamsLiga
     *
     * @ORM\ManyToOne(targetEntity="TeamsLiga")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_id", referencedColumnName="team_id")
     * })
     */
    private $team;

    public function getStrafeId(): ?int
    {
        return $this->strafeId;
    }

    public function getVerwarnung(): ?string
    {
        return $this->verwarnung;
    }

    public function setVerwarnung(string $verwarnung): self
    {
        $this->verwarnung = $verwarnung;

        return $this;
    }

    public function getTurnierId(): ?int
    {
        return $this->turnierId;
    }

    public function setTurnierId(?int $turnierId): self
    {
        $this->turnierId = $turnierId;

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

    public function getProzentsatz(): ?string
    {
        return $this->prozentsatz;
    }

    public function setProzentsatz(string $prozentsatz): self
    {
        $this->prozentsatz = $prozentsatz;

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
