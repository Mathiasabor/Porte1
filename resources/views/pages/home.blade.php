@extends('base')
@section('content')
        @section('title')
        Hello city
        @endsection

        <img src="{{asset('/images/b4.jpg')}}" alt="capture4" class="rounded shadow-md">
        <h1 class=" mt-5 text-5xl font-semibold text-indigo-600"> hello from togo</h1>
        <p class="text-lg text-gray-800"> il est maintenant {{ date('h: i A')}}</p>
       
      
@endsection
