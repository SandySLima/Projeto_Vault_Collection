<?php

namespace App\Http\Controllers;

use App\Models\Franchise;
use Illuminate\Http\Request;

class FranchiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $franchises = Franchise::where('user_id', auth()->id())
        ->paginate(10);

        return view('franchises.index', compact('franchises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('franchises.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|string|max:150',
        ]);

        Franchise::create([
        'name' => $request->name,
        'user_id' => auth()->id(),
        ]);

        return redirect()
        ->route('franchises.index')
        ->with('success', 'Franquia criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Franchise $franchise)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Franchise $franchise)
    {
        abort_if($franchise->user_id !== auth()->id(), 403);

        return view('franchises.edit', compact('franchise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Franchise $franchise)
    {
        abort_if($franchise->user_id !== auth()->id(), 403);

        $request->validate([
        'name' => 'required|string|max:150',
        ]);

        $franchise->update([
        'name' => $request->name,
        ]);

        return redirect()
        ->route('franchises.index')
        ->with('success', 'Franquia atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Franchise $franchise)
    {
        abort_if($franchise->user_id !== auth()->id(), 403);

        $franchise->delete();

        return redirect()
        ->route('franchises.index')
        ->with('success', 'Franquia excluída com sucesso!');
    }
}
