<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamsKontakt
 *
 * @ORM\Table(name="teams_kontakt", indexes={@ORM\Index(name="team_id", columns={"team_id"})})
 * @ORM\Entity
 */
class TeamsKontakt
{
    /**
     * @var int
     *
     * @ORM\Column(name="teams_kontakt_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $teamsKontaktId;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="public", type="string", length=0, nullable=false, options={"default"="Ja"})
     */
    private $public = 'Ja';

    /**
     * @var string
     *
     * @ORM\Column(name="get_info_mail", type="string", length=0, nullable=false, options={"default"="Ja"})
     */
    private $getInfoMail = 'Ja';

    /**
     * @var \TeamsLiga
     *
     * @ORM\ManyToOne(targetEntity="TeamsLiga")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_id", referencedColumnName="team_id")
     * })
     */
    private $team;

    public function getTeamsKontaktId(): ?int
    {
        return $this->teamsKontaktId;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPublic(): ?string
    {
        return $this->public;
    }

    public function setPublic(string $public): self
    {
        $this->public = $public;

        return $this;
    }

    public function getGetInfoMail(): ?string
    {
        return $this->getInfoMail;
    }

    public function setGetInfoMail(string $getInfoMail): self
    {
        $this->getInfoMail = $getInfoMail;

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
