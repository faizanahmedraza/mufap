<?php

namespace App\Http\Controllers\Dashboard\Funds;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard\Funds\Rating;

class RatingController extends Controller
{
    public function index() {
        $rating = Rating::get();
        return view('dashboard.funds.rating', ['ratings' => $rating]);
    }

    public function add(Request $request) {
        $request->validate([
            'rating_code' => 'required|string',
            'rating_agency' => 'required|string',
        ]);

        $rating = new Rating();
        $rating->RatingCode = $request->rating_code;
        $rating->RatingAgency = $request->rating_agency;
        $rating->RatingRemarks = $request->rating_remarks;
        $rating->IsActive = "1";
        $rating->IsDeleted = "0";
        $rating->save();
        return redirect()->route('rating');
    }

    public function edit($RatingID) {
        $rating = Rating::find($RatingID);
        return view('dashboard.funds.rating-edit',compact('rating'));
    }

    public function update(Request $request) {
        $request->validate([
            'rating_code' => 'required|string',
            'rating_agency' => 'required|string',
        ]);
        $rating = Rating::find($request->id);
        $rating->RatingCode = $request->rating_code;
        $rating->RatingAgency = $request->rating_agency;
        $rating->RatingRemarks = $request->rating_remarks;
        $rating->IsActive = "123";
        $rating->IsDeleted = "123";
        $rating->save();
        return redirect()->route('rating');
    }

    public function tempDelete($RatingID) {
        //
    }

    public function PermanentDelete($RatingID) {
        //
    }
}
