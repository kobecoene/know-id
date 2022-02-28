@extends('templates.main')

@section('content')

    <div class="loginContainer">
        <div class="row">
            <div class="col-md-5 illustration">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" viewBox="0 0 471.681 513.813">
                    <defs>
                        <clipPath id="clip-path">
                            <rect id="Rectangle_62" data-name="Rectangle 62" width="418.269" height="303.163" fill="#7d56a6"/>
                        </clipPath>
                    </defs>
                    <g id="Component_8_23" data-name="Component 8 – 23" transform="translate(262.547) rotate(60)" opacity="0.3">
                        <g id="Group_48" data-name="Group 48" clip-path="url(#clip-path)">
                            <path id="Path_9" data-name="Path 9" d="M313.571,310.234H243.622a10.957,10.957,0,0,1-10.514-7.838L149.659,21.132A10.952,10.952,0,0,1,160.173,7.073H556.495a10.953,10.953,0,0,1,10.519,14.059L483.565,302.4a10.965,10.965,0,0,1-10.514,7.838H313.571Z" transform="translate(-149.199 -7.073)" fill="#7d56a6"/>
                        </g>
                    </g>
                </svg>

            </div>
            <div class="col-md-6">
                <h3>Hallo!</h3>
                <p>Vul jouw email en wachtwoord in om terug in te loggen.</p>
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">E-mailadres</label>
                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                               aria-describedby="email" value="{{ old('email') }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Wachtwoord</label>
                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"
                               id="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                        @enderror
                    </div>

                    <p>Nog geen account? <a href="{{ route('register') }}">Klik hier</a></p>
                    <button type="submit" class="btn btn-primary mt-3">Inloggen</button>
                </form>
            </div>
        </div>
    </div>
@endsection
