<?php

namespace App\Observers;
use App\Models\Product;
use App\Models\LogModel;


class ProductObserver
{
    public function created(Product $Product)
    {
        LogModel::create([
            "user_id" => Auth::id(),
            "Action" => "created",
            "data" => $Product->toArray(),
        ]);
    }

    public function updated(Product $Product)
    {
           LogModel::create([
            "user_id" => Auth::id(),
            "Action" => "created",
            "data" => $Product->toArray(),
        ]);
    }

      public function deleted(Product $Product)
    {
           LogModel::create([
            "user_id" => Auth::id(),
            "Action" => "deleted",
            "data" => $Product->toArray(),
        ]);
    }




}
