@extends('layouts.main')
@section('main-container')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    {{-- <div class="card-header">
                        Login Form
                    </div> --}}
                    <div class="card-body">
                        @if ($errors->any())
                            <div>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <h6 class="text-danger">{{ $error }} </h6>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action=" {{  route('loginCheck') }}" method="POST">
                            @csrf
                            <div class="form-group mt-2">
                                <label for="inputEmail">Email address</label>
                                <input type="email" class="form-control mt-2" name="email" required id="inputEmail" aria-describedby="emailHelp"
                                    placeholder="Enter email">
                            </div>
                            <div class="form-group mt-4">
                                <label for="inputPassword">Password</label>
                                <input type="password" class="form-control mt-2" name="password" required id="inputPassword" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
