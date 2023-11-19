<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Article;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Récupérez les articles du panier depuis la base de données
        $cartItems = Cart::all();

        $total = $this->calculateTotal($cartItems);
        return view('cart.index', compact('cartItems', 'total'));
    }

    public function create(Request $request, $id)
    {
        $article = Article::find($id);

        $article_id = $request->input('article_id');
        $title = $request->input('title');
        $picture = $request->input('picture');
        $content = $request->input('content');
        $price = $request->input('price');
        $qte = $request->input('qte');

        // Ensuite, créez un nouvel élément Cart avec ces données récupérées.

        $item = new Cart();
        $item->user_id = auth()->user()->id;
        $item->article_id = $article->id;
        $item->title = $title;
        $item->picture = $picture;
        $item->content = $content;
        $item->price = $price;
        $item->qte = $qte;
        $item->save();

        return redirect()->route('cart.index','');

    }

    public function update(Request $request, $id)
    {
        // Logique pour mettre à jour la quantité d'un article dans le panier
        $newQuantity = $request->input('quantity');

        $item = Cart::find($id);
        if ($item) {
            $item->qte = $newQuantity;
            $item->save();
        }

        return redirect()->route('cart.index','');

    }

    public function destroy($id)
    {
        // Logique pour supprimer un article du panier
        $item = Cart::find($id);
        if ($item) {
            $item->delete();
        }

        return redirect()->route('cart.index','');

    }


            public function calculateTotal()
        {
            $cartItems = Cart::all(); 
            $total = 0;

            foreach ($cartItems as $item) {
                $total += $item->price * $item->qte; 
            }

            return $total;
        }


}
