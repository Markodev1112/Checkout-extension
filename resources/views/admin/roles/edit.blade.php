<x-admin-layout>

    <div class="bg-white shdow rounded-lg p-6">
        <form action="{{ route('admin.roles.update', $role) }}" method="POST">
        
            @csrf

            @method('PUT')

            <x-validation-errors class="mb-4" />

            <div class="mb-4">
                <x-label class="mb-1">
                    Nombre del rol
                </x-label>
    
                <x-input class="w-full"
                    name="name"
                    placeholder="Ingrese el nombre del rol"
                    value="{{ old('name', $role->name) }}"
                />
            </div>

            <x-button>
                Actualizar rol
            </x-button>
                
        </form>
    </div>

</x-admin-layout>