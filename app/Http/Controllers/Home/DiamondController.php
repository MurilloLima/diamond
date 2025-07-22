<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Diamond;
use App\Models\view;
use Illuminate\Http\Request;

class DiamondController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($slug)
    {
        $data = Diamond::where('slug', '=', $slug)->first();
        if ($data->id === NULL) {
            $this->view->id_diamond = $data->id;
            $this->view->total = +1;
            $this->view->save();
        } else {
            $this->view->noticia_id = $data->id;
            $this->view->total = +1;
            $this->view->save();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
