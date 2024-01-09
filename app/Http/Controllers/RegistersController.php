<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterCreateRequest;
use App\Http\Requests\RegisterEditRequest;
use App\Models\Register;

class RegistersController extends Controller
{
    public function index(){
        $registers = Register::paginate(10);
        return view("registers.index", compact("registers"));
    }
    public function create(){
        return view("registers.create");
    }
    public function store(RegisterCreateRequest $request){
        $data = $request->validated();
        $code_item = Register::generateCode();
        while(Register::where('code_item', $code_item)->exists()) {
            $code_item = Register::generateCode();
        }
        $data['code_item'] = $code_item;
        Register::create($data);
        return redirect()->route("registers.index")->with("success","Usuario actualizado");
    }

    public function show(Register $register){
        return view("registers.show", compact('register'));
    }

    public function edit(Register $register){
        return view ('registers.edit', compact('register'));
    }

    public function update(RegisterEditRequest $request, Register $register){
        $register->update($request->validated());       
        return redirect()->route('registers.index')->with('success','');
    }

    public function destroy(Register $register){
        $register->delete();  
        return redirect()->route('registers.index')->with('success','Register deleted successfully');
    }
}
