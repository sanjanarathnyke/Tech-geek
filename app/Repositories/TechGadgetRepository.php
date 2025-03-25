<?php
namespace App\Repositories;

use App\Interfaces\TechGadgetInterface;
use App\Models\TechGadget;

class TechGadgetRepository implements TechGadgetInterface
{
    public function getAll()
    {
        return TechGadget::all();
    }

    public function getById($id)
    {
        return TechGadget::findOrFail($id);
    }

    public function create(array $data)
    {
        return TechGadget::create($data);
    }

    public function update($id, array $data)
    {
        $gadget = TechGadget::findOrFail($id);
        $gadget->update($data);
        return $gadget;
    }

    public function delete($id)
    {
        TechGadget::destroy($id);
    }
}

