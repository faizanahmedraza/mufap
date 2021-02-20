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

    public function edit($ChannelID) {
        $channel = Channel::find($ChannelID);
        return view('dashboard.funds.channels-edit',compact('channel'));
    }

    public function update(Request $request) {
        $request->validate([
            'channel_name' => 'required|string'
        ]);
        $channel = Channel::find($request->id);
        $channel->ChannelName = $request->channel_name;
        $channel->IsActive = "123";
        $channel->IsDeleted = "123";
        $channel->save();
        return redirect()->route('channel');
    }

    public function tempDelete($id) {
        //
    }

    public function PermanentDelete($id) {
        //
    }
}
