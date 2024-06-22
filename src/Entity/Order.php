<?php

namespace App\Entity;

use Doctrine\DBAL\Types\DateType;

class Order
{
    public function __construct(
        private ?int $id,
        private int $userId,
        private ?User $user,
        private string $date,
        private int $price,
        private string $addressDelivery,
    )
    {
    }

    //Getters
    //getId
    public function getId() : int
    {
        return $this->id;
    }

    //getUserId
    public function getUserId() : int
    {
        return $this->userId;
    }

    //getDate
    public function getDate() : string
    {
        return $this->date;
    }

    //getPrice
    public function getPrice() : int
    {
        return $this->price;
    }

    public function getAddressDelivery() : string
    {
        return $this->addressDelivery;
    }

    //Setters
    //setUserId
    public function setUserId(int $id)  
    {
        $this->userId = $id;
    }

    //setDate
    public function setDate(string $date)  
    {
        $this->date = $date;
    }
    
    //setPrice
    public function setPrice(int $price)  
    {
        $this->price = $price;
    }

    //setPrice
    public function setAddressDelivery(string $addressDelivery)  
    {
        $this->addressDelivery = $addressDelivery;
    }
}