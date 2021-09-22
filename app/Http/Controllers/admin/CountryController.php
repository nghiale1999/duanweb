<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelCountry;
class CountryController extends Controller
{
    public function GetCountry(){

        $data = ModelCountry::all();
        return view('admin.Country',compact('data'));
    }
}
