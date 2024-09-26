<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['products'] = Product::latest()->get();
        return view("pages.admin.products.products_all")->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['categories'] = [
            "Fiqa",
            "Quran",
            "Fundamentals",
            "Concepts",
            "Aqamat-e-deen",

        ];
        return view("pages.admin.products.product_create")->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {

        //        dd($request->all());
        /** @noinspection PhpUnreachableStatementInspection */
        $productSlug = Str::slug($request->title, "-");

        $saveProduct = Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'regular_price' => $request->regular_price,
            'discount_price' => $request->discount_price,
            'quantity' => $request->quantity,
            'status' => $request->status,
            'slug' => $productSlug,
            'category_id' => 1,

        ]);
        $productKey = Product::find($saveProduct->getKey());
        //        dd($productKey->media);

        if ($request->hasFile("image")) {
            foreach ($request->file("image") as $item) {
                //                dd("reached in the array iteration");
                $image = $item;
                $imageName = "Book-" . time() . "." . $image->extension();
                $image->storeAs("public/ProductImages", $imageName);
                $productKey->media()->create([
                    'image' => "storage/ProductImages/" . $imageName,
                ]);
            }
        }
        Alert::success("success", "Product added Successfully");
        return redirect()->back();
    }

    public function product_detail(Product $product)
    {
        $data['product'] = $product;
        $data['randomProducts'] = Product::inRandomOrder()->take(3)->get();
        //        $data['productReviews']
        return view("pages.user.shop_detail")->with($data);
    }

    public function all_products()
    {

        $data['products'] = Product::latest()->get();
        $data['total_products'] = count($data['products']);
        return view("pages.user.shop")->with($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $data['product'] = $product;
        $data['categories'] = [
            "Fiqa",
            "Quran",
            "Fundamentals",
            "Concepts",
            "Aqamat-e-deen",

        ];
        return view("pages.admin.products.product_edit")->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProductRequest $request, Product $product)
    {
        $product->update([
            'title' => $request->title,
            'description' => $request->description,
            'regular_price' => $request->regular_price,
            'discount_price' => $request->discount_price,
            'quantity' => $request->quantity,
            'status' => $request->status == "active" ? "active" : "inactive",
            'slug' => $product->slug,
            'category_id' => 1,

        ]);

        $productKey = $product->getKey();

        if ($request->hasFile("image")) {
            foreach ($request->file("image") as $item) {
                $image = $item;
                $imageName = "storage/ProductImages/" . "Course_" . time() . "." . $image->extension();
                $image->storeAs("app/ProductImages", $imageName);
                $product->media()->create([
                'image' => $imageName,
                ]);
            }
        }
        Alert::success("success", "Product Updated Successfully");
        return redirect()->route("admin.products.all");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        Alert::success("success", "Product Deleted Successfully");
        return redirect()->back();
    }






    // BUY NOW

    public function buy_now(Product $product)
    {
        $data['product'] = $product;
        $data['quantity'] = 1;
        return view("pages.user.checkout.prod_checkout")->with($data);
    }











    public function store_review(Request $request, Product $product)
    {
        dd($request->all());
    }
}
