@extends('layouts.mainlayout')
@section('main')

    @foreach($posts as $post)
     <h1>{{ $post->title }}</h1>
    @endforeach
@endsection