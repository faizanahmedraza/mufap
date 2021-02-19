<?php

namespace App\Http\Controllers\Dashboard\Funds;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard\Funds\Investor;

class InvestorController extends Controller
{
    public function index() {
        $investor = Investor::get();
        return view('dashboard.funds.investor', ['investors' => $investor]);
    }

    public function add(Request $request) {
        $request->validate([
            'investor_name' => 'required|string',
        ]);

        $investor = new Investor();
        $investor->InvestorName = $request->investor_name;
        $investor->IsActive = "123";
        $investor->IsDeleted = "123";
        $investor->save();

        return redirect()->route('investor');
    }

    public function edit($id) {
        return $id;
    }

    public function update(Request $request) {
        //
    }

    public function tempDelete($id) {
        //
    }

    public function PermanentDelete($id) {
        //
    }
}
