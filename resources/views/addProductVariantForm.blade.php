@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4 style="color: #11aaee;">Add Product Size Variant for {{ $product->product }}</h4></div>

                <div class="panel-body">

                    <p>Enter Product Size Variant details below:</p><br>
                    <form enctype="multipart/form-data" method="POST" action="/newProductVariant">
                      {!! csrf_field() !!}
                      @if(count($errors) > 0)
                      <div class="alert alert-danger">
                        <ul>
                          @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>

                      @endif

                      <div class="form-group">
                        <label for="size">Pack Size:</label>
                        <input type="text" name="size" id="size" class="form-control" value="{{ old('size') }}" required/>
                      </div>

                      <div class="form-group">
                        <label for="price">Price Per Pack:</label>
                        <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}" required/>
                      </div>

                      <input type="hidden" name="id" value="{{ $product->id }}">

                      <div class="form-group">
                        <br>
                        <div class="form-group">
                                <button type="submit" class="btn btn-success">ADD PRODUCT SIZE VARIANT</button> 
                        </div>
                      </div>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
