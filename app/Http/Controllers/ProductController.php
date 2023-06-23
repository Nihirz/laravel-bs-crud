<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $category = Category::get();
        $data = Product::get();
        return view('product.index',compact('category','data'));
    }
    public function store(Request $request){

        Product::updateOrCreate([
            'id'=>$request->id,
        ],[
            'name'=>$request->name,
            'category_id'=>$request->category_id,
        ]);
        return redirect()->route('product.index');
    }
}
