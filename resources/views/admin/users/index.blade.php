@extends('templates.main')

@section('content')

    <div class="userContainer">

        <div class="row">
            <div class="col-12">
                <h1 class="float-left">Users</h1>
                <a href="{{ route('admin.users.create') }}" class="btn btn-sm btn-success float-right mb-2"
                   role="button">Create</a>
            </div>
        </div>

        <div class="card">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Naam</th>
                    <th scope="col">Email</th>
                    <th scope="col">Acties</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-primary"
                               role="button">Edit</a>
                            <button type="button" class="btn btn-sm btn-danger"
                                    onclick="event.preventDefault();
                                    document.getElementById('delete-user-form-{{ $user->id }}').submit()">
                                Delete
                            </button>
                            <form id="delete-user-form-{{ $user->id }}" action="{{ route('admin.users.destroy', $user->id) }}" method="post"
                                  style="display: none;">
                                @csrf
                                @method("DELETE")
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>

@endsection
