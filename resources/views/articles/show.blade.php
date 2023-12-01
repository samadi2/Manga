<x-app-layout>
    <div class="show">
        <img src="{{ asset('storage/'.$article->picture) }}" alt="image du manga {{$article->title}}" width="50% ">
        <div class="prod">
            <h2>{{$article->title}}</h2><br>
            <p>{{$article->price}}€</p><br>
            <form action="{{ route('cart.create', ['id' => $article->id]) }}" method="POST" class="form">
                @csrf
                <input type="hidden" name="article_id" value="{{ $article->id }}">
                <input type="hidden" name="title" value="{{ $article->title }}">
                <input type="file" name="picture">
                <input type="hidden" name="content" value="{{ $article->content }}">
                <input type="hidden" name="price" value="{{ $article->price }}">
                <label for="qte">Quantity:</label>
                <input type="number" id="qte" name="qte" value="1" min="1"> <br>
                <button class="btn" type="submit">Ajouter au panier</button>
            </form> <br> <hr><br>
            <div class="desp" >
                <div>
                    <h5>Description</h5>
                    <p id="description"> {{$article->content}}</p>
                </div>
                <button id="toggleButton"><i class="fa-solid fa-minus fa-xl"></i></button>              
            </div>
        </div>
    </div>
    <div class="picture">
        <h5>Quelques images de mangas </h5>
        <div class="images">
            <img src="{{ asset('img/ima1.jpg') }}" alt="image de manga">
            <img src="{{ asset('img/ima2.jpg') }}" alt="image de manga">
            <img src="{{ asset('img/ima3.jpg') }}" alt="image de manga">
            <img src="{{ asset('img/ima4.jpg') }}" alt="image de manga">
        </div>
    </div>
</x-app-layout>