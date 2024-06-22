<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240619205021 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE order_pizza DROP FOREIGN KEY FK_4C43F692CB6E194B');
        $this->addSql('ALTER TABLE order_pizza ADD CONSTRAINT FK_4C43F692CB6E194B FOREIGN KEY (pizzaId) REFERENCES pizza (id)');
        $this->addSql('CREATE UNIQUE INDEX orderid_pizzaid ON order_pizza (orderId, pizzaId)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE order_pizza DROP FOREIGN KEY FK_4C43F692CB6E194B');
        $this->addSql('DROP INDEX orderid_pizzaid ON order_pizza');
        $this->addSql('ALTER TABLE order_pizza ADD CONSTRAINT FK_4C43F692CB6E194B FOREIGN KEY (pizzaId) REFERENCES pizza_ingredient (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
