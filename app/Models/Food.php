<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public static function uploadImage($image) {
        $file_name = time() . uniqid() . '.' . $image->getClientOriginalExtension();

        $tes = $image->storeAs('image', $file_name, 'gcs');
        return 'image/'. $file_name;
    }
}
