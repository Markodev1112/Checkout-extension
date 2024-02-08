<x-admin-layout>

    <h1 class="text-3xl font-semibold mb-2">
        Nuevo artículo
    </h1>

    <form action="{{route('admin.posts.store')}}" method="POST">
    
        @csrf

        <x-validation-errors class="mb-4" />

        <div class="mb-4">
            <x-label class="mb-2">
                Título del articulo
            </x-label>

            <x-input
                name="title"
                value="{{ old('title') }}"
                class="w-full"
                placeholder="Ingrese el nombre del artículo"
            />
        </div>

        <div class="mb-4">
            <x-label class="mb-2">
                Slug
            </x-label>

            <x-input
                name="slug"
                value="{{ old('slug') }}"
                class="w-full"
                placeholder="Ingrese el slug del artículo"
            />
        </div>

        <div class="mb-4">
            <x-label>
                Categoría
            </x-label>
            <x-select class="w-full" name="category_id">

                @foreach ($categories as $category)
                    <option @selected(old('category_id') == $category->id) value="{{ $category->id}}">{{$category->name}}</option>
                @endforeach

            </x-select>
        </div>

        <div class="flex justify-end">
            <x-button>
                Crear artículo
            </x-button>
        </div>

    </form>
    
</x-admin-layout>