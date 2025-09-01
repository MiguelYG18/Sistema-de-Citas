<x-admin-layout 
title="Doctores | Gerardo"
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
        'name' => 'Editar',
    ],    
]">
    <form action="{{route('admin.doctors.update', $doctor)}}" method="POST">
        @csrf
        @method('PUT')
        <x-wire-card class="mb-8 border-4 border-gray-500 rounded-xl">
            <div class="lg:flex lg:justify-between lg:items-center">
                <div class="flex items-center space-x-5">
                    <img src="{{$doctor->user->profile_photo_url}}" alt="{{$doctor->user->name}}" class="h-20 w-20 rounded-full object-cover object-center">
                    <div>
                        <p class="text-2xl font-bold text-gray-900 mb-1">
                            {{$doctor->user->name}}
                        </p>
                        <p class="text-sm font-semibold text-gray-500">
                            Licencia: {{ $doctor->medical_license_number ??  'N/A' }}
                        </p>
                    </div>
                </div>
                <div class="flex space-x-3 mt-6 lg:mt-0">
                    <x-wire-button href="{{route('admin.doctors.index')}}" class="bg-sky-800 rounded-5 border-2 border-gray-300 hover:bg-sky-500">
                        Volver
                    </x-wire-button>
                    <x-wire-button type="submit" positive spinner="save">
                        Actualizar
                    </x-wire-button>
                </div>
            </div>
        </x-wire-card>
        <x-wire-card class="border-4 border-gray-500 rounded-xl">
            <div class="space-y-4">
                <x-wire-native-select
                    label="Especialidad"
                    name="speciality_id"
                >
                    <option value="">Selecciona una especialidad</option>
                    @foreach ($specialities as $speciality)
                        <option value="{{$speciality->id}}" @selected($speciality->id == old('speciality_id',$doctor->speciality_id))>{{$speciality->name}}</option>
                    @endforeach
                </x-wire-native-select>                    
                <x-wire-phone
                    name="medical_license_number" 
                    label="Número de licencia médica" 
                    placeholder="Licencia médica"
                    :value="old('medical_license_number', $doctor->medical_license_number)"  
                    :mask="['####-####-####']"
                    description="Ingrese la licencia médica"
                />
                <x-wire-textarea
                    label="Biografía"
                    name="biography"
                    rows="3"
                    placeholder="Biografía del doctoe"
                >
                {{old('biography',$doctor->biography)}}
                </x-wire-textarea>
                <div class="flex justify-end">
                    <div class="w-32">
                        <x-wire-native-select
                            label="Estado"
                            name="active"
                        >
                            <option value="1" @selected(old('active',$doctor->active)== 1)>Activo</option>
                            <option value="0" @selected(old('active',$doctor->active)== 0)>Inactivo</option>
                        </x-wire-native-select>
                    </div>
                </div>
            </div>
        </x-wire-card>
    </form>

</x-admin-layout>