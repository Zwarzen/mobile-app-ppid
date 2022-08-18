@extends('products.layout')

@section('content')

<style>
    @media screen and (max-width: 600px) {
        .row .justify-content-center {
            margin-left: -100px;
        }
    }
</style>

<main class="login-form" style="margin-top:15%; margin-bottom: 15%;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="">
                <div class="card">
                    @if ($message = Session::get('errors'))

                    <div class="alert alert-danger">

                        <p>{{ $message }}</p>

                    </div>

                    @endif
                    
                    <h3 class="card-header text-center">Login Admin</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            <center>
                            @csrf
                            <div class="form-group " style="max-width: 250px;">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
                                @if ($errors->has('username'))
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
                            
                            <div class="form-group" style="max-width: 250px;">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="d-grid mx-auto" style="max-width: 250px;">
                                <button type="submit" class="btn btn-dark btn-block">Masuk</button>
                            </div>
<<<<<<< HEAD
=======

                            
>>>>>>> abeb06fedaf4ef4b409a3064bfe5c2907d867d78
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection