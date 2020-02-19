<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Material;

class MaterialController extends Controller
{
    
    public function index()
    {
        //
        $data = \App\Material::all();

        if(count($data) > 0){ //mengecek apakah data kosong atau tidak
            $res['message'] = "Success!";
            $res['values'] = $data;
            return response($res);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
    }

   
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
        
        if (Material::create($request->all())) {
            return response()->json(['status' => 'success','code'=>'201','data' => $request->all()]);   
            // return response()->json(['status' => 'success' ,'code' => '201', 'message' => 'Data has been created'],201);
          } else {
            return response()->json(['status' => 'error','code' => '500', 'message' => 'Internal Server Error' ],500);
          }
    
     
    }

  
    public function show($uuid)
    {
        $data = Material::where('uuid',$uuid)->get();
        
        if (is_null($product)) {
            return $this->sendError('Product not found.');
        }


        return $this->sendResponse($product->toArray(), 'Product retrieved successfully.');
    }

    
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        material::uuid($id)->update();
    }

    public function destroy($id)
    {
        //
       material::uuid($id )->delete();
    }
}
