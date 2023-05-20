<?php

namespace App\Http\Controllers;

use App\Models\ScanFood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ScanFoodController extends Controller
{
    public function index() {
        $disk = Storage::disk('gcs');
        $scan_foods = ScanFood::with('food', 'user')->get();
        return view('admin.scanfood.index', compact('scan_foods', 'disk'));
    }

    public function destroy(ScanFood $scan_food) {
        Storage::disk('gcs')->delete($scan_food->scan_food_image);
        $scan_food->delete();

        return redirect()->back();
    }
}
