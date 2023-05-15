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

    public function province() {
        return $this->belongsTo(Province::class, 'province_id', 'id');
    }

    public function regency() {
        return $this->belongsTo(Regency::class, 'regency_id', 'id');
    }

    public function regencies() {
        return $this->hasMany(Regency::class, 'province_id', 'province_id');
    }
}
