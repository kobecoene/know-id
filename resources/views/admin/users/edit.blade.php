@extends('templates.main')

@section('content')
    <h1>Wijzig gebruiker</h1>

    <div class="card">

        <form method="post" action="{{ route('admin.users.update', $user->id) }}" class="form-control p-4">
            @method('PATCH')
            @include('admin.users.partials.form')
        </form>
    </div>
@endsection
