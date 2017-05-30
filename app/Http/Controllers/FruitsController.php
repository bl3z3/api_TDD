<?php

namespace App\Http\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;
use App\Fruit;

class FruitsController extends Controller
{
	use Helpers;
	
    public function index()
    {
    	$fruits = Fruit::all();

    	var_dump($fruits);

    	return $this->response->array(['data' => $fruits], 200);
    }
}
