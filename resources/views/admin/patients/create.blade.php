<x-admin-layout 
title="Pacientes | Gerardo"
:breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Pacientes',
        'href' => route('admin.patients.index'),
    ],
    [
        'name' => 'Nuevo',
    ],    
]">
</x-admin-layout>