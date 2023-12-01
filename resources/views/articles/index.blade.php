<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Liste des Articles') }}
        </h2>
    </x-slot>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="arti">
        @foreach($article as $articles)
        <div class="arti1">
            <a href="{{ url('articles/'. $articles->id) }}"><img src="{{ asset('storage/'.$articles->picture) }}" alt="image du manga {{$articles->title}}"></a>
            <div class="post ">
                <a href="{{ url('articles/'. $articles->id) }}"><h2>{{$articles->title}}</h2></a>
                
                <p>{{$articles->price}}€</p>
            </div>                
        </div>
        @endforeach
    </div>
    <div class="page">
        {{ $article->links() }}
    </div>
</x-app-layout>



