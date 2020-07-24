<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Resources\ProductsCollection;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return ProductsCollection
     */
    public function index(Request $request)
    {
        $products = Product::paginate(20);
        if($request->wantsJson()){
            return new ProductsCollection($products);
        }
        return view('products.index',['products' => $products]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adminproducts()
    {
        $products = Product::all();
        return view('products.adminproducts',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $ProductCategories = ProductCategory::all();
        $product = new product;
        return view('products.create')->with(["product"=>$product,"ProductCategories"=>$ProductCategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $options = [
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->ProductCategory,
            'slug'=> $request->slug,
            'price'=> $request->price,
            'stock'=> $request->stock,
        ];

        if(Product::create($options)){
            return  redirect('/products');
        }else{
            return view('products.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Product $product)
    {
        return view('products.show',['product' =>$product]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Product $product)
    {
        $ProductCategories = ProductCategory::all();
        return view('products.edit')->with(["product"=>$product,"ProductCategories"=>$ProductCategories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Product $product)
    {
           $product-> name = $request->name;
           $product-> description = $request->description;
           $product-> category_id = $request->ProductCategory;
           $product-> slug= $request->slug;
           $product-> price= $request->price;
           $product-> stock= $request->stock;

        if($product->save()){
            return  redirect('/adminproducts');
        }else{
            $ProductCategories = ProductCategory::all();
            return view('products.edit')->with(["product"=>$product,"ProductCategories"=>$ProductCategories]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Product $product)
    {
        if(!$product->delete()) {
            return redirect('/adminproducts');
        } else {
            return redirect('/adminproducts');
        }
    }
}
