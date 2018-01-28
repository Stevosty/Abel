

@extends('beautymail::templates.ark')

@section('content')

    @include('beautymail::templates.ark.heading', [
		'heading' => 'Website Enquiry',
		'level' => 'h2'
	])


    @include('beautymail::templates.ark.contentStart')

		<p> From: {{Session::get('name')}}<br><br>
      Email: {{Session::get('email')}}<br><br>
      Subject: {{Session::get('subject')}}<br><br>
     Message: {{Session::get('body')}}

    </p>


    @include('beautymail::templates.ark.contentEnd')


@stop