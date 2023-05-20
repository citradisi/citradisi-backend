<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\ResponseFormater;
use App\Models\Regency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GeneralController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function coba(Request $request) {
        $request->validate([
            'sl' => 'required',
            'sw' => 'required',
            'pl' => 'required',
            'pw' => 'required',
        ]);

        $response = Http::post('https://deploy-model-xgzpxfi4wq-et.a.run.app', [
            'sl' => $request->sl,
            'sw' => $request->sw,
            'pl' => $request->pl,
            'pw' => $request->pw,
        ]);

        if ($response->status() != 200) {
            return ResponseFormater::error($response->json(), 'Error request', $response->status());
        }
        return ResponseFormater::success($response->json(), 'Coba API');
    }
}
