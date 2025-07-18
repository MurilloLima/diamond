<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Sms;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    private $sms;
    public function __construct(Sms $sms)
    {
        $this->sms = $sms;
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
            'id_diamond' => 'required',
            'sms' => 'required',
        ]);
        $this->sms->name = $request->name;
        $this->sms->id_diamond = $request->id_diamond;
        $this->sms->sms = $request->sms;
        $this->sms->save();

        return redirect()->back()->with('msg', 'Pergunta enviada com sucesso!');
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
