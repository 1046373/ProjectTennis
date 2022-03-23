<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220323140828 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE aanmeldingen (id INT AUTO_INCREMENT NOT NULL, speler_id INT NOT NULL, toernooi_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE scholen (id INT AUTO_INCREMENT NOT NULL, naam VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE toernooien (id INT AUTO_INCREMENT NOT NULL, omschrijving VARCHAR(50) NOT NULL, datum DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE wedstrijden (id INT AUTO_INCREMENT NOT NULL, toernooi_id VARCHAR(255) NOT NULL, ronde INT NOT NULL, speler1_id INT NOT NULL, speler2_id INT NOT NULL, score1 INT NOT NULL, score2 INT NOT NULL, winnaar_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE aanmeldingen');
        $this->addSql('DROP TABLE scholen');
        $this->addSql('DROP TABLE toernooien');
        $this->addSql('DROP TABLE wedstrijden');
    }
}
