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
            'sector_name' => 'required'
        ]);

        $sector = new Sector();
        $sector->SectorName = $request->sector_name;
        $sector->IsActive = "123";
        $sector->IsDeleted = "123";
        $sector->save();
        
        return redirect()->route('sector');
    }
}
