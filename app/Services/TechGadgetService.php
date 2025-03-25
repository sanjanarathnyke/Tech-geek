<?php
namespace App\Services;

use App\Interfaces\TechGadgetInterface;

class TechGadgetService
{
    protected $repository;

    public function __construct(TechGadgetInterface $repository)
    {
        $this->repository=$repository;
    }
    public function getAllGadgets()
    {
        return $this->repository->getAll();
    }
    public function getGadgetById($id)
    {
        return $this->repository->getById($id);
    }
    public function createGadget(array $data)
    {
        return $this->repository->create($data);
    }
    public function updateGadget($id,array $data)
    {
        return $this->repository->update($id,$data);
    }
    public function deleteGadget($id)
    {
        return $this->repository->delete($id);
    }
}
