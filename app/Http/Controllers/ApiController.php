<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Api;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $data = Api::get();
        return response()->json(
            $data,
        );
    }
    public function store(Request $request)
    {
        // Method 1
        $data = new Api();
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->save();

        // Method 2
        $data = Api::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
        ]);

        // Method 3
        $data = Api::updateOrCreate(
            [
                'id' => $request->id,
            ],
            [
                'name'=>$request->name,
                'phone'=>$request->phone,
            ]
        );

        return response()->json(
            $data
        );
    }

    public function edit($id)
    {
        $data = Api::where('id',$id)->first();
        return response()->json(
            $data
        );
    }
    public function update(Request $request)
    {
        $data = Api::find($request->id);
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->save();
        return response()->json(
            $data
        );

    }
    public function destroy($id)
    {
        Api::where('id',$id)->delete();
        return response()->json(
            [
                'msg'=>'Deleted successfully.',
            ]
            );
    }
}
