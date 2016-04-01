@extends('master')
@section('header')
<a href="{{url('/')}}">Back to overview</a>
<h2>
		{{{$cat->name}}}
	</h2>
<a href="{{url('cats/'.$cat->id.'/edit')}}">
    <span class="glyphicon glyphicon-edit"></span>
</a>
<a href="{{url('cats/'.$cat->id.'/delete')}}">
    <span class="glyphicon glyphicon-trash"></span>
</a>
Last edited: {{$cat->updated_at}}
@stop

@section('content')
<p>Date of Birth: {{$cat->date_of_birth}}</p>
<p>
    @if($cats->breed) Breed: {{link_to('cats/breeds/'.$cat->breed->name, $cat->breed->name)}}
    @endif
</p>
@stop
