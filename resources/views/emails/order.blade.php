@extends('beautymail::templates.widgets')

@section('content')

	@include('beautymail::templates.widgets.articleStart')

		<h4 class="secondary"><strong>Your Order Details</strong></h4>
		@foreach(Session::get('items') as $item)
            <div class="row ">
                <div class="column one-fifth ">
                   <img src="{{ asset($item['image']) }}" height="150" width="150">
                </div>

                <div class="column one-fifth ">
                   <br><h5>{{ $item['product'] }} </h5> 
                </div>

                <div class="column one-fifth ">
                    <br><h5>{{ $item['size'] }} @ <sup>Ksh</sup> <strong>{{ number_format($item['price'],2) }}</strong> </h5>
                </div>

                <div class="column one-fifth ">
                    
                        <br><p> {{ $item['quantity'] }}</p>
                    
                </div>

                <div class="column one-fifth ">
                    <br><h4 class="amount" style="float: right;"> <sup style="color: #f80000">Ksh</sup> <strong style="color: #f80000">{{ number_format($item['min_total'],2) }} </strong> 
                    </h4>
                    
                </div>
            </div>
            <hr style="clear:both;" /> 
            @endforeach
            <div class="column one-fourth" style="float: right;">
                <h4>Sub Total: <strong style="float: right;">{{number_format(Session::get('subTotal'),2)}}</strong></h4>
                <h4>VAT: <strong style="float: right;">{{number_format(Session::get('tax'),2)}}</strong></h4>
                <h4 style="color: #f80000" >TOTAL: <strong style="float: right;">{{number_format(Session::get('total'),2)}}</strong></h4><br>
     
            </div>

	@include('beautymail::templates.widgets.articleEnd')


	@include('beautymail::templates.widgets.newfeatureStart')

		<h4 class="secondary"><strong>Hello World again</strong></h4>
		<p>This is another test</p>

	@include('beautymail::templates.widgets.newfeatureEnd')

@stop