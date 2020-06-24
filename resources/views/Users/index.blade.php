@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Administrar usuarios</h1>
                <table class="table">
                    <tr>
                        <td>Nombre</td>
                        <td>Nombre de usuario</td>
                        <td>Email</td>
                        <td>Acciones</td>
                    </tr>

                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->userName}}</td>
                            <td>{{$user->email}}</td>
                            <td><a class="btn btn-primary" href="/users/{{$user->id}}/edit">Editar</a> | @include('Users.delete')</td>

                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
@endsection
