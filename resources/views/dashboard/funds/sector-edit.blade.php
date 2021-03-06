@extends('layouts.dashboard')

@section('sidenav')
<ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ route('investor') }}" class="nav-link {{ Request::path() === 'dashboard/funds/investor-setup' ? 'active' : ''}}">
        <i class="far fa-circle nav-icon"></i>
        <p>INVESTOR SETUP</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('channel') }}" class="nav-link {{ Request::path() === 'dashboard/funds/channels-setup' ? 'active' : ''}}">
        <i class="far fa-circle nav-icon"></i>
        <p>CHANNELS SETUP</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('sector') }}" class="nav-link {{ Request::path() === 'dashboard/funds/sector-setup/'.$sector->SectorID ? 'active' : ''}}">
        <i class="far fa-circle nav-icon"></i>
        <p>SECTOR SETUP</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('category') }}" class="nav-link {{ Request::path() === 'dashboard/funds/category-setup' ? 'active' : ''}}">
        <i class="far fa-circle nav-icon"></i>
        <p>CATEGORY SETUP</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('region') }}" class="nav-link {{ Request::path() === 'dashboard/funds/region-setup' ? 'active' : ''}}">
        <i class="far fa-circle nav-icon"></i>
        <p>REGION SETUP</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('rating') }}" class="nav-link {{ Request::path() === 'dashboard/funds/rating-setup' ? 'active' : ''}}">
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
                            <h3 class="card-title">Sector Setup Form</h3>
                        </div>
                        <form action="{{ route('sector.update',['id'=>$sector->SectorID]) }}" method="POST">
                        @method('PUT')
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="sector_name">Sector Name</label>
                                    <input type="text" class="form-control @error('sector_name') is-invalid @enderror"
                                        name="sector_name" id="sector_name" placeholder="Enter Sector Name" value="{{$sector->SectorName }}">
                                    @error('sector_name')
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
