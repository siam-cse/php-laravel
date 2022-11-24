@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card bg-dark text-white">
                        <div class="card-header">
                            <h2 class="text-center fw-bold text-info">Registration</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{route('register')}}" method="post">
                                @csrf
                                <div class="row mt-2">
                                    <label for="" class="col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="name" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" name="password_confirmation" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-3">Confirm Password</label>
                                    <div class="col-md-9">
                                        <input type="password" name="password_confirmation" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">

                                        <input type="submit" class="btn btn-outline-success text-white" value="Registration">

                                        <a href="{{route('login')}}" class="text-muted ms-3">already have an account?</a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
