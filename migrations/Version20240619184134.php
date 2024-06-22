<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240619184134 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE app_order DROP FOREIGN KEY FK_23FA1E5564B64DCC');
        $this->addSql('DROP INDEX IDX_23FA1E5564B64DCC ON app_order');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE app_order ADD CONSTRAINT FK_23FA1E5564B64DCC FOREIGN KEY (userId) REFERENCES user (user_id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_23FA1E5564B64DCC ON app_order (userId)');
    }
}
