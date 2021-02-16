@extends('layout')
@section('body')
<div class="col-lg-5">
    <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header">
            <h3 class="text-center font-weight-light my-4">Login</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('/login') }}">
                @csrf
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
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" name="remember"
                            id="remember" {{ old('remember') ? 'checked': '' }} />
                        <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                    </div>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                    <a class="small" href="{{ url('/password-reset') }}">Forgot Password?</a>
                    <input class="btn btn-primary" type="submit"
                        value="Login">
                </div>
            </form>
        </div>
        <div class="card-footer text-center">
            <div class="small"><a href="{{ url('/register') }}">Need an account? Sign up!</a></div>
        </div>
    </div>
</div>
@endsection