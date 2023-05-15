<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\API\ResponseFormater;
use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\Regency;
use Illuminate\Http\Request;

class FoodApiController extends Controller
{
    public function food() {
        $foods = Food::with('province', 'regency')->orderBy('food_name', 'ASC')->get();
        return ResponseFormater::success($foods, 'List All Foods');
    }

    public function food_slug($food_slug) {
        $food = Food::where('food_slug', $food_slug)->with('province', 'regency')->first();
        return ResponseFormater::success($food, 'Succesfully get ' . $food->food_name . ' food data');
    }

    public function food_search(Request $request) {
        $search = $request->search;
        $foods = Food::where('food_name', 'LIKE', '%' . $search . '%')->with('province', 'regency')->get();
        return ResponseFormater::success($foods, 'Result for ' . $search);
    }

    public function regency() {
        $regencies = Food::select('regency_id')->groupBy('regency_id')->with('regency')->get();
        return ResponseFormater::success($regencies, 'List All Foods');
    }

    public function regency_id(Regency $regency) {
        $foods = Food::where('regency_id', $regency->id)->with('regency')->get();
        return ResponseFormater::success($foods, 'List Foods in ' . $regency->name .' Regency');
    }
}
