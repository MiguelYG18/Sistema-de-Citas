<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        try{
            DB::beginTransaction();
            $user = User::create($request->all());
            $user->roles()->attach($request->role_id);
            session()->flash('swal',[
                'icon' => 'success',
                'title' => 'Usuario creado correctamente',
            ]);
            DB::commit();
            if($user->hasRole('Paciente')){
                $patient = $user->patient()->create([]);
                return redirect()->route('admin.patients.edit', $patient);
            }
            if($user->hasRole('Doctor')){
                $doctor = $user->doctor()->create([]);
                return redirect()->route('admin.doctors.edit', $doctor);
            }
            return redirect()->route('admin.users.index');
        }catch(Exception $e){
            DB::rollBack();
            session()->flash('swal',[
                'icon' => 'error',
                'title' => 'Usuario no creado correctamente',
            ]);
            return redirect()->route('admin.users.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        try {
            DB::beginTransaction();
            /*Comprobar el password y aplicar el Hash*/
            if (empty($request->password)) {
                $request = Arr::except($request, array('password'));
            } else {
                $fieldHash = Hash::make($request->password);
                $request->merge(['password' => $fieldHash]);
            }
            $user->update($request->all());
            $user->roles()->sync($request->role_id);
            session()->flash('swal',[
                'icon' => 'success',
                'title' => 'Usuario actualizado correctamente',
            ]);
            DB::commit();
            return redirect()->route('admin.users.edit', $user);        
        } catch (Exception $e) {
            DB::rollBack();
            session()->flash('swal',[
                'icon' => 'error',
                'title' => 'Usuario no actualizado correctamente',
            ]);
            return redirect()->route('admin.users.edit', $user);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->roles()->detach();
        $user->delete();
        session()->flash('swal',[
            'icon' => 'success',
            'title' => 'Usuario eliminado correctamente',
        ]);
        return redirect()->route('admin.users.index');     
    }
}
