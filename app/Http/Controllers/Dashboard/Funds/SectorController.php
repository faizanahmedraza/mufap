<?php

namespace App\Http\Controllers\Dashboard\Funds;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard\Funds\Sector;

class SectorController extends Controller
{
    public function index() {
        $sector = Sector::get();
        return view('dashboard.funds.sector', ['sectors' => $sector]);
    }

    public function add(Request $request) {
        $request->validate([
            'sector_name' => 'required|string',
        ]);

        $sector = new Sector();
        $sector->SectorName = $request->sector_name;
        $sector->IsActive = "123";
        $sector->IsDeleted = "123";
        $sector->save();
        
        return redirect()->route('sector');
    }

    public function edit($SectorID) {
        $sector = Sector::find($SectorID);
        return view('dashboard.funds.sector-edit',compact('sector'));
    }

    public function update(Request $request) {
        $request->validate([
            'sector_name' => 'required|string'
        ]);
        $sector = Sector::find($request->id);
        $sector->SectorName = $request->sector_name;
        $sector->IsActive = "123";
        $sector->IsDeleted = "123";
        $sector->save();
        return redirect()->route('sector');
    }
    public function tempDelete($id) {
        //
    }

    public function PermanentDelete($id) {
        //
    }
}
