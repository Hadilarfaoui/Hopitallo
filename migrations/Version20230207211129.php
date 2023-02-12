<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230207211129 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE consultation_urgence ADD demande_urgence_id INT NOT NULL');
        $this->addSql('ALTER TABLE consultation_urgence ADD CONSTRAINT FK_367E9A2FA147751C FOREIGN KEY (demande_urgence_id) REFERENCES demande_urgence (id)');
        $this->addSql('CREATE INDEX IDX_367E9A2FA147751C ON consultation_urgence (demande_urgence_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE consultation_urgence DROP FOREIGN KEY FK_367E9A2FA147751C');
        $this->addSql('DROP INDEX IDX_367E9A2FA147751C ON consultation_urgence');
        $this->addSql('ALTER TABLE consultation_urgence DROP demande_urgence_id');
    }
}
