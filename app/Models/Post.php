<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Post
 *
 * @mixin Builder
 */
class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable =  ['title', 'content'];

    public function atualizar($id, $array)
    {
        if (!$post = self::find($id))
            return redirect()->back();

        $post->update($array);

        return redirect()->route('posts.index')->with('message', 'Post editado!');
    }
}
