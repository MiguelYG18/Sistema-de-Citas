<div x-data="data()">
    <x-wire-card class="bg-white border-4 border-blue-300 rounded-xl">
        <div class="mb-4 flex justify-between items-center">
            <h1 class="text-xl font-semibold">
                Gestor de Horarios
            </h1>
            <x-wire-button class="bg-sky-900" positive wire:click="save">
                Guardar Horario
            </x-wire-button>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-sky-900">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                            Día/Hora
                        </th>
                        @foreach ($days as $day)
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                {{$day}}
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody class="divide-y divide-sky-900">
                    @foreach ($this->hourBlocks as $hourBlock)
                        @php
                            $hour = $hourBlock->format('H:i:s');
                        @endphp
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <label>
                                    <input type="checkbox" 
                                    x-on:click="toggleFullHourBlock('{{$hour}}',$el.checked)"
                                    :checked="isFullHourChecked('{{$hour}}')"
                                    class="h-4 w-4 text-sky-400 border-sky-900 rounded focus:text-emerald-500">
                                    <span class="font-bold ml-2">
                                        {{$hour}}
                                    </span>
                                </label>
                            </td>
                            @foreach ($days as $indexDay => $day)
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex flex-col space-y-2">
                                        <label>
                                            <input type="checkbox" 
                                            x-on:click="toggleHourBlock('{{$indexDay}}','{{$hour}}', $el.checked)"
                                            :checked="isHourBlockChecked('{{$indexDay}}','{{$hour}}')"
                                            class="h-4 w-4 text-sky-400 border-sky-900 rounded focus:text-emerald-500">
                                            <span class="ml-2 text-sm font-medium text-gray-700">Todos</span>
                                        </label>
                                        @for ($i = 0; $i < $intervals; $i++)
                                            @php
                                                $startTime = $hourBlock->copy()->addMinutes($i * $appointment_duration);
                                                $endTime = $startTime->copy()->addMinutes($appointment_duration);
                                            @endphp
                                            <label>
                                                <input type="checkbox" 
                                                    x-model="schedule['{{ $indexDay }}']['{{$startTime->format('H:i:s')}}']"
                                                    class="h-4 w-4 text-sky-400 border-sky-900 rounded 
                                                    focus:ring-emerald-500 focus:text-emerald-500">
                                                <span class="ml-2 text-sm font-medium text-gray-700">
                                                    {{$startTime->format('H:i')}} - {{$endTime->format('H:i')}}
                                                </span>
                                            </label>
                                        @endfor
                                    </div>
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="flex justify-end mt-4">
            <x-wire-button class="bg-sky-900" positive wire:click="save">
                Guardar Horario
            </x-wire-button>
        </div>
    </x-wire-card>
    @push('js')
        <script>
            function data(){
                return {
                    schedule: @entangle('schedule'),
                    appointment_duration: @entangle('appointment_duration'),
                    intervals: @entangle('intervals'),
                    days: @entangle('days'),
                    toggleHourBlock(indexDay,hourBlock,checked){
                        let hour=new Date(`1970-01-01T${hourBlock}`);
                        for($i=0 ; $i<this.intervals; $i++){
                            let startTime = new Date(hour.getTime() + ($i * this.appointment_duration * 60000));
                            let formattedStartTime = startTime.toTimeString().split(' ')[0];
                            this.schedule[indexDay][formattedStartTime]=checked; 
                        }
                    },
                    isHourBlockChecked(indexDay,hourBlock){
                        let hour=new Date(`1970-01-01T${hourBlock}`);
                        for($i=0 ; $i<this.intervals; $i++){
                            let startTime = new Date(hour.getTime() + ($i * this.appointment_duration * 60000));
                            let formattedStartTime = startTime.toTimeString().split(' ')[0];
                            if(!this.schedule[indexDay][formattedStartTime]){
                                return false;
                            }
                        }
                        return true;
                    },
                    toggleFullHourBlock(hourBlock,checked){
                        Object.keys(this.days).forEach((indexDay)=>{
                            this.toggleHourBlock(indexDay,hourBlock,checked);
                        });
                    },
                    isFullHourChecked(hourBlock){
                        return Object.keys(this.days).every((indexDay)=>{
                            return this.toggleHourBlock(indexDay,hourBlock);
                        });
                    }
                }
            }
        </script>
    @endpush
</div>
