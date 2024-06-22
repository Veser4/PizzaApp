<?php

namespace App\Entity;

class User {
    //Construct
    public function __construct( 
        private ?int $userId,
        private string $name,
        private string $surname,
        private string $email,
        private string $phone,
        private ?string $address,
        private string $password,
        private ?string $avatarPath,
    )
    {
    }
    
    // Setters

    //setUserId
    public function setUserId(int $userId) 
    {
        $this->userId = $userId;
    }

    //setName
    public function setName(string $name) 
    {
        $this->name = $name;
    }

    //setSurname
    public function setSurname(string $surname) 
    {
        $this->surname = $surname;
    }

    //setEmail
    public function setEmail(string $email) 
    {
        $this->email = $email;
    }

    //setPhone
    public function setPhone(string $phone) 
    {
        $this->phone = $phone;
    }

    //setAvatarPath
    public function setAvatarPath(string $avatarPath) 
    {
        $this->avatarPath = $avatarPath;
    }

    //setAddress
    public function setAddress(string $address) 
    {
        $this->address = $address;
    }

    //setPassword
    public function setPassword(string $password) 
    {
        $this->password = $password;
    }

    // Getters
    
    //getUserId
    public function getUserId() : int
    {
        return $this->userId;
    }

    //getName
    public function getName() : string
    {
        return $this->name;
    }

    //getSurname
    public function getSurname() : string
    {
        return $this->surname;
    }

    //getEmail
    public function getEmail() : string
    {
        return $this->email;
    }

    //getPhone
    public function getPhone() : string
    {
        return $this->phone;
    }

    //getAvatarPath
    public function getAvatarPath() : ?string
    {
        return $this->avatarPath;
    }

    //getAvatarPath
    public function getAddress() : string
    {
        return ($this->address) ? $this->address : 'Не указано';
    }

    //getPassword
    public function getPassword() : string
    {
        return $this->password;
    }
}