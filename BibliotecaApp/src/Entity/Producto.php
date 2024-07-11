<?php
// src/Entity/Producto.php

namespace App\Entity;

use App\Repository\ProductoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductoRepository::class)]
class Producto
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Codigo_ID = null;

    #[ORM\Column(length: 100)]
    private ?string $Titulo = null;

    #[ORM\Column(type: 'string', length: 255)]
    private $autor;

    #[ORM\Column(type: 'string', length: 20, unique: true)]
    private $isbn;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $categoria;

    #[ORM\Column(type: 'date', nullable: true)]
    private $fecha_publicacion;

    #[ORM\Column(type: 'integer')]
    private $cantidad;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodigoID(): ?int
    {
        return $this->Codigo_ID;
    }

    public function setCodigoID(int $Codigo_ID): static
    {
        $this->Codigo_ID = $Codigo_ID;
        return $this;
    }

    public function getTitulo(): ?string
    {
        return $this->Titulo;
    }

    public function setTitulo(string $Titulo): static
    {
        $this->Titulo = $Titulo;
        return $this;
    }

    public function getAutor(): ?string
    {
        return $this->autor;
    }

    public function setAutor(?string $autor): static
    {
        $this->autor = $autor;
        return $this;
    }

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): static
    {
        $this->isbn = $isbn;
        return $this;
    }

    public function getCategoria(): ?string
    {
        return $this->categoria;
    }

    public function setCategoria(?string $categoria): static
    {
        $this->categoria = $categoria;
        return $this;
    }

    public function getFechaPublicacion(): ?\DateTimeInterface
    {
        return $this->fecha_publicacion;
    }

    public function setFechaPublicacion(?\DateTimeInterface $fecha_publicacion): static
    {
        $this->fecha_publicacion = $fecha_publicacion;
        return $this;
    }

    public function getCantidad(): ?int
    {
        return $this->cantidad;
    }

    public function setCantidad(int $cantidad): static
    {
        $this->cantidad = $cantidad;
        return $this;
    }
}

?>