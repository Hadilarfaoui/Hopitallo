<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230207210907 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_urgence ADD hopital_id INT NOT NULL, ADD patient_id INT NOT NULL, ADD medecin_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE demande_urgence ADD CONSTRAINT FK_438AD062CC0FBF92 FOREIGN KEY (hopital_id) REFERENCES hopital (id)');
        $this->addSql('ALTER TABLE demande_urgence ADD CONSTRAINT FK_438AD0626B899279 FOREIGN KEY (patient_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE demande_urgence ADD CONSTRAINT FK_438AD0624F31A84 FOREIGN KEY (medecin_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_438AD062CC0FBF92 ON demande_urgence (hopital_id)');
        $this->addSql('CREATE INDEX IDX_438AD0626B899279 ON demande_urgence (patient_id)');
        $this->addSql('CREATE INDEX IDX_438AD0624F31A84 ON demande_urgence (medecin_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_urgence DROP FOREIGN KEY FK_438AD062CC0FBF92');
        $this->addSql('ALTER TABLE demande_urgence DROP FOREIGN KEY FK_438AD0626B899279');
        $this->addSql('ALTER TABLE demande_urgence DROP FOREIGN KEY FK_438AD0624F31A84');
        $this->addSql('DROP INDEX IDX_438AD062CC0FBF92 ON demande_urgence');
        $this->addSql('DROP INDEX IDX_438AD0626B899279 ON demande_urgence');
        $this->addSql('DROP INDEX IDX_438AD0624F31A84 ON demande_urgence');
        $this->addSql('ALTER TABLE demande_urgence DROP hopital_id, DROP patient_id, DROP medecin_id');
    }
}
