<form method="POST" class="float-left" action="{{ route('products.destroy',$product->id) }}" onsubmit="return confirm('desea eliminar el producto?')">
@csrf <!--token para pasar la verificacioin de seguridad-->
    @method('delete')

    <button type="submit" class="btn btn-danger">
        {{ __('Eliminar') }}
    </button>

</form>
