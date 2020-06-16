<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'))->with('id');
    }



    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png|max:10000'
        ]);
        $image = $request->file('image');
        if (isset($image)) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('images/product')) {
                mkdir('images/product', 0777, true);
            }
            $image->move('images/product', $imageName);
        }
        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->image = $imageName;
        $product->save();
        $notification = array(
            'message' => 'Product created Successfully',
            'alert-type' => "success"
        );
        return redirect()->route('products.index')
            ->with($notification);

    }


    public function show(Product $product)
    {
        $product = Product::where('id', $id)->with('product_images')->first();
        return view('admin.products.show', compact('product', 'product', $product, $product));
    }


    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('categories', 'product'));
    }


    public function update(Request $request, Product $id)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png|max:10000'
        ]);
        $product = Product::find($id);
        $image = $request->file('image');
        if (isset($image)) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('images/product')) {
                mkdir('images/product', 0777, true);
            }
            unlink('images/product/' . $product->image);
            $image->move('images/product', $imageName);
        }
        $product->code = "JW#" . generateProductCode(4);
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->image = $imageName;
        $product->save();
        $notification = array(
            'message' => 'Product updated Successfully',
            'alert-type' => "success"
        );
        return redirect()->route('products.index')
            ->with($notification);

    }

    public function addMultipleImage(Product $product)
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.product_image.create', compact('product', 'products', 'categories', $product, $products, $categories));
    }


    public function destroy(Product $product)
    {
        $product->delete();
        $notification = array(
            'message' => 'Product deleted Successfully',
            'alert-type' => "success"
        );
        return redirect()->route('products.index')
            ->with($notification);

    }
}
