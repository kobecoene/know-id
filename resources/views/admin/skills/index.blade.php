@extends('templates.main')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Skills</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-success mb-3" href="{{ route('admin.skills.create') }}"> Nieuwe skill toevoegen</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>#id</th>
            <th>Naam</th>
            <th width="280px">Acties</th>
        </tr>

        @foreach ($skills as $skill)

            <tr>
                <td>{{ $skill->id }}</td>
                <td>{{ $skill->name }}</td>
                <td>
                    <form action="{{ route('admin.skills.destroy', $skill->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('admin.skills.edit',$skill->id) }}">Wijzig</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Verwijder</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $skills->links() !!}

@endsection
