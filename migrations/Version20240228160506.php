<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240228160506 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trimestre ADD annee_scolaire_id INT NOT NULL');
        $this->addSql('ALTER TABLE trimestre ADD CONSTRAINT FK_5406BC489331C741 FOREIGN KEY (annee_scolaire_id) REFERENCES annee_scolaire (id)');
        $this->addSql('CREATE INDEX IDX_5406BC489331C741 ON trimestre (annee_scolaire_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trimestre DROP FOREIGN KEY FK_5406BC489331C741');
        $this->addSql('DROP INDEX IDX_5406BC489331C741 ON trimestre');
        $this->addSql('ALTER TABLE trimestre DROP annee_scolaire_id');
    }
}
