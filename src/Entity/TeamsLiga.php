<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamsLiga
 *
 * @ORM\Table(name="teams_liga", uniqueConstraints={@ORM\UniqueConstraint(name="teamname", columns={"teamname"})})
 * @ORM\Entity
 */
class TeamsLiga
{
    /**
     * @var int
     *
     * @ORM\Column(name="team_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $teamId;

    /**
     * @var string
     *
     * @ORM\Column(name="teamname", type="string", length=255, nullable=false)
     */
    private $teamname;

    /**
     * @var string
     *
     * @ORM\Column(name="ligateam", type="string", length=0, nullable=false, options={"default"="'Ja'"})
     */
    private $ligateam = '\'Ja\'';

    /**
     * @var string
     *
     * @ORM\Column(name="terminplaner", type="string", length=0, nullable=false, options={"default"="'Nein'"})
     */
    private $terminplaner = '\'Nein\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="passwort", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $passwort = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="passwort_geaendert", type="string", length=0, nullable=false, options={"default"="'Nein'"})
     */
    private $passwortGeaendert = '\'Nein\'';

    /**
     * @var int|null
     *
     * @ORM\Column(name="freilose", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $freilose = NULL;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="zweites_freilos", type="date", nullable=true, options={"default"="NULL","comment"="2 Schiris 2 Freilose"})
     */
    private $zweitesFreilos = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="aktiv", type="string", length=0, nullable=false, options={"default"="'Ja'"})
     */
    private $aktiv = '\'Ja\'';

    public function getTeamId(): ?int
    {
        return $this->teamId;
    }

    public function getTeamname(): ?string
    {
        return $this->teamname;
    }

    public function setTeamname(string $teamname): self
    {
        $this->teamname = $teamname;

        return $this;
    }

    public function getLigateam(): ?string
    {
        return $this->ligateam;
    }

    public function setLigateam(string $ligateam): self
    {
        $this->ligateam = $ligateam;

        return $this;
    }

    public function getTerminplaner(): ?string
    {
        return $this->terminplaner;
    }

    public function setTerminplaner(string $terminplaner): self
    {
        $this->terminplaner = $terminplaner;

        return $this;
    }

    public function getPasswort(): ?string
    {
        return $this->passwort;
    }

    public function setPasswort(?string $passwort): self
    {
        $this->passwort = $passwort;

        return $this;
    }

    public function getPasswortGeaendert(): ?string
    {
        return $this->passwortGeaendert;
    }

    public function setPasswortGeaendert(string $passwortGeaendert): self
    {
        $this->passwortGeaendert = $passwortGeaendert;

        return $this;
    }

    public function getFreilose(): ?int
    {
        return $this->freilose;
    }

    public function setFreilose(?int $freilose): self
    {
        $this->freilose = $freilose;

        return $this;
    }

    public function getZweitesFreilos(): ?\DateTimeInterface
    {
        return $this->zweitesFreilos;
    }

    public function setZweitesFreilos(?\DateTimeInterface $zweitesFreilos): self
    {
        $this->zweitesFreilos = $zweitesFreilos;

        return $this;
    }

    public function getAktiv(): ?string
    {
        return $this->aktiv;
    }

    public function setAktiv(string $aktiv): self
    {
        $this->aktiv = $aktiv;

        return $this;
    }


}
