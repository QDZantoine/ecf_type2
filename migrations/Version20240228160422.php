<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240228160422 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE individu ADD type_individu_id INT NOT NULL, ADD classe_id INT NOT NULL');
        $this->addSql('ALTER TABLE individu ADD CONSTRAINT FK_5EE42FCE312B7B9 FOREIGN KEY (type_individu_id) REFERENCES type_individu (id)');
        $this->addSql('ALTER TABLE individu ADD CONSTRAINT FK_5EE42FCE8F5EA509 FOREIGN KEY (classe_id) REFERENCES classe (id)');
        $this->addSql('CREATE INDEX IDX_5EE42FCE312B7B9 ON individu (type_individu_id)');
        $this->addSql('CREATE INDEX IDX_5EE42FCE8F5EA509 ON individu (classe_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE individu DROP FOREIGN KEY FK_5EE42FCE312B7B9');
        $this->addSql('ALTER TABLE individu DROP FOREIGN KEY FK_5EE42FCE8F5EA509');
        $this->addSql('DROP INDEX IDX_5EE42FCE312B7B9 ON individu');
        $this->addSql('DROP INDEX IDX_5EE42FCE8F5EA509 ON individu');
        $this->addSql('ALTER TABLE individu DROP type_individu_id, DROP classe_id');
    }
}
