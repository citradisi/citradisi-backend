<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bookmark;
use App\Models\ResponseFormat;
use Illuminate\Http\Request;

class BookmarkApiController extends Controller
{
    public function index() {
        $user_id = auth()->user()->id;
        $bookmarks = Bookmark::where('user_id', $user_id)->with('food')->get();

        return ResponseFormat::success($bookmarks, 'All Bookmark User');
    }

    public function store(Request $request) {
        $request->validate([
            'food_id' => 'required'
        ]);

        $user_id = auth()->user()->id;

        $bookmark = Bookmark::where('food_id', $request->food_id)->where('user_id', $user_id)->first();

        if ($bookmark) {
            return ResponseFormat::error('Data sudah berada di database bookmark', 'Bookmark Gagal');
        }

        $result = Bookmark::create([
            'user_id' => $user_id,
            'food_id' => $request->food_id,
            'bookmark_status' => true,
        ]);
        return ResponseFormat::success($result, 'Bookmark Success', $request->bearerToken());
    }

    public function destroy(Bookmark $bookmark) {
        $result = $bookmark->delete();

        return ResponseFormat::success($result, 'Bookmark Deleted');
    }
}
