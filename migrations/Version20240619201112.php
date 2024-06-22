<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240619201112 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE order_pizza (pizza_count INT NOT NULL, id INT AUTO_INCREMENT NOT NULL, orderId INT NOT NULL, pizzaId INT NOT NULL, INDEX IDX_4C43F692FA237437 (orderId), INDEX IDX_4C43F692CB6E194B (pizzaId), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE order_pizza ADD CONSTRAINT FK_4C43F692FA237437 FOREIGN KEY (orderId) REFERENCES app_order (id)');
        $this->addSql('ALTER TABLE order_pizza ADD CONSTRAINT FK_4C43F692CB6E194B FOREIGN KEY (pizzaId) REFERENCES pizza_ingredient (id)');
        $this->addSql('ALTER TABLE order_pizza_ingredient DROP FOREIGN KEY FK_DE0D423CB6E194B');
        $this->addSql('ALTER TABLE order_pizza_ingredient DROP FOREIGN KEY FK_DE0D423FA237437');
        $this->addSql('DROP TABLE order_pizza_ingredient');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE order_pizza_ingredient (pizza_count INT NOT NULL, id INT AUTO_INCREMENT NOT NULL, orderId INT NOT NULL, pizzaId INT NOT NULL, INDEX IDX_DE0D423FA237437 (orderId), INDEX IDX_DE0D423CB6E194B (pizzaId), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_0900_ai_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE order_pizza_ingredient ADD CONSTRAINT FK_DE0D423CB6E194B FOREIGN KEY (pizzaId) REFERENCES pizza_ingredient (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE order_pizza_ingredient ADD CONSTRAINT FK_DE0D423FA237437 FOREIGN KEY (orderId) REFERENCES app_order (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE order_pizza DROP FOREIGN KEY FK_4C43F692FA237437');
        $this->addSql('ALTER TABLE order_pizza DROP FOREIGN KEY FK_4C43F692CB6E194B');
        $this->addSql('DROP TABLE order_pizza');
    }
}
