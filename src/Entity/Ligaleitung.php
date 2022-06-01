<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ligaleitung
 *
 * @ORM\Table(name="ligaleitung", uniqueConstraints={@ORM\UniqueConstraint(name="login", columns={"login"})}, indexes={@ORM\Index(name="spieler_id", columns={"spieler_id"})})
 * @ORM\Entity
 */
class Ligaleitung
{
    /**
     * @var int
     *
     * @ORM\Column(name="ligaleitung_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ligaleitungId;

    /**
     * @var string
     *
     * @ORM\Column(name="funktion", type="string", length=0, nullable=false)
     */
    private $funktion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="login", type="string", length=255, nullable=true)
     */
    private $login;

    /**
     * @var string|null
     *
     * @ORM\Column(name="passwort", type="string", length=255, nullable=true)
     */
    private $passwort;

    /**
     * @var \Spieler
     *
     * @ORM\ManyToOne(targetEntity="Spieler")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="spieler_id", referencedColumnName="spieler_id")
     * })
     */
    private $spieler;

    public function getLigaleitungId(): ?int
    {
        return $this->ligaleitungId;
    }

    public function getFunktion(): ?string
    {
        return $this->funktion;
    }

    public function setFunktion(string $funktion): self
    {
        $this->funktion = $funktion;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): self
    {
        $this->login = $login;

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

    public function getSpieler(): ?Spieler
    {
        return $this->spieler;
    }

    public function setSpieler(?Spieler $spieler): self
    {
        $this->spieler = $spieler;

        return $this;
    }


}
