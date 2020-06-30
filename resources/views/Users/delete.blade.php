<form method="POST" class="float-left" action="{{ route('admin.users.destroy',$user->id) }}" onsubmit="return confirm('desea eliminar el usuario?')">
    @csrf <!--token para pasar la verificacioin de seguridad-->
        @method('delete')

                <button type="submit" class="btn btn-danger">
                    {{ __('Eliminar') }}
                </button>

</form>

