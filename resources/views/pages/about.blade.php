@extends('base')
@section('content')
    @section('title')
        About us | Hello city
    @endsection
        <img src="{{asset('/images/b6.png')}}" alt="capture6">
        <h2 class="mb-5 text-gray-700">
            Built with <span class="text-pink-500">&hearts;</span> by les étudiants de l'UCAO
         </h2>
         
        <p class="text-indigo-500 hover:text-indigo-600 underline ">
            <a href="/">Page d'accueil</a>
        </p>
     
 @endsection
