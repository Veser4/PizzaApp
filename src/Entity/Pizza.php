<?php

namespace App\Entity;

class Pizza {
    //Construct
    public function __construct( 
        private ?int $id,
        private string $name,
        private string $avatarPath,
        private string $description,
        private string $preparationTime,
        private int $weight,
        private int $price,
    )
    {
    }
    
    //Getters

    //getId
    public function getId() : int
    {
        return $this->id;
    }

    //getName
    public function getName() : string
    {
        return $this->name;
    }

    //getAvatarPath
    public function getAvatarPath() : string
    {
        return $this->avatarPath;
    }

    //getDescription
    public function getDescription() : string
    {
        return $this->description;
    }

    //getPreparationTime
    public function getPreparationTime() : string
    {
        return $this->preparationTime;
    }

    //getWeight
    public function getWeight() : int
    {
        return $this->weight;
    }

    //getPrice
    public function getPrice() : int
    {
        return $this->price;
    }

}