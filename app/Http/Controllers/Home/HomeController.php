<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Diamond;
use App\Models\Sms;
use App\Models\view;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $view;
    public function __construct(view $view)
    {
        $this->view = $view;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cat = Categoria::latest()->get();
        $data = Diamond::latest()->get();
        $populares = Diamond::inRandomOrder()->limit(10)->get();
        $random = Diamond::inRandomOrder()->limit(5)->get();
        $sms = Sms::latest()->limit(4)->get();

        return view('home.pages.index', compact('data', 'cat', 'populares', 'random', 'sms'));
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
    public function view($slug)
    {
        $data = Diamond::where('slug', '=', $slug)->first();
        $cat = Categoria::latest()->get();
        $random = Diamond::inRandomOrder()->limit(5)->get();

        if ($data->id === NULL) {
            $this->view->id_diamond = $data->id;
            $this->view->total = +1;
            $this->view->save();
        } else {
            $this->view->id_diamond = $data->id;
            $this->view->total = +1;
            $this->view->save();
        }

        return view('home.pages.diamond.view', compact('data', 'cat', 'random'));
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
