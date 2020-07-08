@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Administrar Usuarios') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Nombre de usuario</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>

                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->userName}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{implode(',',$user->roles()->get()->pluck('name')->toArray())}}</td>
                                    @if($user->isBlocked == 0)
                                    <td>Habilitado</td>
                                    @else
                                        <td>Inhabilitado</td>
                                    @endif

                                    <td><a class="btn btn-warning float-left" href="/admin/users/{{$user->id}}">Ver</a><a class="btn btn-primary float-left" href="/admin/users/{{$user->id}}/edit">Editar</a>@include('Users.delete')</td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
