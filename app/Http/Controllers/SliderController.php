<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{

    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'))->with('id');
    }


    public function create(Product $product, Category $category)
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.slider.create', compact('categories', 'products', 'product', 'category', $category));
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,gif,jpg|max:10000',
        ]);
        $images = array();
        if ($files = $request->file('image')) {
            foreach ($files as $file) {
                $name = time() . '.' . $file->getClientOriginalName();
                $destinationPath = public_path('/images/products');
                if ($file->move($destinationPath, $name)) {
                    $images[] = $name;

                    Slider::create(['image' => $name,

                    ]);
                }
            }
        }
        $notification = array(
            'message' => 'Image created Successfully',
            'alert-type' => "success"
        );

        return redirect()->route('slider.index')
            ->with($notification);
    }


        public function show($id)
    {
        //
    }


    public function edit(Slider $slider)
    {
       
        $product = Product::all();
        return view('admin.slider.edit', compact('product', 'slider'));

    }

    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        if ($request->hasFile('image')) {
            $productImage = public_path('images/products' . $slider->image);
            if (File::exists($productImage)) {
                unlink($productImage);
            }
        }
        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('/images/products/'), $imageName);
        $input['image'] = $imageName;
        $slider->image = $imageName;
        $slider->save();

        $notification = array(
            'message' => 'Image updated Successfully',
            'alert-type' => "success"
        );

        return redirect()->route('slider.index')
            ->with($notification);


    }

    public function destroy(Slider $slider)
    {
        $slider->delete();
        $notification = array(
            'message' => 'Image Deleted Successfully',
            'alert-type' => "success"
        );
        return redirect()->route('slider.index')
            ->with($notification);
    }
}
