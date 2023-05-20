<?php

namespace App\Http\Controllers;

use App\Models\Love;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LoveController extends Controller
{
    public function index() {
        $disk = Storage::disk('gcs');
        $loves = Love::with('food', 'user')->get();
        return view('admin.love.index', compact('loves', 'disk'));
    }

    public function destroy(Love $love) {
        $love->delete();

        return redirect()->back();
    }
}
