<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiTestController extends Controller
{
    
    public function index()
    {

        $data =[ "composer"=>["laravel require packages"],"require" => [

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


}
