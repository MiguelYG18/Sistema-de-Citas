<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.roles.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $request->validate([
                'name' => "required|unique:roles,name"
            ]);
            Role::create($request->all());
            session()->flash('swal',[
                'icon' => 'success',
                'title' => 'Rol creado correctamente',
            ]);
            DB::commit();
            return redirect()->route('admin.roles.index');
        } catch (Exception $e) {
            DB::rollBack();
            session()->flash('swal',[
                'icon' => 'error',
                'title' => 'Rol no creado correctamente',
            ]);
            return redirect()->route('admin.roles.index');            
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('admin.roles.show',compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        if($role->id <= 4){
            session()->flash('swal',[
                'icon' => 'error',
                'title' => 'No puedes editar este rol',
            ]);            
            return redirect()->route('admin.roles.index');
        }
        return view('admin.roles.edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => "required|unique:roles,name, ". $role->id
        ]);
        $role->update($request->all());
        session()->flash('swal',[
            'icon' => 'success',
            'title' => 'Rol actualizado correctamente',
        ]);
        return redirect()->route('admin.roles.edit', $role);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        if($role->id <= 4){
            session()->flash('swal',[
                'icon' => 'error',
                'title' => 'No puedes eliminar este rol',
            ]);            
            return redirect()->route('admin.roles.index');
        }
        $role->delete();
        session()->flash('swal',[
            'icon' => 'success',
            'title' => 'Rol eliminado correctamente',
        ]);
        return redirect()->route('admin.roles.index');        
    }
}
