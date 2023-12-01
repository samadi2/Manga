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
            <div class="arti">
                @foreach ($article as $articles)
                <div class="arti1">
                    <a href="{{ url('articles/'. $articles->id) }}"><img src="{{ asset('storage/'.$articles->picture) }}" alt="image du manga {{$articles->title}}"></a>
                    <div class="post ">
                        <a href="{{ url('articles/'. $articles->id) }}"><h2>{{$articles->title}}</h2></a>
                        
                        <p>{{$articles->price}}€</p>
                    </div>                
                </div>
                @endforeach
            </div>
        @endif
    </div>
</x-app-layout>
