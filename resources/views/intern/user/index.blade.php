@extends('layouts.intern')
@section('title', '| MyProfile')

@section('content')
<div class="profile-container">	
	@include('intern.user.user-header')
	@include('intern.user.user-posts')
</div>
 


@yield('content')
@endsection



 