<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200601104225 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE membre_eglise (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, postnom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, fonction_assumee VARCHAR(255) NOT NULL, sexe VARCHAR(255) NOT NULL, etat_civil VARCHAR(255) NOT NULL, telephone INT DEFAULT NULL, adresse_avenue VARCHAR(255) NOT NULL, adresse_numero VARCHAR(255) NOT NULL, adresse_quartier VARCHAR(255) NOT NULL, adresse_commune VARCHAR(255) NOT NULL, date_enregistrement DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE membre_eglise');
    }
}
