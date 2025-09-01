<x-admin-layout 
title="Usuarios | Gerardo"
:breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Usuarios'
    ],
]">
    <x-slot name="action">
        <x-wire-button blue href="{{route('admin.users.create')}}">
            <i class="fa-solid fa-plus"></i>
            Nuevo
        </x-wire-button>
    </x-slot>
    <x-wire-card class="mb-8 bg-white border-4 border-blue-300 rounded-xl">
        @livewire('admin.data-tables.user-table')
    </x-wire-card>
</x-admin-layout>