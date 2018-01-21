@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h4 style="color: #11aaee;">Orders</h4></div>

                <div class="panel-body">
                    @if(!empty($orders))
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th scope="col">No.</th>
                              <th scope="col">Buyer Details</th>
                              <th scope="col">Order Details</th>
                              <th scope="col"> <span style="float: right;">Action</span></th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($orders as $order)
                            <tr>
                              <td>{{ $order->id }}</td>
                              <td><big style="color:#44aaee;">{{ ucwords($order->buyer->name) }}</big> <br> {{ $order->buyer->email }} <br> {{ $order->buyer->phone }}
                                <br><br><strong>Order Date:</strong><br>
                                {{ Carbon\Carbon::parse($order->created_at)->format('H:i, D jS, M') }}
                              </td>
                              <td> 
                                @foreach($order->item as $item)
                                    <big style="color:#800088;">{{$loop->iteration}}. {{$item->size->product->product}}</big>
                                    <br><strong> Qty:</strong> {{$item->quantity}} 
                                    <br><strong> Pack:</strong> {{$item->size->size}} @ {{number_format($item->size->price,2)}} 
                                    <br><strong> Sub Total:</strong> {{number_format($item->min_total, 2)}} 
                                    <br><br>
                                @endforeach
                                <span style="float: right;"><strong > Order Total:</strong> {{number_format($order->sub_total, 2)}} </span>
                                <br><span style="float: right;"><strong > VAT:</strong> {{number_format($order->vat, 2)}} </span>
                                <br><span style="float: right;"><strong > Order Total + VAT:</strong> {{number_format($order->total, 2)}}</span>
                                <br><br>
                              </td>
                              <td><a href="/completeOrder/{{$order->id}}" ><span style="float: right;">Mark <br>as <br>Complete</span></a></td>
                            </tr>
                          @endforeach
                          </tbody>
                        </table>
                    @else
                        <h4>There are no orders in the system at the moment.</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
