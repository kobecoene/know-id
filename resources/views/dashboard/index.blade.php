@extends('templates.dashboard')

@section('content')

    <div class="dashboardContainer">
        <div class="row">
            <div class="col-md-5">
                <a href="#" class="btn btn-secondary text-uppercase w-100 btn-lg text-white">Vind nieuwe projecten</a>
            </div>
            <div class="col-md-5 offset-2">
                <h1>Mijn projecten</h1>
                <p>Je hebt momenteel nog geen projecten volbracht of lopend.
                    Vul je gegevens verder aan om meer specifieke opdrachten te krijgen</p>
                <a href="#" class="btn btn-outline-danger w-75 text-uppercase">Vind nieuwe projecten</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card p-5">
                    <h3>Dag {{ $user->firstname }}</h3>
                    <p>Familienaam: {{ $user->name }}</p>
                    <p>Postcode: {{ $user->postcode }}</p>
                    <p>Gemeente: {{ $user->city }}</p>
                    <p>Email: {{ $user->email }}</p>
                    <p>Password: ● ● ● ● ● ●</p>
                </div>
                <a href="{{ route('user.profile') }}" class="btn btn-outline-danger w-100 mt-2">Pas gegevens aan</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Mijn badges</h2>
                <p>Je hebt momenteel nog geen badges toegewezen gekregen</p>

                <a href="{{ route('user.profile') }}" class="btn btn-outline-danger w-100 mt-2">bekijk alle badges</a>
            </div>
        </div>
    </div>

@endsection
