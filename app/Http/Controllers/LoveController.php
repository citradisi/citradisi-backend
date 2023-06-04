<?php

namespace App\Http\Controllers;

use App\Models\Love;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LoveController extends Controller
{
    public function index() {
        $loves = Love::select('food_id', DB::raw("count('love_status') as love_total"))->groupBy('food_id')->with('food')->orderBy('love_total', 'DESC')->get();
        return view('admin.love.index', compact('loves'));
    }

    public function destroy(Love $love) {
        $love->delete();

        return redirect()->back();
    }
}
