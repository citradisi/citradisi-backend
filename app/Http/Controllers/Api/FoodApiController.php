<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\Regency;
use App\Models\ResponseFormat;
use App\Models\ScanFood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class FoodApiController extends Controller
{
    public function index() {
        $foods = Food::orderBy('food_name', 'ASC')->get();
        return ResponseFormat::success($foods, 'List All Foods');
    }

    public function food_slug($food_slug) {
        $food = Food::findWithSlug($food_slug);
        return ResponseFormat::success($food, 'Succesfully get ' . $food->food_name . ' food data');
    }

    public function food_special() {
        // $loves = Love::select('food_id', DB::raw("count('love_status') as love_total"))->groupBy('food_id')->with('food')->orderBy('love_total', 'DESC')->get();
        $scans = ScanFood::with('food')->select('food_id', DB::raw("count('food_id') as food_total"))->groupBy('food_id')->orderBy('food_total', 'DESC')->get();
        foreach($scans as $key => $scan) {
            $data[$key] = $scan->food;
        }
        return ResponseFormat::success($data, 'Successfully get All Special Food');
    }

    public function food_search(Request $request) {
        $search = $request->search;
        $foods = Food::where('food_name', 'LIKE', '%' . $search . '%')->get();
        return ResponseFormat::success($foods, 'Result for ' . $search);
    }

    public function food_scan(Request $request) {
        $request->validate([
            'scan_food_image' => 'required'
        ]);

        $image = $request->file('scan_food_image');
        $save_image = Food::uploadImage($image);

        $response = Http::post('https://ml-model-h4ch2i4mpa-et.a.run.app', [
            'scan_food_image' => $save_image,
        ]);

        $user_id = auth()->user()->id;
        $food = Food::findWithSlug($response->json());

        ScanFood::create([
            'user_id' => $user_id,
            'food_id' => $food->id,
            'scan_food_image' => $save_image
        ]);

        return ResponseFormat::success($food, 'Result for Scan Image', $request->bearerToken());
    }
}
