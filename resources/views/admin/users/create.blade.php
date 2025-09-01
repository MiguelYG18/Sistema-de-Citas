<x-admin-layout 
title="Usuario | Gerardo"
:breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Usuarios',
        'href' => route('admin.users.index')
    ],
    [
        'name' => 'Nuevo'
    ],
]">
    <x-wire-card>
        <form action="{{route('admin.users.store')}}" method="POST">
            @csrf
            <div class="space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <x-wire-input label="Nombre" name="name" placeholder="Nombre del usuario" :value="old('name')" description="Ingrese el nombe del usuario"/>
                    <x-wire-input name="email" label="Correo Electrónico" type="email" :value="old('email')" placeholder="Email del usuario" description="Ingrese el correo del usuario" suffix="@gmail.com"/>
                    <x-wire-password name="password" label="Contraseña" description="Ingrese la contraseña"/>
                    <x-wire-password name="password_confirmation" label="Confirmar Contraseña" description="Confirme la contraseña"/>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <x-wire-maskable 
                        name="dni" 
                        label="DNI" 
                        :value="old('dni')" 
                        placeholder="DNI del usuario" 
                        description="Ingrese el DNI del usuario"
                        mask="########"
                    />
                    <x-wire-phone
                        name="phone" 
                        label="Télefono" 
                        placeholder="Teléfono del usuario"
                        :value="old('phone')"  
                        :mask="['(+51) ###-###-###']"
                        description="Ingrese el teléfono del usuario"
                    />
                    <x-wire-native-select 
                        name="role_id"
                        label="Rol"
                        description="Importante asignarle un rol"
                    >
                        <option value="">Seleccione un Rol</option>
                        @foreach ($roles as $role)
                            <option value="{{$role->id}}" @selected(old('role_id') == $role->id)>
                                {{$role->name}}
                            </option>
                        @endforeach
                    </x-wire-native-select>
                </div>
                <x-wire-input name="address" label="Dirección" :value="old('address')" placeholder="Dirección del usuario" description="Ingrese la dirección del usuario"/>
            <div class="flex justify-end mt-4">
                <x-wire-button type="submit" positive spinner="save" teal>
                    Guardar
                </x-wire-button>
            </div>
        </form>
    </x-wire-card>
</x-admin-layout>