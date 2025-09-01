<x-admin-layout 
title="Horarios | Gerardo"
:breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Doctores',
        'href' => route('admin.doctors.index'),
    ],
    [
        'name' => 'Horarios'
    ],
]">
    @livewire('admin.schedule-manager',[
        'doctor' => $doctor
    ])
</x-admin-layout>