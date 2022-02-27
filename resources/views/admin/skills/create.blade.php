@extends('templates.main')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Voeg nieuwe skill toe</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.badges.index') }}">Terug</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.skills.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Titel:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Titel">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <button type="submit" class="btn btn-primary">Opslaan</button>
            </div>
        </div>
    </form>
@endsection
