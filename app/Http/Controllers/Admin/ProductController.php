<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(10);

        return view('admin.pages.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.products.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $product = Product::create($request->validated());

        if ($request->hasFile('img1')) {
            $this->saveImage($request->file('img1'), $product->id);
        }
        if ($request->hasFile('img2')) {
            $this->saveImage($request->file('img2'), $product->id);
        }
        if ($request->hasFile('img3')) {
            $this->saveImage($request->file('img3'), $product->id);
        }
        if ($request->hasFile('img4')) {
            $this->saveImage($request->file('img4'), $product->id);
        }
    
        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');

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
        $product = Product::with('images')->find($id);

        return view('admin.pages.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validated();
        $product->update($validated);
        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');

    }

    private function saveImage($image, $productId)
    {
        $path = $image->store('product_images', 'public');
        Image::create([
            'product_id' => $productId,
            'url' => $path,
        ]);
    }

   


}
