<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
    public function index(){
        // abort_if(Gate::denies('user_index'),403);
        
        $users = User::paginate(5);
        return view ('users.index', compact('users'));
    }
    public function create(){
        // abort_if(Gate::denies('user_create'),403);
        $roles = Role::all()->pluck('name','id');
        return view ('users.create', compact('roles'));
    }
    public function store(UserCreateRequest $request){

        $user = User::create($request->only('name','username','email')+[
            'password'=>bcrypt($request->input('password')),
        ]);

        $roles = $request -> input('roles',[]);

        $user -> syncRoles($roles);

        return redirect()->route('users.show', $user->id)->with('success',"Usuario agregado");
        
    }
    public function show(User $user){
        // abort_if(Gate::denies('user_show'),403);
        //$user = User::find($id);
        $user->load('roles');
        return view ('users.show', compact('user'));
    }
    public function edit(User $user){
        // abort_if(Gate::denies('user_edit'),403);
        $roles = Role::all()->pluck('name','id');
        $user -> load('roles');
        return view ('users.edit', compact('user','roles'));
    }
    public function update(UserEditRequest $request, User $user){
        // $user = User::findOrFail($id);
        $data = $request->only('name', 'username', 'email');
        $password = $request->input('password');
        if($password)
            $data['password'] = bcrypt($password);
        // $user=User::findOrFail($id);
        // $data = $request->only('name', 'username', 'email');
        // if(trim($request->password)==''){
        //     $data = $request->except('pa ssword');
        // }else{
        //     $data = $request->all();
        //     $data['password']=bcrypt($request->password);
        // }
        $user -> update($data);
        $roles = $request->input('roles',[]);
        $user -> syncRoles($roles);
        return redirect()->route('users.show',$user->id)->with('success',"Usuario actualizado");
    }
    public function destroy(User $user){
        // abort_if(Gate::denies('user_destroy'),403);
        if(auth()->user()->id == $user->id){
            return redirect()->route("users.index", $user->id);
        }
        
        $user->delete();
        return back()->with("success","Usuario eliminado: $user->name");
    }
    
}
