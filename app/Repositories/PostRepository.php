<?php
namespace App\Repositories;

use App\Entities\Post;

class PostRepository
{
    public function index()
    { 
        return Post::get(); 
        // return Post::with('user')->get(); //web
    }

    public function find($id)
    {
        return Post::where('id', $id)->first();
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        if ($post) {
            return $post->delete();
        }
    }

    public function create(array $data)
    {
        $data['user_id'] = 0;
        return Post::create($data);
        // return auth()->user()->posts()->create($data); //web
    }

    public function update(array $data, $id)
    {
        $post = Post::find($id);
        if (!$post) {
           return false;
        }

        return $post->update($data);
    }
}