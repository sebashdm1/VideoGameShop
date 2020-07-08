@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h5>{{ $user->name }}</h5>

                    </div>
                    <div class="card-body">

                        <div class="form-group row">
                            <h6>{{ __('Nombre usuario: ') }}</h6>
                            <div class="col-md-8">
                               {{ $user->userName }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6>{{ __('Correo Electronico: ') }}</h6>
                            <div class="col-md-8">
                                {{ $user->email}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6>{{ __('Usuario desde: ') }}</h6>
                            <div class="col-md-8">
                                {{ $user->created_at }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6>{{ __('Estado: ') }}</h6>
                            <div class="col-md-8">
                               @if($user->isBlocked == 0)
                                   <h6>Habilitado</h6>
                                @else
                                    <h6>Inhabilitado</h6>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6>{{ __('Rol: ') }}</h6>
                            <div class="col-md-8">
                                {{implode(',',$user->roles()->get()->pluck('name')->toArray())}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
