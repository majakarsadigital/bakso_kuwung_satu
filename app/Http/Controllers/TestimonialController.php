<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestimonialController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'menu_id' => 'required|exists:menus,id',
            'customer_name' => 'nullable|string|max:100',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string|max:1000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Data tidak valid',
                'errors' => $validator->errors(),
            ], 422);
        }

        $testimonial = Testimonial::create([
            'menu_id' => $request->menu_id,
            'customer_name' => $request->customer_name ?? 'Anonymous',
            'rating' => $request->rating,
            'review' => $request->review,
            'is_featured' => false,
            'testimonial_date' => now(),
        ]);

        return response()->json([
            'message' => 'Terima kasih atas rating Anda',
            'data' => $testimonial,
        ], 201);
    }
}
