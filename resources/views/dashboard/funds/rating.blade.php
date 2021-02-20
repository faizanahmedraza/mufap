@extends('layouts.dashboard')

@section('sidenav')
    @parent
@endsection

@section('content-header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Rating Setup</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Funds Management</li>
                        <li class="breadcrumb-item active">Rating Setup</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection

@section('content-body')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Rating Setup Form</h3>
                        </div>
                        <form action="{{ route('rating.add') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="rating_code">Rating Code</label>
                                    <input type="text" class="form-control @error('rating_code') is-invalid @enderror"
                                        name="rating_code" id="rating_code" placeholder="Enter Rating Code">
                                    @error('rating_code')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="rating_agency">Rating Agency</label>
                                    <input type="text" class="form-control @error('rating_agency') is-invalid @enderror"
                                        name="rating_agency" id="rating_agency" placeholder="Rating Agency Name">
                                    @error('rating_agency')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="rating_remarks">Rating Remarks</label>
                                    <textarea class="form-control" name="rating_remarks" id="rating_remarks" rows="3"
                                        placeholder="Rating Remarks"></textarea>
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
                            <h3 class="card-title">Ratings Table</h3>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#ID</th>
                                        <th>Rating Code</th>
                                        <th>Rating Agency</th>
                                        <th>Rating Remarks</th>
                                        <th>Active</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ratings as $rating)
                                        <tr>
                                            <td>{{ $rating->RatingID }}</td>
                                            <td>{{ $rating->RatingCode }}</td>
                                            <td>{{ $rating->RatingAgency }}</td>
                                            <td>{{ $rating->RatingRemarks ?? '' }}</td>
                                            <td>{{ $rating->IsActive }}</td>
                                            <td class="project-actions">
                                                <a class="btn btn-info btn-sm"
                                                    href="{{ route('rating.edit', ['id' => $rating->RatingID]) }}">
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
