<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Article;

class ArticlePolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        
    }

    public function update(User $user, Article $article)
{
    return $user->isAdmin() && $user->id === $article->user_id;
}

public function delete(User $user, Article $article)
{
    return $user->isAdmin() || $user->id === $article->user_id;
}


}
