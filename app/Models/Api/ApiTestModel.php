<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiTestModel extends Model
{
    use HasFactory;


    protected $fillable =
    [
        "name",	"email"	,"age"	,"phone",	"DOB"
    ];


    protected $table = "api_test";
}
