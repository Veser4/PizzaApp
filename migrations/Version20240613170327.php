<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240613170327 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pizza_ingredient (pizza_id INT NOT NULL, count_of_ingredient INT NOT NULL, id INT AUTO_INCREMENT NOT NULL, ingredient_id INT NOT NULL, INDEX IDX_6FF6C03F933FE08C (ingredient_id), UNIQUE INDEX pizzaid_ingredientid (pizza_id, ingredient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE pizza_ingredient ADD CONSTRAINT FK_6FF6C03F933FE08C FOREIGN KEY (ingredient_id) REFERENCES ingredient (id)');
        $this->addSql('ALTER TABLE pizza  AUTO_INCREMENT  = 0;');
        $this->addSql("insert into pizza (name, description, avatarPath, preparationTime, price, weight, ingredients) VALUE( 'Pizza Peppironi', 'Самая вкусная пицца на свете с толыстым слоем сыра и 15 кучсочками пеппирони', 'pizza_image.png', '14-20 minutes', 12, 500, 'пеппирони&сыр чез&помидоры&фирменный соус' ); ");
        $this->addSql("insert into pizza (name, description, avatarPath, preparationTime, price, weight, ingredients) VALUE( 'Креветки со сладким чили', 'Новинка на рынке, одна из самых потрясающих пицца нашего времни!', 'pizza_image.png', '10-15 минут', 15, 630, 'Креветки&ананасы&соус&сладкий чили&сладкий перец&моцарелла&фирменный соус альфредо' );");
        $this->addSql("insert into pizza (name, description, avatarPath, preparationTime, price, weight, ingredients) VALUE( 'Сырная', 'Лучшая пицца для лбитейлей огромного количества сыра!', 'pizza_image.png', '10 минут', 10, 470, 'Моцарелла&сыр чеддер&сыр пармезан&фирменный соус альфредо' );");
        $this->addSql("insert into pizza (name, description, avatarPath, preparationTime, price, weight, ingredients) VALUE( 'Двойной цыпленок', 'Одна из лучших пицц на свете', 'pizza_image.png', '10-15 минут', 20, 520, 'Цыпленок&моцарелла&фирменный соус альфредо' );");
        $this->addSql("insert into pizza (name, description, avatarPath, preparationTime, price, weight, ingredients) VALUE( 'Ветчина и сыр', 'Одна из лучших пицц на свете', 'pizza_image.png', '10 минут', 25, 550, 'Ветчина&моцарелла&фирменный соус альфредо' );");
        $this->addSql("insert into pizza (name, description, avatarPath, preparationTime, price, weight, ingredients) VALUE( 'Чоризо фреш', 'Одна из лучших пицц на свете', 'pizza_image.png', '20 минут', 20, 470, 'Острые колбаски чоризо&сладкий перец&моцарелла&фирменный томатный соус' );");
        $this->addSql("insert into pizza (name, description, avatarPath, preparationTime, price, weight, ingredients) VALUE( 'Мясная', 'Одна из лучших пицц на свете', 'pizza_image.png', '15 минут', 25, 590, 'Цыпленок&ветчина&пикантная пепперони&острые колбаски чоризо&моцарелла&фирменный томатный соус' );");
        $this->addSql('DELETE FROM ingredient;');
        $this->addSql('ALTER TABLE ingredient AUTO_INCREMENT = 0;');
        $this->addSql("insert into ingredient (name) VALUE('Цыплёнок');"); //1
        $this->addSql("insert into ingredient (name) VALUE('Ветчина');"); //2
        $this->addSql("insert into ingredient (name) VALUE('Пепперони');"); //3
        $this->addSql("insert into ingredient (name) VALUE('Острые Колбаски');"); //4
        $this->addSql("insert into ingredient (name) VALUE('Моцарелла');"); //5
        $this->addSql("insert into ingredient (name) VALUE('Фирменные томатный соус');"); //6
        $this->addSql("insert into ingredient (name) VALUE('Сладкий перец');"); //7
        $this->addSql("insert into ingredient (name) VALUE('Сыр чеддер');"); //8
        $this->addSql("insert into ingredient (name) VALUE('Сыр пармезан');"); //9
        $this->addSql("insert into ingredient (name) VALUE('Ананасы');"); //10
        $this->addSql("insert into ingredient (name) VALUE('Креветки');"); //11
        $this->addSql("insert into ingredient (name) VALUE('Помидоры');"); //12
        $this->addSql("insert into ingredient (name) VALUE('Фирменный соус');"); //13
        $this->addSql("insert into ingredient (name) VALUE('Сыр чез');"); //14
        $this->addSql("insert into ingredient (name) VALUE('Фирменные соус альфредо');"); //15
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
        $this->addSql('ALTER TABLE pizza_ingredient DROP FOREIGN KEY FK_6FF6C03F933FE08C');
        $this->addSql('DROP TABLE pizza_ingredient');
    }
}
