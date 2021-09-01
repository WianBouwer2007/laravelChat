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
                </p><br>
                <p>Welcome to the test page created</p><br>
                <h2>Please fill in the form</h2>
                <form action="{{ route('messages.store') }}" method="POST">
        @csrf
        <div class="form-group">
        
            <input type="text" id="name" name="name" class="form-control" placeholder="Name" required style="padding:10px;border: 1px solid black;margin-top: 2em;margin-bottom: 2em;">
        </div>
        <div class="form-group">
            
            <input type="textarea" id="content" name="content" class="form-control" placeholder="Content" required style="padding:10px;border: 1px solid black;margin-bottom: 2em;">
        </div>
        <button type="submit" id="submit" class="btn btn-primary" style="border: 1px solid;padding: 10px;background: green;color: white;">Send Message</button>
    </form>
            </div>
        </section>
    </div>
</main>
@endsection
