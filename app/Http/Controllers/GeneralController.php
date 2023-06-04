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
}
