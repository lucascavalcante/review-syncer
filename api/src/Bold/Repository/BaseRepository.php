<?php

namespace Bold\Repository;

use Bold\Config\Database;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

abstract class BaseRepository
{
    public $entityManager;
    public $entityPath;

    public function __construct($entityPath)
    {
        $this->entityPath = $entityPath;
        $this->entityManager = $this->createEntityManager();
    }

    public function createEntityManager()
    {
        $path = ['Bold\Entity'];
        $isDevMode = true;
        $config = Setup::createAnnotationMetadataConfiguration($path, $isDevMode, null, null, false);

        $conn = new Database();
        return EntityManager::create($conn->getCredentials(), $config);
    }

    public function insert($obj)
    {
        $this->entityManager->persist($obj);
        $this->entityManager->flush();
    }
    public function update($obj)
    {
        $this->entityManager->merge($obj);
        $this->entityManager->flush();
    }
    public function delete($obj)
    {
        $this->entityManager->remove($obj);
        $this->entityManager->flush();
    }
    public function findById($id)
    {
        return $this->entityManager->find($this->entityPath, $id);
    }
    public function findAll()
    {
        $collection = $this->entityManager->getRepository($this->entityPath)->findAll();
        $data = [];

        foreach ($collection as $obj) {
            $data[] = $obj;
        }
        return $data;
    }
}