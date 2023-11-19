<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Résultats de la recherche pour "'.$searchTerm.'"') }}
        </h2>
    </x-slot>

    <div class="py-6">
    @if (isset($message))
        <p>{{ $message }}</p>
    @else
            <ul>
                @foreach ($article as $article)
                    <li>
                        <a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</x-app-layout>
