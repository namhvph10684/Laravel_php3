<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){

       

        $products = Product::select('id','name','description','short_description', 'price','thumbnail_url','quantity','status','category_id', 'size')->paginate(5);
              
        if($key=request()->key){
            $products = Product::select('id','name','description','short_description', 'price','thumbnail_url','quantity','status','category_id', 'size')
            ->where('name','like','%'.$key.'%')->orderBy('id','desc')->paginate(5);
        }
   

        return view('admin.product.list',['product_list' => $products]);
    }

    public function delete(Product $product) {
        if($product->delete()) {
            return redirect()->back();
        }
    }

    public function create()
    {
        
        $category = Category::select('id', 'name')->get();
        
        return view('admin.product.create', [
            'cate' => $category
        ]);
    }

    private function saveFile($file, $prefixName = '', $folder = 'public')
    {
        $fileName = $file->hashName();
        $fileName = $prefixName
            ? $prefixName . '_' . $fileName
            : $fileName;

        return $file->storeAs($folder, $fileName);
    }

    public function store(ProductRequest $request)
    {
        
        $product = new Product();
        
        $product->fill($request->all()); // đặt name ở form cùng giá trị với thuộc tính
        
        if($request->hasFile('thumbnail_url')) {
            
            $thumbnail_url = $request->thumbnail_url;
            $thumbnailurlName = $thumbnail_url->hashName();
            $thumbnailurlName = $request->username . '_' . $thumbnailurlName;
           
            $product->thumbnail_url = $thumbnail_url->storeAs('images/products', $thumbnailurlName);
            
        } else {
            $product->thumbnail_url = '';
        }
        // 4. Lưu
        $product->save();

        return redirect()->route('products.list');
        
    }

    public function edit(Product $product)
    {
       
        $category = Category::select('id', 'name')->get();
        return view('admin.product.edit', [
            'product' => $product,
            'cate' => $category,
        ]);
    }

    public function update(ProductRequest $request, Product $product) {
        // $product = new Product();
        
        $product->fill($request->all());
      

        if($request->hasFile('thumbnail_url')) {
            $product->thumbnail_url = $this->saveFile(
                $request->thumbnail_url,
                $request->name,
                'images/products/'
            );
        }
       

        $product->save();
        return redirect()->route('products.list');
    }

    public function updateStatus(Request $request,$id){

        $updatest=Product::find($id);
         $updatest->status = $request->status;
   
         $updatest->save();
   
         return redirect()->route('products.list');
   
        }

}
