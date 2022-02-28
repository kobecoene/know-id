@extends('templates.dashboard')

@section('content')
    <h1>Update profiel</h1>

    <form method="post" action="{{ route('user-profile-information.update') }}" class="w-50">
        @csrf
        @method("PUT")
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="firstname">Voornaam</label>
                    <input name="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname"
                           aria-describedby="firstname" value="{{ auth()->user()->firstname }}">
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
                           aria-describedby="name" value="{{ auth()->user()->name }}">
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
                           aria-describedby="postcode" value="{{ auth()->user()->postcode }}">
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
                           aria-describedby="city" value="{{ auth()->user()->city }}">
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
                   aria-describedby="email" value="{{ auth()->user()->email }}">
            @error('email')
            <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">Opslaan</button>
    </form>
@endsection
