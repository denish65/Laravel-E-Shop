<?php

namespace App\Observers;
use App\Models\Product;
use App\Models\LogModel;
use Illuminate\Support\Facades\Auth;


class ProductObserver
{
    public function created(Product $Product)
    {
            //log model
            LogModel::create([
            "user_id" => Auth::id() ?? "",
            "action" => "created",
            "data" => $Product->toArray(),
        ]);
    }

    public function updated(Product $Product)
    {
            //log model
            LogModel::create([
            "user_id" => Auth::id()  ?? "" ,
            "action" => "updated",
            "data" => $Product->toArray(),
        ]);
    }
<<<<<<< HEAD

    
=======
>>>>>>> parent of 2e3b740 (product observer)



      public function deleted(Product $Product)
    {

            //log model
            LogModel::create([
            "user_id" => Auth::id()  ?? "",
            "action" => "deleted",
            "data" => $Product->toArray(),
        ]);
    }




}
