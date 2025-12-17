<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Api\ApiTestModel;

class ApiTestController extends Controller
{
    
    public function index()
    {

        $headers = [
            "composer" => ["laravel require packages"]
        ];

        $data =[ "require" => [

        "php: ^8.1",
        "barryvdh/laravel-dompdf: ^2.0",
        "guzzlehttp/guzzle: ^7.2",
        "laravel/framework: ^10.0",
        "laravel/sanctum: ^3.2",
        "laravel/socialite: ^5.6",
        "laravel/tinker: ^2.8",
        "laravel/ui: ^4.2",
        "pusher/pusher-php-server: ^7.2",
        "spatie/laravel-newsletter: ^5.1",
        "srmklive/paypal: ^3.0",
        "unisharp/laravel-filemanager: ^2.6"
        ]    
    ];
        return response()->json($data, 200, $headers);
    }


    public function store(Request $request)
    {

        
      $request->validate([
        "name"  =>  "required",	
        "email"	=>  "required",
        "age"   =>  "required",
        "phone" =>  "required",	
        "DOB"   =>  "required"
      ]);

        ApiTestModel::create([
            "name"  => $request->name,
            "email" => $request->email,
            "age"	=> $request->age,
            "phone" => $request->phone,	
            "DOB"   => $request->DOB
        ]);

        $headers =[];
        $data =["data stored success fully"];

        return response()->json($data, 200, $headers);

    }


     public function getData(Request $request ,$id)
    {

       $data = ApiTestModel::where("id",$id)->first();
       

        return response()->json($data, 200);

    }


      public function update(Request $request ,$id)
    {

         $request->validate([
        "name"  =>  "required",	
        "email"	=>  "required",
        "age"   =>  "required",
        "phone" =>  "required",	
        "DOB"   =>  "required"
      ]);


       $update = ApiTestModel::where("id",$id)->first();

       $update->name  =  $request->name;
       $update->email =  $request->email;
       $update->age   =  $request->age;
       $update->phone =  $request->phone;
       $update->DOB   =  $request->DOB;
       $update->save();
       
       $data=['data update successfully'];

        return response()->json($data, 200);

    }




     public function delete(Request $request ,$id)
    {

       ApiTestModel::where("id",$id)->delete();
        $data = ['data deleted successfully'];

        return response()->json($data, 200);

    }



}
