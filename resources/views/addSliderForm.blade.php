@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4 style="color: #11aaee;">Add Slider</h4></div>

                <div class="panel-body">

                    <p>Enter Slider details below:</p><br>
                    <form enctype="multipart/form-data" method="POST" action="/newSlider">
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

                      <div class="form-group ">
                        <label for="slider_image">Slider Image: <small>(HINT: 485px X 618px) </small></label>
                        <input type="file" name="image" id="image" class="form-control" required/>
                        
                      </div>
                      <div class="form-group ">
                        <label for="slider_bakground">Slider Background: <small>(HINT: 1080px X 620px) </small></label>
                        <input type="file" name="bg_image" id="bg_image" class="form-control" required/>
                        
                      </div>

                      <div class="form-group">
                        <label for="title">Slider Title:</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                      </div>

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
                        <label for="fact_1">Fact 1:</label>
                        <input type="text" name="fact_1" id="fact_1" class="form-control" value="{{ old('fact_1') }}" required>
                      </div>

                      <div class="form-group">
                        <label for="fact_2">Fact 2:</label>
                        <input type="text" name="fact_2" id="fact_2" class="form-control" value="{{ old('fact_2') }}" required>
                      </div>

                      <div class="form-group">
                        <br>
                        <div class="form-group">
                                <button type="submit" class="btn btn-success">ADD SLIDER</button> 
                        </div>
                      </div>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
