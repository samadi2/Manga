<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        // $posts = Post::latest()->get();
        
        $article = Article::latest()->get();
        
        $article = Article::paginate(6);
        
        return view("articles.index", compact("article"));
        

    }


    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view("articles.show", compact("article"));
    }

    public function ShonenMangas()
    {
        $shonen = Article::where('genre', 'shonen')->get();

        $article = Article::paginate(6);

    
        return view('shonens', compact('shonen', 'article'));  
    }
    public function SeinenMangas()
    {
        $seinen = Article::where('genre', 'seinen')->get();

        $article = Article::paginate(6);

    
        return view('seinens', compact('seinen', 'article'));  
    }
    public function ShojoMangas()
    {
        $shojo = Article::where('genre', 'shojo')->get();

        $article = Article::paginate(6);

    
        return view('shojos', compact('shojo', 'article'));  
    }
    public function JoseiMangas()
    {
        $josei = Article::where('genre', 'josei')->get();

        $article = Article::paginate(6);

    
        return view('joseis', compact('josei', 'article'));  
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
    
        $article = Article::where('title', 'like', '%' . $searchTerm . '%')
            ->orWhere('content', 'like', '%' . $searchTerm . '%')
            ->get();
    
        if ($article->isEmpty()) {
            // Aucun résultat trouvé
            return view('articles.search', compact('searchTerm'))->with('message', 'Aucun résultat trouvé.');
        }
    
        return view('articles.search', compact('article', 'searchTerm'));
    }
    



}