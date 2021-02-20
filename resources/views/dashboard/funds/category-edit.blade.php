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
      <a href="{{ route('category') }}" class="nav-link {{ Request::path() === 'dashboard/funds/category-setup/'.$category->CategoryID ? 'active' : ''}}">
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
                            <h3 class="card-title">Category Setup Form -- Update</h3>
                        </div>
                            <form action="{{ route('category.update',['id'=>$category->CategoryID]) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Sector Name</label>
                                        <select class="form-control @error('sector_name') is-invalid @enderror" name="sector_name" id="sector_name">
                                            <option value="{{ $category->SectorName }}">option 1</option>
                                            <option value="option 2">option 2</option>
                                            <option value="option 3">option 3</option>
                                        </select>
                                        @error('sector_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="category_name">Category Name</label>
                                        <input type="text" class="form-control @error('category_name') is-invalid @enderror"
                                            name="category_name" id="category_name" placeholder="Enter Category Name" value="{{ $category->CategoryName }}">
                                        @error('category_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="fund_category_annualize">Fund Category Annualize?</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="1" name="fund_category_annualize"
                                                id="fund_category_annualize_yes" checked>
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="0" name="fund_category_annualize"
                                                id="fund_category_annualize_no">
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="fund_category_annualize">Performance Summary Sort Order</label>
                                        <input type="text"
                                            class="form-control @error('performance_summary_sort_order') is-invalid @enderror"
                                            name="performance_summary_sort_order" id="performance_summary_sort_order"
                                            placeholder="Enter Performace Summary Sort Order" value="{{ $category->PerformanceSummarySortOrder }}">
                                        @error('performance_summary_sort_order')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nav_range">Nav Range</label>
                                        <input type="text"
                                            class="form-control @error('nav_range') is-invalid @enderror"
                                            name="nav_range" id="nav_range"
                                            placeholder="Enter Nav Range">
                                        @error('nav_range')
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
