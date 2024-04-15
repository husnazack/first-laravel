@extends('layouts.app')
{{-- including template from app.blade.php --}}

@section('content')
{{-- to grab content in class container --}}

<h1>Contact Page</h1>

@if (count($people))

    <ul>

    @foreach ($people as $person)
    <li>{{$person}}</li> 
    @endforeach
    
    </ul>

@endif
    
@endsection
{{-- alternate, @stop --}}



{{-- @section('footer')

<script>alert('Hello')</script>
    
@endsection --}}