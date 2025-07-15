<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Diamond;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cat = Categoria::latest()->get();
        $data = Diamond::latest()->get();
        $populares = Diamond::inRandomOrder()->limit(10)->get();
        return view('home.pages.index', compact('data', 'cat', 'populares'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login()
    {
        $cat = Categoria::latest()->get();
        return view('home.pages.login.index', compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function func()
    {
        $cat = Categoria::latest()->get();
        return view('home.pages.func.index', compact('cat'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
