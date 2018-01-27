

@extends('beautymail::templates.ark')

@section('content')

    @include('beautymail::templates.ark.heading', [
		'heading' => 'Order Details',
		'level' => 'h1'
	])

    @include('beautymail::templates.ark.contentStart')

        <h4 class="secondary"><strong>Order No. </strong></h4>

    @include('beautymail::templates.ark.contentEnd')

    @include('beautymail::templates.ark.contentStart')


            <table class="table table-hover">
{{--               <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Buyer Details</th>
                  <th scope="col">Order Details</th>
                  <th scope="col"> <span style="float: right;">Action</span></th>
                </tr>
              </thead> --}}
              <tbody>
              	@foreach(Session::get('items') as $item)
                <tr>
                  <td>
                  	<img src="{{ asset($item['image']) }}" height="150" width="150">
                  </td>
                  <td> 
                    
                        <big style="color:#800088;">{{$item['product'] }}</big>
                        <br><strong> Qty:</strong> {{$item['quantity'] }} 
                        <br><strong> Pack:</strong> {{$item['size'] }} @ {{number_format($item['price'] ,2)}} 
                        <br><strong> Sub Total:</strong> {{number_format($item['min_total'] , 2)}} 
                        <br><br>
                  </td>
                </tr>
                
                @endforeach
                <tr>
                	<td>
                		<span style="float: right;"><strong > Order Total:</strong> {{number_format(Session::get('sub_total'), 2)}} </span>
                    	<br><span style="float: right;"><strong > VAT:</strong> {{number_format(Session::get('vat'), 2)}} </span>
                    	<br><span style="float: right;"><strong > Order Total + VAT:</strong> {{number_format(Session::get('total'), 2)}}</span>
                    	<br><br>
                  	</td>
                </tr>
              </tbody>
            </table>

    @include('beautymail::templates.ark.contentEnd')

@stop