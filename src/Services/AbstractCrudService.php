<?php

namespace App\Services;

use App\Contracts\CrudServiceInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;

abstract class AbstractCrudService implements CrudServiceInterface
{
    protected EntityManagerInterface $entityManager;
    protected SerializerInterface $serializer;

    public function __construct(
        EntityManagerInterface $entityManager,
        SerializerInterface $serializer
    ) {
        $this->entityManager = $entityManager;
        $this->serializer = $serializer;
    }

    /**
     * Holt alle Entitäten
     */
    public function getAll(): array
    {
        return $this->getRepository()->findAll();
    }

    /**
     * Holt eine Entität anhand der ID
     */
    public function getById(int $id)
    {
        return $this->getRepository()->find($id);
    }

    /**
     * Erstellt eine neue Entität
     */
    public function create(array $data)
    {
        $entity = $this->createEntityInstance();
        $this->updateEntityFields($entity, $data);

        $this->entityManager->persist($entity);
        $this->entityManager->flush();

        return $entity;
    }

    /**
     * Aktualisiert eine existierende Entität
     */
    public function update(int $id, array $data)
    {
        $entity = $this->getRepository()->find($id);

        if (!$entity) {
            return null;
        }

        $this->updateEntityFields($entity, $data);
        $this->entityManager->flush();

        return $entity;
    }

    /**
     * Löscht eine Entität
     */
    public function delete(int $id): bool
    {
        $entity = $this->getRepository()->find($id);

        if (!$entity) {
            return false;
        }

        $this->entityManager->remove($entity);
        $this->entityManager->flush();

        return true;
    }

    /**
     * Gibt das Repository für die jeweilige Entität zurück
     * Template Method, die von den konkreten Implementierungen überschrieben werden muss
     */
    abstract protected function getRepository();

    /**
     * Erstellt eine neue Instanz der jeweiligen Entität
     * Template Method, die von den konkreten Implementierungen überschrieben werden muss
     */
    abstract protected function createEntityInstance();

    /**
     * Aktualisiert die Felder einer Entität mit den übergebenen Daten
     * Template Method, die von den konkreten Implementierungen überschrieben werden muss
     */
    abstract protected function updateEntityFields($entity, array $data);
}