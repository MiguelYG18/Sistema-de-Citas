<x-admin-layout 
title="Pacientes | Gerardo"
:breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Pacientes'
    ],
]"> 
    <x-wire-card class="bg-white border-4 border-blue-300 rounded-xl">
        @livewire('admin.data-tables.patient-table')
    </x-wire-card>
</x-admin-layout>