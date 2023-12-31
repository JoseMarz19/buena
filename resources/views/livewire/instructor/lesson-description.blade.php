<div>
  <article class="card" x-data="{open: false}">
    <div class="card-body bg-gray-100">
        <header>
            <h1 x-on:click="open = !open" class="cursor-pointer"><i class="fas fa-edit text-blue-500"></i> Descripcion de la lección</h1>
        </header>
        <div x-show="open">
            <hr class="my-2">
            @if($lesson->description)
            <form wire:submit.prevent="update">
                
                <textarea wire:model="description.name" class="form-input w-full"></textarea>

                @error('description.name')
                    <span class="text-sm text-red-500">{{message}}</span>
                @enderror

                <div class="flex justify-end">
                    <button wire:click="destroy" class="btn btn-danger_rojo text-sm">Eliminar</button>
                    <button class="btn btn-primary_azul text-sm ml-2">Actualizar</button>
                </div>
            </form>

            @else


            <div>
                
                <textarea wire:model="name" class="form-input w-full" placeholder="Agregue una descripción de la lección"></textarea>

                @error('name')
                    <span class="text-sm text-red-500">{{message}}</span>
                @enderror

                <div class="flex justify-end">
                    
                    <button wire:click="store" class="btn btn-primary_azul text-sm ml-2">Agregar</button>
                </div>
            </div>

            @endif
        </div>
    </div>
  </article>
</div>
