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
      <a href="{{ route('sector') }}" class="nav-link {{ Request::path() === 'dashboard/funds/sector-setup' ? 'active' : ''}}">
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
      <a href="{{ route('rating') }}" class="nav-link {{ Request::path() === 'dashboard/funds/rating-setup/'. $rating->RatingID ? 'active' : ''}}">
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
                            <h3 class="card-title">Rating Setup Form</h3>
                        </div>
                        <form action="{{ route('rating.update', ['id' => $rating->RatingID]) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="rating_code">Rating Code</label>
                                    <input type="text" class="form-control @error('rating_code') is-invalid @enderror"
                                        name="rating_code" id="rating_code" placeholder="Enter Rating Code"
                                        value="{{ $rating->RatingCode }}">
                                    @error('rating_code')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="rating_agency">Rating Agency</label>
                                    <input type="text" class="form-control @error('rating_agency') is-invalid @enderror"
                                        name="rating_agency" id="rating_agency" placeholder="Rating Agency Name"
                                        value="{{ $rating->RatingAgency }}">
                                    @error('rating_agency')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="rating_remarks">Rating Remarks</label>
                                    <textarea class="form-control" name="rating_remarks" id="rating_remarks" rows="3"
                                        placeholder="Rating Remarks">{{ $rating->RatingRemarks }}</textarea>
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
