<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\addProductRequest;
use App\Models\Category;
use App\Models\Product;
use Toastr;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::with('category')->get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(addProductRequest $request)
    {

        $formInput=$request->except('image');
        // image upload
        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('Products',$imageName);
            $formInput['image']=$imageName;
        }
        Product::create($formInput);
        Toastr::success('Your product have been successfully added !' ,'Congratulations !');
        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::findOrFail($id);
        $categories=Category::all();
        return view('admin.products.edit',compact(['product','categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(addProductRequest $request, $id)
    {
        $product=Product::findOrFail($id);
        $formInput=$request->except('image');
        // image upload
        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('Products',$imageName);
            $formInput['image']=$imageName;
        }
        $product->update($formInput);
        Toastr::success('Your product have been successfully updated !' ,'Congratulations !');
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        Product::destroy($product);
        return redirect()->route('admin.products.index');
    }

    public function uploadImages($productId,addProductRequest $request)
    {

        $product=Product::find($productId);
        //image upload
        $image=$request->file('file');
        if($image){
            $imageName=time(). $image->getClientOriginalName();
            $image->move('Products',$imageName);
            $imagePath= "/Products/$imageName";
            $product->images()->create(['image_path'=>$imagePath]);
        }
        Product::create($formInput);
    }
}
