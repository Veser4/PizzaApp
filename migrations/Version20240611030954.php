<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240611030954 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pizza ADD avatarPath VARCHAR(255) NOT NULL');
        $this->addSql("insert into pizza (name, description, avatarPath, preparationTime, price, weight, ingredients) VALUE( 'Pizza Peppironi', 'Самая вкусная пицца на свете с толыстым слоем сыра и 15 кучсочками пеппирони', 'pizza_image.png', '14-20 minutes', 12, 500, 'пеппирони&сыр чез&помидоры&фирменный соус' ); ");
        $this->addSql("insert into pizza (name, description, avatarPath, preparationTime, price, weight, ingredients) VALUE( 'Креветки со сладким чили', 'Новинка на рынке, одна из самых потрясающих пицца нашего времни!', 'pizza_image.png', '10-15 минут', 15, 630, 'Креветки&ананасы&соус&сладкий чили&сладкий перец&моцарелла&фирменный соус альфредо' );");
        $this->addSql("insert into pizza (name, description, avatarPath, preparationTime, price, weight, ingredients) VALUE( 'Сырная', 'Лучшая пицца для лбитейлей огромного количества сыра!', 'pizza_image.png', '10 минут', 10, 470, 'Моцарелла&сыр чеддер&сыр пармезан&фирменный соус альфредо' );");
        $this->addSql("insert into pizza (name, description, avatarPath, preparationTime, price, weight, ingredients) VALUE( 'Двойной цыпленок', 'Одна из лучших пицц на свете', 'pizza_image.png', '10-15 минут', 20, 520, 'Цыпленок&моцарелла&фирменный соус альфредо' );");
        $this->addSql("insert into pizza (name, description, avatarPath, preparationTime, price, weight, ingredients) VALUE( 'Ветчина и сыр', 'Одна из лучших пицц на свете', 'pizza_image.png', '10 минут', 25, 550, 'Ветчина&моцарелла&фирменный соус альфредо' );");
        $this->addSql("insert into pizza (name, description, avatarPath, preparationTime, price, weight, ingredients) VALUE( 'Чоризо фреш', 'Одна из лучших пицц на свете', 'pizza_image.png', '20 минут', 20, 470, 'Острые колбаски чоризо&сладкий перец&моцарелла&фирменный томатный соус' );");
        $this->addSql("insert into pizza (name, description, avatarPath, preparationTime, price, weight, ingredients) VALUE( 'Мясная', 'Одна из лучших пицц на свете', 'pizza_image.png', '15 минут', 25, 590, 'Цыпленок&ветчина&пикантная пепперони&острые колбаски чоризо&моцарелла&фирменный томатный соус' );");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pizza DROP avatarPath');
        $this->addSql('DELETE from pizza');
    }   
}
