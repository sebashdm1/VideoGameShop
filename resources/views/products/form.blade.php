<div class="card-body">
    <form method="POST" action="{{ route($product->url(),$product->id) }}" @submit="Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})"> <!-- se utilizan metodos para variar la url con respecto a store y put y asi reutilizar el form-->
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
                <label for="ProductCategory" class="col-md-4 col-form-label text-md-right">{{ __('Categoria Producto') }}</label>
                <select  name="ProductCategory" >
                    @foreach($ProductCategories as $ProductCategory)
                 <option value="{{$ProductCategory->id}}">{{$ProductCategory->title}}</option>
                    @endforeach
                </select>
            </div>


        <div class="form-group row">
            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Valor unitario') }}</label>

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


        <div class="form-group row">
            <label for="slug" class="col-md-4 col-form-label text-md-right">{{ __('slug') }}</label>

            <div class="col-md-6">
                <input id="test" type="text" class="form-control @error('slug') is-invalid @enderror" name="slug"  value="{{$product->slug}}" required autocomplete="slug">

                @error('slug')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>


        <div class="form-group row">
            <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Stock') }}</label>

            <div class="col-md-6">
                <input id="stock" type="number" class="form-control @error('stock') is-invalid @enderror" name="stock"  value="{{$product->stock}}" required autocomplete="stock">

                @error('stock')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary" >
                    {{ __('Guardar') }}
                </button>
            </div>
        </div>
    </form>
</div>

