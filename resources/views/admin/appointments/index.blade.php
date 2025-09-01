<x-admin-layout 
title="Citas | Gerardo"
:breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Citas'
    ],
]">
    <x-slot name="action">
        <x-wire-button blue href="{{route('admin.appointments.create')}}">
            <i class="fa-solid fa-plus"></i>
            Nuevo
        </x-wire-button>
    </x-slot>
    <x-wire-card class="bg-white border-4 border-blue-300 rounded-xl">
        @livewire('admin.data-tables.appointment-table')
    </x-wire-card>
</x-admin-layout>