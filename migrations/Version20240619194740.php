<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240619194740 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE order_pizza_ingredient DROP FOREIGN KEY FK_DE0D423CB6E194B');
        $this->addSql('DROP INDEX IDX_DE0D423CB6E194B ON order_pizza_ingredient');
        $this->addSql('ALTER TABLE order_pizza_ingredient DROP pizzaId');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE order_pizza_ingredient ADD pizzaId INT NOT NULL');
        $this->addSql('ALTER TABLE order_pizza_ingredient ADD CONSTRAINT FK_DE0D423CB6E194B FOREIGN KEY (pizzaId) REFERENCES pizza_ingredient (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_DE0D423CB6E194B ON order_pizza_ingredient (pizzaId)');
    }
}
