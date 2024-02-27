<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Symfony\Contracts\Service\Attribute\Required;

class PostController extends Controller
{

    public function __construct()
    
    {
       $this->middleware('auth', ['expect'=>['index', 'show']]); 
    }
    /**
     * Display a listing of the resource.
     * 
     *  @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $post=Post::all();
        return view('blog.index')->with('post', post::orderBY('updated_at', 'DESC'));
    }

    /**
     *  @return \Illuminate\Http\Response
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * 
     *  @return \Illuminate\Http\Response
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048'
        ]);
        $newImageName=uniqid(). '-'. $request->title . '.'. $request->image->extension();
        $request->image->move(public_path('uploads'), $newImageName);
      
        post::create([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'slug'=>SlugService::createSlug(post::class, 'slug', $request->title),
            'image_path'=>$newImageName,
            'user_id'=>auth()->user()->id


        ]);
        return redirect('/blog')->with('message', 'your post has been added!');
        
    }
    

    /**
     *  @return \Illuminate\Http\Response
     * Display the specified resource.
     */
    public function show($slug)
    {
        return view('blog.show')->with('post', post::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     * @param string $slug
     * @return \Illuminate\Http\Response 
     */
    public function edit($slug)
    {
        return view('blog.edit') ->with('post', post::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Response $request
     * @param string $slug
     * @param \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        
        $request->validate([
            'title'=>'required',
            'description'=>'required',
           
        ]);
        post::where('slug', $slug)->update([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'slug'=>SlugService::createSlug(post::class, 'slug', $request->title),
            'user_id'=>auth()->user()->id

        ]);
        return redirect('/blog')->with('message', 'your post has been updated!');
        
    }

    /**
     *  @param int $id
     * @param \Illuminate\Http\Response
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $post=post::where('slug', $slug);
        $post->delete();
        return redirect('/blog')->with('message', 'your post has been Deleted!');
    }
}
