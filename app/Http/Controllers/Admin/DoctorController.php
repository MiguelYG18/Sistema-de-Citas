<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateDoctorRequest;
use App\Models\Doctor;
use App\Models\Speciality;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.doctors.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        $specialities = Speciality::all();
        return view('admin.doctors.edit',compact('doctor','specialities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDoctorRequest $request, Doctor $doctor)
    {
        try {
            DB::beginTransaction();
                $doctor->update($request->all());
            DB::commit();
            session()->flash('swal',[
                'icon' => 'success',
                'title' => 'Doctor actualizado correctamente',
            ]);
            return redirect()->route('admin.doctors.edit',$doctor);
        } catch (Exception $e) {
            DB::rollBack();
            session()->flash('swal',[
                'icon' => 'error',
                'title' => 'Doctor no actualizado correctamente',
            ]);
            return redirect()->route('admin.doctors.edit',$doctor);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
    public function schedules(Doctor $doctor){
        return view('admin.doctors.schedules',compact('doctor'));
    }
}
