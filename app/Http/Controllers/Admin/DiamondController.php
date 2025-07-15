<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Diamond;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Str;

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
        $cat = Categoria::latest()->get();
        return view('admin.pages.diamond.index', compact('data', 'cat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'total' => 'required',
            'disponiveis' => 'required',
            'vendidos' => 'required',
            'tipo_anuncio' => 'required',
            'desc_anuncio' => 'required',
            'desc' => 'required',
        ]);

        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            $imageName = time() . '.' . $request->img->extension();
            $image = $request->file('img');
            $imageName = time() . '.' . $image->extension();

            $destinationPathThumbnail = public_path('upload/');
            $img = Image::read($image->path());
            $img->resize(800, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPathThumbnail . '/' . $imageName);

            $destinationPath = public_path('/');
            $image->move($destinationPath, $imageName);

            $this->diamond->name = $request->name;
            $this->diamond->img = $imageName;
            $this->diamond->cat_id = $request->cat_id;
            $this->diamond->slug = Str::slug($request->name, '-');
            $this->diamond->disponiveis = $request->disponiveis;
            $this->diamond->vendidos = $request->vendidos;
            $this->diamond->tipo_anuncio = $request->tipo_anuncio;
            $this->diamond->desc_anuncio = $request->desc_anuncio;
            $this->diamond->desc = $request->desc;
            $this->diamond->total = $request->total;
            $this->diamond->save();
            return redirect()->back()->with('msg', 'Cadastrado com sucesso!');
        }
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
