<?php

namespace App\Http\Controllers;

use App\Models\CollectionItem;
use App\Models\Category;
use App\Models\Franchise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CollectionItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = CollectionItem::with(['category', 'franchise'])
            ->where('user_id', auth()->id());

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $items = $query
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();

        $franchises = Franchise::where('user_id', auth()->id())
            ->orderBy('name')
            ->get();

        return view('items.create', compact('categories', 'franchises'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'franchise_id' => 'nullable|exists:franchises,id',
            'quantity' => 'required|integer|min:1',
            'status' => 'required|in:owned,wishlist',

            'manufacturer' => 'nullable|string|max:150',
            'series' => 'nullable|string|max:150',
            'character' => 'nullable|string|max:150',
            'edition' => 'nullable|string|max:100',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',

            'purchase_date' => 'nullable|date',
            'purchase_price' => 'nullable|numeric',
            'estimated_price' => 'nullable|numeric',

            'condition' => 'nullable|in:Mint,Near Mint,Good,Fair,Poor',

            'storage_location' => 'nullable|string|max:200',
            'notes' => 'nullable|string',
            'is_favorite' => 'nullable|boolean',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('items', 'public');
        }

        CollectionItem::create([
            'user_id' => auth()->id(),

            'name' => $request->name,
            'category_id' => $request->category_id,
            'franchise_id' => $request->franchise_id,
            'quantity' => $request->quantity,
            'status' => $request->status,

            'manufacturer' => $request->manufacturer,
            'series' => $request->series,
            'character' => $request->character,
            'edition' => $request->edition,
            'image' => $imagePath,

            'purchase_date' => $request->purchase_date,
            'purchase_price' => $request->purchase_price,
            'estimated_price' => $request->estimated_price,

            'condition' => $request->condition,

            'storage_location' => $request->storage_location,
            'notes' => $request->notes,

            'is_favorite' => $request->boolean('is_favorite'),
        ]);

        return redirect()
            ->route('items.index')
            ->with('success', 'Item cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(CollectionItem $item)
    {
        abort_if($item->user_id !== auth()->id(), 403);

        return view('items.show', compact('item'));
    }

        public function favorites()
    {
        $items = CollectionItem::with(['category', 'franchise'])
            ->where('user_id', auth()->id())
            ->where('is_favorite', true)
            ->paginate(10);

        return view('items.index', [
            'items' => $items,
            'pageTitle' => 'Favoritos'
        ]);

    }

        public function wishlist()
    {
        $items = CollectionItem::with(['category', 'franchise'])
            ->where('user_id', auth()->id())
            ->where('status', 'wishlist')
            ->paginate(10);

        return view('items.index', [
        'items' => $items,
        'pageTitle' => 'Wishlist'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CollectionItem $item)
    {
        abort_if($item->user_id !== auth()->id(), 403);

        $categories = Category::orderBy('name')->get();

        $franchises = Franchise::where('user_id', auth()->id())
            ->orderBy('name')
            ->get();

        return view('items.edit', compact('item', 'categories', 'franchises'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CollectionItem $item)
    {
        abort_if($item->user_id !== auth()->id(), 403);

        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'franchise_id' => 'nullable|exists:franchises,id',
            'quantity' => 'required|integer|min:1',
            'status' => 'required|in:owned,wishlist',

            'manufacturer' => 'nullable|string|max:150',
            'series' => 'nullable|string|max:150',
            'character' => 'nullable|string|max:150',
            'edition' => 'nullable|string|max:100',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',

            'purchase_date' => 'nullable|date',
            'purchase_price' => 'nullable|numeric',
            'estimated_price' => 'nullable|numeric',

            'condition' => 'nullable|in:Mint,Near Mint,Good,Fair,Poor',

            'storage_location' => 'nullable|string|max:200',
            'notes' => 'nullable|string',
            'is_favorite' => 'nullable|boolean',
        ]);

        $imagePath = $item->image;

        if ($request->hasFile('image')) {

            // Remove a imagem antiga, se existir
            if ($item->image && Storage::disk('public')->exists($item->image)) {
                Storage::disk('public')->delete($item->image);
            }

            // Salva a nova imagem
            $imagePath = $request->file('image')->store('items', 'public');
        }

        $item->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'franchise_id' => $request->franchise_id,
            'quantity' => $request->quantity,
            'status' => $request->status,

            'manufacturer' => $request->manufacturer,
            'series' => $request->series,
            'character' => $request->character,
            'edition' => $request->edition,
            'image' => $imagePath,

            'purchase_date' => $request->purchase_date,
            'purchase_price' => $request->purchase_price,
            'estimated_price' => $request->estimated_price,

            'condition' => $request->condition,

            'storage_location' => $request->storage_location,
            'notes' => $request->notes,

            'is_favorite' => $request->boolean('is_favorite'),
        ]);

        return redirect()
            ->route('items.index')
            ->with('success', 'Item atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CollectionItem $item)
    {
        abort_if($item->user_id !== auth()->id(), 403);

        if ($item->image && Storage::disk('public')->exists($item->image)) {
            Storage::disk('public')->delete($item->image);
        }
        
        $item->delete();

        return redirect()
            ->route('items.index')
            ->with('success', 'Item removido com sucesso!');
    }
}