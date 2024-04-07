<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use App\Models\Article;
use App\Providers\RouteServiceProvider;

class CRUDArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('insertar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    { 
        //
        request()->validate([
            'autor' => ['required', 'string', 'max:255'],
        ]);

        Article::create([
            'descripcio' => request()->email
        ]);
 

        return redirect(RouteServiceProvider::HOME);
    }
    public function update()
    {
        //
        request()->validate([
            'autor' => ['required', 'string', 'max:255'],
            'descripcio' => ['required', 'string', 'max:255'],
        ]);

        Article::create([
            'descripcio' => request()->email
        ]);


        return redirect(RouteServiceProvider::HOME);
    }
    public function delete()
    {
        //
        request()->validate([
            'autor' => ['required', 'string', 'max:255'],
        ]);

        Article::create([
            'descripcio' => request()->email
        ]);


        return redirect(RouteServiceProvider::HOME);
    }
}