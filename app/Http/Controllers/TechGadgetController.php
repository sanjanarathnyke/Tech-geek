<?php

namespace App\Http\Controllers;

use App\Services\TechGadgetService;
use Illuminate\Http\Request;

class TechGadgetController extends Controller
{
    protected $service;

    public function __construct(TechGadgetService $service)
    {
        $this->service=$service;
    }
    public function index()
    {
        $gadgets = $this->service->getAllGadgets();
        return view('techgadgets.index',compact('gadgets'));
    }

    public function create()
    {
        return view('techgadgets.create');
    }
    public function store(Request $request)
    {
        $request->validate([
                'name' => 'required',
                'brand' => 'required',
                'description' => 'required',
                'price' => 'required|numeric',
        ]);

        $this->service->createGadget($request->all());
        return redirect()->route('techgadgets.index');
    }

    public function edit($id)
    {
        $gadget = $this->service->getGadgetById($id);
        return view('techgadgets.edit',compact('gadget'));
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);
        $this->service->updateGadget($id,$request->all());
        return redirect()->route('techgadgets.index');
    }

    public function destroy($id)
    {
        $this->service->deleteGadget($id);
        return redirect()->route('techgadgets.index');
    }

}
