<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterEditRequest;
use App\Http\Requests\RegisterCreateRequest;
use App\Models\Register;

class RegisterIgafomController extends Controller
{
    public function index()
    {
        $registers = Register::paginate(10);
        return view("registers_igafom.index", compact("registers"));
    }

    public function create(){
        return view("registers_igafom.create");
    }

    public function store(RegisterCreateRequest $request)
    {
        $data = $request->validated();
        $code_item = Register::generateCode();
        while(Register::where('code_item', $code_item)->exists()) {
            $code_item = Register::generateCode();
        }
        $data['code_item'] = $code_item;
        Register::create($data);
        return redirect()->route("registers_igafom.index")->with("success","Usuario actualizado");
    }

    public function show(Register $register){
        return view("registers_igafom.show", compact('register'));
    }

    public function edit(Register $register){
        return view("registers_igafom.edit", compact('register'));
    }

    public function update(RegisterEditRequest $request, Register $register){
        $register->update($request->validated());
        return redirect()->route('registers_igafom.index')->with('success','');
    }

    public function destroy(Register $register){
        $register->delete();
        return redirect()->route('registers_igafom.index', $register->name)->with('success','Register deleted successfully');
    }
}
