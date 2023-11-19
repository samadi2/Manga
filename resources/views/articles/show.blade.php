<x-app-layout>
<div class="arti1">
    <img src="{{ asset('storage/'.$article->picture) }}" alt="image du manga {{$article->title}}">
    <div class="post ">
        <h2>{{$article->title}}</h2>
        <p>{{$article->price}}€</p>
        <form action="{{ route('cart.create', ['id' => $article->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="article_id" value="{{ $article->id }}">
            <input type="hidden" name="title" value="{{ $article->title }}">
            <input type="hidden" name="picture" value="{{ $article->picture }}">
            <input type="hidden" name="content" value="{{ $article->content }}">
            <input type="hidden" name="price" value="{{ $article->price }}">
            <label for="qte">Quantity:</label>
            <input type="number" id="qte" name="qte" value="1" min="1">
            <button type="submit">Add to Cart</button>
        </form>              
    </div>
</x-app-layout>