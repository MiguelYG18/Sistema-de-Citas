<?php

namespace App\Livewire\Admin\DataTables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Builder;

class PatientTable extends DataTableComponent
{
    public function builder(): Builder
    {
        return Patient::query()
        ->with('user');
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Paciente", "user.name")
                ->sortable()
                ->searchable(),
            Column::make("Email", "user.email")
                ->sortable(),
            Column::make("Dni", "user.dni")
                ->sortable(),
            Column::make("Telefono", "user.phone")
                ->sortable(),
            Column::make('Acciones')
                ->label(function($row){
                    return view('admin.patients.actions',[
                        'patient' => $row,                       
                    ]);
                })     
        ];
    }
}
