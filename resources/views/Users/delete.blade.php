<form method="POST" action="{{ route('users.destroy',$user->id) }}" onsubmit="return confirm('desea eliminar el usuario?')"> <!-- se utilizan metodos para variar la url con respecto a store y put y asi reutilizar el form-->
    @csrf <!--token para pasar la verificacioin de seguridad-->
        @method('delete')

                <button type="submit" class="btn btn-danger">
                    {{ __('Eliminar') }}
                </button>

</form>

