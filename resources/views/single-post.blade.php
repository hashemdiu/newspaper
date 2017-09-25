@extends('layouts.mainlayout')
@section('main')
 <h1>{{ $singlePost->title }}</h1>
 <div>
     @foreach($singlePost->categories as $category)
         <span class="label label-success">{{ $category->category_name }}</span>
     @endforeach
 </div>

{!!
     $singlePost->content
!!}
@endsection