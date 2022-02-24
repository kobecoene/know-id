@extends('templates.dashboard')

@section('content')

    <div class="dashboardContainer">
        <h1>User Dashboard</h1>
        <div class="row">
            <div class="col-md-5">
                <a href="#" class="btn btn-outline-primary text-uppercase">Vind nieuwe projecten</a>
            </div>
            <div class="col-md-5 offset-2">
                <h1>Mijn projecten</h1>
                <p>Je hebt momenteel nog geen projecten volbracht of lopend.
                    Vul je gegevens verder aan om meer specifieke opdrachten te krijgen</p>
                <a href="#" class="btn btn-outline-primary text-uppercase">Vind nieuwe projecten</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card p-5">
                    <h3>Dag {{ $user->name }}</h3>
                    <p>Email: {{ $user->email }}</p>
                    <p>Password: ● ● ● ● ● ●</p>
                </div>
                <a href="{{ route('user.profile') }}" class="btn btn-outline-primary w-100 mt-2">Pas gegevens aan</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Mijn badges</h2>
                <p>Je hebt momenteel geen badges toegewezen gekregen</p>

                <a href="{{ route('user.profile') }}" class="btn btn-outline-primary w-100 mt-2">bekijk alle badges</a>
            </div>
        </div>
    </div>

@endsection
