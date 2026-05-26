<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }} 
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6">
                <a href="{{ route('posts.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 transition duration-150 ease-in-out">
                    😍 Adicione um novo Post
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($posts as $post)
                    <div class="bg-white overflow-hidden shadow-sm rounded-xl flex flex-col justify-between border border-gray-100">
                        
                        <div class="relative">
                            @if($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                            @else
                                <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                    <span class="text-gray-400 text-sm">Sem imagem</span>
                                </div>
                            @endif
                        </div>

                        <div class="p-5 flex-grow">
                            <h3 class="text-xl font-bold text-gray-900 line-clamp-2 mb-2" title="{{ $post->title }}">
                                {{ $post->title }}
                            </h3>

                            <p class="text-sm text-gray-600 line-clamp-3 mb-4">
                                {{ $post->text }}
                            </p>
                        </div>

                        <div class="px-5 py-4 bg-gray-50 border-t border-gray-100 flex justify-between items-center gap-2">
                            <a href="{{ route('posts.edit', $post) }}" class="text-center text-sm px-3 py-1.5 bg-green-600 hover:bg-green-700 text-white font-medium rounded-md transition-colors w-full">
                                Editar
                            </a>
                            
                            <form method="POST" action="{{ route('posts.destroy', $post) }}" class="w-full">
                                @csrf
                                @method('DELETE') <button type="submit" onclick="return confirm('Tem certeza?')" class="text-center text-sm px-3 py-1.5 bg-red-600 hover:bg-red-700 text-white font-medium rounded-md transition-colors w-full">
                                    Deletar
                                </button>
                            </form>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>
    </div>
</x-app-layout>