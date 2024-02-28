<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240228160313 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE college (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(10) NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE evaluation ADD trimestre_id INT NOT NULL, ADD individu_id INT NOT NULL, ADD matiere_id INT NOT NULL, ADD college_id INT NOT NULL');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A575B9DB5D9D FOREIGN KEY (trimestre_id) REFERENCES trimestre (id)');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A575480B6028 FOREIGN KEY (individu_id) REFERENCES individu (id)');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A575F46CD258 FOREIGN KEY (matiere_id) REFERENCES matiere (id)');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A575770124B2 FOREIGN KEY (college_id) REFERENCES college (id)');
        $this->addSql('CREATE INDEX IDX_1323A575B9DB5D9D ON evaluation (trimestre_id)');
        $this->addSql('CREATE INDEX IDX_1323A575480B6028 ON evaluation (individu_id)');
        $this->addSql('CREATE INDEX IDX_1323A575F46CD258 ON evaluation (matiere_id)');
        $this->addSql('CREATE INDEX IDX_1323A575770124B2 ON evaluation (college_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A575770124B2');
        $this->addSql('DROP TABLE college');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A575B9DB5D9D');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A575480B6028');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A575F46CD258');
        $this->addSql('DROP INDEX IDX_1323A575B9DB5D9D ON evaluation');
        $this->addSql('DROP INDEX IDX_1323A575480B6028 ON evaluation');
        $this->addSql('DROP INDEX IDX_1323A575F46CD258 ON evaluation');
        $this->addSql('DROP INDEX IDX_1323A575770124B2 ON evaluation');
        $this->addSql('ALTER TABLE evaluation DROP trimestre_id, DROP individu_id, DROP matiere_id, DROP college_id');
    }
}
