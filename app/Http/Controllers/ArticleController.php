<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article = Article::latest()->paginate(5);
        return view('welcome',compact('article'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(){
        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        
        $article = Article::latest()->paginate(5);
        return view('dashboard',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $id+" Esto es el update";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
