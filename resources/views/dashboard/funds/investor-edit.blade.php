@extends('layouts.dashboard')

@section('content-header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Investor Setup</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Funds Management</li>
                        <li class="breadcrumb-item active">Investor Setup</li>
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
                            <h3 class="card-title">Investor Setup Form</h3>
                        </div>
                        <form action="{{ route('investor.update',['id'=>$investor->InvestorID]) }}" method="POST">
                        @method('PUT')
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="investor_name">Investor Name</label>
                                    <input type="text" class="form-control @error('investor_name') is-invalid @enderror"
                                        name="investor_name" id="investor_name" placeholder="Enter Investor Name" value="{{$investor->InvestorName }}">
                                    @error('investor_name')
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
