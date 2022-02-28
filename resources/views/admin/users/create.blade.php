@extends('templates.main')

@section('content')
    <h1>Nieuwe gebruiker aanmaken</h1>

    <div class="card">

        <form method="post" action="{{ route('admin.users.store') }}" class="form-control p-4">
            @include('admin.users.partials.form', ['create' => true])
        </form>
    </div>
@endsection
