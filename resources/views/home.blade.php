@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Dashboard
            </header>

            <div class="w-full p-6">
                <p class="text-gray-700">
                    You are logged in {{ Auth::user()->name }}! 
                </p><br><br>
                <p style="border-top:1px solid grey;padding-top:30px;">Welcome to the test page created</p><br>
                <p>Navigation is created for the different pages ontop in menu called</p><br>
                <ul>
                    <li>Messages</li>
                    <li>Create Messages</li>
                    <li>Home</li>
                </ul>
          
</main>
@endsection
