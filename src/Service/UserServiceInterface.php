<?php 

namespace App\Service;
use App\Service\Data\UserData;

interface UserServiceInterface
{
    public function saveUser(string $name, string $surname, string $email, string $phone, string $password, ?string $avatarPath): int;
   
    public function getUser(int $userId): ?UserData;

    public function deleteUser(int $userId): void;

    public function listUsers(): array;

    public function updateUser(int $userId, string $firstName, string $lastName, ?string $middleName, string $gender, string $birthDate, string $email, ?string $phone, ?string $avatarPath) : int;
}
