<?php

namespace App\Http\Controllers;

use App\Models\Regency;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function fetch_regency(Request $request) {
        $request->validate([
            'province_id' => 'required',
        ]);

        $data['regency'] = Regency::where('province_id', $request->province_id)->get(['id', 'name']);

        return response()->json($data);
    }
}
