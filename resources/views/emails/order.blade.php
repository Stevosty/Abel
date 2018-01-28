

@extends('beautymail::templates.ark')

@section('content')

    @include('beautymail::templates.ark.heading', [
		'heading' => 'Prodigy Healthcare Order',
		'level' => 'h2'
	])

    @include('beautymail::templates.ark.contentStart')

        <h4 class="secondary"><strong>Hello  {{Session::get('name')}},</strong></h4>
        <br>
        <p class="secondary"><strong>Your order is as follows;</strong></p>

    @include('beautymail::templates.ark.contentEnd')

    @include('beautymail::templates.ark.contentStart')

		<p> Order No.: {{Session::get('orderNo')}}</p>
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
                	<td></td>
                	<td></td>
                	<td>
                		<span "><strong > Order Total:</strong>Ksh. {{number_format(Session::get('subTotal'), 2)}} </span>
                    	<br><span "><strong > VAT:</strong>Ksh. {{number_format(Session::get('tax'), 2)}} </span>
                    	<br><span "><strong > Total + VAT:</strong>Ksh. {{number_format(Session::get('total'), 2)}}</span>
                    	<br><br>
                  	</td>
                </tr>
              </tbody>
            </table>

    @include('beautymail::templates.ark.contentEnd')

     @include('beautymail::templates.ark.contentStart')

        <h4 class="secondary" style="text-align: center;"><strong>Thank You</strong></h4>
        <p style="text-align: center;">&copy;
          <?php
            date_default_timezone_set('Africa/Nairobi');
            $time = date("Y");
            echo $time;
          ?>
           PRODIGY HEALTHCARE 
        </p>

    @include('beautymail::templates.ark.contentEnd')

@stop