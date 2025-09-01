<div>
    <x-wire-card class="mb-8 border-4 border-blue-300 rounded-xl">
        <div class="lg:flex lg:justify-between lg:items-center">
            <div>
                <p class="text-2xl font-bold text-gray-900 mb-1">
                    {{$appointment->patient->user->name}}
                </p>
                <p class="text-sm font-semibold text-gray-500">
                    DNI: {{ $appointment->patient->user->dni}}
                </p>
            </div>
            <div class="lg:flex lg:space-x-3 space-y-2 lg:space-y-0 mt-4 lg:mt-0">
                <x-wire-button x-on:click="$openModal('historyModal')" light sky class="w-full lg:w-auto">
                    <i class="fa-solid fa-notes-medical"></i>
                    Ver Historial
                </x-wire-button>
                <x-wire-button light lime x-on:click="$openModal('previousConsultationsModal')" class="w-full lg:w-auto">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    Consultas Anteriores
                </x-wire-button>
            </div>
        </div>
    </x-wire-card>
    <x-wire-card class="border-4 border-blue-300 rounded-xl">  
        <x-tabs active="consulta">
            <x-slot name="header">
                <x-tab-link tab="consulta">
                    <i class="fa-solid fa-notes-medical me-2"></i>
                    Consulta
                </x-tab-link>
                <x-tab-link tab="receta">
                    <i class="fa-solid fa-prescription-bottle-medical me-2"></i>
                    Receta
                </x-tab-link>
            </x-slot>
            <x-tab-content tab="consulta">
                <div class="space-y-4">
                    <x-wire-textarea 
                        label="Diagnóstico"
                        placeholder="Describa el diagnóstico del paciente aquí..."
                        wire:model="form.diagnosis"
                    />
                    <x-wire-textarea 
                        label="Trataimiento"
                        placeholder="Describa el tratamiento del paciente aquí..."
                        wire:model="form.treatment"
                    />
                    <x-wire-textarea 
                        label="Notas"
                        placeholder="Describa el notas del paciente aquí..."
                        wire:model="form.notes"
                    />
                </div>
            </x-tab-content>
            <x-tab-content tab="receta">
                <div class="space-y-4">
                    @forelse ($form['prescriptions'] as $index => $prescription)
                        <div class="bg-gray-50 p-4 rounded-lg border lg:flex gap-4 space-y-4 lg:space-y-0" wire:key="prescription-{{ $index }}">
                            <div class="flex-1">
                                <x-wire-input
                                    label="Medicamento"
                                    placeholder="Ej: Amoxicilina 500mg"
                                    wire:model="form.prescriptions.{{$index}}.medicine"
                                />
                            </div>
                            <div class="lg:w-32">
                                <x-wire-input
                                    label="Dosis"
                                    placeholder="Ej: 1 cápsula"
                                    wire:model="form.prescriptions.{{$index}}.dosage"
                                />
                            </div>
                            <div class="flex-1">
                                <x-wire-input
                                    label="Frecuencia / Duración"
                                    placeholder="Ej: cada 8 horas por 7 días"
                                    wire:model="form.prescriptions.{{$index}}.frequency"
                                />
                            </div>
                            <div class="flex-shrink-0 lg:pt-6.5">
                                <x-wire-mini-button red 
                                    icon="trash" 
                                    wire:click="removePrescription({{$index}})"
                                    spinner="removePrescription({{$index}})"    
                                />
                            </div>
                        </div>
                    @empty
                        <div class="text-center bg-red-300 text-red-500 py-6 border border-red-600 rounded-lg">
                            No hay medicamentos añadidos en la receta.
                        </div>
                    @endforelse
                </div>
                <div class="mt-4">
                    <x-wire-button outline positive
                        wire:click="addPrescription"
                        spinner="addPrescription"
                    >
                        <i class="fa-solid fa-plus mr-2"></i>
                        Añadir Medicamento
                    </x-wire-button>
                </div>
            </x-tab-content>
        </x-tabs>
        <div class="flex justify-end mt-6">
            <x-wire-button positive
                wire:click="save"
                spinner="save"
                :disabled="!$appointment->status->isEditable()"
            >
                <i class="fa-solid fa-save mr-2"></i>
                Guardar Consulta
            </x-wire-button>
        </div>
    </x-wire-card>
    <x-wire-modal-card 
        title="Historial Médico" 
        name="historyModal"
        width="5xl"
    >
        <div class="grid lg:grid-cols-4 gap-6">
            <div>
                <p class="font-medium text-gray-500 mb-1">Tipo de Sangre:</p>
                <p class="font-semibold text-gray-800">
                    {{$patient->bloodType?->name ?? 'No registrado'}}
                </p>
            </div>
            <div>
                <p class="font-medium text-gray-500 mb-1">Alergias:</p>
                <p class="font-semibold text-gray-800">
                    {{$patient->allergies ?? 'No registrado'}}
                </p>
            </div>
            <div>
                <p class="font-medium text-gray-500 mb-1">Enfermedades crónicas:</p>
                <p class="font-semibold text-gray-800">
                    {{$patient->chronic_conditions ?? 'No registrado'}}
                </p>
            </div>
            <div>
                <p class="font-medium text-gray-500 mb-1">Antecedentes quirúrgicos:</p>
                <p class="font-semibold text-gray-800">
                    {{$patient->surgical_history ?? 'No registrado'}}
                </p>
            </div>
        </div>
        <x-slot name="footer">
            <div class="flex justify-end">
                <a href="{{route('admin.patients.edit',$patient->id)}}"
                    class="font-semibold text-blue-400 hover:text-blue-800"
                    target="_blank"    
                >
                    Ver/Editar Historial Médico
                </a>
            </div>
        </x-slot>
    </x-wire-modal-card>     
    <x-wire-modal-card 
        title="Consultas Ánteriores" 
        name="previousConsultationsModal"
        width="4xl"
    >
        @forelse ($previousConsultations as $consultation)
            <a href="{{route('admin.appointments.show', $consultation->appointment_id)}}" 
                class="block p-5 rounded-lg shadow-md border-gray-200 hover:border-indigo-400 hover:shadow-indigo-100 transition-all duration-200"
                target="_blank"
            >
                <div class="lg:flex justify-between items-center space-y-2 lg:space-y-0">
                    <div>
                        <p class="font-semibold text-gray-800 flex items-center">
                            <i class="fa-solid fa-calendar-days text-gray500 mr-2"></i>
                            {{$consultation->appointment->date->format('d/m/Y H:i:s')}} 
                        </p>
                        <p>
                           Atendido por:
                           Dr(a).{{$consultation->appointment->doctor->user->name}} 
                        </p>
                    </div>
                    <div >
                        <x-wire-button light sky class="w-full lg:w-auto">
                            VER DETALLE
                        </x-wire-button>
                    </div>
                </div>
            </a>
        @empty
            <div class="bg-red-200 text-center border-2 border-dashed border-red-500 py-10 rounded-xl">
                <i class=" fa-solid fa-inbox text-4xl text-red-600"></i>
                <p class="mt-4 text-sm font-medium text-red-600">
                    No se encontraron consultas anteriores
                </p>
            </div>
        @endforelse
        <x-slot name="footer">
            <div class="flex justify-end">
                <x-wire-button outline red sm x-on:click="$closeModal('previousConsultationsModal')">
                    Cerrar
                </x-wire-button>
            </div>
        </x-slot>
    </x-wire-modal-card>
</div>
