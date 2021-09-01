<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>Messages</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Styles -->
<link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>Messages Create</title>
</head>

<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-blue-900 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'Laravel') }}
                        
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form><br><br>
                    @endguest
                    <a class="no-underline hover:underline" href="{{ url('/messages') }}">Messages</a>
                    <a class="no-underline hover:underline" href="{{ url('/home') }}">Home</a>
                </nav>
            </div>
        </header>
    <h1 style="font-size:20px; text-align:center;margin-top:5em;padding-bottom:2em;" >Create Message</h1>
    
    <form action="{{ route('messages.store') }}" method="POST" style="text-align:center;">
        @csrf
        <div class="form-group">
        
            <input type="text" id="name" name="name" class="form-control" placeholder="Name" required style="padding:10px;border: 1px solid black;margin-top: 2em;margin-bottom: 2em;">
        </div>
        <div class="form-group">
            
            <input type="textarea" id="content" name="content" class="form-control" placeholder="Content" required style="padding:10px;border: 1px solid black;margin-bottom: 2em;">
        </div>
        <button type="submit" id="submit" class="btn btn-primary" style="border: 1px solid;padding: 10px;background: green;color: white;">Send Message</button>
    </form>
</body>
</html>