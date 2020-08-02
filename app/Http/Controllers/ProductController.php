<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use App\Http\Requests\ProductsRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $products = Product::paginate(20);
        return view('products.index',['products' => $products]);
    }

    /**
     * @return Application|Factory|View
     */
    public function adminproducts()
    {
        $products = Product::all();
        return view('products.adminproducts',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
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
     * @param ProductsRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(ProductsRequest $request)
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
            alert()->success('SuccessAlert','Producto creado con exito');
            return  redirect('/products');
        }else{
            return view('products.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return Application|Factory|View
     */
    public function show(Product $product)
    {
        return view('products.show',['product' =>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Application|Factory|View
     */
    public function edit(Product $product)
    {
        $ProductCategories = ProductCategory::all();
        return view('products.edit')->with(["product"=>$product,"ProductCategories"=>$ProductCategories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductsRequest $request
     * @param Product $product
     * @return Application|RedirectResponse|Redirector
     */
    public function update(ProductsRequest $request, Product $product)
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
     * @param Product $product
     * @return Application|RedirectResponse|Redirector
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
