<div class="card-body">
    <form method="POST" action="{{ route($product->url(),$product->id) }}"> <!-- se utilizan metodos para variar la url con respecto a store y put y asi reutilizar el form-->
    @csrf <!--token para pasar la verificacioin de seguridad-->
        @method($product->method())

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre Producto') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $product->name }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="categoria" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>

            <div class="col-md-6">
                <input id="categoria" type="text" class="form-control @error('categoria') is-invalid @enderror" name="console" value="{{ $product->category_id }}" required autocomplete="console" autofocus>

                @error('categoria')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Valor') }}</label>

            <div class="col-md-6">
                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price }}" required autocomplete="price">

                @error('price')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

            <div class="col-md-6">
                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description"  value="{{$product->description}}" required autocomplete="description">

                @error('description')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Guardar') }}
                </button>
            </div>
        </div>
    </form>
</div>
