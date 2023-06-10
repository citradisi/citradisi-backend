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

    public static function findWithSlug($food_slug) {
        $data =  Food::withCount('loves')->where('food_slug', $food_slug)->first();
        $data['user_love_status'] = Love::where('food_id', $data->id)->where('user_id', auth()->user()->id)->first()->love_status;
        return $data;
    }

    public function loves() {
        // return $this->
        return $this->hasMany(Love::class, 'food_id', 'id');
    }
}
