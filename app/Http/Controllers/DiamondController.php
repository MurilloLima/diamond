<?php

namespace App\Http\Controllers;

use App\Models\Diamond;
use Illuminate\Http\Request;

class DiamondController extends Controller
{
    private $diamond;
    public function __construct(Diamond $diamond)
    {
        $this->diamond = $diamond;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Diamond::latest()->get();
        return view('admin.pages.diamond.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.diamond.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required',
            'name' => 'required',
            'valor' => 'required',
            'dispo' => 'required',
            'venda' => 'required',
        ]);

        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('upload/'), $imageName);
            $this->diamond->name = $request->name;
            $this->diamond->valor = $request->valor;
            $this->diamond->dispo = $request->dispo;
            $this->diamond->venda = $request->venda;
            $this->diamond->img = $imageName;

            $this->diamond->save();

            return redirect()->back()->with('msg', 'Cadastrado com sucesso!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Diamond $diamond)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diamond $diamond)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Diamond $diamond)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->diamond->destroy($id);
        return redirect()->back()->with('msg', 'Deletada com sucesso!');
    }
}
