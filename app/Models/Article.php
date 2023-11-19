<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [ "title", "picture", "content","genre" ,"price","qte"];

    public static function boot(){
        parent::boot();
        self::creating(function ($article){
            $article->user()->associate(auth()->user()->id);
        });
    }


    // Relation //

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }        


}
