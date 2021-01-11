<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get(); //hiermee haal je alles op van de database als je het anders wilt weergeven (aan de hand van tijd of naam moet je aan het eind ->get() gebruiken
        return view('pages.post_index', compact('posts'));
    }

    /**
     * Show the form for creating a new
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.create_post', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'category' => ['exists:categories,id']
        ]);

        $post = new Post();
        $post -> title = $request->get('title');
        $post -> description = $request->get('description');
        $post -> category_id = $request ->get('category');
        $post -> image = $request -> get('image');

        $post->save();
        return redirect('posts')->('succes', 'opgeslagen!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post_id = postController::find($id);
        if($post_id === null) {
            abort(404, "Post bestaat niet");
        }
        return view('pages.post_show', compact('post_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
