<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Niveausonore
 *
 * @ORM\Table(name="niveausonore")
 * @ORM\Entity
 */
class Niveausonore
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="Mesure", type="integer", nullable=false)
     */
    private $mesure;

    /**
     * @var int
     *
     * @ORM\Column(name="MoyenMoins", type="integer", nullable=false)
     */
    private $moyenmoins;

    /**
     * @var int
     *
     * @ORM\Column(name="MoyenPlus", type="integer", nullable=false)
     */
    private $moyenplus;

    /**
     * @var string
     *
     * @ORM\Column(name="MessageVert", type="string", length=45, nullable=false)
     */
    private $messagevert;

    /**
     * @var string
     *
     * @ORM\Column(name="MessageOrange", type="string", length=45, nullable=false)
     */
    private $messageorange;

    /**
     * @var string
     *
     * @ORM\Column(name="MessageRouge", type="string", length=45, nullable=false)
     */
    private $messagerouge;


}
