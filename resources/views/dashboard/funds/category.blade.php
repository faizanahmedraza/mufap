@extends('layouts.dashboard')

@section('sidenav')
    @parent
@endsection

@section('content-header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Category Setup</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Funds Management</li>
                        <li class="breadcrumb-item active">Category Setup</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@show

@section('content-body')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Category Setup Form</h3>
                        </div>
                        <form action="{{ route('category.add') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Sector Name</label>
                                    <select class="form-control @error('sector_name') is-invalid @enderror"
                                        name="sector_name" id="sector_name">
                                        <option value="">Choose Sector</option>
                                        @foreach ($sectors as $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                    @error('sector_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="category_name">Category Name</label>
                                    <input type="text" class="form-control @error('category_name') is-invalid @enderror"
                                        name="category_name" id="category_name" placeholder="Enter Category Name">
                                    @error('category_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="fund_category_annualize">Fund Category Annualize?</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="1"
                                            name="fund_category_annualize" id="fund_category_annualize_yes" checked>
                                        <label class="form-check-label">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="0"
                                            name="fund_category_annualize" id="fund_category_annualize_no">
                                        <label class="form-check-label">No</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="performance_summary_sort_order">Performance Summary Sort Order</label>
                                    <input type="text"
                                        class="form-control @error('performance_summary_sort_order') is-invalid @enderror"
                                        name="performance_summary_sort_order" id="performance_summary_sort_order"
                                        placeholder="Enter Performace Summary Sort Order">
                                    @error('performance_summary_sort_order')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nav_range">Nav Range</label>
                                    <input type="text" class="form-control @error('nav_range') is-invalid @enderror"
                                        name="nav_range" id="nav_range" placeholder="Enter Nav Range">
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

                <div class="col-md-8">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Categories Table</h3>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#ID</th>
                                        <th>Sector Name</th>
                                        <th>Category Name</th>
                                        <th>Fund Category Annualize?</th>
                                        <th>Performance Summary Sort Order</th>
                                        <th>Nav Range</th>
                                        <th>Active</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->CategoryID }}</td>
                                            <td>{{ $category->SectorName }}</td>
                                            <td>{{ $category->CategoryName }}</td>
                                            <td>{{ $category->FundCategoryAnnualize }}</td>
                                            <td>{{ $category->PerformanceSummarySortOrder }}</td>
                                            <td>{{ $category->NavRange }}</td>
                                            <td>{{ $category->IsActive }}</td>
                                            <td class="project-actions">
                                                <a class="btn btn-info btn-sm"
                                                    href="{{ route('category.edit', ['id' => $category->CategoryID]) }}">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                                <a class="btn btn-danger btn-sm" href="#">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
