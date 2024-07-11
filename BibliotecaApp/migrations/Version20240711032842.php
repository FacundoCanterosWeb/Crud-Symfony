<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240711032842 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE producto (id INT AUTO_INCREMENT NOT NULL, codigo_id INT NOT NULL, titulo VARCHAR(100) NOT NULL, autor VARCHAR(255) NOT NULL, isbn VARCHAR(20) NOT NULL, categoria VARCHAR(100) DEFAULT NULL, fecha_publicacion DATE DEFAULT NULL, cantidad INT NOT NULL, UNIQUE INDEX UNIQ_A7BB0615CC1CF4E6 (isbn), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuario (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(30) NOT NULL, apellido VARCHAR(40) NOT NULL, correo VARCHAR(100) NOT NULL, telefono INT NOT NULL, dni INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE venta (id INT AUTO_INCREMENT NOT NULL, usuario_id INT NOT NULL, libro_id INT NOT NULL, fecha_prestamo DATE NOT NULL, fecha_devolucion DATE DEFAULT NULL, fecha_devolucion_real DATE DEFAULT NULL, INDEX IDX_8FE7EE55DB38439E (usuario_id), INDEX IDX_8FE7EE55C0238522 (libro_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE venta ADD CONSTRAINT FK_8FE7EE55DB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id)');
        $this->addSql('ALTER TABLE venta ADD CONSTRAINT FK_8FE7EE55C0238522 FOREIGN KEY (libro_id) REFERENCES producto (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE venta DROP FOREIGN KEY FK_8FE7EE55DB38439E');
        $this->addSql('ALTER TABLE venta DROP FOREIGN KEY FK_8FE7EE55C0238522');
        $this->addSql('DROP TABLE producto');
        $this->addSql('DROP TABLE usuario');
        $this->addSql('DROP TABLE venta');
    }
}
