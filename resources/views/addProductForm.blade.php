@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4 style="color: #11aaee;">Add Product</h4></div>

                <div class="panel-body">

                    <p>Enter Product details below:</p><br>
                    <form enctype="multipart/form-data" method="POST" action="/newProduct">
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
                        <label for="group">Product Category:</label>
                        <select name="group" id="group" class="form-control">
                            @foreach($groups as $group)
                                <option value="{{$group->id}}">
                                    {{$group->group}}
                                </option>
                            @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="product">Product Name:</label>
                        <input type="text" name="product" id="product" class="form-control" value="{{ old('product') }}" required>
                      </div>

                      <div class="form-group">
                        <label for="Product_image">Product Image: <small>(HINT: 700px X 700px) </small></label>
                        <input type="file" name="image" id="image" class="form-control" required/>
                      </div>

                      {{-- <div class="form-group">
                        <label for="desc">Product Description:</label>
                        <textarea name="desc" id="textarea"  required> </textarea>
                      </div> --}}
                      <div class="form-group">
                          <label for="desc">Product Description:</label>
                          <textarea name="desc" class="form-control" id="textarea">
                              
                          </textarea>
                      </div>

                      <div class="form-group">
                        <label for="size">Pack Size:</label>
                        <input type="text" name="size" id="size" class="form-control" value="{{ old('size') }}" required/>
                      </div>

                      <div class="form-group">
                        <label for="price">Price Per Pack:</label>
                        <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}" required/>
                      </div>

                      <div class="form-group">
                        <label for="type">Product Type:</label>
                        <select name="type" id="type" class="form-control">
                          <option value="ordinary">Ordinary Product</option>
                          <option value="latest">Latest Product</option>
                        </select>
                      </div>



                      <div class="form-group">
                        <br>
                        <div class="form-group">
                                <button type="submit" class="btn btn-success">ADD PRODUCT</button> 
                        </div>
                      </div>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
