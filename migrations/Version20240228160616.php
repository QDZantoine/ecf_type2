<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240228160616 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ligne_evaluation ADD evaluation_id INT NOT NULL, ADD individu_id INT NOT NULL');
        $this->addSql('ALTER TABLE ligne_evaluation ADD CONSTRAINT FK_F08F4B68456C5646 FOREIGN KEY (evaluation_id) REFERENCES evaluation (id)');
        $this->addSql('ALTER TABLE ligne_evaluation ADD CONSTRAINT FK_F08F4B68480B6028 FOREIGN KEY (individu_id) REFERENCES individu (id)');
        $this->addSql('CREATE INDEX IDX_F08F4B68456C5646 ON ligne_evaluation (evaluation_id)');
        $this->addSql('CREATE INDEX IDX_F08F4B68480B6028 ON ligne_evaluation (individu_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ligne_evaluation DROP FOREIGN KEY FK_F08F4B68456C5646');
        $this->addSql('ALTER TABLE ligne_evaluation DROP FOREIGN KEY FK_F08F4B68480B6028');
        $this->addSql('DROP INDEX IDX_F08F4B68456C5646 ON ligne_evaluation');
        $this->addSql('DROP INDEX IDX_F08F4B68480B6028 ON ligne_evaluation');
        $this->addSql('ALTER TABLE ligne_evaluation DROP evaluation_id, DROP individu_id');
    }
}
