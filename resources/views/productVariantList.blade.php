@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4 style="color: #11aaee;">Add Product Size Variant</h4></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Click on a Product to Add a Size Variant.</p>
                    <div class="list-group">
                        @foreach($products as $product)
                            <a href="/addProductVariant/{{$product->id}}" class="list-group-item list-group-item-action">
                                <big style="color: #ff0080;"> {{$product->product}} </big> has -
                                @foreach($product->size as $sizes)
                                    <strong style="color: #800090">{{$sizes->size}}</strong> @ Ksh. {{number_format($sizes->price,2)}}, 
                                @endforeach 
                            </a>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
