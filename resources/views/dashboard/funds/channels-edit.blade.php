@extends('layouts.dashboard')

@section('sidenav')
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('investor') }}"
                class="nav-link {{ Request::path() === 'dashboard/funds/investor-setup' ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>INVESTOR SETUP</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('channel') }}"
                class="nav-link {{ Request::path() === 'dashboard/funds/channels-setup/' . $channel->ChannelID ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>CHANNELS SETUP</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('sector') }}"
                class="nav-link {{ Request::path() === 'dashboard/funds/sector-setup' ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>SECTOR SETUP</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('category') }}"
                class="nav-link {{ Request::path() === 'dashboard/funds/category-setup' ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>CATEGORY SETUP</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('region') }}"
                class="nav-link {{ Request::path() === 'dashboard/funds/region-setup' ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>REGION SETUP</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('rating') }}"
                class="nav-link {{ Request::path() === 'dashboard/funds/rating-setup' ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>RATING SETUP</p>
            </a>
        </li>
    </ul>
@endsection

@section('content-header')
    @parent
@endsection

@section('content-body')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="w-75 mx-auto">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Channel Setup Form -- Update</h3>
                        </div>
                        <form action="{{ route('channel.update', ['id' => $channel->ChannelID]) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="channel_name">Channel Name</label>
                                    <input type="text" class="form-control @error('channel_name') is-invalid @enderror"
                                        name="channel_name" id="channel_name" placeholder="Enter Channel Name"
                                        value="{{ $channel->ChannelName }}">
                                    @error('channel_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
