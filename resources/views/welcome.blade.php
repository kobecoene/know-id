@extends('templates.main')

@section('content')
    <div class="landingContainer">
        <section class="intro d-flex justify-content-between align-items-center">
            <div class="row">
                <div class="col-md-6">
                    <div class="illustration">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1049.594 1049.594">
                            <defs>
                                <clipPath id="clip-path">
                                    <rect id="Rectangle_62" data-name="Rectangle 62" width="860.001" height="624.35" fill="#7d56a6"/>
                                </clipPath>
                            </defs>
                            <g id="Component_8_19" data-name="Component 8 – 19" transform="translate(0 608.112) rotate(-45)" opacity="0.3">
                                <g id="Group_48" data-name="Group 48" clip-path="url(#clip-path)">
                                    <path id="Path_9" data-name="Path 9" d="M487.159,631.418H343.339a22.533,22.533,0,0,1-21.618-16.143L150.143,36.028A22.549,22.549,0,0,1,171.761,7.073H986.634a22.55,22.55,0,0,1,21.627,28.955L836.683,615.275a22.55,22.55,0,0,1-21.618,16.143H487.159Z" transform="translate(-149.197 -7.072)" fill="#7d56a6"/>
                                </g>
                            </g>
                        </svg>

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
