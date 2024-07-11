<?php

namespace App\Entity;

use App\Repository\VentaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VentaRepository::class)]
class Venta
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Usuario::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $usuario;

    #[ORM\ManyToOne(targetEntity: Producto::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $libro;

    #[ORM\Column(type: 'date')]
    private $fecha_prestamo;

    #[ORM\Column(type: 'date', nullable: true)]
    private $fecha_devolucion;

    #[ORM\Column(type: 'date', nullable: true)]
    private $fecha_devolucion_real;

    public function getId(): ?int
    {
        return $this->id;
    }
}
