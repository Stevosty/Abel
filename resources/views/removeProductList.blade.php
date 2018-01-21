@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading"><h4 style="color: #11aaee;">Remove a Product</h4></div>

                <div class="panel-body">
                    <table class="table">
                      <tbody>
                        @foreach($products as $product)
                        <tr>
                          <th scope="row"></th>
                          <td><h4 style="padding-bottom: 10px;">{{$product->product}}</h4>
                        <img src="{{ asset($product->image) }}" height="300"/></td>
                          <td><br>
                            <form enctype="multipart/form-data" method="POST" action="/saveProductEdit">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                  <label for="desc">Product Description:</label>
                                  <textarea name="desc" class="form-control" id="textarea">
                                      {!!$product->desc!!} 
                                  </textarea>
                              </div>
                              <input type="hidden" name="id" value="{{$product->id}}">
                              <div class="form-group">
                                    <div class="form-group">
                                            <button type="submit" class="btn btn-success">UPDATE</button> 
                                    </div>
                                  </div>
                              </form> 
                          </td>
                          <td><br><br><br><br><button id="btn" class="btn btn-danger" onclick="location.href = '/removeProductId/{{$product->id}}';">REMOVE PRODUCT</button></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


