<?php

namespace App\Observers;
use App\Models\Product;
use App\Models\LogModel;
use Illuminate\Support\Facades\Auth;


class ProductObserver
{
    public function created(Product $Product)
    {
        LogModel::create([
            "user_id" => Auth::id() ?? "",
            "action" => "created",
            "data" => $Product->toArray(),
        ]);
    }

    public function updated(Product $Product)
    {
           LogModel::create([
            "user_id" => Auth::id()  ?? "" ,
            "action" => "updated",
            "data" => $Product->toArray(),
        ]);
    }

    

      public function deleted(Product $Product)
    {
           LogModel::create([
            "user_id" => Auth::id()  ?? "",
            "action" => "deleted",
            "data" => $Product->toArray(),
        ]);
    }




}
