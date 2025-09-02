<x-admin-layout 
title="Roles | Gerardo"
:breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Roles'
    ],
]">
    <x-slot name="action">
        <x-wire-button cyan href="{{route('admin.roles.create')}}">
            <i class="fa-solid fa-plus"></i>
            Nuevo
        </x-wire-button>
    </x-slot>
    <x-wire-card class="bg-white border-4 border-blue-300 rounded-xl">
        @livewire('admin.data-tables.role-table')
    </x-wire-card>
</x-admin-layout>