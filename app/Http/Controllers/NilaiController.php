<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Nilai;

class NilaiController extends Controller
{
    public function indexK()
    {
        //
        $data = \App\Nilai::all();

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

  
    public function storeK(Request $request)
    {
        //
        
        if (Nilai::create($request->all())) {
            return response()->json(['status' => 'success','code'=>'201','data' => $request->all()]);   
            // return response()->json(['status' => 'success' ,'code' => '201', 'message' => 'Data has been created'],201);
          } else {
            return response()->json(['status' => 'error','code' => '500', 'message' => 'Internal Server Error' ],500);
          }
    
     
    }

  
    public function show($uuid)
    {
        $data = Nilai::where('id',$id)->get();
        
        if (is_null($product)) {
            return $this->sendError('Nilai not found.');
        }


        return $this->sendResponse($product->toArray(), 'Product retrieved successfully.');
    }

    
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        nilai::id($id)->update();
    }

    public function destroy($id)
    {
        //
       nilai::id($id )->delete();
    }
}
