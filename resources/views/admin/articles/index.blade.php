<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Liste des Articles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <h1 class="text-2xl font-semibold p-6 dark:text-gray-200">Liste des Articles</h1>
                
                    <a href="{{ route('admin.articles.create') }}">Ajouter un nouvel article</a>
                

                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50 dark:bg-gray-600">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                ID
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                Titre
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-700 dark:divide-gray-500">
                        @foreach($article as $article)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $article->id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $article->title }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @can('update', $article)
                                        <a href="{{ route('admin.articles.edit', $article->id) }}">Modifier l'article</a>
                                    @endcan
                                    @can('delete', $article)
                                        <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"><i class="fa-solid fa-trash fa-xl" style="color: #ff0000;"></i></button>
                                        </form>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

