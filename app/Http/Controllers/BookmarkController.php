<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookmarkController extends Controller
{
    public function index() {
        $disk = Storage::disk('gcs');
        $bookmarks = Bookmark::with('food', 'user')->get();
        return view('admin.bookmark.index', compact('bookmarks', 'disk'));
    }

    public function destroy(Bookmark $bookmark) {
        $bookmark->delete();

        return redirect()->back();
    }
}
