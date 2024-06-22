<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240620211021 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DELETE FROM pizza_ingredient;');
        $this->addSql('ALTER TABLE pizza_ingredient AUTO_INCREMENT = 0;');
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(1, 3, 10);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(1, 12, 8);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(1, 13, 0);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(1, 14, 0);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(2, 11, 10);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(2, 10, 8);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(2, 7, 8);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(2, 5, 0);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(2, 15, 0);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(3, 5, 0);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(3, 8, 0);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(3, 9, 0);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(3, 15, 0);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(4, 1, 10);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(4, 5, 0);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(4, 15, 0);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(5, 2, 15);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(5, 5, 0);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(5, 15, 0);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(6, 4, 15);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(6, 7, 8);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(6, 5, 0);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(6, 6, 0);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(7, 1, 10);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(7, 2, 6);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(7, 4, 5);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(7, 5, 0);");
        $this->addSql("insert into pizza_ingredient (pizza_id, ingredient_id, count_of_ingredient) VALUE(7, 6, 0);");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
