<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Love;
use App\Models\ResponseFormat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoveApiController extends Controller
{
    public function index() {
        $loves = Love::select('food_id', DB::raw("count('love_status') as love_total"))->groupBy('food_id')->with('food')->orderBy('love_total', 'DESC')->get();
        // dd($loves);

        return ResponseFormat::success($loves, 'All Loves User');
    }

    public function store(Request $request) {
        $request->validate([
            'food_id' => 'required'
        ]);

        $user_id = auth()->user()->id;

        $love = Love::where('food_id', $request->food_id)->where('user_id', $user_id)->first();

        if ($love) {
            return ResponseFormat::error('Data sudah berada di database love', 'Love Gagal');
        }

        $result = Love::create([
            'user_id' => $user_id,
            'food_id' => $request->food_id,
            'love_status' => true,
        ]);
        return ResponseFormat::success($result, 'Love Success', $request->bearerToken());
    }

    public function destroy(Love $love) {
        $result = $love->delete();

        return ResponseFormat::success($result, 'Love Deleted');
    }
}
