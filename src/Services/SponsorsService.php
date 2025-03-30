<?php

namespace App\Services;

use App\Entity\Interface\SponsorsInterface;
use App\Entity\Sponsors;
use App\Repository\SponsorsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;

class SponsorsService extends AbstractCrudService
{
    private SponsorsRepository $sponsorRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        SerializerInterface $serializer,
        SponsorsRepository $sponsorRepository
    ) {
        parent::__construct($entityManager, $serializer);
        $this->sponsorRepository = $sponsorRepository;
    }

    protected function getRepository(): SponsorsRepository
    {
        return $this->sponsorRepository;
    }

    protected function createEntityInstance(): SponsorsInterface
    {
        return new Sponsors();
    }

     protected function updateEntityFields($entity, array $data)
     {
         if (isset($data['name'])) {
             $entity->setName($data['name']);
         }

         if (isset($data['website'])) {
             $entity->setWebsite($data['website']);
         }

         if (isset($data['logoUrl'])) {
             $entity->setLogoUrl($data['logoUrl']);
         }

         return $entity;
     }
}