@extends('templates.main')

@section('content')
    <div class="registerContainer">
        <div class="row">
            <div class="col-md-5 illustration">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" viewBox="0 0 471.681 513.813">
                    <defs>
                        <clipPath id="clip-path">
                            <rect id="Rectangle_62" data-name="Rectangle 62" width="418.269" height="303.163" fill="#e81f68"/>
                        </clipPath>
                    </defs>
                    <g id="Component_8_25" data-name="Component 8 – 25" transform="translate(262.547) rotate(60)" opacity="0.3">
                        <g id="Group_48" data-name="Group 48" clip-path="url(#clip-path)">
                            <path id="Path_9" data-name="Path 9" d="M313.571,310.234H243.622a10.957,10.957,0,0,1-10.514-7.838L149.659,21.132A10.952,10.952,0,0,1,160.173,7.073H556.495a10.953,10.953,0,0,1,10.519,14.059L483.565,302.4a10.965,10.965,0,0,1-10.514,7.838H313.571Z" transform="translate(-149.199 -7.073)" fill="#e81f68"/>
                        </g>
                    </g>
                </svg>

            </div>
            <div class="col-md-7">
                <h3>Creëer uw account</h3>
                <form method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">Voornaam</label>
                                <input name="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname"
                                       aria-describedby="firstname" value="{{ old('firstname') }}">
                                @error('firstname')
                                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Familienaam</label>
                                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                       aria-describedby="name" value="{{ old('name') }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="postcode">Postcode</label>
                                <input name="postcode" type="text" class="form-control @error('postcode') is-invalid @enderror" id="postcode"
                                       aria-describedby="postcode" value="{{ old('postcode') }}">
                                @error('postcode')
                                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="city">Gemeente</label>
                                <input name="city" type="text" class="form-control @error('city') is-invalid @enderror" id="city"
                                       aria-describedby="name" value="{{ old('city') }}">
                                @error('city')
                                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
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
                        <label for="motivation">Motivatie</label>
                        <textarea name="motivation" class="form-control @error('motivation') is-invalid @enderror" id="motivation"
                                  aria-describedby="motivation" rows="7">{{ old('motivation') }}</textarea>
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
                    <div class="form-group">
                        <label for="password_confirmation">Bevestig wachtwoord</label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                    </div>

                    <button type="submit" class="btn btn-danger mt-3">Registreer</button>
                </form>
            </div>
        </div>
    </div>

@endsection
