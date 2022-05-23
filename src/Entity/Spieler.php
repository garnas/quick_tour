<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Spieler
 *
 * @ORM\Table(name="spieler", indexes={@ORM\Index(name="team_id", columns={"team_id"})})
 * @ORM\Entity
 */
class Spieler
{
    /**
     * @var int
     *
     * @ORM\Column(name="spieler_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $spielerId;

    /**
     * @var string
     *
     * @ORM\Column(name="vorname", type="string", length=255, nullable=false)
     */
    private $vorname;

    /**
     * @var string
     *
     * @ORM\Column(name="nachname", type="string", length=255, nullable=false)
     */
    private $nachname;

    /**
     * @var int
     *
     * @ORM\Column(name="jahrgang", type="integer", nullable=false)
     */
    private $jahrgang;

    /**
     * @var string
     *
     * @ORM\Column(name="geschlecht", type="string", length=0, nullable=false)
     */
    private $geschlecht;

    /**
     * @var int|null
     *
     * @ORM\Column(name="schiri", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $schiri = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="junior", type="string", length=0, nullable=true, options={"default"="NULL"})
     */
    private $junior = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="letzte_saison", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $letzteSaison = NULL;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $timestamp = 'NULL';

    /**
     * @var \TeamsLiga
     *
     * @ORM\ManyToOne(targetEntity="TeamsLiga")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_id", referencedColumnName="team_id")
     * })
     */
    private $team;

    public function getSpielerId(): ?int
    {
        return $this->spielerId;
    }

    public function getVorname(): ?string
    {
        return $this->vorname;
    }

    public function setVorname(string $vorname): self
    {
        $this->vorname = $vorname;

        return $this;
    }

    public function getNachname(): ?string
    {
        return $this->nachname;
    }

    public function setNachname(string $nachname): self
    {
        $this->nachname = $nachname;

        return $this;
    }

    public function getJahrgang(): ?int
    {
        return $this->jahrgang;
    }

    public function setJahrgang(int $jahrgang): self
    {
        $this->jahrgang = $jahrgang;

        return $this;
    }

    public function getGeschlecht(): ?string
    {
        return $this->geschlecht;
    }

    public function setGeschlecht(string $geschlecht): self
    {
        $this->geschlecht = $geschlecht;

        return $this;
    }

    public function getSchiri(): ?int
    {
        return $this->schiri;
    }

    public function setSchiri(?int $schiri): self
    {
        $this->schiri = $schiri;

        return $this;
    }

    public function getJunior(): ?string
    {
        return $this->junior;
    }

    public function setJunior(?string $junior): self
    {
        $this->junior = $junior;

        return $this;
    }

    public function getLetzteSaison(): ?int
    {
        return $this->letzteSaison;
    }

    public function setLetzteSaison(?int $letzteSaison): self
    {
        $this->letzteSaison = $letzteSaison;

        return $this;
    }

    public function getTimestamp(): ?\DateTimeInterface
    {
        return $this->timestamp;
    }

    public function setTimestamp(?\DateTimeInterface $timestamp): self
    {
        $this->timestamp = $timestamp;

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
