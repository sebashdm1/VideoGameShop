<div class="card-body">
    <form method="POST" action="/admin/users/{{$user->id}}"> <!-- se utilizan metodos para variar la url con respecto a store y put y asi reutilizar el form-->
        @csrf <!--token para pasar la verificacioin de seguridad-->
        @method('put')

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="userName" class="col-md-4 col-form-label text-md-right">{{ __('Nombre usuario') }}</label>

            <div class="col-md-6">
                <input id="userName" type="text" class="form-control @error('userName') is-invalid @enderror" name="userName" value="{{ $user->userName }}" required autocomplete="userName" autofocus>

                @error('userName')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>


        <div>
            <label for="roles[]" class="col-md-4 col-form-label text-md-right">{{ __('Seleccionar rol') }}</label>
        @foreach($roles as $role)
                 <div class="form-check" align="center">
                    <input type="checkbox" name="roles[]" value="{{$role->id}}">
                    <label>{{$role->name}}</label>
                 </div>
        @endforeach
        </div>


        <div class="form-group row">
            <p>Habilitar usuario:</p><br/>
            <label for="yes" class="col-md-4 col-form-label text-md-right">{{ __('Si') }}</label><br/>

            <div class="col-md-1">
                <input id="yes" type="radio" class="form-control @error('yes') is-invalid @enderror" name="isBlocked" value="0" required autocomplete="yes">

                @error('yes')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <label for="yes" class="col-md-4 col-form-label text-md-right">{{ __('No') }}</label>

            <div class="col-md-1">
                <input id="no" type="radio" class="form-control @error('no') is-invalid @enderror" name="isBlocked" value="1" required autocomplete="no">

                @error('no')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Actualizar') }}
                </button>
            </div>
        </div>
    </form>
</div>
