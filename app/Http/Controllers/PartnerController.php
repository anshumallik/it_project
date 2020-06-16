<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('admin.partner.index', compact('partners'))->with('id');
    }


    public function create()
    {
        $partners = Partner::all();
        return view('admin.partner.create',compact('partners'));
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

                    Partner::create(['image' => $name,

                    ]);
                }
            }
        }
        $notification = array(
            'message' => 'Image created Successfully',
            'alert-type' => "success"
        );

        return redirect()->route('partner.index')
            ->with($notification);
    }

    public function show(Partner $partner)
    {
        //
    }


    public function edit(Partner $partner)
    {
        return view('admin.partner.edit', compact('partner'));

    }


    public function update(Request $request, $id)
    {
        $partner = Partner::find($id);
        if ($request->hasFile('image')) {
            $productImage = public_path('images/products' . $partner->image);
            if (File::exists($productImage)) {
                unlink($productImage);
            }
        }
        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('/images/products/'), $imageName);
        $input['image'] = $imageName;
        $partner->image = $imageName;
        $partner->save();

        $notification = array(
            'message' => 'Image updated Successfully',
            'alert-type' => "success"
        );

        return redirect()->route('partner.index')
            ->with($notification);


    }

    public function destroy(Partner $partner)
    {
        $partner->delete();
        $notification = array(
            'message' => 'Image Deleted Successfully',
            'alert-type' => "success"
        );
        return redirect()->route('partner.index')
            ->with($notification);
    }
}
