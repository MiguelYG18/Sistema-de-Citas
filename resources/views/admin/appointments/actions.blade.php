<div class="flex items-center space-x-2">
    <x-wire-button href="{{route('admin.appointments.edit', $appointment)}}" positive xs>
        <i class="fa-solid fa-pen-to-square"></i>
    </x-wire-button>
    <x-wire-button href="{{route('admin.appointments.consultation', $appointment)}}" amber xs>
        <i class="fa-solid fa-file-lines"></i>
    </x-wire-button>
</div>