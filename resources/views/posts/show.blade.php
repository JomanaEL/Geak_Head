@extends('layouts.app' )
@section('content')

<h1>{{$post->title}}</h1>
      <div>
          {!! $post->body !!}
      </div>
<br>
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
        <hr>
        <a href="/posts" class="btn" id="Button">Go Back</a>
@if (!Auth::guest())
  @if (Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn float-right" id="Button">Edit</a>
        {!!Form::open(['action'=> ['PostsController@destroy', $post->id], 'method'=>'POST', 'class' => 'float-right'])!!}
          {{Form::hidden('_method','DELETE')}}
          {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
        {!!Form::close()!!}
  @endif      
@endif
@endsection