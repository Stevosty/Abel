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

                    <p>Select Product Category</p>
                    <div class="list-group">
                        @foreach($groups as $group)
                            <a href="/productVariant/{{$group->id}}" class="list-group-item list-group-item-action">
                                <big style="color: #ff0080">{{$group->group}}</big></a>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
