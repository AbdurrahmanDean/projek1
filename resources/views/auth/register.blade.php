@extends('layouts.layoutregister')
@section('layouts','register')
@section('konten')
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12 mb-12 mb-sm-0">
                                    <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="Name">
                                    @error('name')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="Email Address"  @error('email') is-invalid @enderror name="email" value="{{ old('email') }}">
                                    @error('email')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Password" @error('password') is-invalid @enderror name="password" required autocomplete="new-password">
                                    @error('password')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" name="password_confirmation" class="form-control form-control-user"
                                        id="exampleRepeatPassword" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href={{url("login")}}>Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection