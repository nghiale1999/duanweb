<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelCountry;
class AddController extends Controller
{
   public function GetAdd(){
       return view('admin.addCountry');
   }

   public function PostAdd(Request $request){

        $data = new ModelCountry;
        $data->name = $request->name;
        $data->save();
        if($data->save()){
            return redirect()->back()->with('success','them country thang cong');
        }else{
            return redirect()->back()->withErrors('them country that bai');
        }
   }
}
