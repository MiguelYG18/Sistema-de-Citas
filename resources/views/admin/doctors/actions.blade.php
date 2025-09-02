<div class="flex items-center space-x-2">
    <x-wire-button href="{{route('admin.doctors.edit', $doctor)}}" positive xs>
        <i class="fa-solid fa-pen-to-square"></i>
    </x-wire-button>
    <x-wire-button href="{{route('admin.doctors.schedule', $doctor)}}" sky xs>
        <i class="fa-solid fa-clock"></i>
    </x-wire-button>
</div>