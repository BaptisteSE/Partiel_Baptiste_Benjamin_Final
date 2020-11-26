<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201126151000 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE destination (id INT AUTO_INCREMENT NOT NULL, destination VARCHAR(255) NOT NULL, distance INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE historique (id INT AUTO_INCREMENT NOT NULL, datedemande DATE NOT NULL, datedebut DATE NOT NULL, datefin DATE NOT NULL, etat VARCHAR(255) NOT NULL, commentaire VARCHAR(255) DEFAULT NULL, vehicule_id INT NOT NULL, destination_id INT NOT NULL, personne_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE motifrefus (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personne (id INT AUTO_INCREMENT NOT NULL, service_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, INDEX IDX_FCEC9EFED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, etage VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisation (id INT AUTO_INCREMENT NOT NULL, vehicule_id INT DEFAULT NULL, destination_id INT DEFAULT NULL, motifrefus_id INT DEFAULT NULL, personne_id INT DEFAULT NULL, datedemande DATE NOT NULL, datedebut DATETIME NOT NULL, datefin DATETIME NOT NULL, etat VARCHAR(255) NOT NULL, commentaire VARCHAR(255) NOT NULL, INDEX IDX_B02A3C434A4A3511 (vehicule_id), INDEX IDX_B02A3C43816C6140 (destination_id), INDEX IDX_B02A3C4368F39C39 (motifrefus_id), INDEX IDX_B02A3C43A21BD112 (personne_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehiculedisponible (id INT AUTO_INCREMENT NOT NULL, immatriculation VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE personne ADD CONSTRAINT FK_FCEC9EFED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE utilisation ADD CONSTRAINT FK_B02A3C434A4A3511 FOREIGN KEY (vehicule_id) REFERENCES vehiculedisponible (id)');
        $this->addSql('ALTER TABLE utilisation ADD CONSTRAINT FK_B02A3C43816C6140 FOREIGN KEY (destination_id) REFERENCES destination (id)');
        $this->addSql('ALTER TABLE utilisation ADD CONSTRAINT FK_B02A3C4368F39C39 FOREIGN KEY (motifrefus_id) REFERENCES motifrefus (id)');
        $this->addSql('ALTER TABLE utilisation ADD CONSTRAINT FK_B02A3C43A21BD112 FOREIGN KEY (personne_id) REFERENCES personne (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisation DROP FOREIGN KEY FK_B02A3C43816C6140');
        $this->addSql('ALTER TABLE utilisation DROP FOREIGN KEY FK_B02A3C4368F39C39');
        $this->addSql('ALTER TABLE utilisation DROP FOREIGN KEY FK_B02A3C43A21BD112');
        $this->addSql('ALTER TABLE personne DROP FOREIGN KEY FK_FCEC9EFED5CA9E6');
        $this->addSql('ALTER TABLE utilisation DROP FOREIGN KEY FK_B02A3C434A4A3511');
        $this->addSql('DROP TABLE destination');
        $this->addSql('DROP TABLE historique');
        $this->addSql('DROP TABLE motifrefus');
        $this->addSql('DROP TABLE personne');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE utilisation');
        $this->addSql('DROP TABLE vehiculedisponible');
    }
}
