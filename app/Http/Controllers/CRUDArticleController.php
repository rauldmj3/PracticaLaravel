<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\DB;

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
            'descripcio' => ['required', 'string', 'max:255'],
        ]);

        Article::create(["descripcio" => request()->descripcio]);
 

        return redirect(RouteServiceProvider::HOME);
    }
    public function update()
    {
        //
        request()->validate([
            'email' => ['required', 'string', 'max:255'],
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
            'email' => ['required', 'string', 'max:255'],
        ]);

        DB::insert("INSERT INTO articles(article,id_usuario");


        return redirect(RouteServiceProvider::HOME);
    }
}