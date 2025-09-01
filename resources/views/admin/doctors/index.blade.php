<x-admin-layout 
title="Doctores | Gerardo"
:breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Doctores'
    ],
]">
    <x-wire-card class="bg-white border-4 border-blue-300 rounded-xl">
        @livewire('admin.data-tables.doctor-table')
    </x-wire-card>
</x-admin-layout>