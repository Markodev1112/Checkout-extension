<x-admin-layout>

    <form action="{{ route('admin.posts.update', $post) }}" method="POST">
        
        @csrf
        @method('PUT')

        <x-validation-errors class="mb-4" />

        <div class="mb-4">
            <x-label class="mb-1">
                Título
            </x-label>
            <x-input
                value="{{ old('title', $post->title) }}"
                name="title"
                class="w-full"
                placeholder="Escriba el titulo del post"
            />
        </div>

        <div class="mb-4">
            <x-label class="mb-1">
                Slug
            </x-label>
            <x-input
                value="{{ old('slug', $post->slug) }}"
                name="slug"
                class="w-full"
                placeholder="Escriba el slug del post"
            />
        </div>

        <div class="mb-4">
            <x-label class="mb-1">
                Categoría
            </x-label>
            <x-select class="w-full" name="category_id">

                @foreach ($categories as $category)
                    <option @selected(old('category_id', $post->category_id) == $category->id) value="{{ $category->id}}">{{$category->name}}</option>
                @endforeach

            </x-select>
        </div>

        <div class="mb-4">
            <x-label class="mb-1">
                Resumen
            </x-label>
            <x-textarea class="w-full"
                name="excerpt">
                {{ old('excerpt', $post->excerpt) }}
            </x-textarea>
        </div>
        
        <div class="mb-4">
            <x-label class="mb-1">
                Cuerpo
            </x-label>
            <x-textarea class="w-full" rows="8" name="body">
                {{ old('body', $post->body) }}
            </x-textarea>
        </div>

        <div class="mb-4">
            <input type="hidden" name="published" value="0">
            <label class="relative inline-flex items-center cursor-pointer">
                <input name="published"
                    type="checkbox"
                    value="1"
                    class="sr-only peer"
                    @checked( old('published', $post->published) == 1 )
                >
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                </div>
                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">
                    Publicar
                </span>
            </label>
        </div>

        <div class="flex justify-end">

            <x-danger-button class="mr-2" onclick="deletePost()">
                Eliminar
            </x-danger-button>

            <x-button>
                Actualizar
            </x-button>
        
        </div>

    </form>

    <form action="{{route('admin.posts.destroy', $post)}}"
        method="POST"
        id="formDelete">

        @csrf
        @method('DELETE')

    </form>

    @push('js')
        <script>
            function deletePost(){
                let form = document.getElementById('formDelete');
                form.submit();
            }
        </script>
    @endpush
    
</x-admin-layout>