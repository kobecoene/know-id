@extends('templates.main')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Badges</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-success mb-3" href="{{ route('admin.badges.create') }}">Nieuwe badge maken</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>#id</th>
            <th>Foto</th>
            <th>Naam</th>
            <th width="280px">Acties</th>
        </tr>

        @foreach ($badges as $badge)

            <tr>
                <td>{{ $badge->id }}</td>
                <td><img src="/images/badges/{{ $badge->image }}" width="100px"></td>
                <td>{{ $badge->name }}</td>
                <td>
                    <form action="{{ route('admin.badges.destroy', $badge->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('admin.badges.edit',$badge->id) }}">Wijzig</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Verwijder</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $badges->links() !!}

@endsection
