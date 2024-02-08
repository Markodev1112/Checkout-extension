<x-admin-layout>

    <form action="{{route('admin.categories.update', $category)}}"
        method="POST"
        class="bg-white rounded-lg p-6 shadow-lg">

        @csrf

        @method('PUT')

        <x-validation-errors class="mb-4"/>

        <div class="mb-4">
            <x-label class="mb-2">
                Nombre
            </x-label>
    
            <x-input
                name="name"
                class="w-full"
                placeholder="Escriba el nombre de la categoría"
                value="{{$category->name}}"
            />
        </div>

        <div class="flex justify-end">
            <x-button>
                Actualizar Categoría
            </x-button>
        </div>
    
    </form>
    
</x-admin-layout>