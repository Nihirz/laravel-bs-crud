<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Barryvdh\DomPDF\Facade\Pdf;

class WelcomeController extends Controller
{
    public function ajax(Request $request){
        if($request->ajax()){
            $view = 'ajaxindex';
        }else{
            $view = 'index';
        }
        $data = Category::get();
        return view($view,compact('data'));
    }
    public function store(Request $request)
    {
        Category::updateOrCreate([
            'id'=>$request->id,
        ],
        [
            'name'=>$request->name,
        ]);
        return response()->json([
            'code'=>'200',
        ]);
    }
    public function delete($id)
    {
        Category::where('id',$id)->delete();
        return response()->json([
            'code'=>'200',
        ]);
    }
    public function edit($id)
    {
        $data = Category::where('id',$id)->first();
        return response()->json([
            'data'=>$data,
        ]);
        // Log::channel('custom')->info('
        // File Delete On',[
        //     'user_role'=>Auth::user()->roles[0]['name'],
        //     'File Edit By user_name'=>Auth::user()->name,
        //     'File Edit On Date'=>$date,
        //     'Deleted ID'=>$id,
        // ]);
    }
    public function export(){
        $data = Category::get();
        $pdf = Pdf::loadView('ajaxindex', compact('data'));
        return $pdf->download('invoice.pdf');
    }
}
