<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Beranda;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Article::latest()->paginate(3);
        return view('welcome', compact('articles')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('show.article',[
            'article'=>$article
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function edit(Beranda $beranda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beranda $beranda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beranda $beranda)
    {
        //
    }
}
