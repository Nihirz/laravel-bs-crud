<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DependentController extends Controller
{
    public function __construct()
    {
        $data = Category::get();
        view()->share('data',$data);
    }
    public function index(Request $request){
        if($request->ajax()){
            $view = 'dependent.ajax';
        }else{
            $view = 'dependent.index';
        }
        $data = Category::get();
        return view($view,compact('data'));
    }
    public function gp(Request $request){
        $products = Product::where('category_id',$request->id)->get();
        $view = 'dependent.list';
        return view($view,compact('products'));
    }
}
