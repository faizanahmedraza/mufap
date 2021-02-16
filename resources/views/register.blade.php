@extends('layout')
@section('body')
<div class="col-lg-7">
    <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header">
            <h3 class="text-center font-weight-light my-4">Create Account</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('/register') }}">
                @csrf
                <div class="form-group">
                    <label class="small mb-1" for="name">Name</label>
                    <input type="text" class="form-control py-4 @error('name') is-invalid @enderror"
                        name="name" id="name" value="{{ old('name') }}" placeholder="Name"
                        required>
                    @error('name')
                    <div class="invalid-feedback text-danger">
                        {{ $errors->first('name') }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                    <input type="text" class="form-control py-4 @error('email') is-invalid @enderror" name="email"
                        id="email" value="{{ old('email') }}" placeholder="Enter Email" required>
                    @error('email')
                    <div class="invalid-feedback text-danger">
                        {{ $errors->first('email') }}
                    </div>
                    @enderror
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="small mb-1" for="inputPassword">Password</label>
                            <input type="password" class="form-control py-4 @error('password') is-invalid @enderror"
                                name="password" id="password" value="{{ old('password') }}" placeholder="Enter Password"
                                required>
                            @error('password')
                            <div class="invalid-feedback text-danger">
                                {{ $errors->first('password') }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                            <input type="password"
                                class="form-control py-4 @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation" id="password_confirmation"
                                value="{{ old('password_confirmation') }}" placeholder="Enter Password" required>
                            @error('password_confirmation')
                            <div class="invalid-feedback text-danger">
                                {{ $errors->first('password_confirmation') }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group mt-4 mb-0"><input class="btn btn-primary btn-block" type="submit"
                        value="Create Account"></div>
            </form>
        </div>
        <div class="card-footer text-center">
            <div class="small"><a href="{{ url('/login') }}">Have an account? Go to login</a></div>
        </div>
    </div>
</div>
@endsection