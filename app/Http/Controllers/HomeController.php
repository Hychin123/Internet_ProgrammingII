<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product\Category;
use App\Models\Product\Promotion;
use App\Models\Product\Product;

class HomeController extends Controller
{
    public function renderHome()
    {
        $categories = Category::withCount("products as n_of_product")->get();
        $promotions = Promotion::all();
        $products   = Product::with(['category'])->get();
        return view('home', compact('categories','promotions','products'));
    }
    public function add(){
        $categories = Category::all();

        return view('product.form', compact('categories'));
    }

    public function store(Request $request){

        $product = new Product();

        $product->name               = $request->name;
        $product->category_id        = $request->category;
        $product->pricing            = $request->pricing;
        $product->discount_pricing   = $request->promotion;
        $product->description        = $request->description;
        // Generate random values for range and weight
        $product->rating             = rand(1, 5); // Random number between 100 and 500
        $product->weight             = rand(100, 500); // Random number between 100 and 500

        if($request->image){
            $store_image = $request
                            ->file('image')
                            ->storeAs(
                                'public/static/product', $request->image->getClientOriginalName()
                            );
        }
        $product->image              = $request->file('image')->getClientOriginalName();

        $product->save();


        return redirect()->route('home')->with('message','success');
    }
}