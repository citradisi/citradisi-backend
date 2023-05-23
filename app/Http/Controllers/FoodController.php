<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FoodController extends Controller
{
    public function index() {
        $foods = Food::all();
        $disk = Storage::disk('gcs');
        return view('admin.food.index', compact('foods', 'disk'));
    }

    public function create() {
        return view('admin.food.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'food_name' => 'required',
            'food_category' => 'required',
            'food_material' => 'required',
            'food_make' => 'required',
            'food_image' => 'required|file|image',
        ]);

        $image = $request->file('food_image');

        $uploaded = Food::uploadImage($image);

        $validated['food_slug'] = Str::slug($request->food_name);
        $validated['food_image'] = $uploaded;

        Food::create($validated);

        return redirect()->route('food.index');
    }

    public function edit(Food $food) {
        $disk = Storage::disk('gcs');
        return view('admin.food.edit', compact('food', 'disk'));
    }

    public function update(Request $request, Food $food) {
        $disk = Storage::disk('gcs');
        $validated = $request->validate([
            'food_name' => 'required',
            'food_category' => 'required',
            'food_material' => 'required',
            'food_make' => 'required',
            'food_image' => 'file|image',
        ]);

        $image = $request->file('food_image');

        if ($image) {
            $disk->delete($food->food_image);
            $validated['food_image'] = Food::uploadImage($image);
        } else {
            $validated['food_image'] = $food->food_image;
        }

        $validated['food_slug'] = Str::slug($request->food_name);

        $food->update($validated);

        return redirect()->route('food.index');
    }

    public function destroy(Food $food) {
        Storage::disk('gcs')->delete($food->food_image);
        $food->delete();

        return redirect()->back();
    }
}
