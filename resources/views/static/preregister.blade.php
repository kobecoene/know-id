@extends('templates.main')

@section('content')
<div class="preregisterContainer">
    <h1>Ik registreer als...</h1>
    <div class="row mb-3">
        <div class="col-md-5">
            <button class="btn btn-primary" type="button"
                    onclick="document.getElementById('werknemer').style.display = 'block';
                        document.getElementById('werkgever').style.display = 'none';">
                Werknemer
            </button>
        </div>
        <div class="col-md-5">
            <button class="btn btn-primary" type="button"
                    onclick="document.getElementById('werkgever').style.display = 'block';
                        document.getElementById('werknemer').style.display = 'none';">
                Werkgever
            </button>
        </div>
    </div>

    <section class="tutorial werknemer" id="werknemer" style="display:none">
        <div class="row">
            <div class="col-md-5">
                <p class="card p-3">Op zoek naar werk binnen een creatief & multidisciplinair team om projecten voor bedrijven te
                    realiseren?</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <p class="card p-3">Registreer aan de hand van jouw portfolio, CV & motivatie.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <p class="card p-3">Krijg een expertiseniveau badge toegewezen.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <p class="card p-3">Verwerf badges door het realiseren van projecten.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <p class="card p-3">Jouw feed van nieuwe projecten wordt gefilterd naargelang jouw verworven badges.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <p class="card p-3">Iets voor jou?
                    Maak nu je profiel aan en ontdek de vele openstaande projecten!
                    <a href="{{ route('register') }}" class="btn btn-outline-primary pt-1">Registreer</a>
                </p>
            </div>
        </div>

    </section>
    <section class="tutorial werkgever" id="werkgever" style="display:none">
        <div class="row">
            <div class="col-md-5">
                <p class="card p-3">Op zoek naar een creatief &  multidisciplinair team om jouw project te realiseren?</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <p class="card p-3">Registreer je bedrijf en jouw project adhv het aanmeldformulier.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <p class="card p-3">Ontdek de vele werkkrachten die staan te springen om jouw project tot een goed einde te brengen! </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <p class="card p-3">Onze matchmakers zorgen voor een  optimaal team. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <p class="card p-3">Iets voor jou?
                    Maak nu je bedrijfsprofiel aan en registreer je eerste project.
                    <a href="{{ route('register') }}" class="btn btn-outline-primary pt-1">Registreer</a>
                </p>
            </div>
        </div>
    </section>
</div>
@endsection
