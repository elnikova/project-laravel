<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::orderByDesc('created_at')->paginate(5);    
        return view('main.reviews', compact('reviews'));
    }

    public function saveReview(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:55',            
            'review'      => 'required|min:3|max:1000',
        ]);
        $review = new Review();
        $review->name = $request->name;
        $review->review = $request->review;
        
        $review->save();

        //  dd( $request->all() );
        return back()->with('success', 'Спасибо за отзыв!');
    }
}
