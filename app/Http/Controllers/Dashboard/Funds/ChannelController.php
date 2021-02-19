<?php

namespace App\Http\Controllers\Dashboard\Funds;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard\Funds\Channel;

class ChannelController extends Controller
{
    public function index() {
        $channel = Channel::get();
        return view('dashboard.funds.channels', ['channels' => $channel]);
    }

    public function add(Request $request) {
        $request->validate([
            'channel_name' => 'required|string',
        ]);

        $channel = new Channel();
        $channel->ChannelName = $request->channel_name;
        $channel->IsActive = "123";
        $channel->IsDeleted = "123";
        $channel->save();
        return redirect()->route('channel');
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
