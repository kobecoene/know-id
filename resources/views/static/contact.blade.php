@extends('templates.main')

@section('content')
    <div class="contactContainer">
        <div class="row d-flex align-center justify-content-center">
            <div class="col-lg-6">
                <div class="illustration">
                    Image
                </div>
            </div>

            <div class="col-lg-6">
                <h2>Contacteer ons</h2>
                <form>
                    @csrf
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input type="text" class="form-control" id="name" aria-describedby="name">
                    </div>
                    <div class="form-group">
                        <label for="subject">Onderwerp</label>
                        <input type="text" class="form-control" id="subject">
                    </div>
                    <div class="form-group">
                        <label for="message">Bericht</label>
                        <textarea class="form-control" id="message" rows="7"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-primary w-100 mt-2">VERSTUUR</button>
                </form>
            </div>
        </div>
    </div>
@endsection
