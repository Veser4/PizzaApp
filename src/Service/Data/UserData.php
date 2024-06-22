<?php

namespace App\Service\Data;

class UserData {
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