@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4 style="color: #11aaee;">Remove Slider</h4></div>

                <div class="panel-body">

                    <p>Below is list of active Sliders, click on REMOVE SLIDER to deactive them slider.</p>

                    <div class="col-md-12">
                        @foreach($slides as $slide)
                            <br>
                            <h4 style="padding-bottom: 10px;">{{$slide->title}}</h4>
                            <img src="{{ asset($slide->image) }}" height="200"><img src="{{ asset($slide->bg_image) }}" height="200" style="padding-right: 20px">
                            <button id="btn" class="btn btn-danger" onclick="location.href = '/removeSlider/{{$slide->id}}';">REMOVE SLIDER</button>
                            <br><hr>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
