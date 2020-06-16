<?php

namespace App\Http\Controllers;

use App\cr;
use App\Category;
use App\Product;
use App\Contact;
use App\Slider;
use App\Partner;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index()
    {
        $partners = Partner::all();
        $sliders = Slider::all();
        $products = Product::all();
        $categories = Category::all();
        return view('frontend.index', compact('categories', 'products', 'sliders', 'partners'));
    }


    public function service()
    {
        $sliders = Slider::all();
        $partners = Partner::all();
        $categories = Category::all();
        return view('frontend.service', compact('categories', 'sliders', 'partners'));
    }

    public function sub_services(Request $request, $id)
    {
        $sliders = Slider::all();
        $partners = Partner::all();
        $categories = Category::all();
        $category = Category::where('id', $id)->with('products')->first();
        return view('frontend.sub_services', compact('categories', 'category', 'sliders', 'partners'));
    }

    public function about()
    {
        $sliders = Slider::all();
        $partners = Partner::all();
        $categories = Category::all();
        return view('frontend.about', compact('categories', 'partners', 'sliders'));
    }

    public function contact()
    {
        $sliders = Slider::all();
        $partners = Partner::all();
        $categories = Category::all();
        return view('frontend.contact', compact('categories', 'partners', 'sliders'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'message' => 'required',
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required'
        ]);
        $contact = new Contact();
        $contact->message = $request->message;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->save();

        return redirect()->back();

    }

    public function show(cr $cr)
    {
        //
    }

    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\cr $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }
}
