<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelCountry;
class DeleteController extends Controller
{
    public function GetDelete($id){

        ModelCountry::where('id',$id)->delete();
        return view('admin.deleteCountry');
    }
}
