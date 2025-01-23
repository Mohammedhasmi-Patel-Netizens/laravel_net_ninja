<?php

namespace App\Http\Controllers;

use App\Models\Dojo;
use App\Models\Ninja;
use Exception;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ninjas = Ninja::with('dojo')->orderBy("created_at", "desc")->paginate(10);
        return view('ninjas.index', ["greeting" => "Hello", "ninjas" => $ninjas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dojos = Dojo::all();
        return view('ninjas.create', compact('dojos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'skill' => 'required|integer|min:1|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'dojo_id' => 'required|exists:dojos,id',
        ]);

        try {
            Ninja::create($validated);
            return redirect()->route('ninjas.index')->with('success','Ninja Created successfully...');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Ninja $ninja)
    {
        $ninja->load('dojo');
        return view('ninjas.show', ['ninja' => $ninja]);
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
    public function destroy(Ninja $ninja)
    {
        $ninja->delete();
        return redirect()->route('ninjas.index')->with('success','Ninja deleted sucessfully....');
    }
}
