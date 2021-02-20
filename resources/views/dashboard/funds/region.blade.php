@extends('layouts.dashboard')

@section('sidenav')
    @parent
@endsection

@section('content-header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Region Setup</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Funds Management</li>
                    <li class="breadcrumb-item active">Region Setup</li>
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
                        <h3 class="card-title">Region Setup Form</h3>
                    </div>
                    <form action="{{ route('region.add') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="region_name">Region Name</label>
                                <input type="text" class="form-control @error('region_name') is-invalid @enderror" name="region_name" id="region_name"
                                    placeholder="Enter Region Name">
                                    @error('region_name')
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
                        <h3 class="card-title">Regions Table</h3>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#ID</th>
                                    <th>Region Name</th>
                                    <th>Active</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($regions as $region)
                                <tr>
                                    <td>{{ $region->RegionID }}</td>
                                    <td>{{ $region->RegionName }}</td>
                                    <td>{{ $region->IsActive }}</td>
                                    <td class="project-actions">
                                        <a class="btn btn-info btn-sm" href="{{ route('region.edit',['id'=>$region->RegionID]) }}">
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