@extends('templates.main')

@section('content')
    <div class="landingContainer">
        <section class="intro d-flex justify-content-between align-items-center">
            <div class="row">
                <div class="col-md-6">
                    <div class="illustration">
                        <h2>Image</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image">
                        <img src="{{ asset('images/logo_knowid.png') }}" class="img-fluid" alt="Logo">
                    </div>
                    <h3>De ideale matchmaker tussen werkgevers en werkzoekers</h3>
                    @auth
                        <a href="{{ route('dashboard.home') }}" class="btn btn-outline-primary  w-50">Dashboard</a>
                    @else
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('login') }}" class="btn btn-primary w-100">Login</a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('info') }}" class="btn btn-outline-primary w-100">Register</a>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>
        </section>
    </div>
@endsection
