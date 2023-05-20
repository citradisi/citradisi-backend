<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\API\ResponseFormater;
use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\Regency;
use App\Models\ScanFood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodApiController extends Controller
{
    public function index() {
        $foods = Food::orderBy('food_name', 'ASC')->get();
        return ResponseFormater::success($foods, 'List All Foods');
    }

    public function food_slug($food_slug) {
        $food = Food::where('food_slug', $food_slug)->first();
        return ResponseFormater::success($food, 'Succesfully get ' . $food->food_name . ' food data');
    }

    public function food_search(Request $request) {
        $search = $request->search;
        $foods = Food::where('food_name', 'LIKE', '%' . $search . '%')->get();
        return ResponseFormater::success($foods, 'Result for ' . $search);
    }

    public function food_scan(Request $request) {
        $request->validate([
            'scan_food_image' => 'required|image'
        ]);

        $image = $request->file('scan_food_image');
        $save_image = Food::uploadImage($image);
        $user_id = auth()->user()->id;

        $result = ScanFood::create([
            'user_id' => $user_id,
            'scan_food_image' => $save_image
        ]);
        return ResponseFormater::success($result, 'Result for Scan Image', $request->bearerToken());
    }
}
