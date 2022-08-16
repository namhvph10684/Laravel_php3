<?php

namespace App\Http\Controllers;
use  App\Models\Category;
use Illuminate\Http\Request;

use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    //

    public function index(){

        $cate = Category::select('id', 'name' ,'thumbnail_url')
        ->orderBy('id', 'desc')
        ->paginate(5);

        return view('admin.category.list',['cate_list' => $cate]);

    }


    public function delete(Category $cate){
        if($cate->delete()){
            return redirect()->back();
        }
     }

     private function saveFile($file, $prefixName = '', $folder = 'public')
     {
         $fileName = $file->hashName();
         $fileName = $prefixName
             ? $prefixName . '_' . $fileName
             : $fileName;
 
         return $file->storeAs($folder, $fileName);
     }

     public function create(){

        
        

        return view('admin.category.create');
     }


     public function store(CategoryRequest $request){
        
        $cate = new Category();
       
        $cate->fill($request->all()); //đặt namne ở form cùng gtr thuộc tính



        if($request->hasFile('thumbnail_url')) {
            
            $thumbnail_url = $request->thumbnail_url;
            $thumbnailurlName = $thumbnail_url->hashName();
            $thumbnailurlName = $request->username . '_' . $thumbnailurlName;
           
            $cate->thumbnail_url = $thumbnail_url->storeAs('images/categories', $thumbnailurlName);
            
        } else {
            $cate->thumbnail_url = '';
        }
       

       
        //lưu
        $cate->save();

        return redirect()->route('cate.list');
     }

     public function edit(Category $cate){
      
      

        return view('admin.category.edit',['cate'=>$cate]);
     }



     public function update(CategoryRequest $request, Category $cate) {
        
        $cate->fill($request->all());
        if($request->hasFile('thumbnail_url')) {
            $cate->thumbnail_url = $this->saveFile(
                $request->thumbnail_url,
                $request->name,
                'images/categories/'
            );
        }
        $cate->save();
        return redirect()->route('cate.list');
    }
}
