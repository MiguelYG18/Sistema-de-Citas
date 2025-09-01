<x-admin-layout 
title="Dashboard | Gerardo"
:breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Pruebas'
    ],
]">
    <x-slot name="action">
        Hola Mundo
    </x-slot>
    <x-wire-button>
        Prueba
    </x-wire-button>
</x-admin-layout>