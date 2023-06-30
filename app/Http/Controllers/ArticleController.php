<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Validation\ValidatesRequests;


class ArticleController extends Controller
{
    // use ValidatesRequests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        $articles=Article::latest()->paginate(5);
        // $articles= Article::latest()->where('user_id', auth()->user()->id)->get();
        return view('article.index',compact('articles'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'title'     => 'required|min:5',
        //     'category_id'=>'required',
        //     'content'   => 'required|min:10'
        // ]);
        
        // $this->validate($request, [
        //     'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'title'     => 'required|min:5',
        //     'category_id'=>'required',
        //     'content'   => 'required|min:10'
        // ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/articles', $image->hashName());

        //create post
        Article::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'category_id'     => $request->category_id,
            'content'   => $request->content,
            'user_id' => auth()->id(),
            'excerpt'=>Str::limit(strip_tags( $request->content) ,50)
        ]);

        //redirect to index
        return redirect()->route('articles.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

        // 
    //     $validatedData=$request->validate([
    //         'title'=>'required|max:255',
    //         'category_id'=>'required',
    //         // 'image'=>'image|file|max:1024',
    //         'content'=>'required'
    //     ]);
    //     // if($request->file('image')){
    //     //     $validatedData['image']=$request->file('image')->store('post-images');
    //     // }
    //     $validatedData['user_id']=auth()->user()->id;
    //     Article::create($validatedData);
    //     return redirect('/articles')->with('success', 'new post has been added');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article.show',[
            'article'=>$article
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('article.edit',[
            'article'=>$article,
            'categories'=>Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/articles', $image->hashName());

            //delete old image
            Storage::delete('public/articles/'.$article->image);

            //update artic$article with new image
            $article->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'category_id'     => $request->category_id,
                'content'   => $request->content,
                'excerpt'=>Str::limit(strip_tags( $request->content) ,100)
            ]);

        } else {

            //update artic$article without image
            $article->update([
                'title'     => $request->title,
                'category_id'     => $request->category_id,
                'content'   => $request->content
            ]);
        }
        return redirect()->route('articles.index')->with(['success' => 'Data Berhasil Di Update!']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //delete image
        Storage::delete('public/articles/'. $article->image);

        //delete arti$article
        $article->delete();
        return redirect()->route('articles.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    
}
