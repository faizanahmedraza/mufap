<?php

namespace App\Http\Controllers\Dashboard\Funds;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard\Funds\Region;

class RegionController extends Controller
{
    public function index() {
        $region = Region::get();
        return view('dashboard.funds.region', ['regions' => $region]);
    }

    public function add(Request $request) {
        $request->validate([
            'region_name' => 'required|string',
        ]);

        $region = new Region();
        $region->RegionName = $request->region_name;
        $region->IsActive = "1";
        $region->IsDeleted = "0";
        $region->save();
        return redirect()->route('region');
    }

    public function edit($RegionID) {
        $region = Region::find($RegionID);
        return view('dashboard.funds.region-edit',compact('region'));
    }

    public function update(Request $request) {
        $request->validate([
            'region_name' => 'required|string'
        ]);
        $region = Region::find($request->id);
        $region->RegionName = $request->region_name;
        $region->IsActive = "123";
        $region->IsDeleted = "123";
        $region->save();
        return redirect()->route('region');
    }

    public function tempDelete($id) {
        //
    }

    public function PermanentDelete($id) {
        //
    }
}
