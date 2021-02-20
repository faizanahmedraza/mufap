@extends('layouts.dashboard')

@section('content-header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sector Setup</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Funds Management</li>
                        <li class="breadcrumb-item active">Sector Setup</li>
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
