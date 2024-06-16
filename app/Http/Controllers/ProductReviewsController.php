<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductReviewsRequest;
use App\Http\Requests\UpdateProductReviewsRequest;
use App\Models\Product;
use App\Models\ProductReviews;

class ProductReviewsController extends Controller
{
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
    public function store(StoreProductReviewsRequest $request, Product $product)
    {
        $product->reviews()->create([
            'user_id' => auth()->user()->id,
            'product_id' => $product->id,
            'review' => $request->review,
            "rating" => $request->rating,
        ]);
        return "ho gya save";
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductReviews $productReviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductReviews $productReviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductReviewsRequest $request, ProductReviews $productReviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductReviews $productReviews)
    {
        //
    }
}
