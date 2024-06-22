<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240619185143 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE app_order (date VARCHAR(255) NOT NULL, price INT NOT NULL, id INT AUTO_INCREMENT NOT NULL, userId INT NOT NULL, INDEX IDX_23FA1E5564B64DCC (userId), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE order_pizza_ingredient (pizza_count INT NOT NULL, id INT AUTO_INCREMENT NOT NULL, orderId INT NOT NULL, pizzaId INT NOT NULL, INDEX IDX_DE0D423FA237437 (orderId), INDEX IDX_DE0D423CB6E194B (pizzaId), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE app_order ADD CONSTRAINT FK_23FA1E5564B64DCC FOREIGN KEY (userId) REFERENCES user (user_id)');
        $this->addSql('ALTER TABLE order_pizza_ingredient ADD CONSTRAINT FK_DE0D423FA237437 FOREIGN KEY (orderId) REFERENCES app_order (id)');
        $this->addSql('ALTER TABLE order_pizza_ingredient ADD CONSTRAINT FK_DE0D423CB6E194B FOREIGN KEY (pizzaId) REFERENCES pizza_ingredient (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE app_order DROP FOREIGN KEY FK_23FA1E5564B64DCC');
        $this->addSql('ALTER TABLE order_pizza_ingredient DROP FOREIGN KEY FK_DE0D423FA237437');
        $this->addSql('ALTER TABLE order_pizza_ingredient DROP FOREIGN KEY FK_DE0D423CB6E194B');
        $this->addSql('DROP TABLE app_order');
        $this->addSql('DROP TABLE order_pizza_ingredient');
    }
}
