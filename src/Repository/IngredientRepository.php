<?php 

namespace App\Repository;
use App\Entity\Ingredient;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class IngredientRepository
{
    private EntityRepository $repository;
    public function __construct(private EntityManagerInterface $entityManager) {
        $this->repository = $entityManager->getRepository(Ingredient::class);
    }
    
    public function findById(int $id) : ?Ingredient {
        return $this->repository->findOneBy(['id' => (int) $id]);
    }
}