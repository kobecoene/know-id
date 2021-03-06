@extends('templates.main')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Projecten</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-success mb-3" href="{{ route('admin.projects.create') }}"> Nieuw project aanmaken</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>#id</th>
            <th>Naam</th>
            <th>Bedrijf</th>
            <th width="280px">Acties</th>
        </tr>

        @foreach ($projects as $project)

            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->name }}</td>
                <td>{{ $project->author }}</td>
                <td>
                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('admin.projects.edit',$project->id) }}">Wijzig</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Verwijder</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $projects->links() !!}

@endsection
