<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $productId = $request->id;
        $details = [
            'name' =>$request->name,
        ];
        if ($request->file('flyer')) {
            if($request->id){
                $product = ModelName::where('id', $request->id)->first(); //Replace Model Name with your model name
                if (!empty($product) && !empty($product->id)) {
                    if (!empty($product->flyer)) {
                        $file_path = public_path('course-flyer/'.$product->flyer);
                        if (file_exists($file_path)) {
                            unlink($file_path);
                        }
                    }
                }
            }
            $file = $request->file('flyer');
            $flyer = $request->code."-".$file->getClientOriginalName();
            $file->move('course-flyer', $flyer);
            $details['flyer'] = $flyer;
        }
        ModelName::updateOrCreate( //Replace Model Name with your model name
            [
                'id' => $productId
            ],
            $details);
            return redirect()->back()->with('succes','Course created successfully.');
    }
}
