<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    //
    public function index(){
        $product = Product::where('status',1)->get();            

        $category = Category::select('id','name','thumbnail_url')->get();
        $category->load('products');

        return view('shop.dashboard',
        ['product' => $product,'category' => $category]
    );

    

    }


    public function shop() {
        $product = Product::where('status',1)
        ->paginate(6);

        return view('shop.shop',['product_list' => $product]);
    }

    public function contact() {
        return view('shop.contact');
    }

    public function productDetail(Request $request,$id) {
      
        
        $product = Product::find($id);

        
        return view('shop.product_detail',['product' => $product]);
    }

    public function cart(Request $request,$id) {
        $product = Product::find($id);
        return view('shop.cart',['product' => $product]);

    }
}
