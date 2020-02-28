@extends('layouts.intern')

@section('title', '| Home')

@section('content')
  
  @include('intern.posts.create-post')
  @include('intern.posts.index')

 
@endsection


