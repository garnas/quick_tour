<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TurniereListe
 *
 * @ORM\Table(name="turniere_liste", indexes={@ORM\Index(name="turniere_liste_ibfk_2", columns={"turnier_id"}), @ORM\Index(name="turniere_liste_ibfk_1", columns={"team_id"})})
 * @ORM\Entity
 */
class TurniereListe
{
    /**
     * @var int
     *
     * @ORM\Column(name="liste_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $listeId;

    /**
     * @var string
     *
     * @ORM\Column(name="liste", type="string", length=0, nullable=false, options={"default"="'melde'"})
     */
    private $liste = '\'melde\'';

    /**
     * @var int|null
     *
     * @ORM\Column(name="position_warteliste", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $positionWarteliste = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="freilos_gesetzt", type="string", length=0, nullable=false, options={"default"="'Nein'"})
     */
    private $freilosGesetzt = '\'Nein\'';

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

    public function getListeId(): ?int
    {
        return $this->listeId;
    }

    public function getListe(): ?string
    {
        return $this->liste;
    }

    public function setListe(string $liste): self
    {
        $this->liste = $liste;

        return $this;
    }

    public function getPositionWarteliste(): ?int
    {
        return $this->positionWarteliste;
    }

    public function setPositionWarteliste(?int $positionWarteliste): self
    {
        $this->positionWarteliste = $positionWarteliste;

        return $this;
    }

    public function getFreilosGesetzt(): ?string
    {
        return $this->freilosGesetzt;
    }

    public function setFreilosGesetzt(string $freilosGesetzt): self
    {
        $this->freilosGesetzt = $freilosGesetzt;

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
