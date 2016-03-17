<?php

namespace App\Http\Controllers;

use App\Post;

use App\User;
use Illuminate\Http\Request;


use App\Http\Requests;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $posts = Post::all();

        return view('articles.index')
            ->with(compact('posts'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all()->lists('name', 'id');

        return view('articles.create')->with(compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ValidatePostRequest $request)
    {
        //Méthode 1
        $post = new Post;

        $post->user_id      = $request->user()->id;
        $post->title        = $request->title;
        $post->description  = $request->description;

        $post->save();


        //Méthode 2
        //$data = $request->except('_token');
        //$data['user_id'] = $request->user()->id;
        //$post = Post::create($data);

        return redirect()->route('articles.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        if(!$post) {
            return redirect()->to('/articles');
        }

        return view('articles.show')->with(['article' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all()->lists('name', 'id');
        $post  = Post::find($id);

        if(!$post) {
            return redirect()->to('/articles');
        }

        return view('articles.edit')->with(compact('users', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\ValidatePostRequest $request, $id)
    {
        $post = Post::find($id);

        if(!$post) {
            return redirect()->to('/articles');
        }

        $post->title        = $request->title;
        $post->description  = $request->description;
        $post->user_id      = $request->user_id;

        $post->save();

        return redirect()->route('articles.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if(!$post) {
            return redirect()->route('articles.index');
        }

        $post->delete();

        return redirect()->route('articles.index');
    }
}
