<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TurniereBerichte
 *
 * @ORM\Table(name="turniere_berichte", indexes={@ORM\Index(name="turnier_id", columns={"turnier_id"})})
 * @ORM\Entity
 */
class TurniereBerichte
{
    /**
     * @var int
     *
     * @ORM\Column(name="bericht_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $berichtId;

    /**
     * @var string
     *
     * @ORM\Column(name="bericht", type="string", length=1900, nullable=false)
     */
    private $bericht;

    /**
     * @var string
     *
     * @ORM\Column(name="kader_ueberprueft", type="string", length=0, nullable=false)
     */
    private $kaderUeberprueft;

    /**
     * @var \TurniereLiga
     *
     * @ORM\ManyToOne(targetEntity="TurniereLiga")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="turnier_id", referencedColumnName="turnier_id")
     * })
     */
    private $turnier;

    public function getBerichtId(): ?int
    {
        return $this->berichtId;
    }

    public function getBericht(): ?string
    {
        return $this->bericht;
    }

    public function setBericht(string $bericht): self
    {
        $this->bericht = $bericht;

        return $this;
    }

    public function getKaderUeberprueft(): ?string
    {
        return $this->kaderUeberprueft;
    }

    public function setKaderUeberprueft(string $kaderUeberprueft): self
    {
        $this->kaderUeberprueft = $kaderUeberprueft;

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
