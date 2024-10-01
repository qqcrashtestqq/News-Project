<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetIdRequest;
use App\Http\Requests\StorePostRequest;
use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('author:id,author_name')->get();

        return view('page-all-posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::get();

        return view('create-post', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->validated());


        return 'post created';
    }

    /**
     * Display the specified resource.
     */
    public function show(GetIdRequest $request)
    {
        $post = Post::findOrFail($request->id);

        return view('show-post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id); // Ищем пост по ID
        $authors = Author::all(); // Получаем всех авторов

        return view('update-post', compact('post', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, string $id)
    {
      $post = Post::findOrFail($id);
      $post->update($request->validated());

        // Обновляем поля статьи
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->author_id = $request->input('author_id');

        $post->save();

        // Перенаправляем пользователя на страницу со всеми постами или на конкретный пост
        return redirect()->route('all_post')->with('success', 'Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GetIdRequest $request)
    {
        $post = Post::findOrFail($request->id);

        $post->delete();
        return redirect()->route('all_post');
    }
}
