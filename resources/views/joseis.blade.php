<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
             {{ __('Liste des mangas Joseis') }}
        </h2>
    </x-slot>

    <div class="arti">
        @foreach($josei as $articles)
        <div class="arti1">
            <img src="{{ asset('storage/'.$articles->picture) }}" alt="image du manga {{$articles->title}}">
            <div class="post ">
                <a href="#"><h2>{{$articles->title}}</h2></a>
                <p>{{$articles->price}}€</p>
            </div>                
        </div>
        @endforeach
    </div>
    <div class="page">
        {{ $article->links() }}
    </div>
</x-app-layout>