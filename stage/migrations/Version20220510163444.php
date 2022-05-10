<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220510163444 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE soutenance DROP FOREIGN KEY FK_4D59FF6E7CF12A69');
        $this->addSql('DROP INDEX IDX_4D59FF6E7CF12A69 ON soutenance');
        $this->addSql('ALTER TABLE soutenance CHANGE enseignants_id Matricule INT DEFAULT NULL');
        $this->addSql('ALTER TABLE soutenance ADD CONSTRAINT FK_4D59FF6E90435E3F FOREIGN KEY (Matricule) REFERENCES enseignant (id)');
        $this->addSql('CREATE INDEX IDX_4D59FF6E90435E3F ON soutenance (Matricule)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE soutenance DROP FOREIGN KEY FK_4D59FF6E90435E3F');
        $this->addSql('DROP INDEX IDX_4D59FF6E90435E3F ON soutenance');
        $this->addSql('ALTER TABLE soutenance CHANGE Matricule enseignants_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE soutenance ADD CONSTRAINT FK_4D59FF6E7CF12A69 FOREIGN KEY (enseignants_id) REFERENCES enseignant (id)');
        $this->addSql('CREATE INDEX IDX_4D59FF6E7CF12A69 ON soutenance (enseignants_id)');
    }
}
