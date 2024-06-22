<?php

namespace App\Entity;

class Ingredient 
{
    public function __construct(
        private int $id,
        private string $name,
    )
    {
        
    }

    //Getters

    //getId
    public function getId() : int 
    {
        return $this->id;    
    }

    //getId
    public function getName() : string 
    {
        return $this->name;    
    }
}