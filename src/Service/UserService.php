<?php 

namespace App\Service;
use App\Service\Data\UserData;
use App\Repository\UserRepository;
use App\Entity\User;


class UserService implements UserServiceInterface
{
    public function __construct(private UserRepository $repository)
    {
    }

    public function saveUser(string $name, string $surname, string $email, string $phone, string $password, ?string $avatarPath): int
    {
        $user = new User(
            null,
            $name,
            $surname,
            $email,
            $phone,
            null,
            $password,
            $avatarPath,
        );
        return $this->repository->store($user);
    }

    public function getUser(int $userId): UserData
    {
        $user = $this->repository->findById($userId);
        return ($user === null) ? null : new UserData(
            $userId,
            $user->getName(),
            $user->getSurname(),
            $user->getEmail(),
            $user->getPhone(),
            $user->getAddress(),
            $user->getPassword(),
            $user->getAvatarPath(),
        );
    }

    public function deleteUser(int $userId): void
    {
        $user = $this->repository->findById($userId);
        if ($user === null)
        {
            return;
        }
        $this->repository->delete($user);
    }

    public function updateUser(int $userId, string $firstName, string $lastName, ?string $middleName, string $gender, string $birthDate, string $email, ?string $phone, ?string $avatarPath): int
    {
        $user = $this->repository->findById($userId);
        $user->setName($firstName);
        $user->setSurname($lastName);
        $user->setEmail($email);
        $user->setPhone($phone);
        $user->setAvatarPath($avatarPath);
        return $this->repository->store($user);
    }

    public function listUsers(): array
    {
        return $this->repository->getAllUsers();
    }
}